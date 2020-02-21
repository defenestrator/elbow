let players = [{
    name: "Alice",
    token: 	'<span style="font-size:1.125rem;color:blue; font-weight:800;">&#x2659;</span><br>',
    cash: 2875,
    strains: [],
    playing: true,
    space: 40,
    doubles: 0,
    discount: false,
    halfOff: false,
    freePound: false,
    getOutOfHospital: false
  },
  {
    name: "Barbara",
    token: 	'<span style="font-size:1.125rem;color:green; font-weight:800;">&#x2659;</span><br>',
    cash: 2875,
    strains: [],
    playing: true,
    space: 40,
    doubles: 0,
    discount: false,
    halfOff: false,
    freePound: false,
    getOutOfHospital: false
  },
  {
    name: "Carolyn",
    token: '<span style="font-size:1.125rem;color:#ec3b83; font-weight:800;">&#x2659;</span><br>',
    cash: 2875,
    strains: [],
    playing: true,
    space: 40,
    doubles: 0,
    discount: false,
    halfOff: false,
    freePound: false,
    getOutOfHospital: false
  },
  {
    name: "Dorothy",
    token: '<span style="font-size:1.125rem;color:orange; font-weight:800;">&#x2659;</span><br>',
    cash: 2875,
    strains: [],
    playing: true,
    space: 40,
    doubles: 0,
    discount: false,
    halfOff: false,
    freePound: false,
    getOutOfHospital: false
  },
  {
    name: "Evelyn",
    token: '<span style="font-size:1.125rem;color:#8a0303; font-weight:800;">  &#x2659;</span> <br>',
    cash: 2875,
    strains: [],
    playing: true,
    space: 40,
    doubles: 0,
    discount: false,
    halfOff: false,
    freePound: false,
    getOutOfHospital: false
  },
  {
    name: "Fatíma",
    token: '<span style="font-size:1.125rem;color:purple; font-weight:800;">  &#x2659;</span> <br>',
    cash: 2875,
    strains: [],
    playing: true,
    space: 40,
    doubles: 0,
    discount: false,
    halfOff: false,
    freePound: false,
    getOutOfHospital: false,
    discount: false,
  },
  {
    name: "Geraldine",
    token: '<span style="font-size:1.125rem;color:black; font-weight:800;">&#x2659;</span> <br>',
    cash: 2875,
    strains: [],
    playing: true,
    space: 40,
    doubles: 0,
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