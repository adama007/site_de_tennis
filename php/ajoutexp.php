<?php
session_start();
if(!(isset($_SESSION['email']))){
    header("location:../login.php");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tennis";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$nom=$_POST['nom'];

$email=$_POST['email'];
$tele=$_POST['tele'];
$espace=$_POST['espace'];
$sql = 'INSERT INTO experience VALUES ("'.$nom.'", "'.$email.'","'.$tele.'","'.$espace.'")';

if($conn->query($sql)===TRUE){
    header("location:../tenniss.php");
}
else{
    echo"enregisrement non créé";
}

$conn->close();

?>