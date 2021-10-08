import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
// import authStore from "./store/auth";
import axios from "axios";

axios.defaults.withCredentials = true;
axios.defaults.baseURL = "http://localhost:8000/";

/* Bootstrap */
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.min";

// authStore.dispatch("user").then(() => {
//   createApp(App)
//     .use(store)
//     .use(router)
//     .mount("#app");
// });

createApp(App)
  .use(store)
  .use(router)
  .mount("#app");
