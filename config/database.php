<?php
define("DB_HOST", "localhost");
define("DB_USER", "willson");
define("DB_PASSWORD", "phpadmin");
define("DB_NAME", "php_dev");

// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// check connection
// if there is an error, just cut everything off
if ($conn->connect_error) {
   die("Connection Failed" . $conn->connect_error);
}

// echo 'Connected Successfully';
