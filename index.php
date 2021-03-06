<?php
require "db/db.php";
require 'vendor/autoload.php';
require "controladores/ctrl_index.php";
require_once('clases/template.php');
$controlIndex=new ControladorIndex();

/*$tpl = Template::getInstance();
$tpl->asignar('url_base',"http://localhost/tip/ejemplos/framework/");
$tpl->asignar('url_logout',$controlIndex->getUrl("usuario","logout"));
$tpl->asignar('proyecto',"Apps Web");*/

//Cargamos controladores y acciones

if(isset($_GET['url'])){
	$query = $_GET['url'];
	$request = explode('/', $query);
	$controller = (!empty($request[0])) ? $request[0] : 'usuario';
	$action = (!empty($request[1])) ? $request[1] : 'landing';
	$params=array();
	for ($i=2; $i <count($request) ; $i++) {
		$params[]=$request[$i];
	}
}else{
	$controller="usuario";
	$action="landing";
	$params=array();
}

$controllerObj=$controlIndex->cargarControlador($controller);
$controlIndex->ejecutarAccion($controllerObj,$action,$params);

?>
