
<?php

include "koneksi.php";
$nama = $koneksi->real_escape_string($_POST['nama']); 
$email = $koneksi->real_escape_string($_POST['email']); 
$No_Handphone = $koneksi->real_escape_string($_POST['No_Handphone']); 
$komentar= $koneksi->real_escape_string($_POST['komentar']); 


$simpan=$koneksi->query("insert into komentar(nama,email,No_Handphone,komentar) 
                        values ('$nama', '$email', '$No_Handphone','$komentar')");

if($simpan==true){

    header("location:contact.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>