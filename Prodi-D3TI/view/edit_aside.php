<?php include("../config.php");

$id_mhs = $_GET['id_mhs'];
$result = mysqli_query($db, "SELECT * FROM mahasiswa WHERE id_mhs = $id_mhs");

// $prodi = mysqli_fetch_array($result);
while ($mahasiswa = mysqli_fetch_array($result)) {
    $nama = $mahasiswa['nama_mhs'];
    $nim = $mahasiswa['nim_mhs'];
    $konsentrasi = $mahasiswa['konsentrasi_mhs'];
}
?>

<!-- Head -->
<?php include("head.php"); ?>

<!-- Navbar -->
<?php include("navbar.php"); ?>

<div class="container">
    <h2 class="mt-5">Edit data mahasiswa</h2>
    <!-- Form -->
    <form action="../controller/ctrl_edit_aside.php" method="POST">
        <div class="mb-3">
            <input type="hidden" class="form-control" name="id_mhs" id="" value="<?= $_GET['id_mhs']; ?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama_mhs" id="" value="<?= $nama; ?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim_mhs" id="" maxlength="8" value="<?= $nim; ?>">
        </div>
        <div class="mb-3">
            <label for="">Konsentrasi</label>
            <input type="text" class="form-control" name="konsentrasi_mhs" id="" value="<?= $konsentrasi; ?>">
        </div>

        <!-- Button -->
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary">Reset</button>

            <button type="submit" name="update" value="Update" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    <!-- End Form -->
</div>

<div class="container">
    <!-- Footer -->
    <?php include("footer.php") ?>
</div>