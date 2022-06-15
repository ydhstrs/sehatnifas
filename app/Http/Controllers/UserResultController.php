<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserAnswere;
use App\Models\UserResult;
use App\Models\User;
use Illuminate\Http\Request;

class UserResultController extends Controller
{

    public function index()
    {
        $data = UserResult::with(['user'])->get();

        return view ('dashboard.posts.index', [
           'userInputs'=> $data
        ]);
    }
    

    public function getAllResult(){
        $data = UserResult::with(['user'])->get();
        var_dump($data);die();
    }

    public function show($id){
        $data = UserAnswere::where('user_result_id',$id)->with(['kuesioners'])->get();
        return view('dashboard.posts.show',[
            "title"=> "Single Home",
            'answeres'=>$data
        ]);
    }
    public function edit($id){
        $data = User::find($id);

            
        return view('dashboard.posts.edit',[
    
            'usere'=>$data
        ]);
    }
}
