<?php

require 'connect.inc.php';
require 'core.inc.php';

if(logged_in())
{
	echo 'You\'re Logged in <a href="logout.php">Log out</a>';
}
else
{
	include 'login.inc.php';
}

?>