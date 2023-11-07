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
    <nav class="navbar navbar-light bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                WARKOP PEMUDA
            </a>
        </div>
    </nav>
    <!-- Produk -->
    <div class="container">

        <!-- Form -->
        <form method="POST" action="proses.php">

            <!-- Produk -->
            <div class="mb-3 row">
                <label for="produk" class="col-sm-2 col-form-label">
                    Produk
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="produk" id="produk" placeholder="Contoh: Sanger">
                </div>
            </div>

            <!-- Harga -->
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">
                    Harga
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga" id="Harga" placeholder="Contoh: Harga">
                </div>
            </div>

            <!-- Metode Bayar -->
            <div class="mb-3 row">
                <label for="pilih" class="col-sm-2 col-form-label">
                    Metode Bayar
                </label>
                <div class="col-sm-10">
                    <select class="form-select" name="pilih" >
                        <option selected>Pilih menu pembayaran</option>
                        <option value="1">Tunai</option>
                        <option value="2">Transfer Bank</option>
                        <option value="3">E-Wallet</option>
                    </select>
                </div>
            </div>

            <!-- Form masukkan pesan -->
            <div class="mb-3 row">
                <label for="kotakPesan" class="col-sm-2 col-form-label">
                    Masukkan Pesan
                </label>
                <div class="col-sm-5">
                    <textarea class="form-control" name="masukkan_pesan" id="kotakPesan" rows="3"></textarea>
                </div>
            </div>


            <!-- Button tambahkan data -->
            <form action="proses.php>
            <div class=" mb-3 row mt-4">
                <div class="col">
                    <?php
                    if (isset($_GET['ubah'])) {
                        ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            Simpan Perubahan
                        </button>
                        <?php
                    } else {
                        ?>
                        <button type="submit" name="aksi" value="add" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            Tambahkan
                        </button>
                        <?php
                    }
                    ?>
                    <a href="index.php" type="button" class="btn btn-danger">
                        <i class="fa fa-reply" aria-hidden="true"></i>
                        Batal
                    </a>
                </div>
            </form>
    </div>
</body>

</html>