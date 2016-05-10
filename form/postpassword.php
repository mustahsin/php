<?php
	$help_message = 'Password should contain atleast one Capital letter and one number!!';
	if(isset($_POST['password']))
	{
		$u_password = $_POST['password'];
		if(!empty($u_password))
		{	

			if (preg_match('/[A-Za-z]/', $u_password) && preg_match('/[0-9]/', $u_password))  //checking for letter and number
			{
				$lowercase = strtolower($u_password);

				if($lowercase == $u_password) echo $help_message;
				else
				{
					echo 'You have set your password '. '<strong>'.$u_password.'</strong>';
				}
			}
			else echo $help_message;
		}
		else echo 'Enter Password !!! ';
	}
?>

<form action="post.php" method="POST">
	Password:<br>
	<input type="password" name="password"><br><br>
	<input type="submit" value="Submit">

</form>
