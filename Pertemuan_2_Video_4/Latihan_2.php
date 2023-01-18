<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($i=1; $i<=3; $i++) {
            echo "<tr>";
            for ($a=1;$a<=3;$a++) {
                echo "<td>$i,$a</td>";
                
            }
            echo "</tr>";
        }
        ?>

       <!-- // <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Pendidikan</th>
        </tr>
        <tr>
            <td>01</td>
            <td>Robi Al Akbar, S.Kom</td>
            <td>19940324 201502 1 001</td>
            <td>Pranata Komputer Ahli Pertama</td>
            <td>29 Tahun</td>
            <td>S1 Komputer</td>
        </tr>
        <tr>
            <td>02</td>
            <td>Alamsyah, S.Kom</td>
            <td>19940324 201502 1 005</td>
            <td>Pranata Komputer Ahli Muda</td>
            <td>29 Tahun</td>
            <td>S1 Komputer</td>
        </tr> -->
        
    </table>
</body>
</html>