<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tennis";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$req="SELECT * from experience";
$res = mysqli_query($conn,$req);
$results=mysqli_fetch_all($res,MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article</title>
    <link rel="stylesheet" href="article.css">
</head>
<body>
  
    <header>
      
        
       
        <h1 style ="color :aquamarine";>NOS ARTICLES</h1>
        <div >
            <ul>
                 <li id="aa"><strong><a style="color: black;" href ="tenniss.php">home page</a></li></strong>
                 </ul>
                 </div>
                 
    </div>
       
   </header>
   <div id="article">
   


   <?php foreach($results as $result){
       echo'<div id="sarticle">
       <p style="font-family: Impact, fantasy	; width:1000px;text-align: center;margin-left: 7%;color: blanchedalmond;margin-top:5%;font-size: 130%;margin-top:20px;padding-top:35px;">
        
       '.$result['message'].'
       </p>

   </div>';
   }
   ?>
                
                
           
      
       


</div>