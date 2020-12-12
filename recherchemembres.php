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
	<h3 align="center">Entrer pour rechercher un membre</h3>
		<form align="center" id="formRecherche" name="formRecherche" method="post" action="resultrecherchemembres.php">
		<p>
				Âge:
				<br/>
				<input type="text" name="agemb_saisi" id="agemb_saisi" placeholder ="16-50" required />
			</p>
			<p>
				Nom:
				<br/> 
				<input type="text" name="nommb_saisi" id="nommb_saisi" placeholder ="Belva Lindgren" required />
			</p>
			<p>
				Nombre de participations:
				<br/>
				<input type="text" name="nbpart_saisi" id="nbpart_saisi" placeholder ="Minimum 2 fois" required />
			</p>
			<p>
			<label for="responsable">As-t-il été déjà responsable:</label>
			<select id="responsable" name="responsable">
			<option value="1">Oui</option>
			<option value="0">Non</option>
			</select>
			</p>
			<input type=submit value="Valider"/>
		</form>
		<footer class="Bas">
		BTS SIO 1-
		Mai Thi TRAN DIEP-
		Inès MAGANGA
		</footer>
</body>
</html>