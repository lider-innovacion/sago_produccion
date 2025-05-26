<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class apiazpibnconceptController extends Controllers {
		public function __construct() {
			parent::__construct(true);
			# Acceso a la propiedad de la variable route;
			$var_get_controller = $this->route->getController();
			# Acceso a la propiedad de la variable route;
			$var_get_method =  $this->route->getMethod();
			# Acceso a la propiedad de la variable route;
			$var_get_id =  $this->route->getId();
			# Reemplazar la palabra Controller
			$var_controller = str_replace("Controller", "/", $var_get_controller);
			# Instanciando clases del modelo
			$var_m_azp_ibn_concept = new m_azp_ibn_conceptModel;
			# Instanciando clases del modelo
			$var_m_zz_design = new m_zz_designModel;
			# Instanciado funciones de la clase y asignando a variable
			$var_m_zz_design->sql_permits_module_value($var_controller);
			# Restricción alfanumérica o restriccion alfabeta
			if (NULL != $var_get_method && Strings::only_letters($var_get_method)) {
				# Ingreso de acceso al metodo del controlador
				switch ($var_get_method) {
					case 'bycreate':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_by_create($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_ibn_concept->sql_controller_by_create();
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
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'change':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_change($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_ibn_concept->sql_controller_change();
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
							} else {
								# Redireccionar a una pagina segun el metodo cargado
								Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
								# Detener la ejecucion
								exit();
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'detail':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_detail($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Definir una variable con un valor
								$var_assigned = 0;
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_ver = $var_m_azp_ibn_concept->sql_controller_detail();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_ibn_concept->sql_controller_detail();
									# Imprimir una variable adicional
									echo $var_start = '{"status":true,"data":';
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
									# Imprimir una variable adicional
									echo $var_end = '}';
								}
								# Finalizar el codigo
								exit();
							} else {
								# Redireccionar a una pagina segun el metodo cargado
								Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
								# Detener la ejecucion
								exit();
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'eliminate':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_eliminate($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_ibn_concept->sql_controller_eliminate();
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
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'read':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_ibn_concept->sql_controller_read();
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
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'remove':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_remove($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_ibn_concept->sql_controller_remove();
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
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'update':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_update($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Definir una variable con un valor
								$var_assigned = 0;
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_ver = $var_m_azp_ibn_concept->sql_controller_update();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_ibn_concept->sql_controller_update();
									# Imprimir una variable adicional
									echo $var_start = '{"status":true,"data":';
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
									# Imprimir una variable adicional
									echo $var_end = '}';
								}
								# Finalizar el codigo
								exit();
							} else {
								# Redireccionar a una pagina segun el metodo cargado
								Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
								# Detener la ejecucion
								exit();
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'tablefieldrd':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_ibn_concept->get_sql_azp_ibn_table_field_rd();
							# Imprimir valores adicionales
							echo '<option value="">Ninguno</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql['lbl_azp_ibn_table_field_id_azp_ibn_table_field'] . '">';
									# Imprimir valores recibidos
									echo $value_sql['lbl_azp_ibn_table_field_t_label'];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;
					case 'tablefieldup':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_ibn_concept->get_sql_azp_ibn_table_field_up();
							# Imprimir valores adicionales
							echo '<option value="">Ninguno</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql['lbl_azp_ibn_table_field_id_azp_ibn_table_field'] . '" selected="selected">';
									# Imprimir valores recibidos
									echo $value_sql['lbl_azp_ibn_table_field_t_label'];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;
					case 'error':
						# Redireccionar a una pagina segun el metodo cargado
						Func::redir(URL . str_replace("api", "", $var_controller) . 'error/');
						# Detener la ejecucion
						exit();
					default:
						# Redireccionar a una pagina segun el metodo cargado
						Func::redir(URL . $var_controller . 'error/');
						# Detener la ejecucion
						exit();
						break;
				}
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . $var_controller . 'error/');
				# Detener la ejecucion
				exit();
			}
		}
	}
?>