<?php
require_once '../templates/header.php';
?>

<style>
    .anchor {
        text-decoration: none;
        color: #001e3c;
        display: inline-block;
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

    button .cetak {
        padding: 10px;
        background-color: green;
        color: white;

    }
</style>
<div class="main-content">
    <h1>History</h1>
    <br>
    <table>
        <tr>
            <th>Id Pembayaran </th>
            <th>Petugas</th>
            <th>Nis</th>
            <th>Tanggal Bayar</th>
            <th>Bulan Bayar</th>
            <th>Tahun Bayar</th>
            <th>Id SPP</th>
            <th>Jumlah Bayar</th>
            <?php if (isset($_SESSION['leveluser'])) : ?>
                    <?php if ($_SESSION['leveluser'] == 'admin') : ?>
            <th>Aksi</th>
            <?php endif; ?>
                <?php endif; ?>
        </tr>

        <tbody>
            <?php
            $query = "SELECT * FROM pembayaran JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas";
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
                    <td style="text-align:center;"><?php echo $row['jumlah_bayar'] ?></td> 

                    <?php if (isset($_SESSION['leveluser'])) : ?>
                    <?php if ($_SESSION['leveluser'] == 'admin') : ?>
                    <td style="display: flex; justify-content: center;">
                    <a class="anchor" href="detail.php?nis=<?= $row['nis']; ?>">Detail </a>
                        <span>|</span>
                    <a class="anchor" href="delete.php?id_pembayaran=<?php echo $row['id_pembayaran']; ?>" onclick="return confirm ('apakah anda yakin?')">Hapus</a>
                    <?php endif; ?>
                <?php endif; ?>

                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>
</div>

<?php
require_once '../templates/footer.php';
?>