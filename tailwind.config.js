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
            colors: {
                'gray-background': '#f7f8fc',
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                custom: '68.5rem',
            },
            spacing: {
                70: '17.5rem',
                175: '43.75rem',
                22: '5.5rem',
                104: '26rem',
                76: '19rem',
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp')
    ],
    purge: {
        content: [
            './storage/framework/views/*.php',
            './resources/**/*.blade.php',
        ],
        safelist: [
            'bg-purple-500',
            'bg-yellow-500',
            'bg-green-500',
            'bg-red-500',
        ],
    },
};
