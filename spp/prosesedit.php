<?php

$idspp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

include("../koneksi.php");
$query = "UPDATE spp SET tahun= '$tahun', nominal = '$nominal' WHERE id_spp = '$idspp'";

$result = mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
    alert('berhasil Diubah');
    document.location.href='index.php';
    </script>";
} else {
    echo "<script>
    alert('gagal Diubah');
    document.location.href='index.php';
    </script>";
}
