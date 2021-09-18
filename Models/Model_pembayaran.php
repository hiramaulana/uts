<?php

class Model_pembayaran{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $npm;
     var $jumlah_bayar;
     var $id_petugas;
     var $bulan_dibayar;
     var $tahun_dibayar;
     var $tgl_bayar;

     

     // Method main variabel
        function __construct()
        {
        // Membuat Object dari Class database
        include '../Config/Database.php';
        $this->db = new Database();
        $this->con=$this->db->Connect();
        }




    // Method untuk memasukan data ke dalam table
    function POST ($npm,$jumlah_bayar,$id_petugas,$tgl_bayar,$bulan_dibayar,$tahun_dibayar){

        mysqli_query($this->con,"insert into pembayaran values(
            '',
            '".$npm."',
            '".$jumlah_bayar."',
            '".$id_petugas."',
            '".$tgl_bayar."',
            '".$bulan_dibayar."',
            '".$tahun_dibayar."'
            )");

    }



    
    // Method untuk mengambil semua data dari table
    function GET(){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pembayaran");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk mengambil semua data dari table
    function GET_Petugas(){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pbo_pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }
 




}


?>