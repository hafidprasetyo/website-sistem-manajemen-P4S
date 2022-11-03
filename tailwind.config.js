/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            animation: {
                'bounce-slow': 'bounce 5s linear infinite',
            },
            colors: {
                'primary': '#FFC300',
                'secondary': '#FF1818',
                'tree': '#D8D9CF',
                'four': '#EDEDED'
            }
        },
    },
    plugins: [require('flowbite/plugin')],
}