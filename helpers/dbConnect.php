<?php
/**
 * Created by PhpStorm.
 * User: Anteny
 * Date: 3/9/2020
 * Time: 8:30 PM
 */

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "infokendb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>