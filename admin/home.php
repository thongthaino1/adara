<?php
@session_start();
if(isset($_SESSION['user_admin']))
{
    include_once "controllers/c_home.php";
    $index = new c_home();
    $index->index();
}else{
    header("location:login.php");
}
