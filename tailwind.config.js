/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/view/admin/*.blade.php",
      "./resources/view/admin/**/*.blade.php",
      "./resources/view/layouts/adminLayout.blade.php",
      "./resources/view/partial/adminHeader.blade.php",
      "./resources/view/partial/adminSidebar.blade.php",
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

