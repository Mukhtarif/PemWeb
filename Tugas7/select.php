<?php
    require_once "connect.php";

    $sql = "SELECT id, nama, email, tel, hobi FROM bukutelpon";

    $res = mysqli_query($link, $sql);
    
 
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
                              <span class="font white-text"><b>LIST CONTACT</b></span>
                            </div>
                            <div class="card-content" style="padding-bottom: 5px;">
                                <table class="striped">

                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Hobby</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            while ($baris = mysqli_fetch_array($res)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $baris['id'];?></td>
                                            <td><?php echo $baris['nama'];?></td>
                                            <td><?php echo $baris['email'];?></td>
                                            <td><?php echo $baris['tel'];?></td>
                                            <td><?php echo $baris['hobi'];?></td>
                                            <td>
                                                <a href="edit.php?row=<?php echo $baris['id'];?>"><i class="material-icons cyan-text" style="margin-right: 5px;">edit</i></a>
                                                <a href="delete.php?row=<?php echo $baris['id'];?>"><i class="material-icons red-text">delete</i></a>
                                            </td>
                                        </tr>
                                        <?php }; ?>
                                    </tbody>
                                </table>
                                <center>
                                    <div style="margin: 20px 0px;">
                                        <a href="form.html" class="waves-effect waves-light cyan btn font"><b>Add Contact</b></a>
                                    </div>
                                </center>
                                <div class="row">
                                    <div class="col s12 right-align" style="margin-top: 25px; padding-bottom: 0px;">
                                        &copy; Ahmadan M X M.Arkan 2018
                                    </div>
                                </div>
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

<?php mysqli_close($link); ?>