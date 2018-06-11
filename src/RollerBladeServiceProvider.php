<?php

namespace ReedJones\RollerBlade;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class RollerBladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // create Vuejs entry div
        Blade::directive('app', function () {
            return "<?= '<div id=\'app\'></div>'; ?>";
        });

        Blade::directive('title', function ($title) {
            return "<?= '<title>' . e({$title}) . '</title>'; ?>";
        });

        // include js file
        Blade::directive('js', function ($script) {
            return "<?= '<script defer src=' . e({$script}) . '></script>'; ?>";
        });

        // include css script
        Blade::directive('css', function ($link) {
            return "<?= '<link href=' . e({$link}) . ' rel=\"stylesheet\" type=\"text/css\" >'; ?>";
        });

        // css dns-prefetch
        Blade::directive('dnsPrefetch', function ($link) {
            return "<?= '<link href=' . e({$link}) . ' rel=\"dns-prefetch\" >'; ?>";
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
