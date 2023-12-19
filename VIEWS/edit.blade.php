<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h2>Form Tambah Data Buah</h2>
        <form action="{{ route('fruit.update', ['fruit' => $fruit->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Buah</label>
                <input type="text" class="form-control" name="nama" value="{{ $fruit->nama }}">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Buah</label>
                <input type="text" class="form-control" name="harga" value="{{ $fruit->harga }}">
            </div>
            <div class="mb-3">
                <label for="berat" class="form-label">Berat Buah</label>
                <input type="text" class="form-control" name="berat" value="{{ $fruit->berat }}">
            </div>
            @if ($fruit->foto)
                <div class="mb-3">
                    <img style="max-width: 80px" src="{{ url('foto') . '/' . $fruit->foto }}" alt="foto_buah">
                </div>
            @endif
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Buah</label>
                <input type="file" class="form-control" name="foto" placeholder="Foto Buah">
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
