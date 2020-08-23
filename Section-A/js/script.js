"use strict"

//console.log('hello from js..');
//alert('hello from JS ...');

//var a =0;
//let c =5;

/*if(){

}else if(){

}else{

}*/

var abc = [];

function f1(){
	var element = document.getElementsByTagName('h1')[0];
	element.innerHTML = "Test";
}

var f2 = function(){
	var element = document.getElementsByTagName('h1')[0];
	element.innerHTML = "Test";
}

//document.getElementsByTagName('h2')[0]
var head2 = document.getElementById('head2');
	head2.innerHTML = f2();


function validate(){

	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	
	//document.write('hbsdsabd');

	if(username == ""){
		document.getElementById('userMsg').innerHTML = "username can't left empty";
		return false;

	}else if(password == ""){
		document.getElementById('passMsg').innerHTML = "password can't left empty";
		return false;
	}else{
		return true;
	}


}

function remover(){
	document.getElementById('userMsg').innerHTML = "";
}

function xyz(){

	if(document.getElementById('username').value == ""){
		document.getElementById('userMsg').innerHTML = "this field is required!";
	}
}