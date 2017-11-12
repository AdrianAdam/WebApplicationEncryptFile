<?php
	session_start();
	
	if(!isset($_SESSION["user"])){
		header("Location: error.html");
	}
?>	
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Encrypting</title>
	
	<link rel="stylesheet" href="css2.css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	
</head>
<body>
<div class="tot">
	<div class="container">
		<div class="header">
			<h1>Fichier encryptage et decryptage</h1>
			
		</div>
		
		<div class="section">
			<div class="col-md-8">
				<img class="img-responsive" src="images/encrypted.gif" alt="" />
			</div>
			
			<div class="aside">
			<div class="col-md-4">
				<h1>Nouvelles</h1>
				<p>Bienvenue sur notre site!</p>
				<p>Si vous avez quelque problems, contactez nous par e-mail.</p>
				<h1>Mise a jour</h1>
				<h2>Avril</h2>
				<p>Petites modifications sur l'algorithme</p>
				<h2>Mars</h2>
				<p>Creaton de l'algorithme</p>
				<p>Creation de le site</p>
				<h1>Contact</h1>
				<form class="form">
					<ul>
					<li>
						<label for="name">Name</label>
						<input type="text" name="name" maxlength="100">
						<span>Ecrivez votre nom ici</span>
					</li>
					<li>
						<label for="email">Email</label>
						<input type="email" name="email" maxlength="100">
						<span>Ecrivez votre email ici</span>
					</li>
					<li>
						<label for="url">Commentaire</label>
						<input type="url" name="url" maxlength="100">
						<span>Si vous avez des commentaires</span>
					</li>
					<li>
						<input type="submit" value="Envoyer" >
					</li>
					</ul>
					</form>
			</div>
		</div>
		
			<div class="col-md-4">
				<form action="php/encript2.php" enctype="multipart/form-data" method="post" lang="fr">
					<p>
						<h2>Fichier pour encrypter:</h2>
						<br>
						<input type="file" name="datafile" size="100">
					</p>
					<div>
						<input type="submit" value="Envoyer le fichier">
					</div>
				</form>
			</div>
			
			<div class="col-md-4">
				<form action="php/decript2.php" enctype="multipart/form-data" method="post">
					<p>
						<h2>Fichier pour decrypter:</h2>
						<br>
						<input type="file" name="datafile" size="100">
					</p>
					<div>
						<input type="submit" value="Envoyer le fichier">
					</div>
				</form>
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			<div class="col-md-12">
				<p>Adrian Adam, Buzica Andrei <br />  Groupe 1211 AF</p>	
			</div>
			<form method="get" action="logout.php">
			<input type="submit" value="Log Out"></input>
			</form>
		</div>
	</div>
</div>
</body>
</html>