<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class Helper {
		//------------------------------------------------
		/**
		* const ROUTE: Constante que indica la ruta según desde donde se llame el loader, desde la API REST o desde la Aplicación
		*
		*/
		const ROUTE = IS_API ? '../core/kernel/helpers/' : 'core/kernel/helpers/';
		//------------------------------------------------
		/**
		* Carga de forma estática un helper alojado en la carpeta helpers del kernel para su posterior uso
		*
		* @param string $helper: Nombre del helper a cargar
		*
		* @return void
		*/
		final static public function load(string $helper, Twig_Environment $object = null) {
			$helper = ucwords($helper);
			$file = self::ROUTE . $helper . '.php';
			if (file_exists($file)) {
				include_once($file);
				# Integración a twig
				if ($object instanceof Twig_Environment) {
					$object->addExtension(new $helper());
				}
			} else {
				trigger_error('El helper ' . $helper . ' no existe en la librería de helpers.', E_USER_ERROR);
			}
		}
		
		# Visualizar informacion formateada
		function format_print_r($data) {
			$format = print_r('<pre>');
			$format .= print_r($data);
			$format .= print_r('</pre>');
			return $format;
		}

		function actual_date() {
			$week_days = array ("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");
			$months = array ("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
			$year_now = date ("Y");
			$month_now = date ("n");
			$day_now = date ("j");
			$week_day_now = date ("w");
			//$date = $week_days[$week_day_now] . ", " . $day_now . " de " . $months[$month_now] . " de " . $year_now;
			$date = $months[$month_now] . " " . $day_now . " de " . $year_now;
			return $date;
		}
	}
?>