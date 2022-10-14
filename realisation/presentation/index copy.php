<?php
include_once "../business/promotionBLL.php";


$promotionBAL = new promotionBLL();

$data = $promotionBAL->getAllPromotions();

?>

</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Including jQuery is required. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Including our scripting file. -->
    <script type="text/javascript" src="javascript/script.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Promotion management</title>
</head>

<body>
    <div class="container">
        <a class="button" style="text-decoration: none;" href="addPromotion.php">Ajouter promotion</a>
        <!-- Search box. -->
        <input type="text" id="search" placeholder="Chercher promotion" />
        <br>
        <!-- Suggestions will be displayed in below div. -->


        <div id="results">

            <table>

                <?php
                foreach ($data as $promotion) {
                ?>

                    <tr>
                        <td><?= $promotion->getName() ?></td>
                        <td>
                            <a class="delete" href="deletePromotion.php?id=<?php echo $promotion->getId() ?>">Supprimer</a>
                            <a class="edit" href="updatePromotion.php?id=<?php echo $promotion->getId() ?>">Modifier</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>