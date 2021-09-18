<?php 

include '../Controllers/Controller_pegawai.php';
 // Membuat Object dari Class pegawai
$pegawai = new Controller_pegawai();
$GetPegawai = $pegawai->GetData_All();

// untuk mengecek di object $pegawai ada berapa banyak Property
//echo var_dump($pegawai);
?>

        <table>
            <tr>
                <td><a href="../index.php">Main Menu</a></td>
                <td><a href="index.php?a=<?php echo base64_encode('post_pegawai') ?>">Tambah Pegawai</a></td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Status</th>
                <th>Mulai Kerja</th>
                <th>Tools</th>
            </tr>
            <?php
                // Decision validation variabel
                if(isset($GetPegawai))
                {
                        $no = 1;
                        foreach($GetPegawai as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['nip']; ?></td>
                            <td><?php echo $Get['nama']; ?></td>
                            <td>
                                <?php
                                 if($Get['jns_kel']=="L")
                                    {
                                        echo "Laki-Laki";
                                    }
                                    else{
                                        echo "Perempuan";
                                    }
                                ?>
                            </td>
                            <td><?php echo $Get['tgl_lahir']; ?></td>
                            <td>
                                <?php
                                 if($Get['status']=="B")
                                    {
                                        echo "Belum Menikah";
                                    }
                                    else{
                                        echo "Menikah";
                                    }
                                ?>
                            </td>
                            <td><?php echo $Get['mulai_kerja']; ?></td>
                            <td>
                                <a href="../Views/index.php?a=<?php echo base64_encode('edit_pegawai') ?>&nip=<?php echo base64_encode($Get['nip']) ?>">view</a>
                                <a href="../Config/Routes.php?type=pegawai&function=delete_pegawai&nip=<?php echo base64_encode($Get['nip']) ?>" onclick="return confirm('Yakin Hapus?')">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>