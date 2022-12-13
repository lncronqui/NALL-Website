<?php

namespace App\Providers;

use App\Models\WebsiteInfo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard();
        Model::shouldBeStrict(!$this->app->environment('production'));

        View::composer('*', function ($view) {
            $info = WebsiteInfo::find(1);
            $view->with('info', $info);
        });
    }
}
