<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data Mahasiswa</title>
    <style>
        body {
            background: #f2fff2;
        }

        table {
            background: white;
            border-collapse: collapse;
            border: 2px solid;
        }

        table tr {
            text-align: center;
            border: 2px solid red;
        }

        table tr a {
            display: inline-block;
            padding: 2px 10px;
            text-decoration: none;
            border-radius: 2px;
            border: 1px solid;
        }

        table th {
            font-weight: bold;
            background: red;
            color: white;
            padding: 10px;
            border: 1px solid grey;
        }

        .btn {
            color: white;
            box-shadow: 0px 0px 8px #dedede;
            border-radius: 20px;
            text-align: center;
            background-color: red;
            border: 1px solid;
            padding: 10px;
            width: 100px;
            margin-bottom: 10px;
            display: block;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php require __DIR__."/functions/functions.php"; ?>
    <a class="btn" href="tambah_data.php">TambahData</a>
    <table border="1" style="width: 100%;">
        <tr>
            <th>ID</th>
            <th>NAMA MAHASISWA</th>
            <th>NIM</th>
            <th>NO.TELP</th>
            <th>ALAMAT</th>
            <th>Aksi</th>
        </tr>

        <?php if( count(getDataMahasiswa()) > 0 ){ ?>
        <?php $nomor =1; foreach(getDataMahasiswa() as $row): ?>
        <tr>
            <td><?=$nomor++?></td>
            <td><?= $row['nama_mahasiswa'] ?></td>
            <td><?= $row['nim_mahasiswa'] ?></td>
            <td><?= $row['telp_mahasiswa'] ?></td>
            <td><?= $row['alamat_mahasiswa'] ?></td>
            <td>
                <a href="actions/hapus_data.php?id=<?= $row['id'] ?>">Hapus</a>
                <a href="edit_data.php?id=<?= $row['id'] ?>">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php }else{ ?>
        <tr>
            <td colspan="6">Tidak Ada Data</td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>
