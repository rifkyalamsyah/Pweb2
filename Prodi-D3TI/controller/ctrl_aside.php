<?php include("../config.php");

// Cek button tambah
if (isset($_POST['tambah'])) {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $konsentrasi = $_POST['kosentrasi'];

    // Masukan data ke database
    $sql = "INSERT INTO mahasiswa(nama_mhs, nim_mhs, konsentrasi_mhs) VALUE ('$nama', '$nim', '$konsentrasi')";

    $query = mysqli_query($db, $sql);

    // jika berhasil/gagal
    if ($query) {
        header('Location:../view/aside.php?status=berhasil');
    } else {
        header('Location:../view/aside.php?status=gagal');
    }
}
