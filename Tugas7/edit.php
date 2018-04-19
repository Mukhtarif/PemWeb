<?php
    require_once "connect.php";

    $row = $_GET['row'];

    $sql_select = "SELECT * FROM bukutelpon WHERE id = $row";

    $res_select = mysqli_query($link, $sql_select);

    $data = mysqli_fetch_assoc($res_select);

    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $tel = $_POST['phone'];
        $hobi = $_POST['hobi'];

        $sql_update = "UPDATE bukutelpon SET nama='$nama', email='$email', tel='$tel', hobi='$hobi' WHERE id = $row";

        $res_update = mysqli_query($link, $sql_update);
        if($res_update) {
            header("location:select.php");
        }
    }
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
                  <span class="font white-text"><b>ADD CONTACT</b></span>
                </div>
                <div class="card-content" style="padding-bottom: 5px;">
                  <form action="#" method="POST">
                    <div class="row">
                      <div class="input-field col s12">
                        <input placeholder="Isikan nama anda" type="text" name="nama" value="<?php echo $data['nama'] ?>">
                        <label>Name</label>
                      </div>
                      <div class="input-field col s12">
                        <input placeholder="Isikan email anda" type="email" name="email" value="<?php echo $data['email'] ?>">
                        <label>Email</label>
                      </div>
                      <div class="input-field col s12">
                        <input placeholder="Isikan nomor telepon anda" type="tel" name="phone" value="<?php echo $data['tel'] ?>">
                        <label>Phone</label>
                      </div>
                      <div class="input-field col s12">
                        <input placeholder="Isikan nomor hobby anda" type="tel" name="hobi" value="<?php echo $data['hobi'] ?>">
                        <label>Hobby</label>
                      </div>
                      <div class="col s12 center-align">
                        <button class="btn waves-effect waves-light cyan" type="submit" name="submit">Save
                          <i class="material-icons right">send</i>
                        </button>
                      </div>
                      <div class="col s12 right-align" style="margin-top: 25px; padding-bottom: 0px;">
                        &copy; Ahmadan M X M.Arkan 2018
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