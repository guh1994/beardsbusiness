<?php 
require_once("./model/UF.php");

class Cidade extends UF implements \JsonSerializable
{
	private $idCidade;
	private $nomeCidade;
	private $idUF;
	private $siglaUF;

	public function getIdCidade(){
		return $this->idCidade;
	}
	public function setIdCidade($idCidade){
		$this->idCidade = $idCidade;
	}
	public function getNomeCidade(){
		return $this->nomeCidade;
	}
	public function setNomeCidade($nomeCidade){
		$this->nomeCidade = $nomeCidade;
	}
	public function getIdUf(){
		return $this->idUf;
	}
	public function setIdUF($idUF){
		$this->idUF = $idUF;
	}
	public function getSiglaUF(){
		return $this->siglaUF;
	}
	public function setSiglaUF($siglaUF){
		$this->siglaUF = $siglaUF;
	}
}

?>