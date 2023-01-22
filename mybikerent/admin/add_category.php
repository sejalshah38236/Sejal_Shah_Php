<?php
include_once('header.php');
?>
    <div class="content-wrapper">
        <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Add Category</h4>
                
            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add Category
                        </div>
					  <form action="" method="post" enctype="multipart/form-data">
                        <div class="panel-body">
						
							 <div class="form-group">
								<label>Category Name</label>
								<input type="text" class="form-control"  id="cat_name" name="cat_name"/>
								<p class="help-block">Help text here.</p>
							</div>
							<div class="form-group">
								<label>Category Image</label>
								<input type="file" class="form-control" id="file" name="file" />
								<p class="help-block">Help text here.</p>
							</div>
							
							<hr />
						
							 <div class="form-group">
								
								<input type="submit" class="btn btn-primary" name="submit" class="btn btn-primary btn-lg btn-block" value="Add" />
								
							</div>
						</div>
			</form>
					</div>
			   </div>
           
        </div>
    </div>
    </div>
 <?php
 include_once('footer.php');
 
 ?> 