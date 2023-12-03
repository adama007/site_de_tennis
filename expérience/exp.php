<?php
session_start();
if (!isset($_SESSION['email'])){
    header("location:../connexion/connexion.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecrire votre expérience</title>
    <link rel="stylesheet" href="../expérience/exp.css">

</head>
<body>
    

<div class="container">
	<div class="row">
			<h1>Votre Expérience</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">écrire une expérience ou éxprimer un sentiments</h4>
	</div>
	<form method="POST" action="../php/ajoutexp.php" >
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text"  name="nom" required="required" />
					<label>nom</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="email" name="email" required="required" />
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" name="tele" required="required" />
					<label>nombre de téléphone</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea name="espace" required="required"></textarea>

					<label>votre éspace </label>
				</div>
			</div>
			<div class="col-xs-12">
				<input type="submit" value="envoyer"></div>
			</div>
            <br>
	</div>
</form>
</div>
</body>
</html>