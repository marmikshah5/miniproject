<?php
			 session_start();
			if(!isset($_SESSION["id"])){
				 header("Location: login.php");
			}	
			$id= $_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>transfer</title>
		<meta name="description" content="">
		<meta name="author" content="Dell">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="CSS/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<style>
			.bg{
				
				width:500px;
				border-radius:10px;
				max-width:100%;
			}
			.invisible{
				display:none;
			}
			.visible{
				display:inline;
				color:red;
			}			
			
			
			.error{
				/*color:#f44336;*/
				color:black;
				font-style: italic;
			}	
			.errorborder{
				border-color:red;
			}
		</style>
		
	</head>

	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid" style="background-color: #512da8">
				<div class="navbar-header" >
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
						
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a style="font-style:bold ;font-size:40px;color:#ff5722;" class="navbar-brand" >ELITE</a>
					<a style="font-style:bold ;font-size:40px;color:#ff5722;" class="navbar-brand" >BANKING</a>
					<a style="font-style:italic ; font-size:10px ;padding-top: 25px ;color:#ffa000" class="navbar-brand">...where trust meet success</a>
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

			
			<div class="container-fluid  text-center bg "    >
				<h2>Transfer amount</h2>
				<form class="text-center form-horizontal  "enctype="multipart/form-data"  method="post" action="check.php" style="padding-top: 15px;" onsubmit="return validate()">
						
				<!--	<div class="form-group">
						   <label class="control-label " for="acno">Enter Your Account Number:</label>
						      <div  style="margin-left: 40px; margin-right: 40px">
						        <input name="acno" type="text" class="form-control" id="acno" placeholder="Enter Account Number" >
						        <span id="acnoerror"  class="error invisible">Please Enter Account Number</span><br>
						      </div>
				</div>-->
				     <div class="form-group">
						   <label class="control-label " for="transpass">Enter Transaction Password:</label>
						      <div style="margin-left: 40px; margin-right: 40px">
						        <input name="tpass" type="password" class="form-control" id="transpass" placeholder="Enter Transcation Password">
						      	<span id="transpasserror"  class="error invisible">Please Enter Transaction Password</span><br>
						      </div>
					 </div>
				   <div class="form-group">
						   <label class="control-label " for="ospno">Enter OSP Number:</label>
						      <div style="margin-left: 40px; margin-right: 40px">
						        <input name="ospno" type="text" class="form-control" id="ospno" placeholder="Enter OSP Number">
						      	<span id="ospnoerror"  class="error invisible">Please Enter OSP Number</span><br>
						      </div>
					 </div>
					 <div class="form-group">
						   <label class="control-label " for="receiveracno">Enter  Receiver Account Nmber:</label>
						      <div style="margin-left: 40px; margin-right: 40px">
						        <input name="receiverno" type="text" class="form-control" id="receiverno" placeholder="Enter Receiver Account Number">
						      	<span  id="receivernoerror"  class="error invisible">Please Enter Receiver A/C Number</span><br>
						      </div>
					 </div>
				    <div class="form-group">
						   <label class="control-label " for="amount">Enter Amount:</label>
						      <div style="margin-left: 40px; margin-right: 40px">
						        <input name="amount" type="text" class="form-control" id="amount" placeholder="Enter Amount">
						        <span id="amounterror"  class="error invisible">Please Enter Amount</span><br>
						      </div>
						      <?php
								if(isset($_GET["error"])){
								?>
								<span style="color: red" class="error">NOT ENOUGH BALANCE</span>
								<?php
								}
								?>
					 </div>
				    
				    <div class="form-group">
						   <label class="control-label " for="bankname">Enter Bank Name:</label>
						      <div style="margin-left: 40px; margin-right: 40px">
						        <input name="bankname" type="text" class="form-control" id="bankname" placeholder="Enter Bank Name">
						      	<span id="banknameerror"  class="error invisible">Please Enter Bank Name</span><br>
						      </div>
					 </div>
					 <div class="form-group">
						   <label class="control-label " for="branchadd">Enter Branch Name:</label>
						      <div style="margin-left: 40px; margin-right: 40px">
						        <input name="branchname" type="text"  class="form-control " id="branchname" placeholder="Enter Branch Name">
						      	<span id="branchnameerror"  class="error invisible">Please Enter Branch Name</span><br>
						      </div>
					 </div>
				    <div class="form-group">
						   <label class="control-label " for="remark">Remark:</label>
						      <div style="margin-left: 40px; margin-right: 40px">
						        <input name="remark" type="text" class="form-control" id="remark" placeholder="Remark">
						      </div>
					 </div>
				    <button type="submit" class="btn btn-success " style="width:90px;height: 30px;max-width: 100%;border-radius:10px">Submit</button>
				    <br>
				 	
				 	</form> 
			  

			</div>
			
			
			<script src="js/transferamount.js"></script>
		
	</body>
</html>
