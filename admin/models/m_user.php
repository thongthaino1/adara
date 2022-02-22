<?php
require_once ("database.php");
class m_user extends database{

    public function takeUserbyId($username ,$password){
        $sql = "SELECT * FROM nguoi_dung where ten_dang_nhap = ? AND mat_khau = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($username,md5($password)));

    }

//    public function takeUserbyUsername($username ,$password){
//        $sql = "SELECT * FROM nguoi_dung where 'ten_dang_nhap'= ?  AND mat_khau= ?";
//
//        $this->setQuery($sql);
////        echo $this->sql;
//        $this->execute();
//
//
////        print_r($result);
//        return $this->loadRow(array($username,md5($password)));
//    }



}



