function check(){
	var product = ["Card number ","Name on card","Expiration","CVV"];
	var i;
	var txt="<form action='#' target='_self' method='POST'><br><ul>";
	
        txt+="<li>"+product[0]+"</li>"+"<input type='text' name='cardnum' pattern='[0-9]{1,20}' required>";
        txt+="<li>"+product[1]+"</li>"+"<input type='text' name='namecard'  pattern='[a-zA-Z]{1,20}' required>";
        txt+="<li>"+product[2]+"<br>"
        txt+="<input type='text' name='exyer' placeholder='Year'pattern='[0-9]{4}' required>";
        txt+="<input type='text' name='exmanth'placeholder='Month' pattern='[0-9]{2}' required>";
        txt+="<li>"+product[3]+"</li>"+"<input type='text' name='ccv'pattern='[0-9]{3}' required>";
        txt+="<br><br>"+"<input type='submit' value='Confirm Payment' name='confirmpayment' style=' width: 120px;height:40px; float: right;color: blanchedalmond; background-color:black;'>";
	    txt+="</ul></form>";
    document.getElementById("h_helpmasseje_demo").innerHTML=txt;	;
}