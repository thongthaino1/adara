<?php
session_start();
include_once ("controllers/c_user.php");
if(isset($_GET['func'])  == 'exit' ){
   $c_user = new c_user();
   $c_user->logout();

}