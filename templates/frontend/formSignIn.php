<?php
if (isset($_GET))
{
    $username = $pass = "";
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $repass = $_POST['repassword'];
    if($pass != $repass){
        header("Location:formSignIn.php" );
        die();
    }
    if($username != "" && $pass != "")
    {
       header("Location:login.php?username=".$username."&pass=".$pass );
       die();
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<form method="post" >
    <div class="panel-heading">
        <label class = "title" >Sign in </label>
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" value="" placeholder="Nhập username" name = "username"class="form-control">
    </div>
    <div>
        <label>Password</label>
        <input type="password" value="" placeholder="Nhập password" name = "password"class="form-control">
    </div>
    <div>
        <label>Repassword</label>
        <input type="password" value="" placeholder="Nhập lại password" name = "repassword"class="form-control">
    </div>
    <div>
        <button class="btn btn-success" type ="submit" >Submit</button>
    </div>
</form>

</body></html>