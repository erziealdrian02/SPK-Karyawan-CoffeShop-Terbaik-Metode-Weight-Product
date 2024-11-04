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
                  <h3>Data Bobot Absen</h3>
               </div>
               <table>
                  <thead>
                     <tr style="text-align-last: center;">
                        <th>Surat Dokter</th>
                        <th>Pulang Cepat</th>
                        <th>Datang Telat</th>
                        <th>Izin</th>
                        <th>Sakit</th>
                        <th>Alfa</th>
                        <th>Total Bobot</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $no = 1;
                     $select = mysqli_query($connect, "SELECT * FROM absensi");
                     while ($data = mysqli_fetch_array($select)) {
                        $total_bobot = $data['sd'] + $data['pc'] + $data['dt'] + $data['i'] + $data['s'] + $data['a'];
                     ?>
                        <tr style="text-align: center;">
                           <td style="width: 12%;"><?php echo $data['sd']; ?></td>
                           <td style="width: 12%;"><?php echo $data['pc']; ?></td>
                           <td style="width: 12%;"><?php echo $data['dt']; ?></td>
                           <td style="width: 12%;"><?php echo $data['i']; ?></td>
                           <td style="width: 12%;"><?php echo $data['s']; ?></td>
                           <td style="width: 12%;"><?php echo $data['a']; ?></td>
                           <td style="width: 12%;"><b><?php echo $total_bobot; ?>%</b></td>
                           <td style="width: 12%;">
                              <a href="#modal-edit-absen<?php echo $data['absen_id']; ?>" class="status edit">
                                 <i class="bx bx-edit"></i>
                              </a>
                              <?php
                              include './componen/modal-absen.php';
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