<?php
include("../koneksi.php");

if (isset($_POST)) {
    $id_petugas = $_SESSION['userloginID'];
    $nisn = $_POST['nisn'];
    $tgl = $_POST['tanggal'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $bayar = $_POST['jumlah'];
    $query = "INSERT INTO pembayaran VALUES ('', '$id_petugas', '$nisn', '$tgl', '$bulan', '$tahun', '1', '$bayar')";

    $result = mysqli_query($conn, $query)
        or die(mysqli_error($conn));

    return header('Location: pembayaraan.php');
} else {
    return header('Location: pembayaraan.php');
}
