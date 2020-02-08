<script>
    import {onMount} from "svelte";
    import activePlayers from './players';
    import strains from './strains';
    import spaces from './spaces';
    import bummers from './bummers';
    import farouts from './farouts';

    let state = {
        skipped: [],
        activePlayerId: 0,
        currentRoll: 0,
        players: activePlayers,
        bank: {
            strains: strains,
            cash: 100000
        },
        jackpot: {
            cash: 2000
        }, 
        farouts: farouts,
        bummers: bummers
    }
    
    let turnCounter = 1;
    
    function currentPlayer() {
        return state.players[state.activePlayerId]
    }

    function mapEvents(e) {
        switch (e) {
            case "bumEveryoneOut":
                    state.players.forEach( function(player){
                        player.cash -= 200
                        currentPlayer().cash += 200
                    })

                return console.log('Each player paid the bummer boy.')

            case "pot": return pot()

            case "deal":
                //get all strains by player.
                let owned = []
                for (let i = 0; i < state.players.length;) {
                    state.players[i].strains.map(function (strain) {
                        owned.push({
                            playerIndex: i,
                            price: strain.price,
                            name: strain.name,
                            rent: strain.oz,
                            value: strain.oz * 5
                        })
                    })
                    i += 1
                }
                console.log(owned)
                break;

            case "loseTurn":
                console.log(currentPlayer().name + ' lost a turn')
                state.skipped.push(state.skipped[state.activePlayerId])
                break;

            case "bummer":
                let b = bummer()
                mapEvents(b.effect)
                console.log('Bummer: ' + b.effect)
                break;

            case "farout":
                let f = farout()
                mapEvents(f.effect)
                console.log('Far Out: ' + f.effect)
                break;

            case "halfOff": return console.warn('halfOff not implemented')

            case "highRoller":
                const roller = dieRoll(1, 6) + dieRoll(1, 6) * 100;
                e ='w' + roller
                break;
                
            case "payLefty":
                const lefty = dieRoll(1, 6) + dieRoll(1, 6) * 100;
                currentPlayer().cash -= lefty
                let leftyId = state.activePlayerId - 1
                if (leftyId < 0) {
                    leftyId = state.players.length - 1
                }
                console.log("leftyId: " + leftyId)
                return state.players[leftyId].cash += lefty

            case "jackpot":
                console.log(currentPlayer().name + " won $" + state.jackpot.cash + " from the jackpot!")
                currentPlayer().cash += state.jackpot.cash
                if (state.bank.cash >= 2000) {
                    state.bank.cash -= 2000
                }
                return;

            case "paraquat":
                console.log(currentPlayer().name + ' got paraquat, this is going to suck.')
                console.log(currentPlayer().name + ' lost a turn to paraquat')
                state.skipped.push(state.skipped[state.activePlayerId])
                if (currentPlayer().getOutOfHospital === true) {
                    currentPlayer().getOutOfHospital = false
                    return console.log("You lucky dog");
                }
                mapEvents("hospital")
                break;
            
            case "hospital":
                currentPlayer().space = 10
                mapEvents("loseTurn")
                mapEvents("x100")
                break;

            case "getOutOfHospital":
                return currentPlayer().getOutOfHospital = true

            default:
                console.log("handle: " + e)
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

    function pot() {
        let bankStrains = state.bank.strains
        for (let i = 0; i < bankStrains.length;) {
            if (bankStrains[i].space == currentPlayer().space) {
                if (bankStrains[i].price < currentPlayer().cash) {
                    buyPot(bankStrains[i])
                    return state.bank.strains.splice(i, 1)
                } else {
                    console.log(currentPlayer().name + 'did not have enough money for ' + bankStrains[i].name)
                }
            }
            i += 1
        }

        let owned = []

        for (let i = 0; i < state.players.length;) {
            state.players[i].strains.find(function (s) {
                if (s.space === currentPlayer().space) {
                    if (currentPlayer().strains.includes(s) && s.price < currentPlayer().cash) {

                        currentPlayer().cash -= s.price
                        state.bank.cash += s.price

                        // watch this, lol
                        if (s.oz >= s["5lb"]) {
                            s.oz = s["5lb"] + s.price
                            return console.log(s.name + ' is over 5lb ' + s.oz)
                        }

                        if (s.oz <= s["2lb"]) {
                            if (s.oz === s["2lb"]) {
                                return s.oz = s["3lb"]
                            }
                            return s.oz = s["2lb"]
                        }

                        if (s.oz > s["3lb"]) {
                            if (s.oz === s["4lb"]) {
                                return s.oz = s["5lb"]
                            }
                            return s.oz = s["4lb"]
                        }
                    }
                    console.log(currentPlayer().name + ' paid ' + state.players[i].name + ' $' + s.oz +
                        ' for ' + s.name)
                    currentPlayer().cash -= s.oz
                    state.players[i].cash += s.oz
                }
            })
            i += 1
        }
    }

    function buyPot(strain) {
        currentPlayer().cash -= strain.price
        state.bank.cash += strain.price
        currentPlayer().strains.push(strain)
        console.log(currentPlayer().name + " bought: " + strain.name)
    }

    function bummer() {
        let index = Math.floor(Math.random() * state.bummers.length)
        let card = state.bummers[index];
        if (state.bummers.length > 1) {
            state.bummers.splice(index, 1)
            return card
        }         
        console.log("Reset bummers to original state")
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
        console.log("Reset farouts to original state")
        state.farouts = farouts
        return card
    }

    function dieRoll(min, max) {
        // any number range you care for
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function gameRoll() {
        let first = dieRoll(1, 6)
        let second = dieRoll(1, 6)
        return state.currentRoll = first + second
    }

    function startGame() {
        gameRoll()
        console.log("Turn #1")
        currentPlayer().space = state.currentRoll
        let event = spaces[currentPlayer().space - 1].effect
        mapEvents(event)
        console.log('First roll ' + state.currentRoll + ' by ' + currentPlayer().name + ' is on space ' +
        currentPlayer().space + ', and has $' + currentPlayer().cash)
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
        // advance current player index
        state.activePlayerId += 1

        // keep index in sync
        if (state.activePlayerId >= state.players.length) {
            state.activePlayerId = 0
        }
        return currentPlayer()
    }

    function executeTurn() {
        // Drop players with no cash from game.
        state.players = state.players.filter(function (player) {
            if (player.cash >= 1) {
                console.log(player.name + ' $' + player.cash)
                return player
            } else {
                // Give us your property and die a like a dog
                player.strains.forEach(strain => strain.oz = strain.price / 10)
                state.bank.strains = state.bank.strains.concat(player.strains)
                console.log(player.name +
                    ' was dropped from the game for being broke at the beginning of their turn. Their strains are returned unto the fold.'
                    )
            }
        })

        // then check for a winner
        if (state.players.length === 1) {
            return endGame()
        }

        // increment playerId 
        incrementPlayer()

        //start the turn by rolling dice, and cleaning up turn based booleans
        gameRoll()

        // handle (multiple) skipped turns
        if (state.skipped.includes(state.activePlayerId)) {
            state.skipped.splice(state.skipped.indexOf(state.activePlayerId), 1)
            console.log("end of turn, player id: " + state.activePlayerId)
            console.log("skipped player id: " + state.activePlayerId)
            return executeTurn()
        }

        // report state    
        console.log(currentPlayer().name + ' rolled a ' + state.currentRoll + ' started on space ' + currentPlayer()
            .space + ' and has $' + currentPlayer().cash)

        // move player to new space
        currentPlayer().space = calculateSpaceId()

        // get the event code
        let event = spaces[currentPlayer().space - 1].effect

        // and fire that shit off
        mapEvents(event)

        // report end of turn state
        console.log("At end of turn, " + currentPlayer().name + ' rolled ' + state.currentRoll + ', is on space ' +
            currentPlayer().space + ',  and has $' + currentPlayer().cash)
        turnCounter += 1
        console.log('Turn #' + turnCounter)
        return executeTurn()
    }

    function getOutOfHospital() {
        return currentPlayer().getOutOfHospital = true
    }

    export function reducePot() {
        return currentPlayer().discount = true
    }

    export function endGame() {
        let owned = ''

        let winner = state.players[0]
        if (winner.strains.length > 0) {
            for (let i = 0; i < winner.strains.length;) {
                owned += winner.strains[i].name + ', '
                i += 1;
            }
        }

        const turnNumber = turnCounter + 1

        let message = "At the beginning of turn " + turnNumber + ": The Winner is " + winner.name + ' with $' + winner
            .cash + '. They owned ' + owned + '.'

        return alert(message)
    }

onMount(() => {
    startGame();
});

</script>

<main>
    <div class="flex-row py-2 px-5 bg-white width-100">
    </div>
    <div class="potluck">
        <div class="gameBoard">
            <div class="row top">
                <div class="square2" id="20"><span class="corner corner1">JACKPOT!</div>
                <div class="square1" id="21">
                    <div class="header header-top purple"></div>
                    <div class="firstLine firstLine-top top-side">Hawaiian</div>
                </div>
                <div class="square1" id="22">
                    <div class="firstLine firstLine-top no-color top-side">Vacation<br>Time<br>Relax,<br> Lose a Turn
                    </div>
                </div>
                <div class="square1" id="23">
                    <div class="firstLine firstLine-top no-color top-side">Bum Me Out</div>
                </div>
                <div class="square1" id="24">
                    <div class="header header-top orange"></div>
                    <div class="firstLine firstLine-top top-side">Nicaraguan</div>
                </div>
                <div class="square1" id="25">
                    <div class="firstLine firstLine-top no-color top-side">MUNCHIES!<br /> Pay 10x your roll</div>
                </div>
                <div class="square1" id="26">
                    <div class="header header-top yellow"></div>
                    <div class="firstLine firstLine-top top-side">Colombian Gold</div>
                </div>
                <div class="square1" id="27">
                    <div class="firstLine firstLine-top top-side">Far<br />Out</div>
                </div>
                <div class="square1" id="28">
                    <div class="header header-top lightblue"></div>
                    <div class="firstLine firstLine-top top-side">Just <br>Good Pot</div>
                </div>
                <div class="square1" id="29">
                    <div class="header header-top blue"></div>
                    <div class="firstLine firstLine-top top-side">just<br> bad pot</div>
                </div>
                <div class="square2" id="30"><span class="corner corner2">Busted...<br />lose 1 turn</span></div>
            </div>

            <div class="row center">
                <div class="square2">
                    <div class="squareSide" id="19">
                        <div class="headerSide header-left yellow"></div>
                        <div class="firstLine firstLine-left left-side">Acapulco<br>Gold</div>
                    </div>
                    <div class="squareSide" id="18">
                        <div class="firstLine firstLine-left no-color left-side">The Law: <br /> Pay 20x</div>
                    </div>
                    <div class="squareSide" id="17">
                        <div class="headerSide header-left yellow"></div>
                        <div class="firstLine firstLine-left left-side">Sinsemilla</div>
                    </div>
                    <div class="squareSide" id="16">
                        <div class="firstLine firstLine-left no-color left-side">Dealing <br />Square</div>
                    </div>
                    <div class="squareSide" id="15">
                        <div class="headerSide header-left red"></div>
                        <div class="firstLine firstLine-left left-side">Maui Wowie</div>
                    </div>
                    <div class="squareSide" id="14">
                        <div class="firstLine firstLine-left no-color left-side">Midnight <br>Airstrip<br> Pay 40x</div>
                    </div>
                    <div class="squareSide" id="13">
                        <div class="headerSide header-left green"></div>
                        <div class="firstLine firstLine-left left-side">Guerrero<br /> Green</div>
                    </div>
                    <div class="squareSide" id="12">
                        <div class="firstLine firstLine-left no-color left-side">You Pay<br />10x</div>
                    </div>
                    <div class="squareSide" id="11">
                        <div class="headerSide header-left lightblue"></div>
                        <div class="firstLine firstLine-left left-side">colombian<br />chiba</div>
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
                    <div class="squareSide" id="31">
                        <div class="headerSide header-right purple"></div>
                        <div class="firstLine firstLine-right right-side">Vietnamese</div>
                    </div>
                    <div class="squareSide" id="32">
                        <div class="headerSide header-right orange"></div>
                        <div class="firstLine firstLine-right right-side">Stickless<br />Thai</div>
                    </div>
                    <div class="squareSide" id="33">
                        <div class="firstLine firstLine-right no-color right-side">No-Tell<br> Car Rental<br>pay 10x
                        </div>
                    </div>
                    <div class="squareSide" id="34">
                        <div class="headerSide header-right red"></div>
                        <div class="firstLine firstLine-right right-side">Panama<br /> Red</div>
                    </div>
                    <div class="squareSide" id="35">
                        <div class="headerSide header-right brown"></div>
                        <div class="firstLine firstLine-right right-side">Mexican</div>
                    </div>
                    <div class="squareSide" id="36">
                        <div class="firstLine firstLine-right no-color right-side">Dealing <br>Square</div>
                    </div>
                    <div class="squareSide" id="37">
                        <div class="headerSide header-right lightblue"></div>
                        <div class="firstLine firstLine-right right-side">Jamaican</div>
                    </div>
                    <div class="squareSide" id="38">
                        <div class="firstLine firstLine-right no-color right-side">bum<br>me out</div>
                    </div>
                    <div class="squareSide" id="39">
                        <div class="headerSide header-right yellow"></div>
                        <div class="firstLine firstLine-right right-side">michoacan</div>
                    </div>
                </div>
            </div>

            <div class="row top">
                <div class="square2" id="10">
                    <span class="corner corner4" style="line-height:1em;"> Hospital: <br>lose a
                        turn. <br>pay 100x your roll</span>
                </div>
                <div class="square1" id="9">
                    <div class="header header-bottom red"></div>
                    <div class="firstLine firstLine-bottom">colombian <br>red bud</div>
                </div>
                <div class="square1" id="8">
                    <div class="header header-bottom blue"></div>
                    <div class="firstLine firstLine-bottom">thai<br>stick</div>
                </div>
                <div class="square1" id="7">
                    <div class="firstLine firstLine-bottom no-color">downtown<br>pharmacy</div>
                </div>
                <div class="square1" id="6">
                    <div class="header header-bottom green"></div>
                    <div class="firstLine firstLine-bottom">gainesville<br /> green</div>
                </div>
                <div class="square1" id="5">
                    <div class="header header-bottom orange"></div>
                    <div class="firstLine firstLine-bottom">wacky<br /> weed</div>
                </div>
                <div class="square1" id="4">
                    <div class="firstLine firstLine-bottom no-color">Far <br /> Out!</div>
                </div>
                <div class="square1" id="3">
                    <div class="header header-bottom green"></div>
                    <div class="firstLine firstLine-bottom">Home Grown</div>
                </div>
                <div class="square1" id="2">
                    <div class="firstLine firstLine-bottom no-color">Flying<br /> Too High:<br>Lose A<br>Turn</div>
                </div>
                <div class="square1" id="1">
                    <div class="header header-bottom brown"></div>
                    <div class="firstLine firstLine-bottom">Colombian</div>
                </div>
                <div class="square2" id="40" style="background-image:url('/img/straight.jpg'); background-size:cover;" />
            </div>
        </div>
    </div>
    <div class="container-fluid py-3 px-5 bg-white">
        Open Developer Tools Console and click:
        <button on:click="{executeTurn}" class="btn-blue"> Next Turn</button>
    </div>
</main>

<style>
    div {
        box-sizing: border-box;
        text-transform: uppercase;
    }

    .potluck {
        background-color: floralwhite;
        width: 95.75vw;
        height: 94.25vw;
        margin: 10px auto;
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
    }

    .square2 {
        flex-grow: 2;
        outline: 1px solid black;
        display: flex;
        flex-direction: column;
        position: relative;
        background: floralwhite;
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
</style>
