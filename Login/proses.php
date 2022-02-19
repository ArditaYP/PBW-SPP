<?php
require_once '../koneksi.php'; // koneksi

// login
if (isset($_POST['masuk'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $petugas = "SELECT * FROM petugas WHERE username = '$username'"; // query user
    $checkPetugas = mysqli_query($conn, $petugas); // result user

    // cek petugas 
    if ($checkPetugas) {
        $readPetugas = readdata($checkPetugas);
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
    }

    $siswa = "SELECT * FROM siswa WHERE nisn = '$username'"; // query user
    $checksiswa = mysqli_query($conn, $siswa); // result user

    if ($checksiswa) {
        if (mysqli_num_rows($checksiswa) > 0) {
            $readsiswa = readdata($checksiswa);
            $passwordsiswa = "SELECT * FROM siswa WHERE password = '$password'"; // query password
            $rsiswa = mysqli_query($conn, $passwordsiswa); // result password

            // cek password
            if (mysqli_num_rows($rsiswa) > 0) {
                $_SESSION['userlogin'] = $username;
                return header("Location: ../dashboard/index.php");
            }

            return header("Location: index.php");
        }
    }
    return header("Location: index.php");
}
