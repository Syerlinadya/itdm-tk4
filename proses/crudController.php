<?php
require 'koneksiController.php';
require 'prosesCrudController.php';

$koneksiController = new KoneksiController();
$prosesCrudController = new ProsesCrudController($koneksiController->getDB());

// proses tambah
if (!empty($_GET['aksi']) && $_GET['aksi'] == 'tambah') {
    $IdPenjualan = strip_tags($_POST['IdPenjualan']);
    $NamaPelanggan = strip_tags($_POST['NamaPelanggan']);
    $NamaBarang = strip_tags($_POST['NamaBarang']);
    $Qty = strip_tags($_POST['Qty']);
    $HargaBarang = strip_tags($_POST['HargaBarang']);
    $Total = strip_tags($_POST['Total']);

    $tabel = 'Penjualan';

    $data = [
        'IdPenjualan'   => $IdPenjualan,
        'NamaPelanggan' => $NamaPelanggan,
        'NamaBarang'    => $NamaBarang,
        'Qty'           => $Qty,
        'HargaBarang'   => $HargaBarang,
        'Total'         => $Total,
    ];

    $prosesCrudController->tambahData($tabel, $data);
    echo '<script>alert("Tambah Data Berhasil");window.location="../index.php"</script>';
}

// proses edit
if (!empty($_GET['aksi']) && $_GET['aksi'] == 'edit') {
    $IdPenjualan = strip_tags($_POST['IdPenjualan']);
    $NamaPelanggan = strip_tags($_POST['NamaPelanggan']);
    $NamaBarang = strip_tags($_POST['NamaBarang']);
    $Qty = strip_tags($_POST['Qty']);
    $HargaBarang = strip_tags($_POST['HargaBarang']);

    $data = [
        'IdPenjualan'   => $IdPenjualan,
        'NamaPelanggan' => $NamaPelanggan,
        'NamaBarang'    => $NamaBarang,
        'Qty'           => $Qty,
        'HargaBarang'   => $HargaBarang,
    ];

    $tabel = 'Penjualan';

    $prosesCrudController->editData($tabel, $data);
    echo '<script>alert("Edit Data Berhasil");window.location="../index.php"</script>';
}

// hapus data
if (!empty($_GET['aksi']) && $_GET['aksi'] == 'hapus') {
    $tabel = 'Penjualan';
    $id = strip_tags($_GET['IdPenjualan']);
    $prosesCrudController->hapusData($tabel, $id);
    echo '<script>alert("Hapus Data Berhasil");window.location="../index.php"</script>';
}
?>
