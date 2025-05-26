<?php
	//------------------------------------------------
	# Carga del núcleo
	define('GENERATOR',false);
	define('INDEX_DIR',true);
	require('../core/api_core.php');
	//------------------------------------------------
	# Modo debug
	if (DEBUG) {
		$app = new \Slim\App(['settings' => ['displayErrorDetails' => true]]);
		$c = $app->getContainer();
		$c['notAllowedHandler'] = function ($c) {
			return function ($request, $response, $methods) use ($c) {
				return $c['response']
				->withStatus(405)
				->withHeader('Allow', implode(', ', $methods))
				->withHeader('Content-type', 'text/html')
				->write('Method must be one of: ' . implode(', ', $methods));
			};
		};
	} else {
		$app = new \Slim\App;
	}
	//------------------------------------------------
	# Peticiones GET
	if ($_GET) { include('http/get.php'); }
	//------------------------------------------------
	# Peticiones POST
	if ($_POST) { include('http/post.php'); }
	//------------------------------------------------
	# Peticiones DELETE
	include('http/delete.php');
	//------------------------------------------------
	# Peticiones PUT
	include('http/put.php');
	//------------------------------------------------
	# Peticiones GET ó POST
	include('http/map.php');
	//------------------------------------------------
	$app->run();
?>