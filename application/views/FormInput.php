<!DOCTYPE html>
<html>

<head>
    <title>Toko Sepatu</title>
</head>

<body>
    <center>
        <form action=" <?= base_url('mahasiswa/proses') ?>" method="post">
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
                        <input type="text" name="nama" id="nama" placeholder="masukan nama">
                    </td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="Masukan Nomor HP">
                    </td>
                </tr>
                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="merk" id="merk">
                            <option value="">Pilih Merk</option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Kicker">Kicker</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Proses">
                        <input type="reset" value="Cancel">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>