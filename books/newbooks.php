<?php
/**
 * Created by PhpStorm.
 * User: Anteny
 * Date: 3/7/2020
 * Time: 9:01 AM
 */
include('../helpers/dbConnect.php');
$title = 'New Books';

?>
<?php include_once '../head.php' ?>
<style>
    body {
        position: relative; /* required */
    }

    .list-group {
        position: sticky; /* Supported in latest version of Chrome, Firefox, Safari, Opera and Edge browsers */
        top: 15px;
    }
</style>
<script>
    jQuery(document).ready(function ($) {
        $(".clickable-row").click(function () {
            window.location = $(this).data("href");
        });

    });
</script>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
        <a href="<?= HOME ?>" class="navbar-brand">
            <img src="<?= HOME ?>images/logo.png" height="28" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="<?= HOME ?>" class="nav-item nav-link">Home</a>
                <?php bslink(HOME . 'books/', 'nav-item nav-link active', 'Books'); ?>
                <?php bslink(HOME . 'students/', 'nav-item nav-link', 'Students'); ?>
                <?php bslink(HOME . 'rents/', 'nav-item nav-link', 'Rents'); ?>
            </div>
            <form action="search.php" method="POST" class="form-inline ml-auto">
                <input type="text" class="form-control mr-sm-2" placeholder="Book Title..." name="q"
                       autocomplete="off">
                <button type="submit" class="btn btn-outline-light" name="search">Search</button>
                <div class="result"></div>
            </form>
        </div>
    </nav>
    <div class="mb-3"></div>
</div>

<?php include_once 'sidebar.php'; ?>

<?php
$query = mysqli_query($conn, "SELECT * FROM books ORDER BY ID DESC LIMIT 1, 10");
?>

<!--<div class="row" style="margin-left: 150px; margin-top: 10px">-->
<!--    --><?php
//    while ($row = mysqli_fetch_array($query)) {
//    ?>

<div class="col-sm-9" style="margin-left: 180px; margin-top: 10px">
    <div id="Fiction">
        <h2>New Books</h2>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Language</th>
                    <th>Total Copies</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_array($query)) { ?>
                <tr class="clickable-row" data-href="details.php?getbook=<?=$row['title']?>">
                    <td><?=$row['title']?></td>
                    <td><?=$row['author']?></td>
                    <td><?=$row['category']?></td>
                    <td><?=$row['language']?></td>
                    <td><?=$row['totalCopies']?></td>
                    <td><?=$row['price']?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
</div>

</body>
</html>

<!--<tr>-->
<!--    <td>2</td>-->
<!--    <td>John</td>-->
<!--    <td>Carter</td>-->
<!--    <td>johncarter@mail.com</td>-->
<!--    <td>Vestibulum consectetur scelerisque...</td>-->
<!--</tr>-->
<!--<tr>-->
<!--    <td>3</td>-->
<!--    <td>Peter</td>-->
<!--    <td>Parker</td>-->
<!--    <td>peterparker@mail.com</td>-->
<!--    <td>Integer pulvinar leo id risus...</td>-->
<!--</tr>-->
<!--<tr class="table-primary">-->
<!--    <td>1</td>-->
<!--    <td>Credit Card</td>-->
<!--    <td>04/07/2019</td>-->
<!--    <td>Waiting for statement</td>-->
<!--    <td>Waiting for statement</td>-->
<!--</tr>-->
<!--<tr class="table-secondary">-->
<!--    <td>2</td>-->
<!--    <td>Insurance</td>-->
<!--    <td>02/07/2019</td>-->
<!--    <td>Cancelled</td>-->
<!--    <td>Cancelled</td>-->
<!--</tr>-->
<!--<tr class="table-success">-->
<!--    <td>3</td>-->
<!--    <td>Water</td>-->
<!--    <td>01/07/2019</td>-->
<!--    <td>Paid</td>-->
<!--    <td>Paid</td>-->
<!--</tr>-->
<!--<tr class="table-info">-->
<!--    <td>4</td>-->
<!--    <td>Internet</td>-->
<!--    <td>05/07/2019</td>-->
<!--    <td>Change plan</td>-->
<!--    <td>Change plan</td>-->
<!--</tr>-->
<!--<tr class="table-warning">-->
<!--    <td>5</td>-->
<!--    <td>Electricity</td>-->
<!--    <td>03/07/2019</td>-->
<!--    <td>Pending</td>-->
<!--    <td>Pending</td>-->
<!--</tr>-->
<!--<tr class="table-danger">-->
<!--    <td>6</td>-->
<!--    <td>Telephone</td>-->
<!--    <td>06/07/2019</td>-->
<!--    <td>Due</td>-->
<!--    <td>Due</td>-->
<!--</tr>-->
<!--<tr class="table-active">-->
<!--    <td>7</td>-->
<!--    <td>DTH</td>-->
<!--    <td>04/07/2019</td>-->
<!--    <td>Deactivated</td>-->
<!--    <td>Deactivated</td>-->
<!--</tr>-->
<!--<tr class="table-light">-->
<!--    <td>8</td>-->
<!--    <td>Car Service</td>-->
<!--    <td>08/07/2019</td>-->
<!--    <td>Call in to confirm</td>-->
<!--    <td>Call in to confirm</td>-->
<!--</tr>-->
<!--<tr class="table-dark">-->
<!--    <td>9</td>-->
<!--    <td>Gas</td>-->
<!--    <td>06/07/2019</td>-->
<!--    <td>Payment failed</td>-->
<!--    <td>Payment failed</td>-->
<!--</tr>-->