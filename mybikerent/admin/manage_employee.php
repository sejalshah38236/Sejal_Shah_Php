<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">MANAGE Employee</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Employee
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Employee ID</th>
                                            <th>Employee Name</th> 
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Phone No</th>
                                            <th>Employee Image</th>
                                            <th>Created Date</th>
                                            <th>Updated Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(!empty($employee_arr))
                                        {
                                            foreach($employee_arr as $data)
                                            {
                                        ?>
                                                <tr>    
                                                    <td><?php echo $data->emp_id?></td>
                                                    <td><?php echo $data->emp_name?></td>
                                                    <td><?php echo $data->email?></td>
                                                    <td><?php echo $data->password?></td>
                                                    <td><?php echo $data->phone_no?></td>
                                                    <td><img src="../website/images/upload/employee/<?php echo $data->emp_img?>" height="100px" width="100px"></td>
                                                    <td><?php echo $data->created_date?></td>
                                                    <td><?php echo $data->updated_date?></td>


                                                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                                                    <td><a href="delete?delemp_idbtn=<?php echo $data->emp_id?>" class="btn btn-danger">Delete</a>
                                                    </td>

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