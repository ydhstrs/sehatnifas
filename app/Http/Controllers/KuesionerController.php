<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kuesioner;
use App\Models\UserAnswere;
use App\Models\UserResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KuesionerController extends Controller
{
    public function create()
    {
        $kuesioner = kuesioner::all();
        return view('kusioner',['kusioners'=>$kuesioner]);
    }

    public function saveAnwere(Request $request){
        $userId= Auth::id();

        $userResult = UserResult::create([
            'user_id' =>$userId,
        ]);
        
        $size = $request['jumlah_soal'];
        for($i = 1;$i<=$size;$i++){
            $stringJawban = "jawaban".$i;
            $stringKusionerId = 'kusionerId'.$i;
            UserAnswere::create([
                'user_id' =>$userId,
                'kuesioner_id' => $request[$stringKusionerId],
                'answere' => $request[$stringJawban],
                'user_result_id' => $userResult->id,
            ]);
        }

        return view('home');
    }



}
