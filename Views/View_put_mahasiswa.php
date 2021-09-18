<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_Mahasiswa.php';
$mahasiswa = new Controller_Mahasiswa();
$GetMahasiswa = $mahasiswa->GetData_Where(base64_decode($_GET['npm']));
?>



<?php
    foreach($GetMahasiswa as $Get){
?>

<form action="../Config/Routes.php?type=mahasiswa&function=put_mahasiswa" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table>
    <tr>
        <td><a href="../index.php">Main Menu</a></td>
        <td><a href="index.php?a=<?php echo base64_encode('view_mahasiswa') ?>">Lihat Mahasiswa</a></td>
        <td><a href="index.php?a=<?php echo base64_encode('post_mahasiswa') ?>">Tambah Mahasiswa</a></td>
    </tr>
</table>
<br>
<table border="1">
        <input type="hidden" name="npm" value="<?php echo $Get['npm']; ?>">
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $Get['nama']; ?>"></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>
            <select name="id_kelas" required>
                <?php

                    $GetKelas = $mahasiswa->GetData_Kelas();

                    if(isset($GetKelas))
                    {
                        $no = 1;
                        foreach($GetKelas as $Get_Kelas){

                ?>
                
                <option value="<?php echo $Get_Kelas['id_kelas']; ?>"><?php echo $Get_Kelas['nama_kelas']; ?></option>

            <?php } ?>
            <?php } ?>
            
            </select>
        </td>
    </tr>
    <tr>
        <td>No Telp</td>
        <td><input type="number" name="no_telp" value="<?php echo $Get['no_telp']; ?>">
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $Get['alamat']; ?>">
    </td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table
</form>

<?php
    }
?>