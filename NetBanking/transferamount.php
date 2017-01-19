<?php
	//store the uploaded file
	//$original_path= $_FILES["profilePic"]["tmp_name"];
	//$destination_folder= "/profilepic/images/";//here new folder had been made to store images in the root folder ie slave 
	//$destination_file_path= $destination_folder.$_FILES["profilePic"]["name"];
	
	//if(!move_uploaded_file($original_path, $destination_file_path)){
		//echo "error";
	//}
	//else {
	//}	
		//retrieve form parameters from the request
		
		session_start();
		    if(!isset($_SESSION["id"])){
				 header("Location: login.php");
			}
		$id= $_SESSION["id"];	
		$acno=$_SESSION["id"];
		$tpass=$_GET["tpass"];
		$ospno=$_GET["ospno"];
		$receiverno=$_GET["receiverno"];
		$amount=$_GET["amount"];
		$bankname=$_GET["bankname"];
		$branchname=$_GET["branchname"];
		$remark=$_GET["remark"];
		//global $wpdb;
		//$bid=$_POST["acno"];
	
		
		
			
		//connect with database
			$conn = new mysqli("localhost","root","","net_banking") ;
			if($conn -> connect_error )
			{
				echo "Error connecting .Please try again".$conn -> connect_error ;
			}
			else {
				//insert record in database
					$query= "insert into transfer_amount(acno,tpass,ospno,receiverno,amount,bankname,branchname,remark)values ".
					"('$acno','$tpass','$ospno','$receiverno','$amount','$bankname','$branchname','$remark')";
					
					//$sqlbalance="SELECT balance FROM balancecheck  where bid='$id'  ";
					$sqlcheck="SELECT balance FROM balancecheck  where bid='$id' ";
					$result = $conn->query($sqlcheck);
					if (($result -> num_rows > 0) && ($conn -> query($query) === TRUE))
					{
						while($row=$result -> fetch_assoc())
						{
							$get=$row["balance"];
							//echo $get;
							$cal=$get - $amount;
							$sqlupdate="UPDATE balancecheck SET balance = '".$cal."'  WHERE bid = '".$id."'";
							if($conn -> query($sqlupdate) === TRUE )
							{
								//$_SESSION['id'] = $id;
							
								header('Location: mainpage.php');
							}
							else {
							
							header("Location: transferform.php?error=2");
							}
						}
					}
						
					
					else{
						header("Location: transferform.php?error=3 ");
						
					}
					
				
			}
	
?>
