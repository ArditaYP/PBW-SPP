<!DOCTYPE html>
<html lang="en">

<head>
    <title>Isi Data</title>
</head>

<body>
    <center>
        <a href="tambah.php">Tambah Data</a><br><br>
        <table border='1'>
            <thead>
                <th>idkelas</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </thead>


            <tbody>
                <?php
                include("../koneksi.php");

                $query = "select * from kelas";

                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['id_kelas'] ?></td>
                        <td><?php echo $row['nama_kelas'] ?></td>
                        <td><?php echo $row['kompentensi_keahlian'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id_kelas'] ?>">Edit</a> |
                            <a href="delete.php?id=<?= $row['id_kelas'] ?>">Hapus</a>
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