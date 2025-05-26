<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Programador Desarrollador');
	//------------------------------------------------
	class emailsController extends Controllers {
		public function __construct() {
			parent::__construct(true);
			# Variable convertida en global y ser consultada
			global $router;
			# Detección del controlador actual
			$var_router = $router->getController();
			# Reemplazar la palabra Controller
			$var_controller = str_replace("Controller", "/", $var_router);
			# Instanciando clases del modelo
			$var_m_azp_gsc_request = new m_azp_gsc_requestModel;
			# Deteccion del metodo actual y concatenado del controlador
			$var_url = $var_controller . $this->method . '/';
			# Variable Get para cargar el id
			$_GET['field_id'] = $this->route->getId();
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
					case 'emailse':
						# Control para validar el acceso a los resultados de la base de datos
						//if (false != $var_m_zz_design->sql_permits_data_by_create($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_email_se();
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { $arrayName[] = $value; }
							# Encodificar el ultimo resultado sin añadir una coma
							echo json_encode($arrayName);
							# Imprimir una variable adicional
							echo $var_end = '}';
							# Finalizar el codigo
							exit();
						//} else {
						//	# Redireccionar a una pagina segun el metodo cargado
						//	Func::redir(URL . str_replace("api", "", $var_controller) . 'access/');
						//	# Detener la ejecucion
						//	exit();
						//}
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
					case 'gscec':
						# Cargar en el metodo por url la plantilla con su contenido a visualizar
						echo $this->template->render('backend/emails/gsc_ec', array(
							# Cargar el controlador actual en una variable y ser declarada
							'df_var_controller' => $var_controller
						));
						# Finaliza la ejecución de la estructura en curso
						break;
					case 'gscrc':
						# Cargar en el metodo por url la plantilla con su contenido a visualizar
						echo $this->template->render('backend/emails/gsc_rc', array(
							# Cargar el controlador actual en una variable y ser declarada
							'df_var_controller' => $var_controller
						));
						# Finaliza la ejecución de la estructura en curso
						break;
					case 'gscse':
						# Cargar en el metodo por url la plantilla con su contenido a visualizar
						echo $this->template->render('backend/emails/gsc_se', array(
							# Cargar el controlador actual en una variable y ser declarada
							'df_var_controller' => $var_controller
						));
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