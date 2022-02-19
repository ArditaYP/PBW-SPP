<?php
include("../koneksi.php");
$query = "SELECT * FROM spp";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Input Data</title>
</head>

<body>
    <center>
        <form method='POST' action="prosestambah.php">
            <input type="text" placeholder="IdSpp" name="id_spp"><br><br>
            <input type="text" placeholder="Tahun" name="tahun"><br><br>
            <input type="text" placeholder="Nominal" name="nominal"><br><br>
            <input class="tombol" type="submit" value="Tambah">
        </form>
    </center>
</body>

</html>