<?php

namespace Modules\Tags\Providers;

use Illuminate\Support\ServiceProvider;

final class TagsServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register module specific services here
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'tags');
    }
}
