<?php

$room=20;
function showrooms(){
    global  $room; # 
    echo $room."ssss"."<br>"; # 在函数内不能访问$room
    $room1 = $GLOBALS['room'];
     echo $room1."ssss"."<br>"; # 通过$GLOBALS数组进行访问全局变量
}

showrooms();
echo $room.'间房间。';
?>