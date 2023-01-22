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
              <h1>Edit Area</h1>
              
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <form action="" method="post" enctype="multipart/form-data">
    
          <div class="col-md-12 mb-0">
            <a href="index">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Edit Area</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Edit Area</h2>
          </div>
          <div class="col-md-12">
    
            <form action="" method="post" enctype="multipart/form-data">
              <div class="panel-body">
            
              <div class="form-group">
                <label>Area Name</label>
                <input type="text" class="form-control"  value="<?php echo $fetch->area_name?>" name="area_name"/>
                <p class="help-block">Help text here.</p> 
              </div>
              <div class="form-group">
                <label>Pincode</label>
                <input type="text" class="form-control"  value="<?php echo $fetch->pincode?>" name="pincode"/>
                <p class="help-block">Help text here.</p> 
              </div>
               <div class="form-group">
                <label>City Name</label>
                <input type="text" class="form-control"  value="<?php echo $fetch->city_name?>" name="city_name"/>
                <p class="help-block">Help text here.</p> 
              </div>
              
          
              <hr />
            
               <div class="form-group">
                
                <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Save Area">
                
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
   