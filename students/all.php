<?php
/**
 * Created by PhpStorm.
 * User: Anteny
 * Date: 3/7/2020
 * Time: 9:01 AM
 */
include('../helpers/dbConnect.php');
$title = 'All Students';
//checking the page number and initiate
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}

//deciding number of items on a single page
$no_of_records_per_page = 12;
$offset = ($pageno - 1) * $no_of_records_per_page;

//How many number of page needed
$total_pages_sql = "SELECT COUNT(*) FROM students ";
$result = mysqli_query($conn, $total_pages_sql);
$numStudents = $total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

//$total_books = "SELECT SUM(totalCopies) FROM books ";
//$result = mysqli_query($conn, $total_books);
//$allBooks = mysqli_fetch_array($result)[0];
//
//$available_books = "SELECT SUM(totalCopies) - SUM(rented) FROM books ";
//$result = mysqli_query($conn, $available_books);
//$availableBooks = mysqli_fetch_array($result)[0];
//$allBooks = mysqli_fetch_row($result);
//$total_pages = ceil($total_rows / $no_of_records_per_page);

//$total_copies_sql = "SELECT SUM (totalCopies) FROM books ";
//$res = mysqli_query($conn, $total_copies_sql);
//$allBooks = mysqli_fetch_array($res)[0];


//if (isset($_GET['booktitle'])) echo '<br><br><div class="display-4">I have done here: '.$_GET['booktitle'].'</div>';

?>
<?php include_once '../head.php' ?>
<script>
    $(document).ready(function () {
        $("#myModal").modal('show');
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
                <?php bslink(HOME . 'books/', 'nav-item nav-link', 'Books'); ?>
                <?php bslink(HOME . 'students/', 'nav-item nav-link active', 'Students'); ?>
                <?php bslink(HOME . 'rents/', 'nav-item nav-link', 'Rents'); ?>
            </div>
            <form action="search.php" method="POST" class="form-inline ml-auto">
                <input type="text" class="form-control mr-sm-2" placeholder="Student ID..." name="q"
                       autocomplete="off">
                <button type="submit" class="btn btn-outline-light" name="search">Search</button>
                <div class="result"></div>
            </form>
        </div>
    </nav>
    <div class="mb-3"></div>
</div>

<?php include_once 'sidebar.php'; ?>
<!--<h1 class="display-4" style="margin-left: 200px; margin-top: 41px">All Books (--><?//=$allBooks?><!--) Available (--><?//= $availableBooks ?><!--) Distinct (--><?//= $numBooks ?><!--)</h1>-->
<div class="cotainer justify-content-end" style="margin-left: 170px; margin-top: 41px">
    <div class="alert alert-warning alert-dismissible fade show" style="width: 1020px">
        <strong> All Students</strong>(<?=$numStudents?>)
        <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
</div>

<?php
$query = mysqli_query($conn, "SELECT * FROM students LIMIT $offset, $no_of_records_per_page");
?>

<div class="row" style="margin-left: 150px; margin-top: 10px">
    <?php
    while ($row = mysqli_fetch_array($query)) {
        ?>
        <form action="details.php" method="post">
            <div class="col-md-6 col-lg-4 col-xl-3 m-2">
                <div class="card" style="width: 220px;">
                    <?php $row["sex"] = 'Male'?$defPro='../images/maleAvater.png':$defPro='../images/femaleAvater.png';?>
                    <img src="<?= $row["profilePic"] != '' ? $row["profilePic"]:$defPro; ?>"
                         class="card-img-top" alt="..." style="height: 218px;">
                    <div class="card-body text-center">
                        <h6 class="card-title"><?= $row["STID"] ?></h6>
                        <!--                            --><?php //echo '<h3>'.$row["title"].'<span class="badge badge-primary">'.($row["totalCopies"] - $row["rented"]).'</span></h3>';?>
                        <p class="card-text"><b><?= $row["fName"].' '.$row["lName"] ?></b></p>
                        <input type="text" hidden name="STID" value="<?= $row["STID"] ?>">
                        <input type="submit" value="Details" class="btn-primary btn-block stretched-link"
                               name="details">
                        <?php
                        if ($row['rented'] == 0) {
                            echo '<input type="submit" value="Rent" class="btn-primary btn-block stretched-link" name="renting">';
                        } else {
                            echo '<div class="btn-warning btn-block" >Rented a Book</div>';
                        }
                        ?>
                        <!--                            <a href="details.php" type="submit" class="btn btn-primary stretched-link">View Profile</a>-->
                    </div>
                </div>
            </div>
        </form>
        <?php
    }
    ?>

</div>
<div class="container">
    <hr>
    <ul class="pagination justify-content-center">
        <li class="page-item m-3"><a href="?pageno=1">First</a></li>
        <li class="page-item m-3 <?php if ($pageno <= 1) {
            echo 'disabled';
        } ?>">
            <a href="<?php if ($pageno <= 1) {
                echo '#';
            } else {
                echo "?pageno=" . ($pageno - 1);
            } ?>">Prev</a>
        </li>
        <li class="page-item m-3 <?php if ($pageno >= $total_pages) {
            echo 'disabled';
        } ?>">
            <a href="<?php if ($pageno >= $total_pages) {
                echo '#';
            } else {
                echo "?pageno=" . ($pageno + 1);
            } ?>">Next</a>
        </li>
        <li class="page-item m-3"><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
</div>

</body>
</html>
