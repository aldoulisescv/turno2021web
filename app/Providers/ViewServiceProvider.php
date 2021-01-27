<?php

namespace App\Providers;
use App\Models\StatusTurno;
use App\Models\User;
use App\Models\Session;
use App\Models\Resource;
use App\Models\Establishment;
use App\Models\Category;
use Spatie\Permission\Models\Permission;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['turnos.fields'], function ($view) {
            $status_turnoItems = StatusTurno::pluck('name','id')->toArray();
            $view->with('status_turnoItems', $status_turnoItems);
        });
        View::composer(['turnos.fields'], function ($view) {
            $sessionItems = Session::pluck('name','id')->toArray();
            $view->with('sessionItems', $sessionItems);
        });
        View::composer(['turnos.fields'], function ($view) {
            $resourceItems = Resource::pluck('name','id')->toArray();
            $view->with('resourceItems', $resourceItems);
        });
        View::composer(['turnos.fields'], function ($view) {
            $establishmentItems = Establishment::pluck('name','id')->toArray();
            $view->with('establishmentItems', $establishmentItems);
        });
        View::composer(['turnos.fields'], function ($view) {
            $userItems = User::pluck('name','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['relation_resource_sessions.fields'], function ($view) {
            $sessionItems = Session::pluck('name','id')->toArray();
            $view->with('sessionItems', $sessionItems);
        });
        View::composer(['relation_resource_sessions.fields'], function ($view) {
            $resourceItems = Resource::pluck('name','id')->toArray();
            $view->with('resourceItems', $resourceItems);
        });
        View::composer(['schedules.fields'], function ($view) {
            $resourceItems = Resource::pluck('name','id')->toArray();
            $view->with('resourceItems', $resourceItems);
        });
        View::composer(['sessions.fields'], function ($view) {
            $establishmentItems = Establishment::pluck('name','id')->toArray();
            $view->with('establishmentItems', $establishmentItems);
        });
        
        View::composer(['resources.fields'], function ($view) {
            $establishmentItems = Establishment::pluck('name','id')->toArray();
            $view->with('establishmentItems', $establishmentItems);
        });
        View::composer(['establishments.fields'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['establishments.fields'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['establishments.fields'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['establishments.fields'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['establishments.fields'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['establishments.fields'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['establishments.fields'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['establishments.fields'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['establishments.fields'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['establishments.fields'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['establishments.fields'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['categories.fields'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['categories.table'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['categories.show_fields'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['roles.fields'], function ($view) {
            $permissionItems = Permission::pluck('name','id')->toArray();
            $view->with('permissionItems', $permissionItems);
        });
        View::composer(['roles.fields'], function ($view) {
            $permissionItems = Permission::pluck('name','id')->toArray();
            $view->with('permissionItems', $permissionItems);
        });
        //
    }
}