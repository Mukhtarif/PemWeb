<?php
class dataModel {
    public function random() {
    	$fakultas = array("FK","FILKOM","FTP","FEB","FH","FPIK","FISIP","FT","FAPET");
    	$pickRandom = array_rand($fakultas,2);
    	$dataFak = $fakultas[$pickRandom[0]];
        return $dataFak;
    }
}
?>