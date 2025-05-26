<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_crt_captureModel extends Models implements OCREND {
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
					tc_azp_crt_capture." . d_azp_crt_capture_id_azp_crt_capture . " AS 'lbl_azp_crt_capture_id_azp_crt_capture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_capture." . d_azp_crt_capture_m_date_created . " AS 'lbl_azp_crt_capture_m_date_created',
					tc_azp_crt_capture." . d_azp_crt_capture_m_date_modified . " AS 'lbl_azp_crt_capture_m_date_modified',
					tc_azp_crt_capture." . d_azp_crt_capture_m_description . " AS 'lbl_azp_crt_capture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_date_image . " AS 'lbl_azp_crt_capture_t_crt_date_image',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_date_load . " AS 'lbl_azp_crt_capture_t_crt_date_load',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_document . " AS 'lbl_azp_crt_capture_t_crt_document',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_error . " AS 'lbl_azp_crt_capture_t_crt_error',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_mark_image . " AS 'lbl_azp_crt_capture_t_crt_mark_image',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_name . " AS 'lbl_azp_crt_capture_t_crt_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_route . " AS 'lbl_azp_crt_capture_t_crt_route',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_size . " AS 'lbl_azp_crt_capture_t_crt_size',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_tmp_name . " AS 'lbl_azp_crt_capture_t_crt_tmp_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_type . " AS 'lbl_azp_crt_capture_t_crt_type',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_amount . " AS 'lbl_azp_crt_capture_t_rcb_amount',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_date_load . " AS 'lbl_azp_crt_capture_t_rcb_date_load',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_document . " AS 'lbl_azp_crt_capture_t_rcb_document',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_error . " AS 'lbl_azp_crt_capture_t_rcb_error',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_name . " AS 'lbl_azp_crt_capture_t_rcb_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_nro_receipt . " AS 'lbl_azp_crt_capture_t_rcb_nro_receipt',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_route . " AS 'lbl_azp_crt_capture_t_rcb_route',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_service . " AS 'lbl_azp_crt_capture_t_rcb_service',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_size . " AS 'lbl_azp_crt_capture_t_rcb_size',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_tmp_name . " AS 'lbl_azp_crt_capture_t_rcb_tmp_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_type . " AS 'lbl_azp_crt_capture_t_rcb_type',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'lbl_azp_crt_request_data_t_request_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_id . " AS 'lbl_azp_crt_request_data_t_request_id',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro'
				FROM " . t_azp_crt_capture . " tc_azp_crt_capture
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_data ." tc_azp_crt_request_data
					ON tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . "
						= tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_capture." . d_azp_crt_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_crt_capture." . d_azp_crt_capture_m_deleted . " = '1'
				ORDER BY tc_azp_crt_capture." . d_azp_crt_capture_id_azp_crt_capture . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_crt_capture." . d_azs_crt_capture_id_azs_crt_capture . " AS 'lbl_azs_crt_capture_id_azs_crt_capture',
					tc_azs_crt_capture." . d_azs_crt_capture_m_date_modified . " AS 'lbl_azs_crt_capture_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_crt_capture." . d_azs_crt_capture_m_date_created . " AS 'lbl_azs_crt_capture_m_date_created',
					tc_azs_crt_capture." . d_azs_crt_capture_m_date_modified . " AS 'lbl_azs_crt_capture_m_date_modified',
					tc_azs_crt_capture." . d_azs_crt_capture_m_description . " AS 'lbl_azs_crt_capture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_crt_capture." . d_azs_crt_capture_t_name . " AS 'lbl_azs_crt_capture_t_name'
				FROM " . t_azs_crt_capture . " tc_azs_crt_capture
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_crt_capture." . d_azs_crt_capture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_crt_capture." . d_azs_crt_capture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_crt_capture." . d_azs_crt_capture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_crt_capture." . d_azs_crt_capture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_crt_capture." . d_azs_crt_capture_v_id_azp_crt_capture . " = '" . $this->id . "'
				ORDER BY tc_azs_crt_capture." . d_azs_crt_capture_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_crt_capture . "
				WHERE " . d_azp_crt_capture_id_azp_crt_capture . " = '" . $this->id . "'
					AND " . d_azp_crt_capture_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_crt_capture);
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
					tc_azp_crt_capture." . d_azp_crt_capture_id_azp_crt_capture . " AS 'lbl_azp_crt_capture_id_azp_crt_capture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_capture." . d_azp_crt_capture_m_date_created . " AS 'lbl_azp_crt_capture_m_date_created',
					tc_azp_crt_capture." . d_azp_crt_capture_m_date_modified . " AS 'lbl_azp_crt_capture_m_date_modified',
					tc_azp_crt_capture." . d_azp_crt_capture_m_description . " AS 'lbl_azp_crt_capture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_date_image . " AS 'lbl_azp_crt_capture_t_crt_date_image',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_date_load . " AS 'lbl_azp_crt_capture_t_crt_date_load',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_document . " AS 'lbl_azp_crt_capture_t_crt_document',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_error . " AS 'lbl_azp_crt_capture_t_crt_error',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_mark_image . " AS 'lbl_azp_crt_capture_t_crt_mark_image',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_name . " AS 'lbl_azp_crt_capture_t_crt_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_route . " AS 'lbl_azp_crt_capture_t_crt_route',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_size . " AS 'lbl_azp_crt_capture_t_crt_size',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_tmp_name . " AS 'lbl_azp_crt_capture_t_crt_tmp_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_type . " AS 'lbl_azp_crt_capture_t_crt_type',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_amount . " AS 'lbl_azp_crt_capture_t_rcb_amount',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_date_load . " AS 'lbl_azp_crt_capture_t_rcb_date_load',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_document . " AS 'lbl_azp_crt_capture_t_rcb_document',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_error . " AS 'lbl_azp_crt_capture_t_rcb_error',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_name . " AS 'lbl_azp_crt_capture_t_rcb_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_nro_receipt . " AS 'lbl_azp_crt_capture_t_rcb_nro_receipt',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_route . " AS 'lbl_azp_crt_capture_t_rcb_route',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_service . " AS 'lbl_azp_crt_capture_t_rcb_service',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_size . " AS 'lbl_azp_crt_capture_t_rcb_size',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_tmp_name . " AS 'lbl_azp_crt_capture_t_rcb_tmp_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_type . " AS 'lbl_azp_crt_capture_t_rcb_type',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'lbl_azp_crt_request_data_t_request_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_id . " AS 'lbl_azp_crt_request_data_t_request_id',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro'
				FROM " . t_azp_crt_capture . " tc_azp_crt_capture
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_data ." tc_azp_crt_request_data
					ON tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . "
						= tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_capture." . d_azp_crt_capture_id_azp_crt_capture . " = '" . $this->id . "'
					AND tc_azp_crt_capture." . d_azp_crt_capture_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_capture." . d_azp_crt_capture_id_azp_crt_capture . " AS 'lbl_azp_crt_capture_id_azp_crt_capture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_capture." . d_azp_crt_capture_m_date_created . " AS 'lbl_azp_crt_capture_m_date_created',
					tc_azp_crt_capture." . d_azp_crt_capture_m_date_modified . " AS 'lbl_azp_crt_capture_m_date_modified',
					tc_azp_crt_capture." . d_azp_crt_capture_m_description . " AS 'lbl_azp_crt_capture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_date_image . " AS 'lbl_azp_crt_capture_t_crt_date_image',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_date_load . " AS 'lbl_azp_crt_capture_t_crt_date_load',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_document . " AS 'lbl_azp_crt_capture_t_crt_document',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_error . " AS 'lbl_azp_crt_capture_t_crt_error',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_mark_image . " AS 'lbl_azp_crt_capture_t_crt_mark_image',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_name . " AS 'lbl_azp_crt_capture_t_crt_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_route . " AS 'lbl_azp_crt_capture_t_crt_route',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_size . " AS 'lbl_azp_crt_capture_t_crt_size',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_tmp_name . " AS 'lbl_azp_crt_capture_t_crt_tmp_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_type . " AS 'lbl_azp_crt_capture_t_crt_type',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_amount . " AS 'lbl_azp_crt_capture_t_rcb_amount',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_date_load . " AS 'lbl_azp_crt_capture_t_rcb_date_load',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_document . " AS 'lbl_azp_crt_capture_t_rcb_document',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_error . " AS 'lbl_azp_crt_capture_t_rcb_error',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_name . " AS 'lbl_azp_crt_capture_t_rcb_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_nro_receipt . " AS 'lbl_azp_crt_capture_t_rcb_nro_receipt',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_route . " AS 'lbl_azp_crt_capture_t_rcb_route',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_service . " AS 'lbl_azp_crt_capture_t_rcb_service',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_size . " AS 'lbl_azp_crt_capture_t_rcb_size',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_tmp_name . " AS 'lbl_azp_crt_capture_t_rcb_tmp_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_type . " AS 'lbl_azp_crt_capture_t_rcb_type',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'lbl_azp_crt_request_data_t_request_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_id . " AS 'lbl_azp_crt_request_data_t_request_id',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro'
				FROM " . t_azp_crt_capture . " tc_azp_crt_capture
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_data ." tc_azp_crt_request_data
					ON tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . "
						= tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_capture." . d_azp_crt_capture_m_deleted . " = '3'
				ORDER BY tc_azp_crt_capture." . d_azp_crt_capture_id_azp_crt_capture . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_capture." . d_azp_crt_capture_id_azp_crt_capture . " AS 'lbl_azp_crt_capture_id_azp_crt_capture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_capture." . d_azp_crt_capture_m_date_created . " AS 'lbl_azp_crt_capture_m_date_created',
					tc_azp_crt_capture." . d_azp_crt_capture_m_date_modified . " AS 'lbl_azp_crt_capture_m_date_modified',
					tc_azp_crt_capture." . d_azp_crt_capture_m_description . " AS 'lbl_azp_crt_capture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_date_image . " AS 'lbl_azp_crt_capture_t_crt_date_image',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_date_load . " AS 'lbl_azp_crt_capture_t_crt_date_load',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_document . " AS 'lbl_azp_crt_capture_t_crt_document',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_error . " AS 'lbl_azp_crt_capture_t_crt_error',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_mark_image . " AS 'lbl_azp_crt_capture_t_crt_mark_image',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_name . " AS 'lbl_azp_crt_capture_t_crt_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_route . " AS 'lbl_azp_crt_capture_t_crt_route',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_size . " AS 'lbl_azp_crt_capture_t_crt_size',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_tmp_name . " AS 'lbl_azp_crt_capture_t_crt_tmp_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_type . " AS 'lbl_azp_crt_capture_t_crt_type',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_amount . " AS 'lbl_azp_crt_capture_t_rcb_amount',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_date_load . " AS 'lbl_azp_crt_capture_t_rcb_date_load',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_document . " AS 'lbl_azp_crt_capture_t_rcb_document',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_error . " AS 'lbl_azp_crt_capture_t_rcb_error',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_name . " AS 'lbl_azp_crt_capture_t_rcb_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_nro_receipt . " AS 'lbl_azp_crt_capture_t_rcb_nro_receipt',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_route . " AS 'lbl_azp_crt_capture_t_rcb_route',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_service . " AS 'lbl_azp_crt_capture_t_rcb_service',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_size . " AS 'lbl_azp_crt_capture_t_rcb_size',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_tmp_name . " AS 'lbl_azp_crt_capture_t_rcb_tmp_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_type . " AS 'lbl_azp_crt_capture_t_rcb_type',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'lbl_azp_crt_request_data_t_request_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_id . " AS 'lbl_azp_crt_request_data_t_request_id',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro'
				FROM " . t_azp_crt_capture . " tc_azp_crt_capture
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_data ." tc_azp_crt_request_data
					ON tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . "
						= tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_capture." . d_azp_crt_capture_m_deleted . " = '1'
				ORDER BY tc_azp_crt_capture." . d_azp_crt_capture_id_azp_crt_capture . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_capture." . d_azp_crt_capture_id_azp_crt_capture . " AS 'lbl_azp_crt_capture_id_azp_crt_capture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_capture." . d_azp_crt_capture_m_date_created . " AS 'lbl_azp_crt_capture_m_date_created',
					tc_azp_crt_capture." . d_azp_crt_capture_m_date_modified . " AS 'lbl_azp_crt_capture_m_date_modified',
					tc_azp_crt_capture." . d_azp_crt_capture_m_description . " AS 'lbl_azp_crt_capture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_date_image . " AS 'lbl_azp_crt_capture_t_crt_date_image',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_date_load . " AS 'lbl_azp_crt_capture_t_crt_date_load',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_document . " AS 'lbl_azp_crt_capture_t_crt_document',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_error . " AS 'lbl_azp_crt_capture_t_crt_error',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_mark_image . " AS 'lbl_azp_crt_capture_t_crt_mark_image',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_name . " AS 'lbl_azp_crt_capture_t_crt_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_route . " AS 'lbl_azp_crt_capture_t_crt_route',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_size . " AS 'lbl_azp_crt_capture_t_crt_size',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_tmp_name . " AS 'lbl_azp_crt_capture_t_crt_tmp_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_type . " AS 'lbl_azp_crt_capture_t_crt_type',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_amount . " AS 'lbl_azp_crt_capture_t_rcb_amount',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_date_load . " AS 'lbl_azp_crt_capture_t_rcb_date_load',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_document . " AS 'lbl_azp_crt_capture_t_rcb_document',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_error . " AS 'lbl_azp_crt_capture_t_rcb_error',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_name . " AS 'lbl_azp_crt_capture_t_rcb_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_nro_receipt . " AS 'lbl_azp_crt_capture_t_rcb_nro_receipt',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_route . " AS 'lbl_azp_crt_capture_t_rcb_route',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_service . " AS 'lbl_azp_crt_capture_t_rcb_service',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_size . " AS 'lbl_azp_crt_capture_t_rcb_size',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_tmp_name . " AS 'lbl_azp_crt_capture_t_rcb_tmp_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_type . " AS 'lbl_azp_crt_capture_t_rcb_type',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_full_name . " AS 'lbl_azp_crt_request_data_t_full_name',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " AS 'lbl_azp_crt_request_data_t_identification',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " AS 'lbl_azp_crt_request_data_t_plaque_enrollment',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'lbl_azp_crt_request_data_t_request_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_id . " AS 'lbl_azp_crt_request_data_t_request_id',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro'
				FROM " . t_azp_crt_capture . " tc_azp_crt_capture
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_request_data ." tc_azp_crt_request_data
					ON tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . "
						= tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client ." tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank ." tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_capture." . d_azp_crt_capture_m_deleted . " = '2'
				ORDER BY tc_azp_crt_capture." . d_azp_crt_capture_id_azp_crt_capture . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_capture." . d_azp_crt_capture_id_azp_crt_capture . " AS 'lbl_azp_crt_capture_id_azp_crt_capture',
					tc_azp_crt_capture." . d_azp_crt_capture_m_by_created . " AS 'lbl_azp_crt_capture_m_by_created',
					tc_azp_crt_capture." . d_azp_crt_capture_m_by_modified . " AS 'lbl_azp_crt_capture_m_by_modified',
					tc_azp_crt_capture." . d_azp_crt_capture_m_date_created . " AS 'lbl_azp_crt_capture_m_date_created',
					tc_azp_crt_capture." . d_azp_crt_capture_m_date_modified . " AS 'lbl_azp_crt_capture_m_date_modified',
					tc_azp_crt_capture." . d_azp_crt_capture_m_description . " AS 'lbl_azp_crt_capture_m_description',
					tc_azp_crt_capture." . d_azp_crt_capture_m_level . " AS 'lbl_azp_crt_capture_m_level',
					tc_azp_crt_capture." . d_azp_crt_capture_m_status . " AS 'lbl_azp_crt_capture_m_status',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_date_image . " AS 'lbl_azp_crt_capture_t_crt_date_image',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_date_load . " AS 'lbl_azp_crt_capture_t_crt_date_load',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_document . " AS 'lbl_azp_crt_capture_t_crt_document',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_error . " AS 'lbl_azp_crt_capture_t_crt_error',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_mark_image . " AS 'lbl_azp_crt_capture_t_crt_mark_image',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_name . " AS 'lbl_azp_crt_capture_t_crt_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_route . " AS 'lbl_azp_crt_capture_t_crt_route',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_size . " AS 'lbl_azp_crt_capture_t_crt_size',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_tmp_name . " AS 'lbl_azp_crt_capture_t_crt_tmp_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_crt_type . " AS 'lbl_azp_crt_capture_t_crt_type',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_amount . " AS 'lbl_azp_crt_capture_t_rcb_amount',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_date_load . " AS 'lbl_azp_crt_capture_t_rcb_date_load',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_document . " AS 'lbl_azp_crt_capture_t_rcb_document',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_error . " AS 'lbl_azp_crt_capture_t_rcb_error',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_name . " AS 'lbl_azp_crt_capture_t_rcb_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_nro_receipt . " AS 'lbl_azp_crt_capture_t_rcb_nro_receipt',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_route . " AS 'lbl_azp_crt_capture_t_rcb_route',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_service . " AS 'lbl_azp_crt_capture_t_rcb_service',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_size . " AS 'lbl_azp_crt_capture_t_rcb_size',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_tmp_name . " AS 'lbl_azp_crt_capture_t_rcb_tmp_name',
					tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_type . " AS 'lbl_azp_crt_capture_t_rcb_type',
					tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . " AS 'lbl_azp_crt_capture_v_id_azp_crt_request_data'
				FROM " . t_azp_crt_capture . " tc_azp_crt_capture
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_capture." . d_azp_crt_capture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_capture." . d_azp_crt_capture_id_azp_crt_capture . " = '" . $this->id . "'
					AND tc_azp_crt_capture." . d_azp_crt_capture_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_capture_certificate(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_ct_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_ct_id']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_ct_date_load'])) { throw new Exception('<b>Error:</b> El campo de fecha cargue esta prohibido modificar.'); }
				if (!isset($data['field_ct_mark_image'])) { throw new Exception('<b>Error:</b> El campo de marcar imagen esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_date_load = $this->db->scape($data['field_ct_date_load']);
				$empty_mark_image = $this->db->scape($data['field_ct_mark_image']);
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
				if (Func::emp($empty_date_load) || $empty_date_load == 'aaaa-mm-dd') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha cargue es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_date_load) < 10 || strlen($empty_date_load) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha cargue está mal diligenciado, debe ser aaaa-mm-dd.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_mark_image) || strtolower($empty_mark_image) == strtolower('ninguno') || $empty_mark_image == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de marcar imagen es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_mark_image)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de marcar imagen solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_capture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_level . " = '2'");
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
		final public function sql_azp_crt_capture_certificate(array $data) : array {
			$var_error = $this->error_sql_azp_crt_capture_certificate($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_ct_id']);
				#-------------------------------------------------------------------------#
				$empty_date_load = $this->db->scape($data['field_ct_date_load']);
				$empty_mark_image = $this->db->scape($data['field_ct_mark_image']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_capture_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_capture_m_date_modified => DATE_HOUR,
					d_azp_crt_capture_t_crt_date_load => $empty_date_load,
					d_azp_crt_capture_t_crt_mark_image => $empty_mark_image,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_capture, $var_array, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
				# --------------------------------------------------------------------------------------------------
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_crt_request_data_t_crt_date_load => $empty_date_load,
							d_azp_crt_request_data_t_crt_mark_image => $empty_mark_image,
						);
						# Insertar valores en la nueva tabla que no existen
						$this->db->update(t_azp_crt_request_data, $var_array,
							d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_capture_v_id_azp_crt_request_data] . "'"
						);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo almacenado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_crt_capture_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_capture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_level . " = '2'");
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
		final public function sql_azp_crt_capture_delete(array $data) : array {
			$var_error = $this->error_sql_azp_crt_capture_delete($data);
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
				$var_array = array(d_azp_crt_capture_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_capture, $var_array, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_crt_capture_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_name = $this->db->scape($data['field_cr_name']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es oblgitario.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_name = $this->db->select(d_azp_crt_capture_t_name, t_azp_crt_capture, d_azp_crt_capture_t_name . " = '" . $empty_name . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_name) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_name[0][0]) == strtolower($empty_name)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El nombre digitado ya existe registrado.');
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
		final public function sql_azp_crt_capture_insert(array $data) : array {
			$var_error = $this->error_sql_azp_crt_capture_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_name = $this->db->scape($data['field_cr_name']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_capture_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_crt_capture_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_capture_m_date_created => DATE_HOUR,
					d_azp_crt_capture_m_date_modified => DATE_HOUR,
					d_azp_crt_capture_m_deleted => '1',
					d_azp_crt_capture_m_description => $empty_description,
					d_azp_crt_capture_m_level => '2',
					d_azp_crt_capture_m_status => '1',
					d_azp_crt_capture_m_temp => '1',
					d_azp_crt_capture_t_name => ucwords(strtolower($empty_name)),
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_crt_capture, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_capture_receipt(array $data) {
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
					throw new Exception('<b>Error:</b> El campo de id es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_amount)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor es oblgitario.');
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
					throw new Exception('<b>Error:</b> El campo de fecha cargue es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_date_load) < 10 || strlen($empty_date_load) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha cargue está mal diligenciado, debe ser aaaa-mm-dd.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_nro_receipt)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de no recibo es oblgitario.');
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
				$sql_id = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_capture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_level . " = '2'");
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
		final public function sql_azp_crt_capture_receipt(array $data) : array {
			$var_error = $this->error_sql_azp_crt_capture_receipt($data);
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
					d_azp_crt_capture_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_capture_m_date_modified => DATE_HOUR,
					d_azp_crt_capture_t_rcb_amount => $empty_amount,
					d_azp_crt_capture_t_rcb_date_load => $empty_date_load,
					d_azp_crt_capture_t_rcb_nro_receipt => $empty_nro_receipt,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_capture, $var_array, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
				# --------------------------------------------------------------------------------------------------
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_crt_request_data_t_rcb_amount => $empty_amount,
							d_azp_crt_request_data_t_rcb_date_load => $empty_date_load,
							d_azp_crt_request_data_t_rcb_nro_receipt => $empty_nro_receipt,
						);
						# Insertar valores en la nueva tabla que no existen
						$this->db->update(t_azp_crt_request_data, $var_array,
							d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_capture_v_id_azp_crt_request_data] . "'"
						);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo almacenado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_capture_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_capture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_level . " = '2'");
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
		final public function sql_azp_crt_capture_remove(array $data) : array {
			$var_error = $this->error_sql_azp_crt_capture_remove($data);
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
				$var_array = array(d_azp_crt_capture_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_capture, $var_array, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_capture_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_capture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_level . " = '2'");
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
		final public function sql_azp_crt_capture_restore(array $data) : array {
			$var_error = $this->error_sql_azp_crt_capture_restore($data);
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
				$var_array = array(d_azp_crt_capture_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_capture, $var_array, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_capture_update(array $data) {
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
				if (!isset($data['field_up_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_name = $this->db->scape($data['field_up_name']);
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
				if (Func::emp($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es oblgitario.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_state) || strtolower($empty_state) == strtolower('seleccionar') || $empty_state == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_state)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_capture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "' AND " . d_azp_crt_capture_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_name = $this->db->select(d_azp_crt_capture_t_name, t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " != '" . $empty_id . "' AND " . d_azp_crt_capture_t_name . " = '" . $empty_name . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_name) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_name[0][0]) == strtolower($empty_name)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El nombre digitado ya existe registrado.');
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
		final public function sql_azp_crt_capture_update(array $data) : array {
			$var_error = $this->error_sql_azp_crt_capture_update($data);
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
				$empty_name = $this->db->scape($data['field_up_name']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_crt_capture, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_crt_capture_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_crt_capture_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_crt_capture_m_date_created => DATE_HOUR,
							d_azs_crt_capture_m_date_modified => DATE_HOUR,
							d_azs_crt_capture_m_deleted => $key_sql_select[d_azp_crt_capture_m_deleted],
							d_azs_crt_capture_m_description => $key_sql_select[d_azp_crt_capture_m_description],
							d_azs_crt_capture_m_level => $key_sql_select[d_azp_crt_capture_m_level],
							d_azs_crt_capture_m_status => $key_sql_select[d_azp_crt_capture_m_status],
							d_azs_crt_capture_m_temp => $key_sql_select[d_azp_crt_capture_m_temp],
							d_azs_crt_capture_t_name => ucwords(strtolower($key_sql_select[d_azp_crt_capture_t_name])),
							d_azs_crt_capture_v_id_azp_crt_capture => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_crt_capture, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_capture_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_capture_m_date_modified => DATE_HOUR,
					d_azp_crt_capture_m_description => $empty_description,
					d_azp_crt_capture_m_status => $empty_state,
					d_azp_crt_capture_t_name => ucwords(strtolower($empty_name)),
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_capture, $var_array, d_azp_crt_capture_id_azp_crt_capture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_crt_capture_fcertificate(string $var_id, string $var_name, string $var_type, string $var_tmp_name, string $var_error, string $var_size) {
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
						$var_folder = 'systemfiles/filesproject/';
						$var_subfol = 'azp_crt_capture/certificate/';
						$var_route = $var_folder . $var_subfol;
						#-------------------------------------------------------------------------#
						if ($key_sql[d_azp_crt_request_data_v_id_azp_crt_request_type] == 2) {
							$var_identification = $key_sql[d_azp_crt_request_data_t_identification];
							$var_document = $var_identification . '.pdf';
						} else {
							$var_identification = $key_sql[d_azp_crt_request_data_t_identification];
							$var_plaque_enrollment = $key_sql[d_azp_crt_request_data_t_plaque_enrollment];
							$var_document = $var_identification . '_' . $var_plaque_enrollment . '.pdf';
						}						
						#-------------------------------------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_crt_capture_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_crt_capture_m_date_modified => DATE_HOUR,
							d_azp_crt_capture_t_crt_date_image => DATE,
							d_azp_crt_capture_t_crt_document => $var_document,
							d_azp_crt_capture_t_crt_error => $var_error,
							d_azp_crt_capture_t_crt_name => ucwords(strtolower(trim(preg_replace('/\s+/',' ', $var_name)))),
							d_azp_crt_capture_t_crt_route => $var_route,
							d_azp_crt_capture_t_crt_size => $var_size,
							d_azp_crt_capture_t_crt_tmp_name => $var_tmp_name,
							d_azp_crt_capture_t_crt_type => $var_type,
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_crt_capture, $var_array,
							d_azp_crt_capture_v_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_request_data_id_azp_crt_request_data] . "'"
						);
						#-------------------------------------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_crt_request_data_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_crt_request_data_m_date_modified => DATE_HOUR,
							d_azp_crt_request_data_t_crt_date_image => DATE,
							d_azp_crt_request_data_t_crt_document => $var_document,
							d_azp_crt_request_data_t_crt_error => $var_error,
							d_azp_crt_request_data_t_crt_name => ucwords(strtolower(trim(preg_replace('/\s+/',' ', $var_name)))),
							d_azp_crt_request_data_t_crt_route => $var_route,
							d_azp_crt_request_data_t_crt_size => $var_size,
							d_azp_crt_request_data_t_crt_tmp_name => $var_tmp_name,
							d_azp_crt_request_data_t_crt_type => $var_type,
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_crt_request_data, $var_array,
							d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_request_data_id_azp_crt_request_data] . "'"
						);
						#-------------------------------------------------------------------------#
						Files::upload_file(trim(preg_replace('/\s+/',' ', $var_document)), $var_tmp_name, $var_route, true);
						# Dar permisos a la ruta y archivo
						chmod($var_route . $var_document, 0777);
					}
					# Retornar el mensaje una vez ejecutada la rutina del proceso
					return array('success' => 1, 'message' => '<b>Exito:</b> Archivo almacenado correctamente.');
				} else {
					# Retornar el mensaje una vez ejecutada la rutina del proceso
					return array('error' => 1, 'message' => '<b>Error:</b> Archivo almacenado incorrectamente.');
				}
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_crt_capture_freceipt(string $var_id, string $var_nro, string $var_name, string $var_type, string $var_tmp_name, string $var_error, string $var_size) {
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
						$var_folder = 'systemfiles/filesproject/';
						$var_subfol = 'azp_crt_capture/receipt/';
						$var_route = $var_folder . $var_subfol;
						$var_document = 'REC_' . $var_nro . '.pdf';
						#-------------------------------------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_crt_capture_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_crt_capture_m_date_modified => DATE_HOUR,
							d_azp_crt_capture_t_rcb_document => $var_document,
							d_azp_crt_capture_t_rcb_error => $var_error,
							d_azp_crt_capture_t_rcb_name => ucwords(strtolower(trim(preg_replace('/\s+/',' ', $var_name)))),
							d_azp_crt_capture_t_rcb_receipt => 'SI',
							d_azp_crt_capture_t_rcb_route => $var_route,
							d_azp_crt_capture_t_rcb_size => $var_size,
							d_azp_crt_capture_t_rcb_tmp_name => $var_tmp_name,
							d_azp_crt_capture_t_rcb_type => $var_type,
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_crt_capture, $var_array,
							d_azp_crt_capture_v_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_request_data_id_azp_crt_request_data] . "'"
						);
						#-------------------------------------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_crt_request_data_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_crt_request_data_m_date_modified => DATE_HOUR,
							d_azp_crt_request_data_t_rcb_document => $var_document,
							d_azp_crt_request_data_t_rcb_error => $var_error,
							d_azp_crt_request_data_t_rcb_name => ucwords(strtolower(trim(preg_replace('/\s+/',' ', $var_name)))),
							d_azp_crt_request_data_t_rcb_receipt => 'SI',
							d_azp_crt_request_data_t_rcb_route => $var_route,
							d_azp_crt_request_data_t_rcb_size => $var_size,
							d_azp_crt_request_data_t_rcb_tmp_name => $var_tmp_name,
							d_azp_crt_request_data_t_rcb_type => $var_type,
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_crt_request_data, $var_array,
							d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $key_sql[d_azp_crt_request_data_id_azp_crt_request_data] . "'"
						);
						#-------------------------------------------------------------------------#
						Files::upload_file(trim(preg_replace('/\s+/',' ', $var_document)), $var_tmp_name, $var_route, true);
						# Dar permisos a la ruta y archivo
						chmod($var_route . $var_document, 0777);
					}
					# Retornar el mensaje una vez ejecutada la rutina del proceso
					return array('success' => 1, 'message' => '<b>Exito:</b> Archivo almacenado correctamente.');
				} else {
					# Retornar el mensaje una vez ejecutada la rutina del proceso
					return array('error' => 1, 'message' => '<b>Error:</b> Archivo almacenado incorrectamente.');
				}
			}
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>