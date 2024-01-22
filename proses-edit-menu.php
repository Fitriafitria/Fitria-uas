<?php

$id=$_POST['pesanan_id'];
$Menu=$_POST['Menu'];
$Harga=$_POST['Harga'];
$Jumlah=$_POST['Jumlah'];
$total_harga=$_POST['total_harga'];

include "koneksi.php";

$simpan=$koneksi->query("update pesanan set pesanan_id ='$id', Menu='$Menu', Harga='$Harga', Jumlah='$Jumlah', total_harga=$total_harga where pesanan_id='$id'"); 
                       
if($simpan==true){

    header("location:tampil-menu.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>