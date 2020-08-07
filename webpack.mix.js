const mix = require('laravel-mix')
require('laravel-mix-tailwind')
require('laravel-mix-svelte')

mix.js('./resources/js/script.js', 'public/js')
    .postCss('./resources/css/style.css', './public/css/style.css', [
        require('postcss-import'),
        require('tailwindcss'),
        ]
    )
    .tailwind({
        configPath: '/tailwind.config.js'
    })
    .svelte()
    .version()
    .sourceMaps()
    .browserSync(
      {proxy: 'elbow.test', notify: false, open: false})

