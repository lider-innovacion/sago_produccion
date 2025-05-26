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
	class azpfctsatisfactionController extends Controllers {
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
			$var_m_azp_fct_satisfaction = new m_azp_fct_satisfactionModel;
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
								$var_m_azp_fct_satisfaction->sql_controller_delete();
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_fct_satisfaction->sql_azp_fct_satisfaction_delete();
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
							echo $this->template->render('backend/inward/azp_fct_satisfaction', array(
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
								$var_m_azp_fct_satisfaction->sql_controller_remove();
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_fct_satisfaction->sql_azp_fct_satisfaction_remove();
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
								$var_m_azp_fct_satisfaction->sql_controller_restore();
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_fct_satisfaction->sql_azp_fct_satisfaction_restore();
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
					case 'xlsxcertificate':
						$var_module = $_GET['field_module'];
						# Instanciando clases del modelo
						$var_spreadsheet = new Spreadsheet();
						#-------------------------------------------------------------------------#
						# Control de validacion de datos y Plantilla del archivo con su extension
						$var_template = 'systemfiles/filesimport/facturation/Formato Reembolsos Certificados.xlsx';
						#-------------------------------------------------------------------------#
						$var_spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($var_template);
						#-------------------------------------------------------------------------#
						# Ruta principal de la carpeta
						$var_ec_route = 'systemfiles/filesproject/';
						# Ruta de la carpeta principal
						$var_ec_folder = 'azp_fct_satisfaction' . '/';
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
						$var_spreadsheet->setActiveSheetIndex(0);
						$var_one = $var_spreadsheet->getActiveSheet()->setTitle('Si Reembolsables');
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_azp_fct_satisfaction_xlsx_ct('SI', $var_module);
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql) { $i = 2; $var_acount = 0;
							# Recorrer datos de la base
							foreach ($var_sql as $key => $value) { $var_item = $var_acount += 1;
								# Asignar valores a las celdas de excel
								$var_one->setCellValue('A' . $i, html_entity_decode($value['lbl_azp_crt_bank_t_name']));
								$var_one->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_request_nro']));
								$var_one->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_request_date']));
								$var_one->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_date_delivery']));
								$var_one->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_identification']));
								$var_one->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_full_name']));
								$var_one->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_nro_oblitation']));
								$var_one->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_request_id']));
								$var_one->setCellValue('I' . $i, html_entity_decode($value['lbl_azp_crt_request_type_t_name']));
								$var_one->setCellValue('J' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_plaque_enrollment']));
								$var_one->setCellValue('K' . $i, html_entity_decode($value['lbl_azp_crt_city_t_name']));
								$var_one->setCellValue('L' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_applicant_entity']));
								$var_one->setCellValue('M' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_bilable']));
								$var_one->setCellValue('N' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_provider_name']));
								$var_one->setCellValue('O' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_rcb_nro_receipt']));
								$var_one->setCellValue('P' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_fct_service']));
								$var_one->setCellValue('Q' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_rcb_amount']));
								# Incrementar valores
								$i++;
							}
						}
						#-------------------------------------------------------------------------#
						$var_spreadsheet->setActiveSheetIndex(1);
						$var_second = $var_spreadsheet->getActiveSheet()->setTitle('No Reembolsables');
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_azp_fct_satisfaction_xlsx_ct('', $var_module);
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql) { $i = 2; $var_acount = 0;
							# Recorrer datos de la base
							foreach ($var_sql as $key => $value) { $var_item = $var_acount += 1;
								# Asignar valores a las celdas de excel
								$var_second->setCellValue('A' . $i, html_entity_decode($value['lbl_azp_crt_bank_t_name']));
								$var_second->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_request_nro']));
								$var_second->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_request_date']));
								$var_second->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_date_delivery']));
								$var_second->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_identification']));
								$var_second->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_full_name']));
								$var_second->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_nro_oblitation']));
								$var_second->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_request_id']));
								$var_second->setCellValue('I' . $i, html_entity_decode($value['lbl_azp_crt_request_type_t_name']));
								$var_second->setCellValue('J' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_plaque_enrollment']));
								$var_second->setCellValue('K' . $i, html_entity_decode($value['lbl_azp_crt_city_t_name']));
								$var_second->setCellValue('L' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_applicant_entity']));
								$var_second->setCellValue('M' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_bilable']));
								$var_second->setCellValue('N' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_provider_name']));
								$var_second->setCellValue('O' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_rcb_nro_receipt']));
								$var_second->setCellValue('P' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_fct_service']));
								$var_second->setCellValue('Q' . $i, html_entity_decode($value['lbl_azp_crt_request_data_t_rcb_amount']));
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
					case 'xlsxinvestigation':
						$var_module = $_GET['field_module'];
						# Instanciando clases del modelo
						$var_spreadsheet = new Spreadsheet();
						#-------------------------------------------------------------------------#
						# Control de validacion de datos y Plantilla del archivo con su extension
						$var_template = 'systemfiles/filesimport/facturation/Formato Reembolsos Investigacion.xlsx';
						#-------------------------------------------------------------------------#
						$var_spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($var_template);
						#-------------------------------------------------------------------------#
						# Ruta principal de la carpeta
						$var_ec_route = 'systemfiles/filesproject/';
						# Ruta de la carpeta principal
						$var_ec_folder = 'azp_fct_satisfaction' . '/';
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
						# Control de validacion de datos
						if ($var_module == 'Camaras') {
							$var_spreadsheet->setActiveSheetIndex(0);
							$var_one = $var_spreadsheet->getActiveSheet()->setTitle('Si Reembolsables');
							#-------------------------------------------------------------------------#
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_sql = $var_m_azp_fct_satisfaction->sql_azp_fct_satisfaction_xlsx_it('SI', $var_module);
							# Validar si la variable es correcta y no falsa
							if (false != $var_sql) { $i = 2; $var_acount = 0;
								# Recorrer datos de la base
								foreach ($var_sql as $key => $value) { $var_item = $var_acount += 1;
									# Asignar valores a las celdas de excel
									$var_one->setCellValue('A' . $i, html_entity_decode($var_item));
									$var_one->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_fct_client_t_name']));
									$var_one->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_code_research']));
									$var_one->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_arrival']));
									$var_one->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_general']));
									$var_one->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_identification']));
									$var_one->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_full_name']));
									$var_one->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_ibn_data_main_t_nro_obligation']));
									$var_one->setCellValue('I' . $i, html_entity_decode($value['lbl_azp_ibn_data_main_t_code']));
									$var_one->setCellValue('J' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_identification']));
									$var_one->setCellValue('K' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_full_name']));
									$var_one->setCellValue('L' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_city']));
									$var_one->setCellValue('M' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_consecutive']));
									$var_one->setCellValue('N' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_nro_registration']));
									$var_one->setCellValue('O' . $i, html_entity_decode($value['lbl_azp_fct_satisfaction_t_module']));
									$var_one->setCellValue('P' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_st_returnable']));
									$var_one->setCellValue('Q' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_st_receipt']));
									$var_one->setCellValue('R' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_st_value']));
									# Incrementar valores
									$i++;
								}
							}
							#-------------------------------------------------------------------------#
							$var_spreadsheet->setActiveSheetIndex(1);
							$var_second = $var_spreadsheet->getActiveSheet()->setTitle('No Reembolsables');
							#-------------------------------------------------------------------------#
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_sql = $var_m_azp_fct_satisfaction->sql_azp_fct_satisfaction_xlsx_it('NO', $var_module);
							# Validar si la variable es correcta y no falsa
							if (false != $var_sql) { $i = 2; $var_acount = 0;
								# Recorrer datos de la base
								foreach ($var_sql as $key => $value) { $var_item = $var_acount += 1;
									# Asignar valores a las celdas de excel
									$var_second->setCellValue('A' . $i, html_entity_decode($var_item));
									$var_second->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_fct_client_t_name']));
									$var_second->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_code_research']));
									$var_second->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_arrival']));
									$var_second->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_general']));
									$var_second->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_identification']));
									$var_second->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_full_name']));
									$var_second->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_ibn_data_main_t_nro_obligation']));
									$var_second->setCellValue('I' . $i, html_entity_decode($value['lbl_azp_ibn_data_main_t_code']));
									$var_second->setCellValue('J' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_identification']));
									$var_second->setCellValue('K' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_full_name']));
									$var_second->setCellValue('L' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_city']));
									$var_second->setCellValue('M' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_consecutive']));
									$var_second->setCellValue('N' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_nro_registration']));
									$var_second->setCellValue('O' . $i, html_entity_decode($value['lbl_azp_fct_satisfaction_t_module']));
									$var_second->setCellValue('P' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_st_returnable']));
									$var_second->setCellValue('Q' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_st_receipt']));
									$var_second->setCellValue('R' . $i, html_entity_decode($value['lbl_azp_ibn_camera_t_st_value']));
									# Incrementar valores
									$i++;
								}
							}
						}
						#-------------------------------------------------------------------------#
						# Control de validacion de datos
						if ($var_module == 'Inmuebles') {
							$var_spreadsheet->setActiveSheetIndex(0);
							$var_one = $var_spreadsheet->getActiveSheet()->setTitle('Si Reembolsables');
							#-------------------------------------------------------------------------#
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_sql = $var_m_azp_fct_satisfaction->sql_azp_fct_satisfaction_xlsx_it('SI', $var_module);
							# Validar si la variable es correcta y no falsa
							if (false != $var_sql) { $i = 2; $var_acount = 0;
								# Recorrer datos de la base
								foreach ($var_sql as $key => $value) { $var_item = $var_acount += 1;
									# Asignar valores a las celdas de excel
									$var_one->setCellValue('A' . $i, html_entity_decode($var_item));
									$var_one->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_fct_client_t_name']));
									$var_one->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_code_research']));
									$var_one->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_arrival']));
									$var_one->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_general']));
									$var_one->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_identification']));
									$var_one->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_full_name']));
									$var_one->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_ibn_data_main_t_nro_obligation']));
									$var_one->setCellValue('I' . $i, html_entity_decode($value['lbl_azp_ibn_data_main_t_code']));
									$var_one->setCellValue('J' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_identification']));
									$var_one->setCellValue('K' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_full_name']));
									$var_one->setCellValue('L' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_nro_registration']));
									$var_one->setCellValue('M' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_consecutive']));
									$var_one->setCellValue('N' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_nro_registration']));
									$var_one->setCellValue('O' . $i, html_entity_decode($value['lbl_azp_fct_satisfaction_t_module']));
									$var_one->setCellValue('P' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_st_returnable']));
									$var_one->setCellValue('Q' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_st_receipt']));
									$var_one->setCellValue('R' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_st_value']));
									# Incrementar valores
									$i++;
								}
							}
							#-------------------------------------------------------------------------#
							$var_spreadsheet->setActiveSheetIndex(1);
							$var_second = $var_spreadsheet->getActiveSheet()->setTitle('No Reembolsables');
							#-------------------------------------------------------------------------#
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_sql = $var_m_azp_fct_satisfaction->sql_azp_fct_satisfaction_xlsx_it('NO', $var_module);
							# Validar si la variable es correcta y no falsa
							if (false != $var_sql) { $i = 2; $var_acount = 0;
								# Recorrer datos de la base
								foreach ($var_sql as $key => $value) { $var_item = $var_acount += 1;
									# Asignar valores a las celdas de excel
									$var_second->setCellValue('A' . $i, html_entity_decode($var_item));
									$var_second->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_fct_client_t_name']));
									$var_second->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_code_research']));
									$var_second->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_arrival']));
									$var_second->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_general']));
									$var_second->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_identification']));
									$var_second->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_full_name']));
									$var_second->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_ibn_data_main_t_nro_obligation']));
									$var_second->setCellValue('I' . $i, html_entity_decode($value['lbl_azp_ibn_data_main_t_code']));
									$var_second->setCellValue('J' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_identification']));
									$var_second->setCellValue('K' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_full_name']));
									$var_second->setCellValue('L' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_nro_registration']));
									$var_second->setCellValue('M' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_consecutive']));
									$var_second->setCellValue('N' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_nro_registration']));
									$var_second->setCellValue('O' . $i, html_entity_decode($value['lbl_azp_fct_satisfaction_t_module']));
									$var_second->setCellValue('P' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_st_returnable']));
									$var_second->setCellValue('Q' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_st_receipt']));
									$var_second->setCellValue('R' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_st_value']));
									# Incrementar valores
									$i++;
								}
							}
						}
						#-------------------------------------------------------------------------#
						# Control de validacion de datos
						if ($var_module == 'Vehiculos') {
							$var_spreadsheet->setActiveSheetIndex(0);
							$var_one = $var_spreadsheet->getActiveSheet()->setTitle('Si Reembolsables');
							#-------------------------------------------------------------------------#
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_sql = $var_m_azp_fct_satisfaction->sql_azp_fct_satisfaction_xlsx_it('SI', $var_module);
							# Validar si la variable es correcta y no falsa
							if (false != $var_sql) { $i = 2; $var_acount = 0;
								# Recorrer datos de la base
								foreach ($var_sql as $key => $value) { $var_item = $var_acount += 1;
									# Asignar valores a las celdas de excel
									$var_one->setCellValue('A' . $i, html_entity_decode($var_item));
									$var_one->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_fct_client_t_name']));
									$var_one->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_code_research']));
									$var_one->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_arrival']));
									$var_one->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_general']));
									$var_one->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_identification']));
									$var_one->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_full_name']));
									$var_one->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_ibn_data_main_t_nro_obligation']));
									$var_one->setCellValue('I' . $i, html_entity_decode($value['lbl_azp_ibn_data_main_t_code']));
									$var_one->setCellValue('J' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_identification']));
									$var_one->setCellValue('K' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_full_name']));
									$var_one->setCellValue('L' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_city']));
									$var_one->setCellValue('M' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_consecutive']));
									$var_one->setCellValue('N' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_city']));
									$var_one->setCellValue('O' . $i, html_entity_decode($value['lbl_azp_fct_satisfaction_t_module']));
									$var_one->setCellValue('P' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_st_returnable']));
									$var_one->setCellValue('Q' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_st_receipt']));
									$var_one->setCellValue('R' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_st_value']));
									# Incrementar valores
									$i++;
								}
							}
							#-------------------------------------------------------------------------#
							$var_spreadsheet->setActiveSheetIndex(1);
							$var_second = $var_spreadsheet->getActiveSheet()->setTitle('No Reembolsables');
							#-------------------------------------------------------------------------#
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_sql = $var_m_azp_fct_satisfaction->sql_azp_fct_satisfaction_xlsx_it('NO', $var_module);
							# Validar si la variable es correcta y no falsa
							if (false != $var_sql) { $i = 2; $var_acount = 0;
								# Recorrer datos de la base
								foreach ($var_sql as $key => $value) { $var_item = $var_acount += 1;
									# Asignar valores a las celdas de excel
									$var_second->setCellValue('A' . $i, html_entity_decode($var_item));
									$var_second->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_fct_client_t_name']));
									$var_second->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_code_research']));
									$var_second->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_arrival']));
									$var_second->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_general']));
									$var_second->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_identification']));
									$var_second->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_full_name']));
									$var_second->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_ibn_data_main_t_nro_obligation']));
									$var_second->setCellValue('I' . $i, html_entity_decode($value['lbl_azp_ibn_data_main_t_code']));
									$var_second->setCellValue('J' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_identification']));
									$var_second->setCellValue('K' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_full_name']));
									$var_second->setCellValue('L' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_city']));
									$var_second->setCellValue('M' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_consecutive']));
									$var_second->setCellValue('N' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_city']));
									$var_second->setCellValue('O' . $i, html_entity_decode($value['lbl_azp_fct_satisfaction_t_module']));
									$var_second->setCellValue('P' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_st_returnable']));
									$var_second->setCellValue('Q' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_st_receipt']));
									$var_second->setCellValue('R' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_st_value']));
									# Incrementar valores
									$i++;
								}
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
					case 'consolidated':
						$var_id = $_GET['field_check'];
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidated_investigation_all();
						#-------------------------------------------------------------------------#
						# Instanciando clases del modelo
						$var_spreadsheet = new Spreadsheet();
						# Plantilla del archivo con su extension
						//$var_template = str_replace('../', '', $var_file_route) . $var_file_folder . $var_file_document;
						$var_template = 'systemfiles/filesimport/facturation/Formato Reembolsos Modulos.xlsx';
						#-------------------------------------------------------------------------#
						$var_spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($var_template);
						//$var_sheet = $var_spreadsheet->getActiveSheet()->setTitle('FORMATO');
						//$var_second = $var_spreadsheet->getActiveSheet()->setTitle('ICS');
						#-------------------------------------------------------------------------#
						# Ruta principal de la carpeta
						$var_ec_route = 'systemfiles/filesproject/';
						# Ruta de la carpeta principal
						$var_ec_folder = 'azp_fct_satisfaction' . '/';
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
						$var_sheet_one = $var_spreadsheet->getActiveSheet()->setTitle('Consolidado');
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidated($var_id);
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql) { $i = 2;
							# Recorrer datos de la base
							foreach ($var_sql as $key => $value) {
								# Asignar valores a las celdas de excel
								$var_sheet_one->setCellValue('A' . $i, html_entity_decode($value['lbl_azp_fct_service_t_name']));
								$var_sheet_one->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_fct_satisfaction_t_module']));
								$var_sheet_one->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_fct_client_t_name']));
								$var_sheet_one->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_fct_satisfaction_t_request']));
								$var_sheet_one->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_fct_satisfaction_t_value']));
								# Incrementar valores
								$i++;
							}
						}
						#-------------------------------------------------------------------------#
						//$var_spreadsheet->createSheet();
						$var_spreadsheet->setActiveSheetIndex(1);
						$var_sheet_second = $var_spreadsheet->getActiveSheet()->setTitle('Certificados');
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidated_certificate($var_id);
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql) { $i = 2;
							# Recorrer datos de la base
							foreach ($var_sql as $key => $value) {
								# Asignar valores a las celdas de excel
								$var_sheet_second->setCellValue('A' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_client']));
								$var_sheet_second->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_request_nro']));
								$var_sheet_second->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_request_date']));
								$var_sheet_second->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_request_send']));
								$var_sheet_second->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_identification']));
								$var_sheet_second->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_full_name']));
								$var_sheet_second->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_obligation']));
								$var_sheet_second->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_id_ics']));
								$var_sheet_second->setCellValue('I' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_certificate']));
								$var_sheet_second->setCellValue('J' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_enrollment']));
								$var_sheet_second->setCellValue('K' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_municipality']));
								$var_sheet_second->setCellValue('L' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_applicant']));
								$var_sheet_second->setCellValue('M' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_bilable']));
								$var_sheet_second->setCellValue('N' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_refundable']));
								$var_sheet_second->setCellValue('O' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_supplier']));
								$var_sheet_second->setCellValue('P' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_receipt']));
								$var_sheet_second->setCellValue('Q' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_service']));
								$var_sheet_second->setCellValue('R' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_value']));
								# Incrementar valores
								$i++;
							}
						}
						$var_search = array('zzzeliminar', 'eliminar_', 'eliminar');
						$var_replace = array('', '', '');
						#-------------------------------------------------------------------------#
						//$var_spreadsheet->createSheet();
						$var_spreadsheet->setActiveSheetIndex(2);
						$var_sheet_third = $var_spreadsheet->getActiveSheet()->setTitle('Defuncion');
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidated_defunction($var_id);
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql) { $i = 2;
							# Recorrer datos de la base
							foreach ($var_sql as $key => $value) {
								# Asignar valores a las celdas de excel
								$var_sheet_third->setCellValue('A' . $i, html_entity_decode(str_replace('99999', '', $value['lbl_azp_fct_sdefunction_t_item'])));
								$var_sheet_third->setCellValue('B' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_client'])));
								$var_sheet_third->setCellValue('C' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_request_nro'])));
								$var_sheet_third->setCellValue('D' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_identification'])));
								$var_sheet_third->setCellValue('E' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_value'])));
								$var_sheet_third->setCellValue('F' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_consignment'])));
								$var_sheet_third->setCellValue('G' . $i, html_entity_decode(str_replace($var_search, $var_replace, str_replace(',', '_', $value['lbl_azp_fct_sdefunction_t_con_full_name']))));
								$var_sheet_third->setCellValue('H' . $i, html_entity_decode(str_replace($var_search, $var_replace, str_replace(',', '_', $value['lbl_azp_fct_sdefunction_t_con_identification']))));
								$var_sheet_third->setCellValue('I' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_con_entity'])));
								$var_sheet_third->setCellValue('J' . $i, html_entity_decode(str_replace($var_search, $var_replace, str_replace(',', '_', $value['lbl_azp_fct_sdefunction_t_receipt']))));
								$var_sheet_third->setCellValue('K' . $i, html_entity_decode(str_replace($var_search, $var_replace, str_replace(',', '_', $value['lbl_azp_fct_sdefunction_t_date']))));
								$var_sheet_third->setCellValue('L' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_notary'])));
								$var_sheet_third->setCellValue('M' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_municipality'])));
								# Incrementar valores
								$i++;
							}
						}
						#-------------------------------------------------------------------------#
						//$var_spreadsheet->createSheet();
						$var_spreadsheet->setActiveSheetIndex(3);
						$var_sheet_four = $var_spreadsheet->getActiveSheet()->setTitle('Investigacion');
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidated_investigation_cam($var_id);
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidated_investigation_pro($var_id);
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidated_investigation_veh($var_id);
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidated_investigation_bas();
						#-------------------------------------------------------------------------#
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql) { $i = 2;
							# Recorrer datos de la base
							foreach ($var_sql as $key => $value) {
								# Asignar valores a las celdas de excel
								$var_sheet_four->setCellValue('A' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_item']));
								$var_sheet_four->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_client']));
								$var_sheet_four->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_request_nro']));
								$var_sheet_four->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_request_date']));
								$var_sheet_four->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_request_send']));
								$var_sheet_four->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_identification']));
								$var_sheet_four->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_full_name']));
								$var_sheet_four->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_obligation']));
								$var_sheet_four->setCellValue('I' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_id_client']));
								$var_sheet_four->setCellValue('J' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_identification']));
								$var_sheet_four->setCellValue('K' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_full_name']));
								$var_sheet_four->setCellValue('L' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_municipality']));
								$var_sheet_four->setCellValue('M' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_consecutive']));
								$var_sheet_four->setCellValue('N' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_enrollment']));
								$var_sheet_four->setCellValue('O' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_certificate']));
								$var_sheet_four->setCellValue('P' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_quality']));
								$var_sheet_four->setCellValue('Q' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_receipt']));
								$var_sheet_four->setCellValue('R' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_value']));
								$var_sheet_four->setCellValue('S' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_state']));
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
					case 'consolidatud':
						$var_id = $_GET['field_check'];
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidatud_investigation_all();
						#-------------------------------------------------------------------------#
						# Instanciando clases del modelo
						$var_spreadsheet = new Spreadsheet();
						# Plantilla del archivo con su extension
						//$var_template = str_replace('../', '', $var_file_route) . $var_file_folder . $var_file_document;
						$var_template = 'systemfiles/filesimport/facturation/Formato Reembolsos Actualizado.xlsx';
						#-------------------------------------------------------------------------#
						$var_spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($var_template);
						//$var_sheet = $var_spreadsheet->getActiveSheet()->setTitle('FORMATO');
						//$var_second = $var_spreadsheet->getActiveSheet()->setTitle('ICS');
						#-------------------------------------------------------------------------#
						# Ruta principal de la carpeta
						$var_ec_route = 'systemfiles/filesproject/';
						# Ruta de la carpeta principal
						$var_ec_folder = 'azp_fct_satisfaction' . '/';
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
						$var_sheet_one = $var_spreadsheet->getActiveSheet()->setTitle('Consolidado');
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidatud($var_id);
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql) { $i = 2;
							# Recorrer datos de la base
							foreach ($var_sql as $key => $value) {
								# Asignar valores a las celdas de excel
								$var_sheet_one->setCellValue('A' . $i, html_entity_decode($value['lbl_azp_fct_satisfaction_t_date_send']));
								$var_sheet_one->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_fct_service_t_name']));
								$var_sheet_one->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_fct_satisfaction_t_module']));
								$var_sheet_one->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_fct_satisfaction_t_value']));
								# Incrementar valores
								$i++;
							}
						}
						#-------------------------------------------------------------------------#
						//$var_spreadsheet->createSheet();
						$var_spreadsheet->setActiveSheetIndex(1);
						$var_sheet_second = $var_spreadsheet->getActiveSheet()->setTitle('Certificados');
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidatud_certificate($var_id);
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql) { $i = 2;
							# Recorrer datos de la base
							foreach ($var_sql as $key => $value) {
								# Asignar valores a las celdas de excel
								$var_sheet_second->setCellValue('A' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_client']));
								$var_sheet_second->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_request_nro']));
								$var_sheet_second->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_request_date']));
								$var_sheet_second->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_request_send']));
								$var_sheet_second->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_identification']));
								$var_sheet_second->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_full_name']));
								$var_sheet_second->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_obligation']));
								$var_sheet_second->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_id_ics']));
								$var_sheet_second->setCellValue('I' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_certificate']));
								$var_sheet_second->setCellValue('J' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_enrollment']));
								$var_sheet_second->setCellValue('K' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_municipality']));
								$var_sheet_second->setCellValue('L' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_applicant']));
								$var_sheet_second->setCellValue('M' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_bilable']));
								$var_sheet_second->setCellValue('N' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_refundable']));
								$var_sheet_second->setCellValue('O' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_supplier']));
								$var_sheet_second->setCellValue('P' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_receipt']));
								$var_sheet_second->setCellValue('Q' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_service']));
								$var_sheet_second->setCellValue('R' . $i, html_entity_decode($value['lbl_azp_fct_scertificate_t_value']));
								# Incrementar valores
								$i++;
							}
						}
						$var_search = array('zzzeliminar', 'eliminar_', 'eliminar');
						$var_replace = array('', '', '');
						#-------------------------------------------------------------------------#
						//$var_spreadsheet->createSheet();
						$var_spreadsheet->setActiveSheetIndex(2);
						$var_sheet_third = $var_spreadsheet->getActiveSheet()->setTitle('Defuncion');
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidatud_defunction($var_id);
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql) { $i = 2;
							# Recorrer datos de la base
							foreach ($var_sql as $key => $value) {
								# Asignar valores a las celdas de excel
								$var_sheet_third->setCellValue('A' . $i, html_entity_decode(str_replace('99999', '', $value['lbl_azp_fct_sdefunction_t_item'])));
								$var_sheet_third->setCellValue('B' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_client'])));
								$var_sheet_third->setCellValue('C' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_request_nro'])));
								$var_sheet_third->setCellValue('D' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_identification'])));
								$var_sheet_third->setCellValue('E' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_value'])));
								$var_sheet_third->setCellValue('F' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_consignment'])));
								$var_sheet_third->setCellValue('G' . $i, html_entity_decode(str_replace($var_search, $var_replace, str_replace(',', '_', $value['lbl_azp_fct_sdefunction_t_con_full_name']))));
								$var_sheet_third->setCellValue('H' . $i, html_entity_decode(str_replace($var_search, $var_replace, str_replace(',', '_', $value['lbl_azp_fct_sdefunction_t_con_identification']))));
								$var_sheet_third->setCellValue('I' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_con_entity'])));
								$var_sheet_third->setCellValue('J' . $i, html_entity_decode(str_replace($var_search, $var_replace, str_replace(',', '_', $value['lbl_azp_fct_sdefunction_t_receipt']))));
								$var_sheet_third->setCellValue('K' . $i, html_entity_decode(str_replace($var_search, $var_replace, str_replace(',', '_', $value['lbl_azp_fct_sdefunction_t_date']))));
								$var_sheet_third->setCellValue('L' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_notary'])));
								$var_sheet_third->setCellValue('M' . $i, html_entity_decode(str_replace($var_search, $var_replace, $value['lbl_azp_fct_sdefunction_t_municipality'])));
								# Incrementar valores
								$i++;
							}
						}
						#-------------------------------------------------------------------------#
						//$var_spreadsheet->createSheet();
						$var_spreadsheet->setActiveSheetIndex(3);
						$var_sheet_four = $var_spreadsheet->getActiveSheet()->setTitle('Investigacion');
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidatud_investigation_cam($var_id);
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidatud_investigation_pro($var_id);
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidatud_investigation_veh($var_id);
						#-------------------------------------------------------------------------#
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_azp_fct_satisfaction->sql_controller_consolidatud_investigation_bas();
						#-------------------------------------------------------------------------#
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql) { $i = 2;
							# Recorrer datos de la base
							foreach ($var_sql as $key => $value) {
								# Asignar valores a las celdas de excel
								$var_sheet_four->setCellValue('A' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_item']));
								$var_sheet_four->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_client']));
								$var_sheet_four->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_request_nro']));
								$var_sheet_four->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_request_date']));
								$var_sheet_four->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_request_send']));
								$var_sheet_four->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_identification']));
								$var_sheet_four->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_full_name']));
								$var_sheet_four->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_obligation']));
								$var_sheet_four->setCellValue('I' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_id_client']));
								$var_sheet_four->setCellValue('J' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_identification']));
								$var_sheet_four->setCellValue('K' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_full_name']));
								$var_sheet_four->setCellValue('L' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_municipality']));
								$var_sheet_four->setCellValue('M' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_consecutive']));
								$var_sheet_four->setCellValue('N' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_enrollment']));
								$var_sheet_four->setCellValue('O' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_certificate']));
								$var_sheet_four->setCellValue('P' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_quality']));
								$var_sheet_four->setCellValue('Q' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_receipt']));
								$var_sheet_four->setCellValue('R' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_value']));
								$var_sheet_four->setCellValue('S' . $i, html_entity_decode($value['lbl_azp_fct_sinvestigation_t_state']));
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