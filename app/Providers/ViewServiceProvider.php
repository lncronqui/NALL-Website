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
        View::composer(['components.admin.repository.view-printed'], function ($view) {
            $mediaResources = MediaResource::with('institution', 'subjects', 'access_type', 'resource_type', 'authors')
                ->where([
                    ['resource_type_id', 1]
                ])
                ->orderBy('date', 'desc')
                ->get();
            $view->with('mediaResources', $mediaResources);
        });

        View::composer(['components.admin.repository.view-electronic'], function ($view) {
            $mediaResources = MediaResource::with('institution', 'subjects', 'access_type', 'resource_type', 'authors')
                ->where([
                    ['resource_type_id', 2]
                ])
                ->orderBy('date', 'desc')
                ->get();
            $view->with('mediaResources', $mediaResources);
        });

        View::composer(['components.admin.repository.view-video'], function ($view) {
            $mediaResources = MediaResource::with('institution', 'subjects', 'access_type', 'resource_type', 'authors')
                ->where([
                    ['resource_type_id', 3]
                ])
                ->orderBy('date', 'desc')
                ->get();
            $view->with('mediaResources', $mediaResources);
        });

        View::composer(['components.admin.repository.view-audio'], function ($view) {
            $mediaResources = MediaResource::with('institution', 'subjects', 'access_type', 'resource_type', 'authors')
                ->where([
                    ['resource_type_id', 4]
                ])
                ->orderBy('date', 'desc')
                ->get();
            $view->with('mediaResources', $mediaResources);
        });

        View::composer(['components.admin.account.admin-list'], function ($view) {
            $users = User::with('institution')
                ->where('role_id', 2)
                ->get();
            $view->with('users', $users);
        });

        View::composer(['components.admin.account.overall-admin-list'], function ($view) {
            $users = User::with('institution')
                ->where('role_id', 3)
                ->get();
            $view->with('users', $users);
        });

        View::composer(['components.admin.account.user-list'], function ($view) {
            $users = User::with('institution')
                ->where('role_id', 1)
                ->get();
            $view->with('users', $users);
        });



        View::composer(['components.user.footer', 'components.admin.footer-admin'], function ($view) {
            $view->with('contactInfo', ContactInfo::find(1));
        });
    }
}
