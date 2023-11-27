<?php
if (!isset($_SESSION['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Riwayat Peminjaman</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul Buku</th>
                                <th>Nama Peminjam</th>
                                <th>Tanggal Pinjam</th>
                                <th>Jatah Peminjaman</th>
                                <th>Tanggal Kembali</th>
                                <th>Lama Pinjaman</th>
                                <th>Denda</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM peminjaman";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td>
                                        <?= $nomor ?>
                                    </td>
                                    <td>
                                        <?= $data['judul_buku'] ?>
                                    </td>
                                    <td>
                                        <?= $data['peminjam'] ?>
                                    </td>
                                    <td>
                                        <?= $data['tgl_pinjam'] ?>
                                    </td>
                                    <td>
                                        <?= $data['jatah_lama_pinjam'] ?> hari
                                    </td>
                                    <td>
                                        <?php
                                        if ($data['tgl_kembali'] == '') {
                                            echo 'Belum Kembali';
                                        } else {
                                            echo $data['tgl_kembali'];
                                        }

                                        ?> &nbsp <a
                                            href="?page=peminjaman&actions=kembaliBuku&judulbuku=<?= $data['judul_buku'] ?>"
                                            class="btn btn-info btn-xs">
                                            <span class="fa fa-forward"></span></a>
                                    </td>
                                    <td>
                                        <?php
                                        $tanggal_sekarang = date("Y-m-d");

                                        if ($data['tgl_kembali'] == '') {
                                            $lama_pinjam_hari = floor((strtotime($tanggal_sekarang) - strtotime($data['tgl_pinjam'])) / (60 * 60 * 24));
                                            echo $lama_pinjam_hari . ' hari ' . '(Belum Kembali)';
                                        } else {
                                            $lama_pinjam_hari = floor((strtotime($data['tgl_kembali']) - strtotime($data['tgl_pinjam'])) / (60 * 60 * 24));
                                            echo $lama_pinjam_hari . ' hari';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <span id="kolomDenda<?php echo $nomor; ?>"></span>
                                        <script>
                                            var jatah_peminjaman = <?php echo $data['jatah_lama_pinjam']; ?>;
                                            var lama_pinjam_hari = <?php echo $lama_pinjam_hari; ?>;

                                            var telat = lama_pinjam_hari - jatah_peminjaman;
                                            var denda = 0;

                                            if (lama_pinjam_hari > jatah_peminjaman) {
                                                denda = 2000 * telat;
                                            }

                                            var denda_rupiah = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(denda);
                                            document.getElementById('kolomDenda<?php echo $nomor; ?>').textContent = denda_rupiah;
                                        </script>
                                    </td>
                                    <td>
                                        <a href="?page=peminjaman&actions=detail&id=<?= $data['id'] ?>"
                                            class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=peminjaman&actions=edit&id=<?= $data['id'] ?>"
                                            class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=peminjaman&actions=delete&id=<?= $data['id'] ?>"
                                            class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>
</div>