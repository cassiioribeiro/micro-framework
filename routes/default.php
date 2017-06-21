<?php
//primeira rota, sem nenhum parametro
//recebendo um parametro pela url, a variavel $arg e um array com id => ? 
$this->get('',function($arg){
	echo 'home';
});

$this->loadRouteFile('noticias');