@extends('layouts.app')
@section('content')
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data Vocab Japan</title>

    <form action="/japan/{{ $data->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="">H/K</label><br>
            <input type="text" name="hork" value="{{ $data->hork }}">
        </div>
        <br>
        <div>
            <label for="">Kanji</label><br>
            <input type="text" name="kanji" value="{{ $data->kanji }}">
        </div>
        <br>
        <div>
            <label for="">Arti</label><br>
            <input type="text" name="arti" value="{{ $data->arti }}">
        </div>
        <br>
        <div>
            <label for="">Contoh</label><br>
            <textarea name="contoh">{{ $data->contoh }}</textarea>
        </div>
        <br>
        <button type="submit">Update</button>
    </form>
@endsection