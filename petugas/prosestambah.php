<?php
include('../koneksi.php');

$id_petugas = $_POST['id_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];

$query = "INSERT INTO petugas(id_petugas, username, password, nama_petugas, level) VALUES ('$id_petugas', '$username', '$password', '$nama_petugas', '$level')";

$result = mysqli_query($conn, $query);

?>

<script type="text/javascript">
    window.location = "index.php";
</script>