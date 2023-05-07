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

        MainSettings::updateOrCreate([
            'website_name_ar' => $request->website_name_ar,
            'website_name_en' =>  $request->website_name_en,
            'website_description_ar' => $request->website_description_ar,
            'website_description_en' =>  $request->website_description_en,
            'website_adress_ar' => $request->website_adress_ar,
            'website_adress_en' => $request->website_adress_en,
        ]);


        return Redirect::back();
    }


    public function updatesocial(Request $request){

        $request->validate([
            'phone'=>"required|numeric|min:10",
            'email'=>"required|email",

        ]);

        SocialSettings::updateOrCreate([
            'phone' => $request->phone,
            'email' =>  $request->email,
            'facebook' => $request->facebook,
            'twitter' =>  $request->twitter,
            'instagram' => $request->instagram,
            'map' => $request->map,
        ]);

        return Redirect::back();
    }

    public function updatemeta(Request $request){

        $request->validate([
            'keywords_ar'=>"required",
            'keywords_en'=>"required",
           'description_ar'=>"required",
           'description_en'=>"required",
        ]);

        MateSettings::updateOrCreate([
            'keywords_ar' => $request->keywords_ar,
            'keywords_en' =>  $request->keywords_en,
            'description_ar' => $request->description_ar,
            'description_en' =>  $request->description_en,

        ]);

        return Redirect::back();
    }

}
