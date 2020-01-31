<script>
import { onMount } from "svelte";
import activePlayers from './players';
import strains from './strains'

let state = {
	skipped: [],
	activePlayerId: 0,
    players: activePlayers,
    bank: {
        strains:    strains,
        cash:       10000
    },
    jackpot: {
        cash:       10000
    }
}

function potluck(id) {
    let bankStrains = state.bank.strains
    for (let i = 0; i < bankStrains.length;) 
    {
        if (bankStrains[i].space == id) {
            return bankStrains[i]
        }
        i++
    }
}

function sixSidedDie (min, max) {
	min = Math.ceil(min);
	max = Math.floor(max);
	return Math.floor(Math.random() * (max - min + 1)) + min;
}

function gameRoll() {
	let first = state.sixSidedDie(1, 6)
	let second = state.sixSidedDie(1, 6)
	return first + second
}

function moveCash(amount, from, to) {

	// from.cash = from.cash -= amount
	// to = to.cash += amount
	// return from.cash
}

function payEach(amount) {
    // for (let i = 0; i < state.players.length;)
    // {
    //     moveCash(amount, state.players[i] )
    //      i += 1 
    // }
}

function completeTurn() {
	state.activePlayerId++

	if (state.activePlayerId > 7) {
		state.activePlayerId = 0
	}
	console.log("active player id: " + state.activePlayerId)
	if (state.activePlayerId === state.players.indexOf()) {
		let player = players[activePlayerId]
		if (player.playing !== true) {
			return state.completeTurn()
		}
	}

	if (state.skipped.includes(state.activePlayerId)) {
		state.skipped.splice(state.skipped.indexOf(state.activePlayerId), 1)
		console.log("end of turn, player id: " + state.activePlayerId)
		console.log("skipped player id: " + state.activePlayerId)
		return state.completeTurn()
	}
	console.log("end of turn, player id: " + state.activePlayerId)
	return gameRoll()
}

function loseTurn(rounds = 1) {
    for (rounds > 0; rounds -= 1; ) {
        state.skipped.push(state.skipped[state.activePlayerId])
    }
	return
}

function hospital(args) {
    if ( typeof args == "function") {
        args
    }
    return 
}

function getOutOfHospital() {
    return true
}

function reducePot() {
    return -500
}

function bumEveryoneOut(amount) {
    const others = state.players
    payEach(state.players, amount)
}

function freePound() {
    return
}

function jackpot() {
    return 
}

