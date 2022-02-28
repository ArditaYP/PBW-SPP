<?php
require_once '../templates/header.php';
?>
<style>
    .in-container {
        margin-top: 20px;
    }

    input {
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        background: #f8f8f8;
        border: 2px solid #ccc;
        outline-color: #001e3c;
        box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.1);
        width: 80%;
        margin-top: 5px;
        margin-bottom: 10px;
    }

    textarea {
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        background: #f8f8f8;
        border: 2px solid #ccc;
        outline-color: #001e3c;
        box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.1);
        width: 80%;
        height: 80px;
    }

    button {
        color: white;
        background-color: #001e3c;
        padding: 10px;
        border-radius: 10px;
        text-decoration: none;
        font-size: 12px;
        border: 0;
        margin-top: 20px;
    }
</style>
<section class="home">
    <div class="container">
        <h1 style="margin-bottom: -3px;">Input Petugas</h1>
        <span>Silahkan menginputkan data dengan benar!</span>
        <form action="prosestambah.php" method="POST" class="in-container">
            <br>
            <label>Username</label>
            <br>
            <input type="text" name="username" placeholder="masukan username..." required="" />
            <br>
            <label>Password</label>
            <br>
            <input type="password" name="password" placeholder="masukan password..." required="" />
            <br>
            <label>Nama Petugas</label>
            <br>
            <input type="text" name="nama_petugas" placeholder="masukan nama petugas..." required="" />
            <br>
            <label>Level</label>
            <br>
            <input type="number" name="level" placeholder="masukan level petugas..." required="" />
            <br>
            <button class="tombol" type="submit" value="tambah"><b>SUBMIT</b></button>
        </form>
    </div>
</section>
<?php
require_once '../templates/footer.php';
?>