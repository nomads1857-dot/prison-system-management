<?php  
$dbcon = mysqli_connect("localhost", "u921148302_orozo", "P?m2s*c#kV", "u921148302_ngpolicerecord");
if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($dbcon, 'utf8'); 

$servername = "localhost";
$username = "u921148302_orozo";
$password = "P?m2s*c#kV";
$dbname = "u921148302_ngpolicerecord";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>