<?php require 'Armoire.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edition</title>
</head>
<body>
	<a href="index.php">Home</a>

	<?php $tab2 = Armoire::all();
	foreach ($tab2 as $value) {
		if ($_GET['id'] === $value->id) {

			?>
			<form action="#" method="post">

				<input type="hidden" name="id" id="id" value="<?php echo $value->id ?>">
				<br>
				<label for="pointure">Pointure</label>
				<input type="text" name="pointure" id="pointure" value="<?php echo $value->pointure ?>">
				<br>
				<label for="couleur">Couleur</label>
				<input type="text" name="couleur" id="couleur" value="<?php echo $value->couleur ?>">
				<br>
				<label for="temp_lavage">Température lavage</label>
				<input type="text" name="temp_lavage" id="temp_lavage" value="<?php echo $value->temp_lavage ?>">
				<br>
				<label for="date_lavage">Date lavage</label>
				<input type="text" name="date_lavage" id="date_lavage" value="<?php echo $value->date_lavage ?>">
				<br>
				<input type="submit" value="Modifier les données ">

			</form>

			<?php
			if (isset($_POST['id'])) {
				
				$val = ORM::for_table('mes_chaussettes')->find_one($value->id);
				$pointureInput = $_POST['pointure'];
				$couleurInput = $_POST['couleur'];
				$tempInput = $_POST['temp_lavage'];
				$dateInput = $_POST['date_lavage'];

				$val->pointure = $pointureInput;
				$val->couleur = $couleurInput;
				$val->temp_lavage = $tempInput;
				$val->date_lavage = $dateInput;

				$val->save();
			}
		}
	}
	?>

</body>
</html>