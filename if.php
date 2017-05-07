<?php
#$members = null;

function checkmembersforroom ($members) {
        if($members <1 ){ echo "我们不能为少于１个人的顾客提供房间。"."<br>";}
        else if($members ==1 ){ echo "欢迎来到goodhome. 我们为你准备单间房。"."<br>";}
        else if($members ==2 ){ echo "欢迎来到goodhome. 我们为你准备标准间。"."<br>";}
        else if($members ==3){ echo "欢迎来到goodhome. 我们为你准备三床房。"."<br>";}
        else  echo "电话联系。"."<br>";
}

checkmembersforroom(0.7);
checkmembersforroom(1);
checkmembersforroom(2);
checkmembersforroom(3);        
checkmembersforroom(5);


echo "<br>";

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


$bookedrooms=array('102','202','203','303','307');
for($i = 0; $i < 5;  $i++)
        echo  $bookedrooms[$i]."<br>";

function checkbookedroom_while($bookedrooms){
  $i=0;
  while(isset($bookedrooms[$i])){  # isset???
                echo $i.":".$bookedrooms[$i]."<br>";
                $i++;
          }
}
checkbookedroom_while($bookedrooms);


$i=0;
do{
        echo $i."-".$bookedrooms[$i]."<br>";
        $i++;
        }while($i < 2);







?>
