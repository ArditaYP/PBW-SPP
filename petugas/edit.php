<?php
require_once '../templates/header.php';
$query = "SELECT * FROM kelas";
$result = mysqli_query($conn, $query);
$read = readdata($result);
$readSiswa = "SELECT * FROM spp";
$resultSiswa = mysqli_query($conn, $readSiswa);
$readd = readdata($resultSiswa);
?>
<style>
    .in-container {
        margin-top: 20px;
    }

    input {
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        background: #f8f8f8;
        border: 2px solid #ccc;
        outline-color: #001e3c;
        box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.1);
        width: 80%;
        margin-top: 5px;
        margin-bottom: 10px;
    }

    textarea {
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        background: #f8f8f8;
        border: 2px solid #ccc;
        outline-color: #001e3c;
        box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.1);
        width: 80%;
        margin-bottom: 10px;
    }

    button {
        color: white;
        background-color: #001e3c;
        padding: 10px;
        border-radius: 10px;
        text-decoration: none;
        font-size: 12px;
        border: 0;
        margin-top: 20px;
    }

    select {
        width: 80%;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        background: #f8f8f8;
        border: 2px solid #ccc;
        outline-color: #001e3c;
        box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.1);
        width: 80%;
        margin-top: 5px;
        margin-bottom: 10px;
    }
</style>
<section class="home">
    <div class="main-content">
        <?php
        $id_petugas = $_GET['id_petugas'];

        $query = "SELECT * FROM petugas WHERE id_petugas = $id_petugas";
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($result);
        ?>
        <h1 style="margin-bottom: -3px;">Edit Petugas</h1>
        <span>Silahkan menginputkan data ulang dengan benar!</span>
        <form action="prosesedit.php" method="POST" class="in-container">
            <label>Id Petugas</label>
            <br>
            <input type="text" name="id_petugas" value="<?php echo $data['id_petugas']; ?>" required="" />
            <br>
            <label>Username</label>
            <br>
            <input type="text" name="username" value="<?php echo $data['username']; ?>" required="" />
            <br>
            <label>Password</label>
            <br>
            <input type="password" name="password" value="<?php echo $data['password']; ?>" required="" />
            <br>
            <label>Nama Petugas</label>
            <br>
            <input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>" required="" />
            <br>
            <label>Level</label>
            <br>
            <input type="text" name="level" value="<?php echo $data['level']; ?>" required="" />
            <br>
            <button type="submit"><b>SUBMIT</b></button>
        </form>
    </div>
</section>

<?php
require_once '../templates/footer.php';
?>