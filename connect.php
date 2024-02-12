<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$database = "crudoperation";

$con = new mysqli($serverName, $userName, $password, $database);

if (!$con) {
    die(mysqli_error($con));
}
