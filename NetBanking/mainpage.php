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

		<title>mainpage</title>
		<meta name="description" content="">
		<meta name="author" content="Dell">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="CSS/bootstrap.css" />
		
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	
		<style>
			.bg{
				
				width:500px;
				border-radius:10px;
				max-width:100%;
				
			}
			.dropbtn {
			    /*background-color: #4CAF50;*/
			    color: white;
			    cursor: pointer;
			    text-align: center;
			}

/* The container <div> - needed to position the dropdown content */
				.dropdown {
				    position: relative;
				    /*display: inline-block;*/
				}

/* Dropdown Content (Hidden by Default) */
				.dropdown-content {
				    display: none;
				    /*position: absolute;*/
				   text-align:center;
				    background-color: #03a9fa;
				    min-width: 160px;
				    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				}

/* Links inside the dropdown */
				.dropdown-content a {
				    color: white;
				    padding: 12px 16px;
				    text-decoration:none;
				    display: block;
				}

/* Change color of dropdown links on hover */
				.dropdown-content a:hover {background-color:#3f51b5 }

/* Show the dropdown menu on hover */
				.dropdown:hover .dropdown-content {
				    display: block;
				}

/* Change the background color of the dropdown button when the dropdown content is shown */
				.dropdown:hover .dropbtn {
				    /*background-color: #3e8e41;*/
				}
				
				.onhover :hover{
				background-color:	#cfd8dc;
				}
				
				.fieldset {
				  border: 1px solid #ccc;
				  padding: 10px;
				}	
				.invisible{
				display:none;
			}
			.visible{
				display:inline;
				
			}			
			
			
			.error{
				/*color:#f44336;*/
				color:black;
				font-style: italic;
			}	
			.errorborder{
				border-color:red;
			}
			
			table, th, td {
			     border: 1px solid black;
			     padding:10px 10px 10px 10px;
			    max-width:100%;
			    
			}
			body {
			    background-image: url("images/bank.jpg");
			    background-repeat: no-repeat;
			    background-position: center;
			    background-attachment: fixed;
			    background-size:70%;
			    
			}
			.myclass{
				color: white;
				
				font-size: 20px;
			}
			.mywel{
				color: white;
				font-size: 25px;
			}
			
			
		</style>
		
	</head>

	<body >
		<nav class="navbar navbar-default " role="navigation" style="opacity:1" >
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
							<li><a style="color: white;"  href="info.html#first ">About Us</a></li>
							<li><a style="color: white" href="info.html#second">Why Us </a></li>
							<li><a style="color:white" href="info.html#third">FAQ</a></li>
							<li><a style="color: white" href="info.html#fourth">ConatctUs</a></li>
							<li><a style="color: white" href="logout.php ">Logout</a></li>
						</ul>
				</div>
					
				</div>			
			
		</nav>
		
	<!--	<div class=" container-fluid  "  align="middle" >
			<img  class="container-fluid" src="images/bank.jpg" align="middle" style="width:800px;height:400px;margin:auto;max-width:100%;max-height: 100%" />
	</div><br />-->
				<div align="middle" >
					
				<?php
					//$id= $_SESSION["id"];
					//$id = $_GET["id"];
					//setcookie("sh",$id,time(+60*60*24*1));
					$conn = new mysqli("localhost","root","","net_banking") ;
								if($conn -> connect_error )
								{
									echo "Error connecting .Please try again".$conn -> connect_error ;
								}
					
					$sql = "SELECT bid, balance FROM balancecheck where bid='$id' ";
					$query="select firstname,surname from register_table where id= '$id' ";
					$result = $conn->query($sql);
					$result_name = $conn -> query($query);
					if (($result->num_rows > 0) && ($result_name->num_rows > 0)) {
							
					     echo "<table  class=\"  table-striped  table-bordered\" >
					     			<tr><th>ID</th><th>Balance</th></tr> ";
					     // output data of each row
					     while(($row = $result->fetch_assoc()) &&($row_name = $result_name->fetch_assoc()))
						  {
					         echo "<tr><td style=\"font-weight:bold;color:white \">" . $row["bid"]. "</td><td style=\"font-weight:bold;color:white \">" . $row["balance"]. "</td>
					         </tr>" ;
							}
					     echo "</table> <br>";
						 //echo "<span>Welcome &nbsp;  ". $["firstname"]  ." &nbsp;</span>";
						  //echo "<span class=\"myclass\">'$row['firstname']'</span>";
						  echo '<b><span class="mywel">Welcome! </span></b>';
						 echo '<b><span class="myclass"> &nbsp; ' . $row_name['firstname'] . '</span></b>';
						 echo '<b><span class="myclass">&nbsp; ' . $row_name['surname'] . '</span></b>';
					} 
					
					
					
					else {
					     echo "0 results";
					}
					
					
					
					$conn->close();
					?>
					
					
					</div > 
		<div class=" container-fluid dropdown text-center bg "  >
				<h2><input type="button" value=" Pass Book Details"  class="btn-warning btn-lg bg dropbtn text-center"  /></h2>
				  
				  <div class="dropdown-content ">
				  	<?php
				  echo '<a href="passbook.php">View and Print PassBook</a>';?>
				    <!--<a href="passbook.php?id=">View and Print PassBook</a>-->
				    
				  </div>

			</div>
			<div class=" container-fluid  text-center bg noopacity ">
				<h2><?php
				  echo '<a href="transferform.php"><input type="button" value="Transfer Amount"  class="btn-warning btn-lg bg dropbtn text-center"  /></a>';?>

				  
				  
				    <!--<a href="#">View and Print PassBook</a>-->
		</div>
		 <?php
								if(isset($_GET["error"])){
								?>
								<span style="color: red" class="error">Invalid Use</span>
								<?php
								}
								?>
		
			<!-- <div class="container-fluid dropdown text-center bg " method="post" action="register.php" enctype="multipart/form-data"   >
				<h2><input type="button" value="Transfer amount" class="btn-warning btn-lg bg dropbtn"/></h2>
				<form class="dropdown-content  text-center form-horizontal  " style="padding-top: 15px;" onsubmit="return validatetransfer()">
					<div class="form-group">
						   <label class="control-label " for="acno">Enter Your Account Number:</label>
						      <div  style="margin-left: 40px; margin-right: 40px">
						        <input name="acno" type="text" class="form-control" id="acno" placeholder="Enter Account Number" >
						        <span id="acnoerror"  class="error invisible">Please Enter Account Number</span><br>
						      </div>
					</div>
				     <div class="form-group">
						   <label class="control-label " for="transpass">Enter Transaction Password:</label>
						      <div style="margin-left: 40px; margin-right: 40px">
						        <input name="tpass" type="text" class="form-control" id="transpass" placeholder="Enter Transcation Password">
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
						        <input name="receiverno" type="text" class="form-control" id="receiveracno" placeholder="Enter Receiver Account Number">
						      	<span id="receiveracnoerror"  class="error invisible">Please Enter Receiver A/C Number</span><br>
						      </div>
					 </div>
				    <div class="form-group">
						   <label class="control-label " for="amount">Enter Amount:</label>
						      <div style="margin-left: 40px; margin-right: 40px">
						        <input name="amount" type="text" class="form-control" id="amount" placeholder="Enter Amount">
						        <span id="amounterror"  class="error invisible">Please Enter Amount</span><br>
						      </div>
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
				  

			</div> -->
			
			<div class="container-fluid dropdown text-center bg ">
				<h2><input type="button" value="Loan" class="btn-warning btn-lg bg dropbtn" /></h2>
				<div class="dropdown-content">
				    <a href="homeloan.html">Home Loan/Property Loan</a>
				    <a href="carloan.html">Car Loan</a>
				    
				    <a href="bloan.html">Business Loan</a>
				    <a href="eduloan.html">Education Loan</a>
				  </div>

			</div>
			
			<div class="container-fluid dropdown text-center bg">
				<h2><input type="button" value="Account Information" class="btn-warning btn-lg bg dropbtn" /></h2>
				<div class="dropdown-content">
				    
				   <?php
				  echo '<a href="transfertable.php">View Transaction Details</a>';?>
				  	<a href="tc.html">Terms And Condition</a>
				  </div>
			<br /><br />
			
			</div>
			
				
			 

				</body>
</html>
