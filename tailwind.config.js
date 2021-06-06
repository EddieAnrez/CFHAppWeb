const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        filter: { // defaults to {}
            'none': 'none',
            'grayscale': 'grayscale(1)',
            'invert': 'invert(1)',
            'sepia': 'sepia(1)',
        },
        backdropFilter: { // defaults to {}
            'none': 'none',
            'blur': 'blur(20px)',
        },
        /*     screens: {
                'xs': '350px',
                'sm': '640px',
                 // => @media (min-width: 640px) { ... }

                 'md': '768px',
                 // => @media (min-width: 768px) { ... }

                 'lg': '1024px',
                 // => @media (min-width: 1024px) { ... }

                 'xl': '1280px',
                  // => @media (min-width: 1280px) { ... }

                  '2xl': '1536px',
                 // => @media (min-width: 1536px) { ... }

            }, */
        extend: {



            screens: {
                'xs': '350px',

            },
            colors: {
                'comision': '#543650',
                'regal-blue': '#243C5A',
                fuchsia: colors.fuchsia,


            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },





    variants: {
        display: ['responsive', 'group-hover'],
        filter: ['responsive'], // defaults to ['responsive']
        backdropFilter: ['responsive'], // defaults to ['responsive']

        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('tailwindcss-filters'), ],
};