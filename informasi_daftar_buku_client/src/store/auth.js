import { createStore } from "vuex";
// import axios from "axios";

export default createStore({
  state: {
    authStatus: true,
    user: {
      name: "Rafif",
    },
  },
  // mutations: {
  //   SET_AUTHENTICATED(state, value) {
  //     state.authStatus = value;
  //   },

  //   SET_USER(state, value) {
  //     state.user = value;
  //   },
  // },
  // actions: {
  //   async login({ dispatch }, credentials) {
  //     await axios.get("/sanctum/csrf-cookie");
  //     await axios.post("/login", credentials);

  //     dispatch("user");
  //   },

  //   async logout({ commit }) {
  //     await axios.post("/logout");
  //     commit("SET_AUTHENTICATED", false);
  //     commit("SET_USER", null);
  //   },

  //   async user({ commit }) {
  //     const config = {
  //       headers: {
  //         Referer: "http://127.0.0.1:8000",
  //         "Referrer-Policy": "strict-origin-when-cross-origin",
  //       },
  //     };

  //     await axios
  //       .get("/api/user", config)
  //       .then((result) => {
  //         commit("SET_AUTHENTICATED", true);
  //         commit("SET_USER", result.data);
  //       })
  //       .catch(() => {
  //         commit("SET_AUTHENTICATED", false);
  //         commit("SET_USER", null);
  //       });
  //   },
  // },
});
