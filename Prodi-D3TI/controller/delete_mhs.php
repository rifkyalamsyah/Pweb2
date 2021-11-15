<?php include("../config.php");

$id_mhs = $_GET['id_mhs'];

$result = mysqli_query($db, "DELETE FROM mahasiswa WHERE id_mhs = $id_mhs");

header('Location:../view/aside.php');
