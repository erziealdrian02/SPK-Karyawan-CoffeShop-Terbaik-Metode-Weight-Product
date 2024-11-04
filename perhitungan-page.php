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
                        <th style="width: 20%;">Nama <br>Karyawan</th>
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
                     $sql = mysqli_query($connect, "SELECT * FROM karyawan");
                     if (!$sql) {
                        die('Query Error: ' . mysqli_error($connect));
                     }

                     $vector_sums = []; // Array untuk menyimpan semua nilai Vector S

                     // Loop pertama untuk menghitung Vector S dan menyimpannya
                     while ($data_absen = mysqli_fetch_array($sql)) {
                        $select = mysqli_query($connect, "SELECT * FROM kriteria");
                        if (!$select) {
                           die('Query Error: ' . mysqli_error($connect));
                        }

                        // Menghitung Bobot dan Vector S untuk setiap baris data
                        while ($data_bobot = mysqli_fetch_array($select)) {
                           $total_bobot = $data_bobot['kj'] + $data_bobot['ks'] + $data_bobot['tj'] + $data_bobot['siplin'] + $data_bobot['ktlt'];
                           $bobot_1 = $data_bobot['kj'] / $total_bobot;
                           $bobot_2 = $data_bobot['ks'] / $total_bobot;
                           $bobot_3 = $data_bobot['tj'] / $total_bobot;
                           $bobot_4 = $data_bobot['siplin'] / $total_bobot;
                           $bobot_5 = $data_bobot['ktlt'] / $total_bobot;

                           // Menghitung Vector S
                           $vector = pow($data_absen['kj'], $bobot_1) *
                              pow($data_absen['ks'], $bobot_2) *
                              pow($data_absen['tj'], $bobot_3) *
                              pow($data_absen['siplin'], $bobot_4) *
                              pow($data_absen['ktlt'], $bobot_5);

                           // Simpan Vector S ke dalam array
                           $vector_sums[] = $vector;
                        }
                     }

                     // Hitung total semua nilai Vector S
                     $total_vector_s = array_sum($vector_sums);

                     // Reset ulang posiplinter hasil query
                     mysqli_data_seek($sql, 0);
                     $no = 1;

                     // Loop kedua untuk menghitung dan menampilkan Vector V
                     while ($data_absen = mysqli_fetch_array($sql)) {
                        $select = mysqli_query($connect, "SELECT * FROM kriteria");
                        if (!$select) {
                           die('Query Error: ' . mysqli_error($connect));
                        }

                        while ($data_bobot = mysqli_fetch_array($select)) {
                           $total_bobot = $data_bobot['kj'] + $data_bobot['ks'] + $data_bobot['tj'] + $data_bobot['siplin'] + $data_bobot['ktlt'];
                           $bobot_1 = $data_bobot['kj'] / $total_bobot;
                           $bobot_2 = $data_bobot['ks'] / $total_bobot;
                           $bobot_3 = $data_bobot['tj'] / $total_bobot;
                           $bobot_4 = $data_bobot['siplin'] / $total_bobot;
                           $bobot_5 = $data_bobot['ktlt'] / $total_bobot;

                           // Menghitung Vector S
                           $vector = pow($data_absen['kj'], $bobot_1) *
                              pow($data_absen['ks'], $bobot_2) *
                              pow($data_absen['tj'], $bobot_3) *
                              pow($data_absen['siplin'], $bobot_4) *
                              pow($data_absen['ktlt'], $bobot_5);

                           // Menghitung Vector V
                           $vector_v = $vector / $total_vector_s;
                           $vector = number_format($vector, 2, '.', '');
                           $vector_v = number_format($vector_v, 2, '.', '');

                           $update_query_s = "UPDATE karyawan SET vector_s = '$vector' WHERE karyawan_id = '{$data_absen['karyawan_id']}'";
                           mysqli_query($connect, $update_query_s);

                           $update_query_v = "UPDATE karyawan SET vector_v = '$vector_v' WHERE karyawan_id = '{$data_absen['karyawan_id']}'";
                           mysqli_query($connect, $update_query_v);
                        }
                     ?>
                        <tr style="text-align: center;">
                           <td>
                              <a href="#modal-view<?php echo $data_absen['karyawan_id']; ?>" class="view"><?php echo $data_absen['nama_karyawan']; ?></a>
                              <?php include './componen/modal-view.php' ?>
                           </td>
                           <td><?php echo $data_absen['kj']; ?></td>
                           <td><?php echo $data_absen['ks']; ?></td>
                           <td><?php echo $data_absen['tj']; ?></td>
                           <td><?php echo $data_absen['siplin']; ?></td>
                           <td><?php echo $data_absen['ktlt']; ?></td>
                           <td><?php echo $vector; ?></td>
                           <td><?php echo $vector_v; ?></td>
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