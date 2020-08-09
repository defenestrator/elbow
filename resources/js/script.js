import alpinejs from 'alpinejs';
import Potluck from './Pages/potluck/Potluck.svelte'
import Search from './components/Search.svelte'
// import Game from './Pages/potluck/game/CreateGame.svelte'

function http(uri) {
  return {
    get: fetch(uri, {
      method: 'get',
      credentials: "same-origin",
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-Token': csrfToken
      }
    })
    .then(response => {
      return response.text();
    })
    .then(text => {
      return console.log(text)
    })
    .then(text => {
      return response.text()
    }),
    post: fetch(uri, {
      method: 'post',
      credentials: "same-origin",
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-Token': csrfToken
      }
    })
    .then(response => {
      return response.text();
    })
    .then(text => {
      return console.log(text)
    })
    .then(text => {
      return response.text()
    }),
    put: fetch(uri, {
      method: 'put',
      credentials: "same-origin",
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-Token': csrfToken
      }
    })
    .then(response => {
      return response.text();
    })
    .then(text => {
      return console.log(text)
    })
    .then(text => {
      return response.text()
    }),
    post: fetch(uri, {
      method: 'delete',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-Token': csrfToken
      }
    })
    .then(response => {
      return response.text();
    })
    .then(text => {
      return console.log(text)
    })
    .then(text => {
      return response.text()
    })
  }
}

const search = new Search({target: document.getElementById('search')})

const potluck = new Potluck({target: document.getElementById('potluck')})

export default {}