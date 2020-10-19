<?php

namespace App\Http\Controllers;

use App\Models\SmGeneralSettings;
use App\Models\SmSchool;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class HomeController extends Controller
{
    //
    public  function  index(){
        #Local or Live Server?
        if(\Config::get('app.server') == 'live') {
         $domain =  request()->getHost();
        } else {
            $domain =   "eims.com";
        }
        $school_info =  SmSchool::where('domain',$domain)->first();
        $school_info =    SmGeneralSettings::where('school_id',$school_info->id)->first();

        return $school_info;
    }
}
