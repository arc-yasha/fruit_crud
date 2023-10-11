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
        <h2>Daftar Nama Buah</h2>
        <a href="{{ route('fruit.create') }}" class="btn btn-primary mb-3">Tambah Buah</a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fruits as $fruit)
                    <tr>
                        <th scope="row">{{ $fruit->id }}</th>
                        <td>{{ $fruit->nama }}</td>
                        <td>{{ $fruit->harga }}</td>
                        <td>{{ $fruit->berat }}</td>
                        <td>
                            <a href="{{ route('fruit.edit', ['fruit' => $fruit->id]) }}"
                                class="btn btn-primary">Edit</a>
                            <a href="{{ route('fruit.show', ['fruit' => $fruit->id]) }}"
                                class="btn btn-warning">Detail</a>
                            <form action="{{ route('fruit.destroy', ['fruit' => $fruit->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
