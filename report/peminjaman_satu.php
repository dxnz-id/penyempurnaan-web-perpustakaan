<!DOCTYPE html>
<html>

<head>
    <title>Cetak Data Peminjaman Buku</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body onload="print()">
    <!--Menampilkan data detail arsip-->
    <?php
    include '../config/koneksi.php';
    $sql = "SELECT * FROM peminjaman WHERE id='" . $_GET['id'] . "'";
    //proses query ke database
    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
    //Merubaha data hasil query kedalam bentuk array
    $data = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <div class='row'>
            <div class="col-sm-12">
                <!--dalam tabel-->
                <div class="text-center">
                    <h2>Perpustakaan SMK Assa'idiyah Kudus</h2>
                    <h4>Jalan Mbah Hamzah Krapyak, Kirig, Mejobo, Kudus, Jawa Tengah</h4>
                    <hr>
                    <h3>DATA PEMINJAMAN BUKU</h3>
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <tr>
                                <td>Judul Buku</td>
                                <td>
                                    <?= $data['judul_buku'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Peminjam</td>
                                <td>
                                    <?= $data['peminjam'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Pinjam</td>
                                <td>
                                    <?= $data['tgl_pinjam'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Kembali</td>
                                <td>
                                    <?php
                                    if ($data['tgl_kembali'] == '') {
                                        echo 'Belum Kembali';
                                    } else {
                                        echo $data['tgl_kembali'];
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Jatah Peminjaman</td>
                                <td>
                                    <?= $data['jatah_lama_pinjam'] ?> hari
                                </td>
                            </tr>
                            <tr>
                                <td>Lama Pinjam</td>
                                <td>
                                    <?= $data['lama_pinjam'] ?> hari
                                </td>
                            </tr>
                            <tr>
                                <td>Denda</td>
                                <td id="kolomDenda">
                                    <!-- <span id="kolomDenda"></span> -->
                                    <?php
                                    $tanggal_sekarang = date("Y-m-d");

                                    if ($data['tgl_kembali'] == '') {
                                        $lama_pinjam_hari = floor((strtotime($tanggal_sekarang) - strtotime($data['tgl_pinjam'])) / (60 * 60 * 24));
                                    } else {
                                        $lama_pinjam_hari = floor((strtotime($data['tgl_kembali']) - strtotime($data['tgl_pinjam'])) / (60 * 60 * 24));
                                    } ?>
                                    <script>
                                        var jatah_peminjaman = <?php echo $data['jatah_lama_pinjam']; ?>;
                                        var lama_pinjam_hari = <?php echo $lama_pinjam_hari; ?>;
                                        var telat = lama_pinjam_hari - jatah_peminjaman; var denda = 0;

                                        if (lama_pinjam_hari > jatah_peminjaman) { denda = 2000 * telat; }
                                        var denda_rupiah = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(denda); document.getElementById('kolomDenda').textContent = denda_rupiah;
                                    </script>
                                </td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" class="text-right">
                                    Kisaran
                                    <?= date("d-m-Y") ?>
                                    <br><br><br><br>
                                    <u>Kepala Perpustakaan<strong></u><br>
                                    +62 822 7277 7466
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>