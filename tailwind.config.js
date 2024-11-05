import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flyonui/dist/js/*.js',
    ],

    theme: {
        extend: {
            colors: {
                cWhite: "#F2F2F2",
                cGray: "#727273",
                cBlack: "#262521",
                cRed: "#F2471D",
                cOrange: "#F24E17",
            },
            backgroundImage: {
                'dotted-grid': "radial-gradient(#FFFFFF 1px, transparent 1px)",
            },
            backgroundSize: {
                'dotted-grid': '33.333% 33.333%',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                shimmer: "shimmer 2s linear infinite"
            },
            keyframes: {
                shimmer: {
                    '0%': { backgroundPosition: '0 0' },
                    '100%': { backgroundPosition: '-200% 0' },
                }
            }
        },
    },

    plugins: [
        forms,
        require("flyonui"),
        require("flyonui/plugin")
    ],
};
