<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrolador Programador');
	//------------------------------------------------
	class profileController extends Controllers {
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
			$var_m_zv_firm = new m_zv_firmModel;
			# Instanciando clases del modelo
			$var_m_zv_password = new m_zv_passwordModel;
			# Instanciando clases del modelo
			$var_m_zv_personal = new m_zv_personalModel;
			# Instanciando clases del modelo
			$var_m_zv_profile = new m_zv_profileModel;
			# Restricción alfanumérica
			if (null != $this->route->getMethod() and Strings::alphanumeric($this->route->getMethod())) {
				# Hay acceso
				$metodo = $this->route->getMethod();
				switch ($this->method) {
					case 'document':
						# Capturar datos por el metodo post
						$var_name = $_FILES['field_firm']['name'];
						$var_type = $_FILES['field_firm']['type'];
						$var_tmp_name = $_FILES['field_firm']['tmp_name'];
						$var_error = $_FILES['field_firm']['error'];
						$var_size = $_FILES['field_firm']['size'];
						# Enviar datos a traves del modelo
						$var_m_zv_firm->sql_zv_firm_document($var_name, $var_type, $var_tmp_name, $var_error, $var_size);
						break;
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
							echo $this->template->render('backend/general/profile', array(
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_detail' => $var_m_zv_profile->sql_controller_detail(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_update' => $var_m_zv_profile->sql_controller_update(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_country' => $var_m_zv_profile->sql_select_tc_azp_country(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_document_type' => $var_m_zv_profile->sql_select_tc_azp_document_type()
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