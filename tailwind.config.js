const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Open_Sans', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            primary: {
              50: '#FFFFFF',
              100: '#FF29FB',
              200: '#9F329D',
              300: '#2E052D',
              400: '#000000'
            },
          }
    },

    plugins: [require('@tailwindcss/forms')],
};
