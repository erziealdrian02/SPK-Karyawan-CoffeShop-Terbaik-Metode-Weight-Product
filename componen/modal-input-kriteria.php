<!-- Modal Edit -->
<div class="modal" id="modal-edit-karyawan<?php echo $data['karyawan_id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-header">
            <h2>Edit Karyawan</h2>
            <a href="#" class="btn-close" aria-hidden="true">×</a>
        </div>
        <div class="modal-body">
            <div class="modal-body">
                <form class="form" id="form-edit-karyawan<?php echo $data['karyawan_id']; ?>" action="./process/edit-input-kriteria.php" method="POST" enctype="multipart/form-data">
                    <label for="kj" class="label-form">Nilai Kerajinan</label>
                    <input type="number" class="input" id="kj<?php echo $data['karyawan_id']; ?>" name="kj" value="<?php echo $data['point_absen']; ?>" oninput="calculateTotal('<?php echo $data['karyawan_id']; ?>')" readonly />

                    <label for="ks" class="label-form">Nilai Kerja Sama</label>
                    <input type="number" class="input" id="ks<?php echo $data['karyawan_id']; ?>" name="ks" value="<?php echo $data['ks']; ?>" oninput="calculateTotal('<?php echo $data['karyawan_id']; ?>')" />

                    <label for="tj" class="label-form">Nilai Tanggung Jawab</label>
                    <input type="number" class="input" id="tj<?php echo $data['karyawan_id']; ?>" name="tj" value="<?php echo $data['tj']; ?>" oninput="calculateTotal('<?php echo $data['karyawan_id']; ?>')" />

                    <label for="siplin" class="label-form">Nilai Disiplin</label>
                    <input type="number" class="input" id="siplin<?php echo $data['karyawan_id']; ?>" name="siplin" value="<?php echo $data['siplin']; ?>" oninput="calculateTotal('<?php echo $data['karyawan_id']; ?>')" />

                    <label for="ktlt" class="label-form">Nilai Ketelitian</label>
                    <input type="number" class="input" id="ktlt<?php echo $data['karyawan_id']; ?>" name="ktlt" value="<?php echo $data['ktlt']; ?>" oninput="calculateTotal('<?php echo $data['karyawan_id']; ?>')" />

                    <!-- Hidden input for total bobot -->
                    <input type="hidden" name="total_bobot" id="total_bobot<?php echo $data['karyawan_id']; ?>" value="" />
                    <input type="hidden" name="karyawan_id" value="<?php echo $data['karyawan_id']; ?>" />

                    <button type="submit" name="submit" class="form-btn">Update Account</button>
                </form>
            </div>
        </div>
    </div>