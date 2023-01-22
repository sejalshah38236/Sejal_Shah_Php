<?php

include_once('../admin/model.php'); // step 1

class control extends model   // step 2
{
	function __construct()
	{
		session_start();
		model::__construct(); // step 3
		
		$url=$_SERVER['PATH_INFO'];
		
		switch($url)
		{
		
			case '/index':
			$country=$this->select('country');
			$city=$this->select('city');
			$category=$this->select('category');
			include_once('index.php');
			break;
			
			case '/advertisement':
			include_once('advertisement.php');
			break;

			case '/categories':
			include_once('categories.php');
			break;

		
			case '/about':
			include_once('about.php');
			break;
			
			case '/contact':
			include_once('contact.php');
			break;

			
			case '/signup':
			if(isset($_REQUEST['submit']))
			{
				$cust_name=$_REQUEST['cust_name'];
				$phone_no=$_REQUEST['phone_no'];
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
				$gender=$_REQUEST['gender'];
				$lang_arr=$_REQUEST['lang'];
				$lang=implode(",",$lang_arr);
				$c_id=$_REQUEST['c_id'];
				$file=$_FILES['file']['name'];
				$path='images/upload/customer/'.$file;
				$tmp_file=$_FILES['file']['tmp_name'];
				move_uploaded_file($tmp_file,$path);
				
				//date_default_timezone_set("asia/calcutta");
				//$created_dt=date("Y-m-d H:i:s");
				//$updated_dt=date("Y-m-d H:i:s");
				
				$data=array("cust_name"=>$cust_name,"phone_no"=>$phone_no,"email"=>$email,
					"password"=>$enc_password,"gender"=>$gender
				,"lang"=>$lang,"c_id"=>$c_id,"file"=>$file);
				
				$res=$this->insert('customer',$data);	
				if($res)
				{
					echo "<script>
					alert('Register Success');
					window.location='login';
					</script>";
				}
				   else
				{
					echo "Not success";
				}	
				
			}
			
			
			$country=$this->select('country');
			include_once('signup.php');
			break;
			
			
			case '/login':
			if(isset($_REQUEST['submit']))
			{
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
				
				$where=array("email"=>$email,"password"=>$enc_password);
				$run=$this->select_where('customer',$where);
				
				$chk=$run->num_rows; // check rows wise condition => ans givbe in true or false
				if($chk==1)
				{
					$fetch=$run->fetch_object(); // if only for single data
					
					$_SESSION['email']=$fetch->email;
					$_SESSION['cust_id']=$fetch->cust_id;
					$_SESSION['cust_name']=$fetch->cust_name;
					echo "<script>
					alert('Login Success');
					window.location='index';
					</script>";
				}
				else
				{
					echo "<script>
					alert('Login failed');
					</script>";
				}	
			}
			include_once('login.php');
			break;

			case '/profile':
			$where=array("customer.cust_id"=>$_SESSION['cust_id']);
			$run=$this->select_where_join('customer','country','customer.c_id=country.c_id',$where);
			$fetch=$run->fetch_object(); // if only for single data
		
			include_once('profile.php');
			break;
			

			case '/edituser':
			$country=$this->select('country');
			if(isset($_REQUEST['btnedit']))
			{
				$cust_id=$_REQUEST['btnedit'];
				$where=array("cust_id"=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				
				
				if(isset($_REQUEST['submit']))
				{
					$cust_name=$_REQUEST['cust_name'];
					$phone_no=$_REQUEST['phone_no'];
					$email=$_REQUEST['email'];
					$gender=$_REQUEST['gender'];
					$lang_arr=$_REQUEST['lang'];
					$lang=implode(",",$lang_arr);
					$c_id=$_REQUEST['c_id'];
					
					
					if($_FILES['file']['size']>0)
					{
						$file=$_FILES['file']['name'];
						$path='images/upload/customer/'.$file;
						$tmp_file=$_FILES['file']['tmp_name'];
						move_uploaded_file($tmp_file,$path);
						
						$data=array("cust_name"=>$cust_name,"phone_no"=>$phone_no,"email"=>$email,"gender"=>$gender
					,"lang"=>$lang,"file"=>$file,"c_id"=>$c_id);
						
						$old_file=$fetch->file;
						
						$res=$this->update('customer',$data,$where);	
						if($res)
						{
							unlink('images/upload/customer/'.$old_file);
							echo "<script>
							alert('Update Success');
							window.location='profile';
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
						$data=array("cust_name"=>$cust_name,"phone_no"=>$phone_no,"email"=>$email,"gender"=>$gender,"lang"=>$lang,"c_id"=>$c_id);
						$old_file=$fetch->file;

					
						$res=$this->update('customer',$data,$where);	
						if($res)
						{
							echo "<script>
							alert('Update Success');
							window.location='profile';
							</script>";
						}
						
					}

				}					
				
				
			}
			include_once('edituser.php');
			break;
			
			
			
			case '/logout':
			unset($_SESSION['email']);
			unset($_SESSION['cust_id']);
			unset($_SESSION['cust_name	']);
			echo "<script>
				alert('Logout Success');
				window.location='index';
				</script>";
			break;
			
			
			default:
			include_once('pnf.php');
			break;
			
		}
		
		
	}
}
$obj=new control;


?>