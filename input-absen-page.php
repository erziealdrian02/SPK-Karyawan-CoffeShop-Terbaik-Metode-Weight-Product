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
                  <h3>Input Nilai Absensi</h3>
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
                     <tr style="text-align-last: center;">
                        <th>Nama Karyawan</th>
                        <th>Banyak Surat Dokter</th>
                        <th>Banyak Pulang Cepat</th>
                        <th>Banyak Datang Telat</th>
                        <th>Banyak Izin</th>
                        <th>Banyak Sakit</th>
                        <th>Banyak Alfa</th>
                        <th style="width: 5%">Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $no = 1;
                     $select = mysqli_query($connect, "SELECT * FROM karyawan");
                     while ($data = mysqli_fetch_array($select)) {
                     ?>
                        <tr style="text-align: center;">
                           <td>
                              <p><?php echo $data['nama_karyawan']; ?></p>
                           </td>
                           <td><?php echo $data['sd']; ?></td>
                           <td><?php echo $data['pc']; ?></td>
                           <td><?php echo $data['dt']; ?></td>
                           <td><?php echo $data['i']; ?></td>
                           <td><?php echo $data['s']; ?></td>
                           <td><?php echo $data['a']; ?></td>
                           <td>
                              <a href="#modal-edit-karyawan<?php echo $data['karyawan_id']; ?>" class="status edit">
                                 <i class="bx bx-edit"></i>
                              </a>
                              <?php
                              include './componen/modal-nilai-absen.php';
                              ?>
                           </td>
                        </tr>
                     <?php $no++;
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