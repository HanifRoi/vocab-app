@extends('layouts.app')
@section('content')
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data Vocab English</title>

    <form action="/english/{{ $data->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="">English</label><br>
            <input type="text" name="english" value="{{ $data->english }}">
        </div>
        <br>
        <div>
            <label for="">Pengucapan</label><br>
            <input type="text" name="pengucapan" value="{{ $data->pengucapan }}">
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