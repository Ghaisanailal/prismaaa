<!DOCTYPE html>
<html>

<head>
    <title>ASINPEDAS Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Id User dan Password tidak sesuai !</div>";
        } else if ($_GET['pesan'] == "logindulu") {
            echo "<div class='alert'>Silahkan Login dulu !</div>";
        }
    }
    ?>

    <div class="kotak_login">
        <center><img src="assets/img/favicon.png"width=200 height=200></center>
        <p class="tulisan_login"> WELCOME TO <b>PRISMA</b></p>
        <hr>

        <form action="cek_login.php" method="post">
            <P><label>Id</label></P>
            <input type="text" name="id" class="form_login" placeholder="Masukan id" required="required">
            <label>Password</label>
            <p><input type="password" name="password" class="form_login" placeholder="Masukkan Password" required="required"></p>

            <p><input type="submit" class="tombol_login" value="SUBMIT"></p>
        </form>
    </div>
</body>

</html>