<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_gsc_requestModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_update_client() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					COUNT(tc_azp_gsc_update." . d_azp_gsc_update_id_azp_gsc_update . ") AS 'lbl_azp_gsc_update_id_azp_gsc_update',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
				FROM " . t_azp_gsc_update . " tc_azp_gsc_update
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_deleted . " = '1'
					AND tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				GROUP BY tc_azp_gsc_client." . d_azp_gsc_client_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_log_email() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_log_email." . d_azp_gsc_log_email_id_azp_gsc_log_email . " AS 'lbl_azp_gsc_log_email_id_azp_gsc_log_email',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_log_email." . d_azp_gsc_log_email_m_date_created . " AS 'lbl_azp_gsc_log_email_m_date_created',
					tc_azp_gsc_log_email." . d_azp_gsc_log_email_m_date_modified . " AS 'lbl_azp_gsc_log_email_m_date_modified',
					tc_azp_gsc_log_email." . d_azp_gsc_log_email_m_description . " AS 'lbl_azp_gsc_log_email_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_log_email." . d_azp_gsc_log_email_t_affair . " AS 'lbl_azp_gsc_log_email_t_affair',
					tc_azp_gsc_log_email." . d_azp_gsc_log_email_t_email_main . " AS 'lbl_azp_gsc_log_email_t_email_main',
					tc_azp_gsc_log_email." . d_azp_gsc_log_email_t_email_copy . " AS 'lbl_azp_gsc_log_email_t_email_copy',
					tc_azp_gsc_log_email." . d_azp_gsc_log_email_t_email_intern . " AS 'lbl_azp_gsc_log_email_t_email_intern',
					tc_azp_gsc_log_email." . d_azp_gsc_log_email_t_message . " AS 'lbl_azp_gsc_log_email_t_message',
					tc_azp_gsc_log_email." . d_azp_gsc_log_email_t_template . " AS 'lbl_azp_gsc_log_email_t_template'
				FROM " . t_azp_gsc_log_email . " tc_azp_gsc_log_email
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_log_email." . d_azp_gsc_log_email_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_log_email." . d_azp_gsc_log_email_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_log_email." . d_azp_gsc_log_email_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_log_email." . d_azp_gsc_log_email_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_log_email." . d_azp_gsc_log_email_m_deleted . " = '1'
				ORDER BY tc_azp_gsc_log_email." . d_azp_gsc_log_email_id_azp_gsc_log_email . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_confirm_1_main() {
			if (isset($_GET['field_id'])) { if ($_GET['field_id'] != '') { $var_id = $_GET['field_id']; } else { $var_id = "''"; } } else { $var_id = "''"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " AS 'lbl_azp_gsc_third_parties_id_azp_gsc_third_parties',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_date_created . " AS 'lbl_azp_gsc_third_parties_m_date_created',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_date_modified . " AS 'lbl_azp_gsc_third_parties_m_date_modified',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_description . " AS 'lbl_azp_gsc_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_address . " AS 'lbl_azp_gsc_third_parties_t_address',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_business_name . " AS 'lbl_azp_gsc_third_parties_t_business_name',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_contact . " AS 'lbl_azp_gsc_third_parties_t_contact',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_email . " AS 'lbl_azp_gsc_third_parties_t_email',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_password . " AS 'lbl_azp_gsc_third_parties_t_password',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_phone_fixed . " AS 'lbl_azp_gsc_third_parties_t_phone_fixed',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_phone_movil . " AS 'lbl_azp_gsc_third_parties_t_phone_movil',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_city . " AS 'lbl_azp_gsc_third_parties_v_id_azp_gsc_city',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_department . " AS 'lbl_azp_gsc_third_parties_v_id_azp_gsc_department',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_type_third . " AS 'lbl_azp_gsc_third_parties_v_id_azp_gsc_type_third'
				FROM " . t_azp_gsc_third_parties . " tc_azp_gsc_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_deleted . " = '1'
					AND tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " IN (" . $var_id . ")
				ORDER BY tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_confirm_1_intern() {
			if (isset($_GET['field_id'])) { if ($_GET['field_id'] != '') { $var_id = $_GET['field_id']; } else { $var_id = "''"; } } else { $var_id = "''"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_id_azp_gsc_email_copy . " AS 'lbl_azp_gsc_email_copy_id_azp_gsc_email_copy',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_date_created . " AS 'lbl_azp_gsc_email_copy_m_date_created',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_date_modified . " AS 'lbl_azp_gsc_email_copy_m_date_modified',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_description . " AS 'lbl_azp_gsc_email_copy_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_t_email . " AS 'lbl_azp_gsc_email_copy_t_email',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_t_names . " AS 'lbl_azp_gsc_email_copy_t_names',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_t_surnames . " AS 'lbl_azp_gsc_email_copy_t_surnames'
				FROM " . t_azp_gsc_email_copy . " tc_azp_gsc_email_copy
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_deleted . " = '1'
					AND tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_id_azp_gsc_email_copy . " IN (" . $var_id . ")
				ORDER BY tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_id_azp_gsc_email_copy . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_confirm_2_main() {
			if (isset($_GET['field_id'])) { if ($_GET['field_id'] != '') { $var_id = $_GET['field_id']; } else { $var_id = "''"; } } else { $var_id = "''"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " AS 'lbl_azp_gsc_third_parties_id_azp_gsc_third_parties',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_date_created . " AS 'lbl_azp_gsc_third_parties_m_date_created',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_date_modified . " AS 'lbl_azp_gsc_third_parties_m_date_modified',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_description . " AS 'lbl_azp_gsc_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_address . " AS 'lbl_azp_gsc_third_parties_t_address',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_business_name . " AS 'lbl_azp_gsc_third_parties_t_business_name',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_contact . " AS 'lbl_azp_gsc_third_parties_t_contact',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_email . " AS 'lbl_azp_gsc_third_parties_t_email',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_password . " AS 'lbl_azp_gsc_third_parties_t_password',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_phone_fixed . " AS 'lbl_azp_gsc_third_parties_t_phone_fixed',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_phone_movil . " AS 'lbl_azp_gsc_third_parties_t_phone_movil',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_city . " AS 'lbl_azp_gsc_third_parties_v_id_azp_gsc_city',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_department . " AS 'lbl_azp_gsc_third_parties_v_id_azp_gsc_department',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_type_third . " AS 'lbl_azp_gsc_third_parties_v_id_azp_gsc_type_third'
				FROM " . t_azp_gsc_third_parties . " tc_azp_gsc_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_deleted . " = '1'
					AND tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " IN (" . $var_id . ")
				ORDER BY tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_confirm_2_intern() {
			if (isset($_GET['field_id'])) { if ($_GET['field_id'] != '') { $var_id = $_GET['field_id']; } else { $var_id = "''"; } } else { $var_id = "''"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_id_azp_gsc_email_copy . " AS 'lbl_azp_gsc_email_copy_id_azp_gsc_email_copy',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_date_created . " AS 'lbl_azp_gsc_email_copy_m_date_created',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_date_modified . " AS 'lbl_azp_gsc_email_copy_m_date_modified',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_description . " AS 'lbl_azp_gsc_email_copy_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_t_email . " AS 'lbl_azp_gsc_email_copy_t_email',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_t_names . " AS 'lbl_azp_gsc_email_copy_t_names',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_t_surnames . " AS 'lbl_azp_gsc_email_copy_t_surnames'
				FROM " . t_azp_gsc_email_copy . " tc_azp_gsc_email_copy
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_deleted . " = '1'
					AND tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_id_azp_gsc_email_copy . " IN (" . $var_id . ")
				ORDER BY tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_id_azp_gsc_email_copy . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_confirm_3_main() {
			if (isset($_GET['field_id'])) { if ($_GET['field_id'] != '') { $var_id = $_GET['field_id']; } else { $var_id = "''"; } } else { $var_id = "''"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " AS 'lbl_azp_gsc_third_parties_id_azp_gsc_third_parties',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_date_created . " AS 'lbl_azp_gsc_third_parties_m_date_created',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_date_modified . " AS 'lbl_azp_gsc_third_parties_m_date_modified',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_description . " AS 'lbl_azp_gsc_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_address . " AS 'lbl_azp_gsc_third_parties_t_address',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_business_name . " AS 'lbl_azp_gsc_third_parties_t_business_name',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_contact . " AS 'lbl_azp_gsc_third_parties_t_contact',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_email . " AS 'lbl_azp_gsc_third_parties_t_email',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_password . " AS 'lbl_azp_gsc_third_parties_t_password',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_phone_fixed . " AS 'lbl_azp_gsc_third_parties_t_phone_fixed',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_phone_movil . " AS 'lbl_azp_gsc_third_parties_t_phone_movil',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_city . " AS 'lbl_azp_gsc_third_parties_v_id_azp_gsc_city',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_department . " AS 'lbl_azp_gsc_third_parties_v_id_azp_gsc_department',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_type_third . " AS 'lbl_azp_gsc_third_parties_v_id_azp_gsc_type_third'
				FROM " . t_azp_gsc_third_parties . " tc_azp_gsc_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_deleted . " = '1'
					AND tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " IN (" . $var_id . ")
				ORDER BY tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_confirm_3_intern() {
			if (isset($_GET['field_id'])) { if ($_GET['field_id'] != '') { $var_id = $_GET['field_id']; } else { $var_id = "''"; } } else { $var_id = "''"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_id_azp_gsc_email_copy . " AS 'lbl_azp_gsc_email_copy_id_azp_gsc_email_copy',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_date_created . " AS 'lbl_azp_gsc_email_copy_m_date_created',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_date_modified . " AS 'lbl_azp_gsc_email_copy_m_date_modified',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_description . " AS 'lbl_azp_gsc_email_copy_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_t_email . " AS 'lbl_azp_gsc_email_copy_t_email',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_t_names . " AS 'lbl_azp_gsc_email_copy_t_names',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_t_surnames . " AS 'lbl_azp_gsc_email_copy_t_surnames'
				FROM " . t_azp_gsc_email_copy . " tc_azp_gsc_email_copy
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_deleted . " = '1'
					AND tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_id_azp_gsc_email_copy . " IN (" . $var_id . ")
				ORDER BY tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_id_azp_gsc_email_copy . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_confirm_4_main() {
			if (isset($_GET['field_id'])) { if ($_GET['field_id'] != '') { $var_id = $_GET['field_id']; } else { $var_id = "''"; } } else { $var_id = "''"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " AS 'lbl_azp_gsc_client_id_azp_gsc_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_client." . d_azp_gsc_client_m_date_created . " AS 'lbl_azp_gsc_client_m_date_created',
					tc_azp_gsc_client." . d_azp_gsc_client_m_date_modified . " AS 'lbl_azp_gsc_client_m_date_modified',
					tc_azp_gsc_client." . d_azp_gsc_client_m_description . " AS 'lbl_azp_gsc_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_code . " AS 'lbl_azp_gsc_client_t_code',
					tc_azp_gsc_client." . d_azp_gsc_client_t_email . " AS 'lbl_azp_gsc_client_t_email',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_password . " AS 'lbl_azp_gsc_client_t_password',
					tc_azp_gsc_client." . d_azp_gsc_client_t_person . " AS 'lbl_azp_gsc_client_t_person',
					tc_azp_gsc_client." . d_azp_gsc_client_t_position . " AS 'lbl_azp_gsc_client_t_position'
				FROM " . t_azp_gsc_client . " tc_azp_gsc_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_client." . d_azp_gsc_client_m_deleted . " = '1'
					AND tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " IN (" . $var_id . ")
				ORDER BY tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_confirm_4_copy() {
			if (isset($_GET['field_id'])) { if ($_GET['field_id'] != '') { $var_id = $_GET['field_id']; } else { $var_id = "''"; } } else { $var_id = "''"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " AS 'lbl_azp_gsc_client_id_azp_gsc_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_client." . d_azp_gsc_client_m_date_created . " AS 'lbl_azp_gsc_client_m_date_created',
					tc_azp_gsc_client." . d_azp_gsc_client_m_date_modified . " AS 'lbl_azp_gsc_client_m_date_modified',
					tc_azp_gsc_client." . d_azp_gsc_client_m_description . " AS 'lbl_azp_gsc_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_code . " AS 'lbl_azp_gsc_client_t_code',
					tc_azp_gsc_client." . d_azp_gsc_client_t_email . " AS 'lbl_azp_gsc_client_t_email',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_password . " AS 'lbl_azp_gsc_client_t_password',
					tc_azp_gsc_client." . d_azp_gsc_client_t_person . " AS 'lbl_azp_gsc_client_t_person',
					tc_azp_gsc_client." . d_azp_gsc_client_t_position . " AS 'lbl_azp_gsc_client_t_position'
				FROM " . t_azp_gsc_client . " tc_azp_gsc_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_client." . d_azp_gsc_client_m_deleted . " = '1'
					AND tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " IN (" . $var_id . ")
				ORDER BY tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_confirm_4_intern() {
			if (isset($_GET['field_id'])) { if ($_GET['field_id'] != '') { $var_id = $_GET['field_id']; } else { $var_id = "''"; } } else { $var_id = "''"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_id_azp_gsc_email_copy . " AS 'lbl_azp_gsc_email_copy_id_azp_gsc_email_copy',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_date_created . " AS 'lbl_azp_gsc_email_copy_m_date_created',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_date_modified . " AS 'lbl_azp_gsc_email_copy_m_date_modified',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_description . " AS 'lbl_azp_gsc_email_copy_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_t_email . " AS 'lbl_azp_gsc_email_copy_t_email',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_t_names . " AS 'lbl_azp_gsc_email_copy_t_names',
					tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_t_surnames . " AS 'lbl_azp_gsc_email_copy_t_surnames'
				FROM " . t_azp_gsc_email_copy . " tc_azp_gsc_email_copy
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_m_deleted . " = '1'
					AND tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_id_azp_gsc_email_copy . " IN (" . $var_id . ")
				ORDER BY tc_azp_gsc_email_copy." . d_azp_gsc_email_copy_id_azp_gsc_email_copy . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_data_client() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " AS 'lbl_azp_gsc_client_id_azp_gsc_client',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
				FROM " . t_azp_gsc_update . " tc_azp_gsc_update
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_deleted . " = '1'
					AND tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				GROUP BY tc_azp_gsc_client." . d_azp_gsc_client_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_client_bank() {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->select('*', t_azp_gsc_client, d_azp_gsc_client_id_azp_gsc_client . " = '" . $this->id . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					$var_code = $value[d_azp_gsc_client_t_code];
				endforeach;
			} else { $var_code = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " AS 'lbl_azp_gsc_client_id_azp_gsc_client',
					tc_azp_gsc_client." . d_azp_gsc_client_m_by_created . " AS 'lbl_azp_gsc_client_m_by_created',
					tc_azp_gsc_client." . d_azp_gsc_client_m_by_modified . " AS 'lbl_azp_gsc_client_m_by_modified',
					tc_azp_gsc_client." . d_azp_gsc_client_m_date_created . " AS 'lbl_azp_gsc_client_m_date_created',
					tc_azp_gsc_client." . d_azp_gsc_client_m_date_modified . " AS 'lbl_azp_gsc_client_m_date_modified',
					tc_azp_gsc_client." . d_azp_gsc_client_m_description . " AS 'lbl_azp_gsc_client_m_description',
					tc_azp_gsc_client." . d_azp_gsc_client_m_level . " AS 'lbl_azp_gsc_client_m_level',
					tc_azp_gsc_client." . d_azp_gsc_client_m_status . " AS 'lbl_azp_gsc_client_m_status',
					tc_azp_gsc_client." . d_azp_gsc_client_t_code . " AS 'lbl_azp_gsc_client_t_code',
					tc_azp_gsc_client." . d_azp_gsc_client_t_email . " AS 'lbl_azp_gsc_client_t_email',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_password . " AS 'lbl_azp_gsc_client_t_password',
					tc_azp_gsc_client." . d_azp_gsc_client_t_person . " AS 'lbl_azp_gsc_client_t_person',
					tc_azp_gsc_client." . d_azp_gsc_client_t_position . " AS 'lbl_azp_gsc_client_t_position'
				FROM " . t_azp_gsc_client . " tc_azp_gsc_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_client." . d_azp_gsc_client_t_code . " = '" . $var_code . "'
					AND tc_azp_gsc_client." . d_azp_gsc_client_m_deleted . " = '1'
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
					AND " . d_azp_user_v_id_azp_application . " = '3'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_alert_client() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(lbl_result) AS 'lbl_count' FROM (
					SELECT COUNT(*) AS 'lbl_result', tc_azp_gsc_client.`t_name`
					FROM azp_gsc_update tc_azp_gsc_update
					INNER JOIN azp_gsc_client tc_azp_gsc_client
						ON tc_azp_gsc_update.v_id_azp_gsc_client
							= tc_azp_gsc_client.id_azp_gsc_client
					WHERE tc_azp_gsc_update.v_id_azp_gsc_client != ''
						AND tc_azp_gsc_update.m_by_created = '" . $_SESSION[SESS_APP_ID] . "'
					GROUP BY tc_azp_gsc_client.t_name
				) AS lbl_from;
			");
		}

		/*SELECT COUNT(lbl_result) AS 'lbl_count' FROM (
					SELECT COUNT(*) AS 'lbl_result'
					FROM azp_gsc_update
					WHERE t_number_request != ''
					GROUP BY t_number_request
				) AS lbl_from;*/
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_alert_request() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(lbl_result) AS 'lbl_count' FROM (
					SELECT COUNT(*) AS 'lbl_result', tc_azp_gsc_client.`t_name`
					FROM azp_gsc_update tc_azp_gsc_update
					INNER JOIN azp_gsc_client tc_azp_gsc_client
						ON tc_azp_gsc_update.v_id_azp_gsc_client
							= tc_azp_gsc_client.id_azp_gsc_client
					WHERE tc_azp_gsc_update.t_number_request != ''
						AND tc_azp_gsc_update.m_by_created = '" . $_SESSION[SESS_APP_ID] . "'
					GROUP BY tc_azp_gsc_client.t_name, tc_azp_gsc_update.t_number_request
				) AS lbl_from;
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_file_size() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT SUM(tc_azp_gsc_capture." . d_azp_gsc_capture_t_size . ") AS 'lbl_azp_gsc_capture_t_size'
				FROM " . t_azp_gsc_update . " tc_azp_gsc_update
				INNER JOIN " . t_azp_gsc_capture . " tc_azp_gsc_capture
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_request . "
						= tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
				WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_shipping_number() {
			# Seleccionar los registros de la tabla
			//return $this->db->select("MAX(" . d_azp_gsc_request_t_shipping_number . ") AS 'lbl_max'", t_azp_gsc_request, d_azp_gsc_request_m_deleted . " = '1'");
			return $this->db->query("
				SELECT MAX(tc_azp_gsc_request.t_shipping_number) AS lbl_max
				FROM azp_gsc_request tc_azp_gsc_request
				INNER JOIN azp_gsc_update tc_azp_gsc_update
					ON tc_azp_gsc_request.`v_id_azp_gsc_client` = tc_azp_gsc_update.`v_id_azp_gsc_client`
				WHERE tc_azp_gsc_request.`t_number_request` = tc_azp_gsc_update.`t_number_request`
					AND tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_supplier() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_import." . d_azp_gsc_import_id_azp_gsc_import . " AS 'lbl_azp_gsc_import_id_azp_gsc_import',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_import." . d_azp_gsc_import_m_date_created . " AS 'lbl_azp_gsc_import_m_date_created',
					tc_azp_gsc_import." . d_azp_gsc_import_m_date_modified . " AS 'lbl_azp_gsc_import_m_date_modified',
					tc_azp_gsc_import." . d_azp_gsc_import_m_description . " AS 'lbl_azp_gsc_import_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_import." . d_azp_gsc_import_s_capture . " AS 'lbl_azp_gsc_import_s_capture',
					tc_azp_gsc_import." . d_azp_gsc_import_s_data . " AS 'lbl_azp_gsc_import_s_data',
					tc_azp_gsc_import." . d_azp_gsc_import_s_date . " AS 'lbl_azp_gsc_import_s_date',
					tc_azp_gsc_import." . d_azp_gsc_import_s_existing . " AS 'lbl_azp_gsc_import_s_existing',
					tc_azp_gsc_import." . d_azp_gsc_import_s_validate . " AS 'lbl_azp_gsc_import_s_validate',
					tc_azp_gsc_import." . d_azp_gsc_import_s_web_service . " AS 'lbl_azp_gsc_import_s_web_service',
					tc_azp_gsc_import." . d_azp_gsc_import_t_city . " AS 'lbl_azp_gsc_import_t_city',
					tc_azp_gsc_import." . d_azp_gsc_import_t_date_associate . " AS 'lbl_azp_gsc_import_t_date_associate',
					tc_azp_gsc_import." . d_azp_gsc_import_t_death_date . " AS 'lbl_azp_gsc_import_t_death_date',
					tc_azp_gsc_import." . d_azp_gsc_import_t_full_name . " AS 'lbl_azp_gsc_import_t_full_name',
					tc_azp_gsc_import." . d_azp_gsc_import_t_id_supplier . " AS 'lbl_azp_gsc_import_t_id_supplier',
					tc_azp_gsc_import." . d_azp_gsc_import_t_identification . " AS 'lbl_azp_gsc_import_t_identification',
					tc_azp_gsc_import." . d_azp_gsc_import_t_notary . " AS 'lbl_azp_gsc_import_t_notary',
					tc_azp_gsc_import." . d_azp_gsc_import_t_number_consecutive . " AS 'lbl_azp_gsc_import_t_number_consecutive',
					tc_azp_gsc_import." . d_azp_gsc_import_t_number_obligation . " AS 'lbl_azp_gsc_import_t_number_obligation',
					tc_azp_gsc_import." . d_azp_gsc_import_t_number_request . " AS 'lbl_azp_gsc_import_t_number_request',
					tc_azp_gsc_import." . d_azp_gsc_import_t_observation . " AS 'lbl_azp_gsc_import_t_observation',
					tc_azp_gsc_import." . d_azp_gsc_import_t_observation_outer . " AS 'lbl_azp_gsc_import_t_observation_outer',
					tc_azp_gsc_import." . d_azp_gsc_import_t_reported_bank . " AS 'lbl_azp_gsc_import_t_reported_bank',
					tc_azp_gsc_import." . d_azp_gsc_import_t_request_by . " AS 'lbl_azp_gsc_import_t_request_by',
					tc_azp_gsc_import." . d_azp_gsc_import_t_request_date . " AS 'lbl_azp_gsc_import_t_request_date',
					tc_azp_gsc_import." . d_azp_gsc_import_t_request_state . " AS 'lbl_azp_gsc_import_t_request_state',
					tc_azp_gsc_import." . d_azp_gsc_import_t_serial . " AS 'lbl_azp_gsc_import_t_serial',
					tc_azp_gsc_import." . d_azp_gsc_import_t_shipping_date . " AS 'lbl_azp_gsc_import_t_shipping_date',
					tc_azp_gsc_import." . d_azp_gsc_import_t_shipping_number . " AS 'lbl_azp_gsc_import_t_shipping_number',
					tc_azp_gsc_import." . d_azp_gsc_import_t_supplier_request_date . " AS 'lbl_azp_gsc_import_t_supplier_request_date',
					tc_azp_gsc_import." . d_azp_gsc_import_t_supplier_request_number . " AS 'lbl_azp_gsc_import_t_supplier_request_number',
					tc_azp_gsc_import." . d_azp_gsc_import_v_id_azp_gsc_causal . " AS 'lbl_azp_gsc_import_v_id_azp_gsc_causal',
					tc_azp_gsc_import." . d_azp_gsc_import_v_id_azp_gsc_client . " AS 'lbl_azp_gsc_import_v_id_azp_gsc_client',
					tc_azp_gsc_import." . d_azp_gsc_import_v_id_azp_gsc_expiration . " AS 'lbl_azp_gsc_import_v_id_azp_gsc_expiration',
					tc_azp_gsc_import." . d_azp_gsc_import_v_id_azp_gsc_phase . " AS 'lbl_azp_gsc_import_v_id_azp_gsc_phase',
					tc_azp_gsc_import." . d_azp_gsc_import_v_id_azp_gsc_state . " AS 'lbl_azp_gsc_import_v_id_azp_gsc_state'
				FROM " . t_azp_gsc_import . " tc_azp_gsc_import
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_import." . d_azp_gsc_import_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_import." . d_azp_gsc_import_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_import." . d_azp_gsc_import_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_import." . d_azp_gsc_import_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_import." . d_azp_gsc_import_m_deleted . " = '1'
					AND tc_azp_gsc_import." . d_azp_gsc_import_s_existing . " = 'No'
				ORDER BY tc_azp_gsc_import." . d_azp_gsc_import_id_azp_gsc_import . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_client_count() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_client . " tc_azp_gsc_client
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " = '" . $this->id . "'
					AND tc_azp_gsc_client." . d_azp_gsc_client_m_deleted . " = '1'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_data_bank() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_password . " AS 'lbl_azp_gsc_client_t_password',
					tc_azp_gsc_client." . d_azp_gsc_client_t_person . " AS 'lbl_azp_gsc_client_t_person',
					tc_azp_gsc_client." . d_azp_gsc_client_t_position . " AS 'lbl_azp_gsc_client_t_position'
				FROM " . t_azp_gsc_update . " tc_azp_gsc_update
				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				GROUP BY tc_azp_gsc_client." . d_azp_gsc_client_t_name . "
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_third_password(string $var_id) {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_third_parties, d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $var_id . "'");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_by_create() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql): $var_gsc_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach;
				# Control para la validacion de los clientes relacionados
				if ($var_role == 9) { $var_code = "AND tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . " = '" . $var_gsc_client . "'"; } else { $var_code = ''; }
			} else { $var_code = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_created . " AS 'lbl_azp_gsc_request_m_date_created',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_modified . " AS 'lbl_azp_gsc_request_m_date_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_description . " AS 'lbl_azp_gsc_request_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_request." . d_azp_gsc_request_s_capture . " AS 'lbl_azp_gsc_request_s_capture',
					tc_azp_gsc_request." . d_azp_gsc_request_s_data . " AS 'lbl_azp_gsc_request_s_data',
					tc_azp_gsc_request." . d_azp_gsc_request_s_existing . " AS 'lbl_azp_gsc_request_s_existing',
					tc_azp_gsc_request." . d_azp_gsc_request_s_validate . " AS 'lbl_azp_gsc_request_s_validate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_date_associate . " AS 'lbl_azp_gsc_request_t_date_associate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_death_date . " AS 'lbl_azp_gsc_request_t_death_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_obligation . " AS 'lbl_azp_gsc_request_t_number_obligation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation_outer . " AS 'lbl_azp_gsc_request_t_observation_outer',
					tc_azp_gsc_request." . d_azp_gsc_request_t_reported_bank . " AS 'lbl_azp_gsc_request_t_reported_bank',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_by . " AS 'lbl_azp_gsc_request_t_request_by',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " AS 'lbl_azp_gsc_request_t_request_state',
					REPLACE(tc_azp_gsc_request." . d_azp_gsc_request_t_serial . ", '_', '') AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_date . " AS 'lbl_azp_gsc_request_t_shipping_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_number . " AS 'lbl_azp_gsc_request_t_shipping_number',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_date . " AS 'lbl_azp_gsc_request_t_supplier_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_number . " AS 'lbl_azp_gsc_request_t_supplier_request_number',

					tc_azp_gsc_causal." . d_azp_gsc_causal_t_name . " AS 'lbl_azp_gsc_causal_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_expiration." . d_azp_gsc_expiration_t_name . " AS 'lbl_azp_gsc_expiration_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_name . " AS 'lbl_azp_gsc_phase_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_percentage . " AS 'lbl_azp_gsc_phase_t_percentage',
					tc_azp_gsc_state." . d_azp_gsc_state_t_name . " AS 'lbl_azp_gsc_state_t_name',

					tc_azp_pallet_color." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_t_name',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " AS 'lbl_azp_gsc_capture_t_document',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_document . " AS 'lbl_azp_gsc_consignment_s_file_document'

				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_causal ." tc_azp_gsc_causal
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_causal . "
						= tc_azp_gsc_causal." . d_azp_gsc_causal_id_azp_gsc_causal . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_expiration ." tc_azp_gsc_expiration
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_expiration . "
						= tc_azp_gsc_expiration." . d_azp_gsc_expiration_id_azp_gsc_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color ." tc_azp_pallet_color
					ON tc_azp_gsc_phase." . d_azp_gsc_phase_v_id_azp_pallet_color . "
						= tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_state ." tc_azp_gsc_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_state . "
						= tc_azp_gsc_state." . d_azp_gsc_state_id_azp_gsc_state . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_capture ." tc_azp_gsc_capture
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_consignment ." tc_azp_gsc_consignment
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '1' " . $var_code . "
				GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " ASC
				ORDER BY tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_gsc_request." . d_azs_gsc_request_id_azs_gsc_request . " AS 'lbl_azs_gsc_request_id_azs_gsc_request',
					tc_azs_gsc_request." . d_azs_gsc_request_m_date_modified . " AS 'lbl_azs_gsc_request_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_gsc_request." . d_azs_gsc_request_m_date_created . " AS 'lbl_azs_gsc_request_m_date_created',
					tc_azs_gsc_request." . d_azs_gsc_request_m_date_modified . " AS 'lbl_azs_gsc_request_m_date_modified',
					tc_azs_gsc_request." . d_azs_gsc_request_m_description . " AS 'lbl_azs_gsc_request_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_gsc_request." . d_azs_gsc_request_s_capture . " AS 'lbl_azs_gsc_request_s_capture',
					tc_azs_gsc_request." . d_azs_gsc_request_s_data . " AS 'lbl_azs_gsc_request_s_data',
					tc_azs_gsc_request." . d_azs_gsc_request_s_existing . " AS 'lbl_azs_gsc_request_s_existing',
					tc_azs_gsc_request." . d_azs_gsc_request_s_validate . " AS 'lbl_azs_gsc_request_s_validate',
					tc_azs_gsc_request." . d_azs_gsc_request_v_id_azp_gsc_request . " AS 'lbl_azs_gsc_request_v_id_azp_gsc_request'
				FROM " . t_azs_gsc_request . " tc_azs_gsc_request
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_gsc_request." . d_azs_gsc_request_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_gsc_request." . d_azs_gsc_request_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_gsc_request." . d_azs_gsc_request_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_gsc_request." . d_azs_gsc_request_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_gsc_request." . d_azs_gsc_request_v_id_azp_gsc_request . " = '" . $this->id . "'
				ORDER BY tc_azs_gsc_request." . d_azs_gsc_request_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_data_prex() {
			# Control para la validacion de datos get
			if (isset($_GET['field_em_prex_id'])) {
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_third_parties, d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $_GET['field_em_prex_id'] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_business_name = $key_sql[d_azp_gsc_third_parties_t_business_name];
					endforeach;
				} else { $var_business_name = ''; }
				# Seleccionar los registros de la tabla
				return $this->db->query("
					-- ---------------------------------------------------------------
					SELECT
						tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " AS 'lbl_azp_gsc_third_parties_id_azp_gsc_third_parties',
						tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_email . " AS 'lbl_azp_gsc_third_parties_t_email'
					FROM " . t_azp_gsc_third_parties . " tc_azp_gsc_third_parties
					-- ---------------------------------------------------------------
					WHERE tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_deleted . " = '1'
						AND tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_business_name . " = '" . $var_business_name . "'
				");
			}
			# Control para la validacion de datos get
			if (isset($_GET['field_em_prex_business_name'])) {
				# Seleccionar los registros de la tabla
				return $this->db->query("
					-- ---------------------------------------------------------------
					SELECT " . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " AS 'lbl_azp_gsc_third_parties_id_azp_gsc_third_parties',
						" . d_azp_gsc_third_parties_t_business_name . " AS 'lbl_azp_gsc_third_parties_t_business_name',
						" . d_azp_gsc_third_parties_t_password . " AS 'lbl_azp_gsc_third_parties_t_password'
					FROM " . t_azp_gsc_third_parties . "
					-- ---------------------------------------------------------------
					WHERE " . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $_GET['field_em_prex_business_name'] . "'
						AND " . d_azp_gsc_consignment_m_deleted . " = '1'
						AND " . d_azp_gsc_consignment_m_status . " = '1'
				");
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_data_sexic() {
			# Control para la validacion de datos get
			if (isset($_GET['field_em_sexic_id'])) {
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_third_parties, d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $_GET['field_em_sexic_id'] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_business_name = $key_sql[d_azp_gsc_third_parties_t_business_name];
					endforeach;
				} else { $var_business_name = ''; }
				# Seleccionar los registros de la tabla
				return $this->db->query("
					-- ---------------------------------------------------------------
					SELECT
						tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " AS 'lbl_azp_gsc_third_parties_id_azp_gsc_third_parties',
						tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_email . " AS 'lbl_azp_gsc_third_parties_t_email'
					FROM " . t_azp_gsc_third_parties . " tc_azp_gsc_third_parties
					-- ---------------------------------------------------------------
					WHERE tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_deleted . " = '1'
						AND tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_business_name . " = '" . $var_business_name . "'
				");
			}
			# Control para la validacion de datos get
			if (isset($_GET['field_em_sexic_business_name'])) {
				# Seleccionar los registros de la tabla
				return $this->db->query("
					-- ---------------------------------------------------------------
					SELECT " . d_azp_gsc_third_parties_t_business_name . " AS 'lbl_azp_gsc_third_parties_t_business_name'
					FROM " . t_azp_gsc_third_parties . "
					-- ---------------------------------------------------------------
					WHERE " . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $_GET['field_em_sexic_business_name'] . "'
						AND " . d_azp_gsc_consignment_m_deleted . " = '1'
						AND " . d_azp_gsc_consignment_m_status . " = '1'
				");
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_data_sexpc() {
			# Control para la validacion de datos get
			if (isset($_GET['field_em_sexpc_id'])) {
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_third_parties, d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $_GET['field_em_sexpc_id'] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_business_name = $key_sql[d_azp_gsc_third_parties_t_business_name];
					endforeach;
				} else { $var_business_name = ''; }
				# Seleccionar los registros de la tabla
				return $this->db->query("
					-- ---------------------------------------------------------------
					SELECT
						tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " AS 'lbl_azp_gsc_third_parties_id_azp_gsc_third_parties',
						tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_email . " AS 'lbl_azp_gsc_third_parties_t_email'
					FROM " . t_azp_gsc_third_parties . " tc_azp_gsc_third_parties
					-- ---------------------------------------------------------------
					WHERE tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_deleted . " = '1'
						AND tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_business_name . " = '" . $var_business_name . "'
				");
			}
			# Control para la validacion de datos get
			if (isset($_GET['field_em_sexpc_business_name'])) {
				# Seleccionar los registros de la tabla
				return $this->db->query("
					-- ---------------------------------------------------------------
					SELECT " . d_azp_gsc_third_parties_t_business_name . " AS 'lbl_azp_gsc_third_parties_t_business_name'
					FROM " . t_azp_gsc_third_parties . "
					-- ---------------------------------------------------------------
					WHERE " . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $_GET['field_em_sexpc_business_name'] . "'
						AND " . d_azp_gsc_consignment_m_deleted . " = '1'
						AND " . d_azp_gsc_consignment_m_status . " = '1'
				");
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_data_rc() {
			# Control para la validacion de datos get
			if (isset($_GET['field_em_rc_id'])) {
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_third_parties, d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $_GET['field_em_rc_id'] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_business_name = $key_sql[d_azp_gsc_third_parties_t_business_name];
					endforeach;
				} else { $var_business_name = ''; }
				# Seleccionar los registros de la tabla
				return $this->db->query("
					-- ---------------------------------------------------------------
					SELECT
						tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " AS 'lbl_azp_gsc_third_parties_id_azp_gsc_third_parties',
						tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_email . " AS 'lbl_azp_gsc_third_parties_t_email'
					FROM " . t_azp_gsc_third_parties . " tc_azp_gsc_third_parties
					-- ---------------------------------------------------------------
					WHERE tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_deleted . " = '1'
						AND tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_business_name . " = '" . $var_business_name . "'
				");
			}
			# Control para la validacion de datos get
			if (isset($_GET['field_em_rc_business_name'])) {
				# Seleccionar los registros de la tabla
				return $this->db->query("
					-- ---------------------------------------------------------------
					SELECT " . d_azp_gsc_third_parties_t_business_name . " AS 'lbl_azp_gsc_third_parties_t_business_name'
					FROM " . t_azp_gsc_third_parties . "
					-- ---------------------------------------------------------------
					WHERE " . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $_GET['field_em_rc_business_name'] . "'
						AND " . d_azp_gsc_consignment_m_deleted . " = '1'
						AND " . d_azp_gsc_consignment_m_status . " = '1'
				");
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_date_expiration() {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_id_azp_gsc_request',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_modified . " AS 'lbl_m_date_modified',
					tc_azp_gsc_alert_client." . d_azp_gsc_alert_t_next_time_d . " AS 'lbl_t_next_time_d',
					tc_azp_gsc_alert_client." . d_azp_gsc_alert_t_next_time_h . " AS 'lbl_t_next_time_h',
					tc_azp_gsc_alert_client." . d_azp_gsc_alert_t_next_time_m . " AS 'lbl_t_next_time_m',
					tc_azp_gsc_alert_client." . d_azp_gsc_alert_t_next_time_s . " AS 'lbl_t_next_time_s',
					tc_azp_gsc_alert_state." . d_azp_gsc_alert_t_time_expired_d . " AS 'lbl_t_time_expired_d',
					tc_azp_gsc_alert_state." . d_azp_gsc_alert_t_time_expired_h . " AS 'lbl_t_time_expired_h',
					tc_azp_gsc_alert_state." . d_azp_gsc_alert_t_time_expired_m . " AS 'lbl_t_time_expired_m',
					tc_azp_gsc_alert_state." . d_azp_gsc_alert_t_time_expired_s . " AS 'lbl_t_time_expired_s'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_alert ." tc_azp_gsc_alert_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
						= tc_azp_gsc_alert_client." . d_azp_gsc_alert_v_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_alert ." tc_azp_gsc_alert_state
					ON tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
						= tc_azp_gsc_alert_state." . d_azp_gsc_alert_v_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '1'
				GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " ASC
				ORDER BY tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " ASC
			");
			# Validar si la consulta es verdadera
			if (false != $var_sql) {
				# Recorrer las filas de la consulta generada
				foreach ($var_sql as $key_sql):
					# Resultado del id para actualizar
					$key_sql['lbl_id_azp_gsc_request'];
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
									$var_array = array(d_azp_gsc_request_v_id_azp_gsc_expiration => '3',);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_gsc_request, $var_array,
										d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql['lbl_id_azp_gsc_request'] . "' AND " .
										d_azp_gsc_request_v_id_azp_gsc_expiration . " != '3'"
									);
								} else {
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(d_azp_gsc_request_v_id_azp_gsc_expiration => '2',);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_gsc_request, $var_array,
										d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql['lbl_id_azp_gsc_request'] . "' AND " .
										d_azp_gsc_request_v_id_azp_gsc_expiration . " != '2'"
									);
								}
							} else {
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_gsc_request_v_id_azp_gsc_expiration => '1',);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_gsc_request, $var_array,
									d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql['lbl_id_azp_gsc_request'] . "' AND " .
									d_azp_gsc_request_v_id_azp_gsc_expiration . " != '1'"
								);
							}
						}
					}
				endforeach;
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_created . " AS 'lbl_azp_gsc_request_m_date_created',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_modified . " AS 'lbl_azp_gsc_request_m_date_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_description . " AS 'lbl_azp_gsc_request_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_request." . d_azp_gsc_request_s_capture . " AS 'lbl_azp_gsc_request_s_capture',
					tc_azp_gsc_request." . d_azp_gsc_request_s_data . " AS 'lbl_azp_gsc_request_s_data',
					tc_azp_gsc_request." . d_azp_gsc_request_s_existing . " AS 'lbl_azp_gsc_request_s_existing',
					tc_azp_gsc_request." . d_azp_gsc_request_s_validate . " AS 'lbl_azp_gsc_request_s_validate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_date_associate . " AS 'lbl_azp_gsc_request_t_date_associate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_death_date . " AS 'lbl_azp_gsc_request_t_death_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_obligation . " AS 'lbl_azp_gsc_request_t_number_obligation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation_outer . " AS 'lbl_azp_gsc_request_t_observation_outer',
					tc_azp_gsc_request." . d_azp_gsc_request_t_reported_bank . " AS 'lbl_azp_gsc_request_t_reported_bank',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_by . " AS 'lbl_azp_gsc_request_t_request_by',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " AS 'lbl_azp_gsc_request_t_request_state',
					REPLACE(tc_azp_gsc_request." . d_azp_gsc_request_t_serial . ", '_', '') AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_date . " AS 'lbl_azp_gsc_request_t_shipping_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_number . " AS 'lbl_azp_gsc_request_t_shipping_number',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_date . " AS 'lbl_azp_gsc_request_t_supplier_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_number . " AS 'lbl_azp_gsc_request_t_supplier_request_number',

					tc_azp_gsc_causal." . d_azp_gsc_causal_t_name . " AS 'lbl_azp_gsc_causal_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_expiration." . d_azp_gsc_expiration_t_name . " AS 'lbl_azp_gsc_expiration_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_name . " AS 'lbl_azp_gsc_phase_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_percentage . " AS 'lbl_azp_gsc_phase_t_percentage',
					tc_azp_gsc_state." . d_azp_gsc_state_t_name . " AS 'lbl_azp_gsc_state_t_name',

					tc_azp_pallet_color." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_t_name',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " AS 'lbl_azp_gsc_capture_t_document',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_document . " AS 'lbl_azp_gsc_consignment_s_file_document'

				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_causal ." tc_azp_gsc_causal
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_causal . "
						= tc_azp_gsc_causal." . d_azp_gsc_causal_id_azp_gsc_causal . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_expiration ." tc_azp_gsc_expiration
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_expiration . "
						= tc_azp_gsc_expiration." . d_azp_gsc_expiration_id_azp_gsc_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color ." tc_azp_pallet_color
					ON tc_azp_gsc_phase." . d_azp_gsc_phase_v_id_azp_pallet_color . "
						= tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_state ." tc_azp_gsc_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_state . "
						= tc_azp_gsc_state." . d_azp_gsc_state_id_azp_gsc_state . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_capture ." tc_azp_gsc_capture
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_consignment ." tc_azp_gsc_consignment
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " = '" . $this->id . "'
					AND tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_fcertificate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_capture." . d_azp_gsc_capture_id_azp_gsc_capture . " AS 'lbl_azp_gsc_capture_id_azp_gsc_capture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_date_created . " AS 'lbl_azp_gsc_capture_m_date_created',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_date_modified . " AS 'lbl_azp_gsc_capture_m_date_modified',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_description . " AS 'lbl_azp_gsc_capture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_capture." . d_azp_gsc_capture_s_validate . " AS 'lbl_azp_gsc_capture_s_validate',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_date_load . " AS 'lbl_azp_gsc_capture_t_date_load',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_date_visible . " AS 'lbl_azp_gsc_capture_t_date_visible',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " AS 'lbl_azp_gsc_capture_t_document',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_error . " AS 'lbl_azp_gsc_capture_t_error',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_folder . " AS 'lbl_azp_gsc_capture_t_folder',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_name . " AS 'lbl_azp_gsc_capture_t_name',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_route . " AS 'lbl_azp_gsc_capture_t_route',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_size . " AS 'lbl_azp_gsc_capture_t_size',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_title . " AS 'lbl_azp_gsc_capture_t_title',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_tmp_name . " AS 'lbl_azp_gsc_capture_t_tmp_name',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_type . " AS 'lbl_azp_gsc_capture_t_type',
					tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . " AS 'lbl_azp_gsc_capture_v_id_azp_gsc_request'
				FROM " . t_azp_gsc_capture . " tc_azp_gsc_capture
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_request ." tc_azp_gsc_request
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . " = '" . $this->id . "'
					AND tc_azp_gsc_capture." . d_azp_gsc_capture_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_fconsignment() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " AS 'lbl_azp_gsc_consignment_id_azp_gsc_consignment',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_date_created . " AS 'lbl_azp_gsc_consignment_m_date_created',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_date_modified . " AS 'lbl_azp_gsc_consignment_m_date_modified',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_description . " AS 'lbl_azp_gsc_consignment_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_document . " AS 'lbl_azp_gsc_consignment_s_file_document',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_error . " AS 'lbl_azp_gsc_consignment_s_file_error',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_folder . " AS 'lbl_azp_gsc_consignment_s_file_folder',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_name . " AS 'lbl_azp_gsc_consignment_s_file_name',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_route . " AS 'lbl_azp_gsc_consignment_s_file_route',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_size . " AS 'lbl_azp_gsc_consignment_s_file_size',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_tmp_name . " AS 'lbl_azp_gsc_consignment_s_file_tmp_name',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_type . " AS 'lbl_azp_gsc_consignment_s_file_type',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_account_number . " AS 'lbl_azp_gsc_consignment_t_account_number',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_account_type . " AS 'lbl_azp_gsc_consignment_t_account_type',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_closed_value . " AS 'lbl_azp_gsc_consignment_t_closed_value',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consigned_entity . " AS 'lbl_azp_gsc_consignment_t_consigned_entity',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_code . " AS 'lbl_azp_gsc_consignment_t_consignment_code',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_confirm . " AS 'lbl_azp_gsc_consignment_t_consignment_confirm',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . " AS 'lbl_azp_gsc_consignment_t_consignment_date',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_item . " AS 'lbl_azp_gsc_consignment_t_consignment_item',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_honorary . " AS 'lbl_azp_gsc_consignment_t_honorary',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nit_identification . " AS 'lbl_azp_gsc_consignment_t_nit_identification',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned . " AS 'lbl_azp_gsc_consignment_t_to_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . " AS 'lbl_azp_gsc_consignment_v_id_azp_gsc_request'
				FROM " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_request ." tc_azp_gsc_request
					ON tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . " = '" . $this->id . "'
					AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_gsc_request . "
				WHERE " . d_azp_gsc_request_id_azp_gsc_request . " = '" . $this->id . "'
					AND " . d_azp_gsc_request_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_gsc_request);
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql): $var_gsc_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach;
				# Control para la validacion de los clientes relacionados
				if ($var_role == 9) { $var_code = "AND tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . " = '" . $var_gsc_client . "'"; } else { $var_code = ''; }
			} else { $var_code = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_created . " AS 'lbl_azp_gsc_request_m_date_created',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_modified . " AS 'lbl_azp_gsc_request_m_date_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_description . " AS 'lbl_azp_gsc_request_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_request." . d_azp_gsc_request_s_capture . " AS 'lbl_azp_gsc_request_s_capture',
					tc_azp_gsc_request." . d_azp_gsc_request_s_data . " AS 'lbl_azp_gsc_request_s_data',
					tc_azp_gsc_request." . d_azp_gsc_request_s_existing . " AS 'lbl_azp_gsc_request_s_existing',
					tc_azp_gsc_request." . d_azp_gsc_request_s_validate . " AS 'lbl_azp_gsc_request_s_validate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_date_associate . " AS 'lbl_azp_gsc_request_t_date_associate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_death_date . " AS 'lbl_azp_gsc_request_t_death_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_obligation . " AS 'lbl_azp_gsc_request_t_number_obligation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation_outer . " AS 'lbl_azp_gsc_request_t_observation_outer',
					tc_azp_gsc_request." . d_azp_gsc_request_t_reported_bank . " AS 'lbl_azp_gsc_request_t_reported_bank',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_by . " AS 'lbl_azp_gsc_request_t_request_by',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " AS 'lbl_azp_gsc_request_t_request_state',
					REPLACE(tc_azp_gsc_request." . d_azp_gsc_request_t_serial . ", '_', '') AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_date . " AS 'lbl_azp_gsc_request_t_shipping_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_number . " AS 'lbl_azp_gsc_request_t_shipping_number',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_date . " AS 'lbl_azp_gsc_request_t_supplier_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_number . " AS 'lbl_azp_gsc_request_t_supplier_request_number',

					tc_azp_gsc_causal." . d_azp_gsc_causal_t_name . " AS 'lbl_azp_gsc_causal_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_expiration." . d_azp_gsc_expiration_t_name . " AS 'lbl_azp_gsc_expiration_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_name . " AS 'lbl_azp_gsc_phase_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_percentage . " AS 'lbl_azp_gsc_phase_t_percentage',
					tc_azp_gsc_state." . d_azp_gsc_state_t_name . " AS 'lbl_azp_gsc_state_t_name',

					tc_azp_pallet_color." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_t_name',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " AS 'lbl_azp_gsc_capture_t_document',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_document . " AS 'lbl_azp_gsc_consignment_s_file_document'

				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_causal ." tc_azp_gsc_causal
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_causal . "
						= tc_azp_gsc_causal." . d_azp_gsc_causal_id_azp_gsc_causal . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_expiration ." tc_azp_gsc_expiration
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_expiration . "
						= tc_azp_gsc_expiration." . d_azp_gsc_expiration_id_azp_gsc_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color ." tc_azp_pallet_color
					ON tc_azp_gsc_phase." . d_azp_gsc_phase_v_id_azp_pallet_color . "
						= tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_state ." tc_azp_gsc_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_state . "
						= tc_azp_gsc_state." . d_azp_gsc_state_id_azp_gsc_state . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_capture ." tc_azp_gsc_capture
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_consignment ." tc_azp_gsc_consignment
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '3' " . $var_code . "
				GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " ASC
				ORDER BY tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_email() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_update." . d_azp_gsc_update_id_azp_gsc_update . " AS 'lbl_azp_gsc_update_id_azp_gsc_update',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_update." . d_azp_gsc_update_m_date_created . " AS 'lbl_azp_gsc_update_m_date_created',
					tc_azp_gsc_update." . d_azp_gsc_update_m_date_modified . " AS 'lbl_azp_gsc_update_m_date_modified',
					tc_azp_gsc_update." . d_azp_gsc_update_m_description . " AS 'lbl_azp_gsc_update_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_update." . d_azp_gsc_update_s_capture . " AS 'lbl_azp_gsc_update_s_capture',
					tc_azp_gsc_update." . d_azp_gsc_update_s_data . " AS 'lbl_azp_gsc_update_s_data',
					tc_azp_gsc_update." . d_azp_gsc_update_s_existing . " AS 'lbl_azp_gsc_update_s_existing',
					tc_azp_gsc_update." . d_azp_gsc_update_s_validate . " AS 'lbl_azp_gsc_update_s_validate',
					tc_azp_gsc_update." . d_azp_gsc_update_s_web_service . " AS 'lbl_azp_gsc_update_s_web_service',

					tc_azp_gsc_update." . d_azp_gsc_update_t_city . " AS 'lbl_azp_gsc_update_t_city',
					tc_azp_gsc_update." . d_azp_gsc_update_t_death_date . " AS 'lbl_azp_gsc_update_t_death_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_full_name . " AS 'lbl_azp_gsc_update_t_full_name',
					tc_azp_gsc_update." . d_azp_gsc_update_t_id_supplier . " AS 'lbl_azp_gsc_update_t_id_supplier',
					tc_azp_gsc_update." . d_azp_gsc_update_t_identification . " AS 'lbl_azp_gsc_update_t_identification',
					tc_azp_gsc_update." . d_azp_gsc_update_t_notary . " AS 'lbl_azp_gsc_update_t_notary',
					tc_azp_gsc_update." . d_azp_gsc_update_t_number_obligation . " AS 'lbl_azp_gsc_update_t_number_obligation',
					tc_azp_gsc_update." . d_azp_gsc_update_t_number_request . " AS 'lbl_azp_gsc_update_t_number_request',
					tc_azp_gsc_update." . d_azp_gsc_update_t_observation . " AS 'lbl_azp_gsc_update_t_observation',
					tc_azp_gsc_update." . d_azp_gsc_update_t_observation_outer . " AS 'lbl_azp_gsc_update_t_observation_outer',
					tc_azp_gsc_update." . d_azp_gsc_update_t_reported_bank . " AS 'lbl_azp_gsc_update_t_reported_bank',
					tc_azp_gsc_update." . d_azp_gsc_update_t_request_by . " AS 'lbl_azp_gsc_update_t_request_by',
					tc_azp_gsc_update." . d_azp_gsc_update_t_request_date . " AS 'lbl_azp_gsc_update_t_request_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_request_state . " AS 'lbl_azp_gsc_update_t_request_state',
					tc_azp_gsc_update." . d_azp_gsc_update_t_serial . " AS 'lbl_azp_gsc_update_t_serial',
					tc_azp_gsc_update." . d_azp_gsc_update_t_shipping_date . " AS 'lbl_azp_gsc_update_t_shipping_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_shipping_number . " AS 'lbl_azp_gsc_update_t_shipping_number',
					tc_azp_gsc_update." . d_azp_gsc_update_t_supplier_request_date . " AS 'lbl_azp_gsc_update_t_supplier_request_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_supplier_request_number . " AS 'lbl_azp_gsc_update_t_supplier_request_number',

					tc_azp_gsc_causal." . d_azp_gsc_causal_t_name . " AS 'lbl_azp_gsc_causal_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
				FROM " . t_azp_gsc_update . " tc_azp_gsc_update
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_update." . d_azp_gsc_update_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_update." . d_azp_gsc_update_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_update." . d_azp_gsc_update_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_causal ." tc_azp_gsc_causal
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_causal . "
						= tc_azp_gsc_causal." . d_azp_gsc_causal_id_azp_gsc_causal . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_deleted . " = '1'
					AND tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_file() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_name . " AS 'lbl_azp_gsc_capture_t_name',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " AS 'lbl_azp_gsc_capture_t_document',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_name . " AS 'lbl_azp_gsc_consignment_s_file_name',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_document . " AS 'lbl_azp_gsc_consignment_s_file_document'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_capture ." tc_azp_gsc_capture
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_consignment ." tc_azp_gsc_consignment
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " = '" . $this->id . "'
					AND tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_file_zip_prex() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					-- MAX(" . d_azp_gsc_generated_files_id_azp_gsc_generated_files . ") AS 'lbl_azp_gsc_generated_files_id_azp_gsc_generated_files',
					" . d_azp_gsc_generated_files_id_azp_gsc_generated_files . " AS 'lbl_azp_gsc_generated_files_id_azp_gsc_generated_files',
					" . d_azp_gsc_generated_files_t_encode . " AS 'lbl_azp_gsc_generated_files_t_encode',
					" . d_azp_gsc_generated_files_t_name_file . " AS 'lbl_azp_gsc_generated_files_t_name_file',
					" . d_azp_gsc_generated_files_t_route . " AS 'lbl_azp_gsc_generated_files_t_route'
				FROM " . t_azp_gsc_generated_files . "
				-- ---------------------------------------------------------------
				WHERE " . d_azp_gsc_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND " . d_azp_gsc_generated_files_m_deleted . " = '2'
					AND " . d_azp_gsc_generated_files_m_temp . " = '2'
					AND " . d_azp_gsc_generated_files_t_expiration . " = 'Generado'
					AND " . d_azp_gsc_generated_files_t_module . " = 'Solicitud'
					AND " . d_azp_gsc_generated_files_t_template . " = 'Proveedor'
				-- ORDER BY " . d_azp_gsc_generated_files_id_azp_gsc_generated_files . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_file_zip_rc() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					" . d_azp_gsc_generated_files_t_encode . " AS 'lbl_azp_gsc_generated_files_t_encode',
					" . d_azp_gsc_generated_files_t_name_file . " AS 'lbl_azp_gsc_generated_files_t_name_file',
					" . d_azp_gsc_generated_files_t_route . " AS 'lbl_azp_gsc_generated_files_t_route'
				FROM " . t_azp_gsc_generated_files . "
				-- ---------------------------------------------------------------
				WHERE " . d_azp_gsc_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND " . d_azp_gsc_generated_files_m_deleted . " = '2'
					AND " . d_azp_gsc_generated_files_m_temp . " = '2'
					AND " . d_azp_gsc_generated_files_t_expiration . " = 'Generado'
					AND " . d_azp_gsc_generated_files_t_module . " = 'Solicitud'
					AND " . d_azp_gsc_generated_files_t_template . " = 'Remision'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_logs() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_logs_request." . d_azp_gsc_logs_request_id_azp_gsc_logs_request . " AS 'lbl_azp_gsc_logs_request_id_azp_gsc_logs_request',
					tc_azp_gsc_logs_request." . d_azp_gsc_logs_request_m_date_modified . " AS 'lbl_azp_gsc_logs_request_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_logs_request." . d_azp_gsc_logs_request_m_date_created . " AS 'lbl_azp_gsc_logs_request_m_date_created',
					tc_azp_gsc_logs_request." . d_azp_gsc_logs_request_m_date_modified . " AS 'lbl_azp_gsc_logs_request_m_date_modified',
					tc_azp_gsc_logs_request." . d_azp_gsc_logs_request_m_description . " AS 'lbl_azp_gsc_logs_request_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_logs_request." . d_azp_gsc_logs_request_t_action . " AS 'lbl_azp_gsc_logs_request_t_action',
					tc_azp_gsc_logs_request." . d_azp_gsc_logs_request_v_id_azp_gsc_request . " AS 'lbl_azp_gsc_logs_request_v_id_azp_gsc_request'
				FROM " . t_azp_gsc_logs_request . " tc_azp_gsc_logs_request
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_logs_request." . d_azp_gsc_logs_request_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_logs_request." . d_azp_gsc_logs_request_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_logs_request." . d_azp_gsc_logs_request_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_logs_request." . d_azp_gsc_logs_request_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_logs_request." . d_azp_gsc_logs_request_v_id_azp_gsc_request . " = '" . $this->id . "'
				ORDER BY tc_azp_gsc_logs_request." . d_azp_gsc_logs_request_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_observation_list() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_observation_internal." . d_azp_gsc_observation_internal_id_azp_gsc_observation_internal . " AS 'lbl_azp_gsc_observation_internal_id_azp_gsc_observation_internal',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_observation_internal." . d_azp_gsc_observation_internal_m_date_created . " AS 'lbl_azp_gsc_observation_internal_m_date_created',
					tc_azp_gsc_observation_internal." . d_azp_gsc_observation_internal_m_date_modified . " AS 'lbl_azp_gsc_observation_internal_m_date_modified',
					tc_azp_gsc_observation_internal." . d_azp_gsc_observation_internal_m_description . " AS 'lbl_azp_gsc_observation_internal_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_observation_internal." . d_azp_gsc_observation_internal_t_identification . " AS 'lbl_azp_gsc_observation_internal_t_identification',
					tc_azp_gsc_observation_internal." . d_azp_gsc_observation_internal_t_observation . " AS 'lbl_azp_gsc_observation_internal_t_observation'
				FROM " . t_azp_gsc_observation_internal . " tc_azp_gsc_observation_internal
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_observation_internal." . d_azp_gsc_observation_internal_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_observation_internal." . d_azp_gsc_observation_internal_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_observation_internal." . d_azp_gsc_observation_internal_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_observation_internal." . d_azp_gsc_observation_internal_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_observation_internal." . d_azp_gsc_observation_internal_t_identification . " = '" . $this->id . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql): $var_gsc_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach;
				# Control para la validacion de los clientes relacionados
				if ($var_role == 9) {
					# Asignar nuevos valores a la sentencia sql o query
					$var_code = "AND tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . " = '" . $var_gsc_client . "'";
					# Definicion de valores recibido por get
					if (isset($_GET['since']) && isset($_GET['until'])) {
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_since = "AND (tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " >= '" . $_GET['since'] . "'";
						$var_until = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " <= '" . $_GET['until'] . "')";
						$var_state = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '2'";
					} else {
						$var_state = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '1'";
						$var_since = '';
						$var_until = '';
					}
				} else { $var_code = ''; $var_state = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '1'"; $var_since = ''; $var_until = ''; }
			} else { $var_code = ''; $var_state = ''; $var_since = ''; $var_until = ''; }
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_created . " AS 'lbl_azp_gsc_request_m_date_created',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_modified . " AS 'lbl_azp_gsc_request_m_date_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_description . " AS 'lbl_azp_gsc_request_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_request." . d_azp_gsc_request_s_capture . " AS 'lbl_azp_gsc_request_s_capture',
					tc_azp_gsc_request." . d_azp_gsc_request_s_data . " AS 'lbl_azp_gsc_request_s_data',
					tc_azp_gsc_request." . d_azp_gsc_request_s_existing . " AS 'lbl_azp_gsc_request_s_existing',
					tc_azp_gsc_request." . d_azp_gsc_request_s_validate . " AS 'lbl_azp_gsc_request_s_validate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_date_associate . " AS 'lbl_azp_gsc_request_t_date_associate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_death_date . " AS 'lbl_azp_gsc_request_t_death_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_obligation . " AS 'lbl_azp_gsc_request_t_number_obligation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation_outer . " AS 'lbl_azp_gsc_request_t_observation_outer',
					tc_azp_gsc_request." . d_azp_gsc_request_t_reported_bank . " AS 'lbl_azp_gsc_request_t_reported_bank',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_by . " AS 'lbl_azp_gsc_request_t_request_by',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " AS 'lbl_azp_gsc_request_t_request_state',
					REPLACE(tc_azp_gsc_request." . d_azp_gsc_request_t_serial . ", '_', '') AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_date . " AS 'lbl_azp_gsc_request_t_shipping_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_number . " AS 'lbl_azp_gsc_request_t_shipping_number',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_date . " AS 'lbl_azp_gsc_request_t_supplier_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_number . " AS 'lbl_azp_gsc_request_t_supplier_request_number',

					tc_azp_gsc_causal." . d_azp_gsc_causal_t_name . " AS 'lbl_azp_gsc_causal_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_expiration." . d_azp_gsc_expiration_t_name . " AS 'lbl_azp_gsc_expiration_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_name . " AS 'lbl_azp_gsc_phase_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_percentage . " AS 'lbl_azp_gsc_phase_t_percentage',
					tc_azp_gsc_state." . d_azp_gsc_state_t_name . " AS 'lbl_azp_gsc_state_t_name',

					tc_azp_pallet_color." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_t_name',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " AS 'lbl_azp_gsc_capture_t_document',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_document . " AS 'lbl_azp_gsc_consignment_s_file_document'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_causal ." tc_azp_gsc_causal
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_causal . "
						= tc_azp_gsc_causal." . d_azp_gsc_causal_id_azp_gsc_causal . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_expiration ." tc_azp_gsc_expiration
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_expiration . "
						= tc_azp_gsc_expiration." . d_azp_gsc_expiration_id_azp_gsc_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color ." tc_azp_pallet_color
					ON tc_azp_gsc_phase." . d_azp_gsc_phase_v_id_azp_pallet_color . "
						= tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_state ." tc_azp_gsc_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_state . "
						= tc_azp_gsc_state." . d_azp_gsc_state_id_azp_gsc_state . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_capture ." tc_azp_gsc_capture
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_consignment ." tc_azp_gsc_consignment
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '1'
					" . $var_code . " " . $var_since . " " . $var_until . " " . $var_state . "
					
				GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " ASC
				ORDER BY tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_clientrq() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_v_id_azp_role . " = '9'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_gsc_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach; }
			#-------------------------------------------------------------------------#
			# Consulta para identificar los nuevos registros en la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_fct_client',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_request'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request

				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "

				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " = '" . $this->id . "'
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_id_client = $value['lbl_fct_client']; $var_request = $value['lbl_request']; endforeach; }

			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_created . " AS 'lbl_azp_gsc_request_m_date_created',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_modified . " AS 'lbl_azp_gsc_request_m_date_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_description . " AS 'lbl_azp_gsc_request_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_request." . d_azp_gsc_request_s_capture . " AS 'lbl_azp_gsc_request_s_capture',
					tc_azp_gsc_request." . d_azp_gsc_request_s_data . " AS 'lbl_azp_gsc_request_s_data',
					tc_azp_gsc_request." . d_azp_gsc_request_s_existing . " AS 'lbl_azp_gsc_request_s_existing',
					tc_azp_gsc_request." . d_azp_gsc_request_s_validate . " AS 'lbl_azp_gsc_request_s_validate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_date_associate . " AS 'lbl_azp_gsc_request_t_date_associate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_death_date . " AS 'lbl_azp_gsc_request_t_death_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_obligation . " AS 'lbl_azp_gsc_request_t_number_obligation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation_outer . " AS 'lbl_azp_gsc_request_t_observation_outer',
					tc_azp_gsc_request." . d_azp_gsc_request_t_reported_bank . " AS 'lbl_azp_gsc_request_t_reported_bank',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_by . " AS 'lbl_azp_gsc_request_t_request_by',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " AS 'lbl_azp_gsc_request_t_request_state',
					REPLACE(tc_azp_gsc_request." . d_azp_gsc_request_t_serial . ", '_', '') AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_date . " AS 'lbl_azp_gsc_request_t_shipping_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_number . " AS 'lbl_azp_gsc_request_t_shipping_number',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_date . " AS 'lbl_azp_gsc_request_t_supplier_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_number . " AS 'lbl_azp_gsc_request_t_supplier_request_number',

					tc_azp_gsc_causal." . d_azp_gsc_causal_t_name . " AS 'lbl_azp_gsc_causal_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_expiration." . d_azp_gsc_expiration_t_name . " AS 'lbl_azp_gsc_expiration_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_name . " AS 'lbl_azp_gsc_phase_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_percentage . " AS 'lbl_azp_gsc_phase_t_percentage',
					tc_azp_gsc_state." . d_azp_gsc_state_t_name . " AS 'lbl_azp_gsc_state_t_name',

					tc_azp_pallet_color." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_t_name',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " AS 'lbl_azp_gsc_capture_t_document',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_document . " AS 'lbl_azp_gsc_consignment_s_file_document'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_causal ." tc_azp_gsc_causal
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_causal . "
						= tc_azp_gsc_causal." . d_azp_gsc_causal_id_azp_gsc_causal . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client ." tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_expiration ." tc_azp_gsc_expiration
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_expiration . "
						= tc_azp_gsc_expiration." . d_azp_gsc_expiration_id_azp_gsc_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color ." tc_azp_pallet_color
					ON tc_azp_gsc_phase." . d_azp_gsc_phase_v_id_azp_pallet_color . "
						= tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_state ." tc_azp_gsc_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_state . "
						= tc_azp_gsc_state." . d_azp_gsc_state_id_azp_gsc_state . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_capture ." tc_azp_gsc_capture
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_consignment ." tc_azp_gsc_consignment
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '1'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " = '" . $var_request . "'
					AND tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $var_id_client . "'
				GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " ASC
				ORDER BY tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_close() {
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (isset($_GET['fd_id'])) { $var_fd_identification = $_GET['fd_id']; } else { $var_fd_identification = ''; }
			if (isset($_GET['fd_client'])) { $var_fd_client = $_GET['fd_client']; } else { $var_fd_client = ''; }
			if (isset($_GET['fd_request'])) { $var_fd_request = $_GET['fd_request']; } else { $var_fd_request = ''; }
			if (isset($_GET['fd_date'])) { $var_fd_date = $_GET['fd_date']; } else { $var_fd_date = ''; }
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if ($var_fd_client != '' && $var_fd_request != '' && $var_fd_date != '') {
				$var_client = "AND tc_azp_gsc_client." . d_azp_gsc_client_t_name . " = '" . $var_fd_client . "'";
				$var_request = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " = '" . $var_fd_request . "'";
				$var_date = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " LIKE '" . $var_fd_date . "%'";
				$var_identification = '';
			} else if ($var_fd_identification != '') {
				$var_identification = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " = '" . $var_fd_identification . "'";
				$var_client = ''; $var_request = ''; $var_date = '';
			} else {
				$var_client = "AND tc_azp_gsc_client." . d_azp_gsc_client_t_name . " = '" . $var_fd_client . "'";
				$var_request = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " = '" . $var_fd_request . "'";
				$var_date = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " LIKE '" . $var_fd_date . "%'";
				$var_identification = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " = '" . $var_fd_identification . "'";
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_created . " AS 'lbl_azp_gsc_request_m_date_created',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_modified . " AS 'lbl_azp_gsc_request_m_date_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_description . " AS 'lbl_azp_gsc_request_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_request." . d_azp_gsc_request_s_capture . " AS 'lbl_azp_gsc_request_s_capture',
					tc_azp_gsc_request." . d_azp_gsc_request_s_data . " AS 'lbl_azp_gsc_request_s_data',
					tc_azp_gsc_request." . d_azp_gsc_request_s_existing . " AS 'lbl_azp_gsc_request_s_existing',
					tc_azp_gsc_request." . d_azp_gsc_request_s_validate . " AS 'lbl_azp_gsc_request_s_validate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_date_associate . " AS 'lbl_azp_gsc_request_t_date_associate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_death_date . " AS 'lbl_azp_gsc_request_t_death_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_obligation . " AS 'lbl_azp_gsc_request_t_number_obligation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation_outer . " AS 'lbl_azp_gsc_request_t_observation_outer',
					tc_azp_gsc_request." . d_azp_gsc_request_t_reported_bank . " AS 'lbl_azp_gsc_request_t_reported_bank',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_by . " AS 'lbl_azp_gsc_request_t_request_by',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " AS 'lbl_azp_gsc_request_t_request_state',
					REPLACE(tc_azp_gsc_request." . d_azp_gsc_request_t_serial . ", '_', '') AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_date . " AS 'lbl_azp_gsc_request_t_shipping_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_number . " AS 'lbl_azp_gsc_request_t_shipping_number',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_date . " AS 'lbl_azp_gsc_request_t_supplier_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_number . " AS 'lbl_azp_gsc_request_t_supplier_request_number',

					tc_azp_gsc_causal." . d_azp_gsc_causal_t_name . " AS 'lbl_azp_gsc_causal_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_expiration." . d_azp_gsc_expiration_t_name . " AS 'lbl_azp_gsc_expiration_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_name . " AS 'lbl_azp_gsc_phase_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_percentage . " AS 'lbl_azp_gsc_phase_t_percentage',
					tc_azp_gsc_state." . d_azp_gsc_state_t_name . " AS 'lbl_azp_gsc_state_t_name',

					tc_azp_pallet_color." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_t_name',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " AS 'lbl_azp_gsc_capture_t_document',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_document . " AS 'lbl_azp_gsc_consignment_s_file_document'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_causal ." tc_azp_gsc_causal
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_causal . "
						= tc_azp_gsc_causal." . d_azp_gsc_causal_id_azp_gsc_causal . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_expiration ." tc_azp_gsc_expiration
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_expiration . "
						= tc_azp_gsc_expiration." . d_azp_gsc_expiration_id_azp_gsc_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color ." tc_azp_pallet_color
					ON tc_azp_gsc_phase." . d_azp_gsc_phase_v_id_azp_pallet_color . "
						= tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_state ." tc_azp_gsc_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_state . "
						= tc_azp_gsc_state." . d_azp_gsc_state_id_azp_gsc_state . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_capture ." tc_azp_gsc_capture
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_consignment ." tc_azp_gsc_consignment
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '1'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '2'
					" . $var_client . " " . $var_request . " " . $var_date . " " . $var_identification . "
				GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " ASC
				ORDER BY tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_ultime() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql): $var_client = $key_sql[d_azp_user_v_id_azp_fct_client]; endforeach;
				# Control para la validacion de los clientes relacionados
				if ($var_client == 1) { $var_code = ''; $var_state = ''; $var_since = ''; $var_until = ''; } else if ($var_client != 1) {
					# Asignar nuevos valores a la sentencia sql o query
					$var_code = "AND tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . " = '" . $var_client . "'";
					# Definicion de valores recibido por get
					if (isset($_GET['since']) && isset($_GET['until'])) {
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_since = "AND (tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " >= '" . $_GET['since'] . "'";
						$var_until = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " <= '" . $_GET['until'] . "')";
						$var_state = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '2'";
					} else {
						$var_state = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '1'";
						$var_since = '';
						$var_until = '';
					}
				} else { $var_code = ''; $var_state = ''; $var_since = ''; $var_until = ''; }
			} else { $var_code = ''; $var_state = ''; $var_since = ''; $var_until = ''; }
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_created . " AS 'lbl_azp_gsc_request_m_date_created',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_modified . " AS 'lbl_azp_gsc_request_m_date_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_description . " AS 'lbl_azp_gsc_request_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_request." . d_azp_gsc_request_s_capture . " AS 'lbl_azp_gsc_request_s_capture',
					tc_azp_gsc_request." . d_azp_gsc_request_s_data . " AS 'lbl_azp_gsc_request_s_data',
					tc_azp_gsc_request." . d_azp_gsc_request_s_existing . " AS 'lbl_azp_gsc_request_s_existing',
					tc_azp_gsc_request." . d_azp_gsc_request_s_validate . " AS 'lbl_azp_gsc_request_s_validate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_date_associate . " AS 'lbl_azp_gsc_request_t_date_associate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_death_date . " AS 'lbl_azp_gsc_request_t_death_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_obligation . " AS 'lbl_azp_gsc_request_t_number_obligation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation_outer . " AS 'lbl_azp_gsc_request_t_observation_outer',
					tc_azp_gsc_request." . d_azp_gsc_request_t_reported_bank . " AS 'lbl_azp_gsc_request_t_reported_bank',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_by . " AS 'lbl_azp_gsc_request_t_request_by',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " AS 'lbl_azp_gsc_request_t_request_state',
					REPLACE(tc_azp_gsc_request." . d_azp_gsc_request_t_serial . ", '_', '') AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_date . " AS 'lbl_azp_gsc_request_t_shipping_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_number . " AS 'lbl_azp_gsc_request_t_shipping_number',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_date . " AS 'lbl_azp_gsc_request_t_supplier_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_number . " AS 'lbl_azp_gsc_request_t_supplier_request_number',

					tc_azp_gsc_causal." . d_azp_gsc_causal_t_name . " AS 'lbl_azp_gsc_causal_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " AS 'lbl_azp_gsc_client_id_azp_gsc_client',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_expiration." . d_azp_gsc_expiration_t_name . " AS 'lbl_azp_gsc_expiration_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_name . " AS 'lbl_azp_gsc_phase_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_percentage . " AS 'lbl_azp_gsc_phase_t_percentage',
					tc_azp_gsc_state." . d_azp_gsc_state_t_name . " AS 'lbl_azp_gsc_state_t_name',

					tc_azp_pallet_color." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_t_name',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " AS 'lbl_azp_gsc_capture_t_document',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_document . " AS 'lbl_azp_gsc_consignment_s_file_document'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_causal ." tc_azp_gsc_causal
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_causal . "
						= tc_azp_gsc_causal." . d_azp_gsc_causal_id_azp_gsc_causal . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_expiration ." tc_azp_gsc_expiration
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_expiration . "
						= tc_azp_gsc_expiration." . d_azp_gsc_expiration_id_azp_gsc_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color ." tc_azp_pallet_color
					ON tc_azp_gsc_phase." . d_azp_gsc_phase_v_id_azp_pallet_color . "
						= tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_state ." tc_azp_gsc_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_state . "
						= tc_azp_gsc_state." . d_azp_gsc_state_id_azp_gsc_state . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_capture ." tc_azp_gsc_capture
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_consignment ." tc_azp_gsc_consignment
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '1'
					AND tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . " != 1
					" . $var_code . " " . $var_since . " " . $var_until . " " . $var_state . "
				GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . " DESC
				ORDER BY tc_azp_gsc_client." . d_azp_gsc_client_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remision() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_update." . d_azp_gsc_update_id_azp_gsc_update . " AS 'lbl_azp_gsc_update_id_azp_gsc_update',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_update." . d_azp_gsc_update_m_date_created . " AS 'lbl_azp_gsc_update_m_date_created',
					tc_azp_gsc_update." . d_azp_gsc_update_m_date_modified . " AS 'lbl_azp_gsc_update_m_date_modified',
					tc_azp_gsc_update." . d_azp_gsc_update_m_description . " AS 'lbl_azp_gsc_update_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_update." . d_azp_gsc_update_s_capture . " AS 'lbl_azp_gsc_update_s_capture',
					tc_azp_gsc_update." . d_azp_gsc_update_s_data . " AS 'lbl_azp_gsc_update_s_data',
					tc_azp_gsc_update." . d_azp_gsc_update_s_existing . " AS 'lbl_azp_gsc_update_s_existing',
					tc_azp_gsc_update." . d_azp_gsc_update_s_validate . " AS 'lbl_azp_gsc_update_s_validate',
					tc_azp_gsc_update." . d_azp_gsc_update_s_web_service . " AS 'lbl_azp_gsc_update_s_web_service',

					tc_azp_gsc_update." . d_azp_gsc_update_t_city . " AS 'lbl_azp_gsc_update_t_city',
					tc_azp_gsc_update." . d_azp_gsc_update_t_death_date . " AS 'lbl_azp_gsc_update_t_death_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_full_name . " AS 'lbl_azp_gsc_update_t_full_name',
					tc_azp_gsc_update." . d_azp_gsc_update_t_id_supplier . " AS 'lbl_azp_gsc_update_t_id_supplier',
					tc_azp_gsc_update." . d_azp_gsc_update_t_identification . " AS 'lbl_azp_gsc_update_t_identification',
					tc_azp_gsc_update." . d_azp_gsc_update_t_notary . " AS 'lbl_azp_gsc_update_t_notary',
					tc_azp_gsc_update." . d_azp_gsc_update_t_number_obligation . " AS 'lbl_azp_gsc_update_t_number_obligation',
					tc_azp_gsc_update." . d_azp_gsc_update_t_number_request . " AS 'lbl_azp_gsc_update_t_number_request',
					tc_azp_gsc_update." . d_azp_gsc_update_t_observation . " AS 'lbl_azp_gsc_update_t_observation',
					tc_azp_gsc_update." . d_azp_gsc_update_t_observation_outer . " AS 'lbl_azp_gsc_update_t_observation_outer',
					tc_azp_gsc_update." . d_azp_gsc_update_t_reported_bank . " AS 'lbl_azp_gsc_update_t_reported_bank',
					tc_azp_gsc_update." . d_azp_gsc_update_t_request_by . " AS 'lbl_azp_gsc_update_t_request_by',
					tc_azp_gsc_update." . d_azp_gsc_update_t_request_date . " AS 'lbl_azp_gsc_update_t_request_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_request_state . " AS 'lbl_azp_gsc_update_t_request_state',
					tc_azp_gsc_update." . d_azp_gsc_update_t_serial . " AS 'lbl_azp_gsc_update_t_serial',
					tc_azp_gsc_update." . d_azp_gsc_update_t_shipping_date . " AS 'lbl_azp_gsc_update_t_shipping_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_shipping_number . " AS 'lbl_azp_gsc_update_t_shipping_number',
					tc_azp_gsc_update." . d_azp_gsc_update_t_supplier_request_date . " AS 'lbl_azp_gsc_update_t_supplier_request_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_supplier_request_number . " AS 'lbl_azp_gsc_update_t_supplier_request_number',

					tc_azp_gsc_causal." . d_azp_gsc_causal_t_name . " AS 'lbl_azp_gsc_causal_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
				FROM " . t_azp_gsc_update . " tc_azp_gsc_update
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_update." . d_azp_gsc_update_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_update." . d_azp_gsc_update_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_update." . d_azp_gsc_update_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_causal ." tc_azp_gsc_causal
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_causal . "
						= tc_azp_gsc_causal." . d_azp_gsc_causal_id_azp_gsc_causal . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_deleted . " = '1'
					AND tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql): $var_gsc_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach;
				# Control para la validacion de los clientes relacionados
				if ($var_role == 9) { $var_code = "AND tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . " = '" . $var_gsc_client . "'"; } else { $var_code = ''; }
			} else { $var_code = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_created . " AS 'lbl_azp_gsc_request_m_date_created',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_modified . " AS 'lbl_azp_gsc_request_m_date_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_description . " AS 'lbl_azp_gsc_request_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_request." . d_azp_gsc_request_s_capture . " AS 'lbl_azp_gsc_request_s_capture',
					tc_azp_gsc_request." . d_azp_gsc_request_s_data . " AS 'lbl_azp_gsc_request_s_data',
					tc_azp_gsc_request." . d_azp_gsc_request_s_existing . " AS 'lbl_azp_gsc_request_s_existing',
					tc_azp_gsc_request." . d_azp_gsc_request_s_validate . " AS 'lbl_azp_gsc_request_s_validate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_date_associate . " AS 'lbl_azp_gsc_request_t_date_associate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_death_date . " AS 'lbl_azp_gsc_request_t_death_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_obligation . " AS 'lbl_azp_gsc_request_t_number_obligation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation_outer . " AS 'lbl_azp_gsc_request_t_observation_outer',
					tc_azp_gsc_request." . d_azp_gsc_request_t_reported_bank . " AS 'lbl_azp_gsc_request_t_reported_bank',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_by . " AS 'lbl_azp_gsc_request_t_request_by',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " AS 'lbl_azp_gsc_request_t_request_state',
					REPLACE(tc_azp_gsc_request." . d_azp_gsc_request_t_serial . ", '_', '') AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_date . " AS 'lbl_azp_gsc_request_t_shipping_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_number . " AS 'lbl_azp_gsc_request_t_shipping_number',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_date . " AS 'lbl_azp_gsc_request_t_supplier_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_number . " AS 'lbl_azp_gsc_request_t_supplier_request_number',

					tc_azp_gsc_causal." . d_azp_gsc_causal_t_name . " AS 'lbl_azp_gsc_causal_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_expiration." . d_azp_gsc_expiration_t_name . " AS 'lbl_azp_gsc_expiration_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_name . " AS 'lbl_azp_gsc_phase_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_percentage . " AS 'lbl_azp_gsc_phase_t_percentage',
					tc_azp_gsc_state." . d_azp_gsc_state_t_name . " AS 'lbl_azp_gsc_state_t_name',

					tc_azp_pallet_color." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_t_name',
					tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " AS 'lbl_azp_gsc_capture_t_document',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_s_file_document . " AS 'lbl_azp_gsc_consignment_s_file_document'

				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_causal ." tc_azp_gsc_causal
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_causal . "
						= tc_azp_gsc_causal." . d_azp_gsc_causal_id_azp_gsc_causal . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_expiration ." tc_azp_gsc_expiration
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_expiration . "
						= tc_azp_gsc_expiration." . d_azp_gsc_expiration_id_azp_gsc_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color ." tc_azp_pallet_color
					ON tc_azp_gsc_phase." . d_azp_gsc_phase_v_id_azp_pallet_color . "
						= tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_state ." tc_azp_gsc_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_state . "
						= tc_azp_gsc_state." . d_azp_gsc_state_id_azp_gsc_state . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_capture ." tc_azp_gsc_capture
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_consignment ." tc_azp_gsc_consignment
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '2' " . $var_code . "
				GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " ASC
				ORDER BY tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_third_parties() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_gsc_third_parties, d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $this->id . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql): $var_business_name = $key_sql[d_azp_gsc_third_parties_t_business_name]; endforeach;
			} else { $var_business_name = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " AS 'lbl_azp_gsc_third_parties_id_azp_gsc_third_parties',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_date_created . " AS 'lbl_azp_gsc_third_parties_m_date_created',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_date_modified . " AS 'lbl_azp_gsc_third_parties_m_date_modified',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_description . " AS 'lbl_azp_gsc_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_address . " AS 'lbl_azp_gsc_third_parties_t_address',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_business_name . " AS 'lbl_azp_gsc_third_parties_t_business_name',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_contact . " AS 'lbl_azp_gsc_third_parties_t_contact',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_email . " AS 'lbl_azp_gsc_third_parties_t_email',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_phone_fixed . " AS 'lbl_azp_gsc_third_parties_t_phone_fixed',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_phone_movil . " AS 'lbl_azp_gsc_third_parties_t_phone_movil',
					tc_azp_gsc_city." . d_azp_gsc_city_t_name . " AS 'lbl_azp_gsc_city_t_name',
					tc_azp_gsc_type_third." . d_azp_gsc_type_third_t_name . " AS 'lbl_azp_gsc_type_third_t_name'
				FROM " . t_azp_gsc_third_parties . " tc_azp_gsc_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_city ." tc_azp_gsc_city
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_city . "
						= tc_azp_gsc_city." . d_azp_gsc_city_id_azp_gsc_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_type_third ." tc_azp_gsc_type_third
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_type_third . "
						= tc_azp_gsc_type_third." . d_azp_gsc_type_third_id_azp_gsc_type_third . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_business_name . " = '" . $var_business_name . "'
					AND tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_deleted . " = '1'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
					tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . " AS 'lbl_azp_gsc_request_m_by_created',
					tc_azp_gsc_request." . d_azp_gsc_request_m_by_modified . " AS 'lbl_azp_gsc_request_m_by_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_created . " AS 'lbl_azp_gsc_request_m_date_created',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_modified . " AS 'lbl_azp_gsc_request_m_date_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_description . " AS 'lbl_azp_gsc_request_m_description',
					tc_azp_gsc_request." . d_azp_gsc_request_m_level . " AS 'lbl_azp_gsc_request_m_level',
					tc_azp_gsc_request." . d_azp_gsc_request_m_status . " AS 'lbl_azp_gsc_request_m_status',
					tc_azp_gsc_request." . d_azp_gsc_request_s_capture . " AS 'lbl_azp_gsc_request_s_capture',
					tc_azp_gsc_request." . d_azp_gsc_request_s_data . " AS 'lbl_azp_gsc_request_s_data',
					tc_azp_gsc_request." . d_azp_gsc_request_s_existing . " AS 'lbl_azp_gsc_request_s_existing',
					tc_azp_gsc_request." . d_azp_gsc_request_s_validate . " AS 'lbl_azp_gsc_request_s_validate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_date_associate . " AS 'lbl_azp_gsc_request_t_date_associate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_death_date . " AS 'lbl_azp_gsc_request_t_death_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_obligation . " AS 'lbl_azp_gsc_request_t_number_obligation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation_outer . " AS 'lbl_azp_gsc_request_t_observation_outer',
					tc_azp_gsc_request." . d_azp_gsc_request_t_reported_bank . " AS 'lbl_azp_gsc_request_t_reported_bank',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_by . " AS 'lbl_azp_gsc_request_t_request_by',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " AS 'lbl_azp_gsc_request_t_request_state',
					REPLACE(tc_azp_gsc_request." . d_azp_gsc_request_t_serial . ", '_', '') AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_date . " AS 'lbl_azp_gsc_request_t_shipping_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_number . " AS 'lbl_azp_gsc_request_t_shipping_number',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_date . " AS 'lbl_azp_gsc_request_t_supplier_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_number . " AS 'lbl_azp_gsc_request_t_supplier_request_number',
					tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_causal . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_causal',
					tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_client',
					tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_expiration . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_expiration',
					tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_phase . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_phase'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_request." . d_azp_gsc_request_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " = '" . $this->id . "'
					AND tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_request_delete(array $data) {
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
					throw new Exception('<b>Error:</b> El campo de id es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "' AND " . d_azp_gsc_request_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "' AND " . d_azp_gsc_request_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_request_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "' AND " . d_azp_gsc_request_m_level . " = '2'");
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
		final public function sql_azp_gsc_request_delete(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_request_delete($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_delete']);
				#-------------------------------------------------------------------------#
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->delete(t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_gsc_request_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				//if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_number_request'])) { throw new Exception('<b>Error:</b> El campo de solicitud esta prohibido modificar.'); }
				if (!isset($data['field_cr_gsc_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_cr_identification'])) { throw new Exception('<b>Error:</b> El campo de cedula esta prohibido modificar.'); }
				if (!isset($data['field_cr_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				//$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_number_request = $this->db->scape($data['field_cr_number_request']);
				$empty_gsc_client = $this->db->scape($data['field_cr_gsc_client']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_number_request)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud es oblgitario.');
				}
				#---------------------------------------------#
				if (!Strings::alphanumeric($empty_number_request)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud solo permite letras y numeros.');
				}
				#---------------------------------------------#
				if (strlen($empty_number_request) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_number_request, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_number_request)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_gsc_client) || strtolower($empty_gsc_client) == strtolower('seleccionar') || $empty_gsc_client == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_gsc_client)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula solo permite numeros.');
				}
				#---------------------------------------------#
				if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_identification, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos es oblgitario.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_full_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_full_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_gsc_client = $this->db->select('*', t_azp_gsc_client, d_azp_gsc_client_id_azp_gsc_client . " = '" . $empty_gsc_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_gsc_client) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_gsc_client) == '') { $sql_gsc_client[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_gsc_client[0][0]) != strtolower($empty_gsc_client)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El cliente seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_validate = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_t_identification . " = '" . $empty_identification . "' AND " . d_azp_gsc_request_t_number_request . " = '" . $empty_number_request . "' AND " . d_azp_gsc_request_v_id_azp_gsc_client . " = '" . $empty_gsc_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_validate) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_validate[0][0]) != strtolower($empty_identification) && strtolower($sql_validate[0][0]) != strtolower($empty_number_request) && strtolower($sql_validate[0][0]) != strtolower($empty_gsc_client)) {
						# Informar un mensaje al usuario por medio de una excepcion
						#throw new Exception('<b>Error:</b> El menu y sub menu seleccionados ya existen registrados.');
						throw new Exception('<b>Error:</b> La cedula, el numero de solicitud y cliente ya existen registrados.');
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
		final public function sql_azp_gsc_request_insert(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_request_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				//$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_number_request = $this->db->scape($data['field_cr_number_request']);
				$empty_gsc_client = $this->db->scape($data['field_cr_gsc_client']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_request_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_request_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_request_m_date_created => DATE_HOUR,
					d_azp_gsc_request_m_date_modified => DATE_HOUR,
					d_azp_gsc_request_m_deleted => '1',
					d_azp_gsc_request_m_description => '',
					d_azp_gsc_request_m_level => '2',
					d_azp_gsc_request_m_status => '1',
					d_azp_gsc_request_m_temp => '2',
					d_azp_gsc_request_s_capture => 'No',
					d_azp_gsc_request_s_data => 'No',
					d_azp_gsc_request_s_date => '',
					d_azp_gsc_request_s_duplicate => '',
					d_azp_gsc_request_s_existing => 'No',
					d_azp_gsc_request_s_validate => 'No',
					d_azp_gsc_request_s_web_service => 'No',
					d_azp_gsc_request_t_city => '',
					d_azp_gsc_request_t_date_associate => '',
					d_azp_gsc_request_t_death_date => '',
					d_azp_gsc_request_t_full_name => strtoupper($empty_full_name),
					d_azp_gsc_request_t_id_supplier => '',
					d_azp_gsc_request_t_identification => $empty_identification,
					d_azp_gsc_request_t_notary => '',
					d_azp_gsc_request_t_number_consecutive => '',
					d_azp_gsc_request_t_number_obligation => '',
					d_azp_gsc_request_t_number_request => $empty_number_request,
					d_azp_gsc_request_t_observation => '',
					d_azp_gsc_request_t_observation_outer => '',
					d_azp_gsc_request_t_reported_bank => '',
					d_azp_gsc_request_t_request_by => '',
					d_azp_gsc_request_t_request_date => '',
					d_azp_gsc_request_t_request_state => '1',
					d_azp_gsc_request_t_serial => '',
					d_azp_gsc_request_t_shipping_date => '',
					d_azp_gsc_request_t_shipping_number => '0',
					d_azp_gsc_request_t_supplier_request_date => '',
					d_azp_gsc_request_t_supplier_request_number => '',
					d_azp_gsc_request_v_id_azp_gsc_causal => '1',
					d_azp_gsc_request_v_id_azp_gsc_client => $empty_gsc_client,
					d_azp_gsc_request_v_id_azp_gsc_expiration => '1',
					d_azp_gsc_request_v_id_azp_gsc_phase => '1',
					d_azp_gsc_request_v_id_azp_gsc_state => '1',
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_request, $var_array);
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_request_m_temp . " = '2'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_capture_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_capture_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_capture_m_date_created => DATE_HOUR,
							d_azp_gsc_capture_m_date_modified => DATE_HOUR,
							d_azp_gsc_capture_m_deleted => '1',
							d_azp_gsc_capture_m_description => '',
							d_azp_gsc_capture_m_level => '2',
							d_azp_gsc_capture_m_status => '1',
							d_azp_gsc_capture_m_temp => '1',
							d_azp_gsc_capture_s_validate => '',
							d_azp_gsc_capture_t_date_load => '',
							d_azp_gsc_capture_t_date_visible => '',
							d_azp_gsc_capture_t_document => '',
							d_azp_gsc_capture_t_error => '',
							d_azp_gsc_capture_t_folder => $key_sql[d_azp_gsc_request_t_identification],
							d_azp_gsc_capture_t_name => '',
							d_azp_gsc_capture_t_route => '',
							d_azp_gsc_capture_t_size => '',
							d_azp_gsc_capture_t_title => '',
							d_azp_gsc_capture_t_tmp_name => '',
							d_azp_gsc_capture_t_type => '',
							d_azp_gsc_capture_v_id_azp_gsc_request => $key_sql[d_azp_gsc_request_id_azp_gsc_request],
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_capture, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_request_m_temp . " = '2'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_consignment_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_consignment_m_date_created => DATE_HOUR,
							d_azp_gsc_consignment_m_date_modified => DATE_HOUR,
							d_azp_gsc_consignment_m_deleted => '1',
							d_azp_gsc_consignment_m_description => '',
							d_azp_gsc_consignment_m_level => '2',
							d_azp_gsc_consignment_m_status => '1',
							d_azp_gsc_consignment_m_temp => '1',
							d_azp_gsc_consignment_s_file_document => '',
							d_azp_gsc_consignment_s_file_error => '',
							d_azp_gsc_consignment_s_file_folder => '',
							d_azp_gsc_consignment_s_file_name => '',
							d_azp_gsc_consignment_s_file_route => '',
							d_azp_gsc_consignment_s_file_size => '',
							d_azp_gsc_consignment_s_file_tmp_name => '',
							d_azp_gsc_consignment_s_file_type => '',
							d_azp_gsc_consignment_t_account_number => '',
							d_azp_gsc_consignment_t_account_type => '',
							d_azp_gsc_consignment_t_closed_value => '0',
							d_azp_gsc_consignment_t_consigned_entity => '',
							d_azp_gsc_consignment_t_consignment_code => '',
							d_azp_gsc_consignment_t_consignment_confirm => '2',
							d_azp_gsc_consignment_t_consignment_date => '',
							d_azp_gsc_consignment_t_consignment_item => '',
							d_azp_gsc_consignment_t_honorary => '0',
							d_azp_gsc_consignment_t_nit_identification => '',
							d_azp_gsc_consignment_t_nro_receipt => 'Sin_Recibo',
							d_azp_gsc_consignment_t_observation => '',
							d_azp_gsc_consignment_t_to_consigned => '',
							d_azp_gsc_consignment_t_value_check => 'No',
							d_azp_gsc_consignment_t_value_divided => '0',
							d_azp_gsc_consignment_t_value_total => '0',
							d_azp_gsc_consignment_t_value_unique => '0',
							d_azp_gsc_consignment_t_information => 'Principal',
							d_azp_gsc_consignment_t_duplicate => 'No',
							d_azp_gsc_consignment_t_register => '',
							d_azp_gsc_consignment_t_check_item => 'Si',
							d_azp_gsc_consignment_t_nro_item => '0',
							d_azp_gsc_consignment_t_notary_consigned => '',
							d_azp_gsc_consignment_t_notary_identification => '',
							d_azp_gsc_consignment_t_notary_receipt => '',
							d_azp_gsc_consignment_t_notary_success => 'No',
							d_azp_gsc_consignment_v_id_azp_gsc_request => $key_sql[d_azp_gsc_request_id_azp_gsc_request],
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_consignment, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_gsc_request_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_request_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_gsc_request_observation_more(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_oi_identification'])) { throw new Exception('<b>Error:</b> El campo de cedula esta prohibido modificar.'); }
				if (!isset($data['field_oi_observation'])) { throw new Exception('<b>Error:</b> El campo de observacion esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_identification = $this->db->scape($data['field_oi_identification']);
				$empty_observation = $this->db->scape($data['field_oi_observation']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula solo permite numeros.');
				}
				#---------------------------------------------#
				if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_identification, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_observation)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de observacion es oblgitario.');
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
		final public function sql_azp_gsc_request_observation_more(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_request_observation_more($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_identification = $this->db->scape($data['field_oi_identification']);
				$empty_observation = $this->db->scape($data['field_oi_observation']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_observation_internal_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_observation_internal_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_observation_internal_m_date_created => DATE_HOUR,
					d_azp_gsc_observation_internal_m_date_modified => DATE_HOUR,
					d_azp_gsc_observation_internal_m_deleted => '1',
					d_azp_gsc_observation_internal_m_description => '',
					d_azp_gsc_observation_internal_m_level => '2',
					d_azp_gsc_observation_internal_m_status => '1',
					d_azp_gsc_observation_internal_m_temp => '2',
					d_azp_gsc_observation_internal_t_identification => $empty_identification,
					d_azp_gsc_observation_internal_t_observation => $empty_observation,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_observation_internal, $var_array);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->query("SELECT MAX(" . d_azp_gsc_observation_internal_id_azp_gsc_observation_internal . ") AS 'lbl_max_id' FROM " . t_azp_gsc_observation_internal . " WHERE " . d_azp_gsc_observation_internal_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_observation_internal_m_temp . " = '2'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_sql_oi = $this->db->select('*', t_azp_gsc_observation_internal,
							d_azp_gsc_observation_internal_id_azp_gsc_observation_internal . " = '" . $key_sql['lbl_max_id'] . "'");
						# Verificiar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql_oi) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_sql_oi as $key_sql_oi):
								$var_value = DATE . ': ' . $key_sql_oi[d_azp_gsc_observation_internal_t_observation];
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_gsc_request_t_observation => $var_value,);
								# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
								$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_t_identification . " = '" . $key_sql_oi[d_azp_gsc_observation_internal_t_identification] . "'");
							endforeach;
						}
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_gsc_observation_internal_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_observation_internal, $var_array, d_azp_gsc_observation_internal_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_observation_internal_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro almacenado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_request_remove(array $data) {
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
					throw new Exception('<b>Error:</b> El campo de id es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "' AND " . d_azp_gsc_request_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "' AND " . d_azp_gsc_request_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_request_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "' AND " . d_azp_gsc_request_m_level . " = '2'");
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
		final public function sql_azp_gsc_request_remove(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_request_remove($data);
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
				$var_array = array(d_azp_gsc_request_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_request_restore(array $data) {
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
					throw new Exception('<b>Error:</b> El campo de id es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "' AND " . d_azp_gsc_request_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "' AND " . d_azp_gsc_request_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_request_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "' AND " . d_azp_gsc_request_m_level . " = '2'");
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
		final public function sql_azp_gsc_request_restore(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_request_restore($data);
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
				$var_array = array(d_azp_gsc_request_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_request_state(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_st_request_state'])) { throw new Exception('<b>Error:</b> El campo de estado solicitud esta prohibido modificar.'); }
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
					throw new Exception('<b>Error:</b> El campo de estado solicitud es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_request_date)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado solicitud solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_gsc_request_state(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_request_state($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_request_date = $this->db->scape($data['field_st_request_state']);
				#-------------------------------------------------------------------------#
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_request_t_request_state => $empty_request_date,);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				if ($empty_request_date == 1) { $value_rd = 'Activa'; } else if ($empty_request_date == 2) { $value_rd = 'Cerrada'; } else { $value_rd = 'Activa'; }
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_logs_request_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_logs_request_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_logs_request_m_date_created => DATE_HOUR,
							d_azp_gsc_logs_request_m_date_modified => DATE_HOUR,
							d_azp_gsc_logs_request_m_deleted => '1',
							d_azp_gsc_logs_request_m_description => '',
							d_azp_gsc_logs_request_m_level => '2',
							d_azp_gsc_logs_request_m_status => '1',
							d_azp_gsc_logs_request_m_temp => '1',
							d_azp_gsc_logs_request_t_action => 'Evento Ejecutado: Estado cambiado a ' . $value_rd,
							d_azp_gsc_logs_request_t_date => DATE,
							d_azp_gsc_logs_request_v_id_azp_gsc_request => $key_sql[d_azp_gsc_update_v_id_azp_gsc_request],
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_logs_request, $var_array);
						if ($value_rd == 2) {
							#-------------------------------------------------------------------------#
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_gsc_observation_internal_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_gsc_observation_internal_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_gsc_observation_internal_m_date_created => DATE_HOUR,
								d_azp_gsc_observation_internal_m_date_modified => DATE_HOUR,
								d_azp_gsc_observation_internal_m_deleted => '1',
								d_azp_gsc_observation_internal_m_description => '',
								d_azp_gsc_observation_internal_m_level => '2',
								d_azp_gsc_observation_internal_m_status => '1',
								d_azp_gsc_observation_internal_m_temp => '1',
								d_azp_gsc_observation_internal_t_identification => $key_sql[d_azp_gsc_update_t_identification],
								d_azp_gsc_observation_internal_t_observation => 'Cierre de solicitud.',
							);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->insert(t_azp_gsc_observation_internal, $var_array);
							#-------------------------------------------------------------------------#
							$var_array = array(d_azp_gsc_request_t_observation => DATE . ' ' . 'Cierre de solicitud.',);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
						}
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_request_update(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_city'])) { throw new Exception('<b>Error:</b> El campo de ciudad esta prohibido modificar.'); }
				if (!isset($data['field_up_death_date'])) { throw new Exception('<b>Error:</b> El campo de fecha de defuncion esta prohibido modificar.'); }
				if (!isset($data['field_up_notary'])) { throw new Exception('<b>Error:</b> El campo de notaria esta prohibido modificar.'); }
				if (!isset($data['field_up_number_obligation'])) { throw new Exception('<b>Error:</b> El campo de numero obligacion esta prohibido modificar.'); }
				//if (!isset($data['field_up_observation'])) { throw new Exception('<b>Error:</b> El campo de observacion esta prohibido modificar.'); }
				if (!isset($data['field_up_observation_outer'])) { throw new Exception('<b>Error:</b> El campo de observacion esta prohibido modificar.'); }
				//if (!isset($data['field_up_reported_bank'])) { throw new Exception('<b>Error:</b> El campo de reportado a banco esta prohibido modificar.'); }
				if (!isset($data['field_up_request_by'])) { throw new Exception('<b>Error:</b> El campo de solicitado por esta prohibido modificar.'); }
				if (!isset($data['field_up_request_date'])) { throw new Exception('<b>Error:</b> El campo de fecha de solicitud esta prohibido modificar.'); }
				if (!isset($data['field_up_serial'])) { throw new Exception('<b>Error:</b> El campo de serial esta prohibido modificar.'); }
				//if (!isset($data['field_up_shipping_number'])) { throw new Exception('<b>Error:</b> El campo de numero envio esta prohibido modificar.'); }
				if (!isset($data['field_up_supplier_request_date'])) { throw new Exception('<b>Error:</b> El campo de fecha solicitud proveedor esta prohibido modificar.'); }
				if (!isset($data['field_up_supplier_request_number'])) { throw new Exception('<b>Error:</b> El campo de nro solicitud proveedor esta prohibido modificar.'); }
				if (!isset($data['field_up_gsc_causal'])) { throw new Exception('<b>Error:</b> El campo de causal esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_city = $this->db->scape($data['field_up_city']);
				$empty_death_date = $this->db->scape($data['field_up_death_date']);
				$empty_notary = $this->db->scape($data['field_up_notary']);
				$empty_number_obligation = $this->db->scape($data['field_up_number_obligation']);
				//$empty_observation = $this->db->scape($data['field_up_observation']);
				$empty_observation_outer = $this->db->scape($data['field_up_observation_outer']);
				//$empty_reported_bank = $this->db->scape($data['field_up_reported_bank']);
				$empty_request_by = $this->db->scape($data['field_up_request_by']);
				$empty_request_date = $this->db->scape($data['field_up_request_date']);
				$empty_serial = $this->db->scape($data['field_up_serial']);
				//$empty_shipping_number = $this->db->scape($data['field_up_shipping_number']);
				$empty_supplier_request_date = $this->db->scape($data['field_up_supplier_request_date']);
				$empty_supplier_request_number = $this->db->scape($data['field_up_supplier_request_number']);
				$empty_gsc_causal = $this->db->scape($data['field_up_gsc_causal']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_id) || $empty_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_number_request)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::alphanumeric($empty_number_request)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud solo permite letras y numeros.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_number_request) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_number_request, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud no permite ningun espacio en blanco.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_number_request)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula solo permite numeros.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_identification, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite ningun espacio en blanco.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos solo permite letras.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_full_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_full_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_gsc_causal) || strtolower($empty_gsc_causal) == strtolower('seleccionar') || $empty_gsc_causal == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de causal es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_gsc_causal)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de causal solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_gsc_city) || strtolower($empty_gsc_city) == strtolower('seleccionar') || $empty_gsc_city == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_gsc_city)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_gsc_client) || strtolower($empty_gsc_client) == strtolower('seleccionar') || $empty_gsc_client == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_gsc_client)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_gsc_department) || strtolower($empty_gsc_department) == strtolower('seleccionar') || $empty_gsc_department == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de departamento es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_gsc_department)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de departamento solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_gsc_third_parties) || strtolower($empty_gsc_third_parties) == strtolower('seleccionar') || $empty_gsc_third_parties == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tercero es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_gsc_third_parties)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tercero solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "' AND " . d_azp_gsc_request_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_request_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "' AND " . d_azp_gsc_request_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_gsc_causal = $this->db->select('*', t_azp_gsc_causal, d_azp_gsc_causal_id_azp_gsc_causal . " = '" . $empty_gsc_causal . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_gsc_causal) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_gsc_causal) == '') { $sql_gsc_causal[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_gsc_causal[0][0]) != strtolower($empty_gsc_causal)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El causal seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				/*# Verificar si el registro existe en la tabla
				$sql_gsc_client = $this->db->select('*', t_azp_gsc_client, d_azp_gsc_client_id_azp_gsc_client . " = '" . $empty_gsc_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_gsc_client) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_gsc_client) == '') { $sql_gsc_client[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_gsc_client[0][0]) != strtolower($empty_gsc_client)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El cliente seleccionado no se encuentra registrado.');
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
		final public function sql_azp_gsc_request_update(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_request_update($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				#-------------------------------------------------------------------------#
				$empty_city = $this->db->scape($data['field_up_city']);
				$empty_death_date = $this->db->scape($data['field_up_death_date']);
				$empty_number_obligation = $this->db->scape($data['field_up_number_obligation']);
				$empty_notary = $this->db->scape($data['field_up_notary']);
				//$empty_observation = $this->db->scape($data['field_up_observation']);
				$empty_observation_outer = $this->db->scape($data['field_up_observation_outer']);
				//$empty_reported_bank = $this->db->scape($data['field_up_reported_bank']);
				$empty_request_by = $this->db->scape($data['field_up_request_by']);
				$empty_request_date = $this->db->scape($data['field_up_request_date']);
				$empty_serial = $this->db->scape($data['field_up_serial']);
				//$empty_shipping_number = $this->db->scape($data['field_up_shipping_number']);
				$empty_supplier_request_date = $this->db->scape($data['field_up_supplier_request_date']);
				$empty_supplier_request_number = $this->db->scape($data['field_up_supplier_request_number']);
				$empty_gsc_causal = $this->db->scape($data['field_up_gsc_causal']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_array = array(
							d_azs_gsc_request_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_gsc_request_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_gsc_request_m_date_created => DATE_HOUR,
							d_azs_gsc_request_m_date_modified => DATE_HOUR,
							d_azs_gsc_request_m_deleted => $key_sql[d_azp_gsc_request_m_deleted],
							d_azs_gsc_request_m_description => $key_sql[d_azp_gsc_request_m_description],
							d_azs_gsc_request_m_level => $key_sql[d_azp_gsc_request_m_level],
							d_azs_gsc_request_m_status => $key_sql[d_azp_gsc_request_m_status],
							d_azs_gsc_request_m_temp => $key_sql[d_azp_gsc_request_m_temp],
							d_azs_gsc_request_s_capture => $key_sql[d_azp_gsc_request_s_capture],
							d_azs_gsc_request_s_data => $key_sql[d_azp_gsc_request_s_data],
							d_azs_gsc_request_s_existing => $key_sql[d_azp_gsc_request_s_existing],
							d_azs_gsc_request_s_validate => $key_sql[d_azp_gsc_request_s_validate],
							d_azs_gsc_request_s_web_service => $key_sql[d_azp_gsc_request_s_web_service],
							d_azs_gsc_request_v_id_azp_gsc_request => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_gsc_request, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_request_m_by_modified => $_SESSION[SESS_APP_ID],
					//d_azp_gsc_request_m_date_modified => DATE_HOUR,
					//d_azp_gsc_request_m_description => $empty_description,
					//d_azp_gsc_request_s_capture => $empty_capture,
					d_azp_gsc_request_s_data => 'Si',
					//d_azp_gsc_request_s_existing => $empty_existing,
					//d_azp_gsc_request_s_validate => $empty_validate,
					//d_azp_gsc_request_s_web_service => $empty_web_service,
					//d_azp_gsc_request_t_identification => $var_identification,
					//d_azp_gsc_request_t_full_name => $var_full_name,
					d_azp_gsc_request_t_city => $empty_city,
					d_azp_gsc_request_t_death_date => $empty_death_date,
					d_azp_gsc_request_t_notary => $empty_notary,
					d_azp_gsc_request_t_number_obligation => $empty_number_obligation,
					//d_azp_gsc_request_t_number_request => $var_number_request,
					//d_azp_gsc_request_t_observation => $empty_observation,
					d_azp_gsc_request_t_observation_outer => $empty_observation_outer,
					//d_azp_gsc_request_t_reported_bank => $empty_reported_bank,
					d_azp_gsc_request_t_request_by => $empty_request_by,
					d_azp_gsc_request_t_request_date => $empty_request_date,
					d_azp_gsc_request_t_serial => $empty_serial,
					//d_azp_gsc_request_t_shipping_number => $empty_shipping_number,
					d_azp_gsc_request_t_supplier_request_date => $empty_supplier_request_date,
					d_azp_gsc_request_t_supplier_request_number => $empty_supplier_request_number,
					d_azp_gsc_request_v_id_azp_gsc_causal => $empty_gsc_causal,
					//d_azp_gsc_request_v_id_azp_gsc_client => $empty_gsc_client,
					//d_azp_gsc_request_v_id_azp_gsc_expiration => $empty_gsc_expiration,
					//d_azp_gsc_request_v_id_azp_gsc_phase => $empty_gsc_phase,
					//d_azp_gsc_request_v_id_azp_gsc_state => $empty_gsc_state,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_causal, d_azp_gsc_causal_id_azp_gsc_causal . " = '" . $empty_gsc_causal . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_array = array(d_azp_gsc_request_v_id_azp_gsc_state => $key_sql[d_azp_gsc_causal_v_id_azp_gsc_state],);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_id . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_causal() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_causal, d_azp_gsc_causal_m_deleted . " = '1' AND " . d_azp_gsc_causal_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_causales() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_causal, d_azp_gsc_causal_id_azp_gsc_causal . " > '1' AND " . d_azp_gsc_causal_m_deleted . " = '1' AND " . d_azp_gsc_causal_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_city() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_city, d_azp_gsc_city_m_deleted . " = '1' AND " . d_azp_gsc_city_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_request_client() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_client = $key_sql[d_azp_user_v_id_azp_fct_client]; endforeach; } else { $var_client = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_client,
				d_azp_gsc_client_id_azp_gsc_client . " > 1 AND " .
				d_azp_gsc_client_m_deleted . " = '1' AND " .
				d_azp_gsc_client_m_status . " = '1' AND " .
				d_azp_gsc_client_v_id_azp_fct_client . " = '" . $var_client . "'
				GROUP BY " . d_azp_gsc_client_t_name . " ASC
				ORDER BY " . d_azp_gsc_client_t_name . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_request_image() {
			if (!isset($_GET['field_rq'])) { $var_request = ''; } else { $var_request = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " LIKE '%" . $_GET['field_rq'] . "%'"; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " AS 'lbl_azp_gsc_client_id_azp_gsc_client',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request'

				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				
				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '1' " . $var_request . "
					AND tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . " = '" . $this->id . "'
				GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_request_climage() {
			if (isset($_GET['field_rq'])) { $var_rq = $_GET['field_rq']; } else { $var_rq = ''; } $var_client = ''; $var_request = '';
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_v_id_azp_role . " = '9'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_gsc_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach; }
			#-------------------------------------------------------------------------#
			# Consulta para identificar los nuevos registros en la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_fct_client',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_request'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request

				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "

				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " = '" . $var_rq . "'
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_id_client = $value['lbl_fct_client']; $var_request = $value['lbl_request']; endforeach; }
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->select('*', t_azp_gsc_client, d_azp_gsc_client_m_deleted . " = '1' AND " . d_azp_gsc_client_id_azp_gsc_client . " = '" . $this->id . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) { foreach ($var_sql as $key => $value): $var_client = $value[d_azp_gsc_client_v_id_azp_fct_client]; endforeach; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " AS 'lbl_azp_gsc_client_id_azp_gsc_client',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '1'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " = '" . $var_request . "'
					AND tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . " = '" . $var_client . "'
				GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " ASC
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
				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
				WHERE tc_azp_fct_client." . d_azp_fct_client_m_deleted . " = '1'
				GROUP BY tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_client() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_client,
				d_azp_gsc_client_id_azp_gsc_client . " > 1 AND " .
				d_azp_gsc_client_m_deleted . " = '1' AND " .
				d_azp_gsc_client_m_status . " = '1'
				GROUP BY " . d_azp_gsc_client_t_name . " ASC
				ORDER BY " . d_azp_gsc_client_t_name . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_department() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_department, d_azp_gsc_department_m_deleted . " = '1' AND " . d_azp_gsc_department_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_expiration() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_expiration, d_azp_gsc_expiration_m_deleted . " = '1' AND " . d_azp_gsc_expiration_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_phase() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_phase, d_azp_gsc_phase_m_deleted . " = '1' AND " . d_azp_gsc_phase_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_third_parties() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_third_parties, d_azp_gsc_third_parties_m_deleted . " = '1' AND " . d_azp_gsc_third_parties_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_third_parties_group_by() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_third_parties, d_azp_gsc_third_parties_m_deleted . " = '1' AND " . d_azp_gsc_third_parties_m_status . " = '1'", "GROUP BY " . d_azp_gsc_third_parties_t_business_name . " ASC");
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_request_extra_associate(array $data) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# --------------------------------------------------------------------------------------------------
				# Cargar el helper de archivos
				Helper::load('files');
				# --------------------------------------------------------------------------------------------------
				#$this->db->query("TRUNCATE TABLE " . t_azp_gsc_update);
				//$this->db->query("DELETE FROM " . t_azp_gsc_update);
				//$this->db->query("ALTER TABLE " . t_azp_gsc_update . " AUTO_INCREMENT = 1");
				$this->db->query("DELETE FROM " . t_azp_gsc_update . " WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# --------------------------------------------------------------------------------------------------
				$var_identification = $data['t_id_import'];
				# --------------------------------------------------------------------------------------------------
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_identification as $key => $value) {
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(
						d_azs_gsc_update_m_by_created => $_SESSION[SESS_APP_ID],
						d_azs_gsc_update_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azs_gsc_update_m_date_created => DATE_HOUR,
						d_azs_gsc_update_m_date_modified => DATE_HOUR,
						d_azs_gsc_update_m_deleted => '1',
						d_azs_gsc_update_m_description => '',
						d_azs_gsc_update_m_level => '2',
						d_azs_gsc_update_m_status => '1',
						d_azs_gsc_update_m_temp => '1',
						d_azp_gsc_update_v_id_azp_gsc_request => $value,
					);
					# Insertar valores en la nueva tabla que no existen
					$this->db->insert(t_azp_gsc_update, $var_array);
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_m_deleted . " = '1' AND " . d_azp_gsc_request_m_status . " = '1'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_update_s_capture => $key_sql[d_azp_gsc_request_s_capture],
							d_azp_gsc_update_s_data => $key_sql[d_azp_gsc_request_s_data],
							d_azp_gsc_update_s_existing => $key_sql[d_azp_gsc_request_s_existing],
							d_azp_gsc_update_s_validate => $key_sql[d_azp_gsc_request_s_validate],
							d_azp_gsc_update_s_web_service => $key_sql[d_azp_gsc_request_s_web_service],
							d_azp_gsc_update_t_city => $key_sql[d_azp_gsc_request_t_city],
							d_azp_gsc_update_t_death_date => $key_sql[d_azp_gsc_request_t_death_date],
							d_azp_gsc_update_t_full_name => $key_sql[d_azp_gsc_request_t_full_name],
							d_azp_gsc_update_t_identification => $key_sql[d_azp_gsc_request_t_identification],
							d_azp_gsc_update_t_notary => $key_sql[d_azp_gsc_request_t_notary],
							d_azp_gsc_update_t_number_obligation => $key_sql[d_azp_gsc_request_t_number_obligation],
							d_azp_gsc_update_t_number_request => $key_sql[d_azp_gsc_request_t_number_request],
							d_azp_gsc_update_t_observation => $key_sql[d_azp_gsc_request_t_observation],
							d_azp_gsc_update_t_observation_outer => $key_sql[d_azp_gsc_request_t_observation_outer],
							d_azp_gsc_update_t_reported_bank => $key_sql[d_azp_gsc_request_t_reported_bank],
							d_azp_gsc_update_t_request_by => $key_sql[d_azp_gsc_request_t_request_by],
							d_azp_gsc_update_t_request_date => $key_sql[d_azp_gsc_request_t_request_date],
							d_azp_gsc_update_t_serial => $key_sql[d_azp_gsc_request_t_serial],
							//d_azp_gsc_update_t_shipping_number => $key_sql[d_azp_gsc_request_t_shipping_number],
							d_azp_gsc_update_t_supplier_request_date => $key_sql[d_azp_gsc_request_t_supplier_request_date],
							d_azp_gsc_update_t_supplier_request_number => $key_sql[d_azp_gsc_request_t_supplier_request_number],
							d_azp_gsc_update_v_id_azp_gsc_causal => $key_sql[d_azp_gsc_request_v_id_azp_gsc_causal],
							d_azp_gsc_update_v_id_azp_gsc_client => $key_sql[d_azp_gsc_request_v_id_azp_gsc_client],
							d_azp_gsc_update_v_id_azp_gsc_expiration => $key_sql[d_azp_gsc_request_v_id_azp_gsc_expiration],
							d_azp_gsc_update_v_id_azp_gsc_phase => $key_sql[d_azp_gsc_request_v_id_azp_gsc_phase],
							d_azp_gsc_update_v_id_azp_gsc_state => $key_sql[d_azp_gsc_request_v_id_azp_gsc_state],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_update, $var_array,
							d_azp_gsc_update_v_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_request_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
						);
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Consulta del dato maximo en la tabla
				$var_sql_rq = $this->db->query("
					SELECT MAX(" . d_azp_gsc_request_id_azp_gsc_request . ") AS 'lbl_max_id'
					FROM " . t_azp_gsc_request . " tc_azp_gsc_request
					INNER JOIN " . t_azp_gsc_update . " tc_azp_gsc_update
						ON tc_azp_gsc_request." . d_azp_gsc_request_t_identification . "
							= tc_azp_gsc_update." . d_azp_gsc_update_t_identification . "
					WHERE tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '1'
						AND tc_azp_gsc_request." . d_azp_gsc_request_s_data . " = 'Si'
						AND tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_t_identification . "
				");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_rq) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_rq as $key_sql_rq):
						# Seleccionar los valores de la cedula con el maximo id encontrado en solicitudes
						$var_sql_rq = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql_rq['lbl_max_id'] . "' AND " . d_azp_gsc_request_m_deleted . " = '1'");
						# Verificiar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql_rq) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_sql_rq as $key_sql_rq):
								$var_array = array(
									//d_azp_gsc_update_s_capture => $key_sql_rq[d_azp_gsc_request_s_capture],
									d_azp_gsc_update_s_data => $key_sql_rq[d_azp_gsc_request_s_data],
									//d_azp_gsc_update_s_existing => $key_sql_rq[d_azp_gsc_request_s_existing],
									//d_azp_gsc_update_s_validate => $key_sql_rq[d_azp_gsc_request_s_validate],
									//d_azp_gsc_update_s_web_service => $key_sql_rq[d_azp_gsc_request_s_web_service],
									d_azp_gsc_update_t_city => $key_sql_rq[d_azp_gsc_request_t_city],
									d_azp_gsc_update_t_death_date => $key_sql_rq[d_azp_gsc_request_t_death_date],
									//d_azp_gsc_update_t_full_name => $key_sql_rq[d_azp_gsc_request_t_full_name],
									//d_azp_gsc_update_t_identification => $key_sql_rq[d_azp_gsc_request_t_identification],
									d_azp_gsc_update_t_notary => $key_sql_rq[d_azp_gsc_request_t_notary],
									d_azp_gsc_update_t_number_obligation => $key_sql_rq[d_azp_gsc_request_t_number_obligation],
									//d_azp_gsc_update_t_number_request => $key_sql_rq[d_azp_gsc_request_t_number_request],
									d_azp_gsc_update_t_observation => $key_sql_rq[d_azp_gsc_request_t_observation],
									d_azp_gsc_update_t_observation_outer => $key_sql_rq[d_azp_gsc_request_t_observation_outer],
									d_azp_gsc_update_t_reported_bank => $key_sql_rq[d_azp_gsc_request_t_reported_bank],
									d_azp_gsc_update_t_request_by => $key_sql_rq[d_azp_gsc_request_t_request_by],
									d_azp_gsc_update_t_request_date => $key_sql_rq[d_azp_gsc_request_t_request_date],
									d_azp_gsc_update_t_serial => $key_sql_rq[d_azp_gsc_request_t_serial],
									//d_azp_gsc_update_t_shipping_number => $key_sql_rq[d_azp_gsc_request_t_shipping_number],
									d_azp_gsc_update_t_supplier_request_date => $key_sql_rq[d_azp_gsc_request_t_supplier_request_date],
									d_azp_gsc_update_t_supplier_request_number => $key_sql_rq[d_azp_gsc_request_t_supplier_request_number],
									//d_azp_gsc_update_v_id_azp_gsc_causal => $key_sql_rq[d_azp_gsc_request_v_id_azp_gsc_causal],
									//d_azp_gsc_update_v_id_azp_gsc_client => $key_sql_rq[d_azp_gsc_request_v_id_azp_gsc_client],
									//d_azp_gsc_update_v_id_azp_gsc_expiration => $key_sql_rq[d_azp_gsc_request_v_id_azp_gsc_expiration],
									//d_azp_gsc_update_v_id_azp_gsc_phase => '9',
									//d_azp_gsc_update_v_id_azp_gsc_state => '2',
								);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_gsc_update, $var_array,
									d_azp_gsc_update_t_identification . " = '" . $key_sql_rq[d_azp_gsc_request_t_identification] . "' AND " .
									d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
								);
							endforeach;
						}
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Seleccionar los valores de la cedula con el maximo id encontrado en solicitudes
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_s_data . " = 'Si' AND " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_request_m_by_modified => $_SESSION[SESS_APP_ID],
							//d_azp_gsc_request_m_date_modified => DATE_HOUR,
							//d_azp_gsc_request_m_deleted => $key_sql[d_azp_gsc_update_m_deleted],
							//d_azp_gsc_request_m_description => $key_sql[d_azp_gsc_update_m_description],
							//d_azp_gsc_request_m_level => $key_sql[d_azp_gsc_update_m_level],
							//d_azp_gsc_request_m_status => $key_sql[d_azp_gsc_update_m_status],
							//d_azp_gsc_request_s_capture => $key_sql[d_azp_gsc_update_s_capture],
							d_azp_gsc_request_s_data => $key_sql[d_azp_gsc_update_s_data],
							//d_azp_gsc_request_s_existing => $key_sql[d_azp_gsc_update_s_existing],
							//d_azp_gsc_request_s_validate => $key_sql[d_azp_gsc_update_s_validate],
							//d_azp_gsc_request_s_web_service => $key_sql[d_azp_gsc_update_s_web_service],
							d_azp_gsc_request_t_city => $key_sql[d_azp_gsc_update_t_city],
							d_azp_gsc_request_t_date_associate => DATE_HOUR,
							d_azp_gsc_request_t_death_date => $key_sql[d_azp_gsc_update_t_death_date],
							//d_azp_gsc_request_t_full_name => $key_sql[d_azp_gsc_update_t_full_name],
							//d_azp_gsc_request_t_identification => $key_sql[d_azp_gsc_update_t_identification],
							d_azp_gsc_request_t_notary => $key_sql[d_azp_gsc_update_t_notary],
							d_azp_gsc_request_t_number_obligation => $key_sql[d_azp_gsc_update_t_number_obligation],
							//d_azp_gsc_request_t_number_request => $key_sql[d_azp_gsc_update_t_number_request],
							d_azp_gsc_request_t_observation => $key_sql[d_azp_gsc_update_t_observation],
							d_azp_gsc_request_t_observation_outer => $key_sql[d_azp_gsc_update_t_observation_outer],
							d_azp_gsc_request_t_reported_bank => $key_sql[d_azp_gsc_update_t_reported_bank],
							//d_azp_gsc_request_t_request_by => $key_sql[d_azp_gsc_update_t_request_by],
							//d_azp_gsc_request_t_request_date => $key_sql[d_azp_gsc_update_t_request_date],
							d_azp_gsc_request_t_serial => $key_sql[d_azp_gsc_update_t_serial],
							//d_azp_gsc_request_t_shipping_number => $key_sql[d_azp_gsc_update_t_shipping_number],
							//d_azp_gsc_request_t_supplier_request_date => $key_sql[d_azp_gsc_update_t_supplier_request_date],
							d_azp_gsc_request_t_supplier_request_number => $key_sql[d_azp_gsc_update_t_supplier_request_number],
							//d_azp_gsc_request_v_id_azp_gsc_causal => $key_sql[d_azp_gsc_update_v_id_azp_gsc_causal],
							//d_azp_gsc_request_v_id_azp_gsc_client => $key_sql[d_azp_gsc_update_v_id_azp_gsc_client],
							//d_azp_gsc_request_v_id_azp_gsc_expiration => $key_sql[d_azp_gsc_update_v_id_azp_gsc_expiration],
							//d_azp_gsc_request_v_id_azp_gsc_phase => '8',
							//d_azp_gsc_request_v_id_azp_gsc_state => '2',
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_request, $var_array,
							d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " . d_azp_gsc_request_m_deleted . " = '1'");
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_gsc_capture_m_temp => '2',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_capture, $var_array,
							d_azp_gsc_capture_v_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " . d_azp_gsc_capture_m_deleted . " = '1'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_s_data . " = 'Si' AND " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_observation_internal_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_observation_internal_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_observation_internal_m_date_created => DATE_HOUR,
							d_azp_gsc_observation_internal_m_date_modified => DATE_HOUR,
							d_azp_gsc_observation_internal_m_deleted => '1',
							d_azp_gsc_observation_internal_m_description => '',
							d_azp_gsc_observation_internal_m_level => '2',
							d_azp_gsc_observation_internal_m_status => '1',
							d_azp_gsc_observation_internal_m_temp => '1',
							d_azp_gsc_observation_internal_t_identification => $key_sql[d_azp_gsc_update_t_identification],
							d_azp_gsc_observation_internal_t_observation => 'Se actualizan y se asocian datos duplicados.',
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_observation_internal, $var_array);
						#-------------------------------------------------------------------------#
						$var_array = array(d_azp_gsc_request_t_observation => DATE . ' ' . 'Se actualizan y se asocian datos duplicados.',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Consulta del dato maximo en la tabla
				$var_sql_cp = $this->db->query("
					SELECT MAX(" . d_azp_gsc_capture_id_azp_gsc_capture . ") AS 'lbl_max_id',
						" . d_azp_gsc_capture_t_folder . " AS 'lbl_folder'
					FROM " . t_azp_gsc_capture . "
					WHERE " . d_azp_gsc_capture_m_deleted . " = '1'
						AND " . d_azp_gsc_capture_t_folder . " IN (
							SELECT " . d_azp_gsc_update_t_identification . " FROM " . t_azp_gsc_update . "
							WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						)
						AND " . d_azp_gsc_capture_t_name . " != ''
						AND " . d_azp_gsc_capture_s_validate . " = 'Si'
						AND " . d_azp_gsc_capture_t_date_visible . " = '2'
					GROUP BY " . d_azp_gsc_capture_t_folder . "
				");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_cp) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_cp as $key_sql_cp):
						# Seleccionar los valores de la cedula con el maximo id encontrado en solicitudes
						$var_sql_cp = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $key_sql_cp['lbl_max_id'] . "' AND " . d_azp_gsc_capture_m_deleted . " = '1'");
						# Verificiar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql_cp) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_sql_cp as $key_sql_cp):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(
									d_azp_gsc_capture_m_by_modified => $_SESSION[SESS_APP_ID],
									d_azp_gsc_capture_m_date_modified => $key_sql_cp[d_azp_gsc_capture_m_date_modified],
									d_azp_gsc_capture_m_description => $key_sql_cp[d_azp_gsc_capture_m_description],
									d_azp_gsc_capture_t_date_load => DATE,
									d_azp_gsc_capture_t_date_visible => $key_sql_cp[d_azp_gsc_capture_t_date_visible],
									d_azp_gsc_capture_t_document => $key_sql_cp[d_azp_gsc_capture_t_document],
									d_azp_gsc_capture_t_error => $key_sql_cp[d_azp_gsc_capture_t_error],
									d_azp_gsc_capture_t_name => $key_sql_cp[d_azp_gsc_capture_t_name],
									d_azp_gsc_capture_t_size => $key_sql_cp[d_azp_gsc_capture_t_size],
									d_azp_gsc_capture_t_title => $key_sql_cp[d_azp_gsc_capture_t_title],
									d_azp_gsc_capture_t_tmp_name => $key_sql_cp[d_azp_gsc_capture_t_tmp_name],
									d_azp_gsc_capture_t_type => $key_sql_cp[d_azp_gsc_capture_t_type],
									d_azp_gsc_capture_s_validate => $key_sql_cp[d_azp_gsc_capture_s_validate],
								);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								/*$this->db->update(t_azp_gsc_capture, $var_array, d_azp_gsc_capture_m_deleted . " = '1' AND " . d_azp_gsc_capture_v_id_azp_gsc_request . " IN (SELECT " . d_azp_gsc_update_v_id_azp_gsc_request . " FROM " . t_azp_gsc_update . ")");*/
								$this->db->update(t_azp_gsc_capture, $var_array, d_azp_gsc_capture_m_deleted . " = '1' AND " . d_azp_gsc_capture_t_document . " = '' AND " . d_azp_gsc_capture_t_folder . " = '" . $key_sql_cp[d_azp_gsc_capture_t_folder] . "'");
								#---------------------------------------------#
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_gsc_request_s_capture => 'Si',);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								/*$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " IN (SELECT " . d_azp_gsc_update_v_id_azp_gsc_request . " FROM " . t_azp_gsc_update . ") AND " . d_azp_gsc_request_m_deleted . " = '1'");*/
								$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_s_capture . " = 'No' AND " . d_azp_gsc_request_t_identification . " = '" . $key_sql_cp[d_azp_gsc_capture_t_folder] . "'");
								#-------------------------------------------------------------------------#
								$var_array = array(
									d_azp_gsc_logs_request_m_by_created => $_SESSION[SESS_APP_ID],
									d_azp_gsc_logs_request_m_by_modified => $_SESSION[SESS_APP_ID],
									d_azp_gsc_logs_request_m_date_created => DATE_HOUR,
									d_azp_gsc_logs_request_m_date_modified => DATE_HOUR,
									d_azp_gsc_logs_request_m_deleted => '1',
									d_azp_gsc_logs_request_m_description => '',
									d_azp_gsc_logs_request_m_level => '2',
									d_azp_gsc_logs_request_m_status => '1',
									d_azp_gsc_logs_request_m_temp => '1',
									d_azp_gsc_logs_request_t_action => 'Evento Ejecutado: Fase cambiada a Captura Certificado',
									d_azp_gsc_logs_request_t_date => DATE,
									d_azp_gsc_logs_request_v_id_azp_gsc_request => $key_sql_cp[d_azp_gsc_capture_v_id_azp_gsc_request],
								);
								# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
								$this->db->insert(t_azp_gsc_logs_request, $var_array);
								#-------------------------------------------------------------------------#
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(
									d_azp_gsc_observation_internal_m_by_created => $_SESSION[SESS_APP_ID],
									d_azp_gsc_observation_internal_m_by_modified => $_SESSION[SESS_APP_ID],
									d_azp_gsc_observation_internal_m_date_created => DATE_HOUR,
									d_azp_gsc_observation_internal_m_date_modified => DATE_HOUR,
									d_azp_gsc_observation_internal_m_deleted => '1',
									d_azp_gsc_observation_internal_m_description => '',
									d_azp_gsc_observation_internal_m_level => '2',
									d_azp_gsc_observation_internal_m_status => '1',
									d_azp_gsc_observation_internal_m_temp => '1',
									d_azp_gsc_observation_internal_t_identification => $key_sql[d_azp_gsc_update_t_identification],
									d_azp_gsc_observation_internal_t_observation => 'Se recibe certificado.',
								);
								# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
								$this->db->insert(t_azp_gsc_observation_internal, $var_array);
								#-------------------------------------------------------------------------#
								$var_array = array(d_azp_gsc_request_t_observation => DATE . ' ' . 'Se recibe certificado.',);
								# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
								$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
							endforeach;
						}
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_t_notary . " = 'MINISTERIO DE SALUD Y PROTECCION SOCIAL-MINSALUD'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Asignacion de valores a nuevas variables
						$var_id = $key_sql[d_azp_gsc_request_id_azp_gsc_request];
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_gsc_request_s_data => 'No',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $var_id . "'");
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Organizacion de los valores capturados y asignados a los campos a insertar
				$var_array = array(d_azp_gsc_request_s_capture => 'No',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_m_deleted . " = '1' AND " . d_azp_gsc_request_s_capture . " = ''");
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos actualizados y asociados correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_gsc_request_data() {
			$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_t_notary . " = 'MINISTERIO DE SALUD Y PROTECCION SOCIAL-MINSALUD'");
			# Validar si la consulta es verdadera
			if (false != $var_sql) {
				# Recorrer las filas de la consulta generada
				foreach ($var_sql as $key_sql):
					# Asignacion de valores a nuevas variables
					$var_id = $key_sql[d_azp_gsc_request_id_azp_gsc_request];
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(d_azp_gsc_request_s_data => 'No',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $var_id . "'");
				endforeach;
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_gsc_request_document(string $var_template, string $var_causal, string $var_name, string $var_type, string $var_tmp_name, string $var_error, string $var_size) {
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
				$this->db->query("DELETE FROM " . t_azp_gsc_import);
				# Restaurar valor de la tabla desde el inicio para el nuevo cargue
				$this->db->query("ALTER TABLE " . t_azp_gsc_import . " AUTO_INCREMENT = 1");
				# --------------------------------------------------------------------------------------------------
				# Control para la validacion respectiva de la plantilla
				if ($var_template == 1) {
					# Obtener datos del archivo recibido y saltar lineas
					$var_file = file_get_contents($var_tmp_name);
					$var_file = explode("\n", $var_file);
					$var_file = array_filter($var_file);
					# Recorrer los datos del archivo y separarlos por coma o punto y coma
					foreach ($var_file as $key => $value) { $var_list[] = explode(";", $value); }
					# Recorrer los datos divididos por filas y almacenarlos en la base
					foreach ($var_list as $key => $value) {
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[0])) { $import_number_request = ''; } else {
							if ($value[0] != '' || $value[0] != NULL) {
								$import_number_request = $this->db->scape($value[0]);
							} else { $import_number_request = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[1])) { $import_gsc_client = '0'; } else {
							if ($value[1] != '' || $value[1] != NULL) {
								$import_gsc_client = $this->db->scape($value[1]);
							} else { $import_gsc_client = '0'; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[2])) { $import_identification = ''; } else {
							if ($value[2] != '' || $value[2] != NULL) {
								$import_identification = $this->db->scape($value[2]);
							} else { $import_identification = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[3])) { $import_full_name = ''; } else {
							if ($value[3] != '' || $value[3] != NULL) {
								$import_full_name = $this->db->scape($value[3]);
							} else { $import_full_name = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[4])) { $import_number_obligation = ''; } else {
							if ($value[4] != '' || $value[4] != NULL) {
								$import_number_obligation = $this->db->scape($value[4]);
							} else { $import_number_obligation = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[5])) { $import_requested_by = ''; } else {
							if ($value[5] != '' || $value[5] != NULL) {
								$import_requested_by = $this->db->scape($value[5]);
							} else { $import_requested_by = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[6])) { $import_request_date = ''; } else {
							if ($value[6] != '' || $value[6] != NULL) {
								$import_request_date = $this->db->scape($value[6]);
							} else { $import_request_date = ''; }
						}
						# Reemplazar ciertos caracteres especificados de los valores recibidos
						$repl_full_name = str_replace($var_search, $var_replace, $import_full_name);
						$repl_identification = str_replace($var_search, $var_replace, $import_identification);
						$repl_number_request = str_replace($var_search, $var_replace, $import_number_request);
						$repl_number_obligation = str_replace($var_search, $var_replace, $import_number_obligation);
						$repl_requested_by = str_replace($var_search, $var_replace, $import_requested_by);
						$repl_request_date = str_replace($var_search, $var_replace, $import_request_date);
						$repl_gsc_client = str_replace($var_search, $var_replace, $import_gsc_client);
						# Eliminar dobles vacios en los valores recibidos
						$preg_full_name = trim(preg_replace('/\s+/',' ', $repl_full_name));
						$preg_identification = trim(preg_replace('/\s+/','', $repl_identification));
						$preg_number_request = trim(preg_replace('/\s+/','', $repl_number_request));
						$preg_number_obligation = trim(preg_replace('/\s+/','', $repl_number_obligation));
						$preg_requested_by = trim(preg_replace('/\s+/',' ', $repl_requested_by));
						$preg_request_date = trim(preg_replace('/\s+/','', $repl_request_date));
						$preg_gsc_client = trim(preg_replace('/\s+/','', $repl_gsc_client));
						# Asignacion de valores finales para almacenar en la base
						$frmt_full_name = strtoupper($preg_full_name);
						$frmt_identification = $preg_identification;
						$frmt_number_request = strtoupper($preg_number_request);
						$frmt_number_obligation = $preg_number_obligation;
						$frmt_requested_by = strtoupper($preg_requested_by);
						$frmt_request_date = $preg_request_date;
						$frmt_gsc_client = $preg_gsc_client;
						# Validacion de valores recibidos para codificacion.
						$empty_full_name = html_entity_decode(utf8_encode($frmt_full_name));
						$empty_identification = html_entity_decode(utf8_encode($frmt_identification));
						$empty_number_request = html_entity_decode(utf8_encode($frmt_number_request));
						$empty_number_obligation = html_entity_decode(utf8_encode($frmt_number_obligation));
						$empty_requested_by = html_entity_decode(utf8_encode($frmt_requested_by));
						$empty_request_date = html_entity_decode(utf8_encode($frmt_request_date));
						$empty_gsc_client = html_entity_decode(utf8_encode($frmt_gsc_client));
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_import_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_import_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_import_m_date_created => DATE_HOUR,
							d_azp_gsc_import_m_date_modified => DATE_HOUR,
							d_azp_gsc_import_m_deleted => '2',
							d_azp_gsc_import_m_description => '',
							d_azp_gsc_import_m_level => '2',
							d_azp_gsc_import_m_status => '1',
							d_azp_gsc_import_m_temp => '5',
							d_azp_gsc_import_s_capture => 'No',
							d_azp_gsc_import_s_client => '0',
							d_azp_gsc_import_s_code => $empty_gsc_client,
							d_azp_gsc_import_s_data => 'No',
							d_azp_gsc_import_s_existing => 'No',
							d_azp_gsc_import_s_validate => 'No',
							d_azp_gsc_import_s_web_service => 'No',
							d_azp_gsc_import_t_city => '',
							d_azp_gsc_import_t_death_date => '',
							d_azp_gsc_import_t_full_name => $empty_full_name,
							d_azp_gsc_import_t_id_supplier => '',
							d_azp_gsc_import_t_identification => $empty_identification,
							d_azp_gsc_import_t_notary => '',
							d_azp_gsc_import_t_number_request => $empty_number_request,
							d_azp_gsc_import_t_number_obligation => $empty_number_obligation,
							d_azp_gsc_import_t_observation => '',
							d_azp_gsc_import_t_observation_outer => '',
							d_azp_gsc_import_t_reported_bank => '',
							d_azp_gsc_import_t_request_by => $empty_requested_by,
							d_azp_gsc_import_t_request_date => $empty_request_date,
							d_azp_gsc_import_t_request_state => '1',
							d_azp_gsc_import_t_serial => '',
							d_azp_gsc_import_t_shipping_number => '0',
							d_azp_gsc_import_t_supplier_request_date => '',
							d_azp_gsc_import_t_supplier_request_number => $empty_gsc_client . '_' . $empty_number_request,
							d_azp_gsc_import_v_id_azp_gsc_causal => '1',
							d_azp_gsc_import_v_id_azp_gsc_client => '0',
							d_azp_gsc_import_v_id_azp_gsc_expiration => '1',
							d_azp_gsc_import_v_id_azp_gsc_phase => '1',
							d_azp_gsc_import_v_id_azp_gsc_state => '1',
						);
						# Insertar valores en la tabla segun estructura de la tabla
						$this->db->insert(t_azp_gsc_import, $var_array);
					}
					# --------------------------------------------------------------------------------------------------
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select('*', t_azp_gsc_import, d_azp_gsc_import_t_request_date . " = ''");
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Organizacion de los valores capturados y asignados a los campos a insertar
							$var_array = array(d_azp_gsc_import_s_date => 1,);
							# Insertar valores en la nueva tabla que no existen
							$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_id_azp_gsc_import . " = '" . $key_sql[d_azp_gsc_import_id_azp_gsc_import] . "'");
						endforeach;
					}
					# --------------------------------------------------------------------------------------------------
					# Instanciando el modelo en una variable
					$var_model = new m_azp_gsc_requestModel;
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select('*', t_azp_gsc_import, d_azp_gsc_import_t_request_date . " != ''");
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							$var_model->validate_date($key_sql[d_azp_gsc_import_t_request_date]);
							# Organizacion de los valores capturados y asignados a los campos a insertar
							$var_array = array(d_azp_gsc_import_s_date => $var_model->validate_date($key_sql[d_azp_gsc_import_t_request_date]),);
							# Insertar valores en la nueva tabla que no existen
							$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_id_azp_gsc_import . " = '" . $key_sql[d_azp_gsc_import_id_azp_gsc_import] . "'");
						endforeach;
					}
					# --------------------------------------------------------------------------------------------------
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(d_azp_gsc_import_s_date => 0,);
					# Insertar valores en la nueva tabla que no existen
					$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_s_date . " = ''");
					# --------------------------------------------------------------------------------------------------
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select('*', t_azp_gsc_import, d_azp_gsc_import_t_identification . " = '' OR " . d_azp_gsc_import_t_number_request . " = ''");
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->delete(t_azp_gsc_import, d_azp_gsc_import_id_azp_gsc_import . " = '" . $key_sql[d_azp_gsc_import_id_azp_gsc_import] . "'");
						endforeach;
					}
					# --------------------------------------------------------------------------------------------------
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select('*', t_azp_gsc_import, d_azp_gsc_import_t_identification . " IS NULL OR " . d_azp_gsc_import_t_number_request . " IS NULL");
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->delete(t_azp_gsc_import, d_azp_gsc_import_id_azp_gsc_import . " = '" . $key_sql[d_azp_gsc_import_id_azp_gsc_import] . "'");
						endforeach;
					}
					# --------------------------------------------------------------------------------------------------
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_gsc_import_v_id_azp_gsc_causal => '1',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_causal . " = '0'");
					#---------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					/*$var_array = array(d_azp_gsc_import_v_id_azp_gsc_client => '1',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_client . " = '0'");*/
					#---------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					/*$var_array = array(d_azp_gsc_import_v_id_azp_gsc_expiration => '1',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_expiration . " = '0'");*/
					#---------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_gsc_import_v_id_azp_gsc_phase => '1',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_phase . " = '0'");
					# --------------------------------------------------------------------------------------------------
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_gsc_import_v_id_azp_gsc_causal => '1',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_causal . " = ''");
					#---------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					/*$var_array = array(d_azp_gsc_import_v_id_azp_gsc_client => '1',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_client . " = ''");*/
					#---------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					/*$var_array = array(d_azp_gsc_import_v_id_azp_gsc_expiration => '1',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_expiration . " = ''");*/
					#---------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_gsc_import_v_id_azp_gsc_phase => '1',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_phase . " = ''");
					# --------------------------------------------------------------------------------------------------
					# Eliminar registros de la tabla de importacion
					$this->db->query("DELETE FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_id_azp_gsc_import . " = '1'");
					# --------------------------------------------------------------------------------------------------
					# Eliminar registros de la tabla de importacion
					$this->db->query("DELETE FROM " . t_azp_gsc_duplicate);
					# --------------------------------------------------------------------------------------------------
					# Eliminar registros de la tabla de importacion
					$this->db->query("ALTER TABLE " . t_azp_gsc_duplicate . " AUTO_INCREMENT = 1");
					# --------------------------------------------------------------------------------------------------
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->query("
						INSERT INTO " . t_azp_gsc_duplicate . " (
							" . d_azp_gsc_duplicate_m_by_created . ",
							" . d_azp_gsc_duplicate_m_by_modified . ",
							" . d_azp_gsc_duplicate_m_date_created . ",
							" . d_azp_gsc_duplicate_m_date_modified . ",
							" . d_azp_gsc_duplicate_m_deleted . ",
							" . d_azp_gsc_duplicate_m_description . ",
							" . d_azp_gsc_duplicate_m_level . ",
							" . d_azp_gsc_duplicate_m_status . ",
							" . d_azp_gsc_duplicate_m_temp . ",
							" . d_azp_gsc_duplicate_t_row_num . ",
							" . d_azp_gsc_duplicate_v_id_azp_gsc_import . "
						) SELECT
							" . d_azp_gsc_import_m_by_created . ",
							" . d_azp_gsc_import_m_by_modified . ",
							" . d_azp_gsc_import_m_date_created . ",
							" . d_azp_gsc_import_m_date_modified . ",
							" . d_azp_gsc_import_m_deleted . ",
							" . d_azp_gsc_import_m_description . ",
							" . d_azp_gsc_import_m_level . ",
							" . d_azp_gsc_import_m_status . ",
							" . d_azp_gsc_import_m_temp . ",
							ROW_NUMBER() OVER (PARTITION BY " . d_azp_gsc_import_t_identification . "),
							" . d_azp_gsc_import_id_azp_gsc_import . "
						FROM " . t_azp_gsc_import . "
					");
					# --------------------------------------------------------------------------------------------------
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("*", t_azp_gsc_duplicate);
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Organizacion de los valores capturados y asignados a los campos a insertar
							$var_array = array(d_azp_gsc_import_s_duplicate => $key_sql[d_azp_gsc_duplicate_t_row_num],);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_gsc_import, $var_array,
								d_azp_gsc_import_id_azp_gsc_import . " = " . $key_sql[d_azp_gsc_duplicate_v_id_azp_gsc_import]);
						endforeach;
					}
					# --------------------------------------------------------------------------------------------------
					# Eliminar registros de la tabla de importacion
					$this->db->query("DELETE FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_s_duplicate . " > '1'");
					# --------------------------------------------------------------------------------------------------
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_gsc_import, d_azp_gsc_import_s_date . " = '0'");
					# Validar si la consulta es verdadera
					if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_date_count = $key_sql['lbl_count']; endforeach; }
					# Validar si la consulta es verdadera
					if ($var_date_count == 0) {
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select('*', t_azp_gsc_client, d_azp_gsc_client_id_azp_gsc_client . " > '1'");
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_gsc_import_v_id_azp_gsc_client => $key_sql[d_azp_gsc_client_id_azp_gsc_client], d_azp_gsc_import_s_client => '1',);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_s_code . " = '" . $key_sql[d_azp_gsc_client_t_code] . "'");
							endforeach;
						}
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						/*$var_sql = $this->db->query("SELECT MAX(" . d_azp_gsc_client_id_azp_gsc_client . ") AS 'lbl_max' FROM " . t_azp_gsc_client);
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_gsc_import_v_id_azp_gsc_client => '1',);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_expiration . " > '" . $key_sql['lbl_max'] . "'");
							endforeach;
						}*/
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_gsc_import, d_azp_gsc_import_s_client . " = '0'");
						# Validar si la consulta es verdadera
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_client_count = $key_sql['lbl_count']; endforeach; }
						# Validar si la consulta es verdadera
						if ($var_client_count == 0) {
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->query("
								SELECT * FROM " . t_azp_gsc_client . " tc_azp_gsc_client
								INNER JOIN " . t_azp_gsc_import . " tc_azp_gsc_import
									ON tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
										= tc_azp_gsc_import." . d_azp_gsc_import_v_id_azp_gsc_client . "
							");
							# Validar si la consulta es verdadera
							if (false != $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql):
									# Obteniendo valores de la consulta sql query
									$var_number_request = $key_sql[d_azp_gsc_import_t_number_request];
									$var_gsc_client = $key_sql[d_azp_gsc_client_t_code];
									# Concatenado valores de varios campos de la consulta
									$var_concatenate = $var_gsc_client . '_' . $var_number_request;
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(d_azp_gsc_import_t_id_supplier => $var_concatenate,);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_id_azp_gsc_import . " = " . $key_sql[d_azp_gsc_import_id_azp_gsc_import]);
								endforeach;
							}
							# --------------------------------------------------------------------------------------------------
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_gsc_import_v_id_azp_gsc_expiration => '1',);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_expiration . " IS NOT NULL");
							# --------------------------------------------------------------------------------------------------
							# Actualizar el campo existente si encuentra valores en otras tabla
							$this->db->query("
								UPDATE " . t_azp_gsc_import . " SET " . d_azp_gsc_import_s_existing . " = 'Si'
								WHERE " . d_azp_gsc_import_t_identification . " IN (
									SELECT " . d_azp_gsc_request_t_identification . "
									FROM " . t_azp_gsc_request . "
									WHERE " . d_azp_gsc_request_m_deleted . " = '1'
								)
							");
							# Actualizar el campo existente si encuentra valores en otras tabla
							$this->db->query("
								UPDATE " . t_azp_gsc_import . " SET " . d_azp_gsc_import_s_existing . " = 'No'
								WHERE " . d_azp_gsc_import_t_identification . " NOT IN (
									SELECT " . d_azp_gsc_request_t_identification . "
									FROM " . t_azp_gsc_request . "
									WHERE " . d_azp_gsc_request_m_deleted . " = '1'
								)
							");
							# --------------------------------------------------------------------------------------------------
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->query("
								SELECT MAX(" . d_azp_gsc_request_id_azp_gsc_request . ") AS 'lbl_max',
									" . d_azp_gsc_request_t_identification . " AS 'lbl_identification'
								FROM " . t_azp_gsc_request . "
								WHERE " . d_azp_gsc_request_m_deleted . " = '1'
									AND " . d_azp_gsc_request_s_data . " = 'Si'
									-- AND " . d_azp_gsc_request_t_serial . " != ''
								GROUP BY " . d_azp_gsc_request_t_identification . "
							");
							# Validar si la consulta es verdadera
							if (false != $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql):
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(d_azp_gsc_import_s_data => 'Si',);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_t_identification . " = '" . $key_sql['lbl_identification'] . "'");
								endforeach;
							}
							# Organizacion de los valores capturados y asignados a los campos a insertar
							$var_array = array(d_azp_gsc_import_s_data => 'No',);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_s_data . " = ''");
							# --------------------------------------------------------------------------------------------------
							# Actualizar el campo existente si encuentra valores en otras tabla
							$this->db->query("
								UPDATE " . t_azp_gsc_import . " tc_table_one
								INNER JOIN " . t_azp_gsc_capture . " tc_table_two
									ON tc_table_one." . d_azp_gsc_import_t_identification . "
										= tc_table_two." . d_azp_gsc_capture_t_folder . "
								SET tc_table_one." . d_azp_gsc_import_s_capture . " = 'Si'
								WHERE tc_table_two." . d_azp_gsc_capture_m_deleted . " = '1'
									AND (tc_table_two." . d_azp_gsc_capture_t_name . " != ''
										OR tc_table_two." . d_azp_gsc_capture_t_name . " != NULL)
							");
							# Actualizar el campo existente si encuentra valores en otras tabla
							$this->db->query("
								UPDATE " . t_azp_gsc_import . " tc_table_one
								INNER JOIN " . t_azp_gsc_capture . " tc_table_two
									ON tc_table_one." . d_azp_gsc_import_t_identification . "
										= tc_table_two." . d_azp_gsc_capture_t_folder . "
								SET tc_table_one." . d_azp_gsc_import_s_capture . " = 'No'
								WHERE tc_table_two." . d_azp_gsc_capture_m_deleted . " = '1'
									AND (tc_table_two." . d_azp_gsc_capture_t_name . " = ''
										OR tc_table_two." . d_azp_gsc_capture_t_name . " = NULL)
							");
							# --------------------------------------------------------------------------------------------------
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->query("
								SELECT MAX(" . d_azp_gsc_capture_t_folder . ") AS 'lbl_max'
								FROM " . t_azp_gsc_capture . "
								WHERE " . d_azp_gsc_capture_m_deleted . " = '1'
									AND " . d_azp_gsc_capture_s_validate . " = 'Si';
							");
							# Validar si la consulta es verdadera
							if (false != $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql):
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(d_azp_gsc_import_s_capture => 'Si',);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_t_identification . " = '" . $key_sql['lbl_max'] . "'");
								endforeach;
							}
							# --------------------------------------------------------------------------------------------------
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->select('*', t_azp_gsc_import);
							# Validar si la consulta es verdadera
							if (false != $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql):
									$var_identification = $key_sql[d_azp_gsc_import_t_identification];
									$var_number_request = $key_sql[d_azp_gsc_import_t_number_request];
									$var_gsc_client = $key_sql[d_azp_gsc_import_v_id_azp_gsc_client];
									# Consulta para identificar los nuevos registros en la tabla
									$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_m_deleted . " = '1' AND " . d_azp_gsc_request_t_identification . " = '" . $var_identification . "' AND " . d_azp_gsc_request_t_number_request . " = '" . $var_number_request . "' AND " . d_azp_gsc_request_v_id_azp_gsc_client . " = '" . $var_gsc_client . "'");
									# Validar si la consulta es verdadera
									if (false != $var_sql) {
										# Recorrer las filas de la consulta generada
										foreach ($var_sql as $key_sql):
											# Organizacion de los valores capturados y asignados a los campos a insertar
											$var_array = array(d_azp_gsc_import_s_validate => 'Si',);
											# Query Sql Update: Actualizar valores de la tabla segun sus campos
											$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_t_identification . " = '" . $key_sql[d_azp_gsc_request_t_identification] . "'");
										endforeach;
									}
								endforeach;
							}
							# --------------------------------------------------------------------------------------------------
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->select('*', t_azp_gsc_import, d_azp_gsc_import_s_validate . " = 'No'");
							# Validar si la consulta es verdadera
							if (false != $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql):
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(
										d_azp_gsc_request_m_by_created => $_SESSION[SESS_APP_ID],
										d_azp_gsc_request_m_by_modified => $_SESSION[SESS_APP_ID],
										d_azp_gsc_request_m_date_created => DATE_HOUR,
										d_azp_gsc_request_m_date_modified => DATE_HOUR,
										d_azp_gsc_request_m_deleted => '1',
										d_azp_gsc_request_m_description => '',
										d_azp_gsc_request_m_level => '2',
										d_azp_gsc_request_m_status => '1',
										d_azp_gsc_request_m_temp => '5',
										d_azp_gsc_request_s_capture => 'No',
										d_azp_gsc_request_s_data => 'No',
										d_azp_gsc_request_s_existing => $key_sql[d_azp_gsc_import_s_existing],
										d_azp_gsc_request_s_validate => $key_sql[d_azp_gsc_import_s_validate],
										d_azp_gsc_request_s_web_service => $key_sql[d_azp_gsc_import_s_web_service],
										d_azp_gsc_request_t_city => $key_sql[d_azp_gsc_import_t_city],
										d_azp_gsc_request_t_death_date => $key_sql[d_azp_gsc_import_t_death_date],
										d_azp_gsc_request_t_full_name => $key_sql[d_azp_gsc_import_t_full_name],
										d_azp_gsc_request_t_id_supplier => $key_sql[d_azp_gsc_import_t_id_supplier],
										d_azp_gsc_request_t_identification => $key_sql[d_azp_gsc_import_t_identification],
										d_azp_gsc_request_t_notary => $key_sql[d_azp_gsc_import_t_notary],
										d_azp_gsc_request_t_number_obligation => $key_sql[d_azp_gsc_import_t_number_obligation],
										d_azp_gsc_request_t_number_request => $key_sql[d_azp_gsc_import_t_number_request],
										d_azp_gsc_request_t_observation => $key_sql[d_azp_gsc_import_t_observation],
										d_azp_gsc_request_t_observation_outer => $key_sql[d_azp_gsc_import_t_observation_outer],
										d_azp_gsc_request_t_reported_bank => $key_sql[d_azp_gsc_import_t_reported_bank],
										d_azp_gsc_request_t_request_by => $key_sql[d_azp_gsc_import_t_request_by],
										d_azp_gsc_request_t_request_date => $key_sql[d_azp_gsc_import_t_request_date],
										d_azp_gsc_request_t_request_state => $key_sql[d_azp_gsc_import_t_request_state],
										d_azp_gsc_request_t_serial => $key_sql[d_azp_gsc_import_t_serial],
										d_azp_gsc_request_t_shipping_number => $key_sql[d_azp_gsc_import_t_shipping_number],
										d_azp_gsc_request_t_supplier_request_date => $key_sql[d_azp_gsc_import_t_supplier_request_date],
										d_azp_gsc_request_t_supplier_request_number => $key_sql[d_azp_gsc_import_t_supplier_request_number],
										d_azp_gsc_request_v_id_azp_gsc_causal => $key_sql[d_azp_gsc_import_v_id_azp_gsc_causal],
										d_azp_gsc_request_v_id_azp_gsc_client => $key_sql[d_azp_gsc_import_v_id_azp_gsc_client],
										d_azp_gsc_request_v_id_azp_gsc_expiration => $key_sql[d_azp_gsc_import_v_id_azp_gsc_expiration],
										d_azp_gsc_request_v_id_azp_gsc_phase => $key_sql[d_azp_gsc_import_v_id_azp_gsc_phase],
										d_azp_gsc_request_v_id_azp_gsc_state => $key_sql[d_azp_gsc_import_v_id_azp_gsc_state],
									);
									# Insertar valores en la nueva tabla que no existen
									$this->db->insert(t_azp_gsc_request, $var_array);
								endforeach;
							}
							# --------------------------------------------------------------------------------------------------
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_m_deleted . " = '1' AND " . d_azp_gsc_request_m_temp . " = '5'");
							# Validar si la consulta es verdadera
							if (false != $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql):
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(
										d_azp_gsc_capture_m_by_created => $_SESSION[SESS_APP_ID],
										d_azp_gsc_capture_m_by_modified => $_SESSION[SESS_APP_ID],
										d_azp_gsc_capture_m_date_created => DATE_HOUR,
										d_azp_gsc_capture_m_date_modified => DATE_HOUR,
										d_azp_gsc_capture_m_deleted => '1',
										d_azp_gsc_capture_m_description => $key_sql[d_azp_gsc_import_m_description],
										d_azp_gsc_capture_m_level => '2',
										d_azp_gsc_capture_m_status => '1',
										d_azp_gsc_capture_m_temp => '5',
										d_azp_gsc_capture_s_validate => '',
										d_azp_gsc_capture_t_date_visible => '',
										d_azp_gsc_capture_t_document => '',
										d_azp_gsc_capture_t_error => '',
										d_azp_gsc_capture_t_folder => $key_sql[d_azp_gsc_request_t_identification],
										d_azp_gsc_capture_t_name => '',
										d_azp_gsc_capture_t_route => 'filesproject/azp_gsc_capture/',
										d_azp_gsc_capture_t_size => '',
										d_azp_gsc_capture_t_title => '',
										d_azp_gsc_capture_t_tmp_name => '',
										d_azp_gsc_capture_t_type => '',
										d_azp_gsc_capture_v_id_azp_gsc_request => $key_sql[d_azp_gsc_request_id_azp_gsc_request],
									);
									# Insertar valores en la nueva tabla que no existen
									$this->db->insert(t_azp_gsc_capture, $var_array);
									# --------------------------------------------------------------------------------------------------
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(
										d_azp_gsc_consignment_m_by_created => $_SESSION[SESS_APP_ID],
										d_azp_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
										d_azp_gsc_consignment_m_date_created => DATE_HOUR,
										d_azp_gsc_consignment_m_date_modified => DATE_HOUR,
										d_azp_gsc_consignment_m_deleted => '1',
										d_azp_gsc_consignment_m_description => '',
										d_azp_gsc_consignment_m_level => '2',
										d_azp_gsc_consignment_m_status => '1',
										d_azp_gsc_consignment_m_temp => '1',
										d_azp_gsc_consignment_s_file_document => '',
										d_azp_gsc_consignment_s_file_error => '',
										d_azp_gsc_consignment_s_file_folder => $key_sql[d_azp_gsc_request_t_identification],
										d_azp_gsc_consignment_s_file_name => '',
										d_azp_gsc_consignment_s_file_route => 'filesproject/azp_gsc_consignment/',
										d_azp_gsc_consignment_s_file_size => '',
										d_azp_gsc_consignment_s_file_tmp_name => '',
										d_azp_gsc_consignment_s_file_type => '',
										d_azp_gsc_consignment_t_account_number => '',
										d_azp_gsc_consignment_t_account_type => '',
										d_azp_gsc_consignment_t_closed_value => '0',
										d_azp_gsc_consignment_t_consigned_entity => '',
										d_azp_gsc_consignment_t_consignment_code => '0',
										d_azp_gsc_consignment_t_consignment_item => '',
										d_azp_gsc_consignment_t_honorary => '0',
										d_azp_gsc_consignment_t_nit_identification => '',
										d_azp_gsc_consignment_t_to_consigned => '',
										d_azp_gsc_consignment_t_observation => '',
										d_azp_gsc_consignment_t_consignment_confirm => '2',
										d_azp_gsc_consignment_t_consignment_date => '',
										d_azp_gsc_consignment_t_nro_receipt => 'Sin_Recibo',
										d_azp_gsc_consignment_t_value_check => 'No',
										d_azp_gsc_consignment_t_value_divided => '0',
										d_azp_gsc_consignment_t_value_total => '0',
										d_azp_gsc_consignment_t_value_unique => '0',
										d_azp_gsc_consignment_t_information => 'Principal',
										d_azp_gsc_consignment_t_duplicate => 'No',
										d_azp_gsc_consignment_t_register => '0',
										d_azp_gsc_consignment_t_check_item => 'No',
										d_azp_gsc_consignment_t_nro_item => '0',
										d_azp_gsc_consignment_t_notary_consigned => '',
										d_azp_gsc_consignment_t_notary_identification => '',
										d_azp_gsc_consignment_t_notary_receipt => '',
										d_azp_gsc_consignment_t_notary_success => 'No',
										d_azp_gsc_consignment_v_id_azp_gsc_request => $key_sql[d_azp_gsc_request_id_azp_gsc_request],
									);
									# Insertar valores en la nueva tabla que no existen
									$this->db->insert(t_azp_gsc_consignment, $var_array);
								endforeach;
							}
							# --------------------------------------------------------------------------------------------------
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_gsc_request_m_temp => '1',);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_m_deleted . " = '1' AND " . d_azp_gsc_request_m_temp . " = '5'");
							# --------------------------------------------------------------------------------------------------
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_gsc_capture_m_temp => '1',);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_gsc_capture, $var_array, d_azp_gsc_capture_m_deleted . " = '1' AND " . d_azp_gsc_capture_m_temp . " = '5'");
							# --------------------------------------------------------------------------------------------------
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_gsc_consignment_m_temp => '1',);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_m_deleted . " = '1' AND " . d_azp_gsc_consignment_m_temp . " = '5'");
							# --------------------------------------------------------------------------------------------------
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_gsc_import_m_deleted => '1',);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_m_deleted . " = '2'");
							# --------------------------------------------------------------------------------------------------
							return array('success' => 1, 'message' => '<b>Exito:</b> Haz importado exitosamente el archivo de solicitudes.');
						} else { return array('error' => 1, 'message' => '<b>Error:</b> El cliente ingresado en alguna de las filas no coincide con el de la base de datos.'); }
					} else { return array('error' => 1, 'message' => '<b>Error:</b> Fechas incorrectas en el archivo de solicitudes.'); }
				} else if ($var_template == 2) {
					# Obtener datos del archivo recibido y saltar lineas
					$var_file = file_get_contents($var_tmp_name);
					$var_file = explode("\n", $var_file);
					$var_file = array_filter($var_file);
					# Recorrer los datos del archivo y separarlos por coma o punto y coma
					foreach ($var_file as $key => $value) { $var_list[] = explode(";", $value); }
					# Recorrer los datos divididos por filas y almacenarlos en la base
					foreach ($var_list as $key => $value) {
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[0])) { $import_number_consecutive = ''; } else {
							if ($value[0] != '' || $value[0] != NULL) {
								$import_number_consecutive = $this->db->scape($value[0]);
							} else { $import_number_consecutive = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[1])) { $import_id_supplier = ''; } else {
							if ($value[1] != '' || $value[1] != NULL) {
								$import_id_supplier = $this->db->scape($value[1]);
							} else { $import_id_supplier = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[2])) { $import_identification = ''; } else {
							if ($value[2] != '' || $value[2] != NULL) {
								$import_identification = $this->db->scape($value[2]);
							} else { $import_identification = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[3])) { $import_full_name = ''; } else {
							if ($value[3] != '' || $value[3] != NULL) {
								$import_full_name = $this->db->scape($value[3]);
							} else { $import_full_name = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[4])) { $import_serial = ''; } else {
							if ($value[4] != '' || $value[4] != NULL) {
								$import_serial = $this->db->scape($value[4]);
							} else { $import_serial = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[5])) { $import_notary = ''; } else {
							if ($value[5] != '' || $value[5] != NULL) {
								$import_notary = $this->db->scape($value[5]);
							} else { $import_notary = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[6])) { $import_city = ''; } else {
							if ($value[6] != '' || $value[6] != NULL) {
								$import_city = $this->db->scape($value[6]);
							} else { $import_city = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[7])) { $import_causal = ''; } else {
							if ($value[7] != '' || $value[7] != NULL) {
								$import_causal = $this->db->scape($value[7]);
							} else { $import_causal = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[8])) { $import_death_date = ''; } else {
							if ($value[8] != '' || $value[8] != NULL) {
								$import_death_date = $this->db->scape($value[8]);
							} else { $import_death_date = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[9])) { $import_observation_outer = ''; } else {
							if ($value[9] != '' || $value[9] != NULL) {
								$import_observation_outer = $this->db->scape($value[9]);
							} else { $import_observation_outer = ''; }
						}
						# Reemplazar ciertos caracteres especificados de los valores recibidos
						$repl_number_consecutive = str_replace($var_search, $var_replace, $import_number_consecutive);
						$repl_id_supplier = str_replace($var_search, $var_replace, $import_id_supplier);
						$repl_identification = str_replace($var_search, $var_replace, $import_identification);
						$repl_full_name = str_replace($var_search, $var_replace, $import_full_name);
						$repl_serial = str_replace($var_search, $var_replace, $import_serial);
						$repl_notary = str_replace($var_search, $var_replace, $import_notary);
						$repl_city = str_replace($var_search, $var_replace, $import_city);
						$repl_causal = str_replace($var_search, $var_replace, $import_causal);
						$repl_death_date = str_replace($var_search, $var_replace, $import_death_date);
						$repl_observation_outer = str_replace($var_search, $var_replace, $import_observation_outer);
						# Eliminar dobles vacios en los valores recibidos
						$preg_number_consecutive = trim(preg_replace('/\s+/','', $repl_number_consecutive));
						$preg_id_supplier = trim(preg_replace('/\s+/','', $repl_id_supplier));
						$preg_identification = trim(preg_replace('/\s+/','', $repl_identification));
						$preg_full_name = trim(preg_replace('/\s+/',' ', $repl_full_name));
						$preg_serial = trim(preg_replace('/\s+/','', $repl_serial));
						$preg_notary = trim(preg_replace('/\s+/',' ', $repl_notary));
						$preg_city = trim(preg_replace('/\s+/',' ', $repl_city));
						$preg_causal = trim(preg_replace('/\s+/',' ', $repl_causal));
						$preg_death_date = trim(preg_replace('/\s+/','', $repl_death_date));
						$preg_observation_outer = trim(preg_replace('/\s+/',' ', $repl_observation_outer));
						# Asignacion de valores finales para almacenar en la base
						$frmt_number_consecutive = $preg_number_consecutive;
						$frmt_id_supplier = strtoupper($preg_id_supplier);
						$frmt_identification = $preg_identification;
						$frmt_full_name = strtoupper($preg_full_name);
						$frmt_serial = $preg_serial;
						$frmt_notary = strtoupper($preg_notary);
						$frmt_city = strtoupper($preg_city);
						$frmt_causal = strtoupper($preg_causal);
						$frmt_death_date = $preg_death_date;
						$frmt_observation_outer = strtoupper($preg_observation_outer);
						# Validacion de valores recibidos para codificacion.
						$empty_number_consecutive = html_entity_decode(utf8_encode($frmt_number_consecutive));
						$empty_id_supplier = html_entity_decode(utf8_encode($frmt_id_supplier));
						$empty_identification = html_entity_decode(utf8_encode($frmt_identification));
						$empty_full_name = html_entity_decode(utf8_encode($frmt_full_name));
						$empty_serial = html_entity_decode(utf8_encode($frmt_serial));
						$empty_notary = html_entity_decode(utf8_encode($frmt_notary));
						$empty_city = html_entity_decode(utf8_encode($frmt_city));
						$empty_causal = html_entity_decode(utf8_encode($frmt_causal));
						$empty_death_date = html_entity_decode(utf8_encode($frmt_death_date));
						$empty_observation_outer = html_entity_decode(utf8_encode($frmt_observation_outer));
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_import_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_import_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_import_m_date_created => DATE_HOUR,
							d_azp_gsc_import_m_date_modified => DATE_HOUR,
							d_azp_gsc_import_m_deleted => '2',
							d_azp_gsc_import_m_description => '',
							d_azp_gsc_import_m_level => '2',
							d_azp_gsc_import_m_status => '1',
							d_azp_gsc_import_m_temp => '1',
							d_azp_gsc_import_s_capture => 'No',
							d_azp_gsc_import_s_data => 'No',
							d_azp_gsc_import_s_existing => 'No',
							d_azp_gsc_import_s_validate => 'No',
							d_azp_gsc_import_s_web_service => 'No',
							d_azp_gsc_import_t_city => $empty_city,
							d_azp_gsc_import_t_death_date => $empty_death_date,
							d_azp_gsc_import_t_full_name => $empty_full_name,
							d_azp_gsc_import_t_id_supplier => $empty_id_supplier,
							d_azp_gsc_import_t_identification => $empty_identification,
							d_azp_gsc_import_t_notary => $empty_notary,
							d_azp_gsc_import_t_number_consecutive => $empty_number_consecutive,
							d_azp_gsc_import_t_number_request => '',
							d_azp_gsc_import_t_number_obligation => '',
							d_azp_gsc_import_t_observation => '',
							d_azp_gsc_import_t_observation_outer => $empty_observation_outer,
							d_azp_gsc_import_t_reported_bank => '',
							d_azp_gsc_import_t_request_by => '',
							d_azp_gsc_import_t_request_date => '',
							d_azp_gsc_import_t_request_state => '1',
							d_azp_gsc_import_t_serial => $empty_serial,
							d_azp_gsc_import_t_shipping_number => '0',
							//d_azp_gsc_import_t_supplier_request_date => '',
							//d_azp_gsc_import_t_supplier_request_number => '',
							d_azp_gsc_import_v_id_azp_gsc_causal => $empty_causal,
							d_azp_gsc_import_v_id_azp_gsc_client => '1',
							d_azp_gsc_import_v_id_azp_gsc_expiration => '1',
							d_azp_gsc_import_v_id_azp_gsc_phase => '1',
							d_azp_gsc_import_v_id_azp_gsc_state => '1',
						);
						# Insertar valores en la tabla segun estructura de la tabla
						$this->db->insert(t_azp_gsc_import, $var_array);
					}
					# --------------------------------------------------------------------------------------------------
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select('*', t_azp_gsc_import, d_azp_gsc_import_t_death_date . " = ''");
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Organizacion de los valores capturados y asignados a los campos a insertar
							$var_array = array(d_azp_gsc_import_s_date => 1,);
							# Insertar valores en la nueva tabla que no existen
							$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_id_azp_gsc_import . " = '" . $key_sql[d_azp_gsc_import_id_azp_gsc_import] . "'");
						endforeach;
					}
					# --------------------------------------------------------------------------------------------------
					# Instanciando el modelo en una variable
					$var_model = new m_azp_gsc_requestModel;
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select('*', t_azp_gsc_import, d_azp_gsc_import_t_death_date . " != ''");
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Organizacion de los valores capturados y asignados a los campos a insertar
							$var_array = array(d_azp_gsc_import_s_date => $var_model->validate_date($key_sql[d_azp_gsc_import_t_death_date]),);
							# Insertar valores en la nueva tabla que no existen
							$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_id_azp_gsc_import . " = '" . $key_sql[d_azp_gsc_import_id_azp_gsc_import] . "'");
						endforeach;
					}
					# --------------------------------------------------------------------------------------------------
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(d_azp_gsc_import_s_date => 0,);
					# Insertar valores en la nueva tabla que no existen
					$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_s_date . " = ''");
					# --------------------------------------------------------------------------------------------------
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_gsc_import_v_id_azp_gsc_expiration => '1',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_expiration . " IS NOT NULL");
					# --------------------------------------------------------------------------------------------------
					# Eliminar registros de la tabla de importacion
					$this->db->query("DELETE FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_id_azp_gsc_import . " = '1'");
					# --------------------------------------------------------------------------------------------------
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_gsc_import, d_azp_gsc_import_s_date . " = '0'");
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql): $var_date_count = $key_sql['lbl_count']; endforeach;
					}
					# Validar si la consulta es verdadera
					if ($var_date_count == 0) {

						# Consulta para identificar los nuevos registros en la tabla
						$var_sql_im = $this->db->select('*', t_azp_gsc_import);
						# Validar si la consulta es verdadera
						if (false != $var_sql_im) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql_im as $key_sql_im):
								# Consulta para identificar los nuevos registros en la tabla
								$var_sql_rq = $this->db->select('*', t_azp_gsc_request,
									d_azp_gsc_request_t_identification . " = '" . $key_sql_im[d_azp_gsc_import_t_identification] . "' AND " .
									d_azp_gsc_request_t_id_supplier . " = '" . $key_sql_im[d_azp_gsc_import_t_id_supplier] . "' AND " .
									d_azp_gsc_request_v_id_azp_gsc_phase . " <= '5'");
								# Validar si la consulta es verdadera
								if (false != $var_sql_rq) {
									# Recorrer las filas de la consulta generada
									foreach ($var_sql_rq as $key_sql_rq):
										$key_sql_rq[d_azp_gsc_request_id_azp_gsc_request];
										$key_sql_rq[d_azp_gsc_request_v_id_azp_gsc_phase];
									endforeach;
								}
							endforeach;
						}

						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select('*', t_azp_gsc_request);
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_gsc_import_s_existing => 'Si',);
								# Insertar valores en la nueva tabla que no existen
								$this->db->update(t_azp_gsc_import, $var_array,
									d_azp_gsc_import_t_identification . " = '" . $key_sql[d_azp_gsc_request_t_identification] . "' AND " .
									d_azp_gsc_import_t_id_supplier . " = '" . $key_sql[d_azp_gsc_request_t_id_supplier] . "'
								");
							endforeach;
						}
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select('*', t_azp_gsc_import, d_azp_gsc_import_s_validate . " = 'No'");
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(
									d_azp_gsc_request_m_by_created => $_SESSION[SESS_APP_ID],
									d_azp_gsc_request_m_by_modified => $_SESSION[SESS_APP_ID],
									d_azp_gsc_request_m_date_created => DATE_HOUR,
									d_azp_gsc_request_m_date_modified => DATE_HOUR,
									d_azp_gsc_request_m_deleted => '1',
									d_azp_gsc_request_m_description => '',
									d_azp_gsc_request_m_level => '2',
									d_azp_gsc_request_m_status => '1',
									d_azp_gsc_request_m_temp => '1',
									d_azp_gsc_request_s_data => 'Si',
									d_azp_gsc_request_t_city => $key_sql[d_azp_gsc_import_t_city],
									d_azp_gsc_request_t_death_date => $key_sql[d_azp_gsc_import_t_death_date],
									d_azp_gsc_request_t_notary => $key_sql[d_azp_gsc_import_t_notary],
									d_azp_gsc_request_t_observation_outer => $key_sql[d_azp_gsc_import_t_observation_outer],
									d_azp_gsc_request_t_serial => $key_sql[d_azp_gsc_import_t_serial],
									d_azp_gsc_request_v_id_azp_gsc_phase => '5',
									d_azp_gsc_request_v_id_azp_gsc_state => '2',
								);
								# Insertar valores en la nueva tabla que no existen
								$this->db->update(t_azp_gsc_request, $var_array,
									d_azp_gsc_request_t_identification . " = '" . $key_sql[d_azp_gsc_import_t_identification] . "' AND " .
									d_azp_gsc_request_t_id_supplier . " = '" . $key_sql[d_azp_gsc_import_t_id_supplier] . "' AND " .
									d_azp_gsc_request_v_id_azp_gsc_phase . " <= '5'");
								#-------------------------------------------------------------------------#
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(
									d_azp_gsc_observation_internal_m_by_created => $_SESSION[SESS_APP_ID],
									d_azp_gsc_observation_internal_m_by_modified => $_SESSION[SESS_APP_ID],
									d_azp_gsc_observation_internal_m_date_created => DATE_HOUR,
									d_azp_gsc_observation_internal_m_date_modified => DATE_HOUR,
									d_azp_gsc_observation_internal_m_deleted => '1',
									d_azp_gsc_observation_internal_m_description => '',
									d_azp_gsc_observation_internal_m_level => '2',
									d_azp_gsc_observation_internal_m_status => '1',
									d_azp_gsc_observation_internal_m_temp => '1',
									d_azp_gsc_observation_internal_t_identification => $key_sql[d_azp_gsc_import_t_identification],
									d_azp_gsc_observation_internal_t_observation => 'Respuesta proveedor.',
								);
								# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
								$this->db->insert(t_azp_gsc_observation_internal, $var_array);
								#-------------------------------------------------------------------------#
								$var_array = array(d_azp_gsc_request_t_observation => DATE . ' ' . 'Respuesta proveedor.',);
								# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
								$this->db->update(t_azp_gsc_request, $var_array,
									d_azp_gsc_request_t_identification . " = '" . $key_sql[d_azp_gsc_import_t_identification] . "' AND " .
									d_azp_gsc_request_t_id_supplier . " = '" . $key_sql[d_azp_gsc_import_t_id_supplier] . "' AND " .
									d_azp_gsc_request_v_id_azp_gsc_phase . " <= '5'");
								#-------------------------------------------------------------------------#
								# Consulta para identificar los nuevos registros en la tabla
								$var_sql2 = $this->db->select('*', t_azp_gsc_request,
									d_azp_gsc_request_t_identification . " = '" . $key_sql[d_azp_gsc_import_t_identification] . "' AND " .
									d_azp_gsc_request_t_id_supplier . " = '" . $key_sql[d_azp_gsc_import_t_id_supplier] . "' AND " .
									d_azp_gsc_request_v_id_azp_gsc_phase . " <= '5'");
								# Validar si la consulta es verdadera
								if (false != $var_sql2) {
									# Recorrer las filas de la consulta generada
									foreach ($var_sql2 as $key_sql2):
										# Array para asignar argumentos o valores a los elementos
										$var_array = array(
											d_azp_gsc_logs_request_m_by_created => $_SESSION[SESS_APP_ID],
											d_azp_gsc_logs_request_m_by_modified => $_SESSION[SESS_APP_ID],
											d_azp_gsc_logs_request_m_date_created => DATE_HOUR,
											d_azp_gsc_logs_request_m_date_modified => DATE_HOUR,
											d_azp_gsc_logs_request_m_deleted => '1',
											d_azp_gsc_logs_request_m_description => '',
											d_azp_gsc_logs_request_m_level => '2',
											d_azp_gsc_logs_request_m_status => '1',
											d_azp_gsc_logs_request_m_temp => '1',
											d_azp_gsc_logs_request_t_action => 'Evento Ejecutado: Fase cambiada a Respuesta proveedor',
											d_azp_gsc_logs_request_t_date => DATE,
											d_azp_gsc_logs_request_v_id_azp_gsc_request => $key_sql2[d_azp_gsc_request_id_azp_gsc_request],
										);
										# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
										$this->db->insert(t_azp_gsc_logs_request, $var_array);
									endforeach;
								}
								#-------------------------------------------------------------------------#
							endforeach;
						}
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select('*', t_azp_gsc_import, d_azp_gsc_import_s_validate . " = 'No' AND " . d_azp_gsc_import_v_id_azp_gsc_causal . " LIKE '%Vivo%'");
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_gsc_request_v_id_azp_gsc_causal => '5', d_azp_gsc_request_v_id_azp_gsc_state => '3',);
								# Insertar valores en la nueva tabla que no existen
								$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_t_identification . " = '" . $key_sql[d_azp_gsc_import_t_identification] . "' AND " . d_azp_gsc_request_t_id_supplier . " = '" . $key_sql[d_azp_gsc_import_t_id_supplier] . "'");
							endforeach;
						}
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select('*', t_azp_gsc_import, d_azp_gsc_import_s_validate . " = 'No' AND " . d_azp_gsc_import_v_id_azp_gsc_causal . " LIKE '%Resolucion%'");
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_gsc_request_v_id_azp_gsc_causal => '7', d_azp_gsc_request_v_id_azp_gsc_state => '3',);
								# Insertar valores en la nueva tabla que no existen
								$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_t_identification . " = '" . $key_sql[d_azp_gsc_import_t_identification] . "' AND " . d_azp_gsc_request_t_id_supplier . " = '" . $key_sql[d_azp_gsc_import_t_id_supplier] . "'");
							endforeach;
						}
						# --------------------------------------------------------------------------------------------------
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_import_m_deleted => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_m_deleted . " = '2'");
						#-------------------------------------------------------------------------#
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla
						/*$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_sql as $key_sql):
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(
									d_azp_gsc_observation_internal_m_by_created => $_SESSION[SESS_APP_ID],
									d_azp_gsc_observation_internal_m_by_modified => $_SESSION[SESS_APP_ID],
									d_azp_gsc_observation_internal_m_date_created => DATE_HOUR,
									d_azp_gsc_observation_internal_m_date_modified => DATE_HOUR,
									d_azp_gsc_observation_internal_m_deleted => '1',
									d_azp_gsc_observation_internal_m_description => '',
									d_azp_gsc_observation_internal_m_level => '2',
									d_azp_gsc_observation_internal_m_status => '1',
									d_azp_gsc_observation_internal_m_temp => '1',
									d_azp_gsc_observation_internal_t_identification => $key_sql[d_azp_gsc_update_t_identification],
									d_azp_gsc_observation_internal_t_observation => 'Respuesta proveedor.',
								);
								# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
								$this->db->insert(t_azp_gsc_observation_internal, $var_array);
								#-------------------------------------------------------------------------#
								$var_array = array(d_azp_gsc_request_t_observation => DATE . ' ' . 'Respuesta proveedor.',);
								# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
								$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
							endforeach;
						}*/
						# --------------------------------------------------------------------------------------------------
						return array('success' => 1, 'message' => '<b>Exito:</b> Haz importado exitosamente el archivo de proveedores.');
					} else {
						# --------------------------------------------------------------------------------------------------
						return array('success' => 1, 'message' => '<b>Error:</b> Fechas incorrectas en el archivo de proveedores.');
					}
				} else if ($var_template == 3) {
					# Obtener datos del archivo recibido y saltar lineas
					$var_file = file_get_contents($var_tmp_name);
					$var_file = explode("\n", $var_file);
					$var_file = array_filter($var_file);
					# Recorrer los datos del archivo y separarlos por coma o punto y coma
					foreach ($var_file as $key => $value) { $var_list[] = explode(";", $value); }
					# Recorrer los datos divididos por filas y almacenarlos en la base
					foreach ($var_list as $key => $value) {
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[0])) { $import_number_request = ''; } else {
							if ($value[0] != '' || $value[0] != NULL) {
								$import_number_request = $this->db->scape($value[0]);
							} else { $import_number_request = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[1])) { $import_gsc_client = '0'; } else {
							if ($value[1] != '' || $value[1] != NULL) {
								$import_gsc_client = $this->db->scape($value[1]);
							} else { $import_gsc_client = '0'; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[2])) { $import_identification = ''; } else {
							if ($value[2] != '' || $value[2] != NULL) {
								$import_identification = $this->db->scape($value[2]);
							} else { $import_identification = ''; }
						}
						# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
						if (empty($value[3])) { $import_full_name = ''; } else {
							if ($value[3] != '' || $value[3] != NULL) {
								$import_full_name = $this->db->scape($value[3]);
							} else { $import_full_name = ''; }
						}
						# Reemplazar ciertos caracteres especificados de los valores recibidos
						$repl_full_name = str_replace($var_search, $var_replace, $import_full_name);
						$repl_identification = str_replace($var_search, $var_replace, $import_identification);
						$repl_number_request = str_replace($var_search, $var_replace, $import_number_request);
						$repl_gsc_client = str_replace($var_search, $var_replace, $import_gsc_client);
						# Eliminar dobles vacios en los valores recibidos
						$preg_full_name = trim(preg_replace('/\s+/',' ', $repl_full_name));
						$preg_identification = trim(preg_replace('/\s+/','', $repl_identification));
						$preg_number_request = trim(preg_replace('/\s+/','', $repl_number_request));
						$preg_gsc_client = trim(preg_replace('/\s+/','', $repl_gsc_client));
						# Asignacion de valores finales para almacenar en la base
						$frmt_full_name = strtoupper($preg_full_name);
						$frmt_identification = $preg_identification;
						$frmt_number_request = strtoupper($preg_number_request);
						$frmt_gsc_client = $preg_gsc_client;
						# Validacion de valores recibidos para codificacion.
						$empty_full_name = html_entity_decode(utf8_encode($frmt_full_name));
						$empty_identification = html_entity_decode(utf8_encode($frmt_identification));
						$empty_number_request = html_entity_decode(utf8_encode($frmt_number_request));
						$empty_gsc_client = html_entity_decode(utf8_encode($frmt_gsc_client));
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_import_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_import_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_import_m_date_created => DATE_HOUR,
							d_azp_gsc_import_m_date_modified => DATE_HOUR,
							d_azp_gsc_import_m_deleted => '2',
							d_azp_gsc_import_m_description => '',
							d_azp_gsc_import_m_level => '2',
							d_azp_gsc_import_m_status => '1',
							d_azp_gsc_import_m_temp => '5',
							d_azp_gsc_import_s_capture => 'No',
							d_azp_gsc_import_s_client => '0',
							d_azp_gsc_import_s_code => $empty_gsc_client,
							d_azp_gsc_import_s_data => 'No',
							d_azp_gsc_import_s_existing => 'No',
							d_azp_gsc_import_s_validate => 'No',
							d_azp_gsc_import_s_web_service => 'No',
							d_azp_gsc_import_t_city => '',
							d_azp_gsc_import_t_death_date => '',
							d_azp_gsc_import_t_full_name => $empty_full_name,
							d_azp_gsc_import_t_id_supplier => '',
							d_azp_gsc_import_t_identification => $empty_identification,
							d_azp_gsc_import_t_notary => '',
							d_azp_gsc_import_t_number_request => $empty_number_request,
							d_azp_gsc_import_t_number_obligation => '',
							d_azp_gsc_import_t_observation => '',
							d_azp_gsc_import_t_observation_outer => '',
							d_azp_gsc_import_t_reported_bank => '',
							d_azp_gsc_import_t_request_by => '',
							d_azp_gsc_import_t_request_date => '',
							d_azp_gsc_import_t_request_state => '1',
							d_azp_gsc_import_t_serial => '',
							d_azp_gsc_import_t_shipping_number => '0',
							d_azp_gsc_import_t_supplier_request_date => '',
							d_azp_gsc_import_t_supplier_request_number => '',
							d_azp_gsc_import_v_id_azp_gsc_causal => '1',
							d_azp_gsc_import_v_id_azp_gsc_client => '0',
							d_azp_gsc_import_v_id_azp_gsc_expiration => '1',
							d_azp_gsc_import_v_id_azp_gsc_phase => '1',
							d_azp_gsc_import_v_id_azp_gsc_state => '1',
						);
						# Insertar valores en la tabla segun estructura de la tabla
						$this->db->insert(t_azp_gsc_import, $var_array);
					}
					# --------------------------------------------------------------------------------------------------
					# Eliminar registros de la tabla de importacion
					$this->db->query("DELETE FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_id_azp_gsc_import . " = '1'");
					# --------------------------------------------------------------------------------------------------
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select('*', t_azp_gsc_client, d_azp_gsc_client_id_azp_gsc_client . " > '1'");
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Organizacion de los valores capturados y asignados a los campos a insertar
							$var_array = array(d_azp_gsc_import_v_id_azp_gsc_client => $key_sql[d_azp_gsc_client_id_azp_gsc_client], d_azp_gsc_import_s_client => '1',);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_s_code . " = '" . $key_sql[d_azp_gsc_client_t_code] . "'");
						endforeach;
					}
					# --------------------------------------------------------------------------------------------------
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_gsc_import, d_azp_gsc_import_s_client . " = '0'");
					# Validar si la consulta es verdadera
					if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_client_count = $key_sql['lbl_count']; endforeach; }
					# Validar si la consulta es verdadera
					if ($var_client_count == 0) {
						# Consulta para identificar los nuevos registros en la tabla
						/*$var_sql = $this->db->select('*', t_azp_gsc_client);
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_gsc_import_v_id_azp_gsc_client => $key_sql[d_azp_gsc_client_id_azp_gsc_client],);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_expiration . " = '" . $key_sql[d_azp_gsc_client_t_code] . "'");
							endforeach;
						}
						# --------------------------------------------------------------------------------------------------
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->query("SELECT MAX(" . d_azp_gsc_client_id_azp_gsc_client . ") AS 'lbl_max' FROM " . t_azp_gsc_client);
						# Validar si la consulta es verdadera
						if (false != $var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_gsc_import_v_id_azp_gsc_client => '1',);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_expiration . " > '" . $key_sql['lbl_max'] . "'");
							endforeach;
						}*/
						# --------------------------------------------------------------------------------------------------
						# Array para asignar argumentos o valores a los elementos
						//$var_array = array(d_azp_gsc_import_v_id_azp_gsc_expiration => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						//$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_expiration . " IS NOT NULL");
						# --------------------------------------------------------------------------------------------------
						if ($var_causal != '') {
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->select('*', t_azp_gsc_import);
							# Validar si la consulta es verdadera
							if (false != $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql):
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(d_azp_gsc_import_v_id_azp_gsc_causal => $var_causal,);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_causal . " != ''");
								endforeach;
							}
							# -------------------------------------------------------------
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->select('*', t_azp_gsc_causal, d_azp_gsc_causal_id_azp_gsc_causal . " = '" . $var_causal . "'");
							# Validar si la consulta es verdadera
							if (false != $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql):
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(d_azp_gsc_import_v_id_azp_gsc_state => $key_sql[d_azp_gsc_causal_v_id_azp_gsc_state],);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_v_id_azp_gsc_causal . " = '" . $key_sql[d_azp_gsc_causal_id_azp_gsc_causal] . "'");
								endforeach;
							}
							# -------------------------------------------------------------
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->select('*', t_azp_gsc_import);
							# Validar si la consulta es verdadera
							if (false != $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql):
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(
										d_azp_gsc_request_v_id_azp_gsc_causal => $key_sql[d_azp_gsc_import_v_id_azp_gsc_causal],
										d_azp_gsc_request_v_id_azp_gsc_state => $key_sql[d_azp_gsc_import_v_id_azp_gsc_state],
									);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_t_identification . " = '" . $key_sql[d_azp_gsc_import_t_identification] . "' AND " .  d_azp_gsc_request_t_number_request . " = '" . $key_sql[d_azp_gsc_import_t_number_request] . "' AND " . d_azp_gsc_request_v_id_azp_gsc_client . " = '" . $key_sql[d_azp_gsc_import_v_id_azp_gsc_client] . "'");
								endforeach;
							}
						}
						# --------------------------------------------------------------------------------------------------
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_import_m_deleted => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_import, $var_array, d_azp_gsc_import_m_deleted . " = '2'");
						# --------------------------------------------------------------------------------------------------
						return array('success' => 1, 'message' => '<b>Exito:</b> Haz importado exitosamente el archivo de causales.');
					} else { return array('error' => 1, 'message' => '<b>Error:</b> El cliente ingresado en alguna de las filas no coincide con el de la base de datos.'); }
				} else { return array('error' => 1, 'message' => '<b>Error:</b> Haz importado erroneamente el archivo.'); }
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_request_import(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_im_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_im_id']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_im_template'])) { throw new Exception('<b>Error:</b> El campo de plantilla esta prohibido modificar.'); }
				if (!isset($data['field_im_causal'])) { throw new Exception('<b>Error:</b> El campo de causal esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_template = $this->db->scape($data['field_im_template']);
				$empty_causal = $this->db->scape($data['field_im_causal']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_id) || $empty_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_template) || strtolower($empty_template) == strtolower('seleccionar') || $empty_template == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de plantilla es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_template)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de plantilla solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_template == 3) {
					if (Func::emp($empty_causal) || strtolower($empty_causal) == strtolower('seleccionar') || $empty_causal == 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El campo de causal es oblgitario.');
					}
					#---------------------------------------------#
					if (!is_numeric($empty_causal)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El campo de causal solo permite numeros.');
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
		final public function sql_azp_gsc_request_import(array $data) {
			$var_error = $this->error_sql_azp_gsc_request_import($data);
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
					$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_gsc_import, d_azp_gsc_import_s_date . " = '0'");
					# Validar si la consulta es verdadera
					if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_date_count = $key_sql['lbl_count']; endforeach; }
					# Validar si la consulta es verdadera
					if ($var_date_count == 0) {
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_gsc_import, d_azp_gsc_import_s_client . " = '0'");
						# Validar si la consulta es verdadera
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_client_count = $key_sql['lbl_count']; endforeach; }
						# Validar si la consulta es verdadera
						if ($var_client_count == 0) {
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_m_deleted . " = '2'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_total_two = $key_sql['lbl_count']; endforeach; }
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_m_deleted . " = '1'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_total_one = $key_sql['lbl_count']; endforeach; } else { $var_total_one = 0; }
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_m_deleted . " = '1' AND " . d_azp_gsc_import_s_capture . " = 'Si' AND " . d_azp_gsc_import_s_validate . " = 'No'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_capture = $key_sql['lbl_count']; endforeach; } else { $var_capture = 0; }
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_m_deleted . " = '1' AND " . d_azp_gsc_import_s_data . " = 'Si' AND " . d_azp_gsc_import_s_validate . " = 'No'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_data = $key_sql['lbl_count']; endforeach; } else { $var_data = 0; }
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_m_deleted . " = '1' AND " . d_azp_gsc_import_s_validate . " = 'No'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_validate_no = $key_sql['lbl_count']; endforeach; } else { $var_validate_no = 0; }
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_m_deleted . " = '1' AND " . d_azp_gsc_import_s_validate . " = 'Si'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_validate_si = $key_sql['lbl_count']; endforeach; } else { $var_validate_si = 0; }
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_duplicate . " WHERE " . d_azp_gsc_duplicate_t_row_num . " > '1'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_duplicate = $key_sql['lbl_count']; endforeach; } else { $var_duplicate = 0; }
							$var_carga = $var_validate_no + $var_duplicate;
							# --------------------------------------------------------------------------------------------------
							if ($var_total_one > 0) {
								# Retornar el mensaje una vez ejecutada la rutina del proceso
								return array('success' => 1, 'message' =>
									'<b>Exito:</b> Haz importado exitosamente el archivo de solicitudes.' . '</br></br>' .
									'<b>Exito:</b> Cargados: ' . $var_validate_no . ' datos cargados de ' . $var_carga . '.' . '</br>' .
									'<b>Exito:</b> Nuevos: ' . $var_validate_no . ' datos procesados en el consolidado.' . '</br>' .
									'<b>Exito:</b> Capturas: ' . $var_capture . ' datos con captura de ' . $var_total_one . '.' . '</br>' .
									'<b>Exito:</b> Datos: ' . $var_data . ' datos existentes de ' . $var_total_one . '.' . '</br>' .
									'<b>Exito:</b> Duplicados: ' . $var_duplicate . ' de ' . $var_carga . '.' . '</br></br>' .
									'<b>Error:</b> Repetidos: ' . $var_validate_si . ' datos no procesados en el consolidado.'
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
						} else {
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->query("SELECT MIN(" . d_azp_gsc_import_id_azp_gsc_import . ") AS 'lbl_min' FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_s_client . " = '0'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							//if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_min = $key_sql['lbl_min'] - 1; endforeach; }
							if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_min = $key_sql['lbl_min']; endforeach; }
							#-------------------------------------------------------------------------#
							# Retornar el mensaje una vez ejecutada la rutina del proceso
							return array('error' => 1, 'message' => '<b>Error:</b> El cliente ingresado en la fila ' . $var_min . ' de excel, no coincide con la base.');
						}
					} else {
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_sql = $this->db->query("SELECT MIN(" . d_azp_gsc_import_id_azp_gsc_import . ") AS 'lbl_min' FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_s_date . " = '0'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						//if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_min = $key_sql['lbl_min'] - 1; endforeach; }
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_min = $key_sql['lbl_min']; endforeach; }
						#-------------------------------------------------------------------------#
						# Retornar el mensaje una vez ejecutada la rutina del proceso
						return array('error' => 0, 'message' =>
							'<b>Error:</b> Archivo de solicitudes procesado incorrectamente.' . '</br></br>' .
							'<b>Error:</b> Fechas incorrectas en el archivo de solicitudes.' . '</br>' .
							'<b>Error:</b> Formato Correcto: Año-Mes-Dia (yyyy-mm-dd).' . '</br>' .
							'<b>Error:</b> Campo: Fecha De Solicitud: Registro Erroneo: ' . $var_min . '.'
						);
					}
				} else if ($empty_template == 2) {
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_gsc_import, d_azp_gsc_import_s_date . " = '0'");
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql): $var_date_count = $key_sql['lbl_count']; endforeach;
					}
					# Validar si la consulta es verdadera
					if ($var_date_count == 0) {
						#-------------------------------------------------------------------------#
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_m_deleted . " = '1'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_total = $key_sql['lbl_count']; endforeach; }
						#-------------------------------------------------------------------------#
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_import .
							" WHERE " . d_azp_gsc_import_m_deleted . " = '1' AND " . d_azp_gsc_import_s_existing . " = 'Si'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_existign_yes = $key_sql['lbl_count']; endforeach; }
						#-------------------------------------------------------------------------#
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_import .
							" WHERE " . d_azp_gsc_import_m_deleted . " = '1' AND " . d_azp_gsc_import_s_existing . " = 'No'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_existign_no = $key_sql['lbl_count']; endforeach; }
						#-------------------------------------------------------------------------#
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_import .
							" WHERE " . d_azp_gsc_import_m_deleted . " = '1' AND " . d_azp_gsc_import_s_existing . " = 'No'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_count_si = $key_sql['lbl_count']; endforeach; }
						# Control para validacion de registros
						if ($var_count_si > 0) {
							$var_count_text = '<b>Exito:</b> No Procesados. ' . $var_existign_no . ' de ' . $var_total . '. <a onclick="event_supplier();" style="color:#0078FF;">Clic Aqui<a/>.';
						} else { $var_count_text = ''; }
						#-------------------------------------------------------------------------#
						if ($var_total > 0) {
							# Retornar el mensaje una vez ejecutada la rutina del proceso
							return array('success' => 1, 'message' =>
								'<b>Exito:</b> Haz importado exitosamente el archivo de proveedores.' . '</br></br>' .
								'<b>Exito:</b> Registros Totales Cargados: ' . $var_total . '.' . '</br>' .
								'<b>Exito:</b> Procesados: ' . $var_existign_yes . ' de ' . $var_total . '.' . '</br>' . $var_count_text
							);
						} else {
							$var_error = $var_total + 1;
							# Retornar el mensaje una vez ejecutada la rutina del proceso
							return array('error' => 0, 'message' =>
								'<b>Error:</b> Archivo de proveedores procesado incorrectamente.' . '</br></br>' .
								'<b>Error:</b> Registros Cargados: ' . $var_total . '.' . '</br>' .
								'<b>Error:</b> Registro Erroneo: ' . $var_error . '.'
							);
						}
					} else {
						#-------------------------------------------------------------------------#
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_sql = $this->db->query("SELECT MIN(" . d_azp_gsc_import_id_azp_gsc_import . ") AS 'lbl_min' FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_s_date . " = '0'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						//if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_min = $key_sql['lbl_min'] - 1; endforeach; }
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_min = $key_sql['lbl_min']; endforeach; }
						#-------------------------------------------------------------------------#
						# Retornar el mensaje una vez ejecutada la rutina del proceso
						return array('error' => 0, 'message' =>
							'<b>Error:</b> Archivo de proveedores procesado incorrectamente.' . '</br></br>' .
							'<b>Error:</b> Fechas incorrectas en el archivo de proveedores.' . '</br>' .
							'<b>Error:</b> Formato Correcto: Año-Mes-Dia (yyyy-mm-dd).' . '</br>' .
							'<b>Error:</b> Campo: Fecha Defuncion: Registro Erroneo: ' . $var_min . '.'
						);
					}
				} else if ($empty_template == 3) {
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_gsc_import, d_azp_gsc_import_s_client . " = '0'");
					# Validar si la consulta es verdadera
					if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_client_count = $key_sql['lbl_count']; endforeach; }
					# Validar si la consulta es verdadera
					if ($var_client_count == 0) {
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_m_deleted . " = '2'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_total_two = $key_sql['lbl_count']; endforeach; }
						#-------------------------------------------------------------------------#
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_m_deleted . " = '1'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_total_one = $key_sql['lbl_count']; endforeach; }
						#-------------------------------------------------------------------------#
						if ($var_total_one > 0) {
							# Retornar el mensaje una vez ejecutada la rutina del proceso
							return array('success' => 1, 'message' =>
								'<b>Exito:</b> Haz importado exitosamente el archivo de causales.' . '</br></br>' .
								'<b>Exito:</b> Registros Cargados: ' . $var_total_one . '.'
							);
						} else {
							$var_error = $var_total_one + 1;
							# Retornar el mensaje una vez ejecutada la rutina del proceso
							return array('error' => 0, 'message' =>
								'<b>Error:</b> Archivo de causales procesado incorrectamente.' . '</br></br>' .
								'<b>Error:</b> Registros Cargados: ' . $var_total_one . '.' . '</br>' .
								'<b>Error:</b> Registro Erroneo: ' . $var_error . '.'
							);
						}
					} else {
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_sql = $this->db->query("SELECT MIN(" . d_azp_gsc_import_id_azp_gsc_import . ") AS 'lbl_min' FROM " . t_azp_gsc_import . " WHERE " . d_azp_gsc_import_s_client . " = '0'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						//if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_min = $key_sql['lbl_min'] - 1; endforeach; }
						if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_min = $key_sql['lbl_min']; endforeach; }
						#-------------------------------------------------------------------------#
						# Retornar el mensaje una vez ejecutada la rutina del proceso
						return array('error' => 1, 'message' => '<b>Error:</b> El cliente ingresado en la fila ' . $var_min . ' de excel, no coincide con la base.');
					}
				} else {
					# Retornar el mensaje una vez ejecutada la rutina del proceso
					return array('error' => 0, 'message' => '<b>Error:</b> No se pudo procesar el archivo de importacion.');
				}
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_gsc_supplier_xlsx(string $var_zip_file, string $var_zip_route) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_generated_files_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_generated_files_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_generated_files_m_date_created => DATE_HOUR,
					d_azp_gsc_generated_files_m_date_modified => DATE_HOUR,
					d_azp_gsc_generated_files_m_deleted => '2',
					d_azp_gsc_generated_files_m_description => '',
					d_azp_gsc_generated_files_m_level => '2',
					d_azp_gsc_generated_files_m_status => '1',
					d_azp_gsc_generated_files_m_temp => '4',
					d_azp_gsc_generated_files_t_date_load => DATE_HOUR,
					d_azp_gsc_generated_files_t_encode => '',
					d_azp_gsc_generated_files_t_expiration => 'Utilizable',
					d_azp_gsc_generated_files_t_extension => 'xlsx',
					d_azp_gsc_generated_files_t_module => 'Solicitud',
					d_azp_gsc_generated_files_t_name_file => $var_zip_file,
					d_azp_gsc_generated_files_t_route => $var_zip_route,
					d_azp_gsc_generated_files_t_template => 'Proveedor',
					d_azp_gsc_generated_files_t_type => 'Excel',
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_generated_files, $var_array);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_gsc_request_xlsx(string $var_zip_file, string $var_zip_route) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_generated_files_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_generated_files_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_generated_files_m_date_created => DATE_HOUR,
					d_azp_gsc_generated_files_m_date_modified => DATE_HOUR,
					d_azp_gsc_generated_files_m_deleted => '2',
					d_azp_gsc_generated_files_m_description => '',
					d_azp_gsc_generated_files_m_level => '2',
					d_azp_gsc_generated_files_m_status => '1',
					d_azp_gsc_generated_files_m_temp => '4',
					d_azp_gsc_generated_files_t_date_load => DATE_HOUR,
					d_azp_gsc_generated_files_t_encode => '',
					d_azp_gsc_generated_files_t_expiration => 'Utilizable',
					d_azp_gsc_generated_files_t_extension => 'xlsx',
					d_azp_gsc_generated_files_t_module => 'Solicitud',
					d_azp_gsc_generated_files_t_name_file => $var_zip_file,
					d_azp_gsc_generated_files_t_route => $var_zip_route,
					d_azp_gsc_generated_files_t_template => 'Remision',
					d_azp_gsc_generated_files_t_type => 'Excel',
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_generated_files, $var_array);
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_request_extra_registration(array $data) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# --------------------------------------------------------------------------------------------------
				# Cargar el helper de archivos
				Helper::load('files');
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				/*$var_sql = $this->db->query("
					SELECT * FROM " . t_azp_gsc_registration . "
					WHERE " . d_azp_gsc_registration_m_deleted . " = '1'
						AND (" . d_azp_gsc_registration_t_notary_number . " LIKE '0%'
						OR " . d_azp_gsc_registration_t_notary_number . " LIKE '1%'
						OR " . d_azp_gsc_registration_t_notary_number . " LIKE '2%'
						OR " . d_azp_gsc_registration_t_notary_number . " LIKE '3%'
						OR " . d_azp_gsc_registration_t_notary_number . " LIKE '4%'
						OR " . d_azp_gsc_registration_t_notary_number . " LIKE '5%'
						OR " . d_azp_gsc_registration_t_notary_number . " LIKE '6%'
						OR " . d_azp_gsc_registration_t_notary_number . " LIKE '7%'
						OR " . d_azp_gsc_registration_t_notary_number . " LIKE '8%'
						OR " . d_azp_gsc_registration_t_notary_number . " LIKE '9%')
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Asignacion de valores a nuevas variables
						$var_id = $key_sql[d_azp_gsc_registration_id_azp_gsc_registration];
						$var_no = $key_sql[d_azp_gsc_registration_t_notary_number];
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_registration_t_notary_number => 'NOTARIA ' . $var_no,);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_registration, $var_array, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $var_id . "'");
					endforeach;
				}*/
				# --------------------------------------------------------------------------------------------------
				#$this->db->query("TRUNCATE TABLE " . t_azp_gsc_update);
				//$this->db->query("DELETE FROM " . t_azp_gsc_update);
				//$this->db->query("ALTER TABLE " . t_azp_gsc_update . " AUTO_INCREMENT = 1");
				$this->db->query("DELETE FROM " . t_azp_gsc_update . " WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# --------------------------------------------------------------------------------------------------
				$var_identification = $data['t_id_import'];
				# --------------------------------------------------------------------------------------------------
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_identification as $key => $value) {
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(
						d_azs_gsc_update_m_by_created => $_SESSION[SESS_APP_ID],
						d_azs_gsc_update_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azs_gsc_update_m_date_created => DATE_HOUR,
						d_azs_gsc_update_m_date_modified => DATE_HOUR,
						d_azs_gsc_update_m_deleted => '1',
						d_azs_gsc_update_m_description => '',
						d_azs_gsc_update_m_level => '2',
						d_azs_gsc_update_m_status => '1',
						d_azs_gsc_update_m_temp => '1',
						d_azp_gsc_update_v_id_azp_gsc_request => $value,
					);
					# Insertar valores en la nueva tabla que no existen
					$this->db->insert(t_azp_gsc_update, $var_array);
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_m_deleted . " = '1'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$var_array = array(
							d_azp_gsc_update_s_capture => $key_sql[d_azp_gsc_request_s_capture],
							d_azp_gsc_update_s_data => $key_sql[d_azp_gsc_request_s_data],
							d_azp_gsc_update_s_existing => $key_sql[d_azp_gsc_request_s_existing],
							d_azp_gsc_update_s_validate => $key_sql[d_azp_gsc_request_s_validate],
							d_azp_gsc_update_s_web_service => $key_sql[d_azp_gsc_request_s_web_service],
							d_azp_gsc_update_t_city => $key_sql[d_azp_gsc_request_t_city],
							d_azp_gsc_update_t_death_date => $key_sql[d_azp_gsc_request_t_death_date],
							d_azp_gsc_update_t_full_name => $key_sql[d_azp_gsc_request_t_full_name],
							d_azp_gsc_update_t_identification => $key_sql[d_azp_gsc_request_t_identification],
							d_azp_gsc_update_t_notary => $key_sql[d_azp_gsc_request_t_notary],
							d_azp_gsc_update_t_number_obligation => $key_sql[d_azp_gsc_request_t_number_obligation],
							d_azp_gsc_update_t_number_request => $key_sql[d_azp_gsc_request_t_number_request],
							d_azp_gsc_update_t_observation => $key_sql[d_azp_gsc_request_t_observation],
							d_azp_gsc_update_t_observation_outer => $key_sql[d_azp_gsc_request_t_observation_outer],
							d_azp_gsc_update_t_reported_bank => $key_sql[d_azp_gsc_request_t_reported_bank],
							d_azp_gsc_update_t_request_by => $key_sql[d_azp_gsc_request_t_request_by],
							d_azp_gsc_update_t_request_date => $key_sql[d_azp_gsc_request_t_request_date],
							d_azp_gsc_update_t_request_state => $key_sql[d_azp_gsc_request_t_request_state],
							d_azp_gsc_update_t_serial => $key_sql[d_azp_gsc_request_t_serial],
							//d_azp_gsc_update_t_shipping_number => $key_sql[d_azp_gsc_request_t_shipping_number],
							d_azp_gsc_update_t_supplier_request_date => $key_sql[d_azp_gsc_request_t_supplier_request_date],
							d_azp_gsc_update_t_supplier_request_number => $key_sql[d_azp_gsc_request_t_supplier_request_number],
							d_azp_gsc_update_v_id_azp_gsc_causal => $key_sql[d_azp_gsc_request_v_id_azp_gsc_causal],
							d_azp_gsc_update_v_id_azp_gsc_client => $key_sql[d_azp_gsc_request_v_id_azp_gsc_client],
							d_azp_gsc_update_v_id_azp_gsc_expiration => $key_sql[d_azp_gsc_request_v_id_azp_gsc_expiration],
							d_azp_gsc_update_v_id_azp_gsc_phase => $key_sql[d_azp_gsc_request_v_id_azp_gsc_phase],
							d_azp_gsc_update_v_id_azp_gsc_state => $key_sql[d_azp_gsc_request_v_id_azp_gsc_state],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_update, $var_array,
							d_azp_gsc_update_v_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_request_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
						);
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Seleccionar los valores de la cedula con el maximo id encontrado en solicitudes
				$var_sql = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_m_deleted . " = '1'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$var_array = array(
							//d_azp_gsc_update_s_capture => $key_sql[d_azp_gsc_registration_s_capture],
							d_azp_gsc_update_s_data => 'Si',
							//d_azp_gsc_update_s_existing => $key_sql[d_azp_gsc_registration_s_existing],
							//d_azp_gsc_update_s_validate => $key_sql[d_azp_gsc_registration_s_validate],
							d_azp_gsc_update_s_web_service => 'Si',
							d_azp_gsc_update_t_city => $key_sql[d_azp_gsc_registration_t_city_department],
							d_azp_gsc_update_t_death_date => $key_sql[d_azp_gsc_registration_t_death_date],
							//d_azp_gsc_update_t_full_name => $key_sql[d_azp_gsc_registration_t_full_name],
							//d_azp_gsc_update_t_identification => $key_sql[d_azp_gsc_registration_t_identification],
							d_azp_gsc_update_t_notary => $key_sql[d_azp_gsc_registration_t_notary_number],
							//d_azp_gsc_update_t_number_obligation => $key_sql[d_azp_gsc_registration_t_number_obligation],
							//d_azp_gsc_update_t_number_request => $key_sql[d_azp_gsc_registration_t_number_request],
							d_azp_gsc_update_t_observation => $key_sql[d_azp_gsc_registration_t_observation],
							//d_azp_gsc_update_t_observation_outer => $key_sql[d_azp_gsc_registration_t_observation_outer],
							d_azp_gsc_update_t_reported_bank => $key_sql[d_azp_gsc_registration_t_reported_bank],
							//d_azp_gsc_update_t_request_by => $key_sql[d_azp_gsc_registration_t_request_by],
							//d_azp_gsc_update_t_request_date => $key_sql[d_azp_gsc_registration_t_request_date],
							//d_azp_gsc_update_t_serial => preg_replace('/^0+/', '', str_replace('_', '', $key_sql[d_azp_gsc_registration_t_number_serial])),
							d_azp_gsc_update_t_serial => $key_sql[d_azp_gsc_registration_t_number_serial],
							//d_azp_gsc_update_t_shipping_number => $key_sql[d_azp_gsc_registration_t_shipping_number],
							//d_azp_gsc_update_t_supplier_request_date => $key_sql[d_azp_gsc_registration_t_supplier_request_date],
							//d_azp_gsc_update_t_supplier_request_number => $key_sql[d_azp_gsc_registration_t_supplier_request_number],
							//d_azp_gsc_update_v_id_azp_gsc_causal => $key_sql[d_azp_gsc_registration_v_id_azp_gsc_causal],
							//d_azp_gsc_update_v_id_azp_gsc_client => $key_sql[d_azp_gsc_registration_v_id_azp_gsc_client],
							//d_azp_gsc_update_v_id_azp_gsc_expiration => $key_sql[d_azp_gsc_registration_v_id_azp_gsc_expiration],
							//d_azp_gsc_update_v_id_azp_gsc_phase => $key_sql[d_azp_gsc_registration_v_id_azp_gsc_phase],
							//d_azp_gsc_update_v_id_azp_gsc_state => $key_sql[d_azp_gsc_registration_v_id_azp_gsc_state],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_update, $var_array,
							d_azp_gsc_update_t_identification . " = '" . $key_sql[d_azp_gsc_web_service_t_identification] . "' AND " .
							d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
						);
					endforeach;
				}
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$var_array = array(d_azp_gsc_update_s_web_service => 'No',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_update, $var_array, d_azp_gsc_update_s_web_service . " = '' AND " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# --------------------------------------------------------------------------------------------------
				# Seleccionar los valores de la cedula con el maximo id encontrado en solicitudes
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_s_web_service . " = 'Si' AND " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						if (isset($key_sql[d_azp_gsc_update_t_serial][0]) != '') {
							#echo $key_sql[d_azp_gsc_update_t_serial];
							if ($key_sql[d_azp_gsc_update_t_serial][0] == 0) {
								if ($key_sql[d_azp_gsc_update_t_serial][0] == '_') {
									#echo "1:" .  $key_sql[d_azp_gsc_update_t_serial][0] . "<br>";
									# Fase 2: Guion al piso
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$var_array = array(
										d_azp_gsc_request_v_id_azp_gsc_phase => '2',
										d_azp_gsc_request_v_id_azp_gsc_state => '1',
									);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_gsc_request, $var_array,
										d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " .
										d_azp_gsc_request_m_deleted . " = '1' AND " . d_azp_gsc_request_v_id_azp_gsc_phase . " <= '2'"
									);
								} else if (
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('a') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('b') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('c') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('d') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('e') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('f') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('g') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('h') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('i') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('j') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('k') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('l') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('m') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('n') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('ñ') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('o') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('p') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('q') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('r') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('s') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('t') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('u') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('v') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('w') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('x') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('y') ||
									$key_sql[d_azp_gsc_update_t_serial][0] == strtoupper('z')
								) {
									#echo "2:" .  $key_sql[d_azp_gsc_update_t_serial][0] . "<br>";
									# Fase 2: Letras al principio
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$var_array = array(
										d_azp_gsc_request_v_id_azp_gsc_phase => '2',
										d_azp_gsc_request_v_id_azp_gsc_state => '1',
									);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_gsc_request, $var_array,
										d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " .
										d_azp_gsc_request_m_deleted . " = '1' AND " . d_azp_gsc_request_v_id_azp_gsc_phase . " <= '2'");
								} else if ($key_sql[d_azp_gsc_update_t_serial][0] == 0) {
									#echo "3:" .  $key_sql[d_azp_gsc_update_t_serial][0] . "<br>";
									# Fase 3: Ceros al principio
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$var_array = array(
										d_azp_gsc_request_v_id_azp_gsc_phase => '3',
										d_azp_gsc_request_v_id_azp_gsc_state => '1',
									);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_gsc_request, $var_array,
										d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " .
										d_azp_gsc_request_m_deleted . " = '1' AND " . d_azp_gsc_request_v_id_azp_gsc_phase . " <= '3'");
								}
							} else {
								#echo "4:" .  $key_sql[d_azp_gsc_update_t_serial][0] . "<br>";
								# Fase 2: Numeros del 1 al 9
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$var_array = array(
									d_azp_gsc_request_v_id_azp_gsc_phase => '2',
									d_azp_gsc_request_v_id_azp_gsc_state => '1',
								);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_gsc_request, $var_array,
									d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " .
									d_azp_gsc_request_m_deleted . " = '1' AND " . d_azp_gsc_request_v_id_azp_gsc_phase . " <= '2'");
							}
						} else {
							#echo "5:" .  $key_sql[d_azp_gsc_update_t_serial][0] . "<br>";
							# Fase 2: Valor vacio
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$var_array = array(
								d_azp_gsc_request_v_id_azp_gsc_phase => '2',
								d_azp_gsc_request_v_id_azp_gsc_state => '1',
							);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_gsc_request, $var_array,
								d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " .
								d_azp_gsc_request_m_deleted . " = '1' AND " . d_azp_gsc_request_v_id_azp_gsc_phase . " <= '2'");
						}
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$var_array = array(
							//d_azp_gsc_request_s_capture => $key_sql[d_azp_gsc_update_s_capture],
							d_azp_gsc_request_s_data => $key_sql[d_azp_gsc_update_s_data],
							//d_azp_gsc_request_s_existing => $key_sql[d_azp_gsc_update_s_existing],
							//d_azp_gsc_request_s_validate => $key_sql[d_azp_gsc_update_s_validate],
							d_azp_gsc_request_s_web_service => $key_sql[d_azp_gsc_update_s_web_service],
							//d_azp_gsc_request_t_city => $key_sql[d_azp_gsc_update_t_city],
							d_azp_gsc_request_t_death_date => $key_sql[d_azp_gsc_update_t_death_date],
							//d_azp_gsc_request_t_full_name => $key_sql[d_azp_gsc_update_t_full_name],
							//d_azp_gsc_request_t_identification => $key_sql[d_azp_gsc_update_t_identification],
							d_azp_gsc_request_t_notary => $key_sql[d_azp_gsc_update_t_notary],
							//d_azp_gsc_request_t_number_obligation => $key_sql[d_azp_gsc_update_t_number_obligation],
							//d_azp_gsc_request_t_number_request => $key_sql[d_azp_gsc_update_t_number_request],
							d_azp_gsc_request_t_observation => $key_sql[d_azp_gsc_update_t_observation],
							//d_azp_gsc_request_t_observation_outer => $key_sql[d_azp_gsc_update_t_observation_outer],
							d_azp_gsc_request_t_reported_bank => $key_sql[d_azp_gsc_update_t_reported_bank],
							//d_azp_gsc_request_t_request_by => $key_sql[d_azp_gsc_update_t_request_by],
							//d_azp_gsc_request_t_request_date => $key_sql[d_azp_gsc_update_t_request_date],
							d_azp_gsc_request_t_serial => preg_replace('/^0+/', '', str_replace('_', '', $key_sql[d_azp_gsc_update_t_serial])),
							//d_azp_gsc_request_t_shipping_number => $key_sql[d_azp_gsc_update_t_shipping_number],
							//d_azp_gsc_request_t_supplier_request_date => $key_sql[d_azp_gsc_update_t_supplier_request_date],
							//d_azp_gsc_request_t_supplier_request_number => $key_sql[d_azp_gsc_update_t_supplier_request_number],
							//d_azp_gsc_request_v_id_azp_gsc_causal => $key_sql[d_azp_gsc_update_v_id_azp_gsc_causal],
							//d_azp_gsc_request_v_id_azp_gsc_client => $key_sql[d_azp_gsc_update_v_id_azp_gsc_client],
							//d_azp_gsc_request_v_id_azp_gsc_department => $key_sql[d_azp_gsc_update_v_id_azp_gsc_department],
							//d_azp_gsc_request_v_id_azp_gsc_expiration => $key_sql[d_azp_gsc_update_v_id_azp_gsc_expiration],
							//d_azp_gsc_request_v_id_azp_gsc_phase => '3',
							//d_azp_gsc_request_v_id_azp_gsc_state => '1',
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_request, $var_array,
							d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_request_m_deleted . " = '1'"
						);
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Seleccionar los valores de la cedula con el maximo id encontrado en solicitudes
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_s_web_service . " = 'No' AND " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$var_array = array(
							d_azp_gsc_request_s_web_service => $key_sql[d_azp_gsc_update_s_web_service],
							d_azp_gsc_request_v_id_azp_gsc_phase => '2',
							d_azp_gsc_request_v_id_azp_gsc_state => '1',
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_request, $var_array,
							d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_request_m_deleted . " = '1' AND " . d_azp_gsc_request_v_id_azp_gsc_phase . " <= '2'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				$var_nro_search = array('NOTARIA ', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',);
				$var_nro_replace = array('', '', '', '', '', '', '', '', '', '', '',);
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->query("
					SELECT
						tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
						tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary'
					FROM " . t_azp_gsc_request . " tc_azp_gsc_request
					INNER JOIN " . t_azp_gsc_update . " tc_azp_gsc_update
						ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
							= tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_request . "
					WHERE tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " LIKE '%NOTARIA %'
						AND tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				");
				//$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_t_notary . " LIKE '%NOTARIA %'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_id = $key_sql['lbl_azp_gsc_request_id_azp_gsc_request'];
						$var_rq_not = $key_sql['lbl_azp_gsc_request_t_notary'];
						$var_explode = explode(" ", $var_rq_not);
						//$var_notary = str_replace('NOTARIA ', '', $var_rq_not);
						$var_textnr = str_replace($var_nro_search, $var_nro_replace, $var_rq_not);
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_request_t_city => $var_textnr, d_azp_gsc_request_t_notary => $var_explode[0] . ' ' . $var_explode[1],);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $var_id . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql_regis = $this->db->query("
					SELECT
						tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
						tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary'
					FROM " . t_azp_gsc_request . " tc_azp_gsc_request
					INNER JOIN " . t_azp_gsc_update . " tc_azp_gsc_update
						ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
							= tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_request . "
					WHERE tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " NOT LIKE '%MINISTERIO%'
						AND tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " NOT LIKE '%NOTARIA%'
						AND tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " NOT LIKE '%REGISTRADURIA%'
						AND tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				");
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				/*$var_sql_regis = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_t_notary . " NOT LIKE '%MINISTERIO%' AND " .
					d_azp_gsc_request_t_notary . " NOT LIKE '%NOTARIA%' AND " . d_azp_gsc_request_t_notary . " NOT LIKE '%REGISTRADURIA%'");*/
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_regis) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_regis as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						//$var_array = array(d_azp_gsc_request_t_city => $key_sql['lbl_azp_gsc_request_t_notary'], d_azp_gsc_request_t_notary => 'REGISTRADURIA',);
						$var_array = array(d_azp_gsc_request_t_city => $key_sql['lbl_azp_gsc_request_t_notary'], d_azp_gsc_request_t_notary => '',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql['lbl_azp_gsc_request_id_azp_gsc_request'] . "'");
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Seleccionar los valores de la cedula con el maximo id encontrado en solicitudes
				$var_sql = $this->db->query("
					SELECT * FROM " . t_azp_gsc_registration . " tc_azp_gsc_registration
					WHERE " . d_azp_gsc_registration_t_identification . " IN (
						SELECT tc_azp_gsc_update." . d_azp_gsc_update_t_identification . "
						FROM " . t_azp_gsc_update . " tc_azp_gsc_update
						WHERE tc_azp_gsc_update." . d_azp_gsc_update_s_web_service . " = 'Si'
						AND tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					) AND tc_azp_gsc_registration." . d_azp_gsc_registration_m_deleted . " = '1'
				");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_web_service_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_web_service_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_web_service_m_date_created => DATE_HOUR,
							d_azp_gsc_web_service_m_date_modified => DATE_HOUR,
							d_azp_gsc_web_service_m_deleted => '1',
							d_azp_gsc_web_service_m_description => '',
							d_azp_gsc_web_service_m_level => '2',
							d_azp_gsc_web_service_m_status => '1',
							d_azp_gsc_web_service_m_temp => '1',
							d_azp_gsc_web_service_t_city_department => $key_sql[d_azp_gsc_registration_t_city_department],
							d_azp_gsc_web_service_t_city_municipality => $key_sql[d_azp_gsc_registration_t_city_municipality],
							d_azp_gsc_web_service_t_death_date => $key_sql[d_azp_gsc_registration_t_death_date],
							d_azp_gsc_web_service_t_department => $key_sql[d_azp_gsc_registration_t_department],
							d_azp_gsc_web_service_t_full_name => $key_sql[d_azp_gsc_registration_t_full_name],
							d_azp_gsc_web_service_t_identification => $key_sql[d_azp_gsc_registration_t_identification],
							d_azp_gsc_web_service_t_notary_address => $key_sql[d_azp_gsc_registration_t_notary_address],
							d_azp_gsc_web_service_t_notary_name => $key_sql[d_azp_gsc_registration_t_notary_name],
							d_azp_gsc_web_service_t_notary_number => $key_sql[d_azp_gsc_registration_t_notary_number],
							d_azp_gsc_web_service_t_number_serial => $key_sql[d_azp_gsc_registration_t_number_serial],
							d_azp_gsc_web_service_t_observation => $key_sql[d_azp_gsc_registration_t_observation],
							d_azp_gsc_web_service_t_reason => $key_sql[d_azp_gsc_registration_t_reason],
							d_azp_gsc_web_service_t_reported_bank => $key_sql[d_azp_gsc_registration_t_reported_bank],
							d_azp_gsc_web_service_t_shipping_number => $key_sql[d_azp_gsc_registration_t_shipping_number],
							d_azp_gsc_web_service_t_state => $key_sql[d_azp_gsc_registration_t_state],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->insert(t_azp_gsc_web_service, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_s_web_service . " = 'Si' AND " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_logs_request_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_logs_request_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_logs_request_m_date_created => DATE_HOUR,
							d_azp_gsc_logs_request_m_date_modified => DATE_HOUR,
							d_azp_gsc_logs_request_m_deleted => '1',
							d_azp_gsc_logs_request_m_description => '',
							d_azp_gsc_logs_request_m_level => '2',
							d_azp_gsc_logs_request_m_status => '1',
							d_azp_gsc_logs_request_m_temp => '1',
							d_azp_gsc_logs_request_t_action => 'Evento Ejecutado: Fase cambiada a Procesado Registraduria',
							d_azp_gsc_logs_request_t_date => DATE,
							d_azp_gsc_logs_request_v_id_azp_gsc_request => $key_sql[d_azp_gsc_update_v_id_azp_gsc_request],
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_logs_request, $var_array);
						#-------------------------------------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_observation_internal_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_observation_internal_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_observation_internal_m_date_created => DATE_HOUR,
							d_azp_gsc_observation_internal_m_date_modified => DATE_HOUR,
							d_azp_gsc_observation_internal_m_deleted => '1',
							d_azp_gsc_observation_internal_m_description => '',
							d_azp_gsc_observation_internal_m_level => '2',
							d_azp_gsc_observation_internal_m_status => '1',
							d_azp_gsc_observation_internal_m_temp => '1',
							d_azp_gsc_observation_internal_t_identification => $key_sql[d_azp_gsc_update_t_identification],
							d_azp_gsc_observation_internal_t_observation => 'Consulta registraduria.',
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_observation_internal, $var_array);
						#-------------------------------------------------------------------------#
						$var_array = array(d_azp_gsc_request_t_observation => DATE . ' ' . 'Consulta registraduria.',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_s_web_service . " = 'No' AND " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_logs_request_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_logs_request_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_logs_request_m_date_created => DATE_HOUR,
							d_azp_gsc_logs_request_m_date_modified => DATE_HOUR,
							d_azp_gsc_logs_request_m_deleted => '1',
							d_azp_gsc_logs_request_m_description => '',
							d_azp_gsc_logs_request_m_level => '2',
							d_azp_gsc_logs_request_m_status => '1',
							d_azp_gsc_logs_request_m_temp => '1',
							d_azp_gsc_logs_request_t_action => 'Evento Ejecutado: Fase cambiada a Consulta Externa',
							d_azp_gsc_logs_request_t_date => DATE,
							d_azp_gsc_logs_request_v_id_azp_gsc_request => $key_sql[d_azp_gsc_update_v_id_azp_gsc_request],
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_logs_request, $var_array);
						#-------------------------------------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						/*$var_array = array(
							d_azp_gsc_observation_internal_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_observation_internal_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_observation_internal_m_date_created => DATE_HOUR,
							d_azp_gsc_observation_internal_m_date_modified => DATE_HOUR,
							d_azp_gsc_observation_internal_m_deleted => '1',
							d_azp_gsc_observation_internal_m_description => '',
							d_azp_gsc_observation_internal_m_level => '2',
							d_azp_gsc_observation_internal_m_status => '1',
							d_azp_gsc_observation_internal_m_temp => '1',
							d_azp_gsc_observation_internal_t_identification => $key_sql[d_azp_gsc_update_t_identification],
							d_azp_gsc_observation_internal_t_observation => 'Consulta externa.',
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_observation_internal, $var_array);*/
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_t_city . " = '' AND " . d_azp_gsc_request_t_notary . " = '' AND " . d_azp_gsc_request_t_serial . " = ''");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Asignacion de valores a nuevas variables
						$var_id = $key_sql[d_azp_gsc_request_id_azp_gsc_request];
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_gsc_request_s_data => 'No',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $var_id . "'");
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos vinculados correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_request_tp_table() {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# --------------------------------------------------------------------------------------------------
				$this->db->query("DELETE FROM " . t_azp_gsc_generated_files . " WHERE " . d_azp_gsc_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_generated_files_m_deleted . " = '2' AND " . d_azp_gsc_generated_files_m_temp . " = '2' AND " . d_azp_gsc_generated_files_t_expiration . " = 'Generado' AND " . d_azp_gsc_generated_files_t_module . " = 'Solicitud' AND " . d_azp_gsc_generated_files_t_template . " = 'Proveedor'");
				# --------------------------------------------------------------------------------------------------
				$this->db->query("DELETE FROM " . t_azp_gsc_generated_files . " WHERE " . d_azp_gsc_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_generated_files_m_deleted . " = '2' AND " . d_azp_gsc_generated_files_m_level . " = '2' AND " . d_azp_gsc_generated_files_m_temp . " = '4' AND " . d_azp_gsc_generated_files_t_expiration . " = 'Utilizable' AND " . d_azp_gsc_generated_files_t_module . " = 'Solicitud' AND " . d_azp_gsc_generated_files_t_template . " = 'Proveedor'");
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos registrados correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_request_remision(array $data) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->query("
					-- ---------------------------------------------------------------
					SELECT
						" . d_azp_gsc_generated_files_t_name_file . " AS 'lbl_azp_gsc_generated_files_t_name_file',
						" . d_azp_gsc_generated_files_t_route . " AS 'lbl_azp_gsc_generated_files_t_route'
					FROM " . t_azp_gsc_generated_files . "
					-- ---------------------------------------------------------------
					WHERE " . d_azp_gsc_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND " . d_azp_gsc_generated_files_m_deleted . " = '2'
						AND " . d_azp_gsc_generated_files_m_level . " = '2'
						AND " . d_azp_gsc_generated_files_m_temp . " = '4'
						AND " . d_azp_gsc_generated_files_t_expiration . " = 'Utilizable'
						AND " . d_azp_gsc_generated_files_t_module . " = 'Solicitud'
						AND " . d_azp_gsc_generated_files_t_template . " = 'Remision'
				");

				if (false != $var_sql) {
					foreach ($var_sql as $key_sql => $value_sql) {
						$var_name_file = $value_sql['lbl_azp_gsc_generated_files_t_name_file'];
						$var_route = $value_sql['lbl_azp_gsc_generated_files_t_route'];
						$var_sql_final = $var_route . $var_name_file;
					}
				} else { $var_sql_final = ''; }
				
				$var_compressed = new ZipArchive();
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql_file = $this->db->select('*', t_azp_gsc_capture,
					d_azp_gsc_capture_v_id_azp_gsc_request . " IN (
						SELECT " . d_azp_gsc_update_v_id_azp_gsc_request . " FROM " . t_azp_gsc_update . "
						WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					) AND " . d_azp_gsc_capture_t_document . " != '' GROUP BY " . d_azp_gsc_capture_t_document . " ASC");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_file) {
					# Valores del array vacios
					$var_array_file = array();
					# Recorrer los datos de la consulta de la tabla y encodificarlos
					foreach ($var_sql_file as $key_sql_file => $value_sql_file) {
						# Añadir valores a un array extrayendolos externamente
						$var_array_file[] = $value_sql_file[d_azp_gsc_capture_t_document];
					}
					# Nombre del archivo a guardar con sus datos respectivos
					$var_zip_file = 'remision' . '_' . DATE . '_' . HOUR_NUMBER . '.zip';
					# Ruta de la carpeta para almacenar sus respectivos archivos
					$var_zip_route = 'filespublics/azp_gsc_generated/' . YEAR . '/' . YEAR_MONTH . '/' . DATE . '/';
					# Ruta final concatenada para almacenar el archivo en su carpeta
					$var_zip_final = '../' . $var_zip_route . $var_zip_file;
					# Validacion de la ruta y archivo del archivo a comprimir
					if ($var_compressed->open($var_zip_final,ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE) === true) {
						# Agregamos los archivos a comprimir
						foreach ($var_array_file as $key_file) {
							# Añadir los archivos a comprimir
							$var_get_excel = file_get_contents('../' . $var_sql_final);
							# Añadir los archivos a comprimir
							$var_compressed->addFromString(str_replace('filesproject/azp_gsc_request/', '', $var_sql_final), $var_get_excel);
							# Añadir los archivos a comprimir
							$var_get_content = file_get_contents('../' . $key_file);
							# Añadir los archivos a comprimir
							$var_compressed->addFromString(str_replace('filesproject/azp_gsc_capture/', '', $key_file), $var_get_content);
						}
					}
					# Cerrar la compresion del archivo
					$var_compressed->close();
					# Codificar la iniformacion del archivo
					$var_base_64 = base64_encode(file_get_contents($var_zip_final));
					# Dar permisos a la carpeta y archivo
					chmod($var_zip_final, 0777);
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_gsc_generated_files_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_gsc_generated_files_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_gsc_generated_files_m_date_created => DATE_HOUR,
						d_azp_gsc_generated_files_m_date_modified => DATE_HOUR,
						d_azp_gsc_generated_files_m_deleted => '2',
						d_azp_gsc_generated_files_m_description => '',
						d_azp_gsc_generated_files_m_level => '2',
						d_azp_gsc_generated_files_m_status => '1',
						d_azp_gsc_generated_files_m_temp => '2',
						d_azp_gsc_generated_files_t_date_load => DATE_HOUR,
						d_azp_gsc_generated_files_t_encode => $var_base_64,
						d_azp_gsc_generated_files_t_expiration => 'Generado',
						d_azp_gsc_generated_files_t_extension => 'zip',
						d_azp_gsc_generated_files_t_module => 'Solicitud',
						d_azp_gsc_generated_files_t_name_file => $var_zip_file,
						d_azp_gsc_generated_files_t_route => $var_zip_route,
						d_azp_gsc_generated_files_t_template => 'Remision',
						d_azp_gsc_generated_files_t_type => 'Compresion',
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_gsc_generated_files, $var_array);
				} else {
					# Nombre del archivo a guardar con sus datos respectivos
					$var_zip_file = 'remision' . '_' . DATE . '_' . HOUR_NUMBER . '.zip';
					# Ruta de la carpeta para almacenar sus respectivos archivos
					$var_zip_route = 'filespublics/azp_gsc_generated/' . YEAR . '/' . YEAR_MONTH . '/' . DATE . '/';
					# Ruta final concatenada para almacenar el archivo en su carpeta
					$var_zip_final = '../' . $var_zip_route . $var_zip_file;
					# Validacion de la ruta y archivo del archivo a comprimir
					if ($var_compressed->open($var_zip_final,ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE) === true) {
						# Agregamos los archivos a comprimir
						$var_get_excel = file_get_contents('../' . $var_sql_final);
						# Añadir los archivos a comprimir
						$var_compressed->addFromString(str_replace('filesproject/azp_gsc_request/', '', $var_sql_final), $var_get_excel);
					}
					# Cerrar la compresion del archivo
					$var_compressed->close();
					# Codificar la iniformacion del archivo
					$var_base_64 = base64_encode(file_get_contents($var_zip_final));
					# Dar permisos a la carpeta y archivo
					chmod($var_zip_final, 0777);
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_gsc_generated_files_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_gsc_generated_files_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_gsc_generated_files_m_date_created => DATE_HOUR,
						d_azp_gsc_generated_files_m_date_modified => DATE_HOUR,
						d_azp_gsc_generated_files_m_deleted => '2',
						d_azp_gsc_generated_files_m_description => '',
						d_azp_gsc_generated_files_m_level => '2',
						d_azp_gsc_generated_files_m_status => '1',
						d_azp_gsc_generated_files_m_temp => '2',
						d_azp_gsc_generated_files_t_date_load => DATE_HOUR,
						d_azp_gsc_generated_files_t_encode => $var_base_64,
						d_azp_gsc_generated_files_t_expiration => 'Generado',
						d_azp_gsc_generated_files_t_extension => 'zip',
						d_azp_gsc_generated_files_t_module => 'Solicitud',
						d_azp_gsc_generated_files_t_name_file => $var_zip_file,
						d_azp_gsc_generated_files_t_route => $var_zip_route,
						d_azp_gsc_generated_files_t_template => 'Remision',
						d_azp_gsc_generated_files_t_type => 'Compresion',
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_gsc_generated_files, $var_array);
				}

				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo comprimido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_request_supplier(array $data) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->query("
					-- ---------------------------------------------------------------
					SELECT
						" . d_azp_gsc_generated_files_t_name_file . " AS 'lbl_azp_gsc_generated_files_t_name_file',
						" . d_azp_gsc_generated_files_t_route . " AS 'lbl_azp_gsc_generated_files_t_route'
					FROM " . t_azp_gsc_generated_files . "
					-- ---------------------------------------------------------------
					WHERE " . d_azp_gsc_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND " . d_azp_gsc_generated_files_m_deleted . " = '2'
						AND " . d_azp_gsc_generated_files_m_level . " = '2'
						AND " . d_azp_gsc_generated_files_m_temp . " = '4'
						AND " . d_azp_gsc_generated_files_t_expiration . " = 'Utilizable'
						AND " . d_azp_gsc_generated_files_t_module . " = 'Solicitud'
						AND " . d_azp_gsc_generated_files_t_template . " = 'Proveedor'
				");
				$var_sql_final = array();
				if (false != $var_sql) {
					foreach ($var_sql as $key_sql => $value_sql) {
						$var_name_file = $value_sql['lbl_azp_gsc_generated_files_t_name_file'];
						$var_route = $value_sql['lbl_azp_gsc_generated_files_t_route'];
						$var_sql_final = $var_route . $var_name_file;
					}
				} else { $var_sql_final = ''; }
				
				$var_compressed = new ZipArchive();
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				/*$var_sql_file = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_v_id_azp_gsc_request . " IN (SELECT " . d_azp_gsc_update_v_id_azp_gsc_request . " FROM " . t_azp_gsc_update . ") AND " . d_azp_gsc_capture_t_document . " != '' GROUP BY " . d_azp_gsc_capture_t_document . " ASC");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_file) {
					# Valores del array vacios
					$var_array_file = array();
					# Recorrer los datos de la consulta de la tabla y encodificarlos
					foreach ($var_sql_file as $key_sql_file => $value_sql_file) {
						# Añadir valores a un array extrayendolos externamente
						$var_array_file[] = $value_sql_file[d_azp_gsc_capture_t_document];
					}
					# Nombre del archivo a guardar con sus datos respectivos
					$var_zip_file = 'remision' . '_' . DATE . '_' . HOUR_NUMBER . '.zip';
					# Ruta de la carpeta para almacenar sus respectivos archivos
					$var_zip_route = 'filespublics/azp_gsc_generated/' . YEAR . '/' . YEAR_MONTH . '/' . DATE . '/';
					# Ruta final concatenada para almacenar el archivo en su carpeta
					$var_zip_final = '../' . $var_zip_route . $var_zip_file;
					# Validacion de la ruta y archivo del archivo a comprimir
					if ($var_compressed->open($var_zip_final,ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE) === true) {
						# Agregamos los archivos a comprimir
						foreach ($var_array_file as $key_file) {
							# Añadir los archivos a comprimir
							$var_get_excel = file_get_contents('../' . $var_sql_final);
							# Añadir los archivos a comprimir
							$var_compressed->addFromString(str_replace('filesproject/azp_gsc_request/', '', $var_sql_final), $var_get_excel);
							# Añadir los archivos a comprimir
							$var_get_content = file_get_contents('../' . $key_file);
							# Añadir los archivos a comprimir
							$var_compressed->addFromString(str_replace('filesproject/azp_gsc_capture/', '', $key_file), $var_get_content);
						}
					}
					# Cerrar la compresion del archivo
					$var_compressed->close();
					# Codificar la iniformacion del archivo
					$var_base_64 = base64_encode(file_get_contents($var_zip_final));
					# Dar permisos a la carpeta y archivo
					chmod($var_zip_final, 0777);
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_gsc_generated_files_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_gsc_generated_files_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_gsc_generated_files_m_date_created => DATE_HOUR,
						d_azp_gsc_generated_files_m_date_modified => DATE_HOUR,
						d_azp_gsc_generated_files_m_deleted => '2',
						d_azp_gsc_generated_files_m_description => '',
						d_azp_gsc_generated_files_m_level => '2',
						d_azp_gsc_generated_files_m_status => '1',
						d_azp_gsc_generated_files_m_temp => '2',
						d_azp_gsc_generated_files_t_date_load => DATE_HOUR,
						d_azp_gsc_generated_files_t_encode => $var_base_64,
						d_azp_gsc_generated_files_t_expiration => 'Generado',
						d_azp_gsc_generated_files_t_extension => 'zip',
						d_azp_gsc_generated_files_t_module => 'Solicitud',
						d_azp_gsc_generated_files_t_name_file => $var_zip_file,
						d_azp_gsc_generated_files_t_route => $var_zip_route,
						d_azp_gsc_generated_files_t_template => 'Remision',
						d_azp_gsc_generated_files_t_type => 'Compresion',
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_gsc_generated_files, $var_array);
				} else {*/
					# Nombre del archivo a guardar con sus datos respectivos
					$var_zip_file = 'supplier' . '_' . DATE . '_' . HOUR_NUMBER . '.zip';
					# Ruta de la carpeta para almacenar sus respectivos archivos
					$var_zip_route = 'filespublics/azp_gsc_generated/' . YEAR . '/' . YEAR_MONTH . '/' . DATE . '/';
					# Ruta final concatenada para almacenar el archivo en su carpeta
					$var_zip_final = '../' . $var_zip_route . $var_zip_file;
					# Validacion de la ruta y archivo del archivo a comprimir
					if ($var_compressed->open($var_zip_final,ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE) === true) {
						# Agregamos los archivos a comprimir
						$var_get_excel = file_get_contents('../' . $var_sql_final);
						# Añadir los archivos a comprimir
						$var_compressed->addFromString(str_replace('filesproject/azp_gsc_request/', '', $var_sql_final), $var_get_excel);
					}
					# Cerrar la compresion del archivo
					$var_compressed->close();
					# Codificar la iniformacion del archivo
					$var_base_64 = base64_encode(file_get_contents($var_zip_final));
					# Dar permisos a la carpeta y archivo
					chmod($var_zip_final, 0777);
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_gsc_generated_files_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_gsc_generated_files_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_gsc_generated_files_m_date_created => DATE_HOUR,
						d_azp_gsc_generated_files_m_date_modified => DATE_HOUR,
						d_azp_gsc_generated_files_m_deleted => '2',
						d_azp_gsc_generated_files_m_description => '',
						d_azp_gsc_generated_files_m_level => '2',
						d_azp_gsc_generated_files_m_status => '1',
						d_azp_gsc_generated_files_m_temp => '2',
						d_azp_gsc_generated_files_t_date_load => DATE_HOUR,
						d_azp_gsc_generated_files_t_encode => $var_base_64,
						d_azp_gsc_generated_files_t_expiration => 'Generado',
						d_azp_gsc_generated_files_t_extension => 'zip',
						d_azp_gsc_generated_files_t_module => 'Solicitud',
						d_azp_gsc_generated_files_t_name_file => $var_zip_file,
						d_azp_gsc_generated_files_t_route => $var_zip_route,
						d_azp_gsc_generated_files_t_template => 'Proveedor',
						d_azp_gsc_generated_files_t_type => 'Compresion',
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_gsc_generated_files, $var_array);
				//}

				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo comprimido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_request_user(array $data) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# --------------------------------------------------------------------------------------------------
				$var_id = $data['field_tb_id'];
				# --------------------------------------------------------------------------------------------------
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_id as $key => $value) {
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(d_azp_user_m_temp => '9',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_user, $var_array, d_azp_user_id_azp_user . " = '" . $value . "'");
				}
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos registrados correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_request_third_parties(array $data) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# --------------------------------------------------------------------------------------------------
				$var_id = $data['field_tb_id'];
				# --------------------------------------------------------------------------------------------------
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_id as $key => $value) {
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(d_azp_gsc_third_parties_m_temp => '9',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_gsc_third_parties, $var_array, d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $value . "'");
				}
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos registrados correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_report_follow_email() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_id_azp_report_gsc_follow_email . " AS 'lbl_azp_report_gsc_follow_email_id_azp_report_gsc_follow_email',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_m_by_created . " AS 'lbl_azp_report_gsc_follow_email_m_by_created',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_m_by_modified . " AS 'lbl_azp_report_gsc_follow_email_m_by_modified',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_m_date_created . " AS 'lbl_azp_report_gsc_follow_email_m_date_created',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_m_date_modified . " AS 'lbl_azp_report_gsc_follow_email_m_date_modified',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_m_deleted . " AS 'lbl_azp_report_gsc_follow_email_m_deleted',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_m_description . " AS 'lbl_azp_report_gsc_follow_email_m_description',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_m_level . " AS 'lbl_azp_report_gsc_follow_email_m_level',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_m_status . " AS 'lbl_azp_report_gsc_follow_email_m_status',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_m_temp . " AS 'lbl_azp_report_gsc_follow_email_m_temp',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_t_city . " AS 'lbl_azp_report_gsc_follow_email_t_city',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_t_death_date . " AS 'lbl_azp_report_gsc_follow_email_t_death_date',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_t_full_name . " AS 'lbl_azp_report_gsc_follow_email_t_full_name',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_t_identification . " AS 'lbl_azp_report_gsc_follow_email_t_identification',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_t_notary . " AS 'lbl_azp_report_gsc_follow_email_t_notary',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_t_number_request . " AS 'lbl_azp_report_gsc_follow_email_t_number_request',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_t_observation_internal . " AS 'lbl_azp_report_gsc_follow_email_t_observation_internal',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_t_request_date . " AS 'lbl_azp_report_gsc_follow_email_t_request_date',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_t_serial . " AS 'lbl_azp_report_gsc_follow_email_t_serial',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_u_gsc_causal . " AS 'lbl_azp_report_gsc_follow_email_u_gsc_causal',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_u_gsc_client . " AS 'lbl_azp_report_gsc_follow_email_u_gsc_client',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_u_gsc_state . " AS 'lbl_azp_report_gsc_follow_email_u_gsc_state',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_t_number_sexic . " AS 'lbl_azp_report_gsc_follow_email_t_number_sexic',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_t_number_sexpc . " AS 'lbl_azp_report_gsc_follow_email_t_number_sexpc',
					tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_t_mg_last_date . " AS 'lbl_azp_report_gsc_follow_email_t_mg_last_date'
				FROM " . t_azp_report_gsc_follow_email . " tc_azp_report_gsc_follow_email
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_m_deleted . " = '1'
				ORDER BY tc_azp_report_gsc_follow_email." . d_azp_report_gsc_follow_email_id_azp_report_gsc_follow_email . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_request_report_follow_email(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_rp_tcd_date_since'])) { throw new Exception('<b>Error:</b> El campo de fecha solicitud desde esta prohibido modificar.'); }
				if (!isset($data['field_rp_tcd_date_until'])) { throw new Exception('<b>Error:</b> El campo de fecha solicitud hasta esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_date_since = $this->db->scape($data['field_rp_tcd_date_since']);
				$empty_date_until = $this->db->scape($data['field_rp_tcd_date_until']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_date_since) || $empty_date_since == 'aaaa-mm-dd') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha solicitud desde es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_date_since) < 10 || strlen($empty_date_since) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha solicitud desde está mal diligenciado, debe ser aaaa-mm-dd.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_date_until) || $empty_date_until == 'aaaa-mm-dd') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha solicitud hasta es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_date_until) < 10 || strlen($empty_date_until) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha solicitud hasta está mal diligenciado, debe ser aaaa-mm-dd.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_gsc_request_report_follow_email(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_request_report_follow_email($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("TRUNCATE TABLE " . t_azp_report_gsc_follow_email);
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_date_since = $this->db->scape($data['field_rp_tcd_date_since']);
				$empty_date_until = $this->db->scape($data['field_rp_tcd_date_until']);
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT
						tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
						tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
						tc_azp_gsc_request." . d_azp_gsc_request_t_death_date . " AS 'lbl_azp_gsc_request_t_death_date',
						tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
						tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
						tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
						tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
						tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
						tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date',
						REPLACE(tc_azp_gsc_request." . d_azp_gsc_request_t_serial . ", '_', '') AS 'lbl_azp_gsc_request_t_serial',
						tc_azp_gsc_causal." . d_azp_gsc_causal_t_name . " AS 'lbl_azp_gsc_causal_t_name',
						tc_azp_gsc_client." . d_azp_gsc_client_t_code . " AS 'lbl_azp_gsc_client_t_code',
						tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
						tc_azp_gsc_state." . d_azp_gsc_state_t_name . " AS 'lbl_azp_gsc_state_t_name'
					FROM " . t_azp_gsc_request . " tc_azp_gsc_request

					INNER JOIN " . t_azp_gsc_causal . " tc_azp_gsc_causal
						ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_causal . "
							= tc_azp_gsc_causal." . d_azp_gsc_causal_id_azp_gsc_causal . "
					INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
						ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
							= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
					INNER JOIN " . t_azp_gsc_state . " tc_azp_gsc_state
						ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_state . "
							= tc_azp_gsc_state." . d_azp_gsc_state_id_azp_gsc_state . "
					
					WHERE (tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " >= '" . $empty_date_since . "'
						AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " <= '" . $empty_date_until . "')
				");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_report_gsc_follow_email_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_report_gsc_follow_email_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_report_gsc_follow_email_m_date_created => DATE_HOUR,
							d_azp_report_gsc_follow_email_m_date_modified => DATE_HOUR,
							d_azp_report_gsc_follow_email_m_deleted => '1',
							d_azp_report_gsc_follow_email_m_description => '',
							d_azp_report_gsc_follow_email_m_level => '2',
							d_azp_report_gsc_follow_email_m_status => '1',
							d_azp_report_gsc_follow_email_m_temp => '1',
							d_azp_report_gsc_follow_email_t_city => $key_sql['lbl_azp_gsc_request_t_city'],
							d_azp_report_gsc_follow_email_t_death_date => $key_sql['lbl_azp_gsc_request_t_death_date'],
							d_azp_report_gsc_follow_email_t_full_name => $key_sql['lbl_azp_gsc_request_t_full_name'],
							d_azp_report_gsc_follow_email_t_identification => $key_sql['lbl_azp_gsc_request_t_identification'],
							d_azp_report_gsc_follow_email_t_notary => $key_sql['lbl_azp_gsc_request_t_notary'],
							d_azp_report_gsc_follow_email_t_number_request => $key_sql['lbl_azp_gsc_client_t_code'] . '_' . $key_sql['lbl_azp_gsc_request_t_number_request'],
							d_azp_report_gsc_follow_email_t_observation_internal => $key_sql['lbl_azp_gsc_request_t_observation'],
							d_azp_report_gsc_follow_email_t_request_date => $key_sql['lbl_azp_gsc_request_t_request_date'],
							d_azp_report_gsc_follow_email_t_serial => $key_sql['lbl_azp_gsc_request_t_serial'],
							d_azp_report_gsc_follow_email_u_gsc_causal => $key_sql['lbl_azp_gsc_causal_t_name'],
							d_azp_report_gsc_follow_email_u_gsc_client => $key_sql['lbl_azp_gsc_client_t_code'],
							d_azp_report_gsc_follow_email_u_gsc_state => $key_sql['lbl_azp_gsc_state_t_name'],
							d_azp_report_gsc_follow_email_t_number_sexic => '0',
							d_azp_report_gsc_follow_email_t_number_sexpc => '0',
							//d_azp_report_gsc_follow_email_t_mg_last_date => '',
							d_azp_report_gsc_follow_email_v_id_azp_gsc_request => $key_sql['lbl_azp_gsc_request_id_azp_gsc_request'],
						);
						# Insertar valores en la nueva tabla que no existen
						$this->db->insert(t_azp_report_gsc_follow_email, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT " . d_azp_gsc_observation_internal_t_identification . " AS 'lbl_azp_gsc_observation_internal_t_identification',
						GROUP_CONCAT(
							'Fecha: ', " . d_azp_gsc_observation_internal_m_date_modified . ",
							' Observacion: ', " . d_azp_gsc_observation_internal_t_observation . "
						) AS 'lbl_azp_gsc_observation_internal_t_observation'
					FROM " . t_azp_gsc_observation_internal . "
					GROUP BY " . d_azp_gsc_observation_internal_t_identification . "
				");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_report_gsc_follow_email_t_observation_internal => $key_sql['lbl_azp_gsc_observation_internal_t_observation'],);
						# Insertar valores en la nueva tabla que no existen
						$this->db->update(t_azp_report_gsc_follow_email, $var_array, d_azp_report_gsc_follow_email_t_identification . " = '" . $key_sql['lbl_azp_gsc_observation_internal_t_identification'] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT
						tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
						COUNT(tc_azp_gsc_follow_email." . d_azp_gsc_follow_email_t_register . ") AS 'lbl_azp_gsc_follow_email_t_register'
					FROM " . t_azp_gsc_follow_email . " tc_azp_gsc_follow_email
					INNER JOIN " . t_azp_gsc_request . " tc_azp_gsc_request
					ON tc_azp_gsc_follow_email." . d_azp_gsc_follow_email_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
					WHERE tc_azp_gsc_follow_email." . d_azp_gsc_follow_email_t_template . " = 'Solicitud Existencia Certificado'
						-- AND (tc_azp_gsc_follow_email." . d_azp_gsc_follow_email_t_date . " >= '" . $empty_date_since . "'
							-- AND tc_azp_gsc_follow_email." . d_azp_gsc_follow_email_t_date . " <= '" . $empty_date_until . "')
					GROUP BY tc_azp_gsc_follow_email." . d_azp_gsc_follow_email_v_id_azp_gsc_request . "
				");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_report_gsc_follow_email_t_number_sexic => $key_sql['lbl_azp_gsc_follow_email_t_register'],);
						# Insertar valores en la nueva tabla que no existen
						$this->db->update(t_azp_report_gsc_follow_email, $var_array, d_azp_report_gsc_follow_email_v_id_azp_gsc_request . " = '" . $key_sql['lbl_azp_gsc_request_id_azp_gsc_request'] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT
						tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
						COUNT(tc_azp_gsc_follow_email." . d_azp_gsc_follow_email_t_register . ") AS 'lbl_azp_gsc_follow_email_t_register'
					FROM " . t_azp_gsc_follow_email . " tc_azp_gsc_follow_email
					INNER JOIN " . t_azp_gsc_request . " tc_azp_gsc_request
					ON tc_azp_gsc_follow_email." . d_azp_gsc_follow_email_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
					WHERE tc_azp_gsc_follow_email." . d_azp_gsc_follow_email_t_template . " = 'Solicitud Expedicion Certificado'
						-- AND (tc_azp_gsc_follow_email." . d_azp_gsc_follow_email_t_date . " >= '" . $empty_date_since . "'
							-- AND tc_azp_gsc_follow_email." . d_azp_gsc_follow_email_t_date . " <= '" . $empty_date_until . "')
					GROUP BY tc_azp_gsc_follow_email." . d_azp_gsc_follow_email_v_id_azp_gsc_request . "
				");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_report_gsc_follow_email_t_number_sexpc => $key_sql['lbl_azp_gsc_follow_email_t_register'],);
						# Insertar valores en la nueva tabla que no existen
						$this->db->update(t_azp_report_gsc_follow_email, $var_array, d_azp_report_gsc_follow_email_v_id_azp_gsc_request . " = '" . $key_sql['lbl_azp_gsc_request_id_azp_gsc_request'] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function validate_date($date, $format = 'Y-m-d') {
			$d = DateTime::createFromFormat($format, $date);
			return $d && $d->format($format) == $date;
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_request_table(array $data) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# --------------------------------------------------------------------------------------------------
				//$this->db->query("DELETE FROM " . t_azp_gsc_update);
				//$this->db->query("ALTER TABLE " . t_azp_gsc_update . " AUTO_INCREMENT = 1");
				//$this->db->delete(t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				$this->db->query("DELETE FROM " . t_azp_gsc_update . " WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# --------------------------------------------------------------------------------------------------
				$var_id = $data['field_tb_id'];
				# --------------------------------------------------------------------------------------------------
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_id as $key => $value) {
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(
						d_azp_gsc_update_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_gsc_update_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_gsc_update_m_date_created => DATE_HOUR,
						d_azp_gsc_update_m_date_modified => DATE_HOUR,
						d_azp_gsc_update_m_deleted => '1',
						d_azp_gsc_update_m_description => '',
						d_azp_gsc_update_m_level => '2',
						d_azp_gsc_update_m_status => '1',
						d_azp_gsc_update_m_temp => '1',
						d_azp_gsc_update_v_id_azp_gsc_request => $value,
					);
					# Insertar valores en la nueva tabla que no existen
					$this->db->insert(t_azp_gsc_update, $var_array);
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_m_deleted . " = '1'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_update_s_capture => $key_sql[d_azp_gsc_request_s_capture],
							d_azp_gsc_update_s_data => $key_sql[d_azp_gsc_request_s_data],
							d_azp_gsc_update_s_date => $key_sql[d_azp_gsc_request_s_date],
							d_azp_gsc_update_s_existing => $key_sql[d_azp_gsc_request_s_existing],
							d_azp_gsc_update_s_validate => $key_sql[d_azp_gsc_request_s_validate],
							d_azp_gsc_update_s_web_service => $key_sql[d_azp_gsc_request_s_web_service],
							d_azp_gsc_update_t_city => $key_sql[d_azp_gsc_request_t_city],
							d_azp_gsc_update_t_death_date => $key_sql[d_azp_gsc_request_t_death_date],
							d_azp_gsc_update_t_full_name => $key_sql[d_azp_gsc_request_t_full_name],
							d_azp_gsc_update_t_id_supplier => $key_sql[d_azp_gsc_request_t_id_supplier],
							d_azp_gsc_update_t_identification => $key_sql[d_azp_gsc_request_t_identification],
							d_azp_gsc_update_t_notary => $key_sql[d_azp_gsc_request_t_notary],
							d_azp_gsc_update_t_number_obligation => $key_sql[d_azp_gsc_request_t_number_obligation],
							d_azp_gsc_update_t_number_request => $key_sql[d_azp_gsc_request_t_number_request],
							d_azp_gsc_update_t_observation => $key_sql[d_azp_gsc_request_t_observation],
							d_azp_gsc_update_t_observation_outer => $key_sql[d_azp_gsc_request_t_observation_outer],
							d_azp_gsc_update_t_reported_bank => $key_sql[d_azp_gsc_request_t_reported_bank],
							d_azp_gsc_update_t_request_by => $key_sql[d_azp_gsc_request_t_request_by],
							d_azp_gsc_update_t_request_date => $key_sql[d_azp_gsc_request_t_request_date],
							d_azp_gsc_update_t_request_state => $key_sql[d_azp_gsc_request_t_request_state],
							d_azp_gsc_update_t_serial => $key_sql[d_azp_gsc_request_t_serial],
							d_azp_gsc_update_t_shipping_date => $key_sql[d_azp_gsc_request_t_shipping_date],
							d_azp_gsc_update_t_shipping_number => $key_sql[d_azp_gsc_request_t_shipping_number],
							d_azp_gsc_update_t_supplier_request_date => $key_sql[d_azp_gsc_request_t_supplier_request_date],
							d_azp_gsc_update_t_supplier_request_number => $key_sql[d_azp_gsc_request_t_supplier_request_number],
							d_azp_gsc_update_v_id_azp_gsc_causal => $key_sql[d_azp_gsc_request_v_id_azp_gsc_causal],
							d_azp_gsc_update_v_id_azp_gsc_client => $key_sql[d_azp_gsc_request_v_id_azp_gsc_client],
							d_azp_gsc_update_v_id_azp_gsc_expiration => $key_sql[d_azp_gsc_request_v_id_azp_gsc_expiration],
							d_azp_gsc_update_v_id_azp_gsc_phase => $key_sql[d_azp_gsc_request_v_id_azp_gsc_phase],
							d_azp_gsc_update_v_id_azp_gsc_state => $key_sql[d_azp_gsc_request_v_id_azp_gsc_state],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_update, $var_array,
							d_azp_gsc_update_v_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_request_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
						);
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos registrados correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_third_parties_count() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_gsc_third_parties, d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $this->id . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				//foreach ($var_sql as $key_sql): $var_id = $key_sql[d_azp_gsc_type_third_id_azp_gsc_type_third]; endforeach;
				foreach ($var_sql as $key_sql): $var_business_name = $key_sql[d_azp_gsc_third_parties_t_business_name]; endforeach;
			} else { $var_business_name = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_third_parties . " tc_azp_gsc_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_city ." tc_azp_gsc_city
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_city . "
						= tc_azp_gsc_city." . d_azp_gsc_city_id_azp_gsc_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_type_third ." tc_azp_gsc_type_third
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_type_third . "
						= tc_azp_gsc_type_third." . d_azp_gsc_type_third_id_azp_gsc_type_third . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_business_name . " = '" . $var_business_name . "'
					AND tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_deleted . " = '1'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_third_parties_id() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " AS 'lbl_azp_gsc_third_parties_id_azp_gsc_third_parties',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_date_created . " AS 'lbl_azp_gsc_third_parties_m_date_created',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_date_modified . " AS 'lbl_azp_gsc_third_parties_m_date_modified',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_description . " AS 'lbl_azp_gsc_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_address . " AS 'lbl_azp_gsc_third_parties_t_address',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_business_name . " AS 'lbl_azp_gsc_third_parties_t_business_name',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_contact . " AS 'lbl_azp_gsc_third_parties_t_contact',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_email . " AS 'lbl_azp_gsc_third_parties_t_email',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_password . " AS 'lbl_azp_gsc_third_parties_t_password',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_phone_fixed . " AS 'lbl_azp_gsc_third_parties_t_phone_fixed',
					tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_t_phone_movil . " AS 'lbl_azp_gsc_third_parties_t_phone_movil',
					tc_azp_gsc_city." . d_azp_gsc_city_t_name . " AS 'lbl_azp_gsc_city_t_name',
					tc_azp_gsc_type_third." . d_azp_gsc_type_third_t_name . " AS 'lbl_azp_gsc_type_third_t_name'
				FROM " . t_azp_gsc_third_parties . " tc_azp_gsc_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_city ." tc_azp_gsc_city
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_city . "
						= tc_azp_gsc_city." . d_azp_gsc_city_id_azp_gsc_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_type_third ." tc_azp_gsc_type_third
					ON tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_v_id_azp_gsc_type_third . "
						= tc_azp_gsc_type_third." . d_azp_gsc_type_third_id_azp_gsc_type_third . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_third_parties." . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $this->id . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_table() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_update." . d_azp_gsc_update_id_azp_gsc_update . " AS 'lbl_azp_gsc_update_id_azp_gsc_update',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_update." . d_azp_gsc_update_m_date_created . " AS 'lbl_azp_gsc_update_m_date_created',
					tc_azp_gsc_update." . d_azp_gsc_update_m_date_modified . " AS 'lbl_azp_gsc_update_m_date_modified',
					tc_azp_gsc_update." . d_azp_gsc_update_m_description . " AS 'lbl_azp_gsc_update_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_update." . d_azp_gsc_update_s_capture . " AS 'lbl_azp_gsc_update_s_capture',
					tc_azp_gsc_update." . d_azp_gsc_update_s_data . " AS 'lbl_azp_gsc_update_s_data',
					tc_azp_gsc_update." . d_azp_gsc_update_s_date . " AS 'lbl_azp_gsc_update_s_date',
					tc_azp_gsc_update." . d_azp_gsc_update_s_existing . " AS 'lbl_azp_gsc_update_s_existing',
					tc_azp_gsc_update." . d_azp_gsc_update_s_validate . " AS 'lbl_azp_gsc_update_s_validate',
					tc_azp_gsc_update." . d_azp_gsc_update_s_web_service . " AS 'lbl_azp_gsc_update_s_web_service',
					tc_azp_gsc_update." . d_azp_gsc_update_t_city . " AS 'lbl_azp_gsc_update_t_city',
					tc_azp_gsc_update." . d_azp_gsc_update_t_date_associate . " AS 'lbl_azp_gsc_update_t_date_associate',
					tc_azp_gsc_update." . d_azp_gsc_update_t_death_date . " AS 'lbl_azp_gsc_update_t_death_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_full_name . " AS 'lbl_azp_gsc_update_t_full_name',
					tc_azp_gsc_update." . d_azp_gsc_update_t_id_supplier . " AS 'lbl_azp_gsc_update_t_id_supplier',
					tc_azp_gsc_update." . d_azp_gsc_update_t_identification . " AS 'lbl_azp_gsc_update_t_identification',
					tc_azp_gsc_update." . d_azp_gsc_update_t_notary . " AS 'lbl_azp_gsc_update_t_notary',
					tc_azp_gsc_update." . d_azp_gsc_update_t_number_consecutive . " AS 'lbl_azp_gsc_update_t_number_consecutive',
					tc_azp_gsc_update." . d_azp_gsc_update_t_number_obligation . " AS 'lbl_azp_gsc_update_t_number_obligation',
					tc_azp_gsc_update." . d_azp_gsc_update_t_number_request . " AS 'lbl_azp_gsc_update_t_number_request',
					tc_azp_gsc_update." . d_azp_gsc_update_t_observation . " AS 'lbl_azp_gsc_update_t_observation',
					tc_azp_gsc_update." . d_azp_gsc_update_t_observation_outer . " AS 'lbl_azp_gsc_update_t_observation_outer',
					tc_azp_gsc_update." . d_azp_gsc_update_t_reported_bank . " AS 'lbl_azp_gsc_update_t_reported_bank',
					tc_azp_gsc_update." . d_azp_gsc_update_t_request_by . " AS 'lbl_azp_gsc_update_t_request_by',
					tc_azp_gsc_update." . d_azp_gsc_update_t_request_date . " AS 'lbl_azp_gsc_update_t_request_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_request_state . " AS 'lbl_azp_gsc_update_t_request_state',
					REPLACE(tc_azp_gsc_update." . d_azp_gsc_update_t_serial . ", '_', '') AS 'lbl_azp_gsc_update_t_serial',
					tc_azp_gsc_update." . d_azp_gsc_update_t_shipping_date . " AS 'lbl_azp_gsc_update_t_shipping_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_shipping_number . " AS 'lbl_azp_gsc_update_t_shipping_number',
					tc_azp_gsc_update." . d_azp_gsc_update_t_supplier_request_date . " AS 'lbl_azp_gsc_update_t_supplier_request_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_supplier_request_number . " AS 'lbl_azp_gsc_update_t_supplier_request_number',
					tc_azp_gsc_causal." . d_azp_gsc_causal_t_name . " AS 'lbl_azp_gsc_causal_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_expiration." . d_azp_gsc_expiration_t_name . " AS 'lbl_azp_gsc_expiration_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_name . " AS 'lbl_azp_gsc_phase_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_percentage . " AS 'lbl_azp_gsc_phase_t_percentage',
					tc_azp_gsc_state." . d_azp_gsc_state_t_name . " AS 'lbl_azp_gsc_state_t_name'
				FROM " . t_azp_gsc_update . " tc_azp_gsc_update
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_update." . d_azp_gsc_update_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_update." . d_azp_gsc_update_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_update." . d_azp_gsc_update_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_causal ." tc_azp_gsc_causal
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_causal . "
						= tc_azp_gsc_causal." . d_azp_gsc_causal_id_azp_gsc_causal . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_expiration ." tc_azp_gsc_expiration
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_expiration . "
						= tc_azp_gsc_expiration." . d_azp_gsc_expiration_id_azp_gsc_expiration . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_state ." tc_azp_gsc_state
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_state . "
						= tc_azp_gsc_state." . d_azp_gsc_state_id_azp_gsc_state . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_deleted . " = '1'
					AND tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_gsc_request_generated_files(string $var_expiration, string $var_extension, string $var_module, string $var_name_file, string $var_route, string $var_template, string $var_type) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_gsc_generated_files_m_temp => '1',);
				# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
				$this->db->update(t_azp_gsc_generated_files, $var_array,
					d_azp_gsc_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_gsc_generated_files_m_temp . " = '2'"
				);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_generated_files_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_generated_files_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_generated_files_m_date_created => DATE_HOUR,
					d_azp_gsc_generated_files_m_date_modified => DATE_HOUR,
					d_azp_gsc_generated_files_m_deleted => '1',
					d_azp_gsc_generated_files_m_description => '',
					d_azp_gsc_generated_files_m_level => '2',
					d_azp_gsc_generated_files_m_status => '1',
					d_azp_gsc_generated_files_m_temp => '2',
					d_azp_gsc_generated_files_t_date_load => DATE_HOUR,
					d_azp_gsc_generated_files_t_encode => '',
					d_azp_gsc_generated_files_t_expiration => $var_expiration,
					d_azp_gsc_generated_files_t_extension => $var_extension,
					d_azp_gsc_generated_files_t_module => $var_module,
					d_azp_gsc_generated_files_t_name_file => $var_name_file,
					d_azp_gsc_generated_files_t_route => $var_route,
					d_azp_gsc_generated_files_t_template => $var_template,
					d_azp_gsc_generated_files_t_type => $var_type,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_generated_files, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos registrados correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_client(string $var_id) {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_client, d_azp_gsc_client_id_azp_gsc_client . " = '" . $var_id . "'");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_client_result() {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->select('*', t_azp_gsc_client, d_azp_gsc_client_id_azp_gsc_client . " = '" . $this->id . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					$var_code = $value[d_azp_gsc_client_t_code];
				endforeach;
			} else { $var_code = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " AS 'lbl_azp_gsc_client_id_azp_gsc_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_client." . d_azp_gsc_client_m_date_created . " AS 'lbl_azp_gsc_client_m_date_created',
					tc_azp_gsc_client." . d_azp_gsc_client_m_date_modified . " AS 'lbl_azp_gsc_client_m_date_modified',
					tc_azp_gsc_client." . d_azp_gsc_client_m_description . " AS 'lbl_azp_gsc_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_email . " AS 'lbl_azp_gsc_client_t_email',
					tc_azp_gsc_client." . d_azp_gsc_client_t_person . " AS 'lbl_azp_gsc_client_t_person'
				FROM " . t_azp_gsc_client . " tc_azp_gsc_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " != '" . $this->id . "'
					AND tc_azp_gsc_client." . d_azp_gsc_client_t_code . " = '" . $var_code . "'
					AND tc_azp_gsc_client." . d_azp_gsc_client_m_deleted . " = '1'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_client_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " AS 'lbl_azp_gsc_client_id_azp_gsc_client',
					tc_azp_gsc_client." . d_azp_gsc_client_m_by_created . " AS 'lbl_azp_gsc_client_m_by_created',
					tc_azp_gsc_client." . d_azp_gsc_client_m_by_modified . " AS 'lbl_azp_gsc_client_m_by_modified',
					tc_azp_gsc_client." . d_azp_gsc_client_m_date_created . " AS 'lbl_azp_gsc_client_m_date_created',
					tc_azp_gsc_client." . d_azp_gsc_client_m_date_modified . " AS 'lbl_azp_gsc_client_m_date_modified',
					tc_azp_gsc_client." . d_azp_gsc_client_m_description . " AS 'lbl_azp_gsc_client_m_description',
					tc_azp_gsc_client." . d_azp_gsc_client_m_level . " AS 'lbl_azp_gsc_client_m_level',
					tc_azp_gsc_client." . d_azp_gsc_client_m_status . " AS 'lbl_azp_gsc_client_m_status',
					tc_azp_gsc_client." . d_azp_gsc_client_t_code . " AS 'lbl_azp_gsc_client_t_code',
					tc_azp_gsc_client." . d_azp_gsc_client_t_email . " AS 'lbl_azp_gsc_client_t_email',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_password . " AS 'lbl_azp_gsc_client_t_password',
					tc_azp_gsc_client." . d_azp_gsc_client_t_person . " AS 'lbl_azp_gsc_client_t_person',
					tc_azp_gsc_client." . d_azp_gsc_client_t_position . " AS 'lbl_azp_gsc_client_t_position'
				FROM " . t_azp_gsc_client . " tc_azp_gsc_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_client." . d_azp_gsc_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " = '" . $this->id . "'
					AND tc_azp_gsc_client." . d_azp_gsc_client_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_gsc_request_email_1(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_em_1_affair'])) { throw new Exception('<b>Error:</b> El campo de asunto esta prohibido modificar.'); }
				if (!isset($data['field_em_1_third_type'])) { throw new Exception('<b>Error:</b> El campo de razon social esta prohibido modificar.'); }
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
					throw new Exception('<b>Error:</b> El campo de asunto es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_third_type) || strtolower($empty_third_type) == strtolower('seleccionar') || $empty_third_type == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de razon social es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_third_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de razon social solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_file_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre archivo es oblgitario.');
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
					throw new Exception('<b>Error:</b> El campo de mensaje es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_gsc_third_type = $this->db->select('*', t_azp_gsc_third_parties, d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $empty_third_type . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_gsc_third_type) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_gsc_third_type) == '') { $sql_gsc_third_type[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_gsc_third_type[0][0]) != strtolower($empty_third_type)) {
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
		final public function sql_azp_gsc_request_email_1(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_request_email_1($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
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
				# Array para guardar valores
				$var_xlsx = array();
				#-------------------------------------------------------------------------#
				# Valores del array vacios
				$var_log_email_main = array();
				$var_log_email_copy = array();
				$var_log_email_intern = array();
				#-------------------------------------------------------------------------#
				$empty_tp_id = $this->db->scape($data['field_tp_id']);
				$empty_em_id = $this->db->scape($data['field_em_id']);
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
				$var_email_address = array();
				# Recorrer los datos de la consulta
				foreach ($var_array_tp as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_email_send = $this->db->select("*", t_azp_gsc_third_parties,
						d_azp_gsc_third_parties_id_azp_gsc_third_parties . " IN ('" . $value . "')"
					);
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_email_send) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_email_send as $key2 => $value2):
							$var_id = $value2[d_azp_gsc_third_parties_id_azp_gsc_third_parties];
							$var_contact = $value2[d_azp_gsc_third_parties_t_contact];
							$var_email = $value2[d_azp_gsc_third_parties_t_email];
							$var_email_address[$var_email] = $var_contact;
							$var_log_email_main[$var_id] = $var_contact . '(' . $var_email . ')';
							# Asignacion de valores a nuevas variables
							$empty_aemail = $value2[d_azp_gsc_third_parties_t_email];
							$empty_anames = $value2[d_azp_gsc_third_parties_t_contact];
							$var_adds[$empty_aemail] = $empty_anames;
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array_em = explode(",", $empty_em_id);
				# Valores del array vacios
				$var_email_copy = array();
				# Recorrer los datos de la consulta
				foreach ($var_array_em as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_email_send = $this->db->select("*", t_azp_gsc_email_copy,
						d_azp_gsc_email_copy_id_azp_gsc_email_copy . " IN ('" . $value . "') AND " .
						d_azp_gsc_email_copy_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
					);
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_email_send) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_email_send as $key2 => $value2):
							$var_id = $value2[d_azp_gsc_email_copy_id_azp_gsc_email_copy];
							$var_names = $value2[d_azp_gsc_email_copy_t_names];
							$var_surnames = $value2[d_azp_gsc_email_copy_t_surnames];
							$var_email = $value2[d_azp_gsc_email_copy_t_email];
							$var_email_copy[$var_email] = $var_names . ' ' . $var_surnames;
							$var_log_email_intern[$var_id] = $var_names . ' ' . $var_surnames . '(' . $var_email . ')';
							# Asignacion de valores a nuevas variables
							$empty_cemail = $value2[d_azp_gsc_email_copy_t_email];
							$empty_cnames = $value2[d_azp_gsc_email_copy_t_names];
							$empty_csurns = $value2[d_azp_gsc_email_copy_t_surnames];
							$empty_cdata = $empty_cnames . ' ' . $empty_csurns;
							$var_copy[$empty_cemail] = $empty_cdata;
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql_excel = $this->db->select("*", t_azp_gsc_generated_files,
					d_azp_gsc_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_gsc_generated_files_m_deleted . " = '1' AND " .
					d_azp_gsc_generated_files_m_level . " = '2' AND " .
					d_azp_gsc_generated_files_m_temp . " = '2' AND " .
					d_azp_gsc_generated_files_t_expiration . " = 'Utilizable' AND " .
					d_azp_gsc_generated_files_t_extension . " = 'xlsx' AND " .
					d_azp_gsc_generated_files_t_module . " = 'Solicitud' AND " .
					d_azp_gsc_generated_files_t_template . " = 'Proveedor' AND " .
					d_azp_gsc_generated_files_t_type . " = 'Excel'"
				);
				#-------------------------------------------------------------------------#
				if (false != $var_sql_excel) {
					foreach ($var_sql_excel as $key_sql => $value_sql) {
						$var_docum = $value_sql[d_azp_gsc_generated_files_t_name_file];
						$var_route = $value_sql[d_azp_gsc_generated_files_t_route];
						$var_compl = '../' . $var_route . $var_docum;
						$var_xlsx[0] = $var_compl;
						$var_xlroute = $var_route;
						#$var_files[$var_compl] = $var_docum;
					}
				}
				#-------------------------------------------------------------------------#
				# Ruta principal de la carpeta
				$var_ec_route = '../systemfiles/filesproject/';
				# Ruta de la carpeta principal
				$var_ec_folder = 'azp_gsc_request/supplier/';
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
						$var_get_route = $var_ec_route . $var_ec_folder . 'encrypted/' . $var_ec_year . $var_ec_month . $var_ec_date;
						# Añadir los archivos a comprimir
						$var_get_content = file_get_contents($key_file);
						# Añadir los archivos a comprimir
						$var_compressed->addFromString(str_replace('../' . $var_xlroute, '', $key_file), $var_get_content);
					}
				}
				# Cerrar la compresion del archivo
				$var_compressed->close();
				# Codificar la iniformacion del archivo
				$var_base_64 = base64_encode(file_get_contents($var_zip_final));
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
				$var_files[$var_zip_final] = $var_zip_name;
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
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_request_t_supplier_request_date => DATE,
							d_azp_gsc_request_v_id_azp_gsc_phase => '4',
							d_azp_gsc_request_v_id_azp_gsc_state => '1',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array,
							d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_request_v_id_azp_gsc_phase . " <= '4'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_follow_email_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_follow_email_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_follow_email_m_date_created => DATE_HOUR,
							d_azp_gsc_follow_email_m_date_modified => DATE_HOUR,
							d_azp_gsc_follow_email_m_deleted => '1',
							d_azp_gsc_follow_email_m_description => '',
							d_azp_gsc_follow_email_m_level => '2',
							d_azp_gsc_follow_email_m_status => '1',
							d_azp_gsc_follow_email_m_temp => '1',
							d_azp_gsc_follow_email_t_date => DATE,
							d_azp_gsc_follow_email_t_template => ucwords(strtolower('Solicitud Consultas')),
							d_azp_gsc_follow_email_t_register => '1',
							d_azp_gsc_follow_email_v_id_azp_gsc_request => $key_sql[d_azp_gsc_update_v_id_azp_gsc_request],
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_follow_email, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_logs_request_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_logs_request_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_logs_request_m_date_created => DATE_HOUR,
							d_azp_gsc_logs_request_m_date_modified => DATE_HOUR,
							d_azp_gsc_logs_request_m_deleted => '1',
							d_azp_gsc_logs_request_m_description => '',
							d_azp_gsc_logs_request_m_level => '2',
							d_azp_gsc_logs_request_m_status => '1',
							d_azp_gsc_logs_request_m_temp => '1',
							d_azp_gsc_logs_request_t_action => 'Evento Ejecutado: Fase cambiada a Solicitud Proveedor',
							d_azp_gsc_logs_request_t_date => DATE,
							d_azp_gsc_logs_request_v_id_azp_gsc_request => $key_sql[d_azp_gsc_update_v_id_azp_gsc_request],
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_logs_request, $var_array);
						#-------------------------------------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_observation_internal_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_observation_internal_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_observation_internal_m_date_created => DATE_HOUR,
							d_azp_gsc_observation_internal_m_date_modified => DATE_HOUR,
							d_azp_gsc_observation_internal_m_deleted => '1',
							d_azp_gsc_observation_internal_m_description => '',
							d_azp_gsc_observation_internal_m_level => '2',
							d_azp_gsc_observation_internal_m_status => '1',
							d_azp_gsc_observation_internal_m_temp => '1',
							d_azp_gsc_observation_internal_t_identification => $key_sql[d_azp_gsc_update_t_identification],
							d_azp_gsc_observation_internal_t_observation => 'Solicitud proveedor.',
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_observation_internal, $var_array);
						#-------------------------------------------------------------------------#
						$var_array = array(d_azp_gsc_request_t_observation => DATE . ' ' . 'Solicitud proveedor.',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				$empty_log_email_main = implode(',',$var_log_email_main);
				$empty_log_email_copy = implode(',',$var_log_email_copy);
				$empty_log_email_intern = implode(',',$var_log_email_intern);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_log_email_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_log_email_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_log_email_m_date_created => DATE_HOUR,
					d_azp_gsc_log_email_m_date_modified => DATE_HOUR,
					d_azp_gsc_log_email_m_deleted => '1',
					d_azp_gsc_log_email_m_description => '',
					d_azp_gsc_log_email_m_level => '2',
					d_azp_gsc_log_email_m_status => '1',
					d_azp_gsc_log_email_m_temp => '1',
					d_azp_gsc_log_email_t_affair => $empty_affair,
					d_azp_gsc_log_email_t_email_main => $empty_log_email_main,
					d_azp_gsc_log_email_t_email_copy => $empty_log_email_copy,
					d_azp_gsc_log_email_t_email_intern => $empty_log_email_intern,
					d_azp_gsc_log_email_t_message => $empty_summernote,
					d_azp_gsc_log_email_t_template => 'Solicitud Consultas',
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_log_email, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array($var_return => 1, $var_ms_name => $var_ms_text,);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_gsc_request_email_2(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_em_2_affair'])) { throw new Exception('<b>Error:</b> El campo de asunto esta prohibido modificar.'); }
				if (!isset($data['field_em_2_third_type'])) { throw new Exception('<b>Error:</b> El campo de razon social esta prohibido modificar.'); }
				if (!isset($data['field_em_2_file_name'])) { throw new Exception('<b>Error:</b> El campo de nombre archivo esta prohibido modificar.'); }
				if (!isset($data['field_em_2_summernote_1'])) { throw new Exception('<b>Error:</b> El campo de mensaje 1 esta prohibido modificar.'); }
				if (!isset($data['field_em_2_summernote_2'])) { throw new Exception('<b>Error:</b> El campo de mensaje 2 esta prohibido modificar.'); }
				if (!isset($data['field_em_2_summernote_3'])) { throw new Exception('<b>Error:</b> El campo de mensaje 3 esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_affair = $this->db->scape($data['field_em_2_affair']);
				$empty_third_type = $this->db->scape($data['field_em_2_third_type']);
				$empty_file_name = $this->db->scape($data['field_em_2_file_name']);
				$empty_summernote_1 = $this->db->scape($data['field_em_2_summernote_1']);
				$empty_summernote_2 = $this->db->scape($data['field_em_2_summernote_2']);
				$empty_summernote_3 = $this->db->scape($data['field_em_2_summernote_3']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_affair)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de asunto es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_third_type) || strtolower($empty_third_type) == strtolower('seleccionar') || $empty_third_type == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de razon social es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_third_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de razon social solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_file_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre archivo es oblgitario.');
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
				if (Func::emp($empty_summernote_1)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de mensaje 1 es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_summernote_2)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de mensaje 2 es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_summernote_3)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de mensaje 3 es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_gsc_third_type = $this->db->select('*', t_azp_gsc_third_parties, d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $empty_third_type . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_gsc_third_type) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_gsc_third_type) == '') { $sql_gsc_third_type[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_gsc_third_type[0][0]) != strtolower($empty_third_type)) {
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
		final public function sql_azp_gsc_request_email_2(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_request_email_2($data);
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
				$empty_tp_id = $this->db->scape($data['field_tp_id']);
				$empty_em_id = $this->db->scape($data['field_em_id']);
				//$empty_email = $this->db->scape($data['field_em_2_email']);
				$empty_affair = $this->db->scape($data['field_em_2_affair']);
				$empty_summernote_1 = $this->db->scape($data['field_em_2_summernote_1']);
				$empty_summernote_2 = $this->db->scape($data['field_em_2_summernote_2']);
				$empty_summernote_3 = $this->db->scape($data['field_em_2_summernote_3']);
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
				$var_sql_up = $this->db->select("*", t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
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
				$var_email_address = array();
				# Recorrer los datos de la consulta
				foreach ($var_array_tp as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_email_send = $this->db->select("*", t_azp_gsc_third_parties,
						d_azp_gsc_third_parties_id_azp_gsc_third_parties . " IN ('" . $value . "')"
					);
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_email_send) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_email_send as $key2 => $value2):
							$var_id = $value2[d_azp_gsc_third_parties_id_azp_gsc_third_parties];
							$var_contact = $value2[d_azp_gsc_third_parties_t_contact];
							$var_email = $value2[d_azp_gsc_third_parties_t_email];
							$var_email_address[$var_email] = $var_contact;

							$var_log_email_main[$var_id] = $var_contact . '(' . $var_email . ')';
							# Asignacion de valores a nuevas variables
							$empty_aemail = $value2[d_azp_gsc_third_parties_t_email];
							$empty_anames = $value2[d_azp_gsc_third_parties_t_contact];
							$var_adds[$empty_aemail] = $empty_anames;
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array_em = explode(",", $empty_em_id);
				# Valores del array vacios
				$var_email_copy = array();
				# Recorrer los datos de la consulta
				foreach ($var_array_em as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_email_send = $this->db->select("*", t_azp_gsc_email_copy,
						d_azp_gsc_email_copy_id_azp_gsc_email_copy . " IN ('" . $value . "') AND " .
						d_azp_gsc_email_copy_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
					);
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_email_send) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_email_send as $key2 => $value2):
							$var_id = $value2[d_azp_gsc_email_copy_id_azp_gsc_email_copy];
							$var_names = $value2[d_azp_gsc_email_copy_t_names];
							$var_surnames = $value2[d_azp_gsc_email_copy_t_surnames];
							$var_email = $value2[d_azp_gsc_email_copy_t_email];
							$var_email_copy[$var_email] = $var_names . ' ' . $var_surnames;

							$var_log_email_intern[$var_id] = $var_names . ' ' . $var_surnames . '(' . $var_email . ')';
							# Asignacion de valores a nuevas variables
							$empty_cemail = $value2[d_azp_gsc_email_copy_t_email];
							$empty_cnames = $value2[d_azp_gsc_email_copy_t_names];
							$empty_csurns = $value2[d_azp_gsc_email_copy_t_surnames];
							$empty_cdata = $empty_cnames . ' ' . $empty_csurns;
							$var_copy[$empty_cemail] = $empty_cdata;
						endforeach;
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
								<div class="col-xs-12 col-sm-3 col-md-4 col-lg-4 col-xl-4 mb-3"></div>
								<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8 col-xl-8 mb-3">
									<div class="table-responsive">
										<table border="1" align="center">
											<thead>
												<tr>
													<td style="background-color: red;"><font color="#FFFFFF">Cedula</font></td>
													<td style="background-color: red;"><font color="#FFFFFF">Nombre</font></td>
													<td style="background-color: red;"><font color="#FFFFFF">Serial</font></td>
													<td style="background-color: red;"><font color="#FFFFFF">Notaria</font></td>
													<td style="background-color: red;"><font color="#FFFFFF">Ciudad</font></td>
												</tr>
											</thead>
											<tbody>
				';
				#-------------------------------------------------------------------------#
				foreach ($var_sql_up as $key_sql_up) {
					$var_html .= '<tr>';
						$var_html .= '<td>' . $key_sql_up[d_azp_gsc_update_t_identification] . '</td>';
						$var_html .= '<td>' . $key_sql_up[d_azp_gsc_update_t_full_name] . '</td>';
						$var_html .= '<td>' . $key_sql_up[d_azp_gsc_update_t_serial] . '</td>';
						$var_html .= '<td>' . $key_sql_up[d_azp_gsc_update_t_notary] . '</td>';
						$var_html .= '<td>' . $key_sql_up[d_azp_gsc_update_t_city] . '</td>';
					$var_html .= '</tr>';
				}
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
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-2 col-md-4 col-lg-4 col-xl-4 mb-3"></div>
								<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-xl-6 mb-3">
									<div class="table-responsive">
										<table border="1" align="center">
											<tbody>
												<tr>
													<th>Entidad Bancaria</th>
													<td width="50%"></td>
												</tr>
												<tr>
													<th>Número de cuenta a consignar</th>
													<td width="50%"></td>
												</tr>
												<tr>
													<th>Clase de Cuenta (Ahorros o corriente)</th>
													<td width="50%"></td>
												</tr>
												<tr>
													<th>A nombre de quien está la cuenta</th>
													<td width="50%"></td>
												</tr>
												<tr>
													<th>Número de cédula</th>
													<td width="50%"></td>
												</tr>
												<tr>
													<th>Valor total a consignar (Envio por mensajeria / Otros rubros)</th>
													<td width="50%"></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 mb-3"></div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
									<p class="text-dark">
										<div class="m-0 d-flex">
											<div class="flex-1 text-contrast">
												' . html_entity_decode($empty_summernote_3) . '
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
				$var_email = Emails::main_send($var_init, $var_from, $var_adds, $var_copy, $var_html, $var_topic,);
				#-------------------------------------------------------------------------#
				# Validacion del correo electronico a enviar
				$var_ms_success = '<b>Exito:</b> Correo electronico enviado.';
				$var_ms_error = '<b>Error:</b> Correo electronico no enviado.';
				#-------------------------------------------------------------------------#
				# Validacion del correo electronico a enviar
				if (true === $var_email) { $var_return = 'success'; $var_ms_name = 'message'; $var_ms_text = $var_ms_success; } else { $var_return = 'error'; $var_ms_name = 'message'; $var_ms_text = $var_ms_error; }
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_gsc_generated_files_m_temp => '1',);
				# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
				$this->db->update(t_azp_gsc_generated_files, $var_array,
					d_azp_gsc_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_gsc_generated_files_m_temp . " = '2'"
				);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_request_v_id_azp_gsc_phase => '6', d_azp_gsc_request_v_id_azp_gsc_state => '2',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array,
							d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_request_v_id_azp_gsc_phase . " <= '6'");
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_consignment_m_deleted => '1',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_v_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_follow_email_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_follow_email_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_follow_email_m_date_created => DATE_HOUR,
							d_azp_gsc_follow_email_m_date_modified => DATE_HOUR,
							d_azp_gsc_follow_email_m_deleted => '1',
							d_azp_gsc_follow_email_m_description => '',
							d_azp_gsc_follow_email_m_level => '2',
							d_azp_gsc_follow_email_m_status => '1',
							d_azp_gsc_follow_email_m_temp => '1',
							d_azp_gsc_follow_email_t_date => DATE,
							d_azp_gsc_follow_email_t_template => ucwords(strtolower('Solicitud Existencia Certificado')),
							d_azp_gsc_follow_email_t_register => '1',
							d_azp_gsc_follow_email_v_id_azp_gsc_request => $key_sql[d_azp_gsc_update_v_id_azp_gsc_request],
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_follow_email, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_logs_request_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_logs_request_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_logs_request_m_date_created => DATE_HOUR,
							d_azp_gsc_logs_request_m_date_modified => DATE_HOUR,
							d_azp_gsc_logs_request_m_deleted => '1',
							d_azp_gsc_logs_request_m_description => '',
							d_azp_gsc_logs_request_m_level => '2',
							d_azp_gsc_logs_request_m_status => '1',
							d_azp_gsc_logs_request_m_temp => '1',
							d_azp_gsc_logs_request_t_action => 'Evento Ejecutado: Fase cambiada a Solicitud Existencia Certificado',
							d_azp_gsc_logs_request_t_date => DATE,
							d_azp_gsc_logs_request_v_id_azp_gsc_request => $key_sql[d_azp_gsc_update_v_id_azp_gsc_request],
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_logs_request, $var_array);
						#-------------------------------------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_observation_internal_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_observation_internal_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_observation_internal_m_date_created => DATE_HOUR,
							d_azp_gsc_observation_internal_m_date_modified => DATE_HOUR,
							d_azp_gsc_observation_internal_m_deleted => '1',
							d_azp_gsc_observation_internal_m_description => '',
							d_azp_gsc_observation_internal_m_level => '2',
							d_azp_gsc_observation_internal_m_status => '1',
							d_azp_gsc_observation_internal_m_temp => '1',
							d_azp_gsc_observation_internal_t_identification => $key_sql[d_azp_gsc_update_t_identification],
							d_azp_gsc_observation_internal_t_observation => 'Se envia correo de existencia.',
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_observation_internal, $var_array);
						#-------------------------------------------------------------------------#
						$var_array = array(d_azp_gsc_request_t_observation => DATE . ' ' . 'Se envia correo de existencia.',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				$empty_log_email_main = implode(',',$var_log_email_main);
				$empty_log_email_copy = implode(',',$var_log_email_copy);
				$empty_log_email_intern = implode(',',$var_log_email_intern);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_log_email_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_log_email_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_log_email_m_date_created => DATE_HOUR,
					d_azp_gsc_log_email_m_date_modified => DATE_HOUR,
					d_azp_gsc_log_email_m_deleted => '1',
					d_azp_gsc_log_email_m_description => '',
					d_azp_gsc_log_email_m_level => '2',
					d_azp_gsc_log_email_m_status => '1',
					d_azp_gsc_log_email_m_temp => '1',
					d_azp_gsc_log_email_t_affair => $empty_affair,
					d_azp_gsc_log_email_t_email_main => $empty_log_email_main,
					d_azp_gsc_log_email_t_email_copy => $empty_log_email_copy,
					d_azp_gsc_log_email_t_email_intern => $empty_log_email_intern,
					d_azp_gsc_log_email_t_message => $empty_summernote_1 . $empty_summernote_2 . $empty_summernote_3,
					d_azp_gsc_log_email_t_template => 'Solicitud Existencia Certificado',
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_log_email, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array($var_return => 1, $var_ms_name => $var_ms_text,);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_gsc_request_email_3(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_em_3_affair'])) { throw new Exception('<b>Error:</b> El campo de asunto esta prohibido modificar.'); }
				if (!isset($data['field_em_3_third_type'])) { throw new Exception('<b>Error:</b> El campo de razon social esta prohibido modificar.'); }
				if (!isset($data['field_em_3_file_name'])) { throw new Exception('<b>Error:</b> El campo de nombre archivo esta prohibido modificar.'); }
				if (!isset($data['field_em_3_summernote_1'])) { throw new Exception('<b>Error:</b> El campo de mensaje 1 esta prohibido modificar.'); }
				if (!isset($data['field_em_3_summernote_2'])) { throw new Exception('<b>Error:</b> El campo de mensaje 2 esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_affair = $this->db->scape($data['field_em_3_affair']);
				$empty_third_type = $this->db->scape($data['field_em_3_third_type']);
				$empty_file_name = $this->db->scape($data['field_em_3_file_name']);
				$empty_summernote_1 = $this->db->scape($data['field_em_3_summernote_1']);
				$empty_summernote_2 = $this->db->scape($data['field_em_3_summernote_2']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_affair)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de asunto es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_third_type) || strtolower($empty_third_type) == strtolower('seleccionar') || $empty_third_type == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de razon social es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_third_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de razon social solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_file_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre archivo es oblgitario.');
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
				if (Func::emp($empty_summernote_1)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de mensaje 1 es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_summernote_2)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de mensaje 2 es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_gsc_third_type = $this->db->select('*', t_azp_gsc_third_parties, d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $empty_third_type . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_gsc_third_type) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_gsc_third_type) == '') { $sql_gsc_third_type[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_gsc_third_type[0][0]) != strtolower($empty_third_type)) {
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
		final public function sql_azp_gsc_request_email_3(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_request_email_3($data);
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
				$empty_tp_id = $this->db->scape($data['field_tp_id']);
				$empty_em_id = $this->db->scape($data['field_em_id']);
				//$empty_email = $this->db->scape($data['field_em_3_email']);
				$empty_affair = $this->db->scape($data['field_em_3_affair']);
				$empty_summernote_1 = $this->db->scape($data['field_em_3_summernote_1']);
				$empty_summernote_2 = $this->db->scape($data['field_em_3_summernote_2']);
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
				$var_sql_user = $this->db->query("
					SELECT * FROM " . t_azp_user . " tc_azp_user
					INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
						ON tc_azp_user." . d_azp_user_id_azp_user . "
							= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
					WHERE tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				");
				#-------------------------------------------------------------------------#
				foreach ($var_sql_user as $key => $value):
					$var_u_firm = $value[d_azp_data_personal_t_firm];
					$var_from_name = $value[d_azp_data_personal_t_names] . ' ' . $value[d_azp_data_personal_t_surnames];
				endforeach;
				#-------------------------------------------------------------------------#
				$var_sql_up = $this->db->select("*", t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				/*$var_sql_excel = $this->db->select("*", t_azp_gsc_generated_files,
					d_azp_gsc_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_gsc_generated_files_m_deleted . " = '1' AND " .
					d_azp_gsc_generated_files_m_level . " = '2' AND " .
					d_azp_gsc_generated_files_m_temp . " = '2' AND " .
					d_azp_gsc_generated_files_t_expiration . " = 'Utilizable' AND " .
					d_azp_gsc_generated_files_t_extension . " = 'xlsx' AND " .
					d_azp_gsc_generated_files_t_module . " = 'Solicitud' AND " .
					d_azp_gsc_generated_files_t_template . " = 'Proveedor' AND " .
					d_azp_gsc_generated_files_t_type . " = 'Excel'"
				);
				#-------------------------------------------------------------------------#
				if (false != $var_sql_excel) {
					foreach ($var_sql_excel as $key_sql => $value_sql) {
						$var_name_file = $value_sql[d_azp_gsc_generated_files_t_name_file];
						$var_route = $value_sql[d_azp_gsc_generated_files_t_route];
						$var_sql_excel = '../' . $var_route . $var_name_file;
					}
				} else { $var_sql_excel = ''; }*/
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
								<div class="col-xs-12 col-sm-3 col-md-4 col-lg-4 col-xl-4 mb-3"></div>
								<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8 col-xl-8 mb-3">
									<div class="table-responsive">
										<table border="1" align="center">
											<thead>
												<tr>
													<td style="background-color: red;"><font color="#FFFFFF">Cedula</font></td>
													<td style="background-color: red;"><font color="#FFFFFF">Nombre</font></td>
													<td style="background-color: red;"><font color="#FFFFFF">Serial</font></td>
													<td style="background-color: red;"><font color="#FFFFFF">Notaria</font></td>
													<td style="background-color: red;"><font color="#FFFFFF">Ciudad</font></td>
												</tr>
											</thead>
											<tbody>
				';
				#-------------------------------------------------------------------------#
				foreach ($var_sql_up as $key_sql_up) {
					$var_html .= '<tr>';
						$var_html .= '<td>' . $key_sql_up[d_azp_gsc_update_t_identification] . '</td>';
						$var_html .= '<td>' . $key_sql_up[d_azp_gsc_update_t_full_name] . '</td>';
						$var_html .= '<td>' . $key_sql_up[d_azp_gsc_update_t_serial] . '</td>';
						$var_html .= '<td>' . $key_sql_up[d_azp_gsc_update_t_notary] . '</td>';
						$var_html .= '<td>' . $key_sql_up[d_azp_gsc_update_t_city] . '</td>';
					$var_html .= '</tr>';
				}
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
				# Separar la cadena usando un delimitador
				$var_array_tp = explode(",", $empty_tp_id);
				# Valores del array vacios
				$var_email_address = array();
				# Recorrer los datos de la consulta
				foreach ($var_array_tp as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_email_send = $this->db->select("*", t_azp_gsc_third_parties,
						d_azp_gsc_third_parties_id_azp_gsc_third_parties . " IN ('" . $value . "')"
					);
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_email_send) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_email_send as $key2 => $value2):
							$var_id = $value2[d_azp_gsc_third_parties_id_azp_gsc_third_parties];
							$var_contact = $value2[d_azp_gsc_third_parties_t_contact];
							$var_email = $value2[d_azp_gsc_third_parties_t_email];
							$var_email_address[$var_email] = $var_contact;

							$var_log_email_main[$var_id] = $var_contact . '(' . $var_email . ')';
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array_em = explode(",", $empty_em_id);
				# Valores del array vacios
				$var_email_copy = array();
				# Recorrer los datos de la consulta
				foreach ($var_array_em as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_email_send = $this->db->select("*", t_azp_gsc_email_copy,
						d_azp_gsc_email_copy_id_azp_gsc_email_copy . " IN ('" . $value . "') AND " .
						d_azp_gsc_email_copy_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
					);
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_email_send) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_email_send as $key2 => $value2):
							$var_id = $value2[d_azp_gsc_email_copy_id_azp_gsc_email_copy];
							$var_names = $value2[d_azp_gsc_email_copy_t_names];
							$var_surnames = $value2[d_azp_gsc_email_copy_t_surnames];
							$var_email = $value2[d_azp_gsc_email_copy_t_email];
							$var_email_copy[$var_email] = $var_names . ' ' . $var_surnames;

							$var_log_email_intern[$var_id] = $var_names . ' ' . $var_surnames . '(' . $var_email . ')';
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				$var_send_email = Emails::send_mail_copy($var_from_name,
					$var_email_address,
					$var_email_copy,
					Emails::template_email_gsc($var_html),
					html_entity_decode($var_affair),
					true
					//array($var_sql_excel,)
				);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_request_v_id_azp_gsc_phase => '7', d_azp_gsc_request_v_id_azp_gsc_state => '2',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array,
							d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_request_v_id_azp_gsc_phase . " <= '7'");
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_consignment_m_deleted => '1',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_v_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_follow_email_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_follow_email_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_follow_email_m_date_created => DATE_HOUR,
							d_azp_gsc_follow_email_m_date_modified => DATE_HOUR,
							d_azp_gsc_follow_email_m_deleted => '1',
							d_azp_gsc_follow_email_m_description => '',
							d_azp_gsc_follow_email_m_level => '2',
							d_azp_gsc_follow_email_m_status => '1',
							d_azp_gsc_follow_email_m_temp => '1',
							d_azp_gsc_follow_email_t_date => DATE,
							d_azp_gsc_follow_email_t_template => ucwords(strtolower('Solicitud Expedicion Certificado')),
							d_azp_gsc_follow_email_t_register => '1',
							d_azp_gsc_follow_email_v_id_azp_gsc_request => $key_sql[d_azp_gsc_update_v_id_azp_gsc_request],
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_follow_email, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_logs_request_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_logs_request_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_logs_request_m_date_created => DATE_HOUR,
							d_azp_gsc_logs_request_m_date_modified => DATE_HOUR,
							d_azp_gsc_logs_request_m_deleted => '1',
							d_azp_gsc_logs_request_m_description => '',
							d_azp_gsc_logs_request_m_level => '2',
							d_azp_gsc_logs_request_m_status => '1',
							d_azp_gsc_logs_request_m_temp => '1',
							d_azp_gsc_logs_request_t_action => 'Evento Ejecutado: Fase cambiada a Solicitud Expedicion Certificado',
							d_azp_gsc_logs_request_t_date => DATE,
							d_azp_gsc_logs_request_v_id_azp_gsc_request => $key_sql[d_azp_gsc_update_v_id_azp_gsc_request],
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_logs_request, $var_array);
						#-------------------------------------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_observation_internal_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_observation_internal_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_observation_internal_m_date_created => DATE_HOUR,
							d_azp_gsc_observation_internal_m_date_modified => DATE_HOUR,
							d_azp_gsc_observation_internal_m_deleted => '1',
							d_azp_gsc_observation_internal_m_description => '',
							d_azp_gsc_observation_internal_m_level => '2',
							d_azp_gsc_observation_internal_m_status => '1',
							d_azp_gsc_observation_internal_m_temp => '1',
							d_azp_gsc_observation_internal_t_identification => $key_sql[d_azp_gsc_update_t_identification],
							d_azp_gsc_observation_internal_t_observation => 'Se envia correo de expedicion.',
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_observation_internal, $var_array);
						#-------------------------------------------------------------------------#
						$var_array = array(d_azp_gsc_request_t_observation => DATE . ' ' . 'Se envia correo de expedicion.',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				$empty_log_email_main = implode(',',$var_log_email_main);
				$empty_log_email_copy = implode(',',$var_log_email_copy);
				$empty_log_email_intern = implode(',',$var_log_email_intern);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_log_email_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_log_email_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_log_email_m_date_created => DATE_HOUR,
					d_azp_gsc_log_email_m_date_modified => DATE_HOUR,
					d_azp_gsc_log_email_m_deleted => '1',
					d_azp_gsc_log_email_m_description => '',
					d_azp_gsc_log_email_m_level => '2',
					d_azp_gsc_log_email_m_status => '1',
					d_azp_gsc_log_email_m_temp => '1',
					d_azp_gsc_log_email_t_affair => $empty_affair,
					d_azp_gsc_log_email_t_email_main => $empty_log_email_main,
					d_azp_gsc_log_email_t_email_copy => $empty_log_email_copy,
					d_azp_gsc_log_email_t_email_intern => $empty_log_email_intern,
					d_azp_gsc_log_email_t_message => $empty_summernote_1 . $empty_summernote_2,
					d_azp_gsc_log_email_t_template => 'Solicitud Expedicion Certificado',
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_log_email, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_gsc_request_email_4(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_em_4_affair'])) { throw new Exception('<b>Error:</b> El campo de asunto esta prohibido modificar.'); }
				if (!isset($data['field_em_4_email'])) { throw new Exception('<b>Error:</b> El campo de correo electronico esta prohibido modificar.'); }
				if (!isset($data['field_em_4_file_name'])) { throw new Exception('<b>Error:</b> El campo de nombre archivo esta prohibido modificar.'); }
				if (!isset($data['field_em_4_summernote'])) { throw new Exception('<b>Error:</b> El campo de mensaje esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_affair = $this->db->scape($data['field_em_4_affair']);
				$empty_email = $this->db->scape($data['field_em_4_email']);
				$empty_file_name = $this->db->scape($data['field_em_4_file_name']);
				$empty_summernote = $this->db->scape($data['field_em_4_summernote']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_affair)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de asunto es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_email) || strtolower($empty_email) == strtolower('seleccionar') || $empty_email == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_file_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre archivo es oblgitario.');
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
					throw new Exception('<b>Error:</b> El campo de mensaje es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_gsc_client = $this->db->select('*', t_azp_gsc_client, d_azp_gsc_client_id_azp_gsc_client . " = '" . $empty_email . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_gsc_client) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_gsc_client) == '') { $sql_gsc_client[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_gsc_client[0][0]) != strtolower($empty_email)) {
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
		final public function sql_azp_gsc_request_email_4(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_request_email_4($data);
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
				$empty_tp_id = $this->db->scape($data['field_tp_id']);
				$empty_em_id = $this->db->scape($data['field_em_id']);
				$empty_affair = $this->db->scape($data['field_em_4_affair']);
				$empty_email = $this->db->scape($data['field_em_4_email']);
				$empty_main = $this->db->scape($data['field_em_4_main']);
				$empty_summernote = $this->db->scape($data['field_em_4_summernote']);
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
				# Array para guardar valores
				$var_xlsx = array();
				# Array para guardar valores
				$var_cert = array();
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
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_email_send = $this->db->select("*", t_azp_gsc_client, d_azp_gsc_client_id_azp_gsc_client . " = '" . $empty_main . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_email_send) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_email_send as $key => $value):
						$var_id = $value[d_azp_gsc_client_id_azp_gsc_client];
						$var_email = $value[d_azp_gsc_client_t_email];
						$var_person = $value[d_azp_gsc_client_t_person];
						$var_email_address[$var_email] = $var_person;

						$var_log_email_main[$var_id] = $var_person . '(' . $var_email . ')';

						# Asignacion de valores a nuevas variables
						$empty_aemail = $value[d_azp_gsc_client_t_email];
						$empty_anames = $value[d_azp_gsc_client_t_person];
						$var_adds[$empty_aemail] = $empty_anames;
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array_tp = explode(",", $empty_tp_id);
				# Recorrer los datos de la consulta
				foreach ($var_array_tp as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_email_send = $this->db->select("*", t_azp_gsc_client,
						d_azp_gsc_client_id_azp_gsc_client . " IN ('" . $value . "')"
					);
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_email_send) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_email_send as $key2 => $value2):
							$var_id = $value2[d_azp_gsc_client_id_azp_gsc_client];
							$var_email = $value2[d_azp_gsc_client_t_email];
							$var_person = $value2[d_azp_gsc_client_t_person];
							$var_email_copy[$var_email] = $var_person;

							$var_log_email_copy[$var_id] = $var_person . '(' . $var_email . ')';
							# Asignacion de valores a nuevas variables
							$empty_cemail = $value2[d_azp_gsc_client_t_email];
							$empty_cnames = $value2[d_azp_gsc_client_t_person];
							$empty_cdata = $empty_cnames;
							$var_copy[$empty_cemail] = $empty_cdata;
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array_em = explode(",", $empty_em_id);
				# Recorrer los datos de la consulta
				foreach ($var_array_em as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_email_send = $this->db->select("*", t_azp_gsc_email_copy,
						d_azp_gsc_email_copy_id_azp_gsc_email_copy . " IN ('" . $value . "') AND " .
						d_azp_gsc_email_copy_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
					);
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_email_send) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_email_send as $key2 => $value2):
							$var_id = $value2[d_azp_gsc_email_copy_id_azp_gsc_email_copy];
							$var_names = $value2[d_azp_gsc_email_copy_t_names];
							$var_surnames = $value2[d_azp_gsc_email_copy_t_surnames];
							$var_email = $value2[d_azp_gsc_email_copy_t_email];
							$var_email_copy[$var_email] = $var_names . ' ' . $var_surnames;

							$var_log_email_intern[$var_id] = $var_names . ' ' . $var_surnames . '(' . $var_email . ')';
							# Asignacion de valores a nuevas variables
							$empty_cemail = $value2[d_azp_gsc_email_copy_t_email];
							$empty_cnames = $value2[d_azp_gsc_email_copy_t_names];
							$empty_csurns = $value2[d_azp_gsc_email_copy_t_surnames];
							$empty_cdata = $empty_cnames . ' ' . $empty_csurns;
							$var_copy[$empty_cemail] = $empty_cdata;
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql_excel = $this->db->select("*", t_azp_gsc_generated_files,
					d_azp_gsc_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_gsc_generated_files_m_deleted . " = '1' AND " .
					d_azp_gsc_generated_files_m_level . " = '2' AND " .
					d_azp_gsc_generated_files_m_temp . " = '2' AND " .
					d_azp_gsc_generated_files_t_expiration . " = 'Utilizable' AND " .
					d_azp_gsc_generated_files_t_extension . " = 'xlsx' AND " .
					d_azp_gsc_generated_files_t_module . " = 'Solicitud' AND " .
					d_azp_gsc_generated_files_t_template . " = 'Certificado' AND " .
					d_azp_gsc_generated_files_t_type . " = 'Excel'"
				);
				#-------------------------------------------------------------------------#
				if (false != $var_sql_excel) {
					foreach ($var_sql_excel as $key_sql => $value_sql) {
						$var_docum = $value_sql[d_azp_gsc_generated_files_t_name_file];
						$var_route = $value_sql[d_azp_gsc_generated_files_t_route];
						$var_compl = '../' . $var_route . $var_docum;
						$var_xlsx[0] = $var_compl;
						$var_xlroute = $var_route;
						#$var_files[$var_compl] = $var_docum;
					}
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql_rd_gsc = $this->db->select('*', t_azp_gsc_capture,
					d_azp_gsc_capture_v_id_azp_gsc_request . " IN (
						SELECT " . d_azp_gsc_update_v_id_azp_gsc_request . " FROM " . t_azp_gsc_update . "
						WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					) AND " .
					d_azp_gsc_capture_t_document . " != '' GROUP BY " .
					d_azp_gsc_capture_t_document . " ASC");
				#-------------------------------------------------------------------------#
				if (false != $var_sql_rd_gsc) {
					foreach ($var_sql_rd_gsc as $key_sql => $value_sql) {
						$var_id = $value_sql[d_azp_gsc_capture_id_azp_gsc_capture];
						$var_docum = $value_sql[d_azp_gsc_capture_t_document];
						$var_route = $value_sql[d_azp_gsc_capture_t_route];
						$var_compl = '../' . $var_route . $var_docum;
						$var_cert[$var_id] = $var_compl;
						#$var_files[$var_compl] = $var_docum;
					}
				}
				#-------------------------------------------------------------------------#
				# Ruta principal de la carpeta
				$var_ec_route = '../systemfiles/filesproject/';
				# Ruta de la carpeta principal
				$var_ec_folder = 'azp_gsc_request/certificate/';
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
						#$var_get_route = $var_ec_route . $var_ec_folder . 'encrypted/' . $var_ec_year . $var_ec_month . $var_ec_date;
						# Añadir los archivos a comprimir
						$var_get_content = file_get_contents($key_file);
						# Añadir los archivos a comprimir
						$var_compressed->addFromString(str_replace('../' . $var_xlroute, '', $key_file), $var_get_content);
					}
					# Agregamos los archivos a comprimir
					foreach ($var_cert as $key_file) {
						$var_get_route = $var_ec_route . $var_ec_folder . 'encrypted/' . $var_ec_year . $var_ec_month . $var_ec_date;
						# Añadir los archivos a comprimir
						$var_get_content = file_get_contents($key_file);
						# Añadir los archivos a comprimir
						$var_compressed->addFromString(str_replace($var_ec_route . 'azp_gsc_capture/', '', $key_file), $var_get_content);
					}
				}
				# Cerrar la compresion del archivo
				$var_compressed->close();
				# Codificar la iniformacion del archivo
				$var_base_64 = base64_encode(file_get_contents($var_zip_final));
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
				$var_files[$var_zip_final] = $var_zip_name;
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
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_gsc_generated_files_m_temp => '1',);
				# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
				$this->db->update(t_azp_gsc_generated_files, $var_array,
					d_azp_gsc_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_gsc_generated_files_m_temp . " = '2'"
				);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_gsc_email_copy_m_temp => '1',);
				# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
				$this->db->update(t_azp_gsc_email_copy, $var_array,
					d_azp_gsc_email_copy_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_gsc_email_copy_m_temp . " = '2'"
				);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_user_m_temp => '1',);
				# Seleccionar los registros de la tabla
				$this->db->update(t_azp_user, $var_array, d_azp_user_m_temp . " = '9'");
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_gsc_third_parties_m_temp => '1',);
				# Seleccionar los registros de la tabla
				$this->db->update(t_azp_gsc_third_parties, $var_array, d_azp_gsc_third_parties_m_temp . " = '9'");
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_request_t_shipping_date => DATE,
							d_azp_gsc_request_v_id_azp_gsc_phase => '10',
							d_azp_gsc_request_v_id_azp_gsc_state => '4',
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array,
							d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_request_v_id_azp_gsc_phase . " <= '10'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				//$var_sql = $this->db->select("MAX(" . d_azp_gsc_request_t_shipping_number . ") AS 'lbl_max'", t_azp_gsc_request, d_azp_gsc_request_m_deleted . " = '1'");
				$var_sql = $this->db->query("
					SELECT MAX(tc_azp_gsc_request.t_shipping_number) AS lbl_max
					FROM azp_gsc_request tc_azp_gsc_request
					INNER JOIN azp_gsc_update tc_azp_gsc_update
					ON tc_azp_gsc_request.`v_id_azp_gsc_client` = tc_azp_gsc_update.`v_id_azp_gsc_client`
					WHERE tc_azp_gsc_request.`t_number_request` = tc_azp_gsc_update.`t_number_request`
						AND tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_shipping = $key_sql['lbl_max'] + 1;
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_request_t_shipping_number => $var_shipping,);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array,
							d_azp_gsc_request_id_azp_gsc_request . " IN (
								SELECT " . d_azp_gsc_update_v_id_azp_gsc_request . " FROM " . t_azp_gsc_update . "
								WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
							)");
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				$this->db->query("DELETE FROM " . t_azp_gsc_generated_files . " WHERE " . d_azp_gsc_generated_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_generated_files_m_deleted . " = '2' AND " . d_azp_gsc_generated_files_m_level . " = '2' AND " . d_azp_gsc_generated_files_m_temp . " = '4' AND " . d_azp_gsc_generated_files_t_expiration . " = 'Utilizable' AND " . d_azp_gsc_generated_files_t_module . " = 'Solicitud' AND " . d_azp_gsc_generated_files_t_template . " = 'Remision'");
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_follow_email_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_follow_email_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_follow_email_m_date_created => DATE_HOUR,
							d_azp_gsc_follow_email_m_date_modified => DATE_HOUR,
							d_azp_gsc_follow_email_m_deleted => '1',
							d_azp_gsc_follow_email_m_description => '',
							d_azp_gsc_follow_email_m_level => '2',
							d_azp_gsc_follow_email_m_status => '1',
							d_azp_gsc_follow_email_m_temp => '1',
							d_azp_gsc_follow_email_t_date => DATE,
							d_azp_gsc_follow_email_t_template => ucwords(strtolower('Respuesta Correo')),
							d_azp_gsc_follow_email_t_register => '1',
							d_azp_gsc_follow_email_v_id_azp_gsc_request => $key_sql[d_azp_gsc_update_v_id_azp_gsc_request],
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_follow_email, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_logs_request_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_logs_request_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_logs_request_m_date_created => DATE_HOUR,
							d_azp_gsc_logs_request_m_date_modified => DATE_HOUR,
							d_azp_gsc_logs_request_m_deleted => '1',
							d_azp_gsc_logs_request_m_description => '',
							d_azp_gsc_logs_request_m_level => '2',
							d_azp_gsc_logs_request_m_status => '1',
							d_azp_gsc_logs_request_m_temp => '1',
							d_azp_gsc_logs_request_t_action => 'Evento Ejecutado: Fase cambiada a Entregado',
							d_azp_gsc_logs_request_t_date => DATE,
							d_azp_gsc_logs_request_v_id_azp_gsc_request => $key_sql[d_azp_gsc_update_v_id_azp_gsc_request],
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_logs_request, $var_array);
						#-------------------------------------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_observation_internal_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_observation_internal_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_observation_internal_m_date_created => DATE_HOUR,
							d_azp_gsc_observation_internal_m_date_modified => DATE_HOUR,
							d_azp_gsc_observation_internal_m_deleted => '1',
							d_azp_gsc_observation_internal_m_description => '',
							d_azp_gsc_observation_internal_m_level => '2',
							d_azp_gsc_observation_internal_m_status => '1',
							d_azp_gsc_observation_internal_m_temp => '1',
							d_azp_gsc_observation_internal_t_identification => $key_sql[d_azp_gsc_update_t_identification],
							d_azp_gsc_observation_internal_t_observation => 'Se envia imagen a la entidad.',
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_observation_internal, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				$empty_log_email_main = implode(',',$var_log_email_main);
				$empty_log_email_copy = implode(',',$var_log_email_copy);
				$empty_log_email_intern = implode(',',$var_log_email_intern);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_log_email_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_log_email_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_log_email_m_date_created => DATE_HOUR,
					d_azp_gsc_log_email_m_date_modified => DATE_HOUR,
					d_azp_gsc_log_email_m_deleted => '1',
					d_azp_gsc_log_email_m_description => '',
					d_azp_gsc_log_email_m_level => '2',
					d_azp_gsc_log_email_m_status => '1',
					d_azp_gsc_log_email_m_temp => '1',
					d_azp_gsc_log_email_t_affair => $empty_affair,
					d_azp_gsc_log_email_t_email_main => $empty_log_email_main,
					d_azp_gsc_log_email_t_email_copy => $empty_log_email_copy,
					d_azp_gsc_log_email_t_email_intern => $empty_log_email_intern,
					d_azp_gsc_log_email_t_message => $empty_summernote,
					d_azp_gsc_log_email_t_template => 'Respuesta Correo',
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_log_email, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array($var_return => 1, $var_ms_name => $var_ms_text,);
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_azp_gsc_request_compress_1() {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# Array para guardar valores
				$var_files = array();
				# Array para guardar valores
				$var_xlsx = array();
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_generated_files,
					d_azp_gsc_generated_files_m_temp . " = '2' AND " .
					d_azp_gsc_generated_files_t_expiration . " = 'Descargable' AND " .
					d_azp_gsc_generated_files_t_extension . " = 'zip' AND " .
					d_azp_gsc_generated_files_t_module . " = 'Solicitud' AND " .
					d_azp_gsc_generated_files_t_template . " = 'Proveedor' AND " .
					d_azp_gsc_generated_files_t_type . " = 'Comprimido'"
				);
				#-------------------------------------------------------------------------#
				if (false != $var_sql) {
					foreach ($var_sql as $key_sql => $value_sql) {
						$var_id = $value_sql[d_azp_gsc_generated_files_id_azp_gsc_generated_files];
						$var_docum = $value_sql[d_azp_gsc_generated_files_t_name_file];
						$var_route = $value_sql[d_azp_gsc_generated_files_t_route];
						$var_compl = '../' . $var_route . $var_docum;
						$var_files[$var_id] = $var_compl;
					}
				}
				#-------------------------------------------------------------------------#
				# Ruta principal de la carpeta
				$var_ec_route = '../systemfiles/filesproject/';
				# Ruta de la carpeta principal
				$var_ec_folder = 'azp_gsc_compressed/';
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
				# Ruta de la carpeta para almacenar sus respectivos archivos
				$var_zip_comp = '/systemfiles/filesproject/' . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date;
				#-------------------------------------------------------------------------#
				$var_compressed = new ZipArchive();
				# Validacion de la ruta y archivo del archivo a comprimir
				if ($var_compressed->open($var_zip_final,ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE) === true) {
					# Agregamos los archivos a comprimir
					foreach ($var_files as $key_file) {
						$var_get_route = $var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date;
						# Añadir los archivos a comprimir
						$var_get_content = file_get_contents($key_file);
						# Añadir los archivos a comprimir
						$var_compressed->addFromString(str_replace('../' . $var_route, '', $key_file), $var_get_content);
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
				#-------------------------------------------------------------------------#
				$var_files[$var_zip_final] = $var_zip_name;
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_generated_files);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_generated_files_m_temp => '1',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_generated_files, $var_array, d_azp_gsc_request_m_temp . " = '2'");
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos comprimidos correctamente.', 'encode' => $var_base_64, 'compressed' => $var_zip_name,);
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_azp_gsc_request_compress_4() {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# Array para guardar valores
				$var_files = array();
				# Array para guardar valores
				$var_xlsx = array();
				# Array para guardar valores
				$var_cert = array();
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_generated_files,
					d_azp_gsc_generated_files_m_temp . " = '2' AND " .
					d_azp_gsc_generated_files_t_expiration . " = 'Descargable' AND " .
					d_azp_gsc_generated_files_t_extension . " = 'zip' AND " .
					d_azp_gsc_generated_files_t_module . " = 'Solicitud' AND " .
					d_azp_gsc_generated_files_t_template . " = 'Certificado' AND " .
					d_azp_gsc_generated_files_t_type . " = 'Comprimido'"
				);
				#-------------------------------------------------------------------------#
				if (false != $var_sql) {
					foreach ($var_sql as $key_sql => $value_sql) {
						$var_id = $value_sql[d_azp_gsc_generated_files_id_azp_gsc_generated_files];
						$var_docum = $value_sql[d_azp_gsc_generated_files_t_name_file];
						$var_route = $value_sql[d_azp_gsc_generated_files_t_route];
						$var_compl = '../' . $var_route . $var_docum;
						$var_froute = $var_route;
						$var_files[$var_id] = $var_compl;
					}
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql_rd_gsc = $this->db->select('*', t_azp_gsc_capture,
					d_azp_gsc_capture_v_id_azp_gsc_request . " IN (
						SELECT " . d_azp_gsc_update_v_id_azp_gsc_request . " FROM " . t_azp_gsc_update . "
						WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					) AND " .
					d_azp_gsc_capture_t_document . " != '' GROUP BY " .
					d_azp_gsc_capture_t_document . " ASC");
				#-------------------------------------------------------------------------#
				if (false != $var_sql_rd_gsc) {
					foreach ($var_sql_rd_gsc as $key_sql => $value_sql) {
						$var_id = $value_sql[d_azp_gsc_capture_id_azp_gsc_capture];
						$var_docum = $value_sql[d_azp_gsc_capture_t_document];
						$var_route = $value_sql[d_azp_gsc_capture_t_route];
						$var_compl = '../' . $var_route . $var_docum;
						$var_croute = $var_route;
						$var_cert[$var_id] = $var_compl;
						#$var_files[$var_compl] = $var_docum;
					}
				}
				#-------------------------------------------------------------------------#
				# Ruta principal de la carpeta
				$var_ec_route = '../systemfiles/filesproject/';
				# Ruta de la carpeta principal
				$var_ec_folder = 'azp_gsc_compressed/';
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
				# Ruta de la carpeta para almacenar sus respectivos archivos
				$var_zip_comp = '/systemfiles/filesproject/' . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date;
				#-------------------------------------------------------------------------#
				$var_compressed = new ZipArchive();
				# Validacion de la ruta y archivo del archivo a comprimir
				if ($var_compressed->open($var_zip_final,ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE) === true) {
					# Agregamos los archivos a comprimir
					foreach ($var_files as $key_file) {
						# Añadir los archivos a comprimir
						$var_get_content = file_get_contents($key_file);
						# Añadir los archivos a comprimir
						$var_compressed->addFromString(str_replace('../' . $var_froute, '', $key_file), $var_get_content);
					}
					# Agregamos los archivos a comprimir
					foreach ($var_cert as $key_file) {
						# Añadir los archivos a comprimir
						$var_get_content = file_get_contents($key_file);
						# Añadir los archivos a comprimir
						$var_compressed->addFromString(str_replace('../' . $var_croute, '', $key_file), $var_get_content);
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
				#-------------------------------------------------------------------------#
				$var_files[$var_zip_final] = $var_zip_name;
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_generated_files);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_generated_files_m_temp => '1',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_generated_files, $var_array, d_azp_gsc_request_m_temp . " = '2'");
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos comprimidos correctamente.', 'encode' => $var_base_64, 'compressed' => $var_zip_name,);
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function get_select_azp_gsc_client_nr() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date',
					tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " AS 'lbl_azp_gsc_client_id_azp_gsc_client',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '1'
					AND tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . " = '" . $this->id . "'
				GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function get_select_azp_gsc_request_nr() {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $this->id . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_number_request = $value[d_azp_gsc_request_t_number_request];
					$var_idclient = $value[d_azp_gsc_request_v_id_azp_gsc_client];
				endforeach;
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = '1'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " = '" . $var_number_request . "'
					AND tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . " = '" . $var_idclient . "'
				GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_gsc_compressed_identification() {
			if (isset($_GET['field_base'])) { $var_number = $_GET['field_base']; } else { $var_number = ''; }
			# Consulta para identificar los nuevos registros en la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification'
				FROM " . t_azp_gsc_capture . " tc_azp_gsc_capture

				INNER JOIN " . t_azp_gsc_request . " tc_azp_gsc_request
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "

				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "

				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $this->id . "'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " = '" . $var_number . "'
					AND tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " != ''
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_gsc_compressed_images() {
			if (isset($_GET['field_base'])) { $var_number = $_GET['field_base']; } else { $var_number = ''; }
			# Valores del array vacios
			$var_file = array();
			# Consulta para identificar los nuevos registros en la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_gsc_capture . " tc_azp_gsc_capture

				INNER JOIN " . t_azp_gsc_request . " tc_azp_gsc_request
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "

				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "

				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $this->id . "'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " = '" . $var_number . "'
					AND tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " != ''
			");
			# Validar si la consulta es verdadera
			if (false != $var_sql) {
				# Recorrer las filas de la consulta generada
				foreach ($var_sql as $key_sql => $value):
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_id = $value[d_azp_gsc_capture_id_azp_gsc_capture];
					$var_route = $value[d_azp_gsc_capture_t_route];
					$var_document = $value[d_azp_gsc_capture_t_document];
					$var_file[$var_id] = $var_route . $var_document;
				endforeach;
			} else { $var_file[] = ''; }
			//$var_file[0] = $_GET['field_xlsx'];
			#-------------------------------------------------------------------------#
			# Ruta principal de la carpeta
			$var_ec_route = 'systemfiles/filesproject/';
			# Ruta de la carpeta principal
			$var_ec_folder = 'azp_gsc_compressed/';
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
					$var_get_route = 'systemfiles/filesproject/azp_gsc_capture/';
					# Añadir los archivos a comprimir
					$var_get_content = file_get_contents($var_ec_file);
					# Añadir los archivos a comprimir
					$var_compressed->addFromString(str_replace($var_get_route, '', $var_ec_file), $var_get_content);


					# Ruta de los archivos encontrados
					$var_get_route = 'systemfiles/filesproject/azp_gsc_request/images/' . YEAR . '/' . YEAR_MONTH . '/' . DATE . '/';
					# Añadir los archivos a comprimir
					$var_get_content = file_get_contents($_GET['field_xlsx']);
					# Añadir los archivos a comprimir
					$var_compressed->addFromString(str_replace($var_get_route, '', $_GET['field_xlsx']), $var_get_content);


					/*$var_ec_file = str_replace('../', '', $key_file);
					# Ruta de los archivos encontrados
					$var_get_route = 'systemfiles/filesproject/azp_gsc_request/images/';
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
		final public function sql_controller_capture() {
			if (isset($_GET['field_base'])) { $var_number = $_GET['field_base']; } else { $var_number = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_capture . " tc_azp_gsc_capture
				INNER JOIN " . t_azp_gsc_request . " tc_azp_gsc_request
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "

				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "

				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $this->id . "'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " = '" . $var_number . "'
					AND tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " != ''
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_capture_client() {
			if (isset($_GET['field_rq'])) { $var_rq = $_GET['field_rq']; } else { $var_rq = ''; } $var_client = ''; $var_request = '';
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_v_id_azp_role . " = '9'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_gsc_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach; }
			#-------------------------------------------------------------------------#
			# Consulta para identificar los nuevos registros en la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_fct_client',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_request'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request

				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "

				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " = '" . $var_rq . "'
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_id_client = $value['lbl_fct_client']; $var_request = $value['lbl_request']; endforeach; }
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_capture . " tc_azp_gsc_capture
				INNER JOIN " . t_azp_gsc_request . " tc_azp_gsc_request
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "

				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "

				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $var_id_client . "'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " = '" . $var_request . "'
					AND tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " != ''
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_gsc_compressed_identification_client() {
			if (isset($_GET['field_rq'])) { $var_rq = $_GET['field_rq']; } else { $var_rq = ''; } $var_client = ''; $var_request = '';
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_v_id_azp_role . " = '9'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_gsc_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach; }
			#-------------------------------------------------------------------------#
			# Consulta para identificar los nuevos registros en la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_fct_client',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_request'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request

				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "

				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " = '" . $var_rq . "'
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_id_client = $value['lbl_fct_client']; $var_request = $value['lbl_request']; endforeach; }
			#-------------------------------------------------------------------------#
			# Consulta para identificar los nuevos registros en la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_serial . " AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_death_date . " AS 'lbl_azp_gsc_request_t_death_date'
				FROM " . t_azp_gsc_capture . " tc_azp_gsc_capture

				INNER JOIN " . t_azp_gsc_request . " tc_azp_gsc_request
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "

				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "

				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $var_id_client . "'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " = '" . $var_request . "'
					AND tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " != ''
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_gsc_compressed_images_client() {
			if (isset($_GET['field_rq'])) { $var_rq = $_GET['field_rq']; } else { $var_rq = ''; } $var_client = ''; $var_request = '';
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_v_id_azp_role . " = '9'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_gsc_client = $key_sql[d_azp_user_v_id_azp_fct_client]; $var_role = $key_sql[d_azp_user_v_id_azp_role]; endforeach; }
			#-------------------------------------------------------------------------#
			# Consulta para identificar los nuevos registros en la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_fct_client',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_request'
				FROM " . t_azp_gsc_request . " tc_azp_gsc_request

				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "

				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " = '" . $var_rq . "'
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) { foreach ($var_sql as $key => $value) : $var_id_client = $value['lbl_fct_client']; $var_request = $value['lbl_request']; endforeach; }
			#-------------------------------------------------------------------------#
			if (isset($_GET['field_base'])) { $var_number = $_GET['field_base']; } else { $var_number = ''; }
			# Valores del array vacios
			$var_file = array();
			# Consulta para identificar los nuevos registros en la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_gsc_capture . " tc_azp_gsc_capture

				INNER JOIN " . t_azp_gsc_request . " tc_azp_gsc_request
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "

				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "

				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $var_id_client . "'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " = '" . $var_request . "'
					AND tc_azp_gsc_capture." . d_azp_gsc_capture_t_document . " != ''
			");
			# Validar si la consulta es verdadera
			if (false != $var_sql) {
				# Recorrer las filas de la consulta generada
				foreach ($var_sql as $key_sql => $value):
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_id = $value[d_azp_gsc_capture_id_azp_gsc_capture];
					$var_route = $value[d_azp_gsc_capture_t_route];
					$var_document = $value[d_azp_gsc_capture_t_document];
					$var_file[$var_id] = $var_route . $var_document;
				endforeach;
			} else { $var_file[] = ''; }
			//$var_file[0] = $_GET['field_xlsx'];
			#-------------------------------------------------------------------------#
			# Ruta principal de la carpeta
			$var_ec_route = 'systemfiles/filesproject/';
			# Ruta de la carpeta principal
			$var_ec_folder = 'azp_gsc_compressed/';
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
					$var_get_route = 'systemfiles/filesproject/azp_gsc_capture/';
					# Añadir los archivos a comprimir
					$var_get_content = file_get_contents($var_ec_file);
					# Añadir los archivos a comprimir
					$var_compressed->addFromString(str_replace($var_get_route, '', $var_ec_file), $var_get_content);


					# Ruta de los archivos encontrados
					$var_get_route = 'systemfiles/filesproject/azp_gsc_request/images/' . YEAR . '/' . YEAR_MONTH . '/' . DATE . '/';
					# Añadir los archivos a comprimir
					$var_get_content = file_get_contents($_GET['field_xlsx']);
					# Añadir los archivos a comprimir
					$var_compressed->addFromString(str_replace($var_get_route, '', $_GET['field_xlsx']), $var_get_content);


					/*$var_ec_file = str_replace('../', '', $key_file);
					# Ruta de los archivos encontrados
					$var_get_route = 'systemfiles/filesproject/azp_gsc_request/images/';
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
		final public function sql_controller_gsc_information_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_information." . d_azp_gsc_information_id_azp_gsc_information . " AS 'lbl_azp_gsc_information_id_azp_gsc_information',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_information." . d_azp_gsc_information_m_date_created . " AS 'lbl_azp_gsc_information_m_date_created',
					tc_azp_gsc_information." . d_azp_gsc_information_m_date_modified . " AS 'lbl_azp_gsc_information_m_date_modified',
					tc_azp_gsc_information." . d_azp_gsc_information_m_description . " AS 'lbl_azp_gsc_information_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_information." . d_azp_gsc_information_t_request . " AS 'lbl_azp_gsc_information_t_request',
					tc_azp_gsc_information." . d_azp_gsc_information_w_document . " AS 'lbl_azp_gsc_information_w_document',
					tc_azp_gsc_information." . d_azp_gsc_information_w_error . " AS 'lbl_azp_gsc_information_w_error',
					tc_azp_gsc_information." . d_azp_gsc_information_w_folder . " AS 'lbl_azp_gsc_information_w_folder',
					tc_azp_gsc_information." . d_azp_gsc_information_w_name . " AS 'lbl_azp_gsc_information_w_name',
					tc_azp_gsc_information." . d_azp_gsc_information_w_route . " AS 'lbl_azp_gsc_information_w_route',
					tc_azp_gsc_information." . d_azp_gsc_information_w_size . " AS 'lbl_azp_gsc_information_w_size',
					tc_azp_gsc_information." . d_azp_gsc_information_w_tmp_name . " AS 'lbl_azp_gsc_information_w_tmp_name',
					tc_azp_gsc_information." . d_azp_gsc_information_w_type . " AS 'lbl_azp_gsc_information_w_type',
					tc_azp_gsc_information." . d_azp_gsc_information_v_id_azp_fct_client . " AS 'lbl_azp_gsc_information_v_id_azp_fct_client'
				FROM " . t_azp_gsc_information . " tc_azp_gsc_information
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_information." . d_azp_gsc_information_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_information." . d_azp_gsc_information_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_information." . d_azp_gsc_information_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_information." . d_azp_gsc_information_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_information." . d_azp_gsc_information_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_information." . d_azp_gsc_information_m_deleted . " = '1'
					AND tc_azp_gsc_information." . d_azp_gsc_information_id_azp_gsc_information . " = '" . $this->id . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_gsc_information_read() {
			if (isset($_GET['fd_base'])) { $var_base = $_GET['fd_base']; } else { $var_base = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_information." . d_azp_gsc_information_id_azp_gsc_information . " AS 'lbl_azp_gsc_information_id_azp_gsc_information',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_information." . d_azp_gsc_information_m_date_created . " AS 'lbl_azp_gsc_information_m_date_created',
					tc_azp_gsc_information." . d_azp_gsc_information_m_date_modified . " AS 'lbl_azp_gsc_information_m_date_modified',
					tc_azp_gsc_information." . d_azp_gsc_information_m_description . " AS 'lbl_azp_gsc_information_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_information." . d_azp_gsc_information_t_request . " AS 'lbl_azp_gsc_information_t_request',
					tc_azp_gsc_information." . d_azp_gsc_information_w_document . " AS 'lbl_azp_gsc_information_w_document',
					tc_azp_gsc_information." . d_azp_gsc_information_w_error . " AS 'lbl_azp_gsc_information_w_error',
					tc_azp_gsc_information." . d_azp_gsc_information_w_folder . " AS 'lbl_azp_gsc_information_w_folder',
					tc_azp_gsc_information." . d_azp_gsc_information_w_name . " AS 'lbl_azp_gsc_information_w_name',
					tc_azp_gsc_information." . d_azp_gsc_information_w_route . " AS 'lbl_azp_gsc_information_w_route',
					tc_azp_gsc_information." . d_azp_gsc_information_w_size . " AS 'lbl_azp_gsc_information_w_size',
					tc_azp_gsc_information." . d_azp_gsc_information_w_tmp_name . " AS 'lbl_azp_gsc_information_w_tmp_name',
					tc_azp_gsc_information." . d_azp_gsc_information_w_type . " AS 'lbl_azp_gsc_information_w_type',
					tc_azp_gsc_information." . d_azp_gsc_information_v_id_azp_fct_client . " AS 'lbl_azp_gsc_information_v_id_azp_fct_client'
				FROM " . t_azp_gsc_information . " tc_azp_gsc_information
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_information." . d_azp_gsc_information_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_information." . d_azp_gsc_information_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_information." . d_azp_gsc_information_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_information." . d_azp_gsc_information_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_gsc_information." . d_azp_gsc_information_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_information." . d_azp_gsc_information_m_deleted . " = '1'
					AND tc_azp_gsc_information." . d_azp_gsc_information_v_id_azp_fct_client . " = '" . $this->id . "'
					AND tc_azp_gsc_information." . d_azp_gsc_information_t_request . " = '" . $var_base . "'
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_information_client_upload(array $data) {
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
		final public function sql_azp_gsc_information_client_upload(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_information_client_upload($data);
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
				$empty_folder = 'azp_gsc_information/' . $empty_client . '/';
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
				$var_sql = $this->db->select("*", t_azp_gsc_email_request,
					d_azp_gsc_email_request_m_deleted . " = '1' AND " .
					d_azp_gsc_email_request_m_status . " = '1' AND " .
					d_azp_gsc_email_request_v_id_azp_fct_client . " = '" . $empty_client . "'"
				);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value) {
						# Asignacion de valores a nuevas variables
						$empty_aemail = $value[d_azp_gsc_email_request_t_email];
						$empty_anames = $value[d_azp_gsc_email_request_t_names];
						$empty_asurns = $value[d_azp_gsc_email_request_t_names];
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
						d_azp_gsc_information_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_gsc_information_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_gsc_information_m_date_created => DATE_HOUR,
						d_azp_gsc_information_m_date_modified => DATE_HOUR,
						d_azp_gsc_information_m_deleted => '1',
						d_azp_gsc_information_m_description => '',
						d_azp_gsc_information_m_level => '2',
						d_azp_gsc_information_m_status => '1',
						d_azp_gsc_information_m_temp => '1',
						d_azp_gsc_information_t_request => $empty_request,
						d_azp_gsc_information_w_document => $empty_document,
						d_azp_gsc_information_w_error => $empty_error,
						d_azp_gsc_information_w_folder => $empty_folder,
						d_azp_gsc_information_w_name => $empty_name,
						d_azp_gsc_information_w_route => $empty_route,
						d_azp_gsc_information_w_size => $empty_size,
						d_azp_gsc_information_w_tmp_name => $empty_tmp_name,
						d_azp_gsc_information_w_type => $empty_type,
						d_azp_gsc_information_v_id_azp_fct_client => $empty_client,
					);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->insert(t_azp_gsc_information, $var_array);
					#-------------------------------------------------------------------------#
					$var_array_clients = array();
					# Verificar si el registro existe en la tabla
					$var_sql = $this->db->select("*", t_azp_gsc_client, d_azp_gsc_client_v_id_azp_fct_client . " = '" . $empty_client . "'");
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					if (false != $var_sql) { foreach ($var_sql as $key => $value) { $var_array_clients[] = $value[d_azp_gsc_client_id_azp_gsc_client]; } }
					$var_implode = implode(',', $var_array_clients);
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla
					$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_gsc_information,
						d_azp_gsc_information_t_request . " = '" . $empty_request . "' AND " .
						d_azp_gsc_information_v_id_azp_fct_client . " = '" . $empty_client . "' AND " .
						d_azp_gsc_information_m_deleted . " = '1'"
					);
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					if (false != $var_sql) { foreach ($var_sql as $key => $value) { $var_incount = $value['lbl_count']; } }
					# Control de validacion de datos
					if ($var_incount > 0) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_request_t_inform_client => 'Si',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_request, $var_array,
							d_azp_gsc_request_t_number_request . " = '" . $empty_request . "' AND " .
							d_azp_gsc_request_v_id_azp_gsc_client . " IN (" . $var_implode . ")"
						);
					} else {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_request_t_inform_client => 'No',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_request, $var_array,
							d_azp_gsc_request_t_number_request . " = '" . $empty_request . "' AND " .
							d_azp_gsc_request_v_id_azp_gsc_client . " IN (" . $var_implode . ")"
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
					$empty_summernote = 'Sr. (a) cliente le informamos que se ha cargado una respuesta de la solicitud ' . $empty_request . ' por parte del supervisor del modulo de defuncion';
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
					$var_sql = $this->db->select("*", t_azp_gsc_information, d_azp_gsc_information_m_deleted . " = '1' AND " .
						d_azp_gsc_information_v_id_azp_fct_client . " = '" . $empty_client .
						"' ORDER BY " . d_azp_gsc_information_id_azp_gsc_information . " DESC LIMIT 1"
					);
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					if (false != $var_sql) {
						foreach ($var_sql as $key => $value) {
							$var_docum = $value[d_azp_gsc_information_w_document];
							$var_folder = $value[d_azp_gsc_information_w_folder];
							$var_route = $value[d_azp_gsc_information_w_route];
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
		final private function error_sql_azp_gsc_information_client_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_information, d_azp_gsc_information_id_azp_gsc_information . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('<b>Error:</b> El registro que está removiendo no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_gsc_information, d_azp_gsc_information_id_azp_gsc_information . " = '" . $empty_id . "' AND " . d_azp_gsc_information_m_deleted . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_id) { foreach ($sql_id as $key => $value): throw new Exception('<b>Error:</b> El registro que está procesando ya se encuentra removido.'); endforeach; }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_gsc_information, d_azp_gsc_information_id_azp_gsc_information . " = '" . $empty_id . "' AND " .
					d_azp_gsc_information_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_information_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_information, d_azp_gsc_information_id_azp_gsc_information . " = '" . $empty_id . "' AND " . d_azp_gsc_information_m_level . " = '2'");
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
		final public function sql_azp_gsc_information_client_remove(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_information_client_remove($data);
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
				$var_array = array(d_azp_gsc_information_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_information, $var_array, d_azp_gsc_information_id_azp_gsc_information . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_information, d_azp_gsc_information_id_azp_gsc_information . " = '" . $empty_id . "'");
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) { foreach ($var_sql as $key => $value) { $empty_request = $value[d_azp_gsc_information_t_request]; } }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_information, d_azp_gsc_information_id_azp_gsc_information . " = '" . $empty_id . "'");
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) { foreach ($var_sql as $key => $value) { $empty_client = $value[d_azp_gsc_information_v_id_azp_fct_client]; } }
				#-------------------------------------------------------------------------#
				$var_array_clients = array();
				# Verificar si el registro existe en la tabla
				$var_sql = $this->db->select("*", t_azp_gsc_client, d_azp_gsc_client_v_id_azp_fct_client . " = '" . $empty_client . "'");
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) { foreach ($var_sql as $key => $value) { $var_array_clients[] = $value[d_azp_gsc_client_id_azp_gsc_client]; } }
				$var_implode = implode(',', $var_array_clients);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_gsc_information,
					d_azp_gsc_information_t_request . " = '" . $empty_request . "' AND " .
					d_azp_gsc_information_v_id_azp_fct_client . " = '" . $empty_client . "' AND " .
					d_azp_gsc_information_m_deleted . " = '1'"
				);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) { foreach ($var_sql as $key => $value) { $var_incount = $value['lbl_count']; } }
				# Control de validacion de datos
				if ($var_incount > 0) {
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_gsc_request_t_inform_client => 'Si',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_gsc_request, $var_array,
						d_azp_gsc_request_t_number_request . " = '" . $empty_request . "' AND " .
						d_azp_gsc_request_v_id_azp_gsc_client . " IN (" . $var_implode . ")"
					);
				} else {
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_gsc_request_t_inform_client => 'No',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_gsc_request, $var_array,
						d_azp_gsc_request_t_number_request . " = '" . $empty_request . "' AND " .
						d_azp_gsc_request_v_id_azp_gsc_client . " IN (" . $var_implode . ")"
					);
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>