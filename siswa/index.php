<?php
require_once '../koneksi.php';
require_once '../templates/header.php';
?>
<section class="home">
    <div class="text">Kelas</div>
    <div class="container">
        <a href="tambah.php">Tambah Data</a><br><br>
        <table border='1'>
            <thead>
                <th>Nisn</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>SPP</th>
                <th>AKSI</th>
            </thead>

            <tbody>
                <?php

                $query = "select * from siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas";

                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['nisn'] ?></td>
                        <td><?php echo $row['nis'] ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['nama_kelas'] ?></td>
                        <td><?php echo $row['alamat'] ?></td>
                        <td><?php echo $row['no_telp'] ?></td>
                        <td><?php echo $row['id_spp'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['nisn'] ?>">Edit</a> |
                            <a href="delete.php?id=<?= $row['nisn'] ?>">Hapus</a>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</section>
<?php
require_once '../templates/footer.php';
?>