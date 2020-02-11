let players = [
    {
        name: "player1",      
        token: '<div style="display:grid; align-items: center; justify-content: center; background-color:blue; height:15px; width:15px; border-radius:50%;"></div>',
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
        token: '<div style="display:grid; align-items: center; justify-content: center; background-color:green; height:15px; width:15px; border-radius:50%;"></div>',
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
        token: '<div style="display:grid; align-items: center; justify-content: center; background-color:yellow; height:15px; width:15px; border-radius:50%;"></div>',
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
        token: '<div style="display:grid; align-items: center; justify-content: center; background-color:orange; height:15px; width:15px; border-radius:50%;"></div>',
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
        token: '<div style="display:grid; align-items: center; justify-content: center; background-color:red; height:15px; width:15px; border-radius:50%;"></div>',
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
        name: "player6",
        token: '<div style="display:grid; align-items: center; justify-content: center; background-color:purple; height:15px; width:15px; border-radius:50%;"></div>',
        cash: 2875,
        strains: [], 
        playing: true,
        space: 40,
        discount: false,
        halfOff: false,
        freePound: false,
        getOutOfHospital: false,
        discount: false,
    }, 
    {
        name: "player7",
        token: '<div style="display:grid; align-items: center; justify-content: center; background-color:black; height:15px; width:15px; border-radius:50%;"></div>',
        cash: 2875,
        strains: [], 
        playing: true,
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