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
    <h4>Books</h4>
    <?php bslink(HOME . 'books/register.php', 'btn btn-info mb-2', 'Register'); ?>
    <?php bslink(HOME . 'books/all.php', 'btn btn-info mb-2', 'All Books'); ?>
    <?php bslink(HOME . 'books/newbooks.php', 'btn btn-info mb-2', 'New Books'); ?>
    <?php bslink(HOME . 'books/mostrent.php', 'btn btn-info mb-2', 'Most Rented'); ?>
    <div class="btn-group">
        <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Categories</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="categories.php?cat=Fiction">Fiction</a>
            <a class="dropdown-item" href="categories.php?cat=History">History</a>
            <a class="dropdown-item" href="categories.php?cat=Novel">Novel</a>
            <a class="dropdown-item" href="categories.php?cat=Poem">Poem</a>
            <a class="dropdown-item" href="categories.php?cat=Weg">Weg</a>
            <a class="dropdown-item" href="categories.php?cat=Philosophy">Philosophy</a>
            <a class="dropdown-item" href="categories.php?cat=Psychology">Psychology</a>
            <a class="dropdown-item" href="categories.php?cat=Other">Other</a>
        </div>
    </div>
</div>
