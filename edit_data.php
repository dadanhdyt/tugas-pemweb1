<html>

<head>
    <title>Edit Data</title>
    <style>
        form {
            width: 420px;
            margin: auto;

        }

        form input {
            padding: 10px;
            box-sizing: border-box;
        }

        form input,
        textarea {
            width: 100%;
        }
    </style>
</head>

<body>
    <?php require __DIR__."/functions/functions.php" ?>
    <?php
$id = $_GET['id'];
$data = getDataById($id)->fetch_object();
?>
    <form action="actions/update_data.php" method="POST">
        <input type="text" hidden name="id" value="<?= $data->id ?>">
        <div>
            <label for="nama">Nama Mahasiswa</label>
            <input value="<?= $data->nama_mahasiswa ?>" type="text" name="nama_mahasiswa">
        </div>
        <div>
            <label for="nama">Nim Mahasiswa</label>
            <input type="text" name="nim_mahasiswa" value="<?= $data->nim_mahasiswa ?>">
        </div>
        <div>
            <label for="telp_mahasiswa">Telepon Mahasiswa</label>
            <input type="text" name="telp_mahasiswa" value="<?= $data->telp_mahasiswa ?>">
        </div>
        <div>
            <label for="alamat_mahasiswa">Alamat Mahasiswa</label>
            <textarea name="alamat_mahasiswa" id="" cols="30" rows="10">
                <?= $data->alamat_mahasiswa ?>
            </textarea>
        </div>
        <div>
            <button name="simpan" type="submit">Simpan</button>
        </div>
    </form>
</body>

</html>
