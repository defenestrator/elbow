<script>
    import {onMount} from "svelte";
    import activePlayers from './players';
    import strains from './strains';
    import spaces from './spaces';
    import bummers from './bummers';
    import farouts from './farouts';

    let state = {
        turnNumber: 1,
        message: "Press 'Start Game'",
        skipped: [],
        activePlayerId: 0,
        currentRoll: 0,
        players: activePlayers,
        bank: {
            strains: strains,
            cash: 150000
        },
        jackpot: {
            cash: 2000
        },
        farouts: farouts,
        bummers: bummers,
        spaces:   spaces,
    }
    
    export let delay = 500

    function currentPlayer() {
        return state.players[state.activePlayerId]
    }

    function mapEvents(e) {
        switch (e) {
            case "pot": return pot()
            case "reducePot": return currentPlayer().discount = true
            case "freePound": return currentPlayer().freePound = true
            case "halfOff":   return currentPlayer().halfOff = true
            case "deal":      
                state.message += ' Dealing Square! ' 
                return owned()
            case "loseTurn":
                state.message += ' They lost a turn '
                return state.skipped.push(state.activePlayerId)
                
            case "bummer":
                let b = bummer()
                state.message +='Bummer! ' + b.title
                return mapEvents(b.effect)

            case "farout":
                let f = farout()
                state.message +='Far Out! ' + f.title
                return mapEvents(f.effect)
            
            case "bumEveryoneOut":
                state.players.forEach(function (player) {
                    player.cash -= 200
                    currentPlayer().cash += 200
                })
                return state.message += ' Each player paid the bad bad bummer boy. $200'

            case "highRoller":
                const roller = dieRoll(1, 6) + dieRoll(1, 6) * 100;
                state.message += ' High Roller! You won $' + roller
                return mapEvents('w' + roller)                

            case "payLefty":
                const lefty = dieRoll(1, 6) + dieRoll(1, 6) * 100;
                currentPlayer().cash -= lefty
                let leftyId = state.activePlayerId - 1
                if (leftyId < 0) {
                    leftyId = state.players.length - 1
                }
                state.message += ' Pay the player to the left $' + lefty
                return state.players[leftyId].cash += lefty

            case "jackpot":
                if (state.jackpot.cash <= 0) {
                    return state.message += 'It says jackpot, but '+ currentPlayer().name + " should think of it as 'Free Parking'"
                }
                state.message = currentPlayer().name + " won $" + state.jackpot.cash + " from the jackpot!"
                currentPlayer().cash +=  state.jackpot.cash
                return state.jackpot.cash = 0

            case "paraquat":
                state.message += ' They got paraquat, this is going to suck. '
                state.skipped.push(state.skipped[state.activePlayerId])
                if (currentPlayer().getOutOfHospital === true) {
                    currentPlayer().getOutOfHospital = false
                    return state.message = currentPlayer().name + " you lucky dog, no hospital trip for you."
                }
                return mapEvents("hospital")
                
            case "hospital":
                currentPlayer().space = 10
                mapEvents("loseTurn")
                mapEvents("x100")
                return drawPlayerPieces()

            case "getOutOfHospital":
                return currentPlayer().getOutOfHospital = true

            default:
                if (e.substring(0, 1) === "x") {
                    let pay = Number(e.substring(1, 5)) * state.currentRoll
                    currentPlayer().cash -= pay
                    state.bank.cash += pay
                    return currentPlayer().cash
                }
                if (e.substring(0, 1) === "l") {
                    let lose = Number(e.substring(1, 5))
                    currentPlayer().cash -= lose
                    state.bank.cash += lose
                    return currentPlayer().cash
                }
                if (e.substring(0, 1) === "w") {
                    let win = Number(e.substring(1, 5))
                    currentPlayer().cash += win
                    state.bank.cash -= win
                    return currentPlayer().cash
                } else {
                    return console.error('unhandled case in mapEvents() ' + e)
                }
        }
    }

    function owned() { 
        //get all strains by player.
        let owned = []
            state.players.forEach(function (player) {
                player.strains.map(function (strain) {
                return owned.push({
                    player: player,
                    price: strain.price,
                    name: strain.name,
                    rent: strain.oz,
                    value: strain.oz * 5
                })
                })
            })
        return owned
    }

    function pot() {
        let bankStrains = state.bank.strains
        for (let i = 0; i < bankStrains.length;) {
            if (bankStrains[i].space == currentPlayer().space) {
                if (bankStrains[i].price < currentPlayer().cash) {                                
                    buyPot(bankStrains[i])
                    state.bank.strains.splice(i, 1) 
                    return 
                } else {
                    state.message += currentPlayer().name + ' did not have enough money for ' + bankStrains[i].name
                }
            }
            i += 1
        }

        for (let i = 0; i < state.players.length;) {
            state.players[i].strains.find(function (s) {
                if (s.space === currentPlayer().space) {
                    if (currentPlayer().strains.includes(s)) {
                        if (currentPlayer().freePound === true) {
                            state.message += ' They got a free pound of ' + s.name
                            return pound(s)
                        }
                        if (s.price < currentPlayer().cash) {
                            state.message += ' They bought a pound of ' + s.name
                            currentPlayer().cash -= s.price
                            state.bank.cash += s.price
                            return pound(s)
                        }
                        return
                    }
                    // and if none of that is true, but the space is owned by a player, currentPlayer has to pay 'rent' on it by buying an ounce.
                    let charge = s.oz
                    //unless they have a discount.
                    if (currentPlayer().discount === true) {
                        charge = Math.round(s.oz / 2)
                    }

                    state.message += ' They paid ' + state.players[i].name + ' $' + charge +
                        ' for ' + s.name
                    currentPlayer().cash -= charge
                    state.players[i].cash += charge
                }
            })
            i += 1
        }
    }

    function pound(strain) {
        // watch this, lol
        if (strain.oz >= strain["5lb"]) {
            strain.oz = strain["5lb"] + strain.price
            return  state.message += strain.name + ' is over 5lb! $' + strain.oz
        }

        if (strain.oz <= strain["2lb"]) {
            if (strain.oz === strain["2lb"]) {
                return strain.oz = strain["3lb"]
            }
            return strain.oz = strain["2lb"]
        }

        if (strain.oz > strain["3lb"]) {
            if (strain.oz === strain["4lb"]) {
                return strain.oz = strain["5lb"]
            }
            return strain.oz = strain["4lb"]
        }
    }

    function buyPot(strain) {
        let charge = strain.price
        if (currentPlayer().halfOff === true) {
            charge = Math.round(strain.price / 2)
        }
        currentPlayer().cash -= charge
        state.bank.cash += charge
        currentPlayer().strains.push(strain)
        state.message += "They bought " + strain.name
    }

    function bummer() {
        let index = Math.floor(Math.random() * state.bummers.length)
        let card = state.bummers[index];
        if (state.bummers.length > 1) {
            state.bummers.splice(index, 1)
            return card
        }
        state.bummers = bummers
        return card
    }

    function farout() {
        let index = Math.floor(Math.random() * state.farouts.length)
        let card = state.farouts[index];
        if (state.farouts.length > 1) {
            state.farouts.splice(index, 1)
            return card
        }
        state.farouts = farouts
        return card
    }

    function dieRoll(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function gameRoll() {
        let first = dieRoll(1, 6)
        let second = dieRoll(1, 6)
        const total = first + second
        state.message += currentPlayer().name + ' rolled ' + first + ' + ' + second + ' = '+ total +'. '
        if (first === second) {            
            currentPlayer().doubles += 1  
            state.message += 'Doubles! Roll again! '
        } else {
            currentPlayer().doubles = 0   
        }
        return state.currentRoll = total
    }

    function startGame() {
        gameRoll()
        state.message = "Turn #1"
        currentPlayer().space = state.currentRoll
        drawPlayerPieces()
        let event = spaces[currentPlayer().space - 1].effect
        mapEvents(event)
        state.message = 'First roll ' + state.currentRoll + ' by ' + currentPlayer().name + ' They are on "' +
            spaces[currentPlayer().space -1].title + '" , with $' + currentPlayer().cash
        return setTimeout(() => {executeTurn()}, delay)
    }

    function calculateSpaceId() {
        const total = currentPlayer().space + state.currentRoll
        if (total >= 40) {
            mapEvents("w500")
        }
        let remainder = total % 40
        //this is silly, why didn't I use zero indexing for the div 
        //ids? refactor html and below someday...
        if (remainder === 0) {
            remainder = 40
        }
        return remainder
    }

    function incrementPlayer() {
        
        state.activePlayerId += 1

        // keep index in sync
        if (state.activePlayerId >= state.players.length) {
            state.activePlayerId = 0
        }
        return currentPlayer()
    }

    function executeTurn() {
        //check for doubles, increment player if not.
        if (! currentPlayer().doubles > 0) {
            incrementPlayer()  
        }
        state.message = ''
        // handle (multiple) skipped turns next, because 
        // players who rolled doubles may also have lost a turn 
        if (state.skipped.includes(state.activePlayerId)) {
            state.skipped.splice(state.skipped.indexOf(state.activePlayerId), 1)
            state.message += "Skipped " + currentPlayer().name + " because they lost a turn "
            return executeTurn()
        }
        
        // then it counds as a turn
        state.turnNumber += 1

        // Drop players with no cash at the beginning of their turn from the game.
        if (currentPlayer().cash < 1) {
            // Reset prices and return strains to bank.
            currentPlayer().strains.forEach(strain => strain.oz = strain.price / 10)
            state.bank.strains = state.bank.strains.concat(currentPlayer().strains)
            // Announce loser
            state.message += ' ' + currentPlayer().name +
            ' was dropped from the game for being broke at the beginning of their turn. '
            state.players.splice(state.players.indexOf(state.players[state.activePlayerId]), 1)
            incrementPlayer()
        }

        // then check for win state
        if (state.players.length === 1) {
            return endGame('winner')
        }

        // check for bank insolvency 
        if (state.bank.cash < 1) {
            return endGame(' bank failure')
        }
            
        // Really, finally, actually start the turn by rolling dice
        gameRoll()
        
        // move player to new space
        currentPlayer().space = calculateSpaceId()
        
         state.message += 'They are on "' + spaces[currentPlayer().space -1].title + '", with $' + currentPlayer().cash +'. '

        // punish the lucky
        if (currentPlayer().doubles >= 3) {
            state.message += ' ' + currentPlayer().name + ' rolled doubles three consecutive times and was sent to the hospital.'
            currentPlayer().doubles = 0
            mapEvents('hospital')
        }

        // update DOM
        drawPlayerPieces()        

        // get the event code
        let event = spaces[currentPlayer().space - 1].effect

        // and fire that shit off
        mapEvents(event)

        // Do it again
        setTimeout(() => {executeTurn()}, delay);
        // return executeTurn()
    }

    function endGame(reason) {
        if (reason == 'winner') {
            let owned = ''

            let winner = state.players[0]
            if (winner.strains.length === 1) {
                owned = winner.strains[0].name
            }

            if (winner.strains.length > 1) {
                for (let i = 0; i < winner.strains.length - 1;) {
                    owned += winner.strains[i].name + ', '
                    i += 1;
                }
                owned += 'and ' + winner.strains[winner.strains.length - 1].name + '. '
            }
            const turn = state.turnNumber
            state.message = " At the beginning of turn " + turn + ": The Winner is " + winner.name + ' with $' + winner
                .cash + ' and ' + winner.strains.length + ' strains. They owned ' + owned
                + 'The bank had $' + state.bank.cash + '. '
            
            let endState = {
                turnNumber: state.turnNumber,
                skipped: state.skipped.length,
                players: state.players,
                bank: {
                    strains: state.strains,
                    cash: state.bank.cash
                },
                jackpot: {
                    cash: state.jackpot.cash
                }
            }
            let result = { message: state.message, state: endState }
            writeEndToLog(result).then() 
            
        } else {
            let bwned = ''
            if (state.bank.strains.length > 1) {

                for (let i = 0; i < state.bank.strains.length - 1;) {
                    bwned += state.bank.strains[i].name + ', '
                    i += 1;
                }
                bwned += 'and ' + state.bank.strains[state.bank.strains.length - 1].name
            }

            if (state.bank.strains.length == 1) {
                bwned = state.bank.strains[0].name
            }

            let statusMessage = 'The bank had $' + state.bank.cash + ' and ' + state.bank.strains.length + ' strains. ' +
                bwned + '. '

            state.players.forEach(function (player) {
                let owned = ''
                if (player.strains.length > 1) {
                    for (let i = 0; i < player.strains.length - 1;) {
                        owned += player.strains[i].name + ', '
                        i += 1;
                    }
                    owned += 'and ' + player.strains[player.strains.length - 1].name
                }

                if (player.strains.length === 1) {
                    owned = player.strains[0].name
                }

                statusMessage += player.name + ' had $' + player.cash + ' and ' + player.strains.length +
                    ' strains. They owned ' + owned + '. '
            })

            state.message = ' On turn #' + state.turnNumber + ': The game was ended for ' + reason + '. ' + statusMessage

            let endState = {
                turnNumber: state.turnNumber,
                skipped: state.skipped.length,
                players: state.players,
                bank: {
                    strains: state.strains,
                    cash: state.bank.cash
                },
                jackpot: {
                    cash: state.jackpot.cash
                }
            }
            
            const result = { message: state.message, state: endState }
            writeEndToLog(result)
        }
        return setTimeout(() => window.location.href = '/potluck', 10000)
    }

    function drawPlayerPieces() {
        for (let i = 40; i > 0; i -= 1) {
            document.getElementById(i).innerHTML = ''
        }
        state.players.forEach(function (player) {
            document.getElementById(player.space).innerHTML += player.token
        })
    }
    
    async function writeEndToLog(data) {        
        var xhr = new XMLHttpRequest();
            xhr.open("POST", '/api/potluck_log', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            await xhr.send(JSON.stringify({
                value: {
                    "message": data.message,
                    "state": data.state
                }
            }));
            return 
    }
    
    async function writeMessageToLog() {
        let snapshot = {players: state.players, bank: state.bank}        
        let xhr = new XMLHttpRequest();
            xhr.open("POST", '/api/potluck_log', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            await xhr.send(JSON.stringify({
                value: {
                    "message": state.message,
                    "state": snapshot
                }
            })); 
    }

    onMount(() => {drawPlayerPieces()});
</script>

<svelte:head>
    <link rel="stylesheet" href="/css/style.css">
</svelte:head>

<main>
<div class="flex p-2 bg-white">
    <div class="flex-1 m-1 p-1">
        <h1 class="text-xl">A full simulation of the Pot Luck board game, written in Svelte (JS)</h1>
        
    </div>
    <div class="flex-1 m-1 p-1">
        <label for="delay" class="leading-tight text-xl">delay between turns:</label>
        <input class="rounded number text-lg leading-tight" type="number" id="delay" name="delay" bind:value="{delay}" min="0" max="3000" step="100">
        <p>(0-3000)</p>
    </div>
    <div class="flex-1 m-1 p-1">
        <button on:click="{startGame}" class="btn-blue"> Start Game</button><p class="inline-block text-bold text-lg mx-2"> Turn #{state.turnNumber} </p>
        <p class="flex-1 text-sm">{state.message}</p>
    </div>
</div>
<div class="container p-1 mx-1 flex-row">
    {#each state.players as player}   
    <div class="inline-block align-top" style="width:{100 / state.players.length}%;">
        <div class="p-1 mx-1 rounded-sm font-bold text-sm bg-gray-300" style="overflow:hidden;">
            {player.name} {@html player.token} <span class="text-green-600"> ${player.cash}</span></div>
            <div class="mx-1 bg-gray-100 rounded-sm text-xs">
                {#each player.strains as strain}
                <p class="p-1"> {strain.name} <span class="text-green-600"> ${strain.oz} </span> 
                (${strain.price / 10}) 
                                
                </p>
                {/each}
            </div>
        </div>
    {/each}
</div> 
<div class="potluck">
    <div class="gameBoard">
        <div class="row top">
            <div class="square2"><span class="corner corner1">JACKPOT!</span>
                <div class="box" id="20"></div>
            </div>
            <div class="square1">
                <div class="header header-top purple"></div>
                <div class="firstLine firstLine-top top-side">Hawaiian</div>
                <div class="box" id="21"></div>
            </div>
            <div class="square1">
                <div class="firstLine firstLine-top no-color top-side">Vacation<br>Time<br>Relax,<br> Lose a Turn
                </div>
                <div class="box" id="22"></div>
            </div>
            <div class="square1">
                <div class="firstLine firstLine-top no-color top-side">Bum Me Out</div>
                <div class="box" id="23"></div>
            </div>
            <div class="square1">
                <div class="header header-top orange"></div>
                <div class="firstLine firstLine-top top-side">Nicaraguan</div>
                <div class="box" id="24"></div>
            </div>
            <div class="square1">
                <div class="firstLine firstLine-top no-color top-side">MUNCHIES!<br /> Pay 10x your roll</div>
                <div class="box" id="25"></div>
            </div>
            <div class="square1">
                <div class="header header-top yellow"></div>
                <div class="firstLine firstLine-top top-side">Colombian Gold</div>
                <div class="box" id="26"></div>
            </div>
            <div class="square1">
                <div class="firstLine firstLine-top top-side">Far<br />Out</div>
                <div class="box" id="27"></div>
            </div>
            <div class="square1">
                <div class="header header-top lightblue"></div>
                <div class="firstLine firstLine-top top-side">Just <br>Good Pot</div>
                <div class="box" id="28"></div>
            </div>
            <div class="square1">
                <div class="header header-top blue"></div>
                <div class="firstLine firstLine-top top-side">just<br> bad pot</div>
                <div class="box" id="29"></div>
            </div>
            <div class="square2"><span class="corner corner2">Busted...<br />lose 1 turn</span></div>
            <div class="box" id="30"></div>
        </div>

        <div class="row center">
            <div class="square2">
                <div class="squareSide">
                    <div class="headerSide header-left yellow"></div>
                    <div class="firstLine firstLine-left left-side">Acapulco<br>Gold</div>
                    <div class="box" id="19"></div>
                </div>
                <div class="squareSide">
                    <div class="firstLine firstLine-left no-color left-side">The Law: <br /> Pay 20x</div>
                    <div class="box" id="18"></div>
                </div>
                <div class="squareSide">
                    <div class="headerSide header-left yellow"></div>
                    <div class="firstLine firstLine-left left-side">Sinsemilla</div>
                    <div class="box" id="17"></div>
                </div>
                <div class="squareSide">
                    <div class="firstLine firstLine-left no-color left-side">Dealing <br />Square</div>
                    <div class="box" id="16"></div>
                </div>
                <div class="squareSide">
                    <div class="headerSide header-left red"></div>
                    <div class="firstLine firstLine-left left-side">Maui Wowie</div>
                    <div class="box" id="15"></div>
                </div>
                <div class="squareSide">
                    <div class="firstLine firstLine-left no-color left-side">Midnight <br>Airstrip<br> Pay 40x</div>
                    <div class="box" id="14"></div>
                </div>
                <div class="squareSide">
                    <div class="headerSide header-left green"></div>
                    <div class="firstLine firstLine-left left-side">Guerrero<br /> Green</div>
                    <div class="box" id="13"></div>
                </div>
                <div class="squareSide">
                    <div class="firstLine firstLine-left no-color left-side">You Pay<br />10x</div>
                    <div class="box" id="12"></div>
                </div>
                <div class="squareSide">
                    <div class="headerSide header-left lightblue"></div>
                    <div class="firstLine firstLine-left left-side">colombian<br />chiba</div>
                    <div class="box" id="11"></div>
                </div>
            </div>
            <div class="square9">
                <div class="card-box card-blue">
                    <div class="card-blue-inside"></div>
                </div>
                <div class="logoBox">
                    <span class="logoName">Pot Luck</span>
                </div>
                <div class="card-box card-orange">
                    <div class="card-orange-inside"></div>
                </div>
            </div>
            <div class="square2">
                <div class="squareSide">
                    <div class="headerSide header-right purple"></div>
                    <div class="firstLine firstLine-right right-side">Vietnamese</div>
                    <div class="box" id="31"></div>
                </div>
                <div class="squareSide">
                    <div class="headerSide header-right orange"></div>
                    <div class="firstLine firstLine-right right-side">Stickless<br />Thai</div>
                    <div class="box" id="32"></div>
                </div>
                <div class="squareSide">
                    <div class="firstLine firstLine-right no-color right-side">No-Tell<br> Car Rental<br>pay 10x
                    </div>
                    <div class="box" id="33"></div>
                </div>
                <div class="squareSide">
                    <div class="headerSide header-right red"></div>
                    <div class="firstLine firstLine-right right-side">Panama<br /> Red</div>
                    <div class="box" id="34"></div>
                </div>
                <div class="squareSide">
                    <div class="headerSide header-right brown"></div>
                    <div class="firstLine firstLine-right right-side">Mexican</div>
                    <div class="box" id="35"></div>
                </div>
                <div class="squareSide">
                    <div class="firstLine firstLine-right no-color right-side">Dealing <br>Square</div>
                    <div class="box" id="36"></div>
                </div>
                <div class="squareSide">
                    <div class="headerSide header-right lightblue"></div>
                    <div class="firstLine firstLine-right right-side">Jamaican</div>
                    <div class="box" id="37"></div>
                </div>
                <div class="squareSide">
                    <div class="firstLine firstLine-right no-color right-side">bum<br>me out</div>
                    <div class="box" id="38"></div>
                </div>
                <div class="squareSide">
                    <div class="headerSide header-right yellow"></div>
                    <div class="firstLine firstLine-right right-side">michoacan</div>
                    <div class="box" id="39"></div>
                </div>
            </div>
        </div>

        <div class="row top">
            <div class="square2">
                <span class="corner corner4" style="line-height:1em;"> Hospital: <br>lose a
                    turn. <br>pay 100x your roll
                </span>
                <div class="box" id="10"></div>
            </div>
            <div class="square1">
                <div class="header header-bottom red"></div>
                <div class="firstLine firstLine-bottom">colombian <br>red bud</div>
                <div class="box" id="9"></div>
            </div>
            <div class="square1">
                <div class="header header-bottom blue"></div>
                <div class="firstLine firstLine-bottom">thai<br>stick</div>
                <div class="box" id="8"></div>
            </div>
            <div class="square1">
                <div class="firstLine firstLine-bottom no-color">downtown<br>pharmacy <br>Pay 5x</div>
                <div class="box" id="7"></div>
            </div>
            <div class="square1">
                <div class="header header-bottom green"></div>
                <div class="firstLine firstLine-bottom">gainesville<br /> green</div>
                <div class="box" id="6"></div>
            </div>
            <div class="square1">
                <div class="header header-bottom orange"></div>
                <div class="firstLine firstLine-bottom">wacky<br /> weed</div>
                <div id="5"></div>
            </div>
            <div class="square1">
                <div class="firstLine firstLine-bottom no-color">Far <br /> Out!</div>
                <div class="box" id="4"></div>
            </div>
            <div class="square1">
                <div class="header header-bottom green"></div>
                <div class="firstLine firstLine-bottom">Home Grown</div>
                <div class="box" id="3"></div>
            </div>
            <div class="square1">
                <div class="firstLine firstLine-bottom no-color">Flying<br /> Too High:<br>Lose A<br>Turn</div>
                <div class="box" id="2"></div>
            </div>
            <div class="square1">
                <div class="header header-bottom brown"></div>
                <div class="firstLine firstLine-bottom">Colombian</div>
                <div class="box" id="1"></div>
            </div>
            <div class="square2" style="background-image:url('/img/straight.jpg'); background-size:cover;">
                <div class="box" id="40"></div>
            </div>
        </div>
    </div>
</div>

</main>

<style>

    div {
        box-sizing: border-box;
        text-transform: uppercase;
    }

    .box {
        position:relative;
        top:30%;
        left:30%;
        margin:0 auto;
        overflow:hidden;
        line-height:0.8rem;
    }

    .potluck {
        background-color: floralwhite;
        width: 95vw;
        height: 95vw;
        margin: 0.5rem auto;
    }

    .gameBoard {
        height: 100%;
        position: relative;
        background-color: floralwhite;
    }

    .row {
        width: 100%;
        display: flex;
    }

    .top {
        height: 15.384615385%;
    }

    .center {
        height: 69.23076923%;
    }

    .square1 {
        outline: 1px solid black;
        flex-grow: 1;
        position: relative;
        background: floralwhite;
        overflow:hidden; 
    }

    .square2 {
        flex-grow: 2;
        outline: 1px solid black;
        display: flex;
        flex-direction: column;
        position: relative;
        background: floralwhite;
        overflow:hidden; 
    }

    .square9 {
        flex-grow: 9;
        outline: 1px solid black;
        background: lightgoldenrodyellow;
    }

    .squareSide {
        outline: 1px solid black;
        width: 100%;
        flex-grow: 1;
        position: relative;
    }

    .header {
        height: 21%;
        position: absolute;
        outline: 2px solid black;
        background: grey;
        background: transparent url('/img/leaf-bg.png') center center no-repeat;
        background-position: contain;
    }

    .headerSide {
        width: 21%;
        position: absolute;
        outline: 2px solid black;
    }

    .header-top {
        bottom: 1px;
        left: 1px;
        right: 1px;
        background: transparent url('/img/leaf-180-bg.png') center center no-repeat;
        background-size: contain;
    }

    .header-bottom {
        top: 1px;
        left: 1px;
        right: 1px;
        background: transparent url('/img/leaf-bg.png') center center no-repeat;
        background-size: contain;
    }

    .header-left {
        top: 1px;
        bottom: 1px;
        right: 1px;
        background: grey;
        background: transparent url('/img/leaf-90-bg.png') center center no-repeat;
        background-size: contain;
    }

    .header-right {
        top: 1px;
        bottom: 1px;
        left: 1px;
        background: grey;
        background: transparent url('/img/leaf-270-bg.png') center center no-repeat;
        background-size: contain;
    }

    .firstLine {
        position: absolute;
        font-size: 0.7vw;
        font-weight: 500;
        line-height: 1vw;
        text-align: center;
    }

    .firstLine-top {
        left: 1px;
        right: 1px;
        bottom: 30%;
        height: 10%;
    }

    .firstLine-top.no-color {
        bottom: 12%;
    }

    .firstLine-left {
        top: 0px;
        bottom: 0px;
        right: 42%;
    }

    .firstLine-left.no-color {
        right: 23%;
    }

    .firstLine-right {
        top: 0;
        bottom: 0;
        left: 42%;
    }

    .firstLine-right.no-color {
        left: 23%;
    }

    .firstLine-bottom {
        left: 0;
        right: 0;
        top: 30%;
    }

    .firstLine-bottom.no-color {
        top: 12%;
    }

    .red {
        background-color: #ed1b24;
    }

    .yellow {
        background-color: #fef200;
    }

    .lightblue {
        background-color: #aae0fa;
    }

    .brown {
        background-color: #955436;
    }

    .blue {
        background-color: #0072bb;
    }

    .green {
        background-color: #1fb25a;
    }

    .orange {
        background-color: #f7941d;
    }

    .purple {
        background-color: #d93a96;
    }


    .left-side {
        transform: rotate(90deg);
    }

    .top-side {
        transform: rotate(180deg);
    }

    .right-side {
        transform: rotate(-90deg);
    }

    .logoBox {
        width: 46%;
        background: transparent;
        position: absolute;
        transform: rotateZ(-45deg) translateX(-26.5%) translateY(246.5%);
        border: 3px solid black;
        border-radius: 1em;
        padding: 0, 0.1em, 0.2em 0.1em;
        text-align: center;
        box-shadow: inset 0px 4px 24px 8px white;
        box-shadow: inset 0px 2px 12px 0px greenyellow;
    }

    .logoName {
        font-size: 7.0vw;
        color: black;
        font-family: futura;
        -webkit-text-stroke-width: 2px;
        -webkit-text-stroke-color: black;
        text-shadow: -3px 2px 0px black;
        -webkit-text-fill-color: transparent;
        /* Will override color (regardless of order) */

    }

    .card-box {
        position: absolute;
        width: 15%;
        height: 9vw;
    }

    .card-blue {
        background: rgb(66, 166, 240) url('/img/FarOut.jpg') center center no-repeat;
        background-size: contain;
        border-radius: 0.3em;
        transform: rotateZ(-45deg) translateX(-5.5%) translateY(132.25%);
    }

    .card-blue-inside {
        width: 94%;
        height: 94%;
        margin: 0.3vw auto;
        position: relative;
    }

    .card-orange {
        background: rgb(66, 166, 240) url('/img/BumOut.jpg') center center no-repeat;
        background-size: contain;
        transform: rotateZ(-45deg) translateX(-25%) translateY(687.25%);
        border-radius: 0.3em;
    }

    .card-orange-inside {
        width: 94%;
        height: 94%;
        margin: 0.3vw auto;
        position: relative;
    }

    .corner {
        position: absolute;
        text-align: center;
        line-height: 8vw;
        font-size: 1.2vw;
        font-weight: 500;
    }

    .corner1 {
        transform: rotateZ(135deg) translateX(-22%) translateY(-107%);
    }

    .corner2 {
        transform: rotateZ(-135deg) translateX(-75%) translateY(-75%);
        line-height: 1em;
    }

    .corner4 {
        transform: rotateZ(45deg) translateX(32%) translateY(0%);
        line-height: 1em;
    }
</style>`