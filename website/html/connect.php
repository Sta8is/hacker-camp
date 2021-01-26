<?php
error_reporting(E_ALL); ini_set('display_errors', '1');
$host = "kappa";
$db_user = "kappa";
$db_passwd = "kapp";
$db_name = "kappa";

// Enter your Host, username, password, database below.
$con = mysqli_connect($host, $db_user, $db_passwd, $db_name);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
