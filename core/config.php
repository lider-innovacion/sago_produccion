<?php
	# Tipado estricto para PHP 7
	declare(strict_types=1);
	//------------------------------------------------
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	# Timezone DOC http://php.net/manual/es/timezones.php
	date_default_timezone_set('America/Bogota');
	//------------------------------------------------
	/**
	* Configuración de la conexión con la base de datos.
	* @param host 'hosting local/remoto'
	* @param user 'usuario de la base de datos'
	* @param pass 'contraseña del usuario de la base de datos'
	* @param name 'nombre de la base de datos'
	* @param port 'puerto de la base de datos (no necesario en la mayoría de motores)'
	* @param protocol 'protocolo de conexión (no necesario en la mayoría de motores)'
	* @param motor 'motor de conexión por defecto'
	* MOTORES VALORES: mysql
	*/
	define('DATABASE', array(
		'host' => 'localhost',
		'user' => 'admin',
		'pass' => 'GscColombia2021!',
		'name' => 'bd_migration',
		'port' => 1521,
		'protocol' => 'TCP',
		'motor' => 'mysql'
	));
	//------------------------------------------------
	# Definir acceso para construccion de archivos
	//define('ROUTE', '..');
	//------------------------------------------------
	# Definir la carpeta de ubicacion del framework
	//define('__ROOT__', '/migration/');
	//------------------------------------------------
	# Constantes fundamentales
	//if (isset($_SERVER['HTTPS'])) { define('server', 'https'); } else { define('server', 'http'); }
	//define('URL', server . '://' . $_SERVER['HTTP_HOST'] . __ROOT__);
	//define('APP', 'GSC');
	//define('APS', 'MI');
	# Constantes Fundamentales
	define('URL', SRV_APP_URL);
	define('APP', 'GSC');
	define('APS', 'MI');
	//------------------------------------------------
	# Control de sesiones - Tiempo de vida para las sesiones 5 horas = 18000 segundos.
	define('DB_SESSION', false);
	define('SESSION_TIME', 18000);
	define('SESS_APP_ID', 'app_id');
	# Evita el acceso a la cookie mediante lenguajes de script (cómo javascript)
	session_start([
		'use_strict_mode' => true,
		'use_cookies' => true,
		'cookie_lifetime' => SESSION_TIME,
		'cookie_httponly' => true
	]);
	//------------------------------------------------
	# Invocacion de la sesion activada por un usuario
	if (isset($_SESSION[SESS_APP_ID])): $var_session = $_SESSION[SESS_APP_ID]; else: $var_session = 0; endif;
	//------------------------------------------------
	# Control de validacion de sesion e inclusion del archivo
	if ($var_session != 0) { include('emails/' . $var_session . '.php'); } else { include('cemail.php'); }
	//------------------------------------------------
	# Constantes de PHPMailer
	/*define('PHPMAILER_HOST', 'smtp.gmail.com');
	define('PHPMAILER_USER', 'adisonzenemij@gmail.com');
	define('PHPMAILER_PASS', 'qsjbkklfihmhjtsy');
	define('PHPMAILER_PORT', 465);*/
	//------------------------------------------------
	# Constantes de PHPMailer
	/*define('PHPMAILER_HOST', 'servidorsmtp-relay.sendinblue.com');
	define('PHPMAILER_USER', 'daniel.valero@branderideas.com');
	define('PHPMAILER_PASS', 'H1PdzY3XtWnaJUDx');
	define('PHPMAILER_PORT', 587);*/
	//------------------------------------------------
	# Constantes de PHPMailer
	/*define('PHPMAILER_HOST', 'smtp.office365.com');
	define('PHPMAILER_USER', 'paginaweb@gsco.com.co');
	define('PHPMAILER_PASS', 'Gsc2021**');
	define('PHPMAILER_PORT', 587);*/
	//------------------------------------------------
	# PayPal SDK - sandbox ó live
	define('PAYPAL_MODE','sandbox');
	define('PAYPAL_CLIENT_ID','');
	define('PAYPAL_CLIENT_SECRET','');
	//------------------------------------------------
	# Activación del Firewall
	define('FIREWALL', true);
	//------------------------------------------------
	# Activación del DEBUG, solo para desarrollo
	define('DEBUG', true);
	//------------------------------------------------
	# Verifica cual es el motor de templates actual (TWIG:true o PLATESPHP:false)
	define('USE_TWIG_TEMPLATE_ENGINE', false);
	//------------------------------------------------
	# Versión actual del framework
	define('VERSION', '1.2.4');
	//------------------------------------------------
	# Fecha actual en el aplicativo
	define('YEAR', date('Y'));
	//------------------------------------------------
	# Fecha actual en el aplicativo
	define('YEAR_MONTH', date('Y-m'));
	//------------------------------------------------
	# Fecha actual en el aplicativo
	define('DATE', date('Y-m-d'));
	//------------------------------------------------
	# Fecha actual en el aplicativo
	define('HOUR', date('H:i:s'));
	//------------------------------------------------
	# Fecha actual en el aplicativo
	define('DATE_HOUR', date('Y-m-d H:i:s'));
	//------------------------------------------------
	# Fecha actual en el aplicativo
	define('DATE_NUMBER', date('Ymd'));
	//------------------------------------------------
	# Fecha actual en el aplicativo
	define('HOUR_NUMBER', date('His'));
	//------------------------------------------------
	# Fecha actual en el aplicativo
	define('ITEM_DATE_NUMBER', date('d_m_Y'));
	//------------------------------------------------
	# Tamaño limitante para el envio de correos
	define('SIZE_FILES', 6000000);
	//------------------------------------------------
	# Tamaño limitante para el envio de correos
	define('SIZE_LETTER', '6 MB');
	//------------------------------------------------
	# Codificacion de datos para la base y proyecto
	mb_internal_encoding("UTF-8");
	mb_http_output('UTF-8');
	mb_http_input('UTF-8');
	//------------------------------------------------
	# Incluyendo tablas y campos de la base de datos
	require('database.php');
	//------------------------------------------------
	# Incluyendo url segun tablas de la base de datos
	require('baseurl.php');
	//------------------------------------------------
?>