let players = [
    {
        name: "Alice",      
        token: '<div style="display:grid; align-items: center; justify-content: center; background-color:blue; height:1.5vw; width:1.5vw; max-width:15px; max-height:15px; border-radius:50%;"></div>',
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
        name: "Barbara",
        token: '<div style="display:grid; align-items: center; justify-content: center; background-color:green; height:1.5vw; width:1.5vw; max-width:15px; max-height:15px; border-radius:50%;"></div>',
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
        name: "Carolyn",
        token: '<div style="display:grid; align-items: center; justify-content: center; background-color:yellow; height:1.5vw; width:1.5vw; max-width:15px; max-height:15px; border-radius:50%;"></div>',
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
        name: "Dorothy",
        token: '<div style="display:grid; align-items: center; justify-content: center; background-color:orange; height:1.5vw; width:1.5vw; max-width:15px; max-height:15px; border-radius:50%;"></div>',
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
        name: "Evelyn",
        token: '<div style="display:grid; align-items: center; justify-content: center; background-color:red; height:1.5vw; width:1.5vw; max-width:15px; max-height:15px; border-radius:50%;"></div>',
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
        name: "Fatíma",
        token: '<div style="display:grid; align-items: center; justify-content: center; background-color:purple; height:1.5vw; width:1.5vw; max-width:15px; max-height:15px; border-radius:50%;"></div>',
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
        name: "Geraldine",
        token: '<div style="display:grid; align-items: center; justify-content: center; background-color:black; height:1.5vw; width:1.5vw; max-width:15px; max-height:15px; border-radius:50%;"></div>',
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