<?php
include_once ("mysql_connect.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>藝文廣場</title>
</head>
<body>
<h2>後台管理</h2>    
<?php
			//使用 isset()方法，判別有沒有此變數可以使用，以及為已經登入
			if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE):
	  ?>

		<div class="result">
			<h2>你正在後台，登入成功</h2>
			
			<p>
				<a href='logout.php'>把我登出</a>
			</p>
		</div>

		<?php
			else:

				//使用php header 來轉址到後台
				header('Location: login.php');
			endif;
		?>

</body>
</html>