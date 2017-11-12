<?php
	// USE database to store users and passwords
	// We use define just to examplify the login
	define('USERNAME', 'admin');
	define('PASSWORD', '123456');
	session_start();
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login - Exemple</title>
	<link rel="stylesheet" href="css2.css">
</head>
<body background="images/da.jpg">
	
<div class="log-in">
	<h2>Log In</h2>
	<form action="login.php" method="post">
		<ol>
			<li>
				<label for="user">Utilisateur : </label>
				<input type="text" name="user" id="user">
			</li>

			<li>
				<label for="password">Mot de passe : </label>
				<input type="password" name="password" id="password">
			</li>

			<li>
				<input type="submit" value="Login">
			</li>			
		</ol>
	</form>
<div class="create-acc">
	<form action="Account.html" >
		<h2>Create account</h2>
		<ol>
			<li>
				<label for="nume">Nom</label>
				<input type="text" name="nume" />
			</li>
			<li>
				<label for="prenume">Prenom</label>
				<input type="text" name="prenume" />
			</li>
			<li>
				<label for="email">Email</label>
				<input type="text" name="email" />
			</li>
			<li>
				<label for="username">Username</label>
				<input type="text" name="username" />
			</li>
			<li>
				<label for="parola">Password</label>
				<input type="password" name="parola" />
			</li>
			<li>
				<button class="btn">Create account</button>
			</li>
		</ol>
	</form>
</div>
	<p class="error">
		<?php
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$user=$_POST["user"];
				$password=$_POST["password"];
				
				if($user==USERNAME && $password==PASSWORD){
					$_SESSION["user"]=$user;
					header("Location: Encrypting2.php");
				}else{
					echo "Name or password invalid";
				}
			}
			
?>

	
	</p>
</div>	

</body>
</html>