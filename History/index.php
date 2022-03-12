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

        <?php
        $query = "SELECT * FROM pembayaran JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas";
        $result = mysqli_query($conn, $query);
        $i = 1;
        //mengecek apakah ada error ketika menjalankan query
        if (!$result) {
            die("Query Error: " . mysqli_errno($conn) .
                " - " . mysqli_error($conn));
        }
        ?>
        <?php foreach ($result as $row) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td>
                    <?= $row['nama_petugas'] ?>
                </td>
                <td>
                    <?= $row['nis'] ?>
                </td>
                <td>
                    <?= $row['tgl_bayar'] ?>
                </td>
                <td>
                    <?= $row['bulan_dibayar'] ?>
                </td>
                <td>
                    <?= $row['tahun_dibayar'] ?>
                </td>
                <td>
                    <?= $row['id_spp'] ?>
                </td>
                <td>
                    <?= $row['jumlah_bayar'] ?>
                </td>
                <?php if (isset($_SESSION['leveluser'])) : ?>
                    <?php if ($_SESSION['leveluser'] == 'admin') : ?>
                        <td>
                            <a class="anchor" href="detail.php?nis=<?= $row['nis']; ?>">Detail </a>
                            <span>|</span>
                            <a class="anchor" href="delete.php?id_pembayaran=<?php echo $row['id_pembayaran']; ?>" onclick="return confirm ('apakah anda yakin?')">Delete</a>
                        <td>
                        <?php endif; ?>
                    <?php endif; ?>
                        <td style="display: none"></td>
            </tr>

        <?php endforeach; ?>

    </table>
</div>

<?php
require_once '../templates/footer.php';
?>