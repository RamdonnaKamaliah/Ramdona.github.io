import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/views/**/*index.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "linear-gradient(to right, #8B5DFF, #563A9C)",
                background: "#141414",
                customDarkBlue: "#1e252d",
            },
            animation: {
                spinSlow: "spin 10s linear infinite", // Animasi putar lambat
            },
            keyframes: {
                spin: {
                    "0%": { transform: "rotate(0deg)" },
                    "100%": { transform: "rotate(360deg)" },
                },
            },
        },
    },

    plugins: [forms],
};
