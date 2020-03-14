<?php
/**
 * Created by PhpStorm.
 * User: Anteny
 * Date: 3/8/2020
 * Time: 11:22 AM
 */
?>

<?php
//connect to database mysql_connect('servername','username','password')
//$server = mysql_connect('localhost','root','');
$dbConnect = mysqli_connect('localhost', 'root', '','infokendb');

if (!$dbConnect) die("Cannot connect to database" . mysqli_error());


?>

