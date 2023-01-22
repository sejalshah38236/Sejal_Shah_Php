<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD Employee</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add Employee
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">

                        <div class="panel-body">
						
							 <!--<div class="form-group">
								<label>Employee ID</label>
								<input class="form-control" type="text" id="emp"/>
								<p class="help-block">Help text here.</p>
							</div>-->
                            <div class="form-group">
								<label>Employee Full Name</label>
								<input class="form-control" type="text" id="emp_name" name="emp_name" />
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Email Id</label>
								<input class="form-control" type="email" id="email" name="email" />
							</div>
                            <div class="form-group">
								<label>Password</label>
								<input class="form-control" type="password" id="password" name="password" />
							</div>
                            <div class="form-group">
								<label>Phone Number</label>
								<input class="form-control" type="text" id="phone_no" name="phone_no" />
							</div>
							<div class="form-group">
								<label>Employee Image</label>
								<input class="form-control" type="file" id="emp_img" name="emp_img" />
							</div>
                           
                            
         
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" type="submit" name="submit" />
									
								</div>
                           
                        </div>
                   </div>
                 </form>
        </div>
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?> 