<html>
<head>
<title> Formulario datos pasajero  </title>

<!--<script language="javascript" type="text/javascript" src="../javascript/valido.js">
</script>  -->

<script language="javascript" type="text/javascript">
    	
	function validar(formulario) {
	
  if(formulario.nombre.value.length==0) { //¿Tiene 0 caracteres?
    formulario.nombre.focus();    // Damos el foco al control
    alert('No has escrito tu nombre'); //Mostramos el mensaje
    return false; //devolvemos el foco
  }
  if(formulario.apellido.value.length==0) {   // iden NOMBRE
  formulario.apellido.focus();
  alert('No has escrito tu apellido');
  return false;
  }
  
  var valor = formulario.dni.value;    // isnam controla si el ingrese es un nro
    if(isNaN(valor)) {
	formulario.dni.focus();   
	alert('ingrese su nro. de DNI');
	return false;
	}
	// select dia_nac mes_nac anio_nac
	if(formulario.dia_nac.value==''){  // controla que se seleccione una opcion de DIA
    formulario.dia_nac.focus();
	alert('No selecciono dia de nacimiento');
	return false;
	}
	
	if(formulario.mes_nac.value==''){  // controla que se seleccione una opcion de MES
    formulario.mes_nac.focus();
	alert('No selecciono mes de nacimiento');
	return false;
	}
	
	if(formulario.anio_nac.value==''){  // controla que se seleccione una opcion de AÑO
    formulario.anio_nac.focus();
	alert('No selecciono Año de nacimiento');
	return false;
	}
	
	// radio sexo   no hace falta chequear porque siempre una opcion esta seleccionada
	
	// tel1 tel2  no hace falta validar tel2 ya que no es obligatorio
	var telef = formulario.tel1.value;    
    if(isNaN(telef)) {
	formulario.tel1.focus();   
	alert('Ingrese un nro. de teléfono');
	return false;
	}
	
    if(formulario.email1.value.length==0) { //comprueba que no esté vacío
    formulario.email1.focus();
    alert('No has escrito tu e-Mail');
    return false;
  }
  // COMPRUEBA QUE EL CAMPO SEA UN E-MAIL VALIDO
  //var input = document.getElementById("email1").value; /* Obtenemos el valor del campo "email" */
	    var input = formulario.email1.value;
        var emailRegExp = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
	
        if(!input)
		{
            /* Primero validamos que el input no venga vacio */
            alert('Ingrese el e-mail');
			return false;
        }
		else
		{
            /* Si no viene vacio validaremos si es un correo valido utilizando una expresion regular */
            if(!input.match(emailRegExp))
			{
                  alert('El correo no es valido');
				  return false;
            }
 
        }
  
  if(formulario.email2.value.length==0) { //comprueba que el REINGRESO DEL E-MAIL no esté vacío 
    formulario.email2.focus();
    alert('Reingrese su e-Mail'); 
    return false;
  }
  if(formulario.email1.value!=formulario.email2.value) {
    formulario.email1.focus();            //comprueba que sean iguales
	alert('Los e-Mails no coinciden - Corrija por favor');
    return false;
	}
  /* if(isNaN(formulario.dni.value)){    
    formulario.dni.focus();
    alert('Reingrese su DNI'); 
	return false;
	}*/
	
	

  return true; //Si ha llegado hasta aquí, es que todo es correcto
}  // fin de la funcion validar


</script>

</head>
<body>
<div id="cabecera" >
	<img alt="logo" src="../images/LogoCompania_header.PNG"/>
