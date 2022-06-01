
<?php

$hostname = "sql6.freesqldatabase.com";
$username = "sql6496781";
$password = "gQpcw3uhGY";
$dbname = "sql6496781";

$dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die("could not connect to database, ERROR: ".mysqli_connect_error());

mysqli_set_charset($dbc, "utf8");

?>
