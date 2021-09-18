<?php 

include '../Controllers/Controller_pembayaran.php';
$pembayaran = new Controller_pembayaran();
$GetPembayaran = $pembayaran->GetData_All();

?>

        <table>
            <tr>
                <td><a href="../index.php">Main Menu</a></td>
                <td><a href="index.php?a=<?php echo base64_encode('post_pembayaran') ?>">Tambah Pembayaran</a></td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Jumlah Bayar</th>
                <th>ID Petugas</th>
                <th>Tanggal Bayar</th>
                <th>Bulan diBayar</th>
                <th>Tahun diBayar</th>
            </tr>
            <?php

                if(isset($GetPembayaran))
                {
                        $no = 1;
                        foreach($GetPembayaran as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['npm']; ?></td>
                            <td><?php echo $Get['jumlah_bayar']; ?></td>
                            <td><?php echo $Get['id_petugas']; ?></td>
                            <td><?php echo $Get['tgl_bayar']; ?></td>
                            <td><?php echo $Get['bulan_dibayar']; ?></td>
                            <td><?php echo $Get['tahun_dibayar']; ?></td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>