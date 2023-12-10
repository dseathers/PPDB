<?php
    include 'config.php';
    session_start();

    $login_error = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : 'NISN atau PASSWORD salah';
// Hapus pesan kesalahan dari sesi
    unset($_SESSION['login_error']);
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/CSS/login.css">
        <nav>
            <img src="assets/image/logo.png">
            <ul>
                <li><a href="#">FAQ</a></li>
            </ul>
        </nav>
    </head>
    <style>
        h1{
            text-align: center;
            color: #ffffff;
            margin-bottom: 30px;
        }
    </style>
        <script>
            alert("<?php echo $login_error; ?>");
        </script>
    <body>
        <h1>LOGIN</h1>
        <form action="proses_login.php" method="post">

        <label for="nisn">NISN</label>
        <input type="number" name="nisn" id="nisn" required>

        <label for="password">PASSWORD</label>
        <input type="password" name="password" id="password" value=" " required>

        <div class="tombol">
            <input type="submit" value="LOGIN" name="submit">
        </div>

        </form>
    </body>
</html>