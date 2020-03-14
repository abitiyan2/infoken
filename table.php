<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap 4 Fixed Layout Example</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

<style type="text/css">
    .bs-example{
        margin: 20px;
    }
    .box{
        width: 400px;
        border: 4px solid #000;
    }
    .media img{
        width: 80px;
    }
        .navbar{
        margin-bottom: 1rem;
    }
    .breadcrumb-item + .breadcrumb-item::before {
        content: ">";
    }
</style>

<script>
// Self-executing function for REGISTRATION FORM
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
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

<script>
$(document).ready(function(){
    $("#myAlert").on('closed.bs.alert', function(){
        alert("Alert message box has been closed.");
    });
});
</script>

</head>
<body>
<div class="container">
    <h1 class="display-4">Tables</h1>
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

    <hr>
    <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright &copy; 2019 Tutorial Republic</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="#" class="text-dark">Terms of Use</a> 
                <span class="text-muted mx-2">|</span> 
                <a href="#" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>                            
