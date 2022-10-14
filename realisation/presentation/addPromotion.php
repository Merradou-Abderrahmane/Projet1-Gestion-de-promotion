<?php

require_once "../business/promotionBLL.php";

$promotionBAL = new promotionBLL();

if (!empty($_POST)) {
	$promotion = new promotion();
	$promotion->setName($_POST['name']);
	$promotionBAL->addPromotion($promotion);

	// redirect to index.php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Ajouter promotion</title>
</head>

<body>
	<header>
		<h1>Ajouter promotion</h1>
	</header>
	<form action="" method="POST">
		Nom de la promotion <input type="text" name="name">

		<button type="submit">Envoyer</button>
		<a type="submit" href="">Envoyer</a>
	</form>
</body>

</html>