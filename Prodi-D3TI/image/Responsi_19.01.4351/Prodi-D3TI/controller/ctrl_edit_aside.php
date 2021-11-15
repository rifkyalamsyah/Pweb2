<?php include("../config.php");

// Cek button simpan
if (isset($_POST['update'])) {
    // Ambil data dari form
    $id_mhs = $_POST['id_mhs'];
    $nama = $_POST['nama_mhs'];
    $nim = $_POST['nim_mhs'];
    $konsentrasi = $_POST['konsentrasi_mhs'];

    // Masukan data ke database
    $sql = "UPDATE mahasiswa SET nama_mhs = '$nama', nim_mhs = '$nim', konsentrasi_mhs = '$konsentrasi' WHERE id_mhs = '$id_mhs' ";

    $query = mysqli_query($db, $sql);

    // jika berhasil/gagal maka akan diarahkanke halaman lain
    if ($query) {
        header('Location:../view/aside.php?status=berhasil');
    } else {
        header('Location:../view/aside.php?status=gagal');
    }
}
