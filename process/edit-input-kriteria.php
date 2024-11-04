<?php
include('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $karyawan_id = $_POST['karyawan_id'];
    $kj = mysqli_real_escape_string($connect, $_POST['kj']);
    $ks = mysqli_real_escape_string($connect, $_POST['ks']);
    $tj = mysqli_real_escape_string($connect, $_POST['tj']);
    $siplin = mysqli_real_escape_string($connect, $_POST['siplin']);
    $ktlt = mysqli_real_escape_string($connect, $_POST['ktlt']);
    $a = mysqli_real_escape_string($connect, $_POST['a']);
    // $total_bobot = mysqli_real_escape_string($connect, $_POST['total_bobot']);

    // Update the database with the new data
    $query = "UPDATE karyawan SET kj = '$kj', ks = '$ks', tj = '$tj', siplin = '$siplin', ktlt = '$ktlt' WHERE karyawan_id = '$karyawan_id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>
                alert('Berhasil mengedit data');
                window.location.href = '../input-page.php';
              </script>";
    } else {
        echo "<script>alert('Gagal mengedit data: " . mysqli_error($connect) . "'); window.location.href = '../form_page.php';</script>";
    }
} else {
    echo "<script>alert('Form Tidak disubmit dengan benar'); window.location.href = '../category.php';</script>";
}
