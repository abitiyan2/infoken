<?php
/**
 * Created by PhpStorm.
 * User: Anteny
 * Date: 3/7/2020
 * Time: 9:01 AM
 */
require_once '../helpers/dbConnect.php';
$title = 'Register Book';
?>
<?php include_once '../head.php' ?>
<script>
    $(document).ready(function () {
        $("#myModal").modal('show');
    });
</script>

<script>
    // Self-executing function for REGISTRATION FORM
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
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
            <form class="form-inline ml-auto">
                <input type="text" class="form-control mr-sm-2" disabled placeholder="Search">
                <button type="submit" class="btn btn-outline-light" disabled>Search</button>
            </form>
        </div>
    </nav>
    <div class="mb-3"></div>
</div>


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

    <div class="row">
<div class="col-sm-6" style="margin-left: 200px">
    <div class="bs-example">
        <h1 class="border-bottom pb-3 mb-4">Book Registration Form</h1>
        <form class="needs-validation" action="" method="POST" novalidate="" enctype="multipart/form-data">
            <?php bsinpt('Title', 'title', 'text', 'required autocomplete="off"') ?>
            <?php bsinpt('Author', 'author', 'text', 'required') ?>
            <div class="form-group">
                <label class="col-sm-3 col-form-label">Category</label>
                <div class="col-sm-9">
                    <select class="custom-select" required="" name="category">
                        <option value="">Select Category</option>
                        <option value="Fiction">Fiction</option>
                        <option value="History">History</option>
                        <option value="Novel">Novel</option>
                        <option value="Poem">Poem</option>
                        <option value="Weg">Weg</option>
                        <option value="Psychology">Psychology</option>
                        <option value="Philosophy">Philosophy</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 col-form-label">Language</label>
                <div class="col-sm-9">
                    <select class="custom-select" required="" name="language">
                        <option value="">Select Language</option>
                        <option value="Amharic">Amharic</option>
                        <option value="Oromifa">Oromifa</option>
                        <option value="English">English</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
            <?php bsinpt('Num. of Copies', 'numCopies', 'number', 'min="1" required') ?>
            <?php bsinpt('Num. of Pages', 'numPages', 'number', 'min="10" required') ?>
            <?php bsinpt('Price', 'price', 'text', 'required') ?>
                        <?php bsinpt('Cover Photo', 'cover', 'file') ?>
<!--            <input type="file" name="cover" id="">-->
            <!--            <label>Image:</label><input type="file" name="image">-->

            <div class="form-group">
                <div class="col-sm-9 btn-group">
                    <input type="submit" class="btn btn-primary mr-3" value="Submit" name="registerBook">
                    <input type="reset" class="btn btn-secondary ml-3" value="Reset">
                </div>
            </div>
        </form>
    </div>


    <?php
    if (isset($_POST["registerBook"])) {
        $bookcover = '../images/bookcover.png';
        if (!isset($_FILES["cover"]) || $_FILES["cover"] == "") {
            $bookcover = 'upload/bookcover.png';
            echo 'cover is not set';
        } else {
            $fileinfo = PATHINFO($_FILES["cover"]["name"]);
            $imageFileType = strtolower($fileinfo['extension']);
            $extensions_arr = array("jpg", "jpeg", "png", "gif");
            if (in_array($imageFileType, $extensions_arr)) {
                $coverImg = $_POST["title"] . "_cover." . $fileinfo['extension'];
                move_uploaded_file($_FILES["cover"]["tmp_name"], "upload/" . $coverImg);
                $bookcover = "upload/" . $coverImg;
                echo 'JPG bla bla type';
            } else {
                echo 'Wrong data type';
            }
        }
        $sql = "INSERT INTO books( ISBN, title, author, category, language, totalCopies, rented, numPages, price,coverImg,numRent)
                      VALUES ('" . 'myISBN' . "','" . $_POST["title"] . "','" . $_POST["author"] . "','" . $_POST["category"] . "','" . $_POST["language"] . "','" . $_POST["numCopies"] . "','0','" . $_POST["numPages"] . "','" . $_POST["price"] . "','" . $bookcover . "',0)";

        if (mysqli_query($conn, $sql)) {

            $sql = 'SELECT * FROM books WHERE title = "' . $_POST['title'] . '"';
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div id="myModal" class="modal fade" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>New book registered successfully.</p>
                                    <img src="<?=$row["coverImg"];?>">
                                    <?php
                                        $newImg = $row["coverImg"];
                                        $newTitle = $row["title"];
                                        $newCopies = $row["totalCopies"];
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "0 results";
            }
            mysqli_close($conn);

        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
            $conn->close();
        }
    }
    //    if (isset($_POST["registerBook"])) {
    //
    //        if (isset($_POST['image'])) {
    //            $fileinfo = PATHINFO($_FILES["image"]["name"]);
    //            // Select file type
    //            $imageFileType = strtolower($fileinfo['extension']);
    //            // Valid file extensions
    //            $extensions_arr = array("jpg", "jpeg", "png", "gif");
    //            // Check extension
    //            if (in_array($imageFileType, $extensions_arr)) {
    ////            $newFilename = $fileinfo['filename'] . "_" . time() . "." . $fileinfo['extension'];
    //                $coverImg = $_POST['title'] . "_cover." . $fileinfo['extension'];
    //                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/book_cover/" . $coverImg);
    //                $location = "upload/book_cover/" . $coverImg;
    //
    //                $sql = "INSERT INTO books( ISBN, title, author, category, language, totalCopies, rented, numPages, price,coverImg)
    //              VALUES ('" . 'myISBN' . "','" . $_POST["title"] . "','" . $_POST["author"] . "','" . $_POST["category"] . "','" . $_POST["language"] . "','" . $_POST["numCopies"] . "','0','" . $_POST["numPages"] . "','" . $_POST["price"] . "','" . $bookcover . "')";
    //
    //                if (mysqli_query($conn, $sql)) {
    //
    //                    $sql = 'SELECT * FROM books WHERE title = "' . $_POST['title'] . '"';
    //                    $result = mysqli_query($conn, $sql);
    //
    //                    if (mysqli_num_rows($result) > 0) {
    //                        while ($row = mysqli_fetch_assoc($result)) { ?>
    <!---->
    <!--                            --><?php
    //                        }
    //                    } else {
    //                        echo "0 results";
    //                    }
    //                    mysqli_close($conn);
    //
    //                } else {
    //                    echo "Error: " . $sql . "" . mysqli_error($conn);
    //                    $conn->close();
    //                }
    //            }
    //
    //
    //        } else{
    //
    //            $sql = "INSERT INTO books( ISBN, title, author, category, language, totalCopies, rented, numPages, Price)
    //              VALUES ('" . 'myISBN' . "','" . $_POST["title"] . "','" . $_POST["author"] . "','" . $_POST["category"] . "','" . $_POST["language"] . "','" . $_POST["numCopies"] . "','0','" . $_POST["numPages"] . "','" . $_POST["price"] . "')";
    //
    //            if (mysqli_query($conn, $sql)) {
    //
    //                $sql = 'SELECT * FROM books WHERE title = "' . $_POST['title'] . '"';
    //                $result = mysqli_query($conn, $sql);
    //
    //                if (mysqli_num_rows($result) > 0) {
    //                    while ($row = mysqli_fetch_assoc($result)) { ?>
    <!---->
    <!--                        --><?php
    //                    }
    //                } else {
    //                    echo "0 results";
    //                }
    //                mysqli_close($conn);
    //
    //            } else {
    //                echo "Error: " . $sql . "" . mysqli_error($conn);
    //                $conn->close();
    //            }
    //        }
    //
    //    }
    //    ?>
