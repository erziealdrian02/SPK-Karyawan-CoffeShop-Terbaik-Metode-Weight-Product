<section id="sidebar">
    <a href="landing-page.php" class="brand">
        <i class="bx bxs-coffee"></i>
        <span class="text">Coffe Shop HUBB</span>
    </a>
    <ul class="side-menu top">
        <li class="<?= basename($_SERVER['PHP_SELF']) == 'landing-page.php' ? 'active' : '' ?>">
            <a href="landing-page.php">
                <i class="bx bxs-home"></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="<?= basename($_SERVER['PHP_SELF']) == 'karyawan-page.php' ? 'active' : '' ?>">
            <a href="karyawan-page.php">
                <i class="bx bxs-user"></i>
                <span class="text">Karyawan</span>
            </a>
        </li>
        <li class="<?= basename($_SERVER['PHP_SELF']) == 'kriteria-page.php' ? 'active' : '' ?>">
            <a href="kriteria-page.php">
                <i class="bx bx-list-check"></i>
                <span class="text">Kriteria</span>
            </a>
        </li>
        <li class="<?= basename($_SERVER['PHP_SELF']) == 'absen-page.php' ? 'active' : '' ?>">
            <a href="absen-page.php">
                <i class="bx bxs-user-detail"></i>
                <span class="text">Kriteria Absen</span>
            </a>
        </li>
        <li class="<?= basename($_SERVER['PHP_SELF']) == 'input-absen-page.php' || basename($_SERVER['PHP_SELF']) == 'hasil-absen-page.php' ? 'active' : '' ?>">
            <a href="input-absen-page.php">
                <i class="bx bx-list-plus"></i>
                <span class="text">Input Data Absen</span>
            </a>
        </li>

        <li class="<?= basename($_SERVER['PHP_SELF']) == 'input-page.php' ? 'active' : '' ?>">
            <a href="input-page.php">
                <i class="bx bx-plus"></i>
                <span class="text">Input Data</span>
            </a>
        </li>
        <li class="<?= basename($_SERVER['PHP_SELF']) == 'perhitungan-page.php' ? 'active' : '' ?>">
            <a href="perhitungan-page.php">
                <i class="bx bxs-calculator"></i>
                <span class="text">Hasil Perhitungan</span>
            </a>
        </li>
        <li class="<?= basename($_SERVER['PHP_SELF']) == 'ranking-page.php' ? 'active' : '' ?>">
            <a href="ranking-page.php">
                <i class="bx bx-bar-chart-alt-2"></i>
                <span class="text">Hasil Perangkingan</span>
            </a>
        </li>
        <li class="<?= basename($_SERVER['PHP_SELF']) == 'user-page.php' ? 'active' : '' ?>">
            <a href="user-page.php">
                <i class="bx bx-group"></i>
                <span class="text">User</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="#modal-logout" class="logout">
                <i class="bx bxs-log-out-circle"></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>

<?php
include './componen/modal.php'
?>