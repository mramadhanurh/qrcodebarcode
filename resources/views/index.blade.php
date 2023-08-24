<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Barcode QRcode In Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <h1 class="text-danger pt-4 text-center mb-4">Product</h1>
            <hr>
            <div class="pb-2">
                <a href="/create" class="btn btn-primary">Tambah Data</a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Barcode</th>
                        <th scope="col">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $item)
                    <tr>
                        <th>{{ $item->id }}</th>
                        <th>{{ $item->nama }}</th>
                        <th>{{ $item->harga }}</th>
                        <th>{!! DNS2D::getBarcodeHTML("$item->product_code", 'QRCODE') !!}
                            P - {{ $item->product_code }}
                        </th>
                        <th>{{ $item->deskripsi }}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>