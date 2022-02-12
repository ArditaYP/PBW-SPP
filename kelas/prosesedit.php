<?php

$idkelas = $_POST['idkelas'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

include("../koneksi.php");
$query = "INSERT INTO kelas VALUES ('$idkelas', '$kelas', '$jurusan')";

$result = mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
    alert('Siswa berhasil Diubah');
    document.location.href='index.php';
    </script>";
} else {
    echo "<script>
    alert('Siswa gagal Diubah');
    document.location.href='index.php';
    </script>";
}
