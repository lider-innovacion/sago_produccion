<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
	//------------------------------------------------
	class azpcrtrequestdataController extends Controllers {
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
			# Variable Get para cargar el id
			$_GET['field_id'] = $this->route->getId();
			# Instanciando clases del modelo
			$var_m_azp_crt_phase = new m_azp_crt_phaseModel;
			# Instanciando clases del modelo
			$var_m_azp_crt_request_data = new m_azp_crt_request_dataModel;
			# Instanciando clases del modelo
			$var_m_azp_sys_state = new m_azp_sys_stateModel;
			# Instanciando clases del modelo
			$var_m_azp_user = new m_azp_userModel;
			# Instanciando clases del modelo
			$var_m_zv_setting = new m_zv_settingModel;
			# Instanciando clases del modelo
			$var_m_zz_design = new m_zz_designModel;
			# Instanciado funciones de la clase y asignando a variable
			$var_m_zz_design->sql_permits_module_value($var_controller);
			# Instanciado funciones de la clase y asignando a variable
			if (false != $df_sql_select_azp_menu_crud_t_url = $var_m_zz_design->sql_select_azp_menu_crud_t_url($var_controller)) {
				# Recorriendo filas de los resultados de la base de datos
				foreach ($df_sql_select_azp_menu_crud_t_url as $key):
					# Imprimiendo cada uno de los resultados recorridos de las filas
					$key_controller = $key[d_azp_menu_crud_id_azp_menu_crud];
				# Final del recorrido
				endforeach;
			}
			# Instanciado funciones de la clase y asignando a variable
			if (false != $df_sql_select_tc_azp_user_role = $var_m_azp_user->sql_select_tc_azp_user_role($var_controller)) {
				# Recorriendo filas de los resultados de la base de datos
				foreach ($df_sql_select_tc_azp_user_role as $key_role):
					# Imprimiendo cada uno de los resultados recorridos de las filas
					$result_permits_role = $key_role[d_azp_user_v_id_azp_role];
				# Final del recorrido
				endforeach;
			}
			# Instanciado funciones de la clase y asignando a variable
			if (false != $df_sql_select_tc_azp_user_rols = $var_m_azp_user->sql_select_tc_azp_user_rols($var_controller)) {
				# Recorriendo filas de los resultados de la base de datos
				foreach ($df_sql_select_tc_azp_user_rols as $key => $value):
					# Imprimiendo cada uno de los resultados recorridos de las filas
					$result_permits_rols = $value['lbl_azp_rols_id_azp_rols'];
				# Final del recorrido
				endforeach;
			}
			# Restricción alfanumérica o restriccion alfabeta
			if (NULL != $var_get_method && Strings::only_letters($var_get_method)) {
				# Ingreso de acceso al metodo del controlador
				switch ($var_get_method) {
					case 'access':
						# Cargar en el metodo por url la plantilla con su contenido a visualizar
						echo $this->template->render('backend/message/access');
						# Detener la ejecucion
						exit();
						break;
					case 'archive':
						# Capturar datos por el metodo post
						$var_id = $_POST['field_fl_id'];
						$var_name = $_FILES['field_fl_file']['name'];
						$var_type = $_FILES['field_fl_file']['type'];
						$var_tmp_name = $_FILES['field_fl_file']['tmp_name'];
						$var_error = $_FILES['field_fl_file']['error'];
						$var_size = $_FILES['field_fl_file']['size'];
						# Enviar datos a traves del modelo
						$var_m_azp_crt_request_data->sql_azp_crt_request_data_archive($var_id, $var_name, $var_type, $var_tmp_name, $var_error, $var_size);
						break;
					case 'quittance':
						# Capturar datos por el metodo post
						$var_id = $_POST['field_rb_id'];
						$var_nro = $_POST['field_rb_nro_receipt'];
						$var_name = $_FILES['field_rb_receipt']['name'];
						$var_type = $_FILES['field_rb_receipt']['type'];
						$var_tmp_name = $_FILES['field_rb_receipt']['tmp_name'];
						$var_error = $_FILES['field_rb_receipt']['error'];
						$var_size = $_FILES['field_rb_receipt']['size'];
						# Enviar datos a traves del modelo
						$var_m_azp_crt_request_data->sql_azp_crt_request_data_quittance($var_id, $var_nro, $var_name, $var_type, $var_tmp_name, $var_error, $var_size);
						break;
					case 'delete':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_delete($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_crt_request_data->sql_controller_delete();
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_crt_request_data->sql_azp_crt_request_data_delete();
							} else {
								# Redireccionar a una pagina segun el metodo cargado
								Func::redir(URL . $var_controller . 'info/query/');
								# Detener la ejecucion
								exit();
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'info/access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'document':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_import($var_controller)) {
							# Capturar datos por el metodo post
							$var_template = $_POST['field_im_template'];
							//$var_causal = $_POST['field_im_causal'];
							$var_name = $_FILES['field_im_file']['name'];
							$var_type = $_FILES['field_im_file']['type'];
							$var_tmp_name = $_FILES['field_im_file']['tmp_name'];
							$var_error = $_FILES['field_im_file']['error'];
							$var_size = $_FILES['field_im_file']['size'];
							# Enviar datos a traves del modelo
							$var_m_azp_crt_request_data->sql_azp_crt_request_data_document($var_template, $var_name, $var_type, $var_tmp_name, $var_error, $var_size);
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'info/access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'error':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_error($var_controller)) {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('backend/message/error');
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'info/access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'info':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_menu_value($var_controller)) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_m_azp_crt_request_data->sql_controller_date_expiration();
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('backend/inward/azp_crt_request_data', array(
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_action' => $var_m_zv_setting->sql_cd_btn_action(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_cancel' => $var_m_zv_setting->sql_cd_btn_cancel(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_change' => $var_m_zv_setting->sql_cd_btn_change(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_close' => $var_m_zv_setting->sql_cd_btn_close(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_column_toggle' => $var_m_zv_setting->sql_cd_btn_column_toggle(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_colvis_column' => $var_m_zv_setting->sql_cd_btn_colvis_column(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_colvis_restore' => $var_m_zv_setting->sql_cd_btn_colvis_restore(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_copy' => $var_m_zv_setting->sql_cd_btn_copy(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_create' => $var_m_zv_setting->sql_cd_btn_create(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_csv' => $var_m_zv_setting->sql_cd_btn_csv(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_delete' => $var_m_zv_setting->sql_cd_btn_delete(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_detail' => $var_m_zv_setting->sql_cd_btn_detail(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_email' => $var_m_zv_setting->sql_cd_btn_email(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_excel' => $var_m_zv_setting->sql_cd_btn_excel(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_export' => $var_m_zv_setting->sql_cd_btn_export(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_file' => $var_m_zv_setting->sql_cd_btn_file(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_import' => $var_m_zv_setting->sql_cd_btn_import(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_menu' => $var_m_zv_setting->sql_cd_btn_menu(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_page_length' => $var_m_zv_setting->sql_cd_btn_page_length(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_pdf' => $var_m_zv_setting->sql_cd_btn_pdf(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_print' => $var_m_zv_setting->sql_cd_btn_print(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_remove' => $var_m_zv_setting->sql_cd_btn_remove(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_report' => $var_m_zv_setting->sql_cd_btn_report(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_restore' => $var_m_zv_setting->sql_cd_btn_restore(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_search' => $var_m_zv_setting->sql_cd_btn_search(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_sub_menu' => $var_m_zv_setting->sql_cd_btn_sub_menu(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_sync' => $var_m_zv_setting->sql_cd_btn_sync(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_template' => $var_m_zv_setting->sql_cd_btn_template(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_update' => $var_m_zv_setting->sql_cd_btn_update(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_btn_visible' => $var_m_zv_setting->sql_cd_btn_visible(),

								# Consultar registros de la tabla por medio del modelo instanciado
								'var_table_by_create' => $var_m_zv_setting->sql_cd_table_by_create(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_table_change' => $var_m_zv_setting->sql_cd_table_change(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_table_detail' => $var_m_zv_setting->sql_cd_table_detail(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_table_eliminate' => $var_m_zv_setting->sql_cd_table_eliminate(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_table_read' => $var_m_zv_setting->sql_cd_table_read(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_table_remove' => $var_m_zv_setting->sql_cd_table_remove(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_table_report' => $var_m_zv_setting->sql_cd_table_report(),

								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cm_md_change' => $var_m_zv_setting->sql_cm_md_change(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cm_md_create' => $var_m_zv_setting->sql_cm_md_create(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cm_md_delete' => $var_m_zv_setting->sql_cm_md_delete(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cm_md_detail' => $var_m_zv_setting->sql_cm_md_detail(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cm_md_email' => $var_m_zv_setting->sql_cm_md_email(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cm_md_file' => $var_m_zv_setting->sql_cm_md_file(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cm_md_import' => $var_m_zv_setting->sql_cm_md_import(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cm_md_remove' => $var_m_zv_setting->sql_cm_md_remove(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cm_md_report' => $var_m_zv_setting->sql_cm_md_report(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cm_md_restore' => $var_m_zv_setting->sql_cm_md_restore(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cm_md_sub_menu' => $var_m_zv_setting->sql_cm_md_sub_menu(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cm_md_update' => $var_m_zv_setting->sql_cm_md_update(),

								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cp_pnl_change' => $var_m_zv_setting->sql_cp_pnl_change(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cp_pnl_create' => $var_m_zv_setting->sql_cp_pnl_create(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cp_pnl_delete' => $var_m_zv_setting->sql_cp_pnl_delete(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cp_pnl_detail' => $var_m_zv_setting->sql_cp_pnl_detail(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cp_pnl_email' => $var_m_zv_setting->sql_cp_pnl_email(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cp_pnl_file' => $var_m_zv_setting->sql_cp_pnl_file(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cp_pnl_import' => $var_m_zv_setting->sql_cp_pnl_import(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cp_pnl_remove' => $var_m_zv_setting->sql_cp_pnl_remove(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cp_pnl_report' => $var_m_zv_setting->sql_cp_pnl_report(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cp_pnl_restore' => $var_m_zv_setting->sql_cp_pnl_restore(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cp_pnl_sub_menu' => $var_m_zv_setting->sql_cp_pnl_sub_menu(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_cp_pnl_update' => $var_m_zv_setting->sql_cp_pnl_update(),

								# Consultar registros de la tabla por medio del modelo instanciado
								'var_config_ds_color' => $var_m_zv_setting->sql_configuration_design_color(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_config_ds_dimension' => $var_m_zv_setting->sql_configuration_design_dimension(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_config_ds_theme' => $var_m_zv_setting->sql_configuration_design_theme(),

								# Consultar registros de la tabla por medio del modelo instanciado
								'var_menu_crud_icon_code' => $var_m_zz_design->sql_menu_crud_icon_code($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_menu_crud_script' => $var_m_zz_design->sql_menu_crud_script($var_controller),

								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_btn_action' => $var_m_zz_design->sql_permits_btn_action($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_btn_export' => $var_m_zz_design->sql_permits_btn_export($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_btn_search' => $var_m_zz_design->sql_permits_btn_search($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_btn_visible' => $var_m_zz_design->sql_permits_btn_visible($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_data_by_create' => $var_m_zz_design->sql_permits_data_by_create($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_data_change' => $var_m_zz_design->sql_permits_data_change($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_data_eliminate' => $var_m_zz_design->sql_permits_data_eliminate($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_data_read' => $var_m_zz_design->sql_permits_data_read($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_data_remove' => $var_m_zz_design->sql_permits_data_remove($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_associate' => $var_m_zz_design->sql_permits_value_associate($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_change' => $var_m_zz_design->sql_permits_value_change($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_close' => $var_m_zz_design->sql_permits_value_close($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_column_toggle' => $var_m_zz_design->sql_permits_value_column_toggle($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_colvis_column' => $var_m_zz_design->sql_permits_value_colvis_column($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_colvis_restore' => $var_m_zz_design->sql_permits_value_colvis_restore($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_copy' => $var_m_zz_design->sql_permits_value_copy($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_create' => $var_m_zz_design->sql_permits_value_create($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_csv' => $var_m_zz_design->sql_permits_value_csv($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_delete' => $var_m_zz_design->sql_permits_value_delete($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_detail' => $var_m_zz_design->sql_permits_value_detail($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_email' => $var_m_zz_design->sql_permits_value_email($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_error' => $var_m_zz_design->sql_permits_value_error($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_excel' => $var_m_zz_design->sql_permits_value_excel($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_file' => $var_m_zz_design->sql_permits_value_file($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_import' => $var_m_zz_design->sql_permits_value_import($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_page_length' => $var_m_zz_design->sql_permits_value_page_length($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_pdf' => $var_m_zz_design->sql_permits_value_pdf($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_print' => $var_m_zz_design->sql_permits_value_print($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_remove' => $var_m_zz_design->sql_permits_value_remove($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_report' => $var_m_zz_design->sql_permits_value_report($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_restore' => $var_m_zz_design->sql_permits_value_restore($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_sub_menu' => $var_m_zz_design->sql_permits_value_sub_menu($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_sync' => $var_m_zz_design->sql_permits_value_sync($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_value_update' => $var_m_zz_design->sql_permits_value_update($var_controller),

								# Consultar registros de la tabla por medio del modelo instanciado
								'var_sub_menu_crud_group_by' => $var_m_zz_design->sql_sub_menu_crud_group_by($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_sub_menu_crud_order_by' => $var_m_zz_design->sql_sub_menu_crud_order_by($key_controller),

								# Consultar registros de la tabla por medio del modelo instanciado
								'var_sys_state_read' => $var_m_azp_sys_state->sql_controller_read(),
								
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_crt_phase_name' => $var_m_azp_crt_phase->sql_controller_read(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_crt_phase_percentage' => $var_m_azp_crt_phase->sql_controller_read(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_crt_bank' => $var_m_azp_crt_request_data->sql_select_tc_azp_crt_bank(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_crt_client' => $var_m_azp_crt_request_data->sql_select_tc_azp_crt_client(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_crt_city' => $var_m_azp_crt_request_data->sql_select_tc_azp_crt_city(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_crt_observation_type' => $var_m_azp_crt_request_data->sql_select_tc_azp_crt_observation_type(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_crt_request_type' => $var_m_azp_crt_request_data->sql_select_tc_azp_crt_request_type(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_crt_third_parties' => $var_m_azp_crt_request_data->sql_select_tc_azp_crt_third_parties(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_crt_third_type' => $var_m_azp_crt_request_data->sql_select_tc_azp_crt_third_type(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'sql_select_tc_azp_fct_client_bs' => $var_m_azp_crt_request_data->sql_select_tc_azp_fct_client(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_crt_request_data_client' => $var_m_azp_crt_request_data->sql_select_tc_azp_crt_request_data_client(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_role' => $result_permits_role,
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_permits_rols' => $result_permits_rols,
								# Consultar registros de la tabla por medio del modelo instanciado
								'var_user_session' => $var_m_zz_design->sql_user_session(),
								# Cargar el controlador actual en una variable y ser declarada
								'df_var_controller' => $var_controller
							));
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . '/access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'query':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_error($var_controller)) {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('backend/message/query');
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'info/access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'remove':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_remove($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_crt_request_data->sql_controller_remove();
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_crt_request_data->sql_azp_crt_request_data_remove();
							} else {
								# Redireccionar a una pagina segun el metodo cargado
								Func::redir(URL . $var_controller . 'info/query/');
								# Detener la ejecucion
								exit();
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'info/access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'restore':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_restore($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_crt_request_data->sql_controller_restore();
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_crt_request_data->sql_azp_crt_request_data_restore();
							} else {
								# Redireccionar a una pagina segun el metodo cargado
								Func::redir(URL . $var_controller . 'info/query/');
								# Detener la ejecucion
								exit();
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'info/access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'xlsxemailone':
						#-------------------------------------------------------------------------#
						# Instanciando clases del modelo
						$var_image_logo = new Drawing();
						# Instanciando clases del modelo
						$var_spreadsheet = new Spreadsheet();
						#-------------------------------------------------------------------------#
						# Ruta de la carpeta por defecto de la plantilla
						$var_route_folder = 'systemfiles/filesformat/';
						# Plantilla del archivo con su extension
						$var_template_name = 'template_supplier.xlsx';
						#-------------------------------------------------------------------------#
						$var_spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($var_route_folder . $var_template_name);
						# Instanciando clases del modelo
						$var_sheet = $var_spreadsheet->getActiveSheet();
						#-------------------------------------------------------------------------#
						$var_em_id = $_GET['field_em_id'];
						$var_em_nro = $_GET['field_em_con'];
						$var_em_file = $_GET['field_em_file'];
						#-------------------------------------------------------------------------#
						# Instanciado funciones de la clase y asignando a variable
						$var_m_azp_crt_request_data->sql_select_tc_azp_crt_third_type_up($var_em_id, $var_em_nro);
						# Instanciado funciones de la clase y asignando a variable
						$var_sql_table = $var_m_azp_crt_request_data->sql_controller_table();
						# Instanciado funciones de la clase y asignando a variable
						$var_sql_password = $var_m_azp_crt_request_data->sql_controller_third_password($var_em_id);
						#-------------------------------------------------------------------------#
						# Ruta principal de la carpeta
						$var_fl_route = 'systemfiles/filesproject/';
						# Ruta de la carpeta principal
						$var_fl_folder = 'azp_crt_request_data/supplier/';
						# Ruta de la carpeta principal
						$var_fl_subfol = 'generated/';
						# Carpeta del año
						$var_fl_year = YEAR . '/';
						# Carpeta del año y mes
						$var_fl_month = YEAR_MONTH . '/';
						# Carpeta del año, mes y día
						$var_fl_date = DATE . '/';
						#-------------------------------------------------------------------------#
						# Consultar helper y sus opciones
						Helper::load('files');
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_fl_route . $var_fl_folder . $var_fl_subfol, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_fl_route . $var_fl_folder . $var_fl_subfol . $var_fl_year, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_fl_route . $var_fl_folder . $var_fl_subfol . $var_fl_year . $var_fl_month, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_fl_route . $var_fl_folder . $var_fl_subfol . $var_fl_year . $var_fl_month . $var_fl_date, 0777);
						#-------------------------------------------------------------------------#
						# Dar permisos a la carpeta y archivo
						chmod($var_fl_route . $var_fl_folder . $var_fl_subfol, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_fl_route . $var_fl_folder . $var_fl_subfol . $var_fl_year, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_fl_route . $var_fl_folder . $var_fl_subfol . $var_fl_year . $var_fl_month, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_fl_route . $var_fl_folder . $var_fl_subfol . $var_fl_year . $var_fl_month . $var_fl_date, 0777);
						#-------------------------------------------------------------------------#
						# Nombre del archivo a guardar con sus datos respectivos
						$var_file_name = $var_em_file . '_' . HOUR_NUMBER . '.xlsx';
						# Ruta de la carpeta para almacenar sus respectivos archivos
						$var_file_route = $var_fl_route . $var_fl_folder . $var_fl_subfol . $var_fl_year . $var_fl_month . $var_fl_date;
						# Ruta final concatenada para almacenar el archivo en su carpeta
						$var_file_final = '' . $var_file_route . $var_file_name;
						#-------------------------------------------------------------------------#
						$var_style_hcolumns = array(
							'font' => array(
								'name' => 'Calibri',
								'size' => '11',
								'color' => array(
									'rgb' => '000000',
								),
							),
							'borders' => array(
								'outline' => array(
									'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
									'color' => array(
										'argb' => '000000',
									),
								),
							),
							'alignment' => array(
								'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
								'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
							),
						);
						#-------------------------------------------------------------------------#
						$var_sheet->getStyle('A6')->applyFromArray($var_style_hcolumns);
						$var_sheet->getStyle('B6')->applyFromArray($var_style_hcolumns);
						$var_sheet->getStyle('C6')->applyFromArray($var_style_hcolumns);
						$var_sheet->getStyle('D6')->applyFromArray($var_style_hcolumns);
						$var_sheet->getStyle('E6')->applyFromArray($var_style_hcolumns);
						$var_sheet->getStyle('F6')->applyFromArray($var_style_hcolumns);
						#-------------------------------------------------------------------------#
						# Asignar valores a las celdas de excel
						$var_sheet->setCellValue('A6', html_entity_decode('Fecha Solicitud'));
						$var_sheet->setCellValue('B6', html_entity_decode('Codigo Cliente'));
						$var_sheet->setCellValue('C6', html_entity_decode('No Cedula'));
						$var_sheet->setCellValue('D6', html_entity_decode('Nombre'));
						$var_sheet->setCellValue('E6', html_entity_decode('Placa-Matricula'));
						$var_sheet->setCellValue('F6', html_entity_decode('Ciudad'));
						//$var_sheet->setCellValue('G1', html_entity_decode('Valor Total Servicio'));
						//$var_sheet->setCellValue('H1', html_entity_decode('Valor Total Reintegro'));
						//$var_sheet->setCellValue('I1', html_entity_decode('Recibo'));
						//$var_sheet->setCellValue('J1', html_entity_decode('Fecha Imagen'));
						//$var_sheet->setCellValue('K1', html_entity_decode('Observacion'));












						#-------------------------------------------------------------------------#
						$var_style_columns = array(
							'font' => array(
								'name' => 'Calibri',
								'size' => '11',
								'color' => array(
									'rgb' => '000000',
								),
							),
							'borders' => array(
								'outline' => array(
									'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
									'color' => array(
										'argb' => '000000',
									),
								),
							),
							'alignment' => array(
								'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
								'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
							),
						);










						#-------------------------------------------------------------------------#
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql_table) {
							# Establecer celda inicial
							$i = 7;
							# Recorrer datos de la base
							foreach ($var_sql_table as $key => $value) {
								# Asignar propiedades a las celdas de excel
								$var_sheet->getStyle('A' . $i)->applyFromArray($var_style_columns);
								$var_sheet->getStyle('B' . $i)->applyFromArray($var_style_columns);
								$var_sheet->getStyle('C' . $i)->applyFromArray($var_style_columns);
								$var_sheet->getStyle('D' . $i)->applyFromArray($var_style_columns);
								$var_sheet->getStyle('E' . $i)->applyFromArray($var_style_columns);
								$var_sheet->getStyle('F' . $i)->applyFromArray($var_style_columns);
								# Asignar valores a las celdas de excel
								$var_sheet->setCellValue('A' . $i, html_entity_decode($value['lbl_azp_crt_request_update_t_request_date']));
								$var_sheet->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_crt_request_update_t_client_code']));
								$var_sheet->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_crt_request_update_t_identification']));
								$var_sheet->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_crt_request_update_t_full_name']));
								$var_sheet->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_crt_request_update_t_plaque_enrollment']));
								$var_sheet->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_crt_request_update_t_city']));
								//$var_sheet->setCellValue('G' . $i, html_entity_decode('0'));
								//$var_sheet->setCellValue('H' . $i, html_entity_decode('0'));
								//$var_sheet->setCellValue('I' . $i, html_entity_decode(''));
								//$var_sheet->setCellValue('J' . $i, html_entity_decode(''));
								//$var_sheet->setCellValue('K' . $i, html_entity_decode(''));
								# Incrementar valores
								$i++;
							}
						} else {
							# Asignar valores a las celdas de excel
							$var_sheet->setCellValue('A2', '');
							$var_sheet->setCellValue('B2', '');
							$var_sheet->setCellValue('C2', '');
							$var_sheet->setCellValue('D2', '');
							$var_sheet->setCellValue('E2', '');
							$var_sheet->setCellValue('F2', '');
							//$var_sheet->setCellValue('G2', '');
							//$var_sheet->setCellValue('H2', '');
							//$var_sheet->setCellValue('I2', '');
							//$var_sheet->setCellValue('J2', '');
							//$var_sheet->setCellValue('K2', '');
						}
						#-------------------------------------------------------------------------#
						foreach(range('A','F') as $columnID) { $var_sheet->getColumnDimension($columnID)->setAutoSize(true); }
						#-------------------------------------------------------------------------#
						# Asignar las imagenes en celdas
						$var_image_logo->setPath('views/backend/images/email.png');
						$var_image_logo->setCoordinates('A1');
						$var_image_logo->setWorksheet($var_spreadsheet->getActiveSheet());
						#-------------------------------------------------------------------------#
						# Escribir valores sobre las celdas
						$var_writer = new Xlsx($var_spreadsheet);
						$var_writer->save($var_file_final);
						#-------------------------------------------------------------------------#
						# Ruta principal de la carpeta
						$var_ec_route = 'systemfiles/filesproject/';
						# Ruta de la carpeta principal
						$var_ec_folder = 'azp_crt_request_data/supplier/';
						# Ruta de la carpeta principal
						$var_ec_subfol = 'encrypted/';
						# Carpeta del año
						$var_ec_year = YEAR . '/';
						# Carpeta del año y mes
						$var_ec_month = YEAR_MONTH . '/';
						# Carpeta del año, mes y día
						$var_ec_date = DATE . '/';
						#-------------------------------------------------------------------------#
						# Consultar helper y sus opciones
						Helper::load('files');
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_subfol, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year . $var_ec_month, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year . $var_ec_month . $var_ec_date, 0777);
						#-------------------------------------------------------------------------#
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_subfol, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year . $var_ec_month, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year . $var_ec_month . $var_ec_date, 0777);
						#-------------------------------------------------------------------------#
						# Nombre del archivo a guardar con sus datos respectivos
						$var_encry_name = $var_em_file . '_' . HOUR_NUMBER . '.xlsx';
						# Ruta de la carpeta para almacenar sus respectivos archivos
						$var_encry_route = $var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year . $var_ec_month . $var_ec_date;
						# Ruta final concatenada para almacenar el archivo en su carpeta
						$var_encry_final = '' . $var_encry_route . $var_encry_name;
						#-------------------------------------------------------------------------#
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql_password) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_sql_password as $key => $value) {
								# Asignar valores obtenidos de la consulta sql
								$var_password = $value[d_azp_gsc_third_parties_t_password];
							}
						} else { $var_password = ''; }
						#-------------------------------------------------------------------------#
						$var_expiration = 'Utilizable';
						$var_extension = 'xlsx';
						$var_module = 'Solicitud';
						$var_template = 'Proveedor';
						$var_type = 'Excel';
						#-------------------------------------------------------------------------#
						if ($var_password != '') {
							# Organizacion de comando a ejecutar
							$encryptCommand = "secure-spreadsheet --password " . $var_password . " --input-format xlsx < " . $var_file_final . " > " . $var_encry_final;
							# Ejecutar comando
							exec($encryptCommand);
							# Enviar datos a traves del modelo
							$var_m_azp_crt_request_data->sql_azp_crt_request_data_generated_files(
								$var_expiration,
								$var_extension,
								$var_module,
								$var_encry_name,
								$var_encry_route,
								$var_template,
								$var_type
							);
							# Emitir mensaje al usuario
							echo "Exito: Archivo encriptado correctamente";
						} else {
							# Enviar datos a traves del modelo
							$var_m_azp_crt_request_data->sql_azp_crt_request_data_generated_files(
								$var_expiration,
								$var_extension,
								$var_module,
								$var_file_name,
								$var_file_route,
								$var_template,
								$var_type
							);
							# Emitir mensaje al usuario
							echo "Exito: Archivo generado correctamente";
						}
						#-------------------------------------------------------------------------#
						# Detener la ejecucion
						exit();
						break;
					case 'xlsxemailtwo':
						#-------------------------------------------------------------------------#
						$var_em_id = $_GET['field_em_id'];
						$var_em_file = $_GET['field_em_file'];
						#-------------------------------------------------------------------------#
						# Instanciando clases del modelo
						$my_user = $var_m_azp_user->sql_select_tc_azp_user_data();
						# Recorrer datos de la base
						foreach ($my_user as $key => $value) {
							$var_names = $value[d_azp_data_personal_t_names];
							$var_surnames = $value[d_azp_data_personal_t_surnames];
						}
						#-------------------------------------------------------------------------#
						# Instanciando clases del modelo
						$var_spreadsheet = new Spreadsheet();
						# Instanciando clases del modelo
						$var_image_logo = new Drawing();
						# Instanciando clases del modelo
						$var_image_firm = new Drawing();
						# Instanciando clases del modelo
						$var_image_inicio = new Drawing();
						# Instanciando clases del modelo
						$var_image_final = new Drawing();
						# Instanciando clases del modelo
						$var_image_texto = new Drawing();
						#-------------------------------------------------------------------------#
						# Instanciado funciones de la clase y asignando a variable
						$var_sql_client = $var_m_azp_crt_request_data->sql_controller_client($var_em_id);
						# Instanciado funciones de la clase y asignando a variable
						$var_sql_table = $var_m_azp_crt_request_data->sql_controller_table();
						# Instanciado funciones de la clase y asignando a variable
						$var_sql_table_up = $var_m_azp_crt_request_data->sql_controller_table_up();
						#-------------------------------------------------------------------------#
						# Ruta principal de la carpeta
						$var_fl_route = 'systemfiles/filesproject/';
						# Ruta de la carpeta principal
						$var_fl_folder = 'azp_crt_request_data/certificate/';
						# Ruta de la carpeta principal
						$var_fl_subfol = 'generated/';
						# Carpeta del año
						$var_fl_year = YEAR . '/';
						# Carpeta del año y mes
						$var_fl_month = YEAR_MONTH . '/';
						# Carpeta del año, mes y día
						$var_fl_date = DATE . '/';
						#-------------------------------------------------------------------------#
						# Consultar helper y sus opciones
						Helper::load('files');
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_fl_route . $var_fl_folder . $var_fl_subfol, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_fl_route . $var_fl_folder . $var_fl_subfol . $var_fl_year, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_fl_route . $var_fl_folder . $var_fl_subfol . $var_fl_year . $var_fl_month, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_fl_route . $var_fl_folder . $var_fl_subfol . $var_fl_year . $var_fl_month . $var_fl_date, 0777);
						#-------------------------------------------------------------------------#
						# Dar permisos a la carpeta y archivo
						chmod($var_fl_route . $var_fl_folder . $var_fl_subfol, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_fl_route . $var_fl_folder . $var_fl_subfol . $var_fl_year, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_fl_route . $var_fl_folder . $var_fl_subfol . $var_fl_year . $var_fl_month, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_fl_route . $var_fl_folder . $var_fl_subfol . $var_fl_year . $var_fl_month . $var_fl_date, 0777);
						#-------------------------------------------------------------------------#
						# Nombre del archivo a guardar con sus datos respectivos
						$var_file_name = $var_em_file . '_' . HOUR_NUMBER . '.xlsx';
						# Ruta de la carpeta para almacenar sus respectivos archivos
						$var_file_route = $var_fl_route . $var_fl_folder . $var_fl_subfol . $var_fl_year . $var_fl_month . $var_fl_date;
						# Ruta final concatenada para almacenar el archivo en su carpeta
						$var_file_final = '' . $var_file_route . $var_file_name;
						#-------------------------------------------------------------------------#
						# Ruta de la carpeta por defecto de la plantilla
						$var_route_folder = 'systemfiles/filesformat/';
						# Plantilla del archivo con su extension
						$var_template_name = 'template_certificate.xlsx';
						# Informacion de la ciudad con el formato de fecha
						$var_remision_today = 'Bogotá, ' . Helper::actual_date();
						#-------------------------------------------------------------------------#
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql_client) {
							# Recorrer datos de la base
							foreach ($var_sql_client as $key => $value) {
								# Informacion del banco o cliente de la base
								$var_password = $value['lbl_azp_crt_client_t_password'];
								# Informacion del banco o cliente de la base
								$var_remision_bank = $value['lbl_azp_crt_bank_t_name'];
								# Informacion de la persona del banco o cliente de la base
								$var_remision_person = 'Atn: ' . $value['lbl_azp_crt_client_t_person'];
								# Informacion del cargo del banco o cliente de la base
								$var_remision_position = $value['lbl_azp_crt_client_t_position'];
								# Informacion de la ciudad del banco o cliente de la base
								$var_remision_city = $value['lbl_azp_crt_city_t_name'];
								# Informacion de la ciudad del banco o cliente de la base
								$var_remision_address = $value['lbl_azp_crt_client_t_address'];
							}
						} else {
							# Informacion del banco o cliente de la base
							$var_password = '';
							# Informacion del banco o cliente de la base
							$var_remision_bank = 'Banco: ';
							# Informacion de la persona del banco o cliente de la base
							$var_remision_person = 'Atm.';
							# Informacion del cargo del banco o cliente de la base
							$var_remision_position = 'Cargo:';
							# Informacion de la ciudad del banco o cliente de la base
							$var_remision_city = 'Ciudad: ';
							# Informacion de la ciudad del banco o cliente de la base
							$var_remision_address = 'Direccion: ';
						}
						#-------------------------------------------------------------------------#
						if (false != $var_sql_table_up) {
							# Recorrer datos de la base
							foreach ($var_sql_table_up as $key => $value) {
								# Informacion del banco o cliente de la base
								$var_type_certificate = $value['lbl_azp_crt_request_type_t_name'];
							}
						} else {
							# Informacion del banco o cliente de la base
							$var_type_certificate = '';
						}
						$var_text_certificate = 'Por medio de la presente, nos permitimos adjuntar original(es) de (los) siguiente(s) Certificado(s) de ' .
							strtolower($var_type_certificate) . ' según su solicitud.';
						#-------------------------------------------------------------------------#
						$var_spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($var_route_folder . $var_template_name);
						$var_sheet = $var_spreadsheet->getActiveSheet();
						$var_sheet->setCellValue('B10', $var_remision_today);
						$var_sheet->setCellValue('B12', 'Señores');
						$var_sheet->setCellValue('B13', $var_remision_bank);
						$var_sheet->setCellValue('B14', $var_remision_person);
						$var_sheet->setCellValue('B15', $var_remision_position);
						$var_sheet->setCellValue('B16', $var_remision_address);
						$var_sheet->setCellValue('B17', $var_remision_city);
						$var_sheet->setCellValue('B21', $var_text_certificate);
						#-------------------------------------------------------------------------#
						$var_style_header = array(
							'fill' => array(
								'type' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
								'color' => array(
									'rgb' => 'B9B8B8',
								),
							),
						);
						#-------------------------------------------------------------------------#
						$var_style_columns = array(
							'font' => array(
								'name' => 'Tahoma',
								'size' => '8',
								'color' => array(
									'rgb' => '000000',
								),
							),
							'borders' => array(
								'outline' => array(
									'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
									'color' => array(
										'argb' => '000000',
									),
								),
							),
							'alignment' => array(
								'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
								'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
							),
						);
						#-------------------------------------------------------------------------#
						$var_sheet->getStyle('B24:G24')->applyFromArray($var_style_header);
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql_table) {
							# Establecer celda inicial
							$i = 25;
							# Recorrer datos de la base
							foreach ($var_sql_table as $key => $value) {
								# Asignar propiedades a las celdas de excel
								$var_sheet->getStyle('B' . $i)->applyFromArray($var_style_columns);
								$var_sheet->getStyle('C' . $i)->applyFromArray($var_style_columns);
								$var_sheet->getStyle('D' . $i)->applyFromArray($var_style_columns);
								$var_sheet->getStyle('E' . $i)->applyFromArray($var_style_columns);
								$var_sheet->getStyle('F' . $i)->applyFromArray($var_style_columns);
								$var_sheet->getStyle('G' . $i)->applyFromArray($var_style_columns);
								# Asignar valores a las celdas de excel
								$var_sheet->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_crt_request_update_t_identification']));
								$var_sheet->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_crt_request_update_t_full_name']));
								$var_sheet->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_crt_request_update_t_plaque_enrollment']));
								$var_sheet->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_crt_request_update_t_city']));
								$var_sheet->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_crt_request_update_t_applicant_entity']));
								$var_sheet->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_crt_request_update_t_request_nro']));
								# Autoajustar las columnas en excel
								#$var_sheet->getColumnDimension('B' . $i)->setAutoSize(true);
								#$var_sheet->getColumnDimension('C' . $i)->setAutoSize(true);
								#$var_sheet->getColumnDimension('D' . $i)->setAutoSize(true);
								#$var_sheet->getColumnDimension('E' . $i)->setAutoSize(true);
								#$var_sheet->getColumnDimension('F' . $i)->setAutoSize(true);
								#$var_sheet->getColumnDimension('G' . $i)->setAutoSize(true);
								#foreach(range('C','G') as $columnID) { $var_sheet->getColumnDimension($columnID)->setAutoSize(true); }
								# Incrementar valores
								$i++;
							}
						}
						#-------------------------------------------------------------------------#
						$var_cell_1 = $i + 2;
						$var_cell_2 = $i + 3;
						$var_cell_3 = $i + 13;
						$var_cell_4 = $i + 14;
						$var_cell_5 = $i + 15;
						$var_cell_firm = $i + 4;
						$var_cell_final = $i + 5;
						$var_cell_text = $i + 21;
						#-------------------------------------------------------------------------#
						$var_style_text = array(
							'font' => array(
								'name' => 'Tahoma',
								'size' => '11',
								'color' => array(
									'rgb' => '000000',
								),
								'bold' => true,
							),
						);
						#-------------------------------------------------------------------------#
						$var_sheet->setCellValue('B' . $var_cell_1, 'Cualquier inquietud con gusto será atendida');
						$var_sheet->setCellValue('B' . $var_cell_2, 'Cordialmente,');
						#-------------------------------------------------------------------------#
						# Asignar propiedades a las celdas de excel
						$var_sheet->getStyle('B' . $var_cell_3)->applyFromArray($var_style_text);
						$var_sheet->getStyle('B' . $var_cell_4)->applyFromArray($var_style_text);
						$var_sheet->getStyle('B' . $var_cell_5)->applyFromArray($var_style_text);
						$var_sheet->setCellValue('B' . $var_cell_3, 'MARGARITA GIRALDO DE SANCHEZ');
						$var_sheet->setCellValue('B' . $var_cell_4, 'Directora Procesos');
						$var_sheet->setCellValue('B' . $var_cell_5, $var_names[0] . $var_surnames[0]);
						#-------------------------------------------------------------------------#
						# Asignar las imagenes en celdas
						$var_image_firm->setPath('views/backend/images/excel/firm.png');
						$var_image_firm->setCoordinates('B' . $var_cell_firm);
						//$var_image_firm->setOffsetX(25);
						$var_image_firm->setOffsetY(12);
						$var_image_firm->setHeight(200);
						$var_image_firm->setWorksheet($var_spreadsheet->getActiveSheet());
						#-------------------------------------------------------------------------#
						# Asignar las imagenes en celdas
						$var_image_texto->setPath('views/backend/images/excel/texto.png');
						$var_image_texto->setCoordinates('C' . $var_cell_text);
						$var_image_texto->setWorksheet($var_spreadsheet->getActiveSheet());
						#-------------------------------------------------------------------------#
						# Asignar las imagenes en celdas
						$var_image_logo->setPath('views/backend/images/email.png');
						$var_image_logo->setCoordinates('B4');
						$var_image_logo->setWorksheet($var_spreadsheet->getActiveSheet());
						#-------------------------------------------------------------------------#
						# Asignar las imagenes en celdas
						$var_image_inicio->setPath('views/backend/images/excel/encabezado.png');
						$var_image_inicio->setCoordinates('F1');
						$var_image_inicio->setWorksheet($var_spreadsheet->getActiveSheet());
						#-------------------------------------------------------------------------#
						# Asignar las imagenes en celdas
						$var_image_final->setPath('views/backend/images/excel/final.png');
						$var_image_final->setCoordinates('A' . $var_cell_final);
						$var_image_final->setWorksheet($var_spreadsheet->getActiveSheet());
						#-------------------------------------------------------------------------#
						# Escribir valores sobre las celdas
						$var_writer = new Xlsx($var_spreadsheet);
						$var_writer->save($var_file_final);
						$var_folder = opendir($var_route_folder);
						# Recorrer datos del archivo para validacion
						while ($var_element = readdir($var_folder)) {
							if (!is_dir($var_route_folder . $var_element)) {
								$var_extension = pathinfo($var_element, PATHINFO_EXTENSION);
								$var_extension = strtolower($var_extension);
							}
						}
						#-------------------------------------------------------------------------#
						# Ruta principal de la carpeta
						$var_ec_route = 'systemfiles/filesproject/';
						# Ruta de la carpeta principal
						$var_ec_folder = 'azp_crt_request_data/certificate/';
						# Ruta de la carpeta principal
						$var_ec_subfol = 'encrypted/';
						# Carpeta del año
						$var_ec_year = YEAR . '/';
						# Carpeta del año y mes
						$var_ec_month = YEAR_MONTH . '/';
						# Carpeta del año, mes y día
						$var_ec_date = DATE . '/';
						#-------------------------------------------------------------------------#
						# Consultar helper y sus opciones
						Helper::load('files');
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_subfol, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year . $var_ec_month, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year . $var_ec_month . $var_ec_date, 0777);
						#-------------------------------------------------------------------------#
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_subfol, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year . $var_ec_month, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year . $var_ec_month . $var_ec_date, 0777);
						#-------------------------------------------------------------------------#
						# Nombre del archivo a guardar con sus datos respectivos
						$var_encry_name = $var_em_file . '_' . HOUR_NUMBER . '.xlsx';
						# Ruta de la carpeta para almacenar sus respectivos archivos
						$var_encry_route = $var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year . $var_ec_month . $var_ec_date;
						# Ruta final concatenada para almacenar el archivo en su carpeta
						$var_encry_final = '' . $var_encry_route . $var_encry_name;
						#-------------------------------------------------------------------------#
						$var_expiration = 'Utilizable';
						$var_extension = 'xlsx';
						$var_module = 'Solicitud';
						$var_template = 'Certificado';
						$var_type = 'Excel';
						#-------------------------------------------------------------------------#
						if ($var_password != '') {
							echo $var_password;
							# Organizacion de comando a ejecutar
							$encryptCommand = "secure-spreadsheet --password " . $var_password . " --input-format xlsx < " . $var_file_final . " > " . $var_encry_final;
							# Ejecutar comando
							exec($encryptCommand);
							# Enviar datos a traves del modelo
							$var_m_azp_crt_request_data->sql_azp_crt_request_data_generated_files(
								$var_expiration,
								$var_extension,
								$var_module,
								$var_encry_name,
								$var_encry_route,
								$var_template,
								$var_type
							);
							# Emitir mensaje al usuario
							//echo "Exito: Archivo encriptado correctamente";
						} else {
							# Enviar datos a traves del modelo
							$var_m_azp_crt_request_data->sql_azp_crt_request_data_generated_files(
								$var_expiration,
								$var_extension,
								$var_module,
								$var_file_name,
								$var_file_route,
								$var_template,
								$var_type
							);
							# Emitir mensaje al usuario
							echo "Exito: Archivo generado correctamente";
						}
						#-------------------------------------------------------------------------#
						# Detener la ejecucion
						exit();
						break;
					case 'zipimagescl':
						# Enviar datos a traves del modelo
						$var_function = $var_m_azp_crt_request_data->sql_azp_crt_compressed_images_client();
						# Recorriendo filas de los resultados de la base de datos
						foreach ($var_function as $key => $value): echo $value; endforeach;
						break;
					case 'xlsxidentificationcl':
						# Ruta principal de la carpeta
						$var_ec_route = 'systemfiles/filesproject/';
						# Ruta de la carpeta principal
						$var_ec_folder = 'azp_crt_request_data/images/';
						# Carpeta del año
						$var_ec_year = YEAR . '/';
						# Carpeta del año y mes
						$var_ec_month = YEAR_MONTH . '/';
						# Carpeta del año, mes y día
						$var_ec_date = DATE . '/';
						# Carpeta de archivos
						$var_ec_hour = HOUR_NUMBER . '/';
						#-------------------------------------------------------------------------#
						# Consultar helper y sus opciones
						Helper::load('files');
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_year, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date, 0777);
						# Ruta de la carpeta para almacenar sus respectivos archivos
						$var_route_new = $var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date;
						#-------------------------------------------------------------------------#
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_year, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date, 0777);
						#-------------------------------------------------------------------------#
						# Nombre del archivo a guardar con sus datos respectivos
						$var_ec_file = DATE_NUMBER . '_' . HOUR_NUMBER . '.xlsx';
						# Ruta de la carpeta para almacenar sus respectivos archivos
						$var_ec_road = $var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date;
						# Ruta final concatenada para almacenar el archivo en su carpeta
						$var_ec_final = $var_ec_road . $var_ec_file;
						#-------------------------------------------------------------------------#
						# Asignacion de valores a nuevas variables
						//$var_template = str_replace('../', '', $var_w_route . $var_w_folder . $var_w_document);
						# Instanciando clases del modelo
						$var_spreadsheet = new Spreadsheet();
						# Abrir el archivo para asignarle datos
						//$var_spreadformat = \PhpOffice\PhpSpreadsheet\IOFactory::load($var_template);
						# Instanciando clases del modelo
						//$var_spreadformat = $var_spreadsheet->getActiveSheet();
						# Activar la hoja con la que se trabajará
						//$var_sheet = $var_spreadformat->setActiveSheetIndex(0);
						# Instanciando clases del modelo
						$var_sheet = $var_spreadsheet->getActiveSheet();
						#-------------------------------------------------------------------------#
						# Asignar valores a las celdas de excel
						$var_sheet->setCellValue('A1', html_entity_decode('Cedula'));
						$var_sheet->setCellValue('B1', html_entity_decode('Nombre'));
						$var_sheet->setCellValue('C1', html_entity_decode('Tipo Certificado'));
						$var_sheet->setCellValue('D1', html_entity_decode('Placa-Matricula'));
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_crt_request_data->sql_azp_crt_compressed_identification_client();
						# Verificiar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_sql) { $var_row = 2;
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_sql as $key => $value):
								# Asignar valores a las celdas de excel
								$var_sheet->setCellValue('A' . $var_row, html_entity_decode($value['lbl_azp_crt_request_data_t_identification']));
								$var_sheet->setCellValue('B' . $var_row, html_entity_decode($value['lbl_azp_crt_request_data_t_full_name']));
								$var_sheet->setCellValue('C' . $var_row, html_entity_decode($value['lbl_azp_crt_request_type_t_name']));
								$var_sheet->setCellValue('D' . $var_row, html_entity_decode($value['lbl_azp_crt_request_data_t_plaque_enrollment']));
								# Incrementar valores
								$var_row++;
							endforeach;
						}
						#-------------------------------------------------------------------------#
						# Escribir valores sobre las celdas
						$var_writer = new Xlsx($var_spreadsheet);
						$var_writer->save($var_ec_final);
						$var_folder = opendir($var_ec_road);
						# Recorrer datos del archivo para validacion
						while ($var_element = readdir($var_folder)) {
							if (!is_dir($var_ec_road . $var_element)) {
								$var_extension = pathinfo($var_element, PATHINFO_EXTENSION);
								$var_extension = strtolower($var_extension);
							}
						}
						#-------------------------------------------------------------------------#
						$empty_id = $_GET['field_id'];
						$empty_w_document = $var_ec_file;
						$empty_w_error = '0';
						$empty_w_folder = $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date;
						$empty_w_name = $var_ec_file;
						$empty_w_route = '../systemfiles/filesproject/';
						$empty_w_size = Files::file_size($var_ec_final);
						$empty_w_tmp_name = 'C:\xampp\tmp\phpAC52.tmp';
						$empty_w_type = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
						# Array para almacenar varios valores en una sola variable
						$var_array = array($empty_id, $empty_w_document, $empty_w_error, $empty_w_folder, $empty_w_name, $empty_w_route, $empty_w_size, $empty_w_tmp_name, $empty_w_type,);
						# Consultar registros de la tabla por medio del modelo instanciado
						//$var_m_qup_pichinchaa_report->sql_qup_pichinchaa_report_upgrade($var_array);

						echo $var_ec_final;
						#-------------------------------------------------------------------------#
						# Detener la ejecucion
						exit();
						# Romper el caso
						break;
					default:
						# Redireccionar a una pagina segun el metodo cargado
						Func::redir(URL . $var_controller . 'info/');
						# Detener la ejecucion
						exit();
						break;
				}
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . $var_controller . 'info/error/');
				# Detener la ejecucion
				exit();
			}
		}
	}
?>