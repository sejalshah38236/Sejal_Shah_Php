<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD USER</h4>
                
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
								<label>User ID</label>
								<input class="form-control" type="text" name="cust_id"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Name</label>
								<input class="form-control" type="text" name="cust_name"/>
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
								<label>Mobile Number</label>
								<input class="form-control" type="text" name="mno"/>
							</div>
                            <div class="form-group">
								<label>Adhar Number</label>
								<input class="form-control" type="text" name="adhar_no"/>
							</div>
                            <div class="form-group">
								<label>Driving Licence Number</label>
								<input class="form-control" type="text" name="drive_no"/>
							</div>
                            <div class="form-group">
								<label>Address</label>
								<input class="form-control" type="text" name="add"/>
							</div>
                            <div class="form-group">
								<label>Pincode</label>
								<input class="form-control" type="text" name="pincode"/>
							</div>
                            <div class="form-group">
								<label>Created Date/Time</label>
								<input class="form-control" type="datetime" name="created_dt"/>
							</div><div class="form-group">
								<label>Updated Date/Time</label>
								<input class="form-control" type="datetime" name="updated_dt"/>
							</div>
         
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" type="text" />
									
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