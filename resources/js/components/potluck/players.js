let players = [
    {
        name: "player1",      
        token: '<div style="margin:1em, 0.2em; display:inline-block; position:relative; background-color:blue; height:50px; width:15px;"></div>',
        cash: 2875,       
        strains: [], 
        playing: true,
        space: 40,
        discount: false,
        halfOff: false,
        freePound: false,
        getOutOfHospital: false
    }, 
    {
        name: "player2",
        token: '<div style="margin:1em, 0.2em; display:inline-block; position:relative; background-color:green; height:50px; width:15px;"></div>',
        cash: 2875,
        strains: [], 
        playing: true,
        space: 40,
        discount: false,
        halfOff: false,
        freePound: false,
        getOutOfHospital: false
    }, 
    {
        name: "player3",
        token: '<div style="margin:1em, 0.2em; display:inline-block; position:relative; background-color:yellow; height:50px; width:15px;"></div>',
        cash: 2875,
        strains: [], 
        playing: true,
        space: 40,
        discount: false,
        halfOff: false,
        freePound: false,
        getOutOfHospital: false
    }, 
    {
        name: "player4",
        token: '<div style="margin:1em, 0.2em; display:inline-block; position:relative; background-color:orange; height:50px; width:15px;"></div>',
        cash: 2875,
        strains: [], 
        playing: true,
        space: 40,
        discount: false,
        halfOff: false,
        freePound: false,
        getOutOfHospital: false
    }, 
    {
        name: "player5",
        token: '<div style="margin:1em, 0.2em; display:inline-block; position:relative; background-color:red; height:50px; width:15px;"></div>',
        cash: 2875,
        strains: [], 
        playing: false,
        space: 40,
        discount: false,
        halfOff: false,
        freePound: false,
        getOutOfHospital: false
    }, 
    {
        name: "player6",
        token: '<div style="margin:1em, 0.2em; display:inline-block; position:relative; background-color:purple; height:50px; width:15px;"></div>',
        cash: 2875,
        strains: [], 
        playing: false,
        space: 40,
        discount: false,
        halfOff: false,
        freePound: false,
        getOutOfHospital: false,
        discount: false,
    }, 
    {
        name: "player7",
        token: '<div style="margin:1em, 0.2em; display:inline-block; position:relative; background-color:black; height:50px; width:15px;"></div>',
        cash: 2875,
        strains: [], 
        playing: false,
        space: 40,
        discount: false,
        halfOff: false,
        freePound: false,
        getOutOfHospital: false
    },
    
]

function getPlayers(player) {
	return player.playing === true
}

let activePlayers = players.filter(getPlayers)
export default activePlayers