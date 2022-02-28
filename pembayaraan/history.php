<?php
session_start();
include ("../koneksi.php");
if (lisset($_SESSION['username'))){
echo "<script>alert('anda belum login');location.href='login.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>history</title>
</head>
<header class="header sticky sticky--top js-header">

<div class="grid">
<?php
if (@$_SESSION['level'] == "admin" ) {
$query= "SELECT * FROM pembayaran, petugas, siswa
WHERE pembayaran.id_petugas-petugas.id_petugas AND pembayaran.nisn-siswa.nisn";
?>
<nav class="navigation">
<ul class="navigation list navigation list--inline">
<li class="navigation item"><a href="index.php" class="navigation_link">Data Siswa</a></li>
<li class="navigation item"><a href="petugas.php" class="navigation_link">Data petugas</a></li>
<li class="navigation item"><a href="kelas.php" class="navigation_link">Data Kelas</a></li>
<li class="navigation item"><a href="spp.php" class="navigation_link">Data spp</a></li>
<li class="navigation item"><a href="index.php" class="navigation_link">Da</a></li>


</ul>
</nav>
</header>
<body>
    
</body>
</html>