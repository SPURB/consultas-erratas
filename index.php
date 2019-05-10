<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
include 'classes/Getters.php';

if(isset($_GET["id"])){
	$id = $_GET["id"];
	$response = new GetErratas($id);
	echo $response -> getRoute($id);
}
elseif (isset($POST)) {
	include 'classes/Headers.php';
	$response = new Headers();
	echo $response->getHeaders();
}
else {
	$endpoints = new GetEndPoints('erratas');

	if($endpoints) { 
		$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		echo $endpoints -> listJsonFiles('erratas', $base_url); 
	}
	else  {
		http_response_code(404);
		echo array("Erro" => "Não há erratas"); 
	}
}
