<?php

namespace App\Http\Controllers;
use App\Models\Japan;

use Illuminate\Http\Request;

class JapanController extends Controller
{
    public function index(Request $request)
    {
        $dataJapan = Japan::all();
        return view('japan.index', compact('dataJapan'));
    }

    public function create()
    {
        return view('japan.create');
    }
}
