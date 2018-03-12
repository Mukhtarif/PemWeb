<?php 
    session_start();
    if (isset($_SESSION)) {
        $waktuSekarang = $_SESSION['date'];
        if (substr($waktuSekarang, 0, 2) < 10) {
            echo "Selamat Pagi, ";
        }
        elseif (substr($waktuSekarang, 0, 2) >= 10 and substr($waktuSekarang, 0, 2) < 15) {
            echo "Selamat Siang, ";
        }
        elseif (substr($waktuSekarang, 0, 2) >= 15 and substr($waktuSekarang, 0, 2) < 18) {
            echo "Selamat Sore, ";
        }
        elseif (substr($waktuSekarang, 0, 2) >= 18 and substr($waktuSekarang, 0, 2) < 23) {
            echo "Selamat Malam, ";
        }
        echo "Anda mengakses melalui browser ".$_SESSION['webBrowser'];
    }
    else {
        echo "Belum ada session";
    }
?>