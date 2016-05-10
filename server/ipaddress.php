<?php
	
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$server_ip = $_SERVER['SERVER_ADDR'] ;

	echo 'Client remote ip : '.$ip_address.'<br>';
	echo 'Server ip : '.$server_ip;

?>