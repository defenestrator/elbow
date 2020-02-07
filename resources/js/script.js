
import Potluck from './components/potluck/Potluck.svelte'
// import App from './components/App.svelte'

const potluck = new Potluck({
  target: document.querySelector('#potluck')
})

// const app= new App({
//   target: document.querySelector('#rootComponent')
// })

// window.app = app
window.potluck = potluck;

export default {}