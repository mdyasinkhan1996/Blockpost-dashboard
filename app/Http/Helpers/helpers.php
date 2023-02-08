<?php 

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\UserSetting;

if(!function_exists('userSetting')){
    function userSetting($name, $value){
        $userSetting = UserSetting::where('name', $name)->first();
        if(!isset($userSetting->id)){
            $userSetting = new UserSetting();
        }
        $userSetting->name = $name;
        $userSetting->value = $value;
        $userSetting->save();
        return true;
    }
}
if(!function_exists('userSettingData')){
    function userSettingData($name){
        $userData = UserSetting::all();
       $data =  $userData->where('name',$name)->first();

        return ($data)?$data->value:NULL;
    }
}
