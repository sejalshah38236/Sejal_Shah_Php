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
          <form action="" method="post" enctype="multipart/form-data">
    
          <div class="col-md-12 mb-0">
            <a href="index">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Edit Category</strong>
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
              <div class="panel-body">
            
              <div class="form-group">
                <label>Category Name</label>
                <input type="text" class="form-control"  value="<?php echo $fetch->cat_name?>" name="cat_name"/>
                <p class="help-block">Help text here.</p>
              </div>
              <div class="form-group">
                <label>Category Image</label>
                <input type="file" class="form-control" id="file" name="file" />
                <img src="../website/images/upload/category/<?php echo $fetch->file?>" alt="Image placeholder" height="50px" width="50px" class="mb-4">
                <p class="help-block">Help text here.</p>
              </div>
          
              <hr />
            
               <div class="form-group">
                
                <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Save Profile">
                
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
   