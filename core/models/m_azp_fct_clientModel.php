<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_fct_clientModel extends Models implements OCREND {
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
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_azp_fct_client_id_azp_fct_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_client." . d_azp_fct_client_m_date_created . " AS 'lbl_azp_fct_client_m_date_created',
					tc_azp_fct_client." . d_azp_fct_client_m_date_modified . " AS 'lbl_azp_fct_client_m_date_modified',
					tc_azp_fct_client." . d_azp_fct_client_m_description . " AS 'lbl_azp_fct_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_client." . d_azp_fct_client_w_document . " AS 'lbl_azp_fct_client_w_document',
					tc_azp_fct_client." . d_azp_fct_client_w_error . " AS 'lbl_azp_fct_client_w_error',
					tc_azp_fct_client." . d_azp_fct_client_w_folder . " AS 'lbl_azp_fct_client_w_folder',
					tc_azp_fct_client." . d_azp_fct_client_w_name . " AS 'lbl_azp_fct_client_w_name',
					tc_azp_fct_client." . d_azp_fct_client_w_route . " AS 'lbl_azp_fct_client_w_route',
					tc_azp_fct_client." . d_azp_fct_client_w_size . " AS 'lbl_azp_fct_client_w_size',
					tc_azp_fct_client." . d_azp_fct_client_w_tmp_name . " AS 'lbl_azp_fct_client_w_tmp_name',
					tc_azp_fct_client." . d_azp_fct_client_w_type . " AS 'lbl_azp_fct_client_w_type',
					tc_azp_fct_sector." . d_azp_fct_sector_t_name . " AS 'lbl_azp_fct_sector_t_name'
				FROM " . t_azp_fct_client . " tc_azp_fct_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_client." . d_azp_fct_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_client." . d_azp_fct_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_client." . d_azp_fct_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_client." . d_azp_fct_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_fct_client." . d_azp_fct_client_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_client." . d_azp_fct_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fct_client." . d_azp_fct_client_m_deleted . " = '1'
				ORDER BY tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_fct_client." . d_azs_fct_client_id_azs_fct_client . " AS 'lbl_azs_fct_client_id_azs_fct_client',
					tc_azs_fct_client." . d_azs_fct_client_m_date_modified . " AS 'lbl_azs_fct_client_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_fct_client." . d_azs_fct_client_m_date_created . " AS 'lbl_azs_fct_client_m_date_created',
					tc_azs_fct_client." . d_azs_fct_client_m_date_modified . " AS 'lbl_azs_fct_client_m_date_modified',
					tc_azs_fct_client." . d_azs_fct_client_m_description . " AS 'lbl_azs_fct_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_fct_client." . d_azs_fct_client_t_name . " AS 'lbl_azs_fct_client_t_name',
					tc_azs_fct_client." . d_azs_fct_client_w_document . " AS 'lbl_azs_fct_client_w_document',
					tc_azs_fct_client." . d_azs_fct_client_w_error . " AS 'lbl_azs_fct_client_w_error',
					tc_azs_fct_client." . d_azs_fct_client_w_folder . " AS 'lbl_azs_fct_client_w_folder',
					tc_azs_fct_client." . d_azs_fct_client_w_name . " AS 'lbl_azs_fct_client_w_name',
					tc_azs_fct_client." . d_azs_fct_client_w_route . " AS 'lbl_azs_fct_client_w_route',
					tc_azs_fct_client." . d_azs_fct_client_w_size . " AS 'lbl_azs_fct_client_w_size',
					tc_azs_fct_client." . d_azs_fct_client_w_tmp_name . " AS 'lbl_azs_fct_client_w_tmp_name',
					tc_azs_fct_client." . d_azs_fct_client_w_type . " AS 'lbl_azs_fct_client_w_type',
					tc_azs_fct_client." . d_azs_fct_client_u_fct_sector . " AS 'lbl_azs_fct_client_u_fct_sector'
				FROM " . t_azs_fct_client . " tc_azs_fct_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_fct_client." . d_azs_fct_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_fct_client." . d_azs_fct_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_fct_client." . d_azs_fct_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_fct_client." . d_azs_fct_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_fct_client." . d_azs_fct_client_v_id_azp_fct_client . " = '" . $this->id . "'
				ORDER BY tc_azs_fct_client." . d_azs_fct_client_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_fct_client . "
				WHERE " . d_azp_fct_client_id_azp_fct_client . " = '" . $this->id . "'
					AND " . d_azp_fct_client_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_fct_client);
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
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_azp_fct_client_id_azp_fct_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_client." . d_azp_fct_client_m_date_created . " AS 'lbl_azp_fct_client_m_date_created',
					tc_azp_fct_client." . d_azp_fct_client_m_date_modified . " AS 'lbl_azp_fct_client_m_date_modified',
					tc_azp_fct_client." . d_azp_fct_client_m_description . " AS 'lbl_azp_fct_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_client." . d_azp_fct_client_w_document . " AS 'lbl_azp_fct_client_w_document',
					tc_azp_fct_client." . d_azp_fct_client_w_error . " AS 'lbl_azp_fct_client_w_error',
					tc_azp_fct_client." . d_azp_fct_client_w_folder . " AS 'lbl_azp_fct_client_w_folder',
					tc_azp_fct_client." . d_azp_fct_client_w_name . " AS 'lbl_azp_fct_client_w_name',
					tc_azp_fct_client." . d_azp_fct_client_w_route . " AS 'lbl_azp_fct_client_w_route',
					tc_azp_fct_client." . d_azp_fct_client_w_size . " AS 'lbl_azp_fct_client_w_size',
					tc_azp_fct_client." . d_azp_fct_client_w_tmp_name . " AS 'lbl_azp_fct_client_w_tmp_name',
					tc_azp_fct_client." . d_azp_fct_client_w_type . " AS 'lbl_azp_fct_client_w_type',
					tc_azp_fct_sector." . d_azp_fct_sector_t_name . " AS 'lbl_azp_fct_sector_t_name'
				FROM " . t_azp_fct_client . " tc_azp_fct_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_client." . d_azp_fct_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_client." . d_azp_fct_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_client." . d_azp_fct_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_client." . d_azp_fct_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_fct_client." . d_azp_fct_client_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $this->id . "'
					AND tc_azp_fct_client." . d_azp_fct_client_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_azp_fct_client_id_azp_fct_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_client." . d_azp_fct_client_m_date_created . " AS 'lbl_azp_fct_client_m_date_created',
					tc_azp_fct_client." . d_azp_fct_client_m_date_modified . " AS 'lbl_azp_fct_client_m_date_modified',
					tc_azp_fct_client." . d_azp_fct_client_m_description . " AS 'lbl_azp_fct_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_client." . d_azp_fct_client_w_document . " AS 'lbl_azp_fct_client_w_document',
					tc_azp_fct_client." . d_azp_fct_client_w_error . " AS 'lbl_azp_fct_client_w_error',
					tc_azp_fct_client." . d_azp_fct_client_w_folder . " AS 'lbl_azp_fct_client_w_folder',
					tc_azp_fct_client." . d_azp_fct_client_w_name . " AS 'lbl_azp_fct_client_w_name',
					tc_azp_fct_client." . d_azp_fct_client_w_route . " AS 'lbl_azp_fct_client_w_route',
					tc_azp_fct_client." . d_azp_fct_client_w_size . " AS 'lbl_azp_fct_client_w_size',
					tc_azp_fct_client." . d_azp_fct_client_w_tmp_name . " AS 'lbl_azp_fct_client_w_tmp_name',
					tc_azp_fct_client." . d_azp_fct_client_w_type . " AS 'lbl_azp_fct_client_w_type',
					tc_azp_fct_sector." . d_azp_fct_sector_t_name . " AS 'lbl_azp_fct_sector_t_name'
				FROM " . t_azp_fct_client . " tc_azp_fct_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_client." . d_azp_fct_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_client." . d_azp_fct_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_client." . d_azp_fct_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_client." . d_azp_fct_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_fct_client." . d_azp_fct_client_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_client." . d_azp_fct_client_m_deleted . " = '3'
				ORDER BY tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_azp_fct_client_id_azp_fct_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_client." . d_azp_fct_client_m_date_created . " AS 'lbl_azp_fct_client_m_date_created',
					tc_azp_fct_client." . d_azp_fct_client_m_date_modified . " AS 'lbl_azp_fct_client_m_date_modified',
					tc_azp_fct_client." . d_azp_fct_client_m_description . " AS 'lbl_azp_fct_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_client." . d_azp_fct_client_w_document . " AS 'lbl_azp_fct_client_w_document',
					tc_azp_fct_client." . d_azp_fct_client_w_error . " AS 'lbl_azp_fct_client_w_error',
					tc_azp_fct_client." . d_azp_fct_client_w_folder . " AS 'lbl_azp_fct_client_w_folder',
					tc_azp_fct_client." . d_azp_fct_client_w_name . " AS 'lbl_azp_fct_client_w_name',
					tc_azp_fct_client." . d_azp_fct_client_w_route . " AS 'lbl_azp_fct_client_w_route',
					tc_azp_fct_client." . d_azp_fct_client_w_size . " AS 'lbl_azp_fct_client_w_size',
					tc_azp_fct_client." . d_azp_fct_client_w_tmp_name . " AS 'lbl_azp_fct_client_w_tmp_name',
					tc_azp_fct_client." . d_azp_fct_client_w_type . " AS 'lbl_azp_fct_client_w_type',
					tc_azp_fct_sector." . d_azp_fct_sector_t_name . " AS 'lbl_azp_fct_sector_t_name'
				FROM " . t_azp_fct_client . " tc_azp_fct_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_client." . d_azp_fct_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_client." . d_azp_fct_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_client." . d_azp_fct_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_client." . d_azp_fct_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_fct_client." . d_azp_fct_client_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_client." . d_azp_fct_client_m_deleted . " = '1'
				ORDER BY tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_azp_fct_client_id_azp_fct_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_client." . d_azp_fct_client_m_date_created . " AS 'lbl_azp_fct_client_m_date_created',
					tc_azp_fct_client." . d_azp_fct_client_m_date_modified . " AS 'lbl_azp_fct_client_m_date_modified',
					tc_azp_fct_client." . d_azp_fct_client_m_description . " AS 'lbl_azp_fct_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_client." . d_azp_fct_client_w_document . " AS 'lbl_azp_fct_client_w_document',
					tc_azp_fct_client." . d_azp_fct_client_w_error . " AS 'lbl_azp_fct_client_w_error',
					tc_azp_fct_client." . d_azp_fct_client_w_folder . " AS 'lbl_azp_fct_client_w_folder',
					tc_azp_fct_client." . d_azp_fct_client_w_name . " AS 'lbl_azp_fct_client_w_name',
					tc_azp_fct_client." . d_azp_fct_client_w_route . " AS 'lbl_azp_fct_client_w_route',
					tc_azp_fct_client." . d_azp_fct_client_w_size . " AS 'lbl_azp_fct_client_w_size',
					tc_azp_fct_client." . d_azp_fct_client_w_tmp_name . " AS 'lbl_azp_fct_client_w_tmp_name',
					tc_azp_fct_client." . d_azp_fct_client_w_type . " AS 'lbl_azp_fct_client_w_type',
					tc_azp_fct_sector." . d_azp_fct_sector_t_name . " AS 'lbl_azp_fct_sector_t_name'
				FROM " . t_azp_fct_client . " tc_azp_fct_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_client." . d_azp_fct_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_client." . d_azp_fct_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_client." . d_azp_fct_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_client." . d_azp_fct_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_fct_client." . d_azp_fct_client_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_client." . d_azp_fct_client_m_deleted . " = '2'
				ORDER BY tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_azp_fct_client_id_azp_fct_client',
					tc_azp_fct_client." . d_azp_fct_client_m_by_created . " AS 'lbl_azp_fct_client_m_by_created',
					tc_azp_fct_client." . d_azp_fct_client_m_by_modified . " AS 'lbl_azp_fct_client_m_by_modified',
					tc_azp_fct_client." . d_azp_fct_client_m_date_created . " AS 'lbl_azp_fct_client_m_date_created',
					tc_azp_fct_client." . d_azp_fct_client_m_date_modified . " AS 'lbl_azp_fct_client_m_date_modified',
					tc_azp_fct_client." . d_azp_fct_client_m_description . " AS 'lbl_azp_fct_client_m_description',
					tc_azp_fct_client." . d_azp_fct_client_m_level . " AS 'lbl_azp_fct_client_m_level',
					tc_azp_fct_client." . d_azp_fct_client_m_status . " AS 'lbl_azp_fct_client_m_status',
					tc_azp_fct_client." . d_azp_fct_client_t_certificate . " AS 'lbl_azp_fct_client_t_certificate',
					tc_azp_fct_client." . d_azp_fct_client_t_defunction . " AS 'lbl_azp_fct_client_t_defunction',
					tc_azp_fct_client." . d_azp_fct_client_t_investigation . " AS 'lbl_azp_fct_client_t_investigation',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_client." . d_azp_fct_client_w_document . " AS 'lbl_azp_fct_client_w_document',
					tc_azp_fct_client." . d_azp_fct_client_w_error . " AS 'lbl_azp_fct_client_w_error',
					tc_azp_fct_client." . d_azp_fct_client_w_folder . " AS 'lbl_azp_fct_client_w_folder',
					tc_azp_fct_client." . d_azp_fct_client_w_name . " AS 'lbl_azp_fct_client_w_name',
					tc_azp_fct_client." . d_azp_fct_client_w_route . " AS 'lbl_azp_fct_client_w_route',
					tc_azp_fct_client." . d_azp_fct_client_w_size . " AS 'lbl_azp_fct_client_w_size',
					tc_azp_fct_client." . d_azp_fct_client_w_tmp_name . " AS 'lbl_azp_fct_client_w_tmp_name',
					tc_azp_fct_client." . d_azp_fct_client_w_type . " AS 'lbl_azp_fct_client_w_type',
					tc_azp_fct_client." . d_azp_fct_client_v_id_azp_fct_sector . " AS 'lbl_azp_fct_client_v_id_azp_fct_sector'
				FROM " . t_azp_fct_client . " tc_azp_fct_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_client." . d_azp_fct_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_client." . d_azp_fct_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_client." . d_azp_fct_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_client." . d_azp_fct_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $this->id . "'
					AND tc_azp_fct_client." . d_azp_fct_client_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_file() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_azp_fct_client_id_azp_fct_client',
					tc_azp_fct_client." . d_azp_fct_client_m_by_created . " AS 'lbl_azp_fct_client_m_by_created',
					tc_azp_fct_client." . d_azp_fct_client_m_by_modified . " AS 'lbl_azp_fct_client_m_by_modified',
					tc_azp_fct_client." . d_azp_fct_client_m_date_created . " AS 'lbl_azp_fct_client_m_date_created',
					tc_azp_fct_client." . d_azp_fct_client_m_date_modified . " AS 'lbl_azp_fct_client_m_date_modified',
					tc_azp_fct_client." . d_azp_fct_client_m_description . " AS 'lbl_azp_fct_client_m_description',
					tc_azp_fct_client." . d_azp_fct_client_m_level . " AS 'lbl_azp_fct_client_m_level',
					tc_azp_fct_client." . d_azp_fct_client_m_status . " AS 'lbl_azp_fct_client_m_status',
					tc_azp_fct_client." . d_azp_fct_client_t_certificate . " AS 'lbl_azp_fct_client_t_certificate',
					tc_azp_fct_client." . d_azp_fct_client_t_defunction . " AS 'lbl_azp_fct_client_t_defunction',
					tc_azp_fct_client." . d_azp_fct_client_t_investigation . " AS 'lbl_azp_fct_client_t_investigation',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_client." . d_azp_fct_client_w_document . " AS 'lbl_azp_fct_client_w_document',
					tc_azp_fct_client." . d_azp_fct_client_w_error . " AS 'lbl_azp_fct_client_w_error',
					tc_azp_fct_client." . d_azp_fct_client_w_folder . " AS 'lbl_azp_fct_client_w_folder',
					tc_azp_fct_client." . d_azp_fct_client_w_name . " AS 'lbl_azp_fct_client_w_name',
					tc_azp_fct_client." . d_azp_fct_client_w_route . " AS 'lbl_azp_fct_client_w_route',
					tc_azp_fct_client." . d_azp_fct_client_w_size . " AS 'lbl_azp_fct_client_w_size',
					tc_azp_fct_client." . d_azp_fct_client_w_tmp_name . " AS 'lbl_azp_fct_client_w_tmp_name',
					tc_azp_fct_client." . d_azp_fct_client_w_type . " AS 'lbl_azp_fct_client_w_type',
					tc_azp_fct_client." . d_azp_fct_client_v_id_azp_fct_sector . " AS 'lbl_azp_fct_client_v_id_azp_fct_sector'
				FROM " . t_azp_fct_client . " tc_azp_fct_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_client." . d_azp_fct_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_client." . d_azp_fct_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_client." . d_azp_fct_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_client." . d_azp_fct_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $this->id . "'
					AND tc_azp_fct_client." . d_azp_fct_client_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_edit() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_tariff." . d_azp_fct_tariff_id_azp_fct_tariff . " AS 'lbl_azp_fct_tariff_id_azp_fct_tariff',
					tc_azp_fct_tariff." . d_azp_fct_tariff_m_by_created . " AS 'lbl_azp_fct_tariff_m_by_created',
					tc_azp_fct_tariff." . d_azp_fct_tariff_m_by_modified . " AS 'lbl_azp_fct_tariff_m_by_modified',
					tc_azp_fct_tariff." . d_azp_fct_tariff_m_date_created . " AS 'lbl_azp_fct_tariff_m_date_created',
					tc_azp_fct_tariff." . d_azp_fct_tariff_m_date_modified . " AS 'lbl_azp_fct_tariff_m_date_modified',
					tc_azp_fct_tariff." . d_azp_fct_tariff_m_deleted . " AS 'lbl_azp_fct_tariff_m_deleted',
					tc_azp_fct_tariff." . d_azp_fct_tariff_m_description . " AS 'lbl_azp_fct_tariff_m_description',
					tc_azp_fct_tariff." . d_azp_fct_tariff_m_level . " AS 'lbl_azp_fct_tariff_m_level',
					tc_azp_fct_tariff." . d_azp_fct_tariff_m_status . " AS 'lbl_azp_fct_tariff_m_status',
					tc_azp_fct_tariff." . d_azp_fct_tariff_m_temp . " AS 'lbl_azp_fct_tariff_m_temp',
					tc_azp_fct_tariff." . d_azp_fct_tariff_t_iva . " AS 'lbl_azp_fct_tariff_t_iva',
					tc_azp_fct_tariff." . d_azp_fct_tariff_t_sub_check . " AS 'lbl_azp_fct_tariff_t_sub_check',
					tc_azp_fct_tariff." . d_azp_fct_tariff_t_value . " AS 'lbl_azp_fct_tariff_t_value',
					tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_client',
					tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_coverage',
					tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_investigation . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_investigation',
					tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_result . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_result',
					tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_scale . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_scale',
					tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_service',
					tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_coverage . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_sub_coverage',
					tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_sub_service . " AS 'lbl_azp_fct_tariff_v_id_azp_fct_sub_service'
				FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_tariff." . d_azp_fct_tariff_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_tariff." . d_azp_fct_tariff_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_tariff." . d_azp_fct_tariff_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_tariff." . d_azp_fct_tariff_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_id_azp_fct_tariff . " = '" . $this->id . "'
					AND tc_azp_fct_tariff." . d_azp_fct_tariff_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_tariff() {
			if (isset($_GET['fd_service'])) { $var_service = $_GET['fd_service']; } else { $var_service = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fct_tariff." . d_azp_fct_tariff_id_azp_fct_tariff . " AS 'lbl_azp_fct_tariff_id_azp_fct_tariff',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fct_tariff." . d_azp_fct_tariff_m_date_created . " AS 'lbl_azp_fct_tariff_m_date_created',
					tc_azp_fct_tariff." . d_azp_fct_tariff_m_date_modified . " AS 'lbl_azp_fct_tariff_m_date_modified',
					tc_azp_fct_tariff." . d_azp_fct_tariff_m_description . " AS 'lbl_azp_fct_tariff_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fct_tariff." . d_azp_fct_tariff_t_iva . " AS 'lbl_azp_fct_tariff_t_iva',
					tc_azp_fct_tariff." . d_azp_fct_tariff_t_sub_check . " AS 'lbl_azp_fct_tariff_t_sub_check',
					tc_azp_fct_tariff." . d_azp_fct_tariff_t_value . " AS 'lbl_azp_fct_tariff_t_value',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_fct_coverage." . d_azp_fct_coverage_t_name . " AS 'lbl_azp_fct_coverage_t_name',
					tc_azp_fct_investigation." . d_azp_fct_investigation_t_name . " AS 'lbl_azp_fct_investigation_t_name',
					tc_azp_fct_result." . d_azp_fct_result_t_name . " AS 'lbl_azp_fct_result_t_name',
					tc_azp_fct_scale." . d_azp_fct_scale_t_name . " AS 'lbl_azp_fct_scale_t_name',
					tc_azp_fct_service." . d_azp_fct_service_t_name . " AS 'lbl_azp_fct_service_t_name',
					tc_azp_fct_sub_coverage." . d_azp_fct_sub_coverage_t_name . " AS 'lbl_azp_fct_sub_coverage_t_name',
					tc_azp_fct_sub_service." . d_azp_fct_sub_service_t_name . " AS 'lbl_azp_fct_sub_service_t_name'
				FROM " . t_azp_fct_tariff . " tc_azp_fct_tariff
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fct_tariff." . d_azp_fct_tariff_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fct_tariff." . d_azp_fct_tariff_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fct_tariff." . d_azp_fct_tariff_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fct_tariff." . d_azp_fct_tariff_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_coverage . " tc_azp_fct_coverage
					ON tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_coverage . "
						= tc_azp_fct_coverage." . d_azp_fct_coverage_id_azp_fct_coverage . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
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
				WHERE tc_azp_fct_tariff." . d_azp_fct_tariff_m_deleted . " = '1'
					AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $this->id . "'
					AND tc_azp_fct_tariff." . d_azp_fct_tariff_v_id_azp_fct_service . " = '" . $var_service . "'
				ORDER BY tc_azp_fct_tariff." . d_azp_fct_tariff_id_azp_fct_tariff . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_fct_client_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " . d_azp_fct_client_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " . d_azp_fct_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fct_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " . d_azp_fct_client_m_level . " = '2'");
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
		final public function sql_azp_fct_client_delete(array $data) : array {
			$var_error = $this->error_sql_azp_fct_client_delete($data);
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
				$var_array = array(d_azp_fct_client_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_fct_client, $var_array, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_fct_client_file(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_fl_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_fl_id']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_fl_file']['name'];
				$empty_type = $_FILES['field_fl_file']['type'];
				$empty_tmp_name = $_FILES['field_fl_file']['tmp_name'];
				$empty_error = $_FILES['field_fl_file']['error'];
				$empty_size = $_FILES['field_fl_file']['size'];
				#-------------------------------------------------------------------------#
				$empty_tamanio = 5000; $empty_bytes = 1024;
				$empty_extension = array('png','jpg','jpeg','jpe',);
				$empty_path_info = strtolower(pathinfo($empty_name, PATHINFO_EXTENSION));
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
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('<b>Error:</b> El registro que está actualizando no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_fct_client,
					d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " .
					d_azp_fct_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_fct_client_m_level . " = '1'"
				);
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_fct_client,
					d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " .
					d_azp_fct_client_m_level . " = '2'"
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
		final public function sql_azp_fct_client_file(array $data) : array {
			$var_error = $this->error_sql_azp_fct_client_file($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('files');
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_fl_id']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_fl_file']['name'];
				$empty_error = $_FILES['field_fl_file']['error'];
				$empty_size = $_FILES['field_fl_file']['size'];
				$empty_tmp_name = $_FILES['field_fl_file']['tmp_name'];
				$empty_type = $_FILES['field_fl_file']['type'];
				#-------------------------------------------------------------------------#
				$empty_route = '../systemfiles/filesproject/';
				$empty_folder = 'azp_fct_client/' . $empty_id . '/';
				$empty_document = $empty_name;
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_fct_client_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_fct_client_m_date_modified => DATE_HOUR,
					d_azp_fct_client_w_document => $empty_document,
					d_azp_fct_client_w_error => $empty_error,
					d_azp_fct_client_w_folder => $empty_folder,
					d_azp_fct_client_w_name => $empty_name,
					d_azp_fct_client_w_route => $empty_route,
					d_azp_fct_client_w_size => $empty_size,
					d_azp_fct_client_w_tmp_name => $empty_tmp_name,
					d_azp_fct_client_w_type => $empty_type,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_fct_client, $var_array, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "'");
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
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo almacenado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_fct_client_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_sector'])) { throw new Exception('<b>Error:</b> El campo de sector esta prohibido modificar.'); }
				if (!isset($data['field_cr_certificate'])) { throw new Exception('<b>Error:</b> El campo de certificados esta prohibido modificar.'); }
				if (!isset($data['field_cr_defunction'])) { throw new Exception('<b>Error:</b> El campo de defuncion esta prohibido modificar.'); }
				if (!isset($data['field_cr_investigation'])) { throw new Exception('<b>Error:</b> El campo de investigacion esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_name = $this->db->scape($data['field_cr_name']);
				$empty_sector = $this->db->scape($data['field_cr_sector']);
				$empty_certificate = $this->db->scape($data['field_cr_certificate']);
				$empty_defunction = $this->db->scape($data['field_cr_defunction']);
				$empty_investigation = $this->db->scape($data['field_cr_investigation']);
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
				if (Func::emp($empty_sector) || strtolower($empty_sector) == strtolower('seleccionar') || $empty_sector == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de servicio es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_sector)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de servicio solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_sector, d_azp_fct_sector_id_azp_fct_sector . " = '" . $empty_sector . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El sector seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_fct_client_insert(array $data) : array {
			$var_error = $this->error_sql_azp_fct_client_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_name = $this->db->scape($data['field_cr_name']);
				$empty_sector = $this->db->scape($data['field_cr_sector']);
				$empty_certificate = $this->db->scape($data['field_cr_certificate']);
				$empty_defunction = $this->db->scape($data['field_cr_defunction']);
				$empty_investigation = $this->db->scape($data['field_cr_investigation']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_fct_client_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_fct_client_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_fct_client_m_date_created => DATE_HOUR,
					d_azp_fct_client_m_date_modified => DATE_HOUR,
					d_azp_fct_client_m_deleted => '1',
					d_azp_fct_client_m_description => $empty_description,
					d_azp_fct_client_m_level => '2',
					d_azp_fct_client_m_status => '1',
					d_azp_fct_client_m_temp => '2',
					d_azp_fct_client_t_certificate => strtoupper($empty_certificate),
					d_azp_fct_client_t_defunction => strtoupper($empty_defunction),
					d_azp_fct_client_t_investigation => strtoupper($empty_investigation),
					d_azp_fct_client_t_name => strtoupper($empty_name),
					d_azp_fct_client_v_id_azp_fct_sector => strtoupper($empty_sector),
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_fct_client, $var_array);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_m_temp . " = '2'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_fct_scale_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_fct_scale_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_fct_scale_m_date_created => DATE_HOUR,
							d_azp_fct_scale_m_date_modified => DATE_HOUR,
							d_azp_fct_scale_m_deleted => '1',
							d_azp_fct_scale_m_description => $empty_description,
							d_azp_fct_scale_m_level => '2',
							d_azp_fct_scale_m_status => '1',
							d_azp_fct_scale_m_temp => '1',
							d_azp_fct_scale_t_max => strtoupper('999999'),
							d_azp_fct_scale_t_min => strtoupper('0'),
							d_azp_fct_scale_t_name => strtoupper('SIN' . '_' . 'ESCALA'),
							d_azp_fct_scale_v_id_azp_fct_client => strtoupper($value[d_azp_fct_client_id_azp_fct_client]),
						);
						# Query Sql Insert: Registrar valores en la tabla segun sus campos
						$this->db->insert(t_azp_fct_scale, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_fct_client_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_fct_client, $var_array, d_azp_fct_client_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_fct_client_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " . d_azp_fct_client_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " . d_azp_fct_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fct_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " . d_azp_fct_client_m_level . " = '2'");
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
		final public function sql_azp_fct_client_remove(array $data) : array {
			$var_error = $this->error_sql_azp_fct_client_remove($data);
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
				$var_array = array(d_azp_fct_client_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_fct_client, $var_array, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_fct_client_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " . d_azp_fct_client_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " . d_azp_fct_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fct_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " . d_azp_fct_client_m_level . " = '2'");
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
		final public function sql_azp_fct_client_restore(array $data) : array {
			$var_error = $this->error_sql_azp_fct_client_restore($data);
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
				$var_array = array(d_azp_fct_client_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_fct_client, $var_array, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_fct_client_drop(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_drop'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_drop']);
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
				/*$sql_id = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está procesando no se encuentra registrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				/*$sql_id = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " . d_azp_fct_client_m_deleted . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está procesando ya se encuentra borrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				/*$sql_session = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " . d_azp_fct_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fct_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " . d_azp_fct_client_m_level . " = '2'");
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
		final public function sql_azp_fct_client_drop(array $data) : array {
			$var_error = $this->error_sql_azp_fct_client_drop($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_drop']);
				#-------------------------------------------------------------------------#
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->delete(t_azp_fct_tariff, d_azp_fct_tariff_id_azp_fct_tariff . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro borrado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_fct_client_update(array $data) {
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
				if (!isset($data['field_up_sector'])) { throw new Exception('<b>Error:</b> El campo de secctor esta prohibido modificar.'); }
				if (!isset($data['field_up_certificate'])) { throw new Exception('<b>Error:</b> El campo de certificados esta prohibido modificar.'); }
				if (!isset($data['field_up_defunction'])) { throw new Exception('<b>Error:</b> El campo de defuncion esta prohibido modificar.'); }
				if (!isset($data['field_up_investigation'])) { throw new Exception('<b>Error:</b> El campo de investigacion esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_name = $this->db->scape($data['field_up_name']);
				$empty_sector = $this->db->scape($data['field_up_sector']);
				$empty_certificate = $this->db->scape($data['field_up_certificate']);
				$empty_defunction = $this->db->scape($data['field_up_defunction']);
				$empty_investigation = $this->db->scape($data['field_up_investigation']);
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
				if (Func::emp($empty_sector) || strtolower($empty_sector) == strtolower('seleccionar') || $empty_sector == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de servicio es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_sector)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de servicio solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_sector, d_azp_fct_sector_id_azp_fct_sector . " = '" . $empty_sector . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El sector seleccionado no se encuentra registrado.'); }
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
				$sql_id = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " . d_azp_fct_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fct_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "' AND " . d_azp_fct_client_m_level . " = '2'");
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
		final public function sql_azp_fct_client_update(array $data) : array {
			$var_error = $this->error_sql_azp_fct_client_update($data);
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
				$empty_sector = $this->db->scape($data['field_up_sector']);
				$empty_certificate = $this->db->scape($data['field_up_certificate']);
				$empty_defunction = $this->db->scape($data['field_up_defunction']);
				$empty_investigation = $this->db->scape($data['field_up_investigation']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_fct_client_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_fct_client_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_fct_client_m_date_created => DATE_HOUR,
							d_azs_fct_client_m_date_modified => DATE_HOUR,
							d_azs_fct_client_m_deleted => $key_sql_select[d_azp_fct_client_m_deleted],
							d_azs_fct_client_m_description => $key_sql_select[d_azp_fct_client_m_description],
							d_azs_fct_client_m_level => $key_sql_select[d_azp_fct_client_m_level],
							d_azs_fct_client_m_status => $key_sql_select[d_azp_fct_client_m_status],
							d_azs_fct_client_m_temp => $key_sql_select[d_azp_fct_client_m_temp],
							d_azs_fct_client_t_name => strtoupper($key_sql_select[d_azp_fct_client_t_name]),
							d_azs_fct_client_u_fct_sector => strtoupper($key_sql_select[d_azp_fct_client_v_id_azp_fct_sector]),
							d_azs_fct_client_v_id_azp_fct_client => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_fct_client, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_fct_client_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_fct_client_m_date_modified => DATE_HOUR,
					d_azp_fct_client_m_description => $empty_description,
					d_azp_fct_client_m_status => $empty_state,
					d_azp_fct_client_t_certificate => strtoupper($empty_certificate),
					d_azp_fct_client_t_defunction => strtoupper($empty_defunction),
					d_azp_fct_client_t_investigation => strtoupper($empty_investigation),
					d_azp_fct_client_t_name => strtoupper($empty_name),
					d_azp_fct_client_v_id_azp_fct_sector => strtoupper($empty_sector),
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_fct_client, $var_array, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_crt_bank, d_azp_crt_bank_v_id_azp_fct_client . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asingacion de valores a nuevas variables
						$var_id = $value[d_azp_crt_bank_id_azp_crt_bank];
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_crt_bank_v_id_azp_fct_sector => $empty_sector,);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_crt_bank, $var_array, d_azp_crt_bank_id_azp_crt_bank . " = '" . $var_id . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_client, d_azp_gsc_client_v_id_azp_fct_client . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asingacion de valores a nuevas variables
						$var_id = $value[d_azp_gsc_client_id_azp_gsc_client];
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_gsc_client_v_id_azp_fct_sector => $empty_sector,);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_gsc_client, $var_array, d_azp_gsc_client_id_azp_gsc_client . " = '" . $var_id . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_v_id_azp_fct_client . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asingacion de valores a nuevas variables
						$var_id = $value[d_azp_ibn_client_id_azp_ibn_client];
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_ibn_client_v_id_azp_ibn_sector => $empty_sector, d_azp_ibn_client_v_id_azp_fct_sector => $empty_sector,);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_ibn_client, $var_array, d_azp_ibn_client_id_azp_ibn_client . " = '" . $var_id . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_fct_client_scale(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_sc_max'])) { throw new Exception('<b>Error:</b> El campo de max esta prohibido modificar.'); }
				if (!isset($data['field_sc_min'])) { throw new Exception('<b>Error:</b> El campo de min esta prohibido modificar.'); }
				if (!isset($data['field_sc_name'])) { throw new Exception('<b>Error:</b> El campo de descripciones esta prohibido modificar.'); }
				if (!isset($data['field_sc_client'])) { throw new Exception('<b>Error:</b> El campo de servicio esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_max = $this->db->scape($data['field_sc_max']);
				$empty_min = $this->db->scape($data['field_sc_min']);
				$empty_name = $this->db->scape($data['field_sc_name']);
				$empty_client = $this->db->scape($data['field_sc_client']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_max)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de max es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_max)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de max solo permite numeros.');
				}
				#---------------------------------------------#
				if (strlen($empty_max) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de max permite solamente hasta 10 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_max, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de max no permite ningun espacio en blanco.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_min)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de min es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_min)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de min solo permite numeros.');
				}
				#---------------------------------------------#
				if (strlen($empty_min) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de min permite solamente hasta 10 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_min, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de min no permite ningun espacio en blanco.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_min > $empty_max) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El valor de max no puede ser mayor al valor de min.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de descripciones es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de descripciones solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de descripciones permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de descripciones no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de descripciones no permite tener espacios en blanco al principio o al final.');
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
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El cliente seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_fct_client_scale(array $data) : array {
			$var_error = $this->error_sql_azp_fct_client_scale($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_max = $this->db->scape($data['field_sc_max']);
				$empty_min = $this->db->scape($data['field_sc_min']);
				$empty_name = $this->db->scape($data['field_sc_name']);
				$empty_client = $this->db->scape($data['field_sc_client']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_fct_scale_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_fct_scale_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_fct_scale_m_date_created => DATE_HOUR,
					d_azp_fct_scale_m_date_modified => DATE_HOUR,
					d_azp_fct_scale_m_deleted => '1',
					d_azp_fct_scale_m_description => '',
					d_azp_fct_scale_m_level => '2',
					d_azp_fct_scale_m_status => '1',
					d_azp_fct_scale_m_temp => '1',
					d_azp_fct_scale_t_max => strtoupper($empty_max),
					d_azp_fct_scale_t_min => strtoupper($empty_min),
					d_azp_fct_scale_t_name => strtoupper($empty_name),
					d_azp_fct_scale_v_id_azp_fct_client => strtoupper($empty_client),
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_fct_scale, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_fct_client_tariff(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_tf_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_tf_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_tf_iva'])) { throw new Exception('<b>Error:</b> El campo de iva esta prohibido modificar.'); }
				if (!isset($data['field_tf_value'])) { throw new Exception('<b>Error:</b> El campo de tarifa esta prohibido modificar.'); }
				if (!isset($data['field_tf_coverage'])) { throw new Exception('<b>Error:</b> El campo de cobertura esta prohibido modificar.'); }
				if (!isset($data['field_tf_investigation'])) { throw new Exception('<b>Error:</b> El campo de investigacion esta prohibido modificar.'); }
				if (!isset($data['field_tf_result'])) { throw new Exception('<b>Error:</b> El campo de resultado esta prohibido modificar.'); }
				if (!isset($data['field_tf_scale'])) { throw new Exception('<b>Error:</b> El campo de escala esta prohibido modificar.'); }
				if (!isset($data['field_tf_service'])) { throw new Exception('<b>Error:</b> El campo de servicio esta prohibido modificar.'); }
				if (!isset($data['field_tf_sub_coverage'])) { throw new Exception('<b>Error:</b> El campo de sub cobertura esta prohibido modificar.'); }
				if (!isset($data['field_tf_sub_service'])) { throw new Exception('<b>Error:</b> El campo de sub servicio esta prohibido modificar.'); }
				if (!isset($data['field_tf_sub_check'])) { throw new Exception('<b>Error:</b> El campo de check esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_tf_description']);
				$empty_client = $this->db->scape($data['field_tf_client']);
				$empty_iva = $this->db->scape($data['field_tf_iva']);
				$empty_value = $this->db->scape($data['field_tf_value']);
				$empty_coverage = $this->db->scape($data['field_tf_coverage']);
				$empty_investigation = $this->db->scape($data['field_tf_investigation']);
				$empty_result = $this->db->scape($data['field_tf_result']);
				$empty_scale = $this->db->scape($data['field_tf_scale']);
				$empty_service = $this->db->scape($data['field_tf_service']);
				$empty_sub_coverage = $this->db->scape($data['field_tf_sub_coverage']);
				$empty_sub_service = $this->db->scape($data['field_tf_sub_service']);
				$empty_sub_check = $this->db->scape($data['field_tf_sub_check']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_iva)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de iva es obligatorio.');
				}*/
				#-------------------------------------------------------------------------#
				if (strlen($empty_iva) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de iva debe tener minimo 1 caractere.');
				}
				#---------------------------------------------#
				if (strlen($empty_iva) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de iva permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_iva)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de iva no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tarifa es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tarifa solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_value) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tarifa permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				/*if (strpos($empty_value, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tarifa no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tarifa no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_coverage) || strtolower($empty_coverage) == strtolower('seleccionar') || $empty_coverage == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cobertura es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_coverage)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cobertura solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_investigation) || strtolower($empty_investigation) == strtolower('seleccionar') || $empty_investigation == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de investigacion es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_investigation)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de investigacion solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_result) || strtolower($empty_result) == strtolower('seleccionar') || $empty_result == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_result)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_scale) || strtolower($empty_scale) == strtolower('seleccionar') || $empty_scale == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de escala es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_scale)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de escala solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_service) || strtolower($empty_service) == strtolower('seleccionar') || $empty_service == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de servicio es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_service)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de servicio solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_sub_coverage) || strtolower($empty_sub_coverage) == strtolower('seleccionar') || $empty_sub_coverage == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub cobertura es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_sub_coverage)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub cobertura solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_sub_service) || strtolower($empty_sub_service) == strtolower('seleccionar') || $empty_sub_service == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub servicio es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_sub_service)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub servicio solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_coverage, d_azp_fct_coverage_id_azp_fct_coverage . " = '" . $empty_coverage . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> La cobertura seleccionada no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_investigation, d_azp_fct_investigation_id_azp_fct_investigation . " = '" . $empty_investigation . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> La investigacion seleccionada no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_result, d_azp_fct_result_id_azp_fct_result . " = '" . $empty_result . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El resultado seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_service, d_azp_fct_service_id_azp_fct_service . " = '" . $empty_service . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El servicio seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_sub_coverage, d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '" . $empty_sub_coverage . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El sub servicio seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_sub_service, d_azp_fct_sub_service_id_azp_fct_sub_service . " = '" . $empty_sub_service . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El sub servicio seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				/*sql_query = $this->db->select('*', t_azp_fct_tariff,
					d_azp_fct_tariff_v_id_azp_fct_coverage . " = '" . $empty_coverage . "' AND " .
					d_azp_fct_tariff_v_id_azp_fct_investigation . " = '" . $empty_investigation . "' AND " .
					d_azp_fct_tariff_v_id_azp_fct_result . " = '" . $empty_result . "' AND " .
					d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $empty_client . "' AND " .
					d_azp_fct_tariff_v_id_azp_fct_scale . " = '" . $empty_scale . "' AND " .
					d_azp_fct_tariff_v_id_azp_fct_service . " = '" . $empty_service . "' AND " .
					d_azp_fct_tariff_v_id_azp_fct_sub_service . " = '" . $empty_sub_service . "'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_query) { throw new Exception('<b>Error:</b> El servicio, sub servicio, escala, cobertura, sub cobertura e investigacion y resultado seleccionados ya existen registrados.'); }*/
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_fct_client_tariff(array $data) : array {
			$var_error = $this->error_sql_azp_fct_client_tariff($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_tf_description']);
				$empty_client = $this->db->scape($data['field_tf_client']);
				$empty_iva = $this->db->scape($data['field_tf_iva']);
				$empty_value = $this->db->scape($data['field_tf_value']);
				$empty_coverage = $this->db->scape($data['field_tf_coverage']);
				$empty_investigation = $this->db->scape($data['field_tf_investigation']);
				$empty_result = $this->db->scape($data['field_tf_result']);
				$empty_scale = $this->db->scape($data['field_tf_scale']);
				$empty_service = $this->db->scape($data['field_tf_service']);
				$empty_sub_coverage = $this->db->scape($data['field_tf_sub_coverage']);
				$empty_sub_service = $this->db->scape($data['field_tf_sub_service']);
				$empty_sub_check = $this->db->scape($data['field_tf_sub_check']);
				#-------------------------------------------------------------------------#
				$var_value = str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_value)));
				if ($var_value == '' || $var_value == 0) { $empty_tariff = 0; } else { $empty_tariff = $var_value; }
				#-------------------------------------------------------------------------#
				if ($empty_sub_service == '8') {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_fct_sub_service, d_azp_fct_sub_service_v_id_azp_fct_service . " = '1' AND " . d_azp_fct_sub_service_id_azp_fct_sub_service . " != 8");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_fct_tariff_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_fct_tariff_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_fct_tariff_m_date_created => DATE_HOUR,
								d_azp_fct_tariff_m_date_modified => DATE_HOUR,
								d_azp_fct_tariff_m_deleted => '1',
								d_azp_fct_tariff_m_description => $empty_description,
								d_azp_fct_tariff_m_level => '2',
								d_azp_fct_tariff_m_status => '1',
								d_azp_fct_tariff_m_temp => '1',
								d_azp_fct_tariff_t_iva => strtoupper($empty_iva),
								d_azp_fct_tariff_t_sub_check => strtoupper($empty_sub_check),
								d_azp_fct_tariff_t_value => strtoupper($empty_tariff),
								d_azp_fct_tariff_v_id_azp_fct_client => strtoupper($empty_client),
								d_azp_fct_tariff_v_id_azp_fct_coverage => strtoupper($empty_coverage),
								d_azp_fct_tariff_v_id_azp_fct_investigation => strtoupper($empty_investigation),
								d_azp_fct_tariff_v_id_azp_fct_result => strtoupper($empty_result),
								d_azp_fct_tariff_v_id_azp_fct_scale => strtoupper($empty_scale),
								d_azp_fct_tariff_v_id_azp_fct_service => strtoupper($empty_service),
								d_azp_fct_tariff_v_id_azp_fct_sub_coverage => strtoupper($empty_sub_coverage),
								d_azp_fct_tariff_v_id_azp_fct_sub_service => strtoupper($value[d_azp_fct_sub_service_id_azp_fct_sub_service]),
							);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->insert(t_azp_fct_tariff, $var_array);
						endforeach;
					}
				} /*else if ($empty_sub_service == '14') {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_fct_sub_service, d_azp_fct_sub_service_v_id_azp_fct_service . " = '3' AND " . d_azp_fct_sub_service_id_azp_fct_sub_service . " != 14");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(
								d_azp_fct_tariff_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_fct_tariff_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_fct_tariff_m_date_created => DATE_HOUR,
								d_azp_fct_tariff_m_date_modified => DATE_HOUR,
								d_azp_fct_tariff_m_deleted => '1',
								d_azp_fct_tariff_m_description => $empty_description,
								d_azp_fct_tariff_m_level => '2',
								d_azp_fct_tariff_m_status => '1',
								d_azp_fct_tariff_m_temp => '1',
								d_azp_fct_tariff_t_iva => strtoupper($empty_iva),
								d_azp_fct_tariff_t_value => strtoupper($empty_tariff),
								d_azp_fct_tariff_v_id_azp_fct_client => strtoupper($empty_client),
								d_azp_fct_tariff_v_id_azp_fct_coverage => strtoupper($empty_coverage),
								d_azp_fct_tariff_v_id_azp_fct_investigation => strtoupper($empty_investigation),
								d_azp_fct_tariff_v_id_azp_fct_result => strtoupper($empty_result),
								d_azp_fct_tariff_v_id_azp_fct_scale => strtoupper($empty_scale),
								d_azp_fct_tariff_v_id_azp_fct_service => strtoupper($empty_service),
								d_azp_fct_tariff_v_id_azp_fct_sub_coverage => strtoupper($empty_sub_coverage),
								d_azp_fct_tariff_v_id_azp_fct_sub_service => strtoupper($value[d_azp_fct_sub_service_id_azp_fct_sub_service]),
							);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->insert(t_azp_fct_tariff, $var_array);
						endforeach;
					}
				}*/ else {
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_fct_tariff_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_fct_tariff_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_fct_tariff_m_date_created => DATE_HOUR,
						d_azp_fct_tariff_m_date_modified => DATE_HOUR,
						d_azp_fct_tariff_m_deleted => '1',
						d_azp_fct_tariff_m_description => $empty_description,
						d_azp_fct_tariff_m_level => '2',
						d_azp_fct_tariff_m_status => '1',
						d_azp_fct_tariff_m_temp => '1',
						d_azp_fct_tariff_t_iva => strtoupper($empty_iva),
						d_azp_fct_tariff_t_sub_check => strtoupper($empty_sub_check),
						d_azp_fct_tariff_t_value => strtoupper($empty_tariff),
						d_azp_fct_tariff_v_id_azp_fct_client => strtoupper($empty_client),
						d_azp_fct_tariff_v_id_azp_fct_coverage => strtoupper($empty_coverage),
						d_azp_fct_tariff_v_id_azp_fct_investigation => strtoupper($empty_investigation),
						d_azp_fct_tariff_v_id_azp_fct_result => strtoupper($empty_result),
						d_azp_fct_tariff_v_id_azp_fct_scale => strtoupper($empty_scale),
						d_azp_fct_tariff_v_id_azp_fct_service => strtoupper($empty_service),
						d_azp_fct_tariff_v_id_azp_fct_sub_coverage => strtoupper($empty_sub_coverage),
						d_azp_fct_tariff_v_id_azp_fct_sub_service => strtoupper($empty_sub_service),
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->insert(t_azp_fct_tariff, $var_array);
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_fct_client_edit(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_et_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_et_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_et_id']);
				$empty_description = $this->db->scape($data['field_et_description']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_et_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_et_iva'])) { throw new Exception('<b>Error:</b> El campo de iva esta prohibido modificar.'); }
				if (!isset($data['field_et_value'])) { throw new Exception('<b>Error:</b> El campo de tarifa esta prohibido modificar.'); }
				if (!isset($data['field_et_coverage'])) { throw new Exception('<b>Error:</b> El campo de cobertura esta prohibido modificar.'); }
				if (!isset($data['field_et_investigation'])) { throw new Exception('<b>Error:</b> El campo de investigacion esta prohibido modificar.'); }
				if (!isset($data['field_et_result'])) { throw new Exception('<b>Error:</b> El campo de resultado esta prohibido modificar.'); }
				if (!isset($data['field_et_scale'])) { throw new Exception('<b>Error:</b> El campo de escala esta prohibido modificar.'); }
				if (!isset($data['field_et_service'])) { throw new Exception('<b>Error:</b> El campo de servicio esta prohibido modificar.'); }
				if (!isset($data['field_et_sub_coverage'])) { throw new Exception('<b>Error:</b> El campo de sub cobertura esta prohibido modificar.'); }
				if (!isset($data['field_et_sub_service'])) { throw new Exception('<b>Error:</b> El campo de sub servicio esta prohibido modificar.'); }
				if (!isset($data['field_et_sub_check'])) { throw new Exception('<b>Error:</b> El campo de check esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_client = $this->db->scape($data['field_et_client']);
				$empty_iva = $this->db->scape($data['field_et_iva']);
				$empty_value = $this->db->scape($data['field_et_value']);
				$empty_coverage = $this->db->scape($data['field_et_coverage']);
				$empty_investigation = $this->db->scape($data['field_et_investigation']);
				$empty_result = $this->db->scape($data['field_et_result']);
				$empty_scale = $this->db->scape($data['field_et_scale']);
				$empty_service = $this->db->scape($data['field_et_service']);
				$empty_sub_coverage = $this->db->scape($data['field_et_sub_coverage']);
				$empty_sub_service = $this->db->scape($data['field_et_sub_service']);
				$empty_sub_check = $this->db->scape($data['field_et_sub_check']);
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
				/*if (Func::emp($empty_iva)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de iva es obligatorio.');
				}*/
				#-------------------------------------------------------------------------#
				if (strlen($empty_iva) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de iva debe tener minimo 1 caractere.');
				}
				#---------------------------------------------#
				if (strlen($empty_iva) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de iva permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_iva)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de iva no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tarifa es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tarifa solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_value) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tarifa permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				/*if (strpos($empty_value, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tarifa no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tarifa no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_coverage) || strtolower($empty_coverage) == strtolower('seleccionar') || $empty_coverage == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cobertura es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_coverage)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cobertura solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_investigation) || strtolower($empty_investigation) == strtolower('seleccionar') || $empty_investigation == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de investigacion es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_investigation)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de investigacion solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_result) || strtolower($empty_result) == strtolower('seleccionar') || $empty_result == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_result)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_scale) || strtolower($empty_scale) == strtolower('seleccionar') || $empty_scale == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de escala es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_scale)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de escala solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_service) || strtolower($empty_service) == strtolower('seleccionar') || $empty_service == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de servicio es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_service)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de servicio solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_sub_coverage) || strtolower($empty_sub_coverage) == strtolower('seleccionar') || $empty_sub_coverage == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub cobertura es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_sub_coverage)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub cobertura solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_sub_service) || strtolower($empty_sub_service) == strtolower('seleccionar') || $empty_sub_service == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub servicio es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_sub_service)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub servicio solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_coverage, d_azp_fct_coverage_id_azp_fct_coverage . " = '" . $empty_coverage . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> La cobertura seleccionada no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_investigation, d_azp_fct_investigation_id_azp_fct_investigation . " = '" . $empty_investigation . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> La investigacion seleccionada no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_result, d_azp_fct_result_id_azp_fct_result . " = '" . $empty_result . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El resultado seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_service, d_azp_fct_service_id_azp_fct_service . " = '" . $empty_service . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El servicio seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_sub_coverage, d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " = '" . $empty_sub_coverage . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El sub servicio seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_found = $this->db->select('*', t_azp_fct_sub_service, d_azp_fct_sub_service_id_azp_fct_sub_service . " = '" . $empty_sub_service . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El sub servicio seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				/*sql_query = $this->db->select('*', t_azp_fct_tariff,
					d_azp_fct_tariff_v_id_azp_fct_coverage . " = '" . $empty_coverage . "' AND " .
					d_azp_fct_tariff_v_id_azp_fct_investigation . " = '" . $empty_investigation . "' AND " .
					d_azp_fct_tariff_v_id_azp_fct_result . " = '" . $empty_result . "' AND " .
					d_azp_fct_tariff_v_id_azp_fct_client . " = '" . $empty_client . "' AND " .
					d_azp_fct_tariff_v_id_azp_fct_scale . " = '" . $empty_scale . "' AND " .
					d_azp_fct_tariff_v_id_azp_fct_service . " = '" . $empty_service . "' AND " .
					d_azp_fct_tariff_v_id_azp_fct_sub_service . " = '" . $empty_sub_service . "'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_query) { throw new Exception('<b>Error:</b> El servicio, sub servicio, escala, cobertura, sub cobertura e investigacion y resultado seleccionados ya existen registrados.'); }*/
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_fct_client_edit(array $data) : array {
			$var_error = $this->error_sql_azp_fct_client_edit($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_et_id']);
				$empty_description = $this->db->scape($data['field_et_description']);
				$empty_client = $this->db->scape($data['field_et_client']);
				$empty_iva = $this->db->scape($data['field_et_iva']);
				$empty_value = $this->db->scape($data['field_et_value']);
				$empty_coverage = $this->db->scape($data['field_et_coverage']);
				$empty_investigation = $this->db->scape($data['field_et_investigation']);
				$empty_result = $this->db->scape($data['field_et_result']);
				$empty_scale = $this->db->scape($data['field_et_scale']);
				$empty_service = $this->db->scape($data['field_et_service']);
				$empty_sub_coverage = $this->db->scape($data['field_et_sub_coverage']);
				$empty_sub_service = $this->db->scape($data['field_et_sub_service']);
				$empty_sub_check = $this->db->scape($data['field_et_sub_check']);
				#-------------------------------------------------------------------------#
				$var_value = str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_value)));
				if ($var_value == '' || $var_value == 0) { $empty_tariff = 0; } else { $empty_tariff = $var_value; }
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_fct_tariff_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_fct_tariff_m_date_modified => DATE_HOUR,
					d_azp_fct_tariff_m_description => $empty_description,
					d_azp_fct_tariff_t_iva => strtoupper($empty_iva),
					d_azp_fct_tariff_t_sub_check => strtoupper($empty_sub_check),
					d_azp_fct_tariff_t_value => strtoupper($empty_tariff),
					//d_azp_fct_tariff_v_id_azp_fct_client => strtoupper($empty_client),
					d_azp_fct_tariff_v_id_azp_fct_coverage => strtoupper($empty_coverage),
					d_azp_fct_tariff_v_id_azp_fct_investigation => strtoupper($empty_investigation),
					d_azp_fct_tariff_v_id_azp_fct_result => strtoupper($empty_result),
					d_azp_fct_tariff_v_id_azp_fct_scale => strtoupper($empty_scale),
					d_azp_fct_tariff_v_id_azp_fct_service => strtoupper($empty_service),
					d_azp_fct_tariff_v_id_azp_fct_sub_coverage => strtoupper($empty_sub_coverage),
					d_azp_fct_tariff_v_id_azp_fct_sub_service => strtoupper($empty_sub_service),
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->update(t_azp_fct_tariff, $var_array, d_azp_fct_tariff_id_azp_fct_tariff . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_coverage() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_coverage,
				d_azp_fct_coverage_m_deleted . " = '1' AND " .
				d_azp_fct_coverage_m_status . " = '1' ORDER BY " .
				d_azp_fct_coverage_id_azp_fct_coverage . " ASC"
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_investigation_all() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_investigation,
				d_azp_fct_investigation_m_deleted . " = '1' AND " .
				d_azp_fct_investigation_m_status . " = '1' AND " .
				d_azp_fct_investigation_id_azp_fct_investigation . " >= '2' ORDER BY " .
				d_azp_fct_investigation_id_azp_fct_investigation . " ASC"
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_investigation_one() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_investigation,
				d_azp_fct_investigation_m_deleted . " = '1' AND " .
				d_azp_fct_investigation_m_status . " = '1' AND " .
				d_azp_fct_investigation_id_azp_fct_investigation . " = '1' ORDER BY " .
				d_azp_fct_investigation_id_azp_fct_investigation . " ASC"
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_result_all() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_result,
				d_azp_fct_result_m_deleted . " = '1' AND " .
				d_azp_fct_result_m_status . " = '1' AND " .
				d_azp_fct_result_id_azp_fct_result . " >= '2' ORDER BY " .
				d_azp_fct_result_id_azp_fct_result . " ASC"
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_result_one() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_result,
				d_azp_fct_result_m_deleted . " = '1' AND " .
				d_azp_fct_result_m_status . " = '1' AND " .
				d_azp_fct_result_id_azp_fct_result . " = '1' ORDER BY " .
				d_azp_fct_result_id_azp_fct_result . " ASC"
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_scale() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_scale,
				d_azp_fct_scale_m_deleted . " = '1' AND " .
				d_azp_fct_scale_m_status . " = '1' AND " .
				d_azp_fct_scale_v_id_azp_fct_client . " = '" . $this->id . "' ORDER BY " .
				d_azp_fct_scale_id_azp_fct_scale . " ASC"
			);
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
		final public function sql_select_tc_azp_fct_sub_coverage() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_sub_coverage,
				d_azp_fct_sub_coverage_m_deleted . " = '1' AND " .
				d_azp_fct_sub_coverage_m_status . " = '1' AND " .
				d_azp_fct_sub_coverage_v_id_azp_fct_coverage . " = '" . $this->id . "' ORDER BY " .
				d_azp_fct_sub_coverage_id_azp_fct_sub_coverage . " ASC"
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_sub_service() {
			//echo $_GET['field_ck'];
			//if (!isset($_GET['field_ck'])) { $var_id = d_azp_fct_sub_service_id_azp_fct_sub_service . " = '14' AND "; } else { $var_id = d_azp_fct_sub_service_id_azp_fct_sub_service . " != '14' AND "; }
			if ($_GET['field_ck'] == 14) { $var_id = d_azp_fct_sub_service_id_azp_fct_sub_service . " = '14' AND "; } else { $var_id = d_azp_fct_sub_service_id_azp_fct_sub_service . " != '14' AND "; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_sub_service, $var_id .
				d_azp_fct_sub_service_m_deleted . " = '1' AND " .
				d_azp_fct_sub_service_m_status . " = '1' AND " .
				d_azp_fct_sub_service_v_id_azp_fct_service . " = '" . $this->id . "' ORDER BY " .
				d_azp_fct_sub_service_id_azp_fct_sub_service . " ASC"
			);
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>