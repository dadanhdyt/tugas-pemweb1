<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>

<body>
    <?php require __DIR__."/functions/functions.php"; ?>
    <table border="1" style="width: 100%;">
        <tr>
            <th>ID</th>
            <th>NAMA MAHASISWA</th>
            <th>NIM</th>
            <th>NO.TELP</th>
            <th>ALAMAT</th>
        </tr>
        <?php foreach(getDataMahasiswa() as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama_mahasiswa'] ?></td>
            <td><?= $row['nim_mahasiswa'] ?></td>
            <td><?= $row['telp_mahasiswa'] ?></td>
            <td><?= $row['alamat_mahasiswa'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>