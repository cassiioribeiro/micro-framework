<?php
class Router{

	private $get;
	private $post;

	private function __construct(){

	}

	//carregando apenas uma instancia, pagrao Singleton
	public static function getInstance(){
		static $inst = null;
		if($inst === null){
			$inst = new Router();
		}
		return $inst;
	}

	//carregando as rotas
	public function load(){
		$this->loadRouteFile('default');

		return $this;
	}

	//carregando um arquivo pela roda
	public function loadRouteFile($f){
		if(file_exists('routes/'.$f.'.php')){
			return 'routes/'.$f.'.php';
		}
	}

	//processando as rotas
	public function match(){

	}

	//pegando dado pelo metodo get pela URL
	public function get($pattern, $function){
		$this->get[$pattern] = $function;
	}

	//pegando dado pelo metodo oculto post
	public function post(){
		$this->post[$pattern] = $function;
	}









}

?>