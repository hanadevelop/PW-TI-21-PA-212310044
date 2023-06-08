<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mahasiswa = [['nama' => 'Hana Yulia Rahmah', 'npm' => '212310044', 'prodi' => 'Teknologi Informasi'], ['nama' => 'nakamura keiichi', 'npm' => '212310042', 'prodi' => 'Manajemen'], ['nama' => 'Haruki', 'npm' => '212310012', 'prodi' => 'sistem informasi']];

            foreach ($mahasiswa as $mhs) {
                echo '<tr>';
                echo '<td>' . $mhs['nama'] . '</td>';
                echo '<td>' . $mhs['npm'] . '</td>';
                echo '<td>' . $mhs['prodi'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
