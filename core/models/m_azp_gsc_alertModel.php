<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_gsc_alertModel extends Models implements OCREND {
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
					tc_azp_gsc_alert." . d_azp_gsc_alert_id_azp_gsc_alert . " AS 'lbl_azp_gsc_alert_id_azp_gsc_alert',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_date_created . " AS 'lbl_azp_gsc_alert_m_date_created',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_date_modified . " AS 'lbl_azp_gsc_alert_m_date_modified',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_description . " AS 'lbl_azp_gsc_alert_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_d . " AS 'lbl_azp_gsc_alert_t_next_time_d',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_h . " AS 'lbl_azp_gsc_alert_t_next_time_h',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_m . " AS 'lbl_azp_gsc_alert_t_next_time_m',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_s . " AS 'lbl_azp_gsc_alert_t_next_time_s',

					CONCAT(
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_d . ", '+', ''), ' ',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_h . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_m . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_s . ", '+', '')
					) AS 'lbl_azp_gsc_alert_t_next_time',

					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_d . " AS 'lbl_azp_gsc_alert_t_time_expired_d',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_h . " AS 'lbl_azp_gsc_alert_t_time_expired_h',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_m . " AS 'lbl_azp_gsc_alert_t_time_expired_m',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_s . " AS 'lbl_azp_gsc_alert_t_time_expired_s',

					CONCAT(
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_d . ", '+', ''), ' ',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_h . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_m . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_s . ", '+', '')
					) AS 'lbl_azp_gsc_alert_t_time_expired',

					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_name . " AS 'lbl_azp_gsc_phase_t_name'
				FROM " . t_azp_gsc_alert . " tc_azp_gsc_alert
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_gsc_alert." . d_azp_gsc_alert_m_deleted . " = '1'
				ORDER BY tc_azp_gsc_alert." . d_azp_gsc_alert_id_azp_gsc_alert . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_gsc_alert." . d_azs_gsc_alert_id_azs_gsc_alert . " AS 'lbl_azs_gsc_alert_id_azs_gsc_alert',
					tc_azs_gsc_alert." . d_azs_gsc_alert_m_date_modified . " AS 'lbl_azs_gsc_alert_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_gsc_alert." . d_azs_gsc_alert_m_date_created . " AS 'lbl_azs_gsc_alert_m_date_created',
					tc_azs_gsc_alert." . d_azs_gsc_alert_m_date_modified . " AS 'lbl_azs_gsc_alert_m_date_modified',
					tc_azs_gsc_alert." . d_azs_gsc_alert_m_description . " AS 'lbl_azs_gsc_alert_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_gsc_alert." . d_azs_gsc_alert_t_next_time_d . " AS 'lbl_azs_gsc_alert_t_next_time_d',
					tc_azs_gsc_alert." . d_azs_gsc_alert_t_next_time_h . " AS 'lbl_azs_gsc_alert_t_next_time_h',
					tc_azs_gsc_alert." . d_azs_gsc_alert_t_next_time_m . " AS 'lbl_azs_gsc_alert_t_next_time_m',
					tc_azs_gsc_alert." . d_azs_gsc_alert_t_next_time_s . " AS 'lbl_azs_gsc_alert_t_next_time_s',

					CONCAT(
						REPLACE(tc_azs_gsc_alert." . d_azs_gsc_alert_t_next_time_d . ", '+', ''), ' ',
						REPLACE(tc_azs_gsc_alert." . d_azs_gsc_alert_t_next_time_h . ", '+', ''), ':',
						REPLACE(tc_azs_gsc_alert." . d_azs_gsc_alert_t_next_time_m . ", '+', ''), ':',
						REPLACE(tc_azs_gsc_alert." . d_azs_gsc_alert_t_next_time_s . ", '+', '')
					) AS 'lbl_azs_gsc_alert_t_next_time',

					tc_azs_gsc_alert." . d_azs_gsc_alert_t_time_expired_d . " AS 'lbl_azs_gsc_alert_t_time_expired_d',
					tc_azs_gsc_alert." . d_azs_gsc_alert_t_time_expired_h . " AS 'lbl_azs_gsc_alert_t_time_expired_h',
					tc_azs_gsc_alert." . d_azs_gsc_alert_t_time_expired_m . " AS 'lbl_azs_gsc_alert_t_time_expired_m',
					tc_azs_gsc_alert." . d_azs_gsc_alert_t_time_expired_s . " AS 'lbl_azs_gsc_alert_t_time_expired_s',

					CONCAT(
						REPLACE(tc_azs_gsc_alert." . d_azs_gsc_alert_t_time_expired_d . ", '+', ''), ' ',
						REPLACE(tc_azs_gsc_alert." . d_azs_gsc_alert_t_time_expired_h . ", '+', ''), ':',
						REPLACE(tc_azs_gsc_alert." . d_azs_gsc_alert_t_time_expired_m . ", '+', ''), ':',
						REPLACE(tc_azs_gsc_alert." . d_azs_gsc_alert_t_time_expired_s . ", '+', '')
					) AS 'lbl_azs_gsc_alert_t_time_expired',

					tc_azs_gsc_alert." . d_azs_gsc_alert_u_gsc_client . " AS 'lbl_azs_gsc_alert_u_gsc_client',
					tc_azs_gsc_alert." . d_azs_gsc_alert_u_gsc_phase . " AS 'lbl_azs_gsc_alert_u_gsc_phase'
				FROM " . t_azs_gsc_alert . " tc_azs_gsc_alert
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_gsc_alert." . d_azs_gsc_alert_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_gsc_alert." . d_azs_gsc_alert_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_gsc_alert." . d_azs_gsc_alert_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_gsc_alert." . d_azs_gsc_alert_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_gsc_alert." . d_azs_gsc_alert_v_id_azp_gsc_alert . " = '" . $this->id . "'
				ORDER BY tc_azs_gsc_alert." . d_azs_gsc_alert_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_gsc_alert . "
				WHERE " . d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $this->id . "'
					AND " . d_azp_gsc_alert_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_gsc_alert);
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
					tc_azp_gsc_alert." . d_azp_gsc_alert_id_azp_gsc_alert . " AS 'lbl_azp_gsc_alert_id_azp_gsc_alert',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_date_created . " AS 'lbl_azp_gsc_alert_m_date_created',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_date_modified . " AS 'lbl_azp_gsc_alert_m_date_modified',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_description . " AS 'lbl_azp_gsc_alert_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_d . " AS 'lbl_azp_gsc_alert_t_next_time_d',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_h . " AS 'lbl_azp_gsc_alert_t_next_time_h',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_m . " AS 'lbl_azp_gsc_alert_t_next_time_m',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_s . " AS 'lbl_azp_gsc_alert_t_next_time_s',

					CONCAT(
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_d . ", '+', ''), ' ',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_h . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_m . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_s . ", '+', '')
					) AS 'lbl_azp_gsc_alert_t_next_time',

					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_d . " AS 'lbl_azp_gsc_alert_t_time_expired_d',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_h . " AS 'lbl_azp_gsc_alert_t_time_expired_h',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_m . " AS 'lbl_azp_gsc_alert_t_time_expired_m',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_s . " AS 'lbl_azp_gsc_alert_t_time_expired_s',

					CONCAT(
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_d . ", '+', ''), ' ',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_h . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_m . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_s . ", '+', '')
					) AS 'lbl_azp_gsc_alert_t_time_expired',

					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_name . " AS 'lbl_azp_gsc_phase_t_name'
				FROM " . t_azp_gsc_alert . " tc_azp_gsc_alert
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_alert." . d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $this->id . "'
					AND tc_azp_gsc_alert." . d_azp_gsc_alert_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_alert." . d_azp_gsc_alert_id_azp_gsc_alert . " AS 'lbl_azp_gsc_alert_id_azp_gsc_alert',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_date_created . " AS 'lbl_azp_gsc_alert_m_date_created',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_date_modified . " AS 'lbl_azp_gsc_alert_m_date_modified',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_description . " AS 'lbl_azp_gsc_alert_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_d . " AS 'lbl_azp_gsc_alert_t_next_time_d',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_h . " AS 'lbl_azp_gsc_alert_t_next_time_h',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_m . " AS 'lbl_azp_gsc_alert_t_next_time_m',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_s . " AS 'lbl_azp_gsc_alert_t_next_time_s',

					CONCAT(
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_d . ", '+', ''), ' ',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_h . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_m . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_s . ", '+', '')
					) AS 'lbl_azp_gsc_alert_t_next_time',

					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_d . " AS 'lbl_azp_gsc_alert_t_time_expired_d',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_h . " AS 'lbl_azp_gsc_alert_t_time_expired_h',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_m . " AS 'lbl_azp_gsc_alert_t_time_expired_m',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_s . " AS 'lbl_azp_gsc_alert_t_time_expired_s',

					CONCAT(
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_d . ", '+', ''), ' ',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_h . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_m . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_s . ", '+', '')
					) AS 'lbl_azp_gsc_alert_t_time_expired',

					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_name . " AS 'lbl_azp_gsc_phase_t_name'
				FROM " . t_azp_gsc_alert . " tc_azp_gsc_alert
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_alert." . d_azp_gsc_alert_m_deleted . " = '3'
				ORDER BY tc_azp_gsc_alert." . d_azp_gsc_alert_id_azp_gsc_alert . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_alert." . d_azp_gsc_alert_id_azp_gsc_alert . " AS 'lbl_azp_gsc_alert_id_azp_gsc_alert',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_date_created . " AS 'lbl_azp_gsc_alert_m_date_created',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_date_modified . " AS 'lbl_azp_gsc_alert_m_date_modified',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_description . " AS 'lbl_azp_gsc_alert_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_d . " AS 'lbl_azp_gsc_alert_t_next_time_d',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_h . " AS 'lbl_azp_gsc_alert_t_next_time_h',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_m . " AS 'lbl_azp_gsc_alert_t_next_time_m',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_s . " AS 'lbl_azp_gsc_alert_t_next_time_s',

					CONCAT(
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_d . ", '+', ''), ' ',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_h . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_m . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_s . ", '+', '')
					) AS 'lbl_azp_gsc_alert_t_next_time',

					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_d . " AS 'lbl_azp_gsc_alert_t_time_expired_d',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_h . " AS 'lbl_azp_gsc_alert_t_time_expired_h',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_m . " AS 'lbl_azp_gsc_alert_t_time_expired_m',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_s . " AS 'lbl_azp_gsc_alert_t_time_expired_s',

					CONCAT(
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_d . ", '+', ''), ' ',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_h . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_m . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_s . ", '+', '')
					) AS 'lbl_azp_gsc_alert_t_time_expired',

					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_name . " AS 'lbl_azp_gsc_phase_t_name'
				FROM " . t_azp_gsc_alert . " tc_azp_gsc_alert
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_alert." . d_azp_gsc_alert_m_deleted . " = '1'
				ORDER BY tc_azp_gsc_alert." . d_azp_gsc_alert_id_azp_gsc_alert . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_alert." . d_azp_gsc_alert_id_azp_gsc_alert . " AS 'lbl_azp_gsc_alert_id_azp_gsc_alert',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_date_created . " AS 'lbl_azp_gsc_alert_m_date_created',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_date_modified . " AS 'lbl_azp_gsc_alert_m_date_modified',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_description . " AS 'lbl_azp_gsc_alert_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_d . " AS 'lbl_azp_gsc_alert_t_next_time_d',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_h . " AS 'lbl_azp_gsc_alert_t_next_time_h',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_m . " AS 'lbl_azp_gsc_alert_t_next_time_m',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_s . " AS 'lbl_azp_gsc_alert_t_next_time_s',

					CONCAT(
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_d . ", '+', ''), ' ',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_h . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_m . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_s . ", '+', '')
					) AS 'lbl_azp_gsc_alert_t_next_time',

					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_d . " AS 'lbl_azp_gsc_alert_t_time_expired_d',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_h . " AS 'lbl_azp_gsc_alert_t_time_expired_h',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_m . " AS 'lbl_azp_gsc_alert_t_time_expired_m',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_s . " AS 'lbl_azp_gsc_alert_t_time_expired_s',

					CONCAT(
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_d . ", '+', ''), ' ',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_h . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_m . ", '+', ''), ':',
						REPLACE(tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_s . ", '+', '')
					) AS 'lbl_azp_gsc_alert_t_time_expired',

					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_gsc_phase." . d_azp_gsc_phase_t_name . " AS 'lbl_azp_gsc_phase_t_name'
				FROM " . t_azp_gsc_alert . " tc_azp_gsc_alert
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client ." tc_azp_gsc_client
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_phase ." tc_azp_gsc_phase
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_v_id_azp_gsc_phase . "
						= tc_azp_gsc_phase." . d_azp_gsc_phase_id_azp_gsc_phase . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_alert." . d_azp_gsc_alert_m_deleted . " = '2'
				ORDER BY tc_azp_gsc_alert." . d_azp_gsc_alert_id_azp_gsc_alert . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_alert." . d_azp_gsc_alert_id_azp_gsc_alert . " AS 'lbl_azp_gsc_alert_id_azp_gsc_alert',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_created . " AS 'lbl_azp_gsc_alert_m_by_created',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_modified . " AS 'lbl_azp_gsc_alert_m_by_modified',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_date_created . " AS 'lbl_azp_gsc_alert_m_date_created',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_date_modified . " AS 'lbl_azp_gsc_alert_m_date_modified',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_description . " AS 'lbl_azp_gsc_alert_m_description',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_level . " AS 'lbl_azp_gsc_alert_m_level',
					tc_azp_gsc_alert." . d_azp_gsc_alert_m_status . " AS 'lbl_azp_gsc_alert_m_status',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_d . " AS 'lbl_azp_gsc_alert_t_next_time_d',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_h . " AS 'lbl_azp_gsc_alert_t_next_time_h',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_m . " AS 'lbl_azp_gsc_alert_t_next_time_m',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_next_time_s . " AS 'lbl_azp_gsc_alert_t_next_time_s',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_d . " AS 'lbl_azp_gsc_alert_t_time_expired_d',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_h . " AS 'lbl_azp_gsc_alert_t_time_expired_h',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_m . " AS 'lbl_azp_gsc_alert_t_time_expired_m',
					tc_azp_gsc_alert." . d_azp_gsc_alert_t_time_expired_s . " AS 'lbl_azp_gsc_alert_t_time_expired_s',
					tc_azp_gsc_alert." . d_azp_gsc_alert_v_id_azp_gsc_client . " AS 'lbl_azp_gsc_alert_v_id_azp_gsc_client',
					tc_azp_gsc_alert." . d_azp_gsc_alert_v_id_azp_gsc_phase . " AS 'lbl_azp_gsc_alert_v_id_azp_gsc_phase'
				FROM " . t_azp_gsc_alert . " tc_azp_gsc_alert
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_alert." . d_azp_gsc_alert_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_alert." . d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $this->id . "'
					AND tc_azp_gsc_alert." . d_azp_gsc_alert_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_gsc_alert_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "' AND " . d_azp_gsc_alert_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "' AND " . d_azp_gsc_alert_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_alert_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "' AND " . d_azp_gsc_alert_m_level . " = '2'");
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
		final public function sql_azp_gsc_alert_delete(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_alert_delete($data);
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
				$var_array = array(d_azp_gsc_alert_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_alert, $var_array, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_gsc_alert_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_next_time_d'])) { throw new Exception('<b>Error:</b> El campo de tiempo proximo dias esta prohibido modificar.'); }
				if (!isset($data['field_cr_next_time_h'])) { throw new Exception('<b>Error:</b> El campo de tiempo proximo horas esta prohibido modificar.'); }
				if (!isset($data['field_cr_next_time_m'])) { throw new Exception('<b>Error:</b> El campo de tiempo proximo minutos esta prohibido modificar.'); }
				if (!isset($data['field_cr_next_time_s'])) { throw new Exception('<b>Error:</b> El campo de tiempo proximo segundos esta prohibido modificar.'); }
				if (!isset($data['field_cr_time_expired_d'])) { throw new Exception('<b>Error:</b> El campo de tiempo vencido dias esta prohibido modificar.'); }
				if (!isset($data['field_cr_time_expired_h'])) { throw new Exception('<b>Error:</b> El campo de tiempo vencido horas esta prohibido modificar.'); }
				if (!isset($data['field_cr_time_expired_m'])) { throw new Exception('<b>Error:</b> El campo de tiempo vencido minutos esta prohibido modificar.'); }
				if (!isset($data['field_cr_time_expired_s'])) { throw new Exception('<b>Error:</b> El campo de tiempo vencido segundos esta prohibido modificar.'); }
				if (!isset($data['field_cr_gsc_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_cr_gsc_phase'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_next_time_d = $this->db->scape($data['field_cr_next_time_d']);
				$empty_next_time_h = $this->db->scape($data['field_cr_next_time_h']);
				$empty_next_time_m = $this->db->scape($data['field_cr_next_time_m']);
				$empty_next_time_s = $this->db->scape($data['field_cr_next_time_s']);
				$empty_time_expired_d = $this->db->scape($data['field_cr_time_expired_d']);
				$empty_time_expired_h = $this->db->scape($data['field_cr_time_expired_h']);
				$empty_time_expired_m = $this->db->scape($data['field_cr_time_expired_m']);
				$empty_time_expired_s = $this->db->scape($data['field_cr_time_expired_s']);
				$empty_gsc_client = $this->db->scape($data['field_cr_gsc_client']);
				$empty_gsc_phase = $this->db->scape($data['field_cr_gsc_phase']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_next_time_h > 31) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo dias no permite mas de 31 dias.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_next_time_d) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo dias debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_next_time_d) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo dias permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_next_time_d, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo dias no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_next_time_d)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo dias no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_next_time_h > 23) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo horas no permite mas de 23 horas.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_next_time_h) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo horas debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_next_time_h) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo horas permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_next_time_h, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo horas no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_next_time_h)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo horas no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_next_time_m > 59) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo minutos no permite mas de 59 minutos.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_next_time_m) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo minutos debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_next_time_m) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo minutos permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_next_time_m, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo minutos no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_next_time_m)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo minutos no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_next_time_s > 59) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo segundo no permite mas de 59 segundo.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_next_time_s) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo segundos debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_next_time_s) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo segundos permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_next_time_s, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo segundos no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_next_time_s)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo segundos no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_time_expired_h > 31) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido dias no permite mas de 31 dias.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_time_expired_d) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido dias debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_time_expired_d) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido dias permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_time_expired_d, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido dias no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_time_expired_d)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido dias no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_time_expired_h > 23) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido horas no permite mas de 23 horas.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_time_expired_h) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido horas debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_time_expired_h) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido horas permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_time_expired_h, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido horas no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_time_expired_h)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido horas no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_time_expired_m > 59) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido minutos no permite mas de 59 minutos.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_time_expired_m) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido minutos debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_time_expired_m) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido minutos permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_time_expired_m, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido minutos no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_time_expired_m)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido minutos no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_time_expired_s > 59) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido segundo no permite mas de 59 segundo.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_time_expired_s) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido segundos debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_time_expired_s) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido segundos permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_time_expired_s, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido segundos no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_time_expired_s)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido segundos no permite tener espacios en blanco al principio o al final.');
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
				if (Func::emp($empty_gsc_phase) || strtolower($empty_gsc_phase) == strtolower('seleccionar') || $empty_gsc_phase == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_gsc_phase)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
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
				# Verificar si el registro existe en la tabla
				$sql_gsc_phase = $this->db->select('*', t_azp_gsc_phase, d_azp_gsc_phase_id_azp_gsc_phase . " = '" . $empty_gsc_phase . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_gsc_phase) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_gsc_phase) == '') { $sql_gsc_phase[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_gsc_phase[0][0]) != strtolower($empty_gsc_phase)) {
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
		# Query Sql Insert
		final public function sql_azp_gsc_alert_insert(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_alert_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_next_time_d = $this->db->scape($data['field_cr_next_time_d']);
				$empty_next_time_h = $this->db->scape($data['field_cr_next_time_h']);
				$empty_next_time_m = $this->db->scape($data['field_cr_next_time_m']);
				$empty_next_time_s = $this->db->scape($data['field_cr_next_time_s']);
				$empty_time_expired_d = $this->db->scape($data['field_cr_time_expired_d']);
				$empty_time_expired_h = $this->db->scape($data['field_cr_time_expired_h']);
				$empty_time_expired_m = $this->db->scape($data['field_cr_time_expired_m']);
				$empty_time_expired_s = $this->db->scape($data['field_cr_time_expired_s']);
				$empty_gsc_client = $this->db->scape($data['field_cr_gsc_client']);
				$empty_gsc_phase = $this->db->scape($data['field_cr_gsc_phase']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_alert_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_alert_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_alert_m_date_created => DATE_HOUR,
					d_azp_gsc_alert_m_date_modified => DATE_HOUR,
					d_azp_gsc_alert_m_deleted => '1',
					d_azp_gsc_alert_m_description => $empty_description,
					d_azp_gsc_alert_m_level => '2',
					d_azp_gsc_alert_m_status => '1',
					d_azp_gsc_alert_m_temp => '1',
					d_azp_gsc_alert_t_next_time_d => $empty_next_time_d,
					d_azp_gsc_alert_t_next_time_h => $empty_next_time_h,
					d_azp_gsc_alert_t_next_time_m => $empty_next_time_m,
					d_azp_gsc_alert_t_next_time_s => $empty_next_time_s,
					d_azp_gsc_alert_t_time_expired_d => $empty_time_expired_d,
					d_azp_gsc_alert_t_time_expired_h => $empty_time_expired_h,
					d_azp_gsc_alert_t_time_expired_m => $empty_time_expired_m,
					d_azp_gsc_alert_t_time_expired_s => $empty_time_expired_s,
					d_azp_gsc_alert_v_id_azp_gsc_client => $empty_gsc_client,
					d_azp_gsc_alert_v_id_azp_gsc_phase => $empty_gsc_phase,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_alert, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_alert_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "' AND " . d_azp_gsc_alert_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "' AND " . d_azp_gsc_alert_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_alert_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "' AND " . d_azp_gsc_alert_m_level . " = '2'");
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
		final public function sql_azp_gsc_alert_remove(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_alert_remove($data);
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
				$var_array = array(d_azp_gsc_alert_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_alert, $var_array, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_alert_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "' AND " . d_azp_gsc_alert_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "' AND " . d_azp_gsc_alert_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_alert_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "' AND " . d_azp_gsc_alert_m_level . " = '2'");
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
		final public function sql_azp_gsc_alert_restore(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_alert_restore($data);
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
				$var_array = array(d_azp_gsc_alert_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_alert, $var_array, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_alert_update(array $data) {
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
				if (!isset($data['field_up_next_time_d'])) { throw new Exception('<b>Error:</b> El campo de tiempo proximo dias esta prohibido modificar.'); }
				if (!isset($data['field_up_next_time_h'])) { throw new Exception('<b>Error:</b> El campo de tiempo proximo horas esta prohibido modificar.'); }
				if (!isset($data['field_up_next_time_m'])) { throw new Exception('<b>Error:</b> El campo de tiempo proximo minutos esta prohibido modificar.'); }
				if (!isset($data['field_up_next_time_s'])) { throw new Exception('<b>Error:</b> El campo de tiempo proximo segundos esta prohibido modificar.'); }
				if (!isset($data['field_up_time_expired_d'])) { throw new Exception('<b>Error:</b> El campo de tiempo vencido dias esta prohibido modificar.'); }
				if (!isset($data['field_up_time_expired_h'])) { throw new Exception('<b>Error:</b> El campo de tiempo vencido horas esta prohibido modificar.'); }
				if (!isset($data['field_up_time_expired_m'])) { throw new Exception('<b>Error:</b> El campo de tiempo vencido minutos esta prohibido modificar.'); }
				if (!isset($data['field_up_time_expired_s'])) { throw new Exception('<b>Error:</b> El campo de tiempo vencido segundos esta prohibido modificar.'); }
				if (!isset($data['field_up_gsc_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_up_gsc_phase'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_next_time_d = $this->db->scape($data['field_up_next_time_d']);
				$empty_next_time_h = $this->db->scape($data['field_up_next_time_h']);
				$empty_next_time_m = $this->db->scape($data['field_up_next_time_m']);
				$empty_next_time_s = $this->db->scape($data['field_up_next_time_s']);
				$empty_time_expired_d = $this->db->scape($data['field_up_time_expired_d']);
				$empty_time_expired_h = $this->db->scape($data['field_up_time_expired_h']);
				$empty_time_expired_m = $this->db->scape($data['field_up_time_expired_m']);
				$empty_time_expired_s = $this->db->scape($data['field_up_time_expired_s']);
				$empty_gsc_client = $this->db->scape($data['field_up_gsc_client']);
				$empty_gsc_phase = $this->db->scape($data['field_up_gsc_phase']);
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
				if ($empty_next_time_h > 31) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo dias no permite mas de 31 dias.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_next_time_d) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo dias debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_next_time_d) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo dias permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_next_time_d, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo dias no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_next_time_d)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo dias no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_next_time_h > 23) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo horas no permite mas de 23 horas.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_next_time_h) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo horas debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_next_time_h) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo horas permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_next_time_h, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo horas no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_next_time_h)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo horas no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_next_time_m > 59) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo minutos no permite mas de 59 minutos.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_next_time_m) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo minutos debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_next_time_m) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo minutos permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_next_time_m, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo minutos no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_next_time_m)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo minutos no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_next_time_s > 59) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo segundo no permite mas de 59 segundo.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_next_time_s) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo segundos debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_next_time_s) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo segundos permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_next_time_s, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo segundos no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_next_time_s)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo proximo segundos no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_time_expired_h > 31) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido dias no permite mas de 31 dias.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_time_expired_d) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido dias debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_time_expired_d) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido dias permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_time_expired_d, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido dias no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_time_expired_d)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido dias no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_time_expired_h > 23) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido horas no permite mas de 23 horas.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_time_expired_h) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido horas debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_time_expired_h) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido horas permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_time_expired_h, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido horas no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_time_expired_h)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido horas no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_time_expired_m > 59) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido minutos no permite mas de 59 minutos.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_time_expired_m) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido minutos debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_time_expired_m) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido minutos permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_time_expired_m, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido minutos no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_time_expired_m)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido minutos no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_time_expired_s > 59) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido segundo no permite mas de 59 segundo.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_time_expired_s) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido segundos debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_time_expired_s) > 3) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido segundos permite maximo hasta 2 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_time_expired_s, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido segundos no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_time_expired_s)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tiempo vencido segundos no permite tener espacios en blanco al principio o al final.');
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
				if (Func::emp($empty_gsc_phase) || strtolower($empty_gsc_phase) == strtolower('seleccionar') || $empty_gsc_phase == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_gsc_phase)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "' AND " . d_azp_gsc_alert_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_alert_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "' AND " . d_azp_gsc_alert_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
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
				# Verificar si el registro existe en la tabla
				$sql_gsc_phase = $this->db->select('*', t_azp_gsc_phase, d_azp_gsc_phase_id_azp_gsc_phase . " = '" . $empty_gsc_phase . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_gsc_phase) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_gsc_phase) == '') { $sql_gsc_phase[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_gsc_phase[0][0]) != strtolower($empty_gsc_phase)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El estado seleccionado no se encuentra registrado.');
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
		final public function sql_azp_gsc_alert_update(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_alert_update($data);
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
				$empty_next_time_d = $this->db->scape($data['field_up_next_time_d']);
				$empty_next_time_h = $this->db->scape($data['field_up_next_time_h']);
				$empty_next_time_m = $this->db->scape($data['field_up_next_time_m']);
				$empty_next_time_s = $this->db->scape($data['field_up_next_time_s']);
				$empty_time_expired_d = $this->db->scape($data['field_up_time_expired_d']);
				$empty_time_expired_h = $this->db->scape($data['field_up_time_expired_h']);
				$empty_time_expired_m = $this->db->scape($data['field_up_time_expired_m']);
				$empty_time_expired_s = $this->db->scape($data['field_up_time_expired_s']);
				$empty_gsc_client = $this->db->scape($data['field_up_gsc_client']);
				$empty_gsc_phase = $this->db->scape($data['field_up_gsc_phase']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_gsc_alert, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_gsc_alert_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_gsc_alert_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_gsc_alert_m_date_created => DATE_HOUR,
							d_azs_gsc_alert_m_date_modified => DATE_HOUR,
							d_azs_gsc_alert_m_deleted => $key_sql_select[d_azp_gsc_alert_m_deleted],
							d_azs_gsc_alert_m_description => $key_sql_select[d_azp_gsc_alert_m_description],
							d_azs_gsc_alert_m_level => $key_sql_select[d_azp_gsc_alert_m_level],
							d_azs_gsc_alert_m_status => $key_sql_select[d_azp_gsc_alert_m_status],
							d_azs_gsc_alert_m_temp => $key_sql_select[d_azp_gsc_alert_m_temp],
							d_azs_gsc_alert_t_next_time_d => $key_sql_select[d_azp_gsc_alert_t_next_time_d],
							d_azs_gsc_alert_t_next_time_h => $key_sql_select[d_azp_gsc_alert_t_next_time_h],
							d_azs_gsc_alert_t_next_time_m => $key_sql_select[d_azp_gsc_alert_t_next_time_m],
							d_azs_gsc_alert_t_next_time_s => $key_sql_select[d_azp_gsc_alert_t_next_time_s],
							d_azs_gsc_alert_t_time_expired_d => $key_sql_select[d_azp_gsc_alert_t_time_expired_d],
							d_azs_gsc_alert_t_time_expired_h => $key_sql_select[d_azp_gsc_alert_t_time_expired_h],
							d_azs_gsc_alert_t_time_expired_m => $key_sql_select[d_azp_gsc_alert_t_time_expired_m],
							d_azs_gsc_alert_t_time_expired_s => $key_sql_select[d_azp_gsc_alert_t_time_expired_s],
							d_azs_gsc_alert_u_gsc_client => $key_sql_select[d_azp_gsc_alert_v_id_azp_gsc_client],
							d_azs_gsc_alert_u_gsc_phase => $key_sql_select[d_azp_gsc_alert_v_id_azp_gsc_phase],
							d_azs_gsc_alert_v_id_azp_gsc_alert => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_gsc_alert, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_alert_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_alert_m_date_modified => DATE_HOUR,
					d_azp_gsc_alert_m_description => $empty_description,
					d_azp_gsc_alert_m_status => $empty_state,
					d_azp_gsc_alert_t_next_time_d => $empty_next_time_d,
					d_azp_gsc_alert_t_next_time_h => $empty_next_time_h,
					d_azp_gsc_alert_t_next_time_m => $empty_next_time_m,
					d_azp_gsc_alert_t_next_time_s => $empty_next_time_s,
					d_azp_gsc_alert_t_time_expired_d => $empty_time_expired_d,
					d_azp_gsc_alert_t_time_expired_h => $empty_time_expired_h,
					d_azp_gsc_alert_t_time_expired_m => $empty_time_expired_m,
					d_azp_gsc_alert_t_time_expired_s => $empty_time_expired_s,
					d_azp_gsc_alert_v_id_azp_gsc_client => $empty_gsc_client,
					d_azp_gsc_alert_v_id_azp_gsc_phase => $empty_gsc_phase,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_alert, $var_array, d_azp_gsc_alert_id_azp_gsc_alert . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_client() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_client, d_azp_gsc_client_id_azp_gsc_client . " > '1' AND " . d_azp_gsc_client_m_deleted . " = '1' AND " . d_azp_gsc_client_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_gsc_phase() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_gsc_phase, d_azp_gsc_phase_m_deleted . " = '1' AND " . d_azp_gsc_phase_m_status . " = '1'");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>