<?php
session_start();
if ($_SESSION['stat'] != 'masuk') {
    echo "<script>alert('anda belum login')</script>";
    header("location:index.php?id=out");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <!-- My CSS -->
    <link rel="stylesheet" href="./css/style.css" />

    <title>AdminHub</title>
</head>