<?php
include('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kriteria_id = $_POST['kriteria_id'];
    $kj = mysqli_real_escape_string($connect, $_POST['kj']);
    $ks = mysqli_real_escape_string($connect, $_POST['ks']);
    $siplin = mysqli_real_escape_string($connect, $_POST['siplin']);
    $tj = mysqli_real_escape_string($connect, $_POST['tj']);
    $ktlt = mysqli_real_escape_string($connect, $_POST['ktlt']);

    // Update the datksase with the new data
    $query = "UPDATE kriteria SET kj = '$kj', ks = '$ks', siplin = '$siplin', tj = '$tj', ktlt = '$ktlt' WHERE kriteria_id = '$kriteria_id'"; // Add status_karyawan in the query
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>
                alert('Berhasil mengedit data');
                window.location.href = '../kriteria-page.php';
              </script>";
    } else {
        echo "<script>alert('Gagal mengedit data: " . mysqli_error($connect) . "'); window.location.href = '../form_page.php';</script>";
    }
} else {
    echo "<script>alert('Form Tidak ktltubmit dengan benar'); window.location.href = '../category.php';</script>";
}
