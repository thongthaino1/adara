<?php
$a = $b =$cal =$result = '';

if(isset($_POST))
{
    if(isset($_POST['a']) )
            $a = $_POST['a'];
    if(isset($_POST['b']) )
        $b = $_POST['b'];
    if(isset($_POST['cal']) )
        $cal = $_POST['cal'];
    switch ($cal)
    {
        case '+':
            $result = $a + $b ;
            break;
        case '-':
            $result = $a - $b ;
            break;
        case '*':
            $result = $a * $b ;
            break;

        case '/':
            $result = $a / $b ;
            break;
        case '%':
            $result = $a % $b ;
            break;

    }
echo $result;
}