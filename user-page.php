<?php
include './componen/header.php';
include './process/koneksi.php';
include './componen/modal-user-add.php';
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
            <a href="#modal-add-user" class="btn-add">
               <i class="bx bxs-plus-square"></i>
               <span class="text">Tambah User</span>
            </a>
         </div>
         <div class="table-data">
            <div class="order">
               <div class="head">
                  <h3>Data User</h3>
               </div>
               <table>
                  <thead>
                     <tr>
                        <th>Nama USer</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th style="width: 12%">Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $no = 1;
                     $select = mysqli_query($connect, "SELECT * FROM pengguna");
                     while ($data = mysqli_fetch_array($select)) {
                     ?>
                        <tr>
                           <td class="user" style="align-items: center; display: flex;">
                              <img src="./images/user/<?php echo $data['profile']; ?>" class="table-img" />
                              <p><?php echo $data['nama_pengguna']; ?></p>
                           </td>
                           <td><?php echo $data['username']; ?></td>
                           <td><?php echo $data['password']; ?></td>
                           <td>
                              <a href="#modal-edit-user<?php echo $data['pengguna_id']; ?>" class="status edit">
                                 <i class="bx bx-edit"></i>
                              </a>
                              <a href="#modal-delete-user<?php echo $data['pengguna_id']; ?>" class="status delete">
                                 <i class="bx bx-trash"></i>
                              </a>
                              <?php
                              include './componen/modal-user-edit.php';
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