<!DOCTYPE html>
<html lang="fr">
  <head>

    <!-- Required meta tags -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Custom CSS -->
      <link href="styles.css"  type="text/css" rel="stylesheet">

    <title>VATECH APP</title>

  </head>

<body>
<div class = "main"><div class = "wrapper">
<?php 
  include("inc/header.php");
?> 

<p id="bop">Se connecter</p>

<form action ="" method="POST">
	

		<div class = "form-group">
		<input type="text" name="username" class="form-control" placeholder="EMAIL" autocomplete="off" >
	</div>


		<div class = "form-group">
			<input type="password" name="password" class="form-control" placeholder="MOT DE PASSE" autocomplete="off" >
		</div>
		<button id="bon" type="submit" class="btn btn-primary">CONTINUER</button>
		</form>

		<br>

	
		<a id="forgot_mdp" href="forget.php">Mot de passe oublié ? </a>
</div></div>
</body>
</html>
