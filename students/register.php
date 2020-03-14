<?php
/**
 * Created by PhpStorm.
 * User: Anteny
 * Date: 3/7/2020
 * Time: 9:01 AM
 */
require_once '../helpers/dbConnect.php';
$title = 'Register Student';
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
                <?php bslink(HOME . 'books/', 'nav-item nav-link', 'Books'); ?>
                <?php bslink(HOME . 'students/', 'nav-item nav-link active', 'Students'); ?>
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


<?php include_once 'sidebar.php';?>

    <div class="row">
<div class="col-sm-6" style="margin-left: 200px">
    <div class="bs-example">
        <h1 class="border-bottom pb-3 mb-4">Student Registration Form</h1>
        <form class="needs-validation" action="" method="POST" novalidate="" enctype="multipart/form-data">
            <?php bsinpt('STID', 'STID', 'text', 'required autocomplete="off"') ?>
            <?php bsinpt('First Name', 'fName', 'text', 'required') ?>
            <?php bsinpt('Last Name', 'lName', 'text', 'required') ?>

            <div class="form-group">
                <label class="col-sm-3 col-form-label">Sex</label>
                <div class="col-sm-9">
                    <select class="custom-select" required="" name="sex">
                        <option value="">Select Gender </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 col-form-label">Department</label>
                <div class="col-sm-9">
                    <select class="custom-select" required="" name="dept">
                        <option value="">Select Department</option>
                        <option value="computer science">Computer Science</option>
                        <option value="civil">Civil</option>
                        <option value="computer science">Computer Science</option>
                        <option value="computer science">Computer Science</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 col-form-label">Block Number</label>
                <div class="col-sm-9">
                    <select class="custom-select" required="" name="blockNum">
                        <option value="">Select Block</option>
                        <option value="Lante">Lante</option>
                        <option value="Mother">Mother</option>
                        <option value="NB1">NB1</option>
                        <option value="NB2">NB2</option>
                        <option value="NB3">NB3</option>
                        <option value="329">329</option>
                        <option value="330">330</option>
                    </select>
                </div>
            </div>

            <?php bsinpt('Dorm Number', 'dormNum', 'number', 'required') ?>
            <?php bsinpt('Phone Number', 'phoneNum', 'text', 'required') ?>
                        <?php bsinpt('Profile Photo', 'profilePic', 'file') ?>
<!--            <input type="file" name="cover" id="">-->
            <!--            <label>Image:</label><input type="file" name="image">-->

            <div class="form-group">
                <div class="col-sm-9 btn-group">
                    <input type="submit" class="btn btn-primary mr-3" value="Submit" name="registerStudent">
                    <input type="reset" class="btn btn-secondary ml-3" value="Reset">
                </div>
            </div>
        </form>
    </div>


    <?php
    if (isset($_POST["registerStudent"])) {
        $_POST['sex']=='Male'?$profPhoto = '../images/maleAvater.png':$profPhoto = '../images/femaleAvater.png';
        if (!isset($_FILES["profilePic"]) || $_FILES["profilePic"] == "") {
            $bookcover = '../images/maleAvater.png';
            echo 'cover is not set';
        } else {
            $fileinfo = PATHINFO($_FILES["profilePic"]["name"]);
            $imageFileType = strtolower($fileinfo['extension']);
            $extensions_arr = array("jpg", "jpeg", "png", "gif");
            if (in_array($imageFileType, $extensions_arr)) {
                $tmpId = str_replace("/","-",$_POST["STID"]);
                $profImg = $tmpId. "_proPic." . $fileinfo['extension'];
                move_uploaded_file($_FILES["profilePic"]["tmp_name"], "upload/" . $profImg);
                $profPhoto = "upload/" . $profImg;
//                echo 'JPG bla bla type';
            } else {
                echo 'Profile pic is missing';
            }
        }
        $sql = "INSERT INTO students( STID, fName, lName, sex, dept, blockNum, dormNum, phoneNum, profilePic, rented, numRent)
                      VALUES ('" . $_POST["STID"] . "','" . $_POST["fName"] . "','" . $_POST["lName"] . "','" . $_POST["sex"] . "','" . $_POST["dept"] . "','" . $_POST["blockNum"] . "','".$_POST["dormNum"]."','" . $_POST["phoneNum"] . "','" . $profPhoto . "','0','0')";

        if (mysqli_query($conn, $sql)) {

            $sql = 'SELECT * FROM students WHERE STID = "' . $_POST['STID'] . '"';
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
                                    <p>New student registered successfully.</p>
                                    <img src="<?=$row["profilePic"];?>">
                                    <?php
                                        $newImg = $row["profilePic"];
                                        $newID = $row["STID"];
                                        $newName = $row["fName"].' '.$row["lName"];
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
     ?>
</div>
<div class="col">
    <?php
    if (isset($_POST["registerStudent"])) {
        echo '<img src="'.$newImg.'" style="width: 400px; height: 400px; margin-top: 200px; margin-left: -100px"><br>';
        echo '<h1>'.$newID.'</h1><br><h2>'.$newName.'</h2>';
    }else{
        echo '<img src="../images/newstudentcover.png" style="width: 400px; height: 400px; margin-top: 200px; margin-left: -100px">';
        echo '<h4 class="display-4">New</h4>';
    }
    ?>

</div>
</div>
</body>
</html>
