	<?php
	
	if(isset($_SESSION['s_id']))
	{
	}
	else
	{
		echo "<script>
			alert('Login First !');
			window.location='index';
		</script>";
	}	
	
    include_once('header.php');

    ?>


	<!-- Header Start -->
	<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
	    <div class="container text-center py-5">
	        <h1 class="text-white display-3 mt-lg-5">User Profile</h1>
	        <div class="d-inline-flex align-items-center text-white">
	            <p class="m-0"><a class="text-white" href="">Home</a></p>
	            <i class="fa fa-circle px-3"></i>
	            <p class="m-0">User Profile</p>
	        </div>
	    </div>
	</div>
	<!-- Header End -->


	<!-- About Start -->
	<div class="container-fluid py-5">
	    <div class="container py-5">
	        <div class="row justify-content-center">
	            <div class="col-lg-7">
	                <h1 class="section-title position-relative text-center mb-5">
						Edit USER Profile
					</h1>
	            </div>
	        </div>
	        <div class="row">
	            <div class="offset-lg-2 col-lg-4 py-5">
	                <h4 class="font-weight-bold mb-3">About Us</h4>
	                <h5 class="text-muted mb-3">Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea</h5>
	                <p>Takimata sed vero vero no sit sed, justo clita duo no duo amet et, nonumy kasd sed dolor eos diam lorem eirmod. Amet sit amet amet no. Est nonumy sed labore eirmod sit magna. Erat at est justo sit ut. Labor diam sed ipsum et eirmod</p>
	                <a href="edit_profile" class="btn btn-secondary mt-2">Edit Profile</a>
	            </div>
	            <div class="col-lg-4" style="min-height: 400px;">
	                <div class="position-relative h-100 rounded overflow-hidden">
	                    <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- About End -->




	<?php

    include_once('footer.php');

    ?>