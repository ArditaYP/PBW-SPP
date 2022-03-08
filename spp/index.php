<html>

<head>
    <title>Isi Data</title>
</head>

<body>
    <center>
        <a href="tambah.php">Tambah Data</a><br><br>
        <table border='1'>
            <thead>
                <th>SPP</th>
                <th>Tahun</th>
                <th>Nominal</th>
                <th>AKSI</th>
            </thead>

            <tbody>
                <?php
                include("../koneksi.php");

                $query = "select * from spp ";

                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['id_spp'] ?></td>
                        <td><?php echo $row['tahun'] ?></td>
                        <td><?php echo $row['nominal'] ?></td>
                        <td style="display: flex; justify-content: center;">
                            <a href="edit.php?id=<?= $row['id_spp'] ?>">Edit</a> |
                            <a href="delete.php?id=<?= $row['id_spp'] ?>">Hapus</a>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
    </center>
</body>

</html>