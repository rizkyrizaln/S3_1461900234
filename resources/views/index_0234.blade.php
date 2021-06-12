<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku</title>
</head>

<body>
    <center>
        <h3>Buku</h3>
    </center>

    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama Buku</th>
            <th>Tahun Terbit</th>
            <th>Jenis Buku</th>
        </tr>
        @php
        $i = 1;
        @endphp

        @foreach($buku as $d)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $d->judul }}</td>
            <td>{{ $d->tahun_terbit }}</td>
            <td>{{ $d->jenis }}</td>


            <td>
                <a href="/buku/edit/{{ $d->id_buku }}">Edit</a>
                |
                <a href="/buku/del/{{ $d->id_buku }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="/buku/add">+ Tambah</a>
</body>

</html>