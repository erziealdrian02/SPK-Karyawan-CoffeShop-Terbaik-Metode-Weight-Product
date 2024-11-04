<?php
include('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $absen_id = $_POST['absen_id'];
    $sd = mysqli_real_escape_string($connect, $_POST['sd']);
    $pc = mysqli_real_escape_string($connect, $_POST['pc']);
    $dt = mysqli_real_escape_string($connect, $_POST['dt']);
    $i = mysqli_real_escape_string($connect, $_POST['i']);
    $s = mysqli_real_escape_string($connect, $_POST['s']);
    $a = mysqli_real_escape_string($connect, $_POST['a']);
    $total_bobot = mysqli_real_escape_string($connect, $_POST['total_bobot']);

    // Update the database with the new data
    $query = "UPDATE absensi SET sd = '$sd', pc = '$pc', dt = '$dt', i = '$i', s = '$s', a = '$a', total_bobot = '$total_bobot' WHERE absen_id = '$absen_id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>
                alert('Berhasil mengedit data');
                window.location.href = '../absen-page.php';
              </script>";
    } else {
        echo "<script>alert('Gagal mengedit data: " . mysqli_error($connect) . "'); window.location.href = '../form_page.php';</script>";
    }
} else {
    echo "<script>alert('Form Tidak disubmit dengan benar'); window.location.href = '../category.php';</script>";
}
