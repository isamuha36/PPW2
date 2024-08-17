<?php
include 'conn.php';
$id = $_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);
// membuat jurusan menjadi dinamis dalam bentuk array
$jurusan = array('TEKNIK INFORMATIKA', 'TEKNIK ELEKTRO', 'TEKNIK KIMIA');
// membuat function untuk set aktif radio button
function active_radio_buttton($value, $input)
{
    // apabila value dari radio sama dengan yang diinput;
    $result = $value == $input ? 'checked' : '';
    return $result;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Talent</title>
</head>

<body>
    <form action="update.php" method="post">
        <input type="hidden" value="<?php echo $row['id_mhs']; ?>" name="id_mhs">
        <table>
            <tr>
                <td>
                    NIM
                </td>
                <td>
                    <input type="text" value="<?php echo $row['nim']; ?>" name="nim">
                </td>
            </tr>
            <tr>
                <td>
                    NAMA
                </td>
                <td>
                    <input type="text" value="<?php echo $row['nama']; ?>" name="nama">
                </td>
            </tr>
            <tr>
                <td>
                    JENIS KELAMIN
                </td>
                <td>
                    <input type="radio" value="L" <?php echo active_radio_buttton("L", $row['jenis_kelamin']); ?> name="jenis_kelamin" required>Laki-Laki
                    <input type="radio" value="P" <?php echo active_radio_buttton("P", $row['jenis_kelamin']); ?> name="jenis_kelamin" required>Perempuan
                </td>
            </tr>
            <tr>
                <td>
                    JURUSAN <?= $row['jurusan']; ?>
                </td>
                <td>
                    <select name="jurusan">
                        <?php foreach ($jurusan as $j) {
                            echo "<option value='$j' ";
                            echo $row['jurusan'] == $j ? 'selected="selected"' : '';
                            echo ">$j</option>";
                        } ?></select>
                </td>
            </tr>
            <tr>
                <td>
                    ALAMAT
                </td>
                <td>
                    <input type="text" name="alamat" value="<?= $row['alamat']; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                </td>
                <a href="index.php">kembali</a>
            </tr>
        </table>
    </form>
</body>

</html>