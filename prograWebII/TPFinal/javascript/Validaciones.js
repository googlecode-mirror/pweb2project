function validarForm(){
    
	//alert("validarForm()");
    
	var err = '';
	var fecha = document.getElementById("fecha");
	var origen = document.getElementById("id_origen");
	var destino = document.getElementById("id_destino");
	var fechaV = document.getElementById("fechaV");
	var clase = document.getElementById("id_clase");
	
	//TEMP Comento las validaciones para probar submit
	/*if (fecha.value == ""){
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
  }*/
	//alert("validarForm()");
	//alert("$(#form_vuelo_id).attr('id'): "+ $("#form_vuelo_id").attr('id'));
	
	
	/*
	 * Si cumple con todas las validaciones
	 * se submitea el formulario
	 */
	$("#form_vuelo_id").submit();
  }
  
  
 function checkemail (correo)
{ 
	var ind1, ind2, ind3;
	ind1 = correo.indexOf('@');
	ind2 = correo.indexOf('.');
	ind3 = correo.lastIndexOf('@');
	if (( ind1<=0) || (ind2<ind1) || (ind3 !=ind1))
		return "No es correcto";
		else
			return "Correcto";
		
	}
