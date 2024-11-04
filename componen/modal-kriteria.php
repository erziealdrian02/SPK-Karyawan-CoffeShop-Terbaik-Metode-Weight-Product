<!-- Modal Edit -->
<div class="modal" id="modal-edit-kriteria<?php echo $data['kriteria_id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-header">
            <h2>Edit Kriteria</h2>
            <a href="#" class="btn-close" aria-hidden="true">×</a>
        </div>
        <div class="modal-body">
            <form class="form" id="form-edit-karyawan<?php echo $data['kriteria_id']; ?>" action="./process/edit-kriteria.php" method="POST" enctype="multipart/form-data">
                <label for="kj" class="label-form">Bobot Kerajinan</label>
                <input type="number" class="input" id="kj<?php echo $data['kriteria_id']; ?>" name="kj" value="<?php echo $data['kj']; ?>" />
                <label for="ks" class="label-form">Bobot Kerja Sama</label>
                <input type="number" class="input" id="ks<?php echo $data['kriteria_id']; ?>" name="ks" value="<?php echo $data['ks']; ?>" />
                <label for="tj" class="label-form">Bobot Tanggung Jawab</label>
                <input type="number" class="input" id="tj<?php echo $data['kriteria_id']; ?>" name="tj" value="<?php echo $data['tj']; ?>" />
                <label for="siplin" class="label-form">Bobot Kesiplinan</label>
                <input type="number" class="input" id="siplin<?php echo $data['kriteria_id']; ?>" name="siplin" value="<?php echo $data['siplin']; ?>" />
                <label for="ktlt" class="label-form">Bobot Ketelitian</label>
                <input type="number" class="input" id="ktlt<?php echo $data['kriteria_id']; ?>" name="ktlt" value="<?php echo $data['ktlt']; ?>" />

                <input type="hidden" name="kriteria_id" value="<?php echo $data['kriteria_id']; ?>" />
                <button type="submit" name="submit" class="form-btn">Update Account</button>
            </form>
        </div>
    </div>
</div>