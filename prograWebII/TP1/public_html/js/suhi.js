
window.onload = function() {
alert("Hola Javascript!");
}


$(window).load(function() {
	alert("Hola JQuery load!");
});
/*
$(document).ready(function(){
   alert("Hola JQuery ready!");
}); 
*/

$(function() {
$( "#tabs" ).tabs();
});