</div>
<div class="col">
    <?php
    if (isset($_POST["registerBook"])) {
        echo '<img src="'.$newImg.'" style="width: 400px; height: 400px; margin-top: 200px; margin-left: -100px"><br>';
        echo '<h1>'.$newTitle.'<span class="badge badge-primary">'.$newCopies.'</span></h1>';
    }else{
        echo '<img src="../images/newbookcover.png" style="width: 400px; height: 400px; margin-top: 200px; margin-left: -100px">';
    }
    ?>

</div>
</div>
</body>
</html>

<?php
//    $sql = "INSERT INTO books( ISBN, title, author, category, language, totalCopies, rented, numPages, price,coverImg)
//    VALUES ('" . 'myISBN' . "','" . $_POST["title"] . "','" . $_POST["author"] . "','" . $_POST["category"] . "','" . $_POST["language"] . "','" . $_POST["numCopies"] . "','0','" . $_POST["numPages"] . "','" . $_POST["price"] . "','" . $bookcover . "')";
//
//    if (mysqli_query($conn, $sql)) {
//
//    $sql = 'SELECT * FROM books WHERE title = "' . $_POST['title'] . '"';
//    $result = mysqli_query($conn, $sql);
//
//    if (mysqli_num_rows($result) > 0) {
//    while ($row = mysqli_fetch_assoc($result)) { ?>
<!--    <b>Cover Image: </b>--><? //=$row["coverImg"];?>
<?php
//}
//} else {
//    echo "0 results";
//}
//mysqli_close($conn);
//
//} else {
//    echo "Error: " . $sql . "" . mysqli_error($conn);
//    $conn->close();
//}
//
?>

<?php
//$fileinfo = PATHINFO($_FILES["cover"]["name"]);
//            $newFilename = $fileinfo['filename'] . "_" . time() . "." . $fileinfo['extension'];
//            move_uploaded_file($_FILES["cover"]["tmp_name"], "upload/" . $newFilename);
//            $location = "upload/" . $newFilename;
//
//            $sql = "INSERT INTO books( ISBN, title, author, category, language, totalCopies, rented, numPages, price,coverImg)
//              VALUES ('" . 'myISBN' . "','" . $_POST["title"] . "','" . $_POST["author"] . "','" . $_POST["category"] . "','" . $_POST["language"] . "','" . $_POST["numCopies"] . "','0','" . $_POST["numPages"] . "','" . $_POST["price"] . "','" . $location . "')";
//
//            if (mysqli_query($conn, $sql)) {
//
//                $sql = 'SELECT * FROM books WHERE title = "' . $_POST['title'] . '"';
//                $result = mysqli_query($conn, $sql);
//
//                if (mysqli_num_rows($result) > 0) {
//                    while ($row = mysqli_fetch_assoc($result)) { ?>
<!--                        <b>Cover Image: </b>--><? //= $row["coverImg"]; ?>
<!--                        --><?php
//                    }
//                } else {
//                    echo "0 results";
//                }
//                mysqli_close($conn);
//
//            } else {
//                echo "Error: " . $sql . "" . mysqli_error($conn);
//                $conn->close();
//            }
//        }
?>
