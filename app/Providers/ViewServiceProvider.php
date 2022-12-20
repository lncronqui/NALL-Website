<?php

namespace App\Providers;

use App\Models\ContactInfo;
use App\Models\MediaResource;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['components.user.footer', 'components.admin.footer-admin'], function ($view) {
            $view->with('contactInfo', ContactInfo::find(1));
        });
    }
}
