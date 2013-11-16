<?php
//Is our user authorized to view this page?
//If he is, it's fair game for him to be allowed in.
//Otherwise, kick him right back to the login page!
session_start();
require_once(connectvars.php);
$table_name = portfolio_contacts;
if (!session_is_registered(username)) {
	header("location:login.php");
}
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Houraisan Softworks | Super Secret Webpage</title>
	</head>
	<body>
		<p>If you're here, it means you quite possibly belong here.</p>
		<br />
		<p>Please forgive me for the barebones look of this page. It's completely hidden from the public eye if that helps my case!</p>
		<p>
							Want to log out? Click <a href="logout.php">here</a>.
						</p>

	</body>
	
</html>
