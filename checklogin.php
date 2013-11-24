<?php
session_start();
//Database things here!
require_once("connectvars.php");
//We might need the table name as well.
$table_name = portfolio_user;
//Let's connect to the database...
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//Select the table we will validate the login with. If we can't connect, we'll shoot out an error message.
//mysqli_select_db("$DB_NAME") or die("Can't select the Database.");

//Let's grab the values from our form, specifically our password.
//Make a call to the super global array 'POST' in order to grab the values from the form
//with the associated IDs.

$username = $_POST['username'];
$password = SHA1($_POST['password']);

//Some security to prevent SQL Injection.
//This will trim all white space and put escape strings against SQL 'command keys'.
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($dbc,$username);
$password = mysqli_real_escape_string($dbc,$password);

//Building our query, note the SHA1(). The password is encrypted, so we have to compare the two somehow!
//We will then store this query into a result variable.
$sql = "SELECT id FROM portfolio_user WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($dbc,$sql) or die("Cannot query Database.");

//We're going to count the results...
$count = mysqli_num_rows($result);

//Compare the number of rows. There should only be 1, because there is only 1 admin!
if($count == 1)
{
		//Success! Let's register these to the session so the server knows who you are.
		//This is some handy-dandy session code I found. It'll help for when we want to log out.
	while ($row = mysqli_fetch_array($result)) {
	
		//access the existing session created by the web server
		session_start(); 
		
		//store the user id in the session object
		$_SESSION['user_id'] = $row['id'];
		//Redirect to the login page to display the sensitive data. Lazy solution? Yes.
		//The data isn't that special!
		header("location:loginsuccess.php");
	}
		
	
}
else {
	echo"You have entered the wrong username or password. Please try again.";
}

mysqli_close($dbc);
?>