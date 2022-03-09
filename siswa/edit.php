<?php
require_once '../koneksi.php';

require_once '../templates/header.php';
?>

<div class="main-content">
    <h1>Edit Siswa</h1>
    <span>Silahkan mengedit data dengan benar!</span>

    <?php

    $id = $_GET['id'];

    $query = "SELECT * FROM siswa where nisn=$id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);

    $queryy = "SELECT * FROM kelas";
    $resultt = mysqli_query($conn, $queryy);
    $read = readdata($resultt);
    ?>
    <form method="POST" action="prosesedit.php">
        <label>Nis</label>
        <input type="text" placeholder="nisn" hidden name="nisn" value="<?php echo $data['nisn']; ?>"><br>
        <input type="text" placeholder="NIS" name="nis" value="<?php echo $data['nis']; ?>"><br>
        <label>Nama</label>
        <br>
        <input type="text" placeholder="Nama" name="nama" value="<?php echo $data['nama']; ?>">
        <br>
        <label>Kelas</label>
        <br>
        <select name="idkelas" id="">
            <?php foreach ($read as $r) : ?>
                <option value="<?= $r['id_kelas'] ?>"><?= $r['nama_kelas'] ?></option>
            <?php endforeach; ?>
        </select><br>
        <br>
        <label>Alamat</label>
        <br>
        <input type="text" placeholder="Alamat" name="alamat" value="<?php echo $data['alamat']; ?>">
        <br>
        <label>No Telpone</label>
        <br>
        <input type="text" placeholder="Notelp" name="notelp" value="<?php echo $data['no_telp']; ?>">
        <br>
        <label>Username</label>
        <br>
        <input type="text" placeholder="idspp" name="idspp" value="<?php echo $data['id_spp']; ?>"><br>
        <input type="submit" value="edit">
    </form>

</div>
</section>