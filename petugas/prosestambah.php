<?php
include('../koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];

$query = "INSERT INTO petugas(username, password, nama_petugas, level) VALUES ('$username', '$password', '$nama_petugas', '$level')";

$result = mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
    alert('Petugas berhasil ditambah');
    document.location.href='index.php';
    </script>";
} else {
    echo "<script>
    alert('Petugas gagal ditambah');
    document.location.href='index.php';
    </script>";
}

?>


<script type="text/javascript">
    window.location = "index.php";
</script>