<?php
require_once '../koneksi.php';
$id = $_GET['id'];
$query = "SELECT * FROM kelas WHERE id_kelas = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
require_once '../templates/header.php';
?>
<section class="home">
    <div class="main-content">
        <h1>Edit Siswa</h1>
        <span>Silahkan mengedit data dengan benar!</span>

        <div class="container">
            <form method="POST" action="prosesedit.php">
                <input type="text" placeholder="idkelas" hidden name="idkelas" value="<?php echo $data['id_kelas']; ?>">
                <label>Kelas</label>
                <br>
                <input type="text" placeholder="kelas" name="kelas" value="<?php echo $data['nama_kelas']; ?>"><br>
                <label>Kelas</label>
                <br>
                <input type="text" placeholder="jurusan" name="jurusan" value="<?php echo $data['kompentensi_keahlian']; ?>"><br>
                <input type="submit" value="edit">
            </form>
        </div>
    </div>
</section>
<?php
require_once '../templates/footer.php';
?>