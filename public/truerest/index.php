<?php
//var_dump("<pre>", $_SERVER);

set_include_path(
	get_include_path()
	. PATH_SEPARATOR . __DIR__ . '/../../'
);

$uri = $_SERVER['REQUEST_URI'];
$arrayUri = explode('/', $uri);
$user = $arrayUri[count($arrayUri) - 2];
$action = $arrayUri[count($arrayUri) - 1];
if ($user === 'users') {
	if ($action === "add") {
		require 'application/rest/cadastrar.php';
	} elseif ($action === "del") {
		$_POST['id'] = basename($_SERVER['REQUEST_URI']);
		require 'application/rest/excluir.php';
	} else {
		require 'application/rest/listar.php';
	}
}