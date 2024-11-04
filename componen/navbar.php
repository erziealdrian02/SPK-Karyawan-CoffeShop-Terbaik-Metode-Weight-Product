<?php
// Periksa apakah sesi sudah dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<nav>
    <i class="bx bx-menu"></i>
    <?php
    if (isset($_SESSION['nama_pengguna'])) {
        // Lakukan query untuk mendapatkan profile berdasarkan nama_pengguna dari sesi
        $nama_pengguna = $_SESSION['nama_pengguna'];
        $query = "SELECT profile FROM pengguna WHERE nama_pengguna='$nama_pengguna'";
        $result = mysqli_query($connect, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
            $profile_image = $data['profile'];
        } else {
            // Jika tidak ditemukan profil, gunakan gambar default
            $profile_image = './images/image.png';
        }
    } else {
        // Jika sesi nama_pengguna tidak ditemukan, gunakan gambar default
        $profile_image = './images/image.png';
    }
    ?>
    <a href="#" class="profile">
        <img src="./images/user/<?php echo htmlspecialchars($profile_image); ?>" alt="Profile Image" />
    </a>
</nav>