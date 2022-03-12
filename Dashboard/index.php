<?php
require_once '../templates/header.php';
?>


<?php if(isset($_SESSION['leveluser'])) :
    // admin & petugas
    header('Location: ../pembayaraan/pembayaraan.php'); 
    ?>
  <?php else: 
    // siswa
    header('Location: ../History/index.php');?>
  <?php endif;?>
  

<?php
require_once '../templates/footer.php';
?>