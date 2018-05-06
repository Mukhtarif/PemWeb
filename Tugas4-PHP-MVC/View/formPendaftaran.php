<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Pemweb/Tugas4/Assets/CSS/style.css">

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
    <div class="container form-section">
        
        PENDAFTARAN UKM "X" Universitas Brawijaya
        <form action="http://localhost/Pemweb/Tugas4/router.php/DataController/lihatData/" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="namaPendaftar">Nama</label>
                <input type="text" class="form-control" id="namaPendaftar" placeholder="John Doe" name="nama">
            </div>
            <div class="form-group">
                <label for="nimPendaftar">NIM</label>
                <input type="text" class="form-control" id="nimPendaftar" placeholder="1xxxxxxxxxxxxx" name="nim">
            </div>
            <div class="form-group">
                <label for="emailPendaftar">Email</label>
                <input type="email" class="form-control" id="emailPendaftar" placeholder="john@mail.com" name="email">
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="tempatLahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempatLahir" placeholder="Segitiga Bermuda" name="tempatLahir">
                </div>
                <div class="col">
                    <label for="tanggalLahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggalLahir" name="tglLahir">
                </div>
            </div>
            <div class="form-group">
                <label class="my-1 mr-2" for="agamaPendaftar">Agama</label>
                <select class="custom-select my-1 mr-sm-2" id="agamaPendaftar" name="agama">
                    <option selected>Pilihan</option>
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Kristen Katholik">Kristen Katholik</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Budha">Budha</option>
                </select>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <label for="alamatPendaftar">Alamat</label>
                    <input type="text" class="form-control" id="alamatPendaftar" placeholder="Jl. Jalan-jalan No. 1" name="alamat">
                </div>
                <div class="col">
                    <label for="kotaPendaftar">Kota/Kabupaten</label>
                    <input type="text" class="form-control" id="kotaPendaftar" placeholder="Segitiga Bermuda" name="alamatKota">
                </div>
                <div class="col">
                    <label for="provinsiPendaftar">Provinsi</label>
                    <input type="text" class="form-control" id="provinsiPendaftar" placeholder="Jawa Utara" name="alamatProvinsi">
                </div>
                <div class="col">
                    <label for="kodeposPendaftar">Kode Pos</label>
                    <input type="text" class="form-control" id="kodeposPendaftar" placeholder="123456" name="alamatKodePos">
                </div>
            </div>
            <div class="form-group">
                <label for="#">Jenis Kelamin</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenisKelaminL" name="radioJenisKelamin" class="custom-control-input" checked value="Laki-Laki">
                    <label class="custom-control-label" for="jenisKelaminL">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenisKelaminP" name="radioJenisKelamin" class="custom-control-input" value="Perempuan">
                    <label class="custom-control-label" for="jenisKelaminP">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="#">Hobi</label>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="bermainDiLuar" name="hobi[]" value="Bermain di Luar">
                    <label class="custom-control-label" for="bermainDiLuar">Bermain di Luar</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="bermainDiDalam" name="hobi[]" value="Bermain di Dalam">
                    <label class="custom-control-label" for="bermainDiDalam">Bermain di Dalam</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="tanamanHolic" name="hobi[]" value="tanamanHolic">
                    <label class="custom-control-label" for="tanamanHolic">Tanaman Holic</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="tiduranAja" name="hobi[]"value="Tiduran Aja">
                    <label class="custom-control-label" for="tiduranAja">Tiduran Aja</label>
                </div>
            </div>
            <div class="form-group">
                <label for="reasonable">Alasan Ingin Memasuki UKM "X"</label>
                <textarea class="form-control" id="reasonable" rows="3" name="alasan"></textarea>
            </div>
            <div class="form-group">
                <label for="#">Foto 3x4 Terbaru</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="file">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
            
            <input type="submit" class="btn btn-primary" value="Submit"/>
        </form>
        
    </div>
</body>
</html>