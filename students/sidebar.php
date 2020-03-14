<?php
/**
 * Created by PhpStorm.
 * User: Anteny
 * Date: 3/11/2020
 * Time: 3:33 PM
 */
?>

<div class="btn-group-vertical mr-2 float-left"
     style="margin: 16px 20px 0px 10px; min-width: 150px; position: fixed">
    <h4>Students</h4>
    <?php bslink(HOME . 'students/register.php', 'btn btn-info mb-2', 'Register'); ?>
    <?php bslink(HOME . 'students/all.php', 'btn btn-info mb-2', 'All Students'); ?>
    <?php bslink(HOME . 'students/newbooks.php', 'btn btn-info mb-2', 'New Books'); ?>
    <?php bslink(HOME . 'students/mostrent.php', 'btn btn-info mb-2', 'Top Renters'); ?>
    <div class="btn-group">
        <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Departments</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="categories.php?cat=Fiction">Fiction</a>
            <a class="dropdown-item" href="categories.php?cat=History">History</a>
            <a class="dropdown-item" href="categories.php?cat=Novel">Novel</a>
            <a class="dropdown-item" href="categories.php?cat=Poem">Poem</a>
            <a class="dropdown-item" href="categories.php?cat=Weg">Weg</a>
            <a class="dropdown-item" href="categories.php?cat=Philosophy">Philosophy</a>
            <a class="dropdown-item" href="categories.php?cat=Other">Other</a>
        </div>
    </div>
</div>
