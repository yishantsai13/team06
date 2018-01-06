
<?php
include 'mysql_connect.php';

echo '
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改使用者密碼/忘記密碼</title>
</head>
<body>
    
 <form method="POST" action="do_edit_userpw.php">
       <label for="">帳號</label>
       <input type="text" style="width:200px;"  name="username"  autocomplete="off"></input>
       <br>
       <label for="">修改密碼</label>
       <input type="text" style="width:200px;"  name="e_pw1"  autocomplete="off"></input>
       <br>
       <label for="">請再確認一次密碼</label>
       <input type="text" style="width:200px;"  name="e_pw2"  autocomplete="off"></input>
       <br>
       <label for="">我不是機器人</label>
       <input type="submit" value="送出"></input>
</form>
</body>
</html>
';
?>