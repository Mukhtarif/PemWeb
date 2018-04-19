<?php
    require_once "connect.php";

    $row = $_GET['row'];

    $sql = "DELETE FROM bukutelpon WHERE id = $row";

    $res = mysqli_query($link, $sql);
    if ($res) {
        header("location:select.php");
    }
?>