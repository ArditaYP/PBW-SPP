<?php
require_once '../templates/header.php';
?>

<style>
    .anchor {
        text-decoration: none;
        color: #001e3c;
        display: inline-block;
    }

    table {
        width: 95%;
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
</style>
<div class="main-content">
    <h1>Petugas</h1>
    <a href="tambah.php" class="anchor">+ Tambah data Petugas</a>
    <table>
        <tr>
            <th>Id Petugas</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nama Petugas</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>

        <tbody>
            <?php
            // jalankan query untuk menampilkan semua data diurutkan berdasarkan idpelanggan
            $query = "SELECT * FROM petugas";
            $result = mysqli_query($conn, $query);
            //mengecek apakah ada error ketika menjalankan query
            if (!$result) {
                die("Query Error: " . mysqli_errno($conn) .
                    " - " . mysqli_error($conn));
            }

            //buat perulangan untuk element tabel dari data pelanggan
            //hasil query akan disimpan dalam variabel $data dalam bentuk array
            //kemudian dicetak dengan perulangan while
            while ($row = mysqli_fetch_assoc($result)) {
            ?>

                <tr>
                    <td><?php echo $row['id_petugas'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td><?php echo $row['nama_petugas'] ?></td>
                    <td><?php echo $row['level'] ?></td>
                    <td style="display: flex; justify-content: center;">
                        <a class="anchor" href="edit.php?id_petugas=<?= $row['id_petugas']; ?>">Edit </a>
                        <a class="anchor" href="delete.php?id_petugas=<?php echo $row['id_petugas']; ?>" onclick="return confirm ('apakah anda yakin?')">Hapus</a>
                    </td>
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