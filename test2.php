<?php
/*
echo " $aaa  $bbb "."<br>";
include 'test.php';
echo " $aaa  $bbb ";

*/

// include ,require,include_once,require_once,

echo "<br>";
$num=rand(1,100);
if($num % 2 != 0){
    echo "\$num= $num";
echo "<br>";
echo "$num 是奇数";
}

// rand(min,max);
// rand(); 0 RAND_MAX

$d=date("D");
if( $d == "Fri")
echo "今天是周五！";
else
echo "今天不是周五！";
echo "<br>";
$d=date("D");
if( $d == "Sat")
if( $d == "Sat")
echo "今天是周六！";
else
echo "今天不是周六！";



$score=85;
if($score>=0  and  $score <=60){
    echo "您的成绩是差";
    }else if($score > 60 and $score <= 80) {
        echo "你的成绩为中等";
        }else {
                    echo "你的成绩为优等";
        }
        
     
    echo "<br>"; 
$x=5;
switch($x)
{
    case 1:  echo "1"; break;
    case 2:  echo "2"; break;
    case 3:  echo "3"; break;
    case 4:  echo "4"; break;
    case 5:  echo "5"; break;
    default:  echo "数值不在1到5之间";
}
echo "<br>";

$num=1;
$str="20以内的奇数：";
while( $num <= 20){
    if($num % 2 != 0){
         $str .= $num."  ";
    }
    $num++;
}
echo $str;

echo "<br>";

$aa = 0;
while( $aa  !=  0 ){
    echo "不会被执行的内容";
}

do{
    echo "被执行的内容";
    }while($aa  != 0  );
    
/*
for(expr1; expr2;expr3)
{
    
}
*/
echo "<br>";

for($i=0;$i<4;$i++) {
    echo "for"."<br>";
    }

echo "<br>";



/*
foreach(数组  as   数组元素){
    对数组元素操作的命令;
    }
*/


/*
数组  ：不包含键值的数组  &  包含键值的数组  

键值: 下标 。

不包含键值的：
foreach(数组  as   数组元素值){
    对数组元素操作的命令;
}

包含键值的：
foreach(数组  as  键值 =>  数组元素值 ) {
    对数组元素操作的命令;
}

*/

$arr= array("one","two","three");
foreach($arr as $value){
    echo "数组值:".$value."<br>";
}




    
    
?>