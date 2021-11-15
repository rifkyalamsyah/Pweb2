<?php include("../config.php");

// Cek button simpan
if (isset($_POST['update'])) {
    // Ambil data dari form
    $id_prodi = $_POST['id_prodi'];
    $nama_prodi = $_POST['nama_prodi'];
    $deskripsi_prodi = $_POST['deskripsi_prodi'];
    $konsentrasi_prodi = $_POST['konsentrasi_prodi'];

    // Masukan data ke database
    $sql = "UPDATE prodi SET nama_prodi = '$nama_prodi', deskripsi_prodi = '$deskripsi_prodi', konsentrasi_prodi = '$konsentrasi_prodi' WHERE id_prodi = '$id_prodi' ";

    $query = mysqli_query($db, $sql);

    // jika berhasil/gagal maka akan diarahkanke halaman lain
    if ($query) {
        header('Location:../view/content.php?status=berhasil');
    } else {
        header('Location:../view/content.php?status=gagal');
    }
}
