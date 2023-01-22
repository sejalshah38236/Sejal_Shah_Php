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
              <h1>Edit Profile</h1>
              
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
            <h2 class="h3 mb-5 text-black">Edit Profile</h2>
          </div>
          <div class="col-md-12">
    
            <form action="" method="post" enctype="multipart/form-data">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?php echo $fetch->cust_name?>" name="cust_name">
                  </div>
                  <div class="col-md-6">
                    <label for="Mobile" class="text-black">Mobile <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" value="<?php echo $fetch->phone_no?>"  name="phone_no">
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-md-12">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" value="<?php echo $fetch->email?>"  name="email">
                  </div>
                 
                </div>
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Gender <span class="text-danger">*</span></label>
					<?php
					$gender=$fetch->gender;
					if($gender=="Male")
					{
					?>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male"  checked>Male
					  <label class="form-check-label" for="radio1"></label>
					</div>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gender" value="Female">Female
					  <label class="form-check-label" for="radio1"></label>
					</div>
                   <?php
					}
					else
					{	
				   ?>
				   <div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male"  >Male
					  <label class="form-check-label" for="radio1"></label>
					</div>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gender" value="Female" checked>Female
					  <label class="form-check-label" for="radio1"></label>
					</div>
				  
				  <?php
					}
				  ?>
				  </div>
                  <div class="col-md-6">
				  
                    <label for="Mobile" class="text-black">Language <span class="text-danger">*</span></label>
                    
					<?php
					$lang=$fetch->lang;
					$lang_arr=explode(",",$lang);
					?>
					
					<div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lang[]" value="Hindi" 
					<?php 
					if(in_array("Hindi",$lang_arr))
					{
						echo "checked";
					}
					?>>Hindi
					  <label class="form-check-label" for="radio1"></label>
					</div>
					 <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lang[]" value="English" 
					  <?php
					if(in_array("English",$lang_arr))
					{
						echo "checked";
					}
					?>>English
					  <label class="form-check-label" for="radio1"></label>
					</div>
					 <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lang[]" value="Gujarati" 
					  <?php
					if(in_array("Gujarati",$lang_arr))
					{
						echo "checked";
					}
					?>>Gujarati
					  <label class="form-check-label" for="radio1"></label>
					</div>
                  </div>
				  
				  <div class="col-md-6">
					<label for="Email" class="text-black">Select Country <span class="text-danger">*</span></label>
					<select class="form-control" id="c_fname" name="c_id">
						<option>Select Country</option>
						<?php 
						foreach($country as $d)
						{
							if($d->c_id==$fetch->c_id)
							{
						?>
							<option value="<?php echo $d->c_id?>" selected>
								<?php echo $d->c_name?>
							</option>
						<?php
							}
							else
							{
						?>
							<option value="<?php echo $d->c_id?>">
								<?php echo $d->c_name?>
							</option>
						<?php	
							}
						}
						?>
					</select>
				  </div>
				  <div class="col-md-6">
					<label for="password" class="text-black">Upload profile <span class="text-danger">*</span></label>
					<input type="file" class="form-control" id="c_lname" name="file">
					<img src="images/upload/customer/<?php echo $fetch->file?>" alt="Image placeholder" width="50px" class="mb-4">
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
   