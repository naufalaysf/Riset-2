<?php
$servername = "10.113.95.223";
$database = "db_upload_blob";
$username = "naufalaysf";
$password = "janganragu";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
echo "Connected successfully";
mysqli_close($conn);
?>
