<?php
	function message($input)
	{
		echo 'Hello!!';
		echo  $input;
	}

	// message();
?>
<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
 <html>
 	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
 		<title>PHP基礎</title>
 	</head>
 	<body>
 		<form action="" method="post">
 			<input name="moji" type="text"/>
 			<input name="sousin" type="submit" value="送信"/>
 		</form>


 		<?php
 			$input = $_POST['moji'];

 			message($input);
 		?>
 	</body>
 </html>