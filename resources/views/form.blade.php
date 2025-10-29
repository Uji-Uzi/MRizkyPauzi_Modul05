<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <h2>Input data Mahasiswa</h2>

    <form action="/simpan" method="post">
        @csrf
        <label for="nama">Nama:</label> <br>
        <input type="text" name="nama"> <br> <br>

        <label for="nim">NIM:</label> <br>
        <input type="text" name="nim"> <br> <br>

        <label for="jurusan">Jurusan:</label> <br>
        <input type="text" name="jurusan"> <br> <br>

        <button type="submit">Simpan</button>

    </form>
</body>
</html>