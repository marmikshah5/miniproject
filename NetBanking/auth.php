<?php
    
    //session_start();
		  //  if(!isset($_SESSION["id"])){
				 //header("Location: login.php");
			//}
			
    //collect the username and password from the request
    $id=$_POST["id"];
	$password=$_POST["password"];
	
	 //unset($_SESSION['logged_in']);  
      //session_destroy();  
	//connect to the db
	$conn = new mysqli("localhost","root","","net_banking");
	if($conn -> connect_error){
		echo "Error connecting .Please try again".$conn -> connect_error;
	}
	else {
		//check for username and password in the database
		$query="select * from register_table where id= '$id' and password= '$password'";
		
		$result=$conn -> query($query);
		
		if($result -> num_rows > 0){
			//valid user
			session_start();
			if($row = $result -> fetch_assoc())
			{
			
				//session_start();		
				$id = $row["ID"];
				$_SESSION["firstname"] = $firstname;
				$_SESSION["surnamename"] = $surname;
				$_SESSION["id"] = $id;
			}
			header('Location: mainpage.php');
			//exit;
		}
		else {
			//invalid user
			header("Location: login.php?error=1 ");
		}
	}
	
	
?>