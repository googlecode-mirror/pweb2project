// funciones del calendario

$(document).ready(function(){
	//div donde se mostrará calendario debe estar oculto					   
	$('#calendario').hide();
	$('#calendarioV').hide();
});

function update_calendar(){
	var month = $('#calendar_mes').attr('value');
	var year = $('#calendar_anio').attr('value');

	var valores='month='+month+'&year='+year;

	$.ajax({
		url: 'setvalue.php',
		type: "GET",
		data: valores,
		success: function(datos){
			$("#calendario_dias").html(datos);
		}
	});
}
	
function set_date(date,objeto,text){
	//input text donde debe aparecer la fecha
	$('#'+text).attr('value',date);
	$('#'+objeto).hide();
	//show_calendar();
}

function show_calendar(objeto){
	//div donde se mostrará calendario
	$('#'+objeto).toggle(); 
}	