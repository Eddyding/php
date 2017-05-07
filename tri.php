<html>
<head>
<meta   http-equiv="Content-Type"  content＝"text/html;   charset=gb2312"  />
<title>    杨辉三角 </title>
</head>

<body>
<?php

$minnum=1;
$maxnum=10;

$tmparr[][] = array();
$tmparr[0][0] = 1;

for($i = 1; $i < $maxnum; $i++):
        for($j = 0; $j  <= $i; $j++):
                if($j == 0  or $j == $i) 
                        $tmparr[$i][$j] = 1;
                else 
                        $tmparr[$i][$j] =  $tmparr[$i-1][$j-1]  + $tmparr[$i-1][$j];
        endfor;
endfor;


foreach($tmparr as $value):
        foreach($value as $v1)
                echo $v1.'  ';
        echo "<p>";
endforeach;



$n=0;
while(++$n)
{
        switch($n)
        {
                case 1: echo "case one"."<br>"; break;
                case 2: echo "case two"."<br>"; break 2;
                default : echo "case three"."<br>"; break 1; # break 1 == break
        }
}
// break 后面带的数字参数是指break要跳出的控制语句结构的层数


// continue 后面也可以接一个数字，用来表示跳开循环的结构层数。　continue 1 == continue
$n=0;
while( $n++ < 6){
        if($n == 2) continue;
        echo $n."<br>";
        }


$members = Null;
function checkmembers($members){
        if($members < 1)    echo " 我们不能为少于１个人的顾客提供房间。<br>";
        else echo " 欢迎来到good home 。<br>";
}
checkmembers(2);
checkmembers(0.5);

?>

</body>

</html>

