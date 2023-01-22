<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD Area</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add Area
                        </div>
                        <div class="panel-body">
						
							 <form action="" method="post" enctype="multipart/form-data">
 
                            <div class="form-group">
								<label>Area Name</label>
								<input class="form-control" type="text" name="area_name"/>
								<p class="help-block">Help text here.</p>
							</div>
                             <div class="form-group">
                                <label><P>Pincode No</P></label>
                                <input class="form-control" type="text" name="pincode"/>
                                <p class="help-block">Help text here.</p>
                            </div>
                            <div class="form-group">
								<label>Created Date/Time</label>
								<input class="form-control" type="datetime" name="created_dt"/>
							</div><div class="form-group">
								<label>Updated Date/Time</label>
								<input class="form-control" type="datetime" name="updated_dt"/>
							</div>
                           <!-- <div class="form-group">
                                <label><P>City Id</P></label>
                                <input class="form-control" type="text" name="city_name"/>
                                <p class="help-block">Help text here.</p>
                            </div>-->
                             <div class="col-md-4">
                            <label for="Email" class="text-black">Select City <span class="text-danger">*</span></label>
                            <select class="form-control" id="city_name" name="city_name">
                                <option>Select City</option>
                                <?php 
                                foreach($city as $d)
                                {
                                ?>
                                    <option value="<?php echo $d->city_name?>">
                                        <?php echo $d->city_name?>
                                    </option>
                                <?php
                                }
                                ?>
                    </select>
                </div>

                  </div>
         
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" type="text" name="submit" />
									
								</div>
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