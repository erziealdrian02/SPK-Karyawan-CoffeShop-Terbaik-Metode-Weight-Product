<?php
session_start();
include 'koneksi.php';

if (isset($_GET['karyawan_id'])) {
    $karyawan_id = $_GET['karyawan_id'];
    $result = mysqli_query($connect, "DELETE FROM karyawan WHERE karyawan_id = '$karyawan_id'");

    if ($result) {
        echo "<script>
                alert('Berhasil Menghapus Data');
                window.location.href = '../karyawan-page.php';
              </script>";
    } else {
        echo "<script>alert('Gagal Menghapus');</script>";
    }
} else {
    echo "<h1>NGAPAIN WOI</h1>";
}
