import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                renos: ["renos", ...defaultTheme.fontFamily.sans],
            },

            height: {
                128: "27.5rem",
                129: "100rem",
                127: "80rem",
                126: "65rem",
            },
            width: {
                120: "50rem",
            },

            colors: {
                custom_gray: "#eeefed",
                custom_orange: "#ffb181",
                custom_oranges: "#ff7520",
                custom_green: "#deff78",
                custom_blue: "#053631",
                custom_greens: "#8cd003",
                text_color: "#022c3e",
            },

            boxShadow: {
                "top-lg":
                    "0 -10px 15px -3px rgba(0, 0, 0, 0.1), 0 -4px 6px -4px rgba(0, 0, 0, 0.1)",
            },
        },
    },
    plugins: [],
};
