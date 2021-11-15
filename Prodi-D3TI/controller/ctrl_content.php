<?php include("../config.php");

// Cek button tambah
if (isset($_POST['simpan'])) {
    // Ambil data dari form
    $nama_prodi = $_POST['nama_prodi'];
    $deskripsi_prodi = $_POST['deskripsi_prodi'];
    $konsentrasi_prodi = $_POST['konsentrasi_prodi'];

    // Masukan data ke database
    $sql = "INSERT INTO prodi(nama_prodi, deskripsi_prodi, konsentrasi_prodi) VALUE ('$nama_prodi', '$deskripsi_prodi', '$konsentrasi_prodi')";

    $query = mysqli_query($db, $sql);

    //jika berhasil/gagal
    if ($query) {
        header('Location:../view/content.php?status=berhasil');
    } else {
        header('Location:../view/content.php?status=gagal');
    }
}
