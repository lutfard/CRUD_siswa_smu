<?php
    include "conn.php";

    $nisn = $_GET['nisn'];
    $qry = "DELETE FROM siswa WHERE nisn = '$nisn'";
    mysqli_query($conn, $qry);

    echo "Data berhasil dihapus! <br>";
    echo "<a href='siswa.php'>Back</a>";
?>
