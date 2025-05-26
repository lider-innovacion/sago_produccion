<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_authorized_permitsModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_by_create() {
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
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = '" . $this->id . "'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
				ORDER BY tc_azp_menu_crud." . d_azp_menu_crud_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_detail() {
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
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_id_azp_authorized_permits . " = '" . $this->id . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
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
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = '" . $this->id . "'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
				ORDER BY tc_azp_menu_crud." . d_azp_menu_crud_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_authorized_permits." . d_azp_authorized_permits_id_azp_authorized_permits . " AS 'lbl_azp_authorized_permits_id_azp_authorized_permits',
					tc_azp_authorized_permits." . d_azp_authorized_permits_m_description . " AS 'lbl_azp_authorized_permits_m_description',
					tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " AS 'lbl_azp_authorized_permits_m_status',
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
					tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " AS 'lbl_azp_authorized_permits_v_id_azp_role',
					tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " AS 'lbl_azp_authorized_permits_v_id_azp_menu_crud'
				FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_id_azp_authorized_permits . " = '" . $this->id . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_state() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_sys_state);
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_authorized_permits_update(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_ap_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_ap_id']);
				$empty_description = $this->db->scape($data['field_up_ap_description']);
				$empty_state = $this->db->scape($data['field_up_ap_state']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_ap_btn_action'])) { throw new Exception('<b>Error:</b> El campo de boton accion esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_btn_export'])) { throw new Exception('<b>Error:</b> El campo de boton exportar esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_btn_search'])) { throw new Exception('<b>Error:</b> El campo de boton buscar esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_btn_visible'])) { throw new Exception('<b>Error:</b> El campo de boton visible esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_data_by_create'])) { throw new Exception('<b>Error:</b> El campo de datos creado por esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_data_change'])) { throw new Exception('<b>Error:</b> El campo de datos cambios esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_data_eliminate'])) { throw new Exception('<b>Error:</b> El campo de datos eliminados esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_data_read'])) { throw new Exception('<b>Error:</b> El campo de datos registros esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_data_remove'])) { throw new Exception('<b>Error:</b> El campo de datos removidos esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_menu_value'])) { throw new Exception('<b>Error:</b> El campo de menu esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_module_value'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_associate'])) { throw new Exception('<b>Error:</b> El campo de valor asociar esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_change'])) { throw new Exception('<b>Error:</b> El campo de valor cambio esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_close'])) { throw new Exception('<b>Error:</b> El campo de valor cerrar esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_column_toggle'])) { throw new Exception('<b>Error:</b> El campo de valor extender esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_colvis_column'])) { throw new Exception('<b>Error:</b> El campo de valor visible esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_colvis_restore'])) { throw new Exception('<b>Error:</b> El campo de valor restaurar esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_copy'])) { throw new Exception('<b>Error:</b> El campo de valor copiar esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_create'])) { throw new Exception('<b>Error:</b> El campo de valor nuevo esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_csv'])) { throw new Exception('<b>Error:</b> El campo de valor csv esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_delete'])) { throw new Exception('<b>Error:</b> El campo de valor eliminar esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_detail'])) { throw new Exception('<b>Error:</b> El campo de valor detalle esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_email'])) { throw new Exception('<b>Error:</b> El campo de valor correos esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_error'])) { throw new Exception('<b>Error:</b> El campo de valor error esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_excel'])) { throw new Exception('<b>Error:</b> El campo de valor excel esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_file'])) { throw new Exception('<b>Error:</b> El campo de valor archivo esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_import'])) { throw new Exception('<b>Error:</b> El campo de valor importar esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_page_length'])) { throw new Exception('<b>Error:</b> El campo de valor mostrar esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_pdf'])) { throw new Exception('<b>Error:</b> El campo de valor pdf esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_print'])) { throw new Exception('<b>Error:</b> El campo de valor imprimir esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_remove'])) { throw new Exception('<b>Error:</b> El campo de valor remover esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_report'])) { throw new Exception('<b>Error:</b> El campo de valor reportes esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_restore'])) { throw new Exception('<b>Error:</b> El campo de valor restaurar esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_sub_menu'])) { throw new Exception('<b>Error:</b> El campo de valor sub menu esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_sync'])) { throw new Exception('<b>Error:</b> El campo de valor sincronizar esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_template'])) { throw new Exception('<b>Error:</b> El campo de valor plantilla esta prohibido modificar.'); }
				if (!isset($data['field_up_ap_value_update'])) { throw new Exception('<b>Error:</b> El campo de valor actualizar esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_btn_action = $this->db->scape($data['field_up_ap_btn_action']);
				$empty_btn_export = $this->db->scape($data['field_up_ap_btn_export']);
				$empty_btn_search = $this->db->scape($data['field_up_ap_btn_search']);
				$empty_btn_visible = $this->db->scape($data['field_up_ap_btn_visible']);
				$empty_data_by_create = $this->db->scape($data['field_up_ap_data_by_create']);
				$empty_data_change = $this->db->scape($data['field_up_ap_data_change']);
				$empty_data_eliminate = $this->db->scape($data['field_up_ap_data_eliminate']);
				$empty_data_read = $this->db->scape($data['field_up_ap_data_read']);
				$empty_data_remove = $this->db->scape($data['field_up_ap_data_remove']);
				$empty_menu_value = $this->db->scape($data['field_up_ap_menu_value']);
				$empty_module_value = $this->db->scape($data['field_up_ap_module_value']);
				$empty_value_associate = $this->db->scape($data['field_up_ap_value_associate']);
				$empty_value_change = $this->db->scape($data['field_up_ap_value_change']);
				$empty_value_close = $this->db->scape($data['field_up_ap_value_close']);
				$empty_value_column_toggle = $this->db->scape($data['field_up_ap_value_column_toggle']);
				$empty_value_colvis_column = $this->db->scape($data['field_up_ap_value_colvis_column']);
				$empty_value_colvis_restore = $this->db->scape($data['field_up_ap_value_colvis_restore']);
				$empty_value_copy = $this->db->scape($data['field_up_ap_value_copy']);
				$empty_value_create = $this->db->scape($data['field_up_ap_value_create']);
				$empty_value_csv = $this->db->scape($data['field_up_ap_value_csv']);
				$empty_value_delete = $this->db->scape($data['field_up_ap_value_delete']);
				$empty_value_detail = $this->db->scape($data['field_up_ap_value_detail']);
				$empty_value_email = $this->db->scape($data['field_up_ap_value_email']);
				$empty_value_error = $this->db->scape($data['field_up_ap_value_error']);
				$empty_value_excel = $this->db->scape($data['field_up_ap_value_excel']);
				$empty_value_file = $this->db->scape($data['field_up_ap_value_file']);
				$empty_value_import = $this->db->scape($data['field_up_ap_value_import']);
				$empty_value_page_length = $this->db->scape($data['field_up_ap_value_page_length']);
				$empty_value_pdf = $this->db->scape($data['field_up_ap_value_pdf']);
				$empty_value_print = $this->db->scape($data['field_up_ap_value_print']);
				$empty_value_remove = $this->db->scape($data['field_up_ap_value_remove']);
				$empty_value_report = $this->db->scape($data['field_up_ap_value_report']);
				$empty_value_restore = $this->db->scape($data['field_up_ap_value_restore']);
				$empty_value_sub_menu = $this->db->scape($data['field_up_ap_value_sub_menu']);
				$empty_value_sync = $this->db->scape($data['field_up_ap_value_sync']);
				$empty_value_template = $this->db->scape($data['field_up_ap_value_template']);
				$empty_value_update = $this->db->scape($data['field_up_ap_value_update']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_id) || $empty_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_action) || strtolower($empty_btn_action) == strtolower('seleccionar') || $empty_btn_action == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de boton accion es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_action)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de boton accion solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_export) || strtolower($empty_btn_export) == strtolower('seleccionar') || $empty_btn_export == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de boton exportar es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_export)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de boton exportar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_search) || strtolower($empty_btn_search) == strtolower('seleccionar') || $empty_btn_search == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de boton buscar es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_search)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de boton buscar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_visible) || strtolower($empty_btn_visible) == strtolower('seleccionar') || $empty_btn_visible == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de boton visible es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_visible)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de boton visible solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_data_by_create) || strtolower($empty_data_by_create) == strtolower('seleccionar') || $empty_data_by_create == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de datos creado por es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_data_by_create)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de datos creado por solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_data_change) || strtolower($empty_data_change) == strtolower('seleccionar') || $empty_data_change == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de datos cambios es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_data_change)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de datos cambios solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_data_eliminate) || strtolower($empty_data_eliminate) == strtolower('seleccionar') || $empty_data_eliminate == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de datos eliminados es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_data_eliminate)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de datos eliminados solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_data_read) || strtolower($empty_data_read) == strtolower('seleccionar') || $empty_data_read == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de datos registros es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_data_read)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de datos registros solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_data_remove) || strtolower($empty_data_remove) == strtolower('seleccionar') || $empty_data_remove == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de datos removidos es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_data_remove)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de datos removidos solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_menu_value) || strtolower($empty_menu_value) == strtolower('seleccionar') || $empty_menu_value == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de menu es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_menu_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de menu solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_module_value) || strtolower($empty_module_value) == strtolower('seleccionar') || $empty_module_value == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de modulo es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_module_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de modulo solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_associate) || strtolower($empty_value_associate) == strtolower('seleccionar') || $empty_value_associate == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor asociar es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_associate)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor asociar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_change) || strtolower($empty_value_change) == strtolower('seleccionar') || $empty_value_change == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor cambio es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_change)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor cambio solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_close) || strtolower($empty_value_close) == strtolower('seleccionar') || $empty_value_close == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor cerrar es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_close)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor cerrar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_column_toggle) || strtolower($empty_value_column_toggle) == strtolower('seleccionar') || $empty_value_column_toggle == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor extender es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_column_toggle)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor extender solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_colvis_column) || strtolower($empty_value_colvis_column) == strtolower('seleccionar') || $empty_value_colvis_column == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor visible es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_colvis_column)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor visible solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_colvis_restore) || strtolower($empty_value_colvis_restore) == strtolower('seleccionar') || $empty_value_colvis_restore == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor restaurar es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_colvis_restore)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor restaurar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_copy) || strtolower($empty_value_copy) == strtolower('seleccionar') || $empty_value_copy == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor copiar es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_copy)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor copiar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_create) || strtolower($empty_value_create) == strtolower('seleccionar') || $empty_value_create == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor nuevo es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_create)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor nuevo solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_csv) || strtolower($empty_value_csv) == strtolower('seleccionar') || $empty_value_csv == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor csv es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_csv)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor csv solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_delete) || strtolower($empty_value_delete) == strtolower('seleccionar') || $empty_value_delete == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor eliminar es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_delete)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor eliminar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_detail) || strtolower($empty_value_detail) == strtolower('seleccionar') || $empty_value_detail == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor detalle es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_detail)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor detalle solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_email) || strtolower($empty_value_email) == strtolower('seleccionar') || $empty_value_email == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor correos es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor correos solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_error) || strtolower($empty_value_error) == strtolower('seleccionar') || $empty_value_error == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor error es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_error)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor error solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_excel) || strtolower($empty_value_excel) == strtolower('seleccionar') || $empty_value_excel == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor excel es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_excel)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor excel solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_file) || strtolower($empty_value_file) == strtolower('seleccionar') || $empty_value_file == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor archivo es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_file)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor archivo solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_import) || strtolower($empty_value_import) == strtolower('seleccionar') || $empty_value_import == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor importar es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_import)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor importar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_page_length) || strtolower($empty_value_page_length) == strtolower('seleccionar') || $empty_value_page_length == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor mostrar es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_page_length)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor mostrar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_pdf) || strtolower($empty_value_pdf) == strtolower('seleccionar') || $empty_value_pdf == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor pdf es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_pdf)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor pdf solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_print) || strtolower($empty_value_print) == strtolower('seleccionar') || $empty_value_print == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor imprimir es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_print)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor imprimir solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_remove) || strtolower($empty_value_remove) == strtolower('seleccionar') || $empty_value_remove == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor remover es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_remove)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor remover solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_report) || strtolower($empty_value_report) == strtolower('seleccionar') || $empty_value_report == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor reportes es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_report)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor reportes solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_restore) || strtolower($empty_value_restore) == strtolower('seleccionar') || $empty_value_restore == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor restaurar es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_restore)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor restaurar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_sub_menu) || strtolower($empty_value_sub_menu) == strtolower('seleccionar') || $empty_value_sub_menu == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor sub menu crud es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_sub_menu)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor sub menu crud solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_sync) || strtolower($empty_value_sync) == strtolower('seleccionar') || $empty_value_sync == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor sincronizar es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_sync)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor sincronizar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_template) || strtolower($empty_value_template) == strtolower('seleccionar') || $empty_value_template == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor plantilla es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_template)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor plantilla solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_update) || strtolower($empty_value_update) == strtolower('seleccionar') || $empty_value_update == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor actualizar es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_value_update)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor actualizar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_state) || strtolower($empty_state) == strtolower('seleccionar') || $empty_state == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_state)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_authorized_permits, d_azp_authorized_permits_id_azp_authorized_permits . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está actualizando no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_state = $this->db->select('*', t_azp_sys_state, d_azp_sys_state_id_azp_sys_state . " = '" . $empty_state . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_state) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_state) == '') { $sql_state[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_state[0][0]) != strtolower($empty_state)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El estado seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_authorized_permits_update(array $data) : array {
			$var_error = $this->error_sql_azp_authorized_permits_update($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_ap_id']);
				$empty_description = $this->db->scape($data['field_up_ap_description']);
				$empty_state = $this->db->scape($data['field_up_ap_state']);
				#-------------------------------------------------------------------------#
				$empty_btn_action = $this->db->scape($data['field_up_ap_btn_action']);
				$empty_btn_export = $this->db->scape($data['field_up_ap_btn_export']);
				$empty_btn_search = $this->db->scape($data['field_up_ap_btn_search']);
				$empty_btn_visible = $this->db->scape($data['field_up_ap_btn_visible']);
				$empty_data_by_create = $this->db->scape($data['field_up_ap_data_by_create']);
				$empty_data_change = $this->db->scape($data['field_up_ap_data_change']);
				$empty_data_eliminate = $this->db->scape($data['field_up_ap_data_eliminate']);
				$empty_data_read = $this->db->scape($data['field_up_ap_data_read']);
				$empty_data_remove = $this->db->scape($data['field_up_ap_data_remove']);
				$empty_menu_value = $this->db->scape($data['field_up_ap_menu_value']);
				$empty_module_value = $this->db->scape($data['field_up_ap_module_value']);
				$empty_value_associate = $this->db->scape($data['field_up_ap_value_associate']);
				$empty_value_change = $this->db->scape($data['field_up_ap_value_change']);
				$empty_value_close = $this->db->scape($data['field_up_ap_value_close']);
				$empty_value_column_toggle = $this->db->scape($data['field_up_ap_value_column_toggle']);
				$empty_value_colvis_column = $this->db->scape($data['field_up_ap_value_colvis_column']);
				$empty_value_colvis_restore = $this->db->scape($data['field_up_ap_value_colvis_restore']);
				$empty_value_copy = $this->db->scape($data['field_up_ap_value_copy']);
				$empty_value_create = $this->db->scape($data['field_up_ap_value_create']);
				$empty_value_csv = $this->db->scape($data['field_up_ap_value_csv']);
				$empty_value_delete = $this->db->scape($data['field_up_ap_value_delete']);
				$empty_value_detail = $this->db->scape($data['field_up_ap_value_detail']);
				$empty_value_email = $this->db->scape($data['field_up_ap_value_email']);
				$empty_value_error = $this->db->scape($data['field_up_ap_value_error']);
				$empty_value_excel = $this->db->scape($data['field_up_ap_value_excel']);
				$empty_value_file = $this->db->scape($data['field_up_ap_value_file']);
				$empty_value_import = $this->db->scape($data['field_up_ap_value_import']);
				$empty_value_page_length = $this->db->scape($data['field_up_ap_value_page_length']);
				$empty_value_pdf = $this->db->scape($data['field_up_ap_value_pdf']);
				$empty_value_print = $this->db->scape($data['field_up_ap_value_print']);
				$empty_value_remove = $this->db->scape($data['field_up_ap_value_remove']);
				$empty_value_report = $this->db->scape($data['field_up_ap_value_report']);
				$empty_value_restore = $this->db->scape($data['field_up_ap_value_restore']);
				$empty_value_sub_menu = $this->db->scape($data['field_up_ap_value_sub_menu']);
				$empty_value_sync = $this->db->scape($data['field_up_ap_value_sync']);
				$empty_value_template = $this->db->scape($data['field_up_ap_value_template']);
				$empty_value_update = $this->db->scape($data['field_up_ap_value_update']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_authorized_permits_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_authorized_permits_m_date_modified => DATE_HOUR,
					d_azp_authorized_permits_m_description => $empty_description,
					d_azp_authorized_permits_m_status => $empty_state,
					d_azp_authorized_permits_t_btn_action => $empty_btn_action,
					d_azp_authorized_permits_t_btn_export => $empty_btn_export,
					d_azp_authorized_permits_t_btn_search => $empty_btn_search,
					d_azp_authorized_permits_t_btn_visible => $empty_btn_visible,
					d_azp_authorized_permits_t_data_by_create => $empty_data_by_create,
					d_azp_authorized_permits_t_data_change => $empty_data_change,
					d_azp_authorized_permits_t_data_eliminate => $empty_data_eliminate,
					d_azp_authorized_permits_t_data_read => $empty_data_read,
					d_azp_authorized_permits_t_data_remove => $empty_data_remove,
					d_azp_authorized_permits_t_menu_value => $empty_menu_value,
					d_azp_authorized_permits_t_module_value => $empty_module_value,
					d_azp_authorized_permits_t_value_associate => $empty_value_associate,
					d_azp_authorized_permits_t_value_change => $empty_value_change,
					d_azp_authorized_permits_t_value_close => $empty_value_close,
					d_azp_authorized_permits_t_value_column_toggle => $empty_value_column_toggle,
					d_azp_authorized_permits_t_value_colvis_column => $empty_value_colvis_column,
					d_azp_authorized_permits_t_value_colvis_restore => $empty_value_colvis_restore,
					d_azp_authorized_permits_t_value_copy => $empty_value_copy,
					d_azp_authorized_permits_t_value_create => $empty_value_create,
					d_azp_authorized_permits_t_value_csv => $empty_value_csv,
					d_azp_authorized_permits_t_value_delete => $empty_value_delete,
					d_azp_authorized_permits_t_value_detail => $empty_value_detail,
					d_azp_authorized_permits_t_value_email => $empty_value_email,
					d_azp_authorized_permits_t_value_error => $empty_value_error,
					d_azp_authorized_permits_t_value_excel => $empty_value_excel,
					d_azp_authorized_permits_t_value_file => $empty_value_file,
					d_azp_authorized_permits_t_value_import => $empty_value_import,
					d_azp_authorized_permits_t_value_page_length => $empty_value_page_length,
					d_azp_authorized_permits_t_value_pdf => $empty_value_pdf,
					d_azp_authorized_permits_t_value_print => $empty_value_print,
					d_azp_authorized_permits_t_value_remove => $empty_value_remove,
					d_azp_authorized_permits_t_value_report => $empty_value_report,
					d_azp_authorized_permits_t_value_restore => $empty_value_restore,
					d_azp_authorized_permits_t_value_sub_menu => $empty_value_sub_menu,
					d_azp_authorized_permits_t_value_sync => $empty_value_sync,
					d_azp_authorized_permits_t_value_template => $empty_value_template,
					d_azp_authorized_permits_t_value_update => $empty_value_update,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_authorized_permits, $var_array, d_azp_authorized_permits_id_azp_authorized_permits . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>