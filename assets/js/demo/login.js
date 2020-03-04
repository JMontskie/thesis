 // Variable to count number of attempts.
 var attempt = 3;
// Below function Executes on click of login button.

var objPeople = [
	{
		username: "admin",
		password: "123"
	}
]

function validate(){
var username = document.getElementById("usr").value;
var password = document.getElementById("pass").value;
// if ( username == "admin" && password == "123"){
// alert ("Login successfully");
// // window.location.assign = "http://facebook.com"; // Redirecting to other page.
// console.log(username);
// return true;
// }
// else{
// attempt --;// Decrementing by one.
// alert("You have "+attempt+" attempts left.");

// // Disabling fields after 3 attempts.
// if( attempt == 0){
// document.getElementById("usr").disabled = true;
// document.getElementById("pass").disabled = true;
// document.getElementById("submit").disabled = true;
// return false;
// }
// console.log("the number of login attempts is: " + attempt);
// }
for (var i = 0; i < objPeople.length; i++) {
	if(username == objPeople[i].username && password = objPeople[i].password) {
		console.log(username + "is logged in!!");
	}
}