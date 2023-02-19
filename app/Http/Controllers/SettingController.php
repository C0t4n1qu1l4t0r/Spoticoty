<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function asign(Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|int',
            'acc_plan' => 'required|string|max:255',
            'audio_quality' => 'required|string|max:255',
            'privacy' => 'required|string|max:255'
        ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 400);
        }
        $address = Setting::create([
            'user_id' => $request->get('user_id'),
            'acc_plan' => $request->get('acc_plan'),
            'audio_quality' => $request->get('audio_quality'),
            'privacy' => $request->get('privacy')
        ]);
        return response()->json(['message'=>'Settings Asigned','data'=>$address],200);
    }

    public function show(Setting $setting)
    {
        return response()->json(['message'=>'','data'=>$setting],200);
    }

    public function show_user(Setting $setting)
    {
        return response()->json(['message'=>'','data'=>$setting->user],200);
    }
}
