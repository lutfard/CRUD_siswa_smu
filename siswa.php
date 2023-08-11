<?php
    include "conn.php";

    $query = "select * from siswa";
    $exec = mysqli_query($conn, $query);
?>

<a href="input.php">Input Data Siswa</a>
<table border="1">
    <tr>
        <th>NISN</th>
        <th>NAMA</th>
        <th>JENIS KELAMIN</th>
        <th>TGL LAHIR</th>
        <th>ALAMAT</th>
    </tr>
    <?php while($result = mysqli_fetch_array($exec)) :?> 
    <tr>
        <td><?= $result['NISN']; ?></td>
        <td><?= $result['NAMA']; ?></td>
        <td><?= $result['JENIS_KELAMIN']; ?></td>
        <td><?= $result['TGL_LAHIR']; ?></td>
        <td><?= $result['ALAMAT']; ?></td>
        <td><a href="edit.php?nisn=".<?=$result['NISN']?>>EDIT</a></td>
        <td><a href="delete.php?nisn=".<?=$result['NISN']?>>DELETE</a></td>
    </tr>
    <?php endwhile; ?>
</table>

