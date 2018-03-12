<?php
    $angka = 1;
    if (isset($_COOKIE['angka'])) {
        $count = $_COOKIE['angka']+1;
        $angka = $count;
    }
    date_default_timezone_set('Asia/Jakarta');
    setcookie("angka", $angka, time()+3600);
    setcookie("waktuBuka", date('Y-m-d H:i:s'), time()+3600);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Reload</title>
</head>
<body>
    BUKA TERUS WEBSITE INI COY
</body>
</html>