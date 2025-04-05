<?php

include_once('header.php');

?>
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Edit Product</h4>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Edit Product
                    </div>
                    <div class="panel-body">
					
					
						 <form role="form" method="post" enctype="multipart/form-data">
							<div class="form-group">
                                <label>Select Categories</label>
								
                                <select name="cate_id" class="form-control">
                                    
									<option value="">--- Select Product Categories ---</option>
                                    <?php
									foreach($categories_arr as $d)
									{
										if($d->id==$fetch->cate_id)
										{
									?>
										<option value="<?php echo $d->id;?>" selected>
											<?php echo $d->name;?>
										</option>
                                    <?php
										}
										else
										{
									?>
										<option value="<?php echo $d->id;?>">
											<?php echo $d->name;?>
										</option>
									<?php	
										}
									}
									?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Enter Product Name</label>
                                <input class="form-control" value="<?php echo $fetch->name?>" name="name" type="text" />
                            </div>
							 <div class="form-group">
                                <label>Decsription</label>
                                <textarea name="description" class="form-control" rows="3"><?php echo $fetch->description?></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Enter Product Price</label>
                                <input class="form-control" value="<?php echo $fetch->price?>" name="price" type="number" />
                            </div>
							<div class="form-group">
                                <label>Upload Categories Image</label>
                                <input class="form-control" name="image" type="file" />
								<td><img src="../website/upload/product/<?php echo $fetch->image?>" width="50px"></td>
                            </div>
                            <button type="submit" name="submit" class="btn btn-info">Add</button>
                        </form>
					
                        
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<?php
include_once('footer.php');
?>