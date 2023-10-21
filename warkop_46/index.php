<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Logo tab -->
    <link href="icon/icon.png" rel="Tab Icon">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

    <title>Warkopempatenam</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                WARKOP PEMUDA
            </a>
        </div>
    </nav>

    <!-- Judul -->
    <div class="container-fluid">
        <h1 class="mt-4">Data Warkop</h1>
        <figure>
            <blockquote class="blockquote">
                <p>Berisi data dari Warkopempatenam.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD <cite title="Source Title">Create Read Update Delete</cite>
            </figcaption>
        </figure>
        <!-- Tambah Data -->
        <a href="kelola.php" type="button" class="btn btn-primary mb-3">
            <i class="fa fa-plus"></i>
            Tambah Data
        </a>
        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
                <thead>
                    <tr>
                        <th><center>No.</center></th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Foto</th>
                        <th>Pemasukan</th>
                        <th>Pengeluaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sanger -->
                    <tr>
                        <td><center>1.</center></td>
                        <td>Sanger</td>
                        <td>10000</td>
                        <td>
                            <center>
                                <img src="img/Sanger.jpg" style="width: 150px">
                            </center>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil"></i>
                                Ubah
                            </a>
                            <button type="button" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                                Hapus
                            </button>

                        </td>
                    </tr>
                    <!-- Kopi pandan -->
                    <tr>
                        <td><center>2.</center></td>
                        <td>Kopi Pandan</td>
                        <td>12000</td>
                        <td>
                            <center>
                                <img src="img/Kopi pandan.jpg" style="width: 150px">
                            </center>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="kelola.php?ubah=2" type="button" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil"></i>
                                Ubah
                            </a>
                            <button type="button" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                                Hapus
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>