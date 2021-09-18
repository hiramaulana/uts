<?php

// Memanggil fungsi dari CSRF
include('Csrf.php');


if($_GET['type'] == "pegawai"){

    include '../Controllers/Controller_Pegawai.php';
    // Membuat Object dari Class pegawai
    $db = new Controller_pegawai();

    // Membuat variabel dari Get URL
    $function = $_GET['function'];

    // Decision variabel create
    if($function == "create_pegawai"){

        // Validasi Token CSRF
        if(validation()==true)
        {
            $db->POSTData(
                $_POST['nip'],
                $_POST['nama'],
                $_POST['jns_kel'],
                $_POST['tgl_lahir'],
                $_POST['status'],
                $_POST['mulai_kerja']
            );
        }
        header("location:../Views/index.php?a=".base64_encode('view_pegawai')."");
    }
    // Decision variabel put
    elseif($function == "put_pegawai"){

        // Validasi Token CSRF
        if(validation()==true)
        {
            $db->PUTData(
                $_POST['nip'],
                $_POST['nama'],
                $_POST['jns_kel'],
                $_POST['tgl_lahir'],
                $_POST['status'],
                $_POST['mulai_kerja']
            );   
        }
        header("location:../Views/index.php?a=".base64_encode('view_pegawai')."");
    }
    // Decision variabel delete
    elseif($function == "delete_pegawai"){
        $db->DELETEData(base64_decode($_GET['nip']));
        header("location:../Views/index.php?a=".base64_encode('view_pegawai')."");
    }


}else if($_GET['type'] == "mahasiswa"){


    include '../Controllers/Controller_mahasiswa.php';
    $db = new Controller_mahasiswa();

    // Membuat variabel dari Get URL
    $function = $_GET['function'];

    // Decision variabel create
    if($function == "create_mahasiswa"){

        // Validasi Token CSRF
        if(validation()==true)
        {
            $db->POSTData(
                $_POST['npm'],
                $_POST['nama'],
                $_POST['id_kelas'],
                $_POST['no_telp'],
                $_POST['alamat']
            );
        }
        header("location:../Views/index.php?a=".base64_encode('view_mahasiswa')."");
    }
    // Decision variabel put
    elseif($function == "put_mahasiswa"){

        // Validasi Token CSRF
        if(validation()==true)
        {
            $db->PUTData(
                $_POST['npm'],
                $_POST['nama'],
                $_POST['id_kelas'],
                $_POST['no_telp'],
                $_POST['alamat']
            );   
        }
        header("location:../Views/index.php?a=".base64_encode('view_mahasiswa')."");
    }
    // Decision variabel delete
    elseif($function == "delete_mahasiswa"){
        $db->DELETEData(base64_decode($_GET['npm']));
        header("location:../Views/index.php?a=".base64_encode('view_mahasiswa')."");
    }

}else if($_GET['type'] == "pembayaran"){


    include '../Controllers/Controller_pembayaran.php';
    $db = new Controller_pembayaran();

    // Membuat variabel dari Get URL
    $function = $_GET['function'];

    // Decision variabel create
    if($function == "create_pembayaran"){

        // Validasi Token CSRF
        if(validation()==true)
        {
            $db->POSTData(
                $_POST['npm'],
                $_POST['jumlah_bayar'],
                $_POST['id_petugas'],
                $_POST['tgl_bayar'],
                $_POST['bulan_dibayar'],
                $_POST['tahun_dibayar']
            );
        }
        header("location:../Views/index.php?a=".base64_encode('view_pembayaran')."");
    }

}




?>