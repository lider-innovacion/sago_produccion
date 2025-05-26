<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class azpcrtrequesttypeController extends Controllers {
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
			$var_m_azp_crt_request_type = new m_azp_crt_request_typeModel;
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
								$var_m_azp_crt_request_type->sql_controller_delete();
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_crt_request_type->sql_azp_crt_request_type_delete();
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
							echo $this->template->render('backend/inward/azp_crt_request_type', array(
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
								$var_m_azp_crt_request_type->sql_controller_remove();
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_crt_request_type->sql_azp_crt_request_type_remove();
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
								$var_m_azp_crt_request_type->sql_controller_restore();
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_m_azp_crt_request_type->sql_azp_crt_request_type_restore();
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