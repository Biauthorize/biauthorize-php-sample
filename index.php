<?php
	include("head.php");
?>
	<h1>My <img src="http://static.php.net/www.php.net/images/php.gif"> Website</h1>
	<form action="authenticate.php" method="POST">
		<table cellspacing="2">
			<tr>
				<td style="width: 30%;">Username:</td>
				<td><input type="text" name="username" /></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="text" name="password" /></td>
			</tr>
			<tr>
				<td>Face:</td>
				<td style="padding-top: 8px; padding-bottom: 8px;">

					<?php
					//This is biauthorise code for your login form
					?>

					<script type="text/javascript" src="http://biauthorize.azurewebsites.net/facedetection/script.js" /></script>
					<script type="text/javascript">
						biauthorize("Check my face!");
					</script>

					<?php
					//Here ends the include
					?>

				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Login" /></td>
			</tr>
		</table>
<?php
	include("foot.php");
?>