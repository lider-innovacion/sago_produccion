<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_crt_bankModel extends Models implements OCREND {
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
					tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " AS 'lbl_azp_crt_bank_id_azp_crt_bank',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_bank." . d_azp_crt_bank_m_date_created . " AS 'lbl_azp_crt_bank_m_date_created',
					tc_azp_crt_bank." . d_azp_crt_bank_m_date_modified . " AS 'lbl_azp_crt_bank_m_date_modified',
					tc_azp_crt_bank." . d_azp_crt_bank_m_description . " AS 'lbl_azp_crt_bank_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_bank." . d_azp_crt_bank_t_send . " AS 'lbl_azp_crt_bank_t_send'
				FROM " . t_azp_crt_bank . " tc_azp_crt_bank
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_bank." . d_azp_crt_bank_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_crt_bank." . d_azp_crt_bank_m_deleted . " = '1'
				ORDER BY tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_crt_bank." . d_azs_crt_bank_id_azs_crt_bank . " AS 'lbl_azs_crt_bank_id_azs_crt_bank',
					tc_azs_crt_bank." . d_azs_crt_bank_m_date_modified . " AS 'lbl_azs_crt_bank_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_crt_bank." . d_azs_crt_bank_m_date_created . " AS 'lbl_azs_crt_bank_m_date_created',
					tc_azs_crt_bank." . d_azs_crt_bank_m_date_modified . " AS 'lbl_azs_crt_bank_m_date_modified',
					tc_azs_crt_bank." . d_azs_crt_bank_m_description . " AS 'lbl_azs_crt_bank_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_crt_bank." . d_azs_crt_bank_t_name . " AS 'lbl_azs_crt_bank_t_name',
					tc_azs_crt_bank." . d_azs_crt_bank_t_send . " AS 'lbl_azs_crt_bank_t_send'
				FROM " . t_azs_crt_bank . " tc_azs_crt_bank
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_crt_bank." . d_azs_crt_bank_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_crt_bank." . d_azs_crt_bank_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_crt_bank." . d_azs_crt_bank_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_crt_bank." . d_azs_crt_bank_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_crt_bank." . d_azs_crt_bank_v_id_azp_crt_bank . " = '" . $this->id . "'
				ORDER BY tc_azs_crt_bank." . d_azs_crt_bank_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_crt_bank . "
				WHERE " . d_azp_crt_bank_id_azp_crt_bank . " = '" . $this->id . "'
					AND " . d_azp_crt_bank_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_crt_bank);
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
					tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " AS 'lbl_azp_crt_bank_id_azp_crt_bank',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_bank." . d_azp_crt_bank_m_date_created . " AS 'lbl_azp_crt_bank_m_date_created',
					tc_azp_crt_bank." . d_azp_crt_bank_m_date_modified . " AS 'lbl_azp_crt_bank_m_date_modified',
					tc_azp_crt_bank." . d_azp_crt_bank_m_description . " AS 'lbl_azp_crt_bank_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_bank." . d_azp_crt_bank_t_send . " AS 'lbl_azp_crt_bank_t_send'
				FROM " . t_azp_crt_bank . " tc_azp_crt_bank
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " = '" . $this->id . "'
					AND tc_azp_crt_bank." . d_azp_crt_bank_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " AS 'lbl_azp_crt_bank_id_azp_crt_bank',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_bank." . d_azp_crt_bank_m_date_created . " AS 'lbl_azp_crt_bank_m_date_created',
					tc_azp_crt_bank." . d_azp_crt_bank_m_date_modified . " AS 'lbl_azp_crt_bank_m_date_modified',
					tc_azp_crt_bank." . d_azp_crt_bank_m_description . " AS 'lbl_azp_crt_bank_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_bank." . d_azp_crt_bank_t_send . " AS 'lbl_azp_crt_bank_t_send'
				FROM " . t_azp_crt_bank . " tc_azp_crt_bank
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_bank." . d_azp_crt_bank_m_deleted . " = '3'
				ORDER BY tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " AS 'lbl_azp_crt_bank_id_azp_crt_bank',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_bank." . d_azp_crt_bank_m_date_created . " AS 'lbl_azp_crt_bank_m_date_created',
					tc_azp_crt_bank." . d_azp_crt_bank_m_date_modified . " AS 'lbl_azp_crt_bank_m_date_modified',
					tc_azp_crt_bank." . d_azp_crt_bank_m_description . " AS 'lbl_azp_crt_bank_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_bank." . d_azp_crt_bank_t_send . " AS 'lbl_azp_crt_bank_t_send'
				FROM " . t_azp_crt_bank . " tc_azp_crt_bank
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_bank." . d_azp_crt_bank_m_deleted . " = '1'
				ORDER BY tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " AS 'lbl_azp_crt_bank_id_azp_crt_bank',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_bank." . d_azp_crt_bank_m_date_created . " AS 'lbl_azp_crt_bank_m_date_created',
					tc_azp_crt_bank." . d_azp_crt_bank_m_date_modified . " AS 'lbl_azp_crt_bank_m_date_modified',
					tc_azp_crt_bank." . d_azp_crt_bank_m_description . " AS 'lbl_azp_crt_bank_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_bank." . d_azp_crt_bank_t_send . " AS 'lbl_azp_crt_bank_t_send'
				FROM " . t_azp_crt_bank . " tc_azp_crt_bank
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_bank." . d_azp_crt_bank_m_deleted . " = '2'
				ORDER BY tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " AS 'lbl_azp_crt_bank_id_azp_crt_bank',
					tc_azp_crt_bank." . d_azp_crt_bank_m_by_created . " AS 'lbl_azp_crt_bank_m_by_created',
					tc_azp_crt_bank." . d_azp_crt_bank_m_by_modified . " AS 'lbl_azp_crt_bank_m_by_modified',
					tc_azp_crt_bank." . d_azp_crt_bank_m_date_created . " AS 'lbl_azp_crt_bank_m_date_created',
					tc_azp_crt_bank." . d_azp_crt_bank_m_date_modified . " AS 'lbl_azp_crt_bank_m_date_modified',
					tc_azp_crt_bank." . d_azp_crt_bank_m_description . " AS 'lbl_azp_crt_bank_m_description',
					tc_azp_crt_bank." . d_azp_crt_bank_m_level . " AS 'lbl_azp_crt_bank_m_level',
					tc_azp_crt_bank." . d_azp_crt_bank_m_status . " AS 'lbl_azp_crt_bank_m_status',
					tc_azp_crt_bank." . d_azp_crt_bank_t_name . " AS 'lbl_azp_crt_bank_t_name',
					tc_azp_crt_bank." . d_azp_crt_bank_t_send . " AS 'lbl_azp_crt_bank_t_send',
					tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . " AS 'lbl_azp_crt_bank_v_id_azp_fct_client',
					tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_sector . " AS 'lbl_azp_crt_bank_v_id_azp_fct_sector'
				FROM " . t_azp_crt_bank . " tc_azp_crt_bank
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_bank." . d_azp_crt_bank_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . " = '" . $this->id . "'
					AND tc_azp_crt_bank." . d_azp_crt_bank_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_crt_bank_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "' AND " . d_azp_crt_bank_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "' AND " . d_azp_crt_bank_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_bank_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "' AND " . d_azp_crt_bank_m_level . " = '2'");
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
		final public function sql_azp_crt_bank_delete(array $data) : array {
			$var_error = $this->error_sql_azp_crt_bank_delete($data);
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
				$var_array = array(d_azp_crt_bank_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_bank, $var_array, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_crt_bank_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_send'])) { throw new Exception('<b>Error:</b> El campo de envio esta prohibido modificar.'); }
				if (!isset($data['field_cr_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_cr_sector'])) { throw new Exception('<b>Error:</b> El campo de sector esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_name = $this->db->scape($data['field_cr_name']);
				$empty_send = $this->db->scape($data['field_cr_send']);
				$empty_client = $this->db->scape($data['field_cr_client']);
				$empty_sector = $this->db->scape($data['field_cr_sector']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre solo permite letras.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_send) || strtolower($empty_send) == strtolower('ninguno') || $empty_send == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de envio es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_send)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de envio solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_client) || strtolower($empty_client) == strtolower('seleccionar') || $empty_client == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_client)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_sector) || strtolower($empty_sector) == strtolower('seleccionar') || $empty_sector == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sector es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_sector)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sector solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				/*$sql_name = $this->db->select(d_azp_crt_bank_t_name, t_azp_crt_bank, d_azp_crt_bank_t_name . " = '" . $empty_name . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_name) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_name[0][0]) == strtolower($empty_name)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El nombre digitado ya existe registrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El cliente seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_sector, d_azp_fct_sector_id_azp_fct_sector . " = '" . $empty_sector . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El sector seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_query = $this->db->select('*', t_azp_crt_bank,
					d_azp_crt_bank_v_id_azp_fct_client . " = '" . $empty_client . "' AND " .
					d_azp_crt_bank_v_id_azp_fct_sector . " = '" . $empty_sector . "'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_query) { throw new Exception('<b>Error:</b> El sector y cliente seleccionados ya existen registrados.'); }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_crt_bank_insert(array $data) : array {
			$var_error = $this->error_sql_azp_crt_bank_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_name = $this->db->scape($data['field_cr_name']);
				$empty_send = $this->db->scape($data['field_cr_send']);
				$empty_client = $this->db->scape($data['field_cr_client']);
				$empty_sector = $this->db->scape($data['field_cr_sector']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_bank_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_crt_bank_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_bank_m_date_created => DATE_HOUR,
					d_azp_crt_bank_m_date_modified => DATE_HOUR,
					d_azp_crt_bank_m_deleted => '1',
					d_azp_crt_bank_m_description => $empty_description,
					d_azp_crt_bank_m_level => '2',
					d_azp_crt_bank_m_status => '1',
					d_azp_crt_bank_m_temp => '2',
					d_azp_crt_bank_t_name => $empty_name,
					d_azp_crt_bank_t_send => $empty_send,
					d_azp_crt_bank_v_id_azp_fct_client => $empty_client,
					d_azp_crt_bank_v_id_azp_fct_sector => $empty_sector,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_crt_bank, $var_array);
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_m_temp . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_client = $value[d_azp_crt_bank_v_id_azp_fct_client]; endforeach; } else { $var_client = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $var_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_crt_bank_t_name => $value[d_azp_fct_client_t_name],);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_crt_bank, $var_array, d_azp_crt_bank_m_temp . " = '2'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_crt_bank_m_temp => '1',);
				# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
				$this->db->update(t_azp_crt_bank, $var_array, d_azp_crt_bank_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_bank_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "' AND " . d_azp_crt_bank_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "' AND " . d_azp_crt_bank_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_bank_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "' AND " . d_azp_crt_bank_m_level . " = '2'");
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
		final public function sql_azp_crt_bank_remove(array $data) : array {
			$var_error = $this->error_sql_azp_crt_bank_remove($data);
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
				$var_array = array(d_azp_crt_bank_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_bank, $var_array, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_bank_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "' AND " . d_azp_crt_bank_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "' AND " . d_azp_crt_bank_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_bank_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "' AND " . d_azp_crt_bank_m_level . " = '2'");
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
		final public function sql_azp_crt_bank_restore(array $data) : array {
			$var_error = $this->error_sql_azp_crt_bank_restore($data);
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
				$var_array = array(d_azp_crt_bank_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_bank, $var_array, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_bank_update(array $data) {
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
				if (!isset($data['field_up_send'])) { throw new Exception('<b>Error:</b> El campo de envio esta prohibido modificar.'); }
				if (!isset($data['field_up_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_up_sector'])) { throw new Exception('<b>Error:</b> El campo de sector esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_name = $this->db->scape($data['field_up_name']);
				$empty_send = $this->db->scape($data['field_up_send']);
				$empty_client = $this->db->scape($data['field_up_client']);
				$empty_sector = $this->db->scape($data['field_up_sector']);
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
				/*if (Func::emp($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre solo permite letras.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_send) || strtolower($empty_send) == strtolower('ninguno') || $empty_send == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de envio es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_send)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de envio solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_client) || strtolower($empty_client) == strtolower('seleccionar') || $empty_client == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_client)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_sector) || strtolower($empty_sector) == strtolower('seleccionar') || $empty_sector == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sector es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_sector)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sector solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "' AND " . d_azp_crt_bank_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_bank_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "' AND " . d_azp_crt_bank_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				/*$sql_name = $this->db->select(d_azp_crt_bank_t_name, t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " != '" . $empty_id . "' AND " . d_azp_crt_bank_t_name . " = '" . $empty_name . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_name) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_name[0][0]) == strtolower($empty_name)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El nombre digitado ya existe registrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El cliente seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_sector, d_azp_fct_sector_id_azp_fct_sector . " = '" . $empty_sector . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El sector seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_query = $this->db->select('*', t_azp_crt_bank,
					d_azp_crt_bank_id_azp_crt_bank . " != '" . $empty_id . "' AND " .
					d_azp_crt_bank_v_id_azp_fct_client . " = '" . $empty_client . "' AND " .
					d_azp_crt_bank_v_id_azp_fct_sector . " = '" . $empty_sector . "'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_query) { throw new Exception('<b>Error:</b> El sector y cliente seleccionados ya existen registrados.'); }
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
		final public function sql_azp_crt_bank_update(array $data) : array {
			$var_error = $this->error_sql_azp_crt_bank_update($data);
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
				$empty_send = $this->db->scape($data['field_up_send']);
				$empty_client = $this->db->scape($data['field_up_client']);
				$empty_sector = $this->db->scape($data['field_up_sector']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_crt_bank_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_crt_bank_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_crt_bank_m_date_created => DATE_HOUR,
							d_azs_crt_bank_m_date_modified => DATE_HOUR,
							d_azs_crt_bank_m_deleted => $key_sql_select[d_azp_crt_bank_m_deleted],
							d_azs_crt_bank_m_description => $key_sql_select[d_azp_crt_bank_m_description],
							d_azs_crt_bank_m_level => $key_sql_select[d_azp_crt_bank_m_level],
							d_azs_crt_bank_m_status => $key_sql_select[d_azp_crt_bank_m_status],
							d_azs_crt_bank_m_temp => $key_sql_select[d_azp_crt_bank_m_temp],
							d_azs_crt_bank_t_name => $key_sql_select[d_azp_crt_bank_t_name],
							d_azs_crt_bank_t_send => $key_sql_select[d_azp_crt_bank_t_send],
							d_azs_crt_bank_u_fct_client => $key_sql_select[d_azp_crt_bank_v_id_azp_fct_client],
							d_azs_crt_bank_u_fct_sector => $key_sql_select[d_azp_crt_bank_v_id_azp_fct_sector],
							d_azs_crt_bank_v_id_azp_crt_bank => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_crt_bank, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_bank_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_bank_m_date_modified => DATE_HOUR,
					d_azp_crt_bank_m_description => $empty_description,
					d_azp_crt_bank_m_status => $empty_state,
					d_azp_crt_bank_t_name => $empty_name,
					d_azp_crt_bank_t_send => $empty_send,
					d_azp_crt_bank_v_id_azp_fct_client => $empty_client,
					d_azp_crt_bank_v_id_azp_fct_sector => $empty_sector,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_bank, $var_array, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_client = $value[d_azp_crt_bank_v_id_azp_fct_client]; endforeach; } else { $var_client = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $var_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_crt_bank_t_name => $value[d_azp_fct_client_t_name],);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_crt_bank, $var_array, d_azp_crt_bank_id_azp_crt_bank . " = '" . $empty_id . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_client() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_azp_fct_client_id_azp_fct_client',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name'
				FROM " . t_azp_fct_client . " tc_azp_fct_client
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_client." . d_azp_fct_client_m_deleted . " = '1'
					AND tc_azp_fct_client." . d_azp_fct_client_m_status . " = '1'
					AND tc_azp_fct_client." . d_azp_fct_client_t_certificate . " = 'SI'
					AND tc_azp_fct_client." . d_azp_fct_client_v_id_azp_fct_sector . " = '" . $this->id . "'
				-- ---------------------------------------------------------------
				GROUP BY tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_sector() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_sector,
				d_azp_fct_sector_m_deleted . " = '1' AND " .
				d_azp_fct_sector_m_status . " = '1' ORDER BY " .
				d_azp_fct_sector_t_name . " ASC"
			);
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>