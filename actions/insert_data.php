<?php
require __DIR__ . "../../functions/functions.php";
if(isset($_POST['tambah']))
{
    if (tambahData($_POST['nama_mahasiswa'],$_POST['nim_mahasiswa'],$_POST['telp_mahasiswa'],$_POST['alamat_mahasiswa']))
    {
        header('location:../show_data.php');
    }else{
        header('location:../tambah_data.php');
    }
}

