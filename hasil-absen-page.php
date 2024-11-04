<?php
include './componen/header.php';
include './process/koneksi.php'
?>

<body>
   <!-- SIDEBAR -->
   <?php
   include './componen/sidebar.php';
   ?>
   <!-- SIDEBAR -->

   <!-- CONTENT -->
   <section id="content">
      <!-- NAVBAR -->
      <?php
      include './componen/navbar.php';
      ?>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
         <div class="head-title">
            <?php
            include './componen/breadcrumb.php';
            ?>
         </div>
         <div class="table-data">
            <div class="order">
               <div class="head">
                  <h3>Hasil Nilai Absensi</h3>
               </div>
               <div class="switch">
                  <a href="./input-absen-page.php" class="switch-btn <?= basename($_SERVER['PHP_SELF']) == 'input-absen-page.php' ? 'active' : '' ?>">
                     <i class="bx bxs-plus-square"></i>
                     <span class="text">Input Nilai Absen</span>
                  </a>
                  <a href="./hasil-absen-page.php" class="switch-btn <?= basename($_SERVER['PHP_SELF']) == 'hasil-absen-page.php' ? 'active' : '' ?>">
                     <i class="bx bx-calendar-check"></i>
                     <span class="text">Lihat Nilai Absen</span>
                  </a>
               </div>
               <table>
                  <thead>
                     <tr style="border:1px; text-align-last: center;">
                        <th style="width: 12px;">Nama <br> Karyawan</th>
                        <th style="width: 12px;">Banyak <br> Surat Dokter</th>
                        <th style="width: 12px;">Banyak <br> Pulang Cepat</th>
                        <th style="width: 12px;">Banyak <br> Datang Telat</th>
                        <th style="width: 12px;">Banyak <br> Izin</th>
                        <th style="width: 12px;">Banyak <br> Sakit</th>
                        <th style="width: 12px;">Banyak <br> Alfa</th>
                        <th style="width: 5px;">Point <br> Kerajinan</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $sql = mysqli_query($connect, "SELECT * FROM karyawan");
                     if (!$sql) {
                        die('Query Error: ' . mysqli_error($connect));
                     }
                     while ($data_absen = mysqli_fetch_array($sql)) {
                        $select = mysqli_query($connect, "SELECT * FROM absensi");
                        if (!$select) {
                           die('Query Error: ' . mysqli_error($connect));
                        }
                        while ($data_bobot = mysqli_fetch_array($select)) {
                           // Menghitung nilai berdasarkan persentase
                           $sd_value = ($data_absen['sd'] / 100) * $data_bobot['sd'];
                           $pc_value = ($data_absen['pc'] / 100) * $data_bobot['pc'];
                           $dt_value = ($data_absen['dt'] / 100) * $data_bobot['dt'];
                           $i_value = ($data_absen['i'] / 100) * $data_bobot['i'];
                           $s_value = ($data_absen['s'] / 100) * $data_bobot['s'];
                           $a_value = ($data_absen['a'] / 100) * $data_bobot['a'];
                           $total_perhitungan = ($sd_value + $pc_value + $dt_value + $i_value + $s_value + $a_value) * 100;
                           $pengurangan = 100 - $total_perhitungan;

                           if ($pengurangan == 100) {
                              $point_absen = 100;
                           } elseif ($pengurangan >= 99 && $pengurangan < 100) {
                              $point_absen = 90;
                           } elseif ($pengurangan >= 95 && $pengurangan < 99) {
                              $point_absen = 80;
                           } elseif ($pengurangan >= 91 && $pengurangan < 95) {
                              $point_absen = 70;
                           } elseif ($pengurangan >= 87 && $pengurangan < 91) {
                              $point_absen = 60;
                           } elseif ($pengurangan >= 83 && $pengurangan < 87) {
                              $point_absen = 50;
                           } elseif ($pengurangan >= 79 && $pengurangan < 83) {
                              $point_absen = 40;
                           } elseif ($pengurangan >= 75 && $pengurangan < 79) {
                              $point_absen = 30;
                           } elseif ($pengurangan >= 71 && $pengurangan < 75) {
                              $point_absen = 20;
                           } elseif ($pengurangan >= 67 && $pengurangan < 71) {
                              $point_absen = 10;
                           } elseif ($pengurangan >= 63 && $pengurangan < 67) {
                              $point_absen = 0;
                           } elseif ($pengurangan >= 59 && $pengurangan < 63) {
                              $point_absen = -10;
                           } else {
                              $point_absen = -20;
                           }

                           // Update point_absen in the database
                           $update_query = "UPDATE karyawan SET point_absen = '$point_absen' WHERE karyawan_id = '{$data_absen['karyawan_id']}'";
                           mysqli_query($connect, $update_query);
                        }
                     ?>
                        <tr style="text-align: center;">
                           <td>
                              <p><?php echo $data_absen['nama_karyawan']; ?></p>
                           </td>
                           <td><?php echo $sd_value ?></td>
                           <td><?php echo $pc_value; ?></td>
                           <td><?php echo $dt_value; ?></td>
                           <td><?php echo $i_value; ?></td>
                           <td><?php echo $s_value; ?></td>
                           <td><?php echo $a_value; ?></td>
                           <td><?php echo $point_absen; ?></td>
                        </tr>
                     <?php
                     } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </main>

      <!-- MAIN -->
   </section>
   <!-- CONTENT -->

   <?php
   include './componen/script.php';
   ?>