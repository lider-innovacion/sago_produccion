<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_gsc_consignmentModel extends Models implements OCREND {
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
		final public function sql_controller_confirm_main() {
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
		final public function sql_controller_confirm_intern() {
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
		final public function sql_controller_by_create() {
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
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " AS 'lbl_azp_gsc_consignment_t_nro_receipt',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_observation . " AS 'lbl_azp_gsc_consignment_t_observation',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned . " AS 'lbl_azp_gsc_consignment_t_to_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_check . " AS 'lbl_azp_gsc_consignment_t_value_check',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_divided . " AS 'lbl_azp_gsc_consignment_t_value_divided',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " AS 'lbl_azp_gsc_consignment_t_value_total',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_unique . " AS 'lbl_azp_gsc_consignment_t_value_unique',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " AS 'lbl_azp_gsc_consignment_t_information',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_duplicate . " AS 'lbl_azp_gsc_consignment_t_duplicate',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_register . " AS 'lbl_azp_gsc_consignment_t_register',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_check_item . " AS 'lbl_azp_gsc_consignment_t_check_item',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_serial . " AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " = '1'
					-- AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '1'
				ORDER BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_id_azs_gsc_consignment . " AS 'lbl_azs_gsc_consignment_id_azs_gsc_consignment',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_m_date_modified . " AS 'lbl_azs_gsc_consignment_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_m_date_created . " AS 'lbl_azs_gsc_consignment_m_date_created',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_m_date_modified . " AS 'lbl_azs_gsc_consignment_m_date_modified',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_m_description . " AS 'lbl_azs_gsc_consignment_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_s_file_document . " AS 'lbl_azs_gsc_consignment_s_file_document',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_s_file_error . " AS 'lbl_azs_gsc_consignment_s_file_error',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_s_file_folder . " AS 'lbl_azs_gsc_consignment_s_file_folder',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_s_file_name . " AS 'lbl_azs_gsc_consignment_s_file_name',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_s_file_route . " AS 'lbl_azs_gsc_consignment_s_file_route',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_s_file_size . " AS 'lbl_azs_gsc_consignment_s_file_size',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_s_file_tmp_name . " AS 'lbl_azs_gsc_consignment_s_file_tmp_name',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_s_file_type . " AS 'lbl_azs_gsc_consignment_s_file_type',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_account_number . " AS 'lbl_azs_gsc_consignment_t_account_number',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_account_type . " AS 'lbl_azs_gsc_consignment_t_account_type',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_closed_value . " AS 'lbl_azs_gsc_consignment_t_closed_value',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_consigned_entity . " AS 'lbl_azs_gsc_consignment_t_consigned_entity',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_consignment_code . " AS 'lbl_azs_gsc_consignment_t_consignment_code',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_consignment_confirm . " AS 'lbl_azs_gsc_consignment_t_consignment_confirm',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_consignment_date . " AS 'lbl_azs_gsc_consignment_t_consignment_date',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_consignment_item . " AS 'lbl_azs_gsc_consignment_t_consignment_item',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_honorary . " AS 'lbl_azs_gsc_consignment_t_honorary',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_nit_identification . " AS 'lbl_azs_gsc_consignment_t_nit_identification',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_nro_receipt . " AS 'lbl_azs_gsc_consignment_t_nro_receipt',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_observation . " AS 'lbl_azs_gsc_consignment_t_observation',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_to_consigned . " AS 'lbl_azs_gsc_consignment_t_to_consigned',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_value_check . " AS 'lbl_azs_gsc_consignment_t_value_check',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_value_divided . " AS 'lbl_azs_gsc_consignment_t_value_divided',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_value_total . " AS 'lbl_azs_gsc_consignment_t_value_total',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_value_unique . " AS 'lbl_azs_gsc_consignment_t_value_unique',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_information . " AS 'lbl_azs_gsc_consignment_t_information',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_duplicate . " AS 'lbl_azs_gsc_consignment_t_duplicate',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_register . " AS 'lbl_azs_gsc_consignment_t_register',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_t_check_item . " AS 'lbl_azs_gsc_consignment_t_check_item',
					tc_azs_gsc_consignment." . d_azs_gsc_consignment_u_gsc_request . " AS 'lbl_azs_gsc_consignment_u_gsc_request'
				FROM " . t_azs_gsc_consignment . " tc_azs_gsc_consignment
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_gsc_consignment." . d_azs_gsc_consignment_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_gsc_consignment." . d_azs_gsc_consignment_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_gsc_consignment." . d_azs_gsc_consignment_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_gsc_consignment." . d_azs_gsc_consignment_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_gsc_consignment." . d_azs_gsc_consignment_v_id_azp_gsc_consignment . " = '" . $this->id . "'
				ORDER BY tc_azs_gsc_consignment." . d_azs_gsc_consignment_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_file_zip() {
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
					AND " . d_azp_gsc_generated_files_t_module . " = 'Consignacion'
					AND " . d_azp_gsc_generated_files_t_template . " = 'consignacion'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_gsc_consignment . "
				WHERE " . d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $this->id . "'
					AND " . d_azp_gsc_consignment_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_gsc_consignment);
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
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " AS 'lbl_azp_gsc_consignment_t_nro_receipt',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_observation . " AS 'lbl_azp_gsc_consignment_t_observation',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned . " AS 'lbl_azp_gsc_consignment_t_to_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_check . " AS 'lbl_azp_gsc_consignment_t_value_check',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_divided . " AS 'lbl_azp_gsc_consignment_t_value_divided',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " AS 'lbl_azp_gsc_consignment_t_value_total',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_unique . " AS 'lbl_azp_gsc_consignment_t_value_unique',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " AS 'lbl_azp_gsc_consignment_t_information',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_duplicate . " AS 'lbl_azp_gsc_consignment_t_duplicate',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_register . " AS 'lbl_azp_gsc_consignment_t_register',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_check_item . " AS 'lbl_azp_gsc_consignment_t_check_item',
					CONCAT('$ ', FORMAT(tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_closed_value . ",0)) AS 'lbl_azp_gsc_consignment_t_closed_value',
					CONCAT('$ ', FORMAT(tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_honorary . ",0)) AS 'lbl_azp_gsc_consignment_t_honorary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_serial . " AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $this->id . "'
					AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " = '1'
				LIMIT 1
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
					tc_azp_gsc_update." . d_azp_gsc_update_t_identification . " AS 'lbl_azp_gsc_update_t_identification',
					tc_azp_gsc_update." . d_azp_gsc_update_t_notary . " AS 'lbl_azp_gsc_update_t_notary',
					tc_azp_gsc_update." . d_azp_gsc_update_t_number_obligation . " AS 'lbl_azp_gsc_update_t_number_obligation',
					tc_azp_gsc_update." . d_azp_gsc_update_t_number_request . " AS 'lbl_azp_gsc_update_t_number_request',
					tc_azp_gsc_update." . d_azp_gsc_update_t_observation . " AS 'lbl_azp_gsc_update_t_observation',
					tc_azp_gsc_update." . d_azp_gsc_update_t_observation_outer . " AS 'lbl_azp_gsc_update_t_observation_outer',
					tc_azp_gsc_update." . d_azp_gsc_update_t_reported_bank . " AS 'lbl_azp_gsc_update_t_reported_bank',
					tc_azp_gsc_update." . d_azp_gsc_update_t_request_by . " AS 'lbl_azp_gsc_update_t_request_by',
					tc_azp_gsc_update." . d_azp_gsc_update_t_request_date . " AS 'lbl_azp_gsc_update_t_request_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_serial . " AS 'lbl_azp_gsc_update_t_serial',
					tc_azp_gsc_update." . d_azp_gsc_update_t_shipping_number . " AS 'lbl_azp_gsc_update_t_shipping_number',
					tc_azp_gsc_update." . d_azp_gsc_update_t_supplier_request_date . " AS 'lbl_azp_gsc_update_t_supplier_request_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_supplier_request_number . " AS 'lbl_azp_gsc_update_t_supplier_request_number',

					tc_azp_gsc_causal." . d_azp_gsc_causal_t_name . " AS 'lbl_azp_gsc_causal_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					CONCAT(tc_azp_gsc_client." . d_azp_gsc_client_t_code . ", '_', tc_azp_gsc_update." . d_azp_gsc_update_t_number_request . ") AS 'lbl_azp_update_z_client_request'
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
		final public function sql_controller_eliminate() {
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
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " AS 'lbl_azp_gsc_consignment_t_nro_receipt',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_observation . " AS 'lbl_azp_gsc_consignment_t_observation',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned . " AS 'lbl_azp_gsc_consignment_t_to_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_check . " AS 'lbl_azp_gsc_consignment_t_value_check',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_divided . " AS 'lbl_azp_gsc_consignment_t_value_divided',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " AS 'lbl_azp_gsc_consignment_t_value_total',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_unique . " AS 'lbl_azp_gsc_consignment_t_value_unique',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " AS 'lbl_azp_gsc_consignment_t_information',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_duplicate . " AS 'lbl_azp_gsc_consignment_t_duplicate',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_register . " AS 'lbl_azp_gsc_consignment_t_register',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_check_item . " AS 'lbl_azp_gsc_consignment_t_check_item',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_serial . " AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " = '3'
					-- AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '1'
				ORDER BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_file() {
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
					tc_azp_gsc_update." . d_azp_gsc_update_t_identification . " AS 'lbl_azp_gsc_update_t_identification',
					tc_azp_gsc_update." . d_azp_gsc_update_t_notary . " AS 'lbl_azp_gsc_update_t_notary',
					tc_azp_gsc_update." . d_azp_gsc_update_t_number_obligation . " AS 'lbl_azp_gsc_update_t_number_obligation',
					tc_azp_gsc_update." . d_azp_gsc_update_t_number_request . " AS 'lbl_azp_gsc_update_t_number_request',
					tc_azp_gsc_update." . d_azp_gsc_update_t_observation . " AS 'lbl_azp_gsc_update_t_observation',
					tc_azp_gsc_update." . d_azp_gsc_update_t_observation_outer . " AS 'lbl_azp_gsc_update_t_observation_outer',
					tc_azp_gsc_update." . d_azp_gsc_update_t_reported_bank . " AS 'lbl_azp_gsc_update_t_reported_bank',
					tc_azp_gsc_update." . d_azp_gsc_update_t_request_by . " AS 'lbl_azp_gsc_update_t_request_by',
					tc_azp_gsc_update." . d_azp_gsc_update_t_request_date . " AS 'lbl_azp_gsc_update_t_request_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_serial . " AS 'lbl_azp_gsc_update_t_serial',
					tc_azp_gsc_update." . d_azp_gsc_update_t_shipping_number . " AS 'lbl_azp_gsc_update_t_shipping_number',
					tc_azp_gsc_update." . d_azp_gsc_update_t_supplier_request_date . " AS 'lbl_azp_gsc_update_t_supplier_request_date',
					tc_azp_gsc_update." . d_azp_gsc_update_t_supplier_request_number . " AS 'lbl_azp_gsc_update_t_supplier_request_number',

					tc_azp_gsc_causal." . d_azp_gsc_causal_t_name . " AS 'lbl_azp_gsc_causal_t_name',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					CONCAT(tc_azp_gsc_client." . d_azp_gsc_client_t_code . ", '_', tc_azp_gsc_update." . d_azp_gsc_update_t_number_request . ") AS 'lbl_azp_update_z_client_request'
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
		final public function sql_controller_filter() {
			# Obtener el valor cargado en el campo
			$var_consignment = $this->id;
			# Control para validacion segun el valor obenido
			if ($var_consignment == '' || $var_consignment == 1) {
				# Asignar nuevos valores a la sentencia sql o query
				$var_closed_value = "";
			} else if ($var_consignment == 2) {
				# Asignar nuevos valores a la sentencia sql o query
				$var_closed_value = "AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_closed_value . " != ''";
			} else if ($var_consignment == 3) {
				# Asignar nuevos valores a la sentencia sql o query
				$var_closed_value = "AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_closed_value . " = ''";
			}
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
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " AS 'lbl_azp_gsc_consignment_t_nro_receipt',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_observation . " AS 'lbl_azp_gsc_consignment_t_observation',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned . " AS 'lbl_azp_gsc_consignment_t_to_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_check . " AS 'lbl_azp_gsc_consignment_t_value_check',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_divided . " AS 'lbl_azp_gsc_consignment_t_value_divided',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " AS 'lbl_azp_gsc_consignment_t_value_total',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_unique . " AS 'lbl_azp_gsc_consignment_t_value_unique',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " AS 'lbl_azp_gsc_consignment_t_information',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_duplicate . " AS 'lbl_azp_gsc_consignment_t_duplicate',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_register . " AS 'lbl_azp_gsc_consignment_t_register',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_check_item . " AS 'lbl_azp_gsc_consignment_t_check_item',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_serial . " AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " = '1' " . $var_closed_value . " 
				ORDER BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_total() {
			# Seleccionar los registros de la tabla
			return $this->db->select("COUNT(*) AS 'lbl_total'", t_azp_gsc_consignment, d_azp_gsc_consignment_m_deleted . " = '1'");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_count() {
			if (isset($_GET['fdconsing'])) {
				if ($_GET['fdconsing'] == 3) { $var_filter = ''; } else {
					$var_filter = "AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_confirm . " = '" . $_GET['fdconsing'] . "'";
				}
			} else { $var_filter = ''; }
			if (isset($_GET['fdcity'])) { $var_city = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_city . " LIKE '%" . $_GET['fdcity'] . "%'"; } else { $var_city = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
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
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " = '1' " . $var_filter . " " . $var_city . "
					-- AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '1'
				ORDER BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			if (isset($_GET['fdconsing'])) {
				if ($_GET['fdconsing'] == 3) { $var_filter = ''; } else {
					$var_filter = "AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_confirm . " = '" . $_GET['fdconsing'] . "'";
				}
			} else { $var_filter = ''; }
			if (isset($_GET['since'])) { $var_since = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " >= '" . $_GET['since'] . "'"; } else { $var_since = ''; }
			if (isset($_GET['until'])) { $var_until = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " <= '" . $_GET['until'] . "'"; } else { $var_until = ''; }
			if (isset($_GET['fdcity'])) { $var_city = "AND tc_azp_gsc_request." . d_azp_gsc_request_t_city . " LIKE '%" . $_GET['fdcity'] . "%'"; } else { $var_city = ''; }
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
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " AS 'lbl_azp_gsc_consignment_t_nro_receipt',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_observation . " AS 'lbl_azp_gsc_consignment_t_observation',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned . " AS 'lbl_azp_gsc_consignment_t_to_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_check . " AS 'lbl_azp_gsc_consignment_t_value_check',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_divided . " AS 'lbl_azp_gsc_consignment_t_value_divided',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " AS 'lbl_azp_gsc_consignment_t_value_total',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_unique . " AS 'lbl_azp_gsc_consignment_t_value_unique',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " AS 'lbl_azp_gsc_consignment_t_information',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_duplicate . " AS 'lbl_azp_gsc_consignment_t_duplicate',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_register . " AS 'lbl_azp_gsc_consignment_t_register',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_check_item . " AS 'lbl_azp_gsc_consignment_t_check_item',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_serial . " AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " = '1' " . $var_filter . " " . $var_since . " " . $var_until . "
					-- AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '1'
				ORDER BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_rpdate() {
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
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " AS 'lbl_azp_gsc_consignment_t_nro_receipt',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_observation . " AS 'lbl_azp_gsc_consignment_t_observation',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned . " AS 'lbl_azp_gsc_consignment_t_to_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_check . " AS 'lbl_azp_gsc_consignment_t_value_check',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_divided . " AS 'lbl_azp_gsc_consignment_t_value_divided',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " AS 'lbl_azp_gsc_consignment_t_value_total',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_unique . " AS 'lbl_azp_gsc_consignment_t_value_unique',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " AS 'lbl_azp_gsc_consignment_t_information',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_duplicate . " AS 'lbl_azp_gsc_consignment_t_duplicate',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_register . " AS 'lbl_azp_gsc_consignment_t_register',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_check_item . " AS 'lbl_azp_gsc_consignment_t_check_item',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_notary_consigned . " AS 'lbl_azp_gsc_consignment_t_notary_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_notary_identification . " AS 'lbl_azp_gsc_consignment_t_notary_identification',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_notary_receipt . " AS 'lbl_azp_gsc_consignment_t_notary_receipt'
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_serial . " AS 'lbl_azp_gsc_request_t_serial',
					-- tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_gsc_update ." tc_azp_gsc_update
					ON tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . "
						= tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_consignment . "
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_gsc_request ." tc_azp_gsc_request
					ON tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "*/
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					-- AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " = '1'
					-- AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '1'
				GROUP BY tc_azp_gsc_update." . d_azp_gsc_update_t_information . " ASC
				ORDER BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_rpnotary() {
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
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " AS 'lbl_azp_gsc_consignment_t_nro_receipt',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_observation . " AS 'lbl_azp_gsc_consignment_t_observation',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned . " AS 'lbl_azp_gsc_consignment_t_to_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_check . " AS 'lbl_azp_gsc_consignment_t_value_check',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_divided . " AS 'lbl_azp_gsc_consignment_t_value_divided',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " AS 'lbl_azp_gsc_consignment_t_value_total',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_unique . " AS 'lbl_azp_gsc_consignment_t_value_unique',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " AS 'lbl_azp_gsc_consignment_t_information',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_duplicate . " AS 'lbl_azp_gsc_consignment_t_duplicate',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_register . " AS 'lbl_azp_gsc_consignment_t_register',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_check_item . " AS 'lbl_azp_gsc_consignment_t_check_item',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_notary_consigned . " AS 'lbl_azp_gsc_consignment_t_notary_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_notary_identification . " AS 'lbl_azp_gsc_consignment_t_notary_identification',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_notary_receipt . " AS 'lbl_azp_gsc_consignment_t_notary_receipt'
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_serial . " AS 'lbl_azp_gsc_request_t_serial',
					-- tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_gsc_update ." tc_azp_gsc_update
					ON tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . "
						= tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_consignment . "
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_gsc_request ." tc_azp_gsc_request
					ON tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "*/
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " = 'Principal'
				GROUP BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " ASC
				ORDER BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_approve() {
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
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " AS 'lbl_azp_gsc_consignment_t_nro_receipt',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_observation . " AS 'lbl_azp_gsc_consignment_t_observation',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned . " AS 'lbl_azp_gsc_consignment_t_to_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_check . " AS 'lbl_azp_gsc_consignment_t_value_check',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_divided . " AS 'lbl_azp_gsc_consignment_t_value_divided',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " AS 'lbl_azp_gsc_consignment_t_value_total',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_unique . " AS 'lbl_azp_gsc_consignment_t_value_unique',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " AS 'lbl_azp_gsc_consignment_t_information',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_duplicate . " AS 'lbl_azp_gsc_consignment_t_duplicate',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_register . " AS 'lbl_azp_gsc_consignment_t_register',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_check_item . " AS 'lbl_azp_gsc_consignment_t_check_item',
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
				WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " = '2'
					AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_temp . " = '3'
				GROUP BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_register . " ASC
				ORDER BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " ASC
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
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " AS 'lbl_azp_gsc_consignment_t_nro_receipt',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_observation . " AS 'lbl_azp_gsc_consignment_t_observation',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned . " AS 'lbl_azp_gsc_consignment_t_to_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_check . " AS 'lbl_azp_gsc_consignment_t_value_check',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_divided . " AS 'lbl_azp_gsc_consignment_t_value_divided',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " AS 'lbl_azp_gsc_consignment_t_value_total',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_unique . " AS 'lbl_azp_gsc_consignment_t_value_unique',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " AS 'lbl_azp_gsc_consignment_t_information',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_duplicate . " AS 'lbl_azp_gsc_consignment_t_duplicate',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_register . " AS 'lbl_azp_gsc_consignment_t_register',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_check_item . " AS 'lbl_azp_gsc_consignment_t_check_item',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_serial . " AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " = '1'
					-- AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '2'
					" . $var_client . " " . $var_request . " " . $var_date . " " . $var_identification . "
				ORDER BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
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
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " AS 'lbl_azp_gsc_consignment_t_nro_receipt',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_observation . " AS 'lbl_azp_gsc_consignment_t_observation',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned . " AS 'lbl_azp_gsc_consignment_t_to_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_check . " AS 'lbl_azp_gsc_consignment_t_value_check',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_divided . " AS 'lbl_azp_gsc_consignment_t_value_divided',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " AS 'lbl_azp_gsc_consignment_t_value_total',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_unique . " AS 'lbl_azp_gsc_consignment_t_value_unique',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " AS 'lbl_azp_gsc_consignment_t_information',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_duplicate . " AS 'lbl_azp_gsc_consignment_t_duplicate',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_register . " AS 'lbl_azp_gsc_consignment_t_register',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_check_item . " AS 'lbl_azp_gsc_consignment_t_check_item',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_serial . " AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " = '2'
					-- AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '1'
				ORDER BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_report_tcd() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_report_consignment." . d_azp_report_consignment_id_azp_report_consignment . " AS 'lbl_azp_report_consignment_id_azp_report_consignment',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_report_consignment." . d_azp_report_consignment_m_date_created . " AS 'lbl_azp_report_consignment_m_date_created',
					tc_azp_report_consignment." . d_azp_report_consignment_m_date_modified . " AS 'lbl_azp_report_consignment_m_date_modified',
					tc_azp_report_consignment." . d_azp_report_consignment_m_description . " AS 'lbl_azp_report_consignment_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_report_consignment." . d_azp_report_consignment_s_city . " AS 'lbl_azp_report_consignment_s_city',
					tc_azp_report_consignment." . d_azp_report_consignment_s_entity . " AS 'lbl_azp_report_consignment_s_entity',
					tc_azp_report_consignment." . d_azp_report_consignment_s_full_name . " AS 'lbl_azp_report_consignment_s_full_name',
					tc_azp_report_consignment." . d_azp_report_consignment_s_identification . " AS 'lbl_azp_report_consignment_s_identification',
					tc_azp_report_consignment." . d_azp_report_consignment_s_notary . " AS 'lbl_azp_report_consignment_s_notary',
					tc_azp_report_consignment." . d_azp_report_consignment_s_number_request . " AS 'lbl_azp_report_consignment_s_number_request',
					tc_azp_report_consignment." . d_azp_report_consignment_s_serial . " AS 'lbl_azp_report_consignment_s_serial',
					tc_azp_report_consignment." . d_azp_report_consignment_t_account_number . " AS 'lbl_azp_report_consignment_t_account_number',
					tc_azp_report_consignment." . d_azp_report_consignment_t_account_type . " AS 'lbl_azp_report_consignment_t_account_type',
					tc_azp_report_consignment." . d_azp_report_consignment_t_closed_value . " AS 'lbl_azp_report_consignment_t_closed_value',
					tc_azp_report_consignment." . d_azp_report_consignment_t_consigned_entity . " AS 'lbl_azp_report_consignment_t_consigned_entity',
					tc_azp_report_consignment." . d_azp_report_consignment_t_consignment_confirm . " AS 'lbl_azp_report_consignment_t_consignment_confirm',
					tc_azp_report_consignment." . d_azp_report_consignment_t_consignment_item . " AS 'lbl_azp_report_consignment_t_consignment_item',
					tc_azp_report_consignment." . d_azp_report_consignment_t_consignment_date . " AS 'lbl_azp_report_consignment_t_consignment_date',
					tc_azp_report_consignment." . d_azp_report_consignment_t_honorary . " AS 'lbl_azp_report_consignment_t_honorary',
					tc_azp_report_consignment." . d_azp_report_consignment_t_nit_identification . " AS 'lbl_azp_report_consignment_t_nit_identification',
					tc_azp_report_consignment." . d_azp_report_consignment_t_to_consigned . " AS 'lbl_azp_report_consignment_t_to_consigned',
					tc_azp_report_consignment." . d_azp_report_consignment_t_value_unique . " AS 'lbl_azp_report_consignment_t_value_unique'
				FROM " . t_azp_report_consignment . " tc_azp_report_consignment
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_report_consignment." . d_azp_report_consignment_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_report_consignment." . d_azp_report_consignment_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_report_consignment." . d_azp_report_consignment_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_report_consignment." . d_azp_report_consignment_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_report_consignment." . d_azp_report_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_report_consignment." . d_azp_report_consignment_m_deleted . " = '1'
				ORDER BY tc_azp_report_consignment." . d_azp_report_consignment_t_consignment_date . " ASC,
					tc_azp_report_consignment." . d_azp_report_consignment_t_consignment_item . " ASC,
					tc_azp_report_consignment." . d_azp_report_consignment_t_account_number . " ASC,
					tc_azp_report_consignment." . d_azp_report_consignment_t_formula . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_report_group() {
			# Seleccionar los registros de la tabla
			/*$var_sql = $this->db->select("*", t_azp_report_consignment, d_azp_report_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' GROUP BY " . d_azp_report_consignment_t_group_by);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_group_by = $value[d_azp_report_consignment_t_group_by]; endforeach; }
			# Control de validacion de datos
			if ($var_group_by == 1) { $empty_group_by = ''; } else if ($var_group_by == 2) {
				$empty_group_by = ',' . d_azp_report_consignment_s_city . ' ' . 'ASC';
			} else if ($var_group_by == 3) {
				$empty_group_by = ',' . d_azp_report_consignment_s_city . ' ' . 'ASC';
			}*/
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_report_consignment." . d_azp_report_consignment_id_azp_report_consignment . " AS 'lbl_azp_report_consignment_id_azp_report_consignment',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_report_consignment." . d_azp_report_consignment_m_date_created . " AS 'lbl_azp_report_consignment_m_date_created',
					tc_azp_report_consignment." . d_azp_report_consignment_m_date_modified . " AS 'lbl_azp_report_consignment_m_date_modified',
					tc_azp_report_consignment." . d_azp_report_consignment_m_description . " AS 'lbl_azp_report_consignment_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_report_consignment." . d_azp_report_consignment_s_city . " AS 'lbl_azp_report_consignment_s_city',
					tc_azp_report_consignment." . d_azp_report_consignment_s_entity . " AS 'lbl_azp_report_consignment_s_entity',
					tc_azp_report_consignment." . d_azp_report_consignment_s_full_name . " AS 'lbl_azp_report_consignment_s_full_name',
					tc_azp_report_consignment." . d_azp_report_consignment_s_identification . " AS 'lbl_azp_report_consignment_s_identification',
					tc_azp_report_consignment." . d_azp_report_consignment_s_notary . " AS 'lbl_azp_report_consignment_s_notary',
					tc_azp_report_consignment." . d_azp_report_consignment_s_number_request . " AS 'lbl_azp_report_consignment_s_number_request',
					tc_azp_report_consignment." . d_azp_report_consignment_s_serial . " AS 'lbl_azp_report_consignment_s_serial',
					tc_azp_report_consignment." . d_azp_report_consignment_t_account_number . " AS 'lbl_azp_report_consignment_t_account_number',
					tc_azp_report_consignment." . d_azp_report_consignment_t_account_type . " AS 'lbl_azp_report_consignment_t_account_type',
					SUM(tc_azp_report_consignment." . d_azp_report_consignment_t_closed_value . ") AS 'lbl_azp_report_consignment_t_closed_value',
					tc_azp_report_consignment." . d_azp_report_consignment_t_consigned_entity . " AS 'lbl_azp_report_consignment_t_consigned_entity',
					tc_azp_report_consignment." . d_azp_report_consignment_t_consignment_confirm . " AS 'lbl_azp_report_consignment_t_consignment_confirm',
					tc_azp_report_consignment." . d_azp_report_consignment_t_consignment_item . " AS 'lbl_azp_report_consignment_t_consignment_item',
					tc_azp_report_consignment." . d_azp_report_consignment_t_consignment_date . " AS 'lbl_azp_report_consignment_t_consignment_date',
					tc_azp_report_consignment." . d_azp_report_consignment_t_honorary . " AS 'lbl_azp_report_consignment_t_honorary',
					tc_azp_report_consignment." . d_azp_report_consignment_t_nit_identification . " AS 'lbl_azp_report_consignment_t_nit_identification',
					tc_azp_report_consignment." . d_azp_report_consignment_t_to_consigned . " AS 'lbl_azp_report_consignment_t_to_consigned',
					tc_azp_report_consignment." . d_azp_report_consignment_t_value_unique . " AS 'lbl_azp_report_consignment_t_value_unique'
				FROM " . t_azp_report_consignment . " tc_azp_report_consignment
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_report_consignment." . d_azp_report_consignment_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_report_consignment." . d_azp_report_consignment_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_report_consignment." . d_azp_report_consignment_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_report_consignment." . d_azp_report_consignment_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_report_consignment." . d_azp_report_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_report_consignment." . d_azp_report_consignment_m_deleted . " = '1'
					AND tc_azp_report_consignment." . d_azp_report_consignment_s_entity . " != ''
					AND tc_azp_report_consignment." . d_azp_report_consignment_t_formula . " = '1'
				-- ---------------------------------------------------------------
				GROUP BY tc_azp_report_consignment." . d_azp_report_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' ASC,
					tc_azp_report_consignment." . d_azp_report_consignment_t_account_number . " ASC,
					tc_azp_report_consignment." . d_azp_report_consignment_s_city . " ASC
				ORDER BY tc_azp_report_consignment." . d_azp_report_consignment_id_azp_report_consignment . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " AS 'lbl_azp_gsc_consignment_id_azp_gsc_consignment',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_by_created . " AS 'lbl_azp_gsc_consignment_m_by_created',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_by_modified . " AS 'lbl_azp_gsc_consignment_m_by_modified',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_date_created . " AS 'lbl_azp_gsc_consignment_m_date_created',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_date_modified . " AS 'lbl_azp_gsc_consignment_m_date_modified',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_description . " AS 'lbl_azp_gsc_consignment_m_description',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_level . " AS 'lbl_azp_gsc_consignment_m_level',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_status . " AS 'lbl_azp_gsc_consignment_m_status',
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
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " AS 'lbl_azp_gsc_consignment_t_nro_receipt',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_observation . " AS 'lbl_azp_gsc_consignment_t_observation',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned . " AS 'lbl_azp_gsc_consignment_t_to_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_check . " AS 'lbl_azp_gsc_consignment_t_value_check',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_divided . " AS 'lbl_azp_gsc_consignment_t_value_divided',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " AS 'lbl_azp_gsc_consignment_t_value_total',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_unique . " AS 'lbl_azp_gsc_consignment_t_value_unique',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " AS 'lbl_azp_gsc_consignment_t_information',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_duplicate . " AS 'lbl_azp_gsc_consignment_t_duplicate',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_register . " AS 'lbl_azp_gsc_consignment_t_register',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_check_item . " AS 'lbl_azp_gsc_consignment_t_check_item',
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
				WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $this->id . "'
					AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_consignment_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "' AND " . d_azp_gsc_consignment_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_consignment,
					d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "' AND " .
					d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_consignment_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "' AND " . d_azp_gsc_consignment_m_level . " = '2'");
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
		final public function sql_azp_gsc_consignment_delete(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_delete($data);
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
				$var_array = array(d_azp_gsc_consignment_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_gsc_consignment_document_1(string $var_name, string $var_type, string $var_tmp_name, string $var_error, string $var_size, $var_receipt) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				Helper::load('files');
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value) {
						$var_folder = 'systemfiles/filesproject/';
						$var_subfol = 'azp_gsc_consignment/';
						$var_route = $var_folder . $var_subfol;
						#$var_document = $var_identification . '_' . $var_plaque_enrollment . '.pdf';
						$var_document = $var_name;
						#-------------------------------------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_consignment_m_date_modified => DATE_HOUR,
							//d_azp_gsc_consignment_m_description => '',
							d_azp_gsc_consignment_m_status => '1',
							d_azp_gsc_consignment_m_temp => '1',
							d_azp_gsc_consignment_s_file_document => $var_document,
							d_azp_gsc_consignment_s_file_error => $var_error,
							d_azp_gsc_consignment_s_file_folder => $value[d_azp_gsc_update_t_identification],
							d_azp_gsc_consignment_s_file_name => strtoupper(trim(preg_replace('/\s+/',' ', $var_name))),
							d_azp_gsc_consignment_s_file_route => $var_route,
							d_azp_gsc_consignment_s_file_size => $var_size,
							d_azp_gsc_consignment_s_file_tmp_name => $var_tmp_name,
							d_azp_gsc_consignment_s_file_type => $var_type,
							d_azp_gsc_consignment_t_observation => '',
							d_azp_gsc_consignment_t_nro_receipt => strtoupper($var_receipt),
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $value[d_azp_gsc_update_v_id_azp_gsc_consignment] . "'");
						#-------------------------------------------------------------------------#
						Files::upload_file(trim(preg_replace('/\s+/',' ', $var_document)), $var_tmp_name, $var_route, true);
						# Dar permisos a la ruta y archivo
						chmod($var_route . $var_document, 0777);
					}
				}
			}
		}
		
		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_gsc_consignment_email(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_em_affair'])) { throw new Exception('<b>Error:</b> El campo de asunto esta prohibido modificar.'); }
				if (!isset($data['field_em_third_type'])) { throw new Exception('<b>Error:</b> El campo de razon social esta prohibido modificar.'); }
				if (!isset($data['field_em_summernote_1'])) { throw new Exception('<b>Error:</b> El campo de nota 1 esta prohibido modificar.'); }
				if (!isset($data['field_em_summernote_2'])) { throw new Exception('<b>Error:</b> El campo de nota 2 esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_affair = $this->db->scape($data['field_em_affair']);
				$empty_third_type = $this->db->scape($data['field_em_third_type']);
				$empty_summernote_1 = $this->db->scape($data['field_em_summernote_1']);
				$empty_summernote_2 = $this->db->scape($data['field_em_summernote_2']);
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
				if (Func::emp($empty_third_type) || $empty_third_type == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de razon social es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_third_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de razon social solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_summernote_1)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nota es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_summernote_2)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nota es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_consignment_email(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_email($data);
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
				$var_search = array(
					'	', "'", '"', ';', ',', '', '`', '─', '~', '´', '	', '{', '}', '[', ']', '–',
					'ñ', 'Ñ', 'ý', 'Ý', 'ç', 'Ç', 'æ', 'Æ', 'ã', 'Ã', '°', '\n', '\r', '\t',
					'á', 'é', 'í', 'ó', 'ú',
					'Á', 'É', 'Í', 'Ó', 'Ú',
					'à', 'è', 'ì', 'ò', 'ù',
					'À', 'È', 'Ì', 'Ò', 'Ù',
					'â', 'ê', 'î', 'ô', 'û',
					'Â', 'Ê', 'Î', 'Ô', 'Û',
					'ä', 'ë', 'ï', 'ô', 'ü',
					'Ä', 'Ë', 'Ï', 'Ö', 'Ü');
				$var_replace = array(
					'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
					'n', 'N', 'y', 'Y', 'c', 'C', '', '', '', '', '', '', '', '',
					'a', 'e', 'i', 'o', 'u',
					'A', 'E', 'I', 'O', 'U',
					'a', 'e', 'i', 'o', 'u',
					'A', 'E', 'I', 'O', 'U',
					'a', 'e', 'i', 'o', 'u',
					'A', 'E', 'I', 'O', 'U',
					'a', 'e', 'i', 'o', 'u',
					'A', 'E', 'I', 'O', 'U');
				#-------------------------------------------------------------------------#
				$empty_tp_id = $this->db->scape($data['field_tp_id']);
				$empty_em_id = $this->db->scape($data['field_em_id']);
				$empty_id = $this->db->scape($data['field_em_id']);
				$empty_affair = $this->db->scape($data['field_em_affair']);
				$empty_third_type = $this->db->scape($data['field_em_third_type']);
				$empty_summernote_1 = $this->db->scape($data['field_em_summernote_1']);
				$empty_summernote_2 = $this->db->scape($data['field_em_summernote_2']);
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
				}
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array_tp = explode(",", $empty_tp_id);
				# Valores del array vacios
				$var_email_address = array();
				# Recorrer los datos de la consulta
				foreach ($var_array_tp as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_email_send = $this->db->select("*", t_azp_gsc_third_parties, d_azp_gsc_third_parties_id_azp_gsc_third_parties . " IN ('" . $value . "')" );
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
				$var_sql = $this->db->select('*', t_azp_gsc_consignment,
					d_azp_gsc_consignment_v_id_azp_gsc_request . " IN (SELECT " .
						d_azp_gsc_update_v_id_azp_gsc_request . " FROM " . t_azp_gsc_update .
						" WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'" .
					") AND " . d_azp_gsc_consignment_s_file_document . " != '' GROUP BY " .
					d_azp_gsc_consignment_s_file_document . " ASC
				");
				#-------------------------------------------------------------------------#
				if (false != $var_sql) {
					foreach ($var_sql as $key_sql => $value_sql) {
						$var_docum = $value_sql[d_azp_gsc_consignment_s_file_document];
						$var_route = $value_sql[d_azp_gsc_consignment_s_file_route];
						$var_compl = '../' . $var_route . $var_docum;
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
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_request_v_id_azp_gsc_phase => '7',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array,
							d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_request_v_id_azp_gsc_phase . " <= '7'");
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
							d_azp_gsc_follow_email_t_template => ucwords(strtolower('Envio Consignacion')),
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
							d_azp_gsc_observation_internal_t_observation => 'Se envia consignacion a la entidad.',
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_observation_internal, $var_array);
						#-------------------------------------------------------------------------#
						$var_array = array(d_azp_gsc_request_t_observation => DATE . ' ' . 'Se envia consignacion a la entidad.',);
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
					d_azp_gsc_log_email_t_template => 'Solicitud Expedición Certificados',
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_log_email, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array($var_return => 1, $var_ms_name => $var_ms_text,);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_consignment_file(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_fl_1_consignment_confirm'])) { throw new Exception('<b>Error:</b> El campo de consignacion esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_consignment_confirm = $this->db->scape($data['field_fl_1_consignment_confirm']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_consignment_confirm) || strtolower($empty_consignment_confirm) == strtolower('ninguno') || $empty_consignment_confirm == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de consignacion es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_consignment_confirm)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de consignacion solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_gsc_consignment_file(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_file($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_consignment_confirm = $this->db->scape($data['field_fl_1_consignment_confirm']);
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_consignment_t_consignment_confirm => '1',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_consignment] . "'");
						#-------------------------------------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_request_v_id_azp_gsc_phase => '7', d_azp_gsc_request_v_id_azp_gsc_state => '2',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_request, $var_array,
							d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_request_v_id_azp_gsc_phase . " <= '7'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_gsc_consignment_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_gsc_consignment_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_account_number'])) { throw new Exception('<b>Error:</b> El campo de numero cuenta prohibido modificar.'); }
				if (!isset($data['field_cr_account_type'])) { throw new Exception('<b>Error:</b> El campo de tipo de cuenta esta prohibido modificar.'); }
				if (!isset($data['field_cr_closed_value'])) { throw new Exception('<b>Error:</b> El campo de valor cerrado esta prohibido modificar.'); }
				if (!isset($data['field_cr_consigned_entity'])) { throw new Exception('<b>Error:</b> El campo de entidad consignada esta prohibido modificar.'); }
				if (!isset($data['field_cr_consignment_item'])) { throw new Exception('<b>Error:</b> El campo de item consignacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_nit_identification'])) { throw new Exception('<b>Error:</b> El campo de nit o cedula esta prohibido modificar.'); }
				if (!isset($data['field_cr_to_consigned'])) { throw new Exception('<b>Error:</b> El campo de a quien consigno esta prohibido modificar.'); }
				if (!isset($data['field_cr_gsc_request'])) { throw new Exception('<b>Error:</b> El campo de solicitud esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_account_number = $this->db->scape($data['field_cr_account_number']);
				$empty_account_type = $this->db->scape($data['field_cr_account_type']);
				$empty_closed_value = $this->db->scape($data['field_cr_closed_value']);
				$empty_consigned_entity = $this->db->scape($data['field_cr_consigned_entity']);
				$empty_consignment_item = $this->db->scape($data['field_cr_consignment_item']);
				$empty_nit_identification = $this->db->scape($data['field_cr_nit_identification']);
				$empty_to_consigned = $this->db->scape($data['field_cr_to_consigned']);
				$empty_gsc_request = $this->db->scape($data['field_cr_gsc_request']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_account_number)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de numero cuenta es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_account_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de cuenta es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_closed_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor cerrado es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_consigned_entity)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de entidad consignada es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_consignment_item)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de item consignacion es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_nit_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nit o cedula es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_to_consigned)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de a quien se consigno es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_gsc_request) || strtolower($empty_gsc_request) == strtolower('seleccionar') || $empty_gsc_request == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_gsc_request)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_gsc_request = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_gsc_request . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_gsc_request) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_gsc_request) == '') { $sql_gsc_request[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_gsc_request[0][0]) != strtolower($empty_gsc_request)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La solicitud seleccionada no se encuentra registrado.');
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
		final public function sql_azp_gsc_consignment_insert(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_account_number = $this->db->scape($data['field_cr_account_number']);
				$empty_account_type = $this->db->scape($data['field_cr_account_type']);
				$empty_closed_value = $this->db->scape($data['field_cr_closed_value']);
				$empty_consigned_entity = $this->db->scape($data['field_cr_consigned_entity']);
				$empty_consignment_item = $this->db->scape($data['field_cr_consignment_item']);
				$empty_nit_identification = $this->db->scape($data['field_cr_nit_identification']);
				$empty_to_consigned = $this->db->scape($data['field_cr_to_consigned']);
				$empty_gsc_request = $this->db->scape($data['field_cr_gsc_request']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_consignment_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_consignment_m_date_created => DATE_HOUR,
					d_azp_gsc_consignment_m_date_modified => DATE_HOUR,
					d_azp_gsc_consignment_m_deleted => '1',
					d_azp_gsc_consignment_m_description => $empty_description,
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
					d_azp_gsc_consignment_t_account_number => $empty_account_number,
					d_azp_gsc_consignment_t_account_type => $empty_account_type,
					d_azp_gsc_consignment_t_closed_value => $empty_closed_value,
					d_azp_gsc_consignment_t_consigned_entity => $empty_consigned_entity,
					d_azp_gsc_consignment_t_consignment_code => '0',
					d_azp_gsc_consignment_t_consignment_confirm => '2',
					d_azp_gsc_consignment_t_consignment_date => '',
					d_azp_gsc_consignment_t_consignment_item => $empty_consignment_item,
					d_azp_gsc_consignment_t_honorary => '0',
					d_azp_gsc_consignment_t_nit_identification => $empty_nit_identification,
					d_azp_gsc_consignment_t_nro_receipt => 'Sin_Recibo',
					d_azp_gsc_consignment_t_observation => '',
					d_azp_gsc_consignment_t_to_consigned => $empty_to_consigned,
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
					d_azp_gsc_consignment_v_id_azp_gsc_request => $empty_gsc_request,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_consignment, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_consignment_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "' AND " . d_azp_gsc_consignment_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_consignment,
					d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "' AND " .
					d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_gsc_consignment_m_level . " = '1'"
				);
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "' AND " . d_azp_gsc_consignment_m_level . " = '2'");
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
		final public function sql_azp_gsc_consignment_remove(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_remove($data);
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
				$var_array = array(d_azp_gsc_consignment_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_consignment_report_tcd(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_rp_tcd_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_rp_tcd_date_since'])) { throw new Exception('<b>Error:</b> El campo de fecha desde esta prohibido modificar.'); }
				if (!isset($data['field_rp_tcd_date_until'])) { throw new Exception('<b>Error:</b> El campo de fecha hasta esta prohibido modificar.'); }
				if (!isset($data['field_rp_tcd_group_by'])) { throw new Exception('<b>Error:</b> El campo de agrupacion hasta esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_client = $this->db->scape($data['field_rp_tcd_client']);
				$empty_date_since = $this->db->scape($data['field_rp_tcd_date_since']);
				$empty_date_until = $this->db->scape($data['field_rp_tcd_date_until']);
				$empty_group_by = $this->db->scape($data['field_rp_tcd_group_by']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_client) || strtolower($empty_client) == strtolower('seleccionar')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente es oblgitario.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_date_since) || $empty_date_since == 'aaaa-mm-dd') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha desde es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_date_since) < 10 || strlen($empty_date_since) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha desde está mal diligenciado, debe ser aaaa-mm-dd.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_date_until) || $empty_date_until == 'aaaa-mm-dd') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha hasta es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_date_until) < 10 || strlen($empty_date_until) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha hasta está mal diligenciado, debe ser aaaa-mm-dd.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_group_by) || strtolower($empty_group_by) == strtolower('seleccionar') || $empty_group_by == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de agrupacion es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_group_by)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de agrupacion solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_gsc_consignment_report_tcd(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_report_tcd($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# Consulta para identificar los nuevos registros en la tabla
				//$var_sql = $this->db->query("TRUNCATE TABLE " . t_azp_report_consignment);
				$var_sql = $this->db->query("DELETE FROM " . t_azp_report_consignment . " WHERE " . d_azp_report_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_client = $this->db->scape($data['field_rp_tcd_client']);
				$empty_date_since = $this->db->scape($data['field_rp_tcd_date_since']);
				$empty_date_until = $this->db->scape($data['field_rp_tcd_date_until']);
				$empty_group_by = $this->db->scape($data['field_rp_tcd_group_by']);
				#-------------------------------------------------------------------------#
				$var_client = '';
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("*", t_azp_gsc_client, d_azp_gsc_client_t_name . " = '" . $empty_client . "'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) { foreach ($var_sql as $key_sql => $value): $var_client .= $value[d_azp_gsc_client_id_azp_gsc_client] . ','; endforeach; } else { $var_client = ''; }
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_account_number ." AS 'lbl_azp_gsc_consignment_t_account_number',
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_account_type ." AS 'lbl_azp_gsc_consignment_t_account_type',
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_closed_value ." AS 'lbl_azp_gsc_consignment_t_closed_value',
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consigned_entity ." AS 'lbl_azp_gsc_consignment_t_consigned_entity',
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_confirm ." AS 'lbl_azp_gsc_consignment_t_consignment_confirm',
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date ." AS 'lbl_azp_gsc_consignment_t_consignment_date',
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_item ." AS 'lbl_azp_gsc_consignment_t_consignment_item',
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_honorary ." AS 'lbl_azp_gsc_consignment_t_honorary',
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nit_identification ." AS 'lbl_azp_gsc_consignment_t_nit_identification',
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned ." AS 'lbl_azp_gsc_consignment_t_to_consigned',
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_unique ." AS 'lbl_azp_gsc_consignment_t_value_unique',
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total ." AS 'lbl_azp_gsc_consignment_t_value_total',
						tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
						tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
						tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
						tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
						tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
						tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
						tc_azp_gsc_request." . d_azp_gsc_request_t_serial . " AS 'lbl_azp_gsc_request_t_serial',
						tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
					FROM " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_gsc_request . " tc_azp_gsc_request
						ON tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
							= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
						ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
							= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_item . " != ''
						AND (tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . " >= '" . $empty_date_since . "'
							AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . " <= '" . $empty_date_until . "')
						-- AND tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " IN (" . substr($var_client, 0, -1) . ")
					-- ---------------------------------------------------------------
					/*GROUP BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_item . " ASC,
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_account_number . " ASC,
						tc_azp_gsc_request." . d_azp_gsc_request_t_city . " ASC,
						tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . " ASC*/
				");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_report_consignment_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_report_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_report_consignment_m_date_created => DATE_HOUR,
							d_azp_report_consignment_m_date_modified => DATE_HOUR,
							d_azp_report_consignment_m_deleted => '1',
							d_azp_report_consignment_m_description => '',
							d_azp_report_consignment_m_level => '2',
							d_azp_report_consignment_m_status => '1',
							d_azp_report_consignment_m_temp => '1',
							d_azp_report_consignment_s_city => $key_sql['lbl_azp_gsc_request_t_city'],
							d_azp_report_consignment_s_entity => $key_sql['lbl_azp_gsc_client_t_name'],
							d_azp_report_consignment_s_full_name => $key_sql['lbl_azp_gsc_request_t_full_name'],
							d_azp_report_consignment_s_identification => $key_sql['lbl_azp_gsc_request_t_identification'],
							d_azp_report_consignment_s_notary => $key_sql['lbl_azp_gsc_request_t_notary'],
							d_azp_report_consignment_s_number_request => $key_sql['lbl_azp_gsc_request_t_number_request'],
							d_azp_report_consignment_s_serial => $key_sql['lbl_azp_gsc_request_t_serial'],
							d_azp_report_consignment_t_account_number => $key_sql['lbl_azp_gsc_consignment_t_account_number'],
							d_azp_report_consignment_t_account_type => $key_sql['lbl_azp_gsc_consignment_t_account_type'],
							d_azp_report_consignment_t_closed_value => $key_sql['lbl_azp_gsc_consignment_t_closed_value'],
							d_azp_report_consignment_t_consigned_entity => $key_sql['lbl_azp_gsc_consignment_t_consigned_entity'],
							d_azp_report_consignment_t_consignment_confirm => $key_sql['lbl_azp_gsc_consignment_t_consignment_confirm'],
							d_azp_report_consignment_t_consignment_date => $key_sql['lbl_azp_gsc_consignment_t_consignment_date'],
							d_azp_report_consignment_t_consignment_item => $key_sql['lbl_azp_gsc_consignment_t_consignment_item'],
							d_azp_report_consignment_t_honorary => $key_sql['lbl_azp_gsc_consignment_t_honorary'],
							d_azp_report_consignment_t_nit_identification => $key_sql['lbl_azp_gsc_consignment_t_nit_identification'],
							d_azp_report_consignment_t_to_consigned => $key_sql['lbl_azp_gsc_consignment_t_to_consigned'],
							d_azp_report_consignment_t_value_unique => $key_sql['lbl_azp_gsc_consignment_t_value_total'],
							d_azp_report_consignment_t_group_by => $empty_group_by,
							d_azp_report_consignment_t_formula => '0',
						);
						# Insertar valores en la nueva tabla que no existen
						$this->db->insert(t_azp_report_consignment, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT SUM(" . d_azp_report_consignment_t_closed_value . ") AS 'lbl_azp_report_consignment_t_closed_value',
						SUM(" . d_azp_report_consignment_t_honorary . ") AS 'lbl_azp_report_consignment_t_honorary',
						SUM(" . d_azp_report_consignment_t_value_unique . ") AS 'lbl_azp_report_consignment_t_value_unique'
					FROM " . t_azp_report_consignment . " tc_azp_report_consignment
					WHERE " . d_azp_report_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_report_consignment_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_report_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_report_consignment_m_date_created => DATE_HOUR,
							d_azp_report_consignment_m_date_modified => DATE_HOUR,
							d_azp_report_consignment_m_deleted => '1',
							d_azp_report_consignment_m_description => '',
							d_azp_report_consignment_m_level => '2',
							d_azp_report_consignment_m_status => '1',
							d_azp_report_consignment_m_temp => '1',
							d_azp_report_consignment_s_city => '',
							d_azp_report_consignment_s_entity => '',
							d_azp_report_consignment_s_full_name => '',
							d_azp_report_consignment_s_identification => '',
							d_azp_report_consignment_s_notary => '',
							d_azp_report_consignment_s_number_request => '',
							d_azp_report_consignment_s_serial => '',
							d_azp_report_consignment_t_account_number => 'Valor Total',
							d_azp_report_consignment_t_account_type => '',
							d_azp_report_consignment_t_closed_value => '',
							d_azp_report_consignment_t_consigned_entity => '',
							d_azp_report_consignment_t_consignment_confirm => '',
							d_azp_report_consignment_t_consignment_date => 'Valor Total',
							d_azp_report_consignment_t_consignment_item => '',
							d_azp_report_consignment_t_honorary => $key_sql['lbl_azp_report_consignment_t_honorary'],
							d_azp_report_consignment_t_nit_identification => '',
							d_azp_report_consignment_t_to_consigned => '',
							d_azp_report_consignment_t_value_unique => $key_sql['lbl_azp_report_consignment_t_value_unique'],
							d_azp_report_consignment_t_group_by => '',
							d_azp_report_consignment_t_formula => '2',
						);
						# Insertar valores en la nueva tabla que no existen
						$this->db->insert(t_azp_report_consignment, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select("MAX(" . d_azp_report_consignment_id_azp_report_consignment . ") AS 'lbl_max'", t_azp_report_consignment,
					d_azp_report_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_report_consignment_t_account_number . " != 'Valor Total'" . " " .
					"GROUP BY " . d_azp_report_consignment_t_account_number . " ASC, " .
						d_azp_report_consignment_t_consignment_date . " ASC, " .
						d_azp_report_consignment_t_consignment_item . " ASC, " .
						d_azp_report_consignment_t_closed_value . " ASC"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_id = $value['lbl_max'];
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_report_consignment_t_formula => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_report_consignment, $var_array, d_azp_report_consignment_id_azp_report_consignment . " = '" . $var_id . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT SUM(" . d_azp_report_consignment_t_closed_value . ") AS 'lbl_azp_report_consignment_t_closed_value',
						SUM(" . d_azp_report_consignment_t_honorary . ") AS 'lbl_azp_report_consignment_t_honorary',
						SUM(" . d_azp_report_consignment_t_value_unique . ") AS 'lbl_azp_report_consignment_t_value_unique'
					FROM " . t_azp_report_consignment . " tc_azp_report_consignment
					WHERE " . d_azp_report_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND " . d_azp_report_consignment_t_formula . " = '1'
				");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_report_consignment_t_closed_value => $key_sql['lbl_azp_report_consignment_t_closed_value'],);
						# Insertar valores en la nueva tabla que no existen
						$this->db->update(t_azp_report_consignment, $var_array,
							d_azp_report_consignment_t_formula . " = '2' AND " .
							d_azp_report_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
						);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_report_consignment_t_closed_value => '0',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_report_consignment, $var_array, d_azp_report_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_report_consignment_t_formula . " = '0'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro consultado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_consignment_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "' AND " . d_azp_gsc_consignment_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "' AND " . d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_consignment_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "' AND " . d_azp_gsc_consignment_m_level . " = '2'");
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
		final public function sql_azp_gsc_consignment_restore(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_restore($data);
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
				$var_array = array(d_azp_gsc_consignment_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_consignment_table(array $data) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# --------------------------------------------------------------------------------------------------
				/*$this->db->query("
					DELETE FROM " . t_azp_gsc_consignment . "
					WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND " . d_azp_gsc_consignment_m_deleted . " = '2'
						AND (" . d_azp_gsc_consignment_m_temp . " = '2'
							OR " . d_azp_gsc_consignment_m_temp . " = '3')"
				);*/
				# --------------------------------------------------------------------------------------------------
				$this->db->query("
					DELETE FROM " . t_azp_gsc_consignment . "
					WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND " . d_azp_gsc_consignment_m_deleted . " = '5'
						AND " . d_azp_gsc_consignment_m_temp . " = '2'
				");
				$this->db->query("DELETE FROM " . t_azp_gsc_update . " WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# --------------------------------------------------------------------------------------------------
				$var_id = $data['field_tb_id']; $var_nro_receipt = ''; $var_count = '';
				$var_implode = implode(',', $var_id);
				$empty_nduplicate = array();
				$empty_rduplicate = array();
				# --------------------------------------------------------------------------------------------------
				# Verificar si el registro existe en la tabla
				$var_sql = $this->db->select("*", t_azp_gsc_consignment,
					d_azp_gsc_consignment_id_azp_gsc_consignment . " IN (" . $var_implode . ") AND " .
					d_azp_gsc_consignment_m_deleted . " = '1' AND " .
					d_azp_gsc_consignment_m_temp . " = '1' AND " .
					d_azp_gsc_consignment_t_information . " = 'Principal'"
				);
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value) :
						# Asignacion de valores a nuevas variables
						$empty_nduplicate[] = $value[d_azp_gsc_consignment_id_azp_gsc_consignment];
						$empty_rduplicate[] = $value[d_azp_gsc_consignment_v_id_azp_gsc_request];
					endforeach;
					# Asignacion de valores a nuevas variables
					$var_impl_nduplicate = implode(',', $empty_nduplicate);
					$var_impl_rduplicate = implode(',', $empty_rduplicate);
					# Verificar si el registro existe en la tabla
					$var_sql = $this->db->select("*", t_azp_gsc_consignment,
						d_azp_gsc_consignment_v_id_azp_gsc_request . " IN (" . $var_impl_rduplicate . ") AND " .
						d_azp_gsc_consignment_m_deleted . " = '1' AND " .
						d_azp_gsc_consignment_m_temp . " = '1' AND " .
						d_azp_gsc_consignment_t_information . " = 'Adicional'"
					);
					# Validar si la consulta es verdadera
					if (true != $var_sql) {
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_gsc_consignment_t_duplicate => 'No',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " IN (" . $var_impl_nduplicate . ")");
					}
				}
				# --------------------------------------------------------------------------------------------------
				# Verificar si el registro existe en la tabla
				$var_sql = $this->db->select("*", t_azp_gsc_consignment,
					d_azp_gsc_consignment_id_azp_gsc_consignment . " IN (" . $var_implode . ") AND " .
					d_azp_gsc_consignment_m_deleted . " = '1' AND " .
					d_azp_gsc_consignment_m_temp . " = '1' AND " .
					d_azp_gsc_consignment_t_information . " = 'Principal' AND " .
					d_azp_gsc_consignment_t_duplicate . " = 'No'"
				);
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value) {
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_consignment_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_consignment_m_date_created => DATE_HOUR,
							d_azp_gsc_consignment_m_date_modified => DATE_HOUR,
							d_azp_gsc_consignment_m_deleted => '5',
							d_azp_gsc_consignment_m_description => '',
							d_azp_gsc_consignment_m_level => '2',
							d_azp_gsc_consignment_m_status => '1',
							d_azp_gsc_consignment_m_temp => '2',
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
							d_azp_gsc_consignment_t_consignment_code => '0',
							d_azp_gsc_consignment_t_consignment_confirm => '2',
							d_azp_gsc_consignment_t_consignment_date => '',
							d_azp_gsc_consignment_t_consignment_item => $value[d_azp_gsc_consignment_t_consignment_item],
							d_azp_gsc_consignment_t_honorary => '0',
							d_azp_gsc_consignment_t_nit_identification => '',
							d_azp_gsc_consignment_t_nro_receipt => 'Sin_Adicional',
							d_azp_gsc_consignment_t_observation => '',
							d_azp_gsc_consignment_t_to_consigned => '',
							d_azp_gsc_consignment_t_value_check => 'No',
							d_azp_gsc_consignment_t_value_divided => '0',
							d_azp_gsc_consignment_t_value_total => '0',
							d_azp_gsc_consignment_t_value_unique => '0',
							d_azp_gsc_consignment_t_information => 'Adicional',
							d_azp_gsc_consignment_t_duplicate => 'Si',
							d_azp_gsc_consignment_t_register => '',
							d_azp_gsc_consignment_t_check_item => 'Si',
							d_azp_gsc_consignment_t_nro_item => '0',
							d_azp_gsc_consignment_t_notary_consigned => '',
							d_azp_gsc_consignment_t_notary_identification => '',
							d_azp_gsc_consignment_t_notary_receipt => '',
							d_azp_gsc_consignment_t_notary_success => 'No',
							d_azp_gsc_consignment_v_id_azp_gsc_request => $value[d_azp_gsc_consignment_v_id_azp_gsc_request],
						);
						# Insertar valores en la nueva tabla que no existen
						$this->db->insert(t_azp_gsc_consignment, $var_array);
					}
				}
				# --------------------------------------------------------------------------------------------------
				$var_id = $data['field_tb_id']; $var_nro_receipt = ''; $var_count = '';
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
						d_azp_gsc_update_m_level => '2',
						d_azp_gsc_update_m_status => '1',
						d_azp_gsc_update_m_temp => '2',
						d_azp_gsc_update_v_id_azp_gsc_consignment => $value,
					);
					# Insertar valores en la nueva tabla que no existen
					$this->db->insert(t_azp_gsc_update, $var_array);
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_consignment,
					d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_gsc_consignment_m_deleted . " = '5' AND " . d_azp_gsc_consignment_m_temp . " = '2'
				");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_update_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_update_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_update_m_date_created => DATE_HOUR,
							d_azp_gsc_update_m_date_modified => DATE_HOUR,
							d_azp_gsc_update_m_deleted => '5',
							d_azp_gsc_update_m_level => '2',
							d_azp_gsc_update_m_status => '1',
							d_azp_gsc_update_m_temp => '2',
							d_azp_gsc_update_v_id_azp_gsc_consignment => $value[d_azp_gsc_consignment_id_azp_gsc_consignment],
						);
						# Insertar valores en la nueva tabla que no existen
						$this->db->insert(t_azp_gsc_update, $var_array);
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key => $value):
						$var_sql2 = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $value[d_azp_gsc_update_v_id_azp_gsc_consignment] . "'");
						# Validar si la consulta es verdadera
						if (false != $var_sql2) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql2 as $key2 => $valu2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_gsc_update_v_id_azp_gsc_request => $valu2[d_azp_gsc_consignment_v_id_azp_gsc_request],);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_gsc_update, $var_array, d_azp_gsc_update_v_id_azp_gsc_consignment . " = '" . $valu2[d_azp_gsc_consignment_id_azp_gsc_consignment] . "'");
							endforeach;
						}
					endforeach;
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
							d_azp_gsc_update_t_shipping_number => $key_sql[d_azp_gsc_request_t_shipping_number],
							d_azp_gsc_update_t_supplier_request_date => $key_sql[d_azp_gsc_request_t_supplier_request_date],
							d_azp_gsc_update_t_supplier_request_number => $key_sql[d_azp_gsc_request_t_supplier_request_number],
							d_azp_gsc_update_v_id_azp_gsc_causal => $key_sql[d_azp_gsc_request_v_id_azp_gsc_causal],
							d_azp_gsc_update_v_id_azp_gsc_client => $key_sql[d_azp_gsc_request_v_id_azp_gsc_client],
							d_azp_gsc_update_v_id_azp_gsc_expiration => $key_sql[d_azp_gsc_request_v_id_azp_gsc_expiration],
							d_azp_gsc_update_v_id_azp_gsc_phase => $key_sql[d_azp_gsc_request_v_id_azp_gsc_phase],
							d_azp_gsc_update_v_id_azp_gsc_state => $key_sql[d_azp_gsc_request_v_id_azp_gsc_state],
							d_azp_gsc_update_v_id_azp_gsc_request => $key_sql[d_azp_gsc_request_id_azp_gsc_request],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_update, $var_array,
							d_azp_gsc_update_v_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_request_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
						);
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_m_deleted . " = '1'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_update_t_information => $key_sql[d_azp_gsc_consignment_t_information],
							d_azp_gsc_update_t_nro_receipt => $key_sql[d_azp_gsc_consignment_t_nro_receipt],
							d_azp_gsc_update_t_consignment_item => $key_sql[d_azp_gsc_consignment_t_consignment_item],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_update, $var_array,
							d_azp_gsc_update_v_id_azp_gsc_consignment . " = '" . $key_sql[d_azp_gsc_consignment_id_azp_gsc_consignment] . "' AND " .
							d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
						);
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_consignment_m_deleted . " = '5'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_update_t_information => $key_sql[d_azp_gsc_consignment_t_information],
							d_azp_gsc_update_t_nro_receipt => $key_sql[d_azp_gsc_consignment_t_nro_receipt],
							d_azp_gsc_update_t_consignment_item => $key_sql[d_azp_gsc_consignment_t_consignment_item],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_update, $var_array,
							d_azp_gsc_update_v_id_azp_gsc_consignment . " = '" . $key_sql[d_azp_gsc_consignment_id_azp_gsc_consignment] . "' AND " .
							d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
						);
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->query("
					SELECT tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " AS 'lbl_azp_gsc_consignment_t_nro_receipt'
					FROM " . t_azp_gsc_update . " tc_azp_gsc_update

					INNER JOIN " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
						ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_consignment . "
							= tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . "

					WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					GROUP BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . "
				");
				# Validar si la consulta es verdadera
				if (false != $var_sql) { foreach ($var_sql as $key_sql => $value): $var_nro_receipt = $value['lbl_azp_gsc_consignment_t_nro_receipt']; endforeach; } else { $var_nro_receipt = ''; }
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->query("
					SELECT COUNT(lbl_result) AS 'lbl_count' FROM (
						SELECT COUNT(tc_azp_gsc_update." . d_azp_gsc_update_id_azp_gsc_update . ") AS 'lbl_result'
						FROM " . t_azp_gsc_update . " tc_azp_gsc_update
						
						INNER JOIN " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
						ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_consignment . "
							= tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . "

						WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						GROUP BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . "
					) AS lbl_from;
				");
				# Validar si la consulta es verdadera
				if (false != $var_sql) { foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach; } else { $var_count = ''; }
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos registrados correctamente.', 't_receipt' => $var_nro_receipt, 't_count' => $var_count);
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_consignment_receipt(array $data) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# --------------------------------------------------------------------------------------------------
				/*$this->db->query("
					DELETE FROM " . t_azp_gsc_consignment . "
					WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND " . d_azp_gsc_consignment_m_deleted . " = '2'
						AND (" . d_azp_gsc_consignment_m_temp . " = '2'
							OR " . d_azp_gsc_consignment_m_temp . " = '3')"
				);*/
				# --------------------------------------------------------------------------------------------------
				$this->db->query("
					DELETE FROM " . t_azp_gsc_consignment . "
					WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND " . d_azp_gsc_consignment_m_deleted . " = '5'
						AND " . d_azp_gsc_consignment_m_temp . " = '2'
				");
				$this->db->query("DELETE FROM " . t_azp_gsc_update . " WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# --------------------------------------------------------------------------------------------------
				$var_id = $data['field_tb_id']; $var_nro_receipt = ''; $var_count = '';
				$var_implode = implode(',', $var_id);
				$empty_nduplicate = array();
				$empty_rduplicate = array();
				# --------------------------------------------------------------------------------------------------
				# Verificar si el registro existe en la tabla
				$var_sql = $this->db->select("*", t_azp_gsc_consignment,
					d_azp_gsc_consignment_id_azp_gsc_consignment . " IN (" . $var_implode . ") AND " .
					d_azp_gsc_consignment_m_deleted . " = '1' AND " .
					d_azp_gsc_consignment_m_temp . " = '1' AND " .
					d_azp_gsc_consignment_t_information . " = 'Principal'"
				);
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value) :
						# Asignacion de valores a nuevas variables
						$empty_nduplicate[] = $value[d_azp_gsc_consignment_id_azp_gsc_consignment];
						$empty_rduplicate[] = $value[d_azp_gsc_consignment_v_id_azp_gsc_request];
					endforeach;
					# Asignacion de valores a nuevas variables
					$var_impl_nduplicate = implode(',', $empty_nduplicate);
					$var_impl_rduplicate = implode(',', $empty_rduplicate);
					# Verificar si el registro existe en la tabla
					$var_sql = $this->db->select("*", t_azp_gsc_consignment,
						d_azp_gsc_consignment_v_id_azp_gsc_request . " IN (" . $var_impl_rduplicate . ") AND " .
						d_azp_gsc_consignment_m_deleted . " = '1' AND " .
						d_azp_gsc_consignment_m_temp . " = '1' AND " .
						d_azp_gsc_consignment_t_information . " = 'Adicional'"
					);
					# Validar si la consulta es verdadera
					if (true != $var_sql) {
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_gsc_consignment_t_duplicate => 'No',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " IN (" . $var_impl_nduplicate . ")");
					}
				}
				# --------------------------------------------------------------------------------------------------
				# Verificar si el registro existe en la tabla
				/*$var_sql = $this->db->select("*", t_azp_gsc_consignment,
					d_azp_gsc_consignment_id_azp_gsc_consignment . " IN (" . $var_implode . ") AND " .
					d_azp_gsc_consignment_m_deleted . " = '1' AND " .
					d_azp_gsc_consignment_m_temp . " = '1' AND " .
					d_azp_gsc_consignment_t_information . " = 'Principal' AND " .
					d_azp_gsc_consignment_t_duplicate . " = 'No'"
				);
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value) {
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_consignment_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_consignment_m_date_created => DATE_HOUR,
							d_azp_gsc_consignment_m_date_modified => DATE_HOUR,
							d_azp_gsc_consignment_m_deleted => '5',
							d_azp_gsc_consignment_m_description => '',
							d_azp_gsc_consignment_m_level => '2',
							d_azp_gsc_consignment_m_status => '1',
							d_azp_gsc_consignment_m_temp => '2',
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
							d_azp_gsc_consignment_t_consignment_code => '0',
							d_azp_gsc_consignment_t_consignment_confirm => '2',
							d_azp_gsc_consignment_t_consignment_date => '',
							d_azp_gsc_consignment_t_consignment_item => $value[d_azp_gsc_consignment_t_consignment_item],
							d_azp_gsc_consignment_t_honorary => '0',
							d_azp_gsc_consignment_t_nit_identification => '',
							d_azp_gsc_consignment_t_nro_receipt => 'Sin_Adicional',
							d_azp_gsc_consignment_t_observation => '',
							d_azp_gsc_consignment_t_to_consigned => '',
							d_azp_gsc_consignment_t_value_check => 'No',
							d_azp_gsc_consignment_t_value_divided => '0',
							d_azp_gsc_consignment_t_value_total => '0',
							d_azp_gsc_consignment_t_value_unique => '0',
							d_azp_gsc_consignment_t_information => 'Adicional',
							d_azp_gsc_consignment_t_duplicate => 'Si',
							d_azp_gsc_consignment_t_register => '',
							d_azp_gsc_consignment_t_check_item => 'Si',
							d_azp_gsc_consignment_t_nro_item => '0',
							d_azp_gsc_consignment_t_notary_consigned => '',
							d_azp_gsc_consignment_t_notary_identification => '',
							d_azp_gsc_consignment_t_notary_receipt => '',
							d_azp_gsc_consignment_t_notary_success => 'No',
							d_azp_gsc_consignment_v_id_azp_gsc_request => $value[d_azp_gsc_consignment_v_id_azp_gsc_request],
						);
						# Insertar valores en la nueva tabla que no existen
						$this->db->insert(t_azp_gsc_consignment, $var_array);
					}
				}*/
				# --------------------------------------------------------------------------------------------------
				$var_id = $data['field_tb_id']; $var_nro_receipt = ''; $var_count = '';
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
						d_azp_gsc_update_m_level => '2',
						d_azp_gsc_update_m_status => '1',
						d_azp_gsc_update_m_temp => '2',
						d_azp_gsc_update_v_id_azp_gsc_consignment => $value,
					);
					# Insertar valores en la nueva tabla que no existen
					$this->db->insert(t_azp_gsc_update, $var_array);
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_consignment,
					d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_gsc_consignment_m_deleted . " = '5' AND " . d_azp_gsc_consignment_m_temp . " = '2'
				");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_update_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_update_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_update_m_date_created => DATE_HOUR,
							d_azp_gsc_update_m_date_modified => DATE_HOUR,
							d_azp_gsc_update_m_deleted => '5',
							d_azp_gsc_update_m_level => '2',
							d_azp_gsc_update_m_status => '1',
							d_azp_gsc_update_m_temp => '2',
							d_azp_gsc_update_v_id_azp_gsc_consignment => $value[d_azp_gsc_consignment_id_azp_gsc_consignment],
						);
						# Insertar valores en la nueva tabla que no existen
						$this->db->insert(t_azp_gsc_update, $var_array);
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key => $value):
						$var_sql2 = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $value[d_azp_gsc_update_v_id_azp_gsc_consignment] . "'");
						# Validar si la consulta es verdadera
						if (false != $var_sql2) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql2 as $key2 => $valu2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_gsc_update_v_id_azp_gsc_request => $valu2[d_azp_gsc_consignment_v_id_azp_gsc_request],);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_gsc_update, $var_array, d_azp_gsc_update_v_id_azp_gsc_consignment . " = '" . $valu2[d_azp_gsc_consignment_id_azp_gsc_consignment] . "'");
							endforeach;
						}
					endforeach;
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
							d_azp_gsc_update_t_shipping_number => $key_sql[d_azp_gsc_request_t_shipping_number],
							d_azp_gsc_update_t_supplier_request_date => $key_sql[d_azp_gsc_request_t_supplier_request_date],
							d_azp_gsc_update_t_supplier_request_number => $key_sql[d_azp_gsc_request_t_supplier_request_number],
							d_azp_gsc_update_v_id_azp_gsc_causal => $key_sql[d_azp_gsc_request_v_id_azp_gsc_causal],
							d_azp_gsc_update_v_id_azp_gsc_client => $key_sql[d_azp_gsc_request_v_id_azp_gsc_client],
							d_azp_gsc_update_v_id_azp_gsc_expiration => $key_sql[d_azp_gsc_request_v_id_azp_gsc_expiration],
							d_azp_gsc_update_v_id_azp_gsc_phase => $key_sql[d_azp_gsc_request_v_id_azp_gsc_phase],
							d_azp_gsc_update_v_id_azp_gsc_state => $key_sql[d_azp_gsc_request_v_id_azp_gsc_state],
							d_azp_gsc_update_v_id_azp_gsc_request => $key_sql[d_azp_gsc_request_id_azp_gsc_request],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_update, $var_array,
							d_azp_gsc_update_v_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_request_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
						);
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_m_deleted . " = '1'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_update_t_information => $key_sql[d_azp_gsc_consignment_t_information],
							d_azp_gsc_update_t_nro_receipt => $key_sql[d_azp_gsc_consignment_t_nro_receipt],
							d_azp_gsc_update_t_consignment_item => $key_sql[d_azp_gsc_consignment_t_consignment_item],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_update, $var_array,
							d_azp_gsc_update_v_id_azp_gsc_consignment . " = '" . $key_sql[d_azp_gsc_consignment_id_azp_gsc_consignment] . "' AND " .
							d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
						);
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_consignment_m_deleted . " = '5'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_update_t_information => $key_sql[d_azp_gsc_consignment_t_information],
							d_azp_gsc_update_t_nro_receipt => $key_sql[d_azp_gsc_consignment_t_nro_receipt],
							d_azp_gsc_update_t_consignment_item => $key_sql[d_azp_gsc_consignment_t_consignment_item],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_update, $var_array,
							d_azp_gsc_update_v_id_azp_gsc_consignment . " = '" . $key_sql[d_azp_gsc_consignment_id_azp_gsc_consignment] . "' AND " .
							d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
						);
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->query("
					SELECT tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " AS 'lbl_azp_gsc_consignment_t_nro_receipt'
					FROM " . t_azp_gsc_update . " tc_azp_gsc_update

					INNER JOIN " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
						ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_consignment . "
							= tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . "

					WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					GROUP BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . "
				");
				# Validar si la consulta es verdadera
				if (false != $var_sql) { foreach ($var_sql as $key_sql => $value): $var_nro_receipt = $value['lbl_azp_gsc_consignment_t_nro_receipt']; endforeach; } else { $var_nro_receipt = ''; }
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->query("
					SELECT COUNT(lbl_result) AS 'lbl_count' FROM (
						SELECT COUNT(tc_azp_gsc_update." . d_azp_gsc_update_id_azp_gsc_update . ") AS 'lbl_result'
						FROM " . t_azp_gsc_update . " tc_azp_gsc_update
						
						INNER JOIN " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
						ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_consignment . "
							= tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . "

						WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						GROUP BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . "
					) AS lbl_from;
				");
				# Validar si la consulta es verdadera
				if (false != $var_sql) { foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach; } else { $var_count = ''; }
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos registrados correctamente.', 't_receipt' => $var_nro_receipt, 't_count' => $var_count);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		/*final private function error_sql_azp_gsc_consignment_up_all(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_upall_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_upall_account_number'])) { throw new Exception('<b>Error:</b> El campo de numero cuenta prohibido modificar.'); }
				if (!isset($data['field_upall_account_type'])) { throw new Exception('<b>Error:</b> El campo de tipo de cuenta esta prohibido modificar.'); }
				if (!isset($data['field_upall_closed_value'])) { throw new Exception('<b>Error:</b> El campo de valor cerrado esta prohibido modificar.'); }
				if (!isset($data['field_upall_consigned_entity'])) { throw new Exception('<b>Error:</b> El campo de entidad consignada esta prohibido modificar.'); }
				if (!isset($data['field_upall_consignment_item'])) { throw new Exception('<b>Error:</b> El campo de item consignacion esta prohibido modificar.'); }
				if (!isset($data['field_upall_consignment_date'])) { throw new Exception('<b>Error:</b> El campo de fecha consignacion esta prohibido modificar.'); }
				//if (!isset($data['field_upall_honorary'])) { throw new Exception('<b>Error:</b> El campo de honorarios esta prohibido modificar.'); }
				if (!isset($data['field_upall_nit_identification'])) { throw new Exception('<b>Error:</b> El campo de nit o cedula esta prohibido modificar.'); }
				if (!isset($data['field_upall_to_consigned'])) { throw new Exception('<b>Error:</b> El campo de a quien consigno esta prohibido modificar.'); }

				if (!isset($data['field_upall_value_check'])) { throw new Exception('<b>Error:</b> El campo de valor chequeado esta prohibido modificar.'); }
				//if (!isset($data['field_upall_value_divided'])) { throw new Exception('<b>Error:</b> El campo de valor dividido esta prohibido modificar.'); }
				if (!isset($data['field_upall_value_unique'])) { throw new Exception('<b>Error:</b> El campo de valor unico esta prohibido modificar.'); }
				//if (!isset($data['field_upall_value_total'])) { throw new Exception('<b>Error:</b> El campo de valor total esta prohibido modificar.'); }
				//if (!isset($data['field_upall_nro_receipt'])) { throw new Exception('<b>Error:</b> El campo de numero de recibo esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_upall_description']);
				$empty_account_number = $this->db->scape($data['field_upall_account_number']);
				$empty_account_type = $this->db->scape($data['field_upall_account_type']);
				$empty_closed_value = $this->db->scape($data['field_upall_closed_value']);
				$empty_consigned_entity = $this->db->scape($data['field_upall_consigned_entity']);
				$empty_consignment_item = $this->db->scape($data['field_upall_consignment_item']);
				$empty_consignment_date = $this->db->scape($data['field_upall_consignment_date']);
				//$empty_honorary = $this->db->scape($data['field_upall_honorary']);
				$empty_nit_identification = $this->db->scape($data['field_upall_nit_identification']);
				$empty_to_consigned = $this->db->scape($data['field_upall_to_consigned']);

				$empty_value_check = $this->db->scape($data['field_upall_value_check']);
				//$empty_value_divided = $this->db->scape($data['field_upall_value_divided']);
				$empty_value_unique = $this->db->scape($data['field_upall_value_unique']);
				//$empty_value_total = $this->db->scape($data['field_upall_value_total']);
				//$empty_nro_receipt = $this->db->scape($data['field_upall_nro_receipt']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_account_number)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de numero cuenta es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_account_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de cuenta es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_closed_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor cerrado es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_consigned_entity)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de entidad consignada es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_consignment_item)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de item consignacion es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_nit_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nit o cedula es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_to_consigned)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de a quien se consigno es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value_check)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor check es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				//if (Func::emp($empty_nro_receipt)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de numero recibo es oblgitario.');
				}//
				#-------------------------------------------------------------------------#
				if ($empty_value_check == 'SI' && $empty_value_unique == '$ 0.00') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor total es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}*/

		/*=========================================================================================================================*/
		# Query Sql Update
		/*final public function sql_azp_gsc_consignment_up_all(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_up_all($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_upall_description']);
				$empty_account_number = $this->db->scape($data['field_upall_account_number']);
				$empty_account_type = $this->db->scape($data['field_upall_account_type']);
				$empty_closed_value = $this->db->scape($data['field_upall_closed_value']);
				$empty_consigned_entity = $this->db->scape($data['field_upall_consigned_entity']);
				$empty_consignment_item = $this->db->scape($data['field_upall_consignment_item']);
				$empty_consignment_date = $this->db->scape($data['field_upall_consignment_date']);
				//$empty_honorary = $this->db->scape($data['field_upall_honorary']);
				$empty_nit_identification = $this->db->scape($data['field_upall_nit_identification']);
				$empty_to_consigned = $this->db->scape($data['field_upall_to_consigned']);
				
				$empty_value_check = $this->db->scape($data['field_upall_value_check']);
				//$empty_value_divided = $this->db->scape($data['field_upall_value_divided']);
				$empty_value_unique = $this->db->scape($data['field_upall_value_unique']);
				//$empty_value_total = $this->db->scape($data['field_upall_value_total']);
				//$empty_nro_receipt = $this->db->scape($data['field_upall_nro_receipt']);

				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				#-------------------------------------------------------------------------#
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) { foreach ($var_sql as $key => $value): $var_register = $value['lbl_count']; endforeach; } else { $var_register = 0; }
				#-------------------------------------------------------------------------#

				if ($empty_value_check == 'SI') {
					$var_value_divided = 0;
					$var_value_unique = str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_value_unique)));
					$var_value_total = str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_value_unique)));
				} else {
					$var_value_divided = str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_closed_value))) / $var_register;
					$var_value_unique = 0;
					$var_value_total = str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_closed_value))) / $var_register;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_array = array(
							d_azp_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_consignment_m_date_modified => DATE_HOUR,
							d_azp_gsc_consignment_m_description => $empty_description,
							d_azp_gsc_consignment_t_account_number => $empty_account_number,
							d_azp_gsc_consignment_t_account_type => ucwords(strtolower($empty_account_type)),
							d_azp_gsc_consignment_t_closed_value => str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_closed_value))),
							d_azp_gsc_consignment_t_consigned_entity => ucwords(strtolower($empty_consigned_entity)),
							d_azp_gsc_consignment_t_consignment_date => $empty_consignment_date,
							//d_azp_gsc_consignment_t_honorary => str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_honorary))),
							d_azp_gsc_consignment_t_nit_identification => $empty_nit_identification,
							d_azp_gsc_consignment_t_to_consigned => ucwords(strtolower($empty_to_consigned)),

							//d_azp_gsc_consignment_t_nro_receipt => strtoupper($empty_nro_receipt),
							d_azp_gsc_consignment_t_value_check => ucwords(strtolower($empty_value_check)),
							d_azp_gsc_consignment_t_value_divided => ucwords(strtolower($var_value_divided)),
							d_azp_gsc_consignment_t_value_total => ucwords(strtolower($var_value_total)),
							d_azp_gsc_consignment_t_value_unique => ucwords(strtolower($var_value_unique)),
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_v_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_a = $this->db->query("
					SELECT MAX(" . d_azp_gsc_consignment_t_consignment_code . ") AS 'lbl_azp_gsc_consignment_t_consignment_code'
					FROM " . t_azp_gsc_consignment . "
					WHERE " . d_azp_gsc_consignment_t_consignment_date . " = '" . $empty_consignment_date . "'
					GROUP BY " . d_azp_gsc_consignment_t_consignment_code . "
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_a) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_a as $key_sql_a):
						$var_code = $key_sql_a['lbl_azp_gsc_consignment_t_consignment_code'] + 1;
					endforeach;
				}

				$var_sql_b = $this->db->query("
					SELECT * FROM " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
					INNER JOIN " . t_azp_gsc_update . " tc_azp_gsc_update
						ON tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
							= tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_request . "
					WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_code . " = '0'
						AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . " = '" . $empty_consignment_date . "'
						AND tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'

				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_b) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_b as $key_sql_b):
						# Nuevos valores ajustados en variables asignadas
						$var_item = $key_sql_b[d_azp_gsc_consignment_t_consignment_date] . '_' . $var_code;
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_consignment_t_consignment_code => $var_code, d_azp_gsc_consignment_t_consignment_item => $var_item,);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $key_sql_b[d_azp_gsc_consignment_id_azp_gsc_consignment] . "'");
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
							d_azp_gsc_observation_internal_t_observation => 'Se confirman datos de consignacion.',
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_observation_internal, $var_array);
						#-------------------------------------------------------------------------#
						$var_array = array(d_azp_gsc_request_t_observation => $empty_consignment_date . ' ' . 'Se confirman datos de consignacion.',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
						#-------------------------------------------------------------------------#
						$var_array = array(d_azp_gsc_consignment_t_observation => $empty_consignment_date . ' ' . 'Se confirman datos de consignacion.',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_consignment] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}*/

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_consignment_honorary(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_hr_honorary'])) { throw new Exception('<b>Error:</b> El campo de honorarios esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_honorary = $this->db->scape($data['field_hr_honorary']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_honorary)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de honorarios es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_gsc_consignment_honorary(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_honorary($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_honorary = $this->db->scape($data['field_hr_honorary']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_array = array(d_azp_gsc_consignment_t_honorary => str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_honorary))),);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_v_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_consignment_update(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_up_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				//if (!isset($data['field_up_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				$empty_description = $this->db->scape($data['field_up_description']);
				//$empty_state = $this->db->scape($data['field_up_state']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_account_number'])) { throw new Exception('<b>Error:</b> El campo de numero cuenta prohibido modificar.'); }
				if (!isset($data['field_up_account_type'])) { throw new Exception('<b>Error:</b> El campo de tipo de cuenta esta prohibido modificar.'); }
				if (!isset($data['field_up_closed_value'])) { throw new Exception('<b>Error:</b> El campo de valor cerrado esta prohibido modificar.'); }
				if (!isset($data['field_up_consigned_entity'])) { throw new Exception('<b>Error:</b> El campo de entidad consignada esta prohibido modificar.'); }
				if (!isset($data['field_up_consignment_item'])) { throw new Exception('<b>Error:</b> El campo de item consignacion esta prohibido modificar.'); }
				if (!isset($data['field_up_consignment_date'])) { throw new Exception('<b>Error:</b> El campo de fecha consignacion esta prohibido modificar.'); }
				if (!isset($data['field_up_nit_identification'])) { throw new Exception('<b>Error:</b> El campo de nit o cedula esta prohibido modificar.'); }
				if (!isset($data['field_up_to_consigned'])) { throw new Exception('<b>Error:</b> El campo de a quien consigno esta prohibido modificar.'); }
				if (!isset($data['field_up_gsc_request'])) { throw new Exception('<b>Error:</b> El campo de solicitud esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_account_number = $this->db->scape($data['field_up_account_number']);
				$empty_account_type = $this->db->scape($data['field_up_account_type']);
				$empty_closed_value = $this->db->scape($data['field_up_closed_value']);
				$empty_consigned_entity = $this->db->scape($data['field_up_consigned_entity']);
				$empty_consignment_item = $this->db->scape($data['field_up_consignment_item']);
				$empty_consignment_date = $this->db->scape($data['field_up_consignment_date']);
				$empty_nit_identification = $this->db->scape($data['field_up_nit_identification']);
				$empty_to_consigned = $this->db->scape($data['field_up_to_consigned']);
				$empty_gsc_request = $this->db->scape($data['field_up_gsc_request']);
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
				if (Func::emp($empty_account_number)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de numero cuenta es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_account_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de cuenta es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_closed_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor cerrado es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_consigned_entity)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de entidad consignada es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_consignment_item)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de item consignacion es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_consignment_date)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha consignacion es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_nit_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nit o cedula es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_to_consigned)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de a quien se consigno es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_gsc_request) || strtolower($empty_gsc_request) == strtolower('seleccionar') || $empty_gsc_request == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_gsc_request)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_state) || strtolower($empty_state) == strtolower('seleccionar') || $empty_state == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_state)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "' AND " . d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_consignment_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "' AND " . d_azp_gsc_consignment_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_gsc_request = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $empty_gsc_request . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_gsc_request) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_gsc_request) == '') { $sql_gsc_request[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_gsc_request[0][0]) != strtolower($empty_gsc_request)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La solicitud seleccionada no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				/*$sql_state = $this->db->select('*', t_azp_sys_state, d_azp_sys_state_id_azp_sys_state . " = '" . $empty_state . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_state) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_state) == '') { $sql_state[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_state[0][0]) != strtolower($empty_state)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El estado seleccionado no se encuentra registrado.');
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
		/*final public function sql_azp_gsc_consignment_update(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_update($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				$empty_description = $this->db->scape($data['field_up_description']);
				//$empty_state = $this->db->scape($data['field_up_state']);
				#-------------------------------------------------------------------------#
				$empty_account_number = $this->db->scape($data['field_up_account_number']);
				$empty_account_type = $this->db->scape($data['field_up_account_type']);
				$empty_closed_value = $this->db->scape($data['field_up_closed_value']);
				$empty_consigned_entity = $this->db->scape($data['field_up_consigned_entity']);
				$empty_consignment_item = $this->db->scape($data['field_up_consignment_item']);
				$empty_consignment_date = $this->db->scape($data['field_up_consignment_date']);
				$empty_nit_identification = $this->db->scape($data['field_up_nit_identification']);
				$empty_to_consigned = $this->db->scape($data['field_up_to_consigned']);
				$empty_gsc_request = $this->db->scape($data['field_up_gsc_request']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_gsc_consignment_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_gsc_consignment_m_date_created => DATE_HOUR,
							d_azs_gsc_consignment_m_date_modified => DATE_HOUR,
							d_azs_gsc_consignment_m_deleted => $key_sql_select[d_azp_gsc_consignment_m_deleted],
							d_azs_gsc_consignment_m_description => $key_sql_select[d_azp_gsc_consignment_m_description],
							d_azs_gsc_consignment_m_level => $key_sql_select[d_azp_gsc_consignment_m_level],
							d_azs_gsc_consignment_m_status => $key_sql_select[d_azp_gsc_consignment_m_status],
							d_azs_gsc_consignment_m_temp => $key_sql_select[d_azp_gsc_consignment_m_temp],
							d_azs_gsc_consignment_t_account_number => $key_sql_select[d_azp_gsc_consignment_t_account_number],
							d_azs_gsc_consignment_t_account_type => ucwords(strtolower($key_sql_select[d_azp_gsc_consignment_t_account_type])),
							d_azs_gsc_consignment_t_closed_value => $key_sql_select[d_azp_gsc_consignment_t_closed_value],
							d_azs_gsc_consignment_t_consigned_entity => ucwords(strtolower($key_sql_select[d_azp_gsc_consignment_t_consigned_entity])),
							d_azs_gsc_consignment_t_consignment_item => $key_sql_select[d_azp_gsc_consignment_t_consignment_item],
							d_azs_gsc_consignment_t_consignment_date => $key_sql_select[d_azp_gsc_consignment_t_consignment_date],
							d_azs_gsc_consignment_t_nit_identification => $key_sql_select[d_azp_gsc_consignment_t_nit_identification],
							d_azs_gsc_consignment_t_to_consigned => ucwords(strtolower($key_sql_select[d_azp_gsc_consignment_t_to_consigned])),
							d_azs_gsc_consignment_u_gsc_request => $key_sql_select[d_azp_gsc_consignment_v_id_azp_gsc_request],
							d_azs_gsc_consignment_v_id_azp_gsc_consignment => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_gsc_consignment, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_consignment_m_date_modified => DATE_HOUR,
					d_azp_gsc_consignment_m_description => $empty_description,
					//d_azp_gsc_consignment_m_status => $empty_state,
					d_azp_gsc_consignment_t_account_number => $empty_account_number,
					d_azp_gsc_consignment_t_account_type => ucwords(strtolower($empty_account_type)),
					d_azp_gsc_consignment_t_closed_value => $empty_closed_value,
					d_azp_gsc_consignment_t_consigned_entity => ucwords(strtolower($empty_consigned_entity)),
					d_azp_gsc_consignment_t_consignment_item => $empty_consignment_item,
					d_azp_gsc_consignment_t_consignment_date => $empty_consignment_date,
					d_azp_gsc_consignment_t_nit_identification => $empty_nit_identification,
					d_azp_gsc_consignment_t_to_consigned => ucwords(strtolower($empty_to_consigned)),
					d_azp_gsc_consignment_v_id_azp_gsc_request => $empty_gsc_request,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}*/

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_consignment_user(array $data) {
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
		final public function sql_azp_gsc_consignment_third_parties(array $data) {
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
		final public function sql_distinct_tc_azp_gsc_request() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT DISTINCT " . d_azp_gsc_request_t_number_request . "
				FROM " . t_azp_gsc_request . "
				WHERE " . d_azp_gsc_request_m_deleted . " = '1'
					AND " . d_azp_gsc_request_m_status . " = '1'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_request() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_m_deleted . " = '1' AND " . d_azp_gsc_request_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_third_parties() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_third_parties, d_azp_gsc_third_parties_m_deleted . " = '1' AND " . d_azp_gsc_third_parties_m_status . " = '1'", "GROUP BY " . d_azp_gsc_third_parties_t_business_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_user() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " > 2 AND " . d_azp_user_m_deleted . " = '1' AND " . d_azp_user_m_status . " = '1' AND " . d_azp_user_v_id_azp_application . " = '3'");
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
		final public function sql_controller_value() {
			# Consulta para identificar los nuevos registros en la tabla
			$this->db->query("TRUNCATE TABLE " . t_azp_report_consignment);
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_account_number . " AS 'lbl_azp_gsc_consignment_t_account_number',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_account_type . " AS 'lbl_azp_gsc_consignment_t_account_type',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_closed_value . " AS 'lbl_azp_gsc_consignment_t_closed_value',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consigned_entity . " AS 'lbl_azp_gsc_consignment_t_consigned_entity',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_confirm . " AS 'lbl_azp_gsc_consignment_t_consignment_confirm',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . " AS 'lbl_azp_gsc_consignment_t_consignment_date',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_item . " AS 'lbl_azp_gsc_consignment_t_consignment_item',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_honorary . " AS 'lbl_azp_gsc_consignment_t_honorary',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nit_identification . " AS 'lbl_azp_gsc_consignment_t_nit_identification',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned . " AS 'lbl_azp_gsc_consignment_t_to_consigned'
				FROM " . t_azp_gsc_update . " tc_azp_gsc_update
				INNER JOIN " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_request . "
						= tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "

				INNER JOIN " . t_azp_gsc_request . " tc_azp_gsc_request
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "

				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "

				WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'

				GROUP BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_item . " ASC,
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " ASC,
					tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . " ASC
				ORDER BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " ASC
			");
			# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
			foreach ($var_sql as $key => $value) {
				# Organizacion de los valores capturados y asignados a los campos a insertar
				$var_array = array(
					d_azp_report_consignment_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_report_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_report_consignment_m_date_created => DATE_HOUR,
					d_azp_report_consignment_m_date_modified => DATE_HOUR,
					d_azp_report_consignment_m_deleted => '1',
					d_azp_report_consignment_m_description => '',
					d_azp_report_consignment_m_level => '2',
					d_azp_report_consignment_m_status => '1',
					d_azp_report_consignment_m_temp => '1',
					d_azp_report_consignment_s_city => '',
					d_azp_report_consignment_s_entity => '',
					d_azp_report_consignment_s_full_name => '',
					d_azp_report_consignment_s_identification => '',
					d_azp_report_consignment_s_notary => '',
					d_azp_report_consignment_s_number_request => '',
					d_azp_report_consignment_s_serial => '',
					d_azp_report_consignment_t_account_number => $value['lbl_azp_gsc_consignment_t_account_number'],
					d_azp_report_consignment_t_account_type => $value['lbl_azp_gsc_consignment_t_account_type'],
					d_azp_report_consignment_t_closed_value => $value['lbl_azp_gsc_consignment_t_closed_value'],
					d_azp_report_consignment_t_consigned_entity => $value['lbl_azp_gsc_consignment_t_consigned_entity'],
					d_azp_report_consignment_t_consignment_confirm => $value['lbl_azp_gsc_consignment_t_consignment_confirm'],
					d_azp_report_consignment_t_consignment_date => $value['lbl_azp_gsc_consignment_t_consignment_date'],
					d_azp_report_consignment_t_consignment_item => $value['lbl_azp_gsc_consignment_t_consignment_item'],
					d_azp_report_consignment_t_honorary => $value['lbl_azp_gsc_consignment_t_honorary'],
					d_azp_report_consignment_t_nit_identification => $value['lbl_azp_gsc_consignment_t_nit_identification'],
					d_azp_report_consignment_t_to_consigned => $value['lbl_azp_gsc_consignment_t_to_consigned'],
				);
				# Insertar valores en la nueva tabla que no existen
				$this->db->insert(t_azp_report_consignment, $var_array);
			}

			return $this->db->select("SUM(" . d_azp_report_consignment_t_closed_value . ") AS 'lbl_azp_gsc_report_consignment_t_closed_value' ",
				t_azp_report_consignment, d_azp_report_consignment_m_deleted . " = '1' AND " . d_azp_report_consignment_m_deleted . " = '" . $_SESSION[SESS_APP_ID] . "'");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_data_get() {
			# Control para la validacion de datos get
			if (isset($_GET['field_em_id'])) {
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_third_parties, d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $_GET['field_em_id'] . "'");
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
			if (isset($_GET['field_em_business_name'])) {
				# Seleccionar los registros de la tabla
				return $this->db->query("
					-- ---------------------------------------------------------------
					SELECT " . d_azp_gsc_third_parties_t_business_name . " AS 'lbl_azp_gsc_third_parties_t_business_name'
					FROM " . t_azp_gsc_third_parties . "
					-- ---------------------------------------------------------------
					WHERE " . d_azp_gsc_third_parties_id_azp_gsc_third_parties . " = '" . $_GET['field_em_business_name'] . "'
						AND " . d_azp_gsc_consignment_m_deleted . " = '1'
						AND " . d_azp_gsc_consignment_m_status . " = '1'
				");
			}
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
		# Query Sql Select
		final public function sql_azp_gsc_consignment_compress() {
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
				$var_sql = $this->db->select('*', t_azp_gsc_consignment,
					d_azp_gsc_consignment_v_id_azp_gsc_request . " IN (SELECT " .
						d_azp_gsc_update_v_id_azp_gsc_request . " FROM " . t_azp_gsc_update .
						" WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'" .
					") AND " . d_azp_gsc_consignment_s_file_document . " != '' GROUP BY " .
					d_azp_gsc_consignment_s_file_document . " ASC
				");
				#-------------------------------------------------------------------------#
				if (false != $var_sql) {
					foreach ($var_sql as $key_sql => $value_sql) {
						$var_id = $value_sql[d_azp_gsc_consignment_id_azp_gsc_consignment];
						$var_docum = $value_sql[d_azp_gsc_consignment_s_file_document];
						$var_route = $value_sql[d_azp_gsc_consignment_s_file_route];
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
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos comprimidos correctamente.', 'encode' => $var_base_64, 'compressed' => $var_zip_name,);
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_client() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_client, d_azp_gsc_client_id_azp_gsc_client . " > 1 AND " . d_azp_gsc_client_m_deleted . " = '1' AND " . d_azp_gsc_client_m_status . " = '1'");
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
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_nclient() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_client, d_azp_gsc_client_m_deleted . " = '1' AND " . d_azp_gsc_client_m_status . " = '1'", "GROUP BY " . d_azp_gsc_client_t_name . " ASC");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_consignment_multiple(array $data) {
			try {
				#-------------------------------------------------------------------------#
				/*if (!isset($data['field_up_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);*/
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_gsc_consignment_multiple(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_multiple($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$var_id = $data['field_tb_id'];
				$var_to_consigned = $data['field_tb_to_consigned'];
				$var_nit_identification = $data['field_tb_nit_identification'];
				$var_consigned_entity = $data['field_tb_consigned_entity'];
				$var_account_type = $data['field_tb_account_type'];
				$var_account_number = $data['field_tb_account_number'];
				$var_closed_value = $data['field_tb_closed_value'];
				$var_value_check = $data['field_tb_value_check'];
				$var_value_unique = $data['field_tb_value_unique'];
				$var_consignment_date = $data['field_tb_consignment_date'];
				$var_nro_receipt = $data['field_tb_nro_receipt'];
				$var_description = $data['field_tb_description'];
				//$var_notary_consigned = $data['field_tb_notary_consigned'];
				//$var_notary_identification = $data['field_tb_notary_identification'];
				//$var_notary_receipt = $data['field_tb_notary_receipt'];
				#-------------------------------------------------------------------------#
				# Recorrer los datos uno por uno segun los seleccionados
				for ($i = 0; $i < count($var_id); $i++) {
					$empty_id = $this->db->scape($var_id[$i]);
					$empty_to_consigned = $this->db->scape($var_to_consigned[$i]);
					$empty_nit_identification = $this->db->scape($var_nit_identification[$i]);
					$empty_consigned_entity = $this->db->scape($var_consigned_entity[$i]);
					$empty_account_type = $this->db->scape($var_account_type[$i]);
					$empty_account_number = $this->db->scape($var_account_number[$i]);
					$empty_closed_value = $this->db->scape($var_closed_value[$i]);
					$empty_value_check = $this->db->scape($var_value_check[$i]);
					$empty_value_unique = $this->db->scape($var_value_unique[$i]);
					$empty_consignment_date = $this->db->scape($var_consignment_date[$i]);
					$empty_nro_receipt = $this->db->scape($var_nro_receipt[$i]);
					$empty_description = $this->db->scape($var_description[$i]);
					//$empty_notary_consigned = $this->db->scape($var_notary_consigned[$i]);
					//$empty_notary_identification = $this->db->scape($var_notary_identification[$i]);
					//$empty_notary_receipt = $this->db->scape($var_notary_receipt[$i]);

					//if ($empty_notary_consigned != '' && $empty_notary_identification != '' && $empty_notary_receipt != '') { $empty_success = 'Si'; } else { $empty_success = 'No'; }
					#-------------------------------------------------------------------------#
					$var_sql = $this->db->select("*", t_azp_gsc_update,
						d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
						d_azp_gsc_update_t_nro_receipt . " = '" . $empty_nro_receipt . "'"
					);
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_gsc_request_v_id_azp_gsc_phase => '7', d_azp_gsc_request_v_id_azp_gsc_state => '2',);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_gsc_request, $var_array,
								d_azp_gsc_request_id_azp_gsc_request . " = '" . $value[d_azp_gsc_update_v_id_azp_gsc_request] . "' AND " .
								d_azp_gsc_request_v_id_azp_gsc_phase . " <= '7'");
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql2 = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_gsc_update, 
								d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
								d_azp_gsc_update_t_nro_receipt . " = '" . $empty_nro_receipt . "'"
							);
							$var_vregister = 0;
							//echo $var_vregister;
							#-------------------------------------------------------------------------#
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql2) { foreach ($var_sql2 as $key2 => $value2): $var_vregister = $value2['lbl_count']; endforeach; }
							#-------------------------------------------------------------------------#
							if ($empty_value_check == 'Si') {
								$var_vvalue_divided = 0;
								$var_vvalue_unique = str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_value_unique)));
								$var_vvalue_total = str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_value_unique)));
							} else {
								$var_vvalue_divided = str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_closed_value))) / $var_vregister;
								$var_vvalue_unique = 0;
								$var_vvalue_total = str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_closed_value))) / $var_vregister;
							}
							#-------------------------------------------------------------------------#
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_gsc_consignment_m_date_modified => DATE_HOUR,
								d_azp_gsc_consignment_m_description => $empty_description,
								d_azp_gsc_consignment_m_temp => '2',
								d_azp_gsc_consignment_t_account_number => $empty_account_number,
								d_azp_gsc_consignment_t_account_type => ucwords(strtolower($empty_account_type)),
								d_azp_gsc_consignment_t_closed_value => str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_closed_value))),
								d_azp_gsc_consignment_t_consigned_entity => ucwords(strtolower($empty_consigned_entity)),
								d_azp_gsc_consignment_t_consignment_date => $empty_consignment_date,
								d_azp_gsc_consignment_t_consignment_confirm => '1',
								d_azp_gsc_consignment_t_nit_identification => $empty_nit_identification,
								d_azp_gsc_consignment_t_to_consigned => ucwords(strtolower($empty_to_consigned)),
								d_azp_gsc_consignment_t_value_check => ucwords(strtolower($empty_value_check)),
								d_azp_gsc_consignment_t_value_divided => ucwords(strtolower($var_vvalue_divided)),
								d_azp_gsc_consignment_t_value_total => ucwords(strtolower($var_vvalue_total)),
								d_azp_gsc_consignment_t_value_unique => ucwords(strtolower($var_vvalue_unique)),
								//d_azp_gsc_consignment_t_notary_consigned => ucwords(strtolower($empty_notary_consigned)),
								//d_azp_gsc_consignment_t_notary_identification => ucwords(strtolower($empty_notary_identification)),
								//d_azp_gsc_consignment_t_notary_receipt => ucwords(strtolower($empty_notary_receipt)),
								//d_azp_gsc_consignment_t_notary_success => ucwords(strtolower($empty_success)),
								d_azp_gsc_consignment_t_duplicate => 'Si',
							);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $value[d_azp_gsc_update_v_id_azp_gsc_consignment] . "'");
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla
							$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
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
										d_azp_gsc_observation_internal_t_observation => 'Se confirman datos de consignacion.',
									);
									# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
									$this->db->insert(t_azp_gsc_observation_internal, $var_array);
									#-------------------------------------------------------------------------#
									$var_array = array(d_azp_gsc_request_t_observation => $empty_consignment_date . ' ' . 'Se confirman datos de consignacion.',);
									# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
									$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_request] . "'");
									#-------------------------------------------------------------------------#
									$var_array = array(d_azp_gsc_consignment_t_observation => $empty_consignment_date . ' ' . 'Se confirman datos de consignacion.',);
									# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
									$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $key_sql[d_azp_gsc_update_v_id_azp_gsc_consignment] . "'");
								endforeach;
							}
							#-------------------------------------------------------------------------#
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla
							$var_sql = $this->db->select('*', t_azp_gsc_consignment,
								d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
								d_azp_gsc_consignment_m_deleted . " = '5' AND " . d_azp_gsc_consignment_m_temp . " = '2' AND " .
								d_azp_gsc_consignment_t_account_number . " != '' AND " .
								d_azp_gsc_consignment_t_account_type . " != '' AND " .
								d_azp_gsc_consignment_t_closed_value . " != '' AND " .
								d_azp_gsc_consignment_t_consigned_entity . " != '' AND " .
								d_azp_gsc_consignment_t_consignment_date . " != '' AND " .
								d_azp_gsc_consignment_t_to_consigned . " != '' AND " .
								d_azp_gsc_consignment_t_value_check . " != '' AND " .
								d_azp_gsc_consignment_t_value_divided . " != '' AND " .
								d_azp_gsc_consignment_t_value_total . " != '' AND " .
								d_azp_gsc_consignment_t_value_unique . " != '' 
							");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value):
									# Array para asignar argumentos o valores a los elementos
									$var_array = array(d_azp_gsc_consignment_m_deleted => '1',);
									# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
									$this->db->update(t_azp_gsc_consignment, $var_array,
										d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $value[d_azp_gsc_consignment_id_azp_gsc_consignment] . "' AND " .
										d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
										d_azp_gsc_consignment_m_deleted . " = '5' AND " . d_azp_gsc_consignment_m_temp . " = '2'
									");
								endforeach;
							}
						endforeach;
					}
				}
				$var_suma = 1; $var_code = ''; $var_item = '';
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_a = $this->db->query("
					SELECT
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " AS 'lbl_azp_gsc_consignment_id_azp_gsc_consignment',
						tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . " AS 'lbl_azp_gsc_consignment_t_consignment_date'
					FROM " . t_azp_gsc_update . " tc_azp_gsc_update

					INNER JOIN " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
						ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_consignment . "
							= tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . "

					WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " = '1'
						AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_temp . " = '2'
						AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " = 'Principal'
						AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_check_item . " = 'No'
				");
				#-------------------------------------------------------------------------#
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql_a) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_a as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_dt = $value['lbl_azp_gsc_consignment_t_consignment_date'];
						$var_id = $value['lbl_azp_gsc_consignment_id_azp_gsc_consignment'];
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_sql_b = $this->db->query("
							SELECT MAX(tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_code . ") AS 'lbl_azp_gsc_consignment_t_consignment_code',
								tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " AS 'lbl_azp_gsc_consignment_id_azp_gsc_consignment',
								tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . " AS 'lbl_azp_gsc_consignment_t_consignment_date'
							FROM " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
							WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " = '1'
								AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_temp . " = '1'
								AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . " = '" . $var_dt . "'
								AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_code . " != '0'
							GROUP BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . " ASC,
								tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_code . " ASC
						");
						#-------------------------------------------------------------------------#
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_sql_b) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_sql_b as $key_b => $value_b):
								# Asignacion de valores a nuevas variables
								$var_code = $value_b['lbl_azp_gsc_consignment_t_consignment_code'] + $var_suma;
								$var_item = $value_b['lbl_azp_gsc_consignment_t_consignment_date'] . '_' . $var_code;
							endforeach;

							if ($var_item == '' && $var_code == '') {
								$var_l_code = 0 + $var_suma;
								$var_l_item = $var_dt . '_' . $var_suma;
							} else {
								$var_l_code = $var_code;
								$var_l_item = $var_item;
							}

							//echo 'code' . $var_l_code . '<br>';
							//echo 'item' .  $var_l_item . '<br>';
							//echo '<br>';
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_gsc_consignment_t_consignment_code => $var_l_code,
								d_azp_gsc_consignment_t_consignment_item => $var_l_item,
								d_azp_gsc_consignment_t_nro_item => $var_l_code,
							);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $var_id . "'");
						}
					endforeach;
				}
				//echo "final";
				//exit();
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_gsc_consignment_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_consignment, $var_array,
					d_azp_gsc_consignment_m_by_modified . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_gsc_consignment_m_deleted . " = '1' AND " . d_azp_gsc_consignment_m_temp . " = '2'
				");
				# --------------------------------------------------------------------------------------------------
				$this->db->query("
					DELETE FROM " . t_azp_gsc_consignment . "
					WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND " . d_azp_gsc_consignment_m_deleted . " = '5'
						AND " . d_azp_gsc_consignment_m_temp . " = '2'
				");
				# --------------------------------------------------------------------------------------------------
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_update_t_information . " = 'Principal'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						$var_idcon = $value[d_azp_gsc_update_v_id_azp_gsc_consignment];
						# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
						$var_sql_a = $this->db->select("*", t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $var_idcon . "'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_sql_a) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_sql_a as $key_a => $value_a):
								$var_idrq = $value_a[d_azp_gsc_consignment_v_id_azp_gsc_request];
								$var_itema = $value_a[d_azp_gsc_consignment_t_consignment_item];
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_gsc_consignment_t_consignment_item => $var_itema,);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_v_id_azp_gsc_request . " = '" . $var_idrq . "'");
							endforeach;
						}
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_consignment_notary(array $data) {
			try {
				#-------------------------------------------------------------------------#
				/*if (!isset($data['field_up_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);*/
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_gsc_consignment_notary(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_notary($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$var_id = $data['field_nt_id'];
				$var_notary_consigned = $data['field_nt_notary_consigned'];
				$var_notary_identification = $data['field_nt_notary_identification'];
				$var_notary_receipt = $data['field_nt_notary_receipt'];
				#-------------------------------------------------------------------------#
				# Recorrer los datos uno por uno segun los seleccionados
				for ($i = 0; $i < count($var_id); $i++) {
					$empty_id = $this->db->scape($var_id[$i]);
					$empty_notary_consigned = $this->db->scape($var_notary_consigned[$i]);
					$empty_notary_identification = $this->db->scape($var_notary_identification[$i]);
					$empty_notary_receipt = $this->db->scape($var_notary_receipt[$i]);

					if ($empty_notary_consigned != '' && $empty_notary_identification != '' && $empty_notary_receipt != '') { $empty_success = 'Si'; } else { $empty_success = 'No'; }
					#-------------------------------------------------------------------------#
					$var_sql = $this->db->select("*", t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_gsc_consignment_t_notary_consigned => ucwords(strtolower($empty_notary_consigned)),
								d_azp_gsc_consignment_t_notary_identification => ucwords(strtolower($empty_notary_identification)),
								d_azp_gsc_consignment_t_notary_receipt => $empty_notary_receipt,
								d_azp_gsc_consignment_t_notary_success => ucwords(strtolower($empty_success)),
							);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_t_information . " = 'Principal' AND " .
								d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $value[d_azp_gsc_update_v_id_azp_gsc_consignment] . "'");
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_alert_receipt_not() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_update . " tc_azp_gsc_update
				INNER JOIN " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_consignment . "
						= tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . "
				WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " = 'Sin_Recibo'
					AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " = 'Principal'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_alert_receipt_yes() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_update . " tc_azp_gsc_update
				INNER JOIN " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
					ON tc_azp_gsc_update." . d_azp_gsc_update_v_id_azp_gsc_consignment . "
						= tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . "
				WHERE tc_azp_gsc_update." . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " != 'Sin_Recibo'
					AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_information . " = 'Principal'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_alert_information() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT MIN(" . d_azp_gsc_consignment_t_duplicate . ") AS 'lbl_min' FROM " . t_azp_gsc_consignment . "
				WHERE " . d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND " . d_azp_gsc_consignment_m_deleted . " = '2'
					AND " . d_azp_gsc_consignment_m_temp . " = '2'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_alert_register() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT MIN(" . d_azp_gsc_consignment_t_register . ") AS 'lbl_min' FROM " . t_azp_gsc_consignment . "
				WHERE " . d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND " . d_azp_gsc_consignment_m_deleted . " = '2'
					AND " . d_azp_gsc_consignment_m_temp . " = '2'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_consignment_duplicate(array $data) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# --------------------------------------------------------------------------------------------------
				$this->db->query("DELETE FROM " . t_azp_gsc_update . " WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# --------------------------------------------------------------------------------------------------
				# Verificar si el registro existe en la tabla
				$var_sql = $this->db->select("MIN(" . d_azp_gsc_consignment_t_duplicate . ") AS 'lbl_min'",
					t_azp_gsc_consignment, d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
					. " AND " . d_azp_gsc_consignment_m_deleted . " = '2'"
					. " AND " . d_azp_gsc_consignment_m_temp . " = '2'"
				);
				# --------------------------------------------------------------------------------------------------
				# Validar si la consulta es verdadera
				if (true == $var_sql) { foreach ($var_sql as $key => $value) { $var_min = $value['lbl_min']; } } else { $var_min = 0; }
				# --------------------------------------------------------------------------------------------------
				# Verificar si el registro existe en la tabla
				$var_sql = $this->db->select("*", t_azp_gsc_consignment, d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
					. " AND " . d_azp_gsc_consignment_m_deleted . " = '2'" . " AND " . d_azp_gsc_consignment_m_temp . " = '2'"
					. " AND " . d_azp_gsc_consignment_t_duplicate . " = '" . $var_min . "'"
				);
				# --------------------------------------------------------------------------------------------------
				# Validar si la consulta es verdadera
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value) {
						# Asingacion de valores a nuevas variables
						$var_id = $value[d_azp_gsc_consignment_id_azp_gsc_consignment];
						//echo $var_id . '<br>';
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_gsc_update_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_gsc_update_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_update_m_date_created => DATE_HOUR,
							d_azp_gsc_update_m_date_modified => DATE_HOUR,
							d_azp_gsc_update_m_deleted => '1',
							d_azp_gsc_update_m_level => '2',
							d_azp_gsc_update_m_status => '1',
							d_azp_gsc_update_m_temp => '1',
							d_azp_gsc_update_v_id_azp_gsc_consignment => $var_id,
						);
						# Insertar valores en la nueva tabla que no existen
						$this->db->insert(t_azp_gsc_update, $var_array);
					}
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key => $value):
						# Verificar si el registro existe en la tabla
						$var_sql2 = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $value[d_azp_gsc_update_v_id_azp_gsc_consignment] . "'");
						# Validar si la consulta es verdadera
						if (false != $var_sql2) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql2 as $key2 => $valu2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_array = array(d_azp_gsc_update_v_id_azp_gsc_request => $valu2[d_azp_gsc_consignment_v_id_azp_gsc_request],);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_gsc_update, $var_array, d_azp_gsc_update_v_id_azp_gsc_consignment . " = '" . $valu2[d_azp_gsc_consignment_id_azp_gsc_consignment] . "'");
							endforeach;
						}
					endforeach;
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
							d_azp_gsc_update_t_shipping_number => $key_sql[d_azp_gsc_request_t_shipping_number],
							d_azp_gsc_update_t_supplier_request_date => $key_sql[d_azp_gsc_request_t_supplier_request_date],
							d_azp_gsc_update_t_supplier_request_number => $key_sql[d_azp_gsc_request_t_supplier_request_number],
							d_azp_gsc_update_v_id_azp_gsc_causal => $key_sql[d_azp_gsc_request_v_id_azp_gsc_causal],
							d_azp_gsc_update_v_id_azp_gsc_client => $key_sql[d_azp_gsc_request_v_id_azp_gsc_client],
							d_azp_gsc_update_v_id_azp_gsc_expiration => $key_sql[d_azp_gsc_request_v_id_azp_gsc_expiration],
							d_azp_gsc_update_v_id_azp_gsc_phase => $key_sql[d_azp_gsc_request_v_id_azp_gsc_phase],
							d_azp_gsc_update_v_id_azp_gsc_state => $key_sql[d_azp_gsc_request_v_id_azp_gsc_state],
							d_azp_gsc_update_v_id_azp_gsc_request => $key_sql[d_azp_gsc_request_id_azp_gsc_request],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_update, $var_array,
							d_azp_gsc_update_v_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_request_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
						);
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				$var_sql = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_m_deleted . " = '1'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_gsc_update_t_nro_receipt => $key_sql[d_azp_gsc_consignment_t_nro_receipt],);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_update, $var_array,
							d_azp_gsc_update_v_id_azp_gsc_consignment . " = '" . $key_sql[d_azp_gsc_consignment_id_azp_gsc_consignment] . "' AND " .
							d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
						);
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				//return array('success' => 1, 'message' => '<b>Exito:</b> Datos registrados correctamente.', 't_receipt' => $var_nro_receipt, 't_count' => $var_count);
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos registrados correctamente.',);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_consignment_multifold_unique(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_mt_nro_receipt'])) { throw new Exception('<b>Error:</b> El campo de url esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_nro_receipt = $this->db->scape($data['field_mt_nro_receipt']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_mt_file_system']['name'];
				$empty_type = $_FILES['field_mt_file_system']['type'];
				$empty_tmp_name = $_FILES['field_mt_file_system']['tmp_name'];
				$empty_error = $_FILES['field_mt_file_system']['error'];
				$empty_size = $_FILES['field_mt_file_system']['size'];
				#-------------------------------------------------------------------------#
				$empty_tamanio = 5000; $empty_bytes = 1024;
				$empty_extension = array('pdf',);
				$empty_path_info = strtolower(pathinfo($empty_name, PATHINFO_EXTENSION));
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_nro_receipt)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nro recibo es obligatorio.');
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
					throw new Exception('<b>Error:</b> El archivo seleccionado excede el tamaño de 5 MB.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_gsc_consignment_multifold_unique(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_multifold_unique($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('files');
				#-------------------------------------------------------------------------#
				$empty_nro_receipt = $this->db->scape($data['field_mt_nro_receipt']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_mt_file_system']['name'];
				$empty_error = $_FILES['field_mt_file_system']['error'];
				$empty_size = $_FILES['field_mt_file_system']['size'];
				$empty_tmp_name = $_FILES['field_mt_file_system']['tmp_name'];
				$empty_type = $_FILES['field_mt_file_system']['type'];
				#-------------------------------------------------------------------------#
				$empty_route = '../systemfiles/filesproject/azp_gsc_consignment/';
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_consignment_m_date_modified => DATE_HOUR,
							//d_azp_gsc_consignment_m_description => '',
							d_azp_gsc_consignment_m_status => '1',
							d_azp_gsc_consignment_m_temp => '1',
							d_azp_gsc_consignment_s_file_document => $empty_name,
							d_azp_gsc_consignment_s_file_error => $empty_error,
							d_azp_gsc_consignment_s_file_folder => $value[d_azp_gsc_update_t_identification],
							d_azp_gsc_consignment_s_file_name => strtoupper(trim(preg_replace('/\s+/',' ', $empty_name))),
							d_azp_gsc_consignment_s_file_route => str_replace('../', '', $empty_route),
							d_azp_gsc_consignment_s_file_size => $empty_size,
							d_azp_gsc_consignment_s_file_tmp_name => $empty_tmp_name,
							d_azp_gsc_consignment_s_file_type => $empty_type,
							d_azp_gsc_consignment_t_observation => '',
							d_azp_gsc_consignment_t_nro_receipt => strtoupper($empty_nro_receipt),
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $value[d_azp_gsc_update_v_id_azp_gsc_consignment] . "'");
						#-------------------------------------------------------------------------#
						# Contro de existencia de carpeta
						if (!is_dir($empty_route)) { Files::create_dir($empty_route, 0777); }
						#-------------------------------------------------------------------------#
						# Subida de archivos en el desarrollo
						Files::upload_file(trim(preg_replace('/\s+/',' ', $empty_name)), $empty_tmp_name, $empty_route, true);
						#-------------------------------------------------------------------------#
						# Dar permisos a la ruta y archivo
						chmod($empty_route . $empty_name, 0777);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo almacenado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_consignment_multifold_various(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_md_nro_receipt'])) { throw new Exception('<b>Error:</b> El campo de url esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_nro_receipt = $this->db->scape($data['field_md_nro_receipt']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_md_file_system']['name'];
				$empty_type = $_FILES['field_md_file_system']['type'];
				$empty_tmp_name = $_FILES['field_md_file_system']['tmp_name'];
				$empty_error = $_FILES['field_md_file_system']['error'];
				$empty_size = $_FILES['field_md_file_system']['size'];
				#-------------------------------------------------------------------------#
				$empty_tamanio = 5000; $empty_bytes = 1024;
				$empty_extension = array('pdf',);
				$empty_path_info = strtolower(pathinfo($empty_name, PATHINFO_EXTENSION));
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_nro_receipt)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nro recibo es obligatorio.');
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
					throw new Exception('<b>Error:</b> El archivo seleccionado excede el tamaño de 5 MB.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_gsc_consignment_multifold_various(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_multifold_various($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('files');
				#-------------------------------------------------------------------------#
				$empty_nro_receipt = $this->db->scape($data['field_md_nro_receipt']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_md_file_system']['name'];
				$empty_error = $_FILES['field_md_file_system']['error'];
				$empty_size = $_FILES['field_md_file_system']['size'];
				$empty_tmp_name = $_FILES['field_md_file_system']['tmp_name'];
				$empty_type = $_FILES['field_md_file_system']['type'];
				#-------------------------------------------------------------------------#
				$empty_route = '../systemfiles/filesproject/azp_gsc_consignment/';
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_consignment_m_date_modified => DATE_HOUR,
							d_azp_gsc_consignment_m_temp => '3',
							d_azp_gsc_consignment_s_file_document => $empty_name,
							d_azp_gsc_consignment_s_file_error => $empty_error,
							d_azp_gsc_consignment_s_file_folder => $value[d_azp_gsc_update_t_identification],
							d_azp_gsc_consignment_s_file_name => strtoupper(trim(preg_replace('/\s+/',' ', $empty_name))),
							d_azp_gsc_consignment_s_file_route => str_replace('../', '', $empty_route),
							d_azp_gsc_consignment_s_file_size => $empty_size,
							d_azp_gsc_consignment_s_file_tmp_name => $empty_tmp_name,
							d_azp_gsc_consignment_s_file_type => $empty_type,
							d_azp_gsc_consignment_t_observation => '',
							d_azp_gsc_consignment_t_nro_receipt => strtoupper($empty_nro_receipt),
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $value[d_azp_gsc_update_v_id_azp_gsc_consignment] . "'");
						#-------------------------------------------------------------------------#
						# Contro de existencia de carpeta
						if (!is_dir($empty_route)) { Files::create_dir($empty_route, 0777); }
						#-------------------------------------------------------------------------#
						# Subida de archivos en el desarrollo
						Files::upload_file(trim(preg_replace('/\s+/',' ', $empty_name)), $empty_tmp_name, $empty_route, true);
						#-------------------------------------------------------------------------#
						# Dar permisos a la ruta y archivo
						chmod($empty_route . $empty_name, 0777);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo almacenado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_consignment_multifold_doble(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_mt_count'])) { throw new Exception('<b>Error:</b> El campo de cantidad esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_count = $this->db->scape($data['field_mt_count']);
				$empty_check = $this->db->scape($data['field_mt_check']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_count)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cantidad es obligatorio.');
				}
				#---------------------------------------------#
				if ($empty_count <= 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cantidad debe ser minimo a uno.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_gsc_consignment_multifold_doble(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_multifold_doble($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_count = $this->db->scape($data['field_mt_count']);
				$empty_check = $this->db->scape($data['field_mt_check']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("MAX(" . d_azp_gsc_consignment_t_duplicate . ") AS 'lbl_max'", t_azp_gsc_consignment, d_azp_gsc_consignment_m_deleted . " = '1'");
				#-------------------------------------------------------------------------#
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) { foreach ($var_sql as $key => $value): $var_info = $value['lbl_max']; endforeach; } else { $var_info = 0; }
				#-------------------------------------------------------------------------#
				# Registro inicial de conteo
				$var_suma = 0; $var_count = 1;
				# Habilitar la cantidad de registros
				for ($var_i = 1; $var_i <= $empty_count; $var_i++) {
					# Registro inicial de conteo
					$var_suma += $var_count;
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
					# Verificiar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value) {
							if ($empty_check == 'Si') { $var_citem = $value[d_azp_gsc_update_t_consignment_item]; } else { $var_citem = ''; }
							$empty_duplicate = $var_info + $var_suma;
							$empty_route = 'systemfiles/filesproject/azp_gsc_consignment/';
							#-------------------------------------------------------------------------#
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_gsc_consignment_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_gsc_consignment_m_date_created => DATE_HOUR,
								d_azp_gsc_consignment_m_date_modified => DATE_HOUR,
								d_azp_gsc_consignment_m_deleted => '2',
								d_azp_gsc_consignment_m_description => '',
								d_azp_gsc_consignment_m_level => '2',
								d_azp_gsc_consignment_m_status => '1',
								d_azp_gsc_consignment_m_temp => '2',
								d_azp_gsc_consignment_s_file_document => '',
								d_azp_gsc_consignment_s_file_error => '',
								d_azp_gsc_consignment_s_file_folder => $value[d_azp_gsc_update_t_identification],
								d_azp_gsc_consignment_s_file_name => '',
								d_azp_gsc_consignment_s_file_route => $empty_route,
								d_azp_gsc_consignment_s_file_size => '',
								d_azp_gsc_consignment_s_file_tmp_name => '',
								d_azp_gsc_consignment_s_file_type => '',
								d_azp_gsc_consignment_t_account_number => '',
								d_azp_gsc_consignment_t_account_type => '',
								d_azp_gsc_consignment_t_closed_value => '0',
								d_azp_gsc_consignment_t_consigned_entity => '',
								d_azp_gsc_consignment_t_consignment_code => '0',
								d_azp_gsc_consignment_t_consignment_confirm => '2',
								d_azp_gsc_consignment_t_consignment_date => '',
								d_azp_gsc_consignment_t_consignment_item => $var_citem,
								d_azp_gsc_consignment_t_honorary => '0',
								d_azp_gsc_consignment_t_nit_identification => '',
								d_azp_gsc_consignment_t_observation => '',
								d_azp_gsc_consignment_t_nro_receipt => 'Sin_Recibo',
								d_azp_gsc_consignment_t_to_consigned => '',
								d_azp_gsc_consignment_t_value_check => 'No',
								d_azp_gsc_consignment_t_value_divided => '0',
								d_azp_gsc_consignment_t_value_total => '0',
								d_azp_gsc_consignment_t_value_unique => '0',
								d_azp_gsc_consignment_t_information => 'Adicional',
								d_azp_gsc_consignment_t_duplicate => $empty_duplicate,
								d_azp_gsc_consignment_t_register => $var_suma,
								d_azp_gsc_consignment_t_check_item => $empty_check,
								d_azp_gsc_consignment_v_id_azp_gsc_request => $value[d_azp_gsc_update_v_id_azp_gsc_request],
							);
							# Query Sql Update: Actualizar valores de la tabla segun sus campos
							$this->db->insert(t_azp_gsc_consignment, $var_array);
						}
					}
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo almacenado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_consignment_approve(array $data) {
			try {
				#-------------------------------------------------------------------------#
				//if (!isset($data['field_mt_url'])) { throw new Exception('<b>Error:</b> El campo de url esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				//$empty_url = $this->db->scape($data['field_mt_url']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_gsc_consignment_approve(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_approve($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_chk = $this->db->scape($data['field_mt_chk']);
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_check = explode(",", $empty_chk);
				#-------------------------------------------------------------------------#
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_check as $key => $value) {
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $value . "' AND " . d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignar valores a nuevas variables
							$var_register = $value[d_azp_gsc_consignment_t_register];
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql = $this->db->select('*', t_azp_gsc_consignment, d_azp_gsc_consignment_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
								d_azp_gsc_consignment_m_deleted . " = '2' AND " . d_azp_gsc_consignment_m_temp . " = '3' AND " .
								d_azp_gsc_consignment_t_register . " = '" . $var_register . "'"
							);
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value):
									# Asignar valores a nuevas variables
									$var_id = $value[d_azp_gsc_consignment_id_azp_gsc_consignment];
									# Array para asignar argumentos o valores a los elementos
									$var_array = array(
										d_azp_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
										d_azp_gsc_consignment_m_date_modified => DATE_HOUR,
										d_azp_gsc_consignment_m_deleted => '1',
										d_azp_gsc_consignment_m_temp => '1',
										d_azp_gsc_consignment_t_register => '0',
									);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $var_id . "'");
								endforeach;
							}
							
						endforeach;
					}
				}
				# --------------------------------------------------------------------------------------------------
				$this->db->query("
					DELETE FROM " . t_azp_gsc_consignment . "
					WHERE " . d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND " . d_azp_gsc_consignment_m_deleted . " = '2'
						AND (" . d_azp_gsc_consignment_m_temp . " = '2'
							OR " . d_azp_gsc_consignment_m_temp . " = '3')"
				);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo generado correctamente.',);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_consignment_acquittance(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_mt_nro_receipt'])) { throw new Exception('<b>Error:</b> El campo de url esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_nro_receipt = $this->db->scape($data['field_mt_nro_receipt']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_mt_file_system']['name'];
				$empty_type = $_FILES['field_mt_file_system']['type'];
				$empty_tmp_name = $_FILES['field_mt_file_system']['tmp_name'];
				$empty_error = $_FILES['field_mt_file_system']['error'];
				$empty_size = $_FILES['field_mt_file_system']['size'];
				#-------------------------------------------------------------------------#
				$empty_tamanio = 5000; $empty_bytes = 1024;
				$empty_extension = array('pdf',);
				$empty_path_info = strtolower(pathinfo($empty_name, PATHINFO_EXTENSION));
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_nro_receipt)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nro recibo es obligatorio.');
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
					throw new Exception('<b>Error:</b> El archivo seleccionado excede el tamaño de 5 MB.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_gsc_consignment_acquittance(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_consignment_acquittance($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('files'); $var_information = '';
				#-------------------------------------------------------------------------#
				$empty_nro_receipt = $this->db->scape($data['field_mt_nro_receipt']);
				$empty_id = $this->db->scape($data['field_id_acquittance']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_mt_file_system']['name'];
				$empty_error = $_FILES['field_mt_file_system']['error'];
				$empty_size = $_FILES['field_mt_file_system']['size'];
				$empty_tmp_name = $_FILES['field_mt_file_system']['tmp_name'];
				$empty_type = $_FILES['field_mt_file_system']['type'];
				#-------------------------------------------------------------------------#
				$empty_route = '../systemfiles/filesproject/azp_gsc_consignment/';
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_update_v_id_azp_gsc_consignment . " = '" . $empty_id . "'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) { foreach ($var_sql as $key => $value): $var_information = $value[d_azp_gsc_update_t_information]; endforeach; }
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_update, d_azp_gsc_update_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_update_t_information . " = '" . $var_information . "'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_consignment_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_consignment_m_date_modified => DATE_HOUR,
							d_azp_gsc_consignment_m_status => '1',
							d_azp_gsc_consignment_m_temp => '1',
							d_azp_gsc_consignment_s_file_document => $empty_name,
							d_azp_gsc_consignment_s_file_error => $empty_error,
							d_azp_gsc_consignment_s_file_folder => $value[d_azp_gsc_update_t_identification],
							d_azp_gsc_consignment_s_file_name => strtoupper(trim(preg_replace('/\s+/',' ', $empty_name))),
							d_azp_gsc_consignment_s_file_route => str_replace('../', '', $empty_route),
							d_azp_gsc_consignment_s_file_size => $empty_size,
							d_azp_gsc_consignment_s_file_tmp_name => $empty_tmp_name,
							d_azp_gsc_consignment_s_file_type => $empty_type,
							d_azp_gsc_consignment_t_observation => '',
							d_azp_gsc_consignment_t_nro_receipt => strtoupper($empty_nro_receipt),
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_consignment, $var_array, d_azp_gsc_consignment_id_azp_gsc_consignment . " = '" . $value[d_azp_gsc_update_v_id_azp_gsc_consignment] . "'");
						#-------------------------------------------------------------------------#
						# Contro de existencia de carpeta
						if (!is_dir($empty_route)) { Files::create_dir($empty_route, 0777); }
						#-------------------------------------------------------------------------#
						# Subida de archivos en el desarrollo
						Files::upload_file(trim(preg_replace('/\s+/',' ', $empty_name)), $empty_tmp_name, $empty_route, true);
						#-------------------------------------------------------------------------#
						# Dar permisos a la ruta y archivo
						chmod($empty_route . $empty_name, 0777);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo almacenado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>