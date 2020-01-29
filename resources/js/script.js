import App from "./components/App.svelte";
import board from './components/potluck/board.svelte'

const app = new App({
  target: banana
})

const potluck = new board({
  target: document.body
})

window.app = app;

window.potluck = potluck;

export default {}
