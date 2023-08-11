<?php
    include "conn.php";

    $nisn = $_GET['nisn'];
    $qry = "SELECT * FROM siswa WHERE nisn = '$nisn'";
    $exec = mysqli_query($conn, $qry);
    $rslt = mysqli_fetch_array($exec);
?>

<h2>Edit Data Siswa</h2>
<form action="#" method="post">
    NISN : <input type="text" name="nisn" value="<?= $rslt['nisn']; ?>"> <br>
    NAMA : <input type="text" name="nama" value="<?= $rslt['nama']; ?>"> <br>
    JENIS KELAMIN : <input type="text" name="gender" value="<?= $rslt['jenis_kelamin']; ?>"> <br>
    TGL LAHIR : <input type="text" name="dob" value="<?= $rslt['tgl_lahir']; ?>"> <br>
    ALAMAT : <input type="text" name="alamat" value="<?= $rslt['alamat']; ?>"> <br>
    <input type="submit" name="btnEdit" value="edit data">
</form>
<a href="siswa.php">Back</a>

<?php
    if(isset($_POST['btnEdit'])) {
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $alamat = $_POST['alamat'];

        $qry = "UPDATE siswa SET nisn = '$nisn', nama = '$nama', jenis_kelamin = '$gender', tgl_lahir = '$dob', alamat = '$alamat' where nisn = '$nisn'";
        mysqli_query($conn, $qry);

        echo "Data berhasil diubah!";
    }
?>
