# Roller Blade
A small collection of custom blade directives to be used with Laravel.

Tested on Laravel 5.6+

## Directives
| Directive  | Output | Comment 
| ------------- | ------------- | ------------------- 
| `@app`  | `<div id="app"></div>`  | Lazy way to get started with Vuejs
| `@title('My App')`  | `<title>My App</title>`  | Set the title of the page
| `@js('https://cdn.polyfill.io/v2/polyfill.min.js')` | `<script defer src="https://cdn.polyfill.io/v2/polyfill.min.js"></script> ` | link to external js files
| `@js(asset('js/main.js'))` | `<script defer src="http://myapp.test/js/main.js"></script>` | Link to internal js files (such as the ones in assets)
| `@dnsPrefetch('https://fonts.gstatic.com')` | `<link href="https://fonts.gstatic.com" rel="dns-prefetch">` | Prefetches dns for faster css loading
| `@css('https://fonts.googleapis.com/css?family=Raleway:100,600')` | `<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css" >` | Links stylesheet (Could be internal, like js example)

## Installation
1. Add `"@php artisan view:clear"` to your "post-dump-autoload" script in your projects composer.json. It should be the last line, right after `"@php artisan package:discover"`.
```json
"post-autoload-dump": [
  "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
  "@php artisan package:discover",
  "@php artisan view:clear"
]
```
2. `composer require reed-jones/roller-blade`

If you would prefer not to add the `view:clear` command to your composer.json file, you can simply run `php artisan view:clear` after installing (and updating, and uninstalling).
