<?php include("./config.php");

$id = $_GET['id_mhs'];
$result = mysqli_query($db, "SELECT * FROM mahasiswa WHERE id_mhs = $id");
$mhs = mysqli_fetch_array($result);

?>


<form action="../controller/ctrl_edit.php" method="POST">
    <input type="text" name="id" placeholder="masukan id" <?php echo "value" . $id; ?>> <br>
    <input type="text" name="nama" placeholder="masukan nama"> <br>
    <input type="text" name="nim" placeholder="masukan nim"> <br>
    <label for=""><input type="radio" name="prodi" value="Teknik Informatika">Teknik Informatika</label>
    <label for=""><input type="radio" name="prodi" value="Informatika">Informatika</label> <br>
    <select name="skill" id="">
        <option value="">UI/UX Design</option>
        <option value="">Frontend Developer</option>
        <option value="">Backend Developer</option>
    </select> <br><br>

    <button>
        <input type="submit" name="edit" value="Simpan">
    </button>
</form>