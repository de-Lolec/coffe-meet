<script setup>
import { ref } from "vue";
import { useRouter } from "vue-router";

// Получаем объект маршрутизатора
const router = useRouter();

// Создаем реактивные переменные для хранения данных о пользователе
const firstName = ref("");
const middleName = ref("");
const lastName = ref("");
const email = ref("");
const password = ref("");
const repeatPassword = ref("");

// Функция для сохранения данных пользователя в локальное хранилище и перехода на главную страницу
const setUser = () => {
	const User = {
		firstName: firstName.value,
		lastName: lastName.value,
		email: email.value,
		password: password.value,
	};
	router.push("/app"); // Переходим на главную страницу
};
</script>

<template>
	<div class="form__layout">
		<div class="form__container">
			<h1 class="form__title">Регистрация</h1>
			<form action="" class="form">
				<input
					v-model="lastName"
					class="form__input"
					placeholder="Фамилия"
					type="text" />
				<input
					v-model="firstName"
					class="form__input"
					placeholder="Имя"
					type="text" />
				<input
					v-model="middleName"
					class="form__input"
					placeholder="Отчество"
					type="text" />
				<input
					v-model="email"
					class="form__input"
					placeholder="Почта"
					type="text" />
				<input
					v-model="password"
					class="form__input"
					placeholder="Пароль"
					type="text" />
				<input
					v-model="repeatPassword"
					class="form__input"
					placeholder="Повторите пароль"
					type="text" />
				<button class="form__button" @click="setUser">
					Продолжить
				</button>
				<span class="text-center">
					Уже зарегистрированы?
					<RouterLink to="/login" class="cursor-pointer"
						>Войти</RouterLink
					>
				</span>
			</form>
		</div>
	</div>
</template>

<style scoped>
.form__layout {
	@apply flex h-[calc(100vh-120px)] items-center justify-center overflow-scroll p-4;
}

.form__container {
	@apply overflow-scroll rounded-xl bg-gray-100 px-6 py-8 sm:px-12;
}

.form__title {
	@apply mb-10 text-center text-3xl font-bold;
}

.form {
	@apply flex flex-col gap-4;
}

.form__input {
	@apply min-w-[300px] rounded-md bg-gray-200 p-4;
}

.form__button {
	@apply rounded-full px-[1.6em] py-[0.6em] bg-primary-dark-yellow hover:bg-primary-yellow;
}
</style>
