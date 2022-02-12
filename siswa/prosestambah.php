<?php
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$idkelas ='1';
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$idspp = $_POST['idspp'];

include("../koneksi.php");
$query ="INSERT INTO siswa VALUES ('$nisn', '$nis', '$nama', '$idkelas', '$alamat', '$notelp', '$idspp')";

$result = mysqli_query($conn,$query);

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
?>
