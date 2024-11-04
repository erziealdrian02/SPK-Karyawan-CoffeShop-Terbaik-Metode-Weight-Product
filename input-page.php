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

               <table>
                  <thead>
                     <tr style="text-align-last: center;">
                        <th>Nama Karyawan</th>
                        <th>Nilai Kerajinan</th>
                        <th>Nilai Kerja Sama</th>
                        <th>Nilai Tanggung Jawab</th>
                        <th>Nilai Disiplin</th>
                        <th>Nilai Ketelitian</th>
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
                           <td><?php echo $data['kj']; ?></td>
                           <td><?php echo $data['ks']; ?></td>
                           <td><?php echo $data['tj']; ?></td>
                           <td><?php echo $data['siplin']; ?></td>
                           <td><?php echo $data['ktlt']; ?></td>
                           <td>
                              <a href="#modal-edit-karyawan<?php echo $data['karyawan_id']; ?>" class="status edit">
                                 <i class="bx bx-edit"></i>
                              </a>
                              <?php
                              include './componen/modal-input-kriteria.php';
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