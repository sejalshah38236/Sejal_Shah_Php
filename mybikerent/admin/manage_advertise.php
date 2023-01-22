<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">MANAGE Advertisement</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Product
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Advertise id</th>
                                            <th>Vehicle Title</th>
                                            <th>Drive Type</th>
                                            <th>Vehicle No</th>
                                            <th>rc book</th>
                                               <th>Licence No</th>
                                            <th>Vehicle Pickup Address</th>
                                         
                                            <th>Fuel Type</th>
                                            <th>Rent Type</th>
                                            <th>Rent Amount</th>
                                            <th>Rent Decription</th>
                                            <th>Images</th>
                                            <th>T & C</th>
                                            <th>Created Date</th>
                                            <th>Updated Date</th>
                                           <!-- <th>Customer Id</th>
                                            <th>City Id</th>
                                            <th>Area Id</th>-->
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            if(!empty($advertise_arr))
                                            {
                                                foreach ($advertise_arr as $data) 
                                                {
                                        ?>

                                            <tr>
                                                <td><?php echo $data->adv_id ?></td>
                                                <td><?php echo $data->veh_title ?></td>
                                                <td><?php echo $data->drive_type ?></td>
                                                <td><?php echo $data->veh_no ?></td>
                                                <td><?php echo $data->rc_book ?></td>
                                                <td><?php echo $data->lic_no ?></td>
                                                <td><?php echo $data->veh_pickup_add ?></td>
                                                <td><?php echo $data->fuel_type ?></td>
                                                <td><?php echo $data->rent_type ?></td>
                                                <td><?php echo $data->rent ?></td>
                                                <td><?php echo $data->rent_des ?></td>
                                                <td><?php echo $data->images ?></td>
                                                <td><?php echo $data->t_and_c ?></td>
                                                <td><?php echo $data->created_date ?></td>
                                                <td><?php echo $data->updated_date ?></td>

                                                <!--<td><?php echo $data->cust_id ?></td>
                                                <td><?php echo $data->city_id  ?></td>
                                                <th><td><?php echo $data->cust_id ?></td>
                                                <td><?php echo $data->cat_id ?></td>-->
                                                <td><a href="#" class="btn btn-primary">Edit</a></td>
                                                <td><a href="delete?deladv_idbtn=<?php echo $data->adv_id ?>" class="btn btn-danger">Delete</a></td>

                                            </tr>
                                        <?php

                                                }
                                            }
                                        ?>
                                      
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