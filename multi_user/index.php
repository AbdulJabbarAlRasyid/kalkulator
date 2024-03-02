<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>
        Membuat Login Multi User Level dengan PHP dan MySQLi
    </h1>

    <?php 
 if(isset($_GET['pesan'])){
 if($_GET['pesan']=="gagal"){
 echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
 }
 }
 ?>

    <div class="kotak_login">
        <p class="tulisan_login">Silahkan Login</p>
        <form action="cek_login.php" method="post">
            <label>Username</label><br/>
            <input type="text" name="username" class="form_login" placeholder="Username ..." required="required" auto-increment="on">
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password ..." required="required">
            <input type="submit" class="tombol_login" value="LOGIN">
            <br/>
            <br/>
            <center>
                <a class ="link" href="https://malasngoding.com">Kembali</a>
            </center>
        </form>
    </div>
</body>
</html>