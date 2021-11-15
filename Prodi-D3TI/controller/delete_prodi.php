<?php include("../config.php");

$id_prodi = $_GET['id_prodi'];

$result = mysqli_query($db, "DELETE FROM prodi WHERE id_prodi = $id_prodi");

header('Location:../view/content.php');
