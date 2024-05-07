import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "snapchat-yellow": "#FFFC00",
                "illustrator-orange": "#F19F39",
                "photoshop-blue": "#57A6F8",
                "figma-green": "#0ACF83",
                "custom-gray": "#D9D9D9",
            },
        },
    },

    plugins: [forms],
};
