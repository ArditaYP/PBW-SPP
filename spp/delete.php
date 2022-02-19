<?php
require_once '../koneksi.php';
if (isset($_GET['id'])) {
    $idspp = $_GET['id'];
    $result = mysqli_query($conn, "DELETE FROM spp WHERE id_spp = $idspp");

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
        alert('berhasil Dihapus');
        document.location.href='index.php';
        </script>";
    } else {
        echo "<script>
        alert('gagal DiHapus');
        document.location.href='index.php';
        </script>";
    }
}
