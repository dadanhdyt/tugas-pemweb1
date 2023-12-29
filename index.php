<?php include __DIR__."/functions/functions.php";

$buatDatabase = createDatabase();
echo "[1]".($buatDatabase ? 'Database Di buat' : "Database gagal di buat");
echo "<br>";
// $buatTableMahasiswa = createTableMahasiswa();
// echo $buatTableMahasiswa ? 'Tabel Mahasiswa Berhasil Di buat' : "Tabel Mahasiswa Gagal Di Buat";
$seed_data_mahasiswa  = seed_data_mahasiswa();
echo "[3]".($seed_data_mahasiswa ? 'Data berhasil di tambahkan' : "Data Gagal Di tambahkan");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="show_data.php">Lihat Data</a>
</body>

</html>