<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ResultApi extends Controller
{
    public function index(Request $request)
    {
        if ($request->hasFile('file')) {
 
            $fileName = $request->file->store('public/images');
            $fileName = str_replace("public/", "", $fileName);
            $result = Result::create([
                'file' => $fileName,
                'tanggal' => date('Y-m-d')
            ]);
            return response()->json($result, 200);
        }
    }
}
