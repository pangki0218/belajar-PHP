<?php 
// 1. buat koneksi dengan mySql

$con = mysqli_connect("localhost", "root","seal_fakultas");

// 2. cek koneksi dengan mysql
if(mysqli_connect_erno()){
echo "koneksi gagal". mysqli_connect_eror();
} echo{
    echo "koneksi berhasil";
}
// 3. membaca data dari table mysql
$query = "select * from mahasiswa";

// 4. tampilkan data, dengan menjalankan sql query
$result = mysqli-query($con, $query);
if ($result) {
    // tampilkan data satu per satu
   while ($row = mysqli_fetch_assoc($result)){
    echo "<br>".$row["nama"];
   }
   mysqli_free_result($result);
}

// 5. tutup koneksi mysql
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data mahasiswa</title>
</head>
<body>
    <h1>data mahasiswa</h1>
    <?php var_dump($mahasiwa); ?>
    <table border ="1" style="width:100%;">
        <tr>
            <th>nim</th>
            <th>nama</th>
        </tr>
        <?php foreach($mahasiswa as $value): ?>
        <tr>
            <th>2022010001</th>
            <th>bambang</th>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>