<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class="bg-white card container-xl col-6 border my-3 rounded px-5 py-3 pb-5">
        {{-- <h1>Halo!!</h1> --}}
        @if (Auth::user()->role == 'sm')
            <h1>Hello, {{ $data = Auth::user()->name }}</h1>
            {{-- <li class="list-group-item">Menu Admin</li> --}}
        @endif
        @if (Auth::user()->role == 'user')
            {{-- <li class="list-group-item">Menu User</li> --}}
            <h1>Hello, {{ $data = Auth::user()->name }}</h1>
        @endif
        @if (Auth::user()->role == 'supplier')
            {{-- <li class="list-group-item">Menu Supplier</li> --}}
            <h1>Hello, {{ $data = Auth::user()->name }}</h1>
        @endif
        <div>Selamat datang di halaman dashboard</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-light">
                    <th>No</th>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td class="d-flex justify-content-center">
                            <a href="#" class="btn btn-sm btn-primary">Embo</a>
                            <a href="#" class="btn btn-sm btn-danger mx-1">Hapus</a>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div><a href="/logout" class="btn btn-sm btn-secondary">Logout >></a></div>

        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
