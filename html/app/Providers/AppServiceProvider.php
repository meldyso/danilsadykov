<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use App\Settings;
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
          $this->settings = Settings::orderBy('id', 'desc')->first();
          View()->share('settings', $this->settings);
    }
}
