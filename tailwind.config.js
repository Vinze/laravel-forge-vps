const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './app/Models/*.php',
        './app/helpers.php'
    ],
    safelist: [
        'icon'
    ],
    theme: {
        fontWeight: {
            light: 300,
            normal: 400,
            bold: 600
        },
        extend: {
            fontFamily: {
                sans: ['Source Sans Pro', ...defaultTheme.fontFamily.sans]
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