const bummers = [
        {
            "id": 1,
            "title": "Sneezed instead of snorted - lost two grams of coke",
            "effect": Number(-200)
        },
        {
            "id": 2,
            "title": "Posted bond money for 'lost friend'",
            "effect": Number(-1000)
        },
        {
            "id": 3,
            "title": "Misplaced your wallet",
            "effect": Number(-200)
        },
        {
            "id": 4,
            "title": "Got ripped off for $500",
            "effect": Number(-500)
        },
        {
            "id": 5,
            "title": "Dog eats your stash",
            "effect": Number(-5000)
        },
        {
            "id":6,
            "title": "Transmission on your cars goes",
            "effect": Number(-400)
        },
        {
            "id":7,
            "title": "Blew $500 at the track",
            "effect": Number(-500)
        },
        {
            "id":8,
            "title": "Busted for public intoxication",
            "effect": loseTurn()
        },
        {
            "id":9,
            "title": "Your pot has paraquat  &mdash; go to hospital and miss two turns (do not collect $500 for passing Straight Spot)",
            "effect": hospital(loseTurn(2))
        },
        {
            "id":10,
            "title": "Involved in car accident",
            "effect": Number(-1000)
        },
        {
            "id":11,
            "title": "Your baggage (constaining 5 lbs. of pot) is lost at the airport",
            "effect": Number(-2000)
        },
        {
            "id":12,
            "title": "Your pot went stale",
            "effect": reducePot(50)
        },
        {
            "id":13,
            "title": "Got paranoid and flushed 2 lbs. down the toilet",
            "effect": Number(-2000)
        },
        {
            "id":14,
            "title": "Roach burns your new suit",
            "effect": Number(-300)
        },
        {
            "id":15,
            "title": "Uninsured motorist runs into your house",
            "effect": Number(-2000)
        },
        {
            "id":16,
            "title": "You bum everyone out",
            "effect": bumEveryoneOut(200)
        }
    ]

    const farouts = [
        {
            "id": 1,
            "title": "Your wealthy relative died and left you $2000 in her will!",
            "effect": Number(2000)
        },
        {
            "id": 2,
            "title": "You win the lottery",
            "effect": Number(800)
        },
        {
            "id": 3,
            "title": "Get out of Hospital Free!",
            "effect": getOutOfHospital()
        },
        {
            "id": 4,
            "title": "You win $500 playing cards",
            "effect": Number(500)
        },
        {
            "id": 5,
            "title": "You win jackpot!",
            "effect": jackpot()
        },
        {
            "id": 6,
            "title": "Some deadbeat pays you $1200 he has owed you for over a year",
            "effect": Number(1200)
        },
        {
            "id": 7,
            "title": "Found your lost wallet",
            "effect": Number(200)
        },
        {
            "id": 8,
            "title": "This card entitles you to receive One Pound of Pot Free! (from the bank) to put on any square you own",
            "effect": freePound()
        },
        {
            "id": 9,
            "title": "The bank makes a mistake in your favor!",
            "effect": Number(300)
        },
        {
            "id": 10,
            "title": "Your horse comes through at the track",
            "effect": Number(1000)
        },
        {
            "id": 11,
            "title": "Guy hits your car from behind. You collect $4000 from neck injury suit",
            "effect": Number(4000)
        },
        {
            "id": 12,
            "title": "Your dog finds bag containing $600 in small bills",
            "effect": Number(600)
        },
        {
            "id": 13,
            "title": "You receive income tax return of $1500",
            "effect": Number(1500)
        },
        {
            "id": 14,
            "title": "This card entitles you to roll the dice and receive 100x the number rolled",
            "effect": Number(600 * 2)
        },
        {
            "id": 15,
            "title": "Far Out &mdash; roll the dice and pay player to your left 100x the number rolled",
            "effect": undefined
        },
        {
            "id": 16,
            "title": "This card entitles you to one deal at 50% discount on any dope (not already purchased) on the board",
            "effect": undefined
        }
    ]
    let spaces = [{
            id: 1,
            effect: "buy",
            space: 1,
        },
        {
            "id": 2,
            "title": "Flying Too High",
            "message": "Lose a turn",
            "image": "",
            "effect": "loseTurn"
        },
        {
            "id": 3,
            "title": "Home Grown",
            "image": "",
            "effect": "pot",
        },
        {
            "id": 4,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 5,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 6,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 7,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        }, {
            "id": 8,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        }, {
            "id": 9,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        }, {
            "id": 10,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        }, {
            "id": 11,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 12,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 13,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 14,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 15,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 16,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 17,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        }, {
            "id": 18,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        }, {
            "id": 19,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        }, {
            "id": 20,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 21,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 22,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 23,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 24,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 25,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 26,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 27,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        }, {
            "id": 28,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        }, {
            "id": 29,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        }, {
            "id": 30,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 31,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 32,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 33,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 34,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 35,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 36,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        },
        {
            "id": 37,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        }, {
            "id": 38,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        }, {
            "id": 39,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        }, {
            "id": 40,
            "title": "Straight Space",
            "image": "vagina.jpg",
            "effect": undefined,
        }
    ]

