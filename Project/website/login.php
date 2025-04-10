<?php
if(isset($_SESSION['s_id']))
{
	echo "<script>
		window.location='index';
	</script>";
	
}
include_once('header.php');

?>


<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Login</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Login</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Login Us and test our sweets</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="contact-form bg-light rounded p-5">
                    <div id="success"></div>
						<form method="post" enctype="multipart/form-data">
							<div class="form-row">
								<div class="offset-md-3 col-sm-6 control-group">
									<input type="email" name="email" class="form-control p-4" value="<?php if(isset($_COOKIE['u_email'])) { echo $_COOKIE['u_email'];} ?>" placeholder="Your Email" required="required" />
									<p class="help-block text-danger"></p>
								</div>
								<div class="offset-md-3 col-sm-6 control-group">
									<input type="password" name="password" class="form-control p-4" value="<?php if(isset($_COOKIE['u_pass'])) { echo $_COOKIE['u_pass'];} ?>"  placeholder="Your Password" required="required" />
									<p class="help-block text-danger"></p>
								</div>
								 <div class="offset-md-3 col-sm-6 control-group">
									Remember Me : <input type="checkbox" name="rem" value="remember" />
									<p class="help-block text-danger"></p>
								</div>
								<div class="offset-md-3 col-sm-6 control-group">
									<button class="btn btn-primary btn-block py-3 px-5" name="submit" type="submit" >Login</button>
								</div>
							</div>
						</form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<?php

include_once('footer.php');

?>