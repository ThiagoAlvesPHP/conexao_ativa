<?php
class homeController extends controller {

	public function index() {
		$dados = array();
		$h = new Home();
		$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		
		$dados['planos'] = $h->getAllPlanos();
		$dados['duvidas'] = $h->getAllDuvidas();
		$dados['carousel'] = $h->getAllCarousel();
		$this->loadTemplate('home', $dados);
	}
	//envio de assinatura
	public function whatsapp(){
		$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		$url = "https://api.whatsapp.com/send?phone=5579996887061&text=";
		if (!empty($post)) {
			$url .= $post['texto']."%0A%0A*Cliente: ".$post['cliente']."*";
			header('Location: '.$url);
		} else {
			echo "<h1>Não tente burlar o sistema!</h1>";
		}
	}
}