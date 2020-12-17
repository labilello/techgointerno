const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                opensans: ['Open Sans', 'sans-serif'],
            },
            textColor: {
                'primary': '#9b9b9b',
                'primary-light': '#c7c7c7',
                'secondary': '#01ffb2',
                'tertiary': '#01daff',
                'tertiary-dark': '#025aa5',
            },
            borderColor: {
                'primary': '#9b9b9b',
                'primary-light': '#c7c7c7',
                'secondary': '#01ffb2',
                'tertiary': '#01daff',
                'tertiary-dark': '#025aa5',
            },
            backgroundColor: {
                'primary': '#363636',
                'primary-light': '#4b4f54',
                'secondary': '#01ffb2',
                'tertiary': '#00d6ff',
                'tertiary-dark': '#025aa5',
            },
            height: {
                "88": "22rem",
                "header": "27rem",
            },
        },

    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
        borderWidth: ['responsive', 'hover', 'focus'],
        textColor: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
        backgroundColor: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
        display: ['responsive', 'group-hover', 'group-focus']
    },

    plugins: [require('@tailwindcss/ui')],
};
