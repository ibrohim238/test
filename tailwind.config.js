const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
        container: {
            screens: {
                'sm': '540px',
                'md': '720px',
                'lg': '960px',
                'xl': '1140px',
                '2xl': '1200px',
            },
        },
    },
    variants: {},
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        require('postcss-import'),
        require('autoprefixer'),
        require('tailwindcss'),
        require('flowbite/plugin')
    ]
}
