<?php
    require_once "connect.php";

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tel = $_POST['phone'];
    $hobi = $_POST['hobi'];

    $sql = "INSERT INTO bukutelpon (nama, email, tel, hobi) VALUES ('$nama', '$email', '$tel', '$hobi')";

    $res = mysqli_query($link, $sql);
    if ($res) {
        echo "Data berhasil disimpan";
    }
    header("location:select.php");

    mysqli_close($link);
?>