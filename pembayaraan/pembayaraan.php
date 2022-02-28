<?php
require_once '../templates/header.php';
$query = "SELECT * FROM spp";
$result = mysqli_query($conn, $query);
$read = readdata($result);
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
        height: 80px;
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
</style>
<section class="home">
    <div class="container">
        <h1 style="margin-bottom: -3px;">Pembayaraan</h1>
        <span>Silahkan menginputkan data dengan benar!</span>
        <form action="prosespembayaraan.php" method="POST" class="in-container">
            <label>nisn</label>
            <br>
            <input type="text" name="nisn" placeholder="masukan nisn..." required="" />
            <br>
            <label>Tanggal Bayar</label>
            <br>
            <input type="date" name="tanggal" required="" />
            <br>
            <label>Bulan Yang Di Bayar</label>
            <br>
            <select name="bulan" id="bulan" required>
                <option value="" selected disabled>-- Pilih Bulan --</option>
                <option value="januari">Januari</option>
                <option value="februari">Februari</option>
                <option value="maret">Maret</option>
                <option value="april">April</option>
                <option value="mei">Mei</option>
                <option value="juni">Juni</option>
                <option value="juli">Juli</option>
                <option value="agustus">Agustus</option>
                <option value="september">September</option>
                <option value="oktober">Oktober</option>
                <option value="november">November</option>
                <option value="desember">Desember</option>
            </select>
            <br>
            <label>tahun Yang Di Bayar</label>
            <br>
            <input type="number" name="tahun" placeholder="Bayar untuk tahun" required="" />
            <br>
            <label>Angkatan</label>
            <br>
            <select name="spp" id="angkatan">
                <option value="" disabled selected>-- Pilih Angkatan --</option>
                <?php foreach ($read as $r) : ?>
                    <option value="<?= $r['nominal'] ?>"><?= $r['tahun'] ?></option>
                <?php endforeach; ?>
            </select><br>
            <label>Jumlah Bayar</label>
            <br>
            <input type="number" name="jumlah" placeholder="Jumlah" required="" id="pembayaran" />
            <br>
            <button class="tombol" type="submit" value="tambah"><b>SUBMIT</b></button>
        </form>
    </div>
</section>
<?php
require_once '../templates/footer.php';
?>