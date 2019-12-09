
let players = [
	{
		"name": "player1",
		"token": "blue",
		"cash": 2875,
		"playing": false,
	},
	{
		"name": "player2",
		"token": "green",
		"cash": 2875,
		"playing": false,
	}, {
		"name": "player3",
		"token": "yellow",
		"cash": 2875,
		"playing": false,
	},	{
		"name": "player4",
		"token": "orange",
		"cash": 2875,
		"playing": false,
	},	{
		"name": "player5",
		"token": "red",
		"cash": 2875,
		"playing": false,
	}, {
		"name": "player6",
		"token": "purple",
		"cash": 2875,
		"playing": false,
	},	{
		"name": "player7",
		"token": "black",
		"cash": 2875,
		"playing": false,
	},
]
			
let activePlayerId = 0

let skipped = [2, 3, 6]

let gameRoll = function() {
			let first = sixSidedDie(1,6) 
			let second = sixSidedDie(1,6)
			return first + second
}

let sixSidedDie = function(min,max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

let completeTurn = function() {
			activePlayerId++
            
			if (activePlayerId > 7) {
				activePlayerId = 0
			}
			console.log("active player id: " + activePlayerId)
			if (activePlayerId === players.indexOf()) {
				let player = players[activePlayerId]
				if (player.playing !== true) {
					return completeTurn()
				}
			}

			if (skipped.includes(activePlayerId)) {
				skipped.splice(skipped.indexOf(activePlayerId), 1)
				console.log("end of turn, player id: " + activePlayerId)
				console.log("skipped player id: " + activePlayerId)
				return completeTurn()
			}
			console.log("end of turn, player id: " + activePlayerId)
			return gameRoll()
}

let loseTurn = function () {
	return skipped.push(skipped[activePlayerId])
}


