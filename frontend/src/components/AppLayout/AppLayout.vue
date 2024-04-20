<script setup>
import Calendar from 'primevue/calendar';
import { ref } from "vue";

const date = ref("");
</script>

<template>
	<div class="flex flex-col items-center justify-center">
		<h1 class="mb-10 font-bold">Личный кабинет</h1>
		<h2 class="mb-7 text-3xl font-bold">
			<span class="text-primary-dark-yellow">Коваленко</span> Александр
			Сергеевич
		</h2>
		<div class="flex flex-col items-center justify-center gap-6">
			<div class="flex gap-5">
				<div
					class="flex w-[400px] flex-col items-center justify-center gap-3 rounded-md bg-gray-100">
					<img src="../../assets/dragAndDrop.svg" alt="dragAndDrop" />
					<span class="text-gray-500">Загрузите изображение</span>
				</div>
				<div class="flex flex-col gap-4">
					<Calendar
						dateFormat="dd/mm/yy"
						class="form__input !p-0"
						showIcon
						iconDisplay="input"
						v-model="date"
						placeholder="Дата рождения" />
					<input
						class="form__input"
						placeholder="Должность"
						type="text" />
					<input
						class="form__input"
						placeholder="Отдел"
						type="text" />
					<input
						class="form__input"
						placeholder="Telegram"
						type="text" />
					<input
						class="form__input"
						placeholder="Номер телефона"
						type="text" />
					<textarea
						class="form__input min-h-[92px] max-h-[92px]"
						placeholder="Расскажите о себе" />
				</div>
			</div>
			<button class="form__button">Сохранить</button>
		</div>
	</div>
</template>

<style scoped>
:deep(.p-inputtext) {
	background-color: transparent;
	border-color: var(--teal-500);
	box-shadow: none;
	height: 100%;
	padding: 16px;
	font-family: Montserrat, sans-serif !important;
}

.form__input {
	@apply min-w-[300px] rounded-md bg-gray-100 p-4;
}

.form__button {
	@apply rounded-full px-[1.6em] py-[0.6em] bg-primary-dark-yellow hover:bg-primary-yellow;
}
</style>
