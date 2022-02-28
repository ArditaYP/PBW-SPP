<?php
session_start();

$id_petugas = $_SESSION['id_ petugas'];
$nisn = $_POST['nisn'l;
$tgl = $_POST['tgl'];
$bulan = date ("F");
$tahun = date("Y");
$id_spp = $_POST['id spp'];
$bayar = $_POST['nominal'];

include ("../koneksi.php");
$query = "INSERT INTO pembayaran (id_petugas, nisn, tgl_bayar, bulan_ dibayar,tahun_dibayar, id_spp, jumlah_bayar)
    VALUES ('$id_petugas', '$nisn', '$tgl', '$bulan', '$tahun', '$id_spp', '$bayar')";

$result = mysqli_query($conn, $query)
        or die (mysqli_error ($conn));

    ?>
