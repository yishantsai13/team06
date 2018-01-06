<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>刪票
    </title>
</head>
<body>
    
</body>
</html>

<?php
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">'; //網頁編碼宣告  

include("mysql_connect.php");
// include_once("do_delete_ticket.php");
$sql="select s_id,s_name,s_period,s_site,s_intro,s_num from sort;";
$result=mysqli_query($link,$sql);

echo "<body>";
	if (mysqli_num_rows($result) > 0) { //如果select的資料大於0筆,就輸出資料並含核取方塊checkbox(以便刪除)，還有確認送出紐，完成後POST到delete.php

	    echo '
	    <center><h1 >票務管理</h1></center>
	    <form method="POST" action="do_delete_ticket.php">
		   <table align="center";  width="1200" 
		    style="border-width:5px ; border-color:black; margin-top:180px ">
			   
				<tr>
					<th><label> 展覽名稱 </label></th>
					<th><label> 展覽期間 </label></th>
					<th><label> 地點 </label></th>
                    <th><label> 簡介 </label></th>
                    <th><label> 供票數量</label></th>
                    <th><label> 刪除</label></th>
				</tr>';

		while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <td>" . $row["s_name"]. "</td>
            <td>" . $row["s_period"]. "</td>
            <td>" . $row["s_site"]. "</td>
            <td>" . $row["s_intro"]. "</td>
            <td>" . $row["s_num"]. "</td>
            <td><input type='checkbox' name='checkbox[]' value='" . $row["s_id"] . "' /></td>
            </tr>";
            
	    }

	    echo "</table>";
	    echo '<div ><center><input type="submit" value="確認刪除" id="submit"/></center></div>';
	   	echo "</form>";
	} else {
	    echo "0 results";
	}
echo "</body>";
	mysqli_close($link);



?>