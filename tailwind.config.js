/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/views/**/*.blade.php",
      "./resources/views/*.blade.php",
      "./resources/css/app.css",
      "./resources/js/app.js",
      "./node_modules/tw-elements/js/**/*.js",

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
  },
  darkMode: "class",
  plugins: [require("tw-elements/plugin.cjs")],
}

