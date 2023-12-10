<?php
    include_once("config.php");
    $result = mysqli_query($mysqli, "SELECT * FROM smpn5bogor ORDER BY nilai DESC");
?>

<html>
    <head>
    <nav>
        <a href="../index.php">
            <img src="../../assets/image/logo.png" a href="../index.php">
        </a>
        <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="../../main/hasil_seleksi.php">HASIL SELEKSI</a></li>
            <li><a href="../../main/pendaftaransekolah.php">DAFTAR SEKOLAH</a></li>
            <li><a href="../../main/akunsaya.php">AKUN SAYA</a></li>
        </ul>
        </nav>
    </head>
    <style>
                h1{
            text-align: center;
            color: #ffffff;
            margin-bottom: 30px;
        }

nav{
            background-color: white;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 80px;
        }
        nav img{
            width: 70px;
            height: auto;
            position: absolute;
            top: 0;
            margin-left: 10px;
            margin-top: 5px;
            left: 0;
        }

        ul {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            height: 50px;
        }

        li{
            list-style-type: none;
            margin: 20px;
        }

        a{
            text-decoration: none;
            color: black;
        }

        a:hover{
            font-weight: bold;
        }

        body{
            background-color: #3399ff;
            font-family:arial;
            padding-top: 140px;
        }


    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px;
        padding-left: 3px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #1B608D;
        color: #fff;
        text-align: center;
    }
    
    td{
        text-align: center;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    tr:nth-child(-n+100) td:nth-child(3) {
            background-color: #66ff66;
        }

        tr:nth-child(n+101) td:nth-child(3) {
            background-color: red;
        }

    </style>
    <body>
        <h1>SMPN 5 BOGOR</h1>
        <table width='80%' border=1>
            <tr>
                <th>NO</th>
                <th>NISN</th>
                <th>NAMA</th>
                <th>BAHASA INDONESIA</th>
                <th>MATEMATIKA</th>
                <th>IPA</th>
                <th>NILAI</th>
            </tr>
            <?php
                $no = 1;
                while($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$no."</td>";
                    echo "<td>".$user_data['nisn']."</td>";
                    echo "<td>".$user_data['nama']."</td>";
                    echo "<td>".$user_data['bindo']."</td>";
                    echo "<td>".$user_data['mtk']."</td>";
                    echo "<td>".$user_data['ipa']."</td>";
                    echo "<td>".$user_data['nilai']."</td>";
                    echo "</tr>";
                    $no++;
                }
            ?>
        </table>
    </body>
</html>
