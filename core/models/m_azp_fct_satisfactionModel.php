<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_fct_satisfactionModel extends Models implements OCREND {
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
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " AS 'lbl_azp_fct_satisfaction_id_azp_fct_satisfaction',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_created . " AS 'lbl_azp_fct_satisfaction_m_date_created',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_modified . " AS 'lbl_azp_fct_satisfaction_m_date_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_description . " AS 'lbl_azp_fct_satisfaction_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " AS 'lbl_azp_fct_satisfaction_t_request',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_service . " AS 'lbl_azp_fct_satisfaction_t_service',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_supplier . " AS 'lbl_azp_fct_satisfaction_t_supplier',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_service." . d_azp_fct_service_t_name . " AS 'lbl_azp_fct_service_t_name'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_service . " tc_azp_fct_service
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . "
						= tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_deleted . " = '1'
				ORDER BY tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_fct_satisfaction." . d_azs_fct_satisfaction_id_azs_fct_satisfaction . " AS 'lbl_azs_fct_satisfaction_id_azs_fct_satisfaction',
					tc_azs_fct_satisfaction." . d_azs_fct_satisfaction_m_date_modified . " AS 'lbl_azs_fct_satisfaction_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_fct_satisfaction." . d_azs_fct_satisfaction_m_date_created . " AS 'lbl_azs_fct_satisfaction_m_date_created',
					tc_azs_fct_satisfaction." . d_azs_fct_satisfaction_m_date_modified . " AS 'lbl_azs_fct_satisfaction_m_date_modified',
					tc_azs_fct_satisfaction." . d_azs_fct_satisfaction_m_description . " AS 'lbl_azs_fct_satisfaction_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_fct_satisfaction." . d_azs_fct_satisfaction_t_request . " AS 'lbl_azs_fct_satisfaction_t_request',
					tc_azs_fct_satisfaction." . d_azs_fct_satisfaction_t_value . " AS 'lbl_azs_fct_satisfaction_t_value'
				FROM " . t_azs_fct_satisfaction . " tc_azs_fct_satisfaction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_fct_satisfaction." . d_azs_fct_satisfaction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_fct_satisfaction." . d_azs_fct_satisfaction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_fct_satisfaction." . d_azs_fct_satisfaction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_fct_satisfaction." . d_azs_fct_satisfaction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_fct_satisfaction." . d_azs_fct_satisfaction_v_id_azp_fct_satisfaction . " = '" . $this->id . "'
				ORDER BY tc_azs_fct_satisfaction." . d_azs_fct_satisfaction_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_fct_satisfaction . "
				WHERE " . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'
					AND " . d_azp_fct_satisfaction_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_fct_satisfaction);
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
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " AS 'lbl_azp_fct_satisfaction_id_azp_fct_satisfaction',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_created . " AS 'lbl_azp_fct_satisfaction_m_date_created',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_modified . " AS 'lbl_azp_fct_satisfaction_m_date_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_description . " AS 'lbl_azp_fct_satisfaction_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " AS 'lbl_azp_fct_satisfaction_t_request',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_service . " AS 'lbl_azp_fct_satisfaction_t_service',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_supplier . " AS 'lbl_azp_fct_satisfaction_t_supplier',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_service." . d_azp_fct_service_t_name . " AS 'lbl_azp_fct_service_t_name'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_service . " tc_azp_fct_service
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . "
						= tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " AS 'lbl_azp_fct_satisfaction_id_azp_fct_satisfaction',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_created . " AS 'lbl_azp_fct_satisfaction_m_date_created',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_modified . " AS 'lbl_azp_fct_satisfaction_m_date_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_description . " AS 'lbl_azp_fct_satisfaction_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " AS 'lbl_azp_fct_satisfaction_t_request',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_service . " AS 'lbl_azp_fct_satisfaction_t_service',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_supplier . " AS 'lbl_azp_fct_satisfaction_t_supplier',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_service." . d_azp_fct_service_t_name . " AS 'lbl_azp_fct_service_t_name'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_service . " tc_azp_fct_service
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . "
						= tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_deleted . " = '3'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				ORDER BY tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " AS 'lbl_azp_fct_satisfaction_id_azp_fct_satisfaction',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_created . " AS 'lbl_azp_fct_satisfaction_m_date_created',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_modified . " AS 'lbl_azp_fct_satisfaction_m_date_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_description . " AS 'lbl_azp_fct_satisfaction_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " AS 'lbl_azp_fct_satisfaction_t_request',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_service . " AS 'lbl_azp_fct_satisfaction_t_service',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_supplier . " AS 'lbl_azp_fct_satisfaction_t_supplier',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_service." . d_azp_fct_service_t_name . " AS 'lbl_azp_fct_service_t_name'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_service . " tc_azp_fct_service
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . "
						= tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_deleted . " = '1'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_service . " != '*'
				ORDER BY tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_infu() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " AS 'lbl_azp_fct_satisfaction_id_azp_fct_satisfaction',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_created . " AS 'lbl_azp_fct_satisfaction_m_date_created',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_modified . " AS 'lbl_azp_fct_satisfaction_m_date_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_description . " AS 'lbl_azp_fct_satisfaction_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_date_send . " AS 'lbl_azp_fct_satisfaction_t_date_send',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_date_since . " AS 'lbl_azp_fct_satisfaction_t_date_since',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_date_until . " AS 'lbl_azp_fct_satisfaction_t_date_until',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " AS 'lbl_azp_fct_satisfaction_t_request',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_service . " AS 'lbl_azp_fct_satisfaction_t_service',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_supplier . " AS 'lbl_azp_fct_satisfaction_t_supplier',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value',
					-- tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_service." . d_azp_fct_service_t_name . " AS 'lbl_azp_fct_service_t_name'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "*/
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_service . " tc_azp_fct_service
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . "
						= tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_deleted . " = '1'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_service . " = '*'
				ORDER BY tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " AS 'lbl_azp_fct_satisfaction_id_azp_fct_satisfaction',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_created . " AS 'lbl_azp_fct_satisfaction_m_date_created',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_modified . " AS 'lbl_azp_fct_satisfaction_m_date_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_description . " AS 'lbl_azp_fct_satisfaction_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " AS 'lbl_azp_fct_satisfaction_t_request',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_service . " AS 'lbl_azp_fct_satisfaction_t_service',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_supplier . " AS 'lbl_azp_fct_satisfaction_t_supplier',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_service." . d_azp_fct_service_t_name . " AS 'lbl_azp_fct_service_t_name'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_service . " tc_azp_fct_service
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . "
						= tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_deleted . " = '2'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				ORDER BY tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " AS 'lbl_azp_fct_satisfaction_id_azp_fct_satisfaction',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " AS 'lbl_azp_fct_satisfaction_m_by_created',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_modified . " AS 'lbl_azp_fct_satisfaction_m_by_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_created . " AS 'lbl_azp_fct_satisfaction_m_date_created',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_modified . " AS 'lbl_azp_fct_satisfaction_m_date_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_description . " AS 'lbl_azp_fct_satisfaction_m_description',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_level . " AS 'lbl_azp_fct_satisfaction_m_level',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_status . " AS 'lbl_azp_fct_satisfaction_m_status',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " AS 'lbl_azp_fct_satisfaction_t_request',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_service . " AS 'lbl_azp_fct_satisfaction_t_service',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_supplier . " AS 'lbl_azp_fct_satisfaction_t_supplier',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . " AS 'lbl_azp_fct_satisfaction_v_id_azp_fct_client',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . " AS 'lbl_azp_fct_satisfaction_v_id_azp_fct_service'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_service . " tc_azp_fct_service
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . "
						= tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_group_by() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " AS 'lbl_azp_fct_satisfaction_id_azp_fct_satisfaction',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_created . " AS 'lbl_azp_fct_satisfaction_m_date_created',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_modified . " AS 'lbl_azp_fct_satisfaction_m_date_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_description . " AS 'lbl_azp_fct_satisfaction_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " AS 'lbl_azp_fct_satisfaction_t_request',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_service . " AS 'lbl_azp_fct_satisfaction_t_service',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_supplier . " AS 'lbl_azp_fct_satisfaction_t_supplier',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_service." . d_azp_fct_service_t_name . " AS 'lbl_azp_fct_service_t_name',
					SUM(tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . ") AS 'lbl_azp_fct_satisfaction_t_sum'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_service . " tc_azp_fct_service
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . "
						= tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_deleted . " = '1'
				-- ---------------------------------------------------------------
				GROUP BY tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . " ASC,
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . " ASC
				-- ---------------------------------------------------------------
				ORDER BY tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_client() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " AS 'lbl_azp_fct_satisfaction_id_azp_fct_satisfaction',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_created . " AS 'lbl_azp_fct_satisfaction_m_date_created',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_modified . " AS 'lbl_azp_fct_satisfaction_m_date_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_description . " AS 'lbl_azp_fct_satisfaction_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " AS 'lbl_azp_fct_satisfaction_t_request',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_service . " AS 'lbl_azp_fct_satisfaction_t_service',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_supplier . " AS 'lbl_azp_fct_satisfaction_t_supplier',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_service." . d_azp_fct_service_t_name . " AS 'lbl_azp_fct_service_t_name'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_service . " tc_azp_fct_service
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . "
						= tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_deleted . " = '1'
				-- ---------------------------------------------------------------
				GROUP BY tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . " ASC
				-- ---------------------------------------------------------------
				ORDER BY tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_graphic($var_service) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " AS 'lbl_azp_fct_satisfaction_id_azp_fct_satisfaction',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_created . " AS 'lbl_azp_fct_satisfaction_m_date_created',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_modified . " AS 'lbl_azp_fct_satisfaction_m_date_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_description . " AS 'lbl_azp_fct_satisfaction_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " AS 'lbl_azp_fct_satisfaction_t_request',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_service . " AS 'lbl_azp_fct_satisfaction_t_service',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_supplier . " AS 'lbl_azp_fct_satisfaction_t_supplier',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_service." . d_azp_fct_service_t_name . " AS 'lbl_azp_fct_service_t_name',
					SUM(tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . ") AS 'lbl_azp_fct_satisfaction_t_sum'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_service . " tc_azp_fct_service
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . "
						= tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_deleted . " = '1'
					AND tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . " = '" . $var_service . "'
				-- ---------------------------------------------------------------
				GROUP BY tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . " ASC,
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . " ASC
				-- ---------------------------------------------------------------
				ORDER BY tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_fct_satisfaction_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "' AND " . d_azp_fct_satisfaction_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "' AND " . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fct_satisfaction_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "' AND " . d_azp_fct_satisfaction_m_level . " = '2'");
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
		final public function sql_azp_fct_satisfaction_delete(array $data) : array {
			$var_error = $this->error_sql_azp_fct_satisfaction_delete($data);
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
				$var_array = array(d_azp_fct_satisfaction_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_fct_satisfaction, $var_array, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_fct_satisfaction_insert(array $data) {
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
				$sql_name = $this->db->select(d_azp_fct_satisfaction_t_name, t_azp_fct_satisfaction, d_azp_fct_satisfaction_t_name . " = '" . $empty_name . "'");
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
		final public function sql_azp_fct_satisfaction_insert(array $data) : array {
			$var_error = $this->error_sql_azp_fct_satisfaction_insert($data);
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
					d_azp_fct_satisfaction_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_fct_satisfaction_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_fct_satisfaction_m_date_created => DATE_HOUR,
					d_azp_fct_satisfaction_m_date_modified => DATE_HOUR,
					d_azp_fct_satisfaction_m_deleted => '1',
					d_azp_fct_satisfaction_m_description => $empty_description,
					d_azp_fct_satisfaction_m_level => '2',
					d_azp_fct_satisfaction_m_status => '1',
					d_azp_fct_satisfaction_m_temp => '1',
					d_azp_fct_satisfaction_t_name => strtoupper($empty_name),
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_fct_satisfaction, $var_array);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_satisfaction_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_ibn_satisfaction_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_satisfaction_m_date_created => DATE_HOUR,
					d_azp_ibn_satisfaction_m_date_modified => DATE_HOUR,
					d_azp_ibn_satisfaction_m_deleted => '1',
					d_azp_ibn_satisfaction_m_description => $empty_description,
					d_azp_ibn_satisfaction_m_level => '2',
					d_azp_ibn_satisfaction_m_status => '1',
					d_azp_ibn_satisfaction_m_temp => '1',
					d_azp_ibn_satisfaction_t_name => strtoupper($empty_name),
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_ibn_satisfaction, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_fct_satisfaction_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "' AND " . d_azp_fct_satisfaction_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "' AND " . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fct_satisfaction_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "' AND " . d_azp_fct_satisfaction_m_level . " = '2'");
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
		final public function sql_azp_fct_satisfaction_remove(array $data) : array {
			$var_error = $this->error_sql_azp_fct_satisfaction_remove($data);
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
				$var_array = array(d_azp_fct_satisfaction_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_fct_satisfaction, $var_array, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_fct_satisfaction_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "' AND " . d_azp_fct_satisfaction_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "' AND " . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fct_satisfaction_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "' AND " . d_azp_fct_satisfaction_m_level . " = '2'");
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
		final public function sql_azp_fct_satisfaction_restore(array $data) : array {
			$var_error = $this->error_sql_azp_fct_satisfaction_restore($data);
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
				$var_array = array(d_azp_fct_satisfaction_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_fct_satisfaction, $var_array, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_fct_satisfaction_update(array $data) {
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
					throw new Exception('<b>Error:</b> El campo de estado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_state)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "' AND " . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fct_satisfaction_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "' AND " . d_azp_fct_satisfaction_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_name = $this->db->select(d_azp_fct_satisfaction_t_name, t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " != '" . $empty_id . "' AND " . d_azp_fct_satisfaction_t_name . " = '" . $empty_name . "'");
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
		final public function sql_azp_fct_satisfaction_update(array $data) : array {
			$var_error = $this->error_sql_azp_fct_satisfaction_update($data);
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
				$var_sql_select = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_fct_satisfaction_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_fct_satisfaction_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_fct_satisfaction_m_date_created => DATE_HOUR,
							d_azs_fct_satisfaction_m_date_modified => DATE_HOUR,
							d_azs_fct_satisfaction_m_deleted => $key_sql_select[d_azp_fct_satisfaction_m_deleted],
							d_azs_fct_satisfaction_m_description => $key_sql_select[d_azp_fct_satisfaction_m_description],
							d_azs_fct_satisfaction_m_level => $key_sql_select[d_azp_fct_satisfaction_m_level],
							d_azs_fct_satisfaction_m_status => $key_sql_select[d_azp_fct_satisfaction_m_status],
							d_azs_fct_satisfaction_m_temp => $key_sql_select[d_azp_fct_satisfaction_m_temp],
							d_azs_fct_satisfaction_t_name => strtoupper($key_sql_select[d_azp_fct_satisfaction_t_name]),
							d_azs_fct_satisfaction_v_id_azp_fct_satisfaction => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_fct_satisfaction, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_fct_satisfaction_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_fct_satisfaction_m_date_modified => DATE_HOUR,
					d_azp_fct_satisfaction_m_description => $empty_description,
					d_azp_fct_satisfaction_m_status => $empty_state,
					d_azp_fct_satisfaction_t_name => strtoupper($empty_name),
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_fct_satisfaction, $var_array, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_ibn_satisfaction, d_azp_ibn_satisfaction_id_azp_ibn_satisfaction . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_ibn_satisfaction_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_ibn_satisfaction_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_ibn_satisfaction_m_date_created => DATE_HOUR,
							d_azs_ibn_satisfaction_m_date_modified => DATE_HOUR,
							d_azs_ibn_satisfaction_m_deleted => $key_sql_select[d_azp_ibn_satisfaction_m_deleted],
							d_azs_ibn_satisfaction_m_description => $key_sql_select[d_azp_ibn_satisfaction_m_description],
							d_azs_ibn_satisfaction_m_level => $key_sql_select[d_azp_ibn_satisfaction_m_level],
							d_azs_ibn_satisfaction_m_status => $key_sql_select[d_azp_ibn_satisfaction_m_status],
							d_azs_ibn_satisfaction_m_temp => $key_sql_select[d_azp_ibn_satisfaction_m_temp],
							d_azs_ibn_satisfaction_t_name => strtoupper($key_sql_select[d_azp_ibn_satisfaction_t_name]),
							d_azs_ibn_satisfaction_v_id_azp_ibn_satisfaction => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_ibn_satisfaction, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_satisfaction_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_satisfaction_m_date_modified => DATE_HOUR,
					d_azp_ibn_satisfaction_m_description => $empty_description,
					d_azp_ibn_satisfaction_m_status => $empty_state,
					d_azp_ibn_satisfaction_t_name => strtoupper($empty_name),
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_satisfaction, $var_array, d_azp_ibn_satisfaction_id_azp_ibn_satisfaction . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_fct_satisfaction_drop_delete() {
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("DELETE FROM " . t_azp_fct_satisfactiom . " WHERE " . d_azp_fct_satisfactiom_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("DELETE FROM " . t_azp_fct_satisfaction . " WHERE " . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
			//$var_sql = $this->db->query("ALTER TABLE " . t_azp_fct_satisfaction . " AUTO_INCREMENT = 1;");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_fct_satisfaction_calculate(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_ct_since'])) { throw new Exception('<b>Error:</b> El campo de fecha inicio esta prohibido modificar.'); }
				if (!isset($data['field_ct_until'])) { throw new Exception('<b>Error:</b> El campo de fecha fin esta prohibido modificar.'); }
				if (!isset($data['field_ct_certificate'])) { throw new Exception('<b>Error:</b> El campo de modulo certificados esta prohibido modificar.'); }
				if (!isset($data['field_ct_defunction'])) { throw new Exception('<b>Error:</b> El campo de modulo defuncion esta prohibido modificar.'); }
				if (!isset($data['field_ct_investigation'])) { throw new Exception('<b>Error:</b> El campo de modulo investigacion esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_since = $this->db->scape($data['field_ct_since']);
				$empty_until = $this->db->scape($data['field_ct_until']);
				$empty_certificate = $this->db->scape($data['field_ct_certificate']);
				$empty_defunction = $this->db->scape($data['field_ct_defunction']);
				$empty_investigation = $this->db->scape($data['field_ct_investigation']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_since) || $empty_since == 'aaaa-mm-dd') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha inicio es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_since) < 10 || strlen($empty_since) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha inicio está mal diligenciado, debe ser aaaa-mm-dd.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_until) || $empty_until == 'aaaa-mm-dd') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha fin es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_until) < 10 || strlen($empty_until) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha fin está mal diligenciado, debe ser aaaa-mm-dd.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_certificate == 'NO' && $empty_defunction == 'NO' && $empty_investigation == 'NO') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> Se debe seleccionar minimo un modulo para realizar el calculo.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_fct_satisfaction_calculate(array $data) : array {
			$var_error = $this->error_sql_azp_fct_satisfaction_calculate($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_since = $this->db->scape($data['field_ct_since']);
				$empty_until = $this->db->scape($data['field_ct_until']);
				$empty_certificate = $this->db->scape($data['field_ct_certificate']);
				$empty_defunction = $this->db->scape($data['field_ct_defunction']);
				$empty_investigation = $this->db->scape($data['field_ct_investigation']);
				#-------------------------------------------------------------------------#
				if ($empty_certificate == 'SI') { $empty_scertificate = $this->db->scape($data['field_cs_certificate']); } else { $empty_scertificate = ''; }
				if ($empty_certificate == 'SI') { $empty_pcertificate = $this->db->scape($data['field_ps_certificate']); } else { $empty_pcertificate = ''; }
				if ($empty_defunction == 'SI') { $empty_sdefunction = $this->db->scape($data['field_cs_defunction']); } else { $empty_sdefunction = ''; }
				if ($empty_investigation == 'SI') { $empty_sinvestigation = $this->db->scape($data['field_cs_investigation']); } else { $empty_sinvestigation = ''; }
				#-------------------------------------------------------------------------#
				# Instanciando el modelo en una variable
				$var_model = new m_azp_fct_satisfactionModel;
				$var_model->sql_azp_fct_prefacture_drop_delete();
				if ($empty_certificate == 'SI') { $var_model->sql_azp_fct_prefacture_certificate($empty_since, $empty_until, $empty_scertificate); }
				//if ($empty_defunction == 'SI') { $var_model->sql_azp_fct_prefacture_defunction($empty_since, $empty_until, $empty_sdefunction); }
				//if ($empty_investigation == 'SI') { $var_model->sql_azp_fct_prefacture_investigation($empty_since, $empty_until, $empty_sinvestigation); }
				//$var_model->sql_azp_fct_prefacture_invoicing();
				#-------------------------------------------------------------------------#
				# Instanciando el modelo en una variable
				$var_model->sql_azp_fct_satisfaction_drop_delete();
				if ($empty_certificate == 'SI') { $var_model->sql_azp_fct_satisfaction_certificate($empty_since, $empty_until, $empty_scertificate, $empty_pcertificate); }
				//if ($empty_defunction == 'SI') { $var_model->sql_azp_fct_satisfaction_defunction($empty_since, $empty_until, $empty_sdefunction); }
				if ($empty_investigation == 'SI') { $var_model->sql_azp_fct_satisfaction_investigation($empty_since, $empty_until, $empty_sinvestigation); }
				#-------------------------------------------------------------------------#
				if ($empty_certificate == 'SI') { $var_model->sql_azp_fct_satisfactiun_certificate($empty_since, $empty_until, $empty_scertificate, $empty_pcertificate); }
				if ($empty_defunction == 'SI') { $var_model->sql_azp_fct_satisfactiun_defunction($empty_since, $empty_until, $empty_sdefunction); }
				if ($empty_investigation == 'SI') { $var_model->sql_azp_fct_satisfactiun_investigation($empty_since, $empty_until, $empty_sinvestigation); }
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Base calculada correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_fct_satisfaction_certificate(string $var_since, string $var_until, string $var_subsatisfaction, string $var_provider) {
			$var_search = array(' ', '$', ',', '.00'); $var_replace = array('', '', '', '');
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_sub_satisfaction, d_azp_fct_sub_satisfaction_id_azp_fct_sub_satisfaction . " = '" . $var_subsatisfaction . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_subrsatisfaction = $value[d_azp_fct_sub_satisfaction_t_name]; endforeach; } else { $var_subrsatisfaction = ''; }
			# Verificar si el resultado de la sql es verdadero o falso
			if ($var_subrsatisfaction == 'TODO') { $var_query_sub = ''; } else { $var_query_sub = "AND tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " = '" . $var_subrsatisfaction . "'"; }
			#-------------------------------------------------------------------------#
			# Verificar si el resultado de la sql es verdadero o falso
			if ($var_provider == 'TODO') { $var_query_provider = ''; } else { $var_query_provider = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " = '" . $var_provider . "'"; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_azp_fct_client_id_azp_fct_client',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " AS 'lbl_azp_crt_request_data_t_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " AS 'lbl_azp_crt_request_data_t_provider_name',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name',
					SUM(tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_amount . ") AS 'lbl_azp_crt_capture_t_rcb_amount'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data

				INNER JOIN " . t_azp_crt_capture . " tc_azp_crt_capture
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . "
						= tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . "

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

				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = 1 " . $var_query_sub . " " . $var_query_provider . "
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_bilable . " = 'SI'
					AND (tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " >= '" . $var_since . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " <= '" . $var_until . "')
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " = 'SI'
					AND (tc_azp_crt_request_data." . d_azp_crt_request_data_t_st_located . " = ''
					OR tc_azp_crt_request_data." . d_azp_crt_request_data_t_st_located . " IS NULL)

				GROUP BY tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " ASC
			");
			#-------------------------------------------------------------------------#
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_fct_satisfaction_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_fct_satisfaction_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_fct_satisfaction_m_date_created => DATE_HOUR,
						d_azp_fct_satisfaction_m_date_modified => DATE_HOUR,
						d_azp_fct_satisfaction_m_deleted => '1',
						d_azp_fct_satisfaction_m_description => '',
						d_azp_fct_satisfaction_m_level => '2',
						d_azp_fct_satisfaction_m_status => '1',
						d_azp_fct_satisfaction_m_temp => '1',
						d_azp_fct_satisfaction_t_date_send => $value['lbl_azp_crt_request_data_t_date_delivery'],
						d_azp_fct_satisfaction_t_date_since => $var_since,
						d_azp_fct_satisfaction_t_date_until => $var_until,
						d_azp_fct_satisfaction_t_module => $value['lbl_azp_crt_request_type_t_name'],
						d_azp_fct_satisfaction_t_request => $value['lbl_azp_crt_request_data_t_request_nro'],
						d_azp_fct_satisfaction_t_service => '0',
						d_azp_fct_satisfaction_t_supplier => $value['lbl_azp_crt_request_data_t_provider_name'],
						d_azp_fct_satisfaction_t_value => $value['lbl_azp_crt_capture_t_rcb_amount'],
						d_azp_fct_satisfaction_v_id_azp_fct_client => $value['lbl_azp_fct_client_id_azp_fct_client'],
						d_azp_fct_satisfaction_v_id_azp_fct_relation => '',
						d_azp_fct_satisfaction_v_id_azp_fct_service => '1',
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_fct_satisfaction, $var_array);
				endforeach;
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_fct_satisfaction_defunction(string $var_since, string $var_until, string $var_subsatisfaction) {
			$var_search = array(' ', '$', ',', '.00'); $var_replace = array('', '', '', '');
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client.id_azp_fct_client AS 'Cliente_Id',
					tc_azp_fct_client.t_name AS 'Cliente_Nombre',
					tc_azp_gsc_request.t_number_request AS 'Nro_Solicitud',
					SUM(tc_azp_gsc_consignment.t_closed_value) AS 'ValorCerrado',
					tc_azp_gsc_consignment.t_closed_value AS 'Valor_Cerrado'
				FROM azp_gsc_request tc_azp_gsc_request

				INNER JOIN azp_gsc_client tc_azp_gsc_client
					ON tc_azp_gsc_request.v_id_azp_gsc_client
						= tc_azp_gsc_client.id_azp_gsc_client
						
				INNER JOIN azp_fct_client tc_azp_fct_client
					ON tc_azp_gsc_client.v_id_azp_fct_client
						= tc_azp_fct_client.id_azp_fct_client

				INNER JOIN azp_gsc_consignment tc_azp_gsc_consignment
					ON tc_azp_gsc_request.id_azp_gsc_request
						= tc_azp_gsc_consignment.v_id_azp_gsc_request

				WHERE tc_azp_gsc_consignment.t_value_total > 0
					AND tc_azp_gsc_consignment.t_nit_identification != ''
					AND tc_azp_gsc_request.m_deleted = 1
					AND (LEFT(tc_azp_gsc_consignment.t_consignment_date, 10) >= '" . $var_since . "'
						AND LEFT(tc_azp_gsc_consignment.t_consignment_date, 10) <= '" . $var_until . "')

				GROUP BY tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . " ASC,
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " ASC,
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " ASC,
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_closed_value . " ASC,
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . " ASC,
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_item . " ASC,
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nit_identification . " ASC
			");
			#-------------------------------------------------------------------------#
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_fct_satisfactiom_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_fct_satisfactiom_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_fct_satisfactiom_m_date_created => DATE_HOUR,
						d_azp_fct_satisfactiom_m_date_modified => DATE_HOUR,
						d_azp_fct_satisfactiom_m_deleted => '1',
						d_azp_fct_satisfactiom_m_description => '',
						d_azp_fct_satisfactiom_m_level => '2',
						d_azp_fct_satisfactiom_m_status => '1',
						d_azp_fct_satisfactiom_m_temp => '1',
						d_azp_fct_satisfactiom_t_module => '',
						d_azp_fct_satisfactiom_t_request => $value['Nro_Solicitud'],
						d_azp_fct_satisfactiom_t_service => '0',
						d_azp_fct_satisfactiom_t_value => $value['Valor_Cerrado'],
						d_azp_fct_satisfactiom_v_id_azp_fct_client => $value['Cliente_Id'],
						d_azp_fct_satisfactiom_v_id_azp_fct_service => '2',
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_fct_satisfactiom, $var_array);
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("
				SELECT
					" . d_azp_fct_satisfactiom_m_by_created . " AS 'lbl_azp_fct_satisfactiom_m_by_created',
					" . d_azp_fct_satisfactiom_m_by_modified . " AS 'lbl_azp_fct_satisfactiom_m_by_modified',
					" . d_azp_fct_satisfactiom_m_date_created . " AS 'lbl_azp_fct_satisfactiom_m_date_created',
					" . d_azp_fct_satisfactiom_m_date_modified . " AS 'lbl_azp_fct_satisfactiom_m_date_modified',
					" . d_azp_fct_satisfactiom_m_deleted . " AS 'lbl_azp_fct_satisfactiom_m_deleted',
					" . d_azp_fct_satisfactiom_m_description . " AS 'lbl_azp_fct_satisfactiom_m_description',
					" . d_azp_fct_satisfactiom_m_level . " AS 'lbl_azp_fct_satisfactiom_m_level',
					" . d_azp_fct_satisfactiom_m_status . " AS 'lbl_azp_fct_satisfactiom_m_status',
					" . d_azp_fct_satisfactiom_m_temp . " AS 'lbl_azp_fct_satisfactiom_m_temp',
					" . d_azp_fct_satisfactiom_t_module . " AS 'lbl_azp_fct_satisfactiom_t_module',
					" . d_azp_fct_satisfactiom_t_request . " AS 'lbl_azp_fct_satisfactiom_t_request',
					" . d_azp_fct_satisfactiom_t_service . " AS 'lbl_azp_fct_satisfactiom_t_service',
					SUM(" . d_azp_fct_satisfactiom_t_value . ") AS 'lbl_azp_fct_satisfactiom_t_value',
					" . d_azp_fct_satisfactiom_v_id_azp_fct_client . " AS 'lbl_azp_fct_satisfactiom_v_id_azp_fct_client',
					" . d_azp_fct_satisfactiom_v_id_azp_fct_service . " AS 'lbl_azp_fct_satisfactiom_v_id_azp_fct_service'
				FROM " . t_azp_fct_satisfactiom . "
				WHERE " . d_azp_fct_satisfactiom_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				GROUP BY " . d_azp_fct_satisfactiom_v_id_azp_fct_service . " ASC,
					" . d_azp_fct_satisfactiom_v_id_azp_fct_client . " ASC,
					" . d_azp_fct_satisfactiom_t_request . " ASC
			");
			#-------------------------------------------------------------------------#
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_fct_satisfaction_m_by_created => $value['lbl_azp_fct_satisfactiom_m_by_created'],
						d_azp_fct_satisfaction_m_by_modified => $value['lbl_azp_fct_satisfactiom_m_by_modified'],
						d_azp_fct_satisfaction_m_date_created => $value['lbl_azp_fct_satisfactiom_m_date_created'],
						d_azp_fct_satisfaction_m_date_modified => $value['lbl_azp_fct_satisfactiom_m_date_modified'],
						d_azp_fct_satisfaction_m_deleted => $value['lbl_azp_fct_satisfactiom_m_deleted'],
						d_azp_fct_satisfaction_m_description => $value['lbl_azp_fct_satisfactiom_m_description'],
						d_azp_fct_satisfaction_m_level => $value['lbl_azp_fct_satisfactiom_m_level'],
						d_azp_fct_satisfaction_m_status => $value['lbl_azp_fct_satisfactiom_m_status'],
						d_azp_fct_satisfaction_m_temp => $value['lbl_azp_fct_satisfactiom_m_temp'],
						d_azp_fct_satisfaction_t_module => $value['lbl_azp_fct_satisfactiom_t_module'],
						d_azp_fct_satisfaction_t_request => $value['lbl_azp_fct_satisfactiom_t_request'],
						d_azp_fct_satisfaction_t_service => $value['lbl_azp_fct_satisfactiom_t_service'],
						d_azp_fct_satisfaction_t_value => $value['lbl_azp_fct_satisfactiom_t_value'],
						d_azp_fct_satisfaction_v_id_azp_fct_client => $value['lbl_azp_fct_satisfactiom_v_id_azp_fct_client'],
						d_azp_fct_satisfaction_v_id_azp_fct_service => $value['lbl_azp_fct_satisfactiom_v_id_azp_fct_service'],
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_fct_satisfaction, $var_array);
				endforeach;
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_fct_satisfaction_investigation(string $var_since, string $var_until, string $var_subsatisfaction) {
			$var_search = array(' ', '$', ',', '.00'); $var_replace = array('', '', '', '');
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_sub_satisfaction, d_azp_fct_sub_satisfaction_id_azp_fct_sub_satisfaction . " = '" . $var_subsatisfaction . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_subrsatisfaction = $value[d_azp_fct_sub_satisfaction_t_name]; endforeach; } else { $var_subrsatisfaction = ''; }
			#-------------------------------------------------------------------------#
			if ($var_subrsatisfaction == 'CAMARAS' || $var_subrsatisfaction == 'TODO') {
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_control_panel.id_azp_ibn_control_panel AS 'Id_Relacion',
						tc_azp_fct_client.id_azp_fct_client AS 'Cliente_Id',
						tc_azp_fct_client.t_name AS 'Cliente_Nombre',
						tc_azp_ibn_control_panel.t_code_research AS 'Solicitud',
						tc_azp_ibn_control_panel.t_date_general AS 'Envio',
						SUM(REPLACE(REPLACE(tc_azp_ibn_camera.t_st_value, ',', ''), '$ ', '')) AS 'Valor'
					FROM azp_ibn_control_panel tc_azp_ibn_control_panel

					INNER JOIN azp_ibn_client tc_azp_ibn_client
						ON tc_azp_ibn_control_panel.v_id_azp_ibn_client
							= tc_azp_ibn_client.id_azp_ibn_client
							
					INNER JOIN azp_fct_client tc_azp_fct_client
						ON tc_azp_ibn_client.v_id_azp_fct_client
							= tc_azp_fct_client.id_azp_fct_client
							
					INNER JOIN azp_ibn_camera tc_azp_ibn_camera
						ON tc_azp_ibn_control_panel.id_azp_ibn_control_panel
							= tc_azp_ibn_camera.v_id_azp_ibn_control_panel

					WHERE tc_azp_ibn_camera.t_st_value > 0
						-- AND tc_azp_ibn_camera.t_st_located = 'NO'
						AND tc_azp_ibn_camera.t_st_returnable = 'SI'
						AND tc_azp_ibn_control_panel.m_deleted = 1
						AND tc_azp_ibn_control_panel.t_state = 'ACTIVO'
						AND (tc_azp_ibn_control_panel.t_date_general >= '" . $var_since . "'
							AND tc_azp_ibn_control_panel.t_date_general <= '" . $var_until . "')

					GROUP BY tc_azp_ibn_control_panel.v_id_azp_ibn_client ASC,
						tc_azp_ibn_control_panel.t_code_research ASC
				");
				#-------------------------------------------------------------------------#
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_fct_satisfaction_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_fct_satisfaction_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_fct_satisfaction_m_date_created => DATE_HOUR,
							d_azp_fct_satisfaction_m_date_modified => DATE_HOUR,
							d_azp_fct_satisfaction_m_deleted => '1',
							d_azp_fct_satisfaction_m_description => '',
							d_azp_fct_satisfaction_m_level => '2',
							d_azp_fct_satisfaction_m_status => '1',
							d_azp_fct_satisfaction_m_temp => '1',
							d_azp_fct_satisfaction_t_date_send => $value['Envio'],
							d_azp_fct_satisfaction_t_module => 'CAMARAS',
							d_azp_fct_satisfaction_t_request => $value['Solicitud'],
							d_azp_fct_satisfaction_t_service => '0',
							d_azp_fct_satisfaction_t_value => $value['Valor'],
							d_azp_fct_satisfaction_v_id_azp_fct_client => $value['Cliente_Id'],
							d_azp_fct_satisfaction_v_id_azp_fct_relation => $value['Id_Relacion'],
							d_azp_fct_satisfaction_v_id_azp_fct_service => '3',
						);
						# Query Sql Insert: Registrar valores en la tabla segun sus campos
						$this->db->insert(t_azp_fct_satisfaction, $var_array);
					endforeach;
				}
			}
			#-------------------------------------------------------------------------#
			if ($var_subrsatisfaction == 'INMUEBLES' || $var_subrsatisfaction == 'TODO') {
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_control_panel.id_azp_ibn_control_panel AS 'Id_Relacion',
						tc_azp_fct_client.id_azp_fct_client AS 'Cliente_Id',
						tc_azp_fct_client.t_name AS 'Cliente_Nombre',
						tc_azp_ibn_control_panel.t_code_research AS 'Solicitud',
						tc_azp_ibn_control_panel.t_date_general AS 'Envio',
						SUM(REPLACE(REPLACE(tc_azp_ibn_property.t_st_value, ',', ''), '$ ', '')) AS 'Valor'
					FROM azp_ibn_control_panel tc_azp_ibn_control_panel

					INNER JOIN azp_ibn_client tc_azp_ibn_client
						ON tc_azp_ibn_control_panel.v_id_azp_ibn_client
							= tc_azp_ibn_client.id_azp_ibn_client
							
					INNER JOIN azp_fct_client tc_azp_fct_client
						ON tc_azp_ibn_client.v_id_azp_fct_client
							= tc_azp_fct_client.id_azp_fct_client
							
					INNER JOIN azp_ibn_property tc_azp_ibn_property
						ON tc_azp_ibn_control_panel.id_azp_ibn_control_panel
							= tc_azp_ibn_property.v_id_azp_ibn_control_panel

					WHERE tc_azp_ibn_property.t_st_value > 0
						-- AND tc_azp_ibn_property.t_st_located = 'NO'
						AND tc_azp_ibn_property.t_st_returnable = 'SI'
						AND tc_azp_ibn_control_panel.m_deleted = 1
						AND tc_azp_ibn_control_panel.t_state = 'ACTIVO'
						AND (tc_azp_ibn_control_panel.t_date_general >= '" . $var_since . "'
							AND tc_azp_ibn_control_panel.t_date_general <= '" . $var_until . "')

					GROUP BY tc_azp_ibn_control_panel.v_id_azp_ibn_client ASC,
						tc_azp_ibn_control_panel.t_code_research ASC
				");
				#-------------------------------------------------------------------------#
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_fct_satisfaction_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_fct_satisfaction_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_fct_satisfaction_m_date_created => DATE_HOUR,
							d_azp_fct_satisfaction_m_date_modified => DATE_HOUR,
							d_azp_fct_satisfaction_m_deleted => '1',
							d_azp_fct_satisfaction_m_description => '',
							d_azp_fct_satisfaction_m_level => '2',
							d_azp_fct_satisfaction_m_status => '1',
							d_azp_fct_satisfaction_m_temp => '1',
							d_azp_fct_satisfaction_t_date_send => $value['Envio'],
							d_azp_fct_satisfaction_t_module => 'INMUEBLES',
							d_azp_fct_satisfaction_t_request => $value['Solicitud'],
							d_azp_fct_satisfaction_t_service => '0',
							d_azp_fct_satisfaction_t_value => $value['Valor'],
							d_azp_fct_satisfaction_v_id_azp_fct_client => $value['Cliente_Id'],
							d_azp_fct_satisfaction_v_id_azp_fct_relation => $value['Id_Relacion'],
							d_azp_fct_satisfaction_v_id_azp_fct_service => '3',
						);
						# Query Sql Insert: Registrar valores en la tabla segun sus campos
						$this->db->insert(t_azp_fct_satisfaction, $var_array);
					endforeach;
				}
			}
			#-------------------------------------------------------------------------#
			if ($var_subrsatisfaction == 'VEHICULOS' || $var_subrsatisfaction == 'TODO') {
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_control_panel.id_azp_ibn_control_panel AS 'Id_Relacion',
						tc_azp_fct_client.id_azp_fct_client AS 'Cliente_Id',
						tc_azp_fct_client.t_name AS 'Cliente_Nombre',
						tc_azp_ibn_control_panel.t_code_research AS 'Solicitud',
						tc_azp_ibn_control_panel.t_date_general AS 'Envio',
						SUM(REPLACE(REPLACE(tc_azp_ibn_vehicle.t_st_value, ',', ''), '$ ', '')) AS 'Valor'
					FROM azp_ibn_control_panel tc_azp_ibn_control_panel

					INNER JOIN azp_ibn_client tc_azp_ibn_client
						ON tc_azp_ibn_control_panel.v_id_azp_ibn_client
							= tc_azp_ibn_client.id_azp_ibn_client
							
					INNER JOIN azp_fct_client tc_azp_fct_client
						ON tc_azp_ibn_client.v_id_azp_fct_client
							= tc_azp_fct_client.id_azp_fct_client
							
					INNER JOIN azp_ibn_vehicle tc_azp_ibn_vehicle
						ON tc_azp_ibn_control_panel.id_azp_ibn_control_panel
							= tc_azp_ibn_vehicle.v_id_azp_ibn_control_panel

					WHERE tc_azp_ibn_vehicle.t_st_value > 0
						-- AND tc_azp_ibn_vehicle.t_st_located = 'NO'
						AND tc_azp_ibn_vehicle.t_st_returnable = 'SI'
						AND tc_azp_ibn_control_panel.m_deleted = 1
						AND tc_azp_ibn_control_panel.t_state = 'ACTIVO'
						AND (tc_azp_ibn_control_panel.t_date_general >= '" . $var_since . "'
							AND tc_azp_ibn_control_panel.t_date_general <= '" . $var_until . "')

					GROUP BY tc_azp_ibn_control_panel.v_id_azp_ibn_client ASC,
						tc_azp_ibn_control_panel.t_code_research ASC
				");
				#-------------------------------------------------------------------------#
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_fct_satisfaction_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_fct_satisfaction_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_fct_satisfaction_m_date_created => DATE_HOUR,
							d_azp_fct_satisfaction_m_date_modified => DATE_HOUR,
							d_azp_fct_satisfaction_m_deleted => '1',
							d_azp_fct_satisfaction_m_description => '',
							d_azp_fct_satisfaction_m_level => '2',
							d_azp_fct_satisfaction_m_status => '1',
							d_azp_fct_satisfaction_m_temp => '1',
							d_azp_fct_satisfaction_t_date_send => $value['Envio'],
							d_azp_fct_satisfaction_t_module => 'VEHICULOS',
							d_azp_fct_satisfaction_t_request => $value['Solicitud'],
							d_azp_fct_satisfaction_t_service => '0',
							d_azp_fct_satisfaction_t_value => $value['Valor'],
							d_azp_fct_satisfaction_v_id_azp_fct_client => $value['Cliente_Id'],
							d_azp_fct_satisfaction_v_id_azp_fct_relation => $value['Id_Relacion'],
							d_azp_fct_satisfaction_v_id_azp_fct_service => '3',
						);
						# Query Sql Insert: Registrar valores en la tabla segun sus campos
						$this->db->insert(t_azp_fct_satisfaction, $var_array);
					endforeach;
				}
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_vision_certificate(string $empty_returnable) {
			# Control de validacion de datos
			if ($empty_returnable == 'Si') { $var_returnable = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " = 'SI'"; }
			else if ($empty_returnable == 'No') { $var_returnable = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " = ''"; }
			else if ($empty_returnable == '') { $var_returnable = ''; } else { $var_returnable = ''; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_request = $value[d_azp_fct_satisfaction_t_request]; endforeach; } else { $var_request = ''; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_module = $value[d_azp_fct_satisfaction_t_module]; endforeach; } else { $var_module = ''; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_supplier = $value[d_azp_fct_satisfaction_t_supplier]; endforeach; } else { $var_supplier = ''; }
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
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_plaque . " AS 'lbl_azp_crt_request_data_s_plaque',
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
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_fct_service . " AS 'lbl_azp_crt_request_data_t_fct_service',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_client',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_expiration',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_observation_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_phase',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_request_type',

					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
					tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name',

					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
				    ON tc_azp_fct_satisfaction.m_by_created
					= tc_azp_user_created.id_azp_user
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
				    ON tc_azp_fct_satisfaction.m_by_modified
					= tc_azp_user_modified.id_azp_user
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
				    ON tc_azp_fct_satisfaction.m_level
					= tc_azp_sys_level.t_value
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
				    ON tc_azp_fct_satisfaction.m_status
					= tc_azp_sys_state.t_value
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
				    ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
					= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
				    ON tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
					= tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
				    ON tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
					= tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_request_data . " tc_azp_crt_request_data
					ON tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
						= tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_city . " tc_azp_crt_city
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_expiration . " tc_azp_crt_expiration
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
						= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_observation_type . " tc_azp_crt_observation_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
						= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_phase . " tc_azp_crt_phase
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_request_type . " tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ------------------------------------------------------------------------    
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . " = '1' " . $var_returnable . "
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " = '" . $var_request . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request . "'
					AND tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " = '" . $var_module . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " = '" . $var_supplier . "'
					AND (tc_azp_crt_request_data." . d_azp_crt_request_data_t_st_located . " = ''
						OR tc_azp_crt_request_data." . d_azp_crt_request_data_t_st_located . " IS NULL)
				-- ------------------------------------------------------------------------ 
				GROUP BY tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " ASC
				-- ------------------------------------------------------------------------ 
				ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_vision_defunction() {
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_request = $value[d_azp_fct_satisfaction_t_request]; endforeach; } else { $var_request = ''; }
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_value = $value[d_azp_fct_satisfaction_t_value]; endforeach; } else { $var_value = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
					tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . " AS 'lbl_azp_gsc_request_m_by_created',
					tc_azp_gsc_request." . d_azp_gsc_request_m_by_modified . " AS 'lbl_azp_gsc_request_m_by_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_created . " AS 'lbl_azp_gsc_request_m_date_created',
					tc_azp_gsc_request." . d_azp_gsc_request_m_date_modified . " AS 'lbl_azp_gsc_request_m_date_modified',
					tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " AS 'lbl_azp_gsc_request_m_deleted',
					tc_azp_gsc_request." . d_azp_gsc_request_m_description . " AS 'lbl_azp_gsc_request_m_description',
					tc_azp_gsc_request." . d_azp_gsc_request_m_level . " AS 'lbl_azp_gsc_request_m_level',
					tc_azp_gsc_request." . d_azp_gsc_request_m_status . " AS 'lbl_azp_gsc_request_m_status',
					tc_azp_gsc_request." . d_azp_gsc_request_m_temp . " AS 'lbl_azp_gsc_request_m_temp',
					tc_azp_gsc_request." . d_azp_gsc_request_s_capture . " AS 'lbl_azp_gsc_request_s_capture',
					tc_azp_gsc_request." . d_azp_gsc_request_s_client . " AS 'lbl_azp_gsc_request_s_client',
					tc_azp_gsc_request." . d_azp_gsc_request_s_code . " AS 'lbl_azp_gsc_request_s_code',
					tc_azp_gsc_request." . d_azp_gsc_request_s_data . " AS 'lbl_azp_gsc_request_s_data',
					tc_azp_gsc_request." . d_azp_gsc_request_s_date . " AS 'lbl_azp_gsc_request_s_date',
					tc_azp_gsc_request." . d_azp_gsc_request_s_duplicate . " AS 'lbl_azp_gsc_request_s_duplicate',
					tc_azp_gsc_request." . d_azp_gsc_request_s_existing . " AS 'lbl_azp_gsc_request_s_existing',
					tc_azp_gsc_request." . d_azp_gsc_request_s_validate . " AS 'lbl_azp_gsc_request_s_validate',
					tc_azp_gsc_request." . d_azp_gsc_request_s_web_service . " AS 'lbl_azp_gsc_request_s_web_service',
					tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
					tc_azp_gsc_request." . d_azp_gsc_request_t_date_associate . " AS 'lbl_azp_gsc_request_t_date_associate',
					tc_azp_gsc_request." . d_azp_gsc_request_t_death_date . " AS 'lbl_azp_gsc_request_t_death_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
					tc_azp_gsc_request." . d_azp_gsc_request_t_id_supplier . " AS 'lbl_azp_gsc_request_t_id_supplier',
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
					tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_consecutive . " AS 'lbl_azp_gsc_request_t_number_consecutive',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_obligation . " AS 'lbl_azp_gsc_request_t_number_obligation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
					tc_azp_gsc_request." . d_azp_gsc_request_t_observation_outer . " AS 'lbl_azp_gsc_request_t_observation_outer',
					tc_azp_gsc_request." . d_azp_gsc_request_t_reported_bank . " AS 'lbl_azp_gsc_request_t_reported_bank',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_by . " AS 'lbl_azp_gsc_request_t_request_by',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " AS 'lbl_azp_gsc_request_t_request_state',
					tc_azp_gsc_request." . d_azp_gsc_request_t_serial . " AS 'lbl_azp_gsc_request_t_serial',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_date . " AS 'lbl_azp_gsc_request_t_shipping_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_number . " AS 'lbl_azp_gsc_request_t_shipping_number',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_date . " AS 'lbl_azp_gsc_request_t_supplier_request_date',
					tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_number . " AS 'lbl_azp_gsc_request_t_supplier_request_number',
					tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_causal . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_causal',
					tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_client',
					tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_expiration . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_expiration',
					tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_phase . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_phase',
					tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_state . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_state',

					tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " AS 'lbl_azp_gsc_consignment_id_azp_gsc_consignment',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_by_created . " AS 'lbl_azp_gsc_consignment_m_by_created',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_by_modified . " AS 'lbl_azp_gsc_consignment_m_by_modified',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_date_created . " AS 'lbl_azp_gsc_consignment_m_date_created',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_date_modified . " AS 'lbl_azp_gsc_consignment_m_date_modified',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " AS 'lbl_azp_gsc_consignment_m_deleted',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_description . " AS 'lbl_azp_gsc_consignment_m_description',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_level . " AS 'lbl_azp_gsc_consignment_m_level',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_status . " AS 'lbl_azp_gsc_consignment_m_status',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_temp . " AS 'lbl_azp_gsc_consignment_m_temp',
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
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_to_consigned . " AS 'lbl_azp_gsc_consignment_t_to_consigned',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_check . " AS 'lbl_azp_gsc_consignment_t_value_check',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_divided . " AS 'lbl_azp_gsc_consignment_t_value_divided',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " AS 'lbl_azp_gsc_consignment_t_value_total',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_unique . " AS 'lbl_azp_gsc_consignment_t_value_unique',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . " AS 'lbl_azp_gsc_consignment_v_id_azp_gsc_request',

					tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
				    ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
					= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
				    ON tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
					= tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_request . " tc_azp_gsc_request
				    ON tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
					= tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
				    ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
					= tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
				-- ------------------------------------------------------------------------    
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . " = '2'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " = '" . $var_request . "'
					-- AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " = '" . $var_value . "'
					-- AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_closed_value . " = '" . $var_value . "'
					AND tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " = '" . $var_request . "'
					AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nit_identification . " != ''
					AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " > '0'
				-- ------------------------------------------------------------------------ 
				GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " ASC,
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " ASC,
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " ASC
				-- ------------------------------------------------------------------------ 
				ORDER BY tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " ASC,
					tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_vision_investigation_camera(string $empty_returnable) {
			# Control de validacion de datos
			if ($empty_returnable == 'Si') { $var_returnable = "AND tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_returnable . " = 'SI'"; }
			else if ($empty_returnable == 'No') { $var_returnable = "AND tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_returnable . " = 'NO'"; }
			else if ($empty_returnable == '') { $var_returnable = ''; } else { $var_returnable = ''; }
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_relation = $value[d_azp_fct_satisfaction_v_id_azp_fct_relation]; endforeach; } else { $var_relation = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " AS 'lbl_azp_ibn_camera_id_azp_ibn_camera',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_created . " AS 'lbl_azp_ibn_camera_m_by_created',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_modified . " AS 'lbl_azp_ibn_camera_m_by_modified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_created . " AS 'lbl_azp_ibn_camera_m_date_created',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_modified . " AS 'lbl_azp_ibn_camera_m_date_modified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_deleted . " AS 'lbl_azp_ibn_camera_m_deleted',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_description . " AS 'lbl_azp_ibn_camera_m_description',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_level . " AS 'lbl_azp_ibn_camera_m_level',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_status . " AS 'lbl_azp_ibn_camera_m_status',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_temp . " AS 'lbl_azp_ibn_camera_m_temp',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_validate . " AS 'lbl_azp_ibn_camera_t_validate',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_acount . " AS 'lbl_azp_ibn_camera_t_acount',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_bcount . " AS 'lbl_azp_ibn_camera_t_bcount',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_act_economic . " AS 'lbl_azp_ibn_camera_t_act_economic',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_address . " AS 'lbl_azp_ibn_camera_t_address',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_assessment . " AS 'lbl_azp_ibn_camera_t_assessment',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_business_name . " AS 'lbl_azp_ibn_camera_t_business_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_causal_feasibility . " AS 'lbl_azp_ibn_camera_t_causal_feasibility',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_city . " AS 'lbl_azp_ibn_camera_t_city',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_comment_legal . " AS 'lbl_azp_ibn_camera_t_comment_legal',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_concept . " AS 'lbl_azp_ibn_camera_t_concept',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_consecutive . " AS 'lbl_azp_ibn_camera_t_consecutive',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_department . " AS 'lbl_azp_ibn_camera_t_department',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_establishment . " AS 'lbl_azp_ibn_camera_t_establishment',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_full_name . " AS 'lbl_azp_ibn_camera_t_full_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_identification . " AS 'lbl_azp_ibn_camera_t_identification',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_representative . " AS 'lbl_azp_ibn_camera_t_legal_representative',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_rp_certificate . " AS 'lbl_azp_ibn_camera_t_legal_rp_certificate',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_limitation . " AS 'lbl_azp_ibn_camera_t_limitation',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_municipality . " AS 'lbl_azp_ibn_camera_t_municipality',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_nit . " AS 'lbl_azp_ibn_camera_t_nit',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_nro_registration . " AS 'lbl_azp_ibn_camera_t_nro_registration',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_observation . " AS 'lbl_azp_ibn_camera_t_observation',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_phone . " AS 'lbl_azp_ibn_camera_t_phone',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_policy_effective . " AS 'lbl_azp_ibn_camera_t_policy_effective',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_policy_final . " AS 'lbl_azp_ibn_camera_t_policy_final',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_policy_viability . " AS 'lbl_azp_ibn_camera_t_policy_viability',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_renewal_date . " AS 'lbl_azp_ibn_camera_t_renewal_date',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_rup . " AS 'lbl_azp_ibn_camera_t_rup',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_total_active . " AS 'lbl_azp_ibn_camera_t_total_active',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_company . " AS 'lbl_azp_ibn_camera_t_type_company',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_organization . " AS 'lbl_azp_ibn_camera_t_type_organization',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_viable . " AS 'lbl_azp_ibn_camera_t_viable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_well_viable . " AS 'lbl_azp_ibn_camera_t_well_viable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_year . " AS 'lbl_azp_ibn_camera_t_year',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_returnable . " AS 'lbl_azp_ibn_camera_t_st_returnable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_receipt . " AS 'lbl_azp_ibn_camera_t_st_receipt',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_date . " AS 'lbl_azp_ibn_camera_t_st_date',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_value . " AS 'lbl_azp_ibn_camera_t_st_value',
					tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_control_panel',
					tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_state',
					tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_certified . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_type_certified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_type_concept',

					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_created . " AS 'lbl_azp_ibn_control_panel_m_by_created',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_modified . " AS 'lbl_azp_ibn_control_panel_m_by_modified',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_created . " AS 'lbl_azp_ibn_control_panel_m_date_created',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_modified . " AS 'lbl_azp_ibn_control_panel_m_date_modified',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " AS 'lbl_azp_ibn_control_panel_m_deleted',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_description . " AS 'lbl_azp_ibn_control_panel_m_description',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_level . " AS 'lbl_azp_ibn_control_panel_m_level',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_status . " AS 'lbl_azp_ibn_control_panel_m_status',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_temp . " AS 'lbl_azp_ibn_control_panel_m_temp',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_s_date . " AS 'lbl_azp_ibn_control_panel_s_date',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_camera . " AS 'lbl_azp_ibn_control_panel_t_count_camera',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_furniture . " AS 'lbl_azp_ibn_control_panel_t_count_furniture',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_property . " AS 'lbl_azp_ibn_control_panel_t_count_property',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_vehicle . " AS 'lbl_azp_ibn_control_panel_t_count_vehicle',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_warranty . " AS 'lbl_azp_ibn_control_panel_t_count_warranty',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_arrival . " AS 'lbl_azp_ibn_control_panel_t_date_arrival',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_final . " AS 'lbl_azp_ibn_control_panel_t_date_final',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'lbl_azp_ibn_control_panel_t_date_general',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_load . " AS 'lbl_azp_ibn_control_panel_t_date_load',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_reply . " AS 'lbl_azp_ibn_control_panel_t_date_reply',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_document . " AS 'lbl_azp_ibn_control_panel_t_document',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_encode . " AS 'lbl_azp_ibn_control_panel_t_encode',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_entity . " AS 'lbl_azp_ibn_control_panel_t_entity',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_finished . " AS 'lbl_azp_ibn_control_panel_t_finished',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_camera . " AS 'lbl_azp_ibn_control_panel_t_mod_camera',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_furniture . " AS 'lbl_azp_ibn_control_panel_t_mod_furniture',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_property . " AS 'lbl_azp_ibn_control_panel_t_mod_property',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_vehicle . " AS 'lbl_azp_ibn_control_panel_t_mod_vehicle',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_warranty . " AS 'lbl_azp_ibn_control_panel_t_mod_warranty',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_register . " AS 'lbl_azp_ibn_control_panel_t_register',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_route . " AS 'lbl_azp_ibn_control_panel_t_route',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " AS 'lbl_azp_ibn_control_panel_t_state',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_control_panel_v_id_azp_ibn_client',

					tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . " AS 'lbl_azp_ibn_data_main_m_by_created',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . " AS 'lbl_azp_ibn_data_main_m_by_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " AS 'lbl_azp_ibn_data_main_m_deleted',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . " AS 'lbl_azp_ibn_data_main_m_level',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . " AS 'lbl_azp_ibn_data_main_m_status',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_temp . " AS 'lbl_azp_ibn_data_main_m_temp',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . " AS 'lbl_azp_ibn_data_main_t_acount',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_bcount . " AS 'lbl_azp_ibn_data_main_t_bcount',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_base . " AS 'lbl_azp_ibn_data_main_t_coincidence_base',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_date . " AS 'lbl_azp_ibn_data_main_t_coincidence_date',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coverage . " AS 'lbl_azp_ibn_data_main_t_coverage',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_cam',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_fur',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_pro',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_veh',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_war',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_cam',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_fur',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_pro',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_veh',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_war',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel',

					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name'
				FROM " . t_azp_ibn_camera . " tc_azp_ibn_camera
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
				    ON tc_azp_ibn_camera.m_by_created
						= tc_azp_user_created.id_azp_user
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
				    ON tc_azp_ibn_camera.m_by_modified
						= tc_azp_user_modified.id_azp_user
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
				    ON tc_azp_ibn_camera.m_level
						= tc_azp_sys_level.t_value
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
				    ON tc_azp_ibn_camera.m_status
						= tc_azp_sys_state.t_value
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
				    ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . "
						= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
				    ON tc_azp_ibn_camera." . d_azp_ibn_camera_t_acount . "
						= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				    ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . "
						= tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_relation . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
				    ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
						= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
				    ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ------------------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_relation . "' " . $var_returnable . "
					-- AND tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_located . " = 'NO'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " = 'CAMARAS'
				-- ------------------------------------------------------------------------ 
				GROUP BY tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " ASC,
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_acount . " ASC
				-- ------------------------------------------------------------------------
				ORDER BY tc_azp_ibn_camera." . d_azp_ibn_camera_t_consecutive . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_vision_investigation_property(string $empty_returnable) {
			# Control de validacion de datos
			if ($empty_returnable == 'Si') { $var_returnable = "AND tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable . " = 'SI'"; }
			else if ($empty_returnable == 'No') { $var_returnable = "AND tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable . " = 'NO'"; }
			else if ($empty_returnable == '') { $var_returnable = ''; } else { $var_returnable = ''; }
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_relation = $value[d_azp_fct_satisfaction_v_id_azp_fct_relation]; endforeach; } else { $var_relation = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " AS 'lbl_azp_ibn_property_id_azp_ibn_property',
					tc_azp_ibn_property." . d_azp_ibn_property_m_by_created . " AS 'lbl_azp_ibn_property_m_by_created',
					tc_azp_ibn_property." . d_azp_ibn_property_m_by_modified . " AS 'lbl_azp_ibn_property_m_by_modified',
					tc_azp_ibn_property." . d_azp_ibn_property_m_date_created . " AS 'lbl_azp_ibn_property_m_date_created',
					tc_azp_ibn_property." . d_azp_ibn_property_m_date_modified . " AS 'lbl_azp_ibn_property_m_date_modified',
					tc_azp_ibn_property." . d_azp_ibn_property_m_deleted . " AS 'lbl_azp_ibn_property_m_deleted',
					tc_azp_ibn_property." . d_azp_ibn_property_m_description . " AS 'lbl_azp_ibn_property_m_description',
					tc_azp_ibn_property." . d_azp_ibn_property_m_level . " AS 'lbl_azp_ibn_property_m_level',
					tc_azp_ibn_property." . d_azp_ibn_property_m_status . " AS 'lbl_azp_ibn_property_m_status',
					tc_azp_ibn_property." . d_azp_ibn_property_m_temp . " AS 'lbl_azp_ibn_property_m_temp',
					tc_azp_ibn_property." . d_azp_ibn_property_t_load_data . " AS 'lbl_azp_ibn_property_t_load_data',
					tc_azp_ibn_property." . d_azp_ibn_property_t_validate . " AS 'lbl_azp_ibn_property_t_validate',
					tc_azp_ibn_property." . d_azp_ibn_property_t_acount . " AS 'lbl_azp_ibn_property_t_acount',
					tc_azp_ibn_property." . d_azp_ibn_property_t_bcount . " AS 'lbl_azp_ibn_property_t_bcount',
					tc_azp_ibn_property." . d_azp_ibn_property_t_address . " AS 'lbl_azp_ibn_property_t_address',
					tc_azp_ibn_property." . d_azp_ibn_property_t_area . " AS 'lbl_azp_ibn_property_t_area',
					tc_azp_ibn_property." . d_azp_ibn_property_t_assessment . " AS 'lbl_azp_ibn_property_t_assessment',
					tc_azp_ibn_property." . d_azp_ibn_property_t_causal_feasibility . " AS 'lbl_azp_ibn_property_t_causal_feasibility',
					tc_azp_ibn_property." . d_azp_ibn_property_t_comment_legal . " AS 'lbl_azp_ibn_property_t_comment_legal',
					tc_azp_ibn_property." . d_azp_ibn_property_t_concept . " AS 'lbl_azp_ibn_property_t_concept',
					tc_azp_ibn_property." . d_azp_ibn_property_t_consecutive . " AS 'lbl_azp_ibn_property_t_consecutive',
					tc_azp_ibn_property." . d_azp_ibn_property_t_department . " AS 'lbl_azp_ibn_property_t_department',
					tc_azp_ibn_property." . d_azp_ibn_property_t_full_name . " AS 'lbl_azp_ibn_property_t_full_name',
					tc_azp_ibn_property." . d_azp_ibn_property_t_identification . " AS 'lbl_azp_ibn_property_t_identification',
					tc_azp_ibn_property." . d_azp_ibn_property_t_limitation . " AS 'lbl_azp_ibn_property_t_limitation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_market_value . " AS 'lbl_azp_ibn_property_t_market_value',
					tc_azp_ibn_property." . d_azp_ibn_property_t_municipality . " AS 'lbl_azp_ibn_property_t_municipality',
					tc_azp_ibn_property." . d_azp_ibn_property_t_nro_registration . " AS 'lbl_azp_ibn_property_t_nro_registration',
					tc_azp_ibn_property." . d_azp_ibn_property_t_observation . " AS 'lbl_azp_ibn_property_t_observation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_ownership . " AS 'lbl_azp_ibn_property_t_ownership',
					tc_azp_ibn_property." . d_azp_ibn_property_t_policy_effective . " AS 'lbl_azp_ibn_property_t_policy_effective',
					tc_azp_ibn_property." . d_azp_ibn_property_t_policy_final . " AS 'lbl_azp_ibn_property_t_policy_final',
					tc_azp_ibn_property." . d_azp_ibn_property_t_policy_viability . " AS 'lbl_azp_ibn_property_t_policy_viability',
					tc_azp_ibn_property." . d_azp_ibn_property_t_purchase_annotation . " AS 'lbl_azp_ibn_property_t_purchase_annotation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_viable . " AS 'lbl_azp_ibn_property_t_viable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_well_viable . " AS 'lbl_azp_ibn_property_t_well_viable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable . " AS 'lbl_azp_ibn_property_t_st_returnable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_receipt . " AS 'lbl_azp_ibn_property_t_st_receipt',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_date . " AS 'lbl_azp_ibn_property_t_st_date',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_value . " AS 'lbl_azp_ibn_property_t_st_value',
					tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_control_panel',
					tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_state',
					tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_type_concept',
					tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_property . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_type_property',

					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_created . " AS 'lbl_azp_ibn_control_panel_m_by_created',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_modified . " AS 'lbl_azp_ibn_control_panel_m_by_modified',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_created . " AS 'lbl_azp_ibn_control_panel_m_date_created',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_modified . " AS 'lbl_azp_ibn_control_panel_m_date_modified',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " AS 'lbl_azp_ibn_control_panel_m_deleted',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_description . " AS 'lbl_azp_ibn_control_panel_m_description',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_level . " AS 'lbl_azp_ibn_control_panel_m_level',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_status . " AS 'lbl_azp_ibn_control_panel_m_status',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_temp . " AS 'lbl_azp_ibn_control_panel_m_temp',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_s_date . " AS 'lbl_azp_ibn_control_panel_s_date',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_camera . " AS 'lbl_azp_ibn_control_panel_t_count_camera',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_furniture . " AS 'lbl_azp_ibn_control_panel_t_count_furniture',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_property . " AS 'lbl_azp_ibn_control_panel_t_count_property',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_vehicle . " AS 'lbl_azp_ibn_control_panel_t_count_vehicle',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_warranty . " AS 'lbl_azp_ibn_control_panel_t_count_warranty',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_arrival . " AS 'lbl_azp_ibn_control_panel_t_date_arrival',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_final . " AS 'lbl_azp_ibn_control_panel_t_date_final',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'lbl_azp_ibn_control_panel_t_date_general',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_load . " AS 'lbl_azp_ibn_control_panel_t_date_load',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_reply . " AS 'lbl_azp_ibn_control_panel_t_date_reply',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_document . " AS 'lbl_azp_ibn_control_panel_t_document',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_encode . " AS 'lbl_azp_ibn_control_panel_t_encode',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_entity . " AS 'lbl_azp_ibn_control_panel_t_entity',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_finished . " AS 'lbl_azp_ibn_control_panel_t_finished',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_camera . " AS 'lbl_azp_ibn_control_panel_t_mod_camera',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_furniture . " AS 'lbl_azp_ibn_control_panel_t_mod_furniture',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_property . " AS 'lbl_azp_ibn_control_panel_t_mod_property',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_vehicle . " AS 'lbl_azp_ibn_control_panel_t_mod_vehicle',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_warranty . " AS 'lbl_azp_ibn_control_panel_t_mod_warranty',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_register . " AS 'lbl_azp_ibn_control_panel_t_register',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_route . " AS 'lbl_azp_ibn_control_panel_t_route',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " AS 'lbl_azp_ibn_control_panel_t_state',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_control_panel_v_id_azp_ibn_client',

					tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . " AS 'lbl_azp_ibn_data_main_m_by_created',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . " AS 'lbl_azp_ibn_data_main_m_by_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " AS 'lbl_azp_ibn_data_main_m_deleted',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . " AS 'lbl_azp_ibn_data_main_m_level',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . " AS 'lbl_azp_ibn_data_main_m_status',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_temp . " AS 'lbl_azp_ibn_data_main_m_temp',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . " AS 'lbl_azp_ibn_data_main_t_acount',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_bcount . " AS 'lbl_azp_ibn_data_main_t_bcount',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_base . " AS 'lbl_azp_ibn_data_main_t_coincidence_base',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_date . " AS 'lbl_azp_ibn_data_main_t_coincidence_date',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coverage . " AS 'lbl_azp_ibn_data_main_t_coverage',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_cam',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_fur',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_pro',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_veh',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_war',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_cam',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_fur',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_pro',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_veh',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_war',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel',

					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name'
				FROM " . t_azp_ibn_property . " tc_azp_ibn_property
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
				    ON tc_azp_ibn_property.m_by_created
						= tc_azp_user_created.id_azp_user
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
				    ON tc_azp_ibn_property.m_by_modified
						= tc_azp_user_modified.id_azp_user
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
				    ON tc_azp_ibn_property.m_level
						= tc_azp_sys_level.t_value
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
				    ON tc_azp_ibn_property.m_status
						= tc_azp_sys_state.t_value
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
				    ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . "
						= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
				    ON tc_azp_ibn_property." . d_azp_ibn_property_t_acount . "
						= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				    ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . "
						= tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_relation . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
				    ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
						= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
				    ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ------------------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_relation . "' " . $var_returnable . "
					-- AND tc_azp_ibn_property." . d_azp_ibn_property_t_st_located . " = 'NO'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " = 'INMUEBLES'
				-- ------------------------------------------------------------------------ 
				GROUP BY tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " ASC,
					tc_azp_ibn_property." . d_azp_ibn_property_t_acount . " ASC
				-- ------------------------------------------------------------------------
				ORDER BY tc_azp_ibn_property." . d_azp_ibn_property_t_consecutive . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_vision_investigation_vehicle(string $empty_returnable) {
			# Control de validacion de datos
			if ($empty_returnable == 'Si') { $var_returnable = "AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_returnable . " = 'SI'"; }
			else if ($empty_returnable == 'No') { $var_returnable = "AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_returnable . " = 'NO'"; }
			else if ($empty_returnable == '') { $var_returnable = ''; } else { $var_returnable = ''; }
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_relation = $value[d_azp_fct_satisfaction_v_id_azp_fct_relation]; endforeach; } else { $var_relation = ''; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_id_azp_ibn_vehicle . " AS 'lbl_azp_ibn_vehicle_id_azp_ibn_vehicle',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_by_created . " AS 'lbl_azp_ibn_vehicle_m_by_created',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_by_modified . " AS 'lbl_azp_ibn_vehicle_m_by_modified',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_date_created . " AS 'lbl_azp_ibn_vehicle_m_date_created',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_date_modified . " AS 'lbl_azp_ibn_vehicle_m_date_modified',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_deleted . " AS 'lbl_azp_ibn_vehicle_m_deleted',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_description . " AS 'lbl_azp_ibn_vehicle_m_description',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_level . " AS 'lbl_azp_ibn_vehicle_m_level',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_status . " AS 'lbl_azp_ibn_vehicle_m_status',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_temp . " AS 'lbl_azp_ibn_vehicle_m_temp',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_load_data . " AS 'lbl_azp_ibn_vehicle_t_load_data',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_validate . " AS 'lbl_azp_ibn_vehicle_t_validate',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_acount . " AS 'lbl_azp_ibn_vehicle_t_acount',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_bcount . " AS 'lbl_azp_ibn_vehicle_t_bcount',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_assessment . " AS 'lbl_azp_ibn_vehicle_t_assessment',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_causal_feasibility . " AS 'lbl_azp_ibn_vehicle_t_causal_feasibility',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_city . " AS 'lbl_azp_ibn_vehicle_t_city',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_class . " AS 'lbl_azp_ibn_vehicle_t_class',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_color . " AS 'lbl_azp_ibn_vehicle_t_color',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_comment_legal . " AS 'lbl_azp_ibn_vehicle_t_comment_legal',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_concept . " AS 'lbl_azp_ibn_vehicle_t_concept',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_consecutive . " AS 'lbl_azp_ibn_vehicle_t_consecutive',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_full_name . " AS 'lbl_azp_ibn_vehicle_t_full_name',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_identification . " AS 'lbl_azp_ibn_vehicle_t_identification',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_limitation . " AS 'lbl_azp_ibn_vehicle_t_limitation',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_line . " AS 'lbl_azp_ibn_vehicle_t_line',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_make_camera . " AS 'lbl_azp_ibn_vehicle_t_make_camera',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_mark . " AS 'lbl_azp_ibn_vehicle_t_mark',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_model . " AS 'lbl_azp_ibn_vehicle_t_model',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_observation . " AS 'lbl_azp_ibn_vehicle_t_observation',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_plaque . " AS 'lbl_azp_ibn_vehicle_t_plaque',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_policy_effective . " AS 'lbl_azp_ibn_vehicle_t_policy_effective',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_policy_final . " AS 'lbl_azp_ibn_vehicle_t_policy_final',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_policy_viability . " AS 'lbl_azp_ibn_vehicle_t_policy_viability',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_service . " AS 'lbl_azp_ibn_vehicle_t_service',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_value_assessment . " AS 'lbl_azp_ibn_vehicle_t_value_assessment',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_value_vehicle . " AS 'lbl_azp_ibn_vehicle_t_value_vehicle',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_viable . " AS 'lbl_azp_ibn_vehicle_t_viable',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_well_viable . " AS 'lbl_azp_ibn_vehicle_t_well_viable',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_returnable . " AS 'lbl_azp_ibn_vehicle_t_st_returnable',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_receipt . " AS 'lbl_azp_ibn_vehicle_t_st_receipt',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_date . " AS 'lbl_azp_ibn_vehicle_t_st_date',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_value . " AS 'lbl_azp_ibn_vehicle_t_st_value',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_vehicle_v_id_azp_ibn_control_panel',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_vehicle_v_id_azp_ibn_state',
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_vehicle_v_id_azp_ibn_type_concept',

					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_created . " AS 'lbl_azp_ibn_control_panel_m_by_created',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_modified . " AS 'lbl_azp_ibn_control_panel_m_by_modified',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_created . " AS 'lbl_azp_ibn_control_panel_m_date_created',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_modified . " AS 'lbl_azp_ibn_control_panel_m_date_modified',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " AS 'lbl_azp_ibn_control_panel_m_deleted',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_description . " AS 'lbl_azp_ibn_control_panel_m_description',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_level . " AS 'lbl_azp_ibn_control_panel_m_level',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_status . " AS 'lbl_azp_ibn_control_panel_m_status',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_temp . " AS 'lbl_azp_ibn_control_panel_m_temp',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_s_date . " AS 'lbl_azp_ibn_control_panel_s_date',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_camera . " AS 'lbl_azp_ibn_control_panel_t_count_camera',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_furniture . " AS 'lbl_azp_ibn_control_panel_t_count_furniture',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_property . " AS 'lbl_azp_ibn_control_panel_t_count_property',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_vehicle . " AS 'lbl_azp_ibn_control_panel_t_count_vehicle',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_warranty . " AS 'lbl_azp_ibn_control_panel_t_count_warranty',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_arrival . " AS 'lbl_azp_ibn_control_panel_t_date_arrival',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_final . " AS 'lbl_azp_ibn_control_panel_t_date_final',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'lbl_azp_ibn_control_panel_t_date_general',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_load . " AS 'lbl_azp_ibn_control_panel_t_date_load',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_reply . " AS 'lbl_azp_ibn_control_panel_t_date_reply',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_document . " AS 'lbl_azp_ibn_control_panel_t_document',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_encode . " AS 'lbl_azp_ibn_control_panel_t_encode',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_entity . " AS 'lbl_azp_ibn_control_panel_t_entity',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_finished . " AS 'lbl_azp_ibn_control_panel_t_finished',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_camera . " AS 'lbl_azp_ibn_control_panel_t_mod_camera',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_furniture . " AS 'lbl_azp_ibn_control_panel_t_mod_furniture',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_property . " AS 'lbl_azp_ibn_control_panel_t_mod_property',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_vehicle . " AS 'lbl_azp_ibn_control_panel_t_mod_vehicle',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_warranty . " AS 'lbl_azp_ibn_control_panel_t_mod_warranty',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_register . " AS 'lbl_azp_ibn_control_panel_t_register',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_route . " AS 'lbl_azp_ibn_control_panel_t_route',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " AS 'lbl_azp_ibn_control_panel_t_state',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_control_panel_v_id_azp_ibn_client',

					tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . " AS 'lbl_azp_ibn_data_main_m_by_created',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . " AS 'lbl_azp_ibn_data_main_m_by_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " AS 'lbl_azp_ibn_data_main_m_deleted',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . " AS 'lbl_azp_ibn_data_main_m_level',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . " AS 'lbl_azp_ibn_data_main_m_status',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_temp . " AS 'lbl_azp_ibn_data_main_m_temp',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . " AS 'lbl_azp_ibn_data_main_t_acount',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_bcount . " AS 'lbl_azp_ibn_data_main_t_bcount',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_base . " AS 'lbl_azp_ibn_data_main_t_coincidence_base',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_date . " AS 'lbl_azp_ibn_data_main_t_coincidence_date',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coverage . " AS 'lbl_azp_ibn_data_main_t_coverage',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_cam',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_fur',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_pro',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_veh',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_war',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_cam',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_fur',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_pro',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_veh',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_war',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel',

					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name'
				FROM " . t_azp_ibn_vehicle . " tc_azp_ibn_vehicle
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
				    ON tc_azp_ibn_vehicle.m_by_created
						= tc_azp_user_created.id_azp_user
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
				    ON tc_azp_ibn_vehicle.m_by_modified
						= tc_azp_user_modified.id_azp_user
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
				    ON tc_azp_ibn_vehicle.m_level
						= tc_azp_sys_level.t_value
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
				    ON tc_azp_ibn_vehicle.m_status
						= tc_azp_sys_state.t_value
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
				    ON tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . "
						= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
				    ON tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_acount . "
						= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				    ON tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . "
						= tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_relation . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
				    ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
						= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
				    ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ------------------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . " = '" . $var_relation . "' " . $var_returnable . "
					-- AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_located . " = 'NO'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " = 'VEHICULOS'
				-- ------------------------------------------------------------------------ 
				GROUP BY tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . " ASC,
					tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_acount . " ASC
				-- ------------------------------------------------------------------------
				ORDER BY tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_consecutive . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_fct_satisfaction_xlsx_ct(string $var_returnable, string $var_module) {
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_request = $value[d_azp_fct_satisfaction_t_request]; endforeach; } else { $var_request = ''; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_module = $value[d_azp_fct_satisfaction_t_module]; endforeach; } else { $var_module = ''; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_supplier = $value[d_azp_fct_satisfaction_t_supplier]; endforeach; } else { $var_supplier = ''; }
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
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_plaque . " AS 'lbl_azp_crt_request_data_s_plaque',
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
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_fct_service . " AS 'lbl_azp_crt_request_data_t_fct_service',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_client',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_expiration',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_observation_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_phase',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_request_type',

					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
					tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name',

					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
				    ON tc_azp_fct_satisfaction.m_by_created
					= tc_azp_user_created.id_azp_user
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
				    ON tc_azp_fct_satisfaction.m_by_modified
					= tc_azp_user_modified.id_azp_user
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
				    ON tc_azp_fct_satisfaction.m_level
					= tc_azp_sys_level.t_value
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
				    ON tc_azp_fct_satisfaction.m_status
					= tc_azp_sys_state.t_value
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
				    ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
					= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
				    ON tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
					= tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
				    ON tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
					= tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_request_data . " tc_azp_crt_request_data
					ON tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
						= tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_city . " tc_azp_crt_city
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_expiration . " tc_azp_crt_expiration
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
						= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_observation_type . " tc_azp_crt_observation_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
						= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_phase . " tc_azp_crt_phase
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_request_type . " tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ------------------------------------------------------------------------    
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . " = '1'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " = '" . $var_returnable . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " = '" . $var_request . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request . "'
					AND tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " = '" . $var_module . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " = '" . $var_supplier . "'
				-- ------------------------------------------------------------------------ 
				GROUP BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " ASC
					-- tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " ASC
				-- ------------------------------------------------------------------------ 
				ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_fct_satisfaction_xlsx_it(string $var_returnable, string $var_module) {
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_relation = $value[d_azp_fct_satisfaction_v_id_azp_fct_relation]; endforeach; } else { $var_relation = ''; }
			# Control de validacion de datos
			if ($var_module == 'Camaras') {
				# Seleccionar los registros de la tabla
				return $this->db->query("
					SELECT
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
						tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
						tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " AS 'lbl_azp_ibn_camera_id_azp_ibn_camera',
						tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_created . " AS 'lbl_azp_ibn_camera_m_by_created',
						tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_modified . " AS 'lbl_azp_ibn_camera_m_by_modified',
						tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_created . " AS 'lbl_azp_ibn_camera_m_date_created',
						tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_modified . " AS 'lbl_azp_ibn_camera_m_date_modified',
						tc_azp_ibn_camera." . d_azp_ibn_camera_m_deleted . " AS 'lbl_azp_ibn_camera_m_deleted',
						tc_azp_ibn_camera." . d_azp_ibn_camera_m_description . " AS 'lbl_azp_ibn_camera_m_description',
						tc_azp_ibn_camera." . d_azp_ibn_camera_m_level . " AS 'lbl_azp_ibn_camera_m_level',
						tc_azp_ibn_camera." . d_azp_ibn_camera_m_status . " AS 'lbl_azp_ibn_camera_m_status',
						tc_azp_ibn_camera." . d_azp_ibn_camera_m_temp . " AS 'lbl_azp_ibn_camera_m_temp',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_validate . " AS 'lbl_azp_ibn_camera_t_validate',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_acount . " AS 'lbl_azp_ibn_camera_t_acount',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_bcount . " AS 'lbl_azp_ibn_camera_t_bcount',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_act_economic . " AS 'lbl_azp_ibn_camera_t_act_economic',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_address . " AS 'lbl_azp_ibn_camera_t_address',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_assessment . " AS 'lbl_azp_ibn_camera_t_assessment',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_business_name . " AS 'lbl_azp_ibn_camera_t_business_name',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_causal_feasibility . " AS 'lbl_azp_ibn_camera_t_causal_feasibility',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_city . " AS 'lbl_azp_ibn_camera_t_city',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_comment_legal . " AS 'lbl_azp_ibn_camera_t_comment_legal',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_concept . " AS 'lbl_azp_ibn_camera_t_concept',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_consecutive . " AS 'lbl_azp_ibn_camera_t_consecutive',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_department . " AS 'lbl_azp_ibn_camera_t_department',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_establishment . " AS 'lbl_azp_ibn_camera_t_establishment',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_full_name . " AS 'lbl_azp_ibn_camera_t_full_name',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_identification . " AS 'lbl_azp_ibn_camera_t_identification',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_representative . " AS 'lbl_azp_ibn_camera_t_legal_representative',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_rp_certificate . " AS 'lbl_azp_ibn_camera_t_legal_rp_certificate',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_limitation . " AS 'lbl_azp_ibn_camera_t_limitation',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_municipality . " AS 'lbl_azp_ibn_camera_t_municipality',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_nit . " AS 'lbl_azp_ibn_camera_t_nit',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_nro_registration . " AS 'lbl_azp_ibn_camera_t_nro_registration',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_observation . " AS 'lbl_azp_ibn_camera_t_observation',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_phone . " AS 'lbl_azp_ibn_camera_t_phone',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_policy_effective . " AS 'lbl_azp_ibn_camera_t_policy_effective',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_policy_final . " AS 'lbl_azp_ibn_camera_t_policy_final',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_policy_viability . " AS 'lbl_azp_ibn_camera_t_policy_viability',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_renewal_date . " AS 'lbl_azp_ibn_camera_t_renewal_date',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_rup . " AS 'lbl_azp_ibn_camera_t_rup',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_total_active . " AS 'lbl_azp_ibn_camera_t_total_active',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_company . " AS 'lbl_azp_ibn_camera_t_type_company',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_organization . " AS 'lbl_azp_ibn_camera_t_type_organization',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_viable . " AS 'lbl_azp_ibn_camera_t_viable',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_well_viable . " AS 'lbl_azp_ibn_camera_t_well_viable',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_year . " AS 'lbl_azp_ibn_camera_t_year',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_returnable . " AS 'lbl_azp_ibn_camera_t_st_returnable',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_receipt . " AS 'lbl_azp_ibn_camera_t_st_receipt',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_date . " AS 'lbl_azp_ibn_camera_t_st_date',
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_value . " AS 'lbl_azp_ibn_camera_t_st_value',
						tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_control_panel',
						tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_state',
						tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_certified . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_type_certified',
						tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_type_concept',

						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_created . " AS 'lbl_azp_ibn_control_panel_m_by_created',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_modified . " AS 'lbl_azp_ibn_control_panel_m_by_modified',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_created . " AS 'lbl_azp_ibn_control_panel_m_date_created',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_modified . " AS 'lbl_azp_ibn_control_panel_m_date_modified',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " AS 'lbl_azp_ibn_control_panel_m_deleted',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_description . " AS 'lbl_azp_ibn_control_panel_m_description',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_level . " AS 'lbl_azp_ibn_control_panel_m_level',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_status . " AS 'lbl_azp_ibn_control_panel_m_status',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_temp . " AS 'lbl_azp_ibn_control_panel_m_temp',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_s_date . " AS 'lbl_azp_ibn_control_panel_s_date',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_camera . " AS 'lbl_azp_ibn_control_panel_t_count_camera',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_furniture . " AS 'lbl_azp_ibn_control_panel_t_count_furniture',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_property . " AS 'lbl_azp_ibn_control_panel_t_count_property',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_vehicle . " AS 'lbl_azp_ibn_control_panel_t_count_vehicle',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_warranty . " AS 'lbl_azp_ibn_control_panel_t_count_warranty',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_arrival . " AS 'lbl_azp_ibn_control_panel_t_date_arrival',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_final . " AS 'lbl_azp_ibn_control_panel_t_date_final',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'lbl_azp_ibn_control_panel_t_date_general',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_load . " AS 'lbl_azp_ibn_control_panel_t_date_load',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_reply . " AS 'lbl_azp_ibn_control_panel_t_date_reply',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_document . " AS 'lbl_azp_ibn_control_panel_t_document',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_encode . " AS 'lbl_azp_ibn_control_panel_t_encode',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_entity . " AS 'lbl_azp_ibn_control_panel_t_entity',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_finished . " AS 'lbl_azp_ibn_control_panel_t_finished',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_camera . " AS 'lbl_azp_ibn_control_panel_t_mod_camera',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_furniture . " AS 'lbl_azp_ibn_control_panel_t_mod_furniture',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_property . " AS 'lbl_azp_ibn_control_panel_t_mod_property',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_vehicle . " AS 'lbl_azp_ibn_control_panel_t_mod_vehicle',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_warranty . " AS 'lbl_azp_ibn_control_panel_t_mod_warranty',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_register . " AS 'lbl_azp_ibn_control_panel_t_register',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_route . " AS 'lbl_azp_ibn_control_panel_t_route',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " AS 'lbl_azp_ibn_control_panel_t_state',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_control_panel_v_id_azp_ibn_client',

						tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . " AS 'lbl_azp_ibn_data_main_m_by_created',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . " AS 'lbl_azp_ibn_data_main_m_by_modified',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " AS 'lbl_azp_ibn_data_main_m_deleted',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . " AS 'lbl_azp_ibn_data_main_m_level',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . " AS 'lbl_azp_ibn_data_main_m_status',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_temp . " AS 'lbl_azp_ibn_data_main_m_temp',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . " AS 'lbl_azp_ibn_data_main_t_acount',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_bcount . " AS 'lbl_azp_ibn_data_main_t_bcount',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_base . " AS 'lbl_azp_ibn_data_main_t_coincidence_base',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_date . " AS 'lbl_azp_ibn_data_main_t_coincidence_date',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coverage . " AS 'lbl_azp_ibn_data_main_t_coverage',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_cam',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_fur',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_pro',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_veh',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_war',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_cam',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_fur',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_pro',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_veh',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_war',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel',

						tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name'
					FROM " . t_azp_ibn_camera . " tc_azp_ibn_camera
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_user . " tc_azp_user_created
					    ON tc_azp_ibn_camera.m_by_created
							= tc_azp_user_created.id_azp_user
					INNER JOIN " . t_azp_user . " tc_azp_user_modified
					    ON tc_azp_ibn_camera.m_by_modified
							= tc_azp_user_modified.id_azp_user
					INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					    ON tc_azp_ibn_camera.m_level
							= tc_azp_sys_level.t_value
					INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					    ON tc_azp_ibn_camera.m_status
							= tc_azp_sys_state.t_value
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					    ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . "
							= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
					    ON tc_azp_ibn_camera." . d_azp_ibn_camera_t_acount . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
					    ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . "
							= tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_relation . "
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
					    ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					    ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
							= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
					-- ------------------------------------------------------------------------
					WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_relation . "'
						AND tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_returnable . " = '" . $var_returnable . "'
						AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " = 'CAMARAS'
					-- ------------------------------------------------------------------------
					ORDER BY tc_azp_ibn_camera." . d_azp_ibn_camera_t_consecutive . " ASC
				");
			}
			# Control de validacion de datos
			if ($var_module == 'Inmuebles') {
				# Seleccionar los registros de la tabla
				return $this->db->query("
					SELECT
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
						tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
						tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " AS 'lbl_azp_ibn_property_id_azp_ibn_property',
						tc_azp_ibn_property." . d_azp_ibn_property_m_by_created . " AS 'lbl_azp_ibn_property_m_by_created',
						tc_azp_ibn_property." . d_azp_ibn_property_m_by_modified . " AS 'lbl_azp_ibn_property_m_by_modified',
						tc_azp_ibn_property." . d_azp_ibn_property_m_date_created . " AS 'lbl_azp_ibn_property_m_date_created',
						tc_azp_ibn_property." . d_azp_ibn_property_m_date_modified . " AS 'lbl_azp_ibn_property_m_date_modified',
						tc_azp_ibn_property." . d_azp_ibn_property_m_deleted . " AS 'lbl_azp_ibn_property_m_deleted',
						tc_azp_ibn_property." . d_azp_ibn_property_m_description . " AS 'lbl_azp_ibn_property_m_description',
						tc_azp_ibn_property." . d_azp_ibn_property_m_level . " AS 'lbl_azp_ibn_property_m_level',
						tc_azp_ibn_property." . d_azp_ibn_property_m_status . " AS 'lbl_azp_ibn_property_m_status',
						tc_azp_ibn_property." . d_azp_ibn_property_m_temp . " AS 'lbl_azp_ibn_property_m_temp',
						tc_azp_ibn_property." . d_azp_ibn_property_t_load_data . " AS 'lbl_azp_ibn_property_t_load_data',
						tc_azp_ibn_property." . d_azp_ibn_property_t_validate . " AS 'lbl_azp_ibn_property_t_validate',
						tc_azp_ibn_property." . d_azp_ibn_property_t_acount . " AS 'lbl_azp_ibn_property_t_acount',
						tc_azp_ibn_property." . d_azp_ibn_property_t_bcount . " AS 'lbl_azp_ibn_property_t_bcount',
						tc_azp_ibn_property." . d_azp_ibn_property_t_address . " AS 'lbl_azp_ibn_property_t_address',
						tc_azp_ibn_property." . d_azp_ibn_property_t_area . " AS 'lbl_azp_ibn_property_t_area',
						tc_azp_ibn_property." . d_azp_ibn_property_t_assessment . " AS 'lbl_azp_ibn_property_t_assessment',
						tc_azp_ibn_property." . d_azp_ibn_property_t_causal_feasibility . " AS 'lbl_azp_ibn_property_t_causal_feasibility',
						tc_azp_ibn_property." . d_azp_ibn_property_t_comment_legal . " AS 'lbl_azp_ibn_property_t_comment_legal',
						tc_azp_ibn_property." . d_azp_ibn_property_t_concept . " AS 'lbl_azp_ibn_property_t_concept',
						tc_azp_ibn_property." . d_azp_ibn_property_t_consecutive . " AS 'lbl_azp_ibn_property_t_consecutive',
						tc_azp_ibn_property." . d_azp_ibn_property_t_department . " AS 'lbl_azp_ibn_property_t_department',
						tc_azp_ibn_property." . d_azp_ibn_property_t_full_name . " AS 'lbl_azp_ibn_property_t_full_name',
						tc_azp_ibn_property." . d_azp_ibn_property_t_identification . " AS 'lbl_azp_ibn_property_t_identification',
						tc_azp_ibn_property." . d_azp_ibn_property_t_limitation . " AS 'lbl_azp_ibn_property_t_limitation',
						tc_azp_ibn_property." . d_azp_ibn_property_t_market_value . " AS 'lbl_azp_ibn_property_t_market_value',
						tc_azp_ibn_property." . d_azp_ibn_property_t_municipality . " AS 'lbl_azp_ibn_property_t_municipality',
						tc_azp_ibn_property." . d_azp_ibn_property_t_nro_registration . " AS 'lbl_azp_ibn_property_t_nro_registration',
						tc_azp_ibn_property." . d_azp_ibn_property_t_observation . " AS 'lbl_azp_ibn_property_t_observation',
						tc_azp_ibn_property." . d_azp_ibn_property_t_ownership . " AS 'lbl_azp_ibn_property_t_ownership',
						tc_azp_ibn_property." . d_azp_ibn_property_t_policy_effective . " AS 'lbl_azp_ibn_property_t_policy_effective',
						tc_azp_ibn_property." . d_azp_ibn_property_t_policy_final . " AS 'lbl_azp_ibn_property_t_policy_final',
						tc_azp_ibn_property." . d_azp_ibn_property_t_policy_viability . " AS 'lbl_azp_ibn_property_t_policy_viability',
						tc_azp_ibn_property." . d_azp_ibn_property_t_purchase_annotation . " AS 'lbl_azp_ibn_property_t_purchase_annotation',
						tc_azp_ibn_property." . d_azp_ibn_property_t_viable . " AS 'lbl_azp_ibn_property_t_viable',
						tc_azp_ibn_property." . d_azp_ibn_property_t_well_viable . " AS 'lbl_azp_ibn_property_t_well_viable',
						tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable . " AS 'lbl_azp_ibn_property_t_st_returnable',
						tc_azp_ibn_property." . d_azp_ibn_property_t_st_receipt . " AS 'lbl_azp_ibn_property_t_st_receipt',
						tc_azp_ibn_property." . d_azp_ibn_property_t_st_date . " AS 'lbl_azp_ibn_property_t_st_date',
						tc_azp_ibn_property." . d_azp_ibn_property_t_st_value . " AS 'lbl_azp_ibn_property_t_st_value',
						tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_control_panel',
						tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_state',
						tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_type_concept',
						tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_property . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_type_property',

						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_created . " AS 'lbl_azp_ibn_control_panel_m_by_created',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_modified . " AS 'lbl_azp_ibn_control_panel_m_by_modified',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_created . " AS 'lbl_azp_ibn_control_panel_m_date_created',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_modified . " AS 'lbl_azp_ibn_control_panel_m_date_modified',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " AS 'lbl_azp_ibn_control_panel_m_deleted',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_description . " AS 'lbl_azp_ibn_control_panel_m_description',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_level . " AS 'lbl_azp_ibn_control_panel_m_level',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_status . " AS 'lbl_azp_ibn_control_panel_m_status',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_temp . " AS 'lbl_azp_ibn_control_panel_m_temp',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_s_date . " AS 'lbl_azp_ibn_control_panel_s_date',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_camera . " AS 'lbl_azp_ibn_control_panel_t_count_camera',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_furniture . " AS 'lbl_azp_ibn_control_panel_t_count_furniture',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_property . " AS 'lbl_azp_ibn_control_panel_t_count_property',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_vehicle . " AS 'lbl_azp_ibn_control_panel_t_count_vehicle',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_warranty . " AS 'lbl_azp_ibn_control_panel_t_count_warranty',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_arrival . " AS 'lbl_azp_ibn_control_panel_t_date_arrival',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_final . " AS 'lbl_azp_ibn_control_panel_t_date_final',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'lbl_azp_ibn_control_panel_t_date_general',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_load . " AS 'lbl_azp_ibn_control_panel_t_date_load',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_reply . " AS 'lbl_azp_ibn_control_panel_t_date_reply',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_document . " AS 'lbl_azp_ibn_control_panel_t_document',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_encode . " AS 'lbl_azp_ibn_control_panel_t_encode',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_entity . " AS 'lbl_azp_ibn_control_panel_t_entity',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_finished . " AS 'lbl_azp_ibn_control_panel_t_finished',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_camera . " AS 'lbl_azp_ibn_control_panel_t_mod_camera',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_furniture . " AS 'lbl_azp_ibn_control_panel_t_mod_furniture',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_property . " AS 'lbl_azp_ibn_control_panel_t_mod_property',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_vehicle . " AS 'lbl_azp_ibn_control_panel_t_mod_vehicle',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_warranty . " AS 'lbl_azp_ibn_control_panel_t_mod_warranty',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_register . " AS 'lbl_azp_ibn_control_panel_t_register',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_route . " AS 'lbl_azp_ibn_control_panel_t_route',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " AS 'lbl_azp_ibn_control_panel_t_state',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_control_panel_v_id_azp_ibn_client',

						tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . " AS 'lbl_azp_ibn_data_main_m_by_created',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . " AS 'lbl_azp_ibn_data_main_m_by_modified',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " AS 'lbl_azp_ibn_data_main_m_deleted',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . " AS 'lbl_azp_ibn_data_main_m_level',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . " AS 'lbl_azp_ibn_data_main_m_status',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_temp . " AS 'lbl_azp_ibn_data_main_m_temp',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . " AS 'lbl_azp_ibn_data_main_t_acount',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_bcount . " AS 'lbl_azp_ibn_data_main_t_bcount',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_base . " AS 'lbl_azp_ibn_data_main_t_coincidence_base',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_date . " AS 'lbl_azp_ibn_data_main_t_coincidence_date',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coverage . " AS 'lbl_azp_ibn_data_main_t_coverage',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_cam',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_fur',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_pro',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_veh',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_war',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_cam',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_fur',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_pro',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_veh',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_war',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel',

						tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name'
					FROM " . t_azp_ibn_property . " tc_azp_ibn_property
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_user . " tc_azp_user_created
					    ON tc_azp_ibn_property.m_by_created
							= tc_azp_user_created.id_azp_user
					INNER JOIN " . t_azp_user . " tc_azp_user_modified
					    ON tc_azp_ibn_property.m_by_modified
							= tc_azp_user_modified.id_azp_user
					INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					    ON tc_azp_ibn_property.m_level
							= tc_azp_sys_level.t_value
					INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					    ON tc_azp_ibn_property.m_status
							= tc_azp_sys_state.t_value
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					    ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . "
							= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
					    ON tc_azp_ibn_property." . d_azp_ibn_property_t_acount . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
					    ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . "
							= tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_relation . "
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
					    ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					    ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
							= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
					-- ------------------------------------------------------------------------
					WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_relation . "'
						AND tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable . " = '" . $var_returnable . "'
						AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " = 'INMUEBLES'
					-- ------------------------------------------------------------------------
					ORDER BY tc_azp_ibn_property." . d_azp_ibn_property_t_consecutive . " ASC
				");
			}
			# Control de validacion de datos
			if ($var_module == 'Vehiculos') {
				# Seleccionar los registros de la tabla
				return $this->db->query("
					SELECT
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
						tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_id_azp_ibn_vehicle . " AS 'lbl_azp_ibn_vehicle_id_azp_ibn_vehicle',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_by_created . " AS 'lbl_azp_ibn_vehicle_m_by_created',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_by_modified . " AS 'lbl_azp_ibn_vehicle_m_by_modified',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_date_created . " AS 'lbl_azp_ibn_vehicle_m_date_created',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_date_modified . " AS 'lbl_azp_ibn_vehicle_m_date_modified',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_deleted . " AS 'lbl_azp_ibn_vehicle_m_deleted',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_description . " AS 'lbl_azp_ibn_vehicle_m_description',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_level . " AS 'lbl_azp_ibn_vehicle_m_level',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_status . " AS 'lbl_azp_ibn_vehicle_m_status',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_temp . " AS 'lbl_azp_ibn_vehicle_m_temp',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_load_data . " AS 'lbl_azp_ibn_vehicle_t_load_data',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_validate . " AS 'lbl_azp_ibn_vehicle_t_validate',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_acount . " AS 'lbl_azp_ibn_vehicle_t_acount',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_bcount . " AS 'lbl_azp_ibn_vehicle_t_bcount',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_assessment . " AS 'lbl_azp_ibn_vehicle_t_assessment',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_causal_feasibility . " AS 'lbl_azp_ibn_vehicle_t_causal_feasibility',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_city . " AS 'lbl_azp_ibn_vehicle_t_city',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_class . " AS 'lbl_azp_ibn_vehicle_t_class',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_color . " AS 'lbl_azp_ibn_vehicle_t_color',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_comment_legal . " AS 'lbl_azp_ibn_vehicle_t_comment_legal',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_concept . " AS 'lbl_azp_ibn_vehicle_t_concept',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_consecutive . " AS 'lbl_azp_ibn_vehicle_t_consecutive',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_full_name . " AS 'lbl_azp_ibn_vehicle_t_full_name',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_identification . " AS 'lbl_azp_ibn_vehicle_t_identification',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_limitation . " AS 'lbl_azp_ibn_vehicle_t_limitation',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_line . " AS 'lbl_azp_ibn_vehicle_t_line',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_make_camera . " AS 'lbl_azp_ibn_vehicle_t_make_camera',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_mark . " AS 'lbl_azp_ibn_vehicle_t_mark',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_model . " AS 'lbl_azp_ibn_vehicle_t_model',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_observation . " AS 'lbl_azp_ibn_vehicle_t_observation',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_plaque . " AS 'lbl_azp_ibn_vehicle_t_plaque',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_policy_effective . " AS 'lbl_azp_ibn_vehicle_t_policy_effective',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_policy_final . " AS 'lbl_azp_ibn_vehicle_t_policy_final',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_policy_viability . " AS 'lbl_azp_ibn_vehicle_t_policy_viability',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_service . " AS 'lbl_azp_ibn_vehicle_t_service',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_value_assessment . " AS 'lbl_azp_ibn_vehicle_t_value_assessment',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_value_vehicle . " AS 'lbl_azp_ibn_vehicle_t_value_vehicle',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_viable . " AS 'lbl_azp_ibn_vehicle_t_viable',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_well_viable . " AS 'lbl_azp_ibn_vehicle_t_well_viable',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_returnable . " AS 'lbl_azp_ibn_vehicle_t_st_returnable',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_receipt . " AS 'lbl_azp_ibn_vehicle_t_st_receipt',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_date . " AS 'lbl_azp_ibn_vehicle_t_st_date',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_value . " AS 'lbl_azp_ibn_vehicle_t_st_value',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_vehicle_v_id_azp_ibn_control_panel',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_vehicle_v_id_azp_ibn_state',
						tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_vehicle_v_id_azp_ibn_type_concept',

						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_created . " AS 'lbl_azp_ibn_control_panel_m_by_created',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_modified . " AS 'lbl_azp_ibn_control_panel_m_by_modified',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_created . " AS 'lbl_azp_ibn_control_panel_m_date_created',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_modified . " AS 'lbl_azp_ibn_control_panel_m_date_modified',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " AS 'lbl_azp_ibn_control_panel_m_deleted',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_description . " AS 'lbl_azp_ibn_control_panel_m_description',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_level . " AS 'lbl_azp_ibn_control_panel_m_level',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_status . " AS 'lbl_azp_ibn_control_panel_m_status',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_temp . " AS 'lbl_azp_ibn_control_panel_m_temp',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_s_date . " AS 'lbl_azp_ibn_control_panel_s_date',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_camera . " AS 'lbl_azp_ibn_control_panel_t_count_camera',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_furniture . " AS 'lbl_azp_ibn_control_panel_t_count_furniture',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_property . " AS 'lbl_azp_ibn_control_panel_t_count_property',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_vehicle . " AS 'lbl_azp_ibn_control_panel_t_count_vehicle',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_warranty . " AS 'lbl_azp_ibn_control_panel_t_count_warranty',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_arrival . " AS 'lbl_azp_ibn_control_panel_t_date_arrival',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_final . " AS 'lbl_azp_ibn_control_panel_t_date_final',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'lbl_azp_ibn_control_panel_t_date_general',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_load . " AS 'lbl_azp_ibn_control_panel_t_date_load',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_reply . " AS 'lbl_azp_ibn_control_panel_t_date_reply',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_document . " AS 'lbl_azp_ibn_control_panel_t_document',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_encode . " AS 'lbl_azp_ibn_control_panel_t_encode',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_entity . " AS 'lbl_azp_ibn_control_panel_t_entity',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_finished . " AS 'lbl_azp_ibn_control_panel_t_finished',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_camera . " AS 'lbl_azp_ibn_control_panel_t_mod_camera',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_furniture . " AS 'lbl_azp_ibn_control_panel_t_mod_furniture',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_property . " AS 'lbl_azp_ibn_control_panel_t_mod_property',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_vehicle . " AS 'lbl_azp_ibn_control_panel_t_mod_vehicle',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_warranty . " AS 'lbl_azp_ibn_control_panel_t_mod_warranty',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_register . " AS 'lbl_azp_ibn_control_panel_t_register',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_route . " AS 'lbl_azp_ibn_control_panel_t_route',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " AS 'lbl_azp_ibn_control_panel_t_state',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_control_panel_v_id_azp_ibn_client',

						tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . " AS 'lbl_azp_ibn_data_main_m_by_created',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . " AS 'lbl_azp_ibn_data_main_m_by_modified',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " AS 'lbl_azp_ibn_data_main_m_deleted',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . " AS 'lbl_azp_ibn_data_main_m_level',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . " AS 'lbl_azp_ibn_data_main_m_status',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_temp . " AS 'lbl_azp_ibn_data_main_m_temp',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . " AS 'lbl_azp_ibn_data_main_t_acount',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_bcount . " AS 'lbl_azp_ibn_data_main_t_bcount',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_base . " AS 'lbl_azp_ibn_data_main_t_coincidence_base',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_date . " AS 'lbl_azp_ibn_data_main_t_coincidence_date',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coverage . " AS 'lbl_azp_ibn_data_main_t_coverage',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_cam',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_fur',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_pro',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_veh',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_war',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_cam',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_fur',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_pro',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_veh',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_war',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel',

						tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name'
					FROM " . t_azp_ibn_vehicle . " tc_azp_ibn_vehicle
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_user . " tc_azp_user_created
					    ON tc_azp_ibn_vehicle.m_by_created
							= tc_azp_user_created.id_azp_user
					INNER JOIN " . t_azp_user . " tc_azp_user_modified
					    ON tc_azp_ibn_vehicle.m_by_modified
							= tc_azp_user_modified.id_azp_user
					INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					    ON tc_azp_ibn_vehicle.m_level
							= tc_azp_sys_level.t_value
					INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					    ON tc_azp_ibn_vehicle.m_status
							= tc_azp_sys_state.t_value
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					    ON tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . "
							= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
					    ON tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_acount . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
					    ON tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . "
							= tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_relation . "
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
					    ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					-- ------------------------------------------------------------------------
					INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					    ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
							= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
					-- ------------------------------------------------------------------------
					WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . " = '" . $var_relation . "'
						AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_returnable . " = '" . $var_returnable . "'
						AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " = 'VEHICULOS'
					-- ------------------------------------------------------------------------
					ORDER BY tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_consecutive . " ASC
				");
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_vision_model_value() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_satisfaction,
				d_azp_fct_satisfaction_id_azp_fct_satisfaction . " = '" . $this->id . "'"
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_alert_client() {
			if (isset($_GET['field_check'])) { $var_id = $_GET['field_check']; } else { $var_id = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT COUNT(lbl_result) AS 'lbl_count' FROM (
					SELECT COUNT(*) AS 'lbl_result', tc_azp_fct_client." . d_azp_fct_client_t_name . "
					FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
					INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
						ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
							= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
					WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ")
					GROUP BY tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . " ASC
				) AS lbl_from;
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_consolidated(string $var_id) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " AS 'lbl_azp_fct_satisfaction_id_azp_fct_satisfaction',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_created . " AS 'lbl_azp_fct_satisfaction_m_date_created',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_modified . " AS 'lbl_azp_fct_satisfaction_m_date_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_description . " AS 'lbl_azp_fct_satisfaction_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " AS 'lbl_azp_fct_satisfaction_t_request',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_service . " AS 'lbl_azp_fct_satisfaction_t_service',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_supplier . " AS 'lbl_azp_fct_satisfaction_t_supplier',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_service." . d_azp_fct_service_t_name . " AS 'lbl_azp_fct_service_t_name'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_service . " tc_azp_fct_service
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . "
						= tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_deleted . " = '1'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ")
				ORDER BY tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidated_certificate(string $var_id) {
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("DELETE FROM " . t_azp_fct_scertificate . " WHERE " . d_azp_fct_scertificate_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_v_id_azp_fct_service . " = '1' AND " . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ")");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_request = $value[d_azp_fct_satisfaction_t_request];
					$var_module = $value[d_azp_fct_satisfaction_t_module];
					$var_supplier = $value[d_azp_fct_satisfaction_t_supplier];
					# Seleccionar los registros de la tabla
					$var_sql = $this->db->query("
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
							tc_azp_crt_request_data." . d_azp_crt_request_data_s_plaque . " AS 'lbl_azp_crt_request_data_s_plaque',
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
							tc_azp_crt_request_data." . d_azp_crt_request_data_t_fct_service . " AS 'lbl_azp_crt_request_data_t_fct_service',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_city',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_client',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_expiration',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_observation_type',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_phase',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_request_type',

							tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
							tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
							tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
							tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
							tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
							tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
							tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name',

							tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value'
						FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_user . " tc_azp_user_created
						    ON tc_azp_fct_satisfaction.m_by_created
							= tc_azp_user_created.id_azp_user
						INNER JOIN " . t_azp_user . " tc_azp_user_modified
						    ON tc_azp_fct_satisfaction.m_by_modified
							= tc_azp_user_modified.id_azp_user
						INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
						    ON tc_azp_fct_satisfaction.m_level
							= tc_azp_sys_level.t_value
						INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
						    ON tc_azp_fct_satisfaction.m_status
							= tc_azp_sys_state.t_value
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
						    ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
							= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
						    ON tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
							= tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
						    ON tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
							= tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_request_data . " tc_azp_crt_request_data
							ON tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
								= tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_city . " tc_azp_crt_city
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
								= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_expiration . " tc_azp_crt_expiration
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
								= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_observation_type . " tc_azp_crt_observation_type
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
								= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_phase . " tc_azp_crt_phase
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
								= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_request_type . " tc_azp_crt_request_type
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
								= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
						-- ------------------------------------------------------------------------    
						WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
							AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . " = '1'
							AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " = '" . $var_request . "'
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request . "'
							AND tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " = '" . $var_module . "'
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " = '" . $var_supplier . "'
						-- ------------------------------------------------------------------------ 
						GROUP BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC
						-- ------------------------------------------------------------------------ 
						ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC,
							tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " ASC
					");
					#-------------------------------------------------------------------------#
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						foreach ($var_sql as $key => $value):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_fct_scertificate_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_fct_scertificate_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_fct_scertificate_m_date_created => DATE_HOUR,
								d_azp_fct_scertificate_m_date_modified => DATE_HOUR,
								d_azp_fct_scertificate_m_deleted => '1',
								d_azp_fct_scertificate_m_description => '',
								d_azp_fct_scertificate_m_level => '2',
								d_azp_fct_scertificate_m_status => '1',
								d_azp_fct_scertificate_m_temp => '1',
								d_azp_fct_scertificate_t_client => $value['lbl_azp_crt_bank_t_name'],
								d_azp_fct_scertificate_t_request_nro => $value['lbl_azp_crt_request_data_t_request_nro'],
								d_azp_fct_scertificate_t_request_date => $value['lbl_azp_crt_request_data_t_request_date'],
								d_azp_fct_scertificate_t_request_send => $value['lbl_azp_crt_request_data_t_date_delivery'],
								d_azp_fct_scertificate_t_identification => $value['lbl_azp_crt_request_data_t_identification'],
								d_azp_fct_scertificate_t_full_name => $value['lbl_azp_crt_request_data_t_full_name'],
								d_azp_fct_scertificate_t_obligation => $value['lbl_azp_crt_request_data_t_nro_oblitation'],
								d_azp_fct_scertificate_t_id_ics => $value['lbl_azp_crt_request_data_t_request_id'],
								d_azp_fct_scertificate_t_certificate => $value['lbl_azp_crt_request_type_t_name'],
								d_azp_fct_scertificate_t_enrollment => $value['lbl_azp_crt_request_data_t_plaque_enrollment'],
								d_azp_fct_scertificate_t_municipality => $value['lbl_azp_crt_city_t_name'],
								d_azp_fct_scertificate_t_applicant => $value['lbl_azp_crt_request_data_t_applicant_entity'],
								d_azp_fct_scertificate_t_bilable => $value['lbl_azp_crt_request_data_t_bilable'],
								d_azp_fct_scertificate_t_refundable => $value['lbl_azp_crt_request_data_t_refundable'],
								d_azp_fct_scertificate_t_supplier => $value['lbl_azp_crt_request_data_t_provider_name'],
								d_azp_fct_scertificate_t_receipt => $value['lbl_azp_crt_request_data_t_rcb_nro_receipt'],
								d_azp_fct_scertificate_t_service => $value['lbl_azp_crt_request_data_t_fct_service'],
								d_azp_fct_scertificate_t_value => $value['lbl_azp_crt_request_data_t_rcb_amount'],
							);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->insert(t_azp_fct_scertificate, $var_array);
						endforeach;
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_id_azp_fct_scertificate . " AS 'lbl_azp_fct_scertificate_id_azp_fct_scertificate',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_by_created . " AS 'lbl_azp_fct_scertificate_m_by_created',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_by_modified . " AS 'lbl_azp_fct_scertificate_m_by_modified',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_date_created . " AS 'lbl_azp_fct_scertificate_m_date_created',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_date_modified . " AS 'lbl_azp_fct_scertificate_m_date_modified',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_deleted . " AS 'lbl_azp_fct_scertificate_m_deleted',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_description . " AS 'lbl_azp_fct_scertificate_m_description',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_level . " AS 'lbl_azp_fct_scertificate_m_level',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_status . " AS 'lbl_azp_fct_scertificate_m_status',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_temp . " AS 'lbl_azp_fct_scertificate_m_temp',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_client . " AS 'lbl_azp_fct_scertificate_t_client',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_request_nro . " AS 'lbl_azp_fct_scertificate_t_request_nro',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_request_date . " AS 'lbl_azp_fct_scertificate_t_request_date',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_request_send . " AS 'lbl_azp_fct_scertificate_t_request_send',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_identification . " AS 'lbl_azp_fct_scertificate_t_identification',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_full_name . " AS 'lbl_azp_fct_scertificate_t_full_name',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_obligation . " AS 'lbl_azp_fct_scertificate_t_obligation',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_id_ics . " AS 'lbl_azp_fct_scertificate_t_id_ics',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_certificate . " AS 'lbl_azp_fct_scertificate_t_certificate',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_enrollment . " AS 'lbl_azp_fct_scertificate_t_enrollment',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_municipality . " AS 'lbl_azp_fct_scertificate_t_municipality',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_applicant . " AS 'lbl_azp_fct_scertificate_t_applicant',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_bilable . " AS 'lbl_azp_fct_scertificate_t_bilable',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_refundable . " AS 'lbl_azp_fct_scertificate_t_refundable',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_supplier . " AS 'lbl_azp_fct_scertificate_t_supplier',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_receipt . " AS 'lbl_azp_fct_scertificate_t_receipt',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_service . " AS 'lbl_azp_fct_scertificate_t_service',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_value . " AS 'lbl_azp_fct_scertificate_t_value'
				FROM " . t_azp_fct_scertificate . " tc_azp_fct_scertificate
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------					
				WHERE tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				ORDER BY tc_azp_fct_scertificate." . d_azp_fct_scertificate_id_azp_fct_scertificate . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidated_defunction(string $var_id) {
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("DELETE FROM " . t_azp_fct_sdefunction . " WHERE " . d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_v_id_azp_fct_service . " = '2' AND " . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ")");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_request = $value[d_azp_fct_satisfaction_t_request];
					$var_value = $value[d_azp_fct_satisfaction_t_value];
					# Seleccionar los registros de la tabla
					$var_sql = $this->db->query("
						SELECT
							tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
							tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . " AS 'lbl_azp_gsc_request_m_by_created',
							tc_azp_gsc_request." . d_azp_gsc_request_m_by_modified . " AS 'lbl_azp_gsc_request_m_by_modified',
							tc_azp_gsc_request." . d_azp_gsc_request_m_date_created . " AS 'lbl_azp_gsc_request_m_date_created',
							tc_azp_gsc_request." . d_azp_gsc_request_m_date_modified . " AS 'lbl_azp_gsc_request_m_date_modified',
							tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " AS 'lbl_azp_gsc_request_m_deleted',
							tc_azp_gsc_request." . d_azp_gsc_request_m_description . " AS 'lbl_azp_gsc_request_m_description',
							tc_azp_gsc_request." . d_azp_gsc_request_m_level . " AS 'lbl_azp_gsc_request_m_level',
							tc_azp_gsc_request." . d_azp_gsc_request_m_status . " AS 'lbl_azp_gsc_request_m_status',
							tc_azp_gsc_request." . d_azp_gsc_request_m_temp . " AS 'lbl_azp_gsc_request_m_temp',
							tc_azp_gsc_request." . d_azp_gsc_request_s_capture . " AS 'lbl_azp_gsc_request_s_capture',
							tc_azp_gsc_request." . d_azp_gsc_request_s_client . " AS 'lbl_azp_gsc_request_s_client',
							tc_azp_gsc_request." . d_azp_gsc_request_s_code . " AS 'lbl_azp_gsc_request_s_code',
							tc_azp_gsc_request." . d_azp_gsc_request_s_data . " AS 'lbl_azp_gsc_request_s_data',
							tc_azp_gsc_request." . d_azp_gsc_request_s_date . " AS 'lbl_azp_gsc_request_s_date',
							tc_azp_gsc_request." . d_azp_gsc_request_s_duplicate . " AS 'lbl_azp_gsc_request_s_duplicate',
							tc_azp_gsc_request." . d_azp_gsc_request_s_existing . " AS 'lbl_azp_gsc_request_s_existing',
							tc_azp_gsc_request." . d_azp_gsc_request_s_validate . " AS 'lbl_azp_gsc_request_s_validate',
							tc_azp_gsc_request." . d_azp_gsc_request_s_web_service . " AS 'lbl_azp_gsc_request_s_web_service',
							tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
							tc_azp_gsc_request." . d_azp_gsc_request_t_date_associate . " AS 'lbl_azp_gsc_request_t_date_associate',
							tc_azp_gsc_request." . d_azp_gsc_request_t_death_date . " AS 'lbl_azp_gsc_request_t_death_date',
							tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
							tc_azp_gsc_request." . d_azp_gsc_request_t_id_supplier . " AS 'lbl_azp_gsc_request_t_id_supplier',
							tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
							tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
							tc_azp_gsc_request." . d_azp_gsc_request_t_number_consecutive . " AS 'lbl_azp_gsc_request_t_number_consecutive',
							tc_azp_gsc_request." . d_azp_gsc_request_t_number_obligation . " AS 'lbl_azp_gsc_request_t_number_obligation',
							tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
							tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
							tc_azp_gsc_request." . d_azp_gsc_request_t_observation_outer . " AS 'lbl_azp_gsc_request_t_observation_outer',
							tc_azp_gsc_request." . d_azp_gsc_request_t_reported_bank . " AS 'lbl_azp_gsc_request_t_reported_bank',
							tc_azp_gsc_request." . d_azp_gsc_request_t_request_by . " AS 'lbl_azp_gsc_request_t_request_by',
							tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date',
							tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " AS 'lbl_azp_gsc_request_t_request_state',
							tc_azp_gsc_request." . d_azp_gsc_request_t_serial . " AS 'lbl_azp_gsc_request_t_serial',
							tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_date . " AS 'lbl_azp_gsc_request_t_shipping_date',
							tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_number . " AS 'lbl_azp_gsc_request_t_shipping_number',
							tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_date . " AS 'lbl_azp_gsc_request_t_supplier_request_date',
							tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_number . " AS 'lbl_azp_gsc_request_t_supplier_request_number',
							tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_causal . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_causal',
							tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_client',
							tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_expiration . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_expiration',
							tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_phase . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_phase',
							tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_state . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_state',

							tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " AS 'lbl_azp_gsc_consignment_id_azp_gsc_consignment',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_by_created . " AS 'lbl_azp_gsc_consignment_m_by_created',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_by_modified . " AS 'lbl_azp_gsc_consignment_m_by_modified',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_date_created . " AS 'lbl_azp_gsc_consignment_m_date_created',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_date_modified . " AS 'lbl_azp_gsc_consignment_m_date_modified',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " AS 'lbl_azp_gsc_consignment_m_deleted',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_description . " AS 'lbl_azp_gsc_consignment_m_description',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_level . " AS 'lbl_azp_gsc_consignment_m_level',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_status . " AS 'lbl_azp_gsc_consignment_m_status',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_temp . " AS 'lbl_azp_gsc_consignment_m_temp',
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
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_item . " AS 'lbl_azp_gsc_consignment_t_nro_item',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_notary_consigned . " AS 'lbl_azp_gsc_consignment_t_notary_consigned',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_notary_identification . " AS 'lbl_azp_gsc_consignment_t_notary_identification',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_notary_receipt . " AS 'lbl_azp_gsc_consignment_t_notary_receipt',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_notary_success . " AS 'lbl_azp_gsc_consignment_t_notary_success',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . " AS 'lbl_azp_gsc_consignment_v_id_azp_gsc_request',

							tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
							tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
							tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value'
						FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
						    ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
							= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
						    ON tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
							= tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_gsc_request . " tc_azp_gsc_request
						    ON tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
							= tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
						    ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
							= tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
						-- ------------------------------------------------------------------------    
						WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . " = '2'
							AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " = '" . $var_request . "'
							-- AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " = '" . $var_value . "'
							-- AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_closed_value . " = '" . $var_value . "'
							AND tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " = '" . $var_request . "'
							AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nit_identification . " != ''
							AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " > '0'
						-- ------------------------------------------------------------------------ 
						GROUP BY tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . " ASC,
							tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " ASC,
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_receipt . " ASC,
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . " ASC,
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_item . " ASC,
							tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " ASC,
							tc_azp_gsc_request." . d_azp_gsc_request_t_city . " ASC
						-- ------------------------------------------------------------------------ 
						ORDER BY tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . " ASC,
							tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " ASC,
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . " ASC,
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_item . " ASC,
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_closed_value . " ASC
					");
					#-------------------------------------------------------------------------#
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						foreach ($var_sql as $key => $value):
							$var_item = $value['lbl_azp_gsc_consignment_t_consignment_item'];
							if ($var_item != '') {
								$var_explode = explode('_', $var_item);
								$empty_item = $var_explode[1];
							} else { $empty_item = '0'; }

							if ($value['lbl_azp_gsc_consignment_t_notary_success'] == 'Si') {
								$var_to_consigned = $value['lbl_azp_gsc_consignment_t_notary_consigned'];
								$var_nit_identification = $value['lbl_azp_gsc_consignment_t_notary_identification'];
								$var_nro_receipt = $value['lbl_azp_gsc_consignment_t_notary_receipt'];
							} else {
								$var_to_consigned = $value['lbl_azp_gsc_consignment_t_to_consigned'];
								$var_nit_identification = $value['lbl_azp_gsc_consignment_t_nit_identification'];
								$var_nro_receipt = $value['lbl_azp_gsc_consignment_t_nro_receipt'];
							}
							
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_fct_sdefunction_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_fct_sdefunction_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_fct_sdefunction_m_date_created => DATE_HOUR,
								d_azp_fct_sdefunction_m_date_modified => DATE_HOUR,
								d_azp_fct_sdefunction_m_deleted => '1',
								d_azp_fct_sdefunction_m_description => '',
								d_azp_fct_sdefunction_m_level => '2',
								d_azp_fct_sdefunction_m_status => '1',
								d_azp_fct_sdefunction_m_temp => '1',
								d_azp_fct_sdefunction_t_item => $empty_item,
								d_azp_fct_sdefunction_t_client => $value['lbl_azp_fct_client_t_name'],
								d_azp_fct_sdefunction_t_request_nro => $value['lbl_azp_gsc_request_t_number_request'],
								d_azp_fct_sdefunction_t_request_date => $value['lbl_azp_gsc_request_t_request_date'],
								d_azp_fct_sdefunction_t_request_send => $value['lbl_azp_gsc_request_t_shipping_date'],
								d_azp_fct_sdefunction_t_identification => $value['lbl_azp_gsc_request_t_identification'],
								d_azp_fct_sdefunction_t_full_name => $value['lbl_azp_gsc_request_t_full_name'],
								d_azp_fct_sdefunction_t_obligation => $value['lbl_azp_gsc_request_t_number_obligation'],
								d_azp_fct_sdefunction_t_municipality => $value['lbl_azp_gsc_request_t_city'],
								d_azp_fct_sdefunction_t_serial => $value['lbl_azp_gsc_request_t_serial'],
								d_azp_fct_sdefunction_t_notary => $value['lbl_azp_gsc_request_t_notary'],

								d_azp_fct_sdefunction_t_tconsigned => $value['lbl_azp_gsc_consignment_t_to_consigned'],
								d_azp_fct_sdefunction_t_tidentification => $value['lbl_azp_gsc_consignment_t_nit_identification'],
								d_azp_fct_sdefunction_t_treceipt => $value['lbl_azp_gsc_consignment_t_nro_receipt'],

								d_azp_fct_sdefunction_t_con_full_name => $var_to_consigned,
								d_azp_fct_sdefunction_t_con_identification => $var_nit_identification,
								d_azp_fct_sdefunction_t_con_entity => $value['lbl_azp_gsc_consignment_t_consigned_entity'],
								d_azp_fct_sdefunction_t_date => $value['lbl_azp_gsc_consignment_t_consignment_date'],
								d_azp_fct_sdefunction_t_receipt => $var_nro_receipt,
								d_azp_fct_sdefunction_t_value => $value['lbl_azp_gsc_consignment_t_value_total'],
								d_azp_fct_sdefunction_t_consignment => $value['lbl_azp_gsc_consignment_t_closed_value'],
								d_azp_fct_sdefunction_t_formula => '0',
								d_azp_fct_sdefunction_t_id_gsc_request => $value['lbl_azp_gsc_consignment_v_id_azp_gsc_request'],
								d_azp_fct_sdefunction_t_notary_success => $value['lbl_azp_gsc_consignment_t_notary_success'],
							);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->insert(t_azp_fct_sdefunction, $var_array);
						endforeach;
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select("MAX(" . d_azp_fct_sdefunction_id_azp_fct_sdefunction . ") AS 'lbl_max'", t_azp_fct_sdefunction,
				d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'" . " " .
				"GROUP BY " . d_azp_fct_sdefunction_t_tidentification . " ASC, " .
					d_azp_fct_sdefunction_t_request_date . " ASC"

					//d_azp_fct_sdefunction_t_value . " ASC"
				/*"GROUP BY " . d_azp_fct_sdefunction_t_client . " ASC, " .
					d_azp_fct_sdefunction_t_request_nro . " ASC, " .
					//d_azp_fct_sdefunction_t_receipt . " ASC, " .
					d_azp_fct_sdefunction_t_request_date . " ASC, " .
					d_azp_fct_sdefunction_t_item . " ASC, " .
					d_azp_fct_sdefunction_t_tidentification . " ASC"
					//d_azp_fct_sdefunction_t_value . " ASC"*/
			);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_id = $value['lbl_max'];
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_fct_sdefunction_t_formula => '1',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_id_azp_fct_sdefunction . " = '" . $var_id . "'");
				endforeach;
			}
			# Array para asignar argumentos o valores a los elementos
			$var_array = array(d_azp_fct_sdefunction_t_consignment => '',);
			# Query Sql Update: Actualizar valores de la tabla segun sus campos
			$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fct_sdefunction_t_formula . " = '0'");
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select("*, COUNT(*) AS 'lbl_count'",
				t_azp_fct_sdefunction, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
				d_azp_fct_sdefunction_t_notary_success . " = 'Si' GROUP BY " . d_azp_fct_sdefunction_t_id_gsc_request . " ASC, " . d_azp_fct_sdefunction_t_con_full_name . " ASC"
			);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					//$var_id = $value['lbl_id'];
					$var_ct = $value['lbl_count'];
					//if ($var_ct > 1) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_fct_sdefunction_t_con_full_name => $value[d_azp_fct_sdefunction_t_con_full_name],
							d_azp_fct_sdefunction_t_con_identification => $value[d_azp_fct_sdefunction_t_con_identification],
							d_azp_fct_sdefunction_t_date => $value[d_azp_fct_sdefunction_t_date],
							d_azp_fct_sdefunction_t_receipt => $value[d_azp_fct_sdefunction_t_receipt],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_t_id_gsc_request . " = '" . $value[d_azp_fct_sdefunction_t_id_gsc_request] . "'");
					//}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select("*, COUNT(*) AS 'lbl_count'",
				t_azp_fct_sdefunction, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
				d_azp_fct_sdefunction_t_notary_success . " = 'No' GROUP BY " . d_azp_fct_sdefunction_t_id_gsc_request . " ASC, " . d_azp_fct_sdefunction_t_con_full_name . " ASC"
			);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					//$var_id = $value['lbl_id'];
					$var_ct = $value['lbl_count'];
					//if ($var_ct > 1) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_fct_sdefunction_t_date => $value[d_azp_fct_sdefunction_t_date],);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_t_id_gsc_request . " = '" . $value[d_azp_fct_sdefunction_t_id_gsc_request] . "'");
					//}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select(d_azp_fct_sdefunction_id_azp_fct_sdefunction. " AS 'lbl_id', COUNT(*) AS 'lbl_count'",
				t_azp_fct_sdefunction, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'" . " " .
				"GROUP BY " . d_azp_fct_sdefunction_t_id_gsc_request . " ASC, " . d_azp_fct_sdefunction_t_con_full_name . " ASC"
			);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_id = $value['lbl_id'];
					$var_ct = $value['lbl_count'];
					if ($var_ct > 1) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_fct_sdefunction_t_con_full_name => 'eliminar',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_id_azp_fct_sdefunction . " = '" . $var_id . "'");
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select(d_azp_fct_sdefunction_id_azp_fct_sdefunction. " AS 'lbl_id', COUNT(*) AS 'lbl_count'",
				t_azp_fct_sdefunction, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'" . " " .
				"GROUP BY " . d_azp_fct_sdefunction_t_id_gsc_request . " ASC, " . d_azp_fct_sdefunction_t_con_identification . " ASC"
			);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_id = $value['lbl_id'];
					$var_ct = $value['lbl_count'];
					if ($var_ct > 1) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_fct_sdefunction_t_con_identification => 'eliminar',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_id_azp_fct_sdefunction . " = '" . $var_id . "'");
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select(d_azp_fct_sdefunction_id_azp_fct_sdefunction. " AS 'lbl_id', COUNT(*) AS 'lbl_count'",
				t_azp_fct_sdefunction, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'" . " " .
				"GROUP BY " . d_azp_fct_sdefunction_t_id_gsc_request . " ASC, " . d_azp_fct_sdefunction_t_date . " ASC"
			);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_id = $value['lbl_id'];
					$var_ct = $value['lbl_count'];
					if ($var_ct > 1) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_fct_sdefunction_t_date => 'eliminar',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_id_azp_fct_sdefunction . " = '" . $var_id . "'");
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select(d_azp_fct_sdefunction_id_azp_fct_sdefunction. " AS 'lbl_id', COUNT(*) AS 'lbl_count'",
				t_azp_fct_sdefunction, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'" . " " .
				"GROUP BY " . d_azp_fct_sdefunction_t_id_gsc_request . " ASC, " . d_azp_fct_sdefunction_t_receipt . " ASC"
			);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_id = $value['lbl_id'];
					$var_ct = $value['lbl_count'];
					if ($var_ct > 1) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_fct_sdefunction_t_receipt => 'eliminar',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_id_azp_fct_sdefunction . " = '" . $var_id . "'");
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select("SUM(" . d_azp_fct_sdefunction_t_consignment . ") AS 'lbl_sum'", t_azp_fct_sdefunction, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_fct_sdefunction_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_fct_sdefunction_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_fct_sdefunction_m_date_created => DATE_HOUR,
						d_azp_fct_sdefunction_m_date_modified => DATE_HOUR,
						d_azp_fct_sdefunction_m_deleted => '1',
						d_azp_fct_sdefunction_m_description => '',
						d_azp_fct_sdefunction_m_level => '2',
						d_azp_fct_sdefunction_m_status => '1',
						d_azp_fct_sdefunction_m_temp => '1',
						d_azp_fct_sdefunction_t_item => '99999',
						d_azp_fct_sdefunction_t_client => '',
						d_azp_fct_sdefunction_t_request_nro => '',
						d_azp_fct_sdefunction_t_request_date => '',
						d_azp_fct_sdefunction_t_request_send => '',
						d_azp_fct_sdefunction_t_identification => '',
						d_azp_fct_sdefunction_t_full_name => '',
						d_azp_fct_sdefunction_t_obligation => '',
						d_azp_fct_sdefunction_t_municipality => '',
						d_azp_fct_sdefunction_t_serial => '',
						d_azp_fct_sdefunction_t_notary => '',
						d_azp_fct_sdefunction_t_con_full_name => 'eliminar',
						d_azp_fct_sdefunction_t_con_identification => 'eliminar',
						d_azp_fct_sdefunction_t_con_entity => '',
						d_azp_fct_sdefunction_t_date => 'eliminar',
						d_azp_fct_sdefunction_t_receipt => 'eliminar',
						d_azp_fct_sdefunction_t_value => '0',
						d_azp_fct_sdefunction_t_consignment => $value['lbl_sum'],
						d_azp_fct_sdefunction_t_formula => '2',
						d_azp_fct_sdefunction_t_id_gsc_request => '0',
						d_azp_fct_sdefunction_t_notary_success => '',
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_fct_sdefunction, $var_array);
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_id_azp_fct_sdefunction . " AS 'lbl_azp_fct_sdefunction_id_azp_fct_sdefunction',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_created . " AS 'lbl_azp_fct_sdefunction_m_by_created',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_modified . " AS 'lbl_azp_fct_sdefunction_m_by_modified',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_date_created . " AS 'lbl_azp_fct_sdefunction_m_date_created',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_date_modified . " AS 'lbl_azp_fct_sdefunction_m_date_modified',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_deleted . " AS 'lbl_azp_fct_sdefunction_m_deleted',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_description . " AS 'lbl_azp_fct_sdefunction_m_description',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_level . " AS 'lbl_azp_fct_sdefunction_m_level',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_status . " AS 'lbl_azp_fct_sdefunction_m_status',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_temp . " AS 'lbl_azp_fct_sdefunction_m_temp',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_item . " AS 'lbl_azp_fct_sdefunction_t_item',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_client . " AS 'lbl_azp_fct_sdefunction_t_client',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_request_nro . " AS 'lbl_azp_fct_sdefunction_t_request_nro',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_request_date . " AS 'lbl_azp_fct_sdefunction_t_request_date',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_request_send . " AS 'lbl_azp_fct_sdefunction_t_request_send',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_identification . " AS 'lbl_azp_fct_sdefunction_t_identification',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_full_name . " AS 'lbl_azp_fct_sdefunction_t_full_name',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_obligation . " AS 'lbl_azp_fct_sdefunction_t_obligation',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_municipality . " AS 'lbl_azp_fct_sdefunction_t_municipality',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_serial . " AS 'lbl_azp_fct_sdefunction_t_serial',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_notary . " AS 'lbl_azp_fct_sdefunction_t_notary',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_con_full_name . ") AS 'lbl_azp_fct_sdefunction_t_con_full_name',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_con_identification . ") AS 'lbl_azp_fct_sdefunction_t_con_identification',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_con_entity . " AS 'lbl_azp_fct_sdefunction_t_con_entity',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_date . ") AS 'lbl_azp_fct_sdefunction_t_date',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_receipt . ") AS 'lbl_azp_fct_sdefunction_t_receipt',
					SUM(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_value . ") AS 'lbl_azp_fct_sdefunction_t_value',
					SUM(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_consignment . ") AS 'lbl_azp_fct_sdefunction_t_consignment'
				FROM " . t_azp_fct_sdefunction . " tc_azp_fct_sdefunction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				-- ---------------------------------------------------------------
				GROUP BY tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_id_gsc_request . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_tidentification . " ASC
				-- ---------------------------------------------------------------
				ORDER BY
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_item . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_tidentification . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_tconsigned . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_date . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_formula . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidated_defunction_all() {
			# Verificar en la base de datos si existen el registro
			return $this->db->query("
				SELECT
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_id_azp_fct_sdefunction . " AS 'lbl_azp_fct_sdefunction_id_azp_fct_sdefunction',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_created . " AS 'lbl_azp_fct_sdefunction_m_by_created',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_modified . " AS 'lbl_azp_fct_sdefunction_m_by_modified',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_date_created . " AS 'lbl_azp_fct_sdefunction_m_date_created',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_date_modified . " AS 'lbl_azp_fct_sdefunction_m_date_modified',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_deleted . " AS 'lbl_azp_fct_sdefunction_m_deleted',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_description . " AS 'lbl_azp_fct_sdefunction_m_description',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_level . " AS 'lbl_azp_fct_sdefunction_m_level',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_status . " AS 'lbl_azp_fct_sdefunction_m_status',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_temp . " AS 'lbl_azp_fct_sdefunction_m_temp',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_item . " AS 'lbl_azp_fct_sdefunction_t_item',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_client . " AS 'lbl_azp_fct_sdefunction_t_client',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_request_nro . " AS 'lbl_azp_fct_sdefunction_t_request_nro',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_request_date . " AS 'lbl_azp_fct_sdefunction_t_request_date',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_request_send . " AS 'lbl_azp_fct_sdefunction_t_request_send',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_identification . " AS 'lbl_azp_fct_sdefunction_t_identification',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_full_name . " AS 'lbl_azp_fct_sdefunction_t_full_name',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_obligation . " AS 'lbl_azp_fct_sdefunction_t_obligation',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_municipality . " AS 'lbl_azp_fct_sdefunction_t_municipality',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_serial . " AS 'lbl_azp_fct_sdefunction_t_serial',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_notary . " AS 'lbl_azp_fct_sdefunction_t_notary',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_con_full_name . ") AS 'lbl_azp_fct_sdefunction_t_con_full_name',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_con_identification . ") AS 'lbl_azp_fct_sdefunction_t_con_identification',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_con_entity . " AS 'lbl_azp_fct_sdefunction_t_con_entity',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_date . ") AS 'lbl_azp_fct_sdefunction_t_date',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_receipt . ") AS 'lbl_azp_fct_sdefunction_t_receipt',
					SUM(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_value . ") AS 'lbl_azp_fct_sdefunction_t_value',
					SUM(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_consignment . ") AS 'lbl_azp_fct_sdefunction_t_consignment'
				FROM " . t_azp_fct_sdefunction . " tc_azp_fct_sdefunction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_created . " = '2'
				ORDER BY tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_tidentification . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_tconsigned . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_date . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_formula . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidated_investigation_all() {
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("DELETE FROM " . t_azp_fct_sinvestigation . " WHERE " . d_azp_fct_sinvestigation_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidated_investigation_cam(string $var_id) {
			# Defincion de valores a nuevas variables
			$var_acount = 0;
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction,
				d_azp_fct_satisfaction_t_module . " = 'CAMARAS' AND " .
				d_azp_fct_satisfaction_v_id_azp_fct_service . " = '3' AND " .
				d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ")"
			);
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_item = $var_acount += 1;
					$var_relation = $value[d_azp_fct_satisfaction_v_id_azp_fct_relation];
					#-------------------------------------------------------------------------#
					# Seleccionar los registros de la tabla
					$var_sql = $this->db->query("
						SELECT
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
							tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
							tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " AS 'lbl_azp_ibn_camera_id_azp_ibn_camera',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_created . " AS 'lbl_azp_ibn_camera_m_by_created',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_modified . " AS 'lbl_azp_ibn_camera_m_by_modified',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_created . " AS 'lbl_azp_ibn_camera_m_date_created',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_modified . " AS 'lbl_azp_ibn_camera_m_date_modified',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_deleted . " AS 'lbl_azp_ibn_camera_m_deleted',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_description . " AS 'lbl_azp_ibn_camera_m_description',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_level . " AS 'lbl_azp_ibn_camera_m_level',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_status . " AS 'lbl_azp_ibn_camera_m_status',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_temp . " AS 'lbl_azp_ibn_camera_m_temp',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_validate . " AS 'lbl_azp_ibn_camera_t_validate',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_acount . " AS 'lbl_azp_ibn_camera_t_acount',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_bcount . " AS 'lbl_azp_ibn_camera_t_bcount',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_act_economic . " AS 'lbl_azp_ibn_camera_t_act_economic',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_address . " AS 'lbl_azp_ibn_camera_t_address',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_assessment . " AS 'lbl_azp_ibn_camera_t_assessment',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_business_name . " AS 'lbl_azp_ibn_camera_t_business_name',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_causal_feasibility . " AS 'lbl_azp_ibn_camera_t_causal_feasibility',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_city . " AS 'lbl_azp_ibn_camera_t_city',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_comment_legal . " AS 'lbl_azp_ibn_camera_t_comment_legal',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_concept . " AS 'lbl_azp_ibn_camera_t_concept',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_consecutive . " AS 'lbl_azp_ibn_camera_t_consecutive',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_department . " AS 'lbl_azp_ibn_camera_t_department',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_establishment . " AS 'lbl_azp_ibn_camera_t_establishment',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_full_name . " AS 'lbl_azp_ibn_camera_t_full_name',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_identification . " AS 'lbl_azp_ibn_camera_t_identification',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_representative . " AS 'lbl_azp_ibn_camera_t_legal_representative',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_rp_certificate . " AS 'lbl_azp_ibn_camera_t_legal_rp_certificate',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_limitation . " AS 'lbl_azp_ibn_camera_t_limitation',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_municipality . " AS 'lbl_azp_ibn_camera_t_municipality',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_nit . " AS 'lbl_azp_ibn_camera_t_nit',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_nro_registration . " AS 'lbl_azp_ibn_camera_t_nro_registration',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_observation . " AS 'lbl_azp_ibn_camera_t_observation',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_phone . " AS 'lbl_azp_ibn_camera_t_phone',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_policy_effective . " AS 'lbl_azp_ibn_camera_t_policy_effective',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_policy_final . " AS 'lbl_azp_ibn_camera_t_policy_final',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_policy_viability . " AS 'lbl_azp_ibn_camera_t_policy_viability',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_renewal_date . " AS 'lbl_azp_ibn_camera_t_renewal_date',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_rup . " AS 'lbl_azp_ibn_camera_t_rup',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_total_active . " AS 'lbl_azp_ibn_camera_t_total_active',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_company . " AS 'lbl_azp_ibn_camera_t_type_company',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_organization . " AS 'lbl_azp_ibn_camera_t_type_organization',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_viable . " AS 'lbl_azp_ibn_camera_t_viable',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_well_viable . " AS 'lbl_azp_ibn_camera_t_well_viable',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_year . " AS 'lbl_azp_ibn_camera_t_year',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_returnable . " AS 'lbl_azp_ibn_camera_t_st_returnable',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_receipt . " AS 'lbl_azp_ibn_camera_t_st_receipt',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_date . " AS 'lbl_azp_ibn_camera_t_st_date',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_value . " AS 'lbl_azp_ibn_camera_t_st_value',
							tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_control_panel',
							tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_state',
							tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_certified . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_type_certified',
							tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_type_concept',

							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_created . " AS 'lbl_azp_ibn_control_panel_m_by_created',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_modified . " AS 'lbl_azp_ibn_control_panel_m_by_modified',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_created . " AS 'lbl_azp_ibn_control_panel_m_date_created',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_modified . " AS 'lbl_azp_ibn_control_panel_m_date_modified',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " AS 'lbl_azp_ibn_control_panel_m_deleted',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_description . " AS 'lbl_azp_ibn_control_panel_m_description',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_level . " AS 'lbl_azp_ibn_control_panel_m_level',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_status . " AS 'lbl_azp_ibn_control_panel_m_status',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_temp . " AS 'lbl_azp_ibn_control_panel_m_temp',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_s_date . " AS 'lbl_azp_ibn_control_panel_s_date',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_camera . " AS 'lbl_azp_ibn_control_panel_t_count_camera',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_furniture . " AS 'lbl_azp_ibn_control_panel_t_count_furniture',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_property . " AS 'lbl_azp_ibn_control_panel_t_count_property',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_vehicle . " AS 'lbl_azp_ibn_control_panel_t_count_vehicle',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_warranty . " AS 'lbl_azp_ibn_control_panel_t_count_warranty',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_arrival . " AS 'lbl_azp_ibn_control_panel_t_date_arrival',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_final . " AS 'lbl_azp_ibn_control_panel_t_date_final',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'lbl_azp_ibn_control_panel_t_date_general',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_load . " AS 'lbl_azp_ibn_control_panel_t_date_load',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_reply . " AS 'lbl_azp_ibn_control_panel_t_date_reply',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_document . " AS 'lbl_azp_ibn_control_panel_t_document',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_encode . " AS 'lbl_azp_ibn_control_panel_t_encode',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_entity . " AS 'lbl_azp_ibn_control_panel_t_entity',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_finished . " AS 'lbl_azp_ibn_control_panel_t_finished',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_camera . " AS 'lbl_azp_ibn_control_panel_t_mod_camera',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_furniture . " AS 'lbl_azp_ibn_control_panel_t_mod_furniture',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_property . " AS 'lbl_azp_ibn_control_panel_t_mod_property',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_vehicle . " AS 'lbl_azp_ibn_control_panel_t_mod_vehicle',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_warranty . " AS 'lbl_azp_ibn_control_panel_t_mod_warranty',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_register . " AS 'lbl_azp_ibn_control_panel_t_register',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_route . " AS 'lbl_azp_ibn_control_panel_t_route',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " AS 'lbl_azp_ibn_control_panel_t_state',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_control_panel_v_id_azp_ibn_client',

							tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . " AS 'lbl_azp_ibn_data_main_m_by_created',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . " AS 'lbl_azp_ibn_data_main_m_by_modified',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " AS 'lbl_azp_ibn_data_main_m_deleted',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . " AS 'lbl_azp_ibn_data_main_m_level',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . " AS 'lbl_azp_ibn_data_main_m_status',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_temp . " AS 'lbl_azp_ibn_data_main_m_temp',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . " AS 'lbl_azp_ibn_data_main_t_acount',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_bcount . " AS 'lbl_azp_ibn_data_main_t_bcount',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_base . " AS 'lbl_azp_ibn_data_main_t_coincidence_base',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_date . " AS 'lbl_azp_ibn_data_main_t_coincidence_date',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coverage . " AS 'lbl_azp_ibn_data_main_t_coverage',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_cam',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_fur',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_pro',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_veh',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_war',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_cam',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_fur',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_pro',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_veh',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_war',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel',

							tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
							tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name'
						FROM " . t_azp_ibn_camera . " tc_azp_ibn_camera
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_user . " tc_azp_user_created
						    ON tc_azp_ibn_camera.m_by_created
								= tc_azp_user_created.id_azp_user
						INNER JOIN " . t_azp_user . " tc_azp_user_modified
						    ON tc_azp_ibn_camera.m_by_modified
								= tc_azp_user_modified.id_azp_user
						INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
						    ON tc_azp_ibn_camera.m_level
								= tc_azp_sys_level.t_value
						INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
						    ON tc_azp_ibn_camera.m_status
								= tc_azp_sys_state.t_value
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
						    ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . "
								= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						    ON tc_azp_ibn_camera." . d_azp_ibn_camera_t_acount . "
								= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
						    ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . "
								= tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_relation . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						    ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
						    ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
								= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
						    ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_state . "
								= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
						-- ------------------------------------------------------------------------
						WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
							AND tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_relation . "'
							-- AND tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_located ." = 'NO'
							AND tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_returnable ." = 'SI'
							AND tc_azp_ibn_camera." . d_azp_ibn_vehicle_t_st_value . " > 0
							AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " = 'CAMARAS'
						-- ------------------------------------------------------------------------ 
						GROUP BY tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " ASC,
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_acount . " ASC
						-- ------------------------------------------------------------------------
						ORDER BY tc_azp_ibn_camera." . d_azp_ibn_camera_t_consecutive . " ASC
					");
					#-------------------------------------------------------------------------#
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						foreach ($var_sql as $key => $value):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_fct_sinvestigation_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_fct_sinvestigation_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_fct_sinvestigation_m_date_created => DATE_HOUR,
								d_azp_fct_sinvestigation_m_date_modified => DATE_HOUR,
								d_azp_fct_sinvestigation_m_deleted => '1',
								d_azp_fct_sinvestigation_m_description => '',
								d_azp_fct_sinvestigation_m_level => '2',
								d_azp_fct_sinvestigation_m_status => '1',
								d_azp_fct_sinvestigation_m_temp => '1',
								d_azp_fct_sinvestigation_t_item => $var_item,
								d_azp_fct_sinvestigation_t_client => $value['lbl_azp_fct_client_t_name'],
								d_azp_fct_sinvestigation_t_request_nro => $value['lbl_azp_ibn_control_panel_t_code_research'],
								d_azp_fct_sinvestigation_t_request_date => $value['lbl_azp_ibn_control_panel_t_date_arrival'],
								d_azp_fct_sinvestigation_t_request_send => $value['lbl_azp_ibn_control_panel_t_date_general'],
								d_azp_fct_sinvestigation_t_identification => $value['lbl_azp_ibn_camera_t_identification'],
								d_azp_fct_sinvestigation_t_full_name => $value['lbl_azp_ibn_camera_t_full_name'],
								d_azp_fct_sinvestigation_t_obligation => $value['lbl_azp_ibn_data_main_t_nro_obligation'],
								d_azp_fct_sinvestigation_t_id_client => $value['lbl_azp_ibn_data_main_t_code'],
								d_azp_fct_sinvestigation_t_municipality => $value['lbl_azp_ibn_camera_t_city'],
								d_azp_fct_sinvestigation_t_consecutive => $value['lbl_azp_ibn_camera_t_consecutive'],
								d_azp_fct_sinvestigation_t_enrollment => $value['lbl_azp_ibn_camera_t_nro_registration'],
								d_azp_fct_sinvestigation_t_quality => $value['lbl_azp_ibn_camera_t_st_returnable'],
								d_azp_fct_sinvestigation_t_certificate => $value['lbl_azp_fct_satisfaction_t_module'],
								d_azp_fct_sinvestigation_t_receipt => $value['lbl_azp_ibn_camera_t_st_receipt'],
								d_azp_fct_sinvestigation_t_value => $value['lbl_azp_ibn_camera_t_st_value'],
								d_azp_fct_sinvestigation_t_state => $value['lbl_azp_ibn_state_t_name'],
							);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->insert(t_azp_fct_sinvestigation, $var_array);
						endforeach;
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			/*return $this->db->query("
				SELECT
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_id_azp_fct_sinvestigation . " AS 'lbl_azp_fct_sinvestigation_id_azp_fct_sinvestigation',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . " AS 'lbl_azp_fct_sinvestigation_m_by_created',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_modified . " AS 'lbl_azp_fct_sinvestigation_m_by_modified',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_date_created . " AS 'lbl_azp_fct_sinvestigation_m_date_created',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_date_modified . " AS 'lbl_azp_fct_sinvestigation_m_date_modified',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_deleted . " AS 'lbl_azp_fct_sinvestigation_m_deleted',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_description . " AS 'lbl_azp_fct_sinvestigation_m_description',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_level . " AS 'lbl_azp_fct_sinvestigation_m_level',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_status . " AS 'lbl_azp_fct_sinvestigation_m_status',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_temp . " AS 'lbl_azp_fct_sinvestigation_m_temp',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_item . " AS 'lbl_azp_fct_sinvestigation_t_item',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_client . " AS 'lbl_azp_fct_sinvestigation_t_client',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_nro . " AS 'lbl_azp_fct_sinvestigation_t_request_nro',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_date . " AS 'lbl_azp_fct_sinvestigation_t_request_date',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_send . " AS 'lbl_azp_fct_sinvestigation_t_request_send',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_identification . " AS 'lbl_azp_fct_sinvestigation_t_identification',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_full_name . " AS 'lbl_azp_fct_sinvestigation_t_full_name',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_obligation . " AS 'lbl_azp_fct_sinvestigation_t_obligation',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_id_client . " AS 'lbl_azp_fct_sinvestigation_t_id_client',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_municipality . " AS 'lbl_azp_fct_sinvestigation_t_municipality',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_consecutive . " AS 'lbl_azp_fct_sinvestigation_t_consecutive',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_enrollment . " AS 'lbl_azp_fct_sinvestigation_t_enrollment',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_quality . " AS 'lbl_azp_fct_sinvestigation_t_quality',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_certificate . " AS 'lbl_azp_fct_sinvestigation_t_certificate',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_receipt . " AS 'lbl_azp_fct_sinvestigation_t_receipt',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_value . " AS 'lbl_azp_fct_sinvestigation_t_value',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_state . " AS 'lbl_azp_fct_sinvestigation_t_state'
				FROM " . t_azp_fct_sinvestigation . " tc_azp_fct_sinvestigation
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------					
				WHERE tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				ORDER BY tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_id_azp_fct_sinvestigation . " ASC
			");*/
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidated_investigation_pro(string $var_id) {
			# Defincion de valores a nuevas variables
			$var_acount = 0;
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction,
				d_azp_fct_satisfaction_t_module . " = 'INMUEBLES' AND " .
				d_azp_fct_satisfaction_v_id_azp_fct_service . " = '3' AND " .
				d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ")"
			);
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_item = $var_acount += 1;
					$var_relation = $value[d_azp_fct_satisfaction_v_id_azp_fct_relation];
					#-------------------------------------------------------------------------#
					# Seleccionar los registros de la tabla
					$var_sql = $this->db->query("
						SELECT
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
							tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
							tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " AS 'lbl_azp_ibn_property_id_azp_ibn_property',
							tc_azp_ibn_property." . d_azp_ibn_property_m_by_created . " AS 'lbl_azp_ibn_property_m_by_created',
							tc_azp_ibn_property." . d_azp_ibn_property_m_by_modified . " AS 'lbl_azp_ibn_property_m_by_modified',
							tc_azp_ibn_property." . d_azp_ibn_property_m_date_created . " AS 'lbl_azp_ibn_property_m_date_created',
							tc_azp_ibn_property." . d_azp_ibn_property_m_date_modified . " AS 'lbl_azp_ibn_property_m_date_modified',
							tc_azp_ibn_property." . d_azp_ibn_property_m_deleted . " AS 'lbl_azp_ibn_property_m_deleted',
							tc_azp_ibn_property." . d_azp_ibn_property_m_description . " AS 'lbl_azp_ibn_property_m_description',
							tc_azp_ibn_property." . d_azp_ibn_property_m_level . " AS 'lbl_azp_ibn_property_m_level',
							tc_azp_ibn_property." . d_azp_ibn_property_m_status . " AS 'lbl_azp_ibn_property_m_status',
							tc_azp_ibn_property." . d_azp_ibn_property_m_temp . " AS 'lbl_azp_ibn_property_m_temp',
							tc_azp_ibn_property." . d_azp_ibn_property_t_load_data . " AS 'lbl_azp_ibn_property_t_load_data',
							tc_azp_ibn_property." . d_azp_ibn_property_t_validate . " AS 'lbl_azp_ibn_property_t_validate',
							tc_azp_ibn_property." . d_azp_ibn_property_t_acount . " AS 'lbl_azp_ibn_property_t_acount',
							tc_azp_ibn_property." . d_azp_ibn_property_t_bcount . " AS 'lbl_azp_ibn_property_t_bcount',
							tc_azp_ibn_property." . d_azp_ibn_property_t_address . " AS 'lbl_azp_ibn_property_t_address',
							tc_azp_ibn_property." . d_azp_ibn_property_t_area . " AS 'lbl_azp_ibn_property_t_area',
							tc_azp_ibn_property." . d_azp_ibn_property_t_assessment . " AS 'lbl_azp_ibn_property_t_assessment',
							tc_azp_ibn_property." . d_azp_ibn_property_t_causal_feasibility . " AS 'lbl_azp_ibn_property_t_causal_feasibility',
							tc_azp_ibn_property." . d_azp_ibn_property_t_comment_legal . " AS 'lbl_azp_ibn_property_t_comment_legal',
							tc_azp_ibn_property." . d_azp_ibn_property_t_concept . " AS 'lbl_azp_ibn_property_t_concept',
							tc_azp_ibn_property." . d_azp_ibn_property_t_consecutive . " AS 'lbl_azp_ibn_property_t_consecutive',
							tc_azp_ibn_property." . d_azp_ibn_property_t_department . " AS 'lbl_azp_ibn_property_t_department',
							tc_azp_ibn_property." . d_azp_ibn_property_t_full_name . " AS 'lbl_azp_ibn_property_t_full_name',
							tc_azp_ibn_property." . d_azp_ibn_property_t_identification . " AS 'lbl_azp_ibn_property_t_identification',
							tc_azp_ibn_property." . d_azp_ibn_property_t_limitation . " AS 'lbl_azp_ibn_property_t_limitation',
							tc_azp_ibn_property." . d_azp_ibn_property_t_market_value . " AS 'lbl_azp_ibn_property_t_market_value',
							tc_azp_ibn_property." . d_azp_ibn_property_t_municipality . " AS 'lbl_azp_ibn_property_t_municipality',
							tc_azp_ibn_property." . d_azp_ibn_property_t_nro_registration . " AS 'lbl_azp_ibn_property_t_nro_registration',
							tc_azp_ibn_property." . d_azp_ibn_property_t_observation . " AS 'lbl_azp_ibn_property_t_observation',
							tc_azp_ibn_property." . d_azp_ibn_property_t_ownership . " AS 'lbl_azp_ibn_property_t_ownership',
							tc_azp_ibn_property." . d_azp_ibn_property_t_policy_effective . " AS 'lbl_azp_ibn_property_t_policy_effective',
							tc_azp_ibn_property." . d_azp_ibn_property_t_policy_final . " AS 'lbl_azp_ibn_property_t_policy_final',
							tc_azp_ibn_property." . d_azp_ibn_property_t_policy_viability . " AS 'lbl_azp_ibn_property_t_policy_viability',
							tc_azp_ibn_property." . d_azp_ibn_property_t_purchase_annotation . " AS 'lbl_azp_ibn_property_t_purchase_annotation',
							tc_azp_ibn_property." . d_azp_ibn_property_t_viable . " AS 'lbl_azp_ibn_property_t_viable',
							tc_azp_ibn_property." . d_azp_ibn_property_t_well_viable . " AS 'lbl_azp_ibn_property_t_well_viable',
							tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable . " AS 'lbl_azp_ibn_property_t_st_returnable',
							tc_azp_ibn_property." . d_azp_ibn_property_t_st_receipt . " AS 'lbl_azp_ibn_property_t_st_receipt',
							tc_azp_ibn_property." . d_azp_ibn_property_t_st_date . " AS 'lbl_azp_ibn_property_t_st_date',
							tc_azp_ibn_property." . d_azp_ibn_property_t_st_value . " AS 'lbl_azp_ibn_property_t_st_value',
							tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_control_panel',
							tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_state',
							tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_type_concept',
							tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_property . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_type_property',

							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_created . " AS 'lbl_azp_ibn_control_panel_m_by_created',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_modified . " AS 'lbl_azp_ibn_control_panel_m_by_modified',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_created . " AS 'lbl_azp_ibn_control_panel_m_date_created',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_modified . " AS 'lbl_azp_ibn_control_panel_m_date_modified',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " AS 'lbl_azp_ibn_control_panel_m_deleted',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_description . " AS 'lbl_azp_ibn_control_panel_m_description',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_level . " AS 'lbl_azp_ibn_control_panel_m_level',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_status . " AS 'lbl_azp_ibn_control_panel_m_status',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_temp . " AS 'lbl_azp_ibn_control_panel_m_temp',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_s_date . " AS 'lbl_azp_ibn_control_panel_s_date',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_camera . " AS 'lbl_azp_ibn_control_panel_t_count_camera',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_furniture . " AS 'lbl_azp_ibn_control_panel_t_count_furniture',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_property . " AS 'lbl_azp_ibn_control_panel_t_count_property',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_vehicle . " AS 'lbl_azp_ibn_control_panel_t_count_vehicle',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_warranty . " AS 'lbl_azp_ibn_control_panel_t_count_warranty',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_arrival . " AS 'lbl_azp_ibn_control_panel_t_date_arrival',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_final . " AS 'lbl_azp_ibn_control_panel_t_date_final',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'lbl_azp_ibn_control_panel_t_date_general',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_load . " AS 'lbl_azp_ibn_control_panel_t_date_load',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_reply . " AS 'lbl_azp_ibn_control_panel_t_date_reply',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_document . " AS 'lbl_azp_ibn_control_panel_t_document',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_encode . " AS 'lbl_azp_ibn_control_panel_t_encode',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_entity . " AS 'lbl_azp_ibn_control_panel_t_entity',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_finished . " AS 'lbl_azp_ibn_control_panel_t_finished',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_camera . " AS 'lbl_azp_ibn_control_panel_t_mod_camera',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_furniture . " AS 'lbl_azp_ibn_control_panel_t_mod_furniture',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_property . " AS 'lbl_azp_ibn_control_panel_t_mod_property',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_vehicle . " AS 'lbl_azp_ibn_control_panel_t_mod_vehicle',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_warranty . " AS 'lbl_azp_ibn_control_panel_t_mod_warranty',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_register . " AS 'lbl_azp_ibn_control_panel_t_register',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_route . " AS 'lbl_azp_ibn_control_panel_t_route',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " AS 'lbl_azp_ibn_control_panel_t_state',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_control_panel_v_id_azp_ibn_client',

							tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . " AS 'lbl_azp_ibn_data_main_m_by_created',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . " AS 'lbl_azp_ibn_data_main_m_by_modified',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " AS 'lbl_azp_ibn_data_main_m_deleted',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . " AS 'lbl_azp_ibn_data_main_m_level',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . " AS 'lbl_azp_ibn_data_main_m_status',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_temp . " AS 'lbl_azp_ibn_data_main_m_temp',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . " AS 'lbl_azp_ibn_data_main_t_acount',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_bcount . " AS 'lbl_azp_ibn_data_main_t_bcount',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_base . " AS 'lbl_azp_ibn_data_main_t_coincidence_base',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_date . " AS 'lbl_azp_ibn_data_main_t_coincidence_date',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coverage . " AS 'lbl_azp_ibn_data_main_t_coverage',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_cam',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_fur',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_pro',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_veh',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_war',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_cam',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_fur',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_pro',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_veh',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_war',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel',

							tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
							tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name'
						FROM " . t_azp_ibn_property . " tc_azp_ibn_property
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_user . " tc_azp_user_created
						    ON tc_azp_ibn_property.m_by_created
								= tc_azp_user_created.id_azp_user
						INNER JOIN " . t_azp_user . " tc_azp_user_modified
						    ON tc_azp_ibn_property.m_by_modified
								= tc_azp_user_modified.id_azp_user
						INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
						    ON tc_azp_ibn_property.m_level
								= tc_azp_sys_level.t_value
						INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
						    ON tc_azp_ibn_property.m_status
								= tc_azp_sys_state.t_value
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
						    ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . "
								= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						    ON tc_azp_ibn_property." . d_azp_ibn_property_t_acount . "
								= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
						    ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . "
								= tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_relation . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						    ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
						    ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
								= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
						    ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_state . "
								= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
						-- ------------------------------------------------------------------------
						WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
							AND tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_relation . "'
							-- AND tc_azp_ibn_property." . d_azp_ibn_property_t_st_located ." = 'NO'
							AND tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable ." = 'SI'
							AND tc_azp_ibn_property." . d_azp_ibn_property_t_st_value . " > 0
							AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " = 'INMUEBLES'
						-- ------------------------------------------------------------------------ 
						GROUP BY tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " ASC,
							tc_azp_ibn_property." . d_azp_ibn_property_t_acount . " ASC
						-- ------------------------------------------------------------------------
						ORDER BY tc_azp_ibn_property." . d_azp_ibn_property_t_consecutive . " ASC
					");
					#-------------------------------------------------------------------------#
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						foreach ($var_sql as $key => $value):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_fct_sinvestigation_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_fct_sinvestigation_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_fct_sinvestigation_m_date_created => DATE_HOUR,
								d_azp_fct_sinvestigation_m_date_modified => DATE_HOUR,
								d_azp_fct_sinvestigation_m_deleted => '1',
								d_azp_fct_sinvestigation_m_description => '',
								d_azp_fct_sinvestigation_m_level => '2',
								d_azp_fct_sinvestigation_m_status => '1',
								d_azp_fct_sinvestigation_m_temp => '1',
								d_azp_fct_sinvestigation_t_item => $var_item,
								d_azp_fct_sinvestigation_t_client => $value['lbl_azp_fct_client_t_name'],
								d_azp_fct_sinvestigation_t_request_nro => $value['lbl_azp_ibn_control_panel_t_code_research'],
								d_azp_fct_sinvestigation_t_request_date => $value['lbl_azp_ibn_control_panel_t_date_arrival'],
								d_azp_fct_sinvestigation_t_request_send => $value['lbl_azp_ibn_control_panel_t_date_general'],
								d_azp_fct_sinvestigation_t_identification => $value['lbl_azp_ibn_property_t_identification'],
								d_azp_fct_sinvestigation_t_full_name => $value['lbl_azp_ibn_property_t_full_name'],
								d_azp_fct_sinvestigation_t_obligation => $value['lbl_azp_ibn_data_main_t_nro_obligation'],
								d_azp_fct_sinvestigation_t_id_client => $value['lbl_azp_ibn_data_main_t_code'],
								d_azp_fct_sinvestigation_t_municipality => $value['lbl_azp_ibn_property_t_municipality'],
								d_azp_fct_sinvestigation_t_consecutive => $value['lbl_azp_ibn_property_t_consecutive'],
								d_azp_fct_sinvestigation_t_enrollment => $value['lbl_azp_ibn_property_t_nro_registration'],
								d_azp_fct_sinvestigation_t_quality => $value['lbl_azp_ibn_property_t_st_returnable'],
								d_azp_fct_sinvestigation_t_certificate => $value['lbl_azp_fct_satisfaction_t_module'],
								d_azp_fct_sinvestigation_t_receipt => $value['lbl_azp_ibn_property_t_st_receipt'],
								d_azp_fct_sinvestigation_t_value => $value['lbl_azp_ibn_property_t_st_value'],
								d_azp_fct_sinvestigation_t_state => $value['lbl_azp_ibn_state_t_name'],
							);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->insert(t_azp_fct_sinvestigation, $var_array);
						endforeach;
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			/*return $this->db->query("
				SELECT
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_id_azp_fct_sinvestigation . " AS 'lbl_azp_fct_sinvestigation_id_azp_fct_sinvestigation',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . " AS 'lbl_azp_fct_sinvestigation_m_by_created',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_modified . " AS 'lbl_azp_fct_sinvestigation_m_by_modified',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_date_created . " AS 'lbl_azp_fct_sinvestigation_m_date_created',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_date_modified . " AS 'lbl_azp_fct_sinvestigation_m_date_modified',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_deleted . " AS 'lbl_azp_fct_sinvestigation_m_deleted',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_description . " AS 'lbl_azp_fct_sinvestigation_m_description',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_level . " AS 'lbl_azp_fct_sinvestigation_m_level',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_status . " AS 'lbl_azp_fct_sinvestigation_m_status',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_temp . " AS 'lbl_azp_fct_sinvestigation_m_temp',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_item . " AS 'lbl_azp_fct_sinvestigation_t_item',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_client . " AS 'lbl_azp_fct_sinvestigation_t_client',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_nro . " AS 'lbl_azp_fct_sinvestigation_t_request_nro',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_date . " AS 'lbl_azp_fct_sinvestigation_t_request_date',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_send . " AS 'lbl_azp_fct_sinvestigation_t_request_send',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_identification . " AS 'lbl_azp_fct_sinvestigation_t_identification',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_full_name . " AS 'lbl_azp_fct_sinvestigation_t_full_name',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_obligation . " AS 'lbl_azp_fct_sinvestigation_t_obligation',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_id_client . " AS 'lbl_azp_fct_sinvestigation_t_id_client',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_municipality . " AS 'lbl_azp_fct_sinvestigation_t_municipality',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_consecutive . " AS 'lbl_azp_fct_sinvestigation_t_consecutive',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_enrollment . " AS 'lbl_azp_fct_sinvestigation_t_enrollment',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_quality . " AS 'lbl_azp_fct_sinvestigation_t_quality',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_certificate . " AS 'lbl_azp_fct_sinvestigation_t_certificate',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_receipt . " AS 'lbl_azp_fct_sinvestigation_t_receipt',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_value . " AS 'lbl_azp_fct_sinvestigation_t_value',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_state . " AS 'lbl_azp_fct_sinvestigation_t_state'
				FROM " . t_azp_fct_sinvestigation . " tc_azp_fct_sinvestigation
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------					
				WHERE tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				ORDER BY tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_id_azp_fct_sinvestigation . " ASC
			");*/
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidated_investigation_veh(string $var_id) {
			# Defincion de valores a nuevas variables
			$var_acount = 0;
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction,
				d_azp_fct_satisfaction_t_module . " = 'VEHICULOS' AND " .
				d_azp_fct_satisfaction_v_id_azp_fct_service . " = '3' AND " .
				d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ")"
			);
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_item = $var_acount += 1;
					$var_relation = $value[d_azp_fct_satisfaction_v_id_azp_fct_relation];
					#-------------------------------------------------------------------------#
					# Seleccionar los registros de la tabla
					$var_sql = $this->db->query("
						SELECT
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
							tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_id_azp_ibn_vehicle . " AS 'lbl_azp_ibn_vehicle_id_azp_ibn_vehicle',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_by_created . " AS 'lbl_azp_ibn_vehicle_m_by_created',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_by_modified . " AS 'lbl_azp_ibn_vehicle_m_by_modified',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_date_created . " AS 'lbl_azp_ibn_vehicle_m_date_created',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_date_modified . " AS 'lbl_azp_ibn_vehicle_m_date_modified',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_deleted . " AS 'lbl_azp_ibn_vehicle_m_deleted',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_description . " AS 'lbl_azp_ibn_vehicle_m_description',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_level . " AS 'lbl_azp_ibn_vehicle_m_level',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_status . " AS 'lbl_azp_ibn_vehicle_m_status',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_temp . " AS 'lbl_azp_ibn_vehicle_m_temp',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_load_data . " AS 'lbl_azp_ibn_vehicle_t_load_data',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_validate . " AS 'lbl_azp_ibn_vehicle_t_validate',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_acount . " AS 'lbl_azp_ibn_vehicle_t_acount',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_bcount . " AS 'lbl_azp_ibn_vehicle_t_bcount',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_assessment . " AS 'lbl_azp_ibn_vehicle_t_assessment',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_causal_feasibility . " AS 'lbl_azp_ibn_vehicle_t_causal_feasibility',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_city . " AS 'lbl_azp_ibn_vehicle_t_city',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_class . " AS 'lbl_azp_ibn_vehicle_t_class',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_color . " AS 'lbl_azp_ibn_vehicle_t_color',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_comment_legal . " AS 'lbl_azp_ibn_vehicle_t_comment_legal',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_concept . " AS 'lbl_azp_ibn_vehicle_t_concept',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_consecutive . " AS 'lbl_azp_ibn_vehicle_t_consecutive',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_full_name . " AS 'lbl_azp_ibn_vehicle_t_full_name',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_identification . " AS 'lbl_azp_ibn_vehicle_t_identification',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_limitation . " AS 'lbl_azp_ibn_vehicle_t_limitation',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_line . " AS 'lbl_azp_ibn_vehicle_t_line',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_make_camera . " AS 'lbl_azp_ibn_vehicle_t_make_camera',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_mark . " AS 'lbl_azp_ibn_vehicle_t_mark',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_model . " AS 'lbl_azp_ibn_vehicle_t_model',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_observation . " AS 'lbl_azp_ibn_vehicle_t_observation',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_plaque . " AS 'lbl_azp_ibn_vehicle_t_plaque',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_policy_effective . " AS 'lbl_azp_ibn_vehicle_t_policy_effective',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_policy_final . " AS 'lbl_azp_ibn_vehicle_t_policy_final',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_policy_viability . " AS 'lbl_azp_ibn_vehicle_t_policy_viability',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_service . " AS 'lbl_azp_ibn_vehicle_t_service',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_value_assessment . " AS 'lbl_azp_ibn_vehicle_t_value_assessment',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_value_vehicle . " AS 'lbl_azp_ibn_vehicle_t_value_vehicle',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_viable . " AS 'lbl_azp_ibn_vehicle_t_viable',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_well_viable . " AS 'lbl_azp_ibn_vehicle_t_well_viable',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_returnable . " AS 'lbl_azp_ibn_vehicle_t_st_returnable',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_receipt . " AS 'lbl_azp_ibn_vehicle_t_st_receipt',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_date . " AS 'lbl_azp_ibn_vehicle_t_st_date',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_value . " AS 'lbl_azp_ibn_vehicle_t_st_value',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_vehicle_v_id_azp_ibn_control_panel',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_vehicle_v_id_azp_ibn_state',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_vehicle_v_id_azp_ibn_type_concept',

							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_created . " AS 'lbl_azp_ibn_control_panel_m_by_created',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_modified . " AS 'lbl_azp_ibn_control_panel_m_by_modified',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_created . " AS 'lbl_azp_ibn_control_panel_m_date_created',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_modified . " AS 'lbl_azp_ibn_control_panel_m_date_modified',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " AS 'lbl_azp_ibn_control_panel_m_deleted',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_description . " AS 'lbl_azp_ibn_control_panel_m_description',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_level . " AS 'lbl_azp_ibn_control_panel_m_level',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_status . " AS 'lbl_azp_ibn_control_panel_m_status',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_temp . " AS 'lbl_azp_ibn_control_panel_m_temp',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_s_date . " AS 'lbl_azp_ibn_control_panel_s_date',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_camera . " AS 'lbl_azp_ibn_control_panel_t_count_camera',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_furniture . " AS 'lbl_azp_ibn_control_panel_t_count_furniture',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_property . " AS 'lbl_azp_ibn_control_panel_t_count_property',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_vehicle . " AS 'lbl_azp_ibn_control_panel_t_count_vehicle',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_warranty . " AS 'lbl_azp_ibn_control_panel_t_count_warranty',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_arrival . " AS 'lbl_azp_ibn_control_panel_t_date_arrival',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_final . " AS 'lbl_azp_ibn_control_panel_t_date_final',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'lbl_azp_ibn_control_panel_t_date_general',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_load . " AS 'lbl_azp_ibn_control_panel_t_date_load',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_reply . " AS 'lbl_azp_ibn_control_panel_t_date_reply',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_document . " AS 'lbl_azp_ibn_control_panel_t_document',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_encode . " AS 'lbl_azp_ibn_control_panel_t_encode',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_entity . " AS 'lbl_azp_ibn_control_panel_t_entity',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_finished . " AS 'lbl_azp_ibn_control_panel_t_finished',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_camera . " AS 'lbl_azp_ibn_control_panel_t_mod_camera',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_furniture . " AS 'lbl_azp_ibn_control_panel_t_mod_furniture',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_property . " AS 'lbl_azp_ibn_control_panel_t_mod_property',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_vehicle . " AS 'lbl_azp_ibn_control_panel_t_mod_vehicle',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_warranty . " AS 'lbl_azp_ibn_control_panel_t_mod_warranty',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_register . " AS 'lbl_azp_ibn_control_panel_t_register',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_route . " AS 'lbl_azp_ibn_control_panel_t_route',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " AS 'lbl_azp_ibn_control_panel_t_state',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_control_panel_v_id_azp_ibn_client',

							tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . " AS 'lbl_azp_ibn_data_main_m_by_created',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . " AS 'lbl_azp_ibn_data_main_m_by_modified',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " AS 'lbl_azp_ibn_data_main_m_deleted',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . " AS 'lbl_azp_ibn_data_main_m_level',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . " AS 'lbl_azp_ibn_data_main_m_status',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_temp . " AS 'lbl_azp_ibn_data_main_m_temp',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . " AS 'lbl_azp_ibn_data_main_t_acount',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_bcount . " AS 'lbl_azp_ibn_data_main_t_bcount',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_base . " AS 'lbl_azp_ibn_data_main_t_coincidence_base',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_date . " AS 'lbl_azp_ibn_data_main_t_coincidence_date',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coverage . " AS 'lbl_azp_ibn_data_main_t_coverage',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_cam',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_fur',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_pro',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_veh',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_war',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_cam',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_fur',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_pro',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_veh',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_war',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel',

							tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
							tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name'
						FROM " . t_azp_ibn_vehicle . " tc_azp_ibn_vehicle
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_user . " tc_azp_user_created
						    ON tc_azp_ibn_vehicle.m_by_created
								= tc_azp_user_created.id_azp_user
						INNER JOIN " . t_azp_user . " tc_azp_user_modified
						    ON tc_azp_ibn_vehicle.m_by_modified
								= tc_azp_user_modified.id_azp_user
						INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
						    ON tc_azp_ibn_vehicle.m_level
								= tc_azp_sys_level.t_value
						INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
						    ON tc_azp_ibn_vehicle.m_status
								= tc_azp_sys_state.t_value
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
						    ON tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . "
								= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						    ON tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_acount . "
								= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
						    ON tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . "
								= tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_relation . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						    ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
						    ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
								= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
						    ON tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_state . "
								= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
						-- ------------------------------------------------------------------------
						WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
							AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . " = '" . $var_relation . "'
							-- AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_located ." = 'NO'
							AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_returnable ." = 'SI'
							AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_value . " > 0
							AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " = 'VEHICULOS'
						-- ------------------------------------------------------------------------ 
						GROUP BY tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . " ASC,
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_acount . " ASC
						-- ------------------------------------------------------------------------
						ORDER BY tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_consecutive . " ASC
					");
					#-------------------------------------------------------------------------#
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						foreach ($var_sql as $key => $value):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_fct_sinvestigation_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_fct_sinvestigation_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_fct_sinvestigation_m_date_created => DATE_HOUR,
								d_azp_fct_sinvestigation_m_date_modified => DATE_HOUR,
								d_azp_fct_sinvestigation_m_deleted => '1',
								d_azp_fct_sinvestigation_m_description => '',
								d_azp_fct_sinvestigation_m_level => '2',
								d_azp_fct_sinvestigation_m_status => '1',
								d_azp_fct_sinvestigation_m_temp => '1',
								d_azp_fct_sinvestigation_t_item => $var_item,
								d_azp_fct_sinvestigation_t_client => $value['lbl_azp_fct_client_t_name'],
								d_azp_fct_sinvestigation_t_request_nro => $value['lbl_azp_ibn_control_panel_t_code_research'],
								d_azp_fct_sinvestigation_t_request_date => $value['lbl_azp_ibn_control_panel_t_date_arrival'],
								d_azp_fct_sinvestigation_t_request_send => $value['lbl_azp_ibn_control_panel_t_date_general'],
								d_azp_fct_sinvestigation_t_identification => $value['lbl_azp_ibn_vehicle_t_identification'],
								d_azp_fct_sinvestigation_t_full_name => $value['lbl_azp_ibn_vehicle_t_full_name'],
								d_azp_fct_sinvestigation_t_obligation => $value['lbl_azp_ibn_data_main_t_nro_obligation'],
								d_azp_fct_sinvestigation_t_id_client => $value['lbl_azp_ibn_data_main_t_code'],
								d_azp_fct_sinvestigation_t_municipality => $value['lbl_azp_ibn_vehicle_t_city'],
								d_azp_fct_sinvestigation_t_consecutive => $value['lbl_azp_ibn_vehicle_t_consecutive'],
								d_azp_fct_sinvestigation_t_enrollment => $value['lbl_azp_ibn_vehicle_t_plaque'],
								d_azp_fct_sinvestigation_t_quality => $value['lbl_azp_ibn_vehicle_t_st_returnable'],
								d_azp_fct_sinvestigation_t_certificate => $value['lbl_azp_fct_satisfaction_t_module'],
								d_azp_fct_sinvestigation_t_receipt => $value['lbl_azp_ibn_vehicle_t_st_receipt'],
								d_azp_fct_sinvestigation_t_value => $value['lbl_azp_ibn_vehicle_t_st_value'],
								d_azp_fct_sinvestigation_t_state => $value['lbl_azp_ibn_state_t_name'],
							);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->insert(t_azp_fct_sinvestigation, $var_array);
						endforeach;
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			/*return $this->db->query("
				SELECT
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_id_azp_fct_sinvestigation . " AS 'lbl_azp_fct_sinvestigation_id_azp_fct_sinvestigation',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . " AS 'lbl_azp_fct_sinvestigation_m_by_created',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_modified . " AS 'lbl_azp_fct_sinvestigation_m_by_modified',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_date_created . " AS 'lbl_azp_fct_sinvestigation_m_date_created',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_date_modified . " AS 'lbl_azp_fct_sinvestigation_m_date_modified',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_deleted . " AS 'lbl_azp_fct_sinvestigation_m_deleted',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_description . " AS 'lbl_azp_fct_sinvestigation_m_description',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_level . " AS 'lbl_azp_fct_sinvestigation_m_level',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_status . " AS 'lbl_azp_fct_sinvestigation_m_status',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_temp . " AS 'lbl_azp_fct_sinvestigation_m_temp',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_item . " AS 'lbl_azp_fct_sinvestigation_t_item',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_client . " AS 'lbl_azp_fct_sinvestigation_t_client',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_nro . " AS 'lbl_azp_fct_sinvestigation_t_request_nro',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_date . " AS 'lbl_azp_fct_sinvestigation_t_request_date',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_send . " AS 'lbl_azp_fct_sinvestigation_t_request_send',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_identification . " AS 'lbl_azp_fct_sinvestigation_t_identification',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_full_name . " AS 'lbl_azp_fct_sinvestigation_t_full_name',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_obligation . " AS 'lbl_azp_fct_sinvestigation_t_obligation',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_id_client . " AS 'lbl_azp_fct_sinvestigation_t_id_client',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_municipality . " AS 'lbl_azp_fct_sinvestigation_t_municipality',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_consecutive . " AS 'lbl_azp_fct_sinvestigation_t_consecutive',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_enrollment . " AS 'lbl_azp_fct_sinvestigation_t_enrollment',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_quality . " AS 'lbl_azp_fct_sinvestigation_t_quality',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_certificate . " AS 'lbl_azp_fct_sinvestigation_t_certificate',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_receipt . " AS 'lbl_azp_fct_sinvestigation_t_receipt',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_value . " AS 'lbl_azp_fct_sinvestigation_t_value',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_state . " AS 'lbl_azp_fct_sinvestigation_t_state'
				FROM " . t_azp_fct_sinvestigation . " tc_azp_fct_sinvestigation
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------					
				WHERE tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				ORDER BY tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_id_azp_fct_sinvestigation . " ASC
			");*/
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidated_investigation_bas() {
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_id_azp_fct_sinvestigation . " AS 'lbl_azp_fct_sinvestigation_id_azp_fct_sinvestigation',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . " AS 'lbl_azp_fct_sinvestigation_m_by_created',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_modified . " AS 'lbl_azp_fct_sinvestigation_m_by_modified',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_date_created . " AS 'lbl_azp_fct_sinvestigation_m_date_created',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_date_modified . " AS 'lbl_azp_fct_sinvestigation_m_date_modified',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_deleted . " AS 'lbl_azp_fct_sinvestigation_m_deleted',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_description . " AS 'lbl_azp_fct_sinvestigation_m_description',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_level . " AS 'lbl_azp_fct_sinvestigation_m_level',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_status . " AS 'lbl_azp_fct_sinvestigation_m_status',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_temp . " AS 'lbl_azp_fct_sinvestigation_m_temp',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_item . " AS 'lbl_azp_fct_sinvestigation_t_item',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_client . " AS 'lbl_azp_fct_sinvestigation_t_client',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_nro . " AS 'lbl_azp_fct_sinvestigation_t_request_nro',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_date . " AS 'lbl_azp_fct_sinvestigation_t_request_date',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_send . " AS 'lbl_azp_fct_sinvestigation_t_request_send',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_identification . " AS 'lbl_azp_fct_sinvestigation_t_identification',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_full_name . " AS 'lbl_azp_fct_sinvestigation_t_full_name',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_obligation . " AS 'lbl_azp_fct_sinvestigation_t_obligation',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_id_client . " AS 'lbl_azp_fct_sinvestigation_t_id_client',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_municipality . " AS 'lbl_azp_fct_sinvestigation_t_municipality',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_consecutive . " AS 'lbl_azp_fct_sinvestigation_t_consecutive',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_enrollment . " AS 'lbl_azp_fct_sinvestigation_t_enrollment',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_quality . " AS 'lbl_azp_fct_sinvestigation_t_quality',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_certificate . " AS 'lbl_azp_fct_sinvestigation_t_certificate',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_receipt . " AS 'lbl_azp_fct_sinvestigation_t_receipt',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_value . " AS 'lbl_azp_fct_sinvestigation_t_value',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_state . " AS 'lbl_azp_fct_sinvestigation_t_state'
				FROM " . t_azp_fct_sinvestigation . " tc_azp_fct_sinvestigation
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------					
				WHERE tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				ORDER BY tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_id_azp_fct_sinvestigation . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update_certificate() {
			# Defincion de valores a nuevas variables
			$var_certificate = ''; $var_date_request = ''; $var_date_send = ''; $var_request = ''; $var_tariff = '';
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_prefacture, d_azp_fct_prefacture_id_azp_fct_prefacture . " = '" . $this->id . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_certificate = $value[d_azp_fct_prefacture_t_certificate];
					$var_date_request = $value[d_azp_fct_prefacture_t_date_request];
					$var_date_send = $value[d_azp_fct_prefacture_t_date_send];
					$var_request = $value[d_azp_fct_prefacture_t_request];
					$var_tariff = $value[d_azp_fct_prefacture_v_id_azp_fct_tariff];
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Defincion de valores a nuevas variables
			$var_client = ''; $var_coverage = ''; $var_investigation = ''; $var_result = ''; $var_scale = ''; $var_service = ''; $var_sub_coverage = ''; $var_sub_service = '';
			$var_ct_3 = ''; $var_ct_4 = ''; $var_ct_5 = ''; $var_ct_6 = ''; $var_ct_7 = ''; $var_ct_8 = '';
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_tariff, d_azp_fct_tariff_id_azp_fct_tariff . " = '" . $var_tariff . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_client = $value[d_azp_fct_tariff_v_id_azp_fct_client];
					$var_coverage = $value[d_azp_fct_tariff_v_id_azp_fct_coverage];
					$var_investigation = $value[d_azp_fct_tariff_v_id_azp_fct_investigation];
					$var_result = $value[d_azp_fct_tariff_v_id_azp_fct_result];
					$var_scale = $value[d_azp_fct_tariff_v_id_azp_fct_scale];
					$var_service = $value[d_azp_fct_tariff_v_id_azp_fct_service];
					$var_sub_coverage = $value[d_azp_fct_tariff_v_id_azp_fct_sub_coverage];
					$var_sub_service = $value[d_azp_fct_tariff_v_id_azp_fct_sub_service];
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_coverage, d_azp_fct_coverage_id_azp_fct_coverage . " = '" . $var_coverage . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_id_coverage = $value[d_azp_fct_coverage_t_name]; endforeach; } else { $var_id_coverage = ''; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_investigation, d_azp_fct_investigation_id_azp_fct_investigation . " = '" . $var_investigation . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_id_investigation = $value[d_azp_fct_investigation_t_name]; endforeach; } else { $var_id_investigation = ''; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_result, d_azp_fct_result_id_azp_fct_result . " = '" . $var_result . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_id_result = $value[d_azp_fct_result_t_name]; endforeach; } else { $var_id_result = ''; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_scale, d_azp_fct_scale_id_azp_fct_scale . " = '" . $var_scale . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_id_scale = $value[d_azp_fct_scale_t_name]; endforeach; } else { $var_id_scale = ''; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_service, d_azp_fct_service_id_azp_fct_service . " = '" . $var_service . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_id_service = $value[d_azp_fct_service_t_name]; endforeach; } else { $var_id_service = ''; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_sub_coverage, d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '" . $var_sub_coverage . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_id_sub_coverage = $value[d_azp_fct_sub_coverage_t_name]; endforeach; } else { $var_id_sub_coverage = ''; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_sub_service, d_azp_fct_sub_service_id_azp_fct_sub_service . " = '" . $var_sub_service . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_id_sub_service = $value[d_azp_fct_sub_service_t_name]; endforeach; } else { $var_id_sub_service = ''; }
			#-------------------------------------------------------------------------#
			if ($var_id_sub_coverage == 'NO APLICA') {
				$var_qy_sub_coverage = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " = '" . $var_id_coverage . "'";
			} else if ($var_id_sub_coverage == 'TODO') {
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_city'
					FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
					INNER JOIN " . t_azp_fct_sub_coverage . " tc_azp_fct_sub_coverage
						ON tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . "
							= tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . "
					WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " = '2'
						AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . " = '2'
						AND tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '3'
						AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $var_client . "'
				");
				# Recorrer los datos de la consulta de la tabla y encodificarlos
				if (true == $var_sql) { foreach ($var_sql as $key => $value) { $var_ct_3 = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " != '" . $value['lbl_city'] . "'"; } } else { $var_ct_3 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_city'
					FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
					INNER JOIN " . t_azp_fct_sub_coverage . " tc_azp_fct_sub_coverage
						ON tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . "
							= tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . "
					WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " = '2'
						AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . " = '2'
						AND tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '4'
						AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $var_client . "'
				");
				# Recorrer los datos de la consulta de la tabla y encodificarlos
				if (true == $var_sql) { foreach ($var_sql as $key => $value) { $var_ct_4 = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " != '" . $value['lbl_city'] . "'"; } } else { $var_ct_4 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_city'
					FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
					INNER JOIN " . t_azp_fct_sub_coverage . " tc_azp_fct_sub_coverage
						ON tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . "
							= tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . "
					WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " = '2'
						AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . " = '2'
						AND tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '5'
						AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $var_client . "'
				");
				# Recorrer los datos de la consulta de la tabla y encodificarlos
				if (true == $var_sql) { foreach ($var_sql as $key => $value) { $var_ct_5 = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " != '" . $value['lbl_city'] . "'"; } } else { $var_ct_5 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_city'
					FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
					INNER JOIN " . t_azp_fct_sub_coverage . " tc_azp_fct_sub_coverage
						ON tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . "
							= tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . "
					WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " = '2'
						AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . " = '2'
						AND tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '6'
						AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $var_client . "'
				");
				# Recorrer los datos de la consulta de la tabla y encodificarlos
				if (true == $var_sql) { foreach ($var_sql as $key => $value) { $var_ct_6 = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " != '" . $value['lbl_city'] . "'"; } } else { $var_ct_6 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_city'
					FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
					INNER JOIN " . t_azp_fct_sub_coverage . " tc_azp_fct_sub_coverage
						ON tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . "
							= tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . "
					WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " = '2'
						AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . " = '2'
						AND tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '7'
						AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $var_client . "'
				");
				# Recorrer los datos de la consulta de la tabla y encodificarlos
				if (true == $var_sql) { foreach ($var_sql as $key => $value) { $var_ct_7 = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " != '" . $value['lbl_city'] . "'"; } } else { $var_ct_7 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_city'
					FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
					INNER JOIN " . t_azp_fct_sub_coverage . " tc_azp_fct_sub_coverage
						ON tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . "
							= tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . "
					WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " = '2'
						AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . " = '2'
						AND tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '8'
						AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $var_client . "'
				");
				# Recorrer los datos de la consulta de la tabla y encodificarlos
				if (true == $var_sql) { foreach ($var_sql as $key => $value) { $var_ct_8 = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " != '" . $value['lbl_city'] . "'"; } } else { $var_ct_8 = ''; }
				#-------------------------------------------------------------------------#
				$var_qy_sub_coverage = "AND (tc_azp_crt_city." . d_azp_crt_city_t_name . " != 'BOGOTA' " . $var_ct_3 . " " . $var_ct_4 . " " . $var_ct_5 . " " . $var_ct_6 . " " . $var_ct_7 . " " . $var_ct_8 . ")";
			} else if ($var_id_sub_coverage != 'NO APLICA' || $var_id_sub_coverage != 'TODO') {
				$var_qy_sub_coverage = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " = '" . $var_id_sub_coverage . "'";
			}
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT 
					tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_data_id_azp_crt_request_data',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_date . " AS 'lbl_azp_crt_request_data_s_date',
					tc_azp_crt_request_data." . d_azp_crt_request_data_s_plaque . " AS 'lbl_azp_crt_request_data_s_plaque',
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
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_city',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_client',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_expiration',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_observation_type',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_phase',
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_request_type',

					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
					tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
					tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
					tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name',

					tc_azp_fct_tariff." . d_azp_fct_tariff_t_value . " AS 'lbl_azp_fct_tariff_t_value',
					tc_azp_fct_tariff." . d_azp_fct_tariff_t_value . " * tc_azp_fct_tariff." . d_azp_fct_tariff_t_iva . " AS 'lbl_azp_fct_tariff_t_iva',
					tc_azp_fct_tariff." . d_azp_fct_tariff_t_value . " + tc_azp_fct_tariff." . d_azp_fct_tariff_t_value . " * tc_azp_fct_tariff." . d_azp_fct_tariff_t_iva . " AS 'lbl_azp_fct_tariff_t_total'
				FROM " . t_azp_fct_prefacture . " tc_azp_fct_prefacture
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_fct_tariff . " tc_azp_fct_tariff
					ON tc_azp_fct_prefacture." . d_azp_fct_prefacture_v_id_azp_fct_tariff . "
						= tc_azp_fct_tariff." . d_azp_fct_tariff_id_azp_fct_tariff . "
				-- ------------------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
				    ON tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . "
					= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						= tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
						= tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_request_data . " tc_azp_crt_request_data
					ON tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
						= tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_city . " tc_azp_crt_city
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_expiration . " tc_azp_crt_expiration
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
						= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_observation_type . " tc_azp_crt_observation_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
						= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_phase . " tc_azp_crt_phase
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
				-- ------------------------------------------------------------------------ 
				INNER JOIN " . t_azp_crt_request_type . " tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				-- ------------------------------------------------------------------------ 
				WHERE tc_azp_fct_prefacture." . d_azp_fct_prefacture_v_id_azp_fct_service . " = '1' " . $var_qy_sub_coverage . "
					AND tc_azp_fct_prefacture." . d_azp_fct_prefacture_t_request . " = '" . $var_request . "'
					AND (tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " >= '" . $var_date_send . "'
						AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " <= '" . $var_date_send . "')
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " = '" . $var_date_request . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request . "'
					AND tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " = '" . $var_certificate . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . " = '4'
					AND tc_azp_fct_tariff." . d_azp_fct_tariff_id_azp_fct_tariff . " = '" . $var_tariff . "'
				-- ------------------------------------------------------------------------ 
				/*GROUP BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " ASC*/
				-- ------------------------------------------------------------------------ 
				ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_service() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_service,
				d_azp_fct_service_id_azp_fct_service . " = '" . $this->id . "' AND " .
				d_azp_fct_service_m_deleted . " = '1' AND " .
				d_azp_fct_service_m_status . " = '1' ORDER BY " .
				d_azp_fct_service_id_azp_fct_service . " ASC"
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_sub_satisfaction() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_sub_satisfaction,
				d_azp_fct_sub_satisfaction_m_deleted . " = '1' AND " .
				d_azp_fct_sub_satisfaction_m_status . " = '1' AND " .
				d_azp_fct_sub_satisfaction_v_id_azp_fct_service . " = '" . $this->id . "' ORDER BY " .
				d_azp_fct_sub_satisfaction_id_azp_fct_sub_satisfaction . " ASC"
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_sub_service() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_sub_service,
				d_azp_fct_sub_service_m_deleted . " = '1' AND " .
				d_azp_fct_sub_service_m_status . " = '1' AND " .
				d_azp_fct_sub_service_v_id_azp_fct_service . " = '" . $this->id . "' ORDER BY " .
				d_azp_fct_sub_service_id_azp_fct_sub_service . " ASC"
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_crt_request_data() {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->select("*", t_azp_fct_sub_satisfaction, d_azp_fct_sub_satisfaction_id_azp_fct_sub_satisfaction . " = '" . $this->id . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_satisfaction = $value[d_azp_fct_sub_satisfaction_t_name]; endforeach; } else { $var_satisfaction = ''; }
			if ($var_satisfaction == 'TODO') { $var_request_type = ''; } else { $var_request_type = "WHERE tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " = '" . $var_satisfaction . "'"; }
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " AS 'lbl_azp_crt_request_data_t_provider_name'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				INNER JOIN " . t_azp_crt_request_type . " tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				" . $var_request_type . "
				GROUP BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . "
			");

			# Seleccionar los registros de la tabla
			/*return $this->db->query("
				SELECT
					tc_azp_crt_request_type
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
				INNER JOIN " . t_azp_crt_request_type . " tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
				WHERE tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " = '" . $var_satisfaction . "'
			");*/
		}





		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_fct_prefacture_drop_delete() {
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("DELETE FROM " . t_azp_fct_prefacture . " WHERE " . d_azp_fct_prefacture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
			//$var_sql = $this->db->query("ALTER TABLE " . t_azp_fct_prefacture . " AUTO_INCREMENT = 1;");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_fct_prefacture_certificate(string $var_since, string $var_until, string $var_subservice) {
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("DELETE FROM " . t_azp_fct_honorary . " WHERE " . d_azp_fct_honorary_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
			//$var_sql = $this->db->query("ALTER TABLE " . t_azp_fct_honorary . " AUTO_INCREMENT = 1;");
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			//$var_sql = $this->db->select('*', t_azp_fct_sub_service, d_azp_fct_sub_service_id_azp_fct_sub_service . " = '" . $var_subservice . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			//if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_subrservice = $value[d_azp_fct_sub_service_t_name]; endforeach; } else { $var_subrservice = ''; }
			# Verificar si el resultado de la sql es verdadero o falso
			//if ($var_subrservice == 'TODO') { $var_query_sub = ''; } else { $var_query_sub = "AND tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " = '" . $var_subrservice . "'"; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_sub_satisfaction, d_azp_fct_sub_satisfaction_id_azp_fct_sub_satisfaction . " = '" . $var_subservice . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_subrsatisfaction = $value[d_azp_fct_sub_satisfaction_t_name]; endforeach; } else { $var_subrsatisfaction = ''; }
			# Verificar si el resultado de la sql es verdadero o falso
			if ($var_subrsatisfaction == 'TODO') { $var_query_sub = ''; } else { $var_query_sub = "AND tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " = '" . $var_subrsatisfaction . "'"; }
			#-------------------------------------------------------------------------#
			$var_search = array(' ', '$', ',', '.00'); $var_replace = array('', '', '', '');
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'Cliente_Id',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'Cliente_Nombre',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'Ciudad',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " AS 'Envio',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " AS 'Fecha',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'Solicitud',
					tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . " AS 'Certificado_Id',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'Certificado_Nombre',
					tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'Fase',
					COUNT(tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . ") AS 'Cantidad'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data

				INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "

				INNER JOIN " . t_azp_crt_city . " tc_azp_crt_city
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "

				INNER JOIN " . t_azp_crt_request_type . " tc_azp_crt_request_type
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
						= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "

				INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
					ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "

				INNER JOIN " . t_azp_crt_phase . " tc_azp_crt_phase
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
						= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
						
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . " = 4 " . $var_query_sub . "
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " >= 2
					AND (tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " >= '" . $var_since . "'
						AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " <= '" . $var_until . "')
				GROUP BY tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . " ASC;
			");
			#-------------------------------------------------------------------------#
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_fct_honorary_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_fct_honorary_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_fct_honorary_m_date_created => DATE_HOUR,
						d_azp_fct_honorary_m_date_modified => DATE_HOUR,
						d_azp_fct_honorary_m_deleted => '1',
						d_azp_fct_honorary_m_description => '',
						d_azp_fct_honorary_m_level => '2',
						d_azp_fct_honorary_m_status => '1',
						d_azp_fct_honorary_m_temp => '2',
						d_azp_fct_honorary_t_certificate => $value['Certificado_Nombre'],
						d_azp_fct_honorary_t_city => $value['Ciudad'],
						d_azp_fct_honorary_t_coverage => '',
						d_azp_fct_honorary_t_date_request => $value['Fecha'],
						d_azp_fct_honorary_t_date_send => $value['Envio'],
						d_azp_fct_honorary_t_honorary => '0',
						d_azp_fct_honorary_t_number => '0',
						d_azp_fct_honorary_t_purchase => $value['Cantidad'],
						d_azp_fct_honorary_t_repayment => '0',
						d_azp_fct_honorary_t_request => $value['Solicitud'],
						d_azp_fct_honorary_t_state => 'Activo',
						d_azp_fct_honorary_v_id_azp_fct_client => $value['Cliente_Id'],
						d_azp_fct_honorary_v_id_azp_fct_service => '1',
						d_azp_fct_honorary_v_id_azp_fct_tariff => '0',
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_fct_honorary, $var_array);
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_honorary, d_azp_fct_honorary_m_temp . " = '2'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_honorary = $value[d_azp_fct_honorary_id_azp_fct_honorary];
					$var_city = $value[d_azp_fct_honorary_t_city];
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select("*", t_azp_fct_sub_coverage, d_azp_fct_sub_coverage_t_name . " = '" . $var_city . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_coverage = $value[d_azp_fct_sub_coverage_t_name];
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_fct_honorary_t_coverage => $var_coverage,);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->update(t_azp_fct_honorary, $var_array, d_azp_fct_honorary_m_temp . " = '2' AND " . d_azp_fct_honorary_id_azp_fct_honorary . " = '" . $var_honorary . "'");
						endforeach;
					} else {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_fct_honorary_t_coverage => 'TODO',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_fct_honorary, $var_array, d_azp_fct_honorary_m_temp . " = '2' AND " . d_azp_fct_honorary_id_azp_fct_honorary . " = '" . $var_honorary . "'");
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_honorary." . d_azp_fct_honorary_id_azp_fct_honorary . " AS 'lbl_azp_fct_honorary_id_azp_fct_honorary',
					tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_azp_fct_sub_coverage_t_name'
				FROM " . t_azp_fct_honorary . " tc_azp_fct_honorary
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_fct_honorary." . d_azp_fct_honorary_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_tariff . " tc_azp_fct_tariff
					ON tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						= tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_service . " tc_azp_fct_service
					ON tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . "
						= tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sub_coverage . " tc_azp_fct_sub_coverage
					ON tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . "
						= tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_honorary." . d_azp_fct_honorary_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_honorary." . d_azp_fct_honorary_m_temp . " = '2'
					AND tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . " = '1'
				-- ---------------------------------------------------------------
				GROUP BY tc_azp_fct_honorary." . d_azp_fct_honorary_id_azp_fct_honorary . " ASC,
					tc_azp_fct_honorary." . d_azp_fct_honorary_v_id_azp_fct_client . " ASC,
					tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . "
			");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_honorary = $value['lbl_azp_fct_honorary_id_azp_fct_honorary'];
					$var_subcoverage = $value['lbl_azp_fct_sub_coverage_t_name'];
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_fct_honorary_t_number => '1',);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->update(t_azp_fct_honorary, $var_array, d_azp_fct_honorary_id_azp_fct_honorary . " = '" . $var_honorary . "' AND " . d_azp_fct_honorary_t_coverage . " = '" . $var_subcoverage . "'");
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_honorary, d_azp_fct_honorary_m_temp . " = '2' AND " . d_azp_fct_honorary_t_coverage . " = 'CALI' AND " . d_azp_fct_honorary_t_number . " = '1'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_ct_cali = ''; endforeach; } else { $var_ct_cali = d_azp_fct_honorary_t_coverage . " = 'CALI' OR "; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_honorary, d_azp_fct_honorary_m_temp . " = '2' AND " . d_azp_fct_honorary_t_coverage . " = 'PALMIRA' AND " . d_azp_fct_honorary_t_number . " = '1'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_ct_palmira = ''; endforeach; } else { $var_ct_palmira = d_azp_fct_honorary_t_coverage . " = 'PALMIRA' OR "; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_honorary, d_azp_fct_honorary_m_temp . " = '2' AND " . d_azp_fct_honorary_t_coverage . " = 'MEDELLIN' AND " . d_azp_fct_honorary_t_number . " = '1'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_ct_medellin = ''; endforeach; } else { $var_ct_medellin = d_azp_fct_honorary_t_coverage . " = 'MEDELLIN' OR "; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_honorary, d_azp_fct_honorary_m_temp . " = '2' AND " . d_azp_fct_honorary_t_coverage . " = 'ENVIGADO' AND " . d_azp_fct_honorary_t_number . " = '1'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_ct_envigado = ''; endforeach; } else { $var_ct_envigado = d_azp_fct_honorary_t_coverage . " = 'ENVIGADO' OR "; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_honorary, d_azp_fct_honorary_m_temp . " = '2' AND " . d_azp_fct_honorary_t_coverage . " = 'SOACHA' AND " . d_azp_fct_honorary_t_number . " = '1'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_ct_soacha = ''; endforeach; } else { $var_ct_soacha = d_azp_fct_honorary_t_coverage . " = 'SOACHA' OR "; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_honorary, d_azp_fct_honorary_m_temp . " = '2' AND " . d_azp_fct_honorary_t_coverage . " = 'BARRANQUILLA' AND " . d_azp_fct_honorary_t_number . " = '1'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_ct_barranquilla = ''; endforeach; } else { $var_ct_barranquilla = d_azp_fct_honorary_t_coverage . " = 'BARRANQUILLA' OR "; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_honorary,
				d_azp_fct_honorary_m_temp . " = '2' AND (" .
					$var_ct_cali . $var_ct_palmira . $var_ct_medellin .
					$var_ct_envigado . $var_ct_soacha . $var_ct_barranquilla .
					d_azp_fct_honorary_t_coverage . " = '_'
				)
			");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_fct_honorary_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_fct_honorary_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_fct_honorary_m_date_created => DATE_HOUR,
						d_azp_fct_honorary_m_date_modified => DATE_HOUR,
						d_azp_fct_honorary_m_deleted => '1',
						d_azp_fct_honorary_m_description => '',
						d_azp_fct_honorary_m_level => '2',
						d_azp_fct_honorary_m_status => '1',
						d_azp_fct_honorary_m_temp => '1',
						d_azp_fct_honorary_t_certificate => $value[d_azp_fct_honorary_t_certificate],
						d_azp_fct_honorary_t_city => 'NACIONAL',
						d_azp_fct_honorary_t_coverage => 'TODO',
						d_azp_fct_honorary_t_date_request => $value[d_azp_fct_honorary_t_date_request],
						d_azp_fct_honorary_t_date_send => $value[d_azp_fct_honorary_t_date_send],
						d_azp_fct_honorary_t_honorary => $value[d_azp_fct_honorary_t_honorary],
						d_azp_fct_honorary_t_purchase => $value[d_azp_fct_honorary_t_purchase],
						d_azp_fct_honorary_t_repayment => $value[d_azp_fct_honorary_t_repayment],
						d_azp_fct_honorary_t_request => $value[d_azp_fct_honorary_t_request],
						d_azp_fct_honorary_t_state => $value[d_azp_fct_honorary_t_state],
						d_azp_fct_honorary_v_id_azp_fct_client => $value[d_azp_fct_honorary_v_id_azp_fct_client],
						d_azp_fct_honorary_v_id_azp_fct_service => $value[d_azp_fct_honorary_v_id_azp_fct_service],
						d_azp_fct_honorary_v_id_azp_fct_tariff => $value[d_azp_fct_honorary_v_id_azp_fct_tariff],
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_fct_honorary, $var_array);
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("
				SELECT
					" . d_azp_fct_honorary_t_certificate . ",
					" . d_azp_fct_honorary_t_city . ",
					" . d_azp_fct_honorary_t_coverage . ",
					" . d_azp_fct_honorary_t_date_request . ",
					" . d_azp_fct_honorary_t_date_send . ",
					" . d_azp_fct_honorary_t_honorary . ",
					SUM(" . d_azp_fct_honorary_t_purchase . ") AS 't_purchase',
					" . d_azp_fct_honorary_t_repayment . ",
					" . d_azp_fct_honorary_t_request . ",
					" . d_azp_fct_honorary_t_state . ",
					" . d_azp_fct_honorary_v_id_azp_fct_client . ",
					" . d_azp_fct_honorary_v_id_azp_fct_service . ",
					" . d_azp_fct_honorary_v_id_azp_fct_tariff . "
				FROM " . t_azp_fct_honorary . "
				WHERE " . d_azp_fct_honorary_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				GROUP BY " . d_azp_fct_honorary_v_id_azp_fct_client . " ASC,
					" . d_azp_fct_honorary_t_certificate . " ASC,
					" . d_azp_fct_honorary_t_coverage . " ASC,
					" . d_azp_fct_honorary_t_request . " ASC,
					" . d_azp_fct_honorary_t_date_request . " ASC
				ORDER BY " . d_azp_fct_honorary_v_id_azp_fct_client . " ASC,
					" . d_azp_fct_honorary_v_id_azp_fct_service . " ASC,
					" . d_azp_fct_honorary_t_request . " ASC,
					" . d_azp_fct_honorary_t_date_request . " ASC
			");
			#-------------------------------------------------------------------------#
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_fct_prefacture_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_fct_prefacture_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_fct_prefacture_m_date_created => DATE_HOUR,
						d_azp_fct_prefacture_m_date_modified => DATE_HOUR,
						d_azp_fct_prefacture_m_deleted => '1',
						d_azp_fct_prefacture_m_description => '',
						d_azp_fct_prefacture_m_level => '2',
						d_azp_fct_prefacture_m_status => '1',
						d_azp_fct_prefacture_m_temp => '2',
						d_azp_fct_prefacture_t_certificate => $value[d_azp_fct_honorary_t_certificate],
						d_azp_fct_prefacture_t_city => $value[d_azp_fct_honorary_t_city],
						d_azp_fct_prefacture_t_coverage => $value[d_azp_fct_honorary_t_coverage],
						d_azp_fct_prefacture_t_date_request => $value[d_azp_fct_honorary_t_date_request],
						d_azp_fct_prefacture_t_date_send => $value[d_azp_fct_honorary_t_date_send],
						d_azp_fct_prefacture_t_honorary => $value[d_azp_fct_honorary_t_honorary],
						d_azp_fct_prefacture_t_purchase => $value[d_azp_fct_honorary_t_purchase],
						d_azp_fct_prefacture_t_repayment => $value[d_azp_fct_honorary_t_repayment],
						d_azp_fct_prefacture_t_request => $value[d_azp_fct_honorary_t_request],
						d_azp_fct_prefacture_t_state => $value[d_azp_fct_honorary_t_state],
						d_azp_fct_prefacture_v_id_azp_fct_client => $value[d_azp_fct_honorary_v_id_azp_fct_client],
						d_azp_fct_prefacture_v_id_azp_fct_service => $value[d_azp_fct_honorary_v_id_azp_fct_service],
						d_azp_fct_prefacture_v_id_azp_fct_tariff => $value[d_azp_fct_honorary_v_id_azp_fct_tariff],
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_fct_prefacture, $var_array);
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_prefacture, d_azp_fct_prefacture_m_temp . " = '2'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_prefacture = $value[d_azp_fct_prefacture_id_azp_fct_prefacture];
					$var_city = $value[d_azp_fct_prefacture_t_city];
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select("*", t_azp_fct_sub_coverage, d_azp_fct_sub_coverage_t_name . " = '" . $var_city . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_coverage = $value[d_azp_fct_sub_coverage_t_name];
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_fct_prefacture_t_coverage => $var_coverage,);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->update(t_azp_fct_prefacture, $var_array, d_azp_fct_prefacture_m_temp . " = '2' AND " . d_azp_fct_prefacture_id_azp_fct_prefacture . " = '" . $var_prefacture . "'");
						endforeach;
					} else {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_fct_prefacture_t_coverage => 'TODO',);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_fct_prefacture, $var_array, d_azp_fct_prefacture_m_temp . " = '2' AND " . d_azp_fct_prefacture_id_azp_fct_prefacture . " = '" . $var_prefacture . "'");
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_prefacture, d_azp_fct_prefacture_m_temp . " = '2'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_prefacture = $value[d_azp_fct_prefacture_id_azp_fct_prefacture];
					$var_certificate = $value[d_azp_fct_prefacture_t_certificate];
					$var_city = $value[d_azp_fct_prefacture_t_city];
					$var_coverage = $value[d_azp_fct_prefacture_t_coverage];
					$var_date_request = $value[d_azp_fct_prefacture_t_date_request];
					$var_honorary = $value[d_azp_fct_prefacture_t_honorary];
					$var_purchase = $value[d_azp_fct_prefacture_t_purchase];
					$var_repayment = $value[d_azp_fct_prefacture_t_repayment];
					$var_request = $value[d_azp_fct_prefacture_t_request];
					$var_client = $value[d_azp_fct_prefacture_v_id_azp_fct_client];
					$var_service = $value[d_azp_fct_prefacture_v_id_azp_fct_service];
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->query("
						SELECT
							tc_azp_fct_tariff." . d_azp_fct_tariff_id_azp_fct_tariff . " AS 'lbl_azp_fct_tariff_id_azp_fct_tariff',
							tc_azp_fct_tariff." . d_azp_fct_tariff_t_value . " AS 'lbl_azp_fct_tariff_t_value',
							tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_client',
							tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_coverage',
							tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_investigation . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_investigation',
							tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_result . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_result',
							tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_scale . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_scale',
							tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_service',
							tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_sub_coverage',
							tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_service . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_sub_service',

							tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
							tc_azp_fct_coverage." . d_azp_fct_coverage_t_name . " AS 'lbl_azp_fct_coverage_t_name',
							tc_azp_fct_investigation." . d_azp_fct_investigation_t_name . " AS 'lbl_azp_fct_investigation_t_name',
							tc_azp_fct_result." . d_azp_fct_result_t_name . " AS 'lbl_azp_fct_result_t_name',
							tc_azp_fct_scale." . d_azp_fct_scale_t_max . " AS 'lbl_azp_fct_scale_t_max',
							tc_azp_fct_scale." . d_azp_fct_scale_t_min . " AS 'lbl_azp_fct_scale_t_min',
							tc_azp_fct_scale." . d_azp_fct_scale_t_name . " AS 'lbl_azp_fct_scale_t_name',
							tc_azp_fct_service." . d_azp_fct_service_t_name . " AS 'lbl_azp_fct_service_t_name',
							tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_azp_fct_sub_coverage_t_name',
							tc_azp_fct_sub_service." . d_azp_fct_sub_service_t_name . " AS 'lbl_azp_fct_sub_service_t_name'
						FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
							ON tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . "
								= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_fct_coverage . " tc_azp_fct_coverage
							ON tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . "
								= tc_azp_fct_coverage." . d_azp_fct_coverage_id_azp_fct_coverage . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_fct_investigation . " tc_azp_fct_investigation
							ON tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_investigation . "
								= tc_azp_fct_investigation." . d_azp_fct_investigation_id_azp_fct_investigation . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_fct_result . " tc_azp_fct_result
							ON tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_result . "
								= tc_azp_fct_result." . d_azp_fct_result_id_azp_fct_result . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_fct_scale . " tc_azp_fct_scale
							ON tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_scale . "
								= tc_azp_fct_scale." . d_azp_fct_scale_id_azp_fct_scale . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_fct_service . " tc_azp_fct_service
							ON tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . "
								= tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_fct_sub_coverage . " tc_azp_fct_sub_coverage
							ON tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . "
								= tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_fct_sub_service . " tc_azp_fct_sub_service
							ON tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_service . "
								= tc_azp_fct_sub_service." . d_azp_fct_sub_service_id_azp_fct_sub_service . "
						-- ---------------------------------------------------------------
						WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $var_client . "'
							AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " = '" . $var_service . "'

							AND tc_azp_fct_scale." . d_azp_fct_scale_v_id_azp_fct_client . " = '" . $var_client . "'
							AND (tc_azp_fct_scale." . d_azp_fct_scale_t_min . " <= '" . $var_purchase . "'
								AND tc_azp_fct_scale." . d_azp_fct_scale_t_max . " >= '" . $var_purchase . "')

							AND tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " = '" . $var_coverage . "'
							AND tc_azp_fct_sub_service." . d_azp_fct_sub_service_t_name . " = '" . $var_certificate . "'
					");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_tariff = $value['lbl_azp_fct_tariff_id_azp_fct_tariff'];
							//$var_client = $value['lbl_azp_fct_client_t_name'];
							$var_coverage = $value['lbl_azp_fct_coverage_t_name'];
							$var_investigation = $value['lbl_azp_fct_investigation_t_name'];
							$var_result = $value['lbl_azp_fct_result_t_name'];
							$var_max = $value['lbl_azp_fct_scale_t_max'];
							$var_min = $value['lbl_azp_fct_scale_t_min'];
							$var_scale = $value['lbl_azp_fct_scale_t_name'];
							//$var_service = $value['lbl_azp_fct_service_t_name'];
							$var_sub_coverage = $value['lbl_azp_fct_sub_coverage_t_name'];
							$var_sub_service = $value['lbl_azp_fct_sub_service_t_name'];
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_fct_prefacture_v_id_azp_fct_tariff => $var_tariff,);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->update(t_azp_fct_prefacture, $var_array, d_azp_fct_prefacture_m_temp . " = '2' AND " . d_azp_fct_prefacture_id_azp_fct_prefacture . " = '" . $var_prefacture . "'");
						endforeach;
					}
					//echo '------------------------------------------------';
					//echo '<br>';
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_prefacture, d_azp_fct_prefacture_m_temp . " = '2'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_id = $value[d_azp_fct_prefacture_id_azp_fct_prefacture];
					$var_tariff = $value[d_azp_fct_prefacture_v_id_azp_fct_tariff];
					$var_purchase = $value[d_azp_fct_prefacture_t_purchase];
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_fct_tariff, d_azp_fct_tariff_id_azp_fct_tariff . " = '" . $var_tariff . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_value = str_replace($var_search, $var_replace, $value[d_azp_fct_tariff_t_value]);
							$var_honorary = $var_purchase * $var_value;
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_fct_prefacture_t_honorary => $var_honorary,);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->update(t_azp_fct_prefacture, $var_array, d_azp_fct_prefacture_m_temp . " = '2' AND " .
								d_azp_fct_prefacture_id_azp_fct_prefacture . " = '" . $var_id . "'");
						endforeach;
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Array para asignar argumentos o valores a los elementos
			$var_array = array(d_azp_fct_honorary_m_temp => '1',);
			# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
			$this->db->update(t_azp_fct_honorary, $var_array, d_azp_fct_honorary_m_temp . " = '2'");
			#-------------------------------------------------------------------------#
			# Array para asignar argumentos o valores a los elementos
			$var_array = array(d_azp_fct_prefacture_m_temp => '1',);
			# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
			$this->db->update(t_azp_fct_prefacture, $var_array, d_azp_fct_prefacture_m_temp . " = '2'");
			#-------------------------------------------------------------------------#
			# Defincion de valores a nuevas variables
			$var_certificate = ''; $var_date_request = ''; $var_date_send = ''; $var_request = ''; $var_tariff = '';
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_prefacture, d_azp_fct_prefacture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_certificate = $value[d_azp_fct_prefacture_t_certificate];
					$var_date_request = $value[d_azp_fct_prefacture_t_date_request];
					$var_date_send = $value[d_azp_fct_prefacture_t_date_send];
					$var_request = $value[d_azp_fct_prefacture_t_request];
					$var_tariff = $value[d_azp_fct_prefacture_v_id_azp_fct_tariff];
					#-------------------------------------------------------------------------#
					# Defincion de valores a nuevas variables
					$var_client = ''; $var_coverage = ''; $var_investigation = ''; $var_result = ''; $var_scale = ''; $var_service = ''; $var_sub_coverage = ''; $var_sub_service = '';
					$var_ct_3 = ''; $var_ct_4 = ''; $var_ct_5 = ''; $var_ct_6 = ''; $var_ct_7 = ''; $var_ct_8 = '';
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_fct_tariff, d_azp_fct_tariff_id_azp_fct_tariff . " = '" . $var_tariff . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_client = $value[d_azp_fct_tariff_v_id_azp_fct_client];
							$var_coverage = $value[d_azp_fct_tariff_v_id_azp_fct_coverage];
							$var_investigation = $value[d_azp_fct_tariff_v_id_azp_fct_investigation];
							$var_result = $value[d_azp_fct_tariff_v_id_azp_fct_result];
							$var_scale = $value[d_azp_fct_tariff_v_id_azp_fct_scale];
							$var_service = $value[d_azp_fct_tariff_v_id_azp_fct_service];
							$var_sub_coverage = $value[d_azp_fct_tariff_v_id_azp_fct_sub_coverage];
							$var_sub_service = $value[d_azp_fct_tariff_v_id_azp_fct_sub_service];
						endforeach;
					}
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_fct_coverage, d_azp_fct_coverage_id_azp_fct_coverage . " = '" . $var_coverage . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_id_coverage = $value[d_azp_fct_coverage_t_name]; endforeach; } else { $var_id_coverage = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_fct_investigation, d_azp_fct_investigation_id_azp_fct_investigation . " = '" . $var_investigation . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_id_investigation = $value[d_azp_fct_investigation_t_name]; endforeach; } else { $var_id_investigation = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_fct_result, d_azp_fct_result_id_azp_fct_result . " = '" . $var_result . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_id_result = $value[d_azp_fct_result_t_name]; endforeach; } else { $var_id_result = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_fct_scale, d_azp_fct_scale_id_azp_fct_scale . " = '" . $var_scale . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_id_scale = $value[d_azp_fct_scale_t_name]; endforeach; } else { $var_id_scale = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_fct_service, d_azp_fct_service_id_azp_fct_service . " = '" . $var_service . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_id_service = $value[d_azp_fct_service_t_name]; endforeach; } else { $var_id_service = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_fct_sub_coverage, d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '" . $var_sub_coverage . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_id_sub_coverage = $value[d_azp_fct_sub_coverage_t_name]; endforeach; } else { $var_id_sub_coverage = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_fct_sub_service, d_azp_fct_sub_service_id_azp_fct_sub_service . " = '" . $var_sub_service . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_id_sub_service = $value[d_azp_fct_sub_service_t_name]; endforeach; } else { $var_id_sub_service = ''; }
					#-------------------------------------------------------------------------#
					if ($var_id_sub_coverage == 'NO APLICA') {
						$var_qy_sub_coverage = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " = '" . $var_id_coverage . "'";
					} else if ($var_id_sub_coverage == 'TODO') {
						# Verificar en la base de datos si existen el registro
						$var_sql = $this->db->query("
							SELECT tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_city'
							FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
							INNER JOIN " . t_azp_fct_sub_coverage . " tc_azp_fct_sub_coverage
								ON tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . "
									= tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . "
							WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " = '2'
								AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . " = '2'
								AND tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '3'
								AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $var_client . "'
						");
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						if (true == $var_sql) { foreach ($var_sql as $key => $value) { $var_ct_3 = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " != '" . $value['lbl_city'] . "'"; } } else { $var_ct_3 = ''; }
						#-------------------------------------------------------------------------#
						# Verificar en la base de datos si existen el registro
						$var_sql = $this->db->query("
							SELECT tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_city'
							FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
							INNER JOIN " . t_azp_fct_sub_coverage . " tc_azp_fct_sub_coverage
								ON tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . "
									= tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . "
							WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " = '2'
								AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . " = '2'
								AND tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '4'
								AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $var_client . "'
						");
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						if (true == $var_sql) { foreach ($var_sql as $key => $value) { $var_ct_4 = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " != '" . $value['lbl_city'] . "'"; } } else { $var_ct_4 = ''; }
						#-------------------------------------------------------------------------#
						# Verificar en la base de datos si existen el registro
						$var_sql = $this->db->query("
							SELECT tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_city'
							FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
							INNER JOIN " . t_azp_fct_sub_coverage . " tc_azp_fct_sub_coverage
								ON tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . "
									= tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . "
							WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " = '2'
								AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . " = '2'
								AND tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '5'
								AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $var_client . "'
						");
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						if (true == $var_sql) { foreach ($var_sql as $key => $value) { $var_ct_5 = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " != '" . $value['lbl_city'] . "'"; } } else { $var_ct_5 = ''; }
						#-------------------------------------------------------------------------#
						# Verificar en la base de datos si existen el registro
						$var_sql = $this->db->query("
							SELECT tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_city'
							FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
							INNER JOIN " . t_azp_fct_sub_coverage . " tc_azp_fct_sub_coverage
								ON tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . "
									= tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . "
							WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " = '2'
								AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . " = '2'
								AND tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '6'
								AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $var_client . "'
						");
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						if (true == $var_sql) { foreach ($var_sql as $key => $value) { $var_ct_6 = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " != '" . $value['lbl_city'] . "'"; } } else { $var_ct_6 = ''; }
						#-------------------------------------------------------------------------#
						# Verificar en la base de datos si existen el registro
						$var_sql = $this->db->query("
							SELECT tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_city'
							FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
							INNER JOIN " . t_azp_fct_sub_coverage . " tc_azp_fct_sub_coverage
								ON tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . "
									= tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . "
							WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " = '2'
								AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . " = '2'
								AND tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '7'
								AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $var_client . "'
						");
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						if (true == $var_sql) { foreach ($var_sql as $key => $value) { $var_ct_7 = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " != '" . $value['lbl_city'] . "'"; } } else { $var_ct_7 = ''; }
						#-------------------------------------------------------------------------#
						# Verificar en la base de datos si existen el registro
						$var_sql = $this->db->query("
							SELECT tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_city'
							FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
							INNER JOIN " . t_azp_fct_sub_coverage . " tc_azp_fct_sub_coverage
								ON tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . "
									= tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . "
							WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " = '2'
								AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . " = '2'
								AND tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '8'
								AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $var_client . "'
						");
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						if (true == $var_sql) { foreach ($var_sql as $key => $value) { $var_ct_8 = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " != '" . $value['lbl_city'] . "'"; } } else { $var_ct_8 = ''; }
						#-------------------------------------------------------------------------#
						$var_qy_sub_coverage = "AND (tc_azp_crt_city." . d_azp_crt_city_t_name . " != 'BOGOTA' " . $var_ct_3 . " " . $var_ct_4 . " " . $var_ct_5 . " " . $var_ct_6 . " " . $var_ct_7 . " " . $var_ct_8 . ")";
					} else if ($var_id_sub_coverage != 'NO APLICA' || $var_id_sub_coverage != 'TODO') {
						$var_qy_sub_coverage = "AND tc_azp_crt_city." . d_azp_crt_city_t_name . " = '" . $var_id_sub_coverage . "'";
					}
					#-------------------------------------------------------------------------#
					# Seleccionar los registros de la tabla
					$var_sql = $this->db->query("
						SELECT 
							tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . " AS 'lbl_azp_crt_request_data_id_azp_crt_request_data',
							tc_azp_crt_request_data." . d_azp_crt_request_data_s_date . " AS 'lbl_azp_crt_request_data_s_date',
							tc_azp_crt_request_data." . d_azp_crt_request_data_s_plaque . " AS 'lbl_azp_crt_request_data_s_plaque',
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
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_city',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_client',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_expiration',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_observation_type',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_phase',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_request_type',

							tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
							tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
							tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
							tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
							tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
							tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
							tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name',

							tc_azp_fct_tariff." . d_azp_fct_tariff_t_value . " AS 'lbl_azp_fct_tariff_t_value',
							tc_azp_fct_tariff." . d_azp_fct_tariff_t_value . " * tc_azp_fct_tariff." . d_azp_fct_tariff_t_iva . " AS 'lbl_azp_fct_tariff_t_iva',
							tc_azp_fct_tariff." . d_azp_fct_tariff_t_value . " + tc_azp_fct_tariff." . d_azp_fct_tariff_t_value . " * tc_azp_fct_tariff." . d_azp_fct_tariff_t_iva . " AS 'lbl_azp_fct_tariff_t_total'
						FROM " . t_azp_fct_prefacture . " tc_azp_fct_prefacture
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_fct_tariff . " tc_azp_fct_tariff
							ON tc_azp_fct_prefacture." . d_azp_fct_prefacture_v_id_azp_fct_tariff . "
								= tc_azp_fct_tariff." . d_azp_fct_tariff_id_azp_fct_tariff . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
						    ON tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . "
							= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
							ON tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
								= tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
							ON tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
								= tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_request_data . " tc_azp_crt_request_data
							ON tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
								= tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_city . " tc_azp_crt_city
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
								= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_expiration . " tc_azp_crt_expiration
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
								= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_observation_type . " tc_azp_crt_observation_type
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
								= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_phase . " tc_azp_crt_phase
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
								= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_request_type . " tc_azp_crt_request_type
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
								= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
						-- ------------------------------------------------------------------------ 
						WHERE tc_azp_fct_prefacture." . d_azp_fct_prefacture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
							AND tc_azp_fct_prefacture." . d_azp_fct_prefacture_v_id_azp_fct_service . " = '1' " . $var_qy_sub_coverage . "
							AND tc_azp_fct_prefacture." . d_azp_fct_prefacture_t_request . " = '" . $var_request . "'
							AND (tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " >= '" . $var_date_send . "'
								AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " <= '" . $var_date_send . "')
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_date . " = '" . $var_date_request . "'
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request . "'
							AND tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " = '" . $var_certificate . "'
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . " = '4'
							AND tc_azp_fct_tariff." . d_azp_fct_tariff_id_azp_fct_tariff . " = '" . $var_tariff . "'
						-- ------------------------------------------------------------------------ 
						GROUP BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC,
							tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " ASC
						-- ------------------------------------------------------------------------ 
						ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC,
							tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " ASC
					");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_register = $value['lbl_azp_crt_request_data_id_azp_crt_request_data'];
							$var_service = $value['lbl_azp_fct_tariff_t_value'];
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_crt_request_data_t_fct_service => $var_service,);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->update(t_azp_crt_request_data, $var_array, d_azp_crt_request_data_id_azp_crt_request_data . " = '" . $var_register . "'");
						endforeach;
					}
				endforeach;
			}
		}


















		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_fct_satisfactiun_certificate(string $var_since, string $var_until, string $var_subsatisfaction, string $var_provider) {
			$var_search = array(' ', '$', ',', '.00'); $var_replace = array('', '', '', '');
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_sub_satisfaction, d_azp_fct_sub_satisfaction_id_azp_fct_sub_satisfaction . " = '" . $var_subsatisfaction . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_subrsatisfaction = $value[d_azp_fct_sub_satisfaction_t_name]; endforeach; } else { $var_subrsatisfaction = ''; }
			# Verificar si el resultado de la sql es verdadero o falso
			if ($var_subrsatisfaction == 'TODO') { $var_query_sub = ''; } else { $var_query_sub = "AND tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " = '" . $var_subrsatisfaction . "'"; }
			#-------------------------------------------------------------------------#
			# Verificar si el resultado de la sql es verdadero o falso
			if ($var_provider == 'TODO') { $var_query_provider = ''; } else { $var_query_provider = "AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " = '" . $var_provider . "'"; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_azp_fct_client_id_azp_fct_client',
					LEFT(tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . ", 7) AS 'lbl_azp_crt_request_data_t_date_delivery',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " AS 'lbl_azp_crt_request_data_t_request_nro',
					tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " AS 'lbl_azp_crt_request_data_t_provider_name',
					tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name',
					SUM(tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_amount . ") AS 'lbl_azp_crt_capture_t_rcb_amount'
				FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data

				INNER JOIN " . t_azp_crt_capture . " tc_azp_crt_capture
					ON tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . "
						= tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . "

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

				WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_m_deleted . " = 1 " . $var_query_sub . " " . $var_query_provider . "
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_bilable . " = 'SI'
					AND (tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " >= '" . $var_since . "'
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " <= '" . $var_until . "')
					AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " = 'SI'
					AND (tc_azp_crt_request_data." . d_azp_crt_request_data_t_st_located . " = ''
					OR tc_azp_crt_request_data." . d_azp_crt_request_data_t_st_located . " IS NULL)

				GROUP BY LEFT(tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . ", 7) ASC,
					tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " ASC
			");
			#-------------------------------------------------------------------------#
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_fct_satisfaction_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_fct_satisfaction_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_fct_satisfaction_m_date_created => DATE_HOUR,
						d_azp_fct_satisfaction_m_date_modified => DATE_HOUR,
						d_azp_fct_satisfaction_m_deleted => '1',
						d_azp_fct_satisfaction_m_description => '',
						d_azp_fct_satisfaction_m_level => '2',
						d_azp_fct_satisfaction_m_status => '1',
						d_azp_fct_satisfaction_m_temp => '1',
						d_azp_fct_satisfaction_t_date_send => $value['lbl_azp_crt_request_data_t_date_delivery'],
						d_azp_fct_satisfaction_t_date_since => '',
						d_azp_fct_satisfaction_t_date_until => '',
						d_azp_fct_satisfaction_t_module => $value['lbl_azp_crt_request_type_t_name'],
						d_azp_fct_satisfaction_t_request => '*',
						d_azp_fct_satisfaction_t_service => '*',
						d_azp_fct_satisfaction_t_supplier => '*',
						d_azp_fct_satisfaction_t_value => $value['lbl_azp_crt_capture_t_rcb_amount'],
						d_azp_fct_satisfaction_v_id_azp_fct_client => $value['lbl_azp_fct_client_id_azp_fct_client'],
						d_azp_fct_satisfaction_v_id_azp_fct_relation => '*',
						d_azp_fct_satisfaction_v_id_azp_fct_service => '1',
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_fct_satisfaction, $var_array);
				endforeach;
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_fct_satisfactiun_defunction(string $var_since, string $var_until, string $var_subsatisfaction) {
			$var_search = array(' ', '$', ',', '.00'); $var_replace = array('', '', '', '');
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("DELETE FROM " . t_azp_fct_satisfactiom . " WHERE " . d_azp_fct_satisfactiom_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'Cliente_Id',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'Cliente_Nombre',
					tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'Nro_Solicitud',
					LEFT(tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . ", 7) AS 'Fecha_Envio',
					SUM(tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_closed_value . ") AS 'ValorCerrado',
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_closed_value . " AS 'Valor_Cerrado'
				FROM azp_gsc_request tc_azp_gsc_request

				INNER JOIN azp_gsc_client tc_azp_gsc_client
					ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
						= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
						
				INNER JOIN azp_fct_client tc_azp_fct_client
					ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

				INNER JOIN azp_gsc_consignment tc_azp_gsc_consignment
					ON tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						= tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "

				WHERE tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " > 0
					AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nit_identification . " != ''
					AND tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " = 1
					AND (LEFT(tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . ", 10) >= '" . $var_since . "'
						AND LEFT(tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . ", 10) <= '" . $var_until . "')

				GROUP BY LEFT(tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . ", 7) ASC,
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_account_number . " ASC,
					tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_item . " ASC
					-- tc_azp_gsc_request." . d_azp_gsc_request_t_city . " ASC
			");
			#-------------------------------------------------------------------------#
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_fct_satisfactiom_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_fct_satisfactiom_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_fct_satisfactiom_m_date_created => DATE_HOUR,
						d_azp_fct_satisfactiom_m_date_modified => DATE_HOUR,
						d_azp_fct_satisfactiom_m_deleted => '1',
						d_azp_fct_satisfactiom_m_description => '',
						d_azp_fct_satisfactiom_m_level => '2',
						d_azp_fct_satisfactiom_m_status => '1',
						d_azp_fct_satisfactiom_m_temp => '1',
						d_azp_fct_satisfactiom_t_date_send => $value['Fecha_Envio'],
						d_azp_fct_satisfactiom_t_date_since => $value['Fecha_Envio'] . '-01',
						d_azp_fct_satisfactiom_t_date_until => $value['Fecha_Envio'] . '-31',
						d_azp_fct_satisfactiom_t_module => '',
						d_azp_fct_satisfactiom_t_request => '*',
						d_azp_fct_satisfactiom_t_service => '*',
						d_azp_fct_satisfactiom_t_supplier => '*',
						d_azp_fct_satisfactiom_t_value => $value['Valor_Cerrado'],
						d_azp_fct_satisfactiom_v_id_azp_fct_client => $value['Cliente_Id'],
						d_azp_fct_satisfactiom_v_id_azp_fct_relation => '*',
						d_azp_fct_satisfactiom_v_id_azp_fct_service => '2',
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_fct_satisfactiom, $var_array);
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("
				SELECT
					" . d_azp_fct_satisfactiom_m_by_created . " AS 'lbl_azp_fct_satisfactiom_m_by_created',
					" . d_azp_fct_satisfactiom_m_by_modified . " AS 'lbl_azp_fct_satisfactiom_m_by_modified',
					" . d_azp_fct_satisfactiom_m_date_created . " AS 'lbl_azp_fct_satisfactiom_m_date_created',
					" . d_azp_fct_satisfactiom_m_date_modified . " AS 'lbl_azp_fct_satisfactiom_m_date_modified',
					" . d_azp_fct_satisfactiom_m_deleted . " AS 'lbl_azp_fct_satisfactiom_m_deleted',
					" . d_azp_fct_satisfactiom_m_description . " AS 'lbl_azp_fct_satisfactiom_m_description',
					" . d_azp_fct_satisfactiom_m_level . " AS 'lbl_azp_fct_satisfactiom_m_level',
					" . d_azp_fct_satisfactiom_m_status . " AS 'lbl_azp_fct_satisfactiom_m_status',
					" . d_azp_fct_satisfactiom_m_temp . " AS 'lbl_azp_fct_satisfactiom_m_temp',
					" . d_azp_fct_satisfactiom_t_date_send . " AS 'lbl_azp_fct_satisfactiom_t_date_send',
					" . d_azp_fct_satisfactiom_t_date_since . " AS 'lbl_azp_fct_satisfactiom_t_date_since',
					" . d_azp_fct_satisfactiom_t_date_until . " AS 'lbl_azp_fct_satisfactiom_t_date_until',
					" . d_azp_fct_satisfactiom_t_module . " AS 'lbl_azp_fct_satisfactiom_t_module',
					" . d_azp_fct_satisfactiom_t_request . " AS 'lbl_azp_fct_satisfactiom_t_request',
					" . d_azp_fct_satisfactiom_t_service . " AS 'lbl_azp_fct_satisfactiom_t_service',
					" . d_azp_fct_satisfactiom_t_supplier . " AS 'lbl_azp_fct_satisfactiom_t_supplier',
					SUM(" . d_azp_fct_satisfactiom_t_value . ") AS 'lbl_azp_fct_satisfactiom_t_value',
					" . d_azp_fct_satisfactiom_v_id_azp_fct_client . " AS 'lbl_azp_fct_satisfactiom_v_id_azp_fct_client',
					" . d_azp_fct_satisfactiom_v_id_azp_fct_relation . " AS 'lbl_azp_fct_satisfactiom_v_id_azp_fct_relation',
					" . d_azp_fct_satisfactiom_v_id_azp_fct_service . " AS 'lbl_azp_fct_satisfactiom_v_id_azp_fct_service'
				FROM " . t_azp_fct_satisfactiom . "
				WHERE " . d_azp_fct_satisfactiom_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				GROUP BY " . d_azp_fct_satisfactiom_v_id_azp_fct_service . " ASC,
					" . d_azp_fct_satisfactiom_t_date_send . " ASC

				/*GROUP BY " . d_azp_fct_satisfactiom_v_id_azp_fct_service . " ASC,
					" . d_azp_fct_satisfactiom_v_id_azp_fct_client . " ASC,
					" . d_azp_fct_satisfactiom_t_request . " ASC*/
			");
			#-------------------------------------------------------------------------#
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_fct_satisfaction_m_by_created => $value['lbl_azp_fct_satisfactiom_m_by_created'],
						d_azp_fct_satisfaction_m_by_modified => $value['lbl_azp_fct_satisfactiom_m_by_modified'],
						d_azp_fct_satisfaction_m_date_created => $value['lbl_azp_fct_satisfactiom_m_date_created'],
						d_azp_fct_satisfaction_m_date_modified => $value['lbl_azp_fct_satisfactiom_m_date_modified'],
						d_azp_fct_satisfaction_m_deleted => $value['lbl_azp_fct_satisfactiom_m_deleted'],
						d_azp_fct_satisfaction_m_description => $value['lbl_azp_fct_satisfactiom_m_description'],
						d_azp_fct_satisfaction_m_level => $value['lbl_azp_fct_satisfactiom_m_level'],
						d_azp_fct_satisfaction_m_status => $value['lbl_azp_fct_satisfactiom_m_status'],
						d_azp_fct_satisfaction_m_temp => $value['lbl_azp_fct_satisfactiom_m_temp'],
						d_azp_fct_satisfaction_t_date_send => $value['lbl_azp_fct_satisfactiom_t_date_send'],
						d_azp_fct_satisfaction_t_date_since => $value['lbl_azp_fct_satisfactiom_t_date_since'],
						d_azp_fct_satisfaction_t_date_until => $value['lbl_azp_fct_satisfactiom_t_date_until'],
						d_azp_fct_satisfaction_t_module => $value['lbl_azp_fct_satisfactiom_t_module'],
						d_azp_fct_satisfaction_t_request => $value['lbl_azp_fct_satisfactiom_t_request'],
						d_azp_fct_satisfaction_t_service => $value['lbl_azp_fct_satisfactiom_t_service'],
						d_azp_fct_satisfaction_t_supplier => $value['lbl_azp_fct_satisfactiom_t_supplier'],
						d_azp_fct_satisfaction_t_value => $value['lbl_azp_fct_satisfactiom_t_value'],
						d_azp_fct_satisfaction_v_id_azp_fct_client => $value['lbl_azp_fct_satisfactiom_v_id_azp_fct_client'],
						d_azp_fct_satisfaction_v_id_azp_fct_relation => $value['lbl_azp_fct_satisfactiom_v_id_azp_fct_relation'],
						d_azp_fct_satisfaction_v_id_azp_fct_service => $value['lbl_azp_fct_satisfactiom_v_id_azp_fct_service'],
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_fct_satisfaction, $var_array);
				endforeach;
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_azp_fct_satisfactiun_investigation(string $var_since, string $var_until, string $var_subsatisfaction) {
			$var_search = array(' ', '$', ',', '.00'); $var_replace = array('', '', '', '');
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_sub_satisfaction, d_azp_fct_sub_satisfaction_id_azp_fct_sub_satisfaction . " = '" . $var_subsatisfaction . "'");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_subrsatisfaction = $value[d_azp_fct_sub_satisfaction_t_name]; endforeach; } else { $var_subrsatisfaction = ''; }
			#-------------------------------------------------------------------------#
			if ($var_subrsatisfaction == 'CAMARAS' || $var_subrsatisfaction == 'TODO') {
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'Id_Relacion',
						tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'Cliente_Id',
						tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'Cliente_Nombre',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'Solicitud',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'Envio',
						LEFT(tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . ", 7) AS 'Fecha_Envio',
						SUM(REPLACE(REPLACE(tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_value . ", ',', ''), '$ ', '')) AS 'Valor'
					FROM azp_ibn_control_panel tc_azp_ibn_control_panel

					INNER JOIN azp_ibn_client tc_azp_ibn_client
						ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
							
					INNER JOIN azp_fct_client tc_azp_fct_client
						ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
							= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
							
					INNER JOIN azp_ibn_camera tc_azp_ibn_camera
						ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
							= tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . "

					WHERE tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_value . " > 0
						-- AND tc_azp_ibn_camera.t_st_located = 'NO'
						AND tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_returnable . " = 'SI'
						AND tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " = 1
						AND tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " = 'ACTIVO'
						AND (tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " >= '" . $var_since . "'
							AND tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " <= '" . $var_until . "')

					GROUP BY tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " ASC,
						LEFT(tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . ", 7) ASC
				");
				#-------------------------------------------------------------------------#
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_fct_satisfaction_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_fct_satisfaction_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_fct_satisfaction_m_date_created => DATE_HOUR,
							d_azp_fct_satisfaction_m_date_modified => DATE_HOUR,
							d_azp_fct_satisfaction_m_deleted => '1',
							d_azp_fct_satisfaction_m_description => '',
							d_azp_fct_satisfaction_m_level => '2',
							d_azp_fct_satisfaction_m_status => '1',
							d_azp_fct_satisfaction_m_temp => '1',
							d_azp_fct_satisfaction_t_date_send => $value['Fecha_Envio'],
							d_azp_fct_satisfaction_t_date_since => '',
							d_azp_fct_satisfaction_t_date_until => '',
							d_azp_fct_satisfaction_t_module => 'CAMARAS',
							d_azp_fct_satisfaction_t_request => '*',
							d_azp_fct_satisfaction_t_service => '*',
							d_azp_fct_satisfaction_t_supplier => '*',
							d_azp_fct_satisfaction_t_value => $value['Valor'],
							d_azp_fct_satisfaction_v_id_azp_fct_client => $value['Cliente_Id'],
							d_azp_fct_satisfaction_v_id_azp_fct_relation => $value['Id_Relacion'],
							d_azp_fct_satisfaction_v_id_azp_fct_service => '3',
						);
						# Query Sql Insert: Registrar valores en la tabla segun sus campos
						$this->db->insert(t_azp_fct_satisfaction, $var_array);
					endforeach;
				}
			}
			#-------------------------------------------------------------------------#
			if ($var_subrsatisfaction == 'INMUEBLES' || $var_subrsatisfaction == 'TODO') {
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'Id_Relacion',
						tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'Cliente_Id',
						tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'Cliente_Nombre',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'Solicitud',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'Envio',
						LEFT(tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . ", 7) AS 'Fecha_Envio',
						SUM(REPLACE(REPLACE(tc_azp_ibn_property." . d_azp_ibn_property_t_st_value . ", ',', ''), '$ ', '')) AS 'Valor'
					FROM azp_ibn_control_panel tc_azp_ibn_control_panel

					INNER JOIN azp_ibn_client tc_azp_ibn_client
						ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
							
					INNER JOIN azp_fct_client tc_azp_fct_client
						ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
							= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
							
					INNER JOIN azp_ibn_property tc_azp_ibn_property
						ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
							= tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . "

					WHERE tc_azp_ibn_property." . d_azp_ibn_property_t_st_value . " > 0
						-- AND tc_azp_ibn_property." . d_azp_ibn_property_t_st_located . " = 'NO'
						AND tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable . " = 'SI'
						AND tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " = 1
						AND tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " = 'ACTIVO'
						AND (tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " >= '" . $var_since . "'
							AND tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " <= '" . $var_until . "')

					GROUP BY tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " ASC,
						LEFT(tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . ", 7) ASC
				");
				#-------------------------------------------------------------------------#
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_fct_satisfaction_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_fct_satisfaction_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_fct_satisfaction_m_date_created => DATE_HOUR,
							d_azp_fct_satisfaction_m_date_modified => DATE_HOUR,
							d_azp_fct_satisfaction_m_deleted => '1',
							d_azp_fct_satisfaction_m_description => '',
							d_azp_fct_satisfaction_m_level => '2',
							d_azp_fct_satisfaction_m_status => '1',
							d_azp_fct_satisfaction_m_temp => '1',
							d_azp_fct_satisfaction_t_date_send => $value['Fecha_Envio'],
							d_azp_fct_satisfaction_t_module => 'INMUEBLES',
							d_azp_fct_satisfaction_t_request => '*',
							d_azp_fct_satisfaction_t_service => '*',
							d_azp_fct_satisfaction_t_supplier => '*',
							d_azp_fct_satisfaction_t_value => $value['Valor'],
							d_azp_fct_satisfaction_v_id_azp_fct_client => $value['Cliente_Id'],
							d_azp_fct_satisfaction_v_id_azp_fct_relation => $value['Id_Relacion'],
							d_azp_fct_satisfaction_v_id_azp_fct_service => '3',
						);
						# Query Sql Insert: Registrar valores en la tabla segun sus campos
						$this->db->insert(t_azp_fct_satisfaction, $var_array);
					endforeach;
				}
			}
			#-------------------------------------------------------------------------#
			if ($var_subrsatisfaction == 'VEHICULOS' || $var_subrsatisfaction == 'TODO') {
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'Id_Relacion',
						tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'Cliente_Id',
						tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'Cliente_Nombre',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'Solicitud',
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'Envio',
						LEFT(tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . ", 7) AS 'Fecha_Envio',
						SUM(REPLACE(REPLACE(tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_value . ", ',', ''), '$ ', '')) AS 'Valor'
					FROM azp_ibn_control_panel tc_azp_ibn_control_panel

					INNER JOIN azp_ibn_client tc_azp_ibn_client
						ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
							
					INNER JOIN azp_fct_client tc_azp_fct_client
						ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
							= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
							
					INNER JOIN azp_ibn_vehicle tc_azp_ibn_vehicle
						ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
							= tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . "

					WHERE tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_value . " > 0
						-- AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_located . " = 'NO'
						AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_returnable . " = 'SI'
						AND tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " = 1
						AND tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " = 'ACTIVO'
						AND (tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " >= '" . $var_since . "'
							AND tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " <= '" . $var_until . "')

					GROUP BY tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " ASC,
						LEFT(tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . ", 7) ASC
				");
				#-------------------------------------------------------------------------#
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_fct_satisfaction_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_fct_satisfaction_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_fct_satisfaction_m_date_created => DATE_HOUR,
							d_azp_fct_satisfaction_m_date_modified => DATE_HOUR,
							d_azp_fct_satisfaction_m_deleted => '1',
							d_azp_fct_satisfaction_m_description => '',
							d_azp_fct_satisfaction_m_level => '2',
							d_azp_fct_satisfaction_m_status => '1',
							d_azp_fct_satisfaction_m_temp => '1',
							d_azp_fct_satisfaction_t_date_send => $value['Fecha_Envio'],
							d_azp_fct_satisfaction_t_module => 'VEHICULOS',
							d_azp_fct_satisfaction_t_request => '*',
							d_azp_fct_satisfaction_t_service => '*',
							d_azp_fct_satisfaction_t_supplier => '*',
							d_azp_fct_satisfaction_t_value => $value['Valor'],
							d_azp_fct_satisfaction_v_id_azp_fct_client => $value['Cliente_Id'],
							d_azp_fct_satisfaction_v_id_azp_fct_relation => $value['Id_Relacion'],
							d_azp_fct_satisfaction_v_id_azp_fct_service => '3',
						);
						# Query Sql Insert: Registrar valores en la tabla segun sus campos
						$this->db->insert(t_azp_fct_satisfaction, $var_array);
					endforeach;
				}
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidatud_investigation_all() {
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("DELETE FROM " . t_azp_fct_sinvestigation . " WHERE " . d_azp_fct_sinvestigation_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_consolidatud(string $var_id) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " AS 'lbl_azp_fct_satisfaction_id_azp_fct_satisfaction',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_created . " AS 'lbl_azp_fct_satisfaction_m_date_created',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_date_modified . " AS 'lbl_azp_fct_satisfaction_m_date_modified',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_description . " AS 'lbl_azp_fct_satisfaction_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_date_send . " AS 'lbl_azp_fct_satisfaction_t_date_send',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_date_since . " AS 'lbl_azp_fct_satisfaction_t_date_since',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_date_until . " AS 'lbl_azp_fct_satisfaction_t_date_until',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " AS 'lbl_azp_fct_satisfaction_t_request',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_service . " AS 'lbl_azp_fct_satisfaction_t_service',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_supplier . " AS 'lbl_azp_fct_satisfaction_t_supplier',
					tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_service." . d_azp_fct_service_t_name . " AS 'lbl_azp_fct_service_t_name'
				FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_service . " tc_azp_fct_service
					ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . "
						= tc_azp_fct_service." . d_azp_fct_service_id_azp_fct_service . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_deleted . " = '1'
					AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ")
				ORDER BY tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidatud_certificate(string $var_id) {
			//echo $var_id . '<br>';
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("DELETE FROM " . t_azp_fct_scertificate . " WHERE " . d_azp_fct_scertificate_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
			#-------------------------------------------------------------------------#
			# Valores del array vacios
			$var_fmodule = array();
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_v_id_azp_fct_service . " = '1' AND " . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ")");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_fmodule[] = "'" . $value[d_azp_fct_satisfaction_t_module] . "'"; endforeach; }
			# Convertir elementos de un array en string
			$var_implode = implode(",", $var_fmodule);
			if ($var_implode == '') { $empty_implode = "''"; } else { $empty_implode = $var_implode; }
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction,
				d_azp_fct_satisfaction_id_azp_fct_satisfaction . " NOT IN (" . $var_id . ") AND " .
				d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
				d_azp_fct_satisfaction_v_id_azp_fct_service . " = '1' AND " .
				d_azp_fct_satisfaction_t_module . " IN (" . $empty_implode . ")"
			);
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_client = $value[d_azp_fct_satisfaction_v_id_azp_fct_client];
					$var_send = $value[d_azp_fct_satisfaction_t_date_send];
					$var_since = $value[d_azp_fct_satisfaction_t_date_since];
					$var_until = $value[d_azp_fct_satisfaction_t_date_until];
					$var_request = $value[d_azp_fct_satisfaction_t_request];
					$var_module = $value[d_azp_fct_satisfaction_t_module];
					$var_supplier = $value[d_azp_fct_satisfaction_t_supplier];

					//echo $var_client . '<br>';
					//echo $var_request . '<br>';
					//echo $var_module . '<br>';
					//echo $var_supplier . '<br>';
					//echo $var_client . ',' . $var_request . ',' . $var_module . ',' . $var_supplier . '<br>';
					//echo '<br>';

					# Seleccionar los registros de la tabla
					/*$var_sql = $this->db->query("
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
							tc_azp_crt_request_data." . d_azp_crt_request_data_s_plaque . " AS 'lbl_azp_crt_request_data_s_plaque',
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
							tc_azp_crt_request_data." . d_azp_crt_request_data_t_fct_service . " AS 'lbl_azp_crt_request_data_t_fct_service',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_city',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_client',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_expiration',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_observation_type',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_phase',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_request_type',

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
							tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_receipt . " AS 'lbl_azp_crt_capture_t_rcb_receipt',
							tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_route . " AS 'lbl_azp_crt_capture_t_rcb_route',
							tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_service . " AS 'lbl_azp_crt_capture_t_rcb_service',
							tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_size . " AS 'lbl_azp_crt_capture_t_rcb_size',
							tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_tmp_name . " AS 'lbl_azp_crt_capture_t_rcb_tmp_name',
							tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_type . " AS 'lbl_azp_crt_capture_t_rcb_type',
							tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . " AS 'lbl_azp_crt_capture_v_id_azp_crt_request_data',

							tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
							tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
							tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
							tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
							tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
							tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
							tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name',

							tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_value . " AS 'lbl_azp_fct_satisfaction_t_value'
						FROM " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_user . " tc_azp_user_created
						    ON tc_azp_fct_satisfaction.m_by_created
							= tc_azp_user_created.id_azp_user
						INNER JOIN " . t_azp_user . " tc_azp_user_modified
						    ON tc_azp_fct_satisfaction.m_by_modified
							= tc_azp_user_modified.id_azp_user
						INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
						    ON tc_azp_fct_satisfaction.m_level
							= tc_azp_sys_level.t_value
						INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
						    ON tc_azp_fct_satisfaction.m_status
							= tc_azp_sys_state.t_value
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
						    ON tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . "
							= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
						    ON tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
							= tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
						    ON tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
							= tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_request_data . " tc_azp_crt_request_data
							ON tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
								= tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_city . " tc_azp_crt_city
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
								= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_expiration . " tc_azp_crt_expiration
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
								= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_observation_type . " tc_azp_crt_observation_type
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
								= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_phase . " tc_azp_crt_phase
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
								= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_request_type . " tc_azp_crt_request_type
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
								= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_capture . " tc_azp_crt_capture
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . "
								= tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . "
						-- ------------------------------------------------------------------------    
						WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
							AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_request . " = '" . $var_request . "'
							AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_service . " = '1'
							AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_client . " = '" . $var_client . "'

							AND tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " = '" . $var_module . "'

							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request . "'
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " = '" . $var_supplier . "'
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_bilable . " = 'SI'
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " = 'SI'
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_amount . " > 0
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_st_located . " = ''
						-- ------------------------------------------------------------------------ 
						GROUP BY tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . " ASC,
							tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC,
							tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " ASC,
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " ASC,
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . " ASC
						-- ------------------------------------------------------------------------ 
						ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC,
							tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " ASC
					");*/

					# Seleccionar los registros de la tabla
					$var_sql = $this->db->query("
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
							tc_azp_crt_request_data." . d_azp_crt_request_data_s_plaque . " AS 'lbl_azp_crt_request_data_s_plaque',
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
							tc_azp_crt_request_data." . d_azp_crt_request_data_t_fct_service . " AS 'lbl_azp_crt_request_data_t_fct_service',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_city',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_client',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_expiration',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_observation_type',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_phase',
							tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " AS 'lbl_azp_crt_request_data_v_id_azp_crt_request_type',

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
							tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_receipt . " AS 'lbl_azp_crt_capture_t_rcb_receipt',
							tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_route . " AS 'lbl_azp_crt_capture_t_rcb_route',
							tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_service . " AS 'lbl_azp_crt_capture_t_rcb_service',
							tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_size . " AS 'lbl_azp_crt_capture_t_rcb_size',
							tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_tmp_name . " AS 'lbl_azp_crt_capture_t_rcb_tmp_name',
							tc_azp_crt_capture." . d_azp_crt_capture_t_rcb_type . " AS 'lbl_azp_crt_capture_t_rcb_type',
							tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . " AS 'lbl_azp_crt_capture_v_id_azp_crt_request_data',

							tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
							tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
							tc_azp_crt_client." . d_azp_crt_client_t_code . " AS 'lbl_azp_crt_client_t_code',
							tc_azp_crt_expiration." . d_azp_crt_expiration_t_name . " AS 'lbl_azp_crt_expiration_t_name',
							tc_azp_crt_observation_type." . d_azp_crt_observation_type_t_name . " AS 'lbl_azp_crt_observation_type_t_name',
							tc_azp_crt_phase." . d_azp_crt_phase_t_name . " AS 'lbl_azp_crt_phase_t_name',
							tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " AS 'lbl_azp_crt_request_type_t_name'

						FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data
						-- ------------------------------------------------------------------------
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
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
								= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
						    ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
								= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
						    ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
								= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "


						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_city . " tc_azp_crt_city
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_city . "
								= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_expiration . " tc_azp_crt_expiration
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_expiration . "
								= tc_azp_crt_expiration." . d_azp_crt_expiration_id_azp_crt_expiration . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_observation_type . " tc_azp_crt_observation_type
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_observation_type . "
								= tc_azp_crt_observation_type." . d_azp_crt_observation_type_id_azp_crt_observation_type . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_phase . " tc_azp_crt_phase
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_phase . "
								= tc_azp_crt_phase." . d_azp_crt_phase_id_azp_crt_phase . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_request_type . " tc_azp_crt_request_type
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . "
								= tc_azp_crt_request_type." . d_azp_crt_request_type_id_azp_crt_request_type . "
						-- ------------------------------------------------------------------------ 
						INNER JOIN " . t_azp_crt_capture . " tc_azp_crt_capture
							ON tc_azp_crt_request_data." . d_azp_crt_request_data_id_azp_crt_request_data . "
								= tc_azp_crt_capture." . d_azp_crt_capture_v_id_azp_crt_request_data . "
						-- ------------------------------------------------------------------------    
						WHERE tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $var_client . "'
							AND (tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " >= '" . $var_since . "'
								AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_date_delivery . " <= '" . $var_until . "')
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_request . "'
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_provider_name . " = '" . $var_supplier . "'
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_bilable . " = 'SI'
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_refundable . " = 'SI'
							AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_amount . " > 0
							AND (tc_azp_crt_request_data." . d_azp_crt_request_data_t_st_located . " = ''
								OR tc_azp_crt_request_data." . d_azp_crt_request_data_t_st_located . " IS NULL)
							AND tc_azp_crt_request_type." . d_azp_crt_request_type_t_name . " = '" . $var_module . "'
						-- ------------------------------------------------------------------------ 
						ORDER BY tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " ASC,
							tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " ASC
					");
					#-------------------------------------------------------------------------#
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						foreach ($var_sql as $key => $value):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_fct_scertificate_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_fct_scertificate_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_fct_scertificate_m_date_created => DATE_HOUR,
								d_azp_fct_scertificate_m_date_modified => DATE_HOUR,
								d_azp_fct_scertificate_m_deleted => '1',
								d_azp_fct_scertificate_m_description => '',
								d_azp_fct_scertificate_m_level => '2',
								d_azp_fct_scertificate_m_status => '1',
								d_azp_fct_scertificate_m_temp => '1',
								d_azp_fct_scertificate_t_client => $value['lbl_azp_crt_bank_t_name'],
								d_azp_fct_scertificate_t_request_nro => $value['lbl_azp_crt_request_data_t_request_nro'],
								d_azp_fct_scertificate_t_request_date => $value['lbl_azp_crt_request_data_t_request_date'],
								d_azp_fct_scertificate_t_request_send => $value['lbl_azp_crt_request_data_t_date_delivery'],
								d_azp_fct_scertificate_t_identification => $value['lbl_azp_crt_request_data_t_identification'],
								d_azp_fct_scertificate_t_full_name => $value['lbl_azp_crt_request_data_t_full_name'],
								d_azp_fct_scertificate_t_obligation => $value['lbl_azp_crt_request_data_t_nro_oblitation'],
								d_azp_fct_scertificate_t_id_ics => $value['lbl_azp_crt_request_data_t_request_id'],
								d_azp_fct_scertificate_t_certificate => $value['lbl_azp_crt_request_type_t_name'],
								d_azp_fct_scertificate_t_enrollment => $value['lbl_azp_crt_request_data_t_plaque_enrollment'],
								d_azp_fct_scertificate_t_municipality => $value['lbl_azp_crt_city_t_name'],
								d_azp_fct_scertificate_t_applicant => $value['lbl_azp_crt_request_data_t_applicant_entity'],
								d_azp_fct_scertificate_t_bilable => $value['lbl_azp_crt_request_data_t_bilable'],
								d_azp_fct_scertificate_t_refundable => $value['lbl_azp_crt_request_data_t_refundable'],
								d_azp_fct_scertificate_t_supplier => $value['lbl_azp_crt_request_data_t_provider_name'],
								d_azp_fct_scertificate_t_receipt => $value['lbl_azp_crt_request_data_t_rcb_nro_receipt'],
								d_azp_fct_scertificate_t_service => $value['lbl_azp_crt_request_data_t_fct_service'],
								d_azp_fct_scertificate_t_value => $value['lbl_azp_crt_capture_t_rcb_amount'],
							);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->insert(t_azp_fct_scertificate, $var_array);
						endforeach;
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_id_azp_fct_scertificate . " AS 'lbl_azp_fct_scertificate_id_azp_fct_scertificate',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_by_created . " AS 'lbl_azp_fct_scertificate_m_by_created',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_by_modified . " AS 'lbl_azp_fct_scertificate_m_by_modified',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_date_created . " AS 'lbl_azp_fct_scertificate_m_date_created',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_date_modified . " AS 'lbl_azp_fct_scertificate_m_date_modified',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_deleted . " AS 'lbl_azp_fct_scertificate_m_deleted',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_description . " AS 'lbl_azp_fct_scertificate_m_description',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_level . " AS 'lbl_azp_fct_scertificate_m_level',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_status . " AS 'lbl_azp_fct_scertificate_m_status',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_temp . " AS 'lbl_azp_fct_scertificate_m_temp',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_client . " AS 'lbl_azp_fct_scertificate_t_client',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_request_nro . " AS 'lbl_azp_fct_scertificate_t_request_nro',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_request_date . " AS 'lbl_azp_fct_scertificate_t_request_date',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_request_send . " AS 'lbl_azp_fct_scertificate_t_request_send',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_identification . " AS 'lbl_azp_fct_scertificate_t_identification',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_full_name . " AS 'lbl_azp_fct_scertificate_t_full_name',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_obligation . " AS 'lbl_azp_fct_scertificate_t_obligation',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_id_ics . " AS 'lbl_azp_fct_scertificate_t_id_ics',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_certificate . " AS 'lbl_azp_fct_scertificate_t_certificate',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_enrollment . " AS 'lbl_azp_fct_scertificate_t_enrollment',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_municipality . " AS 'lbl_azp_fct_scertificate_t_municipality',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_applicant . " AS 'lbl_azp_fct_scertificate_t_applicant',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_bilable . " AS 'lbl_azp_fct_scertificate_t_bilable',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_refundable . " AS 'lbl_azp_fct_scertificate_t_refundable',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_supplier . " AS 'lbl_azp_fct_scertificate_t_supplier',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_receipt . " AS 'lbl_azp_fct_scertificate_t_receipt',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_service . " AS 'lbl_azp_fct_scertificate_t_service',
					tc_azp_fct_scertificate." . d_azp_fct_scertificate_t_value . " AS 'lbl_azp_fct_scertificate_t_value'
				FROM " . t_azp_fct_scertificate . " tc_azp_fct_scertificate
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------					
				WHERE tc_azp_fct_scertificate." . d_azp_fct_scertificate_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				ORDER BY tc_azp_fct_scertificate." . d_azp_fct_scertificate_id_azp_fct_scertificate . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidatud_defunction(string $var_id) {
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->query("DELETE FROM " . t_azp_fct_sdefunction . " WHERE " . d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction, d_azp_fct_satisfaction_v_id_azp_fct_service . " = '2' AND " . d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ")");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_date_since = $value[d_azp_fct_satisfaction_t_date_since];
					$var_date_until = $value[d_azp_fct_satisfaction_t_date_until];
					$var_request = $value[d_azp_fct_satisfaction_t_request];
					$var_value = $value[d_azp_fct_satisfaction_t_value];
					# Seleccionar los registros de la tabla
					$var_sql = $this->db->query("
						SELECT
							tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . " AS 'lbl_azp_gsc_request_id_azp_gsc_request',
							tc_azp_gsc_request." . d_azp_gsc_request_m_by_created . " AS 'lbl_azp_gsc_request_m_by_created',
							tc_azp_gsc_request." . d_azp_gsc_request_m_by_modified . " AS 'lbl_azp_gsc_request_m_by_modified',
							tc_azp_gsc_request." . d_azp_gsc_request_m_date_created . " AS 'lbl_azp_gsc_request_m_date_created',
							tc_azp_gsc_request." . d_azp_gsc_request_m_date_modified . " AS 'lbl_azp_gsc_request_m_date_modified',
							tc_azp_gsc_request." . d_azp_gsc_request_m_deleted . " AS 'lbl_azp_gsc_request_m_deleted',
							tc_azp_gsc_request." . d_azp_gsc_request_m_description . " AS 'lbl_azp_gsc_request_m_description',
							tc_azp_gsc_request." . d_azp_gsc_request_m_level . " AS 'lbl_azp_gsc_request_m_level',
							tc_azp_gsc_request." . d_azp_gsc_request_m_status . " AS 'lbl_azp_gsc_request_m_status',
							tc_azp_gsc_request." . d_azp_gsc_request_m_temp . " AS 'lbl_azp_gsc_request_m_temp',
							tc_azp_gsc_request." . d_azp_gsc_request_s_capture . " AS 'lbl_azp_gsc_request_s_capture',
							tc_azp_gsc_request." . d_azp_gsc_request_s_client . " AS 'lbl_azp_gsc_request_s_client',
							tc_azp_gsc_request." . d_azp_gsc_request_s_code . " AS 'lbl_azp_gsc_request_s_code',
							tc_azp_gsc_request." . d_azp_gsc_request_s_data . " AS 'lbl_azp_gsc_request_s_data',
							tc_azp_gsc_request." . d_azp_gsc_request_s_date . " AS 'lbl_azp_gsc_request_s_date',
							tc_azp_gsc_request." . d_azp_gsc_request_s_duplicate . " AS 'lbl_azp_gsc_request_s_duplicate',
							tc_azp_gsc_request." . d_azp_gsc_request_s_existing . " AS 'lbl_azp_gsc_request_s_existing',
							tc_azp_gsc_request." . d_azp_gsc_request_s_validate . " AS 'lbl_azp_gsc_request_s_validate',
							tc_azp_gsc_request." . d_azp_gsc_request_s_web_service . " AS 'lbl_azp_gsc_request_s_web_service',
							tc_azp_gsc_request." . d_azp_gsc_request_t_city . " AS 'lbl_azp_gsc_request_t_city',
							tc_azp_gsc_request." . d_azp_gsc_request_t_date_associate . " AS 'lbl_azp_gsc_request_t_date_associate',
							tc_azp_gsc_request." . d_azp_gsc_request_t_death_date . " AS 'lbl_azp_gsc_request_t_death_date',
							tc_azp_gsc_request." . d_azp_gsc_request_t_full_name . " AS 'lbl_azp_gsc_request_t_full_name',
							tc_azp_gsc_request." . d_azp_gsc_request_t_id_supplier . " AS 'lbl_azp_gsc_request_t_id_supplier',
							tc_azp_gsc_request." . d_azp_gsc_request_t_identification . " AS 'lbl_azp_gsc_request_t_identification',
							tc_azp_gsc_request." . d_azp_gsc_request_t_notary . " AS 'lbl_azp_gsc_request_t_notary',
							tc_azp_gsc_request." . d_azp_gsc_request_t_number_consecutive . " AS 'lbl_azp_gsc_request_t_number_consecutive',
							tc_azp_gsc_request." . d_azp_gsc_request_t_number_obligation . " AS 'lbl_azp_gsc_request_t_number_obligation',
							tc_azp_gsc_request." . d_azp_gsc_request_t_number_request . " AS 'lbl_azp_gsc_request_t_number_request',
							tc_azp_gsc_request." . d_azp_gsc_request_t_observation . " AS 'lbl_azp_gsc_request_t_observation',
							tc_azp_gsc_request." . d_azp_gsc_request_t_observation_outer . " AS 'lbl_azp_gsc_request_t_observation_outer',
							tc_azp_gsc_request." . d_azp_gsc_request_t_reported_bank . " AS 'lbl_azp_gsc_request_t_reported_bank',
							tc_azp_gsc_request." . d_azp_gsc_request_t_request_by . " AS 'lbl_azp_gsc_request_t_request_by',
							tc_azp_gsc_request." . d_azp_gsc_request_t_request_date . " AS 'lbl_azp_gsc_request_t_request_date',
							tc_azp_gsc_request." . d_azp_gsc_request_t_request_state . " AS 'lbl_azp_gsc_request_t_request_state',
							tc_azp_gsc_request." . d_azp_gsc_request_t_serial . " AS 'lbl_azp_gsc_request_t_serial',
							tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_date . " AS 'lbl_azp_gsc_request_t_shipping_date',
							tc_azp_gsc_request." . d_azp_gsc_request_t_shipping_number . " AS 'lbl_azp_gsc_request_t_shipping_number',
							tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_date . " AS 'lbl_azp_gsc_request_t_supplier_request_date',
							tc_azp_gsc_request." . d_azp_gsc_request_t_supplier_request_number . " AS 'lbl_azp_gsc_request_t_supplier_request_number',
							tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_causal . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_causal',
							tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_client',
							tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_expiration . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_expiration',
							tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_phase . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_phase',
							tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_state . " AS 'lbl_azp_gsc_request_v_id_azp_gsc_state',

							tc_azp_gsc_consignment." . d_azp_gsc_consignment_id_azp_gsc_consignment . " AS 'lbl_azp_gsc_consignment_id_azp_gsc_consignment',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_by_created . " AS 'lbl_azp_gsc_consignment_m_by_created',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_by_modified . " AS 'lbl_azp_gsc_consignment_m_by_modified',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_date_created . " AS 'lbl_azp_gsc_consignment_m_date_created',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_date_modified . " AS 'lbl_azp_gsc_consignment_m_date_modified',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_deleted . " AS 'lbl_azp_gsc_consignment_m_deleted',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_description . " AS 'lbl_azp_gsc_consignment_m_description',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_level . " AS 'lbl_azp_gsc_consignment_m_level',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_status . " AS 'lbl_azp_gsc_consignment_m_status',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_temp . " AS 'lbl_azp_gsc_consignment_m_temp',
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
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_nro_item . " AS 'lbl_azp_gsc_consignment_t_nro_item',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_notary_consigned . " AS 'lbl_azp_gsc_consignment_t_notary_consigned',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_notary_identification . " AS 'lbl_azp_gsc_consignment_t_notary_identification',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_notary_receipt . " AS 'lbl_azp_gsc_consignment_t_notary_receipt',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_notary_success . " AS 'lbl_azp_gsc_consignment_t_notary_success',
							tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . " AS 'lbl_azp_gsc_consignment_v_id_azp_gsc_request',

							tc_azp_gsc_client." . d_azp_gsc_client_t_name . " AS 'lbl_azp_gsc_client_t_name',
							tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name'


						FROM " . t_azp_gsc_consignment . " tc_azp_gsc_consignment
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_gsc_request . " tc_azp_gsc_request
						    ON tc_azp_gsc_consignment." . d_azp_gsc_consignment_v_id_azp_gsc_request . "
								= tc_azp_gsc_request." . d_azp_gsc_request_id_azp_gsc_request . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_gsc_client . " tc_azp_gsc_client
						    ON tc_azp_gsc_request." . d_azp_gsc_request_v_id_azp_gsc_client . "
								= tc_azp_gsc_client." . d_azp_gsc_client_id_azp_gsc_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
						    ON tc_azp_gsc_client." . d_azp_gsc_client_v_id_azp_fct_client . "
								= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						-- ------------------------------------------------------------------------    
						WHERE  tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_value_total . " > '0'
							AND (tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . " >= '" . $var_date_since . "'
								AND tc_azp_gsc_consignment." . d_azp_gsc_consignment_t_consignment_date . " <= '" . $var_date_until . "')
						-- ------------------------------------------------------------------------
						-- ORDER BY tc_azp_gsc_consignment." . d_azp_gsc_consignment_m_date_modified . " ASC
					");
					#-------------------------------------------------------------------------#
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						foreach ($var_sql as $key => $value):

							$var_item = $value['lbl_azp_gsc_consignment_t_consignment_item'];
							if ($var_item != '') {
								$var_explode = explode('_', $var_item);
								$empty_item = $var_explode[1];
							} else { $empty_item = '0'; }

							if ($value['lbl_azp_gsc_consignment_t_notary_success'] == 'Si') {
								$var_to_consigned = $value['lbl_azp_gsc_consignment_t_notary_consigned'];
								$var_nit_identification = $value['lbl_azp_gsc_consignment_t_notary_identification'];
								$var_nro_receipt = $value['lbl_azp_gsc_consignment_t_notary_receipt'];
							} else {
								$var_to_consigned = $value['lbl_azp_gsc_consignment_t_to_consigned'];
								$var_nit_identification = $value['lbl_azp_gsc_consignment_t_nit_identification'];
								$var_nro_receipt = $value['lbl_azp_gsc_consignment_t_nro_receipt'];
							}
							
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_fct_sdefunction_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_fct_sdefunction_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_fct_sdefunction_m_date_created => DATE_HOUR,
								d_azp_fct_sdefunction_m_date_modified => DATE_HOUR,
								d_azp_fct_sdefunction_m_deleted => '1',
								d_azp_fct_sdefunction_m_description => '',
								d_azp_fct_sdefunction_m_level => '2',
								d_azp_fct_sdefunction_m_status => '1',
								d_azp_fct_sdefunction_m_temp => '1',
								d_azp_fct_sdefunction_t_item => $empty_item,
								d_azp_fct_sdefunction_t_client => $value['lbl_azp_fct_client_t_name'],
								d_azp_fct_sdefunction_t_request_nro => $value['lbl_azp_gsc_request_t_number_request'],
								d_azp_fct_sdefunction_t_request_date => $value['lbl_azp_gsc_request_t_request_date'],
								d_azp_fct_sdefunction_t_request_send => $value['lbl_azp_gsc_request_t_shipping_date'],
								d_azp_fct_sdefunction_t_identification => $value['lbl_azp_gsc_request_t_identification'],
								d_azp_fct_sdefunction_t_full_name => $value['lbl_azp_gsc_request_t_full_name'],
								d_azp_fct_sdefunction_t_obligation => $value['lbl_azp_gsc_request_t_number_obligation'],
								d_azp_fct_sdefunction_t_municipality => $value['lbl_azp_gsc_request_t_city'],
								d_azp_fct_sdefunction_t_serial => $value['lbl_azp_gsc_request_t_serial'],
								d_azp_fct_sdefunction_t_notary => $value['lbl_azp_gsc_request_t_notary'],

								d_azp_fct_sdefunction_t_tconsigned => $value['lbl_azp_gsc_consignment_t_to_consigned'],
								d_azp_fct_sdefunction_t_tidentification => $value['lbl_azp_gsc_consignment_t_account_number'],
								d_azp_fct_sdefunction_t_treceipt => $value['lbl_azp_gsc_consignment_t_nro_receipt'],

								d_azp_fct_sdefunction_t_con_full_name => $var_to_consigned,
								d_azp_fct_sdefunction_t_con_identification => $var_nit_identification,
								d_azp_fct_sdefunction_t_con_entity => $value['lbl_azp_gsc_consignment_t_consigned_entity'],
								d_azp_fct_sdefunction_t_date => $value['lbl_azp_gsc_consignment_t_consignment_date'],
								d_azp_fct_sdefunction_t_receipt => $var_nro_receipt,
								d_azp_fct_sdefunction_t_value => $value['lbl_azp_gsc_consignment_t_value_total'],
								d_azp_fct_sdefunction_t_consignment => $value['lbl_azp_gsc_consignment_t_closed_value'],
								d_azp_fct_sdefunction_t_formula => '0',
								d_azp_fct_sdefunction_t_id_gsc_request => $value['lbl_azp_gsc_consignment_v_id_azp_gsc_request'],
								d_azp_fct_sdefunction_t_notary_success => $value['lbl_azp_gsc_consignment_t_notary_success'],
							);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->insert(t_azp_fct_sdefunction, $var_array);
						endforeach;
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select("MAX(" . d_azp_fct_sdefunction_id_azp_fct_sdefunction . ") AS 'lbl_max'", t_azp_fct_sdefunction,
				d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'" . " " .
				"GROUP BY " . d_azp_fct_sdefunction_t_date . " ASC, " .
				d_azp_fct_sdefunction_t_tidentification . " ASC, " .
				d_azp_fct_sdefunction_t_notary_success . " ASC, " .
				d_azp_fct_sdefunction_t_value . " ASC"
				//d_azp_fct_sdefunction_t_municipality . " ASC"
			);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_id = $value['lbl_max'];
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_fct_sdefunction_t_formula => '1',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_id_azp_fct_sdefunction . " = '" . $var_id . "'");
				endforeach;
			}
			# Array para asignar argumentos o valores a los elementos
			$var_array = array(d_azp_fct_sdefunction_t_consignment => '',);
			# Query Sql Update: Actualizar valores de la tabla segun sus campos
			$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fct_sdefunction_t_formula . " = '0'");
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select("*, COUNT(*) AS 'lbl_count'",
				t_azp_fct_sdefunction, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
				d_azp_fct_sdefunction_t_notary_success . " = 'Si' GROUP BY " . d_azp_fct_sdefunction_t_id_gsc_request . " ASC, " . d_azp_fct_sdefunction_t_con_full_name . " ASC"
			);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					//$var_id = $value['lbl_id'];
					$var_ct = $value['lbl_count'];
					//if ($var_ct > 1) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_fct_sdefunction_t_con_full_name => $value[d_azp_fct_sdefunction_t_con_full_name],
							d_azp_fct_sdefunction_t_con_identification => $value[d_azp_fct_sdefunction_t_con_identification],
							d_azp_fct_sdefunction_t_date => $value[d_azp_fct_sdefunction_t_date],
							d_azp_fct_sdefunction_t_receipt => $value[d_azp_fct_sdefunction_t_receipt],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_t_id_gsc_request . " = '" . $value[d_azp_fct_sdefunction_t_id_gsc_request] . "'");
					//}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select("*, COUNT(*) AS 'lbl_count'",
				t_azp_fct_sdefunction, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
				d_azp_fct_sdefunction_t_notary_success . " = 'No' GROUP BY " . d_azp_fct_sdefunction_t_id_gsc_request . " ASC, " . d_azp_fct_sdefunction_t_con_full_name . " ASC"
			);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					//$var_id = $value['lbl_id'];
					$var_ct = $value['lbl_count'];
					//if ($var_ct > 1) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_fct_sdefunction_t_date => $value[d_azp_fct_sdefunction_t_date],);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_t_id_gsc_request . " = '" . $value[d_azp_fct_sdefunction_t_id_gsc_request] . "'");
					//}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select(d_azp_fct_sdefunction_id_azp_fct_sdefunction. " AS 'lbl_id', COUNT(*) AS 'lbl_count'",
				t_azp_fct_sdefunction, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'" . " " .
				"GROUP BY " . d_azp_fct_sdefunction_t_id_gsc_request . " ASC, " . d_azp_fct_sdefunction_t_con_full_name . " ASC"
			);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_id = $value['lbl_id'];
					$var_ct = $value['lbl_count'];
					if ($var_ct > 1) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_fct_sdefunction_t_con_full_name => 'eliminar',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_id_azp_fct_sdefunction . " = '" . $var_id . "'");
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select(d_azp_fct_sdefunction_id_azp_fct_sdefunction. " AS 'lbl_id', COUNT(*) AS 'lbl_count'",
				t_azp_fct_sdefunction, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'" . " " .
				"GROUP BY " . d_azp_fct_sdefunction_t_id_gsc_request . " ASC, " . d_azp_fct_sdefunction_t_con_identification . " ASC"
			);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_id = $value['lbl_id'];
					$var_ct = $value['lbl_count'];
					if ($var_ct > 1) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_fct_sdefunction_t_con_identification => 'eliminar',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_id_azp_fct_sdefunction . " = '" . $var_id . "'");
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select(d_azp_fct_sdefunction_id_azp_fct_sdefunction. " AS 'lbl_id', COUNT(*) AS 'lbl_count'",
				t_azp_fct_sdefunction, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'" . " " .
				"GROUP BY " . d_azp_fct_sdefunction_t_id_gsc_request . " ASC, " . d_azp_fct_sdefunction_t_date . " ASC"
			);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_id = $value['lbl_id'];
					$var_ct = $value['lbl_count'];
					if ($var_ct > 1) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_fct_sdefunction_t_date => 'eliminar',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_id_azp_fct_sdefunction . " = '" . $var_id . "'");
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select(d_azp_fct_sdefunction_id_azp_fct_sdefunction. " AS 'lbl_id', COUNT(*) AS 'lbl_count'",
				t_azp_fct_sdefunction, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'" . " " .
				"GROUP BY " . d_azp_fct_sdefunction_t_id_gsc_request . " ASC, " . d_azp_fct_sdefunction_t_receipt . " ASC"
			);
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_id = $value['lbl_id'];
					$var_ct = $value['lbl_count'];
					if ($var_ct > 1) {
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_fct_sdefunction_t_receipt => 'eliminar',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_fct_sdefunction, $var_array, d_azp_fct_sdefunction_id_azp_fct_sdefunction . " = '" . $var_id . "'");
					}
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select("SUM(" . d_azp_fct_sdefunction_t_consignment . ") AS 'lbl_sum'", t_azp_fct_sdefunction, d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (true == $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key => $value):
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_fct_sdefunction_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_fct_sdefunction_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_fct_sdefunction_m_date_created => DATE_HOUR,
						d_azp_fct_sdefunction_m_date_modified => DATE_HOUR,
						d_azp_fct_sdefunction_m_deleted => '1',
						d_azp_fct_sdefunction_m_description => '',
						d_azp_fct_sdefunction_m_level => '2',
						d_azp_fct_sdefunction_m_status => '1',
						d_azp_fct_sdefunction_m_temp => '1',
						d_azp_fct_sdefunction_t_item => '99999',
						d_azp_fct_sdefunction_t_client => '',
						d_azp_fct_sdefunction_t_request_nro => '',
						d_azp_fct_sdefunction_t_request_date => '',
						d_azp_fct_sdefunction_t_request_send => '',
						d_azp_fct_sdefunction_t_identification => '',
						d_azp_fct_sdefunction_t_full_name => '',
						d_azp_fct_sdefunction_t_obligation => '',
						d_azp_fct_sdefunction_t_municipality => '',
						d_azp_fct_sdefunction_t_serial => '',
						d_azp_fct_sdefunction_t_notary => '',
						d_azp_fct_sdefunction_t_con_full_name => 'eliminar',
						d_azp_fct_sdefunction_t_con_identification => 'eliminar',
						d_azp_fct_sdefunction_t_con_entity => '',
						d_azp_fct_sdefunction_t_date => 'eliminar',
						d_azp_fct_sdefunction_t_receipt => 'eliminar',
						d_azp_fct_sdefunction_t_value => '0',
						d_azp_fct_sdefunction_t_consignment => $value['lbl_sum'],
						d_azp_fct_sdefunction_t_formula => '2',
						d_azp_fct_sdefunction_t_id_gsc_request => '0',
						d_azp_fct_sdefunction_t_notary_success => '',
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_fct_sdefunction, $var_array);
				endforeach;
			}
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_id_azp_fct_sdefunction . " AS 'lbl_azp_fct_sdefunction_id_azp_fct_sdefunction',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_created . " AS 'lbl_azp_fct_sdefunction_m_by_created',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_modified . " AS 'lbl_azp_fct_sdefunction_m_by_modified',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_date_created . " AS 'lbl_azp_fct_sdefunction_m_date_created',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_date_modified . " AS 'lbl_azp_fct_sdefunction_m_date_modified',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_deleted . " AS 'lbl_azp_fct_sdefunction_m_deleted',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_description . " AS 'lbl_azp_fct_sdefunction_m_description',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_level . " AS 'lbl_azp_fct_sdefunction_m_level',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_status . " AS 'lbl_azp_fct_sdefunction_m_status',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_temp . " AS 'lbl_azp_fct_sdefunction_m_temp',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_item . " AS 'lbl_azp_fct_sdefunction_t_item',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_client . " AS 'lbl_azp_fct_sdefunction_t_client',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_request_nro . " AS 'lbl_azp_fct_sdefunction_t_request_nro',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_request_date . " AS 'lbl_azp_fct_sdefunction_t_request_date',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_request_send . " AS 'lbl_azp_fct_sdefunction_t_request_send',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_identification . " AS 'lbl_azp_fct_sdefunction_t_identification',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_full_name . " AS 'lbl_azp_fct_sdefunction_t_full_name',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_obligation . " AS 'lbl_azp_fct_sdefunction_t_obligation',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_municipality . " AS 'lbl_azp_fct_sdefunction_t_municipality',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_serial . " AS 'lbl_azp_fct_sdefunction_t_serial',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_notary . " AS 'lbl_azp_fct_sdefunction_t_notary',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_con_full_name . ") AS 'lbl_azp_fct_sdefunction_t_con_full_name',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_con_identification . ") AS 'lbl_azp_fct_sdefunction_t_con_identification',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_con_entity . " AS 'lbl_azp_fct_sdefunction_t_con_entity',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_date . ") AS 'lbl_azp_fct_sdefunction_t_date',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_receipt . ") AS 'lbl_azp_fct_sdefunction_t_receipt',
					SUM(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_value . ") AS 'lbl_azp_fct_sdefunction_t_value',
					SUM(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_consignment . ") AS 'lbl_azp_fct_sdefunction_t_consignment'
				FROM " . t_azp_fct_sdefunction . " tc_azp_fct_sdefunction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				-- ---------------------------------------------------------------
				GROUP BY tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_id_gsc_request . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_tidentification . " ASC
				-- ---------------------------------------------------------------
				ORDER BY
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_date . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_item . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_tidentification . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_tconsigned . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_id_gsc_request . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_value . " ASC
					-- tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_municipality . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidatud_defunction_all() {
			# Verificar en la base de datos si existen el registro
			return $this->db->query("
				SELECT
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_id_azp_fct_sdefunction . " AS 'lbl_azp_fct_sdefunction_id_azp_fct_sdefunction',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_created . " AS 'lbl_azp_fct_sdefunction_m_by_created',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_modified . " AS 'lbl_azp_fct_sdefunction_m_by_modified',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_date_created . " AS 'lbl_azp_fct_sdefunction_m_date_created',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_date_modified . " AS 'lbl_azp_fct_sdefunction_m_date_modified',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_deleted . " AS 'lbl_azp_fct_sdefunction_m_deleted',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_description . " AS 'lbl_azp_fct_sdefunction_m_description',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_level . " AS 'lbl_azp_fct_sdefunction_m_level',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_status . " AS 'lbl_azp_fct_sdefunction_m_status',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_temp . " AS 'lbl_azp_fct_sdefunction_m_temp',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_item . " AS 'lbl_azp_fct_sdefunction_t_item',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_client . " AS 'lbl_azp_fct_sdefunction_t_client',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_request_nro . " AS 'lbl_azp_fct_sdefunction_t_request_nro',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_request_date . " AS 'lbl_azp_fct_sdefunction_t_request_date',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_request_send . " AS 'lbl_azp_fct_sdefunction_t_request_send',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_identification . " AS 'lbl_azp_fct_sdefunction_t_identification',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_full_name . " AS 'lbl_azp_fct_sdefunction_t_full_name',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_obligation . " AS 'lbl_azp_fct_sdefunction_t_obligation',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_municipality . " AS 'lbl_azp_fct_sdefunction_t_municipality',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_serial . " AS 'lbl_azp_fct_sdefunction_t_serial',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_notary . " AS 'lbl_azp_fct_sdefunction_t_notary',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_con_full_name . ") AS 'lbl_azp_fct_sdefunction_t_con_full_name',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_con_identification . ") AS 'lbl_azp_fct_sdefunction_t_con_identification',
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_con_entity . " AS 'lbl_azp_fct_sdefunction_t_con_entity',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_date . ") AS 'lbl_azp_fct_sdefunction_t_date',
					GROUP_CONCAT(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_receipt . ") AS 'lbl_azp_fct_sdefunction_t_receipt',
					SUM(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_value . ") AS 'lbl_azp_fct_sdefunction_t_value',
					SUM(tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_consignment . ") AS 'lbl_azp_fct_sdefunction_t_consignment'
				FROM " . t_azp_fct_sdefunction . " tc_azp_fct_sdefunction
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_m_by_created . " = '2'
				ORDER BY tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_tidentification . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_tconsigned . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_date . " ASC,
					tc_azp_fct_sdefunction." . d_azp_fct_sdefunction_t_formula . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidatud_investigation_cam(string $var_id) {
			# Defincion de valores a nuevas variables
			$var_acount = 0;
			#-------------------------------------------------------------------------#
			# Valores del array vacios
			$var_fmodule = '';
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction,
				d_azp_fct_satisfaction_t_module . " = 'CAMARAS' AND " .
				d_azp_fct_satisfaction_v_id_azp_fct_service . " = '3' AND " .
				d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ")");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_fmodule = $value[d_azp_fct_satisfaction_t_module]; endforeach; }
			# Convertir elementos de un array en string
			//$var_implode = implode(",", $var_fmodule);
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction,
				d_azp_fct_satisfaction_v_id_azp_fct_service . " = '3' AND " .
				d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ") AND " .
				d_azp_fct_satisfaction_t_module . " = 'CAMARAS'"
			);
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_item = $var_acount += 1;
					$var_relation = $value[d_azp_fct_satisfaction_v_id_azp_fct_relation];
					#-------------------------------------------------------------------------#
					# Seleccionar los registros de la tabla
					$var_sql = $this->db->query("
						SELECT
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
							tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
							tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " AS 'lbl_azp_ibn_camera_id_azp_ibn_camera',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_created . " AS 'lbl_azp_ibn_camera_m_by_created',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_modified . " AS 'lbl_azp_ibn_camera_m_by_modified',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_created . " AS 'lbl_azp_ibn_camera_m_date_created',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_modified . " AS 'lbl_azp_ibn_camera_m_date_modified',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_deleted . " AS 'lbl_azp_ibn_camera_m_deleted',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_description . " AS 'lbl_azp_ibn_camera_m_description',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_level . " AS 'lbl_azp_ibn_camera_m_level',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_status . " AS 'lbl_azp_ibn_camera_m_status',
							tc_azp_ibn_camera." . d_azp_ibn_camera_m_temp . " AS 'lbl_azp_ibn_camera_m_temp',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_validate . " AS 'lbl_azp_ibn_camera_t_validate',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_acount . " AS 'lbl_azp_ibn_camera_t_acount',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_bcount . " AS 'lbl_azp_ibn_camera_t_bcount',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_act_economic . " AS 'lbl_azp_ibn_camera_t_act_economic',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_address . " AS 'lbl_azp_ibn_camera_t_address',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_assessment . " AS 'lbl_azp_ibn_camera_t_assessment',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_business_name . " AS 'lbl_azp_ibn_camera_t_business_name',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_causal_feasibility . " AS 'lbl_azp_ibn_camera_t_causal_feasibility',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_city . " AS 'lbl_azp_ibn_camera_t_city',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_comment_legal . " AS 'lbl_azp_ibn_camera_t_comment_legal',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_concept . " AS 'lbl_azp_ibn_camera_t_concept',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_consecutive . " AS 'lbl_azp_ibn_camera_t_consecutive',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_department . " AS 'lbl_azp_ibn_camera_t_department',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_establishment . " AS 'lbl_azp_ibn_camera_t_establishment',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_full_name . " AS 'lbl_azp_ibn_camera_t_full_name',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_identification . " AS 'lbl_azp_ibn_camera_t_identification',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_representative . " AS 'lbl_azp_ibn_camera_t_legal_representative',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_rp_certificate . " AS 'lbl_azp_ibn_camera_t_legal_rp_certificate',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_limitation . " AS 'lbl_azp_ibn_camera_t_limitation',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_municipality . " AS 'lbl_azp_ibn_camera_t_municipality',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_nit . " AS 'lbl_azp_ibn_camera_t_nit',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_nro_registration . " AS 'lbl_azp_ibn_camera_t_nro_registration',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_observation . " AS 'lbl_azp_ibn_camera_t_observation',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_phone . " AS 'lbl_azp_ibn_camera_t_phone',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_policy_effective . " AS 'lbl_azp_ibn_camera_t_policy_effective',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_policy_final . " AS 'lbl_azp_ibn_camera_t_policy_final',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_policy_viability . " AS 'lbl_azp_ibn_camera_t_policy_viability',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_renewal_date . " AS 'lbl_azp_ibn_camera_t_renewal_date',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_rup . " AS 'lbl_azp_ibn_camera_t_rup',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_total_active . " AS 'lbl_azp_ibn_camera_t_total_active',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_company . " AS 'lbl_azp_ibn_camera_t_type_company',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_organization . " AS 'lbl_azp_ibn_camera_t_type_organization',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_viable . " AS 'lbl_azp_ibn_camera_t_viable',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_well_viable . " AS 'lbl_azp_ibn_camera_t_well_viable',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_year . " AS 'lbl_azp_ibn_camera_t_year',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_returnable . " AS 'lbl_azp_ibn_camera_t_st_returnable',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_receipt . " AS 'lbl_azp_ibn_camera_t_st_receipt',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_date . " AS 'lbl_azp_ibn_camera_t_st_date',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_value . " AS 'lbl_azp_ibn_camera_t_st_value',
							tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_control_panel',
							tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_state',
							tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_certified . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_type_certified',
							tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_type_concept',

							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_created . " AS 'lbl_azp_ibn_control_panel_m_by_created',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_modified . " AS 'lbl_azp_ibn_control_panel_m_by_modified',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_created . " AS 'lbl_azp_ibn_control_panel_m_date_created',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_modified . " AS 'lbl_azp_ibn_control_panel_m_date_modified',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " AS 'lbl_azp_ibn_control_panel_m_deleted',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_description . " AS 'lbl_azp_ibn_control_panel_m_description',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_level . " AS 'lbl_azp_ibn_control_panel_m_level',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_status . " AS 'lbl_azp_ibn_control_panel_m_status',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_temp . " AS 'lbl_azp_ibn_control_panel_m_temp',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_s_date . " AS 'lbl_azp_ibn_control_panel_s_date',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_camera . " AS 'lbl_azp_ibn_control_panel_t_count_camera',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_furniture . " AS 'lbl_azp_ibn_control_panel_t_count_furniture',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_property . " AS 'lbl_azp_ibn_control_panel_t_count_property',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_vehicle . " AS 'lbl_azp_ibn_control_panel_t_count_vehicle',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_warranty . " AS 'lbl_azp_ibn_control_panel_t_count_warranty',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_arrival . " AS 'lbl_azp_ibn_control_panel_t_date_arrival',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_final . " AS 'lbl_azp_ibn_control_panel_t_date_final',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'lbl_azp_ibn_control_panel_t_date_general',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_load . " AS 'lbl_azp_ibn_control_panel_t_date_load',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_reply . " AS 'lbl_azp_ibn_control_panel_t_date_reply',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_document . " AS 'lbl_azp_ibn_control_panel_t_document',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_encode . " AS 'lbl_azp_ibn_control_panel_t_encode',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_entity . " AS 'lbl_azp_ibn_control_panel_t_entity',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_finished . " AS 'lbl_azp_ibn_control_panel_t_finished',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_camera . " AS 'lbl_azp_ibn_control_panel_t_mod_camera',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_furniture . " AS 'lbl_azp_ibn_control_panel_t_mod_furniture',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_property . " AS 'lbl_azp_ibn_control_panel_t_mod_property',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_vehicle . " AS 'lbl_azp_ibn_control_panel_t_mod_vehicle',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_warranty . " AS 'lbl_azp_ibn_control_panel_t_mod_warranty',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_register . " AS 'lbl_azp_ibn_control_panel_t_register',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_route . " AS 'lbl_azp_ibn_control_panel_t_route',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " AS 'lbl_azp_ibn_control_panel_t_state',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_control_panel_v_id_azp_ibn_client',

							tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . " AS 'lbl_azp_ibn_data_main_m_by_created',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . " AS 'lbl_azp_ibn_data_main_m_by_modified',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " AS 'lbl_azp_ibn_data_main_m_deleted',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . " AS 'lbl_azp_ibn_data_main_m_level',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . " AS 'lbl_azp_ibn_data_main_m_status',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_temp . " AS 'lbl_azp_ibn_data_main_m_temp',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . " AS 'lbl_azp_ibn_data_main_t_acount',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_bcount . " AS 'lbl_azp_ibn_data_main_t_bcount',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_base . " AS 'lbl_azp_ibn_data_main_t_coincidence_base',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_date . " AS 'lbl_azp_ibn_data_main_t_coincidence_date',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coverage . " AS 'lbl_azp_ibn_data_main_t_coverage',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_cam',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_fur',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_pro',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_veh',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_war',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_cam',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_fur',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_pro',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_veh',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_war',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel',

							tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
							tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name'
						FROM " . t_azp_ibn_camera . " tc_azp_ibn_camera
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_user . " tc_azp_user_created
						    ON tc_azp_ibn_camera.m_by_created
								= tc_azp_user_created.id_azp_user
						INNER JOIN " . t_azp_user . " tc_azp_user_modified
						    ON tc_azp_ibn_camera.m_by_modified
								= tc_azp_user_modified.id_azp_user
						INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
						    ON tc_azp_ibn_camera.m_level
								= tc_azp_sys_level.t_value
						INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
						    ON tc_azp_ibn_camera.m_status
								= tc_azp_sys_state.t_value
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
						    ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . "
								= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						    ON tc_azp_ibn_camera." . d_azp_ibn_camera_t_acount . "
								= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
						    ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . "
								= tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_relation . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						    ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
						    ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
								= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
						    ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_state . "
								= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
						-- ------------------------------------------------------------------------
						WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
							AND tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_relation . "'
							-- AND tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_located ." = 'NO'
							AND tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_returnable ." = 'SI'
							AND tc_azp_ibn_camera." . d_azp_ibn_vehicle_t_st_value . " > 0
							AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " = 'CAMARAS'
						-- ------------------------------------------------------------------------ 
						GROUP BY tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " ASC,
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_acount . " ASC
						-- ------------------------------------------------------------------------
						ORDER BY tc_azp_ibn_camera." . d_azp_ibn_camera_t_consecutive . " ASC
					");
					#-------------------------------------------------------------------------#
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						foreach ($var_sql as $key => $value):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_fct_sinvestigation_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_fct_sinvestigation_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_fct_sinvestigation_m_date_created => DATE_HOUR,
								d_azp_fct_sinvestigation_m_date_modified => DATE_HOUR,
								d_azp_fct_sinvestigation_m_deleted => '1',
								d_azp_fct_sinvestigation_m_description => '',
								d_azp_fct_sinvestigation_m_level => '2',
								d_azp_fct_sinvestigation_m_status => '1',
								d_azp_fct_sinvestigation_m_temp => '1',
								d_azp_fct_sinvestigation_t_item => $var_item,
								d_azp_fct_sinvestigation_t_client => $value['lbl_azp_fct_client_t_name'],
								d_azp_fct_sinvestigation_t_request_nro => $value['lbl_azp_ibn_control_panel_t_code_research'],
								d_azp_fct_sinvestigation_t_request_date => $value['lbl_azp_ibn_control_panel_t_date_arrival'],
								d_azp_fct_sinvestigation_t_request_send => $value['lbl_azp_ibn_control_panel_t_date_general'],
								d_azp_fct_sinvestigation_t_identification => $value['lbl_azp_ibn_camera_t_identification'],
								d_azp_fct_sinvestigation_t_full_name => $value['lbl_azp_ibn_camera_t_full_name'],
								d_azp_fct_sinvestigation_t_obligation => $value['lbl_azp_ibn_data_main_t_nro_obligation'],
								d_azp_fct_sinvestigation_t_id_client => $value['lbl_azp_ibn_data_main_t_code'],
								d_azp_fct_sinvestigation_t_municipality => $value['lbl_azp_ibn_camera_t_city'],
								d_azp_fct_sinvestigation_t_consecutive => $value['lbl_azp_ibn_camera_t_consecutive'],
								d_azp_fct_sinvestigation_t_enrollment => $value['lbl_azp_ibn_camera_t_nro_registration'],
								d_azp_fct_sinvestigation_t_quality => $value['lbl_azp_ibn_camera_t_st_returnable'],
								d_azp_fct_sinvestigation_t_certificate => $value['lbl_azp_fct_satisfaction_t_module'],
								d_azp_fct_sinvestigation_t_receipt => $value['lbl_azp_ibn_camera_t_st_receipt'],
								d_azp_fct_sinvestigation_t_value => $value['lbl_azp_ibn_camera_t_st_value'],
								d_azp_fct_sinvestigation_t_state => $value['lbl_azp_ibn_state_t_name'],
							);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->insert(t_azp_fct_sinvestigation, $var_array);
						endforeach;
					}
				endforeach;
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidatud_investigation_pro(string $var_id) {
			# Defincion de valores a nuevas variables
			$var_acount = 0;
			#-------------------------------------------------------------------------#
			# Valores del array vacios
			$var_fmodule = '';
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction,
				d_azp_fct_satisfaction_t_module . " = 'INMUEBLES' AND " .
				d_azp_fct_satisfaction_v_id_azp_fct_service . " = '3' AND " .
				d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ")");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_fmodule = $value[d_azp_fct_satisfaction_t_module]; endforeach; }
			# Convertir elementos de un array en string
			//$var_implode = implode(",", $var_fmodule);
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction,
				d_azp_fct_satisfaction_v_id_azp_fct_service . " = '3' AND " .
				d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ") AND " .
				d_azp_fct_satisfaction_t_module . " = 'INMUEBLES'"
			);
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_item = $var_acount += 1;
					$var_relation = $value[d_azp_fct_satisfaction_v_id_azp_fct_relation];
					#-------------------------------------------------------------------------#
					# Seleccionar los registros de la tabla
					$var_sql = $this->db->query("
						SELECT
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
							tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
							tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " AS 'lbl_azp_ibn_property_id_azp_ibn_property',
							tc_azp_ibn_property." . d_azp_ibn_property_m_by_created . " AS 'lbl_azp_ibn_property_m_by_created',
							tc_azp_ibn_property." . d_azp_ibn_property_m_by_modified . " AS 'lbl_azp_ibn_property_m_by_modified',
							tc_azp_ibn_property." . d_azp_ibn_property_m_date_created . " AS 'lbl_azp_ibn_property_m_date_created',
							tc_azp_ibn_property." . d_azp_ibn_property_m_date_modified . " AS 'lbl_azp_ibn_property_m_date_modified',
							tc_azp_ibn_property." . d_azp_ibn_property_m_deleted . " AS 'lbl_azp_ibn_property_m_deleted',
							tc_azp_ibn_property." . d_azp_ibn_property_m_description . " AS 'lbl_azp_ibn_property_m_description',
							tc_azp_ibn_property." . d_azp_ibn_property_m_level . " AS 'lbl_azp_ibn_property_m_level',
							tc_azp_ibn_property." . d_azp_ibn_property_m_status . " AS 'lbl_azp_ibn_property_m_status',
							tc_azp_ibn_property." . d_azp_ibn_property_m_temp . " AS 'lbl_azp_ibn_property_m_temp',
							tc_azp_ibn_property." . d_azp_ibn_property_t_load_data . " AS 'lbl_azp_ibn_property_t_load_data',
							tc_azp_ibn_property." . d_azp_ibn_property_t_validate . " AS 'lbl_azp_ibn_property_t_validate',
							tc_azp_ibn_property." . d_azp_ibn_property_t_acount . " AS 'lbl_azp_ibn_property_t_acount',
							tc_azp_ibn_property." . d_azp_ibn_property_t_bcount . " AS 'lbl_azp_ibn_property_t_bcount',
							tc_azp_ibn_property." . d_azp_ibn_property_t_address . " AS 'lbl_azp_ibn_property_t_address',
							tc_azp_ibn_property." . d_azp_ibn_property_t_area . " AS 'lbl_azp_ibn_property_t_area',
							tc_azp_ibn_property." . d_azp_ibn_property_t_assessment . " AS 'lbl_azp_ibn_property_t_assessment',
							tc_azp_ibn_property." . d_azp_ibn_property_t_causal_feasibility . " AS 'lbl_azp_ibn_property_t_causal_feasibility',
							tc_azp_ibn_property." . d_azp_ibn_property_t_comment_legal . " AS 'lbl_azp_ibn_property_t_comment_legal',
							tc_azp_ibn_property." . d_azp_ibn_property_t_concept . " AS 'lbl_azp_ibn_property_t_concept',
							tc_azp_ibn_property." . d_azp_ibn_property_t_consecutive . " AS 'lbl_azp_ibn_property_t_consecutive',
							tc_azp_ibn_property." . d_azp_ibn_property_t_department . " AS 'lbl_azp_ibn_property_t_department',
							tc_azp_ibn_property." . d_azp_ibn_property_t_full_name . " AS 'lbl_azp_ibn_property_t_full_name',
							tc_azp_ibn_property." . d_azp_ibn_property_t_identification . " AS 'lbl_azp_ibn_property_t_identification',
							tc_azp_ibn_property." . d_azp_ibn_property_t_limitation . " AS 'lbl_azp_ibn_property_t_limitation',
							tc_azp_ibn_property." . d_azp_ibn_property_t_market_value . " AS 'lbl_azp_ibn_property_t_market_value',
							tc_azp_ibn_property." . d_azp_ibn_property_t_municipality . " AS 'lbl_azp_ibn_property_t_municipality',
							tc_azp_ibn_property." . d_azp_ibn_property_t_nro_registration . " AS 'lbl_azp_ibn_property_t_nro_registration',
							tc_azp_ibn_property." . d_azp_ibn_property_t_observation . " AS 'lbl_azp_ibn_property_t_observation',
							tc_azp_ibn_property." . d_azp_ibn_property_t_ownership . " AS 'lbl_azp_ibn_property_t_ownership',
							tc_azp_ibn_property." . d_azp_ibn_property_t_policy_effective . " AS 'lbl_azp_ibn_property_t_policy_effective',
							tc_azp_ibn_property." . d_azp_ibn_property_t_policy_final . " AS 'lbl_azp_ibn_property_t_policy_final',
							tc_azp_ibn_property." . d_azp_ibn_property_t_policy_viability . " AS 'lbl_azp_ibn_property_t_policy_viability',
							tc_azp_ibn_property." . d_azp_ibn_property_t_purchase_annotation . " AS 'lbl_azp_ibn_property_t_purchase_annotation',
							tc_azp_ibn_property." . d_azp_ibn_property_t_viable . " AS 'lbl_azp_ibn_property_t_viable',
							tc_azp_ibn_property." . d_azp_ibn_property_t_well_viable . " AS 'lbl_azp_ibn_property_t_well_viable',
							tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable . " AS 'lbl_azp_ibn_property_t_st_returnable',
							tc_azp_ibn_property." . d_azp_ibn_property_t_st_receipt . " AS 'lbl_azp_ibn_property_t_st_receipt',
							tc_azp_ibn_property." . d_azp_ibn_property_t_st_date . " AS 'lbl_azp_ibn_property_t_st_date',
							tc_azp_ibn_property." . d_azp_ibn_property_t_st_value . " AS 'lbl_azp_ibn_property_t_st_value',
							tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_control_panel',
							tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_state',
							tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_type_concept',
							tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_property . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_type_property',

							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_created . " AS 'lbl_azp_ibn_control_panel_m_by_created',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_modified . " AS 'lbl_azp_ibn_control_panel_m_by_modified',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_created . " AS 'lbl_azp_ibn_control_panel_m_date_created',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_modified . " AS 'lbl_azp_ibn_control_panel_m_date_modified',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " AS 'lbl_azp_ibn_control_panel_m_deleted',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_description . " AS 'lbl_azp_ibn_control_panel_m_description',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_level . " AS 'lbl_azp_ibn_control_panel_m_level',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_status . " AS 'lbl_azp_ibn_control_panel_m_status',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_temp . " AS 'lbl_azp_ibn_control_panel_m_temp',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_s_date . " AS 'lbl_azp_ibn_control_panel_s_date',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_camera . " AS 'lbl_azp_ibn_control_panel_t_count_camera',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_furniture . " AS 'lbl_azp_ibn_control_panel_t_count_furniture',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_property . " AS 'lbl_azp_ibn_control_panel_t_count_property',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_vehicle . " AS 'lbl_azp_ibn_control_panel_t_count_vehicle',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_warranty . " AS 'lbl_azp_ibn_control_panel_t_count_warranty',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_arrival . " AS 'lbl_azp_ibn_control_panel_t_date_arrival',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_final . " AS 'lbl_azp_ibn_control_panel_t_date_final',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'lbl_azp_ibn_control_panel_t_date_general',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_load . " AS 'lbl_azp_ibn_control_panel_t_date_load',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_reply . " AS 'lbl_azp_ibn_control_panel_t_date_reply',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_document . " AS 'lbl_azp_ibn_control_panel_t_document',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_encode . " AS 'lbl_azp_ibn_control_panel_t_encode',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_entity . " AS 'lbl_azp_ibn_control_panel_t_entity',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_finished . " AS 'lbl_azp_ibn_control_panel_t_finished',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_camera . " AS 'lbl_azp_ibn_control_panel_t_mod_camera',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_furniture . " AS 'lbl_azp_ibn_control_panel_t_mod_furniture',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_property . " AS 'lbl_azp_ibn_control_panel_t_mod_property',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_vehicle . " AS 'lbl_azp_ibn_control_panel_t_mod_vehicle',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_warranty . " AS 'lbl_azp_ibn_control_panel_t_mod_warranty',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_register . " AS 'lbl_azp_ibn_control_panel_t_register',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_route . " AS 'lbl_azp_ibn_control_panel_t_route',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " AS 'lbl_azp_ibn_control_panel_t_state',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_control_panel_v_id_azp_ibn_client',

							tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . " AS 'lbl_azp_ibn_data_main_m_by_created',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . " AS 'lbl_azp_ibn_data_main_m_by_modified',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " AS 'lbl_azp_ibn_data_main_m_deleted',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . " AS 'lbl_azp_ibn_data_main_m_level',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . " AS 'lbl_azp_ibn_data_main_m_status',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_temp . " AS 'lbl_azp_ibn_data_main_m_temp',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . " AS 'lbl_azp_ibn_data_main_t_acount',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_bcount . " AS 'lbl_azp_ibn_data_main_t_bcount',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_base . " AS 'lbl_azp_ibn_data_main_t_coincidence_base',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_date . " AS 'lbl_azp_ibn_data_main_t_coincidence_date',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coverage . " AS 'lbl_azp_ibn_data_main_t_coverage',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_cam',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_fur',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_pro',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_veh',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_war',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_cam',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_fur',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_pro',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_veh',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_war',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel',

							tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
							tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name'
						FROM " . t_azp_ibn_property . " tc_azp_ibn_property
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_user . " tc_azp_user_created
						    ON tc_azp_ibn_property.m_by_created
								= tc_azp_user_created.id_azp_user
						INNER JOIN " . t_azp_user . " tc_azp_user_modified
						    ON tc_azp_ibn_property.m_by_modified
								= tc_azp_user_modified.id_azp_user
						INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
						    ON tc_azp_ibn_property.m_level
								= tc_azp_sys_level.t_value
						INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
						    ON tc_azp_ibn_property.m_status
								= tc_azp_sys_state.t_value
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
						    ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . "
								= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						    ON tc_azp_ibn_property." . d_azp_ibn_property_t_acount . "
								= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
						    ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . "
								= tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_relation . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						    ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
						    ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
								= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
						    ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_state . "
								= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
						-- ------------------------------------------------------------------------
						WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
							AND tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_relation . "'
							-- AND tc_azp_ibn_property." . d_azp_ibn_property_t_st_located ." = 'NO'
							AND tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable ." = 'SI'
							AND tc_azp_ibn_property." . d_azp_ibn_property_t_st_value . " > 0
							AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " = 'INMUEBLES'
						-- ------------------------------------------------------------------------ 
						GROUP BY tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " ASC,
							tc_azp_ibn_property." . d_azp_ibn_property_t_acount . " ASC
						-- ------------------------------------------------------------------------
						ORDER BY tc_azp_ibn_property." . d_azp_ibn_property_t_consecutive . " ASC
					");
					#-------------------------------------------------------------------------#
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						foreach ($var_sql as $key => $value):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_fct_sinvestigation_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_fct_sinvestigation_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_fct_sinvestigation_m_date_created => DATE_HOUR,
								d_azp_fct_sinvestigation_m_date_modified => DATE_HOUR,
								d_azp_fct_sinvestigation_m_deleted => '1',
								d_azp_fct_sinvestigation_m_description => '',
								d_azp_fct_sinvestigation_m_level => '2',
								d_azp_fct_sinvestigation_m_status => '1',
								d_azp_fct_sinvestigation_m_temp => '1',
								d_azp_fct_sinvestigation_t_item => $var_item,
								d_azp_fct_sinvestigation_t_client => $value['lbl_azp_fct_client_t_name'],
								d_azp_fct_sinvestigation_t_request_nro => $value['lbl_azp_ibn_control_panel_t_code_research'],
								d_azp_fct_sinvestigation_t_request_date => $value['lbl_azp_ibn_control_panel_t_date_arrival'],
								d_azp_fct_sinvestigation_t_request_send => $value['lbl_azp_ibn_control_panel_t_date_general'],
								d_azp_fct_sinvestigation_t_identification => $value['lbl_azp_ibn_property_t_identification'],
								d_azp_fct_sinvestigation_t_full_name => $value['lbl_azp_ibn_property_t_full_name'],
								d_azp_fct_sinvestigation_t_obligation => $value['lbl_azp_ibn_data_main_t_nro_obligation'],
								d_azp_fct_sinvestigation_t_id_client => $value['lbl_azp_ibn_data_main_t_code'],
								d_azp_fct_sinvestigation_t_municipality => $value['lbl_azp_ibn_property_t_municipality'],
								d_azp_fct_sinvestigation_t_consecutive => $value['lbl_azp_ibn_property_t_consecutive'],
								d_azp_fct_sinvestigation_t_enrollment => $value['lbl_azp_ibn_property_t_nro_registration'],
								d_azp_fct_sinvestigation_t_quality => $value['lbl_azp_ibn_property_t_st_returnable'],
								d_azp_fct_sinvestigation_t_certificate => $value['lbl_azp_fct_satisfaction_t_module'],
								d_azp_fct_sinvestigation_t_receipt => $value['lbl_azp_ibn_property_t_st_receipt'],
								d_azp_fct_sinvestigation_t_value => $value['lbl_azp_ibn_property_t_st_value'],
								d_azp_fct_sinvestigation_t_state => $value['lbl_azp_ibn_state_t_name'],
							);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->insert(t_azp_fct_sinvestigation, $var_array);
						endforeach;
					}
				endforeach;
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidatud_investigation_veh(string $var_id) {
			# Defincion de valores a nuevas variables
			$var_acount = 0;
			#-------------------------------------------------------------------------#
			# Valores del array vacios
			$var_fmodule = '';
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction,
				d_azp_fct_satisfaction_t_module . " = 'VEHICULOS' AND " .
				d_azp_fct_satisfaction_v_id_azp_fct_service . " = '3' AND " .
				d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ")");
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_fmodule = $value[d_azp_fct_satisfaction_t_module]; endforeach; }
			# Convertir elementos de un array en string
			//$var_implode = implode(",", $var_fmodule);
			#-------------------------------------------------------------------------#
			# Verificar en la base de datos si existen el registro
			$var_sql = $this->db->select('*', t_azp_fct_satisfaction,
				d_azp_fct_satisfaction_v_id_azp_fct_service . " = '3' AND " .
				d_azp_fct_satisfaction_id_azp_fct_satisfaction . " IN (" . $var_id . ") AND " .
				d_azp_fct_satisfaction_t_module . " = 'VEHICULOS'"
			);
			# Verificar si el resultado de la sql es verdadero o falso
			if (true == $var_sql) {
				foreach ($var_sql as $key => $value):
					# Asignacion de valores a nuevas variables
					$var_item = $var_acount += 1;
					$var_relation = $value[d_azp_fct_satisfaction_v_id_azp_fct_relation];
					#-------------------------------------------------------------------------#
					# Seleccionar los registros de la tabla
					$var_sql = $this->db->query("
						SELECT
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
							tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " AS 'lbl_azp_fct_satisfaction_t_module',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_id_azp_ibn_vehicle . " AS 'lbl_azp_ibn_vehicle_id_azp_ibn_vehicle',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_by_created . " AS 'lbl_azp_ibn_vehicle_m_by_created',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_by_modified . " AS 'lbl_azp_ibn_vehicle_m_by_modified',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_date_created . " AS 'lbl_azp_ibn_vehicle_m_date_created',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_date_modified . " AS 'lbl_azp_ibn_vehicle_m_date_modified',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_deleted . " AS 'lbl_azp_ibn_vehicle_m_deleted',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_description . " AS 'lbl_azp_ibn_vehicle_m_description',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_level . " AS 'lbl_azp_ibn_vehicle_m_level',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_status . " AS 'lbl_azp_ibn_vehicle_m_status',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_m_temp . " AS 'lbl_azp_ibn_vehicle_m_temp',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_load_data . " AS 'lbl_azp_ibn_vehicle_t_load_data',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_validate . " AS 'lbl_azp_ibn_vehicle_t_validate',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_acount . " AS 'lbl_azp_ibn_vehicle_t_acount',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_bcount . " AS 'lbl_azp_ibn_vehicle_t_bcount',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_assessment . " AS 'lbl_azp_ibn_vehicle_t_assessment',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_causal_feasibility . " AS 'lbl_azp_ibn_vehicle_t_causal_feasibility',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_city . " AS 'lbl_azp_ibn_vehicle_t_city',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_class . " AS 'lbl_azp_ibn_vehicle_t_class',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_color . " AS 'lbl_azp_ibn_vehicle_t_color',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_comment_legal . " AS 'lbl_azp_ibn_vehicle_t_comment_legal',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_concept . " AS 'lbl_azp_ibn_vehicle_t_concept',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_consecutive . " AS 'lbl_azp_ibn_vehicle_t_consecutive',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_full_name . " AS 'lbl_azp_ibn_vehicle_t_full_name',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_identification . " AS 'lbl_azp_ibn_vehicle_t_identification',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_limitation . " AS 'lbl_azp_ibn_vehicle_t_limitation',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_line . " AS 'lbl_azp_ibn_vehicle_t_line',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_make_camera . " AS 'lbl_azp_ibn_vehicle_t_make_camera',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_mark . " AS 'lbl_azp_ibn_vehicle_t_mark',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_model . " AS 'lbl_azp_ibn_vehicle_t_model',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_observation . " AS 'lbl_azp_ibn_vehicle_t_observation',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_plaque . " AS 'lbl_azp_ibn_vehicle_t_plaque',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_policy_effective . " AS 'lbl_azp_ibn_vehicle_t_policy_effective',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_policy_final . " AS 'lbl_azp_ibn_vehicle_t_policy_final',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_policy_viability . " AS 'lbl_azp_ibn_vehicle_t_policy_viability',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_service . " AS 'lbl_azp_ibn_vehicle_t_service',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_value_assessment . " AS 'lbl_azp_ibn_vehicle_t_value_assessment',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_value_vehicle . " AS 'lbl_azp_ibn_vehicle_t_value_vehicle',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_viable . " AS 'lbl_azp_ibn_vehicle_t_viable',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_well_viable . " AS 'lbl_azp_ibn_vehicle_t_well_viable',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_returnable . " AS 'lbl_azp_ibn_vehicle_t_st_returnable',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_receipt . " AS 'lbl_azp_ibn_vehicle_t_st_receipt',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_date . " AS 'lbl_azp_ibn_vehicle_t_st_date',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_value . " AS 'lbl_azp_ibn_vehicle_t_st_value',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_vehicle_v_id_azp_ibn_control_panel',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_vehicle_v_id_azp_ibn_state',
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_vehicle_v_id_azp_ibn_type_concept',

							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_created . " AS 'lbl_azp_ibn_control_panel_m_by_created',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_by_modified . " AS 'lbl_azp_ibn_control_panel_m_by_modified',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_created . " AS 'lbl_azp_ibn_control_panel_m_date_created',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_date_modified . " AS 'lbl_azp_ibn_control_panel_m_date_modified',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_deleted . " AS 'lbl_azp_ibn_control_panel_m_deleted',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_description . " AS 'lbl_azp_ibn_control_panel_m_description',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_level . " AS 'lbl_azp_ibn_control_panel_m_level',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_status . " AS 'lbl_azp_ibn_control_panel_m_status',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_m_temp . " AS 'lbl_azp_ibn_control_panel_m_temp',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_s_date . " AS 'lbl_azp_ibn_control_panel_s_date',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_camera . " AS 'lbl_azp_ibn_control_panel_t_count_camera',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_furniture . " AS 'lbl_azp_ibn_control_panel_t_count_furniture',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_property . " AS 'lbl_azp_ibn_control_panel_t_count_property',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_vehicle . " AS 'lbl_azp_ibn_control_panel_t_count_vehicle',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_count_warranty . " AS 'lbl_azp_ibn_control_panel_t_count_warranty',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_arrival . " AS 'lbl_azp_ibn_control_panel_t_date_arrival',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_final . " AS 'lbl_azp_ibn_control_panel_t_date_final',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_general . " AS 'lbl_azp_ibn_control_panel_t_date_general',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_load . " AS 'lbl_azp_ibn_control_panel_t_date_load',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_date_reply . " AS 'lbl_azp_ibn_control_panel_t_date_reply',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_document . " AS 'lbl_azp_ibn_control_panel_t_document',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_encode . " AS 'lbl_azp_ibn_control_panel_t_encode',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_entity . " AS 'lbl_azp_ibn_control_panel_t_entity',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_finished . " AS 'lbl_azp_ibn_control_panel_t_finished',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_camera . " AS 'lbl_azp_ibn_control_panel_t_mod_camera',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_furniture . " AS 'lbl_azp_ibn_control_panel_t_mod_furniture',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_property . " AS 'lbl_azp_ibn_control_panel_t_mod_property',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_vehicle . " AS 'lbl_azp_ibn_control_panel_t_mod_vehicle',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_mod_warranty . " AS 'lbl_azp_ibn_control_panel_t_mod_warranty',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_register . " AS 'lbl_azp_ibn_control_panel_t_register',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_route . " AS 'lbl_azp_ibn_control_panel_t_route',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_state . " AS 'lbl_azp_ibn_control_panel_t_state',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_control_panel_v_id_azp_ibn_client',

							tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . " AS 'lbl_azp_ibn_data_main_m_by_created',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . " AS 'lbl_azp_ibn_data_main_m_by_modified',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " AS 'lbl_azp_ibn_data_main_m_deleted',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . " AS 'lbl_azp_ibn_data_main_m_level',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . " AS 'lbl_azp_ibn_data_main_m_status',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_temp . " AS 'lbl_azp_ibn_data_main_m_temp',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . " AS 'lbl_azp_ibn_data_main_t_acount',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_bcount . " AS 'lbl_azp_ibn_data_main_t_bcount',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_base . " AS 'lbl_azp_ibn_data_main_t_coincidence_base',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coincidence_date . " AS 'lbl_azp_ibn_data_main_t_coincidence_date',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_coverage . " AS 'lbl_azp_ibn_data_main_t_coverage',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_cam',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_fur',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_pro',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_veh',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_e_con_war',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_cam . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_cam',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_fur . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_fur',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_pro . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_pro',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_veh . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_veh',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_con_war . " AS 'lbl_azp_ibn_data_main_t_policy_v_con_war',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
							tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel',

							tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
							tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name'
						FROM " . t_azp_ibn_vehicle . " tc_azp_ibn_vehicle
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_user . " tc_azp_user_created
						    ON tc_azp_ibn_vehicle.m_by_created
								= tc_azp_user_created.id_azp_user
						INNER JOIN " . t_azp_user . " tc_azp_user_modified
						    ON tc_azp_ibn_vehicle.m_by_modified
								= tc_azp_user_modified.id_azp_user
						INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
						    ON tc_azp_ibn_vehicle.m_level
								= tc_azp_sys_level.t_value
						INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
						    ON tc_azp_ibn_vehicle.m_status
								= tc_azp_sys_state.t_value
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
						    ON tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . "
								= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						    ON tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_acount . "
								= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_satisfaction . " tc_azp_fct_satisfaction
						    ON tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . "
								= tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_v_id_azp_fct_relation . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						    ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
						    ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
								= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
						-- ------------------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
						    ON tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_state . "
								= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
						-- ------------------------------------------------------------------------
						WHERE tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
							AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . " = '" . $var_relation . "'
							-- AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_located ." = 'NO'
							AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_returnable ." = 'SI'
							AND tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_st_value . " > 0
							AND tc_azp_fct_satisfaction." . d_azp_fct_satisfaction_t_module . " = 'VEHICULOS'
						-- ------------------------------------------------------------------------ 
						GROUP BY tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_v_id_azp_ibn_control_panel . " ASC,
							tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_acount . " ASC
						-- ------------------------------------------------------------------------
						ORDER BY tc_azp_ibn_vehicle." . d_azp_ibn_vehicle_t_consecutive . " ASC
					");
					#-------------------------------------------------------------------------#
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						foreach ($var_sql as $key => $value):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_fct_sinvestigation_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_fct_sinvestigation_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_fct_sinvestigation_m_date_created => DATE_HOUR,
								d_azp_fct_sinvestigation_m_date_modified => DATE_HOUR,
								d_azp_fct_sinvestigation_m_deleted => '1',
								d_azp_fct_sinvestigation_m_description => '',
								d_azp_fct_sinvestigation_m_level => '2',
								d_azp_fct_sinvestigation_m_status => '1',
								d_azp_fct_sinvestigation_m_temp => '1',
								d_azp_fct_sinvestigation_t_item => $var_item,
								d_azp_fct_sinvestigation_t_client => $value['lbl_azp_fct_client_t_name'],
								d_azp_fct_sinvestigation_t_request_nro => $value['lbl_azp_ibn_control_panel_t_code_research'],
								d_azp_fct_sinvestigation_t_request_date => $value['lbl_azp_ibn_control_panel_t_date_arrival'],
								d_azp_fct_sinvestigation_t_request_send => $value['lbl_azp_ibn_control_panel_t_date_general'],
								d_azp_fct_sinvestigation_t_identification => $value['lbl_azp_ibn_vehicle_t_identification'],
								d_azp_fct_sinvestigation_t_full_name => $value['lbl_azp_ibn_vehicle_t_full_name'],
								d_azp_fct_sinvestigation_t_obligation => $value['lbl_azp_ibn_data_main_t_nro_obligation'],
								d_azp_fct_sinvestigation_t_id_client => $value['lbl_azp_ibn_data_main_t_code'],
								d_azp_fct_sinvestigation_t_municipality => $value['lbl_azp_ibn_vehicle_t_city'],
								d_azp_fct_sinvestigation_t_consecutive => $value['lbl_azp_ibn_vehicle_t_consecutive'],
								d_azp_fct_sinvestigation_t_enrollment => $value['lbl_azp_ibn_vehicle_t_plaque'],
								d_azp_fct_sinvestigation_t_quality => $value['lbl_azp_ibn_vehicle_t_st_returnable'],
								d_azp_fct_sinvestigation_t_certificate => $value['lbl_azp_fct_satisfaction_t_module'],
								d_azp_fct_sinvestigation_t_receipt => $value['lbl_azp_ibn_vehicle_t_st_receipt'],
								d_azp_fct_sinvestigation_t_value => $value['lbl_azp_ibn_vehicle_t_st_value'],
								d_azp_fct_sinvestigation_t_state => $value['lbl_azp_ibn_state_t_name'],
							);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->insert(t_azp_fct_sinvestigation, $var_array);
						endforeach;
					}
				endforeach;
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_consolidatud_investigation_bas() {
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_id_azp_fct_sinvestigation . " AS 'lbl_azp_fct_sinvestigation_id_azp_fct_sinvestigation',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . " AS 'lbl_azp_fct_sinvestigation_m_by_created',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_modified . " AS 'lbl_azp_fct_sinvestigation_m_by_modified',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_date_created . " AS 'lbl_azp_fct_sinvestigation_m_date_created',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_date_modified . " AS 'lbl_azp_fct_sinvestigation_m_date_modified',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_deleted . " AS 'lbl_azp_fct_sinvestigation_m_deleted',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_description . " AS 'lbl_azp_fct_sinvestigation_m_description',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_level . " AS 'lbl_azp_fct_sinvestigation_m_level',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_status . " AS 'lbl_azp_fct_sinvestigation_m_status',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_temp . " AS 'lbl_azp_fct_sinvestigation_m_temp',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_item . " AS 'lbl_azp_fct_sinvestigation_t_item',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_client . " AS 'lbl_azp_fct_sinvestigation_t_client',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_nro . " AS 'lbl_azp_fct_sinvestigation_t_request_nro',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_date . " AS 'lbl_azp_fct_sinvestigation_t_request_date',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_request_send . " AS 'lbl_azp_fct_sinvestigation_t_request_send',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_identification . " AS 'lbl_azp_fct_sinvestigation_t_identification',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_full_name . " AS 'lbl_azp_fct_sinvestigation_t_full_name',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_obligation . " AS 'lbl_azp_fct_sinvestigation_t_obligation',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_id_client . " AS 'lbl_azp_fct_sinvestigation_t_id_client',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_municipality . " AS 'lbl_azp_fct_sinvestigation_t_municipality',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_consecutive . " AS 'lbl_azp_fct_sinvestigation_t_consecutive',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_enrollment . " AS 'lbl_azp_fct_sinvestigation_t_enrollment',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_quality . " AS 'lbl_azp_fct_sinvestigation_t_quality',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_certificate . " AS 'lbl_azp_fct_sinvestigation_t_certificate',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_receipt . " AS 'lbl_azp_fct_sinvestigation_t_receipt',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_value . " AS 'lbl_azp_fct_sinvestigation_t_value',
					tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_t_state . " AS 'lbl_azp_fct_sinvestigation_t_state'
				FROM " . t_azp_fct_sinvestigation . " tc_azp_fct_sinvestigation
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------					
				WHERE tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				ORDER BY tc_azp_fct_sinvestigation." . d_azp_fct_sinvestigation_id_azp_fct_sinvestigation . " ASC
			");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>