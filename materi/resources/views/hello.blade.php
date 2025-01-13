<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello guys</h1>
    <p>Saya from Indonesia sedang belajar PHP</p>

    <a href="{{route('halaman-utama')}}">Dashboard</a>
    <a href="{{route('barang.index')}}">Halaman Barang</a>

    <form action="{{route('kirim')}}" method="post">
        @csrf

        <label for="">Nama Saya</label>
        <input type="text" name="nama">
        <button type="submit">Kirim</button>
    </form>

</body>

</html>