onMount(() => {
  console.log(potluck(3));
});
</script>
<main>
<div class="responsive">
	<div class="mainSquare">
		<div class="row top">
			<div class="square2" id="20"><span class="corner corner1">JACKPOT!</div>
			<div class="square1" id="21">
				<div class="header header-top purple"></div>
				<div class="firstLine firstLine-top rotation2">Hawaiian</div>
			</div>
			<div class="square1" id="22">
				<div class="firstLine firstLine-top no-color rotation2">Vacation<br>Time<br>Relax,<br> Lose a Turn</div>
			</div>
			<div class="square1" id="23">
				<div class="firstLine firstLine-top no-color rotation2">Bum Me Out</div>
			</div>
			<div class="square1" id="24">
				<div class="header header-top orange"></div>
				<div class="firstLine firstLine-top rotation2">Nicaraguan</div>
			</div>
			<div class="square1" id="25">
				<div class="firstLine firstLine-top no-color rotation2">MUNCHIES!<br /> Pay 10x your roll</div>
			</div>
			<div class="square1" id="26">
				<div class="header header-top yellow"></div>
				<div class="firstLine firstLine-top rotation2">Colombian Gold</div>
			</div>
			<div class="square1" id="27">
				<div class="firstLine firstLine-top rotation2">Far<br />Out</div>
			</div>
			<div class="square1" id="28">
            <div class="header header-top lightblue"></div>
				<div class="firstLine firstLine-top rotation2">Just <br>Good Pot</div>
			</div>
			<div class="square1" id="29">
				<div class="header header-top blue"></div>
				<div class="firstLine firstLine-top rotation2">just<br> bad pot</div>
			</div>
			<div class="square2" id="30"><span class="corner corner2">Busted...<br />lose 1 turn</span></div>
		</div>

		<div class="row center">
			<div class="square2">
				<div class="squareSide" id="19">
					<div class="headerSide header-left yellow"></div>
					<div class="firstLine firstLine-left rotation1">Acapulco<br>Gold</div>
				</div>
				<div class="squareSide" id="18">
					<div class="firstLine firstLine-left no-color rotation1">The Law: <br /> Pay 20x</div>
				</div>
				<div class="squareSide" id="17">
                <div class="headerSide header-left yellow"></div>
					<div class="firstLine firstLine-left rotation1">Sinsemilla</div>
				</div>
				<div class="squareSide" id="16">
					<div class="firstLine firstLine-left no-color rotation1">Dealing <br />Square</div>
				</div>
				<div class="squareSide" id="15">
                <div class="headerSide header-left orange"></div>
					<div class="firstLine firstLine-left rotation1">Maui Wowie</div>
				</div>
				<div class="squareSide" id="14">                    
					<div class="firstLine firstLine-left no-color rotation1">Midnight <br>Airstrip<br> Pay 40x</div>
				</div>
				<div class="squareSide" id="13">
					<div class="headerSide header-left green"></div>
					<div class="firstLine firstLine-left rotation1">Guerrero<br /> Green</div>
				</div>
				<div class="squareSide" id="12">
					<div class="firstLine firstLine-left no-color rotation1">You Pay<br />10x</div> 
				</div>
				<div class="squareSide" id="11">
					<div class="headerSide header-left lightblue"></div>
					<div class="firstLine firstLine-left rotation1">colombian<br />chiba</div>
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
					<div class="firstLine firstLine-right rotation3">Vietnamese</div>
				</div>
				<div class="squareSide" id="32">
					<div class="headerSide header-right orange"></div>
					<div class="firstLine firstLine-right rotation3">Stickless<br />Thai</div>
				</div>
				<div class="squareSide" id="33">
					<div class="firstLine firstLine-right no-color rotation3">No-Tell<br> Car Rental<br>pay 10x</div>
				</div>
				<div class="squareSide" id="34">
					<div class="headerSide header-right red"></div>
					<div class="firstLine firstLine-right rotation3">Panama<br /> Red</div>
				</div>
				<div class="squareSide" id="35">
                <div class="headerSide header-right brown"></div>
					<div class="firstLine firstLine-right rotation3">Mexican</div>
				</div>
				<div class="squareSide" id="36">
					<div class="firstLine firstLine-right no-color rotation3">Dealing <br>Square</div>
				</div>
				<div class="squareSide" id="37">
                <div class="headerSide header-right lightblue"></div>
					<div class="firstLine firstLine-right rotation3">Jamaican</div>
				</div>
				<div class="squareSide" id="38">
					<div class="firstLine firstLine-right no-color rotation3">bum<br>me out</div>
				</div>
				<div class="squareSide" id="39">
					<div class="headerSide header-right yellow"></div>
					<div class="firstLine firstLine-right rotation3">michoacan</div>
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
				<div class="firstLine firstLine-bottom">columbian <br>red bud</div>
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
			<div class="square2" id="40">
				<span class="corner corner3" style="margin:0 1.5em;"><br>Straight <br> Space
					<br>Collect<br />$500<br /></span>
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

	.responsive {
        background-color: offwhite;
		width: 95vw;
		height: 95vw;
		margin: 10px auto;
	}

	.mainSquare {
		height: 100%;
        position: relative;
        background-color:offwhite;
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
        background:white;
	}

	.square2 {
		flex-grow: 2;
		outline: 1px solid black;
		display: flex;
		flex-direction: column;
        position: relative;
        background:white;
	}

	.square9 {
		flex-grow: 9;
        outline: 1px solid black;
        background:lightgoldenrodyellow;
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
    .lightolive {
		background-color: #7ab391;
	}
	.orange {
		background-color: #f7941d;
	}

	.purple {
		background-color: #d93a96;
    }


	.rotation1 {
		transform: rotate(90deg);
	}

	.rotation2 {
		transform: rotate(180deg);
	}

	.rotation3 {
		transform: rotate(-90deg);
	}

	.logoBox {
		width: 46%;
		background: transparent;
		position: absolute;
		transform: rotateZ(-45deg) translateX(-32.5%) translateY(212.5%);
        border: 3px solid black;
        border-radius:1em;
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
        background-size:contain;
        border-radius:0.3em;
		transform: rotateZ(-45deg) translateX(-12.5%) translateY(66.6%);
	}

	.card-blue-inside {
		width: 94%;
		height: 94%;
		margin: 0.3vw auto;
		position: relative;
	}

	.card-orange {
        background:     rgb(66, 166, 240) url('/img/BumOut.jpg') center center no-repeat;
        background-size:contain;
        transform: rotateZ(-45deg) translateX(-25%) translateY(687.25%);
        border-radius:0.3em;
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

	.corner3 {
		transform: rotateZ(-45deg) translateX(-14%) translateY(26%);
		line-height: 1.4vw;
		font-size: 1vw;
	}

	.corner4 {
		transform: rotateZ(45deg) translateX(32%) translateY(0%);
		line-height: 1em;
    }
    
</style>
