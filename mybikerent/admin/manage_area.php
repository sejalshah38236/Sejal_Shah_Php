 <?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">MANAGE AREA</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage AREA
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Area Id</th>
                                            <th>Area Name</th>
                                            <th>Pincode</th>
                                            <th>City Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(!empty($area_arr)){
                                            foreach ($area_arr as $data) {
                                        ?>
                                        <tr>
                                            <td><?php echo $data->area_id ?></td>
                                            <td><?php echo $data->area_name ?></td>
                                            <td><?php echo $data->pincode ?></td>
                                            <td><?php echo $data->city_name ?></td>
                                            <td><a href="editarea?editarea_id=<?php echo $data->area_id ?>" class="btn btn-primary">Edit</a></td>
                                            <td><a href="delete?delarea_idbtn=<?php echo $data->area_id?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        
                                        <?php
                                            }
                                        }
                                        ?>
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