<?php //echo "Thong"; ?>
<!--<form method="get">-->
<!--    <input type="text" placeholder="Nhap so hang :" name="sohang">-->
<!--    <input type="text" placeholder="Nhap so cot :" name="socot">-->
<!--    <input type="submit" name="Submit">-->
<!---->
<!--</form>-->
<!---->
<!--<table  border="1">-->
<!--    --><?php
//
//    if(isset($_GET['Submit'])){
//
//    for($i = 1;$i<=$_GET['sohang'];$i++)
//    {
//        ?>
<!--           <tr>-->
<!--                   --><?php
//                for($j= 1;$j<=$_GET['socot'];$j++)
//                {
//                    ?>
<!--                    <td width="30px">-->
<!--                        --><?php //echo $j*$i; ?>
<!--                </td>-->
<!--                    --><?php
//                }
//                    ?>
<!---->
<!--            </tr>-->
<!--    --><?php
//    }
//    }
//
//
//    ?>
<!--</table>-->
<!---->
<!---->
<?php

require_once ("models/database.php");

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
$result = mysqli_query($conn,"Select * from nguoi_dung");
$data = [];
while($row  = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    echo"<pre>";
    var_dump($row);
    $data[]  = $row ;
}
//var_dump($data);
foreach ($data as $key => $value)
{
    
}



