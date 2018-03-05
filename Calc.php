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
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="radius">
        <input type="number" name="tinggi">
        <input type="hidden" name="phi" value="3.14">
        <input type="submit" name="submit">
        <input type="text" name="volume" value="<?php echo "Volume : ".$volume;?>">
        <input type="text" name="luas" value="<?php echo " Luas : ".$luas ?>">
    </form>
</body>
</html>
