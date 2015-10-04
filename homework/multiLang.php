<?php

	function defaultLang(){
		return (strstr($_SERVER['HTTP_ACCEPT_LANGUAGE'], ',', true));
	}

	//The flag is W3LC0M3_T0_J01N_1NTO_TD0H
	if(!isset($_GET['lang']))
		$_GET['lang'] = defaultLang();
	else if($_GET['lang'] == '')
		$_GET['lang'] = defaultLang();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf8">
		<title>:P</title>
	</head>
	<body>
		<p>
			<?php include 'lang/'.$_GET['lang']; ?>
		</p>
		<p>
			<a href="/multiLang.php?lang=zh-TW">繁體中文<br /></a>
			<a href="/multiLang.php?lang=zh-CN">简体中文<br /></a>
			<a href="/multiLang.php?lang=en">English<br /></a>
		</p>
	</body>
</html>
