<?php
require_once '../koneksi.php';

require_once '../templates/header.php';
?>
<section class="home">
    <div class="main-content">
        <h1>Input Kelas</h1>
        <span>Silahkan menginputkan data dengan benar!</span>
        <div class="container">
            <form method='POST' action="prosestambah.php">
                <label>IDKELAS</label>
                <br>
                <input type="text" placeholder="idkelas" name="idkelas"><br>
                <label>Kelas</label>
                <br>
                <input type="text" placeholder="Kelas" name="kelas"><br>
                <label>Jurusan</label>
                <br>
                <input type="text" placeholder="Jurusan" name="jurusan"><br>
                <br>
                <input class="tombol" type="submit" value="tambah">
            </form>
        </div>
    </div>
</section>
<?php
require_once '../templates/footer.php';
?>