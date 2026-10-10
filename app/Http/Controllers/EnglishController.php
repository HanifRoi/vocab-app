<?php

namespace App\Http\Controllers;

use App\Models\English;
use Illuminate\Http\Request;

class EnglishController extends Controller
{
    public function index(Request $request)
    {
        $dataEng = English::all();
        return view('english.index', compact('dataEng'));
    }
}
