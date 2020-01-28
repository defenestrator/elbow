const cssImport = require('postcss-import')
const cssNesting = require('postcss-nesting')
const mix = require('laravel-mix')
const path = require('path')
const purgecss = require('@fullhuman/postcss-purgecss')
const tailwindcss = require('tailwindcss')

mix.webpackConfig({
  resolve: {
      alias: {
          ziggy: path.resolve('vendor/tightenco/ziggy/dist/js/route.js'),
      },
  },
})
.js('resources/js/script.js', 'public/js')
  .postCss('resources/css/style.css', 'public/css/style.css')
  .options({
    postCss: [
      cssImport(),
      cssNesting(),
      tailwindcss('tailwind.config.js'),
      ...mix.inProduction() ? [
        purgecss({
          content: ['./resources/views/**/*.blade.php', './resources/views/**/*.html', './resources/js/**/*.js' ],
          defaultExtractor: content => content.match(/[\w-/:.]+(?<!:)/g) || [],
          whitelistPatternsChildren: [/nprogress/],
        }),
      ] : [],
    ],
  })
  .version()
  .sourceMaps()
  .browserSync({proxy: 'elbow.test', notify: false});


