<?php

class Controller_pembayaran{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $MPembayaran;

     var $npm;
     var $jumlah_bayar;
     var $id_petugas;
     var $bulan_dibayar;
     var $tahun_dibayar;

     

     // Method main variabel
        function __construct()
        {
            include '../Models/Model_pembayaran.php';
            $this->MPembayaran = new Model_pembayaran();
        }




    // Method untuk memasukan data ke dalam table
    function POSTData ($npm,$jumlah_bayar,$id_petugas,$tgl_bayar,$bulan_dibayar,$tahun_dibayar){

        // perintah POST data
        $this->MPembayaran->POST($npm,$jumlah_bayar,$id_petugas,$tgl_bayar,$bulan_dibayar,$tahun_dibayar);

    }



    
    // Method untuk mengambil semua data dari table
    function GetData_All(){

        // perintah GET data
        return $this->MPembayaran->GET();
        

    }






    // Method untuk mengambil semua data dari table
    function GetData_Petugas(){

        // perintah GET data
        return $this->MPembayaran->GET_Petugas();
        

    }
 


}


?>