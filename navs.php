<?php
/**
 * Created by PhpStorm.
 * User: Anteny
 * Date: 3/7/2020
 * Time: 9:07 AM
 */

include_once 'helpers/constants.php';
include_once 'helpers/write.php'

?>

<div class="container">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a href="<?=HOME?>" class="navbar-brand">
            <img src="<?=HOME?>images/logo.png" height="28" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="<?=HOME?>" class="nav-item nav-link">Home</a>
                <a href="<?=HOME?>books/" class="nav-item nav-link">Books</a>
                <a href="<?=HOME?>students/" class="nav-item nav-link">Students</a>
                <a href="<?=HOME?>rents/" class="nav-item nav-link">Rents</a>
            </div>
            <form class="form-inline ml-auto">
                <input type="text" class="form-control mr-sm-2" placeholder="Search">
                <button type="submit" class="btn btn-outline-light">Search</button>
            </form>
        </div>
    </nav>
</div>
