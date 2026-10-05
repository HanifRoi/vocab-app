@extends('layouts.app')
@section('content')
    

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Belajar Jepang</title>

    <h2>Vocabulary Japan</h2>
    <a href="/japan/create"><button>Tambah Data</button></a>
    <table border="1">
    <tr>
        <th>No</th>
        <th>H/K</th>
        <th>Kanji</th>
        <th>Arti</th>
        <th>Contoh Penggunaan</th>
        <th>Aksi</th>
    </tr>
    @foreach ($dataJapan as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->hork }}</td>
        <td>{{ $item->kanji }}</td>
        <td>{{ $item->arti }}</td>
        <td>{{ $item->contoh }}</td>
        <td>
            <a href="/japan/{{ $item->id }}/edit"><button>Edit</button></a>
            <form action="/japan/{{ $item->id }}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Apakah yakin?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
    </table>
@endsection