<?php
include("../config.php");
?>

<table>
    <thead>
        <tr>No</tr>
        <tr>Nama</tr>
        <tr>NIM</tr>
        <tr>Prodi</tr>
        <tr>Skill</tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM mahasiswa";
        $query = mysqli_query($db, $sql);
        $nomor = 1;

        // Perulangan While
        while ($mhs = mysqli_fetch_array($query)) {
            echo "<tr>";

            echo "<td>" . $nomor . "</td>";
            echo "<td>" . $mhs['id_mhs'] . "</td>";
            echo "<td>" . $mhs['nama_mhs'] . "</td>";
            echo "<td>" . $mhs['nim_mhs'] . "</td>";
            echo "<td>" . $mhs['prodi_mhs'] . "</td>";
            echo "<td>" . $mhs['skill_mhs'] . "</td>";
            echo "<td> <a href='../form/form_edit.php?id_mhs=" . $mhs['id_mhs'] . "'> Edit </a> </td>";

            echo "</tr>";
            $nomor++;
        }
        ?>
    </tbody>
</table>