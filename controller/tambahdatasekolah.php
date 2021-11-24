<?php
include('../database/koneksi.php');

$kelas = $_GET['kelas'];
$namakelas = $_POST['namakelas'];
$walikelas = $_POST['walikelas'];
$nipwk = $_POST['nipwk'];
$gurubk = $_POST['gurubk'];
$nipbk = $_POST['nipbk'];

$query = mysqli_query($koneksi,"insert into data_kelas (nama_kelas,wali_kelas,nip_wk,nama_bk,nip_bk) values ('$namakelas','$walikelas','$nipwk','$gurubk','$nipbk')");

if($query){
    if($kelas = '7'){
        header("Location:../dsekolah7.php?status");
    }
}

?>