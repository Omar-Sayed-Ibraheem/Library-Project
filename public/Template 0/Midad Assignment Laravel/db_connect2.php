<?php

$servername = "185.224.138.166";
$username = "u433946126_midadassignusr";
$password = "jXQ:/Wr??]$2";
$dbname = "u433946126_midadassignmen"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$conn = new mysqli($servername, $username, $password, $dbname);


//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $conn = new mysqli($servername, $username, $password, $dbname);
//
//    // التحقق من الاتصال
//    if ($conn->connect_error) {
//        die("Connection failed: " . $conn->connect_error);
//    }
//}
?>