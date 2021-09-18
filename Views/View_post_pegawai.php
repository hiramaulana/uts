<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
?>
<form action="../Config/Routes.php?type=pegawai&function=create_pegawai" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table>
            <tr>
                <td><a href="../index.php">Main Menu</a></td>
                <td><a href="index.php?a=<?php echo base64_encode('view_pegawai') ?>">Lihat Pegawai</a></td>
            </tr>
        </table>
        <br>
<table border="1">
    <tr>
        <td>NIP</td>
        <td><input type="number" name="nip" required></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" required></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>
            <select name="jns_kel" required>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type="date" name="tgl_lahir" required>
    </td>
    <tr>
        <td>Status</td>
        <td>
            <select name="status" required>
                <option value="B">Belum Menikah</option>
                <option value="M">Menikah</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Mulai Kerja</td>
        <td><input type="date" name="mulai_kerja" required>
    </td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table
</form>
