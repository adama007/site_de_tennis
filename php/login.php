<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tennis";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email=$_POST['email'];
$pass=$_POST['pass'];

$select = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE email = '$email'");

if(mysqli_num_rows($select)>0) {
    $select1 = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE email = '$email' and pass1='$pass'");
    if(mysqli_num_rows($select1)>0){
        session_start();
        $_SESSION['email']=$email;
        header("location:../tenniss.php");
        
    }
    else{
        echo"le mot de passe est incorrect";
    }
}
else{
     echo "l email est incorrect";
    }


$conn->close();

?>