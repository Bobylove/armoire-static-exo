<?php require 'Armoire.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>delete</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css"/>
</head>
<body>
	
	<a href="index.php">Home</a>
	<br>


	<?php
	$tab3 = Armoire::del();

	foreach ($tab3 as $del) { ?>
	<input name="id" id="id" type="hidden" value="<?php echo $del->id ?>" >
	<?php
	if ($_GET['id'] === $del->id) {
		$deleteVal = ORM::for_table('mes_chaussettes')->find_one($del->id);
		$del->delete();
		echo "<h1>Votre donnée a bien été supprimer </h1>";
	} 
}
?>
<br>


<br>
</body>
</html>