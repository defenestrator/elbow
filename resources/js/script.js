import alpinejs from 'alpinejs';
// import Potluck from './components/potluck/Potluck.svelte'
// import App from './components/App.svelte'
// import Game from './components/game/CreateGame.svelte'
import { InertiaApp } from '@inertiajs/inertia-svelte'
const app = document.getElementById('app')

new InertiaApp({
  target: app,
  props: {
    initialPage: JSON.parse(app.dataset.page),
    resolveComponent: name => import(`./Pages/${name}.svelte`).then(module => module.default),
  },
})

export default {}