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
    <br>
	<form align="center" method="post" action="affectations.php">
		<button name='NouvRes' type='submit' value='Valider' class="button">Entrer un nouveau responsable</button>
		<button name='NouvVol' type='submit' value='Valider'class="button">Entrer un nouveau volontaire à une buvette </button>
		<button name='BuvOuv' type='submit' value='Valider'class="button">Entrer une nouvelle buvette ouverte</button>
	</form>
		<?php 
			if (!empty($_POST['NouvRes'])) 
			{
				echo "<br>";
				echo "<form method='post' action='confirmation.php'>";
				echo "<fieldset>";
				echo "<legend>Nom du nouveau responsable</legend>";
				echo "<select name='NomPr'>";
		?>
		    	<?php 
            	$sql = "SELECT * FROM volontaire";
            	$sth = $dbh->query($sql);
            	while ($donnees=$sth->fetch()) 
            	{
        		?>
            		<option value="<?php echo $donnees['idV']; ?>"> <?php echo $donnees['nomV']; ?></option> 
        		<?php  
            	}
        		?> 
        <?php	
				echo "</select>";
				echo "</fieldset>";
				echo "<fieldset>";
				echo "<legend>Nom de la buvette</legend>";
				echo "<select name='NomBu'>";
		?>	
		    	<?php 
            	$sql = "SELECT * FROM buvette";
            	$sth = $dbh->query($sql);
            	while ($donnees=$sth->fetch()) 
            	{
        		?>
            		<option value="<?php echo $donnees['idB']; ?>"> <?php echo $donnees['nomB']; ?></option>
        		<?php  
            	}
        		?> 
        <?php	
				echo "</select><br>";
				echo "</fieldset>";
				echo "<fieldset>";
				echo "<legend>Date du match du responsable</legend>";
				echo "<select name='Mat'>";
		?>
		    	<?php 
            	$sql = "SELECT * FROM matchs";
            	$sth = $dbh->query($sql);
            	while ($donnees=$sth->fetch()) 
            	{
        		?>
            		<option value="<?php echo $donnees['idM']; ?>"> <?php echo $donnees['dateM']; ?> </option> 
        		<?php  
            	}
        		?>
        <?php 	
				echo "</select>";
				echo "</fieldset>";
				echo "<button name='NouvRes' type='submit' value='Valider'>Valider</button>";
				echo "<input type='reset' name='Annuler'>";	
				echo "</form>";
			} 
		?>
		<?php
		if (!empty($_POST['NouvVol']))
		{
			echo "<br>";
			echo "<form method='post' action='confirmation.php'>";
			echo "<fieldset>";
			echo "<legend>Nom du volontaire</legend>";
			echo "<select name='NomPr' id='NomPr'>";
		?>
		<?php 
            $sql = "SELECT * FROM volontaire";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
        ?>
            <option value="<?php echo $donnees['idV']; ?>"> <?php echo $donnees['nomV']; ?></option> 
        <?php  
            }
        ?>
        <?php  	
			echo "</select>";
			echo "</fieldset>";
			echo "<fieldset>";
			echo "<legend>Nom de la buvette</legend>";
			echo "<select name='NomBu' id='NomBu'>";
		?>	
		<?php 
            $sql = "SELECT * FROM buvette";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
        ?>
            <option value="<?php echo $donnees['idB']; ?>"> <?php echo $donnees['nomB']; ?></option> 
        <?php  
            }
        ?> 	
		<?php	
			echo "</select>";
			echo "</fieldset>";
			echo "<fieldset>";
			echo "<legend>Date du match</legend>";
			echo "<select name='Mat' id='Mat'>";
		?>
		<?php 
            $sql = "SELECT * FROM matchs";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
        ?>
            <option value="<?php echo $donnees['idM']; ?>"> <?php echo $donnees['dateM']; ?></option> 
        <?php  
            }
        ?> 	
		<?php
			echo "</select>";
			echo "</fieldset>";
			echo "<button name='NouvVol' type='submit' value='Valider'>Valider</button>";
			echo "<input type='reset' name='Annuler'>";	
			echo "</form>";
		}
		?>	
		<?php
		if (!empty($_POST['BuvOuv'])) 
		{
			echo "<br>";
			echo "<form method='post' action='confirmation.php'>";
			echo "<fieldset>";
			echo "<legend>Nom de la buvette</legend>";
			echo "<select name='NomBu' id='NomBu'>";
		?>	
		<?php 
            $sql = "SELECT * FROM buvette";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
        ?>
            	<option value="<?php echo $donnees['idB']; ?>"> <?php echo $donnees['nomB']; ?></option> 
        <?php  
            }
        ?>
        <?php 	
			echo "</select>";
			echo "</fieldset>";
			echo "<fieldset>";
			echo "<legend>Date du match</legend>";
			echo "<select name='Mat' id='Mat'>";
		?>
		<?php 
            $sql = "SELECT * FROM matchs";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
        ?>
            	<option value="<?php echo $donnees['idM']; ?>"> <?php echo $donnees['dateM']; ?></option> 
        <?php  
            }
        ?>
        <?php 	
			echo "</select>";
			echo "</fieldset>";
			echo "<button name='BuvOuv' type='submit' value='Valider'>Valider</button>";
			echo "<input type='reset' name='Annuler'>";
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