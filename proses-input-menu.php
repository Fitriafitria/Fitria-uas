<?php

$id=$_POST['pesanan_id'];
$Menu=$_POST['Menu'];
$Harga=$_POST['Harga'];
$Jumlah=$_POST['Jumlah'];
$total_harga=$_POST['total_harga'];

include "koneksi.php";

$simpan=$koneksi->query("insert into pesanan(pesanan_id,Menu,Harga,Jumlah,total_harga) 
                        values ('$pesanan_id', '$Menu', '$Harga', '$Jumlah', '$total_harga')");

if($simpan==true){

    header("location:tampil-menu.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>