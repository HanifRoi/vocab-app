<?php

namespace App\Http\Controllers;
use App\Models\Japan;

use Illuminate\Http\Request;

class JapanController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->input('cari');
        $dataJapan = Japan::when($cari, function($query) use ($cari)
        {
            return $query->where('hork', 'like', '%' . $cari . '%')
                        ->orWhere('kanji', 'like', '%' . $cari . '%')
                        ->orWhere('arti', 'like', '%' . $cari . '%')
                        ->orWhere('contoh', 'like', '%' . $cari . '%');
        })->paginate(10)->appends($request->all());
        return view('japan.index', compact('dataJapan', 'cari'));
    }

    public function create()
    {
        return view('japan.create');
    }

    public function store(Request $request)
    {
        $data = new Japan;
        $request->validate([
            'hork' => 'required|string',
            'kanji' => 'string|nullable',
            'arti' => 'required|string|min:3',
            'contoh' => 'required|string|min:3'
        ],[
            'hork.required' => 'Wajib diisi mas',
            'arti.min' => 'Minimal 3 Karakter mas',
            'contoh.required' => 'Wajib diisi mas',
            'contoh.min' => 'Minimal 3 Karakter mas'
        ]);

        $data->hork = $request->hork;
        $data->kanji = $request->kanji;
        $data->arti = $request->arti;
        $data->contoh = $request->contoh;

        $data->save();
        return redirect('/japan')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Japan::findOrFail($id);
        return view('japan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Japan::findOrFail($id);
        $request->validate([
            'hork' => 'required|string',
            'kanji' => 'string|nullable',
            'arti' => 'required|string|min:3',
            'contoh' => 'required|string|min:3'
        ],[
            'hork.required' => 'Wajib diisi mas',
            'arti.min' => 'Minimal 3 Karakter mas',
            'contoh.required' => 'Wajib diisi mas',
            'contoh.min' => 'Minimal 3 Karakter mas'
        ]);

        $data->hork = $request->hork;
        $data->kanji = $request->kanji;
        $data->arti = $request->arti;
        $data->contoh = $request->contoh;

        $data->save();
        return redirect('/japan')->with('sukses', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $data = Japan::findOrFail($id);
        $data->delete();

        return redirect('/japan')->with('sukses', 'Data berhasil dihapus');
    }
}
