<?php require 'Armoire.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tableau des 50 premières entrées</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css"/>
</head>
<body>
	<h1>
		<a href="index.php">Home</a>
		<div class="ui table">
			<table class="ui table">
				<tr>
					<th>---id---</th>
					<th>pointure</th>
					<th>couleur</th>
					<th>temp_lavage</th>
					<th>date_lavage</th>
					<th>Editer</th>
				</tr>
				<?php
				$tab = Armoire::all(10,0);


			foreach ($tab as $value) {
				?>
				<tr>
					<td><a href="details.php?id=<?php echo $value->id ?>"><?php echo $value->id; ?></a></td>
					<td><?php echo $value->pointure; ?></td>
					<td><?php echo $value->couleur; ?></td>
					<td><?php echo $value->temp_lavage; ?>°c</td>
					<td><?php echo $value->date_lavage; ?></td>
					<td><a href="edition.php?id=<?php echo $value->id ?>"><i class="edit icon"></i></a></td>

				</tr>

				<?php 
			}
			?>
			</table>
		</div>
		<br>
		<br>
		<br>
	</h1>
</body>
</html>