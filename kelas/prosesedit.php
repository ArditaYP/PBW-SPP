<?php

$idkelas = $_POST['idkelas'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

include("../koneksi.php");
$query = "UPDATE kelas SET id_kelas= '$idkelas', nama_kelas= '$kelas', kompentensi_keahlian='$jurusan'";

$result = mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
    alert('Kelas berhasil Diubah');
    document.location.href='index.php';
    </script>";
} else {
    echo "<script>
    alert('Kelas gagal Diubah');
    document.location.href='index.php';
    </script>";
}
