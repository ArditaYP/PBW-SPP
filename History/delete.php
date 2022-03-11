<?php
include('../koneksi.php');

$id_pembayaran = $_GET['id_pembayaran'];
$query = "DELETE FROM pembayaran WHERE id_pembayaran = '$id_pembayaran'";

$result = mysqli_query($koneksi, $query);
?>

<script type="text/javascript">
    window.location = "index.php";
</script>