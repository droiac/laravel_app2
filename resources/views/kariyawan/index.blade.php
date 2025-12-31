<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Toko Sederhana</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            height: 50px;
            background-color: #f2f2f2;
        }

        td, th {
            padding: 8px;
        }

        .container {
            width: 40%;
            margin: auto;
            text-align: center;
        }

        .btn-tambah {
            background-color: #228B22;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            display: inline-block;
        }

        .btn-edit {
            background-color: #FF8C00;
            color: white;
            padding: 6px 14px;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-hapus {
            background-color: #B22222;
            color: white;
            padding: 6px 14px;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Data Karyawan Toko Sederhana</h2>

        <p>
            Jl Natuna, Kawasan Subi, Indonesia <br>
            No AAA 8 | HP: 2876 78567 8756
        </p>

        <hr>

        <a href="/kariyawan/tambah" class="btn-tambah">+ Tambah Data</a>
    </div>

    <br>

    <table border="1" align="center" width="80%">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>

        @foreach($kariyawan as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->jabatan }}</td>
            <td>{{ $p->umur }}</td>
            <td>{{ $p->alamat }}</td>
            <td align="center">
                <a href="/kariyawan/edit/{{ $p->kariyawan_id }}" class="btn-edit">Edit</a>
                |
                <a href="/karyawan/hapus/{{ $p->kariyawan_id }}" class="btn-hapus">Hapus</a>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>
