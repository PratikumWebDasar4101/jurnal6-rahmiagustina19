<?php

require_once("koneksi.php");


$nim = $_POST["nim"];
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$jenis_kelamin = $_POST["jk"];
$hobi = $_POST["hobi"];
$fakultas = $_POST["fakultas"];
$alamat = $_POST["alamat"];

$sql = "INSERT INTO formulir  VALUES ('$nim','$nama','$kelas','$jenis_kelamin','$hobi','$fakultas','$alamat')";



if (mysqli_query($conn, $sql)) {

    echo "created successfully<br>";

}else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}



mysqli_close($conn);

echo "Silahkan klik <a href='list.php'>link ini</a> untuk melanjutkan";