<?php
/**
 * Created by PhpStorm.
 * User: Anteny
 * Date: 3/8/2020
 * Time: 11:20 AM
 */

$title = 'Book Details';

include_once '../head.php';


?>

<?php include_once '../head.php' ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('.search-box input[type="text"]').on("keyup input", function () {
            /* Get input value on change */
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if (inputVal.length) {
                $.get("titles.php", {term: inputVal}).done(function (data) {
                    // Display the returned data in browser
                    resultDropdown.html(data);
                });
            } else {
                resultDropdown.empty();
            }
        });

        // Set search input value on click of result item
        $(document).on("click", ".result p", function () {
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });
</script>

<style>
    body {
        position: relative; /* required */
    }

    .list-group {
        position: sticky; /* Supported in latest version of Chrome, Firefox, Safari, Opera and Edge browsers */
        top: 15px;
    }
</style>

</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
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

<?php include_once 'sidebar.php' ?>

<div class="container float-right">
    <div class="mt-5"></div>
    <?php
    //    if (isset($_POST['booktitle'])) echo '<br><br><div class="display-4">I have done here: ' . $_POST['booktitle'] . '</div>';
    //    if (isset($_POST['details'])) echo '<br><br><div class="display-6">Details only: ' . $_POST['booktitle'] . '</div>';
    //    if (isset($_POST['renting'])) echo '<br><br><div>Rent to: <input type="text" name="" id=""></div>';
    if (isset($_GET['getbook'])){
        $booktitle = $_GET['getbook'];
    }elseif ($_POST['booktitle'] !='') {
        $booktitle = $_POST['booktitle'];
    }
        include_once '../helpers/dbConnect.php';
        $query = mysqli_query($conn, "SELECT * FROM books WHERE title = '" . $booktitle . "'");
        while ($row = mysqli_fetch_array($query)) {
            ;
            ?>

            <div class="row no-gutters">
                <div class="col-md-5" style="background: #868e96;">
                    <img src="<?= $row["coverImg"] != '' ? $row["coverImg"] : 'upload/bookcover.png'; ?>"
                         class="card-img-top h-100" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title display-4 ml-4"><?= $row['title'] ?></h5>
                        <dl class="row ml-3">
                            <dt class="col-sm-3">Autor</dt>
                            <dd class="col-sm-9"><?= $row['author'] ?></dd>
                            <dt class="col-sm-3">ISBN</dt>
                            <dd class="col-sm-9"><?= $row['ISBN'] ?></dd>
                            <dt class="col-sm-3">Category</dt>
                            <dd class="col-sm-9"><?= $row['category'] ?></dd>
                            <dt class="col-sm-3">Language</dt>
                            <dd class="col-sm-9"><?= $row['language'] ?></dd>
                            <dt class="col-sm-3">Total Copies</dt>
                            <dd class="col-sm-9"><?= $row['totalCopies'] ?></dd>
                            <dt class="col-sm-3">Rented</dt>
                            <dd class="col-sm-9"><?= $row['rented'] ?></dd>
                            <dt class="col-sm-3">Price</dt>
                            <dd class="col-sm-9"><?= $row['price'] ?> Birr</dd>
                        </dl>
                        <a href="#" class="btn btn-primary stretched-link ml-5">View Profile</a>
                    </div>
                </div>
            </div>
        <?php }
//        mysqli_close($conn);
        $conn->close();

    ?>
</div>

</body>
</html>

