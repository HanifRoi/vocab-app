<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Vocab Japan</title>
</head>
<body>
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
            <input type="text" name="contoh">
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>