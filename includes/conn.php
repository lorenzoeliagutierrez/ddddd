<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "enrollment";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enrollmentbac";

$db = new mysqli($servername, $username, $password, $dbname) or die($db->error);