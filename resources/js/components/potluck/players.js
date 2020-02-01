let players = [
    {
        name: "player1",      
        token: "blue",
        cash: 2875,       
        strains: [], 
        playing: true,
        space: 39,
        discount: false,
        getOutOfHospital: false
    }, 
    {
        name: "player2",
        token: "green",
        cash: 75,
        strains: [], 
        playing: true,
        space: 39,
        discount: false,
        getOutOfHospital: false
    }, 
    {
        name: "player3",
        token: "yellow",
        cash: 0,
        strains: [], 
        playing: true,
        space: 39,
        discount: false,
        getOutOfHospital: false
    }, 
    {
        name: "player4",
        token: "orange",
        cash: 25,
        strains: [], 
        playing: true,
        space: 39,
        discount: false,
        getOutOfHospital: false
    }, 
    {
        name: "player5",
        token: "red",
        cash: 2875,
        strains: [], 
        playing: false,
        space: 39,
        discount: false,
        getOutOfHospital: false
    }, 
    {
        name: "player6",
        token: "purple",
        cash: 2875,
        strains: [], 
        playing: false,
        space: 39,
        discount: false,
        getOutOfHospital: false,
        discount: false,
    }, 
    {
        name: "player7",
        token: "black",
        cash: 2875,
        strains: [], 
        playing: false,
        space: 39,
        discount: false,
        getOutOfHospital: false
    },
    
]

function getPlayers(player) {
	return player.playing === true
}

let activePlayers = players.filter(getPlayers)
export default activePlayers