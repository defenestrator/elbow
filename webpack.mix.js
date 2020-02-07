const cssImport = require('postcss-import')
const cssNesting = require('postcss-nesting')
const mix = require('laravel-mix')
const purgecss = require('@fullhuman/postcss-purgecss')
const tailwindcss = require('tailwindcss')
require('laravel-mix-svelte');

// are we not dev?
const mode = process.env.NODE_ENV || 'development';

// const production returns false when process.env.NODE_ENV is not 'production'
const production = mode === 'production';

mix.webpackConfig({})
.svelte({
  dev: production
})
.postCss('./resources/css/style.css', 'public/css/style.css')
.options({
  postCss: [
    cssImport(),
    cssNesting(),
    tailwindcss('tailwind.config.js'),
    ...mix.inProduction() ? [
      purgecss({
        content: [
          './resources/views/**/*.blade.php', 
          './resources/views/**/*.html',
          './resources/views/**/*.svelte', 
          './resources/js/**/*.js' ],
        defaultExtractor: content => content.match(/[\w-/:.]+(?<!:)/g) || []
      }),
    ] : [],
  ],
})
.js('./resources/js/script.js', 'public/js')
.svelte()
.version()
.sourceMaps()
.browserSync({proxy: 'elbow.test', notify: false, open: false})

