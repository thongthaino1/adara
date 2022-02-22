<?php
include_once ('calculator.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calculator - Online</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <style type="text/css">
        table{
            background-color: #ABB1BA;
            margin: auto;
        }
        #result{
            width: 416px;
            height: 70px;
            /*justify-content: center;*/
            /*align-content: center;*/
            /*text-align: center;*/
            /*align-items: center;*/

        }
        .btn{
            width: 80px;
            height: 80px;
        }
        #equ{
            width: 80px;
            height: 164px;
        }
        #zero{
            width: 164px;
            height: 80px;
        }
    </style>
</head>
<body>
<!--<form method="post" action="" id="MyForm" >-->
<!--    <input required="true" name="a" placeholder="Enter A" value="--><?//= $a ?><!--">-->
<!--    <input required="true" name="b" placeholder="Enter B" value="--><?//= $b ?><!--">-->
<!--    <select name="cal" required="true">-->
<!--        <option value="">Chọn phép tính</option>-->
<!--        <option value="+" --><?//=($cal == '+')?'selected':''?><!-->+</option>-->
<!--        <option value="-" --><?//=($cal == '-')?'selected':''?><!-->-</option>-->
<!--        <option value="*" --><?//=($cal == '*')?'selected':''?><!-->*</option>-->
<!--        <option value="/" --><?//=($cal == '/')?'selected':''?><!-->/</option>-->
<!--        <option value="%" --><?//=($cal == '%')?'selected':''?><!-->%</option>-->
<!--    </select>-->
    <!-- <input type="text" name="cal" placeholder="Enter Cal"> -->
<!--    <button type="submit">Submit</button>-->
<!--    <p style="font-size: 20px; color:red">-->
<!--        Kết Quả: --><?//=$result?>
<!--    </p>-->
<!--</form>-->
<table>
    <tr>
        <td colspan="7"><input id = "result" type="text" disabled></input> </td>

    </tr>
    <tr>
        <td><input type="button" class="btn" value="7"></td>
        <td><input type="button" class="btn" value="8"></td>
        <td><input type="button" class="btn" value="9"></td>
        <td><input type="button" class="btn" value="/"></td>
        <td><input type="button" class="btn" value="C"></td>
    </tr>
    <tr>
        <td><input type="button" class="btn" value="4"></td>
        <td><input type="button" class="btn" value="5"></td>
        <td><input type="button" class="btn" value="6"></td>
        <td><input type="button" class="btn" value="*"></td>
        <td><input type="button" class="btn" value="AC"></td>
    </tr>
    <tr>
        <td><input type="button" class="btn" value="1"></td>
        <td><input type="button" class="btn" value="2"></td>
        <td><input type="button" class="btn" value="3"></td>
        <td><input type="button" class="btn" value="-"></td>
        <td rowspan="2"><input id="equ" type="button" class="btn" value="="></td>
    </tr>
    <tr>
        <td  colspan="2"><input type="button" id="zero"  class="btn" value="0"></td>
        <td><input type="button" class="btn" value="."></td>
        <td><input type="button" class="btn" value="+"></td>
    </tr>
</table>
<script type="text/javascript">
    var a = '', b = '', cal = '';
    $(function() {

        $('input').click(function() {
             console.log($(this).val());
            var v = $(this).val();
            switch(v) {
                case '+':
                case '-':
                case '*':
                case '/':
                    // console.log($('[name=a]').val())
                    cal = v;
                    break;
                case '=':
                    if(b == "")
                        return
                    else
                        getDataPost()
                    break;
                case 'AC':
                case 'C':
                    a = '',
                    b ='',
                    cal = ''
                    break;
                    // $('[name=a]').val('')
                    // $('[name=b]').val('')
                    // $('[name=cal]').val('')
                    // break;
                default:
                    if(cal != '') {
                        //nhap B
                        b += v;
                    } else {
                        //nhap A
                        a += v;
                    }
                    break;
            }
            $("#result").val(a + cal + b);



        })

    })
    function getDataPost(){

        $.post("calculator.php",{
            'a':a,
            'b':b,
            'cal':cal
        },function (data)
        {
            console.log(data);
            $("#result").val (a + cal + b + "= " + data);
            a = data
            b = ''
            // $('#a').val(data);


        })
    }


</script>
</body>
</html>