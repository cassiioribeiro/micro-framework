<?php
$this->get('noticias', function($arg){
	echo 'entrou em noticias';
});

$this->get('noticias/{id}', function($arg){
	$tpl = $this->core->loadModule('template');
	$db = $this->core->loadModule('database');

	$sql = $db->query("SELECT * FROM noticias");
	$array = $sql->fetchAll();

	print_r($array);


	$tpl->render('teste', $array=NULL);
});

$this->get('nome/{nome}/{idade}', function($arg){
	echo "Meu nome: ".$arg['nome']." e tenho ".$arg['idade']." anos";
});