</div>
<h2><b>Datos del pasajero</b></h2> <br>
Ingrese el nombre completo y el apellido tal como aparece en el documento a ser presentado en el momento del embarque<br><br>
<!--<FORM  METHOD="POST" ACTION="formulario_pasajero_datos.html">-->
<form name="formulario" method="post" action="formulario_pasajero_datos.html" onsubmit="return validar(this);">
<!--  -->
<div id="formulario">	
   Nombre* &nbsp; <INPUT TYPE="text" NAME="nombre" value="Ingrese su nombre" size="30"> &nbsp; &nbsp;
  
   Apellido* &nbsp; <INPUT TYPE="text" NAME="apellido" value="Ingrese su apellido" size="30"> <br><br>
  
   Documento de Identidad* &nbsp; DNI &nbsp; <INPUT TYPE="text" NAME="dni" value="Ingrese su DNI" size="30"> &nbsp; &nbsp;
   
   <br><br>
   Fecha de nacimiento* &nbsp; 
			<SELECT NAME="dia_nac">
				
				<option value=''>Dia</option>
				<OPTION VALUE="1">1   <OPTION VALUE="2">2   <OPTION VALUE="3">3  <OPTION VALUE="4">4
				<OPTION VALUE="5">5   <OPTION VALUE="6">6	<OPTION VALUE="7">7	 <OPTION VALUE="8">8
				<OPTION VALUE="9">9   <OPTION VALUE="10">10 	<OPTION VALUE="11">11 	<OPTION VALUE="12">12
				<OPTION VALUE="13">13 <OPTION VALUE="14">14		<OPTION VALUE="15">15	<OPTION VALUE="16">16
				<OPTION VALUE="17">17 <OPTION VALUE="18">18		<OPTION VALUE="19">19	<OPTION VALUE="20">20
				<OPTION VALUE="21">21 <OPTION VALUE="22">22		<OPTION VALUE="23">23	<OPTION VALUE="24">24
				<OPTION VALUE="25">25 <OPTION VALUE="26">26		<OPTION VALUE="27">27	<OPTION VALUE="28">28
				<OPTION VALUE="29">29 <OPTION VALUE="30">30		<OPTION VALUE="31">31
			</SELECT>
			
			<SELECT NAME="mes_nac">
				
				<option value=''>Mes</option>
				<OPTION VALUE="enero">Enero 	<OPTION VALUE="febrero">Febrero  <OPTION VALUE="marzo">Marzo
				<OPTION VALUE="abril">Abril     <OPTION VALUE="mayo">Mayo      	<OPTION VALUE="junio">Junio
				<OPTION VALUE="julio">Julio 	<OPTION VALUE="agosto">Agosto	<OPTION VALUE="septiembre">Septiembre
				<OPTION VALUE="octubre">Octubre	<OPTION VALUE="noviembre">Noviembre <OPTION VALUE="diciembre">Diciembre
			</SELECT>
			
			<SELECT NAME="anio_nac">
				
				<option value=''>A&ntilde;o</option>
				<OPTION VALUE="1920">1920 	<OPTION VALUE="1921">1921 <OPTION VALUE="1922">1922 <OPTION VALUE="1923">1923
				<OPTION VALUE="1924">1924	<OPTION VALUE="1925">1925 <OPTION VALUE="1926">1926	<OPTION VALUE="1927">1927
				<OPTION VALUE="1928">1928	<OPTION VALUE="1929">1929 <OPTION VALUE="1930">1930	<OPTION VALUE="1931">1931
				<OPTION VALUE="1932">1932	<OPTION VALUE="1933">1933 <OPTION VALUE="1934">1934	<OPTION VALUE="1935">1935
				<OPTION VALUE="1936">1936	<OPTION VALUE="1937">1937 <OPTION VALUE="1938">1938	<OPTION VALUE="1939">1939
				<OPTION VALUE="1940">1940	<OPTION VALUE="1941">1941 <OPTION VALUE="1942">1942	<OPTION VALUE="1943">1943
				<OPTION VALUE="1944">1944	<OPTION VALUE="1945">1945 <OPTION VALUE="1946">1946	<OPTION VALUE="1947">1947
				<OPTION VALUE="1948">1948	<OPTION VALUE="1949">1949 <OPTION VALUE="1950">1950	<OPTION VALUE="1951">1951
				<OPTION VALUE="1952">1952	<OPTION VALUE="1953">1953 <OPTION VALUE="1954">1954	<OPTION VALUE="1955">1955
				<OPTION VALUE="1956">1956	<OPTION VALUE="1957">1957 <OPTION VALUE="1958">1958	<OPTION VALUE="1959">1959
				<OPTION VALUE="1960">1960	<OPTION VALUE="1961">1961 <OPTION VALUE="1962">1962	<OPTION VALUE="1963">1963
				<OPTION VALUE="1964">1964	<OPTION VALUE="1965">1965 <OPTION VALUE="1966">1966	<OPTION VALUE="1967">1967
				<OPTION VALUE="1968">1968	<OPTION VALUE="1969">1969 <OPTION VALUE="1970">1970 <OPTION VALUE="1971">1971
				<OPTION VALUE="1972">1972	<OPTION VALUE="1973">1973 <OPTION VALUE="1974">1974 <OPTION VALUE="1975">1975
				<OPTION VALUE="1976">1976	<OPTION VALUE="1977">1977 <OPTION VALUE="1978">1978 <OPTION VALUE="1979">1979
				<OPTION VALUE="1980">1980 	<OPTION VALUE="1981">1981 <OPTION VALUE="1982">1982 <OPTION VALUE="1983">1983 
				<OPTION VALUE="1984">1984 	<OPTION VALUE="1985">1985 <OPTION VALUE="1986">1986 <OPTION VALUE="1987">1987
				<OPTION VALUE="1988">1988   <OPTION VALUE="1989">1989 <OPTION VALUE="1990">1990 <OPTION VALUE="1991">1991 
				<OPTION VALUE="1992">1992   <OPTION VALUE="1993">1993 <OPTION VALUE="1994">1994 <OPTION VALUE="1995">1995 
				<OPTION VALUE="1996">1996   <OPTION VALUE="1997">1997 <OPTION VALUE="1998">1998 <OPTION VALUE="1999">1999
				<OPTION VALUE="2000">2000   <OPTION VALUE="2001">2001 <OPTION VALUE="2002">2002 <OPTION VALUE="2003">2003 
				<OPTION VALUE="2004">2004	<OPTION VALUE="2005">2005 <OPTION VALUE="2006">2006 <OPTION VALUE="2007">2007 
				<OPTION VALUE="2008">2008   <OPTION VALUE="2009">2009 <OPTION VALUE="2010">2010 <OPTION VALUE="2011">2011 
				<OPTION VALUE="2012">2012 <OPTION VALUE="2013">2013 <OPTION VALUE="2014">2014 
			</SELECT>





 <br><br>
   Sexo*: &nbsp;
		<INPUT TYPE="radio" NAME="sexo" VALUE="M" CHECKED>Mujer
		<INPUT TYPE="radio" NAME="sexo" VALUE="H">Hombre
<br><br>

  
* Campos obligatorios <br><br>  
<b>Informacion de contacto</B><br><br>
Tel&eacute;fono* &nbsp; <INPUT TYPE="text" NAME="tel1" value="Argentina(54)" size="30"> 
Tel&eacute;fono &nbsp; <INPUT TYPE="text" NAME="tel2" value="M&oacute;vil" size="30"> <br><br> 
Correo electronico* <br> <INPUT TYPE="text" NAME="email1" value="Ingrese su Correo Electronico" size="50"><br><br> 
Reconfirmar correo electronico* <br> <INPUT TYPE="text" NAME="email2" value="Reingrese su Correo Electronico" size="50"><br><br> 

<INPUT TYPE="submit" VALUE="Confirmar reserva" name="enviar" onclick="validar();"/>
 <br>
</div>	
</FORM>

<div id="pie" >
			<img alt="logo_pie" src="../images/LogoCompania_footer.PNG"/>
</div>		

 <!-- ir de aca a pantalla que guarde los datos del vuelo y del pasajero y devuelva el codigo de reserva  -->

</BODY>
</html>



