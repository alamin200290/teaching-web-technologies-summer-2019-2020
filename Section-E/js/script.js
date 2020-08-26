
"use strict"
//a = 10;
var b =30;
let c =40;
const e = 50;

//console.log('test');
//alert('test');
//document.write('hfbjh');

function f1(){
	var username = document.getElementById('username').value;
	var password = document.getElementById('username').value;

	var error = false;
	if(username == ""){
		document.getElementById('userMsg').innerHTML = "Username Can't left empty!";
		error = true;
	}else if(password == ""){
		document.getElementById('passMsg').innerHTML = "Username Can't left empty!";
		error =true;
	}

	if(error){
		return false;
	}else{
		return true;
	}
	
}

var f2 = function(){
	var username = document.getElementById('username').value;
	if(username != ''){
		document.getElementById('userMsg').innerHTML = "";
	}
}
