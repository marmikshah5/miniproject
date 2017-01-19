
<?php
			session_start();
		    if(!isset($_SESSION["id"])){
				 header("Location: login.php");
			}
			$id= $_SESSION["id"];
					
				$acno=$_GET["id"];
				$tpass=$_POST["tpass"];
				$ospno=$_POST["ospno"];
				$receiverno=$_POST["receiverno"];
				$amount=$_POST["amount"];
				$bankname=$_POST["bankname"];
				$branchname=$_POST["branchname"];
				$remark=$_POST["remark"];
			
			$conn = new mysqli("localhost","root","","net_banking") ;
								if($conn -> connect_error )
								{
									echo "Error connecting .Please try again".$conn -> connect_error ;
								}
								
			$sqlcheck="SELECT balance FROM balancecheck  where bid='$id' ";
			
			$result = $conn->query($sqlcheck);
			if ($result -> num_rows > 0)
			{
				while($row=$result -> fetch_assoc())
				{
					$get=$row["balance"];
					//echo $get;
					//$convert=$get - $amount;
					if($get > $amount  ){
						//$_SESSION['id'] = $id;
					header("Location: transferamount.php?id=".$id."&acno=".$acno."&tpass=".$tpass."&ospno=".$ospno."&receiverno=".$receiverno."&amount=".$amount."&bankname=".$bankname."&branchname=".$branchname."&remark=".$remark);
						
					}
					else {
					//invalid user
					header("Location: transferform.php?error=1 &id=".$id);
				}
				}
			}
			//$row=mysqli_fetch_assoc($result);
			/*$convert=intval($sqlcheck);
			*/
			
			?>