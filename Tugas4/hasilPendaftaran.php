<?php
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $email = $_POST['email'];
        $tempatLahir = $_POST['tempatLahir'];
        $tglLahir = $_POST['tglLahir'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];
        $alamatKota = $_POST['alamatKota'];
        $alamatProvinsi = $_POST['alamatProvinsi'];
        $alamatKodePos = $_POST['alamatKodePos'];
        $jenisKelamin = $_POST['radioJenisKelamin'];
        $hobi = $_POST['hobi'];
        $alasan = $_POST['alasan'];
        $namaFile = $_FILES['file']['name'];
        $tmpFile = $_FILES['file']['tmp_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand" href="#">"X" UKM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Beranda</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Divisi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tentang Kami</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th class="vertical-center">#</th>
                    <th class="vertical-center">Nama</th>
                    <th class="vertical-center">NIM</th>
                    <th class="vertical-center">E-Mail</th>
                    <th class="vertical-center">TTL</th>
                    <th class="vertical-center">Agama</th>
                    <th class="vertical-center">Alamat</th>
                    <th class="vertical-center">Jenis Kelamin</th>
                    <th class="vertical-center">Hobi</th>
                    <th class="vertical-center">Alasan</th>
                    <th class="vertical-center">Foto</th>
                </tr>
                <tr>
                    <td class="vertical-center">1</td>
                    <td class="vertical-center"><?php echo $nama ?></td>
                    <td class="vertical-center"><?php echo $nim ?></td>
                    <td class="vertical-center"><?php echo $email ?></td>
                    <td class="vertical-center"><?php echo $tempatLahir.", ".$tglLahir ?></td>
                    <td class="vertical-center"><?php echo $agama ?></td>
                    <td class="vertical-center"><?php echo $alamat.", ".$alamatKota.", ".$alamatProvinsi.", ".$alamatKodePos ?></td>
                    <td class="vertical-center"><?php echo $jenisKelamin ?></td>
                    <td class="vertical-center"><?php foreach ($hobi as $val) {
                        echo $val.", ";
                    } ?></td>
                    <td class="vertical-center"><?php echo $alasan ?></td>
                    <td class="vertical-center"><?php move_uploaded_file($tmpFile, "./".$namaFile); ?><img src="<?php echo $namaFile ?>" alt="" class="pas-foto"></td>
                </tr>
            </table>
        </div>

    </div>
</body>
</html>