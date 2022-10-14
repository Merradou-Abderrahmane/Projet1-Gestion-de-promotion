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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Promotion management</title>
</head>

<body>
    <div class="container" style="margin-top: 10rem;">
        <a class="button" style="text-decoration: none;" href="addPromotion.php">Ajouter promotion</a>
        <!-- Search box. -->
        <input type="text" id="search" placeholder="Chercher promotion" />
        <br>
        <!-- Suggestions will be displayed in below div. -->
        <div id="results">

            <table class="table table-bordred table-striped" style="max-width: 50rem;">

                <thead>
                    <th> Nom de promotion </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </thead>
                <tbody>
                    <tr>
                        <td> Promotion </td>
                        <td>
                            <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                        </td>
                        <td>
                            <p data-placement="top" data-toggle="tooltip" title="Delete">
                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" style="padding: 1rem;"><span class="glyphicon glyphicon-trash"></span></button></p>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</body>

</html>