<?php
    include "conn.php";
?>

<h2>Penerimaan Siswa Baru SMU X TA 23/24</h2>
<form action="#" method="post">
    NISN : <input type="text" name="nisn"> <br>
    NAMA : <input type="text" name="nama"> <br>
    JENIS KELAMIN : <input type="text" name="gender"> <br>
    TGL LAHIR : <input type="text" name="dob"> <br>
    ALAMAT : <input type="text" name="alamat"> <br>
    <input type="submit" name="btnSubmit" value="save">
</form>
<a href="index.php">Back</a>

<?php
    if(isset($_POST['btnSubmit'])) {
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $alamat = $_POST['alamat'];

        $qry = "INSERT INTO siswa VALUES ('$nisn','$nama','$gender','$dob','$alamat')";
        mysqli_query($conn, $qry);

        echo "Data berhasil disimpan!";
    }
?>
