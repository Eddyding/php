<?php
$message = "PHP 程序";
echo "这是关于字符串的程序。"."<br>";
echo "这是一个关于双引号和\$的$message <br>";



$message2 = 'PHP 程序';
echo '这是关于字符串的程序。'."<br>";
echo '这是一个关于单引号的$message２ <br>';


$a = "使用字符串的连接符";
$b = "可以非常方便地连接字符串";

$c = $a.", ".$b;
echo $c;

echo "<br>";

$a= "ding";
$b = "欢迎{$a} 入住酒店.";  # {} 连接字符串
echo $b;

//addslashes()   stipslashes()

echo "<br>";
$someinput = "这个字符串的长度不长。length is not long."; # 一个中文占３个字符。
$length = strlen($someinput);
echo "<br>";
echo "字符串长度为 $length"; # 52
echo "<br>";
if($length > 50) echo "输入的字符串长度不能大于50个字符。";
else echo "字符串长度为 $length";

// str_word_count() 只对ASCII 码的英文单词起作用，而对ＵＴＦ８中文字符没有作用。

echo "<br>";
$someinput= "How many words in this sentance? Just count it.";
$someinput2= "这个句子由多少个汉字组成？不知道。";
echo str_word_count($someinput);
echo "<br>";
echo str_word_count($someinput2); # 无法计算中文字符。


echo "<br>";
$someinput = "                                         这个字符的空格有待处理。         ";
echo "Output:".ltrim($someinput)."End <br>";
echo "Output:".rtrim($someinput)."End <br>";
echo "Output:".trim($someinput)."End <br>";
$someinput2= "                                         这个字符的          空格有待处理。         ";
echo "Output:".trim($someinput2)."End <br>";

// 字符串的切分： explode()   strtok()
// 切分的反向操作是组合。implode()  & join()

$someinput = "How_to_split_this_sentence.";
$someinput2 = "How to split this sentence.";
$a = explode('_',$someinput);
print_r($a);

echo "<br>";
$b = explode(' ',$someinput2);
print_r($b);
echo "<br>";
echo implode('>',$a);
echo "<br>";
echo implode('*',$a);


$someinput = "create a substring of this string.";
$someinput2= "创建一个这个字符串的子串";
echo "<br>";
echo substr($someinput,0,11)."<br>";
echo substr($someinput,1,15)."<br>";
echo substr($someinput,0,-2)."<br>";

echo substr($someinput2,0,12)."<br>";
echo substr($someinput2,0,9)."<br>";
echo substr($someinput2,0,11)."<br>";

// substr_replace()

$someinput="ID:125878877888231";
echo substr_replace($someinput,"xxxxx",3,11)."<br>";
echo substr_replace($someinput,"尾号为",3,11)."<br>";


//strstr(目标字符串，需查找字符串)  ,
// stristr()  不敏感查找


$someinput="I have a Dream that to find a string with a dream.";
$someinput2 = "我有一个梦想，能够找到理想。";

echo strstr($someinput,"dream")."<br>";
echo stristr($someinput,"dream")."<br>";
echo strstr($someinput,"that")."<br>";
echo strstr($someinput2,"梦想")."<br>"; // strstr()同样对 中文字符起作用。



/*
string  strtolower(string str);  // 生成新的对象
string  strtoupper(string str);  // 生成新的对象
string  ucfirst(string str);  // 生成新的对象
string  ucwords(string str);  // 生成新的对象，整个字符串中以空格为分隔符的单词首字母大写。
*/


$str = "hello I have a dream.";
echo $str."<br>";
echo strtolower($str)."<br>";
echo strtoupper($str)."<br>";
echo ucfirst($str)."<br>";
echo ucwords($str)."<br>";
echo $str;


?>