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

    public function create()
    {
        return view('english.create');
    }

    public function store(Request $request)
    {
         $data = new English;
        $request->validate([
            'english' => 'required|string',
            'pengucapan' => 'string|required',
            'arti' => 'required|string|min:3',
            'contoh' => 'required|string|min:3'
        ],[
            'english.required' => 'Wajib diisi mas',
            'arti.min' => 'Minimal 3 Karakter mas',
            'contoh.required' => 'Wajib diisi mas',
            'contoh.min' => 'Minimal 3 Karakter mas'
        ]);

        $data->english = $request->english;
        $data->pengucapan = $request->pengucapan;
        $data->arti = $request->arti;
        $data->contoh = $request->contoh;

        $data->save();
        return redirect('/english')->with('sukses', 'Data berhasil ditambahkan');
    }
    
    public function edit($id)
    {
        $data = English::findOrFail($id);
        return view('english.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = English::findOrFail($id);
        $request->validate([
            'english' => 'required|string',
            'pengucapan' => 'string|required',
            'arti' => 'required|string|min:3',
            'contoh' => 'required|string|min:3'
        ],[
            'english.required' => 'Wajib diisi mas',
            'arti.min' => 'Minimal 3 Karakter mas',
            'contoh.required' => 'Wajib diisi mas',
            'contoh.min' => 'Minimal 3 Karakter mas'
        ]);

        $data->english = $request->english;
        $data->pengucapan = $request->pengucapan;
        $data->arti = $request->arti;
        $data->contoh = $request->contoh;

        $data->save();

        return redirect('/english');
    }
}
