<?php
class Core{

	private $config;

	private function __construct(){

	}
	//carregando apenas uma instancia, pagrao Singleton
	public static function getInstance(){
		static $inst = null;
		if($inst === null){
			$inst = new Core();
		}
		return $inst;
	}

	public function run($cfg){
		$this->config = $cfg;
		$this->loadModule('router')->load()->match();
	}

	public function getConfig($name){
		return $this->config($name);
	}

	public function loadModule($moduleName){
		try{
			//deixando todo o nome do modulo em minus. e depois pega a primeira letra e coloca em maiusculo
			$moduleName = ucfirst(strtolower($moduleName));
			$module = $moduleName::getInstance();
			return $module;
		}catch(Exception $e){
			die($e->getInstance());
		}
	}	


}