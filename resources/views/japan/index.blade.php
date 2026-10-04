<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocab Japan</title>
</head>
<body>
        <h2>Vocabulary Japan</h2>
        <a href="/japan/create"><button>Tambah Data</button></a>
       <table border="1">
        <tr>
            <th>No</th>
            <th>H/K</th>
            <th>Kanji</th>
            <th>Arti</th>
            <th>Contoh Penggunaan</th>
        </tr>
        @foreach ($dataJapan as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->hork }}</td>
            <td>{{ $item->kanji }}</td>
            <td>{{ $item->arti }}</td>
            <td>{{ $item->contoh }}</td>
        </tr>
        @endforeach
       </table>
    </body>
</html>