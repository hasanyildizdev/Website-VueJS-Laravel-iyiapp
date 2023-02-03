const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            keyframes: {
                rightToLeft: {
                  '0%': {transform: 'translateX(40%)', opacity:'0'},
                  '100%': { transform: 'translateX(0%)', opacity:'1'}
                },
                leftToRight: {
                    '0%': {transform: 'translateX(-40%)', opacity:'0'},
                    '100%': { transform: 'translateX(0%)', opacity:'1'}
                  },
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                tech: ['Share Tech Mono', ...defaultTheme.fontFamily.sans ],
                lale: ['Lalezar', ...defaultTheme.fontFamily.sans ],
                roboto: ['Roboto', ...defaultTheme.fontFamily.sans ],
            },
        },
        colors:{
            'my_purple':'#3C205E',
            'my_purple2':'#26093E',
            'my_purple3':'#1A062B',
            'purple2':'#8000FF',
            'purple3':'#5B3D9B',
            'white':'#FFFFFF',
            'black':'#000000',
            'gray':'#232223',
            'brown':'#3B2920',
            'dark_blue':'#10153F',
            'red':'#FF0000'
        }
    },

    plugins: [require('@tailwindcss/forms')],
};
