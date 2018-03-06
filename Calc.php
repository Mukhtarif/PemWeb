<?php 
    $volume = 0;
    $luas = 0;

    if (isset($_POST['submit'])) {
        $radius = $_POST['radius'];
        $tinggi = $_POST['tinggi'];
        $phi = $_POST['phi'];        
        
        function volume($r, $t, $pi)
        {
            $volume = $pi*pow($r,2)*$t;
            return $volume;
        }
        function luas($r, $t, $pi)
        {
            $luas = ($r+$t)*2*$pi*$r;
            return $luas;
        }
        
        $volume = volume($radius, $tinggi, $phi);
        $luas = luas($radius, $tinggi, $phi);
        
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator Luas Tabung</title>
</head>
<body>
    <h1>Cari Luas Tabung</h1>
    <form action="" method="post">
        <label for="radius">Radius : </label>
        <input type="text" name="radius" id="radius">
        <label for="tinggi">Tinggi : </label>
        <input type="text" name="tinggi" id="tinggi">
        <input type="hidden" name="phi" value="3.14">
        <input type="submit" name="submit" value="Hitung">
        <label for="volume">Volume : </label>
        <input type="text" name="volume" value="<?php echo $volume;?>" id="volume">
        <label for="volume">Luas Permukaan : </label>
        <input type="text" name="luas" value="<?php echo $luas ?>" id="luas">
    </form>
</body>
</html>
