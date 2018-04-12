<?php

$file = "data.txt";

$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$hobby = $_POST['hobby'];

$data = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "|F|" .
        $hobby . "[R]";

$handle = fopen($file, "a+");
fwrite($handle, $data);
fclose($handle);

echo '<script>alert("Data Anda sudah Tersimpan");window.location.href="baca.php";</script>';