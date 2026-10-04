<html>
    <head>
        <title>Vocab Jepang</title>
    </head>
    <body>
        <h2>Vocabulary Japan</h2>
       <table border="1">
        <tr>
            <th>No</th>
            <th>H/K</th>
            <th>Kanji</th>
            <th>Arti</th>
            <th>Contoh Penggunaan</th>
        </tr>
        <tr>
            @foreach ($dataJapan as $item)
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->hork }}</td>
            <td>{{ $item->kanji }}</td>
            <td>{{ $item->arti }}</td>
            <td>{{ $item->contoh }}</td>
            @endforeach
        </tr>
       </table>
    </body>
</html>