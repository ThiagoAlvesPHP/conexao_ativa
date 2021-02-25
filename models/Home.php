<?php
class Home extends model{
	//getall planos
	public function getAllPlanos(){
		$sql = $this->db->query("SELECT * FROM cad_planos");
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	//getall duvidas
	public function getAllDuvidas(){
		$sql = $this->db->query("SELECT * FROM cad_duvidas");
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	//getall carousel
	public function getAllCarousel(){
		$sql = $this->db->query("SELECT * FROM cad_carousel");
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
}