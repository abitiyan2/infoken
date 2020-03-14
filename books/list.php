<?php
/**
 * Created by PhpStorm.
 * User: Anteny
 * Date: 3/7/2020
 * Time: 9:01 AM
 */

include_once '../head.php';
$title = 'Books';
?>
<script type="text/javascript">
    $(document).ready(function () {
        $(".list-group a").click(function () {
            $("html, body").stop().animate({
                scrollTop: $($(this).attr("href")).offset().top
            }, 400);
        });
    });
</script>

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

</head>
<body data-spy="scroll" data-offset="400" data-target="#myScrollspy">
<?php include_once '../navs.php' ?>
<div class="container" style="position: inherit;">
    <h1 style="margin-left: 200px">Books</h1>
    <p class="lead" style="margin-left: 200px"><i>Scroll this page and see how the nav items are highlighted
            automatically based on the scroll
            position.</i></p>
    <div class="row">
        <div class="col-sm-2" id="myScrollspy" style="position: fixed; margin-top: -100px;">
            <div class="list-group">
                <a class="list-group-item list-group-item-action active" href="#Fiction">Ficton</a>
                <a class="list-group-item list-group-item-action" href="#Psychology">Psychology</a>
                <a class="list-group-item list-group-item-action" href="#History">History</a>
                <a class="list-group-item list-group-item-action" href="#Novel">Novel</a>
                <a class="list-group-item list-group-item-action" href="#Poem">Poem</a>
                <a class="list-group-item list-group-item-action" href="#Weg">Weg</a>
                <a class="list-group-item list-group-item-action" href="#Philosophy">Philosophy</a>
            </div>
        </div>
        <div class="col-sm-9" style="margin-left: 200px">
            <div id="Fiction">
                <h2>Fiction</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Row</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Biography</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Clark</td>
                            <td>Kent</td>
                            <td>clarkkent@mail.com</td>
                            <td>Lorem ipsum dolor sit amet...</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John</td>
                            <td>Carter</td>
                            <td>johncarter@mail.com</td>
                            <td>Vestibulum consectetur scelerisque...</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Peter</td>
                            <td>Parker</td>
                            <td>peterparker@mail.com</td>
                            <td>Integer pulvinar leo id risus...</td>
                        </tr>
                        <tr class="table-primary">
                            <td>1</td>
                            <td>Credit Card</td>
                            <td>04/07/2019</td>
                            <td>Waiting for statement</td>
                            <td>Waiting for statement</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>2</td>
                            <td>Insurance</td>
                            <td>02/07/2019</td>
                            <td>Cancelled</td>
                            <td>Cancelled</td>
                        </tr>
                        <tr class="table-success">
                            <td>3</td>
                            <td>Water</td>
                            <td>01/07/2019</td>
                            <td>Paid</td>
                            <td>Paid</td>
                        </tr>
                        <tr class="table-info">
                            <td>4</td>
                            <td>Internet</td>
                            <td>05/07/2019</td>
                            <td>Change plan</td>
                            <td>Change plan</td>
                        </tr>
                        <tr class="table-warning">
                            <td>5</td>
                            <td>Electricity</td>
                            <td>03/07/2019</td>
                            <td>Pending</td>
                            <td>Pending</td>
                        </tr>
                        <tr class="table-danger">
                            <td>6</td>
                            <td>Telephone</td>
                            <td>06/07/2019</td>
                            <td>Due</td>
                            <td>Due</td>
                        </tr>
                        <tr class="table-active">
                            <td>7</td>
                            <td>DTH</td>
                            <td>04/07/2019</td>
                            <td>Deactivated</td>
                            <td>Deactivated</td>
                        </tr>
                        <tr class="table-light">
                            <td>8</td>
                            <td>Car Service</td>
                            <td>08/07/2019</td>
                            <td>Call in to confirm</td>
                            <td>Call in to confirm</td>
                        </tr>
                        <tr class="table-dark">
                            <td>9</td>
                            <td>Gas</td>
                            <td>06/07/2019</td>
                            <td>Payment failed</td>
                            <td>Payment failed</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div id="Psychology">
                <h2>Psychology</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Row</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Biography</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Clark</td>
                            <td>Kent</td>
                            <td>clarkkent@mail.com</td>
                            <td>Lorem ipsum dolor sit amet...</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John</td>
                            <td>Carter</td>
                            <td>johncarter@mail.com</td>
                            <td>Vestibulum consectetur scelerisque...</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Peter</td>
                            <td>Parker</td>
                            <td>peterparker@mail.com</td>
                            <td>Integer pulvinar leo id risus...</td>
                        </tr>
                        <tr class="table-primary">
                            <td>1</td>
                            <td>Credit Card</td>
                            <td>04/07/2019</td>
                            <td>Waiting for statement</td>
                            <td>Waiting for statement</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>2</td>
                            <td>Insurance</td>
                            <td>02/07/2019</td>
                            <td>Cancelled</td>
                            <td>Cancelled</td>
                        </tr>
                        <tr class="table-success">
                            <td>3</td>
                            <td>Water</td>
                            <td>01/07/2019</td>
                            <td>Paid</td>
                            <td>Paid</td>
                        </tr>
                        <tr class="table-info">
                            <td>4</td>
                            <td>Internet</td>
                            <td>05/07/2019</td>
                            <td>Change plan</td>
                            <td>Change plan</td>
                        </tr>
                        <tr class="table-warning">
                            <td>5</td>
                            <td>Electricity</td>
                            <td>03/07/2019</td>
                            <td>Pending</td>
                            <td>Pending</td>
                        </tr>
                        <tr class="table-danger">
                            <td>6</td>
                            <td>Telephone</td>
                            <td>06/07/2019</td>
                            <td>Due</td>
                            <td>Due</td>
                        </tr>
                        <tr class="table-active">
                            <td>7</td>
                            <td>DTH</td>
                            <td>04/07/2019</td>
                            <td>Deactivated</td>
                            <td>Deactivated</td>
                        </tr>
                        <tr class="table-light">
                            <td>8</td>
                            <td>Car Service</td>
                            <td>08/07/2019</td>
                            <td>Call in to confirm</td>
                            <td>Call in to confirm</td>
                        </tr>
                        <tr class="table-dark">
                            <td>9</td>
                            <td>Gas</td>
                            <td>06/07/2019</td>
                            <td>Payment failed</td>
                            <td>Payment failed</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div id="History">
                <h2>History</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Row</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Biography</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Clark</td>
                            <td>Kent</td>
                            <td>clarkkent@mail.com</td>
                            <td>Lorem ipsum dolor sit amet...</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John</td>
                            <td>Carter</td>
                            <td>johncarter@mail.com</td>
                            <td>Vestibulum consectetur scelerisque...</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Peter</td>
                            <td>Parker</td>
                            <td>peterparker@mail.com</td>
                            <td>Integer pulvinar leo id risus...</td>
                        </tr>
                        <tr class="table-primary">
                            <td>1</td>
                            <td>Credit Card</td>
                            <td>04/07/2019</td>
                            <td>Waiting for statement</td>
                            <td>Waiting for statement</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>2</td>
                            <td>Insurance</td>
                            <td>02/07/2019</td>
                            <td>Cancelled</td>
                            <td>Cancelled</td>
                        </tr>
                        <tr class="table-success">
                            <td>3</td>
                            <td>Water</td>
                            <td>01/07/2019</td>
                            <td>Paid</td>
                            <td>Paid</td>
                        </tr>
                        <tr class="table-info">
                            <td>4</td>
                            <td>Internet</td>
                            <td>05/07/2019</td>
                            <td>Change plan</td>
                            <td>Change plan</td>
                        </tr>
                        <tr class="table-warning">
                            <td>5</td>
                            <td>Electricity</td>
                            <td>03/07/2019</td>
                            <td>Pending</td>
                            <td>Pending</td>
                        </tr>
                        <tr class="table-danger">
                            <td>6</td>
                            <td>Telephone</td>
                            <td>06/07/2019</td>
                            <td>Due</td>
                            <td>Due</td>
                        </tr>
                        <tr class="table-active">
                            <td>7</td>
                            <td>DTH</td>
                            <td>04/07/2019</td>
                            <td>Deactivated</td>
                            <td>Deactivated</td>
                        </tr>
                        <tr class="table-light">
                            <td>8</td>
                            <td>Car Service</td>
                            <td>08/07/2019</td>
                            <td>Call in to confirm</td>
                            <td>Call in to confirm</td>
                        </tr>
                        <tr class="table-dark">
                            <td>9</td>
                            <td>Gas</td>
                            <td>06/07/2019</td>
                            <td>Payment failed</td>
                            <td>Payment failed</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div id="Novel">
                <h2>Novel</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Row</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Biography</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Clark</td>
                            <td>Kent</td>
                            <td>clarkkent@mail.com</td>
                            <td>Lorem ipsum dolor sit amet...</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John</td>
                            <td>Carter</td>
                            <td>johncarter@mail.com</td>
                            <td>Vestibulum consectetur scelerisque...</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Peter</td>
                            <td>Parker</td>
                            <td>peterparker@mail.com</td>
                            <td>Integer pulvinar leo id risus...</td>
                        </tr>
                        <tr class="table-primary">
                            <td>1</td>
                            <td>Credit Card</td>
                            <td>04/07/2019</td>
                            <td>Waiting for statement</td>
                            <td>Waiting for statement</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>2</td>
                            <td>Insurance</td>
                            <td>02/07/2019</td>
                            <td>Cancelled</td>
                            <td>Cancelled</td>
                        </tr>
                        <tr class="table-success">
                            <td>3</td>
                            <td>Water</td>
                            <td>01/07/2019</td>
                            <td>Paid</td>
                            <td>Paid</td>
                        </tr>
                        <tr class="table-info">
                            <td>4</td>
                            <td>Internet</td>
                            <td>05/07/2019</td>
                            <td>Change plan</td>
                            <td>Change plan</td>
                        </tr>
                        <tr class="table-warning">
                            <td>5</td>
                            <td>Electricity</td>
                            <td>03/07/2019</td>
                            <td>Pending</td>
                            <td>Pending</td>
                        </tr>
                        <tr class="table-danger">
                            <td>6</td>
                            <td>Telephone</td>
                            <td>06/07/2019</td>
                            <td>Due</td>
                            <td>Due</td>
                        </tr>
                        <tr class="table-active">
                            <td>7</td>
                            <td>DTH</td>
                            <td>04/07/2019</td>
                            <td>Deactivated</td>
                            <td>Deactivated</td>
                        </tr>
                        <tr class="table-light">
                            <td>8</td>
                            <td>Car Service</td>
                            <td>08/07/2019</td>
                            <td>Call in to confirm</td>
                            <td>Call in to confirm</td>
                        </tr>
                        <tr class="table-dark">
                            <td>9</td>
                            <td>Gas</td>
                            <td>06/07/2019</td>
                            <td>Payment failed</td>
                            <td>Payment failed</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div id="Poem">
                <h2>Poem</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Row</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Biography</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Clark</td>
                            <td>Kent</td>
                            <td>clarkkent@mail.com</td>
                            <td>Lorem ipsum dolor sit amet...</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John</td>
                            <td>Carter</td>
                            <td>johncarter@mail.com</td>
                            <td>Vestibulum consectetur scelerisque...</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Peter</td>
                            <td>Parker</td>
                            <td>peterparker@mail.com</td>
                            <td>Integer pulvinar leo id risus...</td>
                        </tr>
                        <tr class="table-primary">
                            <td>1</td>
                            <td>Credit Card</td>
                            <td>04/07/2019</td>
                            <td>Waiting for statement</td>
                            <td>Waiting for statement</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>2</td>
                            <td>Insurance</td>
                            <td>02/07/2019</td>
                            <td>Cancelled</td>
                            <td>Cancelled</td>
                        </tr>
                        <tr class="table-success">
                            <td>3</td>
                            <td>Water</td>
                            <td>01/07/2019</td>
                            <td>Paid</td>
                            <td>Paid</td>
                        </tr>
                        <tr class="table-info">
                            <td>4</td>
                            <td>Internet</td>
                            <td>05/07/2019</td>
                            <td>Change plan</td>
                            <td>Change plan</td>
                        </tr>
                        <tr class="table-warning">
                            <td>5</td>
                            <td>Electricity</td>
                            <td>03/07/2019</td>
                            <td>Pending</td>
                            <td>Pending</td>
                        </tr>
                        <tr class="table-danger">
                            <td>6</td>
                            <td>Telephone</td>
                            <td>06/07/2019</td>
                            <td>Due</td>
                            <td>Due</td>
                        </tr>
                        <tr class="table-active">
                            <td>7</td>
                            <td>DTH</td>
                            <td>04/07/2019</td>
                            <td>Deactivated</td>
                            <td>Deactivated</td>
                        </tr>
                        <tr class="table-light">
                            <td>8</td>
                            <td>Car Service</td>
                            <td>08/07/2019</td>
                            <td>Call in to confirm</td>
                            <td>Call in to confirm</td>
                        </tr>
                        <tr class="table-dark">
                            <td>9</td>
                            <td>Gas</td>
                            <td>06/07/2019</td>
                            <td>Payment failed</td>
                            <td>Payment failed</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div id="Weg">
                <h2>Weg</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Row</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Biography</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Clark</td>
                            <td>Kent</td>
                            <td>clarkkent@mail.com</td>
                            <td>Lorem ipsum dolor sit amet...</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John</td>
                            <td>Carter</td>
                            <td>johncarter@mail.com</td>
                            <td>Vestibulum consectetur scelerisque...</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Peter</td>
                            <td>Parker</td>
                            <td>peterparker@mail.com</td>
                            <td>Integer pulvinar leo id risus...</td>
                        </tr>
                        <tr class="table-primary">
                            <td>1</td>
                            <td>Credit Card</td>
                            <td>04/07/2019</td>
                            <td>Waiting for statement</td>
                            <td>Waiting for statement</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>2</td>
                            <td>Insurance</td>
                            <td>02/07/2019</td>
                            <td>Cancelled</td>
                            <td>Cancelled</td>
                        </tr>
                        <tr class="table-success">
                            <td>3</td>
                            <td>Water</td>
                            <td>01/07/2019</td>
                            <td>Paid</td>
                            <td>Paid</td>
                        </tr>
                        <tr class="table-info">
                            <td>4</td>
                            <td>Internet</td>
                            <td>05/07/2019</td>
                            <td>Change plan</td>
                            <td>Change plan</td>
                        </tr>
                        <tr class="table-warning">
                            <td>5</td>
                            <td>Electricity</td>
                            <td>03/07/2019</td>
                            <td>Pending</td>
                            <td>Pending</td>
                        </tr>
                        <tr class="table-danger">
                            <td>6</td>
                            <td>Telephone</td>
                            <td>06/07/2019</td>
                            <td>Due</td>
                            <td>Due</td>
                        </tr>
                        <tr class="table-active">
                            <td>7</td>
                            <td>DTH</td>
                            <td>04/07/2019</td>
                            <td>Deactivated</td>
                            <td>Deactivated</td>
                        </tr>
                        <tr class="table-light">
                            <td>8</td>
                            <td>Car Service</td>
                            <td>08/07/2019</td>
                            <td>Call in to confirm</td>
                            <td>Call in to confirm</td>
                        </tr>
                        <tr class="table-dark">
                            <td>9</td>
                            <td>Gas</td>
                            <td>06/07/2019</td>
                            <td>Payment failed</td>
                            <td>Payment failed</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div id="Philosophy">
                <h2>Philosophy</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Row</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Biography</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Clark</td>
                            <td>Kent</td>
                            <td>clarkkent@mail.com</td>
                            <td>Lorem ipsum dolor sit amet...</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John</td>
                            <td>Carter</td>
                            <td>johncarter@mail.com</td>
                            <td>Vestibulum consectetur scelerisque...</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Peter</td>
                            <td>Parker</td>
                            <td>peterparker@mail.com</td>
                            <td>Integer pulvinar leo id risus...</td>
                        </tr>
                        <tr class="table-primary">
                            <td>1</td>
                            <td>Credit Card</td>
                            <td>04/07/2019</td>
                            <td>Waiting for statement</td>
                            <td>Waiting for statement</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>2</td>
                            <td>Insurance</td>
                            <td>02/07/2019</td>
                            <td>Cancelled</td>
                            <td>Cancelled</td>
                        </tr>
                        <tr class="table-success">
                            <td>3</td>
                            <td>Water</td>
                            <td>01/07/2019</td>
                            <td>Paid</td>
                            <td>Paid</td>
                        </tr>
                        <tr class="table-info">
                            <td>4</td>
                            <td>Internet</td>
                            <td>05/07/2019</td>
                            <td>Change plan</td>
                            <td>Change plan</td>
                        </tr>
                        <tr class="table-warning">
                            <td>5</td>
                            <td>Electricity</td>
                            <td>03/07/2019</td>
                            <td>Pending</td>
                            <td>Pending</td>
                        </tr>
                        <tr class="table-danger">
                            <td>6</td>
                            <td>Telephone</td>
                            <td>06/07/2019</td>
                            <td>Due</td>
                            <td>Due</td>
                        </tr>
                        <tr class="table-active">
                            <td>7</td>
                            <td>DTH</td>
                            <td>04/07/2019</td>
                            <td>Deactivated</td>
                            <td>Deactivated</td>
                        </tr>
                        <tr class="table-light">
                            <td>8</td>
                            <td>Car Service</td>
                            <td>08/07/2019</td>
                            <td>Call in to confirm</td>
                            <td>Call in to confirm</td>
                        </tr>
                        <tr class="table-dark">
                            <td>9</td>
                            <td>Gas</td>
                            <td>06/07/2019</td>
                            <td>Payment failed</td>
                            <td>Payment failed</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<!--<div id="myModal" class="modal fade" tabindex="-1">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <h5 class="modal-title">Confirmation</h5>-->
<!--                <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <p>New book registered successfully.</p>-->
<!--                <p class="text-success pl-5">-->
<!--                    <b>Title: </b>--><?//= $row["title"] ?><!--<br>-->
<!--                    <b>Author: </b>--><?//= $row["author"] ?><!--<br>-->
<!--                    <b>Category: </b>--><?//= $row["category"] ?><!--<br>-->
<!--                    <b>Language: </b>--><?//= $row["language"] ?><!--<br>-->
<!--                    <b>Total copies: </b>--><?//= $row["totalCopies"] ?><!--<br>-->
<!--                    <b>Price: </b>--><?//= $row["price"] ?><!--<br>-->
<!---->
<!--                </p>-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->