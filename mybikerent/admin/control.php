<?php

include_once('model.php'); // step 1

class control extends model   // step 2
{
    function __construct()
    {
        session_start();
        model::__construct(); // step 3
        
        $url=$_SERVER['PATH_INFO'];
        
        switch($url)
        {
            case '/admin':
            if(isset($_REQUEST['submit']))
            {
               echo $anm=$_REQUEST['anm'];
               echo $apass=$_REQUEST['apass'];
               // $enc_apass=md5($apass);
                    
                $where=array("anm"=>$anm,"apass"=>$apass);
                $run=$this->select_where('admin',$where);
                
                $chk=$run->num_rows; // check rows wise condition => ans givbe in true or false
                if($chk==1)
                {
                    $fetch=$run->fetch_object(); // if only for single data
                    
                    $_SESSION['anm']=$fetch->anm;
                    $_SESSION['aid']=$fetch->aid;
                    echo "<script>
                    alert('Login Success');
                    window.location='dashboard';
                    </script>";
                }
                else
                {
                    echo "<script>
                    alert('Login failed');
                    </script>";
                }   
            }
            include_once('index.php');
            break;
            
            
            case '/adminlogout':
            unset($_SESSION['anm']);
            unset($_SESSION['aid']);
            echo "<script>
                alert('Logout Success');
                window.location='admin';
                </script>";
            break;
            
            case '/dashboard':
                include_once('dashboard.php');
                break;

            case '/manage-booking':
                include_once('manage_booking.php');
                break;

            case '/add-category':
                include_once('add_category.php');
                if(isset($_REQUEST['submit']))
                {
                    $cat_name=$_REQUEST['cat_name'];
    
                    $file=$_FILES['file']['name'];
                    $path='../website/images/upload/category/'.$file;
                    $tmp_file=$_FILES['file']['tmp_name'];
                    move_uploaded_file($tmp_file, $path);

                    $data=array("cat_name"=>$cat_name,"file"=>$file,"cat_des"=>$cat_des);

                    $res=$this->insert('category',$data);
                    if($res)
                    {
                        echo "'<script>
                        alert('Category Added Successfully');
                        window.location='manage-category';
                        </script>";

                    }
                    else
                    {
                        echo "Not Success";
                    }
                    
                }
                break;

            case '/manage-category':
                $category_arr=$this->select('category');
                include_once('manage_category.php');
                break;

            case '/editcategory':
            $country=$this->select('category');
            if(isset($_REQUEST['editcat_idbtn']))
            {
                $cat_id=$_REQUEST['editcat_idbtn'];
                $where=array("cat_id"=>$cat_id);
                $run=$this->select_where('category',$where);
                $fetch=$run->fetch_object();
                
                
                if(isset($_REQUEST['submit']))
                {
                    
                    $cat_name=$_REQUEST['cat_name'];
                    $file=$_REQUEST['file'];
                    
                    
                    if($_FILES['file']['size']>0)
                    {
                        $file=$_FILES['file']['name'];
                        $path='../website/images/upload/category/'.$file;
                        $tmp_file=$_FILES['file']['tmp_name'];
                        move_uploaded_file($tmp_file,$path);
                        
                        $data=array("cat_name"=>$cat_name,"file"=>$file);
                        
                        $old_file=$fetch->file;
                        
                        $res=$this->update('category',$data,$where);    
                        if($res)
                        {
                            unlink('../website/images/upload/category/'.$old_file);
                            echo "<script>
                            alert('Update Success');
                            window.location='manage-category';
                            </script>";
                        }
                        else{
                            echo "<script>
                            alert('Update Failed');
                            </script>";
                        }
                    }
                    else
                    {
                        $data=array("cat_name"=>$cat_name,"file"=>$file);
                        $old_file=$fetch->file;

                    
                        $res=$this->update('category',$data,$where);    
                        if($res)
                        {
                            echo "<script>
                            alert('Update Success');
                            window.location='manage-category';
                            </script>";
                        }
                        
                    }

                }                   
                
                
            }
            include_once('editcategory.php');
            break;
            
            case '/editcity':
            $city=$this->select('city');
            if(isset($_REQUEST['editcity_idbtn']))
            {
                $city_id=$_REQUEST['editcity_idbtn'];
                $where=array("city_id"=>$city_id);
                $run=$this->select_where('city',$city_id);
                $fetch=$run->fetch_object();

                if(isset($_REQUEST['submit']))
                {
                    $city_name=$_REQUEST['city_name'];
                    $city_code=$_REQUEST['city_code'];

                    $data=array("city_name"=>$city_name,"city_code"=>$city_code);
                    $res=$this->update('city',$data,$where);    
                        if($res)
                        {
                            echo "<script>
                            alert('Update Success');
                            window.location='manage-city';
                            </script>";
                        }
                        else
                        {
                            echo "<script>
                            alert('Update Failed');
                            </script>";
                        }
                }


            }

            include_once('editcity.php');
            break;

            case'/editarea':
            $area=$this->select('area');
            if(isset($_REQUEST['editarea_idbtn']))
            {
                $area_id=$_REQUEST['editarea_idbtn'];
                $where=array("area_id"=>$area_id);
                $run=$this->select_where_join('area',$area_id);
                $fetch=$run->fetch_object();

                if(isset($_REQUEST['submit']))
                {
                    $area_name=$_REQUEST['area_name'];
                    $pincode=$_REQUEST['pincode'];
                    $city_name=$_REQUEST['city_name'];

                    $data=array("area_name"=>$area_name,"pincode"=>$pincode,"city_name"=>$city_name);
                    $res=$this->update('area',$data,$where);
                    if($res)
                    {
                          echo "<script>
                            alert('Update Success');
                            window.location='manage-area';
                            </script>";

                    }
                    else
                        {
                            echo "<script>
                            alert('Update Failed');
                            </script>";
                        }

                }
            }

            include_once('editarea.php');
            break;
                
              

            case '/add-employee':
                
                if(isset($_REQUEST['submit']))
                {
                    $emp_name=$_REQUEST['emp_name'];
                    $email=$_REQUEST['email'];
                    $password=$_REQUEST['password'];
                    $enc_password=md5('password');
                    $emp_img=$_FILES['emp_img']['name'];
                    $path='../website/images/upload/employee/'.$emp_img;
                    $tmp_file=$_FILES['emp_img']['tmp_name'];
                    move_uploaded_file($tmp_file, $path);
                   
                   $data=array("emp_name"=>$emp_name,"email"=>$email,"password"=>$enc_password,"emp_img"=>$emp_img);

                   $res=$this->insert('employee',$data);
                   if($res)
                   {
                    echo "<script>
                    alert('Employee Added Successfully);
                    window.location='manage-employee';
                    </script>";
                   }
                   else{
                       echo "Failed to Add Employee";                   }

                }
                include_once('add_employee.php');
                break;

             case '/manage-employee':
                $employee_arr=$this->select('employee');
                include_once('manage_employee.php');
                break;

            case '/manage-user':
                $user_arr=$this->select('customer');
                include_once('manage_user.php');
                break;

            
            case '/add-area':
                if(isset($_REQUEST['submit']))
                {
                    $area_name=$_REQUEST['area_name'];
                    $pincode=$_REQUEST['pincode']; 
                    $city_name=$_REQUEST['city_name'];

                    $data=array("area_name"=>$area_name,"pincode"=>$pincode,"city_name"=>$city_name);

                    $res=$this->insert('area',$data);
                    if($res)
                    {
                        echo "<script>
                    alert('Area Added Successfully);
                    window.location='manage-area';
                    </script>";
                    }

                }



                $city=$this->select('city');
                include_once('add_area.php');
                break;
            
             case '/manage-area':
                $area_arr=$this->select('area');
                include_once('manage_area.php');
                break;


            case '/add-city':
                if(isset($_REQUEST['submit']))
                {
                    $city_name=$_REQUEST['city_name'];
                    $city_code=$_REQUEST['city_code']; 

                    $data=array("city_name"=>$city_name,"city_code"=>$city_code);

                    $res=$this->insert('city',$data);
                    if($res)
                    {
                        echo "<script>
                    alert('City Added Successfully);
                    window.location='manage-city';
                    </script>";
                    }

                }



                $city=$this->select('city');
                include_once('add_city.php');
                break;

           

            case '/manage-city':
                $city_arr=$this->select('city');
                include_once('manage_city.php');
                break;

            
          case '/delete':
            if(isset($_REQUEST['delcust_idbtn']))
            {
                $cust_id=$_REQUEST['delcust_idbtn'];
                $where=array("cust_id"=>$cust_id);
                
                // img del
                $res=$this->select_where('customer',$where);
                $fetch=$res->fetch_object();
                $old_file=$fetch->file;
                
                $run=$this->delete('customer',$where);
                if($run)
                {
                    unlink('../website/images/upload/customer/'.$old_file); 
                    echo "<script>
                        alert('Delete Success');
                        window.location='manage-cityuser';
                        </script>";
                }
            }
            



           if(isset($_REQUEST['delf_idbtn']))
            {
                $f_id=$_REQUEST['delf_idbtn'];
                $where=array("f_id"=>$f_id);
                $run=$this->delete('feedback',$where);
                if($run)
                {
                    echo "<script>
                        alert('Delete Success');
                        window.location='manage-feedback';
                        </script>";
                }
            }

            if(isset($_REQUEST['delcat_idbtn']))
            {
                $cat_id=$_REQUEST['delcat_idbtn'];
                $where=array("cat_id"=>$cat_id);
                $run=$this->delete('category',$where);
                if($run)
                {
                    echo "<script>
                        alert('Delete Success');
                        window.location='manage_feedback';
                        </script>";
                }
            }

             if(isset($_REQUEST['delemp_idbtn']))
            {
                $emp_id=$_REQUEST['delemp_idbtn'];
                $where=array("emp_id"=>$emp_id);
                $run=$this->delete('employee',$where);
                if($run)
                {
                    echo "<script>
                        alert('Delete Success');
                        window.location='manage-employee';
                        </script>";
                }
            }

            if(isset($_REQUEST['delcity_idbtn']))
            {
                $city_id=$_REQUEST['delcity_idbtn'];
                $where=array("city_id"=>$city_id);
                $run=$this->delete('city',$where);
                if($run)
                {
                    echo "<script>
                        alert('Delete Success');
                        window.location='manage-city';
                        </script>";
                }
            }
            
            if(isset($_REQUEST['delarea_idbtn']))
            {
                $area_id=$_REQUEST['delarea_idbtn'];
                $where=array("area_id"=>$area_id);
                $run=$this->delete('area',$where);
                if($run)
                {
                     echo "<script>
                        alert('Delete Success');
                        window.location='manage-area';
                        </script>";
                
                }
            }
            
            if(isset($_REQUEST['deladv_idbtn']))
            {
                $adv_id=$_REQUEST['deladv_idbtn'];
                $where=array("adv_id"=>$adv_id);
                $run=$this->delete('advertise',$where);
               if($run)
                {
                    echo "<script>
                    alert('Delete Success');
                    window.location='manage-advertise'
                    </script>";

                    
                }
            }
            break;
            
            case '/status':
            if(isset($_REQUEST['statuscust_idbtn']))
            {
                $cust_id=$_REQUEST['statuscust_idbtn'];
                $where=array("cust_id"=>$cust_id);
    
                $run=$this->select_where('customer',$where);
                $fetch=$run->fetch_object();
                $status=$fetch->status;
                if($status=="Block")
                {
                    $data=array("status"=>"Unblock");
                    $res=$this->update('customer',$data,$where);
                    if($res)
                    {
                        echo "<script>
                            alert('Unblock Success');
                            window.location='manage_user';
                            </script>";
                    }
                }
                else
                {
                    $data=array("status"=>"Block");
                    $res=$this->update('customer',$data,$where);
                    if($res)
                    {
                        unset($_SESSION['cust_name']);
                        unset($_SESSION['cust_id']);
                        unset($_SESSION['name']);
                        
                        echo "<script>
                            alert('Block Success');
                            window.location='manage_user';
                            </script>";
                    }
                }
            }
            
            break;
            
             case '/add-advertise':
                $employee_arr=$this->select('employee');
                include_once('add_advertisement.php');
                break;


            case '/manage-advertise':
                $advertise_arr=$this->select('advertise');
                include_once('manage_advertise.php');
                break;

                
            

             case '/manage-feedback':
                $feedback_arr=$this->select_join2('customer','feedback','customer.cust_id=feedback.cust_id');
                include_once('manage_feedback.php');
                break;

           // case '/add-location':
              //  $location_arr=$this->select('location')
               // include_once('add_location.php');
               // break;

            case '/header':
                include_once('header.php');
                break;

            case '/footer':
                include_once('footer.php');
                break;
                



            default:
            include_once('index.php');
        }
    }
}

$a = new control;
?>