<!-- Modal Edit -->
<div class="modal" id="modal-edit-user<?php echo $data['pengguna_id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-header">
            <h2>Edit User</h2>
            <a href="#" class="btn-close" aria-hidden="true">×</a>
        </div>
        <div class="modal-body">
            <form class="form" id="form-edit-user<?php echo $data['pengguna_id']; ?>" action="./process/edit-user.php" method="POST" enctype="multipart/form-data">
                <input type="text" class="input" id="nama_pengguna" name="nama_pengguna" placeholder="Nama User" value="<?php echo $data['nama_pengguna']; ?>" />
                <input type="text" class="input" id="username" name="username" placeholder="Username" value="<?php echo $data['username']; ?>" />
                <input type="password" class="input" id="password" name="password" placeholder="Password" value="<?php echo $data['password']; ?>" />

                <!-- Image input -->
                <label for="image-upload<?php echo $data['pengguna_id']; ?>" class="image-label">Upload Image</label>
                <input type="file" id="image-upload<?php echo $data['pengguna_id']; ?>" name="profile" class="input file-input" accept="image/*" onchange="previewImageEdit(event, '<?php echo $data['pengguna_id']; ?>')" />
                <!-- Image preview -->
                <div class="image-preview" id="image-preview<?php echo $data['pengguna_id']; ?>" style="display: <?php echo isset($data['profile']) && !empty($data['profile']) ? 'block' : 'none'; ?>;">
                    <img src="<?php echo isset($data['profile']) ? './images/user/' . $data['profile'] : ''; ?>" alt="Image Preview" id="image-preview-img<?php echo $data['pengguna_id']; ?>" />
                </div>

                <input type="hidden" name="pengguna_id" value="<?php echo $data['pengguna_id']; ?>" />
                <button type="submit" name="submit" class="form-btn">Update Account</button>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete -->
<div class="modal" id="modal-delete-user<?php echo $data['pengguna_id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-header">
            <h2>Edit User</h2>
            <a href="#" class="btn-close" aria-hidden="true">×</a>
        </div>
        <div class="modal-body">
            <h1>Yakin ingin menghapus "<?php echo $data['nama_pengguna']; ?>"</h1>
        </div>
        <div class="modal-footer">
            <a href="./process/hapus-user.php?pengguna_id=<?php echo $data['pengguna_id']; ?>" class="delete-btn">Delete</a>
        </div>
    </div>
</div>