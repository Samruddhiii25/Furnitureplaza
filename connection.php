<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "furnitureplaza_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
  die("Failed to Connect!");
}