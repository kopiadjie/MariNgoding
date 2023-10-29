<!-- script di bawah ini digunakan di dalam file index.php -->

<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_warkop';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if ($conn) {
        // echo "Koneksi Berhasil";
    }

    mysqli_select_db($conn, $db);
?>