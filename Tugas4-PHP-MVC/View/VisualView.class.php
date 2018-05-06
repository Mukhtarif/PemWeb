<?php
class VisualView {
    public function form() {
        require_once 'View/formPendaftaran.php';
    }
    public function hasil($data) {
        require_once 'View/hasilPendaftaran.php';
    }
}
?>