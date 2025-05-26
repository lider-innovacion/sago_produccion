<?php
	//------------------------------------------------
	# Carga del núcleo
	define('INDEX_DIR',true);
	require('core/app_core.php');
	//------------------------------------------------
	# Detección del controlador actual
	$var_controller = $router->getController();
	# Reemplazar la palabra Controller
	$var_replace = str_replace("Controller", "", $var_controller);
	# Utilizar variable en cualquier lugar
	global $var_controller;
	global $var_replace;
	//------------------------------------------------
	if (is_file('core/controllers/' . $var_controller . '.php')) {
		# Identificación del controlador en el sistema
		if (is_readable('core/controllers/' . $var_controller . '.php')) {
			# Carga del controlador seleccionado
			require('core/controllers/' . $var_controller . '.php');
			# Imprimir controlador encontrado
			new $var_controller;
		}
	}
	if (isset($_SESSION[SESS_APP_ID])) {
		if (is_file('core/controllers/backend/general/' . $var_controller . '.php')) {
			# Identificación del controlador en el sistema
			if (is_readable('core/controllers/backend/general/' . $var_controller . '.php')) {
				# Carga del controlador seleccionado
				require('core/controllers/backend/general/' . $var_controller . '.php');
				# Imprimir controlador encontrado
				new $var_controller;
			}
		} else if (is_file('core/controllers/backend/inward/' . $var_controller . '.php')) {
			# Identificación del controlador en el sistema
			if (is_readable('core/controllers/backend/inward/' . $var_controller . '.php')) {
				# Carga del controlador seleccionado
				require('core/controllers/backend/inward/' . $var_controller . '.php');
				# Imprimir controlador encontrado
				new $var_controller;
			}
		} else if (is_file('core/controllers/backend/api-json/' . $var_controller . '.php')) {
			# Identificación del controlador en el sistema
			if (is_readable('core/controllers/backend/api-json/' . $var_controller . '.php')) {
				# Carga del controlador seleccionado
				require('core/controllers/backend/api-json/' . $var_controller . '.php');
				# Imprimir controlador encontrado
				new $var_controller;
			}
		} else if (is_file('core/controllers/backend/message/' . $var_controller . '.php')) {
			# Identificación del controlador en el sistema
			if (is_readable('core/controllers/backend/message/' . $var_controller . '.php')) {
				# Carga del controlador seleccionado
				require('core/controllers/backend/message/' . $var_controller . '.php');
				# Imprimir controlador encontrado
				new $var_controller;
			}
		} else {
			# Cargar controlador especificado por defecto
			$var_controller = 'errorController';
			# Carga del controlador seleccionado
			require('core/controllers/backend/message/' . $var_controller . '.php');
			# Imprimir controlador encontrado
			new $var_controller;
		}
	} else {
		if (is_file('core/controllers/frontend/general/' . $var_controller . '.php')) {
			# Identificación del controlador en el sistema
			if (is_readable('core/controllers/frontend/general/' . $var_controller . '.php')) {
				# Carga del controlador seleccionado
				require('core/controllers/frontend/general/' . $var_controller . '.php');
				# Imprimir controlador encontrado
				new $var_controller;
			}
		} else if (is_file('core/controllers/frontend/inward/' . $var_controller . '.php')) {
			# Identificación del controlador en el sistema
			if (is_readable('core/controllers/frontend/inward/' . $var_controller . '.php')) {
				# Carga del controlador seleccionado
				require('core/controllers/frontend/inward/' . $var_controller . '.php');
				# Imprimir controlador encontrado
				new $var_controller;
			}
		} else if (is_file('core/controllers/frontend/api-json/' . $var_controller . '.php')) {
			# Identificación del controlador en el sistema
			if (is_readable('core/controllers/frontend/api-json/' . $var_controller . '.php')) {
				# Carga del controlador seleccionado
				require('core/controllers/frontend/api-json/' . $var_controller . '.php');
				# Imprimir controlador encontrado
				new $var_controller;
			}
		} else {
			# Cargar controlador especificado por defecto
			$var_controller = 'errorController';
			# Carga del controlador seleccionado
			require('core/controllers/frontend/message/' . $var_controller . '.php');
			# Imprimir controlador encontrado
			new $var_controller;
		}
	}
	//------------------------------------------------
	# Modo debug
	#!DEBUG ?: new Debug($startime);
	#init_set('display_errors','off');
	#init_set('display_startup_errors','off');
	#error_reporting(0);
?>