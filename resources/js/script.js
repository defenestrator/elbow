import alpinejs from 'alpinejs';
import Potluck from './Pages/potluck/Potluck.svelte'

import Game from './Pages/potluck/game/CreateGame.svelte'

const app = document.getElementById('app')

const potluck = new Potluck({
  target: document.getElementById('potluck')
})

export default {}