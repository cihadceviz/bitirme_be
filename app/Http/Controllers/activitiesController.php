<?php

namespace App\Http\Controllers;

use App\Models\activitiesDetailModel;
use App\Models\activitiesModel;
use App\Models\activitiesStatusModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class activitiesController extends Controller
{
    public function saveActivity(Request $request){
        $user_id = $request->input('user_id');
        $activities_name = $request->input('activity_name');
        $activity_start_date = $request->input('activity_start_date');
        $activity_end_date = $request->input('activity_end_date');
        $activity_view = $request->input('activity_view');
        $activity_description = $request->input('activity_description');
        $activity_status = 0;

        $activity_invited_user = $request->input('activity_invited_user');
        $json_invited_user = json_encode($activity_invited_user);



        activitiesDetailModel::insert([
            'activity_status'=>$activity_status,
            'activity_name'=>$activities_name,
            'activity_createdBy'=>$user_id,
            'activity_start_date'=>$activity_start_date,
            'activity_end_date'=>$activity_end_date,
            'activity_invited_user'=>$json_invited_user,
            'activity_view'=>$activity_view,
            'activity_description'=>$activity_description

        ]);
        $res = activitiesDetailModel::all()->last();
        $activity_id = ($res['activity_id']);


        $elementCount  = count($activity_invited_user);
        for ($i = 1; $i<$elementCount+1; $i++ ){
            $str = "obj%d";
            $lastStr = sprintf($str, $i);
            $user_id = $activity_invited_user[$lastStr]['user'];

            activitiesModel::insert([
                'activity_id'=>$activity_id,
                'user_id'=>$user_id
            ]);

        }

    }
}
