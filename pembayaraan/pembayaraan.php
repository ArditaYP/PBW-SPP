<?php
session_start();
include ("koneksi.php");
$nis = $_SESSION('username'];
$siswa = mysqli_query($koneksi,"SELECT nis FROM siswa where nis='$nis'");


if (mysqli_num_rows($siswa) > 0) {
    echo "<script>alert('anda siswa');location.href='history.php'; </script>";

} elseif (!isset($_SESSION['username'])) {
echo "<script>alert('anda belum login');location.href='login.php';</script>"

}
?>
<div class="grid"></div>
    <nav class="navigation">
        <ul class="navigation_list navigation_list--inline">
            <?php
            if ($_ SESSION('level'] == 'admin') {
            ?>
