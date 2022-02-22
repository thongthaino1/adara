<?php
@session_start();
include_once "models/m_user.php";
class c_user{
    public function check_login(){

     if(isset($_POST['login'])){
            if(isset($_POST['Username'])){
                $user = $_POST['Username'];
            }
        if(isset($_POST['Password'])){
            $pass = $_POST['Password'];
        }
     }
//
     $this->saveLoginSession($user,$pass);
     if(isset($_SESSION['user_admin']))
     {

         header('Location: home.php');
         die();

     }else{
//
         $_SESSION['error_login'] = "Sai thong tin dang nhap";
//         var_dump($_SESSION);
         header('Location:login.php');
         die();


     }

    }
    public function saveLoginSession($user,$pass){
        $m_user = new m_user();
        $user = $m_user->takeUserbyId($user,$pass);
        if(!empty($user)) {
            $_SESSION['user_admin'] = $user;
        }

    }
    public function logout(){
        session_destroy();
        header('Location: login.php');

    }
}
