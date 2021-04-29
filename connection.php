<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "youssef";
$dbname = "rvol";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

