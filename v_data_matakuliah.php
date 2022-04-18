<html>
    <head>
        <title>Tampil Data Matakuliah</title>
    </head>
<body>
    <center>
    <table>
        <tr>
            <th colspan="3">
                    Tampil Data Mata Kuliah
                </th>
            </tr>
            <tr>
                <td colspan="3"><hr>/<th>
            </tr>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td>:</td>
                <td><?php echo $kode ?></td>
</tr>
            <tr>
                <td>Nama Mata Kuliah</td>
                <td>:</td>
                <td><?php echo $nama?></td>
</tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><?php echo $sks ?></td>
</tr>
            <tr>
            <td colspan="3">
                    <a href="<?php echo site_url('matakuliah') ?>">Kembali</a>
                </td>
            </tr>
        </table>
</center>
</body>
</html>
