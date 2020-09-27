

function help(){
	var product = ["Step 01- Enter your email address.           ","Step 02- Click the reset button.    ","Step 03- Check the email and click the sent link."];
	var i;
	var txt="<ul>";
	for(i in product){
		txt+="<li>"+product[i]+"<br>"+"</li>";
		}
	txt+="<ul>";
    document.getElementById("h_helpmasseje_demo").innerHTML=txt;	;
}

