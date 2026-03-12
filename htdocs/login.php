<?php  

	include ("connection.php");

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Credentials</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="images/11.png">


	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


	<style type="text/css">

		.shadow-custom {
		  box-shadow: 0 2px 17px 0 rgba(0, 0, 0, .25), 0 3px 10px 5px rgba(0, 0, 0, 0.05) !important;
		  border-radius: 15px;
		}

		.alert{
			position: relative;
			padding: 1rem 1rem 1rem 1rem;
		}	
	</style>	
</head>

<body class="pt-3" style="background: linear-gradient(90deg, rgb(144, 243, 152)0%, rgb(233, 238, 233)35%, rgb(144, 243, 152)100%);">

<div class="container d-flex justify-content-center" >
 	<div class="row text-center" style="width: 65vh">	


	<form action="login.php" method="post">
		<div class="container p-4 px-4 text-white text-center shadow-custom" style="border-radius: 15px; background: linear-gradient(90deg, rgb(4, 130, 12)0%, rgb(47, 187, 49)35%, rgb(3, 83, 12)100%)">

	 		<div class="mt-3">
	 			<a href="index.php">
				<img src="images/11.jpg"
				class="mx-auto d-block img-fluid my-3" style="width: 75px; border-radius:50%; box-shadow: 3px 4px 5px #000"></a>
				<h3>Student Login</h3>
			</div>


			
			<!-- Username -->
			<div class="mt-1 mt-4 d-flex justify-content-start">
				<label class="form-label"><b>Username:</b></label>
			</div>			

			<div class="mb-2 d-flex justify-content-start">
				<input type="text" class="form-control form-control-sm" 
				name="Username" placeholder="Enter Valid Username" required>
			</div>				



			<!-- Password -->
			<div class="mt-1 d-flex justify-content-start">
				<label class="form-label"><b>Password:</b></label>
			</div>			

			<div class="mb-2 d-flex justify-content-start">
				<input type="password" class="form-control form-control-sm" 
				name="Password" placeholder="Enter Password Here" required id="Show">
			</div>

		

			<div class="mt-3 d-flex justify-content-start">

				<div class="form-check">
					<label class="form-check-label">Show Password</label>
				  	<input class="form-check-input" type="checkbox" onclick="ShowPassword()">
				</div>	

				<!-- Show Password Script -->
				<script type="text/javascript">
					function ShowPassword() 
					{
						var show = document.getElementById('Show');
						if (show.type=='password') 
						{
							show.type='text';
						}
						else 
						{
							show.type='password';	
						}
					}
				</script>

			</div>

			<!-- Submit Button -->
			<div class="my-4 mt-4 d-flex justify-content-center">
				<button type="submit" class="btn btn-sm w-100 btn-light" 
				name="login" value="Login" style="color: black;">
					<b>Login</b>
				</button>
			</div>			

			<div class="mt-3 alert alert-danger h-25" id="failure" role="alert" style="display: none; height: 5px;">
  				<strong>Warning!</strong> User name or password is incorrect...			
			</div>						

			<div class="mt-1">
				<p>Not a member?<br>
				<a href="student-registration.php" class="my-4 mt-4 d-flex justify-content-center"
				style="text-decoration: none;background-color: #164b4e; padding:5px; color:#fff; border-radius:5px">Register Here</a></p>
			</div>

			<hr class="px-0">

		  	<!-- Copyright -->
		  	<div class="text-center text-white">	
		  		© 2026 Safari Academy. All Rights Reserved.	    
		  	</div>			




<?php

	if (isset($_POST['login']))  // Include Username First
	{ 
		setcookie("ExaminationSystem", time() - 900);

		// Variable Record
		$Name = $_POST['Username'];
		$Password = $_POST['Password'];

		// Search Record
		$res = mysqli_query($con, "SELECT * FROM tbl_student 
			WHERE username='$Name' AND password='$Password'") or die(mysqli_error($con));

		$count = mysqli_num_rows($res);

		// Location Evaluation
		if ($count==0) 
		{
	    	echo 
	    		"<script type='text/javascript'>
	    			document.getElementById('failure').style.display='block'
	    		</script>";
		} 

		else {

			$_SESSION['Username'] = $_POST['Username'];

	        echo 
	          "<script type='text/javascript'>
	            window.location.href='select-exam.php';
	            ;
	          </script>";  

		}

	}

?>			 	
		</div>
	</form>

	</div>
</div>





</body>
</html>	