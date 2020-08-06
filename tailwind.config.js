const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [
    './resources/**/*.html',
    './resources/**/*.svelte',
    './resources/**/*.blade.php',
    './resources/**/*.css',
  ],
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
          '600': '#0f81f9',
          '500': '#3595fa',
          '400': '#2d94fa',
          '300': '#64b7fa',
          '200': '#81ccfe',
          '100': '#A8DCFE'
        },
        green: {
            '900': '#09120d',
            '800': '#1e3829',
            '600': '#335e45',
            '500': '#478561',
            '400': '#5ea97e',
            '300': '#84bd9c',
            '100': '#aad2bb'
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
