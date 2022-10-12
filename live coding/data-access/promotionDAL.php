<?php

require_once "mysqlconnection.php";
require_once "promotion.php";

class PromotionDAL extends Connection {
      
    // method
    public function addPromotion($promotion){
        
        $name = $promotion->getName();

        // Sql query 

        $insertRow="INSERT INTO promotion (name) VALUES ('$name')"; 

           // Execute query
     mysqli_query($this->Connect(), $insertRow);
    }
}


?>