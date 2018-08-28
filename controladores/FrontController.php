<?php

/**
 * 
 * El controlador de frente, decodifica la url
 * para saber la accion de la figura que debe 
 * procesar. Luego usa el modelo y prepara la vista
 * a renderizar
 */
$accion = $_REQUEST['accion'];

if ($accion == 'calculadora'){

	if(isset($_REQUEST['btnSumar'])){
		$numero1 = $_REQUEST['txtNumero1'];
		$numero2 = $_REQUEST['txtNumero2'];
		$mensaje1=" ";
		$mensaje2=" ";
		$positivo=true;


			if(strlen($numero1)==0 || strlen($numero2)==0)
			{


 				$mensaje1="Recuerde que no debe haber un campo Vacio!!!";
						
			}

			for ($i=0; $i<strlen($numero1);$i++)
 					if($numero1[$i]!="0" && intval($numero1[$i])==0)
 						$positivo=false;
 			for ($i=0; $i<strlen($numero2);$i++)
 					if($numero2[$i]!="0" && intval($numero2[$i])==0)
 						$positivo=false;


 			 		if($positivo==false)
 		{
 			$mensaje2="Recuerde que solo se permiten numeros Enteros Positivos!!!";
 			//$mensaje1=" ";
				$numero1=0;
				$numero2=0;		
 		}
 		else
 		{
 			$numero1=intval($numero1);
 			$numero2=intval($numero2);
 		}

		//usando el modelo
		require_once '../modelos/calculadora.php';
		$calculadora = new Calculadora();
		$act=1;
		$calculadora->setNumeros($numero1,$numero2,$act);
		$calculadora->setMensajes($mensaje1,$mensaje2);
		//preparando vista
		require_once '../vistas/calculadora_vista.php';
		
		
	}
		if(isset($_REQUEST['btnRestar'])){
		$numero1 = $_REQUEST['txtNumero1'];
		$numero2 = $_REQUEST['txtNumero2'];
		$mensaje1=" ";
		$mensaje2=" ";
		$positivo=true;


			if(strlen($numero1)==0 || strlen($numero2)==0)
			{


 				$mensaje1="Recuerde que no debe haber un campo Vacio!!!";
						
			}

			for ($i=0; $i<strlen($numero1);$i++)
 					if($numero1[$i]!="0" && intval($numero1[$i])==0)
 						$positivo=false;
 			for ($i=0; $i<strlen($numero2);$i++)
 					if($numero2[$i]!="0" && intval($numero2[$i])==0)
 						$positivo=false;


 			 		if($positivo==false)
 		{
 			$mensaje2="Recuerde que solo se permiten numeros Enteros Positivos!!!";
 			//$mensaje1=" ";
				$numero1=0;
				$numero2=0;		
 		}
 		else
 		{
 			$numero1=intval($numero1);
 			$numero2=intval($numero2);
 		}




		//$lado3 = $_REQUEST['txtLado3'];
		//usando el modelo
		require_once '../modelos/calculadora.php';
		$calculadora = new Calculadora();
		$act=2;
		$calculadora->setNumeros($numero1,$numero2,$act);
		$calculadora->setMensajes($mensaje1,$mensaje2);
		//preparando vista
		require_once '../vistas/calculadora_vista.php';
		
		
	}else{
				require_once '../modelos/calculadora.php';
		$calculadora = new Calculadora();
		
		$calculadora->setNumeros("","","");
		$calculadora->setMensajes(" "," ");
		//preparando vista
		require_once '../vistas/calculadora_vista.php';
		
	}

}


?>
