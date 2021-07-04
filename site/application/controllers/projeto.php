<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //Sempre deixar definido, pois se não achar o diretório vai aparecer a mensagem.

class Projeto extends CI_Controller { //A classe sempre deve ter o mesmo nome do arquivo controller

	function __contrruct(){ //construdor do controller, nele é possivel carregar as librari, helpers, models que serão utilizados nesse controller
		parent::__contrruct();//Chamando o construtor da classe pai
	}

	public function index(){
		$this->load->helper('url');
		$this->load->view('index');
	}
}
