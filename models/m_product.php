<?php
require_once ("database.php");
class m_product extends database{

    public function readProduct($vt=-1,$limit=-1){
        $sql = "SELECT * FROM san_pham";
        if($vt >= 0 && $limit >= 0 && $vt <= $limit)
        {
            $sql .= "  limit $vt,$limit";
        }
       $this->setQuery($sql);
//        echo $this->sql;
       $this->execute();
    }



}

