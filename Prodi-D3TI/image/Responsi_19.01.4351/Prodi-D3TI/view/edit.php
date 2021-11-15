<?php include("../config.php");

$id_prodi = $_GET['id_prodi'];
$result = mysqli_query($db, "SELECT * FROM prodi WHERE id_prodi = $id_prodi");

// $prodi = mysqli_fetch_array($result);
while ($prodi = mysqli_fetch_array($result)) {
    $nama_prodi = $prodi['nama_prodi'];
    $deskripsi_prodi = $prodi['deskripsi_prodi'];
    $konsentrasi_prodi = $prodi['konsentrasi_prodi'];
}
?>

<!-- Head -->
<?php include("head.php"); ?>

<!-- Navbar -->
<?php include("navbar.php"); ?>


<div class="container">
    <h2 class="mt-5">Edit data prodi</h2>
    <!-- Form -->
    <form action="../controller/ctrl_edit_content.php" method="POST">
        <div class="mb-3">
            <input type="hidden" class="form-control" name="id_prodi" id="" value="<?= $_GET['id_prodi']; ?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control" name="nama_prodi" id="" value="<?= $nama_prodi; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripasi prodi</label>
            <input type="text" class="form-control" name="deskripsi_prodi" id="" value="<?= $deskripsi_prodi; ?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Konsentrasi Prodi</label>
            <input type="text" class="form-control" name="konsentrasi_prodi" id="" value="<?= $konsentrasi_prodi; ?>">
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