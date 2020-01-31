
import App from "./components/App.svelte";
import Potluck from './components/potluck/Potluck.svelte'

const app = new App({
  target: document.body.main
})

const potluck = new Potluck({
  target: banana
})

window.app = app;

window.potluck = potluck;

export default {}