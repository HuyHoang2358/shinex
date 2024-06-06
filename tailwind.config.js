/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/views/admin/*.blade.php",
      "./resources/views/admin/**/*.blade.php",
      "./resources/views/layouts/adminLayout.blade.php",
      "./resources/views/partial/adminHeader.blade.php",
      "./resources/views/partial/adminSidebar.blade.php",
      "./resources/css/app.css",
      "./resources/js/app.js",
      "./node_modules/tw-elements/js/**/*.js",
  ],
  theme: {
    extend: {
        colors: {
            'main-color': '#D0002D'
        }
    },
  },
  darkMode: "class",
  plugins: [require("tw-elements/plugin.cjs")],
}

