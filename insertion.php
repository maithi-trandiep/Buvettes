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
			<a href="affectation.php">Affectation</a>
			<a href="prive.php">Administrateur</a>
		</p>
	</nav>
	<?php
	require_once('fonctions.php');
	if (!empty($_POST['NouvBuv']))  
	{
		$nombu = $_POST['NomBuv'];
		$emp = $_POST['EmpBu'];
		$nomres = $_POST['NomPr'];
		InsertBuvette ($nombu,$emp,$nomres);
	}
	if (!empty($_POST['NouvVol']))
	{
		$nomvo = $_POST['nomvo'];
		$voage = $_POST['agevo'];
		InsertVolontaire($nomvo,$voage);
	}
	if (!empty($_POST['NouvMat']))
	{
		$date = $_POST['dateMa'];
		$e1 = $_POST['eq1'];
		$e2 = $_POST['eq2'];
		InsertMatchs($date,$e1,$e2);
	}
	if (!empty($_POST['ModifMat']))
	{
		$adate = $_POST['adateMa'];
		$nouvD = $_POST['dateMa'];
		$e1 = $_POST['eq1'];
		$e2 = $_POST['eq2'];
		UpdateMatchs($adate,$nouvD,$e1,$e2);
	}
	?>
	<footer class="Bas">
		BTS SIO 1-
		Mai Thi TRAN DIEP-
		Inès MAGANGA
	</footer>
</body>
</html>