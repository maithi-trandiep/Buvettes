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
		$sql = "SELECT idE, pays from equipe";
		$sth = $dbh->query($sql);
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
		$pays = null;
		if(isset($_POST['formEquipes'])){
			$pays = $_POST['formEquipes'];
		}
		$dbh = null;
	?>
	<br/><br/>
	<form align="center" method="post" action="" name="formacceuil">
		<label for='formEquipes'><h3>Sélectionner une équipe pour avoir ses matchs:</h3></label><br>
		<select name="formEquipes" onchange="this.form.submit()">
			<?php
				foreach ($result as $row) {
					echo '<option'.(($pays == $row['pays'] ) ? ' selected ' : ' ').'value="'.$row['pays'].'">'.$row['pays'].'</option>';
				}
			?>
		</select>
	</form>

	<?php
		require_once('fonctions.php');
		$equipe = null;
		if(isset($_POST['formEquipes'])){
			$equipe = $_POST['formEquipes'];
			AfficheMatch($equipe);
		}
	?>
	<footer class="Bas">
		BTS SIO 1-
		Mai Thi TRAN DIEP-
		Inès MAGANGA
	</footer>
</body>
</html>