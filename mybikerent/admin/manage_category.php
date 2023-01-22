 <?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">MANAGE CATEGORY</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Category
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Category Id</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(!empty($category_arr))
                                        {
                                            foreach($category_arr as $data)
                                            {
                                        ?>
                                                <tr>    
                                                    <td><?php echo $data->cat_id ?></td>
                                                    <td><?php echo $data->cat_name ?></td>
                                                    <td><img src="../website/images/upload/category/<?php echo $data->file?>" width=100px heigt=100px ></td>
                                                    <td><a href="editcategory?editcat_idbtn=<?php echo 
                                                    $data->cat_id?>" class="btn btn-primary">Edit</a></td>
                                                    <td><a href="delete?delcat_idbtn=<?php echo 
                                                    $data->cat_id?>" class="btn btn-danger">Delete</a></td>

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