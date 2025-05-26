<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class apiazpfctclientController extends Controllers {
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
			$var_m_azp_fct_client = new m_azp_fct_clientModel;
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
							$variable = $var_m_azp_fct_client->sql_controller_by_create();
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
								$variable = $var_m_azp_fct_client->sql_controller_change();
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
								$var_ver = $var_m_azp_fct_client->sql_controller_detail();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_fct_client->sql_controller_detail();
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
							$variable = $var_m_azp_fct_client->sql_controller_eliminate();
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
							$variable = $var_m_azp_fct_client->sql_controller_read();
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
							$variable = $var_m_azp_fct_client->sql_controller_remove();
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
								$var_ver = $var_m_azp_fct_client->sql_controller_update();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_fct_client->sql_controller_update();
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
					case 'file':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_azp_fct_client->sql_controller_file();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_fct_client->sql_controller_file();
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
						break;
					case 'edit':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_update($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Definir una variable con un valor
								$var_assigned = 0;
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_ver = $var_m_azp_fct_client->sql_controller_edit();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_fct_client->sql_controller_edit();
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
					case 'tariff':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Control para la validacion de valores get
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_fct_client->sql_controller_tariff();
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
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'access/');
							# Detener la ejecucion
							exit();
						}
						break;
					/*case 'certificate':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Control para la validacion de valores get
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_fct_client->sql_controller_tariff_certificate();
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
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'defunction':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Control para la validacion de valores get
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_fct_client->sql_controller_tariff_defunction();
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
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'investigation':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Control para la validacion de valores get
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_fct_client->sql_controller_tariff_investigation();
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
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'access/');
							# Detener la ejecucion
							exit();
						}
						break;*/
					case 'investigationall':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_azp_fct_client->sql_select_tc_azp_fct_investigation_all();
						# Imprimir valores adicionales
						echo '<option value="">Seleccionar</option>';
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key_sql => $value_sql) {
							# Imprimir valores recibidos
							echo '<option value="' . $value_sql[d_azp_fct_investigation_id_azp_fct_investigation] . '">';
								# Imprimir valores recibidos
								echo $value_sql[d_azp_fct_investigation_t_name];
							# Imprimir valores recibidos
							echo '</option>';
						}
						# Detener la ejecucion
						exit();
						break;
					case 'investigationone':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_azp_fct_client->sql_select_tc_azp_fct_investigation_one();
						# Imprimir valores adicionales
						echo '<option value="">Seleccionar</option>';
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key_sql => $value_sql) {
							# Imprimir valores recibidos
							echo '<option value="' . $value_sql[d_azp_fct_investigation_id_azp_fct_investigation] . '" selected="">';
								# Imprimir valores recibidos
								echo $value_sql[d_azp_fct_investigation_t_name];
							# Imprimir valores recibidos
							echo '</option>';
						}
						# Detener la ejecucion
						exit();
						break;
					case 'resultall':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_azp_fct_client->sql_select_tc_azp_fct_result_all();
						# Imprimir valores adicionales
						echo '<option value="">Seleccionar</option>';
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key_sql => $value_sql) {
							# Imprimir valores recibidos
							echo '<option value="' . $value_sql[d_azp_fct_result_id_azp_fct_result] . '">';
								# Imprimir valores recibidos
								echo $value_sql[d_azp_fct_result_t_name];
							# Imprimir valores recibidos
							echo '</option>';
						}
						# Detener la ejecucion
						exit();
						break;
					case 'resultone':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_azp_fct_client->sql_select_tc_azp_fct_result_one();
						# Imprimir valores adicionales
						echo '<option value="">Seleccionar</option>';
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key_sql => $value_sql) {
							# Imprimir valores recibidos
							echo '<option value="' . $value_sql[d_azp_fct_result_id_azp_fct_result] . '" selected="">';
								# Imprimir valores recibidos
								echo $value_sql[d_azp_fct_result_t_name];
							# Imprimir valores recibidos
							echo '</option>';
						}
						# Detener la ejecucion
						exit();
						break;
					case 'subcoverage':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_client->sql_select_tc_azp_fct_sub_coverage();
							# Imprimir valores adicionales
							echo '<option value="">Seleccionar</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql[d_azp_fct_sub_coverage_id_azp_fct_sub_coverage] . '">';
									# Imprimir valores recibidos
									echo $value_sql[d_azp_fct_sub_coverage_t_name];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;
					case 'service':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_client->sql_select_tc_azp_fct_service();
							# Imprimir valores adicionales
							echo '<option value="">Seleccionar</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql[d_azp_fct_service_id_azp_fct_service] . '">';
									# Imprimir valores recibidos
									echo $value_sql[d_azp_fct_service_t_name];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;
					case 'subservice':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							$var_id = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_client->sql_select_tc_azp_fct_sub_service();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							if ($variable == true) { foreach ($variable as $key => $value) : $var_id = $value[d_azp_fct_sub_service_id_azp_fct_sub_service]; endforeach; }
							# Imprimir valores adicionales
							if ($var_id != 14) { echo '<option value="">Seleccionar</option>'; $var_select = ''; } else { $var_select = 'selected=""'; }
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql[d_azp_fct_sub_service_id_azp_fct_sub_service] . '"' . ' ' . $var_select . '>';
									# Imprimir valores recibidos
									echo $value_sql[d_azp_fct_sub_service_t_name];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;
					case 'scale':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_client->sql_select_tc_azp_fct_scale();
							# Imprimir valores adicionales
							echo '<option value="">Seleccionar</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql[d_azp_fct_scale_id_azp_fct_scale] . '">';
									# Imprimir valores recibidos
									echo $value_sql[d_azp_fct_scale_t_name];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;
					/*case 'scalb':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_client->sql_select_tc_azp_fct_scale();
							# Imprimir valores adicionales
							echo '<option value="">Seleccionar</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql[d_azp_fct_scale_id_azp_fct_scale] . '" selected="">';
									# Imprimir valores recibidos
									echo $value_sql[d_azp_fct_scale_t_name];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;*/
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