<?php

include_once('header.php');

?>


<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Products</h4>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Manage Products
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
										<th>Categories</th>
                                        <th>Name</th>
										<th>Description</th>
										<th>Price</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								foreach($product_arr as $d)
								{
								?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $d->id?></td>
                                        <td><?php echo $d->cate_id?></td>
                                        <td><?php echo $d->name?></td>
										<td><?php echo $d->description?></td>
										<td><?php echo $d->price?></td>
										<td><img src="../website/upload/product/<?php echo $d->image?>" width="50px"></td>
                                        <td class="center">
                                            <a href="edit_products?edit_products=<?php echo $d->id?>" class="btn btn-primary">Edit</a>
                                            <a href="delete?del_product=<?php echo $d->id?>" class="btn btn-danger">Delete</a>
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