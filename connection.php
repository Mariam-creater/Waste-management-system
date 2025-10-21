<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "boqran_company";

// Haddii aad isticmaaleyso port gaar ah sida 3307:
$port = 3306;

// Connect
$conn = new mysqli($host, $user, $password, $dbname, $port);

// Haddii ay jirto cilad
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
