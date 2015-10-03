<?php

	if(!session_id())
		session_start();
?>

<html>
	<head>
	</head>
	<body>
<?php
		if(isset($_SESSION['user']))
			echo 'You have logged in, your username is '.$_SESSION['user'];
		else
		{
			echo 'You haven\'t logged in, I\'ll help you login';
			$_SESSION['user'] = 'admin';
		}
?>
	</body>
</html>
