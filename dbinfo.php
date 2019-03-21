<?php

$dbPassword = "allwingaru";
$dbUserName = "training";
$dbServer = "localhost";
$dbName = "ramya";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

?>