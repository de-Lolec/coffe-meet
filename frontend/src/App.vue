<script setup>
import { useRoute, useRouter } from "vue-router";
import AppHeader from "./components/Header/AppHeader.vue";

const route = useRoute();
const router = useRouter();

router.isReady().then(() => {
	if (route.fullPath === "/") {
		router.push("/registration");
	}
});
</script>

<template>
	<AppHeader />
	<RouterView />
</template>

<style scoped></style>
