<?php
include("koneksi.php");

if (isset($_POST['submit'])) {
    // Mengambil data dari form
    $nama_karyawan = $_POST['nama_karyawan'];
    $jabatan_karyawan = $_POST['jabatan_karyawan'];
    $jk_karyawan = $_POST['jk_karyawan'];
    $tlp_karyawan = $_POST['tlp_karyawan'];
    $alamat_karyawan = $_POST['alamat_karyawan'];

    // Proses upload file
    $target_dir = "../images/karyawan/";
    $profile_name = basename($_FILES["profile"]["name"]);
    $target_file = $target_dir . $profile_name;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check for upload errors
    if ($_FILES["profile"]["error"] != 0) {
        echo "Sorry, there was an error uploading your file.";
        $uploadOk = 0;
    }

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["profile"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["profile"]["size"] > 50000000) { // 500KB limit
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
            // File berhasil diupload
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Generate ID karyawan secara acak
    $random_number = mt_rand(10, 100); // Generate a random number between 10 and 100
    $karyawan_id = 'KAR' . $random_number;

    // Query untuk memasukkan data ke dalam tabel karyawan
    $sql = "INSERT INTO karyawan (karyawan_id, nama_karyawan, jabatan_karyawan, jk_karyawan, tlp_karyawan, alamat_karyawan, profile) 
            VALUES ('$karyawan_id', '$nama_karyawan', '$jabatan_karyawan', '$jk_karyawan', '$tlp_karyawan', '$alamat_karyawan', '$profile_name')";

    $query = mysqli_query($connect, $sql);

    if ($query) {
        echo "<script>
                alert('Berhasil Tambah Data');
                window.location.href = '../karyawan-page.php';
              </script>";
    } else {
        echo "Gagal memasukkan data: " . mysqli_error($connect);
    }

    mysqli_close($connect);
} else {
    echo "Form tidak disubmit dengan benar";
}
