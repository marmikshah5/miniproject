/**
 * @author root
 */
function validate(){
	var flag=true;
	document.getElementById("usernameerror").className=" error invisible";
	document.getElementById("countryerror").className=" error invisible";
	document.getElementById("statuserror").className=" error invisible";
	
	var username=document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var country =document.getElementById("country").value;
	var status=document.getElementById("status").value;
	var gender="Female";
	if(document.getElementById("male").checked)
	{
		gender="Male";
	}
	//alert(username.toUpperCase() + "\n" +password);//just to verify 
	//alert(gender);
	var errorMsg="" ;
	var userRegEx=/^[a-zA-Z0-9\.\$]{4,100}$/;//here in exprssion min 4 char "." & "$" can be used
	if(!userRegEx.test(username))
	{
		//errorMsg +="Please Check Username";
		document.getElementById("usernameerror").className=" error visible";
		 flag=false;
	}
	/*var passRegEx=/[a-zA-Z]/;
	
	if(password.length<8)
	{
		errorMsg +="Password Length is minimum 8";
	}
	else if(!passRegEx.test(password)){
		errorMsg +="Please check password";
	}
	if(errorMsg.length >0){
		//alert(errorMsg);
	}
	else{
		alert("All Fine");
	}
*/
	if(country === "-1"){
		document.getElementById("countryerror").className=" error visible";
		flag=false;
	}
	if(status === "-1")
	{
		document.getElementById("statuserror").className=" error visible";
		flag=false;
	}
	return flag;
}

function onStatusChange(){
	var status = document.getElementById("status").value;
	var partner =document.getElementById("partner");
	if(status === "m"){
		//married
		partner.className="visible";
		var gender;
		if(document.getElementById("male").checked){
			partner.placeholder ="Wife's Name";
		}	
		else{
			partner.placeholder ="Husband's Name";
		}
	}
	else if(status === "s") {
		//single
		partner.className="invisible";
	}
	else{
		//no selection
		partner.className="invisible";
		
	}
	
}

function onGender(ele){
	var status = document.getElementById("status").value;
	var partner =document.getElementById("partner");
	
	var partnerPlaceholder= "Husband's Name";
	if(ele.id === "male")
	{
		partnerPlaceholder="Wife's Name";
	}
	if(status === "m"){
		partner.placeholder = partnerPlaceholder;
	}
}
