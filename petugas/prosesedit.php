<?php
include('../koneksi.php');

$id_petugas = $_POST['id_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];

$query = "UPDATE petugas SET username= '$username', password= '$password', nama_petugas= '$nama_petugas', level= '$level' WHERE id_petugas = '$id_petugas'";

$result = mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
    alert('Petugas berhasil diubah');
    document.location.href='index.php';
    </script>";
} else {
    echo "<script>
    alert('Petugas gagal diubah');
    document.location.href='index.php';
    </script>";
}
