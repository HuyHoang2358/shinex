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
            'main-color': '#D0002D'
        },
        backgroundImage:{
            'footer-bg':"url('/)"
        }
    },
    fontFamily: {
      'roboto': ['Roboto', 'sans-serif'],
    },
  },
/*  darkMode: "class",*/
  plugins: [require("flowbite/plugin")],
}

