<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .tombol {
            --bs-btn-padding-x: 0.75rem;
            --bs-btn-padding-y: 0.375rem;
            --bs-btn-font-family: ;
            --bs-btn-font-size: 1rem;
            --bs-btn-font-weight: 400;
            --bs-btn-line-height: 1.5;
            --bs-btn-color: var(--bs-body-color);
            --bs-btn-bg: transparent;
            --bs-btn-border-width: var(--bs-border-width);
            --bs-btn-border-color: transparent;
            --bs-btn-border-radius: var(--bs-border-radius);
            --bs-btn-hover-border-color: transparent;
            --bs-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
            --bs-btn-disabled-opacity: 0.65;
            --bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
            display: inline-block;
            padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
            font-family: var(--bs-btn-font-family);
            font-size: var(--bs-btn-font-size);
            font-weight: var(--bs-btn-font-weight);
            line-height: var(--bs-btn-line-height);
            color: var(--bs-btn-color);
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
            border-radius: var(--bs-btn-border-radius);
            background-color: var(--bs-btn-bg);
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        .tombol-hijau {
            --bs-btn-color: #fff;
            --bs-btn-bg: #198754;
            --bs-btn-border-color: #198754;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #157347;
            --bs-btn-hover-border-color: #146c43;
            --bs-btn-focus-shadow-rgb: 60, 153, 110;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #146c43;
            --bs-btn-active-border-color: #13653f;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #198754;
            --bs-btn-disabled-border-color: #198754
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Latihan Bootstrap</h1>
    </div>
    <div class="container d-flex">


        @foreach ($fruits as $fruit)
            <div class="card mx-3 my-3" style="width: 18rem;">
                <img src="data:image/jpeg;base64,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"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $fruit->nama }}</h5>
                    <p class="card-text">Harga: Rp. {{ $fruit->harga }} - Berat: {{ $fruit->berat }}</p>
                    <a href="#" class="btn btn-primary">+ Keranjang</a>
                </div>
            </div>
        @endforeach

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
