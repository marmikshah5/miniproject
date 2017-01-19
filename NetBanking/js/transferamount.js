function validate(){
		
		var flag=true;
		//document.getElementById("acnoerror").className=" error invisible";
		document.getElementById("transpasserror").className=" error invisible";
		document.getElementById("ospnoerror").className=" error invisible";
		document.getElementById("receivernoerror").className=" error invisible";
		document.getElementById("amounterror").className=" error invisible";
		document.getElementById("banknameerror").className=" error invisible";
		document.getElementById("branchnameerror").className=" error invisible";
		
		
		
		//var acno=document.getElementById("acno").value;
		var transpass=document.getElementById("transpass").value;
		var ospno=document.getElementById("ospno").value;
		var receiverno=document.getElementById("receiverno").value;
		var amount=document.getElementById("amount").value;
		var bankname=document.getElementById("bankname").value;
		var branchname=document.getElementById("branchname").value;
		
		var reg = /^[0-9]+$/;
		
		//if(isNaN(acno) || !reg.test(acno)  ){
			//document.getElementById("acnoerror").className=" error visible ";
			//document.getElementById("acno").style.borderColor = "red";
		 	//flag=false;
		//}
		//else{
			//document.getElementById("acno").style.borderColor = "#03a9f4";
		//}
		
		if(isNaN(transpass) ){
			document.getElementById("transpasserror").className=" error visible";
			document.getElementById("transpass").style.borderColor = "red";
		 	flag=false;
		}
		else{
			document.getElementById("transpass").style.borderColor = "#03a9f4";
		}
				
		if(isNaN(ospno) || !reg.test(ospno)){
			document.getElementById("ospnoerror").className=" error visible ";
			document.getElementById("ospno").style.borderColor = "red";
		 	flag=false;
		}
		else{
			document.getElementById("ospno").style.borderColor = "#03a9f4";
		}
				
		if(isNaN(receiverno) || !reg.test(receiverno)){
			document.getElementById("receivernoerror").className=" error visible ";
			document.getElementById("receiverno").style.borderColor = "red";
		 	flag=false;
		}
		else{
			document.getElementById("receivernoerror").style.borderColor = "#03a9f4";
		}
		
		if(isNaN(amount) || !reg.test(amount)){
			document.getElementById("amounterror").className=" error visible ";
			document.getElementById("amount").style.borderColor = "red";
		 	flag=false;
		}
		else{
			document.getElementById("amount").style.borderColor = "#03a9f4";
		}
		if(bankname.length<1){
			document.getElementById("banknameerror").className=" error visible ";
			document.getElementById("bankname").style.borderColor = "red";
		 	flag=false;
		}
		else{
			document.getElementById("bankname").style.borderColor = "#03a9f4";
		}
		if(branchname.length<1){
			document.getElementById("branchnameerror").className=" error visible ";
			document.getElementById("branchname").style.borderColor = "red";
		 	flag=false;
		}
		else{
			document.getElementById("branchname").style.borderColor = "#03a9f4";		
		}
		

		return flag;
}

