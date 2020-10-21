<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Gallary;
use App\Models\SmGeneralSettings;
use App\Models\SmNoticeBoard;
use App\Models\SmSchool;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;
use PHPUnit\Framework\Error\Notice;

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
//        $school_info =    SmGeneralSettings::where('school_id',$school_info->id)->first();
//        return $school_info;

      $sliders =   Gallary::where('school_id',$school_info->id)->where('slider','Yes')->get();
            $notices = SmNoticeBoard::where('school_id',$school_info->id)->latest()->take(3)->get();
//            return $notices
        return view('home',compact('sliders','notices'));
    }
}
