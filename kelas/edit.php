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

        $query = "SELECT * FROM kelas where id_kelas=$id";
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($result);
        ?>

        <form method="POST" action="prosesedit.php">
            <input type="text" placeholder="idkelas" hidden name="idkelas" value="<?php echo $data['id_kelas']; ?>"><br><br>
            <input type="text" placeholder="namakelas" name="namakelas" value="<?php echo $data['nama_kelas']; ?>"><br><br>
            <input type="text" placeholder="jurusan" name="jurusan" value="<?php echo $data['kompentensi_keahlian']; ?>"><br><br>
            <input type="submit" value="edit">
        </form>

    </center>

</body>

</html>