<?php
function generate_breadcrumb()
{
    // Mendapatkan URL saat ini
    $current_url = basename($_SERVER['REQUEST_URI'], ".php");

    // Breadcrumb dasar
    $breadcrumb = '<ol class="breadcrumb">';

    // Tambahkan breadcrumb sesuai dengan URL saat ini
    if ($current_url == 'karyawan-page') {
        $breadcrumb .= '
        <li><i class="bx bx-chevron-right"></i></a>
        <li>
            <a >Karyawan</a>
        </li>
        ';
    } elseif ($current_url == 'landing-page') {
        $breadcrumb .= '
        ';
    } elseif ($current_url == 'kriteria-page') {
        $breadcrumb .= '
        <li><i class="bx bx-chevron-right"></i></a>
        <li>
            <a >Kriteria</a>
        </li>
        ';
    } elseif ($current_url == 'absen-page') {
        $breadcrumb .= '
        <li><i class="bx bx-chevron-right"></i></a>
        <li>
            <a >Absen</a>
        </li>
        ';
    } elseif ($current_url == 'penilaian-page') {
        $breadcrumb .= '
        <li><i class="bx bx-chevron-right"></i></a>
        <li>
            <a >Penilaian</a>
        </li>
        ';
    } elseif ($current_url == 'perhitungan-page') {
        $breadcrumb .= '
        <li><i class="bx bx-chevron-right"></i></a>
        <li>
            <a >Perhitungan</a>
        </li>
        ';
    } elseif ($current_url == 'ranking-page') {
        $breadcrumb .= '
        <li><i class="bx bx-chevron-right"></i></a>
        <li>
            <a >Rangking</a>
        </li>
        ';
    } elseif ($current_url == 'user-page') {
        $breadcrumb .= '
        <li><i class="bx bx-chevron-right"></i></a>
        <li>
            <a >User</a>
        </li>
        ';
    } elseif ($current_url == 'input-absen-page') {
        $breadcrumb .= '
        <li><i class="bx bx-chevron-right"></i></a>
        <li>
            <a >Input Nilai Absen</a>
        </li>
        ';
    } elseif ($current_url == 'hasil-absen-page') {
        $breadcrumb .= '
        <li><i class="bx bx-chevron-right"></i></a>
        <li>
            <a >Input Nilai Absen</a>
        </li>
        <li><i class="bx bx-chevron-right"></i></a>
        <li>
            <a >Lihat Nilai Absen</a>
        </li>
        ';
    } elseif ($current_url == 'input-page') {
        $breadcrumb .= '
        <li><i class="bx bx-chevron-right"></i></a>
        <li>
            <a>Input Nilai</a>
        </li>
        ';
    }
    // Tambahkan kondisi lainnya sesuai kebutuhan

    $breadcrumb .= '</ol>';
    return $breadcrumb;
}

function get_page_title()
{
    // Mendapatkan URL saat ini
    $current_url = basename($_SERVER['REQUEST_URI'], ".php");

    // Tentukan judul halaman sesuai dengan URL saat ini
    if ($current_url == 'landing-page') {
        return 'Dashboard';
    } elseif ($current_url == 'karyawan-page') {
        return 'Karyawan';
    } elseif ($current_url == 'kriteria-page') {
        return 'Kriteria';
    } elseif ($current_url == 'absen-page') {
        return 'Absen';
    } elseif ($current_url == 'penilaian-page') {
        return 'Penilaian';
    } elseif ($current_url == 'perhitungan-page') {
        return 'Perhitungan';
    } elseif ($current_url == 'ranking-page') {
        return 'Perangkingan';
    } elseif ($current_url == 'user-page') {
        return 'User';
    } elseif ($current_url == 'input-absen-page') {
        return 'Input Absen';
    } elseif ($current_url == 'hasil-absen-page') {
        return 'Hasil Absen';
    } elseif ($current_url == 'input-page') {
        return 'Input Nilai';
    }
    // Tambahkan kondisi lainnya sesuai kebutuhan

    return 'Dashboard'; // Default title
}

?>

<div class="left">
    <h1><?php echo get_page_title(); ?></h1>
    <ul class="breadcrumb">
        <li>
            <a href="#">Dashboard</a>
        </li>
        <?php echo generate_breadcrumb(); ?>
    </ul>
</div>