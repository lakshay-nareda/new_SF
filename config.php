<?php
$config['hostname'] = "localhost";
$config['user'] = "root";
$config['password'] = "";
$config['dbname'] = "db";

$con = new mysqli($config["hostname"], $config["user"], $config["password"], $config["dbname"]);

if ($con->connect_error) {
    die("" . $con->connect_error);
}
