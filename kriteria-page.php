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
                  <h3>Data Kriteria</h3>
               </div>
               <table>
                  <thead>
                     <tr style="text-align-last: center;">
                        <th>Kerajinan</th>
                        <th>Kerja Sama</th>
                        <th>Tanggung Jawab</th>
                        <th>Disiplin</th>
                        <th>Ketelitian</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $no = 1;
                     $select = mysqli_query($connect, "SELECT * FROM kriteria");
                     while ($data = mysqli_fetch_array($select)) {
                     ?>
                        <tr style="text-align: center;">
                           <td style="width: 16%;"><?php echo $data['kj']; ?></td>
                           <td style="width: 16%;"><?php echo $data['ks']; ?></td>
                           <td style="width: 16%;"><?php echo $data['tj']; ?></td>
                           <td style="width: 16%;"><?php echo $data['siplin']; ?></td>
                           <td style="width: 16%;"><?php echo $data['ktlt']; ?></td>
                           <td>
                              <a href="#modal-edit-kriteria<?php echo $data['kriteria_id']; ?>" class="status edit">
                                 <i class="bx bx-edit"></i>
                              </a>
                              <?php
                              include './componen/modal-kriteria.php';
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