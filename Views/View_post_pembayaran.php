<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
?>
<form action="../Config/Routes.php?type=pembayaran&function=create_pembayaran" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table>
            <tr>
                <td><a href="../index.php">Main Menu</a></td>
                <td><a href="index.php?a=<?php echo base64_encode('view_pembayaran') ?>">Lihat Pembayaran</a></td>
            </tr>
        </table>
        <br>
<table border="1">
    <tr>
        <td>NPM</td>
        <td><input type="number" name="npm" required></td>
    </tr>
    <tr>
        <td>Jumlah Bayar</td>
        <td>
            <input type="number" name="jumlah_bayar" required>
            <input type="hidden" name="tgl_bayar" value="<?php echo date('d-m-Y') ?>">
        </td>
    </tr>
    <tr>
        <td>ID Petugas</td>
        <td>
            <select name="id_petugas" required>
                <?php

                    include '../Controllers/Controller_pembayaran.php';
                    $pembayaran = new Controller_pembayaran();
                    $GetPetugas = $pembayaran->GetData_Petugas();

                    if(isset($GetPetugas))
                    {
                        $no = 1;
                        foreach($GetPetugas as $Get){

                ?>
                
                <option value="<?php echo $Get['nip']; ?>"><?php echo $Get['nama']; ?></option>

            <?php } ?>
            <?php } ?>
            
            </select>
        </td>
    </tr>
    <tr>
        <td>Bulan diBayar</td>
        <td>
            <select name="bulan_dibayar" required>
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Bulan diBayar</td>
        <td>
            <select name="tahun_dibayar" required>
                <?php
                    for($a=21;$a<50;$a++){
                ?>
                <option value="20<?php echo $a ?>">20<?php echo $a ?></option>
                <?php
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table
</form>
