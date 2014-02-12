<html>
<body>

<h1>Hello!</h1>

<?php

/*
// Create connection
$con=mysqli_connect("96.127.137.147","parkstar_anarain","86lagom68","parkstar_anarain");

// Check connection
if (mysqli_connect_errno())
{
	echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() . "</h1>";
}
else 
{
	echo "<h1>Success!</h1>";
}
*/

// Enter username and password
$username = root;
$password = root;
try {
	// Create database connection using PHP Data Object (PDO)
	$db = new PDO("mysql:host=96.127.137.147;dbname=parkstar_narain", $username, $password);
	// Identify name of table within database
	$table = 'thetest';
	// Create the query - here we grab everything from the table
	$stmt = $db->query('SELECT * from '.$table);
	// Close connection to database
	$db = NULL;
	while($rows = $stmt->fetch()){echo "<tr><td>". $rows['id'] . "</td><td>" . $rows['name'] . "</td></tr>";
	};}
catch (PDOException $e) {    
	print "Error!: " . $e->getMessage() . "<br/>";
    die();
} 
?>

</body>
</html>