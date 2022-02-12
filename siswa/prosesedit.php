<?php

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$idkelas = $_POST['idkelas'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$idspp = $_POST['idspp'];

include("../koneksi.php");
$query = "UPDATE siswa SET nis= '$nis', nama= '$nama', id_kelas= '$idkelas', alamat= '$alamat', no_telp= '$notelp', id_spp= '$idspp' Where nisn = '$nisn'";

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
