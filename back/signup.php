<?php 
session_start();

	include("connection.php");
	include("functions.php");

	//-- DEF => Fonction de création de compte. ID USER généré en random
	//-- ATT => mot de passe / USER ID et USER Name
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		echo "<script>alert(\"Inscription confirmer!\")</script>";
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			
			$user_id = random_num(10);
			$_SESSION['user_id'] = $user_id;
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
			
			mysqli_query($con, $query);

			header("Location: ../compte.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
