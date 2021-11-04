<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class History extends Controller
{
    public function index()
    {
        return view('history', [
            'histories' => Result::sortBy('created_at', 'ASC')->all()
        ]);
    }
}
