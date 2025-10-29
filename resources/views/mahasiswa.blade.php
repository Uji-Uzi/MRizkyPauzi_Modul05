<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>

        @foreach($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs->id }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->jurusan }}</td>
            </tr>
        @endforeach
    </table>
    <br> <br>
    <a href="{{ route('form') }}">KEMBALI</a>
</body>

</html>