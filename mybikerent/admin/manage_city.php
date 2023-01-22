 <?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">MANAGE CITY</h4>
                
             </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage City
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                     
                                        <tr>
                                            <th>City Id</th>
                                            <th>City Name</th>
                                            <th>City Code</th>
                                            
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
    

                                        <?php
                                        if(!empty($city_arr))
                                        {
                                            foreach($city_arr as $data)
                                            {
                                     ?>
                                            <tr>
                                                <td><?php echo $data->city_id?></td>
                                                <td><?php echo $data->city_name?></td>
                                                <td><?php echo $data->city_code?></td>
                                                <td><a href="editcity?editcity_idbtn=<?php echo 
                                                    $data->city_id?>" class="btn btn-primary">Edit</a></td>
                                                <td><a href="delete?delcity_idbtn=<?php echo $data->city_id?>" class=" btn btn-danger">Delete</a></td>
                                                    
                                            </tr>

                                     <?php
                                         }
                                        }
                                     ?> 
                                     <
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            
            
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?>    