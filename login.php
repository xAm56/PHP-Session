<?php 
session_start();
	if(!empty($_POST))
		{
			if((isset($_POST['pseudo'])) AND (isset($_POST['mdp'])))
				{
					session_start();
					echo "test";
					$_SESSION['pseudo'] = $_POST['pseudo'];
					header('Location:index.php');
					
				}
			else
				{
					echo 'mauvaise combinaison ';
				}
		}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
        <title>Connexion</title>
    </head>
<?php include"header.php"; ?>

<form method="post" action="index.php">
<center><p>Pseudo :</p> 
		<input type="text" name="pseudo" />
	<p>Mot de passe :</p>
		<input type="password" name="mdp" />
		</br></br><input type="submit" value="Connexion" />
</form>
<?php echo " . $pseudo ."; ?>
<p><a href="create_account.php">Créer un compte</a></p></center>

<?php include"footer.php"; ?>
