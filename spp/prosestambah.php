<?php
include("../koneksi.php");

$idspp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

$query = "INSERT INTO spp VALUES ('$idspp', '$tahun', '$nominal')";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo $conn->error;
    die;
}

if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
        alert('berhasil DiTambah');
        document.location.href='index.php';
        </script>";
} else {
    echo "<script>
        alert('gagal Ditambah');
        document.location.href='index.php';
        </script>";
}
