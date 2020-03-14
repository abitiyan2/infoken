<?php
/**
 * Created by PhpStorm.
 * User: Anteny
 * Date: 3/13/2020
 * Time: 6:36 PM
 */

session_start();
session_destroy();
header('Location: http://localhost/infoken/index.php');