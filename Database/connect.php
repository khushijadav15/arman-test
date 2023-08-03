<?php
$dbuser="root";
$dbpass="";
$host="localhost";
$db="arman";

$con = new mysqli($host,$dbuser, $dbpass, $db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


?>