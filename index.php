<?php
session_start();
	$title = 'Infoken Books and Info. Center';
	isset($_SESSION['loggedUser'])?$loggedUser=$_SESSION['loggedUser']:$loggedUser=0;

	echo $loggedUser;
?>
<?php include_once 'head.php';?>

<style>
.modal-login {
width: 320px;
}
.modal-login .modal-content {
border-radius: 1px;
border: none;
}
.modal-login .modal-header {
position: relative;
justify-content: center;
background: #f2f2f2;
}
.modal-login .modal-body {
padding: 30px;
}
.modal-login .modal-footer {
background: #f2f2f2;
}
.modal-login h4 {
text-align: center;
font-size: 26px;
}
.modal-login label {
font-weight: normal;
font-size: 13px;
}
.modal-login .form-control, .modal-login .btn {
min-height: 38px;
border-radius: 2px;
}
.modal-login .hint-text {
text-align: center;
}
.modal-login .close {
position: absolute;
top: 15px;
right: 15px;
}
.modal-login .checkbox-inline {
margin-top: 12px;
}
.modal-login input[type="checkbox"]{
margin-top: 2px;
}
.modal-login .btn {
min-width: 100px;
background: #3498db;
border: none;
line-height: normal;
}
.modal-login .btn:hover, .modal-login .btn:focus {
background: #248bd0;
}
.modal-login .hint-text a {
color: #999;
}
.trigger-btn {
display: inline-block;
}
</style>

</head>
<body style="margin-top: 70px">
	<div class="container">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a href="<?=HOME?>" class="navbar-brand">
                <img src="images/logo.png" height="28" alt="CoolBrand">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="<?=HOME?>" class="nav-item nav-link active">Home</a>
                    <a href="<?=HOME?>books/" class="nav-item nav-link">Books</a>
                    <a href="<?=HOME?>students/" class="nav-item nav-link">Students</a>
                    <a href="<?=HOME?>rents/" class="nav-item nav-link">Rents</a>
                </div>
                <form class="form-inline ml-auto">
                    <?php if ($loggedUser == 0){
                        ?>
                    <div class="text-center btn btn-light mb-2">
                        <!-- Button HTML (to Trigger Modal) -->
                        <a href="#myModal" class="trigger-btn" data-toggle="modal">Login</a>
                    </div>
                    <?php } else {?>
                    <div class="text-center btn btn-light mb-2">
                        <!-- Button HTML (to Trigger Modal) -->
                        <a href="Actions/logout.php" class="trigger-btn">Logout</a>
                    </div>
                    <?php } ?>
                </form>
            </div>
		</nav>
	</div>


    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <form action="Actions/login.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" required="required" name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" required="required" name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                            <input type="submit" class="btn btn-primary pull-right" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
		<div class="jumbotron">
        	<h1>Infoken Books and Information Center</h1>
        	<p class="lead">AMU's Infoken Books and Information Center Established in 1999 by AMU students.... bla bla Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    	</div>
    </div>
</body>
</html>                            
