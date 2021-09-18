<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
?>
<form action="../Config/Routes.php?type=mahasiswa&function=create_mahasiswa" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table>
            <tr>
                <td><a href="../index.php">Main Menu</a></td>
                <td><a href="index.php?a=<?php echo base64_encode('view_mahasiswa') ?>">Lihat Mahasiswa</a></td>
            </tr>
        </table>
        <br>
<table border="1">
    <tr>
        <td>NPM</td>
        <td><input type="number" name="npm" required></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" required></td>
    </tr>
    <tr>
        <td>ID Kelas</td>
        <td>
            <select name="id_kelas" required>
                <?php

                    include '../Controllers/Controller_mahasiswa.php';
                    $mahasiswa = new Controller_mahasiswa();
                    $GetKelas = $mahasiswa->GetData_Kelas();

                    if(isset($GetKelas))
                    {
                        $no = 1;
                        foreach($GetKelas as $Get){

                ?>
                
                <option value="<?php echo $Get['id_kelas']; ?>"><?php echo $Get['nama_kelas']; ?></option>

            <?php } ?>
            <?php } ?>
            
            </select>
        </td>
    </tr>
    <tr>
        <td>No Telp</td>
        <td><input type="number" name="no_telp" required>
    </td>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" required>
    </td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table
</form>
