<table border="1px solid black">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Link</td>
    </tr>
    <tr>
        <td>1.</td>
        <td>Pegawai</td>
        <td><a href="Views/index.php?a=<?php echo base64_encode('view_pegawai') ?>">Lihat Pegawai</a></td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Mahasiswa</td>
        <td><a href="Views/index.php?a=<?php echo base64_encode('view_mahasiswa') ?>">Lihat Mahasiswa</a></td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Pembayaran</td>
        <td><a href="Views/index.php?a=<?php echo base64_encode('view_pembayaran') ?>">Lihat Pembayaran</a></td>
    </tr>
</table>