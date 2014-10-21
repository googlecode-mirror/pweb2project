function validarForm(){
	var err = '';
	var fecha = document.getElementById("fecha");
	var origen = document.getElementById("id_origen");
	var destino = document.getElementById("id_destino");
	var fechaV = document.getElementById("fechaV");
	var clase = document.getElementById("id_clase");
		
	if (fecha.value == ""){
		err += "Debe seleccionar una fecha de ida \n";
		}
	if	((fecha.value > fechaV.value)||(fecha.value == fechaV.value)){
		err += "Debe seleccionar una rango de fechas correcto\n";
	}
	if (origen.value == ""){
			err += "Debe seleccionar un origen \n";
			}
	if (destino.value == ""){
			err += "Debe seleccionar un destino \n";
			}
	if (fechaV.value == ""){
			err += "Debe seleccionar una fecha de vuelta \n";
			}		
	if (clase.value == ""){
		err += "Debe seleccionar una clase \n";
		}
	
	if ( err == "" ){
		document.form_vuelo.submit();
	}else{
		alert(err);
  }
  }