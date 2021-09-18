<?php 

include '../Controllers/Controller_mahasiswa.php';
$mahasiswa = new Controller_mahasiswa();
$GetMahasiswa = $mahasiswa->GetData_All();

?>

        <table>
            <tr>
                <td><a href="../index.php">Main Menu</a></td>
                <td><a href="index.php?a=<?php echo base64_encode('post_mahasiswa') ?>">Tambah Mahasiswa</a></td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>No Telp</th>
                <th>Alamat</th>
                <th>Tools</th>
            </tr>
            <?php

                if(isset($GetMahasiswa))
                {
                        $no = 1;
                        foreach($GetMahasiswa as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['npm']; ?></td>
                            <td><?php echo $Get['nama']; ?></td>
                            <td><?php echo $Get['id_kelas']; ?></td>
                            <td><?php echo $Get['no_telp']; ?></td>
                            <td><?php echo $Get['alamat']; ?></td>
                            <td>
                                <a href="../Views/index.php?a=<?php echo base64_encode('edit_mahasiswa') ?>&npm=<?php echo base64_encode($Get['npm']) ?>">view</a>
                                <a href="../Config/Routes.php?type=mahasiswa&function=delete_mahasiswa&npm=<?php echo base64_encode($Get['npm']) ?>" onclick="return confirm('Yakin Hapus?')">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>