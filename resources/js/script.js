
import App from "./components/App.svelte";

const app = new App({
  target: app
});

window.app = app;

export default app;