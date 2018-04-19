<?php
    $user = 'user';
    $pass = 'rahasia';
    $host = 'localhost';
    $db = 'butel';

    $link = mysqli_connect($host, $user, $pass, $db);
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal dibuat";
        exit;
    }
?>