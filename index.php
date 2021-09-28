<!DOCTYPE html>
<html lang="en">
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
    <p id="bop">VATECH APP</p>

    <form action ="" method="POST">

		<div class = "form-group">
		<input type="text" name="username" class="form-control" placeholder="EMAIL" autocomplete="off" >
		<input type="password" name="password" class="form-control" placeholder="MOT DE PASSE" autocomplete="off" >
		</div>


    <button id="bon" type="submit" class="btn">CRÉER UN COMPTE</button>
</form>

<p id="question"> Vous avez déjà un compte ? </p>

<a id="register" href="register.php">Connectez-vous</a>
<br>
<img id="icon_fb" src="img/fb_icon.png" width="30" height="30">


	<p id="cgu"> En vous connectant, vous acceptez les Conditions d'Usage 
et la Politique de Confidentialité </p>
</div></div>
  </body>
</html>