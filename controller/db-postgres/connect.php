<?php

$hostname = "localhost";
$dbname = "ronjakoch_products";
$username = "ronjakoch_products";
$password = "1234Passwort";

$db_conn = pg_connect("host = $hostname dbname= $dbname user= $username password= $password");

?>