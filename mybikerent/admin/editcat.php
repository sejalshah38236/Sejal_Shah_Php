<?php

 include_once('header.php')
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<div class="site-blocks-cover inner-page" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto align-self-center">
            <div class=" text-center">
              <h1>Edit Category</h1>
              
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Edit Profile</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Edit Category</h2>
          </div>
          <div class="col-md-12">
    
            <form action="" method="post" enctype="multipart/form-data">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Category Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?php echo $fetch->cust_name?>" name="cust_name">
                  </div>
                  
                </div>
				<div class="form-group row">
                  <div class="col-md-12">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" value="<?php echo $fetch->email?>"  name="email">
                  </div>
                 
                </div>
				
				  
					
                </div>
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Save Profile">
                  </div>
				  
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>



    

<?php
include_once('footer.php');
?>
   