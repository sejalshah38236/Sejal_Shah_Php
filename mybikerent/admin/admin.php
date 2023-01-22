<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD ADMIN</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add Product
                        </div>
                        <div class="panel-body">
						
							 <div class="form-group">
								<label>Admin ID</label>
								<input class="form-control" type="text" name="admin_id"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Name</label>
								<input class="form-control" type="text" name="name"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="email"/>
							</div>
                            <div class="form-group">
								<label>Password</label>
								<input class="form-control" type="password" name="pwd"/>
							</div>
                            <div class="form-group">
								<label>Created Date/Time</label>
								<input class="form-control" type="datetime" name="created_dt"/>
							</div><div class="form-group">
								<label>Updated Date/Time</label>
								<input class="form-control" type="datetime" name="updated_dt"/>
							</div>
         
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" type="text" name="submit"/>
									
								</div>
                            </div>
                        </div>
                   </div>

        </div>
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?> 