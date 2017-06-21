<?php
$this->get('noticias', function($arg){
	echo 'entrou em noticias';
});

$this->get('noticias/{id}', function($arg){
	echo 'quero ver uma noticia especifica...';
});

$this->get('nome/{nome}/{idade}', function($arg){
	echo "Meu nome: ".$arg['nome']." e tenho ".$arg['idade']." anos";
});