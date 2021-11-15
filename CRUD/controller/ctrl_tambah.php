<?php include("../config.php");

// Cek button daftar
if (isset($_POST['daftar'])) {
    // Ambil data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];

    // Masukan data kedalam database
    $sql = "INSERT INTO mahasiswa(id_mhs, nama_mhs, nim_mhs, prodi_mhs, skill_mhs) VALUE ('$id', '$nama', '$nim', '$prodi', '$skill')";
    $query = mysqli_query($db, $sql);

    // jika berhasil/gagal maka akan diarahkanke halaman lain
    if ($query) {
        header('Location:../view/view_user.php?status=sukses');
    } else {
        header('Location:../index.php?status=gagal');
    }
}
