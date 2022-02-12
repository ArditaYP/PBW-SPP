<?php
$idkelas = $_POST['idkelas'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

include("../koneksi.php");
$query ="INSERT INTO kelas VALUES ('$idkelas', '$kelas', '$jurusan')";

$result = mysqli_query($conn,$query);

?>