
function checkpassword(){
	
	if(document.getElementById("h_pwd").value != document.getElementById("h_rpwd").value){
		
		alert("Password are mismatched!!");
		return false;
	}
	else{
		
		alert("Passwoed are matched!!");
	    return true;
		}
}


function  enableButton(){
	
	if(document.getElementById("policy").checked){
	     document.getElementById("h_btn1").disabled= false;
	}
	else{
		
	     document.getElementById("h_btn1").disabled= true;
	}
}
	

