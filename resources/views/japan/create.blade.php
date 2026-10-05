@extends('layouts.app')
@section('content')
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Vocab Japan</title>

    <form action="/japan" method="POST">
        @csrf
        <div>
            <label for="">H/K</label><br>
            <input type="text" name="hork">
        </div>
        <br>
        <div>
            <label for="">Kanji</label><br>
            <input type="text" name="kanji">
        </div>
        <br>
        <div>
            <label for="">Arti</label><br>
            <input type="text" name="arti">
        </div>
        <br>
        <div>
            <label for="">Contoh</label><br>
            <textarea name="contoh"></textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection