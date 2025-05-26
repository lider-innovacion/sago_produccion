<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_gsc_captureModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_by_create() {
			# Definicion de valores recibido por get
			/*if (isset($_GET['field_date'])) {
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $_GET['field_date'] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						$var_number_request = $value[d_azp_gsc_request_t_number_request];
						$var_request_date = $value[d_azp_gsc_request_t_request_date];
						$var_idclient = $value[d_azp_gsc_request_v_id_azp_gsc_client];
					endforeach;
				} else { $var_number_request = ''; $var_request_date = ''; $var_idclient = ''; }
			} else { $var_number_request = ''; $var_request_date = ''; $var_idclient = ''; }*/
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
					tc_azp_sys_answer." . d_azp_sys_answer_t_name . " AS 'lbl_azp_gsc_capture_t_date_visible',
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
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_sys_answer . " tc_azp_sys_answer
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_t_date_visible . "
						= tc_azp_sys_answer." . d_azp_sys_answer_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_request ." tc_azp_gsc_request
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_capture." . d_azp_gsc_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_gsc_capture." . d_azp_gsc_capture_m_deleted . " = '1'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '1'
				ORDER BY tc_azp_gsc_capture." . d_azp_gsc_capture_id_azp_gsc_capture . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_gsc_capture." . d_azs_gsc_capture_id_azs_gsc_capture . " AS 'lbl_azs_gsc_capture_id_azs_gsc_capture',
					tc_azs_gsc_capture." . d_azs_gsc_capture_m_date_modified . " AS 'lbl_azs_gsc_capture_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_gsc_capture." . d_azs_gsc_capture_m_date_created . " AS 'lbl_azs_gsc_capture_m_date_created',
					tc_azs_gsc_capture." . d_azs_gsc_capture_m_date_modified . " AS 'lbl_azs_gsc_capture_m_date_modified',
					tc_azs_gsc_capture." . d_azs_gsc_capture_m_description . " AS 'lbl_azs_gsc_capture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_gsc_capture." . d_azs_gsc_capture_t_document . " AS 'lbl_azs_gsc_capture_t_document',
					tc_azs_gsc_capture." . d_azs_gsc_capture_t_date_visible . " AS 'lbl_azs_gsc_capture_t_date_visible',
					tc_azs_gsc_capture." . d_azs_gsc_capture_t_error . " AS 'lbl_azs_gsc_capture_t_error',
					tc_azs_gsc_capture." . d_azs_gsc_capture_t_folder . " AS 'lbl_azs_gsc_capture_t_folder',
					tc_azs_gsc_capture." . d_azs_gsc_capture_t_name . " AS 'lbl_azs_gsc_capture_t_name',
					tc_azs_gsc_capture." . d_azs_gsc_capture_t_route . " AS 'lbl_azs_gsc_capture_t_route',
					tc_azs_gsc_capture." . d_azs_gsc_capture_t_size . " AS 'lbl_azs_gsc_capture_t_size',
					tc_azs_gsc_capture." . d_azs_gsc_capture_t_title . " AS 'lbl_azs_gsc_capture_t_title',
					tc_azs_gsc_capture." . d_azs_gsc_capture_t_tmp_name . " AS 'lbl_azs_gsc_capture_t_tmp_name',
					tc_azs_gsc_capture." . d_azs_gsc_capture_t_type . " AS 'lbl_azs_gsc_capture_t_type',
					tc_azs_gsc_capture." . d_azs_gsc_capture_u_gsc_request . " AS 'lbl_azs_gsc_capture_u_gsc_request',
					tc_azs_gsc_capture." . d_azs_gsc_capture_v_id_azp_gsc_capture . " AS 'lbl_azs_gsc_capture_v_id_azp_gsc_capture'
				FROM " . t_azs_gsc_capture . " tc_azs_gsc_capture
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_gsc_capture." . d_azs_gsc_capture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_gsc_capture." . d_azs_gsc_capture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_gsc_capture." . d_azs_gsc_capture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_gsc_capture." . d_azs_gsc_capture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_gsc_capture." . d_azs_gsc_capture_v_id_azp_gsc_capture . " = '" . $this->id . "'
				ORDER BY tc_azs_gsc_capture." . d_azs_gsc_capture_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_gsc_capture . "
				WHERE " . d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $this->id . "'
					AND " . d_azp_gsc_capture_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_gsc_capture);
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
					tc_azp_gsc_capture." . d_azp_gsc_capture_id_azp_gsc_capture . " AS 'lbl_azp_gsc_capture_id_azp_gsc_capture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_date_created . " AS 'lbl_azp_gsc_capture_m_date_created',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_date_modified . " AS 'lbl_azp_gsc_capture_m_date_modified',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_description . " AS 'lbl_azp_gsc_capture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_sys_answer." . d_azp_sys_answer_t_name . " AS 'lbl_azp_sys_answer_t_date_visible',
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
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_sys_answer . " tc_azp_sys_answer
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_t_date_visible . "
						= tc_azp_sys_answer." . d_azp_sys_answer_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_request ." tc_azp_gsc_request
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_capture." . d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $this->id . "'
					AND tc_azp_gsc_capture." . d_azp_gsc_capture_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Definicion de valores recibido por get
			/*if (isset($_GET['field_date'])) {
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $_GET['field_date'] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						$var_number_request = $value[d_azp_gsc_request_t_number_request];
						$var_request_date = $value[d_azp_gsc_request_t_request_date];
						$var_idclient = $value[d_azp_gsc_request_v_id_azp_gsc_client];
					endforeach;
				} else { $var_number_request = ''; $var_request_date = ''; $var_idclient = ''; }
			} else { $var_number_request = ''; $var_request_date = ''; $var_idclient = ''; }*/
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
					tc_azp_sys_answer." . d_azp_sys_answer_t_name . " AS 'lbl_azp_gsc_capture_t_date_visible',
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
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_sys_answer . " tc_azp_sys_answer
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_t_date_visible . "
						= tc_azp_sys_answer." . d_azp_sys_answer_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_request ." tc_azp_gsc_request
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_capture." . d_azp_gsc_capture_m_deleted . " = '3'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '1'
				ORDER BY tc_azp_gsc_capture." . d_azp_gsc_capture_id_azp_gsc_capture . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_file() {
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
					tc_azp_sys_answer." . d_azp_sys_answer_t_name . " AS 'lbl_azp_sys_answer_t_name',
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
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_sys_answer . " tc_azp_sys_answer
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_t_date_visible . "
						= tc_azp_sys_answer." . d_azp_sys_answer_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_request ." tc_azp_gsc_request
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_capture." . d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $this->id . "'
					AND tc_azp_gsc_capture." . d_azp_gsc_capture_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Definicion de valores recibido por get
			/*if (isset($_GET['field_date'])) {
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $_GET['field_date'] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						$var_number_request = $value[d_azp_gsc_request_t_number_request];
						$var_request_date = $value[d_azp_gsc_request_t_request_date];
						$var_idclient = $value[d_azp_gsc_request_v_id_azp_gsc_client];
					endforeach;
				} else { $var_number_request = ''; $var_request_date = ''; $var_idclient = ''; }
			} else { $var_number_request = ''; $var_request_date = ''; $var_idclient = ''; }*/
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
					tc_azp_sys_answer." . d_azp_sys_answer_t_name . " AS 'lbl_azp_gsc_capture_t_date_visible',
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
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_sys_answer . " tc_azp_sys_answer
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_t_date_visible . "
						= tc_azp_sys_answer." . d_azp_sys_answer_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_request ." tc_azp_gsc_request
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_capture." . d_azp_gsc_capture_m_deleted . " = '1'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '1'
				ORDER BY tc_azp_gsc_capture." . d_azp_gsc_capture_id_azp_gsc_capture . " ASC
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
					tc_azp_gsc_capture." . d_azp_gsc_capture_id_azp_gsc_capture . " AS 'lbl_azp_gsc_capture_id_azp_gsc_capture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_date_created . " AS 'lbl_azp_gsc_capture_m_date_created',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_date_modified . " AS 'lbl_azp_gsc_capture_m_date_modified',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_description . " AS 'lbl_azp_gsc_capture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_sys_answer." . d_azp_sys_answer_t_name . " AS 'lbl_azp_gsc_capture_t_date_visible',
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
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_sys_answer . " tc_azp_sys_answer
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_t_date_visible . "
						= tc_azp_sys_answer." . d_azp_sys_answer_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_request ." tc_azp_gsc_request
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_capture." . d_azp_gsc_capture_m_deleted . " = '1'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " = '2'
					" . $var_client . " " . $var_request . " " . $var_date . " " . $var_identification . "
				ORDER BY tc_azp_gsc_capture." . d_azp_gsc_capture_id_azp_gsc_capture . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Definicion de valores recibido por get
			/*if (isset($_GET['field_date'])) {
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_id_azp_gsc_request . " = '" . $_GET['field_date'] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						$var_number_request = $value[d_azp_gsc_request_t_number_request];
						$var_request_date = $value[d_azp_gsc_request_t_request_date];
						$var_idclient = $value[d_azp_gsc_request_v_id_azp_gsc_client];
					endforeach;
				} else { $var_number_request = ''; $var_request_date = ''; $var_idclient = ''; }
			} else { $var_number_request = ''; $var_request_date = ''; $var_idclient = ''; }*/
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
					tc_azp_sys_answer." . d_azp_sys_answer_t_name . " AS 'lbl_azp_gsc_capture_t_date_visible',
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
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
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
				INNER JOIN " . t_azp_sys_answer . " tc_azp_sys_answer
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_t_date_visible . "
						= tc_azp_sys_answer." . d_azp_sys_answer_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_request ." tc_azp_gsc_request
					ON tc_azp_gsc_capture." . d_azp_gsc_capture_v_id_azp_gsc_request . "
						= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_capture." . d_azp_gsc_capture_m_deleted . " = '2'
				ORDER BY tc_azp_gsc_capture." . d_azp_gsc_capture_id_azp_gsc_capture . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_capture." . d_azp_gsc_capture_id_azp_gsc_capture . " AS 'lbl_azp_gsc_capture_id_azp_gsc_capture',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_by_created . " AS 'lbl_azp_gsc_capture_m_by_created',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_by_modified . " AS 'lbl_azp_gsc_capture_m_by_modified',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_date_created . " AS 'lbl_azp_gsc_capture_m_date_created',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_date_modified . " AS 'lbl_azp_gsc_capture_m_date_modified',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_description . " AS 'lbl_azp_gsc_capture_m_description',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_level . " AS 'lbl_azp_gsc_capture_m_level',
					tc_azp_gsc_capture." . d_azp_gsc_capture_m_status . " AS 'lbl_azp_gsc_capture_m_status',
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
				WHERE tc_azp_gsc_capture." . d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $this->id . "'
					AND tc_azp_gsc_capture." . d_azp_gsc_capture_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_controller_folder() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(*) AS 'lbl_azp_gsc_capture_t_count'
				FROM " . t_azp_gsc_capture . "
				-- ---------------------------------------------------------------
				WHERE " . d_azp_gsc_capture_t_folder . " = '" . $this->id . "'
					AND (" . d_azp_gsc_capture_t_name . " IS NULL
						OR " . d_azp_gsc_capture_t_name . " = '')
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_capture_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "' AND " . d_azp_gsc_capture_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "' AND " . d_azp_gsc_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_capture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "' AND " . d_azp_gsc_capture_m_level . " = '2'");
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
		final public function sql_azp_gsc_capture_delete(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_capture_delete($data);
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
				$var_array = array(d_azp_gsc_capture_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_capture, $var_array, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_gsc_capture_document(string $var_id, string $var_name, string $var_type, string $var_tmp_name, string $var_error, string $var_size) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				Helper::load('files');
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $var_id . "'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql) {
						$var_folder = 'systemfiles/filesproject/';
						$var_subfol = 'azp_gsc_capture/';
						$var_route = $var_folder . $var_subfol;
						#$var_document = $var_identification . '_' . $var_plaque_enrollment . '.pdf';
						$var_document = $var_name;
						#-------------------------------------------------------------------------#
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_capture_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_capture_m_date_modified => DATE_HOUR,
							d_azp_gsc_capture_m_description => '',
							d_azp_gsc_capture_m_status => '1',
							d_azp_gsc_capture_m_temp => '1',
							d_azp_gsc_capture_t_document => $var_document,
							d_azp_gsc_capture_t_error => $var_error,
							//d_azp_gsc_capture_t_folder => $key_sql[d_azp_gsc_capture_t_folder],
							d_azp_gsc_capture_t_name => strtoupper(trim(preg_replace('/\s+/',' ', $var_name))),
							d_azp_gsc_capture_t_route => $var_route,
							d_azp_gsc_capture_t_size => $var_size,
							d_azp_gsc_capture_t_tmp_name => $var_tmp_name,
							d_azp_gsc_capture_t_type => $var_type,
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_capture, $var_array, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $key_sql[d_azp_gsc_capture_id_azp_gsc_capture] . "'");
						#-------------------------------------------------------------------------#
						//$var_folder = 'filesproject/azp_gsc_capture/' . $key_sql[d_azp_gsc_capture_t_folder] . '/';
						/*$var_folder = 'filesproject/azp_gsc_capture/';
						Files::upload_file(strtoupper(trim(preg_replace('/\s+/',' ', $var_name))), $var_tmp_name, $var_folder, true);*/
						#-------------------------------------------------------------------------#
						//Files::upload_file(trim(preg_replace('/\s+/',' ', $var_document)), $var_tmp_name, $var_route, true);
						Files::upload_file($var_name, $var_tmp_name, $var_route, true);
						//echo $var_route . $var_document;
						# Dar permisos a la ruta y archivo
						chmod('../' . $var_route . $var_document, 0777);
					}
				}
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_capture_file(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_fl_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_fl_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_fl_id']);
				$empty_description = $this->db->scape($data['field_fl_description']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_fl_date_load'])) { throw new Exception('<b>Error:</b> El campo de fecha cargue esta prohibido modificar.'); }
				if (!isset($data['field_fl_date_visible'])) { throw new Exception('<b>Error:</b> El campo de fecha visible esta prohibido modificar.'); }
				if (!isset($data['field_fl_title'])) { throw new Exception('<b>Error:</b> El campo de titulo esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_date_load = $this->db->scape($data['field_fl_date_load']);
				$empty_date_visible = $this->db->scape($data['field_fl_date_visible']);
				$empty_title = $this->db->scape($data['field_fl_title']);
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
				if (Func::emp($empty_date_visible) || strtolower($empty_date_visible) == strtolower('ninguno') || $empty_date_visible == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha visible es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_date_visible)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha visible solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_title)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de titulo es oblgitario.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_title)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de titulo solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_title) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de titulo permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_title, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de titulo no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_title)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de titulo no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "' AND " . d_azp_gsc_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_capture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "' AND " . d_azp_gsc_capture_m_level . " = '2'");
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
		final public function sql_azp_gsc_capture_file(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_capture_file($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_fl_id']);
				$empty_description = $this->db->scape($data['field_fl_description']);
				#-------------------------------------------------------------------------#
				$empty_associate = $this->db->scape($data['field_fl_associate']);
				$empty_date_load = $this->db->scape($data['field_fl_date_load']);
				$empty_date_visible = $this->db->scape($data['field_fl_date_visible']);
				$empty_count = $this->db->scape($data['field_fl_count']);
				$empty_title = $this->db->scape($data['field_fl_title']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_capture_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_capture_m_date_modified => DATE_HOUR,
					d_azp_gsc_capture_s_validate => 'Si',
					d_azp_gsc_capture_t_date_load => $empty_date_load,
					d_azp_gsc_capture_t_date_visible => $empty_date_visible,
					d_azp_gsc_capture_t_title => $empty_title,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_capture, $var_array, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_gsc_request_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_gsc_request_m_date_modified => DATE_HOUR,
							d_azp_gsc_request_s_capture => 'Si',
							d_azp_gsc_request_v_id_azp_gsc_phase => '8',
							d_azp_gsc_request_v_id_azp_gsc_state => '2',
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_request, $var_array,
							d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_capture_v_id_azp_gsc_request] . "' AND " .
							d_azp_gsc_request_v_id_azp_gsc_phase . " <= '8'");
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
							d_azp_gsc_logs_request_v_id_azp_gsc_request => $key_sql[d_azp_gsc_capture_v_id_azp_gsc_request],
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
							d_azp_gsc_observation_internal_t_identification => $key_sql[d_azp_gsc_capture_t_folder],
							d_azp_gsc_observation_internal_t_observation => 'Se recibe certificado.',
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_gsc_observation_internal, $var_array);
						#-------------------------------------------------------------------------#
						$var_array = array(d_azp_gsc_request_t_observation => DATE . ' ' . 'Se recibe certificado',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_capture_v_id_azp_gsc_request] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				if ($empty_associate == '1') {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_cp = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_cp) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_cp as $key_sql_cp):
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$var_sql_rq = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql_rq) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql_rq as $key_sql_rq):
									$var_sql = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_m_deleted . " = '1' AND " . d_azp_gsc_capture_t_document . " = '' AND " . d_azp_gsc_capture_t_folder . " = '" . $key_sql_rq[d_azp_gsc_capture_t_folder] . "' AND " . d_azp_gsc_capture_t_name . " = ''");
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (false != $var_sql) {
										# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
										foreach ($var_sql as $key_sql):
											# Array para asignar argumentos o valores a los elementos
											$var_array = array(
												d_azp_gsc_request_m_by_modified => $_SESSION[SESS_APP_ID],
												d_azp_gsc_request_m_date_modified => DATE_HOUR,
												d_azp_gsc_request_s_capture => 'Si',
												//d_azp_gsc_request_v_id_azp_gsc_phase => '8',
												//d_azp_gsc_request_v_id_azp_gsc_state => '2',
											);
											# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
											$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_capture_v_id_azp_gsc_request] . "'");
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
												d_azp_gsc_logs_request_v_id_azp_gsc_request => $key_sql[d_azp_gsc_capture_v_id_azp_gsc_request],
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
												d_azp_gsc_observation_internal_t_identification => $key_sql[d_azp_gsc_capture_t_folder],
												d_azp_gsc_observation_internal_t_observation => 'Se recibe certificado.',
											);
											# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
											$this->db->insert(t_azp_gsc_observation_internal, $var_array);
											#-------------------------------------------------------------------------#
											$var_array = array(d_azp_gsc_request_t_observation => DATE . ' ' . 'Se recibe certificado.',);
											# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
											$this->db->update(t_azp_gsc_request, $var_array, d_azp_gsc_request_id_azp_gsc_request . " = '" . $key_sql[d_azp_gsc_capture_v_id_azp_gsc_request] . "'");
										endforeach;
									}
									#-------------------------------------------------------------------------#
									$var_array = array(
										d_azp_gsc_capture_m_by_modified => $_SESSION[SESS_APP_ID],
										d_azp_gsc_capture_m_date_modified => DATE_HOUR,
										d_azp_gsc_capture_m_description => $key_sql_rq[d_azp_gsc_capture_m_description],
										d_azp_gsc_capture_s_validate => 'Si',
										d_azp_gsc_capture_t_date_visible => $key_sql_rq[d_azp_gsc_capture_t_date_visible],
										d_azp_gsc_capture_t_error => $key_sql_rq[d_azp_gsc_capture_t_error],
										d_azp_gsc_capture_t_name => $key_sql_rq[d_azp_gsc_capture_t_name],
										d_azp_gsc_capture_t_size => $key_sql_rq[d_azp_gsc_capture_t_size],
										d_azp_gsc_capture_t_title => ucwords(strtolower($key_sql_rq[d_azp_gsc_capture_t_title])),
										d_azp_gsc_capture_t_tmp_name => $key_sql_rq[d_azp_gsc_capture_t_tmp_name],
										d_azp_gsc_capture_t_type => $key_sql_rq[d_azp_gsc_capture_t_type],
									);
									# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
									$this->db->update(t_azp_gsc_capture, $var_array, d_azp_gsc_capture_t_folder . " = '" . $key_sql_rq[d_azp_gsc_capture_t_folder] . "' AND " . d_azp_gsc_capture_t_name . " = ''");
								endforeach;
							}
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_t_name . " != ''");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$empty_new_route = $key_sql[d_azp_gsc_capture_t_route] . $key_sql[d_azp_gsc_capture_t_name];
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_capture_t_document => $empty_new_route,);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_gsc_capture, $var_array, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $key_sql[d_azp_gsc_capture_id_azp_gsc_capture] . "'");
					endforeach;
				}*/
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo almacenado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_gsc_capture_insert(array $data) {
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
				/*if (!Strings::only_letters($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre solo permite letras.');
				}*/
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
				$sql_name = $this->db->select(d_azp_gsc_capture_t_name, t_azp_gsc_capture, d_azp_gsc_capture_t_name . " = '" . $empty_name . "'");
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
		final public function sql_azp_gsc_capture_insert(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_capture_insert($data);
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
					d_azp_gsc_capture_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_capture_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_capture_m_date_created => DATE_HOUR,
					d_azp_gsc_capture_m_date_modified => DATE_HOUR,
					d_azp_gsc_capture_m_deleted => '1',
					d_azp_gsc_capture_m_description => $empty_description,
					d_azp_gsc_capture_m_level => '2',
					d_azp_gsc_capture_m_status => '1',
					d_azp_gsc_capture_m_temp => '1',
					d_azp_gsc_capture_t_date_visible => $empty_date_visible,
					d_azp_gsc_capture_t_title => ucwords(strtolower($empty_title)),
					d_azp_gsc_capture_v_id_azp_gsc_request => $empty_gsc_request,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_capture, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_capture_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "' AND " . d_azp_gsc_capture_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "' AND " . d_azp_gsc_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_capture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "' AND " . d_azp_gsc_capture_m_level . " = '2'");
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
		final public function sql_azp_gsc_capture_remove(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_capture_remove($data);
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
				$var_array = array(d_azp_gsc_capture_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_capture, $var_array, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_capture_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "' AND " . d_azp_gsc_capture_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "' AND " . d_azp_gsc_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_capture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "' AND " . d_azp_gsc_capture_m_level . " = '2'");
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
		final public function sql_azp_gsc_capture_restore(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_capture_restore($data);
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
				$var_array = array(d_azp_gsc_capture_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_capture, $var_array, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_capture_update(array $data) {
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
				if (!isset($data['field_up_date_visible'])) { throw new Exception('<b>Error:</b> El campo de fecha visible esta prohibido modificar.'); }
				if (!isset($data['field_up_title'])) { throw new Exception('<b>Error:</b> El campo de titulo esta prohibido modificar.'); }
				if (!isset($data['field_up_gsc_request'])) { throw new Exception('<b>Error:</b> El campo de solicitud cedula esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_date_visible = $this->db->scape($data['field_up_date_visible']);
				$empty_title = $this->db->scape($data['field_up_title']);
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
				if (Func::emp($empty_date_visible) || strtolower($empty_date_visible) == strtolower('ninguno') || $empty_date_visible == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha visible es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_date_visible)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha visible solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_title)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de titulo es oblgitario.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_title)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de titulo solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_title) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de titulo permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_title, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de titulo no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_title)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de titulo no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_gsc_request) || strtolower($empty_gsc_request) == strtolower('ninguno') || $empty_gsc_request == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud cedula es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_gsc_request)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de solicitud cedula solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "' AND " . d_azp_gsc_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_capture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "' AND " . d_azp_gsc_capture_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
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
		final public function sql_azp_gsc_capture_update(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_capture_update($data);
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
				$empty_date_visible = $this->db->scape($data['field_up_date_visible']);
				$empty_title = $this->db->scape($data['field_up_title']);
				$empty_gsc_request = $this->db->scape($data['field_up_gsc_request']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_gsc_capture, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_gsc_capture_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_gsc_capture_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_gsc_capture_m_date_created => DATE_HOUR,
							d_azs_gsc_capture_m_date_modified => DATE_HOUR,
							d_azs_gsc_capture_m_deleted => $key_sql_select[d_azp_gsc_capture_m_deleted],
							d_azs_gsc_capture_m_description => $key_sql_select[d_azp_gsc_capture_m_description],
							d_azs_gsc_capture_m_level => $key_sql_select[d_azp_gsc_capture_m_level],
							d_azs_gsc_capture_m_status => $key_sql_select[d_azp_gsc_capture_m_status],
							d_azs_gsc_capture_m_temp => $key_sql_select[d_azp_gsc_capture_m_temp],
							d_azs_gsc_capture_t_date_visible => $key_sql_select[d_azp_gsc_capture_t_date_visible],
							d_azs_gsc_capture_t_title => $key_sql_select[d_azp_gsc_capture_t_title],
							d_azs_gsc_capture_u_gsc_request => $key_sql_select[d_azp_gsc_capture_v_id_azp_gsc_request],
							d_azs_gsc_capture_v_id_azp_gsc_capture => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_gsc_capture, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_capture_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_capture_m_date_modified => DATE_HOUR,
					d_azp_gsc_capture_m_description => $empty_description,
					d_azp_gsc_capture_m_status => $empty_state,
					d_azp_gsc_capture_t_date_visible => $empty_date_visible,
					d_azp_gsc_capture_t_title => $empty_title,
					d_azp_gsc_capture_v_id_azp_gsc_request => $empty_gsc_request,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_capture, $var_array, d_azp_gsc_capture_id_azp_gsc_capture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_request() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_request, d_azp_gsc_request_m_deleted . " = '1' AND " . d_azp_gsc_request_m_status . " = '1'", "ORDER BY " . d_azp_gsc_request_t_full_name . " ASC");
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
		public function __destruct() {
			parent::__destruct();
		}
	}
?>