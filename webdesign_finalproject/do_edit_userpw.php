<?php
include 'mysql_connect.php';
session_start();
$username=$_POST['username'];
$e_pw2=$_POST['e_pw2'];
$sql="update user set pw=$e_pw2 where username=$username; ";
echo '<br>重新修改使用者密碼<br>';

$result=mysqli_query($link,$sql);  

if(isset($e_pw2)){

    if($result){
      echo "成功修改密碼";
     

    }else{
    echo "錯誤:".$add_sql."<br>".$link->error;
    }
}
else{
echo "所設定的密碼不存在";
}









?>