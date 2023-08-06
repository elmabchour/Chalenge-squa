// src/router/index.js

import Vue from "vue";
import VueRouter from "vue-router";
import ShortenForm from "../components/ShortenForm.vue";
import ShortenedUrlsList from "../components/ShortenedUrlsList.vue";

Vue.use(VueRouter);

const routes = [
  { path: "/", component: ShortenForm },
  { path: "/urls", component: ShortenedUrlsList },
];

const router = new VueRouter({
  routes,
});

export default router;
