<?php
    require 'panggil.php';

    // proses tambah
    if(!empty($_GET['aksi'] == 'tambah'))
    {
        $IdPenjualan = strip_tags($_POST['IdPenjualan']);
        $NamaPelanggan = strip_tags($_POST['NamaPelanggan']);
        $NamaBarang = strip_tags($_POST['NamaBarang']);
        $Qty = strip_tags($_POST['Qty']);
        $HargaBarang = strip_tags($_POST['HargaBarang']);
        $Total = strip_tags($_POST['Total']);
        
        $tabel = 'Penjualan';
        # proses insert
        $data[] = array(
            'IdPenjualan'		=>$IdPenjualan,
            'NamaPelanggan'		=>$NamaPelanggan,
            'NamaBarang'	=>$NamaBarang,
            'Qty'		=>$Qty,
            'HargaBarang'			=>$HargaBarang,
            'Total'		=>$Total
        );
        $proses->tambah_data($tabel,$data);
        echo '<script>alert("Tambah Data Berhasil");window.location="../index.php"</script>';
    }

    // proses edit
	if(!empty($_GET['aksi'] == 'edit'))
	{
		$IdPenjualan = strip_tags($_POST['IdPenjualan']);
		$NamaPelanggan = strip_tags($_POST['NamaPelanggan']);
		$NamaBarang = strip_tags($_POST['NamaBarang']);
		$Qty = strip_tags($_POST['Qty']);
		$HargaBarang = strip_tags($_POST['HargaBarang']);
		$Total = strip_tags($_POST['Total']);
		
        {
            $data = array(
                'IdPenjualan'		=>$IdPenjualan,
                'NamaPelanggan'	=>$NamaPelanggan,
                'NamaBarang'		=>$NamaBarang,
                'Qty'			=>$Qty,
                'HargaBarang'		=>$HargaBarang
            );
        }else{

            $data = array(
                'IdPenjualan'		=>$IdPenjualan,
                'NamaPelanggan'		=>$NamaPelanggan,
                'NamaBarang'	=>$NamaBarang,
                'Qty'		=>$Qty,
                'HargaBarang'			=>$HargaBarang,
                'Total'		=>$Total
            );
        }
        $tabel = 'penjualan';
        $proses->edit_data($tabel,$data);
        echo '<script>alert("Edit Data Berhasil");window.location="../index.php"</script>';
    }
    
    // hapus data
    if(!empty($_GET['aksi'] == 'hapus'))
    {
        $tabel = 'tbl_user';
        $id = strip_tags($_GET['hapusid']);
        $proses->hapus_data($tabel,$id);
        echo '<script>alert("Hapus Data Berhasil");window.location="../index.php"</script>';
    }

?>
