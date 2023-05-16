<?php

namespace App\Http\Controllers;

use App\Models\MainSettings;
use App\Models\MateSettings;
use Illuminate\Http\Request;
use App\Models\SocialSettings;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class SettingsController extends Controller
{
    public function index(){

        $MainSettings=MainSettings::first();
        $SocialSettings = SocialSettings::first();
        $MateSettings = MateSettings::first();
        return view('pages.backend.settings' ,compact('MainSettings','SocialSettings','MateSettings') );
    }

    public function updatemain(Request $request){

        $request->validate([
            'website_name_ar'=>"required",
            'website_name_en'=>"required",
            'website_description_ar'=>"required",
            'website_description_en'=>"required",
            'website_adress_ar'=>"required",
            'website_adress_en'=>"required",
        ]);

        $MainSettings=MainSettings::first();

       if($MainSettings){
        $MainSettings->update($request->all());
       }else{
        MainSettings::create($request->all());
       }

        return Redirect::back();
    }


    public function updatesocial(Request $request){

        $request->validate([
            'phone'=>"required|numeric|min:10",
            'email'=>"required|email",

        ]);

        $SocialSettings=SocialSettings::first();

        if($SocialSettings){
         $SocialSettings->update($request->all());
        }else{
            SocialSettings::create($request->all());
        }

        return Redirect::back();
    }

    public function updatemeta(Request $request){

        $request->validate([
            'keywords_ar'=>"required",
            'keywords_en'=>"required",
           'description_ar'=>"required",
           'description_en'=>"required",
        ]);

    
        $MateSettings=MateSettings::first();
        if($MateSettings){
         $MateSettings->update($request->all());
        }else{
            MateSettings::create($request->all());
        }

        return Redirect::back();
    }

}
