import { createRouter, createWebHistory } from "vue-router";

import AppRegistration from "./components/AppAuth/AppRegistration.vue";
import AppLogin from "./components/AppAuth/AppLogin.vue";
import AppLayout from "./components/AppLayout/AppLayout.vue";

const routes = [
	{ path: "/registration", component: AppRegistration },
	{ path: "/login", component: AppLogin },
	{ path: "/app", component: AppLayout },
];

const router = createRouter({
	history: createWebHistory(),
	routes,
});

export default router;
