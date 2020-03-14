<?php
/**
 * Created by PhpStorm.
 * User: Anteny
 * Date: 3/13/2020
 * Time: 5:09 PM
 */

include_once '../helpers/dbConnect.php';

$user = $_POST['username'];
$password = $_POST['password'];

$userSql = "SELECT * FROM members WHERE username = '$user' AND password = '$password'";
$result = mysqli_query($conn, $userSql);
if (mysqli_num_rows($result)==0) {
    header('Location: http://localhost/infoken/index.php?user=0');
} else {
    session_start();
    $row = mysqli_fetch_array($result);
    $row['admin'] == 1? $loggedUser = 'admin': $loggedUser = 'member';
    if( !isset( $_SESSION['logged'] ) ) {
        $_SESSION['loggedUser'] = $loggedUser;
        header('Location: http://localhost/infoken/');
    }else {
        $_SESSION['loggedUser'] = 'guest';
        header('Location: http://localhost/infoken/');
    }
}
