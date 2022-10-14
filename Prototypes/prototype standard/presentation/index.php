<?php
require_once "../business/promotionBLL.php";

$promotionBAL = new promotionBLL();

$data = $promotionBAL->getAllPromotions();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotion management</title>
</head>
<body>
    <div>
        <a href="addPromotion.php">Ajouter promotion</a>
        
    </div>
</body>
</html>