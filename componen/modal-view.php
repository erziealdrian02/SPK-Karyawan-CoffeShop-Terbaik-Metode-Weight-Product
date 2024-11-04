<!-- Modal Edit -->
<div class="modal" id="modal-view<?php echo $data_absen['karyawan_id']; ?>" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 800px; top:-0%">
        <div class="modal-header">
            <h2>Lihat Profile Karyawan</h2>
            <a href="#" class="btn-close" aria-hidden="true">×</a>
        </div>
        <div class="modal-body">
            <div style="display: flex; align-items: center; justify-content: center;">
                <div>
                    <img src="./images/karyawan/<?php echo $data_absen['profile']; ?>" style="height: 250px; border-radius: 10%; margin-right: 20px;" alt="Profile">
                </div>
                <div>
                    <table>
                        <tr>
                            <th>Nama:</th>
                            <td><?php echo $data_absen['nama_karyawan']; ?></td>
                        </tr>
                        <tr>
                            <th>Jabatan:</th>
                            <td><?php echo $data_absen['jabatan_karyawan']; ?></td>
                        </tr>
                        <tr>
                            <th style="width: 200px;">Jenis Kelamin:</th>
                            <td><?php echo $data_absen['jk_karyawan']; ?></td>
                        </tr>
                        <tr>
                            <th>Alamat:</th>
                            <td><?php echo $data_absen['alamat_karyawan']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div style="text-align: center; margin-top: 10px;">
                <h2>Banyak Absensi</h2>
                <table class="table v-middle" style="margin: 10px;">
                    <thead>
                        <tr class="bg-light" style="text-align-last: center;">
                            <th class="border-top-0">Banyak Surat Dokter</th>
                            <th class="border-top-0">Banyak Pulang Cepat</th>
                            <th class="border-top-0">Banyak Datang Telat</th>
                            <th class="border-top-0">Banyak Izin</th>
                            <th class="border-top-0">Banyak Sakit</th>
                            <th class="border-top-0">Banyak Alfa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="text-align: center;">
                            <td style="text-align: center;"><?php echo $data_absen['sd']; ?></td>
                            <td style="text-align: center;"><?php echo $data_absen['pc']; ?></td>
                            <td style="text-align: center;"><?php echo $data_absen['dt']; ?></td>
                            <td style="text-align: center;"><?php echo $data_absen['i']; ?></td>
                            <td style="text-align: center;"><?php echo $data_absen['s']; ?></td>
                            <td style="text-align: center;"><?php echo $data_absen['a']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="text-align: center; margin-top: 10px;">
                <h2>Penilaian Karyawan</h2>
                <div style="display: flex; justify-content: space-evenly; margin-top: 10px; margin-bottom:10px;">
                    <p>Vector S : <?php echo $data_absen['vector_s']; ?></p>
                    <p>Vector V : <?php echo $data_absen['vector_v']; ?></p>
                </div>
                <table class="table v-middle" style="margin: auto;">
                    <thead>
                        <tr class="bg-light" style="text-align: center;">
                            <th class="border-top-0">Nilai Kerajinan</th>
                            <th class="border-top-0">Nilai Kerja Sama</th>
                            <th class="border-top-0">Nilai Tanggung Jawab</th>
                            <th class="border-top-0">Nilai Disiplin</th>
                            <th class="border-top-0">Nilai Ketelitian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;"><?php echo $data_absen['kj']; ?></td>
                            <td style="text-align: center;"><?php echo $data_absen['ks']; ?></td>
                            <td style="text-align: center;"><?php echo $data_absen['tj']; ?></td>
                            <td style="text-align: center;"><?php echo $data_absen['siplin']; ?></td>
                            <td style="text-align: center;"><?php echo $data_absen['ktlt']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>