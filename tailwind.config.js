/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{html,js}', './node_modules/flowbite/**/*.js'],
  theme: {
    extend: {
      screens: {
        sm: '576px',
        md: '768px',
        lg: '992px',
        xl: '1200px',
      },
      container: {
        center: true,
      },
      fontFamily: {
        poppins: ['Poppins'],
        roboto: ['Roboto'],
      },
      colors: {
        primary: '#08D9D6',
        darkest: '#222831',
        dark: '#29313D',
        textcolor: '#1E1E1E',
      },
    },
  },
  plugins: [require('flowbite/plugin')],
};
