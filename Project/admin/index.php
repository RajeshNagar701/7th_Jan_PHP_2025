	
	<?php
	if(isset($_SESSION['s_aid']))
	{
		echo "<script>
			window.location='dashboard';
		</script>";
		
	}
	?>
	
	<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	    <meta name="description" content="" />
	    <meta name="author" content="" />
	    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
	    <title>FREE RESPONSIVE HORIZONTAL ADMIN</title>
	    <!-- BOOTSTRAP CORE STYLE  -->
	    <link href="assets/css/bootstrap.css" rel="stylesheet" />
	    <!-- FONT AWESOME STYLE  -->
	    <link href="assets/css/font-awesome.css" rel="stylesheet" />
	    <!-- CUSTOM STYLE  -->
	    <link href="assets/css/style.css" rel="stylesheet" />
	    <!-- GOOGLE FONT -->
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

	</head>

	<body>
	    <div class="navbar navbar-inverse set-radius-zero">
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="index.html">

	                    <img src="assets/img/logo.png" />
	                </a>

	            </div>


	        </div>
	    </div>
	    <!-- LOGO HEADER END-->
	    <section class="menu-section">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="navbar-collapse collapse ">
	                        <ul id="menu-top" class="nav navbar-nav navbar-right">
	                            <h1>Admin Pannel</h1>
	                        </ul>
	                    </div>
	                </div>

	            </div>
	        </div>
	    </section>
	    <!-- MENU SECTION END-->
	    <div class="content-wrapper">
	        <div class="container">
	            <div class="row pad-botm">
	                <div class="col-md-12">
	                    <h4 class="header-line">Admin Login</h4>

	                </div>

	            </div>
	            <div class="row mx-auto d-block">
	                <div class="col-md-12 p-5">
						<form method="post" enctype="multipart/form-data">
							<div class="form-row">
								<div class="col-sm-12 control-group">
									<input type="email" name="email" value="<?php if(isset($_COOKIE['a_email'])) { echo $_COOKIE['a_email'];} ?>" class="form-control p-4" placeholder="Your Email" required="required" />
									<p class="help-block text-danger"></p>
								</div>
								<div class="col-sm-12 control-group">
									<input type="password" name="password" value="<?php if(isset($_COOKIE['a_pass'])) { echo $_COOKIE['a_pass'];} ?>" class="form-control p-4"  placeholder="Your Password" required="required" />
									<p class="help-block text-danger"></p>
								</div>
								<div class=" col-sm-12 control-group">
									Remember Me : <input type="checkbox" name="rem" value="remember" />
									<p class="help-block text-danger"></p>
								</div>
								<div class="col-sm-12 control-group">
									<button class="btn btn-primary btn-block py-3 px-5" name="submit" type="submit" >Login</button>
								</div>
							</div>
						</form>
	                </div>

	            </div>
	        </div>
	    </div>
	    <!-- CONTENT-WRAPPER SECTION END-->
	    <section class="footer-section">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    &copy; 2014 Yourdomain.com |<a href="http://www.binarytheme.com/" target="_blank"> Designed by : binarytheme.com</a>
	                </div>

	            </div>
	        </div>
	    </section>
	    <!-- FOOTER SECTION END-->
	    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
	    <!-- CORE JQUERY  -->
	    <script src="assets/js/jquery-1.10.2.js"></script>
	    <!-- BOOTSTRAP SCRIPTS  -->
	    <script src="assets/js/bootstrap.js"></script>
	    <!-- CUSTOM SCRIPTS  -->
	    <script src="assets/js/custom.js"></script>
	</body>

	</html>