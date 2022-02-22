<!--<style type="text/css">-->
<!--.title{-->
<!--    color: blue;-->
<!--    /*justify-content: center;*/-->
<!--    margin:auto;-->
<!--    width:150px;-->
<!--    font-size: 30px;-->
<!--</style>-->
<!---->
<!---->
<?php
class Sinhvien {
    public $diemTB = 10 ;
    public function hienThiThongTinSinhVien($diemTB){
        echo $this->diemTB;

    }

}
$sv = new Sinhvien();
    echo $sv->diemTB;
//if(isset($_POST) && isset($_GET))
//{
//    if(isset($_GET['username']) ){
//        $registed_username  = $_GET['username'];
//    }
//    if(isset($_GET['pass']) ){
//        $registed_pass  = $_GET['pass'];
//    }
//    $username = $_POST['username'];
//    $pass = $_POST['password'];
//    if($registed_pass == $pass && $registed_username == $username)
//    {
//        echo "Welcome";
//        die();
//    }
//
//}
//
//?>
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<p class='title'>Welcome $username</p>-->
<!--<form method="post" style="">-->
<!--    <div class="panel-heading">-->
<!--        <label class = "title " style = "text-align: center">Log in </label>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label>Username</label>-->
<!--        <input type="text" value="" placeholder="Nhập username" name = "username" class="form-control">-->
<!--    </div>-->
<!--    <div>-->
<!--        <label>Password</label>-->
<!--        <input type="password" value="" placeholder="Nhập password" name = "password" class="form-control">-->
<!--    </div>-->
<!--    <div>-->
<!--        <button class="btn btn-success" type ="submit" >Đăng nhập </button>-->
<!--    </div>-->
<!--</form>-->
<!---->
<!--</body></html>-->