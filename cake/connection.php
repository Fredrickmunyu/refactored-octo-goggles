<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "marvel"; 

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	
	 die("failed to connect!");

}