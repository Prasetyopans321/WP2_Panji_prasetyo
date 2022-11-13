<html>

<head>
    <title>Tampil Data siswa</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Nama Siswa</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <?= $NIM; ?>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>
                    <?= $tanggal; ?>
                </td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>:</td>
                <td>
                    <?= $tempat; ?>
                </td>
            </tr>
            <tr>
                <td>AGAMA</td>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>:</td>
                <td>
                    <?= $jenis; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('siswa');
                                ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>