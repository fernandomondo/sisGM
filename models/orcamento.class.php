<?php



class Orcamento{
		
	private $codVeiculo;
	private $modelo;
	private $valorBase;
	
	//acessorios
	private $airBag;
	private $direcaoHidraulica;
	private $abs;
	private $gps;
	
	public function getCodVeiculo(){
		return $this->codVeiculo;
	}
	
	public function setCodVeiculo($codVeiculo){
		$this->codVeiculo = $codVeiculo;
	}
	
	public function getModelo(){
		return $this->modelo;
	}
	
	public function setModelo($modelo){
		$this->Modelo = $modelo;
	}
	
	public function getValorBase(){
		return $this->valorBase;
	}
	
	public function setValorBase($valorBase){
		$this->valorBase = $valorBase;
	}
	
	public function getAirBag(){
		return $this->airBag;
	}
	
	public function setAirBag($airBag){
		$this->airBag = $airBag;
	}
	
	public function getDirecaoHidraulica(){
		return $this->direcaoHidraulica;
	}
	
	public function setDirecaoHidraulica($direcaoHidraulica){
		$this->direcaoHidraulica = $direcaoHidraulica;
	}
	
	public function getAbs(){
		return $this->abs;
	}
	
	public function setAbs($abs){
		$this->abs = $abs;
	}
	
	public function getGps(){
		return $this->gps;
	}
	
	public function setGps($gps){
		$this->gps = $gps;
	}
	
	
}

?>
