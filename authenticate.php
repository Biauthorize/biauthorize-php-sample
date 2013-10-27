<?php

	include("head.php");

	//Check Face Token
	if (isset($_POST['biauth_token'])) {
		echo "Your face is approved!<br/>";
	} else {
		echo "Your face is <b>not</b> approved!<br/>";
	}
	
	if ($_POST['username'] == "Username") {
		echo "Your username is approved!<br/>";
	} else {
		echo "Your username is <b>not</b> approved!<br/>";
	}

	if ($_POST['password'] == "Password") {
		echo "Your password is approved!<br/>";
	} else {
		echo "Your password is <b>not</b> approved!<br/>";
	}

	include("head.php");

?>
