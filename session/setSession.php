<?php
	if(!session_id())
		session_start();
	$_SESSION['user'] = 'admin';
