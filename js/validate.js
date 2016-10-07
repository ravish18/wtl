function checkRollNo(e){
	var element=e.target;
	if(/[^a-zA-Z0-9]/.test(element.value)){
		alert("Invalid RollNo.Only a-z,a-z,0-9 are allowed");
		element.value="";
		return false;
	}
	if(!/[a-zA-Z]/.test(element.value)){
		alert("invalid rollno you must also use a-z or A-Z characters");
		element.value="";
		return false;
	}
	if (!/[0-9]/.test(element.value)){
		alert("invalid roonoyou must also use 0-9 characters");
		element.value="";
		return false;
	}
	if(element.value.length>8 || element.value.length<6){
		alert("invalid rollno");
		element.value="";
		return false;
	}
	return true;

}

function checkName(e){
	var element=e.target;
	if(/[^a-zA-Z ]/.test(element.value)){
		alert("Invalid Name.Only character a-z,A-Z are allowed");
		element.vale="";
		return false;
	}
	return true;
}

function checkAddress(e){
	var element=e.target;
	if(element.value.length<50){
		alert("Address is too short!");
		element.value="";
		return false;
	}
	return true;
}


var rollno=document.getElementById("rollno");
var sname=document.getElementById("sname");
var address=document.getElementById("address");


rollno.addEventListner('blur',checkRollNo,false);
sname.addEventListner('blur',checkName,false);
address.addEventListner('blur',checkAddress,false);