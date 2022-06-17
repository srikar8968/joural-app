const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        '!./resources/views/admin/**/*.blade.php',
        '!./resources/views/layouts/admin/*.blade.php',
    ],

    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.slate,
            green: colors.emerald,
            blue: colors.cyan,
            yellow: colors.amber,
            pink: colors.fuchsia,
        },
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '1rem',
                lg: '1rem',
                xl: '1rem',
                '2xl': '2rem',
            },
            screens: {
                sm: '600px',
                md: '728px',
                lg: '984px',
                xl: '1140px',
                '2xl': '1496px',
            },
        },
        extend: {
            fontFamily: {
                sans: ['"Open Sans"', 'sans-serif'],
                alt: ['"Raleway"', 'sans-serif']
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
