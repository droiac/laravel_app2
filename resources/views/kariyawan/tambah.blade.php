<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sederhana</title>
</head>
<body align="center">
    <h2>Input Data Kariyawan</h2>
    <br>
    <br>
    <form action="/kariyawan/store" method="POST">
        @csrf
        <table align="center">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required="required"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan" required="required"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type="number" name="umur" required="required"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" required="required"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="/kariyawan">Kembali</a>
                </td>
                <td>
                    <button type="submit">Simpan Data</button>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>