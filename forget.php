<!DOCTYPE html>
<html>
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

<p id="msg_email">Saisissez l'adresse e-mail associée à votre compte</p>

<form action ="" method="POST">
	<div class = "form-group">	
		<input type="email" name="email" class="form-control" placeholder="EMAIL" >
	</div>

	<p id="msg_email2" for=""> Un lien de redirection va vous être envoyé. </p>
	<br>
	<button id="bon" type="submit" class="btn btn-primary"> VALIDER  </button>

</div></div>
 </body>
 </html>
