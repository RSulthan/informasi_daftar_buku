import { createRouter, createWebHistory } from "vue-router";

const routes = [
  {
    path: "/",
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
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
