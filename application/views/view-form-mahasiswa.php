<html>

<head>
    <title>Form Input Mahasiswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('mahasiswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mahasiswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama MHS</th>
                    <td>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="Masukan Nama..">
                    </td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="NIM" id="NIM" placeholder="Masukan Nim..">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tanggal" id="tanggal">
                    </td>
                </tr>
                <tr>
                    <th>Tempat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat" id="tempat">
                    </td>
                </tr>
                <tr>
                    <th>AGAMA</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih AGAMA</option>
                            <option value="ISLAM">ISLAM</option>
                            <option value="HINDU">HINDU</option>
                            <option value="BUDDHA">BUDDHA</option>
                            <option value="ISLAM">KRISTEN</option>
                            <option value="HINDU">KATOLIK</option>
                            <option value="BUDDHA">KHONGHUCU</option>
                            <option value="BUDDHA">PROTESTAN</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td>
                        <input type="radio" name="jenis" id="jenis" value="Laki-Laki">Laki-Laki
                        <input type="radio" name="jenis" id="jenis" value="Prempuan">prempuan
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>