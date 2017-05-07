<?php
$email= "wangxioaming2011@hotmail.com";
$email2= "The mail is liuxiaoshuai_2011@hotmail.com";

$asemail =  "This  is wangxioaming2011@hotmail";

$regex  =  '^[a-zA-Z0-9_.]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9.]+$';
// ereg(正则表达规范，目标字符串，数组)
$regex2 = '[a-zA-Z0-9_.]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9.]+$';

$a=array();

//if(  ereg($regex, $email, $a) )
//{
       //echo "This is an email.";
    //    print_r($a);
        echo "<br>";
//}


/*
if(ereg($regex2,$email2,$b)){
        echo "This is a new email.";
        print_r($b);
echo "<br>";
}
if(ereg($regex,$asemail)){
        echo "This is an email.";
}else{
        echo "This is not an email.";
}

*/


// ereg_replace(正则表达式规范，欲取代字符串子串，目标字符串)


$searchurl = "这是搜索引擎连接：http://www.google. com/和 http://www.baidu.com/";

echo $searchurl;

echo ereg_replace("(http://)([a-zA-Z0-9./-_]+)",   "<a href=\"\\0\">\\0</a>", $searchurl);

echo "<br>";
echo ereg_replace("(http://)([a-zA-Z0-9./-_]+)", "<a href=\"\\0\">\\2</a>",$searchurl);



?>