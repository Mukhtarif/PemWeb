<?php 
    if (isset($_COOKIE['angka'])) {
        
        echo "Telah dibuka sebanyak ".$_COOKIE['angka']." kali, terakhir dibuka pada waktu ". $_COOKIE['waktuBuka'];
    }
    else echo "BELUM ADA COOKIES";
?>