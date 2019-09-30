<?php
class Negotiation implements \JsonSerializable{

	private $id_neg;
	private $type_neg;
	private $date_neg;
	private $usr_id;
	private $esteira_id;
	private $cli_id;
	private $assess_id;


	public function getIdNeg(){
		return $this->id_neg;
	}
	public function setIdNeg($id_neg){
		$this->id_neg = $id_neg;
	}
	public function getType_neg(){
		return $this->type_neg;
	}
	public function setType_neg($type_neg){
		$this->type_neg = $type_neg;
	}
	public function getDate_neg(){
		return $this->date_neg;
	}
	public function setDate_neg($date_neg){
		$this->date_neg = $date_neg;
	}
	public function getUsr_id(){
		return $this->usr_id;
	}
	public function setUsr_id($usr_id){
		$this->usr_id = $usr_id;
	}
	public function getEsteira_id(){
		return $this->esteira_id;
	}
	public function setEsteira_id($esteira_id){
		$this->esteira_id = $esteira_id;
	}
	
}


?>