<!-- Modal Edit -->
<div class="modal" id="modal-edit-karyawan<?php echo $data['karyawan_id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-header">
            <h2>Edit Karyawan</h2>
            <a href="#" class="btn-close" aria-hidden="true">×</a>
        </div>
        <div class="modal-body">
            <div class="modal-body">
                <form class="form" id="form-edit-karyawan<?php echo $data['karyawan_id']; ?>" action="./process/edit-nilai-absen.php" method="POST" enctype="multipart/form-data">
                    <label for="sd" class="label-form">Banyak Surat Dokter</label>
                    <input type="number" class="input" id="sd<?php echo $data['karyawan_id']; ?>" name="sd" value="<?php echo $data['sd']; ?>" oninput="calculateTotal('<?php echo $data['karyawan_id']; ?>')" />

                    <label for="pc" class="label-form">Banyak Pulang Cepat</label>
                    <input type="number" class="input" id="pc<?php echo $data['karyawan_id']; ?>" name="pc" value="<?php echo $data['pc']; ?>" oninput="calculateTotal('<?php echo $data['karyawan_id']; ?>')" />

                    <label for="dt" class="label-form">Banyak Datang Telat</label>
                    <input type="number" class="input" id="dt<?php echo $data['karyawan_id']; ?>" name="dt" value="<?php echo $data['dt']; ?>" oninput="calculateTotal('<?php echo $data['karyawan_id']; ?>')" />

                    <label for="i" class="label-form">Banyak Ijin</label>
                    <input type="number" class="input" id="i<?php echo $data['karyawan_id']; ?>" name="i" value="<?php echo $data['i']; ?>" oninput="calculateTotal('<?php echo $data['karyawan_id']; ?>')" />

                    <label for="s" class="label-form">Banyak Sakit</label>
                    <input type="number" class="input" id="s<?php echo $data['karyawan_id']; ?>" name="s" value="<?php echo $data['s']; ?>" oninput="calculateTotal('<?php echo $data['karyawan_id']; ?>')" />

                    <label for="a" class="label-form">Banyak Alfa</label>
                    <input type="number" class="input" id="a<?php echo $data['karyawan_id']; ?>" name="a" value="<?php echo $data['a']; ?>" oninput="calculateTotal('<?php echo $data['karyawan_id']; ?>')" />

                    <!-- Hidden input for total bobot -->
                    <input type="hidden" name="total_bobot" id="total_bobot<?php echo $data['karyawan_id']; ?>" value="" />
                    <input type="hidden" name="karyawan_id" value="<?php echo $data['karyawan_id']; ?>" />

                    <button type="submit" name="submit" class="form-btn">Update Account</button>
                </form>
            </div>
        </div>
    </div>