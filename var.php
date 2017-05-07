<?php
/*

*/

echo "使用传值方式赋值: <br/>";
$a = "slfjalf";

$b=$a;
echo "a的值:".$a." <br/>";
echo "b的值:".$b." <br/>";

$a = "xxxxxxxxxxx";
echo "a的值:".$a." <br/>";
echo "b的值:".$b." <p>";


$a = "yyyyyyyyy";
$b=&$a;

echo "a的值:".$a." <br/>";
echo "b的值:".$b." <br/>";

$a = "zzzzzzzzzzzz";
echo "a的值:".$a." <br/>";
echo "b的值:  $b <p>";  #  or   echo "b的值:".$b." <br/>";



$value0 = "guest"; #  $value0：  可 变变量 
$$value0 = "customer";  # $$value0 ==  $guest
echo  $guest."<br/>";
$guest="feifei";
echo  $guest."\t".$$value0."<br/>";

$value1 = "xiaoming";
$value2 = &$value1; # 变量的引用 
echo $value1."\t".$value2."<br/>";
$value2 = "lili";
echo $value1."\t".$value2."<br/>";


$room=20;
function showrooms(){
    echo $room."ssss"."<br>"; # 在函数内不能访问$room
}

showrooms();
echo $room.'间房间。';



?>