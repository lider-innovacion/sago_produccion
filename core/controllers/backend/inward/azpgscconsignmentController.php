<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
	require('views/implement/fpdf/fpdf.php');
	header("Content-Type: text/html;charset=utf-8");
	//------------------------------------------------
	class azpgscconsignmentController extends Controllers {
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
			$var_m_azp_gsc_consignment = new m_azp_gsc_consignmentModel;
			# Instanciando clases del modelo
			$var_m_azp_sys_state = new m_azp_sys_stateModel;
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
					case 'delete':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_delete($var_controller)) {
							# Control para validar el id
							if ($this->isset_id) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_gsc_consignment->sql_controller_delete();
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_gsc_consignment->sql_azp_gsc_consignment_delete();
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
						# Capturar datos por el metodo post
						//$var_id = $_POST['field_fl_id'];
						$var_1_name = $_FILES['field_fl_1_file']['name'];
						$var_1_type = $_FILES['field_fl_1_file']['type'];
						$var_1_tmp_name = $_FILES['field_fl_1_file']['tmp_name'];
						$var_1_error = $_FILES['field_fl_1_file']['error'];
						$var_1_size = $_FILES['field_fl_1_file']['size'];
						$var_1_receipt = $_POST['field_fl_1_nro_receipt'];
						# Enviar datos a traves del modelo
						$var_m_azp_gsc_consignment->sql_azp_gsc_consignment_document_1($var_1_name, $var_1_type, $var_1_tmp_name, $var_1_error, $var_1_size, $var_1_receipt);
						#-------------------------------------------------------------------------#
						# Capturar datos por el metodo post
						$var_2_check = $_POST['field_fl_2_load_file'];
						if ($var_2_check == 'Si') {
							$var_2_receipt = $_POST['field_fl_2_nro_receipt'];
							$var_2_name = $_FILES['field_fl_2_file']['name'];
							$var_2_type = $_FILES['field_fl_2_file']['type'];
							$var_2_tmp_name = $_FILES['field_fl_2_file']['tmp_name'];
							$var_2_error = $_FILES['field_fl_2_file']['error'];
							$var_2_size = $_FILES['field_fl_2_file']['size'];
							$var_2_receipt = $_POST['field_fl_2_nro_receipt'];
							# Enviar datos a traves del modelo
							$var_m_azp_gsc_consignment->sql_azp_gsc_consignment_document_2($var_2_name, $var_2_type, $var_2_tmp_name, $var_2_error, $var_2_size, $var_2_receipt);
						}
						#-------------------------------------------------------------------------#
						# Capturar datos por el metodo post
						$var_3_check = $_POST['field_fl_3_load_file'];
						if ($var_3_check == 'Si') {
							$var_3_receipt = $_POST['field_fl_3_nro_receipt'];
							$var_3_name = $_FILES['field_fl_3_file']['name'];
							$var_3_type = $_FILES['field_fl_3_file']['type'];
							$var_3_tmp_name = $_FILES['field_fl_3_file']['tmp_name'];
							$var_3_error = $_FILES['field_fl_3_file']['error'];
							$var_3_size = $_FILES['field_fl_3_file']['size'];
							$var_3_receipt = $_POST['field_fl_3_nro_receipt'];
							# Enviar datos a traves del modelo
							$var_m_azp_gsc_consignment->sql_azp_gsc_consignment_document_3($var_3_name, $var_3_type, $var_3_tmp_name, $var_3_error, $var_3_size, $var_3_receipt);
						}
						#-------------------------------------------------------------------------#
						# Capturar datos por el metodo post
						$var_4_check = $_POST['field_fl_4_load_file'];
						if ($var_4_check == 'Si') {
							$var_4_receipt = $_POST['field_fl_4_nro_receipt'];
							$var_4_name = $_FILES['field_fl_4_file']['name'];
							$var_4_type = $_FILES['field_fl_4_file']['type'];
							$var_4_tmp_name = $_FILES['field_fl_4_file']['tmp_name'];
							$var_4_error = $_FILES['field_fl_4_file']['error'];
							$var_4_size = $_FILES['field_fl_4_file']['size'];
							$var_4_receipt = $_POST['field_fl_4_nro_receipt'];
							# Enviar datos a traves del modelo
							$var_m_azp_gsc_consignment->sql_azp_gsc_consignment_document_4($var_4_name, $var_4_type, $var_4_tmp_name, $var_4_error, $var_4_size, $var_4_receipt);
						}
						#-------------------------------------------------------------------------#
						# Capturar datos por el metodo post
						$var_5_check = $_POST['field_fl_5_load_file'];
						if ($var_5_check == 'Si') {
							$var_5_receipt = $_POST['field_fl_5_nro_receipt'];
							$var_5_name = $_FILES['field_fl_5_file']['name'];
							$var_5_type = $_FILES['field_fl_5_file']['type'];
							$var_5_tmp_name = $_FILES['field_fl_5_file']['tmp_name'];
							$var_5_error = $_FILES['field_fl_5_file']['error'];
							$var_5_size = $_FILES['field_fl_5_file']['size'];
							$var_5_receipt = $_POST['field_fl_5_nro_receipt'];
							# Enviar datos a traves del modelo
							$var_m_azp_gsc_consignment->sql_azp_gsc_consignment_document_5($var_5_name, $var_5_type, $var_5_tmp_name, $var_5_error, $var_5_size, $var_5_receipt);
						}
						#-------------------------------------------------------------------------#
						# Capturar datos por el metodo post
						$var_6_check = $_POST['field_fl_6_load_file'];
						if ($var_6_check == 'Si') {
							$var_6_receipt = $_POST['field_fl_6_nro_receipt'];
							$var_6_name = $_FILES['field_fl_6_file']['name'];
							$var_6_type = $_FILES['field_fl_6_file']['type'];
							$var_6_tmp_name = $_FILES['field_fl_6_file']['tmp_name'];
							$var_6_error = $_FILES['field_fl_6_file']['error'];
							$var_6_size = $_FILES['field_fl_6_file']['size'];
							$var_6_receipt = $_POST['field_fl_6_nro_receipt'];
							# Enviar datos a traves del modelo
							$var_m_azp_gsc_consignment->sql_azp_gsc_consignment_document_6($var_6_name, $var_6_type, $var_6_tmp_name, $var_6_error, $var_6_size, $var_6_receipt);
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
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('backend/inward/azp_gsc_consignment', array(
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
								'df_sql_select_tc_azp_gsc_client' => $var_m_azp_gsc_consignment->sql_select_tc_azp_gsc_client(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_distinct_tc_azp_gsc_request' => $var_m_azp_gsc_consignment->sql_distinct_tc_azp_gsc_request(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_gsc_request' => $var_m_azp_gsc_consignment->sql_select_tc_azp_gsc_request(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_gsc_third_parties' => $var_m_azp_gsc_consignment->sql_select_tc_azp_gsc_third_parties(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_user' => $var_m_azp_gsc_consignment->sql_select_tc_azp_user(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_data_get' => $var_m_azp_gsc_consignment->sql_controller_data_get(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_user' => $var_m_azp_gsc_consignment->sql_select_tc_azp_user(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_azp_gsc_nclient' => $var_m_azp_gsc_consignment->sql_select_tc_azp_gsc_nclient(),
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
								$var_m_azp_gsc_consignment->sql_controller_remove();
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_gsc_consignment->sql_azp_gsc_consignment_remove();
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
								$var_m_azp_gsc_consignment->sql_controller_restore();
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_gsc_consignment->sql_azp_gsc_consignment_restore();
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
					case 'consolidated':
						if (isset($_GET['field_gp'])) { $var_gp = $_GET['field_gp']; } else { $var_gp = 0; }
						# Instanciando clases del modelo
						$var_spreadsheet = new Spreadsheet();
						# Plantilla del archivo con su extension
						//$var_template = str_replace('../', '', $var_file_route) . $var_file_folder . $var_file_document;
						//$var_template = 'systemfiles/filesimport/defunction/Formato Consignacion.xlsx';

						if ($var_gp == 1) { $var_template = 'systemfiles/filesimport/defunction/Formato Consignacion Total.xlsx'; }
						if ($var_gp == 2) { $var_template = 'systemfiles/filesimport/defunction/Formato Consignacion Ciudad.xlsx'; }
						if ($var_gp == 3) { $var_template = 'systemfiles/filesimport/defunction/Formato Consignacion Notaria.xlsx'; }
						#-------------------------------------------------------------------------#
						$var_spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($var_template);
						//$var_sheet = $var_spreadsheet->getActiveSheet()->setTitle('FORMATO');
						//$var_second = $var_spreadsheet->getActiveSheet()->setTitle('ICS');
						#-------------------------------------------------------------------------#
						# Ruta principal de la carpeta
						$var_ec_route = 'systemfiles/filesproject/';
						# Ruta de la carpeta principal
						$var_ec_folder = 'azp_gsc_consignment' . '/';
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
						Files::create_dir($var_ec_route . $var_ec_folder, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_year, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date, 0777);
						#-------------------------------------------------------------------------#
						# Nombre del archivo a guardar con sus datos respectivos
						$var_file_name = DATE_NUMBER . '_' . HOUR_NUMBER . '.xlsx';
						# Ruta de la carpeta para almacenar sus respectivos archivos
						$var_file_route = $var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date;
						# Ruta final concatenada para almacenar el archivo en su carpeta
						$var_file_final = $var_file_route . $var_file_name;
						#-------------------------------------------------------------------------#
						//$var_spreadsheet->createSheet();
						$var_spreadsheet->setActiveSheetIndex(0);
						$var_sheet_one = $var_spreadsheet->getActiveSheet()->setTitle('Agrupado');
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_gsc_consignment->sql_controller_report_group();
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql) { $i = 2;
							# Recorrer datos de la base
							foreach ($var_sql as $key => $value) {
								# Asignar valores a las celdas de excel
								$var_sheet_one->setCellValue('A' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_to_consigned']));
								$var_sheet_one->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_nit_identification']));
								$var_sheet_one->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_consigned_entity']));
								$var_sheet_one->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_account_type']));
								$var_sheet_one->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_account_number']));
								$var_sheet_one->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_closed_value']));
								if ($var_gp == 2) { $var_sheet_one->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_report_consignment_s_city'])); }
								if ($var_gp == 3) { $var_sheet_one->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_report_consignment_s_notary'])); }
								# Incrementar valores
								$i++;
							}
						}
						#-------------------------------------------------------------------------#
						//$var_spreadsheet->createSheet();
						$var_spreadsheet->setActiveSheetIndex(1);
						$var_sheet_second = $var_spreadsheet->getActiveSheet()->setTitle('Detallado');
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_gsc_consignment->sql_controller_report_tcd();
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql) { $i = 2;
							# Recorrer datos de la base
							foreach ($var_sql as $key => $value) {
								# Asignar valores a las celdas de excel
								$var_sheet_second->setCellValue('A' . $i, html_entity_decode($value['lbl_azp_report_consignment_s_entity']));
								$var_sheet_second->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_report_consignment_s_number_request']));
								$var_sheet_second->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_report_consignment_s_identification']));
								$var_sheet_second->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_report_consignment_s_full_name']));
								$var_sheet_second->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_report_consignment_s_serial']));
								$var_sheet_second->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_to_consigned']));
								$var_sheet_second->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_nit_identification']));
								$var_sheet_second->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_consigned_entity']));
								$var_sheet_second->setCellValue('I' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_account_type']));
								$var_sheet_second->setCellValue('J' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_account_number']));
								$var_sheet_second->setCellValue('K' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_value_unique']));
								$var_sheet_second->setCellValue('L' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_closed_value']));
								$var_sheet_second->setCellValue('M' . $i, html_entity_decode($value['lbl_azp_report_consignment_s_notary']));
								$var_sheet_second->setCellValue('N' . $i, html_entity_decode($value['lbl_azp_report_consignment_s_city']));
								$var_sheet_second->setCellValue('O' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_consignment_item']));
								$var_sheet_second->setCellValue('P' . $i, html_entity_decode($value['lbl_azp_report_consignment_t_honorary']));
								# Incrementar valores
								$i++;
							}
						}
						#-------------------------------------------------------------------------#
						# Escribir valores sobre las celdas
						$var_writer = new Xlsx($var_spreadsheet);
						$var_writer->save($var_file_final);
						$var_folder = opendir($var_file_route);
						# Recorrer datos del archivo para validacion
						while ($var_element = readdir($var_folder)) {
							if (!is_dir($var_file_route . $var_element)) {
								$var_extension = pathinfo($var_element, PATHINFO_EXTENSION);
								$var_extension = strtolower($var_extension);
							}
						}
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
						echo $var_file_final;
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