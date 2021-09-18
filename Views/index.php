<?php 

if(base64_decode($_GET["a"]) == "view_pegawai"){
    include 'View_pegawai.php';
}else if(base64_decode($_GET["a"]) == "post_pegawai"){
    include 'View_post_pegawai.php';
}else if(base64_decode($_GET["a"]) == "edit_pegawai"){
    include 'View_put_pegawai.php';
}else if(base64_decode($_GET["a"]) == "view_mahasiswa"){
    include 'View_Mahasiswa.php';
}else if(base64_decode($_GET["a"]) == "post_mahasiswa"){
    include 'View_post_mahasiswa.php';
}else if(base64_decode($_GET["a"]) == "edit_mahasiswa"){
    include 'View_put_mahasiswa.php';
}else if(base64_decode($_GET["a"]) == "view_pembayaran"){
    include 'View_pembayaran.php';
}else if(base64_decode($_GET["a"]) == "post_pembayaran"){
    include 'View_post_pembayaran.php';
}


?>