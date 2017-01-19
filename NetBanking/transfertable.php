<?php
session_start();
		    if(!isset($_SESSION["id"])){
				 header("Location: login.php");
			}
			$id= $_SESSION["id"];
?>

<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Transaction Table</title>
		<meta name="description" content="">
		<meta name="author" content="root">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="CSS/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		
		<style>
			
			.navbar{
				margin-bottom: 0px;
				border: 0px;
			}
			
			.cpad{
				padding-top: 60px;
				padding-bottom: 60px;
			}
			
			nav ul li a{
				letter-spacing: 5px;
			}
			
			.navbar{
				background-color:white;
			}
			table, th, td {
			     border: 1px solid black;
			     padding:10px 10px 10px 10px;
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
					<a style="font-style:bold ;font-size:40px;color:white;" class="navbar-brand" >ELITE</a>
					<a style="font-style:bold ;font-size:40px;color:white;" class="navbar-brand" >BANKING</a>
					<a style="font-style:italic ; font-size:10px ;padding-top: 25px ;color:white" class="navbar-brand">...where trust meet success</a>
				</div>	
				<!--<div class=" navbar-collapse collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right onhover" >
							<li><a style="color: white;letter-spacing:1px "  href="#first">About Us</a></li>
							<li><a style="color: white;letter-spacing:1px" href="#second">Why Us </a></li>
							<li><a style="color: white;letter-spacing:1px" href="#third">FAQ</a></li>
							<li><a style="color: white;letter-spacing:1px" href="#fourth">ConatctUs</a></li>
							
						</ul>
				</div>-->
					
			</div>			
			
		</nav>
		<br /><br />
<div class="container-fluid" align="middle">
<?php

$conn = new mysqli("localhost","root","","net_banking") ;
			if($conn -> connect_error )
			{
				echo "Error connecting .Please try again".$conn -> connect_error ;
			}

$sql = "SELECT acno, receiverno, amount,bankname,branchname,remark FROM transfer_amount where acno='$id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table class=\" table table-striped table-hover table-bordered\" >
     			<tr><th>Receiver A/C NO</th><th>Amount</th><th>Bankname</th><th>BranchName<th>Remark</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["receiverno"]. "</td><td>" . $row["amount"]. "<td>" . $row["bankname"]. "</td>
         <td>" . $row["branchname"]. "</td><td>" . $row["remark"]. "</td></td>
         </tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  
<br />
<button onclick="myFunction()">Print this page</button>

</div>
<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>