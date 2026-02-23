// Old Tailwind config removed for v4
import defaultTheme from 'tailwindcss/defaultTheme'

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Plus Jakarta Sans"', ...defaultTheme.fontFamily.sans],
                jakarta: ['"Plus Jakarta Sans"', 'sans-serif'],
            },
        },
    },
    plugins: [],
}