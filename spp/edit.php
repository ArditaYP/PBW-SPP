<?php
require_once '../koneksi.php';

require_once '../templates/header.php';
?>

<?php

$id = $_GET['id'];

$query = "SELECT * FROM spp where id_spp=$id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

$queryy = "SELECT * FROM spp";
$resultt = mysqli_query($conn, $queryy);
$read = readdata($resultt);
?>
<div class="main-content">
    <h1>Edit SPP</h1>
    <span>Silahkan mengedit data dengan benar!</span>

    <form method="POST" action="prosesedit.php">
        <br>
        <label>IDSPP</label>
        <br>
        <input type="text" placeholder="id_spp" name="id_spp" value="<?php echo $data['id_spp']; ?>"><br>
        <label>Tahun</label>
        <br>
        <input type="text" placeholder="tahun" name="tahun" value="<?php echo $data['tahun']; ?>"><br>
        <label>Nominal</label>
        <br>
        <input type="text" placeholder="nominal" name="nominal" value="<?php echo $data['nominal']; ?>"><br>
        <br>
        <input type="submit" value="edit">
    </form>
</div>