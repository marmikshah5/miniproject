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
		$firstname=$_POST["firstname"];
		$secondname=$_POST["secondname"];
		$surname=$_POST["surname"];
		$emailid=$_POST["emailid"];
		$phoneno=$_POST["phoneno"];
		$age=$_POST["age"];
		$password=$_POST["password"];
		$gender=$_POST["gender"];
		$country=$_POST["country"];
		
		
		//connect with database
			$conn = new mysqli("localhost","root","","net_banking") ;
			if($conn -> connect_error )
			{
				echo "Error connecting .Please try again".$conn -> connect_error ;
			}
			else {
				//insert record in database
				$query= "insert into register_table(id,firstname,secondname,surname,emailid,phoneno,age,password,gender,country)values ".
				"('','$firstname','$secondname','$surname','$emailid','$phoneno','$age','$password','$gender','$country')";
				
				if($conn -> query($query) === TRUE){
					header("Location: login.html");
				}
				else {
					
					header("Location: register.html");
				}
			}
	
?>
