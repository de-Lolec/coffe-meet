/** @type {import('tailwindcss').Config} */
export default {
	content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
	theme: {
		extend: {
			colors: {
				"primary-dark-yellow": "#FFDD00",
				"primary-yellow": "#FFED00",
			},
		},
	},
	plugins: [],
};
