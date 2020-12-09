<?php
// Menyisipkan file koneksi ke database
include_once("koneksi.php");

// Mengambil semua data dari database
$result = mysqli_query($con, "SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>

<body>
    <a href="tambah.php"><button type="submit">Tambah Data Baru</button></a>
    <a href="lap_mhs.php"><button type="submit">Cetak PDF</button></a>
    <br><br>
    <table width="80%" border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Update</th>
        </tr>
        <?php
        while($user_data = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$user_data['nim']."</td>";
            echo "<td>".$user_data['nama']."</td>";
            echo "<td>".$user_data['jkel']."</td>";
            echo "<td>".$user_data['alamat']."</td>";
            echo "<td>".$user_data['tgllhr']."</td>";
            echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a>|
            <a href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>