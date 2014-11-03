<?php 

  //print "Se incluyo mysql.php\n";
  
	class MySQL{
	
			private $conexion;
			//   private $total_consultas;
		
			
	        //constructor	
			public function MySQL(){
				if(!isset($this->conexion)){
					$this->conexion = (mysql_connect("127.0.0.1","root",""))
					or die(mysql_error());
					mysql_select_db("tp_pWeb_database",$this->conexion) or die(mysql_error());
				}
			}
		
		   public function consulta($consulta){ 
		     $this->total_consultas++; 
		     $resultado = mysql_query($consulta,$this->conexion);
		     if(!$resultado){ 
		       echo 'MySQL Error: ' . mysql_error();
		       exit;
		     }
		     return $resultado;
		   }

  public function fetch_array($consulta){
   return mysql_fetch_array($consulta);
  }

  public function num_rows($consulta){
   return mysql_num_rows($consulta);
  }

//   public function getTotalConsultas(){
//    return $this->total_consultas; 
//   }

  public function freeResult($result){
  	mysql_free_result($result);
  }
  public function closeConection(){
  	// Cerrar la conexión
  	//mysql_close($conexion);
  	mysql_close($conexion);
  }
  
}?>