<?php
require_once '../koneksi.php';
?>

<style>
    .anchor {
        text-decoration: none;
        color: #001e3c;
        display: inline-block;
    }

    table {
        width: 100%;
    }

    td {
        color: black;
        text-align: center;
    }

    .anchor:after {
        display: block;
        content: '';
        border-bottom: solid 3px #001e3c;
        transform: scaleX(0);
        transition: transform 250ms ease-in-out;
    }

    .anchor:hover:after {
        transform: scaleX(1);
    }

    a.anchor:after {
        transform-origin: 0% 50%;
    }

    button {
        font-size: 15px;
        color: white;
        border: 0;
        padding: 5px;
        border-radius: 5px;
        background-color: #001e3c;
    }
</style>
<div style="width: 100vw;">
<table>
    <tr>
        <td>
    <img src="https://elearning.smkti-baliglobal.sch.id/img/logo-ti2.png" alt="" width="200px" hight="200px">
        </td>
        <td>
    <h1>SMK TI BALI GLOBAL DENPASAR</h1>
    </td>
    </tr>
    <tr>
        <td>testttt</td>
    </tr>
</table>
    <table class="cetak">
        <tr>
            <td style="padding: 10px;">Id Pembayaran</td>
            <td>Petugas</td>
            <td>Nisn</td>
            <td>Tanggal Bayar</td>
            <td>Bulan Bayar</td>
            <td>Tahun Bayar</td>
            <td>Id SPP</td>
            <td>Jumlah Bayar</td>
        </tr>

        <tbody>
            <?php
            $nis = $_GET['nis'];

            // jalankan query untuk menampilkan semua data diurutkan berdasarkan id_pembayaran
            $query = "SELECT * FROM pembayaran JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas WHERE nis = '$nis'";
            $result = mysqli_query($conn, $query);
            $i = 1;
            //mengecek apakah ada error ketika menjalankan query
            if (!$result) {
                die("Query Error: " . mysqli_errno($conn) .
                    " - " . mysqli_error($conn));
            }

            //buat perulangan untuk element tabel dari data pembayaran
            //hasil query akan disimpan dalam variabel $data dalam bentuk array
            //kemudian dicetak dengan perulangan while
            while ($row = mysqli_fetch_assoc($result)) {
            ?>

                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $row['nama_petugas'] ?></td>
                    <td><?php echo $row['nis'] ?></td>
                    <td><?php echo $row['tgl_bayar'] ?></td>
                    <td><?php echo $row['bulan_dibayar'] ?></td>
                    <td><?php echo $row['tahun_dibayar'] ?></td>
                    <td><?php echo $row['id_spp'] ?></td>
                    <td><?php echo $row['jumlah_bayar'] ?></td>
                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>
</div>
<script>window.print();</script>

<?php
require_once '../templates/footer.php';
?>