<?php

class Controller_mahasiswa{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $MMahasiswa;

     var $npm;
     var $nama;
     var $id_kelas;
     var $no_telp;
     var $alamat;

     

     // Method main variabel
        function __construct()
        {
            include '../Models/Model_mahasiswa.php';
            $this->MMahasiswa = new Model_mahasiswa();
        }




    // Method untuk memasukan data ke dalam table
    function POSTData ($npm,$nama,$id_kelas,$no_telp,$alamat){

        // perintah POST data
        $this->MMahasiswa->POST($npm,$nama,$id_kelas,$no_telp,$alamat);

    }



    
    // Method untuk mengambil semua data dari table
    function GetData_All(){

        // perintah GET data
        return $this->MMahasiswa->GET();
        

    }


    // Method untuk mengambil data seleksi dari table
    function GetData_Where ($npm){

        // perintah GET data
        return $this->MMahasiswa->GET_Where($npm);
    }




    // Method untuk memasukan data ke dalam table
    function PUTData ($npm,$nama,$id_kelas,$no_telp,$alamat){

        // perintah PUT data
        $this->MMahasiswa->PUT($npm,$nama,$id_kelas,$no_telp,$alamat);

    }




    // Method untuk menghapus data dari table
    function DELETEData ($npm){

        // perintah DELETE data
        $this->MMahasiswa->DELETE($npm);

    }



    // Method untuk mengambil semua data dari table
    function GetData_Kelas(){

        // perintah GET data
        return $this->MMahasiswa->GET_Kelas();
        

    }
 


}


?>