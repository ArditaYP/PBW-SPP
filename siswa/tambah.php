<?php
require_once '../koneksi.php';

require_once '../templates/header.php';
?>

<?php
$query = "SELECT * FROM kelas";
$result = mysqli_query($conn, $query);
$read = readdata($result);
?>

<div class="main-content">
    <h1>Input Siswa</h1>
    <span>Silahkan menginputkan data dengan benar!</span>

    <form method='POST' action="prosestambah.php">
        <label>NISN</label>
        <br>
        <input type="text" placeholder="Nisn" name="nisn"><br>
        <label>NIS</label>
        <br>
        <input type="text" placeholder="NIS" name="nis"><br>

        <select name="kelas" id="">
            <option value="" disabled selected>-- Pilih Kelas --</option>
            <?php foreach ($read as $r) : ?>
                <option value="<?= $r['id_kelas'] ?>"><?= $r['nama_kelas'] ?></option>
            <?php endforeach; ?>
        </select><br>
        <label>Username</label>
        <br>
        <input type="text" placeholder="Nama" name="nama"><br>
        <label>Alamat</label>
        <br>
        <input type="text" placeholder="Alamat" name="alamat"><br>
        <label>Password</label>
        <br>
        <input type="password" placeholder="Password" name="password"><br>
        <label>No Telpone</label>
        <br>
        <input type="text" placeholder="NO Telp" name="notelp"><br>
        <input class="tombol" type="submit" value="tambah">
    </form>
</div>
</section>