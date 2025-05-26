<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class apiazpgscrequestController extends Controllers {
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
			$var_m_azp_gsc_request = new m_azp_gsc_requestModel;
			# Instanciando clases del modelo
			$var_m_zz_design = new m_zz_designModel;
			# Instanciado funciones de la clase y asignando a variable
			$var_m_zz_design->sql_permits_module_value($var_controller);
			# Restricción alfanumérica o restriccion alfabeta
			if (NULL != $var_get_method && Strings::only_letters($var_get_method)) {
				# Ingreso de acceso al metodo del controlador
				switch ($var_get_method) {
					case 'countupdate':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_azp_gsc_request->sql_controller_update_client();
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = 'Cliente' . ':' . ' ' . $value['lbl_azp_gsc_client_t_name'] . ' -  ' . 'Registros Encontrados' . ':' . ' ' . $value['lbl_azp_gsc_update_id_azp_gsc_update']; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Finalizar el codigo
						exit();
						break;
					case 'confirmonemain':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_confirm_1_main();
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
					case 'confirmoneintern':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_confirm_1_intern();
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










					case 'confirmtwomain':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_confirm_2_main();
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
					case 'confirmtwointern':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_confirm_2_intern();
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








					case 'confirmthreemain':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_confirm_3_main();
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
					case 'confirmthreeintern':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_confirm_3_intern();
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





					case 'confirmfourmain':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_confirm_4_main();
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
					case 'confirmfourcopy':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_confirm_4_copy();
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
					case 'confirmfourintern':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_confirm_4_intern();
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


					case 'logemail':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_log_email();
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
					case 'alertclient':
						# Definir una variable con un valor
						$var_assigned = 0;
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_ver = $var_m_azp_gsc_request->sql_controller_alert_client();
						# Recorrer los datos de la consulta de la tabla para validacion de existencia
						if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
						# Validacion de si existe mas de un dato para encodificarlos
						if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_alert_client();
							# Imprimir una variable adicional
							echo $var_start = '{"status":true,"data":';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
							# Imprimir una variable adicional
							echo $var_end = '}';
						}
						# Finalizar el codigo
						exit();
						break;
					case 'alertrequest':
						# Definir una variable con un valor
						$var_assigned = 0;
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_ver = $var_m_azp_gsc_request->sql_controller_alert_request();
						# Recorrer los datos de la consulta de la tabla para validacion de existencia
						if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
						# Validacion de si existe mas de un dato para encodificarlos
						if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_alert_request();
							# Imprimir una variable adicional
							echo $var_start = '{"status":true,"data":';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
							# Imprimir una variable adicional
							echo $var_end = '}';
						}
						# Finalizar el codigo
						exit();
						break;
					case 'bycreate':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_by_create($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_m_azp_gsc_request->sql_controller_date_expiration();
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_by_create();
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
								$variable = $var_m_azp_gsc_request->sql_controller_change();
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
					case 'clientcount':
						# Definir una variable con un valor
						$var_assigned = 0;
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_ver = $var_m_azp_gsc_request->sql_controller_client_count();
						# Recorrer los datos de la consulta de la tabla para validacion de existencia
						if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
						# Validacion de si existe mas de un dato para encodificarlos
						if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_client_count();
							# Imprimir una variable adicional
							echo $var_start = '{"status":true,"data":';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
							# Imprimir una variable adicional
							echo $var_end = '}';
						}
						# Finalizar el codigo
						exit();
						break;
					case 'clientresult':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_client_result();
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
					case 'dataprex':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_email($var_controller)) {
							# Control para la validacion de valores get
							if (isset($_GET['field_em_prex_id'])) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_data_prex();
								# Imprimir valores adicionales
								echo '<option value="">Seleccionar</option>';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key_sql => $value_sql) {
									# Imprimir valores recibidos
									echo '<option value="' . $value_sql['lbl_azp_gsc_third_parties_id_azp_gsc_third_parties'] . '">';
										# Imprimir valores recibidos
										echo $value_sql['lbl_azp_gsc_third_parties_t_email'];
									# Imprimir valores recibidos
									echo '</option>';
								}
								# Detener la ejecucion
								exit();
							}
							# Control para la validacion de valores get
							if (isset($_GET['field_em_prex_business_name'])) {
								# Definir una variable con un valor
								$var_assigned = 0;
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_ver = $var_m_azp_gsc_request->sql_controller_data_prex();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_gsc_request->sql_controller_data_prex();
									# Imprimir una variable adicional
									echo $var_start = '{"status":true,"data":';
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
									# Imprimir una variable adicional
									echo $var_end = '}';
								}
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
					case 'datarc':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_email($var_controller)) {
							# Control para la validacion de valores get
							if (isset($_GET['field_em_rc_id'])) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_data_rc();
								# Imprimir valores adicionales
								echo '<option value="">Seleccionar</option>';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key_sql => $value_sql) {
									# Imprimir valores recibidos
									echo '<option value="' . $value_sql['lbl_azp_gsc_third_parties_id_azp_gsc_third_parties'] . '">';
										# Imprimir valores recibidos
										echo $value_sql['lbl_azp_gsc_third_parties_t_email'];
									# Imprimir valores recibidos
									echo '</option>';
								}
								# Detener la ejecucion
								exit();
							}
							# Control para la validacion de valores get
							if (isset($_GET['field_em_rc_business_name'])) {
								# Definir una variable con un valor
								$var_assigned = 0;
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_ver = $var_m_azp_gsc_request->sql_controller_data_rc();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_gsc_request->sql_controller_data_rc();
									# Imprimir una variable adicional
									echo $var_start = '{"status":true,"data":';
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
									# Imprimir una variable adicional
									echo $var_end = '}';
								}
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
					case 'datasexic':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_email($var_controller)) {
							# Control para la validacion de valores get
							if (isset($_GET['field_em_sexic_id'])) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_data_sexic();
								# Imprimir valores adicionales
								echo '<option value="">Seleccionar</option>';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key_sql => $value_sql) {
									# Imprimir valores recibidos
									echo '<option value="' . $value_sql['lbl_azp_gsc_third_parties_id_azp_gsc_third_parties'] . '">';
										# Imprimir valores recibidos
										echo $value_sql['lbl_azp_gsc_third_parties_t_email'];
									# Imprimir valores recibidos
									echo '</option>';
								}
								# Detener la ejecucion
								exit();
							}
							# Control para la validacion de valores get
							if (isset($_GET['field_em_sexic_business_name'])) {
								# Definir una variable con un valor
								$var_assigned = 0;
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_ver = $var_m_azp_gsc_request->sql_controller_data_sexic();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_gsc_request->sql_controller_data_sexic();
									# Imprimir una variable adicional
									echo $var_start = '{"status":true,"data":';
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
									# Imprimir una variable adicional
									echo $var_end = '}';
								}
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
					case 'datasexpc':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_email($var_controller)) {
							# Control para la validacion de valores get
							if (isset($_GET['field_em_sexpc_id'])) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_data_sexpc();
								# Imprimir valores adicionales
								echo '<option value="">Seleccionar</option>';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key_sql => $value_sql) {
									# Imprimir valores recibidos
									echo '<option value="' . $value_sql['lbl_azp_gsc_third_parties_id_azp_gsc_third_parties'] . '">';
										# Imprimir valores recibidos
										echo $value_sql['lbl_azp_gsc_third_parties_t_email'];
									# Imprimir valores recibidos
									echo '</option>';
								}
								# Detener la ejecucion
								exit();
							}
							# Control para la validacion de valores get
							if (isset($_GET['field_em_sexpc_business_name'])) {
								# Definir una variable con un valor
								$var_assigned = 0;
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_ver = $var_m_azp_gsc_request->sql_controller_data_sexpc();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_gsc_request->sql_controller_data_sexpc();
									# Imprimir una variable adicional
									echo $var_start = '{"status":true,"data":';
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
									# Imprimir una variable adicional
									echo $var_end = '}';
								}
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
					case 'detail':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_detail($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Definir una variable con un valor
								$var_assigned = 0;
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_ver = $var_m_azp_gsc_request->sql_controller_detail();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_gsc_request->sql_controller_detail();
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
							$var_m_azp_gsc_request->sql_controller_date_expiration();
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_eliminate();
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
					case 'email':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_email($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_email();
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
					case 'error':
						# Redireccionar a una pagina segun el metodo cargado
						Func::redir(URL . str_replace("api", "", $var_controller) . 'error/');
						# Detener la ejecucion
						exit();
					case 'file':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_detail($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Definir una variable con un valor
								$var_assigned = 0;
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_ver = $var_m_azp_gsc_request->sql_controller_file();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_gsc_request->sql_controller_file();
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
					case 'logs':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_change($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_logs();
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
					case 'tptable':
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_m_azp_gsc_request->sql_azp_gsc_request_tp_table();
						break;
					case 'filezipprex':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_email($var_controller)) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_azp_gsc_request->sql_controller_file_zip_prex();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_file_zip_prex();
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
							Func::redir(URL . str_replace("api", "", $var_controller) . 'access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'fileziprc':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_email($var_controller)) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_azp_gsc_request->sql_controller_file_zip_rc();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_file_zip_rc();
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
							Func::redir(URL . str_replace("api", "", $var_controller) . 'access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'filesize':
						# Definir una variable con un valor
						$var_assigned = 0;
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_ver = $var_m_azp_gsc_request->sql_controller_file_size();
						# Recorrer los datos de la consulta de la tabla para validacion de existencia
						if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
						# Validacion de si existe mas de un dato para encodificarlos
						if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_file_size();
							# Imprimir una variable adicional
							echo $var_start = '{"status":true,"data":';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
							# Imprimir una variable adicional
							echo $var_end = '}';
						}
						# Finalizar el codigo
						exit();
						break;
					case 'observationlist':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_update($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_observation_list();
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
					case 'read':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_m_azp_gsc_request->sql_controller_date_expiration();
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_read();
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
					case 'clientrq':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_clientrq();
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
								Func::redir(URL . 'dashboard/gscclient/');
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
					case 'close':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_m_azp_gsc_request->sql_controller_date_expiration();
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_close();
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
					case 'supplier':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_supplier();
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
					case 'reportfollowemail':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_report($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_report_follow_email();
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
							$var_m_azp_gsc_request->sql_controller_date_expiration();
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_remove();
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
					case 'thirdparties':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_third_parties();
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
					case 'update':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_update($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Definir una variable con un valor
								$var_assigned = 0;
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_ver = $var_m_azp_gsc_request->sql_controller_update();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_gsc_request->sql_controller_update();
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
					case 'user':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_azp_user();
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
					case 'inforead':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_azp_gsc_request->sql_controller_gsc_information_read();
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
						break;
					case 'infodetail':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_azp_gsc_request->sql_controller_gsc_information_detail();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_gsc_information_detail();
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
					case 'imgdownload':
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_m_azp_gsc_request->sql_controller_capture();
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_azp_gsc_request->sql_controller_capture();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { echo $value['lbl_count']; }
						# Finalizar el codigo
						exit();
						break;
					case 'imgdownloadcl':
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_m_azp_gsc_request->sql_controller_capture_client();
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_azp_gsc_request->sql_controller_capture_client();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { echo $value['lbl_count']; }
						# Finalizar el codigo
						exit();
						break;
					case 'dataclient':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_azp_gsc_request->sql_controller_data_client();
						# Imprimir valores adicionales
						echo '<option value="">Seleccionar</option>';
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key_sql => $value_sql) {
							# Imprimir valores recibidos
							echo '<option value="' . $value_sql['lbl_azp_gsc_client_id_azp_gsc_client'] . '" selected="selected">';
								# Imprimir valores recibidos
								echo $value_sql['lbl_azp_gsc_client_t_name'];
							# Imprimir valores recibidos
							echo '</option>';
						}
						# Detener la ejecucion
						exit();
						break;
					case 'imgbase':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_azp_gsc_request->sql_select_tc_azp_gsc_request_image();
						# Imprimir valores adicionales
						echo '<option value="">Seleccionar</option>';
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key_sql => $value_sql) {
							# Imprimir valores recibidos
							echo '<option value="' . $value_sql['lbl_azp_gsc_request_t_number_request'] . '">';
								# Imprimir valores recibidos
								echo $value_sql['lbl_azp_gsc_request_t_number_request'];
							# Imprimir valores recibidos
							echo '</option>';
						}
						# Detener la ejecucion
						exit();
						break;
					case 'imgclbase':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_azp_gsc_request->sql_select_tc_azp_gsc_request_climage();
						# Imprimir valores adicionales
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key_sql => $value_sql) {
							# Imprimir valores recibidos
							echo '<option value="' . $value_sql['lbl_azp_gsc_request_t_number_request'] . '" selected="">';
								# Imprimir valores recibidos
								echo $value_sql['lbl_azp_gsc_request_t_number_request'];
							# Imprimir valores recibidos
							echo '</option>';
						}
						# Detener la ejecucion
						exit();
						break;
					case 'databank':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_email($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_client_bank();
								# Imprimir valores adicionales
								echo '<option value="">Seleccionar</option>';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key_sql => $value_sql) {
									# Imprimir valores recibidos
									echo '<option value="' . $value_sql['lbl_azp_gsc_client_id_azp_gsc_client'] . '">';
										# Imprimir valores recibidos
										echo $value_sql['lbl_azp_gsc_client_t_person'] . ' ' . $value_sql['lbl_azp_gsc_client_t_email'];
									# Imprimir valores recibidos
									echo '</option>';
								}
								# Detener la ejecucion
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
					case 'clientdl':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_azp_gsc_request->sql_controller_client_detail();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_client_detail();
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
					case 'thirdpartiescount':
						# Definir una variable con un valor
						$var_assigned = 0;
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_ver = $var_m_azp_gsc_request->sql_controller_third_parties_count();
						# Recorrer los datos de la consulta de la tabla para validacion de existencia
						if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
						# Validacion de si existe mas de un dato para encodificarlos
						if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->sql_controller_third_parties_count();
							# Imprimir una variable adicional
							echo $var_start = '{"status":true,"data":';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
							# Imprimir una variable adicional
							echo $var_end = '}';
						}
						# Finalizar el codigo
						exit();
						break;
					case 'thirdpartiesid':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_azp_gsc_request->sql_controller_third_parties_id();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_azp_gsc_request->sql_controller_third_parties_id();
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
					case 'fcertificate':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_detail($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Definir una variable con un valor
								$var_assigned = 0;
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_ver = $var_m_azp_gsc_request->sql_controller_fcertificate();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_gsc_request->sql_controller_fcertificate();
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
					case 'fconsignment':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_detail($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Definir una variable con un valor
								$var_assigned = 0;
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_ver = $var_m_azp_gsc_request->sql_controller_fconsignment();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_gsc_request->sql_controller_fconsignment();
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
					case 'clientnr':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->get_select_azp_gsc_client_nr();
							# Imprimir valores adicionales
							echo '<option value="">Seleccionar</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql['lbl_azp_gsc_request_id_azp_gsc_request'] . '">';
									# Imprimir valores recibidos
									echo $value_sql['lbl_azp_gsc_request_t_number_request'];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;
					case 'filternr':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_gsc_request->get_select_azp_gsc_request_nr();
							# Imprimir valores adicionales
							echo '<option value="">Seleccionar</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql['lbl_azp_gsc_request_id_azp_gsc_request'] . '">';
									# Imprimir valores recibidos
									echo $value_sql['lbl_azp_gsc_request_t_request_date'];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;
					case 'base':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_azp_gsc_request->sql_controller_ultime();
						# Imprimir valores adicionales
						echo '<option value="">Seleccionar</option>';
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key_sql => $value_sql) {
							# Imprimir valores recibidos
							echo '<option value="' . $value_sql['lbl_azp_gsc_client_id_azp_gsc_client'] . '">';
								# Imprimir valores recibidos
								echo $value_sql['lbl_azp_gsc_client_t_name'];
							# Imprimir valores recibidos
							echo '</option>';
						}
						# Detener la ejecucion
						exit();
						break;
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