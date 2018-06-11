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
```zsh
composer require reed-jones/roller-blade
php artisan view:clear
```
