<?php
//membuat query untuk hapus data
$filename = "public/images/thumbnail/" . $_GET['thumbnail']; // Replace with the path to your image file

$sql = "DELETE FROM buku WHERE id ='" . $_GET['id'] . "'";
$query = mysqli_query($koneksi, $sql) or die("SQL Hapus Error");
if ($query) {
    unlink($filename);
    echo "<script> window.location.assign('?page=buku&actions=tampil');</script>";
} else {
    echo "<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=buku&actions=tampil');</scripr>";
}

