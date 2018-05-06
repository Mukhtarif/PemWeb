<?php
class DataController {
    private $modelData;
    private $uiData;
    public function isiForm() {
        require_once 'View/VisualView.class.php';
        $form = new VisualView();
        $form->form();
    }
    public function lihatDataForm() {
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
        move_uploaded_file($tmpFile, $_SERVER['DOCUMENT_ROOT']."/Pemweb/Tugas4/Assets/Pictures/".$namaFile);
        require_once 'Model/dataModel.class.php';
        $this->modelData = new dataModel();
        $fakultas = $this->modelData->random();

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'email' => $email,
            'tempatLahir' => $tempatLahir,
            'tglLahir' => $tglLahir, 
            'agama' => $agama,
            'alamat' => $alamat,
            'alamatKota' => $alamatKota,
            'alamatProvinsi' => $alamatProvinsi,
            'alamatKodePos' => $alamatKodePos,
            'jenisKelamin' => $jenisKelamin,
            'hobi' => $hobi,
            'alasan' => $alasan, 
            'namaFile' => $namaFile,
            'fakultas' => $fakultas
        );
        require_once 'View/VisualView.class.php';
        $this->uiData = new VisualView();
        $this->uiData->hasil($data);
    }
}
?>