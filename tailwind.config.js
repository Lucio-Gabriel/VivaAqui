import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins"],
            },
            colors: {
                primary: "#027333",
                'primary-accent': "#04D939",
                'secondary': "#03A63C",
                'blue-gray': "#012340",
            },
        },
    },

    plugins: [forms],
};
