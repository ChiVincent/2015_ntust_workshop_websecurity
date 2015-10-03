<html>
	<head>
	</head>
	<body>
		<a href="/?page=about.php">About</a>
		<a href="/?page=info.php">Info</a>
		<?php include(isset($_GET['page'])?$_GET['page']:"about.php"); ?>
	</body>
</html>
