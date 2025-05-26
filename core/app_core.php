<?php
	# Seguridad
	defined('INDEX_DIR') || exit('Developer Software');
	
	# Alerta de versión
	try {
		if (version_compare(phpversion(), '7.0.0', '<'))
		throw new Exception(true);
	} catch (Exception $e) {
		die('La versión actual de <b>PHP</b> es <b>' . phpversion() . '</b> y como mínimo se require la versión <b>7.0.0</b>');
	}
	
	# Definimos desde donde se accede a los controllers
	define('IS_API', false);
	
	# Carga de configuración general
	require_once 'core/server.php';
	require_once 'core/route.php';
	require_once 'core/timezone.php';
	require_once 'core/config.php';
	
	# Implementación de autoloaders
	require_once 'core/kernel/Ocrend.php';
	require_once 'vendor/autoload.php';
	
	# Test de velocidad de el Debug
	if (DEBUG) {
		Kint::$theme = 'aante-light';
		$startime = explode(" ", microtime());
		$startime = $startime[0] + $startime[1];
	}
	
	# Activación del Firewall
	!FIREWALL ?: new Firewall;
	
	# Router para URL's amigables
	$router = new Router;
?>