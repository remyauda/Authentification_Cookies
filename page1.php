<?php
if(!isset($_COOKIE['pseudo'])){
	setcookie('pseudo', $_POST['pseudo'],time()+60*1,null, null, false, true);
}?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Page 1</title>
</head>

<body>
	<p>
	<?php 
	echo 'Votre pseudo est: '.$_COOKIE['pseudo']; 
	?>
<br/>
<p>
Voici ma page 1
</p>

<p>
<a href="page2.php" title="page2">Acceder à la page 2</a><br/>
<a href="index.php" title="index">Acceder à l'index</a>
</p>

</body>

</html>