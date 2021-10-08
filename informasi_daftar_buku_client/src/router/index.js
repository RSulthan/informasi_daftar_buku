import { createRouter, createWebHistory } from "vue-router";
// import authStore from "../store/auth";

const routes = [
  {
    path: "/daftarBuku",
    name: "informasi_buku.index",
    component: () => import("@/views/InformasiBuku/Index.vue"),
  },
  {
    path: "/create",
    name: "informasi_buku.create",
    component: () => import("@/views/InformasiBuku/Create.vue"),
  },
  {
    path: "/edit/:id",
    name: "informasi_buku.edit",
    component: () => import("@/views/InformasiBuku/Edit.vue"),
  },
  {
    path: "/",
    name: "about",
    component: () => import("@/views/About/About.vue"),
  },
  {
    path: "/login",
    name: "login",
    component: () => import("../views/Auth/Login.vue"),
    // async beforeEnter(to, from, next) {
    //   await authStore.dispatch("user");
    //   if (authStore.state.authStatus) {
    //     next();
    //   }
    //   next({
    //     name: "informasi_buku.index",
    //   });
    // },
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
