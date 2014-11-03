$(document).ready(function(){
	
	$("#boton_buscar_id").click(function() {
		alert("click!");
		//se validan datos ingresados
		var err = '';
		var fecha = document.getElementById("fecha");
		var origen = document.getElementById("id_origen");
		var destino = document.getElementById("id_destino");
		var fechaV = document.getElementById("fechaV");
		var clase = document.getElementById("id_clase");
		
		//TEMP Comento las validaciones para probar submit
//		if (fecha.value == ""){
//			err += "Debe seleccionar una fecha de ida \n";
//		}
//		if	((fecha.value > fechaV.value)||(fecha.value == fechaV.value)){
//			err += "Debe seleccionar una rango de fechas correcto\n";
//		}
		if (origen.value == ""){
				err += "Debe seleccionar un origen \n";
		}
		else{
			alert("origen.value: "+origen.value);
		}
		
		if (destino.value == ""){
				err += "Debe seleccionar un destino \n";
		}
		else{
			alert("destino.value: "+destino.value);
		}
//		if (fechaV.value == ""){
//				err += "Debe seleccionar una fecha de vuelta \n";
//		}		
//		if (clase.value == ""){
//			err += "Debe seleccionar una clase \n";
//		}
		
		if ( err == "" ){
			document.form_vuelo.submit();
			//si se valido ok los datos ingresados envio el formulario	
			$("#form_vuelo_id").submit();		
		}else{
			alert(err);
	    }
 })
});