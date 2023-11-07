<?php
    include 'koneksi.php';

    if (isset($_POST["aksi"])) {
            if ($_POST["aksi"] == "add") {
                
                $produk = $_POST['produk'];
                $harga = $_POST['harga'];
                $foto = "Sanger.jpg";
                // $metode_bayar = $_POST['metode_bayar'];

                $query = "INSERT INTO penjualan_barang VALUES(null, '$produk', '$harga', '$foto', null, null)";
                $sql = mysqli_query($conn, $query);

                if ($sql) {
                    header("location: index.php");
                    // echo "Data berhasil ditambahkan <a href='index.php'>[Home]</a>";
                } else {
                    echo $query;
                }

                // echo $produk." | ".$harga." | ".$metode_bayar." | ".$foto;

                // echo "<br>Tambah Data <a href='index.php'>[Home]</a>";

            } else if ($_POST["aksi"] == "edit") {
                echo "Edit Data <a href='index.php'>[Home]</a>";
            }
        }

        if (isset($_GET['hapus'])) {
            $id_pesanan = $_GET['hapus'];
            $query = "DELETE FROM penjualan_barang WHERE id_pesanan = '$id_pesanan';";
            $sql = mysqli_query($conn, $query);

            if ($sql) {
                header("location: index.php");
                // echo "Data berhasil ditambahkan <a href='index.php'>[Home]</a>";
            } else {
                echo $query;
            }
            
            // echo "Hapus Data <a href='index.php'>[Home]</a>";
        }
?>