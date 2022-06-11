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
        $userId = Auth::id();
        $userResultStatus = UserResult::where('user_id', $userId)->count();
        return view('kusioner', ['kusioners' => $kuesioner, 'user_result_count' => $userResultStatus]);
    }

    public function saveAnwere(Request $request)
    {
        $userId = Auth::id();

        $userResultStatus = UserResult::where('user_id', $userId)->count();


        $kuesioners = kuesioner::all();
        $hasilJawaban = 0;
        $jawabanBenarUser = 0;
        for($i=0;$i<$kuesioners->count();$i++){
            $stringJawban = "jawaban" . $i+1;
            $jawab = $request[$stringJawban];
            if($jawab == $kuesioners[$i]->jawaban){
                $jawabanBenarUser+=1;
            }
           
        }
        $hasilJawaban = ($jawabanBenarUser/$kuesioners->count())*100;
        $size = $request['jumlah_soal'];

        $userResult = UserResult::create([
            'user_id' => $userId,
            'status' => $userResultStatus,
            'hasil_jawaban' => $hasilJawaban,
        ]);

        for ($i = 1; $i <= $size; $i++) {
            $stringJawban = "jawaban" . $i;
            $stringKusionerId = 'kusionerId' . $i;
            UserAnswere::create([
                'user_id' => $userId,
                'kuesioner_id' => $request[$stringKusionerId],
                'answere' => $request[$stringJawban],
                'user_result_id' => $userResult->id,
            ]);
        }

        return view('home');
    }
}
