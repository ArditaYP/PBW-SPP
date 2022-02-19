<?php
require_once '../koneksi.php';

require_once '../templates/header.php';
?>
<section class="home">
    <div class="text">Tambah Kelas</div>
    <div class="container">
        <form method='POST' action="prosestambah.php">
            <input type="text" placeholder="idkelas" name="idkelas"><br><br>
            <input type="text" placeholder="Kelas" name="kelas"><br><br>
            <input type="text" placeholder="Jurusan" name="jurusan"><br><br>
            <input class="tombol" type="submit" value="tambah">
        </form>
    </div>
</section>
<?php
require_once '../templates/footer.php';
?>