<?php include("../config.php"); ?>

<!-- Head -->
<?php include("head.php") ?>

<!-- Navbar -->
<?php include "navbar.php" ?>


<div class="container">
    <h2 class="mt-5">Daftar Mahasiswa</h2>

    <!-- Modal -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form -->
                    <form action="../controller/ctrl_aside.php" method="POST">
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim" maxlength="8">
                        </div>
                        <div class="mb-3">
                            <label for="">Konsentrasi</label>
                            <select name="kosentrasi" class="form-select mt-2" aria-label="Default select example">
                                <option selected>Web Development</option>
                                <option value="Jaringan">Jaringan</option>
                                <option value="Animasi">Animasi</option>
                            </select>
                        </div>

                        <!-- Button -->
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary">Reset</button>

                            <button type="submit" name="tambah" value="Tambah" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal -->
</div>

<div class="container">
    <div class="table-responsive">
        <!-- Tabel -->
        <table class="table table-bordered table-striped ">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Konsentrasi</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM mahasiswa";
                $query = mysqli_query($db, $sql);
                $no = 1;

                // while
                while ($mahasiswa = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td class='text-center'>" . $no . "</td>";
                    echo "<td>" . $mahasiswa['nama_mhs'] . "</td>";
                    echo "<td>" . $mahasiswa['nim_mhs'] . "</td>";
                    echo "<td>" . $mahasiswa['konsentrasi_mhs'] . "</td>";
                    // edit
                    echo "<td class='text-center'> <a href='edit_aside.php?id_mhs=" . $mahasiswa['id_mhs'] . "' class='btn btn-success btn-sm'> Edit </a> </td>";
                    // hapus
                    echo "<td class='text-center'> <a href='../controller/delete_mhs.php?id_mhs=" . $mahasiswa['id_mhs'] . "' class='btn btn-danger btn-sm'> Hapus </a> </td>";
                    echo "</tr>";

                    $no++;
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
<!-- End Tabel -->
</div>


<div class="container">
    <!-- Footer -->
    <?php include("footer.php") ?>
</div>