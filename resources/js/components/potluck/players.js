const players = [
    {
        name: "player1",      
        token: "blue",
        cash: 2875,       
        strains: [], 
        playing: true,
        space: 40
    }, {
    
        name: "player2",
        token: "green",
        cash: 2875,
        strains: [], 
        playing: false,
        space: 40
    }, {
        name: "player3",
        token: "yellow",
        cash: 2875,
        strains: [], 
        playing: true,
        space: 40
    }, {
        name: "player4",
        token: "orange",
        cash: 2875,
        strains: [], 
        playing: false,
        space: 40
    }, {
        name: "player5",
        token: "red",
        cash: 2875,
        strains: [], 
        playing: false,
    }, {
        name: "player6",
        token: "purple",
        cash: 2875,
        strains: [], 
        playing: false,
        space: 40
    }, {
        name: "player7",
        token: "black",
        cash: 2875,
        strains: [], 
        playing: false,
        space: 40
    },
    
]

function getPlayers(player) {
	return player.playing === true
}

let activePlayers = players.filter(getPlayers)
export default activePlayers