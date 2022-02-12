<?php
require_once '../koneksi.php';
if (isset($_GET['id'])) {
    $idkelas = $_GET['id'];
    $result = mysqli_query($conn, "DELETE FROM kelas WHERE nisn = $idkelas");

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
        alert('Kelas berhasil Dihapus');
        document.location.href='index.php';
        </script>";
    } else {
        echo "<script>
        alert('Kelas gagal DiHapus');
        document.location.href='index.php';
        </script>";
    }
}
