<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>WELCOME</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="CSS/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			.fieldset {
				  border: 1px solid #ccc;
				  padding: 10px;
				}		
				
				.onhover :hover{
				background-color:	#cfd8dc;
				}
				.floating-box {
   					 display: inline-block;
   					 margin:10px;
				}
				.col-xs-6{
					max-width:100%;
					margin:auto;
				}
				.form-control:focus{
				border-color: #cfd8dc;
			}
			.error{
				color:red;
			}	
		</style>
	</head>

	<body >
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid" style="background-color: #512da8">
				<div class="navbar-header" >
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
						
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a style="font-style:bold ;font-size:40px;color:white;" class="navbar-brand" >ELITE</a>
					<a style="font-style:bold ;font-size:40px;color:white;" class="navbar-brand" >BANKING</a>
					<a style="font-style:italic ; font-size:10px ;padding-top: 25px ;color:white" class="navbar-brand">...where trust meet success</a>
				</div>	
				<div class=" navbar-collapse collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right onhover" >
							<li><a style="color: white"  href="info.html">About Us</a></li>
							<li><a style="color: white" href="#">Why Us </a></li>
							<li><a style="color: white" href="#">FAQ</a></li>
							<li><a style="color: white" href="#">ConatctUs</a></li>
							
						</ul>
				</div>
					
				</div>			
			
		</nav>
		
		<!-- <div class="jumbotron" style="height:200px">
     		<div class="container">
        		<h3 class="display-3">WELCOME!</h3>
        		<img   src="images/Internet_Banking.jpg" />
        	</div>
  </div>-->
  		<div align="middle"style="margin:auto;max-width:100%;max-height: 100%">
			<img  class="container-fluid" src="images/Internet_Banking.jpg" align="center" style="width:900px;margin:auto;max-width:100%;max-height: 100%" />
		</div> 	
		 	<div class='container-fluid' align="middle" style="width: 500px;max-width:100%;max-height: 100%;margin: auto">
		 		
    			<fieldset class="fieldset" style="background-color: #1976d2 ">
    				
    				<form action="auth.php" method="post" >
      				<legend style="color: #f44336">Login</legend>
						
						<label style="color:white">User ID:&nbsp;</label> 
      					<input name="id" type="number" class="form-control" style="width: 300px "  /><br>
      						     				
      					<label style="color: white">Password:</label>
      					<input name="password" type="password" class="form-control" style=" width: 300px" />
						<input style="margin-top: 10px" class="btn btn-success btn-lg " type="submit" value="Login"/> 
						<br/><br>
						<label>Not Registered?</label>  <a href="register.html" style="color:white">Register Here</a><br>   				
					</form>
					
					<!--<?php
					if(empty($_SESSION)) // if the session not yet started 
   					session_start();
					
					
   					?>  --> 					
				<?php
				if(isset($_GET["error"])){
				?>
				<span class="error">Invalid Username / password</span>
				<?php
				}
				?>
				
				</fieldset>
				
			</div>
			
	</body>
</html>
