<?php

function  swichroom($members){
        switch ($members){
  case  1: echo  "欢迎来到goodhome. 我们为你准备单间房。"."<br>"; 
  break;
  case  2:  echo "欢迎来到goodhome. 我们为你准备标准间。"."<br>";
  break;
  case  3: echo "欢迎来到goodhome. 我们为你准备三床房。"."<br>"; 
  break;
  default :  echo "电话联系。"."<br>"; 
  break;
        }
}
swichroom(1);
swichroom(2);
swichroom(3);
swichroom(5);
?>

