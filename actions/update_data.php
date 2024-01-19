<?php

require_once __DIR__."/../functions/functions.php";

if ( isset($_POST['simpan']) )
{

    foreach( $_POST as $key => $value )
    {
        $$key = htmlspecialchars($value);
    }

    if ( updateDataMahasiswa($id, $nama_mahasiswa,$nim_mahasiswa,$telp_mahasiswa,$alamat_mahasiswa) ){
        header('location:../show_data.php');
    }
}
