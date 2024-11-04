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
            <a href="./process/print.php" class="btn-download" target="_blank">
               <i class="bx bxs-cloud-download"></i>
               <span class="text">Download PDF</span>
            </a>
         </div>
         <div class="table-data">
            <div class="order">
               <div class="head">
                  <h3>Input Nilai Absensi</h3>
               </div>

               <?php
               // Ambil data yang telah diurutkan berdasarkan nilai vector_v dalam urutan menurun
               $sql = mysqli_query($connect, "SELECT * FROM karyawan ORDER BY vector_v DESC");
               if (!$sql) {
                  die('Query Error: ' . mysqli_error($connect));
               }
               ?>

               <table>
                  <thead>
                     <tr style="border:1px; text-align-last: center;">
                        <th style="width: 20%;">Nama <br>Karyawan</th>
                        <th>Rangking</th>
                        <th>Nilai <br>Kerajinan</th>
                        <th>Nilai <br>Kerja Sama</th>
                        <th>Nilai <br>Tanggung Jawab</th>
                        <th>Nilai <br>Disiplin</th>
                        <th>Nilai <br>Ketelitian</th>
                        <th>Vector S</th>
                        <th>Vector V</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $no = 1;
                     while ($data_absen = mysqli_fetch_array($sql)) {
                     ?>
                        <tr style="text-align: center;">
                           <td>
                              <a href="#modal-view<?php echo $data_absen['karyawan_id']; ?>" class="view"><?php echo $data_absen['nama_karyawan']; ?></a>
                              <?php include './componen/modal-view.php' ?>
                           </td>
                           <td><?php echo $no; ?></td>
                           <td><?php echo $data_absen['kj']; ?></td>
                           <td><?php echo $data_absen['ks']; ?></td>
                           <td><?php echo $data_absen['tj']; ?></td>
                           <td><?php echo $data_absen['siplin']; ?></td>
                           <td><?php echo $data_absen['ktlt']; ?></td>
                           <td><?php echo $data_absen['vector_s']; ?></td>
                           <td><?php echo $data_absen['vector_v']; ?></td>
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