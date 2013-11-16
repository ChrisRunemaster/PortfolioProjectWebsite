<?php
//Is our user authorized to view this page?
//If he is, it's fair game for him to be allowed in.
//Otherwise, kick him right back to the login page!
session_start();

if (!session_is_registered(username)) {
	header("location:login.php");
}
require_once(connectvars.php);
$table_name = portfolio_contacts;
$dbc = mysqli_connect("$DB_HOST","$DB_USER",
            "$DB_PASSWORD");
mysqli_select_db('$DB_NAME') or die("Can't select the Database.");
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
						
						    
    {
    	<?php
    	//Creating a query to send to the database.
    	$myQuery = "select * from $table_name order by id";
    	
		//Execute the command.
		$results = mysqli_query($dbc, $myQuery);
		
    	//No CRUD functionality here, we're just iterating things from database.
    	while ($row = mysqli_fetch_array($results))
        
       echo "<p>"."ID:".$row['id']." ".$row['name']." "."mailto:".$row['email']."tel:".$row['phone'].
        "</p>";
		
		mysqli_close($dbc);
		
		?>

    }

	</body>
	
</html>
