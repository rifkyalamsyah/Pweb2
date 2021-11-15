<?php include("../config.php");

// Cek button daftar
if (isset($_POST['edit'])) {
    // Ambil data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];

    // Masukan data kedalam database
    $sql = "UPDATE mahasiswa SET id_mhs = '$id', nama_mhs = '$nama', nim_mhs = '$nim', prodi_mhs = '$prodi', skill_mhs = '$skill' WHERE id_mhs = '$id' ";
    $query = mysqli_query($db, $sql);

    // jika berhasil/gagal maka akan diarahkanke halaman lain
    if ($query) {
        header('Location:../view/view_user.php?status=sukses');
    } else {
        header('Location:../index.php?status=gagal');
    }
}
