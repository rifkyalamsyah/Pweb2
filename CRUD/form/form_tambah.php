<form action="../controller/ctrl_tambah.php" method="POST">
    <input type="text" name="id" placeholder="masukan id"> <br>
    <input type="text" name="nama" placeholder="masukan nama"> <br>
    <input type="text" name="nim" placeholder="masukan nim"> <br>
    <label for=""><input type="radio" name="prodi" value="Teknik Informatika">Teknik Informatika</label>
    <label for=""><input type="radio" name="prodi" value="Informatika">Informatika</label> <br>
    <select name="skill" id="skill">
        <option value="">UI/UX Design</option>
        <option value="">Frontend Developer</option>
        <option value="">Backend Developer</option>
    </select> <br><br>

    <button>
        <input type="submit" name="daftar" value="Daftar">
    </button>
</form>