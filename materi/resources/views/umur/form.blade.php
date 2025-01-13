<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Form Umur</title>
</head>

<body>
    <h1>Form Umur</h1>
    <p>Masukan umur anda dibawah.</p>
    <!-- jika umur tidak sesuai kriteria -->
    @if (session('gagal'))
    <span style="color: red;">Gagal! {{session('gagal')}}</span>
    @endif

    <!-- jika ada error dari validator -->
    @if ($errors->any())
    <ol>

        <li style="color: red;">Errornya : </li>
        <!-- loop error yang ada -->
        @foreach ($errors->all() as $item)
        <li style="color: red;">{{$item}}</li>
        @endforeach

    </ol>
    @endif

    <!-- form -->
    <form action="{{route('proses-umur')}}" method="post">
        @csrf
        <label for="">Masukan umur</label>
        <input type="number" name="umur" required>
        <button type="submit">Masuk</button>
    </form>
</body>

</html>