<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
	<title>Buvettes</title>
</head>
<body>
	<header class="Haut">
		<p><img src="img/Logo.jpg" alt="Logo du site"/>
		L'application de gestion des buvettes du festival</p>
	</header>
	<nav class="Menu">
		<p>
			<a href="accueil.php">Nouveautés</a>
			<a href="statistiques.php">Statistiques</a>
			<a href="recherchemembres.php">Recherche Membres</a>
			<a href="affectations.php">Affectation</a>
			<a href="prive.php">Administrateur</a>
		</p>
	</nav>
    <?php
        require_once('Connect.php');
        $dbh = doConnect();
    ?>
    <h3 align="center">Choisisser votre type de statistique</h3>
	<form align="center" method="post" action="resultstatistiques.php">
		<button name='5Vol' type='submit' value='Valider' class="button">5 volontaires les plus présents</button>
		<button name='5Buv' type='submit' value='Valider' class="button">5 buvettes ayant mobilisé le plus de volontaires</button>
	</form>
	<br>
	<form align="center" method="post" action="statistiques.php">
		<button name="stat3" type="submit" value="Valider" class="button">Les buvettes ouvertes durant un match</button>
	</form>
	<br>
	<?php 
		if (!empty($_POST['stat3'])) 
		{
			echo "<form align='center' method='post' action='resultstatistiques.php'>";
			echo "<label>Selectionnez un match: </label>";
			echo "<select name='BuOuv2' id='BuOuv2'>";
            $sql = "SELECT * FROM matchs";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
        ?>
            <option value="<?php echo $donnees['idM']; ?>"> <?php echo $donnees['eqA']; ?> - <?php echo $donnees['eqB']; ?></option> 
        <?php  
            }
        	echo "</select>";	
        	echo "<br>";
			echo "<button name='BuOuv' type='submit' value='Valider' class='button'>Valider</button>";	
			echo "</form>";	
		}
	 ?>
	<footer class="Bas">
		BTS SIO 1-
		Mai Thi TRAN DIEP-
		Inès MAGANGA
	</footer>
</body>
</html>