<?php require_once('bancoInteracao.php'); ?>
<?php 

	date_default_timezone_set("America/Sao_Paulo");

	$post = $_REQUEST["post"];

	$data = date("Y-m-d");
	$hora = date("h:i:sa");
	
	$banco = new Banco("localhost", "root", "");
	$banco->connect();
	$bancoInteracao = new BancoInteracao($banco);
	$bancoInteracao->gravaDados($post,$data,$hora);


