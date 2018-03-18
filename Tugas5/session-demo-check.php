<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>

    <style>
        .this-body{
            background: url("http://localhost/hello.jpg");
            background-repeat: no-repeat;
            background-size: auto;
        }
        
    </style>

</head>
<body id="body" class="this-body">
    <?php
        if (isset($_SESSION)) {
            $waktuSekarang = $_SESSION['date'];
            if (substr($waktuSekarang, 0, 2) < 10) {
                ?><script>document.getElementById("body").style.background = "url('http://localhost/pagi.jpg')"</script> <?php
                echo "<h1>Selamat Pagi, </h1>";
            }
            elseif (substr($waktuSekarang, 0, 2) >= 10 and substr($waktuSekarang, 0, 2) < 15) {
                ?><script>document.getElementById("body").style.background = "url('http://localhost/siang.jpg')"</script> <?php
                echo "<h1>Selamat Siang, </h1>";
            }
            elseif (substr($waktuSekarang, 0, 2) >= 15 and substr($waktuSekarang, 0, 2) < 18) {
                ?><script>document.getElementById("body").style.background = "url('http://localhost/sore.jpg')"</script> <?php
                echo "<h1>Selamat Sore, </h1>";
            }
            elseif (substr($waktuSekarang, 0, 2) >= 18 and substr($waktuSekarang, 0, 2) < 23) {
                ?><script>document.getElementById("body").style.background = "url('http://localhost/malam.jpg')"</script> <?php
                echo "<h1>Selamat Malam, </h1>";
            }
            echo "<h3>Anda mengakses melalui browser, <h3>".$_SESSION['webBrowser'];
        }
        else {
            echo "Belum ada session";
            ?><script>document.getElementById("body").style.background = "url('http://localhost/PemWeb/hello.jpg')"</script> <?php
        }
    ?>
</body>
</html>
