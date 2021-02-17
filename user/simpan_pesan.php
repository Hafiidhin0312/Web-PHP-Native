<?php
include '../koneksi.php';

$username = $_POST['username'];
$nama_user = $_POST['nama_user'];
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');
$waktu = date('H:i:s');

$query = "INSERT INTO pesan (id_tertera,authorized,tanggal,waktu) VALUES ('$username','$nama_user','$tanggal','$waktu')";
$sql = mysqli_query($koneksi, $query);

if ($sql) {
    header("Location:../logout.php");
} else {
    echo "gagal";
}
