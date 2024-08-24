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
            'text-color': '#03045e',
            'text-light-color': '#0077b6',
        },
        backgroundImage:{
            'footer-bg':"url('/)",
            'contact_1': "url('../public/images/background/contact1.jpg')",
        }
    },
    fontFamily: {
      'roboto': ['Roboto', 'sans-serif'],
    },
  },
  plugins: [require("flowbite/plugin")],
}

