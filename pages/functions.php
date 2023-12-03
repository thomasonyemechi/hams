<?php
session_start(); // Starting Session
include("connection.php");
RegisterStudent();
LoginStudent();

function RegisterStudent()
{
    global $con;

    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['register']))
 		{ 
 			//something was posted
 			$matric_number = $_POST['matricno'];
            $email= $_POST['email'];
 			$password = $_POST['password'];
			$hashed_password = password_hash($password, PASSWORD_DEFAULT);

 			if(!empty($matric_number) && !empty($password))
 			{

 				//save to database
 				$user_id = random_num(20);
 				$query = "insert into student (id,matricno,email,password) values ('$user_id','$matric_number','$email',
				'$hashed_password')";

 				mysqli_query($con, $query);

 				header("location:login.php");
 				die;

 			}else{
 				echo "please enter some valid information!";
 			}
 		}
    }


    function random_num($length)
    {
        $text = "";
        if ($length < 5) 
        {
            $length = 5;
        }
    
        $len = rand(4,$length);
        for ($i=0; $i < $len ; $i++) 
        { 
            
            $text.= rand(0,9);
        }
    
        return $text;
    }







function check_login($con)
{
	if(isset($_SESSION['user_id']))
	{
		$id =$_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);

		if ($result && mysqli_num_rows($result) > 0) 
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("location:login.php");
	die;
}



function LoginStudent()
{
    global $con;
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['login'])) 
 		{
 			//something was posted
 			$matric_number = $_POST['matricno'];
 			$password = $_POST['password'];

 			if(!empty($matric_number) && !empty($password))
 			{

 				//save to database
 				$query = "SELECT * FROM student WHERE matricno = '$matric_number' limit 1 ";

 				$result = mysqli_query($con, $query);
 				
 					if ($result && mysqli_num_rows($result) > 0) 
					{
						$user_data = mysqli_fetch_assoc($result);
						if(password_verify($password,$user_data['password'] ))
						{
							$_SESSION['id'] = $user_data['id'];

							header("location: ./index.php");
						}
					}
 				

 				echo "Wrong username and password!";

 			}else{
 				echo "please enter some valid information!";
 			}
 		}
    }
 ?>
