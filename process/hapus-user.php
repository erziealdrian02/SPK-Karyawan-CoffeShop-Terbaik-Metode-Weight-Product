<?php
session_start();
include 'koneksi.php';

if (isset($_GET['pengguna_id'])) {
    $pengguna_id = $_GET['pengguna_id'];
    $result = mysqli_query($connect, "DELETE FROM pengguna WHERE pengguna_id = '$pengguna_id'");

    if ($result) {
        echo "<script>
                alert('Berhasil Menghapus Data');
                window.location.href = '../user-page.php';
              </script>";
    } else {
        echo "<script>alert('Gagal Menghapus');</script>";
    }
} else {
    echo "<h1>NGAPAIN WOI</h1>";
}
