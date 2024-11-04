<?php
include './componen/header.php';
include './process/koneksi.php'
?>

<?php
// Fetch total customers
$result = mysqli_query($connect, "SELECT COUNT(*) AS count FROM karyawan");
$row = mysqli_fetch_assoc($result);
$total_karyawan = $row['count'];
?>

<?php
// Fetch total customers
$result_1 = mysqli_query($connect, "SELECT COUNT(*) AS count FROM pengguna");
$row_1 = mysqli_fetch_assoc($result_1);
$total_pengguna = $row_1['count'];
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

         <ul class="box-info">
            <li>
               <i class="bx bx-user"></i>
               <span class="text">
                  <h3><?php echo $total_karyawan ?></h3>
                  <p>Total Karyawan</p>
               </span>
            </li>
            <li>
               <i class="bx bx-list-check"></i>
               <span class="text">
                  <h3>5</h3>
                  <p>Kriteria Penilaian</p>
               </span>
            </li>
            <li>
               <i class="bx bxs-group"></i>
               <span class="text">
                  <h3><?php echo $total_pengguna ?></h3>
                  <p>Total User</p>
               </span>
            </li>
         </ul>

         <div class="table-data">
            <div class="order">
               <div class="head">
                  <h3>About</h3>
               </div>
               <div class="about">
                  <div>
                     <img src="./images/ibnu-about.jpg" style="width: 350px; border-radius: 20%;" alt="About">
                  </div>
                  <div class="about-body">
                     <h1>Ibnu Farhatan Darmansyah</h1>
                     <h3>202043502533</h3>
                     <p>
                        Saya adalah Mahasiswa Akhir di Universitas Indra prasta PGRI, Fakultas Teknik Informatika....(Lanjutin aja nu di landing-page.php line 71)
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <!-- MAIN -->
   </section>
   <!-- CONTENT -->

   <script src="./js/script.js"></script>
</body>

</html>