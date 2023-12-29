<?php
require dirname(__DIR__) . '/config.php';
function dbConfig($key): string
{
    return $GLOBALS['config_db'][$key] ?? null;
}
//fungsi untuk koneksi ke database
function connection()
{
    $host = dbConfig('host');
    $user = dbConfig('user');
    $pass = dbConfig('pass');
    $db = dbConfig('database');

    $conn = new mysqli(
        $host,
        $user,
        $pass,
    );
    if ($conn->query("SHOW DATABASES LIKE '{$db}'")->num_rows > 0) {
        $conn->select_db($db);
    }

    return $conn;

}
//fungsi untuk membuat database
function createDatabase()
{
    $conn = connection();
    $executeQuery = $conn->query("CREATE DATABASE IF NOT EXISTS " . dbConfig('database'));
    return $executeQuery;
}
//buat tabel
function createTableMahasiswa()
{
    $conn = connection();
    $query = "CREATE TABLE mahasiswa (
        id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
        nama_mahasiswa VARCHAR(225) NOT NULL,
        nim_mahasiswa VARCHAR(225) NOT NULL,
        telp_mahasiswa INT NOT NULL,
        alamat_mahasiswa LONGTEXT NOT NULL
    );";
    $executeQuery = $conn->query($query);
    return $executeQuery;
}

function seed_data_mahasiswa()
{
    $dataMahasiswa = [
        [
            'nama_mahasiswa' => "Dadan Hidayat",
            'telp_mahasiswa' => '8822738726512',
            'nim_mahasiswa' => '23883493',
            'alamat_mahasiswa' => "Sumedang"

        ],
        [
            'nama_mahasiswa' => "Raka Hidayat",
            'telp_mahasiswa' => '33234324',
            'nim_mahasiswa' => '23883493',
            'alamat_mahasiswa' => "BANDUNG"

        ],
    ];
    $valuesStatement = "";
    foreach ($dataMahasiswa as $key => $value) {
        $valuesStatement .= "('$value[nama_mahasiswa]','$value[nim_mahasiswa]','$value[telp_mahasiswa]','$value[alamat_mahasiswa]'),";
    }
    $valuesStatement = rtrim($valuesStatement, ',');
    $query = "INSERT INTO mahasiswa (nama_mahasiswa,nim_mahasiswa,telp_mahasiswa,alamat_mahasiswa) VALUES {$valuesStatement}";
    $executeQuery = connection()->query($query);
    return $executeQuery;

}
function getDataMahasiswa(): array
{
    $conn = connection();
    $query = $conn->query("SELECT * FROM mahasiswa");
    $data = [];
    while ($row = $query->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
}
?>