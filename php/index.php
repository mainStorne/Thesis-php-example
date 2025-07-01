<html>

<body>
    <div>Hello!</div>
</body>

</html>


<?php
echo "Hi, I'm a PHP script!";
$mysqli = new mysqli('thesis.com', 'admin', 'vFaWi722cKdlA8PeXuyAYoEYzEI', 'admin_N3w');

if (!$mysqli) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made!" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($mysqli) . PHP_EOL;
/* Create table doesn't return a resultset */
$mysqli->query("SELECT 1");

$mysqli->query("CREATE TABLE Persons (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);");
printf("Table myCity successfully created.\n");

/* Select queries return a resultset */
$result = $mysqli->query("SELECT Address FROM Persons LIMIT 10");
printf("Select returned %d rows.\n", $result->num_rows);

/* If we have to retrieve large amount of data we use MYSQLI_USE_RESULT */
$result = $mysqli->query("SELECT * FROM Persons", MYSQLI_USE_RESULT);

?>