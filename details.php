<?php require 'Armoire.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>details</title>
</head>
<body>
	<a href="index.php">Home</a><br>

	<h1>Details des mes chaussettes</h1>	

	<?php $tab3 = Armoire::all(100);
	foreach ($tab3 as $value) {
		if ($_GET['id'] === $value->id) {

			?>
			<input type="hidden" value="<?php echo $value->id ?>">
			<br>
			<h4>Pointure :<?php echo $value->pointure ?> </h4><br>

			<h4>Couleur : <?php echo $value->couleur ?> </h4><br>

			<h4>Temp_lavage : <?php echo $value->temp_lavage ?> </h4><br>

			<h4>Date_lavage : <?php echo $value->date_lavage ?> </h4><br>

			<?php }
		}
		?>

	</body>
	</html>