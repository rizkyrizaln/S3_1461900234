<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
</head>

<body>
    <center>
        <h3>TAMBAH BUKU</h3>
    </center>

    <form action="/buku/tambah" method="post">
        {{ csrf_field() }}
        <input type="text" name="nama_b" placeholder="Nama Buku"> <br> <br>
        <input type="text" name="alamat_b" placeholder="Tahun Terbit"> <br> <br>
        <input type="submit" value="Tambah">
    </form>
</body>

</html>