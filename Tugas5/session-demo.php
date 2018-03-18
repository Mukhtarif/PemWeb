<?php
    session_start();

    date_default_timezone_set('Asia/Jakarta');
    $date = date('H:i:s');
    $webBrowser = $_SERVER['HTTP_USER_AGENT'];

    $_SESSION['date'] = $date;
    $_SESSION['webBrowser'] = $webBrowser;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOOM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
</head>
<body>
    <div class="jumbotron jumbotron-fluid header">
        <div class="container">
        <h1>Lihat Sesi Anda</h1>
        <p>DISINI LAH TEMPATNYA</p>
        <input type="button" value="REFRESH" class="button_active" onclick="location.href='session-demo.php';">
        <input type="submit" value="Cek Sesi" class="button_active" onclick="location.href='session-demo-check.php';">
    </div>
</div>
</body>
</html>
