<html>
    <head>
        <title>Form input mata kuliah</title>
</head>

<body>
    <center>
        <form action="<?php echo site_url('matakuliah/cetak'); ?>" method ="post">
        <table>
            <tr>
                <th colspan="3">
                    Form input data mata kuliah
</th>
</tr>
<tr>
    <td colspan="3"><hr>
</td>
</tr>
<tr>
    <th>Kode Mata Kuliah</th>
    <td>:</td>
    <td>
        <input type="text" name="nama" id="nama">
    </td>
</tr>
<tr>
    <th>Nama Mata Kuliah</th>
    <td>:</td>
    <td>
        <input type="text" name="nama" id="nama">
    </td>
</tr>
<tr>

    <th>SKS</th>
    <td>:</td>
    <td>
        <select name="sks" id="sks">
            <option value="">Pilih SKS</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </td>
</tr>
<tr>
    <td colspan="3" align="center">
        <input type="submit" value="Submit">
    </td>
</tr>
</table>
</form>
</center>
</body>
</html>
