const cssImport = require('postcss-import')
const cssNesting = require('postcss-nesting')
const mix = require('laravel-mix')
const purgecss = require('@fullhuman/postcss-purgecss')
const tailwindcss = require('tailwindcss')
require('laravel-mix-svelte');

mix.webpackConfig({
  output: {
    chunkFilename: 'js/[name].js?id=[chunkhash]',
  },
  resolve: {
    alias: {
        '@': path.resolve('resources/js')
    }
}
})
.js('./resources/js/script.js', 'public/js')
.postCss('./resources/css/style.css', 'public/css/style.css')
.svelte({
  dev: !mix.inProduction()
})

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
          './resources/js/**/*.svelte',
        ],
        defaultExtractor: content =>
          content.match(/[\w-/:.]+(?<!:)/g) || [],
          whitelistPatternsChildren: [/nprogress/]
      }),
    ] : [],
  ],
})
.version()
.sourceMaps()
.browserSync({proxy: 'elbow.test', notify: false, open: false})

