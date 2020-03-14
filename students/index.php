<?php
/**
 * Created by PhpStorm.
 * User: Anteny
 * Date: 3/7/2020
 * Time: 9:01 AM
 */

$title = 'Students';

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
    .dropdown-item:focus, .dropdown-item:hover{
        background-color: rgba(0,123,255,.25);
    }

    .list-group {
        position: sticky; /* Supported in latest version of Chrome, Firefox, Safari, Opera and Edge browsers */
        top: 15px;
    }

    .search-box {
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }

    .search-box input[type="text"] {
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }

    .result {
        position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
        margin-top: 10px;
    }

    .search-box input[type="text"], .result {
        width: 100%;
        box-sizing: border-box;
    }

    /* Formatting result items */
    .result p {
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }

    .result p:hover {
        background: rgba(0,123,255,.5);
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
            <form action="" method="POST" class="form-inline ml-auto">
                <div class="search-box">
                    <input type="text" style="width: 200px; height: 34px" placeholder="Student ID..." name="STID" autocomplete="off">
                    <input type="submit" class="btn btn-outline-light" name="search" value="Search">
                    <div class="result"></div>
                </div>
            </form>
        </div>
    </nav>
    <div class="mb-3"></div>
</div>

<?php include_once 'sidebar.php' ?>

<form action="" method="post">
    <div class="search-box" style="margin: 50px 30px 50px" ; hidden>
        <input type="text" autocomplete="off" placeholder="Student ID..." name="STID" hidden/>
        <div class="result"></div>
        <input type="submit" value="Details" name="search" hidden>
    </div>
</form>

<div class="container float-right">
    <div class="mt-5"></div>
    <?php
    if (isset($_POST['search']) && $_POST['STID']=='') {
        ?>
        <div class="cotainer col-md-6" style="margin: 150px 30px 50px 88px;">
            <div class="alert alert-warning alert-dismissible fade show" style="width: 800px">
                <strong>Warning!</strong> Before you search please try to type a <a href="#" class="alert-link">title of a
                    book</a>.
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        </div>
        <?php
    } else {
        isset($_POST['STID']) ? $stid = $_POST['STID'] : $stid = '';
        include_once '../helpers/dbConnect.php';
        $query = mysqli_query($conn, "SELECT * FROM students WHERE STID = '" . $stid . "'");
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="row no-gutters">
                <div class="col-md-5" style="background: #868e96;">
                    <img src="<?= $row["profilePic"] != '' ? $row["profilePic"] : '../images/avater.svg'; ?>"
                         class="card-img-top h-100" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title display-4 ml-4"><?= $row['STID'] ?></h5>
                        <dl class="row ml-3">
                            <dt class="col-sm-3">Name</dt>
                            <dd class="col-sm-9"><?= $row['fName'].' '.$row['lName'] ?></dd>
                            <dt class="col-sm-3">Department</dt>
                            <dd class="col-sm-9"><?= $row['dept'] ?></dd>
                            <dt class="col-sm-3">Sex</dt>
                            <dd class="col-sm-9"><?= $row['sex'] ?></dd>
                            <dt class="col-sm-3">Block Number</dt>
                            <dd class="col-sm-9"><?= $row['blockNum'] ?></dd>
                            <dt class="col-sm-3">Dorm Number</dt>
                            <dd class="col-sm-9"><?= $row['dormNum'] ?></dd>
                            <dt class="col-sm-3">Rented</dt>
                            <dd class="col-sm-9"><?= $row['rented']==1?'YES':'NO'; ?></dd>
                            <dt class="col-sm-3">Number of Rents</dt>
                            <dd class="col-sm-9"><?= $row['numRent'] ?> times</dd>
                        </dl>
                        <a href="details.php?getstudent=<?= $row['STID'] ?>" class="btn btn-primary stretched-link ml-5">View
                            Profile</a>
                    </div>
                </div>
            </div>
        <?php }
//        mysqli_close($conn);
        $conn->close();
    }
    ?>
</div>
</body>
</html>
