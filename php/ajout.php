<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tennis";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$password=$_POST['pass1'];


$select = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE email = '$email'");
if(mysqli_num_rows($select)>0) {
    echo "<script>alert(\'Cet utilisateur est déja inscrit \'
    )</script>";
}else{
    $sql = 'INSERT INTO utilisateurs VALUES ("","'.$nom.'", "'.$prenom.'","'.$email.'","'.$password.'")';
    if($conn->query($sql)===TRUE){
        echo"nouvel enregistrement crée avec succés";
        header('location:../tenniss.php');
        session_start();
        $_SESSION['email']=$email;
    }else{
        echo"erreur ";
    }}

$conn->close();

?>