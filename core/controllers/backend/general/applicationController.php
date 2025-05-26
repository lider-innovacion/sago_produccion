<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrolador Programador');
	//------------------------------------------------
	class applicationController extends Controllers {
		public function __construct() {
			parent::__construct(true);
			# Variable Get para cargar el id
			$_GET['field_id'] = $this->route->getId();
			# Instanciando clases del modelo
			$var_m_zz_application = new m_zz_applicationModel;
			# Restricción alfanumérica
			if (null != $this->route->getMethod() and Strings::alphanumeric($this->route->getMethod())) {
				# Hay acceso
				$metodo = $this->route->getMethod();
				switch ($this->method) {
					case 'update':
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_m_zz_application->sql_zz_controller_update();
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_m_zz_application->sql_zz_application_update();
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . '/access/');
							# Detener la ejecucion
							exit;
						}
						break;
					default:
						# Redireccionar a una pagina segun el metodo cargado
						Func::redir(URL . '/dashboard/');
						# Detener la ejecucion
						exit;
						break;
				}
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . '/dashboard/');
				# Detener la ejecucion
				exit;
			}
		}
	}
?>