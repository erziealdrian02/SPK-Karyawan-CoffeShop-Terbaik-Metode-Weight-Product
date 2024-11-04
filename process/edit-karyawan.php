<?php
include('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $karyawan_id = $_POST['karyawan_id'];
    $nama_karyawan = mysqli_real_escape_string($connect, $_POST['nama_karyawan']);
    $jabatan_karyawan = mysqli_real_escape_string($connect, $_POST['jabatan_karyawan']);
    $jk_karyawan = mysqli_real_escape_string($connect, $_POST['jk_karyawan']);
    $tlp_karyawan = mysqli_real_escape_string($connect, $_POST['tlp_karyawan']);
    $alamat_karyawan = mysqli_real_escape_string($connect, $_POST['alamat_karyawan']);

    // Proses upload file
    $profile_name = '';
    if (isset($_FILES['profile']) && $_FILES['profile']['error'] == 0) {
        $target_dir = "../images/karyawan/";
        $profile_name = basename($_FILES["profile"]["name"]);
        $target_file = $target_dir . $profile_name;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is an actual image or fake image
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
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
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
    }

    // Update the database with the new data
    if ($profile_name) {
        $query = "UPDATE karyawan SET nama_karyawan = '$nama_karyawan', jabatan_karyawan = '$jabatan_karyawan', jk_karyawan = '$jk_karyawan', tlp_karyawan = '$tlp_karyawan', alamat_karyawan = '$alamat_karyawan', profile = '$profile_name' WHERE karyawan_id = '$karyawan_id'";
    } else {
        $query = "UPDATE karyawan SET nama_karyawan = '$nama_karyawan', jabatan_karyawan = '$jabatan_karyawan', jk_karyawan = '$jk_karyawan', tlp_karyawan = '$tlp_karyawan', alamat_karyawan = '$alamat_karyawan' WHERE karyawan_id = '$karyawan_id'";
    }

    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>
                alert('Berhasil mengedit data');
                window.location.href = '../karyawan-page.php';
              </script>";
    } else {
        echo "<script>alert('Gagal mengedit data: " . mysqli_error($connect) . "'); window.location.href = '../form_page.php';</script>";
    }
} else {
    echo "<script>alert('Form Tidak disubmit dengan benar'); window.location.href = '../category.php';</script>";
}
