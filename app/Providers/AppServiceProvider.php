<?php

namespace App\Providers;

use App\Models\SmGeneralSettings;
use App\Models\SmSchool;
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
        //

        if(\Config::get('app.server') == 'live') {
            $domain =  request()->getHost();
        } else {
            $domain =   "eims.com";
        }
        $info =  SmSchool::where('domain',$domain)->first();
        $gschool_info =    SmGeneralSettings::where('school_id',$info->id)->first();
        View::share('gschool_info',  $gschool_info);
    }
}
