<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "ogbuke";

// Create connection
//mysql://b88876b959129e:ecd442ef@us-cdbr-iron-east-02.cleardb.net/heroku_d63663c785fdadb?reconnect=true

//connection for heroku
$servername_live = "us-cdbr-iron-east-02.cleardb.net";
$user_live = "b88876b959129e";
$password_live = "ecd442ef";
$dbname_live = "heroku_d63663c785fdadb";
// Create connection

//$conn = mysqli_connect($servername, $user, $password,$dbname);
$conn = mysqli_connect($servername_live, $user_live, $password_live,$dbname_live);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>