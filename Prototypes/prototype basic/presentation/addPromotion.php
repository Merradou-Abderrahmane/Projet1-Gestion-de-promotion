<?php

require_once "../business/promotionBll.php";
    
    $promotionBal = new promotionBll();

if(!empty($_POST)){
	$promotion = new promotion();
	$promotion->setName($_POST['name']);
	$promotionBal->addPromotion($promotion);
	
	// redirect to index.php
}
?>

<form action="" method="POST">
Name: <input type="text" name="name" >                                                          
   
<button type="submit">add +</button>
</form>