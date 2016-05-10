<?php
	// @ means stop showing browser errors
	@mysql_connect('localhost','alexz','') || die('Could not connect to database.');

	echo 'connected!';

?>