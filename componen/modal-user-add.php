<!-- Modal Add -->
<div class="modal" id="modal-add-user" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-header">
            <h2>Tambah User</h2>
            <a href="#" class="btn-close" aria-hidden="true">×</a>
        </div>
        <div class="modal-body">
            <form class="form" id="form-add-user" action="./process/input-user.php" method="POST" enctype="multipart/form-data">
                <input type="text" class="input" id="nama_pengguna" name="nama_pengguna" placeholder="Nama User" />
                <input type="text" class="input" id="username" name="username" placeholder="Username" />
                <input type="password" class="input" id="password" name="password" placeholder="Password" />

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
