<?php

namespace App\Http\Controllers;

use App\Models\Result as ModelsResult;
use Illuminate\Http\Request;

class Result extends Controller
{
    public function index($id = null){
        if($id){
            $result = ModelsResult::find($id);
        }else{
            $result = ModelsResult::latest('id')->first();
        }
        return view('result',[
            'result' => $result
        ]);
    }
}
