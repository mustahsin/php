<?php
	
	$user_ip = $_SERVER['REMOTE_ADDR'];

	function echoip()
	{
		global $user_ip;
		echo $msg = 'Your ip address is : '.$user_ip;
	}

	echoip();

?>