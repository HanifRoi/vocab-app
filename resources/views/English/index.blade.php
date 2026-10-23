@extends('layouts.app')
@section('content')
<title>Belajar Inggris</title>
<h2>Data Vocab Inggris</h2>
<a href="/english/create"><button>Tambah Data</button></a>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>English</th>
            <th>Pengucapan</th>
            <th>Arti</th>
            <th>Contoh</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataEng as $item)
             <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->english }}</td>
                <td>{{ $item->pengucapan }}</td>
                <td>{{ $item->arti }}</td>
                <td>{{ $item->contoh }}</td>
                <td>
                    <a href="/english/{{ $item->id }}/edit"><button>Edit</button></a>
                    <form action="/english{{ $item->id }}" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection