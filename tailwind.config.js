const colors = require('tailwindcss/colors')
module.exports = {
  purge: [],
  darkMode: "class", // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary:'#FF6363',
        secondary:{
          100:'#E2E2D5',
          200:'#888883',
        },
        black: colors.black,
        white: colors.white,
        gray: colors.gray,
        emerald: colors.emerald,
        indigo: colors.indigo,
        yellow: colors.yellow,
        redcar: {
          DEFAULT: '#FF0000',
          '50': '#FFB8B8',
          '100': '#FFA3A3',
          '200': '#FF7A7A',
          '300': '#FF5252',
          '400': '#FF2929',
          '500': '#FF0000',
          '600': '#C70000',
          '700': '#8F0000',
          '800': '#570000',
          '900': '#1F0000'
        },
      },
      fontFamily:{
        body: ['Nunito']
      }

    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
