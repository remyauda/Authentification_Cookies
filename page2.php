<?php
if(!isset($_COOKIE['pseudo'])){
	setcookie('pseudo', $_POST['pseudo'],time()+60*10,null, null, false, true);
}?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Page 2</title>
</head>

<body>
	<p>
	<?php 
	echo 'Votre pseudo est: '.$_COOKIE['pseudo']; 
	?>
<br/>
<p>
Voici ma page 2
</p>

<p>
<a href="page1.php" title="page1">Acceder à la page 1</a><br/>
<a href="index.php" title="index">Acceder à l'index</a>
</p>

</body>

</html>