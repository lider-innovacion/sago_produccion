<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_crt_request_dataModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_log_email() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_log_email." . d_azp_crt_log_email_id_azp_crt_log_email . " AS 'lbl_azp_crt_log_email_id_azp_crt_log_email',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_log_email." . d_azp_crt_log_email_m_date_created . " AS 'lbl_azp_crt_log_email_m_date_created',
					tc_azp_crt_log_email." . d_azp_crt_log_email_m_date_modified . " AS 'lbl_azp_crt_log_email_m_date_modified',
					tc_azp_crt_log_email." . d_azp_crt_log_email_m_description . " AS 'lbl_azp_crt_log_email_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_log_email." . d_azp_crt_log_email_t_affair . " AS 'lbl_azp_crt_log_email_t_affair',
					tc_azp_crt_log_email." . d_azp_crt_log_email_t_email_main . " AS 'lbl_azp_crt_log_email_t_email_main',
					tc_azp_crt_log_email." . d_azp_crt_log_email_t_email_copy . " AS 'lbl_azp_crt_log_email_t_email_copy',
					tc_azp_crt_log_email." . d_azp_crt_log_email_t_email_intern . " AS 'lbl_azp_crt_log_email_t_email_intern',
					tc_azp_crt_log_email." . d_azp_crt_log_email_t_message . " AS 'lbl_azp_crt_log_email_t_message',
					tc_azp_crt_log_email." . d_azp_crt_log_email_t_template . " AS 'lbl_azp_crt_log_email_t_template'
				FROM " . t_azp_crt_log_email . " tc_azp_crt_log_email
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_log_email." . d_azp_crt_log_email_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_log_email." . d_azp_crt_log_email_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_log_email." . d_azp_crt_log_email_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_log_email." . d_azp_crt_log_email_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_log_email." . d_azp_crt_log_email_m_deleted . " = '1'
				ORDER BY tc_azp_crt_log_email." . d_azp_crt_log_email_id_azp_crt_log_email . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_confirm_1_main() {
			if (isset($_GET['field_id'])) { if ($_GET['field_id'] != '') { $var_id = $_GET['field_id']; } else { $var_id = "''"; } } else { $var_id = "''"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " AS 'lbl_azp_crt_third_parties_id_azp_crt_third_parties',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_created . " AS 'lbl_azp_crt_third_parties_m_date_created',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_modified . " AS 'lbl_azp_crt_third_parties_m_date_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_description . " AS 'lbl_azp_crt_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_address . " AS 'lbl_azp_crt_third_parties_t_address',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_consecutive . " AS 'lbl_azp_crt_third_parties_t_consecutive',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_contact . " AS 'lbl_azp_crt_third_parties_t_contact',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_email . " AS 'lbl_azp_crt_third_parties_t_email',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_password . " AS 'lbl_azp_crt_third_parties_t_password',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_fixed . " AS 'lbl_azp_crt_third_parties_t_phone_fixed',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_movil . " AS 'lbl_azp_crt_third_parties_t_phone_movil',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_second . " AS 'lbl_azp_crt_third_parties_t_phone_second',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_city . " AS 'lbl_azp_crt_third_parties_v_id_azp_crt_city',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . " AS 'lbl_azp_crt_third_parties_v_id_azp_crt_third_type'
				FROM " . t_azp_crt_third_parties . " tc_azp_crt_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_deleted . " = '1'
					AND tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " IN (" . $var_id . ")
				ORDER BY tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_confirm_1_intern() {
			if (isset($_GET['field_id'])) { if ($_GET['field_id'] != '') { $var_id = $_GET['field_id']; } else { $var_id = "''"; } } else { $var_id = "''"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_email_copy." . d_azp_crt_email_copy_id_azp_crt_email_copy . " AS 'lbl_azp_crt_email_copy_id_azp_crt_email_copy',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_date_created . " AS 'lbl_azp_crt_email_copy_m_date_created',
					tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_date_modified . " AS 'lbl_azp_crt_email_copy_m_date_modified',
					tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_description . " AS 'lbl_azp_crt_email_copy_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_email_copy." . d_azp_crt_email_copy_t_email . " AS 'lbl_azp_crt_email_copy_t_email',
					tc_azp_crt_email_copy." . d_azp_crt_email_copy_t_names . " AS 'lbl_azp_crt_email_copy_t_names',
					tc_azp_crt_email_copy." . d_azp_crt_email_copy_t_surnames . " AS 'lbl_azp_crt_email_copy_t_surnames'
				FROM " . t_azp_crt_email_copy . " tc_azp_crt_email_copy
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_deleted . " = '1'
					AND tc_azp_crt_email_copy." . d_azp_crt_email_copy_id_azp_crt_email_copy . " IN (" . $var_id . ")
				ORDER BY tc_azp_crt_email_copy." . d_azp_crt_email_copy_id_azp_crt_email_copy . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_confirm_2_main() {
			if (isset($_GET['field_id'])) { if ($_GET['field_id'] != '') { $var_id = $_GET['field_id']; } else { $var_id = "''"; } } else { $var_id = "''"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . " AS 'lbl_azp_crt_client_id_azp_crt_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_client." . d_azp_crt_client_m_date_created . " AS 'lbl_azp_crt_client_m_date_created',
					tc_azp_crt_client." . d_azp_crt_client_m_date_modified . " AS 'lbl_azp_crt_client_m_date_modified',
					tc_azp_crt_client." . d_azp_crt_client_m_description . " AS 'lbl_azp_crt_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_address . " AS 'lbl_azp_crt_client_t_address',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_client." . d_azp_crt_client_t_email . " AS 'lbl_azp_crt_client_t_email',
					tc_azp_crt_client." . d_azp_crt_client_t_password . " AS 'lbl_azp_crt_client_t_password',
					tc_azp_crt_client." . d_azp_crt_client_t_person . " AS 'lbl_azp_crt_client_t_person',
					tc_azp_crt_client." . d_azp_crt_client_t_position . " AS 'lbl_azp_crt_client_t_position',
					tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . " AS 'lbl_azp_crt_client_v_id_azp_crt_bank',
					tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_city . " AS 'lbl_azp_crt_client_v_id_azp_crt_city'
				FROM " . t_azp_crt_client . " tc_azp_crt_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_client." . d_azp_crt_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_client." . d_azp_crt_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_client." . d_azp_crt_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_client." . d_azp_crt_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_client." . d_azp_crt_client_m_deleted . " = '1'
					AND tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . " IN (" . $var_id . ")
				ORDER BY tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_confirm_2_copy() {
			if (isset($_GET['field_id'])) { if ($_GET['field_id'] != '') { $var_id = $_GET['field_id']; } else { $var_id = "''"; } } else { $var_id = "''"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . " AS 'lbl_azp_crt_client_id_azp_crt_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_client." . d_azp_crt_client_m_date_created . " AS 'lbl_azp_crt_client_m_date_created',
					tc_azp_crt_client." . d_azp_crt_client_m_date_modified . " AS 'lbl_azp_crt_client_m_date_modified',
					tc_azp_crt_client." . d_azp_crt_client_m_description . " AS 'lbl_azp_crt_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_address . " AS 'lbl_azp_crt_client_t_address',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_client." . d_azp_crt_client_t_email . " AS 'lbl_azp_crt_client_t_email',
					tc_azp_crt_client." . d_azp_crt_client_t_password . " AS 'lbl_azp_crt_client_t_password',
					tc_azp_crt_client." . d_azp_crt_client_t_person . " AS 'lbl_azp_crt_client_t_person',
					tc_azp_crt_client." . d_azp_crt_client_t_position . " AS 'lbl_azp_crt_client_t_position',
					tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . " AS 'lbl_azp_crt_client_v_id_azp_crt_bank',
					tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_city . " AS 'lbl_azp_crt_client_v_id_azp_crt_city'
				FROM " . t_azp_crt_client . " tc_azp_crt_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_client." . d_azp_crt_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_client." . d_azp_crt_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_client." . d_azp_crt_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_client." . d_azp_crt_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_client." . d_azp_crt_client_m_deleted . " = '1'
					AND tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . " IN (" . $var_id . ")
				ORDER BY tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_confirm_2_intern() {
			if (isset($_GET['field_id'])) { if ($_GET['field_id'] != '') { $var_id = $_GET['field_id']; } else { $var_id = "''"; } } else { $var_id = "''"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_email_copy." . d_azp_crt_email_copy_id_azp_crt_email_copy . " AS 'lbl_azp_crt_email_copy_id_azp_crt_email_copy',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_date_created . " AS 'lbl_azp_crt_email_copy_m_date_created',
					tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_date_modified . " AS 'lbl_azp_crt_email_copy_m_date_modified',
					tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_description . " AS 'lbl_azp_crt_email_copy_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_email_copy." . d_azp_crt_email_copy_t_email . " AS 'lbl_azp_crt_email_copy_t_email',
					tc_azp_crt_email_copy." . d_azp_crt_email_copy_t_names . " AS 'lbl_azp_crt_email_copy_t_names',
					tc_azp_crt_email_copy." . d_azp_crt_email_copy_t_surnames . " AS 'lbl_azp_crt_email_copy_t_surnames'
				FROM " . t_azp_crt_email_copy . " tc_azp_crt_email_copy
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_email_copy." . d_azp_crt_email_copy_m_deleted . " = '1'
					AND tc_azp_crt_email_copy." . d_azp_crt_email_copy_id_azp_crt_email_copy . " IN (" . $var_id . ")
				ORDER BY tc_azp_crt_email_copy." . d_azp_crt_email_copy_id_azp_crt_email_copy . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_data_client() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " AS 'lbl_azp_crt_bank_id_azp_crt_bank',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name'
				FROM " . t_azp_crt_request_update . " tc_azp_crt_request_update
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_update." . d_azp_crt_request_update_m_deleted . " = '1'
				GROUP BY tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_client . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_alert_certificate() {
			# Seleccionar los registros de la tabla
			return $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_crt_request_update, d_azp_crt_request_update_t_crt_document . " = ''");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_alert_client() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(lbl_result) AS 'lbl_count' FROM (
					SELECT COUNT(*) AS 'lbl_result'
					FROM azp_crt_request_update
					WHERE v_id_azp_crt_client != ''
					GROUP BY v_id_azp_crt_client
				) AS lbl_from;
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_alert_markimage() {
			# Seleccionar los registros de la tabla
			return $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_crt_request_update, d_azp_crt_request_update_t_crt_mark_image . " = '2'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_alert_receipt() {
			# Seleccionar los registros de la tabla
			return $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_crt_request_update, d_azp_crt_request_update_t_rcb_document . " = ''");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_type_certificate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_t_name'
				FROM " . t_azp_crt_request_update . " tc_azp_crt_request_update
				INNER JOIN " . t_azp_crt_request_type . " tc_azp_crt_request_type
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				GROUP BY tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_alert_type_certificate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(lbl_result) AS 'lbl_count' FROM (
					SELECT COUNT(*) AS 'lbl_result'
					FROM azp_crt_request_update
					WHERE v_id_azp_crt_request_type != ''
					GROUP BY v_id_azp_crt_request_type
				) AS lbl_from;
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_azp_user() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					" . d_azp_user_id_azp_user . " AS 'lbl_azp_user_id_azp_user',
					" . d_azp_user_t_email . " AS 'lbl_azp_user_t_email'
				FROM " . t_azp_user . "
				WHERE " . d_azp_user_id_azp_user . " > '2'
					AND " . d_azp_user_m_deleted . " = '1'
					AND " . d_azp_user_m_status . " = '1'
					AND " . d_azp_user_v_id_azp_application . " = '5'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_by_create() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_data_id_azp_crt_request_data',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_created . " AS 'lbl_azp_crt_request_data_m_date_created',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_modified . " AS 'lbl_azp_crt_request_data_m_date_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_description . " AS 'lbl_azp_crt_request_data_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_date . " AS 'lbl_azp_crt_request_data_s_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_validate . " AS 'lbl_azp_crt_request_data_s_validate',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_code . " AS 'lbl_azp_crt_request_data_t_applicant_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_entity . " AS 'lbl_azp_crt_request_data_t_applicant_entity',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_bilable . " AS 'lbl_azp_crt_request_data_t_bilable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_certificate_type . " AS 'lbl_azp_crt_request_data_t_certificate_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_city . " AS 'lbl_azp_crt_request_data_t_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_code . " AS 'lbl_azp_crt_request_data_t_client_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_name . " AS 'lbl_azp_crt_request_data_t_client_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_image . " AS 'lbl_azp_crt_request_data_t_crt_date_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_load . " AS 'lbl_azp_crt_request_data_t_crt_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_document . " AS 'lbl_azp_crt_request_data_t_crt_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_error . " AS 'lbl_azp_crt_request_data_t_crt_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_mark_image . " AS 'lbl_azp_crt_request_data_t_crt_mark_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_name . " AS 'lbl_azp_crt_request_data_t_crt_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_route . " AS 'lbl_azp_crt_request_data_t_crt_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_size . " AS 'lbl_azp_crt_request_data_t_crt_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_tmp_name . " AS 'lbl_azp_crt_request_data_t_crt_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_type . " AS 'lbl_azp_crt_request_data_t_crt_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " AS 'lbl_azp_crt_request_data_t_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_entity_dispatcher . " AS 'lbl_azp_crt_request_data_t_entity_dispatcher',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_nro_oblitation . " AS 'lbl_azp_crt_request_data_t_nro_oblitation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_observation . " AS 'lbl_azp_crt_request_data_t_observation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_process . " AS 'lbl_azp_crt_request_data_t_process',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_class . " AS 'lbl_azp_crt_request_data_t_provider_class',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " AS 'lbl_azp_crt_request_data_t_provider_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " AS 'lbl_azp_crt_request_data_t_refundable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_amount . " AS 'lbl_azp_crt_request_data_t_rcb_amount',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_date_load . " AS 'lbl_azp_crt_request_data_t_rcb_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_document . " AS 'lbl_azp_crt_request_data_t_rcb_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_error . " AS 'lbl_azp_crt_request_data_t_rcb_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_name . " AS 'lbl_azp_crt_request_data_t_rcb_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_route . " AS 'lbl_azp_crt_request_data_t_rcb_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_nro_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_nro_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_service . " AS 'lbl_azp_crt_request_data_t_rcb_service',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_size . " AS 'lbl_azp_crt_request_data_t_rcb_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_tmp_name . " AS 'lbl_azp_crt_request_data_t_rcb_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_type . " AS 'lbl_azp_crt_request_data_t_rcb_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'lbl_azp_crt_request_data_t_request_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_id . " AS 'lbl_azp_crt_request_data_t_request_id',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_send_city . " AS 'lbl_azp_crt_request_data_t_send_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_delivery . " AS 'lbl_azp_crt_request_data_t_supplier_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_request . " AS 'lbl_azp_crt_request_data_t_supplier_date_request',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
					tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_percentage . " AS 'lbl_azp_crt_phase_t_percentage',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_expiration ." tc_azp_crt_expiration
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
						= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_observation_type ." tc_azp_crt_observation_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
						= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_phase ." tc_azp_crt_phase
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_type ." tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = '1'
				ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_crt_request_data." . d_azs_crt_request_data_id_azs_crt_request_data . " AS 'lbl_azs_crt_request_data_id_azs_crt_request_data',
					tc_azs_crt_request_data." . d_azs_crt_request_data_m_date_modified . " AS 'lbl_azs_crt_request_data_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_crt_request_data." . d_azs_crt_request_data_m_date_created . " AS 'lbl_azs_crt_request_data_m_date_created',
					tc_azs_crt_request_data." . d_azs_crt_request_data_m_date_modified . " AS 'lbl_azs_crt_request_data_m_date_modified',
					tc_azs_crt_request_data." . d_azs_crt_request_data_m_description . " AS 'lbl_azs_crt_request_data_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name'
				FROM " . t_azs_crt_request_data . " tc_azs_crt_request_data
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_crt_request_data." . d_azs_crt_request_data_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_crt_request_data." . d_azs_crt_request_data_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_crt_request_data." . d_azs_crt_request_data_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_crt_request_data." . d_azs_crt_request_data_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_crt_request_data." . d_azs_crt_request_data_v_id_azp_crt_request_data . " = '" . $this->id . "'
				ORDER BY tc_azs_crt_request_data." . d_azs_crt_request_data_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_data_get() {
			# Control para la validacion de datos get
			if (isset($_GET['field_em_id'])) {
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $_GET['field_em_id'] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_business_name = $key_sql[d_azp_crt_third_parties_t_contact];
					endforeach;
				} else { $var_business_name = ''; }
				# Seleccionar los registros de la tabla
				return $this->db->query("
					-- ---------------------------------------------------------------
					SELECT
						tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " AS 'lbl_azp_crt_third_parties_id_azp_crt_third_parties',
						tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_email . " AS 'lbl_azp_crt_third_parties_t_email'
					FROM " . t_azp_crt_third_parties . " tc_azp_crt_third_parties
					-- ---------------------------------------------------------------
					WHERE tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_deleted . " = '1'
						AND tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_contact . " = '" . $var_business_name . "'
				");
			}
			# Control para la validacion de datos get
			if (isset($_GET['field_em_business_name'])) {
				# Seleccionar los registros de la tabla
				return $this->db->query("
					-- ---------------------------------------------------------------
					SELECT " . d_azp_crt_third_parties_t_contact . " AS 'lbl_azp_crt_third_parties_t_business_name'
					FROM " . t_azp_crt_third_parties . "
					-- ---------------------------------------------------------------
					WHERE " . d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $_GET['field_em_business_name'] . "'
						AND " . d_azp_crt_third_parties_m_deleted . " = '1'
						AND " . d_azp_crt_third_parties_m_status . " = '1'
				");
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_date_expiration() {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " AS 'lbl_id_azp_crt_request_data',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_modified . " AS 'lbl_m_date_modified',
					tc_azp_crt_alert." . d_azp_crt_alert_t_next_time_d . " AS 'lbl_t_next_time_d',
					tc_azp_crt_alert." . d_azp_crt_alert_t_next_time_h . " AS 'lbl_t_next_time_h',
					tc_azp_crt_alert." . d_azp_crt_alert_t_next_time_m . " AS 'lbl_t_next_time_m',
					tc_azp_crt_alert." . d_azp_crt_alert_t_next_time_s . " AS 'lbl_t_next_time_s',
					tc_azp_crt_alert." . d_azp_crt_alert_t_time_expired_d . " AS 'lbl_t_time_expired_d',
					tc_azp_crt_alert." . d_azp_crt_alert_t_time_expired_h . " AS 'lbl_t_time_expired_h',
					tc_azp_crt_alert." . d_azp_crt_alert_t_time_expired_m . " AS 'lbl_t_time_expired_m',
					tc_azp_crt_alert." . d_azp_crt_alert_t_time_expired_s . " AS 'lbl_t_time_expired_s'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_phase ." tc_azp_crt_phase
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_alert ." tc_azp_crt_alert
					ON tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
						= tc_azp_crt_alert." . d_azp_crt_alert_v_id_azp_crt_phase . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = '1'
				GROUP BY tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " ASC
				ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " ASC
			");
			# Validar si la consulta es verdadera
			if (false != $var_sql) {
				# Recorrer las filas de la consulta generada
				foreach ($var_sql as $key_sql):
					# Reemplazo de caracteres para formar nuevas fechas organizadas
					$var_next_time_d = str_replace('+', '', $key_sql['lbl_t_next_time_d']);
					$var_next_time_h = str_replace('+', '', $key_sql['lbl_t_next_time_h']);
					$var_next_time_m = str_replace('+', '', $key_sql['lbl_t_next_time_m']);
					$var_next_time_s = str_replace('+', '', $key_sql['lbl_t_next_time_s']);
					# Reemplazo de caracteres para formar nuevas fechas organizadas
					$var_time_expired_d = str_replace('+', '', $key_sql['lbl_t_time_expired_d']);
					$var_time_expired_h = str_replace('+', '', $key_sql['lbl_t_time_expired_h']);
					$var_time_expired_m = str_replace('+', '', $key_sql['lbl_t_time_expired_m']);
					$var_time_expired_s = str_replace('+', '', $key_sql['lbl_t_time_expired_s']);
					# Concatenacion del tiempo obtenido de las alertas segun estados y clientes
					$var_next_time_c = $var_next_time_d . ' ' . $var_next_time_h . ':' . $var_next_time_m . ':' . $var_next_time_s;
					# Concatenacion del tiempo obtenido de las alertas segun estados y clientes
					$var_time_expired_c = $var_time_expired_d . ' ' . $var_time_expired_h . ':' . $var_time_expired_m . ':' . $var_time_expired_s;
					# Asignacion de nuevo fecha en su formato correspondiente
					$var_date_definite = new DateTime($key_sql['lbl_m_date_modified']);
					# Asignacion de nuevo fecha en su formato correspondiente
					$var_date_current = new DateTime(DATE_HOUR);
					# Calculo de las fechas para obtener el intervalo de tiempo
					$var_interval = $var_date_definite->diff($var_date_current);
					# Modificacion del tiempo de intervalo con formato de fecha
					$var_date_modified = $var_interval->format('%D %H:%I:%S');
					# Validacion de los tiempos vencidos y proximos vencer
					if ($var_next_time_c != $var_time_expired_c) {
						# Validacion de los tiempos vencidos y proximos vencer
						if ($var_next_time_c < $var_time_expired_c) {
							# Validacion de los tiempos de intervalos con tiempos proximos
							if ($var_date_modified >= $var_next_time_c) {
								# Validacion de los tiempos de intervalos con tiempos vencidos
								if ($var_date_modified >= $var_time_expired_c) {
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(d_azp_crt_request_data_v_id_azp_crt_expiration => '3',);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_crt_request_data, $var_array,
										d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql['lbl_id_azp_crt_request_data'] . "' AND (" .
										d_azp_crt_request_data_v_id_azp_crt_phase . " = '1' OR " .
										d_azp_crt_request_data_v_id_azp_crt_phase . " = '2' OR " .
										d_azp_crt_request_data_v_id_azp_crt_phase . " = '3')"
									);
								} else {
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(d_azp_crt_request_data_v_id_azp_crt_expiration => '2',);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_crt_request_data, $var_array,
										d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql['lbl_id_azp_crt_request_data'] . "' AND (" .
										d_azp_crt_request_data_v_id_azp_crt_phase . " = '1' OR " .
										d_azp_crt_request_data_v_id_azp_crt_phase . " = '2' OR " .
										d_azp_crt_request_data_v_id_azp_crt_phase . " = '3')"
									);
								}
							} else {
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_crt_request_data_v_id_azp_crt_expiration => '1',);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_crt_request_data, $var_array,
									d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql['lbl_id_azp_crt_request_data'] . "' AND (" .
									d_azp_crt_request_data_v_id_azp_crt_phase . " = '1' OR " .
									d_azp_crt_request_data_v_id_azp_crt_phase . " = '2' OR " .
									d_azp_crt_request_data_v_id_azp_crt_phase . " = '3')"
								);
							}
						}
					}
				endforeach;
			}
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->select("*", t_azp_crt_request_data, d_azp_crt_request_data_v_id_azp_crt_phase . " = '4' OR " . d_azp_crt_request_data_v_id_azp_crt_phase  . " = '5'");
			# Validar si la consulta es verdadera
			if (false != $var_sql) {
				# Recorrer las filas de la consulta generada
				foreach ($var_sql as $key_sql):
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(d_azp_crt_request_data_v_id_azp_crt_expiration => '4',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_crt_request_data, $var_array,
						d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_request_data_id_azp_crt_request_data] . "'"
					);
				endforeach;
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_crt_request_data . "
				WHERE " . d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $this->id . "'
					AND " . d_azp_crt_request_data_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_crt_request_data);
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_data_id_azp_crt_request_data',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_created . " AS 'lbl_azp_crt_request_data_m_date_created',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_modified . " AS 'lbl_azp_crt_request_data_m_date_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_description . " AS 'lbl_azp_crt_request_data_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_date . " AS 'lbl_azp_crt_request_data_s_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_validate . " AS 'lbl_azp_crt_request_data_s_validate',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_code . " AS 'lbl_azp_crt_request_data_t_applicant_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_entity . " AS 'lbl_azp_crt_request_data_t_applicant_entity',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_bilable . " AS 'lbl_azp_crt_request_data_t_bilable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_certificate_type . " AS 'lbl_azp_crt_request_data_t_certificate_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_city . " AS 'lbl_azp_crt_request_data_t_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_code . " AS 'lbl_azp_crt_request_data_t_client_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_name . " AS 'lbl_azp_crt_request_data_t_client_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_image . " AS 'lbl_azp_crt_request_data_t_crt_date_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_load . " AS 'lbl_azp_crt_request_data_t_crt_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_document . " AS 'lbl_azp_crt_request_data_t_crt_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_error . " AS 'lbl_azp_crt_request_data_t_crt_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_mark_image . " AS 'lbl_azp_crt_request_data_t_crt_mark_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_name . " AS 'lbl_azp_crt_request_data_t_crt_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_route . " AS 'lbl_azp_crt_request_data_t_crt_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_size . " AS 'lbl_azp_crt_request_data_t_crt_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_tmp_name . " AS 'lbl_azp_crt_request_data_t_crt_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_type . " AS 'lbl_azp_crt_request_data_t_crt_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " AS 'lbl_azp_crt_request_data_t_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_entity_dispatcher . " AS 'lbl_azp_crt_request_data_t_entity_dispatcher',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_nro_oblitation . " AS 'lbl_azp_crt_request_data_t_nro_oblitation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_observation . " AS 'lbl_azp_crt_request_data_t_observation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_process . " AS 'lbl_azp_crt_request_data_t_process',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_class . " AS 'lbl_azp_crt_request_data_t_provider_class',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " AS 'lbl_azp_crt_request_data_t_provider_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_amount . " AS 'lbl_azp_crt_request_data_t_rcb_amount',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_date_load . " AS 'lbl_azp_crt_request_data_t_rcb_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_document . " AS 'lbl_azp_crt_request_data_t_rcb_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_error . " AS 'lbl_azp_crt_request_data_t_rcb_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_name . " AS 'lbl_azp_crt_request_data_t_rcb_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_nro_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_nro_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_route . " AS 'lbl_azp_crt_request_data_t_rcb_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_service . " AS 'lbl_azp_crt_request_data_t_rcb_service',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_size . " AS 'lbl_azp_crt_request_data_t_rcb_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_tmp_name . " AS 'lbl_azp_crt_request_data_t_rcb_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_type . " AS 'lbl_azp_crt_request_data_t_rcb_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " AS 'lbl_azp_crt_request_data_t_refundable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'lbl_azp_crt_request_data_t_request_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_id . " AS 'lbl_azp_crt_request_data_t_request_id',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_send_city . " AS 'lbl_azp_crt_request_data_t_send_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_delivery . " AS 'lbl_azp_crt_request_data_t_supplier_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_request . " AS 'lbl_azp_crt_request_data_t_supplier_date_request',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
					tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_percentage . " AS 'lbl_azp_crt_phase_t_percentage',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_expiration ." tc_azp_crt_expiration
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
						= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_observation_type ." tc_azp_crt_observation_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
						= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_phase ." tc_azp_crt_phase
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_type ." tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $this->id . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_data_id_azp_crt_request_data',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_created . " AS 'lbl_azp_crt_request_data_m_date_created',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_modified . " AS 'lbl_azp_crt_request_data_m_date_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_description . " AS 'lbl_azp_crt_request_data_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_date . " AS 'lbl_azp_crt_request_data_s_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_validate . " AS 'lbl_azp_crt_request_data_s_validate',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_code . " AS 'lbl_azp_crt_request_data_t_applicant_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_entity . " AS 'lbl_azp_crt_request_data_t_applicant_entity',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_bilable . " AS 'lbl_azp_crt_request_data_t_bilable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_certificate_type . " AS 'lbl_azp_crt_request_data_t_certificate_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_city . " AS 'lbl_azp_crt_request_data_t_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_code . " AS 'lbl_azp_crt_request_data_t_client_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_name . " AS 'lbl_azp_crt_request_data_t_client_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_image . " AS 'lbl_azp_crt_request_data_t_crt_date_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_load . " AS 'lbl_azp_crt_request_data_t_crt_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_document . " AS 'lbl_azp_crt_request_data_t_crt_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_error . " AS 'lbl_azp_crt_request_data_t_crt_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_mark_image . " AS 'lbl_azp_crt_request_data_t_crt_mark_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_name . " AS 'lbl_azp_crt_request_data_t_crt_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_route . " AS 'lbl_azp_crt_request_data_t_crt_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_size . " AS 'lbl_azp_crt_request_data_t_crt_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_tmp_name . " AS 'lbl_azp_crt_request_data_t_crt_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_type . " AS 'lbl_azp_crt_request_data_t_crt_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " AS 'lbl_azp_crt_request_data_t_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_entity_dispatcher . " AS 'lbl_azp_crt_request_data_t_entity_dispatcher',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_nro_oblitation . " AS 'lbl_azp_crt_request_data_t_nro_oblitation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_observation . " AS 'lbl_azp_crt_request_data_t_observation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_process . " AS 'lbl_azp_crt_request_data_t_process',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_class . " AS 'lbl_azp_crt_request_data_t_provider_class',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " AS 'lbl_azp_crt_request_data_t_provider_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_amount . " AS 'lbl_azp_crt_request_data_t_rcb_amount',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_date_load . " AS 'lbl_azp_crt_request_data_t_rcb_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_document . " AS 'lbl_azp_crt_request_data_t_rcb_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_error . " AS 'lbl_azp_crt_request_data_t_rcb_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_name . " AS 'lbl_azp_crt_request_data_t_rcb_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_nro_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_nro_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_route . " AS 'lbl_azp_crt_request_data_t_rcb_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_service . " AS 'lbl_azp_crt_request_data_t_rcb_service',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_size . " AS 'lbl_azp_crt_request_data_t_rcb_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_tmp_name . " AS 'lbl_azp_crt_request_data_t_rcb_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_type . " AS 'lbl_azp_crt_request_data_t_rcb_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " AS 'lbl_azp_crt_request_data_t_refundable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'lbl_azp_crt_request_data_t_request_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_id . " AS 'lbl_azp_crt_request_data_t_request_id',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_send_city . " AS 'lbl_azp_crt_request_data_t_send_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_delivery . " AS 'lbl_azp_crt_request_data_t_supplier_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_request . " AS 'lbl_azp_crt_request_data_t_supplier_date_request',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
					tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_percentage . " AS 'lbl_azp_crt_phase_t_percentage',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_expiration ." tc_azp_crt_expiration
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
						= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_observation_type ." tc_azp_crt_observation_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
						= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_phase ." tc_azp_crt_phase
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_type ." tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = '3'
				ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_file_size() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT SUM(tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_size . ") AS 'lbl_azp_crt_request_data_t_crt_size'
				FROM " . t_azp_crt_request_update . " tc_azp_crt_request_update
				INNER JOIN " . t_azp_crt_request_data . " tc_azp_crt_request_data
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_request_data . "
						= tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . "
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_file_zip() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					" . d_azp_crt_generated_files_t_encode . " AS 'lbl_azp_crt_generated_files_t_encode',
					" . d_azp_crt_generated_files_t_name_file . " AS 'lbl_azp_crt_generated_files_t_name_file',
					" . d_azp_crt_generated_files_t_route . " AS 'lbl_azp_crt_generated_files_t_route'
				FROM " . t_azp_crt_generated_files . "
				-- ---------------------------------------------------------------
				WHERE " . d_azp_crt_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND " . d_azp_crt_generated_files_m_deleted . " = '2'
					AND " . d_azp_crt_generated_files_m_temp . " = '2'
					AND " . d_azp_crt_generated_files_t_expiration . " = 'Generado'
					AND " . d_azp_crt_generated_files_t_module . " = 'Solicitud'
					AND " . d_azp_crt_generated_files_t_template . " = 'Remision'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_observation_internal() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_observation_internal." . d_azp_crt_observation_internal_id_azp_crt_observation_internal . " AS 'lbl_azp_crt_observation_internal_id_azp_crt_observation_internal',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_observation_internal." . d_azp_crt_observation_internal_m_date_created . " AS 'lbl_azp_crt_observation_internal_m_date_created',
					tc_azp_crt_observation_internal." . d_azp_crt_observation_internal_m_date_modified . " AS 'lbl_azp_crt_observation_internal_m_date_modified',
					tc_azp_crt_observation_internal." . d_azp_crt_observation_internal_m_description . " AS 'lbl_azp_crt_observation_internal_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_observation_internal." . d_azp_crt_observation_internal_t_identification . " AS 'lbl_azp_crt_observation_internal_t_identification',
					tc_azp_crt_observation_internal." . d_azp_crt_observation_internal_t_observation . " AS 'lbl_azp_crt_observation_internal_t_observation'
				FROM " . t_azp_crt_observation_internal . " tc_azp_crt_observation_internal
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_observation_internal." . d_azp_crt_observation_internal_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_observation_internal." . d_azp_crt_observation_internal_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_observation_internal." . d_azp_crt_observation_internal_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_observation_internal." . d_azp_crt_observation_internal_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_data ." tc_azp_crt_request_data
					ON tc_azp_crt_observation_internal." . d_azp_crt_observation_internal_t_identification . "
						= tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $this->id . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_plaque() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_data_id_azp_crt_request_data',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_created . " AS 'lbl_azp_crt_request_data_m_date_created',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_modified . " AS 'lbl_azp_crt_request_data_m_date_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_description . " AS 'lbl_azp_crt_request_data_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_date . " AS 'lbl_azp_crt_request_data_s_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_validate . " AS 'lbl_azp_crt_request_data_s_validate',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_code . " AS 'lbl_azp_crt_request_data_t_applicant_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_entity . " AS 'lbl_azp_crt_request_data_t_applicant_entity',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_bilable . " AS 'lbl_azp_crt_request_data_t_bilable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_certificate_type . " AS 'lbl_azp_crt_request_data_t_certificate_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_city . " AS 'lbl_azp_crt_request_data_t_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_code . " AS 'lbl_azp_crt_request_data_t_client_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_name . " AS 'lbl_azp_crt_request_data_t_client_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_image . " AS 'lbl_azp_crt_request_data_t_crt_date_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_load . " AS 'lbl_azp_crt_request_data_t_crt_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_document . " AS 'lbl_azp_crt_request_data_t_crt_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_error . " AS 'lbl_azp_crt_request_data_t_crt_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_mark_image . " AS 'lbl_azp_crt_request_data_t_crt_mark_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_name . " AS 'lbl_azp_crt_request_data_t_crt_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_route . " AS 'lbl_azp_crt_request_data_t_crt_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_size . " AS 'lbl_azp_crt_request_data_t_crt_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_tmp_name . " AS 'lbl_azp_crt_request_data_t_crt_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_type . " AS 'lbl_azp_crt_request_data_t_crt_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " AS 'lbl_azp_crt_request_data_t_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_entity_dispatcher . " AS 'lbl_azp_crt_request_data_t_entity_dispatcher',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_nro_oblitation . " AS 'lbl_azp_crt_request_data_t_nro_oblitation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_observation . " AS 'lbl_azp_crt_request_data_t_observation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_process . " AS 'lbl_azp_crt_request_data_t_process',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_class . " AS 'lbl_azp_crt_request_data_t_provider_class',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " AS 'lbl_azp_crt_request_data_t_provider_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_amount . " AS 'lbl_azp_crt_request_data_t_rcb_amount',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_date_load . " AS 'lbl_azp_crt_request_data_t_rcb_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_document . " AS 'lbl_azp_crt_request_data_t_rcb_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_error . " AS 'lbl_azp_crt_request_data_t_rcb_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_name . " AS 'lbl_azp_crt_request_data_t_rcb_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_nro_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_nro_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_route . " AS 'lbl_azp_crt_request_data_t_rcb_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_service . " AS 'lbl_azp_crt_request_data_t_rcb_service',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_size . " AS 'lbl_azp_crt_request_data_t_rcb_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_tmp_name . " AS 'lbl_azp_crt_request_data_t_rcb_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_type . " AS 'lbl_azp_crt_request_data_t_rcb_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " AS 'lbl_azp_crt_request_data_t_refundable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'lbl_azp_crt_request_data_t_request_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_id . " AS 'lbl_azp_crt_request_data_t_request_id',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_send_city . " AS 'lbl_azp_crt_request_data_t_send_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_delivery . " AS 'lbl_azp_crt_request_data_t_supplier_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_request . " AS 'lbl_azp_crt_request_data_t_supplier_date_request',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
					tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_percentage . " AS 'lbl_azp_crt_phase_t_percentage',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_import ." tc_azp_crt_request_import
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . "
						= tc_azp_crt_request_import." . d_azp_crt_request_import_t_plaque_enrollment . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_expiration ." tc_azp_crt_expiration
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
						= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_observation_type ." tc_azp_crt_observation_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
						= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_phase ." tc_azp_crt_phase
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_type ." tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = '1'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_s_plaque . " = 'No'
					AND tc_azp_crt_request_import." . d_azp_crt_request_import_s_plaque . " = 'Si'
				ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_c_alert_certificate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_update." . d_azp_crt_request_update_id_azp_crt_request_update . " AS 'lbl_azp_crt_request_update_id_azp_crt_request_update',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_request_update." . d_azp_crt_request_update_m_date_created . " AS 'lbl_azp_crt_request_update_m_date_created',
					tc_azp_crt_request_update." . d_azp_crt_request_update_m_date_modified . " AS 'lbl_azp_crt_request_update_m_date_modified',
					tc_azp_crt_request_update." . d_azp_crt_request_update_m_description . " AS 'lbl_azp_crt_request_update_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_s_date . " AS 'lbl_azp_crt_request_update_s_date',
					tc_azp_crt_request_update." . d_azp_crt_request_update_s_validate . " AS 'lbl_azp_crt_request_update_s_validate',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_applicant_code . " AS 'lbl_azp_crt_request_update_t_applicant_code',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_applicant_entity . " AS 'lbl_azp_crt_request_update_t_applicant_entity',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_bilable . " AS 'lbl_azp_crt_request_update_t_bilable',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_certificate_type . " AS 'lbl_azp_crt_request_update_t_certificate_type',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_city . " AS 'lbl_azp_crt_request_update_t_city',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_client_code . " AS 'lbl_azp_crt_request_update_t_client_code',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_client_name . " AS 'lbl_azp_crt_request_update_t_client_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_date_image . " AS 'lbl_azp_crt_request_update_t_crt_date_image',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_date_load . " AS 'lbl_azp_crt_request_update_t_crt_date_load',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_document . " AS 'lbl_azp_crt_request_update_t_crt_document',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_error . " AS 'lbl_azp_crt_request_update_t_crt_error',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_mark_image . " AS 'lbl_azp_crt_request_update_t_crt_mark_image',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_name . " AS 'lbl_azp_crt_request_update_t_crt_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_route . " AS 'lbl_azp_crt_request_update_t_crt_route',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_size . " AS 'lbl_azp_crt_request_update_t_crt_size',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_tmp_name . " AS 'lbl_azp_crt_request_update_t_crt_tmp_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_type . " AS 'lbl_azp_crt_request_update_t_crt_type',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_date_delivery . " AS 'lbl_azp_crt_request_update_t_date_delivery',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_entity_dispatcher . " AS 'lbl_azp_crt_request_update_t_entity_dispatcher',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_full_name . " AS 'lbl_azp_crt_request_update_t_full_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_identification . " AS 'lbl_azp_crt_request_update_t_identification',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_nro_oblitation . " AS 'lbl_azp_crt_request_update_t_nro_oblitation',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_observation . " AS 'lbl_azp_crt_request_update_t_observation',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_plaque_enrollment . " AS 'lbl_azp_crt_request_update_t_plaque_enrollment',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_process . " AS 'lbl_azp_crt_request_update_t_process',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_provider_class . " AS 'lbl_azp_crt_request_update_t_provider_class',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_provider_name . " AS 'lbl_azp_crt_request_update_t_provider_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_amount . " AS 'lbl_azp_crt_request_update_t_rcb_amount',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_date_load . " AS 'lbl_azp_crt_request_update_t_rcb_date_load',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_document . " AS 'lbl_azp_crt_request_update_t_rcb_document',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_error . " AS 'lbl_azp_crt_request_update_t_rcb_error',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_name . " AS 'lbl_azp_crt_request_update_t_rcb_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_nro_receipt . " AS 'lbl_azp_crt_request_update_t_rcb_nro_receipt',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_receipt . " AS 'lbl_azp_crt_request_update_t_rcb_receipt',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_route . " AS 'lbl_azp_crt_request_update_t_rcb_route',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_service . " AS 'lbl_azp_crt_request_update_t_rcb_service',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_size . " AS 'lbl_azp_crt_request_update_t_rcb_size',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_tmp_name . " AS 'lbl_azp_crt_request_update_t_rcb_tmp_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_type . " AS 'lbl_azp_crt_request_update_t_rcb_type',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_refundable . " AS 'lbl_azp_crt_request_update_t_refundable',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_request_date . " AS 'lbl_azp_crt_request_update_t_request_date',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_request_id . " AS 'lbl_azp_crt_request_update_t_request_id',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_request_nro . " AS 'lbl_azp_crt_request_update_t_request_nro',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_send_city . " AS 'lbl_azp_crt_request_update_t_send_city',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_supplier_date_delivery . " AS 'lbl_azp_crt_request_update_t_supplier_date_delivery',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_supplier_date_request . " AS 'lbl_azp_crt_request_update_t_supplier_date_request',
					tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_update_v_id_azp_crt_request_data',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
					tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_percentage . " AS 'lbl_azp_crt_phase_t_percentage',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name'
				FROM " . t_azp_crt_request_update . " tc_azp_crt_request_update
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_expiration ." tc_azp_crt_expiration
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_expiration . "
						= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_observation_type ." tc_azp_crt_observation_type
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_observation_type . "
						= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_phase ." tc_azp_crt_phase
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_type ." tc_azp_crt_request_type
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_update." . d_azp_crt_request_update_m_deleted . " = '1'
					AND tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_document . " = ''
				ORDER BY tc_azp_crt_request_update." . d_azp_crt_request_update_id_azp_crt_request_update . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_c_alert_receipt() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_update." . d_azp_crt_request_update_id_azp_crt_request_update . " AS 'lbl_azp_crt_request_update_id_azp_crt_request_update',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_request_update." . d_azp_crt_request_update_m_date_created . " AS 'lbl_azp_crt_request_update_m_date_created',
					tc_azp_crt_request_update." . d_azp_crt_request_update_m_date_modified . " AS 'lbl_azp_crt_request_update_m_date_modified',
					tc_azp_crt_request_update." . d_azp_crt_request_update_m_description . " AS 'lbl_azp_crt_request_update_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_s_date . " AS 'lbl_azp_crt_request_update_s_date',
					tc_azp_crt_request_update." . d_azp_crt_request_update_s_validate . " AS 'lbl_azp_crt_request_update_s_validate',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_applicant_code . " AS 'lbl_azp_crt_request_update_t_applicant_code',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_applicant_entity . " AS 'lbl_azp_crt_request_update_t_applicant_entity',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_bilable . " AS 'lbl_azp_crt_request_update_t_bilable',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_certificate_type . " AS 'lbl_azp_crt_request_update_t_certificate_type',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_city . " AS 'lbl_azp_crt_request_update_t_city',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_client_code . " AS 'lbl_azp_crt_request_update_t_client_code',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_client_name . " AS 'lbl_azp_crt_request_update_t_client_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_date_image . " AS 'lbl_azp_crt_request_update_t_crt_date_image',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_date_load . " AS 'lbl_azp_crt_request_update_t_crt_date_load',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_document . " AS 'lbl_azp_crt_request_update_t_crt_document',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_error . " AS 'lbl_azp_crt_request_update_t_crt_error',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_mark_image . " AS 'lbl_azp_crt_request_update_t_crt_mark_image',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_name . " AS 'lbl_azp_crt_request_update_t_crt_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_route . " AS 'lbl_azp_crt_request_update_t_crt_route',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_size . " AS 'lbl_azp_crt_request_update_t_crt_size',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_tmp_name . " AS 'lbl_azp_crt_request_update_t_crt_tmp_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_type . " AS 'lbl_azp_crt_request_update_t_crt_type',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_date_delivery . " AS 'lbl_azp_crt_request_update_t_date_delivery',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_entity_dispatcher . " AS 'lbl_azp_crt_request_update_t_entity_dispatcher',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_full_name . " AS 'lbl_azp_crt_request_update_t_full_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_identification . " AS 'lbl_azp_crt_request_update_t_identification',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_nro_oblitation . " AS 'lbl_azp_crt_request_update_t_nro_oblitation',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_observation . " AS 'lbl_azp_crt_request_update_t_observation',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_plaque_enrollment . " AS 'lbl_azp_crt_request_update_t_plaque_enrollment',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_process . " AS 'lbl_azp_crt_request_update_t_process',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_provider_class . " AS 'lbl_azp_crt_request_update_t_provider_class',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_provider_name . " AS 'lbl_azp_crt_request_update_t_provider_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_amount . " AS 'lbl_azp_crt_request_update_t_rcb_amount',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_date_load . " AS 'lbl_azp_crt_request_update_t_rcb_date_load',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_document . " AS 'lbl_azp_crt_request_update_t_rcb_document',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_error . " AS 'lbl_azp_crt_request_update_t_rcb_error',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_name . " AS 'lbl_azp_crt_request_update_t_rcb_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_nro_receipt . " AS 'lbl_azp_crt_request_update_t_rcb_nro_receipt',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_receipt . " AS 'lbl_azp_crt_request_update_t_rcb_receipt',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_route . " AS 'lbl_azp_crt_request_update_t_rcb_route',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_service . " AS 'lbl_azp_crt_request_update_t_rcb_service',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_size . " AS 'lbl_azp_crt_request_update_t_rcb_size',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_tmp_name . " AS 'lbl_azp_crt_request_update_t_rcb_tmp_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_type . " AS 'lbl_azp_crt_request_update_t_rcb_type',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_refundable . " AS 'lbl_azp_crt_request_update_t_refundable',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_request_date . " AS 'lbl_azp_crt_request_update_t_request_date',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_request_id . " AS 'lbl_azp_crt_request_update_t_request_id',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_request_nro . " AS 'lbl_azp_crt_request_update_t_request_nro',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_send_city . " AS 'lbl_azp_crt_request_update_t_send_city',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_supplier_date_delivery . " AS 'lbl_azp_crt_request_update_t_supplier_date_delivery',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_supplier_date_request . " AS 'lbl_azp_crt_request_update_t_supplier_date_request',
					tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_update_v_id_azp_crt_request_data',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
					tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_percentage . " AS 'lbl_azp_crt_phase_t_percentage',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name'
				FROM " . t_azp_crt_request_update . " tc_azp_crt_request_update
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_expiration ." tc_azp_crt_expiration
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_expiration . "
						= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_observation_type ." tc_azp_crt_observation_type
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_observation_type . "
						= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_phase ." tc_azp_crt_phase
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_type ." tc_azp_crt_request_type
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_update." . d_azp_crt_request_update_m_deleted . " = '1'
					AND tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_document . " = ''
				ORDER BY tc_azp_crt_request_update." . d_azp_crt_request_update_id_azp_crt_request_update . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			if (isset($_GET['field_month'])) { $var_month = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " LIKE '" . $_GET['field_month'] . "%'"; } else { $var_month = ''; }
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql): $var_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach;
				# Control para la validacion de los clientes relacionados
				if ($var_role == 11) { $var_code = " AND tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . " = '" . $var_client . "'"; } else { $var_code = ''; }
			} else { $var_code = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_data_id_azp_crt_request_data',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_created . " AS 'lbl_azp_crt_request_data_m_date_created',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_modified . " AS 'lbl_azp_crt_request_data_m_date_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_description . " AS 'lbl_azp_crt_request_data_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_date . " AS 'lbl_azp_crt_request_data_s_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_validate . " AS 'lbl_azp_crt_request_data_s_validate',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_code . " AS 'lbl_azp_crt_request_data_t_applicant_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_entity . " AS 'lbl_azp_crt_request_data_t_applicant_entity',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_bilable . " AS 'lbl_azp_crt_request_data_t_bilable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_certificate_type . " AS 'lbl_azp_crt_request_data_t_certificate_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_city . " AS 'lbl_azp_crt_request_data_t_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_code . " AS 'lbl_azp_crt_request_data_t_client_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_name . " AS 'lbl_azp_crt_request_data_t_client_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_image . " AS 'lbl_azp_crt_request_data_t_crt_date_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_load . " AS 'lbl_azp_crt_request_data_t_crt_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_document . " AS 'lbl_azp_crt_request_data_t_crt_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_error . " AS 'lbl_azp_crt_request_data_t_crt_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_mark_image . " AS 'lbl_azp_crt_request_data_t_crt_mark_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_name . " AS 'lbl_azp_crt_request_data_t_crt_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_route . " AS 'lbl_azp_crt_request_data_t_crt_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_size . " AS 'lbl_azp_crt_request_data_t_crt_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_tmp_name . " AS 'lbl_azp_crt_request_data_t_crt_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_type . " AS 'lbl_azp_crt_request_data_t_crt_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " AS 'lbl_azp_crt_request_data_t_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_entity_dispatcher . " AS 'lbl_azp_crt_request_data_t_entity_dispatcher',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_nro_oblitation . " AS 'lbl_azp_crt_request_data_t_nro_oblitation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_observation . " AS 'lbl_azp_crt_request_data_t_observation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_process . " AS 'lbl_azp_crt_request_data_t_process',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_class . " AS 'lbl_azp_crt_request_data_t_provider_class',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " AS 'lbl_azp_crt_request_data_t_provider_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_amount . " AS 'lbl_azp_crt_request_data_t_rcb_amount',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_date_load . " AS 'lbl_azp_crt_request_data_t_rcb_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_document . " AS 'lbl_azp_crt_request_data_t_rcb_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_error . " AS 'lbl_azp_crt_request_data_t_rcb_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_name . " AS 'lbl_azp_crt_request_data_t_rcb_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_nro_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_nro_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_route . " AS 'lbl_azp_crt_request_data_t_rcb_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_service . " AS 'lbl_azp_crt_request_data_t_rcb_service',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_size . " AS 'lbl_azp_crt_request_data_t_rcb_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_tmp_name . " AS 'lbl_azp_crt_request_data_t_rcb_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_type . " AS 'lbl_azp_crt_request_data_t_rcb_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " AS 'lbl_azp_crt_request_data_t_refundable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'lbl_azp_crt_request_data_t_request_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_id . " AS 'lbl_azp_crt_request_data_t_request_id',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_send_city . " AS 'lbl_azp_crt_request_data_t_send_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_delivery . " AS 'lbl_azp_crt_request_data_t_supplier_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_request . " AS 'lbl_azp_crt_request_data_t_supplier_date_request',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
					tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_percentage . " AS 'lbl_azp_crt_phase_t_percentage',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_expiration ." tc_azp_crt_expiration
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
						= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_observation_type ." tc_azp_crt_observation_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
						= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_phase ." tc_azp_crt_phase
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_type ." tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = '1'" . $var_code . " " . $var_month . "
				ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_clientrq() {

			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			//$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			//if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_crt_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach; }
			#-------------------------------------------------------------------------#
			# Consulta para identificar los nuevos registros en la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_fct_client',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_request'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data

				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "

				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "

				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $this->id . "'
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_id_client = $value['lbl_fct_client']; $var_request = $value['lbl_request']; endforeach; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_data_id_azp_crt_request_data',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_created . " AS 'lbl_azp_crt_request_data_m_date_created',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_modified . " AS 'lbl_azp_crt_request_data_m_date_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_description . " AS 'lbl_azp_crt_request_data_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_date . " AS 'lbl_azp_crt_request_data_s_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_validate . " AS 'lbl_azp_crt_request_data_s_validate',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_code . " AS 'lbl_azp_crt_request_data_t_applicant_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_entity . " AS 'lbl_azp_crt_request_data_t_applicant_entity',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_bilable . " AS 'lbl_azp_crt_request_data_t_bilable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_certificate_type . " AS 'lbl_azp_crt_request_data_t_certificate_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_city . " AS 'lbl_azp_crt_request_data_t_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_code . " AS 'lbl_azp_crt_request_data_t_client_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_name . " AS 'lbl_azp_crt_request_data_t_client_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_image . " AS 'lbl_azp_crt_request_data_t_crt_date_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_load . " AS 'lbl_azp_crt_request_data_t_crt_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_document . " AS 'lbl_azp_crt_request_data_t_crt_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_error . " AS 'lbl_azp_crt_request_data_t_crt_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_mark_image . " AS 'lbl_azp_crt_request_data_t_crt_mark_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_name . " AS 'lbl_azp_crt_request_data_t_crt_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_route . " AS 'lbl_azp_crt_request_data_t_crt_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_size . " AS 'lbl_azp_crt_request_data_t_crt_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_tmp_name . " AS 'lbl_azp_crt_request_data_t_crt_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_type . " AS 'lbl_azp_crt_request_data_t_crt_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " AS 'lbl_azp_crt_request_data_t_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_entity_dispatcher . " AS 'lbl_azp_crt_request_data_t_entity_dispatcher',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_nro_oblitation . " AS 'lbl_azp_crt_request_data_t_nro_oblitation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_observation . " AS 'lbl_azp_crt_request_data_t_observation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_process . " AS 'lbl_azp_crt_request_data_t_process',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_class . " AS 'lbl_azp_crt_request_data_t_provider_class',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " AS 'lbl_azp_crt_request_data_t_provider_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_amount . " AS 'lbl_azp_crt_request_data_t_rcb_amount',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_date_load . " AS 'lbl_azp_crt_request_data_t_rcb_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_document . " AS 'lbl_azp_crt_request_data_t_rcb_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_error . " AS 'lbl_azp_crt_request_data_t_rcb_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_name . " AS 'lbl_azp_crt_request_data_t_rcb_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_nro_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_nro_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_route . " AS 'lbl_azp_crt_request_data_t_rcb_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_service . " AS 'lbl_azp_crt_request_data_t_rcb_service',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_size . " AS 'lbl_azp_crt_request_data_t_rcb_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_tmp_name . " AS 'lbl_azp_crt_request_data_t_rcb_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_type . " AS 'lbl_azp_crt_request_data_t_rcb_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " AS 'lbl_azp_crt_request_data_t_refundable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'lbl_azp_crt_request_data_t_request_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_id . " AS 'lbl_azp_crt_request_data_t_request_id',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_send_city . " AS 'lbl_azp_crt_request_data_t_send_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_delivery . " AS 'lbl_azp_crt_request_data_t_supplier_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_request . " AS 'lbl_azp_crt_request_data_t_supplier_date_request',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
					tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_percentage . " AS 'lbl_azp_crt_phase_t_percentage',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_expiration ." tc_azp_crt_expiration
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
						= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_observation_type ." tc_azp_crt_observation_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
						= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_phase ." tc_azp_crt_phase
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_type ." tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client ." tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = '1'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request . "'
					AND tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $var_id_client . "'
				ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_clientif() {
			if (isset($_GET['field_idntf'])) { $var_idntf =  $_GET['field_idntf']; } else { $var_idntf = ''; }
			if (isset($_GET['field_plaqe'])) { $var_plaqe =  $_GET['field_plaqe']; } else { $var_plaqe = ''; }
			if (isset($_GET['field_rtype'])) { $var_rtype =  $_GET['field_rtype']; } else { $var_rtype = ''; }


			if ($var_idntf != '' && $var_plaqe == '' && $var_rtype == '') {
				$var_identification = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " = '" . $var_idntf . "'";
				$var_plaque_enrollm = '';
				$var_request_type = '';
			} else if ($var_idntf == '' && $var_plaqe != '' && $var_rtype == '') {
				$var_identification = '';
				$var_plaque_enrollm = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " = '" . $var_plaqe . "'";
				$var_request_type = '';
			} else if ($var_idntf == '' && $var_plaqe == '' && $var_rtype != '') {
				$var_identification = '';
				$var_plaque_enrollm = '';
				$var_request_type = "AND tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . " = '" . $var_rtype . "'";
			} else if ($var_idntf != '' && $var_plaqe != '' && $var_rtype == '') {
				$var_identification = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " = '" . $var_idntf . "'";
				$var_plaque_enrollm = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " = '" . $var_plaqe . "'";
				$var_request_type = '';
			} else if ($var_idntf == '' && $var_plaqe != '' && $var_rtype != '') {
				$var_identification = '';
				$var_plaque_enrollm = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " = '" . $var_plaqe . "'";
				$var_request_type = "AND tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . " = '" . $var_rtype . "'";
			} else if ($var_idntf != '' && $var_plaqe == '' && $var_rtype != '') {
				$var_identification = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " = '" . $var_idntf . "'";
				$var_plaque_enrollm = '';
				$var_request_type = "AND tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . " = '" . $var_rtype . "'";
			} else if ($var_idntf != '' && $var_plaqe != '' && $var_rtype != '') {
				$var_identification = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " = '" . $var_idntf . "'";
				$var_plaque_enrollm = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " = '" . $var_plaqe . "'";
				$var_request_type = "AND tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . " = '" . $var_rtype . "'";
			} else { $var_identification = ''; $var_plaque_enrollm = ''; $var_request_type = ''; }


			/*if ($var_idntf != '' && $var_plaqe == '') {
				$var_identification = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " = '" . $var_idntf . "'";
				$var_plaque_enrollm = '';

			} else if ($var_idntf == '' && $var_plaqe != '') {
				$var_plaque_enrollm = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " = '" . $var_plaqe . "'";
				$var_identification = '';

			} else if ($var_idntf != '' && $var_plaqe != '') {
				$var_identification = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " = '" . $var_idntf . "'";
				$var_plaque_enrollm = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " = '" . $var_plaqe . "'";

			} else { $var_identification = ''; $var_plaque_enrollm = ''; $var_request_type = ''; }*/
			#-------------------------------------------------------------------------#
			# Consulta para identificar los nuevos registros en la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_fct_client',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_request'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data

				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "

				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "

				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $this->id . "'
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_id_client = $value['lbl_fct_client']; $var_request = $value['lbl_request']; endforeach; }
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_data_id_azp_crt_request_data',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_created . " AS 'lbl_azp_crt_request_data_m_date_created',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_modified . " AS 'lbl_azp_crt_request_data_m_date_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_description . " AS 'lbl_azp_crt_request_data_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_date . " AS 'lbl_azp_crt_request_data_s_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_validate . " AS 'lbl_azp_crt_request_data_s_validate',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_code . " AS 'lbl_azp_crt_request_data_t_applicant_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_entity . " AS 'lbl_azp_crt_request_data_t_applicant_entity',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_bilable . " AS 'lbl_azp_crt_request_data_t_bilable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_certificate_type . " AS 'lbl_azp_crt_request_data_t_certificate_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_city . " AS 'lbl_azp_crt_request_data_t_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_code . " AS 'lbl_azp_crt_request_data_t_client_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_name . " AS 'lbl_azp_crt_request_data_t_client_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_image . " AS 'lbl_azp_crt_request_data_t_crt_date_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_load . " AS 'lbl_azp_crt_request_data_t_crt_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_document . " AS 'lbl_azp_crt_request_data_t_crt_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_error . " AS 'lbl_azp_crt_request_data_t_crt_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_mark_image . " AS 'lbl_azp_crt_request_data_t_crt_mark_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_name . " AS 'lbl_azp_crt_request_data_t_crt_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_route . " AS 'lbl_azp_crt_request_data_t_crt_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_size . " AS 'lbl_azp_crt_request_data_t_crt_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_tmp_name . " AS 'lbl_azp_crt_request_data_t_crt_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_type . " AS 'lbl_azp_crt_request_data_t_crt_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " AS 'lbl_azp_crt_request_data_t_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_entity_dispatcher . " AS 'lbl_azp_crt_request_data_t_entity_dispatcher',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_nro_oblitation . " AS 'lbl_azp_crt_request_data_t_nro_oblitation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_observation . " AS 'lbl_azp_crt_request_data_t_observation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_process . " AS 'lbl_azp_crt_request_data_t_process',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_class . " AS 'lbl_azp_crt_request_data_t_provider_class',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " AS 'lbl_azp_crt_request_data_t_provider_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_amount . " AS 'lbl_azp_crt_request_data_t_rcb_amount',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_date_load . " AS 'lbl_azp_crt_request_data_t_rcb_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_document . " AS 'lbl_azp_crt_request_data_t_rcb_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_error . " AS 'lbl_azp_crt_request_data_t_rcb_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_name . " AS 'lbl_azp_crt_request_data_t_rcb_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_nro_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_nro_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_route . " AS 'lbl_azp_crt_request_data_t_rcb_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_service . " AS 'lbl_azp_crt_request_data_t_rcb_service',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_size . " AS 'lbl_azp_crt_request_data_t_rcb_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_tmp_name . " AS 'lbl_azp_crt_request_data_t_rcb_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_type . " AS 'lbl_azp_crt_request_data_t_rcb_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " AS 'lbl_azp_crt_request_data_t_refundable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'lbl_azp_crt_request_data_t_request_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_id . " AS 'lbl_azp_crt_request_data_t_request_id',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_send_city . " AS 'lbl_azp_crt_request_data_t_send_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_delivery . " AS 'lbl_azp_crt_request_data_t_supplier_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_request . " AS 'lbl_azp_crt_request_data_t_supplier_date_request',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
					tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_percentage . " AS 'lbl_azp_crt_phase_t_percentage',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_expiration ." tc_azp_crt_expiration
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
						= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_observation_type ." tc_azp_crt_observation_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
						= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_phase ." tc_azp_crt_phase
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_type ." tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client ." tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = '1' " . $var_identification . " " . $var_plaque_enrollm . " " . $var_request_type . "
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request . "'
					AND tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $var_id_client . "'
				ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_data_id_azp_crt_request_data',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_created . " AS 'lbl_azp_crt_request_data_m_date_created',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_modified . " AS 'lbl_azp_crt_request_data_m_date_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_description . " AS 'lbl_azp_crt_request_data_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_date . " AS 'lbl_azp_crt_request_data_s_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_validate . " AS 'lbl_azp_crt_request_data_s_validate',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_code . " AS 'lbl_azp_crt_request_data_t_applicant_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_entity . " AS 'lbl_azp_crt_request_data_t_applicant_entity',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_bilable . " AS 'lbl_azp_crt_request_data_t_bilable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_certificate_type . " AS 'lbl_azp_crt_request_data_t_certificate_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_city . " AS 'lbl_azp_crt_request_data_t_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_code . " AS 'lbl_azp_crt_request_data_t_client_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_name . " AS 'lbl_azp_crt_request_data_t_client_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_image . " AS 'lbl_azp_crt_request_data_t_crt_date_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_load . " AS 'lbl_azp_crt_request_data_t_crt_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_document . " AS 'lbl_azp_crt_request_data_t_crt_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_error . " AS 'lbl_azp_crt_request_data_t_crt_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_mark_image . " AS 'lbl_azp_crt_request_data_t_crt_mark_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_name . " AS 'lbl_azp_crt_request_data_t_crt_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_route . " AS 'lbl_azp_crt_request_data_t_crt_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_size . " AS 'lbl_azp_crt_request_data_t_crt_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_tmp_name . " AS 'lbl_azp_crt_request_data_t_crt_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_type . " AS 'lbl_azp_crt_request_data_t_crt_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " AS 'lbl_azp_crt_request_data_t_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_entity_dispatcher . " AS 'lbl_azp_crt_request_data_t_entity_dispatcher',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_nro_oblitation . " AS 'lbl_azp_crt_request_data_t_nro_oblitation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_observation . " AS 'lbl_azp_crt_request_data_t_observation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_process . " AS 'lbl_azp_crt_request_data_t_process',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_class . " AS 'lbl_azp_crt_request_data_t_provider_class',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " AS 'lbl_azp_crt_request_data_t_provider_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_amount . " AS 'lbl_azp_crt_request_data_t_rcb_amount',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_date_load . " AS 'lbl_azp_crt_request_data_t_rcb_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_document . " AS 'lbl_azp_crt_request_data_t_rcb_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_error . " AS 'lbl_azp_crt_request_data_t_rcb_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_name . " AS 'lbl_azp_crt_request_data_t_rcb_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_nro_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_nro_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_route . " AS 'lbl_azp_crt_request_data_t_rcb_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_service . " AS 'lbl_azp_crt_request_data_t_rcb_service',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_size . " AS 'lbl_azp_crt_request_data_t_rcb_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_tmp_name . " AS 'lbl_azp_crt_request_data_t_rcb_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_type . " AS 'lbl_azp_crt_request_data_t_rcb_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " AS 'lbl_azp_crt_request_data_t_refundable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'lbl_azp_crt_request_data_t_request_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_id . " AS 'lbl_azp_crt_request_data_t_request_id',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_send_city . " AS 'lbl_azp_crt_request_data_t_send_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_delivery . " AS 'lbl_azp_crt_request_data_t_supplier_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_request . " AS 'lbl_azp_crt_request_data_t_supplier_date_request',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
					tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_percentage . " AS 'lbl_azp_crt_phase_t_percentage',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_expiration ." tc_azp_crt_expiration
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
						= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_observation_type ." tc_azp_crt_observation_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
						= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_phase ." tc_azp_crt_phase
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_type ." tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = '2'
				ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_table() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_update." . d_azp_crt_request_update_id_azp_crt_request_update . " AS 'lbl_azp_crt_request_update_id_azp_crt_request_update',
					tc_azp_crt_request_update." . d_azp_crt_request_update_m_by_created . " AS 'lbl_azp_crt_request_update_m_by_created',
					tc_azp_crt_request_update." . d_azp_crt_request_update_m_by_modified . " AS 'lbl_azp_crt_request_update_m_by_modified',
					tc_azp_crt_request_update." . d_azp_crt_request_update_m_date_created . " AS 'lbl_azp_crt_request_update_m_date_created',
					tc_azp_crt_request_update." . d_azp_crt_request_update_m_date_modified . " AS 'lbl_azp_crt_request_update_m_date_modified',
					tc_azp_crt_request_update." . d_azp_crt_request_update_m_description . " AS 'lbl_azp_crt_request_update_m_description',
					tc_azp_crt_request_update." . d_azp_crt_request_update_m_level . " AS 'lbl_azp_crt_request_update_m_level',
					tc_azp_crt_request_update." . d_azp_crt_request_update_m_status . " AS 'lbl_azp_crt_request_update_m_status',
					tc_azp_crt_request_update." . d_azp_crt_request_update_s_date . " AS 'lbl_azp_crt_request_update_s_date',
					tc_azp_crt_request_update." . d_azp_crt_request_update_s_validate . " AS 'lbl_azp_crt_request_update_s_validate',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_applicant_code . " AS 'lbl_azp_crt_request_update_t_applicant_code',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_applicant_entity . " AS 'lbl_azp_crt_request_update_t_applicant_entity',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_bilable . " AS 'lbl_azp_crt_request_update_t_bilable',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_certificate_type . " AS 'lbl_azp_crt_request_update_t_certificate_type',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_city . " AS 'lbl_azp_crt_request_update_t_city',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_client_code . " AS 'lbl_azp_crt_request_update_t_client_code',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_client_name . " AS 'lbl_azp_crt_request_update_t_client_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_date_image . " AS 'lbl_azp_crt_request_update_t_crt_date_image',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_date_load . " AS 'lbl_azp_crt_request_update_t_crt_date_load',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_document . " AS 'lbl_azp_crt_request_update_t_crt_document',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_error . " AS 'lbl_azp_crt_request_update_t_crt_error',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_mark_image . " AS 'lbl_azp_crt_request_update_t_crt_mark_image',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_name . " AS 'lbl_azp_crt_request_update_t_crt_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_route . " AS 'lbl_azp_crt_request_update_t_crt_route',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_size . " AS 'lbl_azp_crt_request_update_t_crt_size',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_tmp_name . " AS 'lbl_azp_crt_request_update_t_crt_tmp_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_crt_type . " AS 'lbl_azp_crt_request_update_t_crt_type',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_date_delivery . " AS 'lbl_azp_crt_request_update_t_date_delivery',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_entity_dispatcher . " AS 'lbl_azp_crt_request_update_t_entity_dispatcher',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_full_name . " AS 'lbl_azp_crt_request_update_t_full_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_identification . " AS 'lbl_azp_crt_request_update_t_identification',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_nro_oblitation . " AS 'lbl_azp_crt_request_update_t_nro_oblitation',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_observation . " AS 'lbl_azp_crt_request_update_t_observation',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_plaque_enrollment . " AS 'lbl_azp_crt_request_update_t_plaque_enrollment',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_process . " AS 'lbl_azp_crt_request_update_t_process',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_provider_class . " AS 'lbl_azp_crt_request_update_t_provider_class',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_provider_name . " AS 'lbl_azp_crt_request_update_t_provider_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_refundable . " AS 'lbl_azp_crt_request_update_t_refundable',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_amount . " AS 'lbl_azp_crt_request_update_t_rcb_amount',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_date_load . " AS 'lbl_azp_crt_request_update_t_rcb_date_load',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_document . " AS 'lbl_azp_crt_request_update_t_rcb_document',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_error . " AS 'lbl_azp_crt_request_update_t_rcb_error',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_name . " AS 'lbl_azp_crt_request_update_t_rcb_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_nro_receipt . " AS 'lbl_azp_crt_request_update_t_rcb_nro_receipt',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_receipt . " AS 'lbl_azp_crt_request_update_t_rcb_receipt',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_route . " AS 'lbl_azp_crt_request_update_t_rcb_route',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_service . " AS 'lbl_azp_crt_request_update_t_rcb_service',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_size . " AS 'lbl_azp_crt_request_update_t_rcb_size',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_tmp_name . " AS 'lbl_azp_crt_request_update_t_rcb_tmp_name',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_rcb_type . " AS 'lbl_azp_crt_request_update_t_rcb_type',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_request_date . " AS 'lbl_azp_crt_request_update_t_request_date',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_request_id . " AS 'lbl_azp_crt_request_update_t_request_id',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_request_nro . " AS 'lbl_azp_crt_request_update_t_request_nro',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_send_city . " AS 'lbl_azp_crt_request_update_t_send_city',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_supplier_date_delivery . " AS 'lbl_azp_crt_request_update_t_supplier_date_delivery',
					tc_azp_crt_request_update." . d_azp_crt_request_update_t_supplier_date_request . " AS 'lbl_azp_crt_request_update_t_supplier_date_request',
					tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_city . " AS 'lbl_azp_crt_request_update_v_id_azp_crt_city',
					tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_client . " AS 'lbl_azp_crt_request_update_v_id_azp_crt_client',
					tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_expiration . " AS 'lbl_azp_crt_request_update_v_id_azp_crt_expiration',
					tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_observation_type . " AS 'lbl_azp_crt_request_update_v_id_azp_crt_observation_type',
					tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_phase . " AS 'lbl_azp_crt_request_update_v_id_azp_crt_phase',
					tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_request_type . " AS 'lbl_azp_crt_request_update_v_id_azp_crt_request_type'
				FROM " . t_azp_crt_request_update . " tc_azp_crt_request_update
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_update." . d_azp_crt_request_update_m_deleted . " = '1'
					AND tc_azp_crt_request_update." . d_azp_crt_request_update_m_status . " = '1'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_table_up() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name'
				FROM " . t_azp_crt_request_update . " tc_azp_crt_request_update
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_type ." tc_azp_crt_request_type
					ON tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_update." . d_azp_crt_request_update_m_deleted . " = '1'
				GROUP BY tc_azp_crt_request_update." . d_azp_crt_request_update_v_id_azp_crt_request_type .  "
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_third_parties() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_crt_third_type, d_azp_crt_third_type_id_azp_crt_third_type . " = '" . $this->id . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql): $var_id = $key_sql[d_azp_crt_third_type_id_azp_crt_third_type]; endforeach;
			} else { $var_id = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " AS 'lbl_azp_crt_third_parties_id_azp_crt_third_parties',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_created . " AS 'lbl_azp_crt_third_parties_m_date_created',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_modified . " AS 'lbl_azp_crt_third_parties_m_date_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_description . " AS 'lbl_azp_crt_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_address . " AS 'lbl_azp_crt_third_parties_t_address',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_consecutive . " AS 'lbl_azp_crt_third_parties_t_consecutive',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_contact . " AS 'lbl_azp_crt_third_parties_t_contact',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_email . " AS 'lbl_azp_crt_third_parties_t_email',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_password . " AS 'lbl_azp_crt_third_parties_t_password',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_fixed . " AS 'lbl_azp_crt_third_parties_t_phone_fixed',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_movil . " AS 'lbl_azp_crt_third_parties_t_phone_movil',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_second . " AS 'lbl_azp_crt_third_parties_t_phone_second',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_third_type." . d_azp_crt_third_type_t_name . " AS 'lbl_azp_crt_third_type_t_name'
				FROM " . t_azp_crt_third_parties . " tc_azp_crt_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_third_type ." tc_azp_crt_third_type
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . "
						= tc_azp_crt_third_type." . d_azp_crt_third_type_id_azp_crt_third_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . " = '" . $var_id . "'
					AND tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_deleted . " = '1'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_third_parties_count() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_crt_third_type, d_azp_crt_third_type_id_azp_crt_third_type . " = '" . $this->id . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql): $var_id = $key_sql[d_azp_crt_third_type_id_azp_crt_third_type]; endforeach;
			} else { $var_id = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_crt_third_parties . " tc_azp_crt_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_third_type ." tc_azp_crt_third_type
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . "
						= tc_azp_crt_third_type." . d_azp_crt_third_type_id_azp_crt_third_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . " = '" . $var_id . "'
					AND tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_deleted . " = '1'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_third_parties_id() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " AS 'lbl_azp_crt_third_parties_id_azp_crt_third_parties',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_created . " AS 'lbl_azp_crt_third_parties_m_date_created',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_modified . " AS 'lbl_azp_crt_third_parties_m_date_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_description . " AS 'lbl_azp_crt_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_address . " AS 'lbl_azp_crt_third_parties_t_address',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_consecutive . " AS 'lbl_azp_crt_third_parties_t_consecutive',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_contact . " AS 'lbl_azp_crt_third_parties_t_contact',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_email . " AS 'lbl_azp_crt_third_parties_t_email',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_password . " AS 'lbl_azp_crt_third_parties_t_password',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_fixed . " AS 'lbl_azp_crt_third_parties_t_phone_fixed',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_movil . " AS 'lbl_azp_crt_third_parties_t_phone_movil',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_second . " AS 'lbl_azp_crt_third_parties_t_phone_second',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_third_type." . d_azp_crt_third_type_t_name . " AS 'lbl_azp_crt_third_type_t_name'
				FROM " . t_azp_crt_third_parties . " tc_azp_crt_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_third_type ." tc_azp_crt_third_type
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . "
						= tc_azp_crt_third_type." . d_azp_crt_third_type_id_azp_crt_third_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . " = '" . $this->id . "'
				GROUP BY tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consecutive() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " AS 'lbl_azp_crt_third_parties_id_azp_crt_third_parties',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_created . " AS 'lbl_azp_crt_third_parties_m_date_created',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_modified . " AS 'lbl_azp_crt_third_parties_m_date_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_description . " AS 'lbl_azp_crt_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_address . " AS 'lbl_azp_crt_third_parties_t_address',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_consecutive . " AS 'lbl_azp_crt_third_parties_t_consecutive',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_contact . " AS 'lbl_azp_crt_third_parties_t_contact',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_email . " AS 'lbl_azp_crt_third_parties_t_email',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_password . " AS 'lbl_azp_crt_third_parties_t_password',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_fixed . " AS 'lbl_azp_crt_third_parties_t_phone_fixed',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_movil . " AS 'lbl_azp_crt_third_parties_t_phone_movil',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_second . " AS 'lbl_azp_crt_third_parties_t_phone_second',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_third_type." . d_azp_crt_third_type_t_name . " AS 'lbl_azp_crt_third_type_t_name'
				FROM " . t_azp_crt_third_parties . " tc_azp_crt_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_third_type ." tc_azp_crt_third_type
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . "
						= tc_azp_crt_third_type." . d_azp_crt_third_type_id_azp_crt_third_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . " = '" . $this->id . "'
				GROUP BY tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_client_count() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_crt_copy_client . " tc_azp_crt_copy_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_copy_client." . d_azp_crt_copy_client_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_copy_client." . d_azp_crt_copy_client_v_id_azp_crt_client . " = '" . $this->id . "'
					AND tc_azp_crt_copy_client." . d_azp_crt_copy_client_m_deleted . " = '1'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_client_result() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_crt_client, d_azp_crt_client_id_azp_crt_client . " = '" . $this->id . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql):
					$var_value = $key_sql[d_azp_crt_client_v_id_azp_crt_bank];
				endforeach;
			} else { $var_value = ''; }

			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . " AS 'lbl_azp_crt_client_id_azp_crt_client',
					tc_azp_crt_client." . d_azp_crt_client_m_by_created . " AS 'lbl_azp_crt_client_m_by_created',
					tc_azp_crt_client." . d_azp_crt_client_m_by_modified . " AS 'lbl_azp_crt_client_m_by_modified',
					tc_azp_crt_client." . d_azp_crt_client_m_date_created . " AS 'lbl_azp_crt_client_m_date_created',
					tc_azp_crt_client." . d_azp_crt_client_m_date_modified . " AS 'lbl_azp_crt_client_m_date_modified',
					tc_azp_crt_client." . d_azp_crt_client_m_description . " AS 'lbl_azp_crt_client_m_description',
					tc_azp_crt_client." . d_azp_crt_client_m_level . " AS 'lbl_azp_crt_client_m_level',
					tc_azp_crt_client." . d_azp_crt_client_m_status . " AS 'lbl_azp_crt_client_m_status',
					tc_azp_crt_client." . d_azp_crt_client_t_address . " AS 'lbl_azp_crt_client_t_address',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_client." . d_azp_crt_client_t_email . " AS 'lbl_azp_crt_client_t_email',
					tc_azp_crt_client." . d_azp_crt_client_t_password . " AS 'lbl_azp_crt_client_t_password',
					tc_azp_crt_client." . d_azp_crt_client_t_person . " AS 'lbl_azp_crt_client_t_person',
					tc_azp_crt_client." . d_azp_crt_client_t_position . " AS 'lbl_azp_crt_client_t_position',
					tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . " AS 'lbl_azp_crt_client_v_id_azp_crt_bank',
					tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_city . " AS 'lbl_azp_crt_client_v_id_azp_crt_city'
				FROM " . t_azp_crt_client . " tc_azp_crt_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_client." . d_azp_crt_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_client." . d_azp_crt_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_client." . d_azp_crt_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_client." . d_azp_crt_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . " != '" . $this->id . "'
					AND tc_azp_crt_client." . d_azp_crt_client_m_deleted . " = '1'
					AND tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . " = '" . $var_value . "'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_third_password(string $var_id) {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $var_id . "'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_client(string $var_id) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . " AS 'lbl_azp_crt_client_id_azp_crt_client',
					tc_azp_crt_client." . d_azp_crt_client_m_by_created . " AS 'lbl_azp_crt_client_m_by_created',
					tc_azp_crt_client." . d_azp_crt_client_m_by_modified . " AS 'lbl_azp_crt_client_m_by_modified',
					tc_azp_crt_client." . d_azp_crt_client_m_date_created . " AS 'lbl_azp_crt_client_m_date_created',
					tc_azp_crt_client." . d_azp_crt_client_m_date_modified . " AS 'lbl_azp_crt_client_m_date_modified',
					tc_azp_crt_client." . d_azp_crt_client_m_description . " AS 'lbl_azp_crt_client_m_description',
					tc_azp_crt_client." . d_azp_crt_client_m_level . " AS 'lbl_azp_crt_client_m_level',
					tc_azp_crt_client." . d_azp_crt_client_m_status . " AS 'lbl_azp_crt_client_m_status',
					tc_azp_crt_client." . d_azp_crt_client_t_address . " AS 'lbl_azp_crt_client_t_address',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_client." . d_azp_crt_client_t_email . " AS 'lbl_azp_crt_client_t_email',
					tc_azp_crt_client." . d_azp_crt_client_t_password . " AS 'lbl_azp_crt_client_t_password',
					tc_azp_crt_client." . d_azp_crt_client_t_person . " AS 'lbl_azp_crt_client_t_person',
					tc_azp_crt_client." . d_azp_crt_client_t_position . " AS 'lbl_azp_crt_client_t_position',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name'
				FROM " . t_azp_crt_client . " tc_azp_crt_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_client." . d_azp_crt_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_client." . d_azp_crt_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_client." . d_azp_crt_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_client." . d_azp_crt_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . " = '" . $var_id . "'
					AND tc_azp_crt_client." . d_azp_crt_client_m_deleted . " = '1'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_data_id_azp_crt_request_data',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_created . " AS 'lbl_azp_crt_request_data_m_by_created',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_modified . " AS 'lbl_azp_crt_request_data_m_by_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_created . " AS 'lbl_azp_crt_request_data_m_date_created',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_date_modified . " AS 'lbl_azp_crt_request_data_m_date_modified',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_description . " AS 'lbl_azp_crt_request_data_m_description',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_level . " AS 'lbl_azp_crt_request_data_m_level',
					tc_azp_crt_request_data." . d_azp_crt_request_data_m_status . " AS 'lbl_azp_crt_request_data_m_status',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_date . " AS 'lbl_azp_crt_request_data_s_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_validate . " AS 'lbl_azp_crt_request_data_s_validate',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_code . " AS 'lbl_azp_crt_request_data_t_applicant_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_entity . " AS 'lbl_azp_crt_request_data_t_applicant_entity',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_bilable . " AS 'lbl_azp_crt_request_data_t_bilable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_certificate_type . " AS 'lbl_azp_crt_request_data_t_certificate_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_city . " AS 'lbl_azp_crt_request_data_t_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_code . " AS 'lbl_azp_crt_request_data_t_client_code',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_client_name . " AS 'lbl_azp_crt_request_data_t_client_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_image . " AS 'lbl_azp_crt_request_data_t_crt_date_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_date_load . " AS 'lbl_azp_crt_request_data_t_crt_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_document . " AS 'lbl_azp_crt_request_data_t_crt_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_error . " AS 'lbl_azp_crt_request_data_t_crt_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_mark_image . " AS 'lbl_azp_crt_request_data_t_crt_mark_image',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_name . " AS 'lbl_azp_crt_request_data_t_crt_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_route . " AS 'lbl_azp_crt_request_data_t_crt_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_size . " AS 'lbl_azp_crt_request_data_t_crt_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_tmp_name . " AS 'lbl_azp_crt_request_data_t_crt_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_crt_type . " AS 'lbl_azp_crt_request_data_t_crt_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " AS 'lbl_azp_crt_request_data_t_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_entity_dispatcher . " AS 'lbl_azp_crt_request_data_t_entity_dispatcher',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_nro_oblitation . " AS 'lbl_azp_crt_request_data_t_nro_oblitation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_observation . " AS 'lbl_azp_crt_request_data_t_observation',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_process . " AS 'lbl_azp_crt_request_data_t_process',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_class . " AS 'lbl_azp_crt_request_data_t_provider_class',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " AS 'lbl_azp_crt_request_data_t_provider_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " AS 'lbl_azp_crt_request_data_t_refundable',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_amount . " AS 'lbl_azp_crt_request_data_t_rcb_amount',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_date_load . " AS 'lbl_azp_crt_request_data_t_rcb_date_load',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_document . " AS 'lbl_azp_crt_request_data_t_rcb_document',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_error . " AS 'lbl_azp_crt_request_data_t_rcb_error',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_name . " AS 'lbl_azp_crt_request_data_t_rcb_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_nro_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_nro_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_receipt',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_route . " AS 'lbl_azp_crt_request_data_t_rcb_route',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_service . " AS 'lbl_azp_crt_request_data_t_rcb_service',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_size . " AS 'lbl_azp_crt_request_data_t_rcb_size',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_tmp_name . " AS 'lbl_azp_crt_request_data_t_rcb_tmp_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_type . " AS 'lbl_azp_crt_request_data_t_rcb_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'lbl_azp_crt_request_data_t_request_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_id . " AS 'lbl_azp_crt_request_data_t_request_id',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_send_city . " AS 'lbl_azp_crt_request_data_t_send_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_delivery . " AS 'lbl_azp_crt_request_data_t_supplier_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_supplier_date_request . " AS 'lbl_azp_crt_request_data_t_supplier_date_request',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_client',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_expiration',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_observation_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_phase',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_request_type'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $this->id . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_crt_request_data_archive(string $var_id, string $var_name, string $var_type, string $var_tmp_name, string $var_error, string $var_size) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				Helper::load('files');
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $var_id . "'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql) {
						$var_identification = $key_sql[d_azp_crt_request_data_t_identification];
						$var_plaque_enrollment = $key_sql[d_azp_crt_request_data_t_plaque_enrollment];
						$var_document = $var_identification . '_' . $var_plaque_enrollment . '.pdf';
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_crt_request_data_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_crt_request_data_m_date_modified => DATE_HOUR,
							d_azp_crt_request_data_t_crt_document => $var_document,
							d_azp_crt_request_data_t_crt_error => $var_error,
							d_azp_crt_request_data_t_crt_name => ucwords(strtolower(trim(preg_replace('/\s+/',' ', $var_name)))),
							d_azp_crt_request_data_t_crt_size => $var_size,
							d_azp_crt_request_data_t_crt_tmp_name => $var_tmp_name,
							d_azp_crt_request_data_t_crt_type => $var_type,
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_crt_request_data, $var_array, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_request_data_id_azp_crt_request_data] . "'");
						#-------------------------------------------------------------------------#
						$var_folder = 'filesproject/azp_crt_request_data/';
						Files::upload_file(trim(preg_replace('/\s+/',' ', $var_document)), $var_tmp_name, $var_folder, true);
						# Dar permisos a la ruta y archivo
						chmod($var_document, 0777);
					}
				}
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_crt_request_data_quittance(string $var_id, string $var_nro, string $var_name, string $var_type, string $var_tmp_name, string $var_error, string $var_size) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				Helper::load('files');
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $var_id . "'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql) {
						$var_document = 'REC_' . $var_nro . '.pdf';
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_crt_request_data_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_crt_request_data_m_date_modified => DATE_HOUR,
							d_azp_crt_request_data_t_rcb_document => $var_document,
							d_azp_crt_request_data_t_rcb_error => $var_error,
							d_azp_crt_request_data_t_rcb_name => ucwords(strtolower(trim(preg_replace('/\s+/',' ', $var_name)))),
							d_azp_crt_request_data_t_rcb_size => $var_size,
							d_azp_crt_request_data_t_rcb_tmp_name => $var_tmp_name,
							d_azp_crt_request_data_t_rcb_type => $var_type,
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_crt_request_data, $var_array, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_request_data_id_azp_crt_request_data] . "'");
						#-------------------------------------------------------------------------#
						$var_folder = 'filesproject/azp_crt_request_data/';
						Files::upload_file(trim(preg_replace('/\s+/',' ', $var_document)), $var_tmp_name, $var_folder, true);
						# Dar permisos a la ruta y archivo
						chmod($var_document, 0777);
					}
				}
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_crt_request_data_delete(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_delete'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
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
					throw new Exception('<b>Error:</b> El campo de id es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está eliminando no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_deleted . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está eliminando ya se encuentra eliminado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_request_data_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_crt_request_data_delete(array $data) : array {
			$var_error = $this->error_sql_azp_crt_request_data_delete($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_delete']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_crt_request_data_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_request_data, $var_array, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_request_data_drop(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_dp_bank'])) { throw new Exception('<b>Error:</b> El campo de banco esta prohibido modificar.'); }
				if (!isset($data['field_dp_base'])) { throw new Exception('<b>Error:</b> El campo de base esta prohibido modificar.'); }
				if (!isset($data['field_dp_certificate'])) { throw new Exception('<b>Error:</b> El campo de certificado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_bank = $this->db->scape($data['field_dp_bank']);
				$empty_base = $this->db->scape($data['field_dp_base']);
				$empty_certificate = $this->db->scape($data['field_dp_certificate']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_bank) || $empty_bank == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de banco es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_bank)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de banco solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_base) || $empty_base == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de base es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_base)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de base solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_certificate) || $empty_certificate == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de certificado es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_certificate)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de certificado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				/*$sql_id = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_bank . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_bank)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que está borrando no se encuentra registrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_crt_request_data_drop(array $data) : array {
			$var_error = $this->error_sql_azp_crt_request_data_drop($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_bank = $this->db->scape($data['field_dp_bank']);
				$empty_base = $this->db->scape($data['field_dp_base']);
				$empty_certificate = $this->db->scape($data['field_dp_certificate']);
				#-------------------------------------------------------------------------#
				# Seleccionar los registros de la tabla
				$var_sql = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_base . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_request_nro = $value[d_azp_crt_request_data_t_request_nro];
						$var_request_type = $value[d_azp_crt_request_data_v_id_azp_crt_request_type];
					endforeach;
				} else { $var_request_nro = ''; $var_request_type = ''; }
				#-------------------------------------------------------------------------#
				# Seleccionar los registros de la tabla
				//$var_sql = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_t_request_nro . " = '" . $var_request_nro . "'");
				$var_sql = $this->db->query("
					SELECT
						tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_data_id_azp_crt_request_data',
						tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro',
						tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " AS 'lbl_azp_crt_bank_id_azp_crt_bank',
						tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name'
					FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_crt_request_type ." tc_azp_crt_request_type
						ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
							= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
						ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
							= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
						ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
							= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request_nro . "'
						AND tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " = '" . $empty_certificate . "'
						AND tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_bank . "'
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_id = $value['lbl_azp_crt_request_data_id_azp_crt_request_data'];
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->delete(t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $var_id . "'");
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->delete(t_azp_crt_capture, d_azp_crt_capture_v_id_azp_crt_request_data . " = '" . $var_id . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# Retornar el mensaje una vez ejecutada la rutina del proceso
					return array('success' => 1, 'message' => '<b>Exito:</b> Base borrada correctamente.');
				} else {
					# Retornar el mensaje una vez ejecutada la rutina del proceso
					return array('error' => 1, 'message' => '<b>Error:</b> Base borrada anteriormente.');
				}
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_crt_request_data_document(string $var_template, string $var_name, string $var_type, string $var_tmp_name, string $var_error, string $var_size) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				$var_search = array(
					'	', "'", '"', ';', ',', '', '`', '─', '~', '´', '	', '{', '}', '[', ']', '–',
					'ç', 'Ç', 'æ', 'Æ', 'ã', 'Ã', '°', '\n', '\r', '\t');
				$var_replace = array(
					'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
					'c', 'C', '', '', '', '', '', '', '', '');
				# --------------------------------------------------------------------------------------------------
				# Eliminar registros de la tabla de importacion
				$this->db->query("DELETE FROM " . t_azp_crt_request_import);
				# Restaurar valor de la tabla desde el inicio para el nuevo cargue
				$this->db->query("ALTER TABLE " . t_azp_crt_request_import . " AUTO_INCREMENT = 1");
				# --------------------------------------------------------------------------------------------------
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_crt_request_data_s_plaque => 'No',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_request_data, $var_array, d_azp_crt_request_data_s_plaque . " = 'Si'");
				# --------------------------------------------------------------------------------------------------
				# Control para la validacion respectiva de la plantilla
				if ($var_template == 1) {
					/*if (strpos($var_name, 'template_crt_request_datas') === false) {
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_crt_request_import_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_crt_request_import_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_crt_request_import_m_date_created => DATE_HOUR,
							d_azp_crt_request_import_m_date_modified => DATE_HOUR,
							d_azp_crt_request_import_m_deleted => '3',
							d_azp_crt_request_import_m_description => 'crt_request_data',
							d_azp_crt_request_import_m_level => '2',
							d_azp_crt_request_import_m_status => '1',
							d_azp_crt_request_import_m_temp => '1',
							d_azp_crt_request_import_s_validate => 'No',
						);
						# Insertar valores en la tabla segun estructura de la tabla
						$this->db->insert(t_azp_crt_request_import, $var_array);
					} else {*/
						# Obtener datos del archivo recibido y saltar lineas
						$var_file = file_get_contents($var_tmp_name);
						$var_file = explode("\n", $var_file);
						$var_file = array_filter($var_file);
						# Recorrer los datos del archivo y separarlos por coma o punto y coma
						foreach ($var_file as $key => $value) { $var_list[] = explode(";", $value); }
						# Recorrer los datos divididos por filas y almacenarlos en la base
						foreach ($var_list as $key => $value) {
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[0])) { $import_client_name = ''; } else {
								if ($value[0] != '' || $value[0] != NULL) {
									$import_client_name = $this->db->scape($value[0]);
								} else { $import_client_name = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[1])) { $import_client_code = ''; } else {
								if ($value[1] != '' || $value[1] != NULL) {
									$import_client_code = $this->db->scape($value[1]);
								} else { $import_client_code = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[2])) { $import_request_nro = ''; } else {
								if ($value[2] != '' || $value[2] != NULL) {
									$import_request_nro = $this->db->scape($value[2]);
								} else { $import_request_nro = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[3])) { $import_request_date = ''; } else {
								if ($value[3] != '' || $value[3] != NULL) {
									$import_request_date = $this->db->scape($value[3]);
								} else { $import_request_date = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[4])) { $import_request_id = ''; } else {
								if ($value[4] != '' || $value[4] != NULL) {
									$import_request_id = $this->db->scape($value[4]);
								} else { $import_request_id = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[5])) { $import_identification = ''; } else {
								if ($value[5] != '' || $value[5] != NULL) {
									$import_identification = $this->db->scape($value[5]);
								} else { $import_identification = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[6])) { $import_full_name = ''; } else {
								if ($value[6] != '' || $value[6] != NULL) {
									$import_full_name = $this->db->scape($value[6]);
								} else { $import_full_name = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[7])) { $import_nro_oblitation = ''; } else {
								if ($value[7] != '' || $value[7] != NULL) {
									$import_nro_oblitation = $this->db->scape($value[7]);
								} else { $import_nro_oblitation = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[8])) { $import_certificate_type = ''; } else {
								if ($value[8] != '' || $value[8] != NULL) {
									$import_certificate_type = $this->db->scape($value[8]);
								} else { $import_certificate_type = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[9])) { $import_plaque_enrollment = ''; } else {
								if ($value[9] != '' || $value[9] != NULL) {
									$import_plaque_enrollment = $this->db->scape($value[9]);
								} else { $import_plaque_enrollment = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[10])) { $import_city = ''; } else {
								if ($value[10] != '' || $value[10] != NULL) {
									$import_city = $this->db->scape($value[10]);
								} else { $import_city = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[11])) { $import_applicant_entity = ''; } else {
								if ($value[11] != '' || $value[11] != NULL) {
									$import_applicant_entity = $this->db->scape($value[11]);
								} else { $import_applicant_entity = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[12])) { $import_applicant_code = ''; } else {
								if ($value[12] != '' || $value[12] != NULL) {
									$import_applicant_code = $this->db->scape($value[12]);
								} else { $import_applicant_code = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[13])) { $import_send_city = ''; } else {
								if ($value[13] != '' || $value[13] != NULL) {
									$import_send_city = $this->db->scape($value[13]);
								} else { $import_send_city = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[14])) { $import_process = ''; } else {
								if ($value[14] != '' || $value[14] != NULL) {
									$import_process = $this->db->scape($value[14]);
								} else { $import_process = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[15])) { $import_bilable = ''; } else {
								if ($value[15] != '' || $value[15] != NULL) {
									$import_bilable = $this->db->scape($value[15]);
								} else { $import_bilable = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[16])) { $import_refundable = ''; } else {
								if ($value[16] != '' || $value[16] != NULL) {
									$import_refundable = $this->db->scape($value[16]);
								} else { $import_refundable = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[17])) { $import_provider_name = ''; } else {
								if ($value[17] != '' || $value[17] != NULL) {
									$import_provider_name = $this->db->scape($value[17]);
								} else { $import_provider_name = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[18])) { $import_entity_dispatcher = ''; } else {
								if ($value[18] != '' || $value[18] != NULL) {
									$import_entity_dispatcher = $this->db->scape($value[18]);
								} else { $import_entity_dispatcher = ''; }
							}
							# Reemplazar ciertos caracteres especificados de los valores recibidos
							$repl_client_name = str_replace($var_search, $var_replace, $import_client_name);
							$repl_client_code = str_replace($var_search, $var_replace, $import_client_code);
							$repl_request_nro = str_replace($var_search, $var_replace, $import_request_nro);
							$repl_request_date = str_replace($var_search, $var_replace, $import_request_date);
							$repl_request_id = str_replace($var_search, $var_replace, $import_request_id);
							$repl_identification = str_replace($var_search, $var_replace, $import_identification);
							$repl_full_name = str_replace($var_search, $var_replace, $import_full_name);
							$repl_nro_oblitation = str_replace($var_search, $var_replace, $import_nro_oblitation);
							$repl_certificate_type = str_replace($var_search, $var_replace, $import_certificate_type);
							$repl_plaque_enrollment = str_replace($var_search, $var_replace, $import_plaque_enrollment);
							$repl_city = str_replace($var_search, $var_replace, $import_city);
							$repl_applicant_entity = str_replace($var_search, $var_replace, $import_applicant_entity);
							$repl_applicant_code = str_replace($var_search, $var_replace, $import_applicant_code);
							$repl_send_city = str_replace($var_search, $var_replace, $import_send_city);
							$repl_process = str_replace($var_search, $var_replace, $import_process);
							$repl_bilable = str_replace($var_search, $var_replace, $import_bilable);
							$repl_refundable = str_replace($var_search, $var_replace, $import_refundable);
							$repl_provider_name = str_replace($var_search, $var_replace, $import_provider_name);
							$repl_entity_dispatcher = str_replace($var_search, $var_replace, $import_entity_dispatcher);
							# Eliminar dobles vacios en los valores recibidos
							$preg_client_name = trim(preg_replace('/\s+/',' ', $repl_client_name));
							$preg_client_code = trim(preg_replace('/\s+/',' ', $repl_client_code));
							$preg_request_nro = trim(preg_replace('/\s+/',' ', $repl_request_nro));
							$preg_request_date = trim(preg_replace('/\s+/',' ', $repl_request_date));
							$preg_request_id = trim(preg_replace('/\s+/',' ', $repl_request_id));
							$preg_identification = trim(preg_replace('/\s+/',' ', $repl_identification));
							$preg_full_name = trim(preg_replace('/\s+/',' ', $repl_full_name));
							$preg_nro_oblitation = trim(preg_replace('/\s+/',' ', $repl_nro_oblitation));
							$preg_certificate_type = trim(preg_replace('/\s+/',' ', $repl_certificate_type));
							$preg_plaque_enrollment = trim(preg_replace('/\s+/',' ', $repl_plaque_enrollment));
							$preg_city = trim(preg_replace('/\s+/',' ', $repl_city));
							$preg_applicant_entity = trim(preg_replace('/\s+/',' ', $repl_applicant_entity));
							$preg_applicant_code = trim(preg_replace('/\s+/',' ', $repl_applicant_code));
							$preg_send_city = trim(preg_replace('/\s+/',' ', $repl_send_city));
							$preg_process = trim(preg_replace('/\s+/',' ', $repl_process));
							$preg_bilable = trim(preg_replace('/\s+/',' ', $repl_bilable));
							$preg_refundable = trim(preg_replace('/\s+/',' ', $repl_refundable));
							$preg_provider_name = trim(preg_replace('/\s+/',' ', $repl_provider_name));
							$preg_entity_dispatcher = trim(preg_replace('/\s+/',' ', $repl_entity_dispatcher));
							# Asignacion de valores finales para almacenar en la base
							$frmt_client_name = $preg_client_name;
							$frmt_client_code = $preg_client_code;
							$frmt_request_nro = $preg_request_nro;
							$frmt_request_date = $preg_request_date;
							$frmt_request_id = $preg_request_id;
							$frmt_identification = $preg_identification;
							$frmt_full_name = strtoupper($preg_full_name);
							$frmt_nro_oblitation = $preg_nro_oblitation;
							$frmt_certificate_type = ucwords(strtolower($preg_certificate_type));
							$frmt_plaque_enrollment = strtoupper($preg_plaque_enrollment);
							$frmt_city = ucwords(strtolower($preg_city));
							$frmt_applicant_entity = strtoupper($preg_applicant_entity);
							$frmt_applicant_code = $preg_applicant_code;
							$frmt_send_city = strtoupper($preg_send_city);
							$frmt_process = strtoupper($preg_process);
							$frmt_bilable = strtoupper($preg_bilable);
							$frmt_refundable = strtoupper($preg_refundable);
							$frmt_provider_name = strtoupper($preg_provider_name);
							$frmt_entity_dispatcher = strtoupper($preg_entity_dispatcher);
							# Validacion de valores recibidos para codificacion.
							$empty_client_name = html_entity_decode(utf8_encode($frmt_client_name));
							$empty_client_code = html_entity_decode(utf8_encode($frmt_client_code));
							$empty_request_nro = html_entity_decode(utf8_encode($frmt_request_nro));
							$empty_request_date = html_entity_decode(utf8_encode($frmt_request_date));
							$empty_request_id = html_entity_decode(utf8_encode($frmt_request_id));
							$empty_identification = html_entity_decode(utf8_encode($frmt_identification));
							$empty_full_name = html_entity_decode(utf8_encode($frmt_full_name));
							$empty_nro_oblitation = html_entity_decode(utf8_encode($frmt_nro_oblitation));
							$empty_certificate_type = html_entity_decode(utf8_encode($frmt_certificate_type));
							$empty_plaque_enrollment = html_entity_decode(utf8_encode($frmt_plaque_enrollment));
							$empty_city = html_entity_decode(utf8_encode($frmt_city));
							$empty_applicant_entity = html_entity_decode(utf8_encode($frmt_applicant_entity));
							$empty_applicant_code = html_entity_decode(utf8_encode($frmt_applicant_code));
							$empty_send_city = html_entity_decode(utf8_encode($frmt_send_city));
							$empty_process = html_entity_decode(utf8_encode($frmt_process));
							$empty_bilable = html_entity_decode(utf8_encode($frmt_bilable));
							$empty_refundable = html_entity_decode(utf8_encode($frmt_refundable));
							$empty_provider_name = html_entity_decode(utf8_encode($frmt_provider_name));
							$empty_entity_dispatcher = html_entity_decode(utf8_encode($frmt_entity_dispatcher));
							# Organizacion de los valores capturados y asignados a los campos a insertar
							$var_array = array(
								d_azp_crt_request_import_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_crt_request_import_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_crt_request_import_m_date_created => DATE_HOUR,
								d_azp_crt_request_import_m_date_modified => DATE_HOUR,
								d_azp_crt_request_import_m_deleted => '2',
								d_azp_crt_request_import_m_description => '',
								d_azp_crt_request_import_m_level => '2',
								d_azp_crt_request_import_m_status => '1',
								d_azp_crt_request_import_m_temp => '5',
								d_azp_crt_request_import_s_date => '',
								d_azp_crt_request_import_s_plaque => 'No',
								d_azp_crt_request_import_s_validate => 'No',
								d_azp_crt_request_import_t_applicant_code => $empty_applicant_code,
								d_azp_crt_request_import_t_applicant_entity => $empty_applicant_entity,
								d_azp_crt_request_import_t_bilable => $empty_bilable,
								d_azp_crt_request_import_t_certificate_type => $empty_certificate_type,
								d_azp_crt_request_import_t_city => $empty_city,
								d_azp_crt_request_import_t_client_code => $empty_client_code,
								d_azp_crt_request_import_t_client_name => $empty_client_name,
								d_azp_crt_request_import_t_crt_date_image => '',
								d_azp_crt_request_import_t_crt_date_load => '',
								d_azp_crt_request_import_t_crt_document => '',
								d_azp_crt_request_import_t_crt_error => '',
								d_azp_crt_request_import_t_crt_mark_image => '',
								d_azp_crt_request_import_t_crt_name => '',
								d_azp_crt_request_import_t_crt_route => '',
								d_azp_crt_request_import_t_crt_size => '',
								d_azp_crt_request_import_t_crt_tmp_name => '',
								d_azp_crt_request_import_t_crt_type => '',
								d_azp_crt_request_import_t_date_delivery => '',
								d_azp_crt_request_import_t_entity_dispatcher => $empty_entity_dispatcher,
								d_azp_crt_request_import_t_full_name => $empty_full_name,
								d_azp_crt_request_import_t_identification => $empty_identification,
								d_azp_crt_request_import_t_nro_oblitation => $empty_nro_oblitation,
								d_azp_crt_request_import_t_observation => '',
								d_azp_crt_request_import_t_plaque_enrollment => $empty_plaque_enrollment,
								d_azp_crt_request_import_t_process => $empty_process,
								d_azp_crt_request_import_t_provider_class => '',
								d_azp_crt_request_import_t_provider_name => $empty_provider_name,
								d_azp_crt_request_import_t_rcb_amount => '0',
								d_azp_crt_request_import_t_rcb_date_load => '',
								d_azp_crt_request_import_t_rcb_document => '',
								d_azp_crt_request_import_t_rcb_error => '',
								d_azp_crt_request_import_t_rcb_name => '',
								d_azp_crt_request_import_t_rcb_nro_receipt => '',
								d_azp_crt_request_import_t_rcb_receipt => '',
								d_azp_crt_request_import_t_rcb_route => '',
								d_azp_crt_request_import_t_rcb_service => '0',
								d_azp_crt_request_import_t_rcb_size => '',
								d_azp_crt_request_import_t_rcb_tmp_name => '',
								d_azp_crt_request_import_t_rcb_type => '',
								d_azp_crt_request_import_t_refundable => $empty_refundable,
								d_azp_crt_request_import_t_request_date => $empty_request_date,
								d_azp_crt_request_import_t_request_id => $empty_request_id,
								d_azp_crt_request_import_t_request_nro => $empty_request_nro,
								d_azp_crt_request_import_t_supplier_date_delivery => '',
								d_azp_crt_request_import_t_supplier_date_request => '',
								d_azp_crt_request_import_t_send_city => $empty_send_city,
								d_azp_crt_request_import_t_fct_service => '0',
								d_azp_crt_request_import_v_id_azp_crt_city => '1',
								d_azp_crt_request_import_v_id_azp_crt_client => '0',
								d_azp_crt_request_import_v_id_azp_crt_expiration => '1',
								d_azp_crt_request_import_v_id_azp_crt_observation_type => '1',
								d_azp_crt_request_import_v_id_azp_crt_phase => '1',
								d_azp_crt_request_import_v_id_azp_crt_request_type => '0',
							);
							# Insertar valores en la tabla segun estructura de la tabla
							$this->db->insert(t_azp_crt_request_import, $var_array);
						}
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select('*', t_azp_crt_request_import, d_azp_crt_request_import_t_request_date . " = ''");
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_crt_request_import_s_date => 1,);
								# Insertar valores en la nueva tabla que no existen
								$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_id_azp_crt_request_import . " = '" . $key_sql[d_azp_crt_request_import_id_azp_crt_request_import] . "'");
							endforeach;
						}
						# --------------------------------------------------------------------------------------------------
						# Instanciando el modelo en una variable
						$var_model = new m_azp_crt_request_dataModel;
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select('*', t_azp_crt_request_import, d_azp_crt_request_import_t_request_date . " != ''");
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								$var_model->validate_date($key_sql[d_azp_crt_request_import_t_request_date]);
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_crt_request_import_s_date => $var_model->validate_date($key_sql[d_azp_crt_request_import_t_request_date]),);
								# Insertar valores en la nueva tabla que no existen
								$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_id_azp_crt_request_import . " = '" . $key_sql[d_azp_crt_request_import_id_azp_crt_request_import] . "'");
							endforeach;
						}
						# --------------------------------------------------------------------------------------------------
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_crt_request_import_s_date => 0,);
						# Insertar valores en la nueva tabla que no existen
						$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_s_date . " = ''");
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select('*', t_azp_crt_request_import, d_azp_crt_request_import_t_client_code . " = ''");
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->delete(t_azp_crt_request_import, d_azp_crt_request_import_id_azp_crt_request_import . " = '" . $key_sql[d_azp_crt_request_import_id_azp_crt_request_import] . "'");
							endforeach;
						}
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						/*$var_sql = $this->db->select('*', t_azp_crt_request_import,
							d_azp_crt_request_import_t_identification . " IS NULL OR " . d_azp_crt_request_import_t_request_nro . " IS NULL");
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->delete(t_azp_crt_request_import,
								d_azp_crt_request_import_id_azp_crt_request_import . " = '" . $key_sql[d_azp_crt_request_import_id_azp_crt_request_import] . "'");
							endforeach;
						}*/
						# --------------------------------------------------------------------------------------------------
						# Array para asignar argumentos o valores a los elementos
						//$var_array = array(d_azp_crt_request_import_v_id_azp_crt_request_type => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						//$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_v_id_azp_crt_request_type . " = ''");
						#---------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						//$var_array = array(d_azp_crt_request_import_v_id_azp_crt_request_type => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						//$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_v_id_azp_crt_request_type . " = '0'");
						# --------------------------------------------------------------------------------------------------
						# Eliminar registros de la tabla de importacion
						$this->db->query("DELETE FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_id_azp_crt_request_import . " = '1'");
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_crt_request_import, d_azp_crt_request_import_s_date . " = '0'");
						# Validar si la consulta es verdadera
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_date_count = $key_sql['lbl_count']; endforeach; }
						# Validar si la consulta es verdadera
						if ($var_date_count == 0) {
							# --------------------------------------------------------------------------------------------------
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->select('*', t_azp_crt_client);
							# Validar si la consulta es verdadera
							if (false != $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql):
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(d_azp_crt_request_import_v_id_azp_crt_client => $key_sql[d_azp_crt_client_id_azp_crt_client],);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_t_client_code . " = '" . $key_sql[d_azp_crt_client_t_code] . "'");
								endforeach;
							}
							#-------------------------------------------------------------------------#
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->select("COUNT(*) AS 'lbl_count_client'", t_azp_crt_request_import, d_azp_crt_request_import_v_id_azp_crt_client . " = '0'");
							# Validar si la consulta es verdadera
							if (true == $var_sql) { foreach ($var_sql as $key_sql): $var_count_client = $key_sql['lbl_count_client']; endforeach; }
							# --------------------------------------------------------------------------------------------------
							if ($var_count_client > 0) {
								# Consulta para identificar los nuevos registros en la tabla
								$var_sql = $this->db->select("MIN(" . d_azp_crt_request_import_id_azp_crt_request_import . ") AS 'lbl_min_id'", t_azp_crt_request_import, d_azp_crt_request_import_v_id_azp_crt_client . " = '0'");
								# Validar si la consulta es verdadera
								if (true == $var_sql) {
									# Recorrer las filas de la consulta generada
									foreach ($var_sql as $key_sql): $var_min_id = $key_sql['lbl_min_id'] - 1; endforeach;
									# Retornar el mensaje una vez ejecutada la rutina del proceso
									return array('error' => 1, 'message' => '<b>Error:</b> El cliente ingresado en la fila ' . $var_min_id . ' de excel, no coincide con la base.');
								}
							} else if ($var_count_client == 0) {


								# Consulta para identificar los nuevos registros en la tabla
								$var_sql = $this->db->query("SELECT MAX(" . d_azp_crt_client_id_azp_crt_client . ") AS 'lbl_max' FROM " . t_azp_crt_client);
								# Validar si la consulta es verdadera
								if (false != $var_sql) {
									# Recorrer las filas de la consulta generada
									foreach ($var_sql as $key_sql):
										# Organizacion de los valores capturados y asignados a los campos a insertar
										$var_array = array(d_azp_crt_request_import_v_id_azp_crt_client => '1',);
										# Query Sql Update: Actualizar valores de la tabla segun sus campos
										$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_v_id_azp_crt_client . " > " . $key_sql['lbl_max']);
									endforeach;
								}
								# --------------------------------------------------------------------------------------------------
								# Consulta para identificar los nuevos registros en la tabla
								/*$var_sql = $this->db->query("
									SELECT * FROM " . t_azp_crt_client . " tc_azp_crt_client
									INNER JOIN " . t_azp_crt_request_import . " tc_azp_crt_request_import
										ON tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
											= tc_azp_crt_request_import." . d_azp_crt_request_import_v_id_azp_crt_client . "
								");*/



								# --------------------------------------------------------------------------------------------------
								# Consulta para identificar los nuevos registros en la tabla
								$var_sql = $this->db->select('*', t_azp_crt_request_type);
								# Validar si la consulta es verdadera
								if (false != $var_sql) {
									# Recorrer las filas de la consulta generada
									foreach ($var_sql as $key_sql):
										# Organizacion de los valores capturados y asignados a los campos a insertar
										$var_array = array(d_azp_crt_request_import_v_id_azp_crt_request_type => $key_sql[d_azp_crt_request_type_id_azp_crt_request_type],);
										# Query Sql Update: Actualizar valores de la tabla segun sus campos
										$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_t_certificate_type . " = '" . $key_sql[d_azp_crt_request_type_t_name] . "'");
									endforeach;
								}
								#-------------------------------------------------------------------------#
								# Consulta para identificar los nuevos registros en la tabla
								$var_sql = $this->db->select("COUNT(*) AS 'lbl_count_request_type'", t_azp_crt_request_import, d_azp_crt_request_import_v_id_azp_crt_request_type . " = '0'");
								# Validar si la consulta es verdadera
								if (true == $var_sql) { foreach ($var_sql as $key_sql): $var_count_request_type = $key_sql['lbl_count_request_type']; endforeach; }
								# --------------------------------------------------------------------------------------------------
								if ($var_count_request_type > 0) {
									# Consulta para identificar los nuevos registros en la tabla
									$var_sql = $this->db->select("MIN(" . d_azp_crt_request_import_id_azp_crt_request_import . ") AS 'lbl_min_id'",
										t_azp_crt_request_import, d_azp_crt_request_import_v_id_azp_crt_request_type . " = '0'");
									# Validar si la consulta es verdadera
									if (true == $var_sql) {
										# Recorrer las filas de la consulta generada
										foreach ($var_sql as $key_sql): $var_min_id = $key_sql['lbl_min_id'] - 1; endforeach;
										# Retornar el mensaje una vez ejecutada la rutina del proceso
										return array(
											'error' => 1,
											'message' => '<b>Error:</b> El tipo de certificado ingresado en la fila ' . $var_min_id . ' de excel, no coincide con la base.'
										);
									}
								} else if ($var_count_request_type == 0) {



									# Consulta para identificar los nuevos registros en la tabla
									$var_sql = $this->db->query("SELECT MAX(" . d_azp_crt_request_type_id_azp_crt_request_type . ") AS 'lbl_max' FROM " . t_azp_crt_request_type);
									# Validar si la consulta es verdadera
									if (false != $var_sql) {
										# Recorrer las filas de la consulta generada
										foreach ($var_sql as $key_sql):
											# Organizacion de los valores capturados y asignados a los campos a insertar
											$var_array = array(d_azp_crt_request_import_v_id_azp_crt_request_type => '1',);
											# Query Sql Update: Actualizar valores de la tabla segun sus campos
											$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_v_id_azp_crt_request_type . " > " . $key_sql['lbl_max']);
										endforeach;
									}
									# --------------------------------------------------------------------------------------------------
									# Consulta para identificar los nuevos registros en la tabla
									$var_sql = $this->db->query("
										SELECT * FROM " . t_azp_crt_request_type . " tc_azp_crt_request_type
										INNER JOIN " . t_azp_crt_request_import . " tc_azp_crt_request_import
											ON tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
												= tc_azp_crt_request_import." . d_azp_crt_request_import_v_id_azp_crt_request_type . "
									");






									# --------------------------------------------------------------------------------------------------
									# Consulta para identificar los nuevos registros en la tabla
									$var_sql = $this->db->select('*', t_azp_crt_city);
									# Validar si la consulta es verdadera
									if (false != $var_sql) {
										# Recorrer las filas de la consulta generada
										foreach ($var_sql as $key_sql):
											# Organizacion de los valores capturados y asignados a los campos a insertar
											$var_array = array(d_azp_crt_request_import_v_id_azp_crt_city => $key_sql[d_azp_crt_city_id_azp_crt_city],);
											# Query Sql Update: Actualizar valores de la tabla segun sus campos
											$this->db->update(t_azp_crt_request_import, $var_array, strtolower(d_azp_crt_request_import_t_city) . " = '" . strtolower($key_sql[d_azp_crt_city_t_name]) . "'");
										endforeach;
									}
									# --------------------------------------------------------------------------------------------------
									# Array para asignar argumentos o valores a los elementos
									$var_array = array(d_azp_crt_request_import_v_id_azp_crt_city => '1',);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_v_id_azp_crt_city . " = ''");
									#---------------------------------------------#
									# Array para asignar argumentos o valores a los elementos
									$var_array = array(d_azp_crt_request_import_v_id_azp_crt_city => '1',);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_v_id_azp_crt_city . " = '0'");
									# --------------------------------------------------------------------------------------------------
									# Consulta para identificar los nuevos registros en la tabla
									$var_sql = $this->db->select('*', t_azp_crt_request_type);
									# Validar si la consulta es verdadera
									if (false != $var_sql) {
										# Recorrer las filas de la consulta generada
										foreach ($var_sql as $key_sql):
											# Organizacion de los valores capturados y asignados a los campos a insertar
											$var_array = array(d_azp_crt_request_import_v_id_azp_crt_request_type => $key_sql[d_azp_crt_request_type_id_azp_crt_request_type],);
											# Query Sql Update: Actualizar valores de la tabla segun sus campos
											$this->db->update(t_azp_crt_request_import, $var_array, strtolower(d_azp_crt_request_import_t_certificate_type) . " = '" . strtolower($key_sql[d_azp_crt_request_type_t_name]) . "'");
										endforeach;
									}
									# --------------------------------------------------------------------------------------------------
									# Array para asignar argumentos o valores a los elementos
									//$var_array = array(d_azp_crt_request_import_v_id_azp_crt_request_type => '1',);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									//$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_v_id_azp_crt_request_type . " = ''");
									#---------------------------------------------#
									# Array para asignar argumentos o valores a los elementos
									//$var_array = array(d_azp_crt_request_import_v_id_azp_crt_request_type => '1',);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									//$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_v_id_azp_crt_request_type . " = '0'");
									# --------------------------------------------------------------------------------------------------
									# Consulta para identificar los nuevos registros en la tabla
									$var_sql = $this->db->select('*', t_azp_crt_request_import);
									# Validar si la consulta es verdadera
									if (false != $var_sql) {
										# Recorrer las filas de la consulta generada
										foreach ($var_sql as $key_sql):
											$var_identification = $key_sql[d_azp_crt_request_import_t_identification];
											$var_plaque_enrollment = $key_sql[d_azp_crt_request_import_t_plaque_enrollment];
											# Consulta para identificar los nuevos registros en la tabla
											$var_sql = $this->db->select('*', t_azp_crt_request_data,
												d_azp_crt_request_data_m_deleted . " = '1' AND " .
												d_azp_crt_request_data_t_identification . " = '" . $var_identification . "' AND " .
												d_azp_crt_request_data_t_plaque_enrollment . " = '" . $var_plaque_enrollment . "'"
											);
											# Validar si la consulta es verdadera
											if (false != $var_sql) {
												# Recorrer las filas de la consulta generada
												foreach ($var_sql as $key_sql):
													# Organizacion de los valores capturados y asignados a los campos a insertar
													$var_array = array(d_azp_crt_request_import_s_plaque => 'Si',);
													# Query Sql Update: Actualizar valores de la tabla segun sus campos
													$this->db->update(t_azp_crt_request_import, $var_array,
														d_azp_crt_request_import_t_identification . " = '" . $key_sql[d_azp_crt_request_data_t_identification] . "' AND " .
														d_azp_crt_request_import_t_plaque_enrollment . " = '" . $key_sql[d_azp_crt_request_data_t_plaque_enrollment] . "'"
													);
												endforeach;
											}
										endforeach;
									}
									# --------------------------------------------------------------------------------------------------
									# Consulta para identificar los nuevos registros en la tabla
									/*$var_sql = $this->db->select('*', t_azp_crt_request_import);
									# Validar si la consulta es verdadera
									if (false != $var_sql) {
										# Recorrer las filas de la consulta generada
										foreach ($var_sql as $key_sql):
											$var_identification = $key_sql[d_azp_crt_request_import_t_identification];
											$var_request_nro = $key_sql[d_azp_crt_request_import_t_request_nro];
											$var_crt_request_type = $key_sql[d_azp_crt_request_import_v_id_azp_crt_request_type];
											# Consulta para identificar los nuevos registros en la tabla
											$var_sql = $this->db->select('*', t_azp_crt_request_data,
												d_azp_crt_request_data_m_deleted . " = '1' AND " .
												d_azp_crt_request_data_t_identification . " = '" . $var_identification . "' AND " .
												d_azp_crt_request_data_t_request_nro . " = '" . $var_request_nro . "' AND " .
												d_azp_crt_request_data_v_id_azp_crt_request_type . " = '" . $var_crt_request_type . "'"
											);
											# Validar si la consulta es verdadera
											if (false != $var_sql) {
												# Recorrer las filas de la consulta generada
												foreach ($var_sql as $key_sql):
													# Organizacion de los valores capturados y asignados a los campos a insertar
													$var_array = array(d_azp_crt_request_import_s_validate => 'Si',);
													# Query Sql Update: Actualizar valores de la tabla segun sus campos
													$this->db->update(t_azp_crt_request_import, $var_array,
														d_azp_crt_request_import_t_identification . " = '" . $key_sql[d_azp_crt_request_data_t_identification] . "' AND " .
														d_azp_crt_request_import_t_request_nro . " = '" . $key_sql[d_azp_crt_request_data_t_request_nro] . "' AND " .
														d_azp_crt_request_import_v_id_azp_crt_request_type . " = '" . $key_sql[d_azp_crt_request_data_v_id_azp_crt_request_type] . "'"
													);
												endforeach;
											}
										endforeach;
									}*/
									# --------------------------------------------------------------------------------------------------
									# Consulta para identificar los nuevos registros en la tabla
									/*$var_sql = $this->db->select('*', t_azp_crt_request_import,
										d_azp_crt_request_import_s_plaque . " = 'No' AND " .
										d_azp_crt_request_import_s_validate . " = 'No'"
									);*/
									# --------------------------------------------------------------------------------------------------
									# Consulta para identificar los nuevos registros en la tabla
									$var_sql = $this->db->select('*', t_azp_crt_request_import,
										d_azp_crt_request_import_s_validate . " = 'No'"
									);
									# Validar si la consulta es verdadera
									if (false != $var_sql) {
										# Recorrer las filas de la consulta generada
										foreach ($var_sql as $key_sql):
											# Organizacion de los valores capturados y asignados a los campos a insertar
											$var_array = array(
												d_azp_crt_request_data_m_by_created => $_SESSION[SESS_APP_ID],
												d_azp_crt_request_data_m_by_modified => $_SESSION[SESS_APP_ID],
												d_azp_crt_request_data_m_date_created => DATE_HOUR,
												d_azp_crt_request_data_m_date_modified => DATE_HOUR,
												d_azp_crt_request_data_m_deleted => '1',
												d_azp_crt_request_data_m_description => '',
												d_azp_crt_request_data_m_level => '2',
												d_azp_crt_request_data_m_status => '1',
												d_azp_crt_request_data_m_temp => '5',
												d_azp_crt_request_data_s_date => $key_sql[d_azp_crt_request_import_s_date],
												d_azp_crt_request_data_s_plaque => $key_sql[d_azp_crt_request_import_s_plaque],
												d_azp_crt_request_data_s_validate => $key_sql[d_azp_crt_request_import_s_validate],
												d_azp_crt_request_data_t_applicant_code => $key_sql[d_azp_crt_request_import_t_applicant_code],
												d_azp_crt_request_data_t_applicant_entity => $key_sql[d_azp_crt_request_import_t_applicant_entity],
												d_azp_crt_request_data_t_bilable => $key_sql[d_azp_crt_request_import_t_bilable],
												d_azp_crt_request_data_t_certificate_type => $key_sql[d_azp_crt_request_import_t_certificate_type],
												d_azp_crt_request_data_t_city => $key_sql[d_azp_crt_request_import_t_city],
												d_azp_crt_request_data_t_client_code => $key_sql[d_azp_crt_request_import_t_client_code],
												d_azp_crt_request_data_t_client_name => $key_sql[d_azp_crt_request_import_t_client_name],
												d_azp_crt_request_data_t_crt_date_image => $key_sql[d_azp_crt_request_import_t_crt_date_image],
												d_azp_crt_request_data_t_crt_date_load => $key_sql[d_azp_crt_request_import_t_crt_date_load],
												d_azp_crt_request_data_t_crt_document => $key_sql[d_azp_crt_request_import_t_crt_document],
												d_azp_crt_request_data_t_crt_error => $key_sql[d_azp_crt_request_import_t_crt_error],
												d_azp_crt_request_data_t_crt_mark_image => $key_sql[d_azp_crt_request_import_t_crt_mark_image],
												d_azp_crt_request_data_t_crt_name => $key_sql[d_azp_crt_request_import_t_crt_name],
												d_azp_crt_request_data_t_crt_route => $key_sql[d_azp_crt_request_import_t_crt_route],
												d_azp_crt_request_data_t_crt_size => $key_sql[d_azp_crt_request_import_t_crt_size],
												d_azp_crt_request_data_t_crt_tmp_name => $key_sql[d_azp_crt_request_import_t_crt_tmp_name],
												d_azp_crt_request_data_t_crt_type => $key_sql[d_azp_crt_request_import_t_crt_type],
												d_azp_crt_request_data_t_date_delivery => $key_sql[d_azp_crt_request_import_t_date_delivery],
												d_azp_crt_request_data_t_entity_dispatcher => $key_sql[d_azp_crt_request_import_t_entity_dispatcher],
												d_azp_crt_request_data_t_full_name => $key_sql[d_azp_crt_request_import_t_full_name],
												d_azp_crt_request_data_t_identification => $key_sql[d_azp_crt_request_import_t_identification],
												d_azp_crt_request_data_t_nro_oblitation => $key_sql[d_azp_crt_request_import_t_nro_oblitation],
												d_azp_crt_request_data_t_observation => $key_sql[d_azp_crt_request_import_t_observation],
												d_azp_crt_request_data_t_plaque_enrollment => $key_sql[d_azp_crt_request_import_t_plaque_enrollment],
												d_azp_crt_request_data_t_process => $key_sql[d_azp_crt_request_import_t_process],
												d_azp_crt_request_data_t_provider_class => $key_sql[d_azp_crt_request_import_t_provider_class],
												d_azp_crt_request_data_t_provider_name => $key_sql[d_azp_crt_request_import_t_provider_name],
												d_azp_crt_request_data_t_rcb_amount => $key_sql[d_azp_crt_request_import_t_rcb_amount],
												d_azp_crt_request_data_t_rcb_date_load => $key_sql[d_azp_crt_request_import_t_rcb_date_load],
												d_azp_crt_request_data_t_rcb_document => $key_sql[d_azp_crt_request_import_t_rcb_document],
												d_azp_crt_request_data_t_rcb_error => $key_sql[d_azp_crt_request_import_t_rcb_error],
												d_azp_crt_request_data_t_rcb_name => $key_sql[d_azp_crt_request_import_t_rcb_name],
												d_azp_crt_request_data_t_rcb_nro_receipt => $key_sql[d_azp_crt_request_import_t_rcb_nro_receipt],
												d_azp_crt_request_data_t_rcb_receipt => $key_sql[d_azp_crt_request_import_t_rcb_receipt],
												d_azp_crt_request_data_t_rcb_route => $key_sql[d_azp_crt_request_import_t_rcb_route],
												d_azp_crt_request_data_t_rcb_service => $key_sql[d_azp_crt_request_import_t_rcb_service],
												d_azp_crt_request_data_t_rcb_size => $key_sql[d_azp_crt_request_import_t_rcb_size],
												d_azp_crt_request_data_t_rcb_tmp_name => $key_sql[d_azp_crt_request_import_t_rcb_tmp_name],
												d_azp_crt_request_data_t_rcb_type => $key_sql[d_azp_crt_request_import_t_rcb_type],
												d_azp_crt_request_data_t_refundable => $key_sql[d_azp_crt_request_import_t_refundable],
												d_azp_crt_request_data_t_request_date => $key_sql[d_azp_crt_request_import_t_request_date],
												d_azp_crt_request_data_t_request_id => $key_sql[d_azp_crt_request_import_t_request_id],
												d_azp_crt_request_data_t_request_nro => $key_sql[d_azp_crt_request_import_t_request_nro],
												d_azp_crt_request_data_t_supplier_date_delivery => $key_sql[d_azp_crt_request_import_t_supplier_date_delivery],
												d_azp_crt_request_data_t_supplier_date_request => $key_sql[d_azp_crt_request_import_t_supplier_date_request],
												d_azp_crt_request_data_t_send_city => $key_sql[d_azp_crt_request_import_t_send_city],
												d_azp_crt_request_data_t_fct_service => $key_sql[d_azp_crt_request_import_t_fct_service],
												d_azp_crt_request_data_v_id_azp_crt_city => $key_sql[d_azp_crt_request_import_v_id_azp_crt_city],
												d_azp_crt_request_data_v_id_azp_crt_client => $key_sql[d_azp_crt_request_import_v_id_azp_crt_client],
												d_azp_crt_request_data_v_id_azp_crt_expiration => $key_sql[d_azp_crt_request_import_v_id_azp_crt_expiration],
												d_azp_crt_request_data_v_id_azp_crt_observation_type => $key_sql[d_azp_crt_request_import_v_id_azp_crt_observation_type],
												d_azp_crt_request_data_v_id_azp_crt_phase => $key_sql[d_azp_crt_request_import_v_id_azp_crt_phase],
												d_azp_crt_request_data_v_id_azp_crt_request_type => $key_sql[d_azp_crt_request_import_v_id_azp_crt_request_type],
											);
											# Insertar valores en la nueva tabla que no existen
											$this->db->insert(t_azp_crt_request_data, $var_array);
										endforeach;
									}
									# --------------------------------------------------------------------------------------------------
									# Consulta para identificar los nuevos registros en la tabla
									$var_sql = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_m_deleted . " = '1' AND " . d_azp_crt_request_data_m_temp . " = '5'");
									# Validar si la consulta es verdadera
									if (false != $var_sql) {
										# Recorrer las filas de la consulta generada
										foreach ($var_sql as $key_sql):
											# Organizacion de los valores capturados y asignados a los campos a insertar
											$var_array = array(
												d_azp_crt_capture_m_by_created => $_SESSION[SESS_APP_ID],
												d_azp_crt_capture_m_by_modified => $_SESSION[SESS_APP_ID],
												d_azp_crt_capture_m_date_created => DATE_HOUR,
												d_azp_crt_capture_m_date_modified => DATE_HOUR,
												d_azp_crt_capture_m_deleted => '1',
												d_azp_crt_capture_m_description => '',
												d_azp_crt_capture_m_level => '2',
												d_azp_crt_capture_m_status => '1',
												d_azp_crt_capture_m_temp => '5',
												d_azp_crt_capture_t_crt_date_image => '',
												d_azp_crt_capture_t_crt_date_load => '',
												d_azp_crt_capture_t_crt_document => '',
												d_azp_crt_capture_t_crt_error => '',
												d_azp_crt_capture_t_crt_mark_image => '',
												d_azp_crt_capture_t_crt_name => '',
												d_azp_crt_capture_t_crt_route => '',
												d_azp_crt_capture_t_crt_size => '',
												d_azp_crt_capture_t_crt_tmp_name => '',
												d_azp_crt_capture_t_crt_type => '',
												d_azp_crt_capture_t_rcb_amount => '0',
												d_azp_crt_capture_t_rcb_date_load => '',
												d_azp_crt_capture_t_rcb_document => '',
												d_azp_crt_capture_t_rcb_error => '',
												d_azp_crt_capture_t_rcb_name => '',
												d_azp_crt_capture_t_rcb_nro_receipt => '',
												d_azp_crt_capture_t_rcb_route => '',
												d_azp_crt_capture_t_rcb_service => '0',
												d_azp_crt_capture_t_rcb_size => '',
												d_azp_crt_capture_t_rcb_tmp_name => '',
												d_azp_crt_capture_t_rcb_type => '',
												d_azp_crt_capture_v_id_azp_crt_request_data => $key_sql[d_azp_crt_request_data_id_azp_crt_request_data],
											);
											# Insertar valores en la nueva tabla que no existen
											$this->db->insert(t_azp_crt_capture, $var_array);
										endforeach;
									}
									# --------------------------------------------------------------------------------------------------
									# Array para asignar argumentos o valores a los elementos
									$var_array = array(d_azp_crt_capture_m_temp => '1',);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_crt_capture, $var_array, d_azp_crt_capture_m_temp . " = '5'");
									# --------------------------------------------------------------------------------------------------
									# Array para asignar argumentos o valores a los elementos
									$var_array = array(d_azp_crt_request_data_m_temp => '1',);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_crt_request_data, $var_array, d_azp_crt_request_data_m_temp . " = '5'");
									# --------------------------------------------------------------------------------------------------
									# Array para asignar argumentos o valores a los elementos
									$var_array = array(d_azp_crt_request_import_m_deleted => '1',);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_m_deleted . " = '2'");
									# --------------------------------------------------------------------------------------------------
									return array('success' => 1, 'message' => '<b>Exito:</b> Haz importado exitosamente el archivo de solicitudes.');
								}
							}
						} else {
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT MIN(" . d_azp_crt_request_import_id_azp_crt_request_import . ") AS 'lbl_min' FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_s_date . " = '0'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_min = $key_sql['lbl_min'] - 1; endforeach; }
							#-------------------------------------------------------------------------#
							# Retornar el mensaje una vez ejecutada la rutina del proceso
							return array('error' => 0, 'message' =>
								'<b>Error:</b> Archivo de solicitudes procesado incorrectamente.' . '</br></br>' .
								'<b>Error:</b> Fechas incorrectas en el archivo de solicitudes.' . '</br>' .
								'<b>Error:</b> Formato Correcto: Año-Mes-Dia (yyyy-mm-dd).' . '</br>' .
								'<b>Error:</b> Campo: Fecha De Solicitud: Registro Erroneo: ' . $var_min . '.'
							);
						}
					//}
				} else if ($var_template == 2) {
					/*if (strpos($var_name, 'template_crt_request_suppliers') === false) {
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_crt_request_import_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_crt_request_import_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_crt_request_import_m_date_created => DATE_HOUR,
							d_azp_crt_request_import_m_date_modified => DATE_HOUR,
							d_azp_crt_request_import_m_deleted => '3',
							d_azp_crt_request_import_m_description => 'crt_request_supplier',
							d_azp_crt_request_import_m_level => '2',
							d_azp_crt_request_import_m_status => '1',
							d_azp_crt_request_import_m_temp => '1',
							d_azp_crt_request_import_s_validate => 'No',
						);
						# Insertar valores en la tabla segun estructura de la tabla
						$this->db->insert(t_azp_crt_request_import, $var_array);
					} else {*/
						# Obtener datos del archivo recibido y saltar lineas
						$var_file = file_get_contents($var_tmp_name);
						$var_file = explode("\n", $var_file);
						$var_file = array_filter($var_file);
						# Recorrer los datos del archivo y separarlos por coma o punto y coma
						foreach ($var_file as $key => $value) { $var_list[] = explode(";", $value); }
						# Recorrer los datos divididos por filas y almacenarlos en la base
						foreach ($var_list as $key => $value) {
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[0])) { $import_00 = ''; } else {
								if ($value[0] != '' || $value[0] != NULL) {
									$import_00 = $this->db->scape($value[0]);
								} else { $import_00 = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[1])) { $import_01 = ''; } else {
								if ($value[1] != '' || $value[1] != NULL) {
									$import_01 = $this->db->scape($value[1]);
								} else { $import_01 = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[2])) { $import_02 = ''; } else {
								if ($value[2] != '' || $value[2] != NULL) {
									$import_02 = $this->db->scape($value[2]);
								} else { $import_02 = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[3])) { $import_03 = ''; } else {
								if ($value[3] != '' || $value[3] != NULL) {
									$import_03 = $this->db->scape($value[3]);
								} else { $import_03 = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[4])) { $import_04 = ''; } else {
								if ($value[4] != '' || $value[4] != NULL) {
									$import_04 = $this->db->scape($value[4]);
								} else { $import_04 = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[5])) { $import_05 = ''; } else {
								if ($value[5] != '' || $value[5] != NULL) {
									$import_05 = $this->db->scape($value[5]);
								} else { $import_05 = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[6])) { $import_06 = '0'; } else {
								if ($value[6] != '' || $value[6] != NULL) {
									$import_06 = $this->db->scape($value[6]);
								} else { $import_06 = '0'; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[7])) { $import_07 = '0'; } else {
								if ($value[7] != '' || $value[7] != NULL) {
									$import_07 = $this->db->scape($value[7]);
								} else { $import_07 = '0'; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[8])) { $import_08 = ''; } else {
								if ($value[8] != '' || $value[8] != NULL) {
									$import_08 = $this->db->scape($value[8]);
								} else { $import_08 = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[9])) { $import_09 = ''; } else {
								if ($value[9] != '' || $value[9] != NULL) {
									$import_09 = $this->db->scape($value[9]);
								} else { $import_09 = ''; }
							}
							# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
							if (empty($value[10])) { $import_10 = ''; } else {
								if ($value[10] != '' || $value[10] != NULL) {
									$import_10 = $this->db->scape($value[10]);
								} else { $import_10 = ''; }
							}
							# Reemplazar ciertos caracteres especificados de los valores recibidos
							$repl_request_date = str_replace($var_search, $var_replace, $import_00);
							$repl_client_code = str_replace($var_search, $var_replace, $import_01);
							$repl_identification = str_replace($var_search, $var_replace, $import_02);
							$repl_full_name = str_replace($var_search, $var_replace, $import_03);
							$repl_plaque_enrollment = str_replace($var_search, $var_replace, $import_04);
							$repl_city = str_replace($var_search, $var_replace, $import_05);
							$repl_rcb_service = str_replace($var_search, $var_replace, $import_06);
							$repl_rcb_amount = str_replace($var_search, $var_replace, $import_07);
							$repl_rcb_receipt = str_replace($var_search, $var_replace, $import_08);
							$repl_crt_date_image = str_replace($var_search, $var_replace, $import_09);
							$repl_observation = str_replace($var_search, $var_replace, $import_10);
							# Eliminar dobles vacios en los valores recibidos
							$preg_request_date = trim(preg_replace('/\s+/',' ', $repl_request_date));
							$preg_client_code = trim(preg_replace('/\s+/',' ', $repl_client_code));
							$preg_identification = trim(preg_replace('/\s+/',' ', $repl_identification));
							$preg_full_name = trim(preg_replace('/\s+/',' ', $repl_full_name));
							$preg_plaque_enrollment = trim(preg_replace('/\s+/',' ', $repl_plaque_enrollment));
							$preg_city = trim(preg_replace('/\s+/',' ', $repl_city));
							$preg_rcb_service = trim(preg_replace('/\s+/',' ', $repl_rcb_service));
							$preg_rcb_amount = trim(preg_replace('/\s+/',' ', $repl_rcb_amount));
							$preg_rcb_receipt = trim(preg_replace('/\s+/',' ', $repl_rcb_receipt));
							$preg_crt_date_image = trim(preg_replace('/\s+/',' ', $repl_crt_date_image));
							$preg_observation = trim(preg_replace('/\s+/',' ', $repl_observation));
							# Asignacion de valores finales para almacenar en la base
							$frm_request_date = strtoupper($preg_request_date);
							$frm_client_code = strtoupper($preg_client_code);
							$frm_identification = strtoupper($preg_identification);
							$frm_full_name = strtoupper($preg_full_name);
							$frm_plaque_enrollment = strtoupper($preg_plaque_enrollment);
							$frm_city = strtoupper($preg_city);
							$frm_rcb_service = strtoupper($preg_rcb_service);
							$frm_rcb_amount = strtoupper($preg_rcb_amount);
							$frm_rcb_receipt = strtoupper($preg_rcb_receipt);
							$frm_crt_date_image = strtoupper($preg_crt_date_image);
							$frm_observation = strtoupper($preg_observation);
							# Validacion de valores recibidos para codificacion.
							$empty_request_date = html_entity_decode(utf8_encode($frm_request_date));
							$empty_client_code = html_entity_decode(utf8_encode($frm_client_code));
							$empty_identification = html_entity_decode(utf8_encode($frm_identification));
							$empty_full_name = html_entity_decode(utf8_encode($frm_full_name));
							$empty_plaque_enrollment = html_entity_decode(utf8_encode($frm_plaque_enrollment));
							$empty_city = html_entity_decode(utf8_encode($frm_city));
							$empty_rcb_service = html_entity_decode(utf8_encode($frm_rcb_service));
							$empty_rcb_amount = html_entity_decode(utf8_encode($frm_rcb_amount));
							$empty_rcb_receipt = html_entity_decode(utf8_encode($frm_rcb_receipt));
							$empty_crt_date_image = html_entity_decode(utf8_encode($frm_crt_date_image));
							$empty_observation = html_entity_decode(utf8_encode($frm_observation));
							# Organizacion de los valores capturados y asignados a los campos a insertar
							$var_array = array(
								d_azp_crt_request_import_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_crt_request_import_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_crt_request_import_m_date_created => DATE_HOUR,
								d_azp_crt_request_import_m_date_modified => DATE_HOUR,
								d_azp_crt_request_import_m_deleted => '2',
								d_azp_crt_request_import_m_description => '',
								d_azp_crt_request_import_m_level => '2',
								d_azp_crt_request_import_m_status => '1',
								d_azp_crt_request_import_m_temp => '2',
								d_azp_crt_request_import_s_date => '',
								d_azp_crt_request_import_s_plaque => 'No',
								d_azp_crt_request_import_s_validate => 'No',
								d_azp_crt_request_import_t_applicant_code => '',
								d_azp_crt_request_import_t_applicant_entity => '',
								d_azp_crt_request_import_t_bilable => '',
								d_azp_crt_request_import_t_certificate_type => '',
								d_azp_crt_request_import_t_city => '',
								d_azp_crt_request_import_t_client_code => '',
								d_azp_crt_request_import_t_client_name => '',
								d_azp_crt_request_import_t_crt_date_image => $empty_crt_date_image,
								d_azp_crt_request_import_t_crt_date_load => '',
								d_azp_crt_request_import_t_crt_document => '',
								d_azp_crt_request_import_t_crt_error => '',
								d_azp_crt_request_import_t_crt_mark_image => '',
								d_azp_crt_request_import_t_crt_name => '',
								d_azp_crt_request_import_t_crt_route => '',
								d_azp_crt_request_import_t_crt_size => '',
								d_azp_crt_request_import_t_crt_tmp_name => '',
								d_azp_crt_request_import_t_crt_type => '',
								d_azp_crt_request_import_t_date_delivery => '',
								d_azp_crt_request_import_t_entity_dispatcher => '',
								d_azp_crt_request_import_t_full_name => $empty_full_name,
								d_azp_crt_request_import_t_identification => $empty_identification,
								d_azp_crt_request_import_t_nro_oblitation => '',
								d_azp_crt_request_import_t_observation => $empty_observation,
								d_azp_crt_request_import_t_plaque_enrollment => $empty_plaque_enrollment,
								d_azp_crt_request_import_t_process => '',
								d_azp_crt_request_import_t_provider_class => '',
								d_azp_crt_request_import_t_provider_name => '',
								d_azp_crt_request_import_t_rcb_amount => '0',
								d_azp_crt_request_import_t_rcb_date_load => '',
								d_azp_crt_request_import_t_rcb_document => '',
								d_azp_crt_request_import_t_rcb_error => '',
								d_azp_crt_request_import_t_rcb_name => '',
								d_azp_crt_request_import_t_rcb_nro_receipt => '',
								d_azp_crt_request_import_t_rcb_receipt => $empty_rcb_receipt,
								d_azp_crt_request_import_t_rcb_route => '',
								d_azp_crt_request_import_t_rcb_service => $empty_rcb_service,
								d_azp_crt_request_import_t_rcb_size => '',
								d_azp_crt_request_import_t_rcb_tmp_name => '',
								d_azp_crt_request_import_t_rcb_type => '',
								d_azp_crt_request_import_t_refundable => '',
								d_azp_crt_request_import_t_request_date => '',
								d_azp_crt_request_import_t_request_id => '',
								d_azp_crt_request_import_t_request_nro => '',
								d_azp_crt_request_import_t_supplier_date_delivery => DATE,
								d_azp_crt_request_import_t_supplier_date_request => '',
								d_azp_crt_request_import_t_send_city => '',
								d_azp_crt_request_import_t_fct_service => '0',
								d_azp_crt_request_import_v_id_azp_crt_city => '1',
								d_azp_crt_request_import_v_id_azp_crt_client => '1',
								d_azp_crt_request_import_v_id_azp_crt_expiration => '1',
								d_azp_crt_request_import_v_id_azp_crt_observation_type => '1',
								d_azp_crt_request_import_v_id_azp_crt_phase => '1',
								d_azp_crt_request_import_v_id_azp_crt_request_type => '1',
							);
							# Insertar valores en la tabla segun estructura de la tabla
							$this->db->insert(t_azp_crt_request_import, $var_array);
						}
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select('*', t_azp_crt_request_import, d_azp_crt_request_import_t_request_date . " = ''");
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_crt_request_import_s_date => 1,);
								# Insertar valores en la nueva tabla que no existen
								$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_id_azp_crt_request_import . " = '" . $key_sql[d_azp_crt_request_import_id_azp_crt_request_import] . "'");
							endforeach;
						}
						# --------------------------------------------------------------------------------------------------
						# Instanciando el modelo en una variable
						$var_model = new m_azp_crt_request_dataModel;
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select('*', t_azp_crt_request_import, d_azp_crt_request_import_t_request_date . " != ''");
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								$var_model->validate_date($key_sql[d_azp_crt_request_import_t_request_date]);
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_crt_request_import_s_date => $var_model->validate_date($key_sql[d_azp_crt_request_import_t_request_date]),);
								# Insertar valores en la nueva tabla que no existen
								$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_id_azp_crt_request_import . " = '" . $key_sql[d_azp_crt_request_import_id_azp_crt_request_import] . "'");
							endforeach;
						}
						# --------------------------------------------------------------------------------------------------
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_crt_request_import_s_date => 0,);
						# Insertar valores en la nueva tabla que no existen
						$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_s_date . " = ''");
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select('*', t_azp_crt_request_import, d_azp_crt_request_import_t_identification . " = ''");
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->delete(t_azp_crt_request_import, d_azp_crt_request_import_id_azp_crt_request_import . " = '" . $key_sql[d_azp_crt_request_import_id_azp_crt_request_import] . "'");
							endforeach;
						}
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select('*', t_azp_crt_request_import, d_azp_crt_request_import_t_identification . " IS NULL");
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->delete(t_azp_crt_request_import, d_azp_crt_request_import_id_azp_crt_request_import . " = '" . $key_sql[d_azp_crt_request_import_id_azp_crt_request_import] . "'");
							endforeach;
						}
						# --------------------------------------------------------------------------------------------------
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_crt_request_import_v_id_azp_crt_request_type => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_v_id_azp_crt_request_type . " = ''");
						#---------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_crt_request_import_v_id_azp_crt_request_type => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_v_id_azp_crt_request_type . " = '0'");
						# --------------------------------------------------------------------------------------------------
						# Eliminar registros de la tabla de importacion
						$this->db->query("DELETE FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_id_azp_crt_request_import . " = '1'");
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_crt_request_import, d_azp_crt_request_import_s_date . " = '0'");
						# Validar si la consulta es verdadera
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_date_count = $key_sql['lbl_count']; endforeach; }
						# Validar si la consulta es verdadera
						if ($var_date_count == 0) {
							# --------------------------------------------------------------------------------------------------
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->select('*', t_azp_crt_request_type);
							# Validar si la consulta es verdadera
							if (false != $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql):
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(d_azp_crt_request_import_v_id_azp_crt_request_type => $key_sql[d_azp_crt_request_type_id_azp_crt_request_type],);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_crt_request_import, $var_array, strtolower(d_azp_crt_request_import_t_certificate_type) . " = '" . strtolower($key_sql[d_azp_crt_request_type_t_name]) . "'");
								endforeach;
							}
							# --------------------------------------------------------------------------------------------------
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_crt_request_import_v_id_azp_crt_request_type => '1',);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_v_id_azp_crt_request_type . " = ''");
							#---------------------------------------------#
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_crt_request_import_v_id_azp_crt_request_type => '1',);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_v_id_azp_crt_request_type . " = '0'");
							# --------------------------------------------------------------------------------------------------
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->select('*', t_azp_crt_request_import);
							# Validar si la consulta es verdadera
							if (false != $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql):
									$var_identification = $key_sql[d_azp_crt_request_import_t_identification];
									$var_plaque_enrollment = $key_sql[d_azp_crt_request_import_t_plaque_enrollment];
									$var_request_nro = $key_sql[d_azp_crt_request_import_t_request_nro];
									# Consulta para identificar los nuevos registros en la tabla
									$var_sql = $this->db->select('*', t_azp_crt_request_data,
										d_azp_crt_request_data_m_deleted . " = '1' AND " .
										d_azp_crt_request_data_t_identification . " = '" . $var_identification . "' AND " .
										d_azp_crt_request_data_t_plaque_enrollment . " = '" . $var_plaque_enrollment . "'"
									);
									# Validar si la consulta es verdadera
									if (false != $var_sql) {
										# Recorrer las filas de la consulta generada
										foreach ($var_sql as $key_sql):
											# Organizacion de los valores capturados y asignados a los campos a insertar
											$var_array = array(d_azp_crt_request_import_s_validate => 'No',);
											# Query Sql Update: Actualizar valores de la tabla segun sus campos
											$this->db->update(t_azp_crt_request_import, $var_array,
												d_azp_crt_request_import_t_identification . " = '" . $key_sql[d_azp_crt_request_data_t_identification] . "'"
											);
										endforeach;
									}
								endforeach;
							}
							# --------------------------------------------------------------------------------------------------
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->select('*', t_azp_crt_request_import, d_azp_crt_request_import_s_validate . " = 'No'");
							# Validar si la consulta es verdadera
							if (false != $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql):
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(
										d_azp_crt_request_data_m_by_modified => $_SESSION[SESS_APP_ID],
										d_azp_crt_request_data_m_date_modified => DATE_HOUR,
										d_azp_crt_request_data_m_temp => '2',
										//d_azp_crt_request_data_t_crt_date_image => $key_sql[d_azp_crt_request_import_t_crt_date_image],
										d_azp_crt_request_data_t_nro_oblitation => $key_sql[d_azp_crt_request_import_t_nro_oblitation],
										//d_azp_crt_request_data_t_rcb_receipt => $key_sql[d_azp_crt_request_import_t_rcb_receipt],
										d_azp_crt_request_data_t_rcb_service => $key_sql[d_azp_crt_request_import_t_rcb_service],
										d_azp_crt_request_data_t_supplier_date_delivery => DATE,
									);
									# Insertar valores en la nueva tabla que no existen
									$this->db->update(t_azp_crt_request_data, $var_array,
										d_azp_crt_request_data_t_identification . " = '" . $key_sql[d_azp_crt_request_import_t_identification] . "' AND " .
										d_azp_crt_request_data_t_plaque_enrollment . " = '" . $key_sql[d_azp_crt_request_import_t_plaque_enrollment] . "'"
									);
								endforeach;
							}
							# --------------------------------------------------------------------------------------------------
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_m_temp . " = '2'");
							# Validar si la consulta es verdadera
							if (false != $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql):
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(
										d_azp_crt_capture_m_by_modified => $_SESSION[SESS_APP_ID],
										d_azp_crt_capture_m_date_modified => DATE_HOUR,
										//d_azp_crt_capture_t_crt_date_image => $key_sql[d_azp_crt_request_import_t_crt_date_image],
										//d_azp_crt_capture_t_rcb_receipt => $key_sql[d_azp_crt_request_import_t_rcb_receipt],
										d_azp_crt_capture_t_rcb_service => $key_sql[d_azp_crt_request_import_t_rcb_service],
									);
									# Insertar valores en la nueva tabla que no existen
									$this->db->update(t_azp_crt_capture, $var_array,
										d_azp_crt_capture_v_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_request_data_id_azp_crt_request_data] . "'"
									);
								endforeach;
							}
							# --------------------------------------------------------------------------------------------------
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_crt_request_data_m_temp => '1',);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_crt_request_data, $var_array, d_azp_crt_request_data_m_temp . " = '2'");
							# --------------------------------------------------------------------------------------------------
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_crt_request_import_m_deleted => '1',);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_crt_request_import, $var_array, d_azp_crt_request_import_m_deleted . " = '2'");
							# --------------------------------------------------------------------------------------------------
							return array('success' => 1, 'message' => '<b>Exito:</b> Haz importado exitosamente el archivo de proveedores.');
						} else {
							# --------------------------------------------------------------------------------------------------
							return array('success' => 1, 'message' => '<b>Error:</b> Fechas incorrectas en el archivo de proveedores.');
						}
					//}
				} else {
					return array('error' => 1, 'message' => '<b>Error:</b> Haz importado erroneamente el archivo.');
				}
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_request_data_file(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_fl_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_fl_id']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_fl_date_load'])) { throw new Exception('<b>Error:</b> El campo de fecha cargue esta prohibido modificar.'); }
				if (!isset($data['field_fl_mark_image'])) { throw new Exception('<b>Error:</b> El campo de marcar imagen esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_date_load = $this->db->scape($data['field_fl_date_load']);
				$empty_mark_image = $this->db->scape($data['field_fl_mark_image']);
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
				if (Func::emp($empty_date_load) || $empty_date_load == 'aaaa-mm-dd') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha cargue es obligatorio.');
				}
				#---------------------------------------------#
				if (strlen($empty_date_load) < 10 || strlen($empty_date_load) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha cargue está mal diligenciado, debe ser aaaa-mm-dd.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_mark_image) || strtolower($empty_mark_image) == strtolower('ninguno') || $empty_mark_image == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de marcar imagen es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_mark_image)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de marcar imagen solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
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
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_request_data_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_crt_request_data_file(array $data) : array {
			$var_error = $this->error_sql_azp_crt_request_data_file($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_fl_id']);
				#-------------------------------------------------------------------------#
				$empty_date_load = $this->db->scape($data['field_fl_date_load']);
				$empty_mark_image = $this->db->scape($data['field_fl_mark_image']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_request_data_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_request_data_m_date_modified => DATE_HOUR,
					d_azp_crt_request_data_t_crt_date_load => $empty_date_load,
					d_azp_crt_request_data_t_crt_mark_image => $empty_mark_image,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_request_data, $var_array, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo almacenado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_crt_request_data_email_1(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_em_1_affair'])) { throw new Exception('<b>Error:</b> El campo de asunto esta prohibido modificar.'); }
				if (!isset($data['field_em_1_third_type'])) { throw new Exception('<b>Error:</b> El campo de tipo proveedor esta prohibido modificar.'); }
				if (!isset($data['field_em_1_file_name'])) { throw new Exception('<b>Error:</b> El campo de nombre archivo esta prohibido modificar.'); }
				if (!isset($data['field_em_1_summernote'])) { throw new Exception('<b>Error:</b> El campo de mensaje esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_affair = $this->db->scape($data['field_em_1_affair']);
				$empty_third_type = $this->db->scape($data['field_em_1_third_type']);
				$empty_file_name = $this->db->scape($data['field_em_1_file_name']);
				$empty_summernote = $this->db->scape($data['field_em_1_summernote']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_affair)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de asunto es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_third_type) || strtolower($empty_third_type) == strtolower('seleccionar') || $empty_third_type == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo proveedor es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_third_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo proveedor solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_file_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre archivo es obligatorio.');
				}
				#---------------------------------------------#
				if (strpos($empty_file_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre archivo no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_file_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre archivo no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_summernote)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de mensaje es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_crt_third_type = $this->db->select('*', t_azp_crt_third_type, d_azp_crt_third_type_id_azp_crt_third_type . " = '" . $empty_third_type . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_crt_third_type) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_crt_third_type) == '') { $sql_crt_third_type[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_crt_third_type[0][0]) != strtolower($empty_third_type)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El correo electronico seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_crt_request_data_email_1(array $data) : array {
			$var_error = $this->error_sql_azp_crt_request_data_email_1($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# Consultar helper y sus opciones
				Helper::load('emails');
				#-------------------------------------------------------------------------#
				$empty_tp_id = $this->db->scape($data['field_tp_id']);
				//$empty_email = $this->db->scape($data['field_em_1_email']);
				$empty_affair = $this->db->scape($data['field_em_1_affair']);
				$empty_summernote = $this->db->scape($data['field_em_1_summernote']);
				#-------------------------------------------------------------------------#
				$var_label_search = array(
					'<br>', '</br>', '<p>', '</p>', '<i>', '</i>', '<b>', '</b>',
					'<u>', '</u>', '<s>', '</s>', '<img ', '</img ', '<center>', '</center>',
					'<h1>', '</h1>', '<h2>', '</h2>', '<h3>', '</h3>',
					'<h4>', '</h4>', '<h5>', '</h5>', '<h6>', '</h6>',
					'<span style=\"letter-spacing: 0.1px;\">', '</span>', '<span>',
				);
				$var_label_replace = array(
					'', '', '', '', '', '', '', '', '', '',
					'', '', '', '', '', '', '', '', '', '',
					'', '', '', '', '', '', '', '', '', '',
					'', '', '',
				);
				$var_affair = str_replace($var_label_search, $var_label_replace, $empty_affair);
				#-------------------------------------------------------------------------#
				# Asignacion de valores a variables
				$var_from_email = ''; $var_from_name = '';
				# Array para guardar valores
				$var_adds = array();
				# Array para guardar valores
				$var_copy = array();
				# Array para guardar valores
				$var_files = array();
				# Valores del array vacios
				$var_log_email_main = array();
				$var_log_email_copy = array();
				$var_log_email_intern = array();
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->query("
					SELECT *, tc_azp_configuration_email." . d_azp_configuration_email_id_azp_configuration_email . "
					FROM " . t_azp_user . " tc_azp_user
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
						ON tc_azp_user." . d_azp_user_id_azp_user . "
							= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_email . " tc_azp_configuration_email
						ON tc_azp_user." . d_azp_user_id_azp_user . "
							= tc_azp_configuration_email." . d_azp_configuration_email_v_id_azp_user . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND tc_azp_configuration_email." . d_azp_configuration_email_t_email . " != ''
				");
				#-------------------------------------------------------------------------#
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$empty_ihost = $value[d_azp_configuration_email_t_host];
						$empty_iuser = $value[d_azp_configuration_email_t_email];
						$empty_ipass = $value[d_azp_configuration_email_t_pass];
						$empty_iport = $value[d_azp_configuration_email_t_port];
						$empty_ismtp = $value[d_azp_configuration_email_t_secure];
						$empty_iemail = $value[d_azp_user_t_email];
						$empty_inames = $value[d_azp_data_personal_t_names];
						$empty_isurns = $value[d_azp_data_personal_t_surnames];
						$empty_idata = $empty_inames . ' ' . $empty_isurns;
						# Asignacion de valores a nuevas variables
						$var_u_firm = $value[d_azp_data_personal_t_firm];
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array_tp = explode(",", $empty_tp_id);
				# Valores del array vacios
				//$var_email_address = array();
				# Recorrer los datos de la consulta
				foreach ($var_array_tp as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_email_send = $this->db->select("*", t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " IN ('" . $value . "')");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_email_send) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_email_send as $key2 => $value2):
							$var_id = $value2[d_azp_crt_third_parties_id_azp_crt_third_parties];
							$var_contact = $value2[d_azp_crt_third_parties_t_contact];
							$var_email = $value2[d_azp_crt_third_parties_t_email];
							//$var_email_address[$var_email] = $var_contact;
							$var_log_email_main[$var_id] = $var_contact . '(' . $var_email . ')';
							# Asignacion de valores a nuevas variables
							$empty_aemail = $value2[d_azp_crt_third_parties_t_email];
							$empty_anames = $value2[d_azp_crt_third_parties_t_contact];
							$var_adds[$empty_aemail] = $empty_anames;
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Seleccionar los registros de la tabla
				$var_sql_email_copy = $this->db->select('*', t_azp_crt_email_copy, d_azp_crt_email_copy_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_email_copy_m_temp . " = '2'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_email_copy) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_email_copy as $key => $value) {
						# Asignacion de valores a nuevas variables
						$var_ec_email = $value[d_azp_crt_email_copy_t_email];
						$var_ec_names = $value[d_azp_crt_email_copy_t_names];
						$var_ec_surnames = $value[d_azp_crt_email_copy_t_surnames];
						$var_log_email_intern[$var_id] = $var_ec_names . ' ' . $var_ec_surnames . '(' . $var_ec_email . ')';
						# Asignacion de valores a nuevas variables
						$empty_cemail = $value[d_azp_crt_email_copy_t_email];
						$empty_cnames = $value[d_azp_crt_email_copy_t_names];
						$empty_csurns = $value[d_azp_crt_email_copy_t_surnames];
						$empty_cdata = $empty_cnames . ' ' . $empty_csurns;
						$var_copy[$empty_cemail] = $empty_cdata;
					}
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql_excel = $this->db->select("*", t_azp_crt_generated_files,
					d_azp_crt_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_crt_generated_files_m_deleted . " = '1' AND " .
					d_azp_crt_generated_files_m_level . " = '2' AND " .
					d_azp_crt_generated_files_m_temp . " = '2' AND " .
					d_azp_crt_generated_files_t_expiration . " = 'Utilizable' AND " .
					d_azp_crt_generated_files_t_extension . " = 'xlsx' AND " .
					d_azp_crt_generated_files_t_module . " = 'Solicitud' AND " .
					d_azp_crt_generated_files_t_template . " = 'Proveedor' AND " .
					d_azp_crt_generated_files_t_type . " = 'Excel'"
				);
				#-------------------------------------------------------------------------#
				if (false != $var_sql_excel) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_excel as $key_sql => $value_sql) {
						# Asignacion de valores a nuevas variables
						$var_name_file = $value_sql[d_azp_crt_generated_files_t_name_file];
						$var_route = $value_sql[d_azp_crt_generated_files_t_route];
						$var_sql_excel = '../' . $var_route . $var_name_file;
						# Asignacion de valores a nuevas variables
						$var_compl = '../' . $var_route . $var_name_file;
						$var_files[$var_compl] = $var_name_file;
					}
				}
				#-------------------------------------------------------------------------#
				# Codigo html para la estructura del correo electronico
				$var_html = '
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
									<img src="' . URL . 'views/backend/images/email.png">
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
									<h3 class="text-dark position-absolute pos-bottom pos-right">
										<div class="m-0 d-flex">
											<div class="flex-1 text-contrast">
												Bogotá, ' . Helper::actual_date() . '
											</div>
										</div>
									</h3>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
									<p class="text-dark">
										<div class="m-0 d-flex">
											<div class="flex-1 text-contrast">
												' . html_entity_decode($empty_summernote) . '
											</div>
										</div>
									</p>
									<p class="text-dark">
										<div class="m-0 d-flex">
											<div class="flex-1 text-contrast">
												<img src="' . URL . $var_u_firm . '">
											</div>
										</div>
									</p>
								</div>
							</div>
						</div>
					</div>
				';
				#-------------------------------------------------------------------------#
				# Codigo de parametros de email
				$var_init = array($empty_ihost, $empty_iuser, $empty_ipass, $empty_iport, $empty_ismtp,);
				$var_html = Emails::main_template($var_html);
				$var_from = array($empty_iemail => $empty_idata,);
				//$var_adds = array($empty_aemail => $empty_adata,);
				//$var_copy = array($empty_email => $var_data,);
				$var_topic = html_entity_decode($var_affair);
				$var_email = Emails::main_send($var_init, $var_from, $var_adds, $var_copy, $var_html, $var_topic, $var_files,);
				#-------------------------------------------------------------------------#
				# Validacion del correo electronico a enviar
				$var_ms_success = '<b>Exito:</b> Correo electronico enviado.';
				$var_ms_error = '<b>Error:</b> Correo electronico no enviado.';
				#-------------------------------------------------------------------------#
				# Validacion del correo electronico a enviar
				if (true === $var_email) { $var_return = 'success'; $var_ms_name = 'message'; $var_ms_text = $var_ms_success; } else { $var_return = 'error'; $var_ms_name = 'message'; $var_ms_text = $var_ms_error; }
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_crt_request_update);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_crt_request_data_t_supplier_date_request => DATE, d_azp_crt_request_data_v_id_azp_crt_phase => '2',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_crt_request_data, $var_array,
							d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_request_update_v_id_azp_crt_request_data] . "' AND " .
							d_azp_crt_request_data_v_id_azp_crt_phase . " < '2'"
						);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_crt_generated_files_m_temp => '1',);
				# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
				$this->db->update(t_azp_crt_generated_files, $var_array, d_azp_crt_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_generated_files_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_crt_email_copy_m_temp => '1',);
				# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
				$this->db->update(t_azp_crt_email_copy, $var_array, d_azp_crt_email_copy_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_email_copy_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				$empty_log_email_main = implode(',',$var_log_email_main);
				$empty_log_email_copy = implode(',',$var_log_email_copy);
				$empty_log_email_intern = implode(',',$var_log_email_intern);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_log_email_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_crt_log_email_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_log_email_m_date_created => DATE_HOUR,
					d_azp_crt_log_email_m_date_modified => DATE_HOUR,
					d_azp_crt_log_email_m_deleted => '1',
					d_azp_crt_log_email_m_description => '',
					d_azp_crt_log_email_m_level => '2',
					d_azp_crt_log_email_m_status => '1',
					d_azp_crt_log_email_m_temp => '1',
					d_azp_crt_log_email_t_affair => $empty_affair,
					d_azp_crt_log_email_t_email_main => $empty_log_email_main,
					d_azp_crt_log_email_t_email_copy => $empty_log_email_copy,
					d_azp_crt_log_email_t_email_intern => $empty_log_email_intern,
					d_azp_crt_log_email_t_message => $empty_summernote,
					d_azp_crt_log_email_t_template => 'Solicitud De Certificados',
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_crt_log_email, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array($var_return => 1, $var_ms_name => $var_ms_text,);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_crt_request_data_email_2(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_em_2_affair'])) { throw new Exception('<b>Error:</b> El campo de asunto esta prohibido modificar.'); }
				if (!isset($data['field_em_2_bank'])) { throw new Exception('<b>Error:</b> El campo de banco esta prohibido modificar.'); }
				if (!isset($data['field_em_2_date_delivery'])) { throw new Exception('<b>Error:</b> El campo de fecha entrega esta prohibido modificar.'); }
				if (!isset($data['field_em_2_date_validate'])) { throw new Exception('<b>Error:</b> El campo de entrega fisica esta prohibido modificar.'); }
				if (!isset($data['field_em_2_email'])) { throw new Exception('<b>Error:</b> El campo de correo electronico esta prohibido modificar.'); }
				if (!isset($data['field_em_2_file_name'])) { throw new Exception('<b>Error:</b> El campo de nombre archivo esta prohibido modificar.'); }
				if (!isset($data['field_em_2_send'])) { throw new Exception('<b>Error:</b> El campo de envios esta prohibido modificar.'); }
				if (!isset($data['field_em_2_summernote_1'])) { throw new Exception('<b>Error:</b> El campo de mensaje esta prohibido modificar.'); }
				if (!isset($data['field_em_2_summernote_2'])) { throw new Exception('<b>Error:</b> El campo de mensaje esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_affair = $this->db->scape($data['field_em_2_affair']);
				$empty_bank = $this->db->scape($data['field_em_2_bank']);
				$empty_date_delivery = $this->db->scape($data['field_em_2_date_delivery']);
				$empty_date_validate = $this->db->scape($data['field_em_2_date_validate']);
				$empty_email = $this->db->scape($data['field_em_2_email']);
				$empty_file_name = $this->db->scape($data['field_em_2_file_name']);
				$empty_send = $this->db->scape($data['field_em_2_send']);
				$empty_summernote_1 = $this->db->scape($data['field_em_2_summernote_1']);
				$empty_summernote_2 = $this->db->scape($data['field_em_2_summernote_2']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_affair)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de asunto es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_bank) || strtolower($empty_bank) == strtolower('seleccionar') || $empty_bank == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de banco es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_bank)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de banco solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_email) || strtolower($empty_email) == strtolower('seleccionar') || $empty_email == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_date_validate) || strtolower($empty_date_validate) == strtolower('seleccionar') || $empty_date_validate == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de entrega fisica es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_date_validate)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de entrega fisica solo permite numeros.');
				}
				#---------------------------------------------#
				if ($empty_date_validate == '1') {
					if (Func::emp($empty_date_delivery) || $empty_date_delivery == 'aaaa-mm-dd') {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El campo de fecha entrega es obligatorio.');
					}
					#---------------------------------------------#
					if (strlen($empty_date_delivery) < 10 || strlen($empty_date_delivery) > 10) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El campo de fecha entrega está mal diligenciado, debe ser aaaa-mm-dd.');
					}
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_file_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre archivo es obligatorio.');
				}
				#---------------------------------------------#
				if (strpos($empty_file_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre archivo no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_file_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre archivo no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_send) || strtolower($empty_send) == strtolower('seleccionar') || $empty_send == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de envios es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_send)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de envios solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_summernote_1)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de mensaje es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_summernote_2)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de mensaje es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_crt_client = $this->db->select('*', t_azp_crt_client, d_azp_crt_client_id_azp_crt_client . " = '" . $empty_email . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_crt_client) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_crt_client) == '') { $sql_crt_client[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_crt_client[0][0]) != strtolower($empty_email)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El correo electronico seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_crt_request_data_email_2(array $data) : array {
			$var_error = $this->error_sql_azp_crt_request_data_email_2($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# Consultar helper y sus opciones
				Helper::load('emails');
				#-------------------------------------------------------------------------#
				# Valores del array vacios
				$var_log_email_main = array();
				$var_log_email_copy = array();
				$var_log_email_intern = array();
				#-------------------------------------------------------------------------#
				$empty_us_id = $this->db->scape($data['field_us_id']);
				$empty_tp_id = $this->db->scape($data['field_tp_id']);
				$empty_affair = $this->db->scape($data['field_em_2_affair']);
				$empty_date_delivery = $this->db->scape($data['field_em_2_date_delivery']);
				$empty_date_validate = $this->db->scape($data['field_em_2_date_validate']);
				$empty_email = $this->db->scape($data['field_em_2_email']);
				$empty_send = $this->db->scape($data['field_em_2_send']);
				$empty_summernote_1 = $this->db->scape($data['field_em_2_summernote_1']);
				$empty_summernote_2 = $this->db->scape($data['field_em_2_summernote_2']);
				#-------------------------------------------------------------------------#
				$var_label_search = array(
					'<br>', '</br>', '<p>', '</p>', '<i>', '</i>', '<b>', '</b>',
					'<u>', '</u>', '<s>', '</s>', '<img ', '</img ', '<center>', '</center>',
					'<h1>', '</h1>', '<h2>', '</h2>', '<h3>', '</h3>',
					'<h4>', '</h4>', '<h5>', '</h5>', '<h6>', '</h6>',
					'<span style=\"letter-spacing: 0.1px;\">', '</span>', '<span>',
				);
				$var_label_replace = array(
					'', '', '', '', '', '', '', '', '', '',
					'', '', '', '', '', '', '', '', '', '',
					'', '', '', '', '', '', '', '', '', '',
					'', '', '',
				);
				$var_affair = str_replace($var_label_search, $var_label_replace, $empty_affair);
				#-------------------------------------------------------------------------#
				# Asignacion de valores a variables
				$var_from_email = ''; $var_from_name = '';
				# Array para guardar valores
				$var_adds = array();
				# Array para guardar valores
				$var_copy = array();
				# Array para guardar valores
				$var_files = array();
				#-------------------------------------------------------------------------#
				$var_sql_up = $this->db->select("*", t_azp_crt_request_update);
				#-------------------------------------------------------------------------#
				if ($empty_send == 1) {
					# Array para guardar valores
					$var_xlsx = array();
					# Array para guardar valores
					$var_cert = array();
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla
					$var_sql_excel = $this->db->select("*", t_azp_crt_generated_files,
						d_azp_crt_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
						d_azp_crt_generated_files_m_deleted . " = '1' AND " .
						d_azp_crt_generated_files_m_level . " = '2' AND " .
						d_azp_crt_generated_files_m_temp . " = '2' AND " .
						d_azp_crt_generated_files_t_expiration . " = 'Utilizable' AND " .
						d_azp_crt_generated_files_t_extension . " = 'xlsx' AND " .
						d_azp_crt_generated_files_t_module . " = 'Solicitud' AND " .
						d_azp_crt_generated_files_t_template . " = 'Certificado' AND " .
						d_azp_crt_generated_files_t_type . " = 'Excel'"
					);
					#-------------------------------------------------------------------------#
					if (false != $var_sql_excel) {
						foreach ($var_sql_excel as $key_sql => $value_sql) {
							$var_docum = $value_sql[d_azp_crt_generated_files_t_name_file];
							$var_route = $value_sql[d_azp_crt_generated_files_t_route];
							$var_compl = '../' . $var_route . $var_docum;
							$var_xlsx[0] = $var_compl;
							#$var_files[$var_compl] = $var_docum;
						}
					}
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla
					$var_sql_rd_crt = $this->db->select("*", t_azp_crt_request_update, d_azp_crt_request_update_t_crt_document . " != ''");
					#-------------------------------------------------------------------------#
					if (false != $var_sql_rd_crt) {
						foreach ($var_sql_rd_crt as $key_sql => $value_sql) {
							$var_id = $value_sql[d_azp_crt_request_update_id_azp_crt_request_update];
							$var_docum = $value_sql[d_azp_crt_request_update_t_crt_document];
							$var_route = $value_sql[d_azp_crt_request_update_t_crt_route];
							$var_compl = '../' . $var_route . $var_docum;
							$var_cert[$var_id] = $var_compl;
							#$var_files[$var_compl] = $var_docum;
						}
					}
					#-------------------------------------------------------------------------#
					# Ruta principal de la carpeta
					$var_ec_route = '../systemfiles/filesproject/';
					# Ruta de la carpeta principal
					$var_ec_folder = 'azp_crt_request_data/certificate/';
					# Ruta de la carpeta principal
					$var_ec_subfol = 'compressed/';
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
					# Nombre del archivo a guardar con sus datos respectivos
					$var_zip_name = 'Z_' . DATE . HOUR_NUMBER . '.zip';
					# Ruta de la carpeta para almacenar sus respectivos archivos
					$var_zip_route = $var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year . $var_ec_month . $var_ec_date;
					# Ruta final concatenada para almacenar el archivo en su carpeta
					$var_zip_final = '' . $var_zip_route . $var_zip_name;
					# Ruta de la carpeta para almacenar sus respectivos archivos
					$var_zip_comp = '/systemfiles/filesproject/' . $var_ec_folder . $var_ec_subfol . $var_ec_year . $var_ec_month . $var_ec_date;
					#-------------------------------------------------------------------------#
					$var_compressed = new ZipArchive();
					# Validacion de la ruta y archivo del archivo a comprimir
					if ($var_compressed->open($var_zip_final,ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE) === true) {
						# Agregamos los archivos a comprimir
						foreach ($var_xlsx as $key_file) {
							$var_get_route = $var_ec_route . $var_ec_folder . 'generated/' . $var_ec_year . $var_ec_month . $var_ec_date;
							# Añadir los archivos a comprimir
							$var_get_content = file_get_contents($key_file);
							# Añadir los archivos a comprimir
							$var_compressed->addFromString(str_replace($var_get_route, '', $key_file), $var_get_content);
						}
						# Agregamos los archivos a comprimir
						foreach ($var_cert as $key_file) {
							$var_get_route = $var_ec_route . $var_ec_folder . 'encrypted/' . $var_ec_year . $var_ec_month . $var_ec_date;
							# Añadir los archivos a comprimir
							$var_get_content = file_get_contents($key_file);
							# Añadir los archivos a comprimir
							$var_compressed->addFromString(str_replace($var_ec_route . 'azp_crt_capture/certificate/', '', $key_file), $var_get_content);
						}
					}
					# Cerrar la compresion del archivo
					$var_compressed->close();
					# Codificar la iniformacion del archivo
					$var_base_64 = base64_encode(file_get_contents($var_zip_final));
					#-------------------------------------------------------------------------#
					# Dar permisos a la carpeta y archivo
					chmod($var_zip_final, 0777);
					# Dar permisos a la carpeta y archivo
					chmod($var_ec_route . $var_ec_folder . $var_ec_subfol, 0777);
					# Dar permisos a la carpeta y archivo
					chmod($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year, 0777);
					# Dar permisos a la carpeta y archivo
					chmod($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year . $var_ec_month, 0777);
					# Dar permisos a la carpeta y archivo
					chmod($var_ec_route . $var_ec_folder . $var_ec_subfol . $var_ec_year . $var_ec_month . $var_ec_date, 0777);
					#-------------------------------------------------------------------------#
					$var_files[$var_zip_final] = $var_zip_name;
				} else if ($empty_send == 2) {
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla
					$var_sql_rd_crt = $this->db->select("*", t_azp_crt_request_update, d_azp_crt_request_update_t_crt_document . " != ''");
					#-------------------------------------------------------------------------#
					if (false != $var_sql_rd_crt) {
						foreach ($var_sql_rd_crt as $key_sql => $value_sql) {
							$var_docum = $value_sql[d_azp_crt_request_update_t_crt_document];
							$var_route = $value_sql[d_azp_crt_request_update_t_crt_route];
							$var_compl = '../' . $var_route . $var_docum;
							$var_files[$var_compl] = $var_docum;
						}
					}
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla
					$var_sql_excel = $this->db->select("*", t_azp_crt_generated_files,
						d_azp_crt_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
						d_azp_crt_generated_files_m_deleted . " = '1' AND " .
						d_azp_crt_generated_files_m_level . " = '2' AND " .
						d_azp_crt_generated_files_m_temp . " = '2' AND " .
						d_azp_crt_generated_files_t_expiration . " = 'Utilizable' AND " .
						d_azp_crt_generated_files_t_extension . " = 'xlsx' AND " .
						d_azp_crt_generated_files_t_module . " = 'Solicitud' AND " .
						d_azp_crt_generated_files_t_template . " = 'Certificado' AND " .
						d_azp_crt_generated_files_t_type . " = 'Excel'"
					);
					#-------------------------------------------------------------------------#
					if (false != $var_sql_excel) {
						foreach ($var_sql_excel as $key_sql => $value_sql) {
							$var_docum = $value_sql[d_azp_crt_generated_files_t_name_file];
							$var_route = $value_sql[d_azp_crt_generated_files_t_route];
							$var_compl = '../' . $var_route . $var_docum;
							$var_files[$var_compl] = $var_docum;
						}
					}
				}
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->query("
					SELECT *, tc_azp_configuration_email." . d_azp_configuration_email_id_azp_configuration_email . "
					FROM " . t_azp_user . " tc_azp_user
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
						ON tc_azp_user." . d_azp_user_id_azp_user . "
							= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_email . " tc_azp_configuration_email
						ON tc_azp_user." . d_azp_user_id_azp_user . "
							= tc_azp_configuration_email." . d_azp_configuration_email_v_id_azp_user . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND tc_azp_configuration_email." . d_azp_configuration_email_t_email . " != ''
				");
				#-------------------------------------------------------------------------#
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$empty_ihost = $value[d_azp_configuration_email_t_host];
						$empty_iuser = $value[d_azp_configuration_email_t_email];
						$empty_ipass = $value[d_azp_configuration_email_t_pass];
						$empty_iport = $value[d_azp_configuration_email_t_port];
						$empty_ismtp = $value[d_azp_configuration_email_t_secure];
						$empty_iemail = $value[d_azp_user_t_email];
						$empty_inames = $value[d_azp_data_personal_t_names];
						$empty_isurns = $value[d_azp_data_personal_t_surnames];
						$empty_idata = $empty_inames . ' ' . $empty_isurns;
						# Asignacion de valores a nuevas variables
						$var_u_firm = $value[d_azp_data_personal_t_firm];
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				/*$var_sql = $this->db->query("
					SELECT * FROM " . t_azp_user . " tc_azp_user
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
						ON tc_azp_user." . d_azp_user_id_azp_user . "
							= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_role . " tc_azp_role
						ON tc_azp_user." . d_azp_user_v_id_azp_role . "
							= tc_azp_role." . d_azp_role_id_azp_role . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_user." . d_azp_user_m_deleted . " = '1'
						AND tc_azp_role." . d_azp_role_t_name . " = 'Cert Supervisor'
				");
				#-------------------------------------------------------------------------#
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value) {
						# Asignacion de valores a nuevas variables
						$empty_aemail = $value[d_azp_user_t_email];
						$empty_anames = $value[d_azp_data_personal_t_names];
						$empty_asurns = $value[d_azp_data_personal_t_surnames];
						$empty_adata = $empty_anames . ' ' . $empty_asurns;
					}
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->query("
					SELECT * FROM " . t_azp_user . " tc_azp_user
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
						ON tc_azp_user." . d_azp_user_id_azp_user . "
							= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_role . " tc_azp_role
						ON tc_azp_user." . d_azp_user_v_id_azp_role . "
							= tc_azp_role." . d_azp_role_id_azp_role . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_user." . d_azp_user_m_deleted . " = '1'
						AND tc_azp_role." . d_azp_role_t_name . " = 'Cert Supervisor'
				");
				#-------------------------------------------------------------------------#
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value) {
						# Asignacion de valores a nuevas variables
						$empty_cemail = $value[d_azp_user_t_email];
						$empty_cnames = $value[d_azp_data_personal_t_names];
						$empty_csurns = $value[d_azp_data_personal_t_surnames];
						$empty_cdata = $empty_cnames . ' ' . $empty_csurns;
						$var_copy[$empty_cemail] = $empty_cdata;
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_email_send = $this->db->select("*", t_azp_crt_client, d_azp_crt_client_id_azp_crt_client . " = '" . $empty_email . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_email_send) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_email_send as $key => $value):
						$var_id = $value[d_azp_crt_client_id_azp_crt_client];
						$var_contact = $value[d_azp_crt_client_t_person];
						$var_email = $value[d_azp_crt_client_t_email];
						$var_email_address = array($var_email => $var_contact,);
						$var_log_email_main[$var_id] = $var_contact . '(' . $var_email . ')';
						# Asignacion de valores a nuevas variables
						$empty_aemail = $value[d_azp_crt_client_t_email];
						$empty_anames = $value[d_azp_crt_client_t_person];
						$var_adds[$empty_aemail] = $empty_anames;
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array_us = explode(",", $empty_us_id);
				# Recorrer los datos de la consulta
				foreach ($var_array_us as $key1 => $value1) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_email_send = $this->db->select("*", t_azp_crt_email_copy,
						d_azp_crt_email_copy_id_azp_crt_email_copy . " IN ('" . $value1 . "') AND " .
						d_azp_crt_email_copy_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
					);
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_email_send) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_email_send as $key2 => $value2):
							$var_id = $value2[d_azp_crt_email_copy_id_azp_crt_email_copy];
							$var_names = $value2[d_azp_crt_email_copy_t_names];
							$var_surnames = $value2[d_azp_crt_email_copy_t_surnames];
							$var_email = $value2[d_azp_crt_email_copy_t_email];
							$var_email_copy[$var_email] = $var_names . ' ' . $var_surnames;
							$var_log_email_intern[$var_id] = $var_names . ' ' . $var_surnames . '(' . $var_email . ')';
							# Asignacion de valores a nuevas variables
							$empty_cemail = $value2[d_azp_crt_email_copy_t_email];
							$empty_cnames = $value2[d_azp_crt_email_copy_t_names];
							$empty_csurns = $value2[d_azp_crt_email_copy_t_surnames];
							$empty_cdata = $empty_cnames . ' ' . $empty_csurns;
							$var_copy[$empty_cemail] = $empty_cdata;
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array_tp = explode(",", $empty_tp_id);
				# Recorrer los datos de la consulta
				foreach ($var_array_tp as $key1 => $value1) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_email_send = $this->db->select("*", t_azp_crt_client, d_azp_crt_client_id_azp_crt_client . " IN ('" . $value1 . "')" );
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_email_send) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_email_send as $key2 => $value2):
							$var_id = $value2[d_azp_crt_client_id_azp_crt_client];
							$var_email = $value2[d_azp_crt_client_t_email];
							$var_person = $value2[d_azp_crt_client_t_person];
							$var_email_copy[$var_email] = $var_person;

							$var_log_email_copy[$var_id] = $var_person . '(' . $var_email . ')';
							# Asignacion de valores a nuevas variables
							$empty_cemail = $value2[d_azp_crt_client_t_email];
							$empty_cnames = $value2[d_azp_crt_client_t_person];
							$empty_cdata = $empty_cnames;
							$var_copy[$empty_cemail] = $empty_cdata;
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select("*", t_azp_crt_exchange_portal, d_azp_crt_exchange_portal_m_temp . " = '2'" );
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value) {
						# Asignacion de valores a nuevas variables
						$var_id = $value[d_azp_crt_exchange_portal_id_azp_crt_exchange_portal];
						$var_document = $value[d_azp_crt_exchange_portal_w_document];
						$var_folder = $value[d_azp_crt_exchange_portal_w_folder];
						$var_name = $value[d_azp_crt_exchange_portal_w_name];
						$var_route = $value[d_azp_crt_exchange_portal_w_route];
						$var_compl = $var_route . $var_folder . $var_document;
						$var_files[$var_compl] = $var_document;
					}
				}
				#-------------------------------------------------------------------------#
				# Codigo html para la estructura del correo electronico
				$var_html = '
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
									<img src="' . URL . 'views/backend/images/email.png">
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
									<h3 class="text-dark position-absolute pos-bottom pos-right">
										<div class="m-0 d-flex">
											<div class="flex-1 text-contrast">
												Bogotá, ' . Helper::actual_date() . '
											</div>
										</div>
									</h3>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
									<p class="text-dark">
										<div class="m-0 d-flex">
											<div class="flex-1 text-contrast">
												' . html_entity_decode($empty_summernote_1) . '
											</div>
										</div>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-4 col-lg-4 col-xl-4 mb-3">
									<div class="table-responsive">
										<table border="1">
											<thead>
												<tr>
													<td style="background-color: gray;"><font color="#FFFFFF">Matricula</font></td>
												</tr>
											</thead>
											<tbody>
				';
				#-------------------------------------------------------------------------#
				foreach ($var_sql_up as $key_sql_up) { $var_html .= '<tr><td>' . $key_sql_up[d_azp_crt_request_update_t_plaque_enrollment] . '</td></tr>'; }
				#-------------------------------------------------------------------------#
				$var_html .= '
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
									<p class="text-dark">
										<div class="m-0 d-flex">
											<div class="flex-1 text-contrast">
												' . html_entity_decode($empty_summernote_2) . '
											</div>
										</div>
									</p>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
									<p class="text-dark">
										<div class="m-0 d-flex">
											<div class="flex-1 text-contrast">
												<img src="' . URL . $var_u_firm . '">
											</div>
										</div>
									</p>
								</div>
							</div>
						</div>
					</div>
				';
				#-------------------------------------------------------------------------#
				# Codigo de parametros de email
				$var_init = array($empty_ihost, $empty_iuser, $empty_ipass, $empty_iport, $empty_ismtp,);
				$var_html = Emails::main_template($var_html);
				$var_from = array($empty_iemail => $empty_idata,);
				//$var_adds = array($empty_aemail => $empty_adata,);
				//$var_copy = array($empty_email => $var_data,);
				$var_topic = html_entity_decode($var_affair);
				$var_email = Emails::main_send($var_init, $var_from, $var_adds, $var_copy, $var_html, $var_topic, $var_files,);
				#-------------------------------------------------------------------------#
				# Validacion del correo electronico a enviar
				$var_ms_success = '<b>Exito:</b> Correo electronico enviado.';
				$var_ms_error = '<b>Error:</b> Correo electronico no enviado.';
				#-------------------------------------------------------------------------#
				# Validacion del correo electronico a enviar
				if (true === $var_email) { $var_return = 'success'; $var_ms_name = 'message'; $var_ms_text = $var_ms_success; } else { $var_return = 'error'; $var_ms_name = 'message'; $var_ms_text = $var_ms_error; }
				#-------------------------------------------------------------------------#
				if ($empty_date_validate == '1') {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla
					$var_sql = $this->db->select('*', t_azp_crt_request_update);
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_crt_request_data_t_date_delivery => $empty_date_delivery, d_azp_crt_request_data_v_id_azp_crt_phase => '4',);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->update(t_azp_crt_request_data, $var_array,
								d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_request_update_v_id_azp_crt_request_data] . "' AND " .
								d_azp_crt_request_data_v_id_azp_crt_phase . " < '4'"
							);
						endforeach;
					}
				} else if ($empty_date_validate == '2') {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla
					$var_sql = $this->db->select('*', t_azp_crt_request_update);
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_crt_request_data_v_id_azp_crt_phase => '3',);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->update(t_azp_crt_request_data, $var_array,
								d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_request_update_v_id_azp_crt_request_data] . "' AND " .
								d_azp_crt_request_data_v_id_azp_crt_phase . " < '3'"
							);
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_crt_generated_files_m_temp => '1',);
				# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
				$this->db->update(t_azp_crt_generated_files, $var_array,
					d_azp_crt_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_crt_generated_files_m_temp . " = '2'"
				);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_crt_email_copy_m_temp => '1',);
				# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
				$this->db->update(t_azp_crt_email_copy, $var_array,
					d_azp_crt_email_copy_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_crt_email_copy_m_temp . " = '2'"
				);
				#-------------------------------------------------------------------------#
				$empty_log_email_main = implode(',',$var_log_email_main);
				$empty_log_email_copy = implode(',',$var_log_email_copy);
				$empty_log_email_intern = implode(',',$var_log_email_intern);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_log_email_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_crt_log_email_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_log_email_m_date_created => DATE_HOUR,
					d_azp_crt_log_email_m_date_modified => DATE_HOUR,
					d_azp_crt_log_email_m_deleted => '1',
					d_azp_crt_log_email_m_description => '',
					d_azp_crt_log_email_m_level => '2',
					d_azp_crt_log_email_m_status => '1',
					d_azp_crt_log_email_m_temp => '1',
					d_azp_crt_log_email_t_affair => $empty_affair,
					d_azp_crt_log_email_t_email_main => $empty_log_email_main,
					d_azp_crt_log_email_t_email_copy => $empty_log_email_copy,
					d_azp_crt_log_email_t_email_intern => $empty_log_email_intern,
					d_azp_crt_log_email_t_message => $empty_summernote_1 . $empty_summernote_2,
					d_azp_crt_log_email_t_template => 'Respuesta Imagen Certificado',
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_crt_log_email, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array($var_return => 1, $var_ms_name => $var_ms_text,);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_request_data_import(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_im_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_im_id']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_im_template'])) { throw new Exception('<b>Error:</b> El campo de plantilla esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_template = $this->db->scape($data['field_im_template']);
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
				if (Func::emp($empty_template) || strtolower($empty_template) == strtolower('seleccionar') || $empty_template == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de plantilla es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_template)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de plantilla solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_crt_request_data_import(array $data) {
			$var_error = $this->error_sql_azp_crt_request_data_import($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_im_id']);
				$empty_template = $this->db->scape($data['field_im_template']);
				#-------------------------------------------------------------------------#
				if ($empty_template == 1) {
					# Consulta para identificar los nuevos registros en la tabla
					/*$var_sql = $this->db->select("*", t_azp_crt_request_import,
						d_azp_crt_request_import_m_deleted . " = '3' AND " .
						d_azp_crt_request_import_m_description . " = 'crt_request_data'"
					);
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						$var_file_name = 'template_crt_request_datas';
						# Retornar el mensaje una vez ejecutada la rutina del proceso
						return array('error' => 0, 'message' =>
							'<b>Error:</b> Archivo de solicitudes procesado incorrectamente.' . '</br></br>' .
							'<b>Error:</b> El archivo que se esta cargando no pudo ser ejecutado debido a que debe estar mencionado al menos el siguiente nombre en cualquier parte del archivo: <b>' . $var_file_name . '</b> para efectos de cargar el archivo en la plantilla correspondiente.' . '</br></br>' .
							'<b>Correcto:</b> Solicitud_05_<b>' . $var_file_name . '</b>.csv' . '</br>' .
							'<b>Correcto:</b> Solicitud_<b>' . $var_file_name . '</b>_05.csv' . '</br>' .
							'<b>Correcto:</b> <b>' . $var_file_name . '</b>_Solicitud_05.csv' . '</br>'
						);
					} else {*/
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_crt_request_import, d_azp_crt_request_import_s_date . " = '0'");
						# Validar si la consulta es verdadera
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_date_count = $key_sql['lbl_count']; endforeach; }
						# Validar si la consulta es verdadera
						if ($var_date_count == 0) {
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->select("COUNT(*) AS 'lbl_count_client'", t_azp_crt_request_import, d_azp_crt_request_import_v_id_azp_crt_client . " = '0'");
							# Validar si la consulta es verdadera
							if (true == $var_sql) { foreach ($var_sql as $key_sql): $var_count_client = $key_sql['lbl_count_client']; endforeach; }
							# --------------------------------------------------------------------------------------------------
							if ($var_count_client > 0) {
								# Consulta para identificar los nuevos registros en la tabla
								$var_sql = $this->db->select("MIN(" . d_azp_crt_request_import_id_azp_crt_request_import . ") AS 'lbl_min_id'", t_azp_crt_request_import, d_azp_crt_request_import_v_id_azp_crt_client . " = '0'");
								# Validar si la consulta es verdadera
								if (true == $var_sql) {
									# Recorrer las filas de la consulta generada
									foreach ($var_sql as $key_sql): $var_min_id = $key_sql['lbl_min_id'] - 1; endforeach;
									# Retornar el mensaje una vez ejecutada la rutina del proceso
									return array('danger' => 1, 'message' => '<b>Error:</b> El cliente ingresado en la fila ' . $var_min_id . ' de excel, no coincide con la base.');
								}
							} else if ($var_count_client == 0) {
								# Consulta para identificar los nuevos registros en la tabla
								$var_sql = $this->db->select("COUNT(*) AS 'lbl_count_request_type'", t_azp_crt_request_import, d_azp_crt_request_import_v_id_azp_crt_request_type . " = '0'");
								# Validar si la consulta es verdadera
								if (true == $var_sql) { foreach ($var_sql as $key_sql): $var_count_request_type = $key_sql['lbl_count_request_type']; endforeach; }
								# Validar si la consulta es verdadera
								if ($var_count_request_type > 0) {
									# Consulta para identificar los nuevos registros en la tabla
									$var_sql = $this->db->select("MIN(" . d_azp_crt_request_import_id_azp_crt_request_import . ") AS 'lbl_min_id'", t_azp_crt_request_import, d_azp_crt_request_import_v_id_azp_crt_request_type . " = '0'");
									# Validar si la consulta es verdadera
									if (true == $var_sql) {
										# Recorrer las filas de la consulta generada
										foreach ($var_sql as $key_sql): $var_min_id = $key_sql['lbl_min_id'] - 1; endforeach;
										# Retornar el mensaje una vez ejecutada la rutina del proceso
										return array('danger' => 1, 'message' => '<b>Error:</b> El tipo de certificado ingresado en la fila ' . $var_min_id . ' de excel, no coincide con la base.');
									}
								} else if ($var_count_request_type == 0) {


									#-------------------------------------------------------------------------#
									# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
									$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_m_deleted . " = '2'");
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_total_two = $key_sql['lbl_count']; endforeach; }
									#-------------------------------------------------------------------------#
									# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
									$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_m_deleted . " = '1'");
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_total_one = $key_sql['lbl_count']; endforeach; }
									#-------------------------------------------------------------------------#
									# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
									/*$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_m_deleted . " = '1' AND " . d_azp_crt_request_import_s_capture . " = 'Si' AND " . d_azp_crt_request_import_s_validate . " = 'No'");
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_capture = $key_sql['lbl_count']; endforeach; }*/
									#-------------------------------------------------------------------------#
									# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
									/*$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_m_deleted . " = '1' AND " . d_azp_crt_request_import_s_data . " = 'Si' AND " . d_azp_crt_request_import_s_validate . " = 'No'");
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_data = $key_sql['lbl_count']; endforeach; }*/
									#-------------------------------------------------------------------------#
									# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
									$var_sql = $this->db->query("
										SELECT COUNT(*) AS 'lbl_count'
										FROM " . t_azp_crt_request_import . "
										WHERE " . d_azp_crt_request_import_m_deleted . " = '1'
											AND " . d_azp_crt_request_import_s_validate . " = 'No'
									");
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_validate_no = $key_sql['lbl_count']; endforeach; }
									#-------------------------------------------------------------------------#
									# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
									$var_sql = $this->db->query("
										SELECT COUNT(*) AS 'lbl_count'
										FROM " . t_azp_crt_request_import . "
										WHERE " . d_azp_crt_request_import_m_deleted . " = '1'
											AND " . d_azp_crt_request_import_s_validate . " = 'Si'
									");
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_validate_si = $key_sql['lbl_count']; endforeach; }
									#-------------------------------------------------------------------------#
									# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
									$var_sql = $this->db->query("
										SELECT COUNT(*) AS 'lbl_count'
										FROM " . t_azp_crt_request_import . "
										WHERE " . d_azp_crt_request_import_m_deleted . " = '1'
											AND " . d_azp_crt_request_import_s_plaque . " = 'Si'
									");
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_plaque_si = $key_sql['lbl_count']; endforeach; }
									# Control para validacion de registros
									if ($var_plaque_si > 0) {
										$var_plaque_text = '<b>Placas:</b> Consultar informacion importada. <a onclick="event_plaque();" style="color:#0078FF;">Clic Aqui<a/>.';
									} else { $var_plaque_text = ''; }
									# --------------------------------------------------------------------------------------------------
									if ($var_total_one > 0) {
										# Retornar el mensaje una vez ejecutada la rutina del proceso
										return array('success' => 1, 'message' =>
											'<b>Exito:</b> Haz importado exitosamente el archivo de solicitudes.' . '</br></br>' .
											'<b>Nuevos:</b> ' . $var_validate_no . ' datos procesados en el consolidado.' . '</br>' .
											//'<b>Exito:</b> Capturas: ' . $var_capture . ' datos con captura de ' . $var_total_one . '.' . '</br>' .
											//'<b>Exito:</b> Datos: ' . $var_data . ' datos existentes de ' . $var_total_one . '.' . '</br></br>' .
											'<b>Repetidos:</b> ' . $var_validate_si . ' registros.' . '</br>' . $var_plaque_text
											#'<b>Placas:</b> ' . $var_plaque_si . ' datos no procesados por ser ya existentes.'
										);
									} else {
										$var_error = $var_total_one + 1;
										# Retornar el mensaje una vez ejecutada la rutina del proceso
										return array('error' => 0, 'message' =>
											'<b>Error:</b> Archivo de solicitudes procesado incorrectamente.' . '</br></br>' .
											'<b>Error:</b> Registros Cargados: ' . $var_total_one . '.' . '</br>' .
											'<b>Error:</b> Registro Erroneo: ' . $var_error . '.'
										);
									}
								}
							}
						} else {
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT MIN(" . d_azp_crt_request_import_id_azp_crt_request_import . ") AS 'lbl_min' FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_s_date . " = '0'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_min = $key_sql['lbl_min'] - 1; endforeach; }
							#-------------------------------------------------------------------------#
							# Retornar el mensaje una vez ejecutada la rutina del proceso
							return array('error' => 0, 'message' =>
								'<b>Error:</b> Archivo de solicitudes procesado incorrectamente.' . '</br></br>' .
								'<b>Error:</b> Fechas incorrectas en el archivo de solicitudes.' . '</br>' .
								'<b>Error:</b> Formato Correcto: Año-Mes-Dia (yyyy-mm-dd).' . '</br>' .
								'<b>Error:</b> Campo: Fecha De Solicitud: Registro Erroneo: ' . $var_min . '.'
							);
						}
					//}
				} else if ($empty_template == 2) {
					# Consulta para identificar los nuevos registros en la tabla
					/*$var_sql = $this->db->select("*", t_azp_crt_request_import,
						d_azp_crt_request_import_m_deleted . " = '3' AND " .
						d_azp_crt_request_import_m_description . " = 'crt_request_supplier'"
					);
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						$var_file_name = 'template_crt_request_suppliers';
						# Retornar el mensaje una vez ejecutada la rutina del proceso
						return array('error' => 0, 'message' =>
							'<b>Error:</b> Archivo de proveedores procesado incorrectamente.' . '</br></br>' .
							'<b>Error:</b> El archivo que se esta cargando no pudo ser ejecutado debido a que debe estar mencionado al menos el siguiente nombre en cualquier parte del archivo: <b>' . $var_file_name . '</b> para efectos de cargar el archivo en la plantilla correspondiente.' . '</br></br>' .
							'<b>Correcto:</b> Solicitud_05_<b>' . $var_file_name . '</b>.csv' . '</br>' .
							'<b>Correcto:</b> Solicitud_<b>' . $var_file_name . '</b>_05.csv' . '</br>' .
							'<b>Correcto:</b> <b>' . $var_file_name . '</b>_Solicitud_05.csv' . '</br>'
						);
					} else {*/
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_crt_request_import, d_azp_crt_request_import_s_date . " = '0'");
						# Validar si la consulta es verdadera
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_date_count = $key_sql['lbl_count']; endforeach; }
						# Validar si la consulta es verdadera
						if ($var_date_count == 0) {
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_m_deleted . " = '2'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_total_two = $key_sql['lbl_count']; endforeach; }
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_m_deleted . " = '1'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_total_one = $key_sql['lbl_count']; endforeach; }
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							/*$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_m_deleted . " = '1' AND " . d_azp_crt_request_import_s_capture . " = 'Si' AND " . d_azp_crt_request_import_s_validate . " = 'No'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_capture = $key_sql['lbl_count']; endforeach; }*/
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							/*$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_m_deleted . " = '1' AND " . d_azp_crt_request_import_s_data . " = 'Si' AND " . d_azp_crt_request_import_s_validate . " = 'No'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_data = $key_sql['lbl_count']; endforeach; }*/
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_m_deleted . " = '1' AND " . d_azp_crt_request_import_s_validate . " = 'No'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_validate_no = $key_sql['lbl_count']; endforeach; }
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_m_deleted . " = '1' AND " . d_azp_crt_request_import_s_validate . " = 'Si'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_validate_si = $key_sql['lbl_count']; endforeach; }
							# --------------------------------------------------------------------------------------------------
							if ($var_total_one > 0) {
								# Retornar el mensaje una vez ejecutada la rutina del proceso
								return array('success' => 1, 'message' =>
									'<b>Exito:</b> Haz importado exitosamente el archivo de proveedores.' . '</br></br>' .
									'<b>Exito:</b> Cargados: ' . $var_validate_no . ' datos procesados en el consolidado.' . '</br>' .
									'<b>Error:</b> Repetidos: ' . $var_validate_si . ' datos no procesados en el consolidado.'
								);
							} else {
								$var_error = $var_total_one + 1;
								# Retornar el mensaje una vez ejecutada la rutina del proceso
								return array('error' => 0, 'message' =>
									'<b>Error:</b> Archivo de proveedores procesado incorrectamente.' . '</br></br>' .
									'<b>Error:</b> Registros Cargados: ' . $var_total_one . '.' . '</br>' .
									'<b>Error:</b> Registro Erroneo: ' . $var_error . '.'
								);
							}
						} else {
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT MIN(" . d_azp_crt_request_import_id_azp_crt_request_import . ") AS 'lbl_min' FROM " . t_azp_crt_request_import . " WHERE " . d_azp_crt_request_import_s_date . " = '0'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_min = $key_sql['lbl_min'] - 1; endforeach; }
							#-------------------------------------------------------------------------#
							# Retornar el mensaje una vez ejecutada la rutina del proceso
							return array('error' => 0, 'message' =>
								'<b>Error:</b> Archivo de solicitudes procesado incorrectamente.' . '</br></br>' .
								'<b>Error:</b> Fechas incorrectas en el archivo de solicitudes.' . '</br>' .
								'<b>Error:</b> Formato Correcto: Año-Mes-Dia (yyyy-mm-dd).' . '</br>' .
								'<b>Error:</b> Campo: Fecha De Solicitud: Registro Erroneo: ' . $var_min . '.'
							);
						}
					//}
				} else {
					# Retornar el mensaje una vez ejecutada la rutina del proceso
					return array('error' => 0, 'message' => '<b>Error:</b> No se pudo procesar el archivo de importacion.');
				}
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_crt_request_data_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				//if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_applicant_code'])) { throw new Exception('<b>Error:</b> El campo de codigo solicitante esta prohibido modificar.'); }
				if (!isset($data['field_cr_applicant_entity'])) { throw new Exception('<b>Error:</b> El campo de solicitante entidad esta prohibido modificar.'); }
				if (!isset($data['field_cr_bilable'])) { throw new Exception('<b>Error:</b> El campo de facturable esta prohibido modificar.'); }
				if (!isset($data['field_cr_entity_dispatcher'])) { throw new Exception('<b>Error:</b> El campo de entidad expedidora esta prohibido modificar.'); }
				if (!isset($data['field_cr_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_identification'])) { throw new Exception('<b>Error:</b> El campo de no cedula esta prohibido modificar.'); }
				if (!isset($data['field_cr_nro_oblitation'])) { throw new Exception('<b>Error:</b> El campo de no obligacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_observation'])) { throw new Exception('<b>Error:</b> El campo de observacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_observation_other'])) { throw new Exception('<b>Error:</b> El campo de otra observacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_observation_value'])) { throw new Exception('<b>Error:</b> El campo de almacenar observacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_plaque_enrollment'])) { throw new Exception('<b>Error:</b> El campo de placa matricula esta prohibido modificar.'); }
				if (!isset($data['field_cr_process'])) { throw new Exception('<b>Error:</b> El campo de proceso esta prohibido modificar.'); }
				if (!isset($data['field_cr_provider_class'])) { throw new Exception('<b>Error:</b> El campo de clase proveedor esta prohibido modificar.'); }
				if (!isset($data['field_cr_provider_name'])) { throw new Exception('<b>Error:</b> El campo de nombre proveedor esta prohibido modificar.'); }
				if (!isset($data['field_cr_refundable'])) { throw new Exception('<b>Error:</b> El campo de reembolsable esta prohibido modificar.'); }
				if (!isset($data['field_cr_request_date'])) { throw new Exception('<b>Error:</b> El campo de fecha solicitud cliente esta prohibido modificar.'); }
				if (!isset($data['field_cr_request_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_cr_request_nro'])) { throw new Exception('<b>Error:</b> El campo de no solicitud esta prohibido modificar.'); }
				if (!isset($data['field_cr_send_city'])) { throw new Exception('<b>Error:</b> El campo de envio ciudad esta prohibido modificar.'); }
				if (!isset($data['field_cr_crt_city'])) { throw new Exception('<b>Error:</b> El campo de ciudad esta prohibido modificar.'); }
				if (!isset($data['field_cr_crt_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_cr_crt_observation_type'])) { throw new Exception('<b>Error:</b> El campo de tipo observacion cliente esta prohibido modificar.'); }
				if (!isset($data['field_cr_crt_request_type'])) { throw new Exception('<b>Error:</b> El campo de tipo certificado cliente esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				//$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_applicant_code = $this->db->scape($data['field_cr_applicant_code']);
				$empty_applicant_entity = $this->db->scape($data['field_cr_applicant_entity']);
				$empty_bilable = $this->db->scape($data['field_cr_bilable']);
				$empty_entity_dispatcher = $this->db->scape($data['field_cr_entity_dispatcher']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_nro_oblitation = $this->db->scape($data['field_cr_nro_oblitation']);
				$empty_observation = $this->db->scape($data['field_cr_observation']);
				$empty_observation_other = $this->db->scape($data['field_cr_observation_other']);
				$empty_observation_value = $this->db->scape($data['field_cr_observation_value']);
				$empty_plaque_enrollment = $this->db->scape($data['field_cr_plaque_enrollment']);
				$empty_process = $this->db->scape($data['field_cr_process']);
				$empty_provider_class = $this->db->scape($data['field_cr_provider_class']);
				$empty_provider_name = $this->db->scape($data['field_cr_provider_name']);
				$empty_refundable = $this->db->scape($data['field_cr_refundable']);
				$empty_request_date = $this->db->scape($data['field_cr_request_date']);
				$empty_request_id = $this->db->scape($data['field_cr_request_id']);
				$empty_request_nro = $this->db->scape($data['field_cr_request_nro']);
				$empty_send_city = $this->db->scape($data['field_cr_send_city']);
				$empty_crt_city = $this->db->scape($data['field_cr_crt_city']);
				$empty_crt_client = $this->db->scape($data['field_cr_crt_client']);
				$empty_crt_observation_type = $this->db->scape($data['field_cr_crt_observation_type']);
				$empty_crt_request_type = $this->db->scape($data['field_cr_crt_request_type']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no cedula es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no cedula solo permite numeros.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no cedula permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_identification, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no cedula no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no cedula no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_full_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_full_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_plaque_enrollment)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de placa matricula es obligatorio.');
				}
				#---------------------------------------------#
				if (strlen($empty_plaque_enrollment) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de placa matricula permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_plaque_enrollment, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de placa matricula no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_plaque_enrollment)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de placa matricula no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_request_nro)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no solicitud es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_request_nro)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no solicitud solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_request_nro) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no solicitud permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_request_nro, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no solicitud no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_request_nro)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no solicitud no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_crt_city) || strtolower($empty_crt_city) == strtolower('seleccionar') || $empty_crt_city == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_crt_city)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_crt_client) || strtolower($empty_crt_client) == strtolower('seleccionar') || $empty_crt_client == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_crt_client)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_crt_observation_type) || strtolower($empty_crt_observation_type) == strtolower('seleccionar') || $empty_crt_observation_type == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo observacion es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_crt_observation_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo observacion solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_crt_observation_type == 2) {
					#---------------------------------------------#
					if (Func::emp($empty_observation_other)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de otra observacion es obligatorio.');
					}
					#---------------------------------------------#
					if (strlen($empty_observation_other) > 255) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El campo de otra observacion permite maximo hasta 255 caracteres.');
					}
					#---------------------------------------------#
					if (strpos($empty_observation_other, '  ')) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El campo de otra observacion no permite tener más de un espacio en blanco seguido.');
					}
					#---------------------------------------------#
					if (preg_match('/^\s|\s$/', $empty_observation_other)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El campo de otra observacion no permite tener espacios en blanco al principio o al final.');
					}
					#-------------------------------------------------------------------------#
					if (Func::emp($empty_observation_value) || strtolower($empty_observation_value) == strtolower('seleccionar') || $empty_observation_value == 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El campo de almacenar observacion es obligatorio.');
					}
					#---------------------------------------------#
					if (!is_numeric($empty_observation_value)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El campo de almacenar observacion solo permite numeros.');
					}
					#---------------------------------------------#
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_crt_request_type) || strtolower($empty_crt_request_type) == strtolower('seleccionar') || $empty_crt_request_type == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo certificado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_crt_request_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo certificado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_crt_city = $this->db->select('*', t_azp_crt_city, d_azp_crt_city_id_azp_crt_city . " = '" . $empty_crt_city . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_crt_city) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_crt_city) == '') { $sql_crt_city[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_crt_city[0][0]) != strtolower($empty_crt_city)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La ciudad seleccionada no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_crt_client = $this->db->select('*', t_azp_crt_client, d_azp_crt_client_id_azp_crt_client . " = '" . $empty_crt_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_crt_client) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_crt_client) == '') { $sql_crt_client[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_crt_client[0][0]) != strtolower($empty_crt_client)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El cliente seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_crt_observation_type = $this->db->select('*', t_azp_crt_observation_type, d_azp_crt_observation_type_id_azp_crt_observation_type . " = '" . $empty_crt_observation_type . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_crt_observation_type) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_crt_observation_type) == '') { $sql_crt_observation_type[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_crt_observation_type[0][0]) != strtolower($empty_crt_observation_type)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo observacion seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_crt_request_type = $this->db->select('*', t_azp_crt_request_type, d_azp_crt_request_type_id_azp_crt_request_type . " = '" . $empty_crt_request_type . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_crt_request_type) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_crt_request_type) == '') { $sql_crt_request_type[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_crt_request_type[0][0]) != strtolower($empty_crt_request_type)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo certificado seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				if ($empty_observation_value == 1) {
					# Verificar si el valor ingresado se encuentra repetido en los demas registros
					$sql_observation_other = $this->db->select(d_azp_crt_observation_type_t_name, t_azp_crt_observation_type, d_azp_crt_observation_type_t_name . " = '" . $empty_observation_other . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $sql_observation_other) {
						# Verificiar si el valor recibido de la sql es diferente del digitado
						if (strtolower($sql_observation_other[0][0]) == strtolower($empty_observation_other)) {
							# Informar un mensaje al usuario por medio de una excepcion
							throw new Exception('<b>Error:</b> La observacion digitada ya existe registrado.');
						}
					}
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_crt_request_data_insert(array $data) : array {
			$var_error = $this->error_sql_azp_crt_request_data_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				//$data_description = $this->db->scape($data['field_cr_description']);
				$empty_applicant_code = $this->db->scape($data['field_cr_applicant_code']);
				$empty_applicant_entity = $this->db->scape($data['field_cr_applicant_entity']);
				$empty_bilable = $this->db->scape($data['field_cr_bilable']);
				$empty_entity_dispatcher = $this->db->scape($data['field_cr_entity_dispatcher']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_nro_oblitation = $this->db->scape($data['field_cr_nro_oblitation']);
				$empty_observation = $this->db->scape($data['field_cr_observation']);
				$empty_observation_other = $this->db->scape($data['field_cr_observation_other']);
				$empty_observation_value = $this->db->scape($data['field_cr_observation_value']);
				$empty_plaque_enrollment = $this->db->scape($data['field_cr_plaque_enrollment']);
				$empty_process = $this->db->scape($data['field_cr_process']);
				$empty_provider_class = $this->db->scape($data['field_cr_provider_class']);
				$empty_provider_name = $this->db->scape($data['field_cr_provider_name']);
				$empty_refundable = $this->db->scape($data['field_cr_refundable']);
				$empty_request_date = $this->db->scape($data['field_cr_request_date']);
				$empty_request_id = $this->db->scape($data['field_cr_request_id']);
				$empty_request_nro = $this->db->scape($data['field_cr_request_nro']);
				$empty_send_city = $this->db->scape($data['field_cr_send_city']);
				$empty_crt_city = $this->db->scape($data['field_cr_crt_city']);
				$empty_crt_client = $this->db->scape($data['field_cr_crt_client']);
				$empty_crt_observation_type = $this->db->scape($data['field_cr_crt_observation_type']);
				$empty_crt_request_type = $this->db->scape($data['field_cr_crt_request_type']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_request_data_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_crt_request_data_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_request_data_m_date_created => DATE_HOUR,
					d_azp_crt_request_data_m_date_modified => DATE_HOUR,
					d_azp_crt_request_data_m_deleted => '1',
					d_azp_crt_request_data_m_description => '',
					d_azp_crt_request_data_m_level => '2',
					d_azp_crt_request_data_m_status => '1',
					d_azp_crt_request_data_m_temp => '2',
					d_azp_crt_request_data_s_date => '',
					d_azp_crt_request_data_s_plaque => '',
					d_azp_crt_request_data_s_validate => '',
					d_azp_crt_request_data_t_applicant_code => $empty_applicant_code,
					d_azp_crt_request_data_t_applicant_entity => strtoupper($empty_applicant_entity),
					d_azp_crt_request_data_t_bilable => strtoupper($empty_bilable),
					d_azp_crt_request_data_t_certificate_type => '',
					d_azp_crt_request_data_t_city => '',
					d_azp_crt_request_data_t_client_code => '',
					d_azp_crt_request_data_t_client_name => '',
					d_azp_crt_request_data_t_crt_date_image => '',
					d_azp_crt_request_data_t_crt_date_load => '',
					d_azp_crt_request_data_t_crt_document => '',
					d_azp_crt_request_data_t_crt_error => '',
					d_azp_crt_request_data_t_crt_mark_image => '',
					d_azp_crt_request_data_t_crt_name => '',
					d_azp_crt_request_data_t_crt_route => '',
					d_azp_crt_request_data_t_crt_size => '',
					d_azp_crt_request_data_t_crt_tmp_name => '',
					d_azp_crt_request_data_t_crt_type => '',
					d_azp_crt_request_data_t_date_delivery => '',
					d_azp_crt_request_data_t_entity_dispatcher => strtoupper($empty_entity_dispatcher),
					d_azp_crt_request_data_t_full_name => strtoupper($empty_full_name),
					d_azp_crt_request_data_t_identification => $empty_identification,
					d_azp_crt_request_data_t_nro_oblitation => $empty_nro_oblitation,
					d_azp_crt_request_data_t_observation => $empty_observation,
					d_azp_crt_request_data_t_plaque_enrollment => strtoupper($empty_plaque_enrollment),
					d_azp_crt_request_data_t_process => strtoupper($empty_process),
					d_azp_crt_request_data_t_provider_class => strtoupper($empty_provider_class),
					d_azp_crt_request_data_t_provider_name => strtoupper($empty_provider_name),
					d_azp_crt_request_data_t_rcb_amount => '',
					d_azp_crt_request_data_t_rcb_date_load => '',
					d_azp_crt_request_data_t_rcb_document => '',
					d_azp_crt_request_data_t_rcb_error => '',
					d_azp_crt_request_data_t_rcb_name => '',
					d_azp_crt_request_data_t_rcb_nro_receipt => '',
					d_azp_crt_request_data_t_rcb_receipt => '',
					d_azp_crt_request_data_t_rcb_route => '',
					d_azp_crt_request_data_t_rcb_service => '',
					d_azp_crt_request_data_t_rcb_size => '',
					d_azp_crt_request_data_t_rcb_tmp_name => '',
					d_azp_crt_request_data_t_rcb_type => '',
					d_azp_crt_request_data_t_refundable => strtoupper($empty_refundable),
					d_azp_crt_request_data_t_request_date => $empty_request_date,
					d_azp_crt_request_data_t_request_id => $empty_request_id,
					d_azp_crt_request_data_t_request_nro => strtoupper($empty_request_nro),
					d_azp_crt_request_data_t_supplier_date_delivery => '',
					d_azp_crt_request_data_t_supplier_date_request => '',
					d_azp_crt_request_data_t_send_city => strtoupper($empty_send_city),
					d_azp_crt_request_data_t_fct_service => '0',
					d_azp_crt_request_data_v_id_azp_crt_city => $empty_crt_city,
					d_azp_crt_request_data_v_id_azp_crt_client => $empty_crt_client,
					d_azp_crt_request_data_v_id_azp_crt_expiration => '1',
					d_azp_crt_request_data_v_id_azp_crt_observation_type => $empty_crt_observation_type,
					d_azp_crt_request_data_v_id_azp_crt_phase => '1',
					d_azp_crt_request_data_v_id_azp_crt_request_type => $empty_crt_request_type,			
					
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_crt_request_data, $var_array);
				#-------------------------------------------------------------------------#
				if ($empty_crt_observation_type == 2) {
					if ($empty_observation_value == 1) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_crt_observation_type_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_crt_observation_type_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_crt_observation_type_m_date_created => DATE_HOUR,
							d_azp_crt_observation_type_m_date_modified => DATE_HOUR,
							d_azp_crt_observation_type_m_deleted => '1',
							d_azp_crt_observation_type_m_description => '',
							d_azp_crt_observation_type_m_level => '2',
							d_azp_crt_observation_type_m_status => '1',
							d_azp_crt_observation_type_m_temp => '1',
							d_azp_crt_observation_type_t_name => $empty_observation_other,
						);
						# Query Sql Insert: Registrar valores en la tabla segun sus campos
						$this->db->insert(t_azp_crt_observation_type, $var_array);
						#-------------------------------------------------------------------------#
						$var_sql = $this->db->select('*', t_azp_crt_observation_type,
							d_azp_crt_observation_type_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
							d_azp_crt_observation_type_m_temp . " = '2'"
						);
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_crt_request_data_v_id_azp_crt_observation_type => $key_sql[d_azp_crt_observation_type_id_azp_crt_observation_type],);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_crt_request_data, $var_array,
									d_azp_crt_request_data_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
									d_azp_crt_request_data_m_level . " = '2'"
								);
							endforeach;
						}
						#-------------------------------------------------------------------------#
						$var_sql = $this->db->select('*', t_azp_crt_observation_type,
							d_azp_crt_observation_type_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
							d_azp_crt_observation_type_m_temp . " = '2'"
						);
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_crt_observation_type_m_temp => '1',);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_crt_observation_type, $var_array,
									d_azp_crt_observation_type_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
									d_azp_crt_observation_type_m_temp . " = '2'"
								);
							endforeach;
						}
					}
				}
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select('*', t_azp_crt_request_data,
					d_azp_crt_request_data_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_crt_request_data_m_temp . " = '2'"
				);
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_crt_request_data_m_temp => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_crt_request_data, $var_array,
							d_azp_crt_request_data_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
							d_azp_crt_request_data_m_temp . " = '2'"
						);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_request_data_receipt(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_rb_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_rb_id']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_rb_amount'])) { throw new Exception('<b>Error:</b> El campo de valor esta prohibido modificar.'); }
				if (!isset($data['field_rb_date_load'])) { throw new Exception('<b>Error:</b> El campo de fecha cargue esta prohibido modificar.'); }
				if (!isset($data['field_rb_nro_receipt'])) { throw new Exception('<b>Error:</b> El campo de numero recibo esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$subject = $data['field_rb_amount']; $search = array('$', ' ', ','); $replace = array('', '', '');
				$empty_amount = $this->db->scape(str_replace($search, $replace, $subject));
				$empty_date_load = $this->db->scape($data['field_rb_date_load']);
				$empty_nro_receipt = $this->db->scape($data['field_rb_nro_receipt']);
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
				if (Func::emp($empty_amount)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_amount)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor solo permite numeros.');
				}
				#---------------------------------------------#
				if (strpos($empty_amount, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor no permite ningun espacio en blanco.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_date_load) || $empty_date_load == 'aaaa-mm-dd') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha cargue es obligatorio.');
				}
				#---------------------------------------------#
				if (strlen($empty_date_load) < 10 || strlen($empty_date_load) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha cargue está mal diligenciado, debe ser aaaa-mm-dd.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_nro_receipt)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no recibo es obligatorio.');
				}
				#---------------------------------------------#
				if (strlen($empty_nro_receipt) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no recibo permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_nro_receipt, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no recibo no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_nro_receipt)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no recibo no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
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
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_request_data_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_crt_request_data_receipt(array $data) : array {
			$var_error = $this->error_sql_azp_crt_request_data_receipt($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_rb_id']);
				#-------------------------------------------------------------------------#
				$subject = $data['field_rb_amount']; $search = array('$', ' ', ','); $replace = array('', '', '');
				$empty_amount = $this->db->scape(str_replace($search, $replace, $subject));
				$empty_date_load = $this->db->scape($data['field_rb_date_load']);
				$empty_nro_receipt = $this->db->scape($data['field_rb_nro_receipt']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_request_data_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_request_data_m_date_modified => DATE_HOUR,
					d_azp_crt_request_data_t_rcb_amount => $empty_amount,
					d_azp_crt_request_data_t_rcb_date_load => $empty_date_load,
					d_azp_crt_request_data_t_rcb_nro_receipt => $empty_nro_receipt,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_request_data, $var_array, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo almacenado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_request_data_remove(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_remove'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
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
					throw new Exception('<b>Error:</b> El campo de id es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está removiendo no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_deleted . " = '1'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está removiendo ya se encuentra removido.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_request_data_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_crt_request_data_remove(array $data) : array {
			$var_error = $this->error_sql_azp_crt_request_data_remove($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_remove']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_crt_request_data_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_request_data, $var_array, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_request_data_restore(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_restore'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
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
					throw new Exception('<b>Error:</b> El campo de id es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está restaurando no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_deleted . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está restaurando ya se encuentra restaurado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_request_data_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_crt_request_data_restore(array $data) : array {
			$var_error = $this->error_sql_azp_crt_request_data_restore($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_restore']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_crt_request_data_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_request_data, $var_array, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_request_data_update(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_up_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_up_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				$empty_description = $this->db->scape($data['field_up_description']);
				$empty_state = $this->db->scape($data['field_up_state']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_applicant_code'])) { throw new Exception('<b>Error:</b> El campo de codigo solicitante esta prohibido modificar.'); }
				if (!isset($data['field_up_applicant_entity'])) { throw new Exception('<b>Error:</b> El campo de solicitante entidad esta prohibido modificar.'); }
				if (!isset($data['field_up_bilable'])) { throw new Exception('<b>Error:</b> El campo de facturable esta prohibido modificar.'); }
				if (!isset($data['field_up_entity_dispatcher'])) { throw new Exception('<b>Error:</b> El campo de entidad expedidora esta prohibido modificar.'); }
				if (!isset($data['field_up_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_identification'])) { throw new Exception('<b>Error:</b> El campo de no cedula esta prohibido modificar.'); }
				if (!isset($data['field_up_nro_oblitation'])) { throw new Exception('<b>Error:</b> El campo de no obligacion esta prohibido modificar.'); }
				if (!isset($data['field_up_observation'])) { throw new Exception('<b>Error:</b> El campo de observacion esta prohibido modificar.'); }
				if (!isset($data['field_up_observation_other'])) { throw new Exception('<b>Error:</b> El campo de otra observacion esta prohibido modificar.'); }
				if (!isset($data['field_up_observation_value'])) { throw new Exception('<b>Error:</b> El campo de almacenar observacion esta prohibido modificar.'); }
				if (!isset($data['field_up_plaque_enrollment'])) { throw new Exception('<b>Error:</b> El campo de placa matricula esta prohibido modificar.'); }
				if (!isset($data['field_up_process'])) { throw new Exception('<b>Error:</b> El campo de proceso esta prohibido modificar.'); }
				if (!isset($data['field_up_provider_class'])) { throw new Exception('<b>Error:</b> El campo de clase proveedor esta prohibido modificar.'); }
				if (!isset($data['field_up_provider_name'])) { throw new Exception('<b>Error:</b> El campo de nombre proveedor esta prohibido modificar.'); }
				if (!isset($data['field_up_refundable'])) { throw new Exception('<b>Error:</b> El campo de reembolsable esta prohibido modificar.'); }
				if (!isset($data['field_up_request_date'])) { throw new Exception('<b>Error:</b> El campo de fecha solicitud cliente esta prohibido modificar.'); }
				if (!isset($data['field_up_request_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_up_request_nro'])) { throw new Exception('<b>Error:</b> El campo de no solicitud esta prohibido modificar.'); }
				if (!isset($data['field_up_send_city'])) { throw new Exception('<b>Error:</b> El campo de envio ciudad esta prohibido modificar.'); }
				if (!isset($data['field_up_crt_city'])) { throw new Exception('<b>Error:</b> El campo de ciudad esta prohibido modificar.'); }
				if (!isset($data['field_up_crt_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_up_crt_observation_type'])) { throw new Exception('<b>Error:</b> El campo de tipo observacion esta prohibido modificar.'); }
				if (!isset($data['field_up_crt_request_type'])) { throw new Exception('<b>Error:</b> El campo de tipo certificado cliente esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_applicant_code = $this->db->scape($data['field_up_applicant_code']);
				$empty_applicant_entity = $this->db->scape($data['field_up_applicant_entity']);
				$empty_bilable = $this->db->scape($data['field_up_bilable']);
				$empty_entity_dispatcher = $this->db->scape($data['field_up_entity_dispatcher']);
				$empty_full_name = $this->db->scape($data['field_up_full_name']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_nro_oblitation = $this->db->scape($data['field_up_nro_oblitation']);
				$empty_observation = $this->db->scape($data['field_up_observation']);
				$empty_observation_other = $this->db->scape($data['field_up_observation_other']);
				$empty_observation_value = $this->db->scape($data['field_up_observation_value']);
				$empty_plaque_enrollment = $this->db->scape($data['field_up_plaque_enrollment']);
				$empty_process = $this->db->scape($data['field_up_process']);
				$empty_provider_class = $this->db->scape($data['field_up_provider_class']);
				$empty_provider_name = $this->db->scape($data['field_up_provider_name']);
				$empty_refundable = $this->db->scape($data['field_up_refundable']);
				$empty_request_date = $this->db->scape($data['field_up_request_date']);
				$empty_request_id = $this->db->scape($data['field_up_request_id']);
				$empty_request_nro = $this->db->scape($data['field_up_request_nro']);
				$empty_send_city = $this->db->scape($data['field_up_send_city']);
				$empty_crt_city = $this->db->scape($data['field_up_crt_city']);
				$empty_crt_client = $this->db->scape($data['field_up_crt_client']);
				$empty_crt_observation_type = $this->db->scape($data['field_up_crt_observation_type']);
				$empty_crt_request_type = $this->db->scape($data['field_up_crt_request_type']);
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
				/*if (Func::emp($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no cedula es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no cedula solo permite numeros.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no cedula permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_identification, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no cedula no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no cedula no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_full_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_full_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_plaque_enrollment)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de placa matricula es obligatorio.');
				}
				#---------------------------------------------#
				if (strlen($empty_plaque_enrollment) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de placa matricula permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_plaque_enrollment, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de placa matricula no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_plaque_enrollment)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de placa matricula no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_request_nro)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no solicitud es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_request_nro)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no solicitud solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_request_nro) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no solicitud permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_request_nro, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no solicitud no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_request_nro)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no solicitud no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_crt_city) || strtolower($empty_crt_city) == strtolower('seleccionar') || $empty_crt_city == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_crt_city)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_crt_client) || strtolower($empty_crt_client) == strtolower('seleccionar') || $empty_crt_client == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_crt_client)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_crt_observation_type) || strtolower($empty_crt_observation_type) == strtolower('seleccionar') || $empty_crt_observation_type == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo observacion es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_crt_observation_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo observacion solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				/*if ($empty_crt_observation_type == 2) {
					#---------------------------------------------#
					if (Func::emp($empty_observation_other)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de otra observacion es obligatorio.');
					}
					#---------------------------------------------#
					if (strlen($empty_observation_other) > 255) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El campo de otra observacion permite maximo hasta 255 caracteres.');
					}
					#---------------------------------------------#
					if (strpos($empty_observation_other, '  ')) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El campo de otra observacion no permite tener más de un espacio en blanco seguido.');
					}
					#---------------------------------------------#
					if (preg_match('/^\s|\s$/', $empty_observation_other)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El campo de otra observacion no permite tener espacios en blanco al principio o al final.');
					}
					#-------------------------------------------------------------------------#
					if (Func::emp($empty_observation_value) || strtolower($empty_observation_value) == strtolower('seleccionar') || $empty_observation_value == 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El campo de almacenar observacion es obligatorio.');
					}
					#---------------------------------------------#
					if (!is_numeric($empty_observation_value)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El campo de almacenar observacion solo permite numeros.');
					}
					#---------------------------------------------#
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_crt_request_type) || strtolower($empty_crt_request_type) == strtolower('seleccionar') || $empty_crt_request_type == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo solicitud es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_crt_request_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo solicitud solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
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
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_request_data_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "' AND " . d_azp_crt_request_data_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_crt_request_type = $this->db->select('*', t_azp_crt_request_type, d_azp_crt_request_type_id_azp_crt_request_type . " = '" . $empty_crt_request_type . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_crt_request_type) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_crt_request_type) == '') { $sql_crt_request_type[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_crt_request_type[0][0]) != strtolower($empty_crt_request_type)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo solicitud seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				if ($empty_observation_value == 1) {
					# Verificar si el valor ingresado se encuentra repetido en los demas registros
					$sql_observation_other = $this->db->select(d_azp_crt_observation_type_t_name, t_azp_crt_observation_type, d_azp_crt_observation_type_t_name . " = '" . $empty_observation_other . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $sql_observation_other) {
						# Verificiar si el valor recibido de la sql es diferente del digitado
						if (strtolower($sql_observation_other[0][0]) == strtolower($empty_observation_other)) {
							# Informar un mensaje al usuario por medio de una excepcion
							throw new Exception('<b>Error:</b> La observacion digitada ya existe registrado.');
						}
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
		final public function sql_azp_crt_request_data_update(array $data) : array {
			$var_error = $this->error_sql_azp_crt_request_data_update($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				$empty_description = $this->db->scape($data['field_up_description']);
				$empty_state = $this->db->scape($data['field_up_state']);
				#-------------------------------------------------------------------------#
				$empty_applicant_code = $this->db->scape($data['field_up_applicant_code']);
				$empty_applicant_entity = $this->db->scape($data['field_up_applicant_entity']);
				$empty_bilable = $this->db->scape($data['field_up_bilable']);
				$empty_entity_dispatcher = $this->db->scape($data['field_up_entity_dispatcher']);
				$empty_full_name = $this->db->scape($data['field_up_full_name']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_nro_oblitation = $this->db->scape($data['field_up_nro_oblitation']);
				$empty_observation = $this->db->scape($data['field_up_observation']);
				$empty_observation_other = $this->db->scape($data['field_up_observation_other']);
				$empty_observation_value = $this->db->scape($data['field_up_observation_value']);
				$empty_plaque_enrollment = $this->db->scape($data['field_up_plaque_enrollment']);
				$empty_process = $this->db->scape($data['field_up_process']);
				$empty_provider_class = $this->db->scape($data['field_up_provider_class']);
				$empty_provider_name = $this->db->scape($data['field_up_provider_name']);
				$empty_refundable = $this->db->scape($data['field_up_refundable']);
				$empty_request_date = $this->db->scape($data['field_up_request_date']);
				$empty_request_id = $this->db->scape($data['field_up_request_id']);
				$empty_request_nro = $this->db->scape($data['field_up_request_nro']);
				$empty_send_city = $this->db->scape($data['field_up_send_city']);
				$empty_crt_city = $this->db->scape($data['field_up_crt_city']);
				$empty_crt_client = $this->db->scape($data['field_up_crt_client']);
				$empty_crt_observation_type = $this->db->scape($data['field_up_crt_observation_type']);
				$empty_crt_request_type = $this->db->scape($data['field_up_crt_request_type']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_crt_request_data_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_crt_request_data_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_crt_request_data_m_date_created => DATE_HOUR,
							d_azs_crt_request_data_m_date_modified => DATE_HOUR,
							d_azs_crt_request_data_m_deleted => $key_sql_select[d_azp_crt_request_data_m_deleted],
							d_azs_crt_request_data_m_description => $key_sql_select[d_azp_crt_request_data_m_description],
							d_azs_crt_request_data_m_level => $key_sql_select[d_azp_crt_request_data_m_level],
							d_azs_crt_request_data_m_status => $key_sql_select[d_azp_crt_request_data_m_status],
							d_azs_crt_request_data_m_temp => $key_sql_select[d_azp_crt_request_data_m_temp],
							d_azs_crt_request_data_v_id_azp_crt_request_data => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_crt_request_data, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_request_data_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_request_data_m_date_modified => DATE_HOUR,
					d_azp_crt_request_data_m_description => $empty_description,
					d_azp_crt_request_data_m_status => $empty_state,
					d_azp_crt_request_data_t_applicant_code => strtoupper($empty_applicant_code),
					d_azp_crt_request_data_t_applicant_entity => strtoupper($empty_applicant_entity),
					d_azp_crt_request_data_t_bilable => strtoupper($empty_bilable),
					#d_azp_crt_request_data_t_certificate_type => '',
					#d_azp_crt_request_data_t_city => '',
					#d_azp_crt_request_data_t_client_code => '',
					#d_azp_crt_request_data_t_client_name => '',
					d_azp_crt_request_data_t_entity_dispatcher => strtoupper($empty_entity_dispatcher),
					d_azp_crt_request_data_t_full_name => strtoupper($empty_full_name),
					d_azp_crt_request_data_t_identification => strtoupper($empty_identification),
					d_azp_crt_request_data_t_nro_oblitation => strtoupper($empty_nro_oblitation),
					d_azp_crt_request_data_t_observation => strtoupper($empty_observation),
					d_azp_crt_request_data_t_plaque_enrollment => strtoupper($empty_plaque_enrollment),
					d_azp_crt_request_data_t_process => strtoupper($empty_process),
					d_azp_crt_request_data_t_provider_class => strtoupper($empty_provider_class),
					d_azp_crt_request_data_t_provider_name => strtoupper($empty_provider_name),
					d_azp_crt_request_data_t_refundable => strtoupper($empty_refundable),
					d_azp_crt_request_data_t_request_date => strtoupper($empty_request_date),
					d_azp_crt_request_data_t_request_id => strtoupper($empty_request_id),
					d_azp_crt_request_data_t_request_nro => strtoupper($empty_request_nro),
					d_azp_crt_request_data_t_send_city => strtoupper($empty_send_city),
					d_azp_crt_request_data_v_id_azp_crt_city => $empty_crt_city,
					d_azp_crt_request_data_v_id_azp_crt_client => $empty_crt_client,
					d_azp_crt_request_data_v_id_azp_crt_observation_type => $empty_crt_observation_type,
					d_azp_crt_request_data_v_id_azp_crt_request_type => $empty_crt_request_type,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_request_data, $var_array, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				if ($empty_crt_observation_type == 2) {
					if ($empty_observation_value == 1) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_crt_observation_type_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_crt_observation_type_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_crt_observation_type_m_date_created => DATE_HOUR,
							d_azp_crt_observation_type_m_date_modified => DATE_HOUR,
							d_azp_crt_observation_type_m_deleted => '1',
							d_azp_crt_observation_type_m_description => '',
							d_azp_crt_observation_type_m_level => '2',
							d_azp_crt_observation_type_m_status => '1',
							d_azp_crt_observation_type_m_temp => '2',
							d_azp_crt_observation_type_t_name => $empty_observation_other,
						);
						# Query Sql Insert: Registrar valores en la tabla segun sus campos
						$this->db->insert(t_azp_crt_observation_type, $var_array);
						#-------------------------------------------------------------------------#
						$var_sql = $this->db->select('*', t_azp_crt_observation_type,
							d_azp_crt_observation_type_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
							d_azp_crt_observation_type_m_temp . " = '2'"
						);
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_crt_request_data_v_id_azp_crt_observation_type => $key_sql[d_azp_crt_observation_type_id_azp_crt_observation_type],);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_crt_request_data, $var_array, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
							endforeach;
						}
						#-------------------------------------------------------------------------#
						$var_sql = $this->db->select('*', t_azp_crt_observation_type,
							d_azp_crt_observation_type_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
							d_azp_crt_observation_type_m_temp . " = '2'"
						);
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_crt_observation_type_m_temp => '1',);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_crt_observation_type, $var_array,
									d_azp_crt_observation_type_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
									d_azp_crt_observation_type_m_temp . " = '2'"
								);
							endforeach;
						}
					}
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_crt_request_data_observation_internal(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_oi_id'])) { throw new Exception('<b>Error:</b> El campo de cedula esta prohibido modificar.'); }
				if (!isset($data['field_oi_observation'])) { throw new Exception('<b>Error:</b> El campo de observacion esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_oi_id']);
				$empty_observation = $this->db->scape($data['field_oi_observation']);
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
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está consultando no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_observation)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de observacion es obligatorio.');
				}
				#---------------------------------------------#
				if (strpos($empty_observation, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_observation)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de observacion no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_crt_request_data_observation_internal(array $data) : array {
			$var_error = $this->error_sql_azp_crt_request_data_observation_internal($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_oi_id']);
				$empty_observation = $this->db->scape($data['field_oi_observation']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$empty_identification = $key_sql[d_azp_crt_request_data_t_identification];
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_observation_internal_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_crt_observation_internal_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_observation_internal_m_date_created => DATE_HOUR,
					d_azp_crt_observation_internal_m_date_modified => DATE_HOUR,
					d_azp_crt_observation_internal_m_deleted => '1',
					d_azp_crt_observation_internal_m_description => '',
					d_azp_crt_observation_internal_m_level => '2',
					d_azp_crt_observation_internal_m_status => '1',
					d_azp_crt_observation_internal_m_temp => '2',
					d_azp_crt_observation_internal_t_identification => $empty_identification,
					d_azp_crt_observation_internal_t_observation => $empty_observation,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_crt_observation_internal, $var_array);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->query("
					SELECT MAX(" . d_azp_crt_observation_internal_id_azp_crt_observation_internal . ") AS 'lbl_max_id'
					FROM " . t_azp_crt_observation_internal . "
					WHERE " . d_azp_crt_observation_internal_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND " . d_azp_crt_observation_internal_m_temp . " = '2'
				");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_sql_oi = $this->db->select('*', t_azp_crt_observation_internal, d_azp_crt_observation_internal_id_azp_crt_observation_internal . " = '" . $key_sql['lbl_max_id'] . "'");
						# Verificiar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql_oi) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_sql_oi as $key_sql_oi):
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_crt_request_data_t_observation => $key_sql_oi[d_azp_crt_observation_internal_t_observation],);
								# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
								$this->db->update(t_azp_crt_request_data, $var_array,
									d_azp_crt_request_data_t_identification . " = '" . $key_sql_oi[d_azp_crt_observation_internal_t_identification] . "'"
								);
							endforeach;
						}
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_crt_observation_internal_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_observation_internal, $var_array,
					d_azp_crt_observation_internal_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_crt_observation_internal_m_temp . " = '2'"
				);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro almacenado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_crt_request_data_generated_files( string $var_expiration, string $var_extension, string $var_module, string $var_name_file, string $var_route, string $var_template, string $var_type) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_crt_generated_files_m_temp => '1',);
				# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
				$this->db->update(t_azp_crt_generated_files, $var_array,
					d_azp_crt_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_crt_generated_files_m_temp . " = '2'"
				);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_generated_files_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_crt_generated_files_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_generated_files_m_date_created => DATE_HOUR,
					d_azp_crt_generated_files_m_date_modified => DATE_HOUR,
					d_azp_crt_generated_files_m_deleted => '1',
					d_azp_crt_generated_files_m_description => '',
					d_azp_crt_generated_files_m_level => '2',
					d_azp_crt_generated_files_m_status => '1',
					d_azp_crt_generated_files_m_temp => '2',
					d_azp_crt_generated_files_t_date_load => DATE_HOUR,
					d_azp_crt_generated_files_t_encode => '',
					d_azp_crt_generated_files_t_expiration => $var_expiration,
					d_azp_crt_generated_files_t_extension => $var_extension,
					d_azp_crt_generated_files_t_module => $var_module,
					d_azp_crt_generated_files_t_name_file => $var_name_file,
					d_azp_crt_generated_files_t_route => $var_route,
					d_azp_crt_generated_files_t_template => $var_template,
					d_azp_crt_generated_files_t_type => $var_type,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_crt_generated_files, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos registrados correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_crt_request_data_user(array $data) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# --------------------------------------------------------------------------------------------------
				$var_id = $data['field_us_id'];
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_crt_email_copy_m_temp => '1',);
				# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
				$this->db->update(t_azp_crt_email_copy, $var_array,
					d_azp_crt_email_copy_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_crt_email_copy_m_temp . " = '2'"
				);
				# --------------------------------------------------------------------------------------------------
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_id as $key => $value_id) {
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(d_azp_crt_email_copy_m_temp => '2',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_crt_email_copy, $var_array,
						d_azp_crt_email_copy_id_azp_crt_email_copy . " = '" . $value_id . "' AND " .
						d_azp_crt_email_copy_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
					);
				}
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos actualizados correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_crt_request_data_table(array $data) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# --------------------------------------------------------------------------------------------------
				$this->db->query("DELETE FROM " . t_azp_crt_request_update);
				$this->db->query("ALTER TABLE " . t_azp_crt_request_update . " AUTO_INCREMENT = 1");
				//$this->db->delete(t_azp_crt_request_update, d_azp_crt_request_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# --------------------------------------------------------------------------------------------------
				$var_id = $data['field_tb_id'];
				# --------------------------------------------------------------------------------------------------
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_id as $key => $value) {
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(
						d_azp_crt_request_update_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_crt_request_update_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_crt_request_update_m_date_created => DATE_HOUR,
						d_azp_crt_request_update_m_date_modified => DATE_HOUR,
						d_azp_crt_request_update_m_deleted => '1',
						d_azp_crt_request_update_m_description => '',
						d_azp_crt_request_update_m_level => '2',
						d_azp_crt_request_update_m_status => '1',
						d_azp_crt_request_update_m_temp => '1',
						d_azp_crt_request_update_v_id_azp_crt_request_data => $value,
					);
					# Insertar valores en la nueva tabla que no existen
					$this->db->insert(t_azp_crt_request_update, $var_array);
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_m_deleted . " = '1'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_crt_request_update_s_date => $key_sql[d_azp_crt_request_data_s_date],
							d_azp_crt_request_update_s_validate => $key_sql[d_azp_crt_request_data_s_validate],
							d_azp_crt_request_update_t_applicant_code => $key_sql[d_azp_crt_request_data_t_applicant_code],
							d_azp_crt_request_update_t_applicant_entity => $key_sql[d_azp_crt_request_data_t_applicant_entity],
							d_azp_crt_request_update_t_bilable => $key_sql[d_azp_crt_request_data_t_bilable],
							d_azp_crt_request_update_t_certificate_type => $key_sql[d_azp_crt_request_data_t_certificate_type],
							d_azp_crt_request_update_t_city => $key_sql[d_azp_crt_request_data_t_city],
							d_azp_crt_request_update_t_client_code => $key_sql[d_azp_crt_request_data_t_client_code],
							d_azp_crt_request_update_t_client_name => $key_sql[d_azp_crt_request_data_t_client_name],
							d_azp_crt_request_update_t_crt_date_image => $key_sql[d_azp_crt_request_data_t_crt_date_image],
							d_azp_crt_request_update_t_crt_date_load => $key_sql[d_azp_crt_request_data_t_crt_date_load],
							d_azp_crt_request_update_t_crt_document => $key_sql[d_azp_crt_request_data_t_crt_document],
							d_azp_crt_request_update_t_crt_error => $key_sql[d_azp_crt_request_data_t_crt_error],
							d_azp_crt_request_update_t_crt_mark_image => $key_sql[d_azp_crt_request_data_t_crt_mark_image],
							d_azp_crt_request_update_t_crt_name => $key_sql[d_azp_crt_request_data_t_crt_name],
							d_azp_crt_request_update_t_crt_route => $key_sql[d_azp_crt_request_data_t_crt_route],
							d_azp_crt_request_update_t_crt_size => $key_sql[d_azp_crt_request_data_t_crt_size],
							d_azp_crt_request_update_t_crt_tmp_name => $key_sql[d_azp_crt_request_data_t_crt_tmp_name],
							d_azp_crt_request_update_t_crt_type => $key_sql[d_azp_crt_request_data_t_crt_type],
							d_azp_crt_request_update_t_date_delivery => $key_sql[d_azp_crt_request_data_t_date_delivery],
							d_azp_crt_request_update_t_full_name => $key_sql[d_azp_crt_request_data_t_full_name],
							d_azp_crt_request_update_t_identification => $key_sql[d_azp_crt_request_data_t_identification],
							d_azp_crt_request_update_t_nro_oblitation => $key_sql[d_azp_crt_request_data_t_nro_oblitation],
							d_azp_crt_request_update_t_observation => $key_sql[d_azp_crt_request_data_t_observation],
							d_azp_crt_request_update_t_plaque_enrollment => $key_sql[d_azp_crt_request_data_t_plaque_enrollment],
							d_azp_crt_request_update_t_process => $key_sql[d_azp_crt_request_data_t_process],
							d_azp_crt_request_update_t_provider_class => $key_sql[d_azp_crt_request_data_t_provider_class],
							d_azp_crt_request_update_t_provider_name => $key_sql[d_azp_crt_request_data_t_provider_name],
							d_azp_crt_request_update_t_rcb_amount => $key_sql[d_azp_crt_request_data_t_rcb_amount],
							d_azp_crt_request_update_t_rcb_date_load => $key_sql[d_azp_crt_request_data_t_rcb_date_load],
							d_azp_crt_request_update_t_rcb_document => $key_sql[d_azp_crt_request_data_t_rcb_document],
							d_azp_crt_request_update_t_rcb_error => $key_sql[d_azp_crt_request_data_t_rcb_error],
							d_azp_crt_request_update_t_rcb_name => $key_sql[d_azp_crt_request_data_t_rcb_name],
							d_azp_crt_request_update_t_rcb_nro_receipt => $key_sql[d_azp_crt_request_data_t_rcb_nro_receipt],
							d_azp_crt_request_update_t_rcb_route => $key_sql[d_azp_crt_request_data_t_rcb_route],
							d_azp_crt_request_update_t_rcb_service => $key_sql[d_azp_crt_request_data_t_rcb_service],
							d_azp_crt_request_update_t_rcb_size => $key_sql[d_azp_crt_request_data_t_rcb_size],
							d_azp_crt_request_update_t_rcb_tmp_name => $key_sql[d_azp_crt_request_data_t_rcb_tmp_name],
							d_azp_crt_request_update_t_rcb_type => $key_sql[d_azp_crt_request_data_t_rcb_type],
							d_azp_crt_request_update_t_refundable => $key_sql[d_azp_crt_request_data_t_refundable],
							d_azp_crt_request_update_t_request_date => $key_sql[d_azp_crt_request_data_t_request_date],
							d_azp_crt_request_update_t_request_id => $key_sql[d_azp_crt_request_data_t_request_id],
							d_azp_crt_request_update_t_request_nro => $key_sql[d_azp_crt_request_data_t_request_nro],
							d_azp_crt_request_update_t_supplier_date_delivery => $key_sql[d_azp_crt_request_data_t_supplier_date_delivery],
							d_azp_crt_request_update_t_supplier_date_request => $key_sql[d_azp_crt_request_data_t_supplier_date_request],
							d_azp_crt_request_update_v_id_azp_crt_city => $key_sql[d_azp_crt_request_data_v_id_azp_crt_city],
							d_azp_crt_request_update_v_id_azp_crt_client => $key_sql[d_azp_crt_request_data_v_id_azp_crt_client],
							d_azp_crt_request_update_v_id_azp_crt_expiration => $key_sql[d_azp_crt_request_data_v_id_azp_crt_expiration],
							d_azp_crt_request_update_v_id_azp_crt_observation_type => $key_sql[d_azp_crt_request_data_v_id_azp_crt_observation_type],
							d_azp_crt_request_update_v_id_azp_crt_phase => $key_sql[d_azp_crt_request_data_v_id_azp_crt_phase],
							d_azp_crt_request_update_v_id_azp_crt_request_type => $key_sql[d_azp_crt_request_data_v_id_azp_crt_request_type],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_crt_request_update, $var_array, d_azp_crt_request_update_v_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_request_data_id_azp_crt_request_data] . "'");
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos registrados correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_request_data_state(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_st_request_state'])) { throw new Exception('<b>Error:</b> El campo de fase solicitud esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_request_date = $this->db->scape($data['field_st_request_state']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_request_date) || strtolower($empty_request_date) == strtolower('ninguno') || $empty_request_date == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fase solicitud es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_request_date)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fase solicitud solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_crt_request_data_state(array $data) : array {
			$var_error = $this->error_sql_azp_crt_request_data_state($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_request_date = $this->db->scape($data['field_st_request_state']);
				#-------------------------------------------------------------------------#
				if ($empty_request_date == 1) {
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$var_sql = $this->db->select('*', t_azp_crt_request_update);
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_crt_request_data_v_id_azp_crt_phase => 4, d_azp_crt_request_data_t_date_delivery => DATE);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_crt_request_data, $var_array,
								d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_request_update_v_id_azp_crt_request_data] . "' AND " .
								d_azp_crt_request_data_v_id_azp_crt_phase . " < '4'"
							);
						endforeach;
					}
				} else if ($empty_request_date == 2) {
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$var_sql = $this->db->select('*', t_azp_crt_request_update);
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_crt_request_data_v_id_azp_crt_phase => 5,);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_crt_request_data, $var_array,
								d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_request_update_v_id_azp_crt_request_data] . "' AND " .
								d_azp_crt_request_data_v_id_azp_crt_phase . " < '5'"
							);
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_data_bank() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . " AS 'lbl_azp_crt_client_id_azp_crt_client',
					tc_azp_crt_client." . d_azp_crt_client_m_by_created . " AS 'lbl_azp_crt_client_m_by_created',
					tc_azp_crt_client." . d_azp_crt_client_m_by_modified . " AS 'lbl_azp_crt_client_m_by_modified',
					tc_azp_crt_client." . d_azp_crt_client_m_date_created . " AS 'lbl_azp_crt_client_m_date_created',
					tc_azp_crt_client." . d_azp_crt_client_m_date_modified . " AS 'lbl_azp_crt_client_m_date_modified',
					tc_azp_crt_client." . d_azp_crt_client_m_description . " AS 'lbl_azp_crt_client_m_description',
					tc_azp_crt_client." . d_azp_crt_client_m_level . " AS 'lbl_azp_crt_client_m_level',
					tc_azp_crt_client." . d_azp_crt_client_m_status . " AS 'lbl_azp_crt_client_m_status',
					tc_azp_crt_client." . d_azp_crt_client_t_address . " AS 'lbl_azp_crt_client_t_address',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_client." . d_azp_crt_client_t_email . " AS 'lbl_azp_crt_client_t_email',
					tc_azp_crt_client." . d_azp_crt_client_t_password . " AS 'lbl_azp_crt_client_t_password',
					tc_azp_crt_client." . d_azp_crt_client_t_person . " AS 'lbl_azp_crt_client_t_person',
					tc_azp_crt_client." . d_azp_crt_client_t_position . " AS 'lbl_azp_crt_client_t_position',
					tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . " AS 'lbl_azp_crt_client_v_id_azp_crt_bank',
					tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_city . " AS 'lbl_azp_crt_client_v_id_azp_crt_city'
				FROM " . t_azp_crt_client . " tc_azp_crt_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_client." . d_azp_crt_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_client." . d_azp_crt_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_client." . d_azp_crt_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_client." . d_azp_crt_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . " = '" . $this->id . "'
					AND tc_azp_crt_client." . d_azp_crt_client_m_deleted . " = '1'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_crt_bank() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_m_deleted . " = '1' AND " . d_azp_crt_bank_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_crt_city() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_crt_city, d_azp_crt_city_m_deleted . " = '1' AND " . d_azp_crt_city_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_crt_client() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_crt_client, d_azp_crt_client_m_deleted . " = '1' AND " . d_azp_crt_client_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_crt_observation_type() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_crt_observation_type, d_azp_crt_observation_type_m_deleted . " = '1' AND " . d_azp_crt_observation_type_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_crt_request_type() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_crt_request_type, d_azp_crt_request_type_m_deleted . " = '1' AND " . d_azp_crt_request_type_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_crt_third_parties() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_m_deleted . " = '1' AND " . d_azp_crt_third_parties_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_crt_third_type() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_third_type." . d_azp_crt_third_type_id_azp_crt_third_type . " AS 'lbl_azp_crt_third_type_id_azp_crt_third_type',
					tc_azp_crt_third_type." . d_azp_crt_third_type_t_name . " AS 'lbl_azp_crt_third_type_t_name'
				FROM " . t_azp_crt_third_type . " tc_azp_crt_third_type
				INNER JOIN " . t_azp_crt_third_parties . " tc_azp_crt_third_parties
					ON tc_azp_crt_third_type." . d_azp_crt_third_type_id_azp_crt_third_type . "
						= tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . "
				GROUP BY tc_azp_crt_third_type." . d_azp_crt_third_type_id_azp_crt_third_type . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_crt_third_type_up(string $var_id, string $var_nro) {
			# Asignacion de valores
			$var_consecutive = $var_nro + 1;
			# Organizacion de los valores capturados y asignados a los campos a insertar
			$var_array = array(d_azp_crt_third_parties_t_consecutive => $var_consecutive,);
			# Query Sql Update: Actualizar valores de la tabla segun sus campos
			$this->db->update(t_azp_crt_third_parties, $var_array, d_azp_crt_third_parties_v_id_azp_crt_third_type . " = '" . $var_id . "'");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function validate_date($date, $format = 'Y-m-d') {
			$d = DateTime::createFromFormat($format, $date);
			return $d && $d->format($format) == $date;
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function get_azp_crt_request_bank() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_data_id_azp_crt_request_data',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro',
					tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " AS 'lbl_azp_crt_bank_id_azp_crt_bank',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = '1'
					AND tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " = '" . $this->id . "'
				GROUP BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function get_azp_crt_request_base() {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->select('*', t_azp_crt_request_data, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $this->id . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_request_nro = $value[d_azp_crt_request_data_t_request_nro];
					$var_client = $value[d_azp_crt_request_data_v_id_azp_crt_client];
					$var_request_type = $value[d_azp_crt_request_data_v_id_azp_crt_request_type];
				endforeach;
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . " AS 'lbl_azp_crt_request_type_id_azp_crt_request_type',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_type ." tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = '1'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request_nro . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . " = '" . $var_client . "'
					-- AND tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " = '" . $var_request_type . "'
				GROUP BY tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_client() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " 'lbl_azp_fct_client_id_azp_fct_client',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " 'lbl_azp_fct_client_t_name'
				FROM " . t_azp_fct_client . " tc_azp_fct_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						= tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
						= tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_client." . d_azp_fct_client_m_deleted . " = '1'
				GROUP BY tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_crt_information_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_information." . d_azp_crt_information_id_azp_crt_information . " AS 'lbl_azp_crt_information_id_azp_crt_information',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_information." . d_azp_crt_information_m_date_created . " AS 'lbl_azp_crt_information_m_date_created',
					tc_azp_crt_information." . d_azp_crt_information_m_date_modified . " AS 'lbl_azp_crt_information_m_date_modified',
					tc_azp_crt_information." . d_azp_crt_information_m_description . " AS 'lbl_azp_crt_information_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_information." . d_azp_crt_information_t_request . " AS 'lbl_azp_crt_information_t_request',
					tc_azp_crt_information." . d_azp_crt_information_w_document . " AS 'lbl_azp_crt_information_w_document',
					tc_azp_crt_information." . d_azp_crt_information_w_error . " AS 'lbl_azp_crt_information_w_error',
					tc_azp_crt_information." . d_azp_crt_information_w_folder . " AS 'lbl_azp_crt_information_w_folder',
					tc_azp_crt_information." . d_azp_crt_information_w_name . " AS 'lbl_azp_crt_information_w_name',
					tc_azp_crt_information." . d_azp_crt_information_w_route . " AS 'lbl_azp_crt_information_w_route',
					tc_azp_crt_information." . d_azp_crt_information_w_size . " AS 'lbl_azp_crt_information_w_size',
					tc_azp_crt_information." . d_azp_crt_information_w_tmp_name . " AS 'lbl_azp_crt_information_w_tmp_name',
					tc_azp_crt_information." . d_azp_crt_information_w_type . " AS 'lbl_azp_crt_information_w_type',
					tc_azp_crt_information." . d_azp_crt_information_v_id_azp_fct_client . " AS 'lbl_azp_crt_information_v_id_azp_fct_client'
				FROM " . t_azp_crt_information . " tc_azp_crt_information
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_information." . d_azp_crt_information_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_information." . d_azp_crt_information_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_information." . d_azp_crt_information_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_information." . d_azp_crt_information_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_crt_information." . d_azp_crt_information_v_id_azp_fct_client . "
						= tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_information." . d_azp_crt_information_m_deleted . " = '1'
					AND tc_azp_crt_information." . d_azp_crt_information_id_azp_crt_information . " = '" . $this->id . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_crt_information_read() {
			if (isset($_GET['fd_base'])) { $var_base = $_GET['fd_base']; } else { $var_base = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_information." . d_azp_crt_information_id_azp_crt_information . " AS 'lbl_azp_crt_information_id_azp_crt_information',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_information." . d_azp_crt_information_m_date_created . " AS 'lbl_azp_crt_information_m_date_created',
					tc_azp_crt_information." . d_azp_crt_information_m_date_modified . " AS 'lbl_azp_crt_information_m_date_modified',
					tc_azp_crt_information." . d_azp_crt_information_m_description . " AS 'lbl_azp_crt_information_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_information." . d_azp_crt_information_t_request . " AS 'lbl_azp_crt_information_t_request',
					tc_azp_crt_information." . d_azp_crt_information_w_document . " AS 'lbl_azp_crt_information_w_document',
					tc_azp_crt_information." . d_azp_crt_information_w_error . " AS 'lbl_azp_crt_information_w_error',
					tc_azp_crt_information." . d_azp_crt_information_w_folder . " AS 'lbl_azp_crt_information_w_folder',
					tc_azp_crt_information." . d_azp_crt_information_w_name . " AS 'lbl_azp_crt_information_w_name',
					tc_azp_crt_information." . d_azp_crt_information_w_route . " AS 'lbl_azp_crt_information_w_route',
					tc_azp_crt_information." . d_azp_crt_information_w_size . " AS 'lbl_azp_crt_information_w_size',
					tc_azp_crt_information." . d_azp_crt_information_w_tmp_name . " AS 'lbl_azp_crt_information_w_tmp_name',
					tc_azp_crt_information." . d_azp_crt_information_w_type . " AS 'lbl_azp_crt_information_w_type',
					tc_azp_crt_information." . d_azp_crt_information_v_id_azp_fct_client . " AS 'lbl_azp_crt_information_v_id_azp_fct_client'
				FROM " . t_azp_crt_information . " tc_azp_crt_information
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_information." . d_azp_crt_information_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_information." . d_azp_crt_information_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_information." . d_azp_crt_information_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_information." . d_azp_crt_information_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_crt_information." . d_azp_crt_information_v_id_azp_fct_client . "
						= tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_information." . d_azp_crt_information_m_deleted . " = '1'
					AND tc_azp_crt_information." . d_azp_crt_information_v_id_azp_fct_client . " = '" . $this->id . "'
					AND tc_azp_crt_information." . d_azp_crt_information_t_request . " = '" . $var_base . "'
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_information_client_upload(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_client_up_id'])) { throw new Exception('<b>Error:</b> El campo de control esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_client = $this->db->scape($data['field_client_up_id']);
				$empty_request = $this->db->scape($data['field_client_up_bs']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_client_up_fl']['name'];
				$empty_type = $_FILES['field_client_up_fl']['type'];
				$empty_tmp_name = $_FILES['field_client_up_fl']['tmp_name'];
				$empty_error = $_FILES['field_client_up_fl']['error'];
				$empty_size = $_FILES['field_client_up_fl']['size'];
				#-------------------------------------------------------------------------#
				$empty_tamanio = 10000; $empty_bytes = 1024;
				$empty_extension = array('xls','xlsx','csv','pdf','zip',);
				$empty_path_info = strtolower(pathinfo($empty_name, PATHINFO_EXTENSION));
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_client) || $empty_client == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_client)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#---------------------------------------------#
				if (Func::emp($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de archivo es obligatorio.');
				}
				#---------------------------------------------#
				if (!in_array($empty_path_info, $empty_extension)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de archivo solo acepta formatos ' . implode(',', $empty_extension) . '.');
				}
				#---------------------------------------------#
				if ($empty_size > ($empty_tamanio * $empty_bytes)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El archivo seleccionado excede el tamaño de 10 MB.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_crt_information_client_upload(array $data) : array {
			$var_error = $this->error_sql_azp_crt_information_client_upload($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('files');
				#-------------------------------------------------------------------------#
				$empty_client = $this->db->scape($data['field_client_up_id']);
				$empty_request = $this->db->scape($data['field_client_up_bs']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_client_up_fl']['name'];
				$empty_error = $_FILES['field_client_up_fl']['error'];
				$empty_size = $_FILES['field_client_up_fl']['size'];
				$empty_tmp_name = $_FILES['field_client_up_fl']['tmp_name'];
				$empty_type = $_FILES['field_client_up_fl']['type'];
				#-------------------------------------------------------------------------#
				$empty_tamanio = 10000; $empty_bytes = 1024;
				$empty_extension = array('xls','xlsx','csv','pdf','zip',);
				$empty_path_info = strtolower(pathinfo($empty_name, PATHINFO_EXTENSION));
				#-------------------------------------------------------------------------#
				$empty_route = '../systemfiles/filesproject/';
				$empty_folder = 'azp_crt_information/' . $empty_client . '/';
				$empty_document = DATE_NUMBER . '_' . HOUR_NUMBER . '.' . $empty_path_info;
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('emails');
				#-------------------------------------------------------------------------#
				# Asignacion de valores a variables
				$var_from_email = ''; $var_from_name = '';
				# Array para guardar valores
				$var_adds = array();
				# Array para guardar valores
				$var_copy = array();
				# Array para guardar valores
				$var_files = array();
				# Valores del array vacios
				$var_email_address = array();
				# Valores del array vacios
				$empty_idata = ''; $empty_ems = '0'; $var_incount = 0;
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->query("
					SELECT
						tc_azp_configuration_email." . d_azp_configuration_email_id_azp_configuration_email . " AS 'lbl_azp_configuration_email_id_azp_configuration_email',
						tc_azp_configuration_email." . d_azp_configuration_email_t_connect ." AS 'lbl_azp_configuration_email_t_connect',
						tc_azp_configuration_email." . d_azp_configuration_email_t_email ." AS 'lbl_azp_configuration_email_t_email',
						tc_azp_configuration_email." . d_azp_configuration_email_t_host ." AS 'lbl_azp_configuration_email_t_host',
						tc_azp_configuration_email." . d_azp_configuration_email_t_pass ." AS 'lbl_azp_configuration_email_t_pass',
						tc_azp_configuration_email." . d_azp_configuration_email_t_port ." AS 'lbl_azp_configuration_email_t_port',
						tc_azp_configuration_email." . d_azp_configuration_email_t_secure ." AS 'lbl_azp_configuration_email_t_secure',

						tc_azp_data_personal." . d_azp_data_personal_t_address . " AS 'lbl_azp_data_personal_t_address',
						tc_azp_data_personal." . d_azp_data_personal_t_birth_date . " AS 'lbl_azp_data_personal_t_birth_date',
						tc_azp_data_personal." . d_azp_data_personal_t_identification . " AS 'lbl_azp_data_personal_t_identification',
						tc_azp_data_personal." . d_azp_data_personal_t_firm . " AS 'lbl_azp_data_personal_t_firm',
						tc_azp_data_personal." . d_azp_data_personal_t_names . " AS 'lbl_azp_data_personal_t_names',
						tc_azp_data_personal." . d_azp_data_personal_t_phone_fixed . " AS 'lbl_azp_data_personal_t_phone_fixed',
						tc_azp_data_personal." . d_azp_data_personal_t_phone_movil . " AS 'lbl_azp_data_personal_t_phone_movil',
						tc_azp_data_personal." . d_azp_data_personal_t_surnames . " AS 'lbl_azp_data_personal_t_surnames'
					FROM " . t_azp_user . " tc_azp_user
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_role . " tc_azp_role
						ON tc_azp_user." . d_azp_user_v_id_azp_role . "
							= tc_azp_role." . d_azp_role_id_azp_role . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
						ON tc_azp_user." . d_azp_user_id_azp_user . "
							= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_email . " tc_azp_configuration_email
						ON tc_azp_user." . d_azp_user_id_azp_user . "
							= tc_azp_configuration_email." . d_azp_configuration_email_v_id_azp_user . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND tc_azp_configuration_email." . d_azp_configuration_email_t_connect . " = 'Exitoso'
				");
				#-------------------------------------------------------------------------#
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$empty_ihost = $value['lbl_azp_configuration_email_t_host'];
						$empty_iuser = $value['lbl_azp_configuration_email_t_email'];
						$empty_ipass = $value['lbl_azp_configuration_email_t_pass'];
						$empty_iport = $value['lbl_azp_configuration_email_t_port'];
						$empty_ismtp = $value['lbl_azp_configuration_email_t_secure'];
						$empty_iemail = $value['lbl_azp_configuration_email_t_email'];
						$empty_inames = $value['lbl_azp_data_personal_t_names'];
						$empty_isurns = $value['lbl_azp_data_personal_t_surnames'];
						$empty_idata = $empty_inames . ' ' . $empty_isurns;
						# Asignacion de valores a nuevas variables
						$var_user_firm = $value['lbl_azp_data_personal_t_firm'];
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select("*", t_azp_crt_email_request,
					d_azp_crt_email_request_m_deleted . " = '1' AND " .
					d_azp_crt_email_request_m_status . " = '1' AND " .
					d_azp_crt_email_request_v_id_azp_fct_client . " = '" . $empty_client . "'"
				);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value) {
						# Asignacion de valores a nuevas variables
						$empty_aemail = $value[d_azp_crt_email_request_t_email];
						$empty_anames = $value[d_azp_crt_email_request_t_names];
						$empty_asurns = $value[d_azp_crt_email_request_t_names];
						$var_adds[$empty_aemail] = $empty_anames . ' ' . $empty_asurns;
						$empty_ems = 1;
					}
				}
				if ($empty_ems == '0') {
					$var_ms_success = '<b>Error:</b> No se encontraron emails a enviar, debe registrar al menos uno.';
					$var_return = 'error'; $var_ms_name = 'message'; $var_ms_text = $var_ms_success;
				} else {
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_crt_information_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_crt_information_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_crt_information_m_date_created => DATE_HOUR,
						d_azp_crt_information_m_date_modified => DATE_HOUR,
						d_azp_crt_information_m_deleted => '1',
						d_azp_crt_information_m_description => '',
						d_azp_crt_information_m_level => '2',
						d_azp_crt_information_m_status => '1',
						d_azp_crt_information_m_temp => '1',
						d_azp_crt_information_t_request => $empty_request,
						d_azp_crt_information_w_document => $empty_document,
						d_azp_crt_information_w_error => $empty_error,
						d_azp_crt_information_w_folder => $empty_folder,
						d_azp_crt_information_w_name => $empty_name,
						d_azp_crt_information_w_route => $empty_route,
						d_azp_crt_information_w_size => $empty_size,
						d_azp_crt_information_w_tmp_name => $empty_tmp_name,
						d_azp_crt_information_w_type => $empty_type,
						d_azp_crt_information_v_id_azp_fct_client => $empty_client,
					);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->insert(t_azp_crt_information, $var_array);
					#-------------------------------------------------------------------------#
					$var_array_bank = array();
					# Verificar si el registro existe en la tabla
					$var_sql = $this->db->select("*", t_azp_crt_bank, d_azp_crt_bank_v_id_azp_fct_client . " = '" . $empty_client . "'");
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					if (false != $var_sql) { foreach ($var_sql as $key => $value) { $var_array_bank[] = $value[d_azp_crt_bank_id_azp_crt_bank]; } }
					$var_implode_bank = implode(',', $var_array_bank);
					#-------------------------------------------------------------------------#
					$var_array_clients = array();
					# Verificar si el registro existe en la tabla
					$var_sql = $this->db->select("*", t_azp_crt_client, d_azp_crt_client_v_id_azp_crt_bank . " IN (" . $var_implode_bank . ")");
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					if (false != $var_sql) { foreach ($var_sql as $key => $value) { $var_array_clients[] = $value[d_azp_crt_client_id_azp_crt_client]; } }
					$var_implode_cl = implode(',', $var_array_clients);
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla
					$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_crt_information,
						d_azp_crt_information_t_request . " = '" . $empty_request . "' AND " .
						d_azp_crt_information_v_id_azp_fct_client . " = '" . $empty_client . "' AND " .
						d_azp_crt_information_m_deleted . " = '1'"
					);
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					if (false != $var_sql) { foreach ($var_sql as $key => $value) { $var_incount = $value['lbl_count']; } }
					# Control de validacion de datos
					if ($var_incount > 0) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_crt_request_data_t_inform_client => 'Si',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_crt_request_data, $var_array,
							d_azp_crt_request_data_t_request_nro . " = '" . $empty_request . "' AND " .
							d_azp_crt_request_data_v_id_azp_crt_client . " IN (" . $var_implode_cl . ")"
						);
					} else {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_crt_request_data_t_inform_client => 'No',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_crt_request_data, $var_array,
							d_azp_crt_request_data_t_request_nro . " = '" . $empty_request . "' AND " .
							d_azp_crt_request_data_v_id_azp_crt_client . " IN (" . $var_implode_cl . ")"
						);
					}
					#-------------------------------------------------------------------------#
					# Contro de existencia de carpeta
					if (!is_dir($empty_route . $empty_folder)) { Files::create_dir($empty_route . $empty_folder, 0777); chmod($empty_route . $empty_folder, 0777); }
					#-------------------------------------------------------------------------#
					# Subida de archivos en el desarrollo
					Files::upload_file(trim(preg_replace('/\s+/',' ', $empty_document)), $empty_tmp_name, $empty_route . $empty_folder, true);
					#-------------------------------------------------------------------------#
					# Dar permisos a la ruta y archivo
					chmod($empty_route . $empty_folder . $empty_document, 0777);
					#-------------------------------------------------------------------------#
					$empty_affair = 'Gsc: Respuesta a su solicitud ' . $empty_request . ' de QUE+';
					$empty_summernote = 'Sr. (a) cliente le informamos que se ha cargado una respuesta de la solicitud ' . $empty_request . ' por parte del supervisor del modulo de certificados';
					#-------------------------------------------------------------------------#
					$var_label_search = array(
						'<br>', '</br>', '<p>', '</p>', '<i>', '</i>', '<b>', '</b>',
						'<u>', '</u>', '<s>', '</s>', '<img ', '</img ', '<center>', '</center>',
						'<h1>', '</h1>', '<h2>', '</h2>', '<h3>', '</h3>',
						'<h4>', '</h4>', '<h5>', '</h5>', '<h6>', '</h6>',
						'<span style=\"letter-spacing: 0.1px;\">', '</span>', '<span>',
					);
					$var_label_replace = array(
						'', '', '', '', '', '', '', '', '', '',
						'', '', '', '', '', '', '', '', '', '',
						'', '', '', '', '', '', '', '', '', '',
						'', '', '',
					);
					$var_affair = str_replace($var_label_search, $var_label_replace, $empty_affair);
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla
					$var_sql = $this->db->select("*", t_azp_crt_information, d_azp_crt_information_m_deleted . " = '1' AND " .
						d_azp_crt_information_v_id_azp_fct_client . " = '" . $empty_client .
						"' ORDER BY " . d_azp_crt_information_id_azp_crt_information . " DESC LIMIT 1"
					);
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					if (false != $var_sql) {
						foreach ($var_sql as $key => $value) {
							$var_docum = $value[d_azp_crt_information_w_document];
							$var_folder = $value[d_azp_crt_information_w_folder];
							$var_route = $value[d_azp_crt_information_w_route];
							$var_compl = $var_route . $var_folder . $var_docum;
							$var_files[$var_compl] = $var_docum;
						}
					}
					#-------------------------------------------------------------------------#
					# Codigo html para la estructura del correo electronico
					$var_html = '
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
										<img src="' . URL . 'views/backend/images/email.png">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
										<p class="text-dark">
											<div class="m-0 d-flex">
												<div class="flex-1 text-contrast">
													' . html_entity_decode($empty_summernote) . '
												</div>
											</div>
										</p>
										<p class="text-dark">
											<div class="m-0 d-flex">
												<div class="flex-1 text-contrast">
													<img src="' . URL . $var_user_firm . '">
												</div>
											</div>
										</p>
									</div>
								</div>
							</div>
						</div>
					';
					#-------------------------------------------------------------------------#
					# Codigo de parametros de email
					$var_init = array($empty_ihost, $empty_iuser, $empty_ipass, $empty_iport, $empty_ismtp,);
					$var_html = Emails::main_template($var_html);
					$var_from = array($empty_iemail => $empty_idata,);
					//$var_adds = array($empty_aemail => $empty_adata,);
					//$var_copy = array($empty_email => $var_data,);
					$var_topic = html_entity_decode($var_affair);
					$var_email = Emails::main_send($var_init, $var_from, $var_adds, $var_copy, $var_html, $var_topic, $var_files,);
					#-------------------------------------------------------------------------#
					# Validacion del correo electronico a enviar
					$var_ms_success = '<b>Exito:</b> Archivo almacenado y correo electronico enviado.';
					$var_ms_error = '<b>Error:</b> Archivo almacenado pero correo electronico no enviado.';
					#-------------------------------------------------------------------------#
					# Validacion del correo electronico a enviar
					if (true === $var_email) { $var_return = 'success'; $var_ms_name = 'message'; $var_ms_text = $var_ms_success; } else { $var_return = 'error'; $var_ms_name = 'message'; $var_ms_text = $var_ms_error; }
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array($var_return => 1, $var_ms_name => $var_ms_text,);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_information_client_remove(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_client_remove'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_client_remove']); $var_incount = 0;
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
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_crt_information, d_azp_crt_information_id_azp_crt_information . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('<b>Error:</b> El registro que está removiendo no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_crt_information, d_azp_crt_information_id_azp_crt_information . " = '" . $empty_id . "' AND " . d_azp_crt_information_m_deleted . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_id) { foreach ($sql_id as $key => $value): throw new Exception('<b>Error:</b> El registro que está procesando ya se encuentra removido.'); endforeach; }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_crt_information, d_azp_crt_information_id_azp_crt_information . " = '" . $empty_id . "' AND " .
					d_azp_crt_information_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_information_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_information, d_azp_crt_information_id_azp_crt_information . " = '" . $empty_id . "' AND " . d_azp_crt_information_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) { throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.'); }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_crt_information_client_remove(array $data) : array {
			$var_error = $this->error_sql_azp_crt_information_client_remove($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_client_remove']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_crt_information_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_information, $var_array, d_azp_crt_information_id_azp_crt_information . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$var_sql = $this->db->select('*', t_azp_crt_information, d_azp_crt_information_id_azp_crt_information . " = '" . $empty_id . "'");
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) { foreach ($var_sql as $key => $value) { $empty_request = $value[d_azp_crt_information_t_request]; } }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$var_sql = $this->db->select('*', t_azp_crt_information, d_azp_crt_information_id_azp_crt_information . " = '" . $empty_id . "'");
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) { foreach ($var_sql as $key => $value) { $empty_client = $value[d_azp_crt_information_v_id_azp_fct_client]; } }
				#-------------------------------------------------------------------------#
				$var_array_bank = array();
				# Verificar si el registro existe en la tabla
				$var_sql = $this->db->select("*", t_azp_crt_bank, d_azp_crt_bank_v_id_azp_fct_client . " = '" . $empty_client . "'");
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) { foreach ($var_sql as $key => $value) { $var_array_bank[] = $value[d_azp_crt_bank_id_azp_crt_bank]; } }
				$var_implode_bank = implode(',', $var_array_bank);
				#-------------------------------------------------------------------------#
				$var_array_clients = array();
				# Verificar si el registro existe en la tabla
				$var_sql = $this->db->select("*", t_azp_crt_client, d_azp_crt_client_v_id_azp_crt_bank . " IN (" . $var_implode_bank . ")");
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) { foreach ($var_sql as $key => $value) { $var_array_clients[] = $value[d_azp_crt_client_id_azp_crt_client]; } }
				$var_implode_cl = implode(',', $var_array_clients);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_crt_information,
					d_azp_crt_information_t_request . " = '" . $empty_request . "' AND " .
					d_azp_crt_information_v_id_azp_fct_client . " = '" . $empty_client . "' AND " .
					d_azp_crt_information_m_deleted . " = '1'"
				);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) { foreach ($var_sql as $key => $value) { $var_incount = $value['lbl_count']; } }
				# Control de validacion de datos
				if ($var_incount > 0) {
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_crt_request_data_t_inform_client => 'Si',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_crt_request_data, $var_array,
						d_azp_crt_request_data_t_request_nro . " = '" . $empty_request . "' AND " .
						d_azp_crt_request_data_v_id_azp_crt_client . " IN (" . $var_implode_cl . ")"
					);
				} else {
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_crt_request_data_t_inform_client => 'No',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_crt_request_data, $var_array,
						d_azp_crt_request_data_t_request_nro . " = '" . $empty_request . "' AND " .
						d_azp_crt_request_data_v_id_azp_crt_client . " IN (" . $var_implode_cl . ")"
					);
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_crt_request_image() {
			if (!isset($_GET['field_rq'])) { $var_request = ''; } else { $var_request = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " LIKE '%" . $_GET['field_rq'] . "%'"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . " AS 'lbl_azp_crt_client_id_azp_crt_client',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				
				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				
				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = '1' " . $var_request . "
					AND tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . " = '" . $this->id . "'
				GROUP BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_crt_request_climage() {
			if (isset($_GET['field_rq'])) { $var_rq = $_GET['field_rq']; } else { $var_rq = ''; } $var_client = ''; $var_request = '';
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_v_id_azp_role . " = '9'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_crt_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach; }
			#-------------------------------------------------------------------------#
			# Consulta para identificar los nuevos registros en la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_fct_client',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_request'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data

				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $var_rq . "'
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_id_client = $value['lbl_fct_client']; $var_request = $value['lbl_request']; endforeach; }
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_m_deleted . " = '1' AND " . d_azp_crt_bank_id_azp_crt_bank . " = '" . $this->id . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) { foreach ($var_sql as $key => $value): $var_client = $value[d_azp_crt_bank_v_id_azp_fct_client]; endforeach; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . " AS 'lbl_azp_crt_client_id_azp_crt_client',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data

				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = '1'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request . "'
					AND tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . " = '" . $var_client . "'
				GROUP BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_capture_client() {
			if (isset($_GET['field_rq'])) { $var_rq = $_GET['field_rq']; } else { $var_rq = ''; } $var_client = ''; $var_request = '';
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_v_id_azp_role . " = '9'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_crt_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach; }
			#-------------------------------------------------------------------------#
			# Consulta para identificar los nuevos registros en la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_fct_client',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_request'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data

				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $var_rq . "'
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_id_client = $value['lbl_fct_client']; $var_request = $value['lbl_request']; endforeach; }
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_crt_capture . " tc_azp_crt_capture
				INNER JOIN " . t_azp_crt_request_data . " tc_azp_crt_request_data
					ON tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . "
						= tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . "

				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $var_id_client . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request . "'
					AND tc_azp_crt_capture." . d_azp_crt_capture_t_crt_name . " != ''
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_crt_compressed_identification_client() {
			if (isset($_GET['field_rq'])) { $var_rq = $_GET['field_rq']; } else { $var_rq = ''; } $var_client = ''; $var_request = '';
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_v_id_azp_role . " = '9'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_crt_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach; }
			#-------------------------------------------------------------------------#
			# Consulta para identificar los nuevos registros en la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_fct_client',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_request'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data

				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $var_rq . "'
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_id_client = $value['lbl_fct_client']; $var_request = $value['lbl_request']; endforeach; }
			#-------------------------------------------------------------------------#
			# Consulta para identificar los nuevos registros en la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name'
				FROM " . t_azp_crt_capture . " tc_azp_crt_capture

				INNER JOIN " . t_azp_crt_request_data . " tc_azp_crt_request_data
					ON tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . "
						= tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . "

				INNER JOIN " . t_azp_crt_request_type . " tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "

				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $var_id_client . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request . "'
					AND tc_azp_crt_capture." . d_azp_crt_capture_t_crt_name . " != ''
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_crt_compressed_images_client() {
			if (isset($_GET['field_rq'])) { $var_rq = $_GET['field_rq']; } else { $var_rq = ''; } $var_client = ''; $var_request = '';
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_v_id_azp_role . " = '9'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_crt_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach; }
			#-------------------------------------------------------------------------#
			# Consulta para identificar los nuevos registros en la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_fct_client',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_request'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data

				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $var_rq . "'
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_id_client = $value['lbl_fct_client']; $var_request = $value['lbl_request']; endforeach; }
			#-------------------------------------------------------------------------#
			if (isset($_GET['field_base'])) { $var_number = $_GET['field_base']; } else { $var_number = ''; }
			# Valores del array vacios
			$var_file = array();
			# Consulta para identificar los nuevos registros en la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_crt_capture . " tc_azp_crt_capture

				INNER JOIN " . t_azp_crt_request_data . " tc_azp_crt_request_data
					ON tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . "
						= tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . "

				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $var_id_client . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request . "'
					AND tc_azp_crt_capture." . d_azp_crt_capture_t_crt_name . " != ''
			");
			# Validar si la consulta es verdadera
			if (false != $var_sql) {
				# Recorrer las filas de la consulta generada
				foreach ($var_sql as $key_sql => $value):
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_id = $value[d_azp_crt_capture_id_azp_crt_capture];
					$var_route = $value[d_azp_crt_capture_t_crt_route];
					$var_document = $value[d_azp_crt_capture_t_crt_name];
					$var_file[$var_id] = $var_route . $var_document;
				endforeach;
			} else { $var_file[] = ''; }
			//$var_file[0] = $_GET['field_xlsx'];
			#-------------------------------------------------------------------------#
			# Ruta principal de la carpeta
			$var_ec_route = 'systemfiles/filesproject/';
			# Ruta de la carpeta principal
			$var_ec_folder = 'azp_crt_compressed/';
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
			$var_zip_name = 'Z_' . DATE . HOUR_NUMBER . '.zip';
			# Ruta de la carpeta para almacenar sus respectivos archivos
			$var_zip_route = $var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date;
			# Ruta final concatenada para almacenar el archivo en su carpeta
			$var_zip_final = '' . $var_zip_route . $var_zip_name;
			#-------------------------------------------------------------------------#
			$var_compressed = new ZipArchive();
			# Validacion de la ruta y archivo del archivo a comprimir
			if ($var_compressed->open($var_zip_final, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE) === true) {
				# Agregamos los archivos a comprimir
				foreach ($var_file as $key_file) {
					$var_ec_file = str_replace('../', '', $key_file);
					# Ruta de los archivos encontrados
					$var_get_route = 'systemfiles/filesproject/azp_crt_capture/certificate/';
					# Añadir los archivos a comprimir
					$var_get_content = file_get_contents($var_ec_file);
					# Añadir los archivos a comprimir
					$var_compressed->addFromString(str_replace($var_get_route, '', $var_ec_file), $var_get_content);


					# Ruta de los archivos encontrados
					$var_get_route = 'systemfiles/filesproject/azp_crt_request_data/images/' . YEAR . '/' . YEAR_MONTH . '/' . DATE . '/';
					# Añadir los archivos a comprimir
					$var_get_content = file_get_contents($_GET['field_xlsx']);
					# Añadir los archivos a comprimir
					$var_compressed->addFromString(str_replace($var_get_route, '', $_GET['field_xlsx']), $var_get_content);


					/*$var_ec_file = str_replace('../', '', $key_file);
					# Ruta de los archivos encontrados
					$var_get_route = 'systemfiles/filesproject/azp_crt_request_data/images/';
					# Añadir los archivos a comprimir
					$var_get_content = file_get_contents($var_ec_file);
					# Añadir los archivos a comprimir
					$var_compressed->addFromString(str_replace($var_get_route, '', $var_ec_file), $var_get_content);*/
				}
			}
			# Cerrar la compresion del archivo
			$var_compressed->close();
			# Codificar la iniformacion del archivo
			$var_base_64 = base64_encode(file_get_contents($var_zip_final));
			#-------------------------------------------------------------------------#
			# Dar permisos a la carpeta y archivo
			chmod($var_ec_route . $var_ec_folder, 0777);
			# Dar permisos a la carpeta y archivo
			chmod($var_ec_route . $var_ec_folder . $var_ec_year, 0777);
			# Dar permisos a la carpeta y archivo
			chmod($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month, 0777);
			# Dar permisos a la carpeta y archivo
			chmod($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date, 0777);
			# Dar permisos a la carpeta y archivo
			chmod($var_zip_final, 0777);
			# --------------------------------------------------------------------------------------------------
			# Retornar el mensaje una vez ejecutada la rutina del proceso
			//return array('success' => 1, 'message' => '<b>Exito:</b> Archivo comprimido correctamente.', 'compressed' => $var_zip_final,);
			return array('compressed' => $var_zip_final,);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_crt_request_data_client() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_client = $key_sql[d_azp_user_v_id_azp_fct_client]; endforeach; } else { $var_client = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_crt_bank,
				d_azp_crt_bank_m_deleted . " = '1' AND " .
				d_azp_crt_bank_m_status . " = '1' AND " .
				d_azp_crt_bank_v_id_azp_fct_client . " = '" . $var_client . "'
				GROUP BY " . d_azp_crt_bank_t_name . " ASC
				ORDER BY " . d_azp_crt_bank_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>