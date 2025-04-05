<?php

if(isset($_SESSION['s_id']))
{
	
}
else
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
        <h1 class="text-white display-3 mt-lg-5">Edit Profile</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Edit Profile</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Edit Profile</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="contact-form bg-light rounded p-5">
                    <div id="success"></div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-sm-12 control-group">
                                <input type="text" value="<?php echo $fetch->name;?>" name="name" class="form-control p-4" id="name" placeholder="Your Name" required="required"  />
                                <p class="help-block text-danger"></p>
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 control-group">
                                <input type="email" value="<?php echo $fetch->email;?>" name="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <p class="help-block text-secondary">Gender :</p>
								<?php
								$gender=$fetch->gender;
								?>
                                Male : <input type="radio" name="gender" <?php if($gender=="Male") { echo "checked";} ?> value="Male"  />
                                Female : <input type="radio" name="gender" <?php if($gender=="Female") { echo "checked";} ?>  value="Female"  />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <p class="help-block text-secondary">Hobby :</p>
								<?php
								$hobby_str=$fetch->hobby; //Singing,Sports,Dancing
								$hobby_arr=explode(",",$hobby_str);	
								?>
                                Singing : <input type="checkbox" name="hobby[]" <?php if(in_array("Singing",$hobby_arr)) { echo "checked"; }?> value="Singing" class="" />
                                Sports : <input type="checkbox" name="hobby[]" <?php if(in_array("Sports",$hobby_arr)) { echo "checked"; }?> value="Sports" class="" />
                                Dancing : <input type="checkbox" name="hobby[]" <?php if(in_array("Dancing",$hobby_arr)) { echo "checked"; }?> value="Dancing" class="" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="control-group">
                            <input type="file" name="image" class="form-control p-4" id="file" required="required" />
							<img src="upload/customer/<?php echo $fetch->image?>" style="width:100px;height:100px" >
                            <p class="help-block text-danger"></p>
                        </div>

                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" name="submit" type="submit" id="sendMessageButton">Save</button>
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