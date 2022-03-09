<?php
include('../koneksi.php');

$id_petugas = $_GET['id_petugas'];
$query = "DELETE FROM petugas WHERE id_petugas = '$id_petugas'";

$result = mysqli_query($conn, $query);
if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
    alert('Siswa berhasil dihapus');
    document.location.href='index.php';
    </script>";
} else {
    echo "<script>
    alert('Siswa gagal dihapus');
    document.location.href='index.php';
    </script>";
}
