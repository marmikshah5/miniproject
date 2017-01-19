/**
 * @author Dell
 */

function validate(){
		
		var flag=true;
		document.getElementById("firstnameerror").className=" error invisible";
		document.getElementById("secondnameerror").className=" error invisible";
		document.getElementById("surnameerror").className=" error invisible";
		document.getElementById("emailiderror").className=" error invisible";
		document.getElementById("phonenoerror").className=" error invisible";
		document.getElementById("ageerror").className=" error invisible";
		document.getElementById("passerror").className=" error invisible";
		document.getElementById("repasserror").className=" error invisible";
		
		
		var firstname=document.getElementById("firstname").value;
		var secondname=document.getElementById("secondname").value;
		var surname=document.getElementById("surname").value;
		var emailid=document.getElementById("emailid").value;
		var phoneno=document.getElementById("phoneno").value;
		var age=document.getElementById("age").value;
		var pass=document.getElementById("pass").value;
		var repass=document.getElementById("repass").value;
		var gender="Female";
		if(document.getElementById("male").checked)
		{
			gender="Male";
		}
		
		var regexemailid=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
		var regexphone=/^[7-9][0-9]{9}$/;
		var regexpass=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$/;
		if(firstname.length<1){
			document.getElementById("firstnameerror").className=" error visible ";
			document.getElementById("firstname").style.borderColor = "red";
			//document.getElementById("firstname").className=" errorborder  ";
		 	flag=false;
		}
		
		if(secondname.length<1){
			document.getElementById("secondnameerror").className=" error visible  ";
			document.getElementById("secondname").style.borderColor = "red";
			//document.getElementById("secondname").className=" errorborder ";
		 	flag=false;
		}
		else{
			document.getElementById("secondname").style.borderColor = "white";
		}		
		if(surname.length<1){
			document.getElementById("surnameerror").className=" error visible ";
			document.getElementById("surname").style.borderColor = "red";
			//document.getElementById("surnamename").className=" errorborder ";
		 	flag=false;
		}	
		else{
			document.getElementById("surname").style.borderColor = "white";
		}		
		
		if(!regexemailid.test(emailid)){
			document.getElementById("emailiderror").className=" error visible ";
			document.getElementById("emailid").style.borderColor = "red";
			//document.getElementById("emailid").className=" errorborder  ";
		 	flag=false;
		}
		else{
			document.getElementById("emailid").style.borderColor = "white";
		}	
		/*if(regexemailid.test(emailid)){
			document.getElementById("emailid").className="  form-control ";
		 	
		}*/
		if(!regexphone.test(phoneno)){
			document.getElementById("phonenoerror").className=" error visible ";
			//document.getElementById("phoneno").className=" errorborder  ";
			document.getElementById("phoneno").style.borderColor = "red";
		 	flag=false;
		}
		else{
			document.getElementById("phoneno").style.borderColor = "grey";
		}	
		/*if(regexphone.test(phoneno)){
			document.getElementById("phoneno").className="  form-control ";
		 	
		}*/
		if(isNaN(age)||age<75||age>18 ){
			document.getElementById("ageerror").className=" error visible ";
			//document.getElementById("age").className=" errorborder ";
			document.getElementById("age").style.borderColor = "red";
		 	flag=false;
		}
		else{
			document.getElementById("age").style.borderColor = "grey";
		}	
		/*if(age >18 && age<75){
			document.getElementById("age").className="  form-control ";
		 	
		}*/
		if(!regexpass.test(pass)){
			document.getElementById("passerror").className=" error visible ";
			document.getElementById("pass").style.borderColor = "red";
			//document.getElementById("pass").className=" errorborder form-control ";
		 	flag=false;
		}
		else{
			document.getElementById("pass").style.borderColor = "white";
		}	
		if(repass !== pass){
			document.getElementById("repasserror").className=" error visible ";
			//document.getElementById("repass").className=" errorborder ";
		 	flag=false;
		}
		else{
			document.getElementById("repass").style.borderColor = "white";
		}	
		/*if(repass === pass){
			document.getElementById("pass").className="  form-control ";
		 	document.getElementById("repass").className="  form-control ";
		}*/

		return flag;
}


