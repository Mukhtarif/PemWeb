<?php
    session_start();

    date_default_timezone_set('Asia/Jakarta');
    $date = date('H:i:s');
    $webBrowser = $_SERVER['HTTP_USER_AGENT'];
    
    $_SESSION['date'] = $date;
    $_SESSION['webBrowser'] = $webBrowser;

?>