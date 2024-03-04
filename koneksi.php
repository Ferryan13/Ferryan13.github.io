<?php
// Create connection

$koneksi = mysqli_connect("localhost", "root", "", "contactus_db");

$nama_user = $_POST['nama_user'];
$email_user = $_POST['email_user'];
$question_user = $_POST['question_user'];


$query = "INSERT INTO contact VALUES('$nama_user','$email_user','$question_user')";

mysqli_query($koneksi, $query);

// Check connection

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($koneksi);
?>