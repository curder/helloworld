<?php

namespace Curder\HelloWorld;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php' .
            '');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'HelloWorld');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerPublishables();
    }

    private function registerPublishables()
    {
        $basePath = __DIR__;

        $arrPublishable = [
            'migrations' => [
                "$basePath/publishable/databases/migrations" => database_path('migrations'),
            ],
            'config' => [
                "$basePath/publishable/config/helloworld.php" => config_path('helloworld.php'),
            ],
        ];

        foreach ($arrPublishable as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }
}
