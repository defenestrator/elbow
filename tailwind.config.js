const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    extend: {
      fontFamily: {
        sans: ['Fira Sans', ...defaultTheme.fontFamily.sans],
        serif: ['Spectral', ...defaultTheme.fontFamily.serif]
      },
      colors: {
        blue: {
          '900': '#343A40',
          '800': '#39556a',
          '600': '#3595fa',
          '500': '#3595fa',
          '400': '#64b7fa',
          '300': '#2d94fa',
          '100': '#A8DCFE'
        },
        green: {
            '900': '',
            '800': '#39556a',
            '600': '#3c883e',
            '500': '#91ba3c',
            '400': '#7DB17F',
            '300': '#a3a3a3',
            '100': '#A8DCFE'
        }
      },
      boxShadow: theme => ({
        outline: '0 0 0 2px ' + theme('colors.green.500'),
      }),
      fill: theme => theme('colors'),
    },
  },
  variants: {
    fill: ['responsive', 'hover', 'focus', 'group-hover'],
    textColor: ['responsive', 'hover', 'focus', 'group-hover'],
    zIndex: ['responsive', 'focus'],
  },
  plugins: [
    require('@tailwindcss/custom-forms'),
  ]
}
