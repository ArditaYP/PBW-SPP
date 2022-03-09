<?php
require_once '../koneksi.php';
if (isset($_GET['id'])) {
    $nisn = $_GET['id'];
    $result = mysqli_query($conn, "DELETE FROM siswa WHERE nisn = $nisn");

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
}
