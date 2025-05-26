<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrolador Programador');
	//------------------------------------------------
	class settingController extends Controllers {
		public function __construct() {
			parent::__construct(true);
			# Variable convertida en global y ser consultada
			global $router;
			# Detección del controlador actual
			$var_router = $router->getController();
			# Reemplazar la palabra Controller
			$var_controller = str_replace("Controller", "/", $var_router);
			# Deteccion del metodo actual y concatenado del controlador
			$var_url = $var_controller . $this->method . '/';
			# Variable Get para cargar el id
			$_GET['field_id'] = $this->route->getId();
			# Instanciando clases del modelo
			$var_m_zv_setting = new m_zv_settingModel;
			# Restricción alfanumérica
			if (null != $this->route->getMethod() and Strings::alphanumeric($this->route->getMethod())) {
				# Hay acceso
				$metodo = $this->route->getMethod();
				switch ($this->method) {
					case 'error':
						# Cargar en el metodo por url la plantilla con su contenido a visualizar
						echo $this->template->render('backend/message/error');
						# Finaliza la ejecución de la estructura en curso
						break;
					case 'query':
						# Cargar en el metodo por url la plantilla con su contenido a visualizar
						echo $this->template->render('backend/message/query');
						# Finaliza la ejecución de la estructura en curso
						break;
					case 'update':
						if ($this->isset_id) {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('backend/general/setting', array(
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_update' => $var_m_zv_setting->sql_controller_update(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_modal' => $var_m_zv_setting->sql_controller_modal(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_panel' => $var_m_zv_setting->sql_controller_panel(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_configuration_button' => $var_m_zv_setting->sql_select_tc_azp_configuration_button(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_configuration_color' => $var_m_zv_setting->sql_select_tc_azp_configuration_color(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_configuration_dimension' => $var_m_zv_setting->sql_select_tc_azp_configuration_dimension(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_configuration_theme' => $var_m_zv_setting->sql_select_tc_azp_configuration_theme(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_configuration_table' => $var_m_zv_setting->sql_select_tc_azp_configuration_table(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_modal_code' => $var_m_zv_setting->sql_select_tc_azp_modal_code(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_pallet_color' => $var_m_zv_setting->sql_select_tc_azp_pallet_color()
							));
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'update/' . $_SESSION[SESS_APP_ID] . '/');
							# Detener la ejecucion
							exit();
						}
						# Finaliza la ejecución de la estructura en curso
						break;
					default:
						# Redireccionar a una pagina segun el metodo cargado
						Func::redir(URL . $var_controller . 'error/');
						# Detener la ejecucion
						exit();
						# Finaliza la ejecución de la estructura en curso
						break;
				}
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . $var_controller . 'update/');
				# Detener la ejecucion
				exit();
			}
		}
	}
?>