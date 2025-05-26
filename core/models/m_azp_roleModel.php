<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_roleModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_ap_access() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_access_permits." . d_azp_access_permits_id_azp_access_permits . " AS 'lbl_azp_access_permits_id_azp_access_permits',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_access_permits." . d_azp_access_permits_m_date_created . " AS 'lbl_azp_access_permits_m_date_created',
					tc_azp_access_permits." . d_azp_access_permits_m_date_modified . " AS 'lbl_azp_access_permits_m_date_modified',
					tc_azp_access_permits." . d_azp_access_permits_m_description . " AS 'lbl_azp_access_permits_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_access_type. " . d_azp_access_type_t_name . " AS 'lbl_azp_access_type_t_name',
					tc_azp_application. " . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
					tc_azp_role. " . d_azp_role_t_name . " AS 'lbl_azp_role_t_name'
				FROM " . t_azp_access_permits . " tc_azp_access_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_access_permits." . d_azp_access_permits_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_access_permits." . d_azp_access_permits_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_access_permits." . d_azp_access_permits_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_access_permits." . d_azp_access_permits_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_access_type . " tc_azp_access_type
					ON tc_azp_access_permits. " . d_azp_access_permits_v_id_azp_access_type . "
						= tc_azp_access_type. " . d_azp_access_type_id_azp_access_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_application . " tc_azp_application
					ON tc_azp_access_permits. " . d_azp_access_permits_v_id_azp_application . "
						= tc_azp_application. " . d_azp_application_id_azp_application . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_access_permits. " . d_azp_access_permits_v_id_azp_role . "
						= tc_azp_role. " . d_azp_role_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_access_permits." . d_azp_access_permits_m_deleted . " = '1'
					AND tc_azp_access_permits." . d_azp_access_permits_v_id_azp_role . " = '" . $this->id . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_ap_authorized() {
			# Query Sql: Ejecutar codigo sql en la base de datos
			$var_sql = $this->db->select("*", t_azp_access_permits, d_azp_access_permits_id_azp_access_permits . " = '" . $this->id . "'", "LIMIT 1");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_appl = $value[d_azp_access_permits_v_id_azp_application]; endforeach; } else { $var_appl = 0; }
			# Query Sql: Ejecutar codigo sql en la base de datos
			$var_sql = $this->db->select("*", t_azp_access_permits, d_azp_access_permits_id_azp_access_permits . " = '" . $this->id . "'", "LIMIT 1");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_role = $value[d_azp_access_permits_v_id_azp_role]; endforeach; } else { $var_role = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_authorized_permits." . d_azp_authorized_permits_id_azp_authorized_permits . " AS 'lbl_azp_authorized_permits_id_azp_authorized_permits',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_authorized_permits." . d_azp_authorized_permits_m_date_created . " AS 'lbl_azp_authorized_permits_m_date_created',
					tc_azp_authorized_permits." . d_azp_authorized_permits_m_date_modified . " AS 'lbl_azp_authorized_permits_m_date_modified',
					tc_azp_authorized_permits." . d_azp_authorized_permits_m_description . " AS 'lbl_azp_authorized_permits_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_btn_action . " AS 'lbl_azp_authorized_permits_t_btn_action',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_btn_export . " AS 'lbl_azp_authorized_permits_t_btn_export',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_btn_search . " AS 'lbl_azp_authorized_permits_t_btn_search',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_btn_visible . " AS 'lbl_azp_authorized_permits_t_btn_visible',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_data_by_create . " AS 'lbl_azp_authorized_permits_t_data_by_create',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_data_change . " AS 'lbl_azp_authorized_permits_t_data_change',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_data_eliminate . " AS 'lbl_azp_authorized_permits_t_data_eliminate',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_data_read . " AS 'lbl_azp_authorized_permits_t_data_read',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_data_remove . " AS 'lbl_azp_authorized_permits_t_data_remove',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_menu_value . " AS 'lbl_azp_authorized_permits_t_menu_value',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " AS 'lbl_azp_authorized_permits_t_module_value',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_associate . " AS 'lbl_azp_authorized_permits_t_value_associate',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_change . " AS 'lbl_azp_authorized_permits_t_value_change',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_close . " AS 'lbl_azp_authorized_permits_t_value_close',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_column_toggle . " AS 'lbl_azp_authorized_permits_t_value_column_toggle',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_colvis_column . " AS 'lbl_azp_authorized_permits_t_value_colvis_column',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_colvis_restore . " AS 'lbl_azp_authorized_permits_t_value_colvis_restore',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_copy . " AS 'lbl_azp_authorized_permits_t_value_copy',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_create . " AS 'lbl_azp_authorized_permits_t_value_create',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_csv . " AS 'lbl_azp_authorized_permits_t_value_csv',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_delete . " AS 'lbl_azp_authorized_permits_t_value_delete',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_detail . " AS 'lbl_azp_authorized_permits_t_value_detail',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_email . " AS 'lbl_azp_authorized_permits_t_value_email',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_error . " AS 'lbl_azp_authorized_permits_t_value_error',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_excel . " AS 'lbl_azp_authorized_permits_t_value_excel',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_file . " AS 'lbl_azp_authorized_permits_t_value_file',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_import . " AS 'lbl_azp_authorized_permits_t_value_import',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_page_length . " AS 'lbl_azp_authorized_permits_t_value_page_length',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_pdf . " AS 'lbl_azp_authorized_permits_t_value_pdf',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_print . " AS 'lbl_azp_authorized_permits_t_value_print',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_remove . " AS 'lbl_azp_authorized_permits_t_value_remove',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_report . " AS 'lbl_azp_authorized_permits_t_value_report',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_restore . " AS 'lbl_azp_authorized_permits_t_value_restore',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_sub_menu . " AS 'lbl_azp_authorized_permits_t_value_sub_menu',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_sync . " AS 'lbl_azp_authorized_permits_t_value_sync',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_template . " AS 'lbl_azp_authorized_permits_t_value_template',
					tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_update . " AS 'lbl_azp_authorized_permits_t_value_update',
					tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name'
				FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . "
						= tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_application . " tc_azp_application
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_application . "
						= tc_azp_application." . d_azp_application_id_azp_application . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . "
						= tc_azp_role." . d_azp_role_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = '" . $var_role . "'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_application . " = '" . $var_appl . "'
				ORDER BY tc_azp_menu_crud." . d_azp_menu_crud_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_by_create() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select("*", t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value) :
					$var_level = $value[d_azp_user_m_level];
				endforeach;
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_role." . d_azp_role_id_azp_role . " AS 'lbl_azp_role_id_azp_role',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_role." . d_azp_role_m_date_created . " AS 'lbl_azp_role_m_date_created',
					tc_azp_role." . d_azp_role_m_date_modified . " AS 'lbl_azp_role_m_date_modified',
					tc_azp_role." . d_azp_role_m_description . " AS 'lbl_azp_role_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name',
					tc_azp_platform." . d_azp_platform_t_name . " AS 'lbl_azp_platform_t_name',
					tc_azp_rols." . d_azp_rols_t_name . " AS 'lbl_azp_rols_t_name'
				FROM " . t_azp_role . " tc_azp_role
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_role." . d_azp_role_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_role." . d_azp_role_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_role." . d_azp_role_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_role." . d_azp_role_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_platform . " tc_azp_platform
					ON tc_azp_role." . d_azp_role_v_id_azp_platform . "
						= tc_azp_platform." . d_azp_platform_id_azp_platform . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_rols . " tc_azp_rols
					ON tc_azp_role." . d_azp_role_v_id_azp_rols . "
						= tc_azp_rols." . d_azp_rols_id_azp_rols . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_role." . d_azp_role_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_level . " >= '" . $var_level . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_role." . d_azs_role_id_azs_role . " AS 'lbl_azs_role_id_azs_role',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_role." . d_azs_role_m_date_created . " AS 'lbl_azs_role_m_date_created',
					tc_azs_role." . d_azs_role_m_date_modified . " AS 'lbl_azs_role_m_date_modified',
					tc_azs_role." . d_azs_role_m_description . " AS 'lbl_azs_role_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_role." . d_azs_role_t_name . " AS 'lbl_azs_role_t_name',
					tc_azs_role." . d_azs_role_u_platform . " AS 'lbl_azs_role_u_platform',
					tc_azs_role." . d_azs_role_u_rols . " AS 'lbl_azs_role_u_rols'
				FROM " . t_azs_role . " tc_azs_role
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_role." . d_azs_role_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_role." . d_azs_role_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_role." . d_azs_role_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_role." . d_azs_role_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_role." . d_azs_role_v_id_azp_role . " = '" . $this->id . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_role." . d_azp_role_id_azp_role . " AS 'lbl_azp_role_id_azp_role',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_role." . d_azp_role_m_date_created . " AS 'lbl_azp_role_m_date_created',
					tc_azp_role." . d_azp_role_m_date_modified . " AS 'lbl_azp_role_m_date_modified',
					tc_azp_role." . d_azp_role_m_description . " AS 'lbl_azp_role_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name',
					tc_azp_platform." . d_azp_platform_t_name . " AS 'lbl_azp_platform_t_name',
					tc_azp_rols." . d_azp_rols_t_name . " AS 'lbl_azp_rols_t_name'
				FROM " . t_azp_role . " tc_azp_role
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_role." . d_azp_role_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_role." . d_azp_role_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_role." . d_azp_role_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_role." . d_azp_role_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_platform . " tc_azp_platform
					ON tc_azp_role." . d_azp_role_v_id_azp_platform . "
						= tc_azp_platform." . d_azp_platform_id_azp_platform . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_rols . " tc_azp_rols
					ON tc_azp_role." . d_azp_role_v_id_azp_rols . "
						= tc_azp_rols." . d_azp_rols_id_azp_rols . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_role." . d_azp_role_id_azp_role . " = '" . $this->id . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select("*", t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value) :
					$var_level = $value[d_azp_user_m_level];
				endforeach;
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_role." . d_azp_role_id_azp_role . " AS 'lbl_azp_role_id_azp_role',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_role." . d_azp_role_m_date_created . " AS 'lbl_azp_role_m_date_created',
					tc_azp_role." . d_azp_role_m_date_modified . " AS 'lbl_azp_role_m_date_modified',
					tc_azp_role." . d_azp_role_m_description . " AS 'lbl_azp_role_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name',
					tc_azp_platform." . d_azp_platform_t_name . " AS 'lbl_azp_platform_t_name',
					tc_azp_rols." . d_azp_rols_t_name . " AS 'lbl_azp_rols_t_name'
				FROM " . t_azp_role . " tc_azp_role
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_role." . d_azp_role_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_role." . d_azp_role_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_role." . d_azp_role_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_role." . d_azp_role_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_platform . " tc_azp_platform
					ON tc_azp_role." . d_azp_role_v_id_azp_platform . "
						= tc_azp_platform." . d_azp_platform_id_azp_platform . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_rols . " tc_azp_rols
					ON tc_azp_role." . d_azp_role_v_id_azp_rols . "
						= tc_azp_rols." . d_azp_rols_id_azp_rols . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_role." . d_azp_role_m_deleted . " = '3'
					AND tc_azp_role." . d_azp_role_m_level . " >= '" . $var_level . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select("*", t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value) :
					$var_level = $value[d_azp_user_m_level];
				endforeach;
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_role." . d_azp_role_id_azp_role . " AS 'lbl_azp_role_id_azp_role',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_role." . d_azp_role_m_date_created . " AS 'lbl_azp_role_m_date_created',
					tc_azp_role." . d_azp_role_m_date_modified . " AS 'lbl_azp_role_m_date_modified',
					tc_azp_role." . d_azp_role_m_description . " AS 'lbl_azp_role_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name',
					tc_azp_platform." . d_azp_platform_t_name . " AS 'lbl_azp_platform_t_name',
					tc_azp_rols." . d_azp_rols_t_name . " AS 'lbl_azp_rols_t_name'
				FROM " . t_azp_role . " tc_azp_role
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_role." . d_azp_role_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_role." . d_azp_role_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_role." . d_azp_role_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_role." . d_azp_role_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_platform . " tc_azp_platform
					ON tc_azp_role." . d_azp_role_v_id_azp_platform . "
						= tc_azp_platform." . d_azp_platform_id_azp_platform . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_rols . " tc_azp_rols
					ON tc_azp_role." . d_azp_role_v_id_azp_rols . "
						= tc_azp_rols." . d_azp_rols_id_azp_rols . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_level . " >= '" . $var_level . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select("*", t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value) :
					$var_level = $value[d_azp_user_m_level];
				endforeach;
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_role." . d_azp_role_id_azp_role . " AS 'lbl_azp_role_id_azp_role',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_role." . d_azp_role_m_date_created . " AS 'lbl_azp_role_m_date_created',
					tc_azp_role." . d_azp_role_m_date_modified . " AS 'lbl_azp_role_m_date_modified',
					tc_azp_role." . d_azp_role_m_description . " AS 'lbl_azp_role_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name',
					tc_azp_platform." . d_azp_platform_t_name . " AS 'lbl_azp_platform_t_name',
					tc_azp_rols." . d_azp_rols_t_name . " AS 'lbl_azp_rols_t_name'
				FROM " . t_azp_role . " tc_azp_role
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_role." . d_azp_role_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_role." . d_azp_role_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_role." . d_azp_role_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_role." . d_azp_role_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_platform . " tc_azp_platform
					ON tc_azp_role." . d_azp_role_v_id_azp_platform . "
						= tc_azp_platform." . d_azp_platform_id_azp_platform . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_rols . " tc_azp_rols
					ON tc_azp_role." . d_azp_role_v_id_azp_rols . "
						= tc_azp_rols." . d_azp_rols_id_azp_rols . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_role." . d_azp_role_m_deleted . " = '2'
					AND tc_azp_role." . d_azp_role_m_level . " >= '" . $var_level . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_role." . d_azp_role_id_azp_role . " AS 'lbl_azp_role_id_azp_role',
					tc_azp_role." . d_azp_role_m_by_created . " AS 'lbl_azp_role_m_by_created',
					tc_azp_role." . d_azp_role_m_by_modified . " AS 'lbl_azp_role_m_by_modified',
					tc_azp_role." . d_azp_role_m_date_created . " AS 'lbl_azp_role_m_date_created',
					tc_azp_role." . d_azp_role_m_date_modified . " AS 'lbl_azp_role_m_date_modified',
					tc_azp_role." . d_azp_role_m_description . " AS 'lbl_azp_role_m_description',
					tc_azp_role." . d_azp_role_m_level . " AS 'lbl_azp_role_m_level',
					tc_azp_role." . d_azp_role_m_status . " AS 'lbl_azp_role_m_status',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name',
					tc_azp_role." . d_azp_role_v_id_azp_platform . " AS 'lbl_azp_role_v_id_azp_platform',
					tc_azp_role." . d_azp_role_v_id_azp_rols . " AS 'lbl_azp_role_v_id_azp_rols'
				FROM " . t_azp_role . " tc_azp_role
				-- ---------------------------------------------------------------
				WHERE tc_azp_role." . d_azp_role_id_azp_role . " = '" . $this->id . "'
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_role_delete(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_delete'])) { throw new Exception('El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_delete']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_id) || $empty_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de id es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select("*", t_azp_role, d_azp_role_id_azp_role . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('El registro que está eliminando no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select("*", t_azp_role, d_azp_role_id_azp_role . " = '" . $empty_id . "' AND " . d_azp_role_m_deleted . " = '3'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_id) { foreach ($sql_id as $key => $value) : throw new Exception('El registro que está procesando ya se encuentra eliminado.'); endforeach; }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select("*", t_azp_role,
					d_azp_role_id_azp_role . " = '" . $empty_id . "' AND " .
					d_azp_role_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_role_m_level . " = '1'"
				);
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select("*", t_azp_role,
					d_azp_role_id_azp_role . " = '" . $empty_id . "' AND " .
					d_azp_role_m_level . " = '2'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) { throw new Exception('No tienes suficientes permisos superiores para actualizar el registro.'); }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 0, 'message' => $e->getMessage(),);
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_role_delete(array $data) : array {
			# Validar el envio de informacion de los formularios
			$var_error = $this->error_sql_azp_role_delete($data);
			# Validar errores de los datos recibidos del formulario
			if (!is_bool($var_error)) { return $var_error; }
			# Control de validacion de sesion de usuario
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => 'Sesión caducada, vuelve a ingresar. <a href="' . URL . 'login/?field_id=session">Clic Aqui</a>.',);
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_delete']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_role_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_role, $var_array, d_azp_role_id_azp_role . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => 'Registro eliminado correctamente.',);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_mvp_credit_expense_enforce(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_as_realm'])) { throw new Exception('El campo de base datos esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_realm = $data['field_as_realm'];
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				# Recorrer los datos uno por uno segun los seleccionados
				for ($i = 0; $i < count($empty_realm); $i++) {
					# Validar caracteres en el valor capturado
					$var_realm = $this->db->scape($empty_realm[$i]);
					# Control de validacion para cumplir el ciclo de la condicion
					if ($var_realm == '') {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('Todos los campos de base de datos son obligatorios.');
					}
				}
				#-------------------------------------------------------------------------#
				# Valores del array vacios
				$var_array = array();
				# Convertir elementos de un array en string
				$var_implode = implode(",", $empty_realm);
				# Separar la cadena usando un delimitador
				$var_explode = explode(",", $var_implode);
				#-------------------------------------------------------------------------#
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_explode as $key => $value) {
					# Control de validacion para cumplir el ciclo de la condicion
					if (!array_key_exists($value, $var_array)) {
						# Asignacion de cantidades encontradas
						$var_suma = $var_array[$value] = 1;
					} else {
						# Asignacion de cantidades encontradas
						$var_suma = $var_array[$value] += 1;
					}
					# Control de validacion para cumplir el ciclo de la condicion
					if ($var_suma > 1) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('No se pueden seleccionar más de un campo igual en otros campos.');
					}
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 0, 'message' => $e->getMessage(),);
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_mvp_credit_expense_enforce(array $data) : array {
			# Validar el envio de informacion de los formularios
			$var_error = $this->error_sql_mvp_credit_expense_enforce($data);
			# Validar errores de los datos recibidos del formulario
			if (!is_bool($var_error)) { return $var_error; }
			# Control de validacion de sesion de usuario
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => 'Sesión caducada, vuelve a ingresar. <a href="' . URL . 'login/?field_id=session">Clic Aqui</a>.',);
			} else {
				#-------------------------------------------------------------------------#
				# Valores del array vacios
				$var_realm = array();
				# Valores del array vacios
				$var_excel = array();
				# Valores del array vacios
				$var_column = array();
				#-------------------------------------------------------------------------#
				# Asignacion de valores a nuevas variables
				$empty_realm = $data['field_as_realm'];
				#-------------------------------------------------------------------------#
				# Recorrer los datos uno por uno segun los seleccionados
				for ($i = 0; $i < count($empty_realm); $i++) { $var_realm[] = $this->db->scape($empty_realm[$i]); }
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("MIN(" . d_azp_import_data_id_azp_import_data . ") AS 'lbl_min'", t_azp_import_data,
					d_azp_import_data_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_import_data_m_temp . " = '2' AND " . d_azp_import_data_v_id_azp_import_time . " = '1'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_id = $value['lbl_min']; endforeach; }
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_import_data_v_id_azp_import_time => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_import_data, $var_array, d_azp_import_data_id_azp_import_data . " = '" . $var_id . "'");
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("*", t_azp_import_data, d_azp_import_data_id_azp_import_data . " = '" . $var_id . "' AND " . d_azp_import_data_w_document . " != ''");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value) :
						# Asignar valores a nuevas variables
						$var_id = $value[d_azp_import_data_id_azp_import_data];
						$var_wdocument = $value[d_azp_import_data_w_document];
						$var_werror = $value[d_azp_import_data_w_error];
						$var_wfolder = $value[d_azp_import_data_w_folder];
						$var_wname = $value[d_azp_import_data_w_name];
						$var_wroute = $value[d_azp_import_data_w_route];
						$var_wsize = $value[d_azp_import_data_w_size];
						$var_wtmp_name = $value[d_azp_import_data_w_tmp_name];
						$var_wtype = $value[d_azp_import_data_w_type];
						# Construccion de ruta y asignacion a un array
						$var_archive = $var_wroute . $var_wfolder . $var_wdocument;
						#-------------------------------------------------------------------------#
						# Obtener datos del archivo recibido y saltar lineas
						$var_fileget = file_get_contents($var_archive);
						$var_explode = explode("\n", $var_fileget);
						$var_afilter = array_filter($var_explode);
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_afilter as $key => $value) { if ($key == 0) { continue; } $var_list[] = explode(";", $value); }
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_list as $key => $value) {
							# Contar la cantidad de elementos del array
							$var_count = count($value);
							# Contar la cantidad de elementos desde cero
							for ($var_i = 0; $var_i < $var_count; $var_i++) {
								# Capturar los datos a traves del metodo post y validarlos
								$var_data = htmlspecialchars(html_entity_decode(utf8_encode($this->db->scape($value[$var_i]))));
								# Control de validacion para cumplir el ciclo de la condicion
								if (substr($var_realm[$var_i], 0, 2) == 't_') { $var_excel[$var_realm[$var_i]] = $var_data; }
								# Control de validacion para cumplir el ciclo de la condicion
								if (substr($var_realm[$var_i], 0, 2) == 'v_') {
									# Valores del array vacios
									$var_ignore = array();
									# Asignacion de valores a nuevas variables
									$var_table = substr($var_realm[$var_i], 5);
									# Consulta para identificar los nuevos registros en la tabla
									$var_sql = $this->db->query("SHOW COLUMNS FROM " . $var_table . " WHERE FIELD NOT LIKE 'id_%' AND FIELD NOT LIKE 'm_%'");
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $var_sql) { foreach ($var_sql as $keyc => $valuec): $var_ignore[] = $valuec[0] . " = '" . $var_data . "'"; endforeach; }
									# Convertir elementos de un array en string
									$var_implode = implode(" OR ", $var_ignore);
									# Consulta para identificar los nuevos registros en la tabla
									$var_sql = $this->db->query("SELECT * FROM " . $var_table .  " WHERE " . $var_implode);
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $var_sql) { foreach ($var_sql as $keyf => $valuef): $var_excel[$var_realm[$var_i]] = $valuef['id' . '_' . $var_table]; endforeach; }
								}
							}
							#-------------------------------------------------------------------------#
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_mvp_credit_expense_m_by_created => $_SESSION[SESS_APP_ID],
								d_mvp_credit_expense_m_by_modified => $_SESSION[SESS_APP_ID],
								d_mvp_credit_expense_m_date_created => DATE_HOUR,
								d_mvp_credit_expense_m_date_modified => DATE_HOUR,
								d_mvp_credit_expense_m_deleted => '1',
								d_mvp_credit_expense_m_description => '',
								//d_mvp_credit_expense_m_import => $var_id,
								d_mvp_credit_expense_m_level => '1',
								//d_mvp_credit_expense_m_record => '2',
								d_mvp_credit_expense_m_status => '1',
								d_mvp_credit_expense_m_temp => '1',
							);
							# Combinar mas de un array en uno solo
							$var_merge = array_merge($var_array, $var_excel);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->insert(t_mvp_credit_expense, $var_merge);
						}
						#-------------------------------------------------------------------------#
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->query("SHOW COLUMNS FROM " . t_mvp_credit_expense . " WHERE FIELD LIKE 'v_%'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_column[] = $value[0] . " IS NULL"; endforeach; }
						# Convertir elementos de un array en string
						$var_implode = implode(" OR ", $var_column);
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select("COUNT(" . d_mvp_credit_expense_id_mvp_credit_expense . ") AS 'lbl_count'", t_mvp_credit_expense,
							d_mvp_credit_expense_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
							d_mvp_credit_expense_m_import . " = '" . $var_id . "' AND (" . $var_implode . ")"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_empty = $value['lbl_count']; endforeach; }
						#-------------------------------------------------------------------------#
						# Control de validacion para cumplir el ciclo de la condicion
						if ($var_empty > 1) {
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_import_data_v_id_azp_import_time => '3',);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_import_data, $var_array, d_azp_import_data_id_azp_import_data . " = '" . $var_id . "'");
						} else {
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_import_data_v_id_azp_import_time => '4',);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_import_data, $var_array, d_azp_import_data_id_azp_import_data . " = '" . $var_id . "'");
						}
					endforeach;
				}				
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => 'Archivo procesado correctamente.',);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_mvp_credit_expense_import(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_im_url'])) { throw new Exception('El campo de url esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_url = $this->db->scape($data['field_im_url']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_im_file']['name'];
				$empty_type = $_FILES['field_im_file']['type'];
				$empty_tmp_name = $_FILES['field_im_file']['tmp_name'];
				$empty_error = $_FILES['field_im_file']['error'];
				$empty_size = $_FILES['field_im_file']['size'];
				#-------------------------------------------------------------------------#
				$empty_tamanio = 5000; $empty_bytes = 1024;
				$empty_extension = array('csv',);
				$empty_path_info = strtolower(pathinfo($empty_name, PATHINFO_EXTENSION));
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_url)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de url es obligatorio.');
				}
				#---------------------------------------------#
				if (Func::emp($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de archivo es obligatorio.');
				}
				#---------------------------------------------#
				if (!in_array($empty_path_info, $empty_extension)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de archivo solo acepta formatos ' . implode(',', $empty_extension) . '.');
				}
				#---------------------------------------------#
				if ($empty_size > ($empty_tamanio * $empty_bytes)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El archivo seleccionado excede el tamaño de 5 MB.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select("*", t_azp_menu_crud, d_azp_menu_crud_t_url . " = '" . $empty_url . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('La url seleccionada no se encuentra registrada.'); }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 0, 'message' => $e->getMessage(),);
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_mvp_credit_expense_import(array $data) : array {
			# Validar el envio de informacion de los formularios
			$var_error = $this->error_sql_mvp_credit_expense_import($data);
			# Validar errores de los datos recibidos del formulario
			if (!is_bool($var_error)) { return $var_error; }
			# Control de validacion de sesion de usuario
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => 'Sesión caducada, vuelve a ingresar. <a href="' . URL . 'login/?field_id=session">Clic Aqui</a>.',);
			} else {
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('files');
				#-------------------------------------------------------------------------#
				$empty_url = $this->db->scape($data['field_im_url']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_im_file']['name'];
				$empty_error = $_FILES['field_im_file']['error'];
				$empty_size = $_FILES['field_im_file']['size'];
				$empty_tmp_name = $_FILES['field_im_file']['tmp_name'];
				$empty_type = $_FILES['field_im_file']['type'];
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$var_sql = $this->db->select("*", t_azp_menu_crud, d_azp_menu_crud_t_url . " = '" . $empty_url . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key => $value) : $empty_menu_crud = $value[d_azp_menu_crud_id_azp_menu_crud]; endforeach; } else { $empty_menu_crud = 0; }
				#-------------------------------------------------------------------------#
				$empty_route = '../systemfiles/filesproject/';
				$empty_folder = 'az_import_data/' . $empty_menu_crud . '/';
				$empty_document = DATE_NUMBER . '_' . HOUR_NUMBER . '.csv';
				#-------------------------------------------------------------------------#
				# Asignacion de valores a nuevas variables
				$empty_rows = 0; $var_count = 0;
				# Obtener datos del archivo recibido y saltar lineas
				$var_fileget = file_get_contents($empty_tmp_name);
				$var_explode = explode("\n", $var_fileget);
				$var_afilter = array_filter($var_explode);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_afilter as $key => $value) { if ($key == 0) { continue; } $var_list[] = explode(";", $value); }
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_list as $key => $value) : $empty_rows = $var_count + 1; $var_count++; endforeach;
				#-------------------------------------------------------------------------#
				# Verificar si el resultado de la sql es verdadero o falso
				if ($empty_menu_crud == 0) { return array('error' => 1, 'message' => 'Archivo cargado incorrectamente.'); } else {
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_import_data_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_import_data_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_import_data_m_date_created => DATE_HOUR,
						d_azp_import_data_m_date_modified => DATE_HOUR,
						d_azp_import_data_m_deleted => '1',
						d_azp_import_data_m_description => '',
						//d_azp_import_data_m_import => '0',
						d_azp_import_data_m_level => '1',
						//d_azp_import_data_m_record => '2',
						d_azp_import_data_m_status => '1',
						d_azp_import_data_m_temp => '1',
						d_azp_import_data_t_code => rand(2147483647, 1),
						d_azp_import_data_t_date => DATE,
						d_azp_import_data_t_rows => $empty_rows,
						d_azp_import_data_w_document => $empty_document,
						d_azp_import_data_w_error => $empty_error,
						d_azp_import_data_w_folder => $empty_folder,
						d_azp_import_data_w_name => $empty_name,
						d_azp_import_data_w_route => $empty_route,
						d_azp_import_data_w_size => $empty_size,
						d_azp_import_data_w_tmp_name => $empty_tmp_name,
						d_azp_import_data_w_type => $empty_type,
						d_azp_import_data_v_id_azp_import_time => '1',
						d_azp_import_data_v_id_azp_menu_crud => $empty_menu_crud,
					);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->insert(t_azp_import_data, $var_array);
					#-------------------------------------------------------------------------#
					# Contro de existencia de carpeta
					if (!is_dir($empty_route . $empty_folder)) { Files::create_dir($empty_route . $empty_folder, 0777); }
					#-------------------------------------------------------------------------#
					# Subida de archivos en el desarrollo
					Files::upload_file(trim(preg_replace('/\s+/',' ', $empty_document)), $empty_tmp_name, $empty_route . $empty_folder, true);
					#-------------------------------------------------------------------------#
					# Dar permisos a la ruta y archivo
					chmod($empty_route . $empty_folder . $empty_document, 0777);
					#-------------------------------------------------------------------------#
					# Retornar el mensaje una vez ejecutada la rutina del proceso
					return array('success' => 1, 'message' => 'Archivo almacenado correctamente.',);
				}
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_role_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('El campo de descripcion esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_platform'])) { throw new Exception('<b>Error:</b> El campo de plataforma esta prohibido modificar.'); }
				if (!isset($data['field_cr_rols'])) { throw new Exception('<b>Error:</b> El campo de rol generico esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				#-------------------------------------------------------------------------#
				$empty_platform = $this->db->scape($data['field_cr_platform']);
				$empty_rols = $this->db->scape($data['field_cr_rols']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_platform) || strtolower($empty_platform) == strtolower('seleccionar') || $empty_platform == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de plataforma es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_platform)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de plataforma solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_rols) || strtolower($empty_rols) == strtolower('seleccionar') || $empty_rols == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de rol generico es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_rols)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de rol generico solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_query = $this->db->select("*", t_azp_role,
					d_azp_role_v_id_azp_platform . " = '" . $empty_platform . "' AND " .
					d_azp_role_v_id_azp_rols . " = '" . $empty_rols . "'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_query) { throw new Exception('La plataforma y rol generico seleccionados ya existen registrados.'); }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 0, 'message' => $e->getMessage(),);
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_role_insert(array $data) : array {
			# Validar el envio de informacion de los formularios
			$var_error = $this->error_sql_azp_role_insert($data);
			# Validar errores de los datos recibidos del formulario
			if (!is_bool($var_error)) { return $var_error; }
			# Control de validacion de sesion de usuario
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => 'Sesión caducada, vuelve a ingresar. <a href="' . URL . 'login/?field_id=session">Clic Aqui</a>.',);
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				#-------------------------------------------------------------------------#
				$empty_platform = $this->db->scape($data['field_cr_platform']);
				$empty_rols = $this->db->scape($data['field_cr_rols']);
				#-------------------------------------------------------------------------#
				$var_platform = ''; $var_rols = '';
				#-------------------------------------------------------------------------#
				# Query Sql: Ejecutar codigo sql en la base de datos
				$var_sql = $this->db->select("*", t_azp_platform, d_azp_platform_id_azp_platform . " = '" . $empty_platform . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_platform = $value[d_azp_platform_t_template]; endforeach; }
				#-------------------------------------------------------------------------#
				# Query Sql: Ejecutar codigo sql en la base de datos
				$var_sql = $this->db->select("*", t_azp_rols, d_azp_rols_id_azp_rols . " = '" . $empty_rols . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_rols = $value[d_azp_platform_t_name]; endforeach; }
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_role_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_role_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_role_m_date_created => DATE_HOUR,
					d_azp_role_m_date_modified => DATE_HOUR,
					d_azp_role_m_deleted => '1',
					d_azp_role_m_description => $empty_description,
					//d_azp_role_m_import => '0',
					d_azp_role_m_level => '2',
					//d_azp_role_m_record => '1',
					d_azp_role_m_status => '1',
					d_azp_role_m_temp => '2',
					d_azp_role_t_name => ucwords(strtolower($var_platform . ' ' . $var_rols)),
					d_azp_role_v_id_azp_platform => $empty_platform,
					d_azp_role_v_id_azp_rols => $empty_rols,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_role, $var_array);
				#-------------------------------------------------------------------------#
				# Query Sql: Ejecutar codigo sql en la base de datos
				$var_sql_role = $this->db->select("*", t_azp_role, d_azp_role_m_temp . " = '2' AND " . d_azp_role_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql_role) {
					# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
					foreach ($var_sql_role as $key_role => $value_role):
						# Query Sql: Ejecutar codigo sql en la base de datos
						$var_sql_menu = $this->db->select("*", t_azp_menu_crud);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_sql_menu) {
							# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
							foreach ($var_sql_menu as $key_menu => $value_menu):
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(
									d_azp_authorized_permits_m_by_created => $_SESSION[SESS_APP_ID],
									d_azp_authorized_permits_m_by_modified => $_SESSION[SESS_APP_ID],
									d_azp_authorized_permits_m_date_created => DATE_HOUR,
									d_azp_authorized_permits_m_date_modified => DATE_HOUR,
									d_azp_authorized_permits_m_deleted => '1',
									d_azp_authorized_permits_m_description => '',
									//d_azp_authorized_permits_m_import => '0',
									d_azp_authorized_permits_m_level => '2',
									//d_azp_authorized_permits_m_record => '1',
									d_azp_authorized_permits_m_status => '1',
									d_azp_authorized_permits_m_temp => '1',
									d_azp_authorized_permits_t_btn_action => '2',
									d_azp_authorized_permits_t_btn_export => '2',
									d_azp_authorized_permits_t_btn_search => '2',
									d_azp_authorized_permits_t_btn_visible => '2',
									d_azp_authorized_permits_t_data_by_create => '2',
									d_azp_authorized_permits_t_data_change => '2',
									d_azp_authorized_permits_t_data_eliminate => '2',
									d_azp_authorized_permits_t_data_read => '2',
									d_azp_authorized_permits_t_data_remove => '2',
									d_azp_authorized_permits_t_menu_value => '2',
									d_azp_authorized_permits_t_module_value => '2',
									d_azp_authorized_permits_t_value_associate => '2',
									d_azp_authorized_permits_t_value_change => '2',
									d_azp_authorized_permits_t_value_close => '2',
									d_azp_authorized_permits_t_value_column_toggle => '2',
									d_azp_authorized_permits_t_value_colvis_column => '2',
									d_azp_authorized_permits_t_value_colvis_restore => '2',
									d_azp_authorized_permits_t_value_copy => '2',
									d_azp_authorized_permits_t_value_create => '2',
									d_azp_authorized_permits_t_value_csv => '2',
									d_azp_authorized_permits_t_value_delete => '2',
									d_azp_authorized_permits_t_value_detail => '2',
									d_azp_authorized_permits_t_value_email => '2',
									d_azp_authorized_permits_t_value_error => '2',
									d_azp_authorized_permits_t_value_excel => '2',
									d_azp_authorized_permits_t_value_file => '2',
									d_azp_authorized_permits_t_value_import => '2',
									d_azp_authorized_permits_t_value_page_length => '2',
									d_azp_authorized_permits_t_value_pdf => '2',
									d_azp_authorized_permits_t_value_print => '2',
									d_azp_authorized_permits_t_value_remove => '2',
									d_azp_authorized_permits_t_value_report => '2',
									d_azp_authorized_permits_t_value_restore => '2',
									d_azp_authorized_permits_t_value_sub_menu => '2',
									d_azp_authorized_permits_t_value_sync => '2',
									d_azp_authorized_permits_t_value_template => '2',
									d_azp_authorized_permits_t_value_update => '2',
									d_azp_authorized_permits_v_id_azp_menu_crud => $value_menu[d_azp_menu_crud_id_azp_menu_crud],
									d_azp_authorized_permits_v_id_azp_role => $value_role[d_azp_role_id_azp_role],
								);
								# Query Sql Insert: Registrar valores en la tabla segun sus campos
								$this->db->insert(t_azp_authorized_permits, $var_array);
							endforeach;
						}
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Query Sql: Ejecutar codigo sql en la base de datos
				$var_sql_role = $this->db->select("*", t_azp_role, d_azp_role_m_temp . " = '2' AND " . d_azp_role_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql_role) {
					# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
					foreach ($var_sql_role as $key_role => $value_role):
						# Query Sql: Ejecutar codigo sql en la base de datos
						$var_sql_appl = $this->db->select("*", t_azp_application);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_sql_appl) {
							# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
							foreach ($var_sql_appl as $key_appl => $value_appl):
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(
									d_azp_access_permits_m_by_created => $_SESSION[SESS_APP_ID],
									d_azp_access_permits_m_by_modified => $_SESSION[SESS_APP_ID],
									d_azp_access_permits_m_date_created => DATE_HOUR,
									d_azp_access_permits_m_date_modified => DATE_HOUR,
									d_azp_access_permits_m_deleted => '1',
									d_azp_access_permits_m_description => '',
									//d_azp_access_permits_m_import => '0',
									d_azp_access_permits_m_level => '2',
									//d_azp_access_permits_m_record => '1',
									d_azp_access_permits_m_status => '1',
									d_azp_access_permits_m_temp => '1',
									d_azp_access_permits_v_id_azp_access_type => '2',
									d_azp_access_permits_v_id_azp_application => $value_appl[d_azp_application_id_azp_application],
									d_azp_access_permits_v_id_azp_role => $value_role[d_azp_role_id_azp_role],
								);
								# Query Sql Insert: Registrar valores en la tabla segun sus campos
								$this->db->insert(t_azp_access_permits, $var_array);
							endforeach;
						}
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
				$var_array = array(d_azp_role_m_temp => '1');
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_role, $var_array, d_azp_role_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => 'Registro completado correctamente.',);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_mvp_credit_expense_proccess(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_mt_url'])) { throw new Exception('El campo de url esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_url = $this->db->scape($data['field_mt_url']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_url)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de url es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select("*", t_azp_menu_crud, d_azp_menu_crud_t_url . " = '" . $empty_url . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('La url seleccionada no se encuentra registrada.'); }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 0, 'message' => $e->getMessage(),);
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_mvp_credit_expense_proccess(array $data) : array {
			# Validar el envio de informacion de los formularios
			$var_error = $this->error_sql_mvp_credit_expense_proccess($data);
			# Validar errores de los datos recibidos del formulario
			if (!is_bool($var_error)) { return $var_error; }
			# Control de validacion de sesion de usuario
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => 'Sesión caducada, vuelve a ingresar. <a href="' . URL . 'login/?field_id=session">Clic Aqui</a>.',);
			} else {
				# Asignacion de valores a nuevas variables
				$var_rgcount = 0; $var_register = 0; $var_assign = ''; $var_consult = '';
				#-------------------------------------------------------------------------#
				# Asignacion de valores a nuevas variables
				$empty_url = $this->db->scape($data['field_mt_url']);
				$empty_chk = $this->db->scape($data['field_mt_chk']);
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_check = explode(",", $empty_chk);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				//$var_array = array(d_azp_import_data_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				//$this->db->update(t_azp_import_data, $var_array, d_azp_import_data_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				#-------------------------------------------------------------------------#
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_check as $key => $value) : $var_chkey = $var_register + 1; $var_register++; endforeach;
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_import_data_m_temp => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_import_data, $var_array, d_azp_import_data_id_azp_import_data . " IN (" . $empty_chk . ") AND " . d_azp_import_data_v_id_azp_import_time . " = '1'");
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("COUNT(" . d_azp_import_data_id_azp_import_data . ") AS 'lbl_count'", t_azp_import_data,
					d_azp_import_data_id_azp_import_data . " IN (" . $empty_chk . ") AND " . d_azp_import_data_m_temp . " = '2' AND (" .
					d_azp_import_data_v_id_azp_import_time . " = '3' OR " . d_azp_import_data_v_id_azp_import_time . " = '4')"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_rgcount = $value['lbl_count']; endforeach; }
				#-------------------------------------------------------------------------#
				# Control de validacion para cumplir el ciclo de la condicion
				if ($var_chkey == $var_rgcount) {
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_import_data_m_temp => '1',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_import_data, $var_array, d_azp_import_data_id_azp_import_data . " IN (" . $empty_chk . ") AND " . d_azp_import_data_m_temp . " = '2' AND (" .
						d_azp_import_data_v_id_azp_import_time . " = '3' OR " . d_azp_import_data_v_id_azp_import_time . " = '4')"
					);
					# Retornar el mensaje una vez ejecutada la rutina del proceso
					return array('success' => 1, 'message' => 'Archivos seleccionados procesados correctamente.', 'proccess' => 0,);
				} else {
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("MIN(" . d_azp_import_data_id_azp_import_data . ") AS 'lbl_min'", t_azp_import_data,
						d_azp_import_data_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_import_data_m_temp . " = '2' AND " . d_azp_import_data_v_id_azp_import_time . " = '1'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_id = $value['lbl_min']; endforeach; }
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("*", t_azp_import_data, d_azp_import_data_id_azp_import_data . " = '" . $var_id . "' AND " . d_azp_import_data_w_document . " != ''");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value) :
							# Asignar valores a nuevas variables
							$var_id = $value[d_azp_import_data_id_azp_import_data];
							$var_wdocument = $value[d_azp_import_data_w_document];
							$var_werror = $value[d_azp_import_data_w_error];
							$var_wfolder = $value[d_azp_import_data_w_folder];
							$var_wname = $value[d_azp_import_data_w_name];
							$var_wroute = $value[d_azp_import_data_w_route];
							$var_wsize = $value[d_azp_import_data_w_size];
							$var_wtmp_name = $value[d_azp_import_data_w_tmp_name];
							$var_wtype = $value[d_azp_import_data_w_type];
							# Construccion de ruta y asignacion a un array
							$var_file[$var_id] = $var_wroute . $var_wfolder . $var_wdocument;
							$var_archive = $var_wroute . $var_wfolder . $var_wdocument;
							#-------------------------------------------------------------------------#
							# Valores del array vacios
							$var_for = array();
							# Asignacion de valores a nuevas variables
							$var_assign = '<div class="table-responsive">';
							$var_assign .= '<table id="dt_assign" class="text-center table table-bordered table-sm table-hover table-striped w-100 nowrap" cellspacing="0" width="100%">';
							$var_assign .= '<thead class="table-success"><tr><th>Excel</th><th>Mapeo</th><th>Campo</th></tr></thead>';
							$var_assign .= '<tbody>';
							# Obtener datos del archivo recibido y saltar lineas
							$var_fileget = file_get_contents($var_archive);
							$var_explode = explode("\n", $var_fileget);
							$var_afilter = array_filter($var_explode);
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_afilter as $key => $value) { $var_lisd[] = explode(";", $value); }
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_lisd as $key => $value) {
								# Contar la cantidad de elementos del array
								$var_count = count($value);
								# Contar la cantidad de elementos desde cero
								for ($var_i = 0; $var_i < $var_count; $var_i++) { 
									# Capturar los datos a traves del metodo post y validarlos
									$var_for[] = htmlspecialchars(html_entity_decode(utf8_encode($this->db->scape($value[$var_i]))));
								}
								// Romper la linea de codigo
								break 1;
							}
							#-------------------------------------------------------------------------#
							# Valores del array vacios
							$var_field = array();
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_for as $key => $value) : $var_field[] = $value; endforeach;
							# Convertir elementos de un array en string
							$var_implode = implode("','", $var_field);
							#-------------------------------------------------------------------------#
							# Valores del array vacios
							$var_column = array();
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->query("SHOW COLUMNS FROM " . t_mvp_credit_expense . " WHERE FIELD LIKE 't_%' OR FIELD LIKE 'v_%'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_column[] = $value[0]; endforeach; }
							#-------------------------------------------------------------------------#
							# Valores del array vacios
							$var_ignore = array();
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->query("SHOW COLUMNS FROM " . t_mvp_credit_expense . " WHERE FIELD NOT IN ('" . $var_implode . "') AND (FIELD LIKE 't_%' OR FIELD LIKE 'v_%')");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_ignore[] = $value[0]; endforeach; }
							#-------------------------------------------------------------------------#
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_field as $keyf => $valuef):
								# Asignacion de valores a nuevas variables
								$var_key = $var_register + 1; $var_register++;
								$var_assign .= '<tr>';
								$var_assign .= '<td>' . $valuef . '</td>';
								# Control de validacion de datos
								if (in_array($valuef, $var_column)) { $var_assign .= '<td>Existente</td>'; } else { $var_assign .= '<td>Incorrecto</td>'; }
								# Control de validacion de datos
								if (in_array($valuef, $var_column)) {
									# Asignacion de valores a nuevas variables
									$var_assign .= '<td>';
										$var_assign .= '<select name="field_as_realm[]" id="field_as_realm" class="custom-select form-control input-xs border-success" required="" readonly="">';
											$var_assign .= '<option value="' . $valuef . '">' . $valuef . '</option>';
										$var_assign .= '</select>';
									$var_assign .= '</td>';
								} else {
									# Asignacion de valores a nuevas variables
									$var_assign .= '<td>';
										$var_assign .= '<select name="field_as_realm[]" id="field_as_realm" class="custom-select form-control input-xs" required="">';
											$var_assign .= '<option value="">Seleccionar</option>';
											# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
											foreach ($var_ignore as $keyc => $valuec) : $var_assign .= '<option value="' . $valuec . '">' . $valuec . '</option>'; endforeach;
										# Asignacion de valores a nuevas variables
										$var_assign .= '</select>';
									$var_assign .= '</td>';
								}
								# Asignacion de valores a nuevas variables
								$var_assign .= '</tr>';
							endforeach;
							# Asignacion de valores a nuevas variables
							$var_assign .= '</tbody>';
							$var_assign .= '</table>';
							$var_assign .= '</div>';
						endforeach;
					}
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("MIN(" . d_azp_import_data_id_azp_import_data . ") AS 'lbl_min'", t_azp_import_data,
						d_azp_import_data_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_import_data_m_temp . " = '2' AND " . d_azp_import_data_v_id_azp_import_time . " = '1'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_id = $value['lbl_min']; endforeach; }
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("*", t_azp_import_data, d_azp_import_data_id_azp_import_data . " = '" . $var_id . "' AND " . d_azp_import_data_w_document . " != ''");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value) :
							# Asignar valores a nuevas variables
							$var_id = $value[d_azp_import_data_id_azp_import_data];
							$var_wdocument = $value[d_azp_import_data_w_document];
							$var_werror = $value[d_azp_import_data_w_error];
							$var_wfolder = $value[d_azp_import_data_w_folder];
							$var_wname = $value[d_azp_import_data_w_name];
							$var_wroute = $value[d_azp_import_data_w_route];
							$var_wsize = $value[d_azp_import_data_w_size];
							$var_wtmp_name = $value[d_azp_import_data_w_tmp_name];
							$var_wtype = $value[d_azp_import_data_w_type];
							# Construccion de ruta y asignacion a un array
							$var_file[$var_id] = $var_wroute . $var_wfolder . $var_wdocument;
							$var_archive = $var_wroute . $var_wfolder . $var_wdocument;
							#-------------------------------------------------------------------------#
							# Asignacion de valores a nuevas variables
							$var_consult = '<div class="table-responsive">';
							$var_consult .= '<table id="dt_proccess" class="text-center table table-bordered table-sm table-hover table-striped w-100 nowrap" cellspacing="0" width="100%">';
							$var_consult .= '<thead class="table-success">';
							# Obtener datos del archivo recibido y saltar lineas
							$var_fileget = file_get_contents($var_archive);
							$var_explode = explode("\n", $var_fileget);
							$var_afilter = array_filter($var_explode);
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_afilter as $key => $value) { $var_lisd[] = explode(";", $value); }
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_lisd as $key => $value) {
								# Contar la cantidad de elementos del array
								$var_count = count($value);
								# Asignacion de valores a nuevas variables
								$var_consult .= '<tr>';
								# Contar la cantidad de elementos desde cero
								for ($var_i = 0; $var_i < $var_count; $var_i++) { 
									# Capturar los datos a traves del metodo post y validarlos
									$var_for = htmlspecialchars(html_entity_decode(utf8_encode($this->db->scape($value[$var_i]))));
									# Asignacion de valores a nuevas variables
									$var_consult .= '<th>' . $var_for . '</th>';
								}
								# Asignacion de valores a nuevas variables
								$var_consult .= '</tr>';
								// Romper la linea de codigo
								break 1;
							}
							# Asignacion de valores a nuevas variables
							$var_consult .= '</thead>';
							#-------------------------------------------------------------------------#
							$var_consult .= '<tbody>';
							# Obtener datos del archivo recibido y saltar lineas
							$var_fileget = file_get_contents($var_archive);
							$var_explode = explode("\n", $var_fileget);
							$var_afilter = array_filter($var_explode);
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_afilter as $key => $value) { if ($key == 0) { continue; } $var_list[] = explode(";", $value); }
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_list as $key => $value) {
								# Contar la cantidad de elementos del array
								$var_count = count($value);
								# Asignacion de valores a nuevas variables
								$var_consult .= '<tr>';
								# Contar la cantidad de elementos desde cero
								for ($var_i = 0; $var_i < $var_count; $var_i++) { 
									# Capturar los datos a traves del metodo post y validarlos
									$var_for = htmlspecialchars(html_entity_decode(utf8_encode($this->db->scape($value[$var_i]))));
									# Asignacion de valores a nuevas variables
									$var_consult .= '<td>' . $var_for . '</td>';
								}
								# Asignacion de valores a nuevas variables
								$var_consult .= '</tr>';
							}
							# Asignacion de valores a nuevas variables
							$var_consult .= '</tbody>';
							$var_consult .= '</table>';
							$var_consult .= '</div>';
						endforeach;
					}
					#-------------------------------------------------------------------------#
					# Retornar el mensaje una vez ejecutada la rutina del proceso
					return array('success' => 1, 'message' => 'Archivo procesado correctamente.', 'proccess' => 1, 'assign' => $var_assign, 'consult' => $var_consult,);
				}
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_mvp_credit_expense_release(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_mt_url'])) { throw new Exception('El campo de url esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_url = $this->db->scape($data['field_mt_url']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_url)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de url es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select("*", t_azp_menu_crud, d_azp_menu_crud_t_url . " = '" . $empty_url . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('La url seleccionada no se encuentra registrada.'); }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 0, 'message' => $e->getMessage(),);
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_mvp_credit_expense_release(array $data) : array {
			# Validar el envio de informacion de los formularios
			$var_error = $this->error_sql_mvp_credit_expense_release($data);
			# Validar errores de los datos recibidos del formulario
			if (!is_bool($var_error)) { return $var_error; }
			# Control de validacion de sesion de usuario
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => 'Sesión caducada, vuelve a ingresar. <a href="' . URL . 'login/?field_id=session">Clic Aqui</a>.',);
			} else {
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('files');
				#-------------------------------------------------------------------------#
				$empty_url = $this->db->scape($data['field_mt_url']);
				$empty_chk = $this->db->scape($data['field_mt_chk']);
				#-------------------------------------------------------------------------#
				# Valores del array vacios
				$var_file = array();
				# Separar la cadena usando un delimitador
				$var_check = explode(",", $empty_chk);
				#-------------------------------------------------------------------------#
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_check as $key => $value) {
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("*", t_azp_import_data, d_azp_import_data_id_azp_import_data . " = '" . $value . "' AND " . d_azp_import_data_w_document . " != ''");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value) :
							# Asignar valores a nuevas variables
							$var_id = $value[d_azp_import_data_id_azp_import_data];
							$var_wdocument = $value[d_azp_import_data_w_document];
							$var_werror = $value[d_azp_import_data_w_error];
							$var_wfolder = $value[d_azp_import_data_w_folder];
							$var_wname = $value[d_azp_import_data_w_name];
							$var_wroute = $value[d_azp_import_data_w_route];
							$var_wsize = $value[d_azp_import_data_w_size];
							$var_wtmp_name = $value[d_azp_import_data_w_tmp_name];
							$var_wtype = $value[d_azp_import_data_w_type];
							# Construccion de ruta y asignacion a un array
							$var_file[$var_id] = $var_wroute . $var_wfolder . $var_wdocument;
							$var_route = $var_wroute . $var_wfolder;
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Ruta principal de la carpeta
				$var_croute = '../systemfiles/filescompr/';
				# Carpeta del año
				$var_cyear = YEAR . '/';
				# Carpeta del año y mes
				$var_cmonth = YEAR_MONTH . '/';
				# Carpeta del año, mes y día
				$var_cdate = DATE . '/';
				#-------------------------------------------------------------------------#
				# Creacion de carpetas en el desarrollo
				Files::create_dir($var_croute, 0777);
				# Creacion de carpetas en el desarrollo
				Files::create_dir($var_croute . $var_cyear, 0777);
				# Creacion de carpetas en el desarrollo
				Files::create_dir($var_croute . $var_cyear . $var_cmonth, 0777);
				# Creacion de carpetas en el desarrollo
				Files::create_dir($var_croute . $var_cyear . $var_cmonth . $var_cdate, 0777);
				#-------------------------------------------------------------------------#
				# Nombre del archivo a guardar con sus datos respectivos
				$var_zip_name = 'Z_' . DATE . HOUR_NUMBER . '.zip';
				# Ruta de la carpeta para almacenar sus respectivos archivos
				$var_zip_route = $var_croute . $var_cyear . $var_cmonth . $var_cdate;
				# Ruta final concatenada para almacenar el archivo en su carpeta
				$var_zip_final = $var_zip_route . $var_zip_name;
				#-------------------------------------------------------------------------#
				$var_compressed = new ZipArchive();
				# Validacion de la ruta y archivo del archivo a comprimir
				if ($var_compressed->open($var_zip_final, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE) === true) {
					# Agregamos los archivos a comprimir
					foreach ($var_file as $key_file) {
						# Añadir los archivos a comprimir
						$var_get_content = file_get_contents($key_file);
						# Añadir los archivos a comprimir
						$var_compressed->addFromString(str_replace($var_route, '', $key_file), $var_get_content);
					}
				}
				# Cerrar la compresion del archivo
				$var_compressed->close();
				# Codificar la iniformacion del archivo
				$var_base_64 = base64_encode(file_get_contents($var_zip_final));
				#-------------------------------------------------------------------------#
				# Dar permisos a la carpeta y archivo
				chmod($var_croute, 0777);
				# Dar permisos a la carpeta y archivo
				chmod($var_croute . $var_cyear, 0777);
				# Dar permisos a la carpeta y archivo
				chmod($var_croute . $var_cyear . $var_cmonth, 0777);
				# Dar permisos a la carpeta y archivo
				chmod($var_croute . $var_cyear . $var_cmonth . $var_cdate, 0777);
				# Dar permisos a la carpeta y archivo
				chmod($var_zip_final, 0777);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => 'Archivo generado correctamente.', 'compress' => $var_zip_final, 'zipname' => $var_zip_name,);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_role_remove(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_remove'])) { throw new Exception('El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_remove']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_id) || $empty_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de id es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select("*", t_azp_role, d_azp_role_id_azp_role . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('El registro que está removiendo no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select("*", t_azp_role, d_azp_role_id_azp_role . " = '" . $empty_id . "' AND " . d_azp_role_m_deleted . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_id) { foreach ($sql_id as $key => $value) : throw new Exception('El registro que está procesando ya se encuentra removido.'); endforeach; }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select("*", t_azp_role,
					d_azp_role_id_azp_role . " = '" . $empty_id . "' AND " .
					d_azp_role_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_role_m_level . " = '1'"
				);
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select("*", t_azp_role,
					d_azp_role_id_azp_role . " = '" . $empty_id . "' AND " .
					d_azp_role_m_level . " = '2'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) { throw new Exception('No tienes suficientes permisos superiores para actualizar el registro.'); }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 0, 'message' => $e->getMessage(),);
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_role_remove(array $data) : array {
			# Validar el envio de informacion de los formularios
			$var_error = $this->error_sql_azp_role_remove($data);
			# Validar errores de los datos recibidos del formulario
			if (!is_bool($var_error)) { return $var_error; }
			# Control de validacion de sesion de usuario
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => 'Sesión caducada, vuelve a ingresar. <a href="' . URL . 'login/?field_id=session">Clic Aqui</a>.',);
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_remove']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_role_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_role, $var_array, d_azp_role_id_azp_role . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => 'Registro removido correctamente.',);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_role_restore(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_restore'])) { throw new Exception('El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_restore']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_id) || $empty_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de id es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select("*", t_azp_role, d_azp_role_id_azp_role . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('El registro que está restaurando no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select("*", t_azp_role, d_azp_role_id_azp_role . " = '" . $empty_id . "' AND " . d_azp_role_m_deleted . " = '1'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_id) { foreach ($sql_id as $key => $value) : throw new Exception('El registro que está procesando ya se encuentra restaurado.'); endforeach; }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select("*", t_azp_role,
					d_azp_role_id_azp_role . " = '" . $empty_id . "' AND " .
					d_azp_role_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_role_m_level . " = '1'"
				);
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select("*", t_azp_role,
					d_azp_role_id_azp_role . " = '" . $empty_id . "' AND " .
					d_azp_role_m_level . " = '2'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) { throw new Exception('No tienes suficientes permisos superiores para actualizar el registro.'); }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 0, 'message' => $e->getMessage(),);
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_role_restore(array $data) : array {
			# Validar el envio de informacion de los formularios
			$var_error = $this->error_sql_azp_role_restore($data);
			# Validar errores de los datos recibidos del formulario
			if (!is_bool($var_error)) { return $var_error; }
			# Control de validacion de sesion de usuario
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => 'Sesión caducada, vuelve a ingresar. <a href="' . URL . 'login/?field_id=session">Clic Aqui</a>.',);
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_restore']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_role_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_role, $var_array, d_azp_role_id_azp_role . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => 'Registro restaurado correctamente.',);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_role_update(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_id'])) { throw new Exception('El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_up_description'])) { throw new Exception('El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_up_state'])) { throw new Exception('El campo de estado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_platform'])) { throw new Exception('<b>Error:</b> El campo de plataforma esta prohibido modificar.'); }
				if (!isset($data['field_up_rols'])) { throw new Exception('<b>Error:</b> El campo de rol generico esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				$empty_description = $this->db->scape($data['field_up_description']);
				$empty_state = $this->db->scape($data['field_up_state']);
				#-------------------------------------------------------------------------#
				$empty_platform = $this->db->scape($data['field_up_platform']);
				$empty_rols = $this->db->scape($data['field_up_rols']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_id) || $empty_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de id es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_platform) || strtolower($empty_platform) == strtolower('seleccionar') || $empty_platform == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de plataforma es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_platform)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de plataforma solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_rols) || strtolower($empty_rols) == strtolower('seleccionar') || $empty_rols == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de rol generico es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_rols)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de rol generico solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_state) || strtolower($empty_state) == strtolower('seleccionar') || $empty_state == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de estado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_state)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('El campo de estado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select("*", t_azp_role, d_azp_role_id_azp_role . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('El registro que está actualizando no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_state = $this->db->select("*", t_azp_sys_state, d_azp_sys_state_id_azp_sys_state . " = '" . $empty_state . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_state) { throw new Exception('El estado seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select("*", t_azp_role,
					d_azp_role_id_azp_role . " = '" . $empty_id . "' AND " .
					d_azp_role_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_role_m_level . " = '1'"
				);
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select("*", t_azp_role,
					d_azp_role_id_azp_role . " = '" . $empty_id . "' AND " .
					d_azp_role_m_level . " = '2'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) { throw new Exception('No tienes suficientes permisos superiores para actualizar el registro.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_query = $this->db->select("*", t_azp_role,
					d_azp_role_id_azp_role . " != '" . $empty_id . "' AND " .
					d_azp_role_v_id_azp_platform . " = '" . $empty_platform . "' AND " .
					d_azp_role_v_id_azp_rols . " = '" . $empty_rols . "'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_query) { throw new Exception('La plataforma y rol generico seleccionados ya existen registrados.'); }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 0, 'message' => $e->getMessage(),);
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_role_update(array $data) : array {
			# Validar el envio de informacion de los formularios
			$var_error = $this->error_sql_azp_role_update($data);
			# Validar errores de los datos recibidos del formulario
			if (!is_bool($var_error)) { return $var_error; }
			# Control de validacion de sesion de usuario
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => 'Sesión caducada, vuelve a ingresar. <a href="' . URL . 'login/?field_id=session">Clic Aqui</a>.',);
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				$empty_description = $this->db->scape($data['field_up_description']);
				$empty_state = $this->db->scape($data['field_up_state']);
				#-------------------------------------------------------------------------#
				$empty_platform = $this->db->scape($data['field_up_platform']);
				$empty_rols = $this->db->scape($data['field_up_rols']);
				#-------------------------------------------------------------------------#
				$var_platform = ''; $var_rols = '';
				#-------------------------------------------------------------------------#
				# Query Sql: Ejecutar codigo sql en la base de datos
				$var_sql = $this->db->select("*", t_azp_platform, d_azp_platform_id_azp_platform . " = '" . $empty_platform . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_platform = $value[d_azp_platform_t_template]; endforeach; }
				#-------------------------------------------------------------------------#
				# Query Sql: Ejecutar codigo sql en la base de datos
				$var_sql = $this->db->select("*", t_azp_rols, d_azp_rols_id_azp_rols . " = '" . $empty_rols . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_rols = $value[d_azp_platform_t_name]; endforeach; }
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_role, d_azp_role_id_azp_role . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value) :
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azs_role_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_role_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_role_m_date_created => DATE_HOUR,
							d_azs_role_m_date_modified => DATE_HOUR,
							d_azs_role_m_deleted => $value[d_azp_role_m_deleted],
							d_azs_role_m_description => $value[d_azp_role_m_description],
							//d_azs_role_m_import => $value[d_azp_role_m_import],
							d_azs_role_m_level => $value[d_azp_role_m_level],
							//d_azs_role_m_record => $value[d_azp_role_m_record],
							d_azs_role_m_status => $value[d_azp_role_m_status],
							d_azs_role_m_temp => $value[d_azp_role_m_temp],
							d_azs_role_t_name => $value[d_azp_role_t_name],
							d_azs_role_u_platform => $value[d_azp_role_v_id_azp_platform],
							d_azs_role_u_rols => $value[d_azp_role_v_id_azp_rols],
							d_azs_role_v_id_azp_role => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_role, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_role_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_role_m_date_modified => DATE_HOUR,
					d_azp_role_m_description => $empty_description,
					d_azp_role_m_status => $empty_state,
					d_azp_role_t_name => ucwords(strtolower($var_platform . ' ' . $var_rols)),
					d_azp_role_v_id_azp_platform => $empty_platform,
					d_azp_role_v_id_azp_rols => $empty_rols,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_role, $var_array, d_azp_role_id_azp_role . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => 'Registro actualizado correctamente.',);
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_platform() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_platform,
				d_azp_platform_m_deleted . " = '1' AND " .
				d_azp_platform_m_status . " = '1' ORDER BY " .
				d_azp_platform_t_name . " ASC"
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_rols() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_rols,
				"(" . d_azp_rols_m_deleted . " = '1' OR " .
				d_azp_rols_m_deleted . " = '5') AND " .
				d_azp_rols_m_status . " = '1' ORDER BY " .
				d_azp_rols_t_name . " ASC"
			);
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>