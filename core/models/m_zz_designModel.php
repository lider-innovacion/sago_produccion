<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_zz_designModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_show_full_columns(string $table) {
			# Seleccionar los registros de la tabla
			return $this->db->query("SHOW COLUMNS FROM " . DATABASE['name'] . '.' . $table . ";");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_show_full_tables() {
			# Seleccionar los registros de la tabla
			return $this->db->query("SHOW FULL TABLES FROM " . DATABASE['name'] . ";");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_application_access() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_application." . d_azp_application_id_azp_application . " AS 'lbl_azp_application_id_azp_application',
					tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name'
				FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits. " . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits. " . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_application . " tc_azp_application
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_application . " = tc_azp_application." . d_azp_application_id_azp_application . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits. " . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits. " . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits. " . d_azp_authorized_permits_t_menu_value . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				-- ---------------------------------------------------------------
				GROUP BY tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_application . " ASC
				ORDER BY tc_azp_application." . d_azp_application_t_name . " ASC
				-- ---------------------------------------------------------------
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_menu_crud_icon_code(string $var_url) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_menu_crud." . d_azp_menu_crud_m_description . " AS 'lbl_azp_menu_crud_m_description',
					tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url',
					tc_azp_icon_code." . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name'
				FROM " . t_azp_menu_crud . " tc_azp_menu_crud
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "'
				-- ---------------------------------------------------------------
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_menu_crud_script(string $var_url) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_menu_crud. " . d_azp_menu_crud_t_script . " AS 'lbl_azp_menu_crud_t_script',
					tc_azp_table_prefix. " . d_azp_table_prefix_t_name . " AS 'lbl_azp_table_prefix_t_name'
				FROM " . t_azp_menu_crud . " tc_azp_menu_crud
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_table_prefix . " tc_azp_table_prefix
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_table_prefix . " = tc_azp_table_prefix." . d_azp_table_prefix_id_azp_table_prefix . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_menu_crud. " . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud. " . d_azp_menu_crud_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "'
				-- ---------------------------------------------------------------
				ORDER BY " . d_azp_menu_crud_t_script . " ASC
				-- ---------------------------------------------------------------
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_btn_action(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_btn_action . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_btn_export(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_btn_export . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_btn_search(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_btn_search . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_btn_visible(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_btn_visible . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_data_by_create(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_data_by_create . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_data_change(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_data_change . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_data_eliminate(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_data_eliminate . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_data_read(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_data_read . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_data_remove(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_data_remove . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_menu_value() {
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
			foreach ($var_sql as $key => $value) { $var_id = $value[d_azp_user_v_id_azp_application]; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name',
					tc_azp_icon_code." . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name'
				FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits. " . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits. " . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_application . " tc_azp_application
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_application . " = tc_azp_application." . d_azp_application_id_azp_application . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits. " . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits. " . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits. " . d_azp_authorized_permits_t_menu_value . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_application . " = '" . $var_id . "'
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_v_id_azp_application . " = '" . $var_id . "'
				-- ---------------------------------------------------------------
				ORDER BY tc_azp_menu_crud." . d_azp_menu_crud_t_name . " ASC
				-- ---------------------------------------------------------------
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_module_value(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . 'access/');
				# Detener la ejecucion
				exit();
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_associate(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_associate . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_change(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_change . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_close(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_close . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_column_toggle(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_column_toggle . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_colvis_column(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_colvis_column . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_colvis_restore(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_colvis_restore . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_copy(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_copy . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_create(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_create . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_csv(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_csv . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_delete(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_delete . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_detail(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_detail . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_email(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_email . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_error(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_error . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_excel(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_excel . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_file(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- ---------------------------------------------------------------
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_file . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_import(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_import . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_page_length(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_page_length . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_pdf(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_pdf . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_print(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_print . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_remove(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_remove . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_report(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_report . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_restore(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_restore . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_sub_menu(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_sub_menu . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_sync(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_sync . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}
		
		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_template(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_template . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_permits_value_update(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits." . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits." . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_authorized_permits." . d_azp_authorized_permits_t_value_update . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_deleted . " = '1'
					AND tc_azp_icon_code." . d_azp_icon_code_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND (tc_azp_menu_crud." . d_azp_menu_crud_t_api . " = '" . $var_url . "'
						OR tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "')
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
				LIMIT 1
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; }
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_sub_menu_crud_group_by(string $var_url) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_icon_code." . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " AS 'lbl_azp_menu_crud_id_azp_menu_crud',
					tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url'
				FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits. " . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits. " . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits. " . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits. " . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits. " . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_t_url . " = '" . $var_url . "'
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				-- ---------------------------------------------------------------
				GROUP BY tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				-- ---------------------------------------------------------------
				ORDER BY tc_azp_menu_crud." . d_azp_menu_crud_t_name . " ASC
				-- ---------------------------------------------------------------
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_sub_menu_crud_order_by(string $var_id) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_icon_code." . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url'
				FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits. " . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits. " . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				INNER JOIN " . t_azp_sub_menu_crud . " tc_azp_sub_menu_crud
					ON tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_v_id_azp_sub_under . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits. " . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits. " . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits. " . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_m_deleted . " = '1'
					AND tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_m_status . " = '1'
					AND tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_v_id_azp_menu_crud . " = '" . $var_id . "'
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				-- ---------------------------------------------------------------
				ORDER BY tc_azp_menu_crud." . d_azp_menu_crud_t_name . " ASC
				-- ---------------------------------------------------------------
			");
		}









		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_select_azp_menu_crud_t_url(string $var_url) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT * FROM " . t_azp_menu_crud . "
				-- ---------------------------------------------------------------
				WHERE " . d_azp_menu_crud_m_deleted . " = '1'
					AND " . d_azp_menu_crud_t_url . " = '" . $var_url . "'
				-- ---------------------------------------------------------------
				LIMIT 1
				-- ---------------------------------------------------------------
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_select_azp_menu_main_backend_account() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_menu_main. " . d_azp_menu_main_id_azp_menu_main . " AS 'lbl_azp_menu_main_id_azp_menu_main',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_menu_main." . d_azp_menu_main_m_date_created . " AS 'lbl_azp_menu_main_m_date_created',
					tc_azp_menu_main." . d_azp_menu_main_m_date_modified . " AS 'lbl_azp_menu_main_m_date_modified',
					tc_azp_menu_main." . d_azp_menu_main_m_description . " AS 'lbl_azp_menu_main_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_menu_main. " . d_azp_menu_main_t_name . " AS 'lbl_azp_menu_main_t_name',
					tc_azp_menu_main. " . d_azp_menu_main_t_order . " AS 'lbl_azp_menu_main_t_order',
					tc_azp_menu_main. " . d_azp_menu_main_t_url . " AS 'lbl_azp_menu_main_t_url',
					tc_azp_icon_code. " . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name'
				FROM " . t_azp_menu_main . " tc_azp_menu_main
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_menu_main." . d_azp_menu_main_m_by_created . " = tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_menu_main." . d_azp_menu_main_m_by_modified . " = tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_menu_main." . d_azp_menu_main_m_level . " = tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_menu_main." . d_azp_menu_main_m_status . " = tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_main. " . d_azp_menu_main_v_id_azp_icon_code . " = tc_azp_icon_code. " . d_azp_icon_code_id_azp_icon_code . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_menu_main. " . d_azp_menu_main_m_deleted . " = '1'
					AND tc_azp_menu_main. " . d_azp_menu_main_m_status . " = '1'
				-- ---------------------------------------------------------------
				ORDER BY tc_azp_menu_main." . d_azp_menu_main_t_order . " ASC,
					tc_azp_menu_main." . d_azp_menu_main_t_name . " ASC
				-- ---------------------------------------------------------------
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_select_azp_menu_main_frontend() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_menu_main. " . d_azp_menu_main_id_azp_menu_main . " AS 'lbl_azp_menu_main_id_azp_menu_main',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_menu_main." . d_azp_menu_main_m_date_created . " AS 'lbl_azp_menu_main_m_date_created',
					tc_azp_menu_main." . d_azp_menu_main_m_date_modified . " AS 'lbl_azp_menu_main_m_date_modified',
					tc_azp_menu_main." . d_azp_menu_main_m_description . " AS 'lbl_azp_menu_main_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_menu_main. " . d_azp_menu_main_t_name . " AS 'lbl_azp_menu_main_t_name',
					tc_azp_menu_main. " . d_azp_menu_main_t_order . " AS 'lbl_azp_menu_main_t_order',
					tc_azp_menu_main. " . d_azp_menu_main_t_url . " AS 'lbl_azp_menu_main_t_url',
					tc_azp_icon_code. " . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name'
				FROM " . t_azp_menu_main . " tc_azp_menu_main
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_menu_main." . d_azp_menu_main_m_by_created . " = tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_menu_main." . d_azp_menu_main_m_by_modified . " = tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_menu_main." . d_azp_menu_main_m_level . " = tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_menu_main." . d_azp_menu_main_m_status . " = tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_main. " . d_azp_menu_main_v_id_azp_icon_code . " = tc_azp_icon_code. " . d_azp_icon_code_id_azp_icon_code . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_menu_main. " . d_azp_menu_main_m_deleted . " = '1'
					AND tc_azp_menu_main. " . d_azp_menu_main_m_status . " = '1'
				-- ---------------------------------------------------------------
				ORDER BY tc_azp_menu_main." . d_azp_menu_main_t_order . " ASC,
					tc_azp_menu_main." . d_azp_menu_main_t_name . " ASC
				-- ---------------------------------------------------------------
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_menu_profile() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_menu_profile. " . d_azp_menu_profile_id_azp_menu_profile . " AS 'lbl_azp_menu_profile_id_azp_menu_profile',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_menu_profile." . d_azp_menu_profile_m_date_created . " AS 'lbl_azp_menu_profile_m_date_created',
					tc_azp_menu_profile." . d_azp_menu_profile_m_date_modified . " AS 'lbl_azp_menu_profile_m_date_modified',
					tc_azp_menu_profile." . d_azp_menu_profile_m_description . " AS 'lbl_azp_menu_profile_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_menu_profile. " . d_azp_menu_profile_t_name . " AS 'lbl_azp_menu_profile_t_name',
					tc_azp_menu_profile. " . d_azp_menu_profile_t_order . " AS 'lbl_azp_menu_profile_t_order',
					tc_azp_menu_profile. " . d_azp_menu_profile_t_url . " AS 'lbl_azp_menu_profile_t_url',
					tc_azp_icon_code. " . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name'
				FROM " . t_azp_menu_profile . " tc_azp_menu_profile
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_menu_profile." . d_azp_menu_profile_m_by_created . " = tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_menu_profile." . d_azp_menu_profile_m_by_modified . " = tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_menu_profile." . d_azp_menu_profile_m_level . " = tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_menu_profile." . d_azp_menu_profile_m_status . " = tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_profile. " . d_azp_menu_profile_v_id_azp_icon_code . " = tc_azp_icon_code. " . d_azp_icon_code_id_azp_icon_code . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_menu_profile. " . d_azp_menu_profile_m_deleted . " = '1'
					AND tc_azp_menu_profile. " . d_azp_menu_profile_m_status . " = '1'
				-- ---------------------------------------------------------------
				ORDER BY tc_azp_menu_profile." . d_azp_menu_profile_t_order . " ASC,
					tc_azp_menu_profile." . d_azp_menu_profile_t_name . " ASC
				-- ---------------------------------------------------------------
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_script_route() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_script. " . d_azp_script_t_route . " AS 'lbl_azp_script_t_route'
				FROM " . t_azp_script . " tc_azp_script
				-- ---------------------------------------------------------------
				WHERE tc_azp_script. " . d_azp_script_m_deleted . " = '1'
					AND tc_azp_script. " . d_azp_script_m_status . " = '1'
				-- ---------------------------------------------------------------
				ORDER BY " . d_azp_script_t_route . " ASC
				-- ---------------------------------------------------------------
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_user_session() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_user." . d_azp_user_t_email . " AS 'lbl_azp_user_t_email',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name',
					tc_azp_data_personal." . d_azp_data_personal_t_firm . " AS 'lbl_azp_data_personal_t_firm',
					tc_azp_data_personal." . d_azp_data_personal_t_names . " AS 'lbl_azp_data_personal_t_names',
					tc_azp_data_personal." . d_azp_data_personal_t_surnames . " AS 'lbl_azp_data_personal_t_surnames'
				FROM " . t_azp_user . " tc_azp_user
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_user." . d_azp_user_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
					ON tc_azp_user." . d_azp_user_id_azp_user . " = tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] .  "'
				-- ---------------------------------------------------------------
				LIMIT 1
				-- ---------------------------------------------------------------
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_tc_azp_menu_crud_group_by_ad() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_icon_code." . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " AS 'lbl_azp_menu_crud_id_azp_menu_crud',
					tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url'
				FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits. " . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits. " . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				INNER JOIN " . t_azp_sub_menu_crud . " tc_azp_sub_menu_crud
					ON tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits. " . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits. " . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits. " . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_m_deleted . " = '1'
					AND tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_m_status . " = '1'
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				-- ---------------------------------------------------------------
				GROUP BY tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_v_id_azp_menu_crud . "
				-- ---------------------------------------------------------------
				ORDER BY tc_azp_menu_crud." . d_azp_menu_crud_t_name . " ASC
				-- ---------------------------------------------------------------
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_tc_azp_menu_crud_group_by_id() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_icon_code." . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " AS 'lbl_azp_menu_crud_id_azp_menu_crud',
					tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url'
				FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits. " . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits. " . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				INNER JOIN " . t_azp_sub_menu_crud . " tc_azp_sub_menu_crud
					ON tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits. " . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits. " . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits. " . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_m_deleted . " = '1'
					AND tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				-- ---------------------------------------------------------------
				GROUP BY tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_v_id_azp_menu_crud . "
				-- ---------------------------------------------------------------
				ORDER BY tc_azp_menu_crud." . d_azp_menu_crud_t_name . " ASC
				-- ---------------------------------------------------------------
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_tc_azp_menu_crud_order_by(string $var_id) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_icon_code." . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url'
				FROM " . t_azp_authorized_permits . " tc_azp_authorized_permits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_menu_crud . " tc_azp_menu_crud
					ON tc_azp_authorized_permits. " . d_azp_authorized_permits_v_id_azp_menu_crud . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_authorized_permits. " . d_azp_authorized_permits_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " = tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_role." . d_azp_role_id_azp_role . " = tc_azp_user." . d_azp_user_v_id_azp_role . "
				INNER JOIN " . t_azp_sub_menu_crud . " tc_azp_sub_menu_crud
					ON tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_v_id_azp_sub_under . " = tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_authorized_permits. " . d_azp_authorized_permits_m_deleted . " = '1'
					AND tc_azp_authorized_permits. " . d_azp_authorized_permits_m_status . " = '1'
					AND tc_azp_authorized_permits. " . d_azp_authorized_permits_t_module_value . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_status . " = '1'
					AND tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_m_deleted . " = '1'
					AND tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_m_status . " = '1'
					AND tc_azp_sub_menu_crud." . d_azp_sub_menu_crud_v_id_azp_menu_crud . " = '" . $var_id . "'
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
					AND tc_azp_role." . d_azp_role_m_status . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				-- ---------------------------------------------------------------
				ORDER BY tc_azp_menu_crud." . d_azp_menu_crud_t_name . " ASC
				-- ---------------------------------------------------------------
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		final public function sql_system_message() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_system_message." . d_azp_system_message_id_azp_system_message . " AS 'lbl_azp_system_message_id_azp_system_message',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_system_message." . d_azp_system_message_m_date_created . " AS 'lbl_azp_system_message_m_date_created',
					tc_azp_system_message." . d_azp_system_message_m_date_modified . " AS 'lbl_azp_system_message_m_date_modified',
					tc_azp_system_message." . d_azp_system_message_m_description . " AS 'lbl_azp_system_message_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_system_message." . d_azp_system_message_t_message . " AS 'lbl_azp_system_message_t_message',
					tc_azp_system_message." . d_azp_system_message_t_name . " AS 'lbl_azp_system_message_t_name',
					tc_azp_configuration_alert." . d_azp_configuration_alert_t_name . " AS 'lbl_azp_configuration_alert_t_name',
					tc_azp_message_general." . d_azp_message_general_t_name . " AS 'lbl_azp_message_general_t_name',
					tc_azp_message_get." . d_azp_message_get_t_name . " AS 'lbl_azp_message_get_t_name'
				FROM " . t_azp_system_message . " tc_azp_system_message
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_system_message." . d_azp_system_message_m_by_created . " = tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_system_message." . d_azp_system_message_m_by_modified . " = tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_system_message." . d_azp_system_message_m_level . " = tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_system_message." . d_azp_system_message_m_status . " = tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_alert . " tc_azp_configuration_alert
					ON tc_azp_system_message." . d_azp_system_message_v_id_azp_configuration_alert . " = tc_azp_configuration_alert." . d_azp_configuration_alert_id_azp_configuration_alert . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_message_general . " tc_azp_message_general
					ON tc_azp_system_message." . d_azp_system_message_v_id_azp_message_general . " = tc_azp_message_general." . d_azp_message_general_id_azp_message_general . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_message_get . " tc_azp_message_get
					ON tc_azp_system_message." . d_azp_system_message_v_id_azp_message_get . " = tc_azp_message_get." . d_azp_message_get_id_azp_message_get . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_system_message." . d_azp_system_message_m_deleted . " = '1'
				-- ---------------------------------------------------------------
				ORDER BY tc_azp_system_message." . d_azp_system_message_id_azp_system_message . " ASC
				-- ---------------------------------------------------------------
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Database
		/*final public function sql_permits_user_role() {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_user . " tc_azp_user
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_user." . d_azp_user_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_user." . d_azp_user_v_id_azp_role . " = '1'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				-- ---------------------------------------------------------------
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			}
		}*/

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>