<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Safari Academy Online Examination System</title>

    <link rel="icon" type="image/x-icon" href="images/11.png">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

	<style type="text/css">
		body{
			background-color: #fff;
		}

		.container{
			max-width: 100%;
			margin: 0;
			padding: 0;
			color: white;
		}

		@media screen and (max-width: 780px){
		  img.responsive {width: 50vh;}
		}

		@media screen and (min-width: 720px){
		  img.responsive {width: 50vh;}
		}		


		img.responsive{width: auto;}
		body{
		  background: linear-gradient(90deg, rgb(144, 243, 152)0%, rgb(233, 238, 233)35%, rgb(144, 243, 152)100%);	
		}
		nav a b{
			width: 100%;
		}
	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg" style="opacity:0.75;background: linear-gradient(90deg, rgb(4, 130, 12)0%, rgb(47, 187, 49)35%, rgb(3, 83, 12)100%);  position: fixed; width:100%;">

	  <a class="navbar-brand " href="#" style="display:flex;">
	  	
	  	<video src="images/sa.mp4" disablePictureInPicture autoplay muted loop style=" width: 75px; height:75px; border-radius:50%; margin: 10px; box-shadow: 3px 4px 5px black"></video>
	  	
	  	<b style="margin:30px;color: #fff; font-size:2.2vw; font-family:cursive; margin-top:25px">Safari Academy Online Examination System</b>
	  	
	  </a>
                <div class="row" style="margin-left:250px">
					<div class="col-sm">
						<a href="login.php" class="btn w-100" 
						style="box-shadow:2px 3px 4px  #000; font-size:20px; border:none; background-color: #fbfefa; width: 20%; font-weight: bold; margin-top: 15px; color: #055009;">Student Login</a>					
					</div>
				</div>
</nav>


<div class="container-fluid pb-4" >
	<div class="row">

		<div class="col-sm px-5 text-center" style="margin-top:40px;">
			<img src="images/2.png" style=" width: 100%; height:400px; margin-top: 100px;  border-radius:20px;" class="responsive">
		</div>		


		<div class="col-sm px-5" style="margin-bottom: 63px;">
			<div class="row" style="margin-top:100px;">

				<div class="col-sm ">
					<p style="font-family: Tw Cen MT; font-size: 40px; margin-top: 100px;color: #0b6014; padding-right: 30px;">
						Education is a commitment to excellence in Teaching and Learning.
					</p>

					<p style="font-family: Tw Cen MT; font-size: 16px; text-align: justify; color: #06b420; padding-right: 30px;"> 
					Safari Academy online examination system is a technology-driven method of simplifying examination activities such as defining exam patterns with question banks, defining exam timers, objective/ subjective question sections, and conducting exams paperlessly using a computer or mobile device.</p>									
				</div>


				<!-- New Row -->
				<div class="row">
					<div class="col-sm">
						<a href="login.php" class="btn w-100" 
						style="background-color: #ecf9ff; width: 20%; font-weight: bold; margin-top: 15px; color:rgb(4, 130, 12); box-shadow: 3px 3px 5px #000"> I'am Student </a>					
					</div>

					<div class="col-sm">
						<a href="admin-login.php" class="btn w-100" 
						style="background-color: #076d08; color: white; width: 20%; font-weight: bold; margin-top: 15px; box-shadow: 3px 3px 5px #000"> I'am Teacher </a>					
					</div>
				</div>

			</div>
		</div>
	</div>
	
</div>


<!-- Footer -->
<footer class="text-center text-white p-5" style="background: linear-gradient(90deg, rgb(4, 130, 12)0%, rgb(47, 187, 49)35%, rgb(3, 83, 12)100%); margin-top:-105px">  
    © 2026 Safari Academy. All Rights Reserved.
</footer>

</body>
</html>