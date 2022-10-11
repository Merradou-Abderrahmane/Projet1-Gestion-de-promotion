<?php

require_once "../data-acess/promotionDAL.php";

class PromotionBLL {
    // private $promotionBLL = null;
    
    public function getAllPromotions(){
        $promotionBLL = new PromotionDAL();

        return $promotionBLL->getAllPromotions();
    }

    public function addPromotion($promotion){
        $promotionBLL = new PromotionDAL ();

        return $promotionBLL->addPromotion($promotion);
    }

}

?>