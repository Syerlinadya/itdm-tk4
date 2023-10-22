<?php
require 'koneksi.php';

class KoneksiController {
    private $db;

    public function __construct() {
        $koneksi = new Koneksi();
        $this->db = $koneksi->DBConnect();
    }

    public function getDB() {
        return $this->db;
    }
}
?>
