@extends('layouts.app')
@section('content')
<title>Belajar Inggris</title>
<h2>Data Vocab Inggris</h2>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>English</th>
            <th>Pengucapan</th>
            <th>Arti</th>
            <th>Contoh</th>
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
            </tr>
        @endforeach
    </tbody>
</table>
@endsection