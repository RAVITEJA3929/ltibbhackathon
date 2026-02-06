<?php

session_start();

$host = "mysqldb.cwjs6uyc4uf5.us-east-1.rds.amazonaws.com"; /* Host name */
$user = "admin"; /* User */
$password = "admin123"; /* Password */
$dbname = "customers"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
