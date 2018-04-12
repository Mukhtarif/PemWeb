<?php

$file = "data.txt";
$data = file_get_contents($file);

$rowdel = $_GET['row'];

$baris = explode("[R]", $data);
$databaru = "";
for($i = 0; $i<count($baris)-1; $i++) {
    if($i == $rowdel) continue;
    $databaru .= $baris[$i] . "[R]";
}

file_put_contents($file, $databaru);

header('location:baca.php');