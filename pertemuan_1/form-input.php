<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Inputan Data</title>
</head>

<body>
    <form action="simpan.php" method="post">
    <table>
        <tr>
            <td>
                NIM
            </td>
            <td>
                <input type="text" onkeyup="isi_otomatis()" name="nim">
            </td>
        </tr>
        <tr>
            <td>
                NAMA
            </td>
            <td>
                <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td>
                JENIS KELAMIN
            </td>
            <td>
                <input type="radio" name="jenis_kelamin" value="L">Laki-Laki
                <input type="radio" name="jenis_kelamin" value="P">Perempuan
            </td>
        </tr>
        <tr>
            <td>
                JURUSAN
            </td>
            <td>
                <select name="jurusan" id="">
                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                    <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                    <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                ALAMAT
            </td>
            <td>
                <input type="text" name="alamat">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" value="simpan">SIMPAN</button>
            </td>
        </tr>
    </table>
    </form>
    <a href="index.php">kembali</a>
</body>

</html>