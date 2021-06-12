<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>

<body>
    <center>
        <h3>EDIT BUKU</h3>
    </center>

    @foreach($buku as $d)
    <form action="/buku/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" placeholder="ID" value="{{ $d->id_buku }}">
        <input type="text" name="nama_b" placeholder="Buku" value="{{ $d->judul }}"> <br> <br>
        <input type="text" name="alamat_b" placeholder="Tahun Terbit" value="{{ $d->tahun_terbit }}"> <br> <br>
        <input type="submit" value="Edit">
    </form>
    @endforeach
</body>

</html>