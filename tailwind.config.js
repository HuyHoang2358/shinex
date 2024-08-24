/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/views/**/*.blade.php",
      "./resources/views/*.blade.php",
      "./resources/css/app.css",
      "./resources/**/*.js",
      "./node_modules/flowbite/**/*.js",

  ],
  theme: {
    extend: {
        colors: {
            'main': '#03045e',
            'light': '#0077b6',
        },
    },
    fontFamily: {
      'roboto': ['Roboto', 'sans-serif'],
    },
  },
  plugins: [require("flowbite/plugin")],
}

