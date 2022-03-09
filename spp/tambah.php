<?php
require_once '../koneksi.php';

require_once '../templates/header.php';
?>

<?php
$query = "SELECT * FROM spp";
$result = mysqli_query($conn, $query);
?>
<div class="main-content">
    <h1>Input Spp</h1>
    <span>Silahkan menginputkan data dengan benar!</span>

    <form method='POST' action="prosestambah.php">
        <label>IDSPP</label>
        <br>
        <input type="text" placeholder="IdSpp" name="id_spp"><br>
        <label>Tahun</label>
        <br>
        <input type="text" placeholder="Tahun" name="tahun"><br>
        <label>Nominal</label>
        <br>
        <input type="text" placeholder="Nominal" name="nominal"><br>
        <input class="tombol" type="submit" value="Tambah">
    </form>
</div>