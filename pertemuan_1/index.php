<?php
include 'conn.php';
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Talent</title>

</head>

<body>
    <h1>List Mahasiswa</h1>
    <h3><a href="form-input.php">tambah data</a></h3>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>
                NO
            </th>
            <th>
                NIM
            </th>
            <th>
                NAMA
            </th>
            <th>
                GENDER
            </th>
            <th>
                JURUSAN
            </th>
            <th>
                ACTION
            </th>
        </tr>
        <?php
        $no = 1;
        foreach ($mahasiswa as $row) {
            $jenisKelamin = $row['jenis_kelamin'] === 'P' ? 'Perempuan' : 'Laki-Laki';
            echo "<tr>
            <td>$no</td>
            <td>" . $row['nim'] . "</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $jenisKelamin . "</td>
            <td>" . $row['jurusan'] . "</td>
            <td>
            <a href='form-edit.php?id_mhs=$row[id_mhs]'>Edit</a>
            <a href='delete.php?id_mhs=$row[id_mhs]'>Delete</a>
            </tr>";
            $no++;
        }

        ?>
    </table>
</body>

</html>