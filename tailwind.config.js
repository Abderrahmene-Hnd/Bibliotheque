/** @type {import('tailwindcss').Config} */
module.exports = {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js",

      './vendor/wireui/wireui/resources/**/*.blade.php',
      './vendor/wireui/wireui/ts/**/*.ts',
      './vendor/wireui/wireui/src/View/**/*.php',
      './vendor/wireui/components/**/*.php',
      './vendor/wireui/components/**/*.blade.php'
    ],
    theme: {
      extend: {},
    },
    corePlugins: {
        aspectRatio: false,
      },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/container-queries'),
        require('flowbite/plugin')
],
  }
