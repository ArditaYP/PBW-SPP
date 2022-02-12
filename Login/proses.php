<?php
require_once '../koneksi.php'; // koneksi

// login
if (isset($_POST['masuk'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $petugas = "SELECT * FROM petugas WHERE username = '$username'"; // query user
    $checkPetugas = mysqli_query($conn, $petugas); // result user
    $readPetugas = readdata($checkPetugas);

    // cek petugas password
    if (mysqli_num_rows($checkPetugas) > 0) {
        $ppetugas = "SELECT * FROM petugas WHERE password = '$password'"; // query password
        $rpetugas = mysqli_query($conn, $ppetugas); // result password

        // cek password
        if (mysqli_num_rows($rpetugas) > 0) {
            $_SESSION['userlogin'] = $username;
            $_SESSION['leveluser'] = $readPetugas[0]['level'];
            return header("Location: ../dashboard/index.php");
        }

        return header("Location: index.php");
    }
    return header("Location: index.php");
}
