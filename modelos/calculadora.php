<?php
class Calculadora
{
	private $numero1;
	private $numero2;
	private $actual;
	private $vacio;
	private $entero;
	public function __construct(){
		$this->numero1 = 0;
		$this->numero2 = 0;
		$this->actual= 0;
		$this->vacio=" ";
		$this->entero=" ";

	}

	public function setNumeros($n1,$n2,$act){
		$this->numero1 = $n1;
		$this->numero2 = $n2;
		$this->actual= $act;
	}
		public function setMensajes($v1,$e2){
		$this->vacio = $v1;
		$this->entero = $e2;
	}
	public function getnumero1(){
		return $this->numero1;
	}
	public function getnumero2(){
		return $this->numero2;
	}
	public function getVacio(){
		return $this->vacio;
	}
		public function getentero(){
		return $this->entero;
	}	
	

	public function calcularResultado(){
		$n1 = $this->numero1;
		$n2 = $this->numero2;
		$a= $this->actual;
		if ($a==1) {
			return ($n1+$n2);
		}
		else if ($a==2) {
			return ($n1-$n2);
		}
		
	}
}
