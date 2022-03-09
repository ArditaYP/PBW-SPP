<?php
require_once '../koneksi.php';
if (isset($_GET['id'])) {
    $idkelas = $_GET['id'];
    $result = mysqli_query($conn, "DELETE FROM kelas WHERE id_kelas = $idkelas");

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
        alert('Kelas berhasil dihapus');
        document.location.href='index.php';
        </script>";
    } else {
        echo "<script>
        alert('Kelas gagal dihapus');
        document.location.href='index.php';
        </script>";
    }
}
