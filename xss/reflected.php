<html>
	<head>
	</head>
	<body>
		<?php if(!isset($_GET['user'])): ?>
			<form method="GET">
				username: <input type="text" name="user">
				<input type="submit">
			</form>
		<?php endif; ?>
		<?php if(isset($_GET['user'])) echo $_GET['user']; ?>
	</body>
</html>
