<?php

include_once('header.php');

?>


<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Customer</h4>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Manage Customer
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
										<th>Email</th>
										<th>Gender</th>
										<th>Hobby</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
									foreach($customer_arr as $d)
									{
									?>
										<tr class="odd gradeX">
											<td><?php echo $d->id?></td>
											<td><?php echo $d->name?></td>
											<td><?php echo $d->email?></td>
											<td><?php echo $d->gender?></td>
											<td><?php echo $d->hobby?></td>
											<td><img src="../website/upload/customer/<?php echo $d->image?>" width="50px"></td>
											<td class="center">
												<a href="" class="btn btn-primary">Edit</a>
												<a href="delete?del_customer=<?php echo $d->id?>" class="btn btn-danger">Delete</a>
												<a href="" class="btn btn-success"><?php echo $d->status?></a>
											</td>
										</tr>
									<?php
									}
									?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>

    </div>
</div>
<?php
include_once('footer.php');
?>