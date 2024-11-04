<!-- Modal Edit -->
<div class="modal" id="modal-edit-karyawan<?php echo $data['karyawan_id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-header">
            <h2>Edit Karyawan</h2>
            <a href="#" class="btn-close" aria-hidden="true">×</a>
        </div>
        <div class="modal-body">
            <form class="form" id="form-edit-karyawan<?php echo $data['karyawan_id']; ?>" action="./process/edit-karyawan.php" method="POST" enctype="multipart/form-data">
                <input type="text" class="input" id="nama_karyawan<?php echo $data['karyawan_id']; ?>" name="nama_karyawan" value="<?php echo $data['nama_karyawan']; ?>" />
                <input type="text" class="input" id="jabatan_karyawan<?php echo $data['karyawan_id']; ?>" name="jabatan_karyawan" value="<?php echo $data['jabatan_karyawan']; ?>" />

                <!-- Dropdown menu -->
                <select class="input" id="jk_karyawan<?php echo $data['karyawan_id']; ?>" name="jk_karyawan" required>
                    <option value="" disabled selected>Jenis Kelamin</option>
                    <option value="Laki-Laki" <?php echo ($data['jk_karyawan'] == 'Laki-Laki') ? 'selected' : ''; ?>>Laki-Laki</option>
                    <option value="Perempuan" <?php echo ($data['jk_karyawan'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                </select>

                <input type="text" class="input" id="tlp_karyawan<?php echo $data['karyawan_id']; ?>" name="tlp_karyawan" maxlength="13" value="<?php echo $data['tlp_karyawan']; ?>" />
                <textarea class="input textarea" id="alamat_karyawan<?php echo $data['karyawan_id']; ?>" name="alamat_karyawan"><?php echo $data['alamat_karyawan']; ?></textarea>

                <!-- Image input -->
                <label for="image-upload<?php echo $data['karyawan_id']; ?>" class="image-label">Upload Image</label>
                <input type="file" id="image-upload<?php echo $data['karyawan_id']; ?>" name="profile" class="input file-input" accept="image/*" onchange="previewImageEdit(event, '<?php echo $data['karyawan_id']; ?>')" />
                <!-- Image preview -->
                <div class="image-preview" id="image-preview<?php echo $data['karyawan_id']; ?>" style="display: <?php echo isset($data['profile']) && !empty($data['profile']) ? 'block' : 'none'; ?>;">
                    <img src="<?php echo isset($data['profile']) ? './images/karyawan/' . $data['profile'] : ''; ?>" alt="Image Preview" id="image-preview-img<?php echo $data['karyawan_id']; ?>" />
                </div>

                <input type="hidden" name="karyawan_id" value="<?php echo $data['karyawan_id']; ?>" />
                <button type="submit" name="submit" class="form-btn">Update Account</button>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete -->
<div class="modal" id="modal-delete-karyawan<?php echo $data['karyawan_id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-header">
            <h2>Hapus Karyawan</h2>
            <a href="#" class="btn-close" aria-hidden="true">×</a>
        </div>
        <div class="modal-body">
            <h1>Yakin ingin menghapus "<?php echo $data['nama_karyawan']; ?>"</h1>
        </div>
        <div class="modal-footer">
            <a href="./process/hapus-karyawan.php?karyawan_id=<?php echo $data['karyawan_id']; ?>" class="delete-btn">Delete</a>
        </div>
    </div>
</div>