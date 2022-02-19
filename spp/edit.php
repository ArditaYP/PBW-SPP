<!DOCTYPE html>
<html lang="en">

<head>
    <title>EditData</title>
</head>

<body>
    <center>
        <?php

        include("../koneksi.php");
        $id = $_GET['id'];

        $query = "SELECT * FROM spp where id_spp=$id";
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($result);

        $queryy = "SELECT * FROM spp";
        $resultt = mysqli_query($conn, $queryy);
        $read = readdata($resultt);
        ?>
        <form method="POST" action="prosesedit.php">
            <input type="text" placeholder="id_spp" hidden name="id_spp" value="<?php echo $data['id_spp']; ?>"><br><br>
            <input type="text" placeholder="tahun" hidden name="tahun" value="<?php echo $data['tahun']; ?>"><br><br>
            <input type="text" placeholder="nominal" name="nominal" value="<?php echo $data['nominal']; ?>"><br><br>
            <input type="submit" value="edit">
        </form>

    </center>

</body>

</html>