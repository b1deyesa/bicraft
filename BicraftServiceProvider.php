<?php

namespace Bideyesa\Bicraft;

use Illuminate\Support\ServiceProvider;

class BicraftServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/views' => resource_path('views'),
            __DIR__.'/js' => resource_path('js'),
            __DIR__.'/sass' => resource_path('sass'),
            __DIR__.'/app' => resource_path('app'),
        ], 'bicraft');

        $viteConfigPath = base_path('vite.config.js');
        
        if (file_exists($viteConfigPath)) {
            $viteConfig = file_get_contents($viteConfigPath);
            $updatedConfig = str_replace(
                "['resources/css/app.css', 'resources/js/app.js']",
                "['resources/sass/app.scss', 'resources/js/app.js']",
                $viteConfig
            );

            file_put_contents($viteConfigPath, $updatedConfig);
        }
    }

    public function register()
    {
        // Logic lainnya jika ada
    }
}
