<?php
	# Seguridad
	defined('INDEX_DIR') || exit('Desarrollador Programador');
	
	# Definimos desde donde se accede a los controllers
	define('IS_API', true);
	
	# Carga de configuración general
	require_once '../core/server.php';
	require_once '../core/route.php';
	require_once '../core/timezone.php';
	require_once '../core/config.php';
	
	# Implementación de autoloaders
	require_once '../core/kernel/Ocrend.php';
	require_once '../vendor/autoload.php';
	
	# Activación del Firewall
	!FIREWALL ?: new Firewall;
	
	# Router para URL's amigables
	$router = new Router;
