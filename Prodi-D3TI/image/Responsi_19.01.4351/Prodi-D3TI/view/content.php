<?php include("../config.php"); ?>

<!-- Head -->
<?php include("head.php"); ?>

<!-- Navbar -->
<?php include("navbar.php"); ?>


<div class="container">
    <h2 class="mt-5">Daftar Prodi</h2>


    <!-- Modal -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Prodi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form -->
                    <form action="../controller/ctrl_content.php" method="POST">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="id_prodi" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Prodi</label>
                            <input type="text" class="form-control" name="nama_prodi" id="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripasi prodi</label>
                            <textarea class="form-control" name="deskripsi_prodi" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Konsentrasi Prodi</label>
                            <input type="text" class="form-control" name="konsentrasi_prodi" id="">
                        </div>
                        <!-- <div class="mb-3">
                            <label for="">Konsentrasi Prodi</label>
                            <select class="form-select mt-2" aria-label="Default select example">
                                <option selected>Web Development</option>
                                <option value="Jaringan">Jaringan</option>
                                <option value="Animasi">Animasi</option>
                            </select>
                        </div> -->
                        <!-- Button -->
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Simpan</button>
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
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Prodi</th>
                    <th>Deskripsi Prodi</th>
                    <th>Konsentrasi Prodi</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM prodi";
                $query = mysqli_query($db, $sql);
                $no = 1;

                // while
                while ($prodi = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td class='text-center'>" . $no . "</td>";
                    echo "<td>" . $prodi['nama_prodi'] . "</td>";
                    echo "<td>" . $prodi['deskripsi_prodi'] . "</td>";
                    echo "<td>" . $prodi['konsentrasi_prodi'] . "</td>";
                    // edit
                    echo "<td class='text-center'> <a href='edit.php?id_prodi=" . $prodi['id_prodi'] . "' class='btn btn-success btn-sm' > Edit </a> </td>";
                    // hapus
                    echo "<td class='text-center'> <a href='../controller/delete_prodi.php?id_prodi=" . $prodi['id_prodi'] . "' class='btn btn-danger btn-sm'> Hapus </a> </td>";

                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <!-- Footer -->
        <?php include("footer.php") ?>
    </div>