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
			<a href="affectations">Affectation</a>
			<a href="prive.php">Administrateur</a>
		</p>
	</nav>
	<?php
    require_once('fonctions.php');
		if (!empty($_POST['NouvRes'])) 
		{
			$idbu = $_POST['NomBu'];
			$idres = $_POST['NomPr'];
			$idm = $_POST['Mat'];
			NouvResponsable($idbu,$idres,$idm);
			/*$sql = "UPDATE Buvette SET responsable = $idres WHERE idB = $idbu ";
			$dbh->exec($sql);
			$sql = "INSERT INTO EstOuverte(idB,idM) VALUES ($idbu, $idm)";
			$dbh->exec($sql);
			echo "<h3>Votre demande a été effectuée</h3>";
			echo "<table border = 1px;>";
				echo "<thead>";
					echo "<tr>";
						echo "<td>Identifiant de la buvette</td>";
						echo "<td>Nom de la buvette</td>";
						echo "<td>Emplacemnt de la buvette</td>";
						echo "<td>Identifiant du nouveau responsable</td>";
					echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
					$sql = "SELECT * FROM Buvette WHERE idB = $idbu";
					$sth = $dbh-> query($sql);
					$result = $sth->fetchAll(PDO::FETCH_ASSOC);
					foreach ($result as $row) 
					{
						echo '<tr>';
                		echo '<td align="center">'.$row['idB'].'</td>';
                		echo '<td align="center">'.$row['nomB'].'</td>';
                		echo '<td align="center">'.$row['emplacement'].'</td>';
                		echo '<td align="center">'.$row['responsable'].'</td>';
                		echo '</tr>';
					}
					$dbh = NULL;
				echo "</tbody>";
				echo "</table>";*/
			}
			if (!empty($_POST['NouvVol'])) 
			{
				$idvo = $_POST['NomPr'];
				$idbu = $_POST['NomBu'];
				$idm = $_POST['Mat'];
				$hd = 0;
				$hf = 0;
				NouvVolontaire($idvo,$idbu,$idm,$hd,$hf);
				/*$sql = "INSERT INTO EstPresent(idV,idB,idM,hdeb,hfin) VALUES ($idvo,$idbu,$idm,$hd,$hf)";
				$dbh->exec($sql);
				echo "<h3>Votre demande a été effectuée</h3>";
				echo "<table border = 1px;>";
					echo "<thead>";
						echo "<tr>";
							echo "<td>Identifiant du volontaire</td>";
							echo "<td>Identifiant de la buvette</td>";
							echo "<td>Identifiant du match</td>";
						echo "</tr>";
					echo "</thead>";
					echo "<tbody>";
						$sql = "SELECT * FROM EstPresent WHERE idV = $idvo AND idB = $idbu";
						$sth = $dbh-> query($sql);
						$result = $sth->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $row) 
						{
							echo '<tr>';
                			echo '<td align="center">'.$row['idV'].'</td>';
                			echo '<td align="center">'.$row['idB'].'</td>';
                			echo '<td align="center">'.$row['idM'].'</td>';
                			echo '</tr>';
						}
						$dbh = NULL;
				echo "</tbody>";
				echo "</table>";*/
			}
			if (!empty($_POST['BuvOuv'])) 
			{
				$idbu = $_POST['NomBu'];
				$idm = $_POST['Mat'];
				NouvBuvetteOuv($idbu,$idm);
				/*$sql = "INSERT INTO EstOuverte(idB,idM) VALUES ($idbu,$idm)";
				$dbh->exec($sql);
				echo "<h3>Votre demande a été effectuée</h3>";
				echo "<table border = 1px;>";
					echo "<thead>";
						echo "<tr>";
							echo "<td>Identifiant de la buvette</td>";
							echo "<td>Identifiant du match</td>";
						echo "</tr>";
					echo "</thead>";
					echo "<tbody>";
						$sql = "SELECT * FROM EstPresent WHERE idV = $idvo AND idB = $idbu";
						$sth = $dbh-> query($sql);
						$result = $sth->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $row) 
						{
							echo '<tr>';
                			echo '<td align="center">'.$row['idB'].'</td>';
                			echo '<td align="center">'.$row['idM'].'</td>';
                			echo '</tr>';
						}
						$dbh = NULL;
				echo "</tbody>";
				echo "</table>";*/
			}
	?>
	<footer class="Bas">
		BTS SIO 1-
		Mai Thi TRAN DIEP-
		Inès MAGANGA
	</footer>
</body>
</html>