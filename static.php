<?php


$person = 20;
function showperson (){
    static  $person = 5;
    $person++;
    echo '增加1位，将会有'.$person.' 位static 人员。<br>';
}





/*
 void unset(变量)
*/


showperson();
echo $person.'个人。<br>';
showperson();


function purge(){
    global $b;
 //   $b ='al;fdjlajfdl';
   unset ($b);
}

$b='jlsfdjkl';
purge();
echo $b;

$hello = "hello world";
echo "<br>".$hello."<br>";
$hello = 11;
echo "<br>".$hello."<br>";

$hello = 112.001;
echo "<br>".$hello."<br>";



$int1 = 2012;
$int2= 01223;
$int13= 0x1223;

echo $int1."\t".$int2."\t".$int13."<br>"; # 统一以10进制形式输出

$float1 = 54.66;
echo $float1 ;
echo "<br>";
echo (Boolean)($int1);
echo "<br>";
echo (boolean)($int1);

echo "<br>";
echo (booleaN)($int1);
echo "<br>";
echo "字符串类型的变量：";
$string = "sff";
echo $string;


$arr = array(
0=>15,
2=>1E+05,
1=>"开始学习PHP语法了.",
);
echo "<br>";
for($i=0; $i<count($arr);$i++){
    $arr1 = each($arr);
    echo "$arr1[value]<br>";
}



$arr = array(15,1E+05, "开始学习PHP语法了.");
echo "<br>";
for($i=0; $i<3;$i++){
    echo "$arr[$i]<br>";
}



$arr[0] = 15;
$arr[1] = 1E+05;
$arr[2] = "开始学习PHP语法了.";

echo "<br>";
for($i=0; $i<count($arr);$i++){
    $arr1 = each($arr);
    echo "$arr1[value]<br>";
}


$floa = 1.86;
echo (int) $floa."<br>";

$floa2 = 4E32;
echo (int) $floa2."<br>";
echo sizeof($floa2);  #php 如何查看 变量占用的大小
$flo = 2.34;
echo "<br>";
echo (int) $flo."<br>";
echo settype($flo,"int");

// bool settype(var, string type);

// declare(strict_types = 1);
// strict_types, 0,1


function sum(int $ints)
{
     return array_num($ints);
}

//print  (sum(2,'3',4.1));



//declare(strict_types=1);
function sum2(int $ints)
{
     return array_num($ints);
}

//print  (sum2(2,'3',4.1));


$a=13;
$b = 2;
echo "<br>";
echo $a."+".$b."=";
echo $a+$b."<br>";

echo $a."-".$b."=";
echo $a-$b."<br>";


echo $a."*".$b."=";
echo $a*$b."<br>";


echo $a."/".$b."=";
echo $a/$b."<br>"; #6.5,不是取整。


echo $a."%".$b."=";
echo $a%$b."<br>";


echo $a."++"."=";
echo $a++."<br>"; # 13,先取，后自增，和c一样


echo $a."--"."=";
echo $a--."<br>"; #14
echo $a."<br>";

$c = c; #字符也可以  自增。
echo ++$c."<br>";


#.
$a = "字符串连接：";
$b = 10.24;
echo $a."连接起来".$b."<br>";

echo "<br>";
$a.=$b;  #  $a = $a.$b
echo $a;
echo "<br>";
echo $b;
echo "<br>";
$a=13;
$b=2;
$a%=$b;
echo $a;




// 
echo "<br>";
$value="15";
echo  "\$value  = \"$value\"";
echo " $value == 15: ";

echo "<br>";
var_dump($value == 15);

echo "<br>";
echo "\$value == ture: ";
echo "<br>";
var_dump($value == false);
echo "<br>";

echo "\$value != null: ";
echo "<br>";
var_dump($value != null);
echo "<br>";


echo "\$value == false: ";
echo "<br>";

var_dump($value == false);
echo "<br>";

echo "\$value ===  100: ";
echo "<br>";
var_dump($value ===100);
echo "<br>";

echo "\$value ===  true: ";
echo "<br>";
var_dump($value === true); #var_dump????
echo "<br>";

echo "(10/2.0 !== 5):";
echo "<br>";
var_dump( 10/2.0 !== 5 );
echo "<br>";

echo "xxxxxxxxxxxxxxxxxxx";
$a= true;
$b=false;
echo "<br>";
echo ' $a && $b';
echo "<br>";
var_dump( $a && $b);
echo "<br>";
echo ' $a || $b';
echo "<br>";
var_dump( $a ||  $b);
echo "<br>";

echo ' !$a ';
echo "<br>";
var_dump( !$a );
echo "<br>";



$a=7;
$b=4;
echo '$a & $b = '. ($a & $b) .'<br>';
echo '$a | $b = '. ($a | $b) .'<br>';
echo '$a ^$b = '. ($a ^ $b) .'<br>';

$err =@(20/0);
//echo $err;


$a=5;
$b=6;
echo ($a>$b)?"大于成立":"大于不成立";
echo "<br>";
echo ($a<$b)?"小于成立":"小于不成立";
echo "<br>";

$arr3[0][0] =10; #数组本来就应该这么用的。
$arr3[0][1] = 22;
$arr3[1][0] = 1E+05;
$arr3[1][1] = '开始学习PHP语法了';

for($i=0;$i<count($arr3);$i++)
{
    for($k=0; $k < count($arr3[$i]);$k++)
{
    $arr1 = each($arr3[$i]);
    echo  "$arr1[value]"."<br>";
    }
    }

// 命名空间namespace
// namespace   \var\www\html\num23; PHP namespace怎么用？？？

class room2{
    
}


//$room2= new __NAMESPACE__.room2;


echo rand()."<br>";# 随机整数

echo rand(1000,9000)."<br>"; # 4位 随机整数

/*
function name_of_function(p1,p2....)
{
    statement
}
*/


function sayhello($customer){
    
    return $customer."欢迎你来到jjjj酒店"."<br>";
}

echo sayhello('ding');

function totalneedtopay($days,$roomprice){
    
    $totalcost =  $days * $roomprice;
    echo "需要支付的总价：$totalcost"."元"."<br>";
}

$rentdays = 3;
$roomprice= 168;
totalneedtopay($rentdays,$roomprice);
totalneedtopay(5,198);



$fee=300;
$serviceprice=50;
function  totalfee(&$fee,$serviceprice){
    $fee = $fee + $serviceprice;
     echo "需要支付的总价：$fee"."元"."<br>";
}
 totalfee($fee,$serviceprice);
 totalfee($fee,$serviceprice);


function totalneedtopay2($days,$roomprice){
    return    $days * $roomprice;
}

echo  totalneedtopay2($rentdays,$roomprice);


// 对函数的引用
function  &example($aa =1 ){ #默认参数
    return $aa;
}
echo "<br>";
$bb= &example("引用函数的实例");
echo $bb."<br>";

$bb= &example();
echo $bb."<br>";

// 对函数取消引用,对变量取消引用
$num=166;
$math = &$num;
echo "\$math is : ".$math."<br>";
unset($math);
echo "\$num is : ".$num."<br>";




?>

