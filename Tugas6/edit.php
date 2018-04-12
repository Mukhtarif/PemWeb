<?php

$file = "data.txt";
$data = file_get_contents($file);

function editData($nama, $email, $phone, $hobby) {
    $data = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "|F|" .
        $hobby;
        return $data;
}

$rowdel = $_GET['row'];

$baris = explode("[R]", $data);
$databaru = "";
for($i = 0; $i<count($baris)-1; $i++) {
    $kolom = explode("|F|", $baris[$i]);
    if($i == $rowdel) {
        ?>



<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Tugas Pak Aryo</title>

  <!-- CSS -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

    <body>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12">

              <div class="card">
                <div class="card-content cyan center-align" style="padding: 10px 20px;">
                  <span class="font white-text"><b>EDIT CONTACT</b></span>
                </div>
                <div class="card-content" style="padding-bottom: 5px;">
                  <form action="#" method="POST">
                    <div class="row">
                      <div class="input-field col s12">
                        <input placeholder="Isikan nama anda " type="text" name="nama" value="<?php echo $kolom[0] ?>">
                        <label>Name</label>
                      </div>
                      <div class="input-field col s12">
                        <input placeholder="Isikan email anda" type="email" name="email" value="<?php echo $kolom[1] ?>">
                        <label>Email</label>
                      </div>
                      <div class="input-field col s12">
                        <input placeholder="Isikan nomor telepon anda" type="tel" name="phone" value="<?php echo $kolom[2] ?>">
                        <label>Phone</label>
                      </div>
                      <div class="input-field col s12">
                        <input placeholder="Isikan hobi anda" type="text" name="hobby" value="<?php echo $kolom[3] ?>">
                        <label>Phone</label>
                      <div class="col s12 center-align">
                        <button class="btn waves-effect waves-light cyan" type="submit" name="submit">Save
                          <i class="material-icons right">send</i>
                        </button>
                      </div>
                      <div class="col s12 right-align" style="margin-top: 25px; padding-bottom: 0px;">
                        &copy; Ahmadan M X M.arkan 2018
                      </div>
                    </div>
                  </form>
                </div>
              </div>

                    </div>
                </div>
            </div>
        </div>

      

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>

    </body>
</html>
        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $hobby = $_POST['hobby'];
            $baris[$i] = editData($nama, $email, $phone, $hobby);
        }
        
    }
    $databaru .= $baris[$i] . "[R]";
}
if (isset($_POST['submit'])) {
    
    file_put_contents($file, $databaru);

    header('location:baca.php');
}
?>

