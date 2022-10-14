<?php
require_once "../business/promotionBLL.php";

$promotionBAL = new promotionBLL();
//Getting value of "search" variable from "script.js".
if (isset($_POST['key'])) {
   //Search box value assigning to $name variable.
   $name = $_POST['key'];
   //Search query.
   $results = $promotionBAL->searchByName($name);
   //Creating a simple table to display result.
?>

   <table >


      <?php
      foreach ($results as $promotion) {
      ?>

         <tr>
            <td><?= $promotion['name'] ?></td>
            <td>
               <a href="deletePromotion.php?id=<?php echo $promotion['id'] ?>">Supprimer</a>
               <a href="updatePromotion.php?id=<?php echo $promotion['id'] ?>">Modifier</a>
            </td>
         </tr>
      <?php } ?>
   </table>
   <?php } ?>