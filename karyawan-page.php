<?php
include './componen/header.php';
include './componen/modal-karyawan-add.php';
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
            <a href="./process/print_karyawan.php" class="btn-download" target="_blank">
               <i class="bx bxs-cloud-download"></i>
               <span class="text">Print Karyawan</span>
            </a>
            <a href="#modal-add-karyawan" class="btn-add">
               <i class="bx bxs-plus-square"></i>
               <span class="text">Tambah Karyawan</span>
            </a>
         </div>
         <div class="table-data">
            <div class="order">
               <div class="head">
                  <h3>Data Karyawan</h3>
               </div>
               <table>
                  <thead>
                     <tr>
                        <th>Nama Karyawan</th>
                        <th>Jabatan</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor Telephone</th>
                        <th style="width: 24%">Alamat</th>
                        <th style="width: 12%">Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $no = 1;
                     $select = mysqli_query($connect, "SELECT * FROM karyawan");
                     while ($data = mysqli_fetch_array($select)) {
                     ?>
                        <tr>
                           <td class="user" style="align-items: center; display: flex;">
                              <img src="./images/karyawan/<?php echo $data['profile']; ?>" class="table-img" />
                              <p><?php echo $data['nama_karyawan']; ?></p>
                           </td>
                           <td><?php echo $data['jabatan_karyawan']; ?></td>
                           <td><?php echo $data['jk_karyawan']; ?></td>
                           <td><?php echo $data['tlp_karyawan']; ?></td>

                           <td><?php echo $data['alamat_karyawan']; ?></td>
                           <td>
                              <a href="#modal-edit-karyawan<?php echo $data['karyawan_id']; ?>" class="status edit">
                                 <i class="bx bx-edit"></i>
                              </a>
                              <a href="#modal-delete-karyawan<?php echo $data['karyawan_id']; ?>" class="status delete">
                                 <i class="bx bx-trash"></i>
                              </a>
                              <?php
                              include './componen/modal-karyawan-edit.php';
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