<?php
session_start();
$_POST['pseudo'] = $pseudo;
echo " $pseudo  ";
	if(!isset($pseudo))
		{
			echo 'Bienvenue' . $pseudo . '!';
		
		}
	else
		{
			echo 'Bienvenue' . $pseudo . '!';
		}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
        <title>Portefeuille de compétences - Maxime Le Léannec -</title>
    </head>
    <body>
	
		
		<?php include("header.php"); ?>

	<nav>
		<ul>
			<li><a href="1ereannee.php">1ère année</a></li>
			<li>2ème année</li>
			<li>Stages</li>
			<li><a href="create_account.php">Créer un compte</a></li>
		</ul>
	</nav>
	
	<?php include("section.php"); ?>
	
	
    
    </body>
	<?php include("footer.php"); ?>
</html>