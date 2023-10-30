<!-- Codingan koneksi php -->
<?php
    include 'koneksi.php';

    // script untuk mengakses mysql menggunakan query
    $query = "SELECT * FROM penjualan_barang;";
    $sql = mysqli_query($conn, $query);
    $no = 0;
?>

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
        <!-- Tabel -->
        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
                <thead>
                    <tr>
                        <th>
                            <center>No.</center>
                        </th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>
                            <center>
                                Foto
                            </center>
                        </th>
                        <th>Pemasukan</th>
                        <th>Pengeluaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sanger -->
                    <?php
                    while ($result = mysqli_fetch_assoc($sql)) {
                        ?>
                        <tr>
                            <td>
                                <center>
                                    <?php
                                    echo ++ $no;
                                    ?>.
                                </center>
                            </td>
                            <td>
                                <?php
                                echo $result['produk'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $result['harga'];
                                ?>
                            </td>
                            <td>
                                <center>
                                    <img src="img/<?php
                                    echo $result['foto_produk'];
                                    ?>" alt="Gambar Produk" title="Gambar Produk" , style="width:150px;">
                                </center>
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="kelola.php?ubah=<?php echo $result['id_barang'] ?>" type="button"
                                    class="btn btn-success btn-sm">
                                    <i class="fa fa-pencil"></i>
                                    Ubah
                                </a>
                                <a href="proses.php?hapus="<?php echo $result['id_barang'] ?> type="button"
                                    class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                    Hapus
                                </a>

                            </td>
                        </tr>

                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>