<?php

class Model_mahasiswa{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $npm;
     var $nama;
     var $id_kelas;
     var $no_telp;
     var $alamat;

     

     // Method main variabel
        function __construct()
        {
        // Membuat Object dari Class database
        include '../Config/Database.php';
        $this->db = new Database();
        $this->con=$this->db->Connect();
        }




    // Method untuk memasukan data ke dalam table
    function POST ($npm,$nama,$id_kelas,$no_telp,$alamat){

        mysqli_query($this->con,"insert into mahasiswa values(
            '".$npm."',
            '".$nama."',
            '".$id_kelas."',
            '".$no_telp."',
            '".$alamat."'
            )");

    }



    
    // Method untuk mengambil semua data dari table
    function GET(){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from mahasiswa");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk mengambil data seleksi dari table
    function GET_Where ($npm){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from mahasiswa where npm='$npm'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }




    // Method untuk memasukan data ke dalam table
    function PUT ($npm,$nama,$id_kelas,$no_telp,$alamat){

        // perintah PUT data
        mysqli_query($this->con,"update mahasiswa set
            nama='".$nama."',
            id_kelas='".$id_kelas."',
            no_telp='".$no_telp."',
            alamat='".$alamat."'
            where npm='".$npm."'
            ");

    }




    // Method untuk menghapus data dari table
    function DELETE ($npm){

        // perintah DELETE data
        mysqli_query($this->con,"delete from mahasiswa where npm='$npm'");

    }


    // Method untuk mengambil semua data dari table
    function GET_Kelas(){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from kelas");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }
 




}


?>