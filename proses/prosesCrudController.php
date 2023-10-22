<?php
require 'prosescrud.php';

class ProsesCrudController {
    private $proses;

    public function __construct($db) {
        $this->proses = new prosesCrud($db);
    }

    public function tambahData($tabel, $data) {
        $this->proses->tambah_data($tabel, $data);
    }

    public function editData($tabel, $data) {
        $this->proses->edit_data($tabel, $data);
    }

    public function hapusData($tabel, $id) {
        $this->proses->hapus_data($tabel, $id);
    }
}
?>
