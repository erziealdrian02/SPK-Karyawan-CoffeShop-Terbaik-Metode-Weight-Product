<!-- Modal Add -->
<div class="modal" id="modal-add-karyawan" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-header">
            <h2>Tambah Karyawan</h2>
            <a href="#" class="btn-close" aria-hidden="true">×</a>
        </div>
        <div class="modal-body">
            <form class="form" id="form-add-karyawan" action="./process/input-karyawan.php" method="POST" enctype="multipart/form-data">
                <input type="text" class="input" id="nama_karyawan" name="nama_karyawan" placeholder="Nama Karyawan" />
                <input type="text" class="input" id="jabatan_karyawan" name="jabatan_karyawan" placeholder="Jabatan" />
                <!-- Dropdown menu -->
                <select class="input" id="jk_karyawan" name="jk_karyawan" required>
                    <option value="" disabled selected>
                        Jenis Kelamin
                    </option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <input type="text" class="input" id="tlp_karyawan" name="tlp_karyawan" maxlength="13" placeholder="Nomor Telephone" />
                <textarea class="input textarea" id="alamat_karyawan" name="alamat_karyawan" placeholder="Alamat"></textarea>

                <!-- Image input -->
                <label for="image-upload" class="image-label">Upload Image</label>
                <input type="file" id="image-upload" name="profile" class="input file-input" accept="image/*" onchange="previewImageAdd(event)" />

                <!-- Image preview -->
                <div class="image-preview" id="image-preview">
                    <img src="" alt="Image Preview" id="image-preview-img" />
                </div>

                <button type="submit" name="submit" class="form-btn">Create Account</button>
            </form>
        </div>
    </div>
</div>
