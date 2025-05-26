<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_gsc_exchange_portalModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_by_create() {
			$var_code = ''; $var_state = '';
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_v_id_azp_role . " = '9'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql): $var_gsc_client = $key_sql[d_azp_user_v_id_azp_fct_client]; endforeach;
				# Asignar nuevos valores a la sentencia sql o query
				$var_code = "AND tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . " = '" . $var_gsc_client . "'";
				$var_state = "AND tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_state . " = 'ACTIVO'";
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " AS 'lbl_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_date_created . " AS 'lbl_azp_gsc_exchange_portal_m_date_created',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_date_modified . " AS 'lbl_azp_gsc_exchange_portal_m_date_modified',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_description . " AS 'lbl_azp_gsc_exchange_portal_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_date_load . " AS 'lbl_azp_gsc_exchange_portal_t_date_load',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_state . " AS 'lbl_azp_gsc_exchange_portal_t_state',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_document . " AS 'lbl_azp_gsc_exchange_portal_w_document',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_error . " AS 'lbl_azp_gsc_exchange_portal_w_error',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_folder . " AS 'lbl_azp_gsc_exchange_portal_w_folder',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_name . " AS 'lbl_azp_gsc_exchange_portal_w_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_route . " AS 'lbl_azp_gsc_exchange_portal_w_route',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_size . " AS 'lbl_azp_gsc_exchange_portal_w_size',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_tmp_name . " AS 'lbl_azp_gsc_exchange_portal_w_tmp_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_type . " AS 'lbl_azp_gsc_exchange_portal_w_type',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
				FROM " . t_azp_gsc_exchange_portal . " tc_azp_gsc_exchange_portal
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_deleted . " = '1' " . $var_code . " " . $var_state . "
				GROUP BY tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " ASC
				ORDER BY tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " ASC
				LIMIT 10
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_id_azs_gsc_exchange_portal . " AS 'lbl_azs_gsc_exchange_portal_id_azs_gsc_exchange_portal',
					tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_m_date_modified . " AS 'lbl_azs_gsc_exchange_portal_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_m_date_created . " AS 'lbl_azs_gsc_exchange_portal_m_date_created',
					tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_m_date_modified . " AS 'lbl_azs_gsc_exchange_portal_m_date_modified',
					tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_m_description . " AS 'lbl_azs_gsc_exchange_portal_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_date_load . " AS 'lbl_azp_gsc_exchange_portal_t_date_load',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_state . " AS 'lbl_azp_gsc_exchange_portal_t_state',
					tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_w_document . " AS 'lbl_azs_gsc_exchange_portal_w_document',
					tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_w_error . " AS 'lbl_azs_gsc_exchange_portal_w_error',
					tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_w_folder . " AS 'lbl_azs_gsc_exchange_portal_w_folder',
					tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_w_name . " AS 'lbl_azs_gsc_exchange_portal_w_name',
					tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_w_route . " AS 'lbl_azs_gsc_exchange_portal_w_route',
					tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_w_size . " AS 'lbl_azs_gsc_exchange_portal_w_size',
					tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_w_tmp_name . " AS 'lbl_azs_gsc_exchange_portal_w_tmp_name',
					tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_w_type . " AS 'lbl_azs_gsc_exchange_portal_w_type'
				FROM " . t_azs_gsc_exchange_portal . " tc_azs_gsc_exchange_portal
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_v_id_azp_gsc_exchange_portal . " = '" . $this->id . "'
				ORDER BY tc_azs_gsc_exchange_portal." . d_azs_gsc_exchange_portal_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_gsc_exchange_portal . "
				WHERE " . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $this->id . "'
					AND " . d_azp_gsc_exchange_portal_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_gsc_exchange_portal);
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
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " AS 'lbl_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_date_created . " AS 'lbl_azp_gsc_exchange_portal_m_date_created',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_date_modified . " AS 'lbl_azp_gsc_exchange_portal_m_date_modified',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_description . " AS 'lbl_azp_gsc_exchange_portal_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_date_load . " AS 'lbl_azp_gsc_exchange_portal_t_date_load',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_state . " AS 'lbl_azp_gsc_exchange_portal_t_state',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_document . " AS 'lbl_azp_gsc_exchange_portal_w_document',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_error . " AS 'lbl_azp_gsc_exchange_portal_w_error',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_folder . " AS 'lbl_azp_gsc_exchange_portal_w_folder',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_name . " AS 'lbl_azp_gsc_exchange_portal_w_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_route . " AS 'lbl_azp_gsc_exchange_portal_w_route',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_size . " AS 'lbl_azp_gsc_exchange_portal_w_size',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_tmp_name . " AS 'lbl_azp_gsc_exchange_portal_w_tmp_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_type . " AS 'lbl_azp_gsc_exchange_portal_w_type',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
				FROM " . t_azp_gsc_exchange_portal . " tc_azp_gsc_exchange_portal
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $this->id . "'
					AND tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			$var_code = ''; $var_state = '';
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_v_id_azp_role . " = '9'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql): $var_gsc_client = $key_sql[d_azp_user_v_id_azp_fct_client]; endforeach;
				# Asignar nuevos valores a la sentencia sql o query
				$var_code = "AND tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . " = '" . $var_gsc_client . "'";
				$var_state = "AND tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_state . " = 'ACTIVO'";
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " AS 'lbl_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_date_created . " AS 'lbl_azp_gsc_exchange_portal_m_date_created',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_date_modified . " AS 'lbl_azp_gsc_exchange_portal_m_date_modified',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_description . " AS 'lbl_azp_gsc_exchange_portal_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_date_load . " AS 'lbl_azp_gsc_exchange_portal_t_date_load',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_state . " AS 'lbl_azp_gsc_exchange_portal_t_state',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_document . " AS 'lbl_azp_gsc_exchange_portal_w_document',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_error . " AS 'lbl_azp_gsc_exchange_portal_w_error',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_folder . " AS 'lbl_azp_gsc_exchange_portal_w_folder',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_name . " AS 'lbl_azp_gsc_exchange_portal_w_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_route . " AS 'lbl_azp_gsc_exchange_portal_w_route',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_size . " AS 'lbl_azp_gsc_exchange_portal_w_size',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_tmp_name . " AS 'lbl_azp_gsc_exchange_portal_w_tmp_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_type . " AS 'lbl_azp_gsc_exchange_portal_w_type',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
				FROM " . t_azp_gsc_exchange_portal . " tc_azp_gsc_exchange_portal
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_deleted . " = '3' " . $var_code . " " . $var_state . "
				GROUP BY tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " ASC
				ORDER BY tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " ASC
				LIMIT 10
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			$var_code = ''; $var_state = '';
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_v_id_azp_role . " = '9'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql): $var_gsc_client = $key_sql[d_azp_user_v_id_azp_fct_client]; endforeach;
				# Asignar nuevos valores a la sentencia sql o query
				$var_code = "AND tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . " = '" . $var_gsc_client . "'";
				$var_state = "AND tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_state . " = 'ACTIVO'";
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " AS 'lbl_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_date_created . " AS 'lbl_azp_gsc_exchange_portal_m_date_created',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_date_modified . " AS 'lbl_azp_gsc_exchange_portal_m_date_modified',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_description . " AS 'lbl_azp_gsc_exchange_portal_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_date_load . " AS 'lbl_azp_gsc_exchange_portal_t_date_load',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_state . " AS 'lbl_azp_gsc_exchange_portal_t_state',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_document . " AS 'lbl_azp_gsc_exchange_portal_w_document',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_error . " AS 'lbl_azp_gsc_exchange_portal_w_error',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_folder . " AS 'lbl_azp_gsc_exchange_portal_w_folder',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_name . " AS 'lbl_azp_gsc_exchange_portal_w_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_route . " AS 'lbl_azp_gsc_exchange_portal_w_route',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_size . " AS 'lbl_azp_gsc_exchange_portal_w_size',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_tmp_name . " AS 'lbl_azp_gsc_exchange_portal_w_tmp_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_type . " AS 'lbl_azp_gsc_exchange_portal_w_type',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
				FROM " . t_azp_gsc_exchange_portal . " tc_azp_gsc_exchange_portal
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_deleted . " = '1' " . $var_code . " " . $var_state . "
				GROUP BY tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " ASC
				ORDER BY tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " ASC
				LIMIT 10
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_archive() {
			$var_code = ''; $var_state = ''; $var_date_since = ''; $var_date_until = '';
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_v_id_azp_role . " = '9'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql): $var_gsc_client = $key_sql[d_azp_user_v_id_azp_fct_client]; endforeach;
				# Asignar nuevos valores a la sentencia sql o query
				$var_code = "AND tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . " = '" . $var_gsc_client . "'";
				$var_state = "AND tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_state . " = 'ARCHIVADO'";
				if (isset($_GET['field_since'])) { $var_date_since = $_GET['field_since']; } else { $var_date_since = ''; }
				if (isset($_GET['field_until'])) { $var_date_until = $_GET['field_until']; } else { $var_date_until = ''; }
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " AS 'lbl_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_date_created . " AS 'lbl_azp_gsc_exchange_portal_m_date_created',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_date_modified . " AS 'lbl_azp_gsc_exchange_portal_m_date_modified',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_description . " AS 'lbl_azp_gsc_exchange_portal_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_date_load . " AS 'lbl_azp_gsc_exchange_portal_t_date_load',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_state . " AS 'lbl_azp_gsc_exchange_portal_t_state',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_document . " AS 'lbl_azp_gsc_exchange_portal_w_document',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_error . " AS 'lbl_azp_gsc_exchange_portal_w_error',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_folder . " AS 'lbl_azp_gsc_exchange_portal_w_folder',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_name . " AS 'lbl_azp_gsc_exchange_portal_w_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_route . " AS 'lbl_azp_gsc_exchange_portal_w_route',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_size . " AS 'lbl_azp_gsc_exchange_portal_w_size',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_tmp_name . " AS 'lbl_azp_gsc_exchange_portal_w_tmp_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_type . " AS 'lbl_azp_gsc_exchange_portal_w_type',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
				FROM " . t_azp_gsc_exchange_portal . " tc_azp_gsc_exchange_portal
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_deleted . " = '1' " . $var_code . "
					AND (tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_date_load . " >= '" . $var_date_since . "'
						AND tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_date_load . " <= '" . $var_date_until . "')
					AND tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_state . " = 'ARCHIVADO'
				GROUP BY tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " ASC
				ORDER BY tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			$var_code = ''; $var_state = '';
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_v_id_azp_role . " = '9'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql): $var_gsc_client = $key_sql[d_azp_user_v_id_azp_fct_client]; endforeach;
				# Asignar nuevos valores a la sentencia sql o query
				$var_code = "AND tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . " = '" . $var_gsc_client . "'";
				$var_state = "AND tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_state . " = 'ACTIVO'";
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " AS 'lbl_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_date_created . " AS 'lbl_azp_gsc_exchange_portal_m_date_created',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_date_modified . " AS 'lbl_azp_gsc_exchange_portal_m_date_modified',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_description . " AS 'lbl_azp_gsc_exchange_portal_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_date_load . " AS 'lbl_azp_gsc_exchange_portal_t_date_load',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_state . " AS 'lbl_azp_gsc_exchange_portal_t_state',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_document . " AS 'lbl_azp_gsc_exchange_portal_w_document',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_error . " AS 'lbl_azp_gsc_exchange_portal_w_error',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_folder . " AS 'lbl_azp_gsc_exchange_portal_w_folder',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_name . " AS 'lbl_azp_gsc_exchange_portal_w_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_route . " AS 'lbl_azp_gsc_exchange_portal_w_route',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_size . " AS 'lbl_azp_gsc_exchange_portal_w_size',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_tmp_name . " AS 'lbl_azp_gsc_exchange_portal_w_tmp_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_type . " AS 'lbl_azp_gsc_exchange_portal_w_type',
					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name'
				FROM " . t_azp_gsc_exchange_portal . " tc_azp_gsc_exchange_portal
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_deleted . " = '2' " . $var_code . " " . $var_state . "
				GROUP BY tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " ASC
				ORDER BY tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " ASC
				LIMIT 10
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " AS 'lbl_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_created . " AS 'lbl_azp_gsc_exchange_portal_m_by_created',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_modified . " AS 'lbl_azp_gsc_exchange_portal_m_by_modified',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_date_created . " AS 'lbl_azp_gsc_exchange_portal_m_date_created',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_date_modified . " AS 'lbl_azp_gsc_exchange_portal_m_date_modified',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_description . " AS 'lbl_azp_gsc_exchange_portal_m_description',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_level . " AS 'lbl_azp_gsc_exchange_portal_m_level',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_status . " AS 'lbl_azp_gsc_exchange_portal_m_status',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_date_load . " AS 'lbl_azp_gsc_exchange_portal_t_date_load',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_t_state . " AS 'lbl_azp_gsc_exchange_portal_t_state',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_document . " AS 'lbl_azp_gsc_exchange_portal_w_document',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_error . " AS 'lbl_azp_gsc_exchange_portal_w_error',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_folder . " AS 'lbl_azp_gsc_exchange_portal_w_folder',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_name . " AS 'lbl_azp_gsc_exchange_portal_w_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_route . " AS 'lbl_azp_gsc_exchange_portal_w_route',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_size . " AS 'lbl_azp_gsc_exchange_portal_w_size',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_tmp_name . " AS 'lbl_azp_gsc_exchange_portal_w_tmp_name',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_w_type . " AS 'lbl_azp_gsc_exchange_portal_w_type',
					tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_v_id_azp_gsc_client . " AS 'lbl_azp_gsc_exchange_portal_v_id_azp_gsc_client'
				FROM " . t_azp_gsc_exchange_portal . " tc_azp_gsc_exchange_portal
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $this->id . "'
					AND tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_exchange_portal_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_exchange_portal_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_level . " = '2'");
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
		final public function sql_azp_gsc_exchange_portal_delete(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_exchange_portal_delete($data);
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
				$var_array = array(d_azp_gsc_exchange_portal_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_exchange_portal, $var_array, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_exchange_portal_file(array $data) {
			try {
				#-------------------------------------------------------------------------#
				#if (!isset($data['field_fl_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				#$empty_id = $this->db->scape($data['field_fl_id']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_fl_file']['name'];
				$empty_type = $_FILES['field_fl_file']['type'];
				$empty_tmp_name = $_FILES['field_fl_file']['tmp_name'];
				$empty_error = $_FILES['field_fl_file']['error'];
				$empty_size = $_FILES['field_fl_file']['size'];
				#-------------------------------------------------------------------------#
				$empty_tamanio = 1000; $empty_bytes = 1024;
				$empty_extension = array('xlsx',);
				$empty_path_info = strtolower(pathinfo($empty_name, PATHINFO_EXTENSION));
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_id) || $empty_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}*/
				#---------------------------------------------#
				if (Func::emp($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de archivo es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!in_array($empty_path_info, $empty_extension)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de archivo solo acepta formatos ' . implode(',', $empty_extension) . '.');
				}*/
				#---------------------------------------------#
				if ($empty_size > ($empty_tamanio * $empty_bytes)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El archivo seleccionado excede el tamaño de 1 MB.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				/*$sql_id = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está actualizando no se encuentra registrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				/*$sql_session = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_exchange_portal_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}*/
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_gsc_exchange_portal_file(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_exchange_portal_file($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('files');
				#-------------------------------------------------------------------------#
				#$empty_id = $this->db->scape($data['field_fl_id']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_exchange_portal_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_exchange_portal_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_exchange_portal_m_date_created => DATE_HOUR,
					d_azp_gsc_exchange_portal_m_date_modified => DATE_HOUR,
					d_azp_gsc_exchange_portal_m_deleted => '1',
					d_azp_gsc_exchange_portal_m_description => '',
					d_azp_gsc_exchange_portal_m_level => '2',
					d_azp_gsc_exchange_portal_m_status => '1',
					d_azp_gsc_exchange_portal_m_temp => '2',
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_exchange_portal, $var_array);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_m_temp . " = '2'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$empty_id = $value[d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal];
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Verificiar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) { foreach ($var_sql as $key => $value): $empty_client = $value[d_azp_user_v_id_azp_fct_client]; endforeach; }
				#-------------------------------------------------------------------------#
				$empty_name = trim(preg_replace('/\s+/','_', $_FILES['field_fl_file']['name']));
				$empty_error = $_FILES['field_fl_file']['error'];
				$empty_size = $_FILES['field_fl_file']['size'];
				$empty_tmp_name = $_FILES['field_fl_file']['tmp_name'];
				$empty_type = $_FILES['field_fl_file']['type'];
				#-------------------------------------------------------------------------#
				$empty_route = '../systemfiles/filesproject/';
				$empty_folder = 'azp_gsc_exchange_portal/' . $empty_id . '/';
				$empty_document = DATE_NUMBER . '_' . HOUR_NUMBER . '_' . $empty_name;
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_exchange_portal_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_exchange_portal_m_date_modified => DATE_HOUR,
					d_azp_gsc_exchange_portal_t_date_load => DATE,
					d_azp_gsc_exchange_portal_t_state => 'ACTIVO',
					d_azp_gsc_exchange_portal_w_document => $empty_document,
					d_azp_gsc_exchange_portal_w_error => $empty_error,
					d_azp_gsc_exchange_portal_w_folder => $empty_folder,
					d_azp_gsc_exchange_portal_w_name => $empty_name,
					d_azp_gsc_exchange_portal_w_route => $empty_route,
					d_azp_gsc_exchange_portal_w_size => $empty_size,
					d_azp_gsc_exchange_portal_w_tmp_name => $empty_tmp_name,
					d_azp_gsc_exchange_portal_w_type => $empty_type,
					d_azp_gsc_exchange_portal_v_id_azp_gsc_client => $empty_client,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_exchange_portal, $var_array, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
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
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->query("
					SELECT tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_name'
					FROM " . t_azp_gsc_exchange_portal . " tc_azp_gsc_exchange_portal
					INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
						ON tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_v_id_azp_gsc_client . "
							= tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
					WHERE tc_azp_gsc_exchange_portal." . d_azp_gsc_exchange_portal_m_temp . " = '2'
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) { foreach ($var_sql as $key_sql => $value): $var_client = $value['lbl_name']; endforeach; } else { $var_client = 'Ninguno'; }
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('emails');
				#-------------------------------------------------------------------------#
				# Asignacion de valores a variables
				$var_from_email = ''; $var_from_name = '';
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
					WHERE tc_azp_user." . d_azp_user_id_azp_user . " = '1'
						AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
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
						AND tc_azp_role." . d_azp_role_t_name . " = 'Def Supervisor'
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
						AND tc_azp_role." . d_azp_role_t_name . " = 'Def Supervisor'
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
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select("*", t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_m_temp . " = '2'" );
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value) {
						# Asignacion de valores a nuevas variables
						$var_id = $value[d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal];
						$var_document = $value[d_azp_gsc_exchange_portal_w_document];
						$var_folder = $value[d_azp_gsc_exchange_portal_w_folder];
						$var_name = $value[d_azp_gsc_exchange_portal_w_name];
						$var_route = $value[d_azp_gsc_exchange_portal_w_route];
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
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
									<p class="text-dark">
										<div class="m-0 d-flex">
											<div class="flex-1 text-contrast">
												Señor(a) Supervisor ' . html_entity_decode($empty_adata) . '
											</div>
										</div>
									</p>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
									<p class="text-dark">
										<div class="m-0 d-flex">
											<div class="flex-1 text-contrast">
												Le informamos que se ha cargado una nueva base en SAGO por parte del cliente ' . ucwords(strtolower($var_client)) . ' para el modulo de defuncion.
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
				$var_adds = array($empty_aemail => $empty_adata,);
				//$var_copy = array($empty_email => $var_data,);
				$var_affair = html_entity_decode('Defuncion: Base Cargada Cliente');
				$var_email = Emails::main_send($var_init, $var_from, $var_adds, $var_copy, $var_html, $var_affair, $var_files,);
				#-------------------------------------------------------------------------#
				# Validacion del correo electronico a enviar
				$var_ms_success = '<b>Exito:</b> Correo electronico enviado.';
				$var_ms_error = '<b>Error:</b> Correo electronico no enviado.';
				#-------------------------------------------------------------------------#
				# Validacion del correo electronico a enviar
				if (true === $var_email) { $var_return = 'success'; $var_ms_name = 'message'; $var_ms_text = $var_ms_success; } else { $var_return = 'error'; $var_ms_name = 'message'; $var_ms_text = $var_ms_error; }
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_gsc_exchange_portal_m_temp => '1');
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_exchange_portal, $var_array, d_azp_gsc_exchange_portal_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array($var_return => 1, $var_ms_name => $var_ms_text,);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_gsc_exchange_portal_insert(array $data) {
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
					throw new Exception('<b>Error:</b> El campo de nombre es obligatorio.');
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
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_exchange_portal_insert(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_exchange_portal_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_name = $this->db->scape($data['field_cr_name']);
				$empty_original = $this->db->scape($data['field_cr_original']);
				$empty_gsc_client = $this->db->scape($data['field_cr_gsc_client']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_exchange_portal_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_exchange_portal_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_exchange_portal_m_date_created => DATE_HOUR,
					d_azp_gsc_exchange_portal_m_date_modified => DATE_HOUR,
					d_azp_gsc_exchange_portal_m_deleted => '1',
					d_azp_gsc_exchange_portal_m_description => $empty_description,
					d_azp_gsc_exchange_portal_m_level => '2',
					d_azp_gsc_exchange_portal_m_status => '1',
					d_azp_gsc_exchange_portal_m_temp => '1',
					d_azp_gsc_exchange_portal_t_date_load => DATE,
					d_azp_gsc_exchange_portal_t_state => 'ACTIVO',
					d_azp_gsc_exchange_portal_w_document => '',
					d_azp_gsc_exchange_portal_w_error => '',
					d_azp_gsc_exchange_portal_w_folder => '',
					d_azp_gsc_exchange_portal_w_name => '',
					d_azp_gsc_exchange_portal_w_route => '',
					d_azp_gsc_exchange_portal_w_size => '',
					d_azp_gsc_exchange_portal_w_tmp_name => '',
					d_azp_gsc_exchange_portal_w_type => '',
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_exchange_portal, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_exchange_portal_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_exchange_portal_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_level . " = '2'");
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
		final public function sql_azp_gsc_exchange_portal_remove(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_exchange_portal_remove($data);
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
				$var_array = array(d_azp_gsc_exchange_portal_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_exchange_portal, $var_array, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_exchange_portal_archive(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_archive'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_archive']);
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
				$sql_id = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('<b>Error:</b> El registro que está removiendo no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_deleted . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_id) { foreach ($sql_id as $key => $value) : throw new Exception('<b>Error:</b> El registro que está procesando ya se encuentra archivado.'); endforeach; }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_gsc_exchange_portal,
					d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " .
					d_azp_gsc_exchange_portal_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_gsc_exchange_portal_m_level . " = '1'"
				);
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_exchange_portal,
					d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " .
					d_azp_gsc_exchange_portal_m_level . " = '2'"
				);
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
		final public function sql_azp_gsc_exchange_portal_archive(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_exchange_portal_archive($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_archive']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_gsc_exchange_portal_t_state => 'ARCHIVADO',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_exchange_portal, $var_array, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro archivado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_exchange_portal_urchive(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_urchive'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_urchive']);
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
				$sql_id = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('<b>Error:</b> El registro que está removiendo no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_deleted . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_id) { foreach ($sql_id as $key => $value) : throw new Exception('<b>Error:</b> El registro que está procesando ya se encuentra desarchivado.'); endforeach; }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_gsc_exchange_portal,
					d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " .
					d_azp_gsc_exchange_portal_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_gsc_exchange_portal_m_level . " = '1'"
				);
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_exchange_portal,
					d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " .
					d_azp_gsc_exchange_portal_m_level . " = '2'"
				);
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
		final public function sql_azp_gsc_exchange_portal_urchive(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_exchange_portal_urchive($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_urchive']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_gsc_exchange_portal_t_state => 'ACTIVO',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_exchange_portal, $var_array, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro desarchivado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_exchange_portal_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_exchange_portal_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_level . " = '2'");
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
		final public function sql_azp_gsc_exchange_portal_restore(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_exchange_portal_restore($data);
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
				$var_array = array(d_azp_gsc_exchange_portal_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_exchange_portal, $var_array, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_exchange_portal_update(array $data) {
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
					throw new Exception('<b>Error:</b> El campo de id es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es obligatorio.');
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
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_exchange_portal_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_validation = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " != '" . $empty_id . "' AND " . d_azp_gsc_exchange_portal_t_name . " = '" . $empty_name . "' AND " . d_azp_gsc_exchange_portal_v_id_azp_gsc_client . " = '" . $empty_gsc_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_validation) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_validation[0][0]) != strtolower($empty_name) && strtolower($sql_validation[0][0]) != strtolower($empty_gsc_client)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El nombre y tipo de formato seleccionados ya existen registrados.');
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
		final public function sql_azp_gsc_exchange_portal_update(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_exchange_portal_update($data);
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
				$var_sql_select = $this->db->select('*', t_azp_gsc_exchange_portal, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_gsc_exchange_portal_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_gsc_exchange_portal_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_gsc_exchange_portal_m_date_created => DATE_HOUR,
							d_azs_gsc_exchange_portal_m_date_modified => DATE_HOUR,
							d_azs_gsc_exchange_portal_m_deleted => $key_sql_select[d_azp_gsc_exchange_portal_m_deleted],
							d_azs_gsc_exchange_portal_m_description => $key_sql_select[d_azp_gsc_exchange_portal_m_description],
							d_azs_gsc_exchange_portal_m_level => $key_sql_select[d_azp_gsc_exchange_portal_m_level],
							d_azs_gsc_exchange_portal_m_status => $key_sql_select[d_azp_gsc_exchange_portal_m_status],
							d_azs_gsc_exchange_portal_m_temp => $key_sql_select[d_azp_gsc_exchange_portal_m_temp],
							d_azs_gsc_exchange_portal_t_date_load => $key_sql_select[d_azp_gsc_exchange_portal_t_date_load],
							d_azs_gsc_exchange_portal_t_state => $key_sql_select[d_azp_gsc_exchange_portal_t_state],
							d_azs_gsc_exchange_portal_w_document => $key_sql_select[d_azp_gsc_exchange_portal_w_document],
							d_azs_gsc_exchange_portal_w_error => $key_sql_select[d_azp_gsc_exchange_portal_w_error],
							d_azs_gsc_exchange_portal_w_folder => $key_sql_select[d_azp_gsc_exchange_portal_w_folder],
							d_azs_gsc_exchange_portal_w_name => $key_sql_select[d_azp_gsc_exchange_portal_w_name],
							d_azs_gsc_exchange_portal_w_route => $key_sql_select[d_azp_gsc_exchange_portal_w_route],
							d_azs_gsc_exchange_portal_w_size => $key_sql_select[d_azp_gsc_exchange_portal_w_size],
							d_azs_gsc_exchange_portal_w_tmp_name => $key_sql_select[d_azp_gsc_exchange_portal_w_tmp_name],
							d_azs_gsc_exchange_portal_w_type => $key_sql_select[d_azp_gsc_exchange_portal_w_type],
							d_azs_gsc_exchange_portal_v_id_azp_gsc_exchange_portal => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_gsc_exchange_portal, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_exchange_portal_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_exchange_portal_m_date_modified => DATE_HOUR,
					d_azp_gsc_exchange_portal_m_description => $empty_description,
					d_azp_gsc_exchange_portal_m_status => $empty_state,
					d_azp_gsc_exchange_portal_t_date_load => DATE,
					d_azp_gsc_exchange_portal_t_state => 'ACTIVO',
					d_azp_gsc_exchange_portal_w_document => '',
					d_azp_gsc_exchange_portal_w_error => '',
					d_azp_gsc_exchange_portal_w_folder => '',
					d_azp_gsc_exchange_portal_w_name => '',
					d_azp_gsc_exchange_portal_w_route => '',
					d_azp_gsc_exchange_portal_w_size => '',
					d_azp_gsc_exchange_portal_w_tmp_name => '',
					d_azp_gsc_exchange_portal_w_type => '',
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_exchange_portal, $var_array, d_azp_gsc_exchange_portal_id_azp_gsc_exchange_portal . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_client() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_client, d_azp_gsc_client_m_deleted . " = '1' AND " . d_azp_gsc_client_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_image() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_id = $key_sql[d_azp_user_v_id_azp_fct_client]; endforeach; } else { $var_id = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_client,
				d_azp_fct_client_id_azp_fct_client . " = '" . $var_id . "' AND " .
				d_azp_fct_client_m_deleted . " = '1' AND " .
				d_azp_fct_client_m_status . " = '1'"
			);
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>