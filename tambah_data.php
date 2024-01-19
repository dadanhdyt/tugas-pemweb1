<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    input {
        width: 100%;
        box-sizing: border-box;
        padding: 10px 0px;
    }

    form {
        max-width: 400px;
        margin: auto;

    }

    form div {
        margin: 10px 0px;
    }

    a {
        text-decoration: none;
    }
    </style>
</head>

<body>
    <form action="actions/insert_data.php" method="POST">
        <div>
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa">
        </div>
        <div>
            <label for="nama">Nim Mahasiswa</label>
            <input type="text" name="nim_mahasiswa">
        </div>
        <div>
            <label for="telp_mahasiswa">Telepon Mahasiswa</label>
            <input type="text" name="telp_mahasiswa">
        </div>
        <div>
            <label for="alamat_mahasiswa">Alamat Mahasiswa</label>
            <input type="text" name="alamat_mahasiswa">
        </div>
        <div>
            <button name="tambah" type="submit">Tambah</button>
        </div>
    </form>
</body>

</html>
