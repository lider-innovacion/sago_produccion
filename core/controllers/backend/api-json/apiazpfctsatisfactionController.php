<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class apiazpfctsatisfactionController extends Controllers {
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
			$var_m_azp_fct_satisfaction = new m_azp_fct_satisfactionModel;
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
							$variable = $var_m_azp_fct_satisfaction->sql_controller_by_create();
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
								$variable = $var_m_azp_fct_satisfaction->sql_controller_change();
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
								$var_ver = $var_m_azp_fct_satisfaction->sql_controller_detail();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_fct_satisfaction->sql_controller_detail();
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
							$variable = $var_m_azp_fct_satisfaction->sql_controller_eliminate();
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
							$variable = $var_m_azp_fct_satisfaction->sql_controller_read();
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
					case 'infu':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_satisfaction->sql_controller_infu();
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
							$variable = $var_m_azp_fct_satisfaction->sql_controller_remove();
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
								$var_ver = $var_m_azp_fct_satisfaction->sql_controller_update();
								# Recorrer los datos de la consulta de la tabla para validacion de existencia
								if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
								# Validacion de si existe mas de un dato para encodificarlos
								if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
									# Consultar registros de la tabla por medio del modelo instanciado
									$variable = $var_m_azp_fct_satisfaction->sql_controller_update();
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
					case 'drop':
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_azp_fct_satisfaction_drop_delete();
						# Finalizar el codigo
						exit();
						break;
					case 'certificate':
						# Control para validar el id
						if ($this->isset_id) {
							$var_total = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_satisfaction->sql_controller_vision_certificate($_GET['field_value']);
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							if ($variable == true) { foreach ($variable as $key => $value): $arrayName[] = $value; $var_total += $value['lbl_azp_crt_request_data_t_rcb_amount']; endforeach; } else { $var_total = 0; }
							# Añadiendo nuevos valores a los datos
							$arrayName[] = array(
								"lbl_azp_crt_request_data_id_azp_crt_request_data" => '-',
								"lbl_azp_crt_bank_t_name" => '',
								"lbl_azp_crt_request_data_t_request_nro" => '',
								"lbl_azp_crt_request_data_t_request_date" => '',
								"lbl_azp_crt_request_data_t_date_delivery" => '',
								"lbl_azp_crt_request_data_t_identification" => '',
								"lbl_azp_crt_request_data_t_full_name" => '',
								"lbl_azp_crt_request_data_t_nro_oblitation" => '',
								"lbl_azp_crt_request_data_t_request_id" => '',
								"lbl_azp_crt_request_type_t_name" => '',
								"lbl_azp_crt_request_data_t_plaque_enrollment" => '',
								"lbl_azp_crt_city_t_name" => '',
								"lbl_azp_crt_request_data_t_applicant_entity" => '',
								"lbl_azp_crt_request_data_t_bilable" => '',
								"lbl_azp_crt_request_data_t_refundable" => '',
								"lbl_azp_crt_request_data_t_provider_name" => '',
								"lbl_azp_crt_request_data_t_rcb_nro_receipt" => 'Total',
								"lbl_azp_crt_request_data_t_fct_service" => '',
								"lbl_azp_crt_request_data_t_rcb_amount" => '$' . number_format($var_total, 2, '.', ','),
							);
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
						break;
					case 'defunction':
						# Control para validar el id
						if ($this->isset_id) {
							# Asignacion de valores a nuevas variables
							$var_value = 0; $var_total = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_module = $var_m_azp_fct_satisfaction->sql_controller_vision_defunction();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							if ($var_module == true) { foreach ($var_module as $key => $value): $var_value += $value['lbl_azp_gsc_consignment_t_value_total']; endforeach; } else { $var_value = 0; }
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_module = $var_m_azp_fct_satisfaction->sql_controller_vision_defunction();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							if ($var_module == true) { foreach ($var_module as $key => $value): $var_total += $value['lbl_azp_gsc_consignment_t_closed_value']; endforeach; } else { $var_total = 0; }
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_satisfaction->sql_controller_vision_defunction();
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { $arrayName[] = $value; }
							# Añadiendo nuevos valores a los datos
							/*$arrayName[] = array(
								'lbl_azp_gsc_request_id_azp_gsc_request' => '-',
								'lbl_azp_gsc_consignment_t_consignment_item' => '',
								'lbl_azp_fct_client_t_name' => '',
								'lbl_azp_gsc_request_t_number_request' => '',
								'lbl_azp_gsc_request_t_request_date' => '',
								'lbl_azp_gsc_request_t_shipping_date' => '',
								'lbl_azp_gsc_request_t_identification' => '',
								'lbl_azp_gsc_request_t_full_name' => '',
								'lbl_azp_gsc_request_t_number_obligation' => '',
								'lbl_azp_gsc_request_t_city' => '',
								'lbl_azp_gsc_request_t_serial' => '',
								'lbl_azp_gsc_request_t_notary' => '',
								'lbl_azp_gsc_consignment_t_to_consigned' => '',
								'lbl_azp_gsc_consignment_t_nit_identification' => '',
								'lbl_azp_gsc_consignment_t_consigned_entity' => '',
								'lbl_azp_gsc_consignment_t_consignment_date' => '',
								'lbl_azp_gsc_consignment_t_nro_receipt' => 'Total',
								'lbl_azp_gsc_consignment_t_value_total' => '$' . number_format($var_value, 2, '.', ','),
								'lbl_azp_gsc_consignment_t_closed_value' => '',
								//'lbl_azp_gsc_consignment_t_closed_value' => '$' . number_format($var_total, 2, '.', ','),
							);*/
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
						break;
					case 'investigationcamera':
						# Control para validar el id
						if ($this->isset_id) {
							$var_search = array('$ ', ',', '', 'null', ' ');
							$var_replace = array('', '', '0', '0', '0');
							$var_total = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							//$module = $var_m_azp_fct_satisfaction->sql_controller_vision_model_value();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							//if ($module == true) { foreach ($module as $key => $value): $var_value = $value[d_azp_fct_satisfaction_t_value]; endforeach; } else { $var_value = 0; }
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_satisfaction->sql_controller_vision_investigation_camera($_GET['field_value']);
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							//if ($variable == true) { foreach ($variable as $key => $value): $arrayName[] = $value; $var_total += str_replace($var_search, $var_replace, $value['lbl_azp_ibn_camera_t_st_value']); endforeach; } else { $var_total = 0; }
							if ($variable == true) { foreach ($variable as $key => $value): $arrayName[] = $value; endforeach; } else { $var_total = 0; }
							# Añadiendo nuevos valores a los datos
							/*$arrayName[] = array(
								"lbl_azp_ibn_camera_id_azp_ibn_camera" => '-',
								"lbl_azp_ibn_camera_m_description" => '',
								"lbl_azp_fct_client_t_name" => '',
								"lbl_azp_ibn_control_panel_t_code_research" => '',
								"lbl_azp_ibn_control_panel_t_date_arrival" => '',
								"lbl_azp_ibn_control_panel_t_date_general" => '',
								"lbl_azp_ibn_camera_t_identification" => '',
								"lbl_azp_ibn_camera_t_full_name" => '',
								"lbl_azp_ibn_data_main_t_nro_obligation" => '',
								"lbl_azp_ibn_data_main_t_code" => '',
								"lbl_azp_ibn_camera_t_identification" => '',
								"lbl_azp_ibn_camera_t_full_name" => '',
								"lbl_azp_ibn_camera_t_city" => '',
								"lbl_azp_ibn_camera_t_consecutive" => '',
								"lbl_azp_ibn_camera_t_nro_registration" => '',
								"lbl_azp_ibn_camera_m_description" => '',
								"lbl_azp_fct_satisfaction_t_module" => '',
								"lbl_azp_ibn_camera_t_st_receipt" => '',
								"lbl_azp_ibn_camera_t_st_value" => '$' . number_format($var_total, 2, '.', ','),
							);*/
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
						break;
					case 'investigationproperty':
						# Control para validar el id
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$module = $var_m_azp_fct_satisfaction->sql_controller_vision_model_value();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							if ($module == true) { foreach ($module as $key => $value): $var_value = $value[d_azp_fct_satisfaction_t_value]; endforeach; } else { $var_value = 0; }
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_satisfaction->sql_controller_vision_investigation_property($_GET['field_value']);
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { $arrayName[] = $value; }
							# Añadiendo nuevos valores a los datos
							/*$arrayName[] = array(
								"lbl_azp_ibn_property_id_azp_ibn_property" => '',
								"lbl_azp_ibn_data_main_t_code" => '',
								"lbl_azp_ibn_property_t_identification" => '',
								"lbl_azp_ibn_property_t_full_name" => '',
								"lbl_azp_ibn_property_m_description" => '',
								"lbl_azp_fct_satisfaction_t_module" => '',
								"lbl_azp_ibn_property_t_nro_registration" => '',
								"lbl_azp_ibn_property_t_municipality" => '',
								"lbl_azp_ibn_property_t_st_receipt" => 'Total',
								"lbl_azp_ibn_property_t_st_value" => '$' . number_format($var_value, 2, '.', ','),
								"lbl_azp_ibn_property_t_consecutive" => '-',
								"lbl_azp_ibn_property_m_description" => '',
							);*/
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
						break;
					case 'investigationvehicle':
						# Control para validar el id
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$module = $var_m_azp_fct_satisfaction->sql_controller_vision_model_value();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							if ($module == true) { foreach ($module as $key => $value): $var_value = $value[d_azp_fct_satisfaction_t_value]; endforeach; } else { $var_value = 0; }
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_satisfaction->sql_controller_vision_investigation_vehicle($_GET['field_value']);
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { $arrayName[] = $value; }
							# Añadiendo nuevos valores a los datos
							/*$arrayName[] = array(
								"lbl_azp_ibn_vehicle_id_azp_ibn_vehicle" => '',
								"lbl_azp_ibn_data_main_t_code" => '',
								"lbl_azp_ibn_vehicle_t_identification" => '',
								"lbl_azp_ibn_vehicle_t_full_name" => '',
								"lbl_azp_ibn_vehicle_m_description" => '',
								"lbl_azp_fct_satisfaction_t_module" => '',
								"lbl_azp_ibn_vehicle_t_plaque" => '',
								"lbl_azp_ibn_vehicle_t_city" => '',
								"lbl_azp_ibn_vehicle_t_st_receipt" => 'Total',
								"lbl_azp_ibn_vehicle_t_st_value" => '$' . number_format($var_value, 2, '.', ','),
								"lbl_azp_ibn_vehicle_t_consecutive" => '-',
								"lbl_azp_ibn_vehicle_m_description" => '',
							);*/
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
						break;
					case 'alertclient':
						# Definir una variable con un valor
						$var_assigned = 0;
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_ver = $var_m_azp_fct_satisfaction->sql_controller_alert_client();
						# Recorrer los datos de la consulta de la tabla para validacion de existencia
						if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
						# Validacion de si existe mas de un dato para encodificarlos
						if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_satisfaction->sql_controller_alert_client();
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
					case 'groupby':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_data_read($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_satisfaction->sql_controller_group_by();
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
					case 'gpclient':
						# Control de validacion para cumplir el ciclo de la condicion
						//if (!isset($_GET['field_number'])) { $var_number = '0'; } else { $var_number = $_GET['field_number']; }
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_azp_fct_satisfaction->sql_controller_client();
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array($value['lbl_azp_fct_client_t_name'],),); }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Finalizar el codigo
						exit();
						# Romper el caso
						break;
					case 'gpservice':
						# Control de validacion para cumplir el ciclo de la condicion
						if (!isset($_GET['field_service'])) { $var_service = '0'; } else { $var_service = $_GET['field_service']; }
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_azp_fct_satisfaction->sql_controller_graphic($var_service);
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array($value['lbl_azp_fct_satisfaction_t_sum'],),); }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Finalizar el codigo
						exit();
						# Romper el caso
						break;
					case 'service':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_satisfaction->sql_select_tc_azp_fct_service();
							# Imprimir valores adicionales
							//echo '<option value="">Seleccionar</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql[d_azp_fct_service_id_azp_fct_service] . '" selected="">';
									# Imprimir valores recibidos
									echo $value_sql[d_azp_fct_service_t_name];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;
					case 'subsatisfaction':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_satisfaction->sql_select_tc_azp_fct_sub_satisfaction();
							# Imprimir valores adicionales
							//echo '<option value="">Seleccionar</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql[d_azp_fct_sub_satisfaction_id_azp_fct_sub_satisfaction] . '" selected="">';
									# Imprimir valores recibidos
									echo $value_sql[d_azp_fct_sub_satisfaction_t_name];
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
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_satisfaction->sql_select_tc_azp_fct_sub_service();
							# Imprimir valores adicionales
							//echo '<option value="">Seleccionar</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql[d_azp_fct_sub_service_id_azp_fct_sub_service] . '" selected="">';
									# Imprimir valores recibidos
									echo $value_sql[d_azp_fct_sub_service_t_name];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;
					case 'supplier':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_azp_fct_satisfaction->sql_select_tc_azp_crt_request_data();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql['lbl_azp_crt_request_data_t_provider_name'] . '">';
									# Imprimir valores recibidos
									echo $value_sql['lbl_azp_crt_request_data_t_provider_name'];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Imprimir valores adicionales
							echo '<option value="TODO" selected="">TODO</option>';
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