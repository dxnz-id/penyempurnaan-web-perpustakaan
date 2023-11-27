<?php
$id = $_GET['id'];
$ambil = mysqli_query($koneksi, "SELECT * FROM buku WHERE id ='$id'") or die("SQL Edit error");
$data = mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="loker_buku" class="col-sm-3 control-label">Loker Buku</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="loker_buku" class="form-control">
                                    <option value="Buku Anak Anak">Buku Anak Anak</option>
                                    <option value="Buku Dongeng">Buku Dongeng</option>
                                    <option value="Buku Majalah">Buku Majalah</option>
                                    <option value="Buku Novel">Buku Novel</option>
                                    <option value="Buku Pembelajaran">Buku Pembelajaran</option>
                                    <option value="Buku Resep Masakan">Buku Resep Masakan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="noRak" class="col-sm-3 control-label">Nomor Rak</label>
                            <div class="col-sm-9">
                                <input type="number" name="noRak" value="<?= $data['no_rak'] ?>" class="form-control"
                                    id="inputEmail3" placeholder="Nomor Rak/Lemari">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="noLaci" class="col-sm-3 control-label">Nomor Tingkat/Laci</label>
                            <div class="col-sm-9">
                                <input type="number" name="noLaci" value="<?= $data['no_laci'] ?>" class="form-control"
                                    id="inputEmail3" placeholder="Nomor Tingkat/Laci">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">Nomor Boks</label>
                            <div class="col-sm-9">
                                <input type="number" name="noBoks" value="<?= $data['no_boks'] ?>" class="form-control"
                                    id="inputEmail3" placeholder="Nomor Boks">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="judul_buku" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_buku" value="<?= $data['judul_buku'] ?>"
                                    class="form-control" id="inputEmail3" placeholder="Judul Buku">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="napengarang" class="col-sm-3 control-label">Nama Pengarang</label>
                            <div class="col-sm-9">
                                <input type="text" name="napengarang" value="<?= $data['nama_pengarang'] ?>"
                                    class="form-control" id="inputEmail3" placeholder="Nama Pengarang">
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tahun Terbit</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for ($i = 2030; $i > 1980; $i--) { ?>
                                        <option value="<?= $i ?>">
                                            <?= $i ?>
                                        </option>
                                    <?php } ?>

                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php
                                    $bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                    for ($j = 12; $j > 0; $j--) { ?>
                                        <option value="<?= $j ?>">
                                            <?= $bulan[$j] ?>
                                        </option>
                                    <?php } ?>

                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for ($k = 31; $k > 0; $k--) { ?>
                                        <option value="<?= $k ?>">
                                            <?= $k ?>
                                        </option>
                                    <?php } ?>

                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->

                        <div class="form-group">
                            <label for="penerbit" class="col-sm-3 control-label">Penerbit Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerbit" value="<?= $data['penerbit'] ?>" class="form-control"
                                    id="inputPassword3" placeholder="Penerbit Buku">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" value="<?= $data['penerima'] ?>" class="form-control"
                                    id="inputPassword3" placeholder="Staff Penerima Buku">
                            </div>
                        </div>
                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="status" class="form-control">
                                    <option value="Ada">Ada</option>
                                    <option value="Dipinjam">Dipinjam</option>
                                </select>
                            </div>
                        </div>
                        <!--Akhir Status-->
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?= $data['keterangan'] ?>" class="form-control"
                                    id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <!-- Thumbnail Buku -->
                        <div class="form-group">
                            <label for="gambar" class="col-sm-3 control-label">Thumbnail/Cover Buku</label>
                            <div class="col-sm-9">
                                <input type="file" name="gambar">
                                <p class="help-block">Mendukung format .jpg, .jpeg, dan .png</p>
                            </div>
                        </div>
                        <!-- Deskripsi Buku -->
                        <div class="form-group">
                            <label for="desc" class="col-sm-3 control-label">Deskripsi Buku</label>
                            <div class="col-sm-9">
                                <textarea type="text" name="desc" class="form-control" id="inputPassword3"
                                    placeholder="Inputkan Deskripsi"><?= $data['deskripsi'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Buku</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=buku&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Buku
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if ($_POST) {
    // Ambil data dari form
    $lokerbuku = $_POST['loker_buku'];
    $noRak = $_POST['noRak'];
    $noLaci = $_POST['noLaci'];
    $noBoks = $_POST['noBoks'];
    $judulbuku = mysqli_real_escape_string($koneksi, $_POST['judul_buku']);
    $napengarang = mysqli_real_escape_string($koneksi, $_POST['napengarang']);
    $tahunterbit = $_POST['tahun'] . "-" . $_POST['bulan'] . "-" . $_POST['tanggal'];
    $penerbit = mysqli_real_escape_string($koneksi, $_POST['penerbit']);
    $penerima = mysqli_real_escape_string($koneksi, $_POST['penerima']);
    $status = $_POST['status'];
    $ket = mysqli_real_escape_string($koneksi, $_POST['ket']);
    $gambar = $_FILES['gambar'];
    $desc = mysqli_real_escape_string($koneksi, $_POST['desc']);

    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {

        // Dapatkan informasi file
        $fileName = $gambar["name"];
        $fileTmpName = $gambar["tmp_name"];
        $fileType = $gambar["type"];
        $targetDirectory = "public/images/thumbnail/";

        unlink($targetDirectory . $data['thumbnail_buku']);

        // Buat nama file unik
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        $uniqueName = uniqid() . "." . $fileExtension;
        $targetFilePath = $targetDirectory . $uniqueName;

        // Periksa apakah file adalah gambar yang valid (png, jpg, jpeg)
        $allowedExtensions = ["png", "jpg", "jpeg"];
        if (in_array($fileExtension, $allowedExtensions)) {
            if (move_uploaded_file($fileTmpName, $targetFilePath)) {
                $sql = "UPDATE buku SET loker_buku='$lokerbuku', no_rak='$noRak', no_laci='$noLaci', no_boks='$noBoks', judul_buku='$judulbuku',
                nama_pengarang='$napengarang', tahun_terbit='$tahunterbit', penerima='$penerima', penerbit='$penerbit', status='$status', keterangan='$ket', thumbnail_buku='$uniqueName', deskripsi='$desc' WHERE id = '$id'";

                $query = mysqli_query($koneksi, $sql) or die("SQL Edit MHS Error");

                if ($query) {
                    echo "<script>window.location.assign('?page=buku&actions=tampil');</script>";
                } else {
                    echo "<script>alert('Edit Data Gagal');</script>";
                }
            } else {
                echo '<script>alert("Gagal mengunggah berkas.");</script>';
            }
        } else {
            echo '<script>alert("Hanya file PNG, JPG, dan JPEG yang diizinkan.");</script>';
        }
    } else {
        // Buat SQL
        $sql = "UPDATE buku SET loker_buku='$lokerbuku', no_rak='$noRak', no_laci='$noLaci', no_boks='$noBoks', judul_buku='$judulbuku',
            nama_pengarang='$napengarang', tahun_terbit='$tahunterbit', penerima='$penerima', penerbit='$penerbit', status='$status', keterangan='$ket', deskripsi='$desc' WHERE id = '$id'";

        $query = mysqli_query($koneksi, $sql) or die("SQL Edit MHS Error");

        if ($query) {
            echo "<script>window.location.assign('?page=buku&actions=tampil');</script>";
        } else {
            echo "<script>alert('Edit Data Gagal');</script>";
        }
    }
}
?>