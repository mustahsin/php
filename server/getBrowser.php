<?php
	
	echo $agent = $_SERVER['HTTP_USER_AGENT'].'<br>';
	$browser_content = get_browser(null,true);

	//print_r($browser);

	$browser = strtolower($browser_content['browser']);

	if($browser!= 'chrome')
	{
		header('Location: http://www.google.com');
	}
	else
	{
		echo 'You are using '.$browser.'<br>'.'Welcome!';
	}

?>
