<?php
include("../koneksi.php");

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$idkelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$idspp = '1';
$password = $_POST['password'];

$query = "INSERT INTO siswa VALUES ('$nisn', '$nis', '$password', '$nama', '$idkelas', '$alamat', '$notelp', '$idspp')";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo $conn->error;
    die;
}

if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
        alert('Siswa berhasil DiTambah');
        document.location.href='index.php';
        </script>";
} else {
    echo "<script>
        alert('Siswa gagal Ditambah');
        document.location.href='index.php';
        </script>";
}
