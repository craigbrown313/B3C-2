<?php
ob_start(); // Turns on output buffering
session_start();

date_default_timezone_set("Europe/London");

try {
    $con = new PDO("mysql:dbname=B3C;host=mysql://b23042a38900ed:da3b2005@us-cdbr-iron-east-01.cleardb.net/heroku_81eef3d874c129c?reconnect=truelocalhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage());
}
?>
