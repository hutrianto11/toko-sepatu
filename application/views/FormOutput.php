<!DOCTYPE html>
<html>

<head>
    <title>Toko Sepatu</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Toko Sepatu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>:</td>
                <td>
                    <?= $nohp; ?>
                </td>
            </tr>
            <tr>
                <td>Merk Sepatu</td>
                <td>:</td>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>
            <tr>
                <td>Harga Sepatu</td>
                <td>:</td>
                <td>
                    <?= $harga_sepatu; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('mahasiswa'); ?>">Kemabali Ke Form Input</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>