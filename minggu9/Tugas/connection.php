<?php

$servername  = "localhost";
$username    = "root";
$password    = "";
$db          = "Tugas";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Database belum terhubung : " . $conn->connect_error);
}

?>