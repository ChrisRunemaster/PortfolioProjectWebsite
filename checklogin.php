<?php
//Database things here!
require_once(connectvars.php);
//We might need the table name as well.
$table_name = portfolio_user;
//Let's connect to the database...
mysqli_connect('$DB_HOST', '$DB_USER', '$DB_PASSWORD');
//Select the table we will validate the login with. If we can't connect, we'll shoot out an error message.
mysqli_select_db('$DB_NAME') or die("Can't select the Database.");

//Let's grab the values from our form, specifically our password.
//Make a call to the super global array 'POST' in order to grab the values from the form
//with the associated IDs.

$username = $_POST['username'];
$password = $_POST['password'];

//Some security to prevent SQL Injection.
//This will trim all white space and put escape strings against SQL 'command keys'.
$username = trim(mysqli_real_escape_string($username));
$password = trim(mysqli_real_escape_string($password));

//Building our query, note the SHA1(). The password is encrypted, so we have to compare the two somehow!
//We will then store this query into a result variable.
$sql = "SELECT * FROM $table_name WHERE username = '$username' AND password = SHA1('$password')";
$result = mysql_query($sql);

//We're going to count the results...
$count = mysql_num_rows($result);

//Compare the number of rows. There should only be 1, because there is only 1 admin!
if($count == 1)
{
		//Success! Let's register these to the session so the server knows who you are.
		//This is some handy-dandy session code I found. It'll help for when we want to log out.
		session_register("username");
		session_register("password");
		//Redirect to the login page to display the sensitive data. Lazy solution? Yes.
		//The data isn't that special!
		header("location:loginsuccess.php");
		
	
}
else {
	echo"You have entered the wrong username or password. Please try again.";
}
	 

?>