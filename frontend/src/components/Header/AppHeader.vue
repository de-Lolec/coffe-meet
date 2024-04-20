<script setup></script>

<template>
	<header class="header">
		<div class="header__layout">
			<div class="header__block">
				<img class="w-28" src="../../assets/appIconBlack.png" alt="" />
				<h1 class="header__title">Vue Gallery</h1>
			</div>
			<div class="header__block">
				<span>Alexander Kovalenko</span>
			</div>
		</div>
	</header>
</template>

<style scoped>
.header {
	@apply flex items-center justify-between p-6;
}

.header__layout {
	@apply mx-auto flex w-full max-w-[1280px] items-center justify-between;
}

.header__block {
	@apply flex items-center gap-3 text-white;
}

.header__title {
	@apply hidden text-2xl sm:block;
}

.header__avatar {
	@apply h-14 w-14 rounded-full object-cover;
}

.header__sign-in-text {
	@apply text-white group-hover:text-green-400;
}

.header__sign-in {
	@apply h-6 w-6;
}

.header__sign-in-svg {
	@apply max-w-none stroke-white group-hover:stroke-green-400;
}
</style>
