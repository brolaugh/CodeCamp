<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Europe/Amsterdam");

define("DB_HOST", "");
define("DB_NAME", "");
define("DB_USER", "");
define("DB_PASS", "");

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$mysqli->set_charset("utf8");
if ($mysqli->connect_error) {
   	echo "Unable to connect to database";
    exit();
}
