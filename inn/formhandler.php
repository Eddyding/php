<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD> <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/> 你的订房信息：</HEAD>
<BODY>

<?php
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$customername = trim($_POST['customername']);

$gender = $_POST['gender'];
$arrivaltime = $_POST['arrivaltime'];

$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$info = trim($_POST['info']);


/*
// 正则有问题。
if(    !ereg( '^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9_\-\.]+$',$email)  ) {

        echo "这不是一个有效的 email地址，请返回上页重试";
        exit;
}
*/
/*
if(    !eregi('^[0-9]$', $phone)   and  strlen($phone) <= 4  or strlen($phone)  >= 15) {
        echo "这不是一个有效的 电话号码，请返回上页重试";
        exit;
}
*/
if($gender  == 'm'){
        $customer = "先生";
        }else
        {
                  $customer = "女士";
}

        echo '<p> 你的订房信息已经上传，，我们正在为您准备房间...确认你的订房信息如下：<p>';
        echo  $customername."\t".$customer.'将会在 '.$arrivaltime.'  天后到达。你的电话为'.$phone." 。我们将会发一封电子邮件到你的email邮箱： ".$email.
        "<br><br>另外，我们已经确认了你的其他要求如下：<br><br>";
       #  echo nl2br($info);  
          echo   $info;  
        echo "<p> 你的订房时间为：".date('Y m d H: i: s')."<p>";
?>
</BODY>
</html>


