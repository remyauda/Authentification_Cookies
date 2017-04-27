<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Page d'accueil</title>
</head>

<body>
	<p>
	<?php 
	if(isset($_COOKIE['pseudo'])){	echo 'Votre pseudo est '.$_COOKIE['pseudo'];?>
		<p>
		<a href="page1.php">Acceder à la page 1</a><br/>
		<a href="page2.php">Acceder à la page 2</a><br/>
		</p>
	<?php 
	}
	else {?>
		<form action="page1.php" method="post">
		<p>
		Saisissez votre pseudo:
			<input type="text" name="pseudo" /> 
			<input type="submit" value="Valider" />
		</p>
	</form>
	<?php }
	?>
	

</body>

</html>