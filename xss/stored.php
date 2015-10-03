<?php
	if(!session_id())
		session_start();
	if(isset($_POST['user'])) $_SESSION['user'] = $_POST['user'];
?>

<html>
	<head>
	</head>
	<body>
<?php if(isset($_SESSION['user'])) echo $_SESSION['user']; ?>
<?php if(!isset($_POST['user'])): ?>
	<form method="POST">
		<input type="text" name="user">
		<input type="submit">
	</form>
<?php endif; ?>
	</body>
</html>
