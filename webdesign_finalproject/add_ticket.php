<?php
include_once("mysql_connect.php");

?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>藝文廣場</title>
</head>
<body>
  <h2>新增票</h2>
  <form method="POST" action="do_add_ticket.php">
  <label >票場名稱:</label>
  <input type="text" style="width:200px;" name="s_name" autocomplete="off" required></input>
  <br>
  <label >展期:</label>
  <input type="text" style="width:200px;"  name="s_period"  autocomplete="off" required></input>
  <br>
  <label >地點:</label>
  <input type="text" style="width:200px;" name="s_site"  autocomplete="off" required></input>
  <br>
  <label >展覽簡介:</label> 
  <input type="text" style="width:200px;" name="s_intro"  autocomplete="off" required ></input>
  <br>
  <label >供票張數</label>
  <input type="text" style="width:200px;"  name="s_num"  autocomplete="off"></input>
  <br>
 <input type="submit" value="add"></input>
  </form>
 
</body>
</html>

