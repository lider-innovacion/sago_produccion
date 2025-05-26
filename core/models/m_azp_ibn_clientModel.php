<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_ibn_clientModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_archive() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . " AS 'lbl_azp_ibn_client_id_azp_ibn_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_client." . d_azp_ibn_client_m_date_created . " AS 'lbl_azp_ibn_client_m_date_created',
					tc_azp_ibn_client." . d_azp_ibn_client_m_date_modified . " AS 'lbl_azp_ibn_client_m_date_modified',
					tc_azp_ibn_client." . d_azp_ibn_client_m_description . " AS 'lbl_azp_ibn_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_t_days . " AS 'lbl_azp_ibn_client_t_days',
					tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_document . " AS 'lbl_azp_ibn_client_w_document',
					tc_azp_ibn_client." . d_azp_ibn_client_w_error . " AS 'lbl_azp_ibn_client_w_error',
					tc_azp_ibn_client." . d_azp_ibn_client_w_folder . " AS 'lbl_azp_ibn_client_w_folder',
					tc_azp_ibn_client." . d_azp_ibn_client_w_name . " AS 'lbl_azp_ibn_client_w_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_route . " AS 'lbl_azp_ibn_client_w_route',
					tc_azp_ibn_client." . d_azp_ibn_client_w_size . " AS 'lbl_azp_ibn_client_w_size',
					tc_azp_ibn_client." . d_azp_ibn_client_w_tmp_name . " AS 'lbl_azp_ibn_client_w_tmp_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_type . " AS 'lbl_azp_ibn_client_w_type',
					tc_azp_ibn_sector." . d_azp_ibn_sector_t_name . " AS 'lbl_azp_ibn_sector_t_name'
				FROM " . t_azp_ibn_client . " tc_azp_ibn_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_sector . " tc_azp_ibn_sector
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_ibn_sector . "
						= tc_azp_ibn_sector." . d_azp_ibn_sector_id_azp_ibn_sector . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_format_file . " tc_azp_ibn_format_file
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_ibn_format_file . "
						= tc_azp_ibn_format_file." . d_azp_ibn_format_file_id_azp_ibn_format_file . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_client." . d_azp_ibn_client_m_deleted . " = '5'
				ORDER BY tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_by_create() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . " AS 'lbl_azp_ibn_client_id_azp_ibn_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_client." . d_azp_ibn_client_m_date_created . " AS 'lbl_azp_ibn_client_m_date_created',
					tc_azp_ibn_client." . d_azp_ibn_client_m_date_modified . " AS 'lbl_azp_ibn_client_m_date_modified',
					tc_azp_ibn_client." . d_azp_ibn_client_m_description . " AS 'lbl_azp_ibn_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_t_days . " AS 'lbl_azp_ibn_client_t_days',
					tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_document . " AS 'lbl_azp_ibn_client_w_document',
					tc_azp_ibn_client." . d_azp_ibn_client_w_error . " AS 'lbl_azp_ibn_client_w_error',
					tc_azp_ibn_client." . d_azp_ibn_client_w_folder . " AS 'lbl_azp_ibn_client_w_folder',
					tc_azp_ibn_client." . d_azp_ibn_client_w_name . " AS 'lbl_azp_ibn_client_w_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_route . " AS 'lbl_azp_ibn_client_w_route',
					tc_azp_ibn_client." . d_azp_ibn_client_w_size . " AS 'lbl_azp_ibn_client_w_size',
					tc_azp_ibn_client." . d_azp_ibn_client_w_tmp_name . " AS 'lbl_azp_ibn_client_w_tmp_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_type . " AS 'lbl_azp_ibn_client_w_type',
					tc_azp_ibn_sector." . d_azp_ibn_sector_t_name . " AS 'lbl_azp_ibn_sector_t_name'
				FROM " . t_azp_ibn_client . " tc_azp_ibn_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_sector . " tc_azp_ibn_sector
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_ibn_sector . "
						= tc_azp_ibn_sector." . d_azp_ibn_sector_id_azp_ibn_sector . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_format_file . " tc_azp_ibn_format_file
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_ibn_format_file . "
						= tc_azp_ibn_format_file." . d_azp_ibn_format_file_id_azp_ibn_format_file . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_client." . d_azp_ibn_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_ibn_client." . d_azp_ibn_client_m_deleted . " = '1'
				ORDER BY tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_ibn_client." . d_azs_ibn_client_id_azs_ibn_client . " AS 'lbl_azs_ibn_client_id_azs_ibn_client',
					tc_azs_ibn_client." . d_azs_ibn_client_m_date_modified . " AS 'lbl_azs_ibn_client_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_ibn_client." . d_azs_ibn_client_m_date_created . " AS 'lbl_azs_ibn_client_m_date_created',
					tc_azs_ibn_client." . d_azs_ibn_client_m_date_modified . " AS 'lbl_azs_ibn_client_m_date_modified',
					tc_azs_ibn_client." . d_azs_ibn_client_m_description . " AS 'lbl_azs_ibn_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_ibn_client." . d_azs_ibn_client_t_name . " AS 'lbl_azs_ibn_client_t_name',
					tc_azs_ibn_client." . d_azs_ibn_client_u_ibn_sector . " AS 'lbl_azs_ibn_client_u_ibn_sector',
					tc_azs_ibn_client." . d_azs_ibn_client_w_document . " AS 'lbl_azs_ibn_client_w_document',
					tc_azs_ibn_client." . d_azs_ibn_client_w_error . " AS 'lbl_azs_ibn_client_w_error',
					tc_azs_ibn_client." . d_azs_ibn_client_w_folder . " AS 'lbl_azs_ibn_client_w_folder',
					tc_azs_ibn_client." . d_azs_ibn_client_w_name . " AS 'lbl_azs_ibn_client_w_name',
					tc_azs_ibn_client." . d_azs_ibn_client_w_route . " AS 'lbl_azs_ibn_client_w_route',
					tc_azs_ibn_client." . d_azs_ibn_client_w_size . " AS 'lbl_azs_ibn_client_w_size',
					tc_azs_ibn_client." . d_azs_ibn_client_w_tmp_name . " AS 'lbl_azs_ibn_client_w_tmp_name',
					tc_azs_ibn_client." . d_azs_ibn_client_w_type . " AS 'lbl_azs_ibn_client_w_type'
				FROM " . t_azs_ibn_client . " tc_azs_ibn_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_ibn_client." . d_azs_ibn_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_ibn_client." . d_azs_ibn_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_ibn_client." . d_azs_ibn_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_ibn_client." . d_azs_ibn_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_ibn_client." . d_azs_ibn_client_v_id_azp_ibn_client . " = '" . $this->id . "'
				ORDER BY tc_azs_ibn_client." . d_azs_ibn_client_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_ibn_client . "
				WHERE " . d_azp_ibn_client_id_azp_ibn_client . " = '" . $this->id . "'
					AND " . d_azp_ibn_client_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_ibn_client);
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
					tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . " AS 'lbl_azp_ibn_client_id_azp_ibn_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_client." . d_azp_ibn_client_m_date_created . " AS 'lbl_azp_ibn_client_m_date_created',
					tc_azp_ibn_client." . d_azp_ibn_client_m_date_modified . " AS 'lbl_azp_ibn_client_m_date_modified',
					tc_azp_ibn_client." . d_azp_ibn_client_m_description . " AS 'lbl_azp_ibn_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_t_days . " AS 'lbl_azp_ibn_client_t_days',
					tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_document . " AS 'lbl_azp_ibn_client_w_document',
					tc_azp_ibn_client." . d_azp_ibn_client_w_error . " AS 'lbl_azp_ibn_client_w_error',
					tc_azp_ibn_client." . d_azp_ibn_client_w_folder . " AS 'lbl_azp_ibn_client_w_folder',
					tc_azp_ibn_client." . d_azp_ibn_client_w_name . " AS 'lbl_azp_ibn_client_w_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_route . " AS 'lbl_azp_ibn_client_w_route',
					tc_azp_ibn_client." . d_azp_ibn_client_w_size . " AS 'lbl_azp_ibn_client_w_size',
					tc_azp_ibn_client." . d_azp_ibn_client_w_tmp_name . " AS 'lbl_azp_ibn_client_w_tmp_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_type . " AS 'lbl_azp_ibn_client_w_type',
					tc_azp_ibn_sector." . d_azp_ibn_sector_t_name . " AS 'lbl_azp_ibn_sector_t_name'
				FROM " . t_azp_ibn_client . " tc_azp_ibn_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_sector . " tc_azp_ibn_sector
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_ibn_sector . "
						= tc_azp_ibn_sector." . d_azp_ibn_sector_id_azp_ibn_sector . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_format_file . " tc_azp_ibn_format_file
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_ibn_format_file . "
						= tc_azp_ibn_format_file." . d_azp_ibn_format_file_id_azp_ibn_format_file . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . " = '" . $this->id . "'
					AND tc_azp_ibn_client." . d_azp_ibn_client_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . " AS 'lbl_azp_ibn_client_id_azp_ibn_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_client." . d_azp_ibn_client_m_date_created . " AS 'lbl_azp_ibn_client_m_date_created',
					tc_azp_ibn_client." . d_azp_ibn_client_m_date_modified . " AS 'lbl_azp_ibn_client_m_date_modified',
					tc_azp_ibn_client." . d_azp_ibn_client_m_description . " AS 'lbl_azp_ibn_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_t_days . " AS 'lbl_azp_ibn_client_t_days',
					tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_document . " AS 'lbl_azp_ibn_client_w_document',
					tc_azp_ibn_client." . d_azp_ibn_client_w_error . " AS 'lbl_azp_ibn_client_w_error',
					tc_azp_ibn_client." . d_azp_ibn_client_w_folder . " AS 'lbl_azp_ibn_client_w_folder',
					tc_azp_ibn_client." . d_azp_ibn_client_w_name . " AS 'lbl_azp_ibn_client_w_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_route . " AS 'lbl_azp_ibn_client_w_route',
					tc_azp_ibn_client." . d_azp_ibn_client_w_size . " AS 'lbl_azp_ibn_client_w_size',
					tc_azp_ibn_client." . d_azp_ibn_client_w_tmp_name . " AS 'lbl_azp_ibn_client_w_tmp_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_type . " AS 'lbl_azp_ibn_client_w_type',
					tc_azp_ibn_sector." . d_azp_ibn_sector_t_name . " AS 'lbl_azp_ibn_sector_t_name'
				FROM " . t_azp_ibn_client . " tc_azp_ibn_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_sector . " tc_azp_ibn_sector
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_ibn_sector . "
						= tc_azp_ibn_sector." . d_azp_ibn_sector_id_azp_ibn_sector . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_format_file . " tc_azp_ibn_format_file
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_ibn_format_file . "
						= tc_azp_ibn_format_file." . d_azp_ibn_format_file_id_azp_ibn_format_file . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_client." . d_azp_ibn_client_m_deleted . " = '3'
				ORDER BY tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . " AS 'lbl_azp_ibn_client_id_azp_ibn_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_client." . d_azp_ibn_client_m_date_created . " AS 'lbl_azp_ibn_client_m_date_created',
					tc_azp_ibn_client." . d_azp_ibn_client_m_date_modified . " AS 'lbl_azp_ibn_client_m_date_modified',
					tc_azp_ibn_client." . d_azp_ibn_client_m_description . " AS 'lbl_azp_ibn_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_t_days . " AS 'lbl_azp_ibn_client_t_days',
					tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_document . " AS 'lbl_azp_ibn_client_w_document',
					tc_azp_ibn_client." . d_azp_ibn_client_w_error . " AS 'lbl_azp_ibn_client_w_error',
					tc_azp_ibn_client." . d_azp_ibn_client_w_folder . " AS 'lbl_azp_ibn_client_w_folder',
					tc_azp_ibn_client." . d_azp_ibn_client_w_name . " AS 'lbl_azp_ibn_client_w_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_route . " AS 'lbl_azp_ibn_client_w_route',
					tc_azp_ibn_client." . d_azp_ibn_client_w_size . " AS 'lbl_azp_ibn_client_w_size',
					tc_azp_ibn_client." . d_azp_ibn_client_w_tmp_name . " AS 'lbl_azp_ibn_client_w_tmp_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_type . " AS 'lbl_azp_ibn_client_w_type',
					tc_azp_ibn_sector." . d_azp_ibn_sector_t_name . " AS 'lbl_azp_ibn_sector_t_name'
				FROM " . t_azp_ibn_client . " tc_azp_ibn_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_sector . " tc_azp_ibn_sector
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_ibn_sector . "
						= tc_azp_ibn_sector." . d_azp_ibn_sector_id_azp_ibn_sector . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_format_file . " tc_azp_ibn_format_file
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_ibn_format_file . "
						= tc_azp_ibn_format_file." . d_azp_ibn_format_file_id_azp_ibn_format_file . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_client." . d_azp_ibn_client_m_deleted . " = '1'
				ORDER BY tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . " AS 'lbl_azp_ibn_client_id_azp_ibn_client',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_client." . d_azp_ibn_client_m_date_created . " AS 'lbl_azp_ibn_client_m_date_created',
					tc_azp_ibn_client." . d_azp_ibn_client_m_date_modified . " AS 'lbl_azp_ibn_client_m_date_modified',
					tc_azp_ibn_client." . d_azp_ibn_client_m_description . " AS 'lbl_azp_ibn_client_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_t_days . " AS 'lbl_azp_ibn_client_t_days',
					tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_document . " AS 'lbl_azp_ibn_client_w_document',
					tc_azp_ibn_client." . d_azp_ibn_client_w_error . " AS 'lbl_azp_ibn_client_w_error',
					tc_azp_ibn_client." . d_azp_ibn_client_w_folder . " AS 'lbl_azp_ibn_client_w_folder',
					tc_azp_ibn_client." . d_azp_ibn_client_w_name . " AS 'lbl_azp_ibn_client_w_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_route . " AS 'lbl_azp_ibn_client_w_route',
					tc_azp_ibn_client." . d_azp_ibn_client_w_size . " AS 'lbl_azp_ibn_client_w_size',
					tc_azp_ibn_client." . d_azp_ibn_client_w_tmp_name . " AS 'lbl_azp_ibn_client_w_tmp_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_type . " AS 'lbl_azp_ibn_client_w_type',
					tc_azp_ibn_sector." . d_azp_ibn_sector_t_name . " AS 'lbl_azp_ibn_sector_t_name'
				FROM " . t_azp_ibn_client . " tc_azp_ibn_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_sector . " tc_azp_fct_sector
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_sector . "
						= tc_azp_fct_sector." . d_azp_fct_sector_id_azp_fct_sector . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_sector . " tc_azp_ibn_sector
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_ibn_sector . "
						= tc_azp_ibn_sector." . d_azp_ibn_sector_id_azp_ibn_sector . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_format_file . " tc_azp_ibn_format_file
					ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_ibn_format_file . "
						= tc_azp_ibn_format_file." . d_azp_ibn_format_file_id_azp_ibn_format_file . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_client." . d_azp_ibn_client_m_deleted . " = '2'
				ORDER BY tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . " AS 'lbl_azp_ibn_client_id_azp_ibn_client',
					tc_azp_ibn_client." . d_azp_ibn_client_m_by_created . " AS 'lbl_azp_ibn_client_m_by_created',
					tc_azp_ibn_client." . d_azp_ibn_client_m_by_modified . " AS 'lbl_azp_ibn_client_m_by_modified',
					tc_azp_ibn_client." . d_azp_ibn_client_m_date_created . " AS 'lbl_azp_ibn_client_m_date_created',
					tc_azp_ibn_client." . d_azp_ibn_client_m_date_modified . " AS 'lbl_azp_ibn_client_m_date_modified',
					tc_azp_ibn_client." . d_azp_ibn_client_m_description . " AS 'lbl_azp_ibn_client_m_description',
					tc_azp_ibn_client." . d_azp_ibn_client_m_level . " AS 'lbl_azp_ibn_client_m_level',
					tc_azp_ibn_client." . d_azp_ibn_client_m_status . " AS 'lbl_azp_ibn_client_m_status',
					tc_azp_ibn_client." . d_azp_ibn_client_t_days . " AS 'lbl_azp_ibn_client_t_days',
					tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_document . " AS 'lbl_azp_ibn_client_w_document',
					tc_azp_ibn_client." . d_azp_ibn_client_w_error . " AS 'lbl_azp_ibn_client_w_error',
					tc_azp_ibn_client." . d_azp_ibn_client_w_folder . " AS 'lbl_azp_ibn_client_w_folder',
					tc_azp_ibn_client." . d_azp_ibn_client_w_name . " AS 'lbl_azp_ibn_client_w_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_route . " AS 'lbl_azp_ibn_client_w_route',
					tc_azp_ibn_client." . d_azp_ibn_client_w_size . " AS 'lbl_azp_ibn_client_w_size',
					tc_azp_ibn_client." . d_azp_ibn_client_w_tmp_name . " AS 'lbl_azp_ibn_client_w_tmp_name',
					tc_azp_ibn_client." . d_azp_ibn_client_w_type . " AS 'lbl_azp_ibn_client_w_type',
					tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_ibn_format_file . " AS 'lbl_azp_ibn_client_v_id_azp_ibn_format_file',
					tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_ibn_sector . " AS 'lbl_azp_ibn_client_v_id_azp_ibn_sector',
					tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . " AS 'lbl_azp_ibn_client_v_id_azp_fct_client',
					tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_sector . " AS 'lbl_azp_ibn_client_v_id_azp_fct_sector'
				FROM " . t_azp_ibn_client . " tc_azp_ibn_client
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_client." . d_azp_ibn_client_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . " = '" . $this->id . "'
					AND tc_azp_ibn_client." . d_azp_ibn_client_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_client_concept_all(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_m_cm_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_ibn_module'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_01'])) { throw new Exception('<b>Error:</b> El campo de texto 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_01'])) { throw new Exception('<b>Error:</b> El campo de campo 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_02'])) { throw new Exception('<b>Error:</b> El campo de texto 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_02'])) { throw new Exception('<b>Error:</b> El campo de campo 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_03'])) { throw new Exception('<b>Error:</b> El campo de texto 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_03'])) { throw new Exception('<b>Error:</b> El campo de campo 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_04'])) { throw new Exception('<b>Error:</b> El campo de texto 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_04'])) { throw new Exception('<b>Error:</b> El campo de campo 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_05'])) { throw new Exception('<b>Error:</b> El campo de texto 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_05'])) { throw new Exception('<b>Error:</b> El campo de campo 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_06'])) { throw new Exception('<b>Error:</b> El campo de texto 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_06'])) { throw new Exception('<b>Error:</b> El campo de campo 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_07'])) { throw new Exception('<b>Error:</b> El campo de texto 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_07'])) { throw new Exception('<b>Error:</b> El campo de campo 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_08'])) { throw new Exception('<b>Error:</b> El campo de texto 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_08'])) { throw new Exception('<b>Error:</b> El campo de campo 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_09'])) { throw new Exception('<b>Error:</b> El campo de texto 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_09'])) { throw new Exception('<b>Error:</b> El campo de campo 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_10'])) { throw new Exception('<b>Error:</b> El campo de texto 10 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_10'])) { throw new Exception('<b>Error:</b> El campo de campo 10 esta prohibido modificar.'); }
				
				if (!isset($data['field_m_cm_text_11'])) { throw new Exception('<b>Error:</b> El campo de texto 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_11'])) { throw new Exception('<b>Error:</b> El campo de campo 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_12'])) { throw new Exception('<b>Error:</b> El campo de texto 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_12'])) { throw new Exception('<b>Error:</b> El campo de campo 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_13'])) { throw new Exception('<b>Error:</b> El campo de texto 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_13'])) { throw new Exception('<b>Error:</b> El campo de campo 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_14'])) { throw new Exception('<b>Error:</b> El campo de texto 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_14'])) { throw new Exception('<b>Error:</b> El campo de campo 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_15'])) { throw new Exception('<b>Error:</b> El campo de texto 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_15'])) { throw new Exception('<b>Error:</b> El campo de campo 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_16'])) { throw new Exception('<b>Error:</b> El campo de texto 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_16'])) { throw new Exception('<b>Error:</b> El campo de campo 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_17'])) { throw new Exception('<b>Error:</b> El campo de texto 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_17'])) { throw new Exception('<b>Error:</b> El campo de campo 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_18'])) { throw new Exception('<b>Error:</b> El campo de texto 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_18'])) { throw new Exception('<b>Error:</b> El campo de campo 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_19'])) { throw new Exception('<b>Error:</b> El campo de texto 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_19'])) { throw new Exception('<b>Error:</b> El campo de campo 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_20'])) { throw new Exception('<b>Error:</b> El campo de texto 20 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_20'])) { throw new Exception('<b>Error:</b> El campo de campo 20 esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_cm_id = $this->db->scape($data['field_m_cm_id']);
				$empty_cm_ibn_module = $this->db->scape($data['field_m_cm_ibn_module']);
				$empty_cm_text_01 = $this->db->scape($data['field_m_cm_text_01']);
				$empty_cm_land_01 = $this->db->scape($data['field_m_cm_land_01']);
				$empty_cm_text_02 = $this->db->scape($data['field_m_cm_text_02']);
				$empty_cm_land_02 = $this->db->scape($data['field_m_cm_land_02']);
				$empty_cm_text_03 = $this->db->scape($data['field_m_cm_text_03']);
				$empty_cm_land_03 = $this->db->scape($data['field_m_cm_land_03']);
				$empty_cm_text_04 = $this->db->scape($data['field_m_cm_text_04']);
				$empty_cm_land_04 = $this->db->scape($data['field_m_cm_land_04']);
				$empty_cm_text_05 = $this->db->scape($data['field_m_cm_text_05']);
				$empty_cm_land_05 = $this->db->scape($data['field_m_cm_land_05']);
				$empty_cm_text_06 = $this->db->scape($data['field_m_cm_text_06']);
				$empty_cm_land_06 = $this->db->scape($data['field_m_cm_land_06']);
				$empty_cm_text_07 = $this->db->scape($data['field_m_cm_text_07']);
				$empty_cm_land_07 = $this->db->scape($data['field_m_cm_land_07']);
				$empty_cm_text_08 = $this->db->scape($data['field_m_cm_text_08']);
				$empty_cm_land_08 = $this->db->scape($data['field_m_cm_land_08']);
				$empty_cm_text_09 = $this->db->scape($data['field_m_cm_text_09']);
				$empty_cm_land_09 = $this->db->scape($data['field_m_cm_land_09']);
				$empty_cm_text_10 = $this->db->scape($data['field_m_cm_text_10']);
				$empty_cm_land_10 = $this->db->scape($data['field_m_cm_land_10']);
				
				$empty_cm_text_11 = $this->db->scape($data['field_m_cm_text_11']);
				$empty_cm_land_11 = $this->db->scape($data['field_m_cm_land_11']);
				$empty_cm_text_12 = $this->db->scape($data['field_m_cm_text_12']);
				$empty_cm_land_12 = $this->db->scape($data['field_m_cm_land_12']);
				$empty_cm_text_13 = $this->db->scape($data['field_m_cm_text_13']);
				$empty_cm_land_13 = $this->db->scape($data['field_m_cm_land_13']);
				$empty_cm_text_14 = $this->db->scape($data['field_m_cm_text_14']);
				$empty_cm_land_14 = $this->db->scape($data['field_m_cm_land_14']);
				$empty_cm_text_15 = $this->db->scape($data['field_m_cm_text_15']);
				$empty_cm_land_15 = $this->db->scape($data['field_m_cm_land_15']);
				$empty_cm_text_16 = $this->db->scape($data['field_m_cm_text_16']);
				$empty_cm_land_16 = $this->db->scape($data['field_m_cm_land_16']);
				$empty_cm_text_17 = $this->db->scape($data['field_m_cm_text_17']);
				$empty_cm_land_17 = $this->db->scape($data['field_m_cm_land_17']);
				$empty_cm_text_18 = $this->db->scape($data['field_m_cm_text_18']);
				$empty_cm_land_18 = $this->db->scape($data['field_m_cm_land_18']);
				$empty_cm_text_19 = $this->db->scape($data['field_m_cm_text_19']);
				$empty_cm_land_19 = $this->db->scape($data['field_m_cm_land_19']);
				$empty_cm_text_20 = $this->db->scape($data['field_m_cm_text_20']);
				$empty_cm_land_20 = $this->db->scape($data['field_m_cm_land_20']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_m_ft_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_ibn_module'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_01'])) { throw new Exception('<b>Error:</b> El campo de texto 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_01'])) { throw new Exception('<b>Error:</b> El campo de campo 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_02'])) { throw new Exception('<b>Error:</b> El campo de texto 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_02'])) { throw new Exception('<b>Error:</b> El campo de campo 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_03'])) { throw new Exception('<b>Error:</b> El campo de texto 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_03'])) { throw new Exception('<b>Error:</b> El campo de campo 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_04'])) { throw new Exception('<b>Error:</b> El campo de texto 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_04'])) { throw new Exception('<b>Error:</b> El campo de campo 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_05'])) { throw new Exception('<b>Error:</b> El campo de texto 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_05'])) { throw new Exception('<b>Error:</b> El campo de campo 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_06'])) { throw new Exception('<b>Error:</b> El campo de texto 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_06'])) { throw new Exception('<b>Error:</b> El campo de campo 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_07'])) { throw new Exception('<b>Error:</b> El campo de texto 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_07'])) { throw new Exception('<b>Error:</b> El campo de campo 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_08'])) { throw new Exception('<b>Error:</b> El campo de texto 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_08'])) { throw new Exception('<b>Error:</b> El campo de campo 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_09'])) { throw new Exception('<b>Error:</b> El campo de texto 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_09'])) { throw new Exception('<b>Error:</b> El campo de campo 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_10'])) { throw new Exception('<b>Error:</b> El campo de texto 10 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_10'])) { throw new Exception('<b>Error:</b> El campo de campo 10 esta prohibido modificar.'); }
				
				if (!isset($data['field_m_ft_text_11'])) { throw new Exception('<b>Error:</b> El campo de texto 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_11'])) { throw new Exception('<b>Error:</b> El campo de campo 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_12'])) { throw new Exception('<b>Error:</b> El campo de texto 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_12'])) { throw new Exception('<b>Error:</b> El campo de campo 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_13'])) { throw new Exception('<b>Error:</b> El campo de texto 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_13'])) { throw new Exception('<b>Error:</b> El campo de campo 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_14'])) { throw new Exception('<b>Error:</b> El campo de texto 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_14'])) { throw new Exception('<b>Error:</b> El campo de campo 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_15'])) { throw new Exception('<b>Error:</b> El campo de texto 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_15'])) { throw new Exception('<b>Error:</b> El campo de campo 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_16'])) { throw new Exception('<b>Error:</b> El campo de texto 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_16'])) { throw new Exception('<b>Error:</b> El campo de campo 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_17'])) { throw new Exception('<b>Error:</b> El campo de texto 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_17'])) { throw new Exception('<b>Error:</b> El campo de campo 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_18'])) { throw new Exception('<b>Error:</b> El campo de texto 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_18'])) { throw new Exception('<b>Error:</b> El campo de campo 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_19'])) { throw new Exception('<b>Error:</b> El campo de texto 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_19'])) { throw new Exception('<b>Error:</b> El campo de campo 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_20'])) { throw new Exception('<b>Error:</b> El campo de texto 20 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_20'])) { throw new Exception('<b>Error:</b> El campo de campo 20 esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_ft_id = $this->db->scape($data['field_m_ft_id']);
				$empty_ft_ibn_module = $this->db->scape($data['field_m_ft_ibn_module']);
				$empty_ft_text_01 = $this->db->scape($data['field_m_ft_text_01']);
				$empty_ft_land_01 = $this->db->scape($data['field_m_ft_land_01']);
				$empty_ft_text_02 = $this->db->scape($data['field_m_ft_text_02']);
				$empty_ft_land_02 = $this->db->scape($data['field_m_ft_land_02']);
				$empty_ft_text_03 = $this->db->scape($data['field_m_ft_text_03']);
				$empty_ft_land_03 = $this->db->scape($data['field_m_ft_land_03']);
				$empty_ft_text_04 = $this->db->scape($data['field_m_ft_text_04']);
				$empty_ft_land_04 = $this->db->scape($data['field_m_ft_land_04']);
				$empty_ft_text_05 = $this->db->scape($data['field_m_ft_text_05']);
				$empty_ft_land_05 = $this->db->scape($data['field_m_ft_land_05']);
				$empty_ft_text_06 = $this->db->scape($data['field_m_ft_text_06']);
				$empty_ft_land_06 = $this->db->scape($data['field_m_ft_land_06']);
				$empty_ft_text_07 = $this->db->scape($data['field_m_ft_text_07']);
				$empty_ft_land_07 = $this->db->scape($data['field_m_ft_land_07']);
				$empty_ft_text_08 = $this->db->scape($data['field_m_ft_text_08']);
				$empty_ft_land_08 = $this->db->scape($data['field_m_ft_land_08']);
				$empty_ft_text_09 = $this->db->scape($data['field_m_ft_text_09']);
				$empty_ft_land_09 = $this->db->scape($data['field_m_ft_land_09']);
				$empty_ft_text_10 = $this->db->scape($data['field_m_ft_text_10']);
				$empty_ft_land_10 = $this->db->scape($data['field_m_ft_land_10']);
				
				$empty_ft_text_11 = $this->db->scape($data['field_m_ft_text_11']);
				$empty_ft_land_11 = $this->db->scape($data['field_m_ft_land_11']);
				$empty_ft_text_12 = $this->db->scape($data['field_m_ft_text_12']);
				$empty_ft_land_12 = $this->db->scape($data['field_m_ft_land_12']);
				$empty_ft_text_13 = $this->db->scape($data['field_m_ft_text_13']);
				$empty_ft_land_13 = $this->db->scape($data['field_m_ft_land_13']);
				$empty_ft_text_14 = $this->db->scape($data['field_m_ft_text_14']);
				$empty_ft_land_14 = $this->db->scape($data['field_m_ft_land_14']);
				$empty_ft_text_15 = $this->db->scape($data['field_m_ft_text_15']);
				$empty_ft_land_15 = $this->db->scape($data['field_m_ft_land_15']);
				$empty_ft_text_16 = $this->db->scape($data['field_m_ft_text_16']);
				$empty_ft_land_16 = $this->db->scape($data['field_m_ft_land_16']);
				$empty_ft_text_17 = $this->db->scape($data['field_m_ft_text_17']);
				$empty_ft_land_17 = $this->db->scape($data['field_m_ft_land_17']);
				$empty_ft_text_18 = $this->db->scape($data['field_m_ft_text_18']);
				$empty_ft_land_18 = $this->db->scape($data['field_m_ft_land_18']);
				$empty_ft_text_19 = $this->db->scape($data['field_m_ft_text_19']);
				$empty_ft_land_19 = $this->db->scape($data['field_m_ft_land_19']);
				$empty_ft_text_20 = $this->db->scape($data['field_m_ft_text_20']);
				$empty_ft_land_20 = $this->db->scape($data['field_m_ft_land_20']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_m_pt_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_ibn_module'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_01'])) { throw new Exception('<b>Error:</b> El campo de texto 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_01'])) { throw new Exception('<b>Error:</b> El campo de campo 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_02'])) { throw new Exception('<b>Error:</b> El campo de texto 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_02'])) { throw new Exception('<b>Error:</b> El campo de campo 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_03'])) { throw new Exception('<b>Error:</b> El campo de texto 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_03'])) { throw new Exception('<b>Error:</b> El campo de campo 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_04'])) { throw new Exception('<b>Error:</b> El campo de texto 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_04'])) { throw new Exception('<b>Error:</b> El campo de campo 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_05'])) { throw new Exception('<b>Error:</b> El campo de texto 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_05'])) { throw new Exception('<b>Error:</b> El campo de campo 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_06'])) { throw new Exception('<b>Error:</b> El campo de texto 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_06'])) { throw new Exception('<b>Error:</b> El campo de campo 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_07'])) { throw new Exception('<b>Error:</b> El campo de texto 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_07'])) { throw new Exception('<b>Error:</b> El campo de campo 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_08'])) { throw new Exception('<b>Error:</b> El campo de texto 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_08'])) { throw new Exception('<b>Error:</b> El campo de campo 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_09'])) { throw new Exception('<b>Error:</b> El campo de texto 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_09'])) { throw new Exception('<b>Error:</b> El campo de campo 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_10'])) { throw new Exception('<b>Error:</b> El campo de texto 10 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_10'])) { throw new Exception('<b>Error:</b> El campo de campo 10 esta prohibido modificar.'); }
				
				if (!isset($data['field_m_pt_text_11'])) { throw new Exception('<b>Error:</b> El campo de texto 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_11'])) { throw new Exception('<b>Error:</b> El campo de campo 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_12'])) { throw new Exception('<b>Error:</b> El campo de texto 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_12'])) { throw new Exception('<b>Error:</b> El campo de campo 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_13'])) { throw new Exception('<b>Error:</b> El campo de texto 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_13'])) { throw new Exception('<b>Error:</b> El campo de campo 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_14'])) { throw new Exception('<b>Error:</b> El campo de texto 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_14'])) { throw new Exception('<b>Error:</b> El campo de campo 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_15'])) { throw new Exception('<b>Error:</b> El campo de texto 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_15'])) { throw new Exception('<b>Error:</b> El campo de campo 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_16'])) { throw new Exception('<b>Error:</b> El campo de texto 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_16'])) { throw new Exception('<b>Error:</b> El campo de campo 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_17'])) { throw new Exception('<b>Error:</b> El campo de texto 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_17'])) { throw new Exception('<b>Error:</b> El campo de campo 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_18'])) { throw new Exception('<b>Error:</b> El campo de texto 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_18'])) { throw new Exception('<b>Error:</b> El campo de campo 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_19'])) { throw new Exception('<b>Error:</b> El campo de texto 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_19'])) { throw new Exception('<b>Error:</b> El campo de campo 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_20'])) { throw new Exception('<b>Error:</b> El campo de texto 20 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_20'])) { throw new Exception('<b>Error:</b> El campo de campo 20 esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_pt_id = $this->db->scape($data['field_m_pt_id']);
				$empty_pt_ibn_module = $this->db->scape($data['field_m_pt_ibn_module']);
				$empty_pt_text_01 = $this->db->scape($data['field_m_pt_text_01']);
				$empty_pt_land_01 = $this->db->scape($data['field_m_pt_land_01']);
				$empty_pt_text_02 = $this->db->scape($data['field_m_pt_text_02']);
				$empty_pt_land_02 = $this->db->scape($data['field_m_pt_land_02']);
				$empty_pt_text_03 = $this->db->scape($data['field_m_pt_text_03']);
				$empty_pt_land_03 = $this->db->scape($data['field_m_pt_land_03']);
				$empty_pt_text_04 = $this->db->scape($data['field_m_pt_text_04']);
				$empty_pt_land_04 = $this->db->scape($data['field_m_pt_land_04']);
				$empty_pt_text_05 = $this->db->scape($data['field_m_pt_text_05']);
				$empty_pt_land_05 = $this->db->scape($data['field_m_pt_land_05']);
				$empty_pt_text_06 = $this->db->scape($data['field_m_pt_text_06']);
				$empty_pt_land_06 = $this->db->scape($data['field_m_pt_land_06']);
				$empty_pt_text_07 = $this->db->scape($data['field_m_pt_text_07']);
				$empty_pt_land_07 = $this->db->scape($data['field_m_pt_land_07']);
				$empty_pt_text_08 = $this->db->scape($data['field_m_pt_text_08']);
				$empty_pt_land_08 = $this->db->scape($data['field_m_pt_land_08']);
				$empty_pt_text_09 = $this->db->scape($data['field_m_pt_text_09']);
				$empty_pt_land_09 = $this->db->scape($data['field_m_pt_land_09']);
				$empty_pt_text_10 = $this->db->scape($data['field_m_pt_text_10']);
				$empty_pt_land_10 = $this->db->scape($data['field_m_pt_land_10']);
				
				$empty_pt_text_11 = $this->db->scape($data['field_m_pt_text_11']);
				$empty_pt_land_11 = $this->db->scape($data['field_m_pt_land_11']);
				$empty_pt_text_12 = $this->db->scape($data['field_m_pt_text_12']);
				$empty_pt_land_12 = $this->db->scape($data['field_m_pt_land_12']);
				$empty_pt_text_13 = $this->db->scape($data['field_m_pt_text_13']);
				$empty_pt_land_13 = $this->db->scape($data['field_m_pt_land_13']);
				$empty_pt_text_14 = $this->db->scape($data['field_m_pt_text_14']);
				$empty_pt_land_14 = $this->db->scape($data['field_m_pt_land_14']);
				$empty_pt_text_15 = $this->db->scape($data['field_m_pt_text_15']);
				$empty_pt_land_15 = $this->db->scape($data['field_m_pt_land_15']);
				$empty_pt_text_16 = $this->db->scape($data['field_m_pt_text_16']);
				$empty_pt_land_16 = $this->db->scape($data['field_m_pt_land_16']);
				$empty_pt_text_17 = $this->db->scape($data['field_m_pt_text_17']);
				$empty_pt_land_17 = $this->db->scape($data['field_m_pt_land_17']);
				$empty_pt_text_18 = $this->db->scape($data['field_m_pt_text_18']);
				$empty_pt_land_18 = $this->db->scape($data['field_m_pt_land_18']);
				$empty_pt_text_19 = $this->db->scape($data['field_m_pt_text_19']);
				$empty_pt_land_19 = $this->db->scape($data['field_m_pt_land_19']);
				$empty_pt_text_20 = $this->db->scape($data['field_m_pt_text_20']);
				$empty_pt_land_20 = $this->db->scape($data['field_m_pt_land_20']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_m_wt_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_ibn_module'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_01'])) { throw new Exception('<b>Error:</b> El campo de texto 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_01'])) { throw new Exception('<b>Error:</b> El campo de campo 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_02'])) { throw new Exception('<b>Error:</b> El campo de texto 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_02'])) { throw new Exception('<b>Error:</b> El campo de campo 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_03'])) { throw new Exception('<b>Error:</b> El campo de texto 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_03'])) { throw new Exception('<b>Error:</b> El campo de campo 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_04'])) { throw new Exception('<b>Error:</b> El campo de texto 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_04'])) { throw new Exception('<b>Error:</b> El campo de campo 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_05'])) { throw new Exception('<b>Error:</b> El campo de texto 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_05'])) { throw new Exception('<b>Error:</b> El campo de campo 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_06'])) { throw new Exception('<b>Error:</b> El campo de texto 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_06'])) { throw new Exception('<b>Error:</b> El campo de campo 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_07'])) { throw new Exception('<b>Error:</b> El campo de texto 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_07'])) { throw new Exception('<b>Error:</b> El campo de campo 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_08'])) { throw new Exception('<b>Error:</b> El campo de texto 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_08'])) { throw new Exception('<b>Error:</b> El campo de campo 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_09'])) { throw new Exception('<b>Error:</b> El campo de texto 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_09'])) { throw new Exception('<b>Error:</b> El campo de campo 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_10'])) { throw new Exception('<b>Error:</b> El campo de texto 10 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_10'])) { throw new Exception('<b>Error:</b> El campo de campo 10 esta prohibido modificar.'); }
				
				if (!isset($data['field_m_wt_text_11'])) { throw new Exception('<b>Error:</b> El campo de texto 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_11'])) { throw new Exception('<b>Error:</b> El campo de campo 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_12'])) { throw new Exception('<b>Error:</b> El campo de texto 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_12'])) { throw new Exception('<b>Error:</b> El campo de campo 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_13'])) { throw new Exception('<b>Error:</b> El campo de texto 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_13'])) { throw new Exception('<b>Error:</b> El campo de campo 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_14'])) { throw new Exception('<b>Error:</b> El campo de texto 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_14'])) { throw new Exception('<b>Error:</b> El campo de campo 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_15'])) { throw new Exception('<b>Error:</b> El campo de texto 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_15'])) { throw new Exception('<b>Error:</b> El campo de campo 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_16'])) { throw new Exception('<b>Error:</b> El campo de texto 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_16'])) { throw new Exception('<b>Error:</b> El campo de campo 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_17'])) { throw new Exception('<b>Error:</b> El campo de texto 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_17'])) { throw new Exception('<b>Error:</b> El campo de campo 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_18'])) { throw new Exception('<b>Error:</b> El campo de texto 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_18'])) { throw new Exception('<b>Error:</b> El campo de campo 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_19'])) { throw new Exception('<b>Error:</b> El campo de texto 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_19'])) { throw new Exception('<b>Error:</b> El campo de campo 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_20'])) { throw new Exception('<b>Error:</b> El campo de texto 20 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_20'])) { throw new Exception('<b>Error:</b> El campo de campo 20 esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_wt_id = $this->db->scape($data['field_m_wt_id']);
				$empty_wt_ibn_module = $this->db->scape($data['field_m_wt_ibn_module']);
				$empty_wt_text_01 = $this->db->scape($data['field_m_wt_text_01']);
				$empty_wt_land_01 = $this->db->scape($data['field_m_wt_land_01']);
				$empty_wt_text_02 = $this->db->scape($data['field_m_wt_text_02']);
				$empty_wt_land_02 = $this->db->scape($data['field_m_wt_land_02']);
				$empty_wt_text_03 = $this->db->scape($data['field_m_wt_text_03']);
				$empty_wt_land_03 = $this->db->scape($data['field_m_wt_land_03']);
				$empty_wt_text_04 = $this->db->scape($data['field_m_wt_text_04']);
				$empty_wt_land_04 = $this->db->scape($data['field_m_wt_land_04']);
				$empty_wt_text_05 = $this->db->scape($data['field_m_wt_text_05']);
				$empty_wt_land_05 = $this->db->scape($data['field_m_wt_land_05']);
				$empty_wt_text_06 = $this->db->scape($data['field_m_wt_text_06']);
				$empty_wt_land_06 = $this->db->scape($data['field_m_wt_land_06']);
				$empty_wt_text_07 = $this->db->scape($data['field_m_wt_text_07']);
				$empty_wt_land_07 = $this->db->scape($data['field_m_wt_land_07']);
				$empty_wt_text_08 = $this->db->scape($data['field_m_wt_text_08']);
				$empty_wt_land_08 = $this->db->scape($data['field_m_wt_land_08']);
				$empty_wt_text_09 = $this->db->scape($data['field_m_wt_text_09']);
				$empty_wt_land_09 = $this->db->scape($data['field_m_wt_land_09']);
				$empty_wt_text_10 = $this->db->scape($data['field_m_wt_text_10']);
				$empty_wt_land_10 = $this->db->scape($data['field_m_wt_land_10']);
				
				$empty_wt_text_11 = $this->db->scape($data['field_m_wt_text_11']);
				$empty_wt_land_11 = $this->db->scape($data['field_m_wt_land_11']);
				$empty_wt_text_12 = $this->db->scape($data['field_m_wt_text_12']);
				$empty_wt_land_12 = $this->db->scape($data['field_m_wt_land_12']);
				$empty_wt_text_13 = $this->db->scape($data['field_m_wt_text_13']);
				$empty_wt_land_13 = $this->db->scape($data['field_m_wt_land_13']);
				$empty_wt_text_14 = $this->db->scape($data['field_m_wt_text_14']);
				$empty_wt_land_14 = $this->db->scape($data['field_m_wt_land_14']);
				$empty_wt_text_15 = $this->db->scape($data['field_m_wt_text_15']);
				$empty_wt_land_15 = $this->db->scape($data['field_m_wt_land_15']);
				$empty_wt_text_16 = $this->db->scape($data['field_m_wt_text_16']);
				$empty_wt_land_16 = $this->db->scape($data['field_m_wt_land_16']);
				$empty_wt_text_17 = $this->db->scape($data['field_m_wt_text_17']);
				$empty_wt_land_17 = $this->db->scape($data['field_m_wt_land_17']);
				$empty_wt_text_18 = $this->db->scape($data['field_m_wt_text_18']);
				$empty_wt_land_18 = $this->db->scape($data['field_m_wt_land_18']);
				$empty_wt_text_19 = $this->db->scape($data['field_m_wt_text_19']);
				$empty_wt_land_19 = $this->db->scape($data['field_m_wt_land_19']);
				$empty_wt_text_20 = $this->db->scape($data['field_m_wt_text_20']);
				$empty_wt_land_20 = $this->db->scape($data['field_m_wt_land_20']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_m_vh_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_ibn_module'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_01'])) { throw new Exception('<b>Error:</b> El campo de texto 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_01'])) { throw new Exception('<b>Error:</b> El campo de campo 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_02'])) { throw new Exception('<b>Error:</b> El campo de texto 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_02'])) { throw new Exception('<b>Error:</b> El campo de campo 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_03'])) { throw new Exception('<b>Error:</b> El campo de texto 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_03'])) { throw new Exception('<b>Error:</b> El campo de campo 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_04'])) { throw new Exception('<b>Error:</b> El campo de texto 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_04'])) { throw new Exception('<b>Error:</b> El campo de campo 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_05'])) { throw new Exception('<b>Error:</b> El campo de texto 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_05'])) { throw new Exception('<b>Error:</b> El campo de campo 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_06'])) { throw new Exception('<b>Error:</b> El campo de texto 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_06'])) { throw new Exception('<b>Error:</b> El campo de campo 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_07'])) { throw new Exception('<b>Error:</b> El campo de texto 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_07'])) { throw new Exception('<b>Error:</b> El campo de campo 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_08'])) { throw new Exception('<b>Error:</b> El campo de texto 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_08'])) { throw new Exception('<b>Error:</b> El campo de campo 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_09'])) { throw new Exception('<b>Error:</b> El campo de texto 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_09'])) { throw new Exception('<b>Error:</b> El campo de campo 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_10'])) { throw new Exception('<b>Error:</b> El campo de texto 10 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_10'])) { throw new Exception('<b>Error:</b> El campo de campo 10 esta prohibido modificar.'); }
				
				if (!isset($data['field_m_vh_text_11'])) { throw new Exception('<b>Error:</b> El campo de texto 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_11'])) { throw new Exception('<b>Error:</b> El campo de campo 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_12'])) { throw new Exception('<b>Error:</b> El campo de texto 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_12'])) { throw new Exception('<b>Error:</b> El campo de campo 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_13'])) { throw new Exception('<b>Error:</b> El campo de texto 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_13'])) { throw new Exception('<b>Error:</b> El campo de campo 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_14'])) { throw new Exception('<b>Error:</b> El campo de texto 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_14'])) { throw new Exception('<b>Error:</b> El campo de campo 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_15'])) { throw new Exception('<b>Error:</b> El campo de texto 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_15'])) { throw new Exception('<b>Error:</b> El campo de campo 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_16'])) { throw new Exception('<b>Error:</b> El campo de texto 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_16'])) { throw new Exception('<b>Error:</b> El campo de campo 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_17'])) { throw new Exception('<b>Error:</b> El campo de texto 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_17'])) { throw new Exception('<b>Error:</b> El campo de campo 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_18'])) { throw new Exception('<b>Error:</b> El campo de texto 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_18'])) { throw new Exception('<b>Error:</b> El campo de campo 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_19'])) { throw new Exception('<b>Error:</b> El campo de texto 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_19'])) { throw new Exception('<b>Error:</b> El campo de campo 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_20'])) { throw new Exception('<b>Error:</b> El campo de texto 20 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_20'])) { throw new Exception('<b>Error:</b> El campo de campo 20 esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_vh_id = $this->db->scape($data['field_m_vh_id']);
				$empty_vh_ibn_module = $this->db->scape($data['field_m_vh_ibn_module']);
				$empty_vh_text_01 = $this->db->scape($data['field_m_vh_text_01']);
				$empty_vh_land_01 = $this->db->scape($data['field_m_vh_land_01']);
				$empty_vh_text_02 = $this->db->scape($data['field_m_vh_text_02']);
				$empty_vh_land_02 = $this->db->scape($data['field_m_vh_land_02']);
				$empty_vh_text_03 = $this->db->scape($data['field_m_vh_text_03']);
				$empty_vh_land_03 = $this->db->scape($data['field_m_vh_land_03']);
				$empty_vh_text_04 = $this->db->scape($data['field_m_vh_text_04']);
				$empty_vh_land_04 = $this->db->scape($data['field_m_vh_land_04']);
				$empty_vh_text_05 = $this->db->scape($data['field_m_vh_text_05']);
				$empty_vh_land_05 = $this->db->scape($data['field_m_vh_land_05']);
				$empty_vh_text_06 = $this->db->scape($data['field_m_vh_text_06']);
				$empty_vh_land_06 = $this->db->scape($data['field_m_vh_land_06']);
				$empty_vh_text_07 = $this->db->scape($data['field_m_vh_text_07']);
				$empty_vh_land_07 = $this->db->scape($data['field_m_vh_land_07']);
				$empty_vh_text_08 = $this->db->scape($data['field_m_vh_text_08']);
				$empty_vh_land_08 = $this->db->scape($data['field_m_vh_land_08']);
				$empty_vh_text_09 = $this->db->scape($data['field_m_vh_text_09']);
				$empty_vh_land_09 = $this->db->scape($data['field_m_vh_land_09']);
				$empty_vh_text_10 = $this->db->scape($data['field_m_vh_text_10']);
				$empty_vh_land_10 = $this->db->scape($data['field_m_vh_land_10']);
				
				$empty_vh_text_11 = $this->db->scape($data['field_m_vh_text_11']);
				$empty_vh_land_11 = $this->db->scape($data['field_m_vh_land_11']);
				$empty_vh_text_12 = $this->db->scape($data['field_m_vh_text_12']);
				$empty_vh_land_12 = $this->db->scape($data['field_m_vh_land_12']);
				$empty_vh_text_13 = $this->db->scape($data['field_m_vh_text_13']);
				$empty_vh_land_13 = $this->db->scape($data['field_m_vh_land_13']);
				$empty_vh_text_14 = $this->db->scape($data['field_m_vh_text_14']);
				$empty_vh_land_14 = $this->db->scape($data['field_m_vh_land_14']);
				$empty_vh_text_15 = $this->db->scape($data['field_m_vh_text_15']);
				$empty_vh_land_15 = $this->db->scape($data['field_m_vh_land_15']);
				$empty_vh_text_16 = $this->db->scape($data['field_m_vh_text_16']);
				$empty_vh_land_16 = $this->db->scape($data['field_m_vh_land_16']);
				$empty_vh_text_17 = $this->db->scape($data['field_m_vh_text_17']);
				$empty_vh_land_17 = $this->db->scape($data['field_m_vh_land_17']);
				$empty_vh_text_18 = $this->db->scape($data['field_m_vh_text_18']);
				$empty_vh_land_18 = $this->db->scape($data['field_m_vh_land_18']);
				$empty_vh_text_19 = $this->db->scape($data['field_m_vh_text_19']);
				$empty_vh_land_19 = $this->db->scape($data['field_m_vh_land_19']);
				$empty_vh_text_20 = $this->db->scape($data['field_m_vh_text_20']);
				$empty_vh_land_20 = $this->db->scape($data['field_m_vh_land_20']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_cm_id) || $empty_cm_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id camaras es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_cm_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id camaras solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ft_id) || $empty_ft_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id salarios es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ft_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id salarios solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pt_id) || $empty_pt_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id inmuebles es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pt_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id inmuebles solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_wt_id) || $empty_wt_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id garantias es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_wt_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id garantias solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_vh_id) || $empty_vh_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id vehiculos es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_vh_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id vehiculos solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_client_concept_all(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_concept_all($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_cm_id = $this->db->scape($data['field_m_cm_id']);
				$empty_cm_ibn_module = $this->db->scape($data['field_m_cm_ibn_module']);
				$empty_cm_text_01 = $this->db->scape($data['field_m_cm_text_01']);
				$empty_cm_land_01 = $this->db->scape($data['field_m_cm_land_01']);
				$empty_cm_text_02 = $this->db->scape($data['field_m_cm_text_02']);
				$empty_cm_land_02 = $this->db->scape($data['field_m_cm_land_02']);
				$empty_cm_text_03 = $this->db->scape($data['field_m_cm_text_03']);
				$empty_cm_land_03 = $this->db->scape($data['field_m_cm_land_03']);
				$empty_cm_text_04 = $this->db->scape($data['field_m_cm_text_04']);
				$empty_cm_land_04 = $this->db->scape($data['field_m_cm_land_04']);
				$empty_cm_text_05 = $this->db->scape($data['field_m_cm_text_05']);
				$empty_cm_land_05 = $this->db->scape($data['field_m_cm_land_05']);
				$empty_cm_text_06 = $this->db->scape($data['field_m_cm_text_06']);
				$empty_cm_land_06 = $this->db->scape($data['field_m_cm_land_06']);
				$empty_cm_text_07 = $this->db->scape($data['field_m_cm_text_07']);
				$empty_cm_land_07 = $this->db->scape($data['field_m_cm_land_07']);
				$empty_cm_text_08 = $this->db->scape($data['field_m_cm_text_08']);
				$empty_cm_land_08 = $this->db->scape($data['field_m_cm_land_08']);
				$empty_cm_text_09 = $this->db->scape($data['field_m_cm_text_09']);
				$empty_cm_land_09 = $this->db->scape($data['field_m_cm_land_09']);
				$empty_cm_text_10 = $this->db->scape($data['field_m_cm_text_10']);
				$empty_cm_land_10 = $this->db->scape($data['field_m_cm_land_10']);
				$empty_cm_text_11 = $this->db->scape($data['field_m_cm_text_11']);
				$empty_cm_land_11 = $this->db->scape($data['field_m_cm_land_11']);
				$empty_cm_text_12 = $this->db->scape($data['field_m_cm_text_12']);
				$empty_cm_land_12 = $this->db->scape($data['field_m_cm_land_12']);
				$empty_cm_text_13 = $this->db->scape($data['field_m_cm_text_13']);
				$empty_cm_land_13 = $this->db->scape($data['field_m_cm_land_13']);
				$empty_cm_text_14 = $this->db->scape($data['field_m_cm_text_14']);
				$empty_cm_land_14 = $this->db->scape($data['field_m_cm_land_14']);
				$empty_cm_text_15 = $this->db->scape($data['field_m_cm_text_15']);
				$empty_cm_land_15 = $this->db->scape($data['field_m_cm_land_15']);
				$empty_cm_text_16 = $this->db->scape($data['field_m_cm_text_16']);
				$empty_cm_land_16 = $this->db->scape($data['field_m_cm_land_16']);
				$empty_cm_text_17 = $this->db->scape($data['field_m_cm_text_17']);
				$empty_cm_land_17 = $this->db->scape($data['field_m_cm_land_17']);
				$empty_cm_text_18 = $this->db->scape($data['field_m_cm_text_18']);
				$empty_cm_land_18 = $this->db->scape($data['field_m_cm_land_18']);
				$empty_cm_text_19 = $this->db->scape($data['field_m_cm_text_19']);
				$empty_cm_land_19 = $this->db->scape($data['field_m_cm_land_19']);
				$empty_cm_text_20 = $this->db->scape($data['field_m_cm_text_20']);
				$empty_cm_land_20 = $this->db->scape($data['field_m_cm_land_20']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_concept_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_concept_m_date_modified => DATE_HOUR,
					d_azp_ibn_concept_t_text_01 => strtoupper($empty_cm_text_01),
					d_azp_ibn_concept_t_land_01 => strtoupper($empty_cm_land_01),
					d_azp_ibn_concept_t_text_02 => strtoupper($empty_cm_text_02),
					d_azp_ibn_concept_t_land_02 => strtoupper($empty_cm_land_02),
					d_azp_ibn_concept_t_text_03 => strtoupper($empty_cm_text_03),
					d_azp_ibn_concept_t_land_03 => strtoupper($empty_cm_land_03),
					d_azp_ibn_concept_t_text_04 => strtoupper($empty_cm_text_04),
					d_azp_ibn_concept_t_land_04 => strtoupper($empty_cm_land_04),
					d_azp_ibn_concept_t_text_05 => strtoupper($empty_cm_text_05),
					d_azp_ibn_concept_t_land_05 => strtoupper($empty_cm_land_05),
					d_azp_ibn_concept_t_text_06 => strtoupper($empty_cm_text_06),
					d_azp_ibn_concept_t_land_06 => strtoupper($empty_cm_land_06),
					d_azp_ibn_concept_t_text_07 => strtoupper($empty_cm_text_07),
					d_azp_ibn_concept_t_land_07 => strtoupper($empty_cm_land_07),
					d_azp_ibn_concept_t_text_08 => strtoupper($empty_cm_text_08),
					d_azp_ibn_concept_t_land_08 => strtoupper($empty_cm_land_08),
					d_azp_ibn_concept_t_text_09 => strtoupper($empty_cm_text_09),
					d_azp_ibn_concept_t_land_09 => strtoupper($empty_cm_land_09),
					d_azp_ibn_concept_t_text_10 => strtoupper($empty_cm_text_10),
					d_azp_ibn_concept_t_land_10 => strtoupper($empty_cm_land_10),
					d_azp_ibn_concept_t_text_11 => strtoupper($empty_cm_text_11),
					d_azp_ibn_concept_t_land_11 => strtoupper($empty_cm_land_11),
					d_azp_ibn_concept_t_text_12 => strtoupper($empty_cm_text_12),
					d_azp_ibn_concept_t_land_12 => strtoupper($empty_cm_land_12),
					d_azp_ibn_concept_t_text_13 => strtoupper($empty_cm_text_13),
					d_azp_ibn_concept_t_land_13 => strtoupper($empty_cm_land_13),
					d_azp_ibn_concept_t_text_14 => strtoupper($empty_cm_text_14),
					d_azp_ibn_concept_t_land_14 => strtoupper($empty_cm_land_14),
					d_azp_ibn_concept_t_text_15 => strtoupper($empty_cm_text_15),
					d_azp_ibn_concept_t_land_15 => strtoupper($empty_cm_land_15),
					d_azp_ibn_concept_t_text_16 => strtoupper($empty_cm_text_16),
					d_azp_ibn_concept_t_land_16 => strtoupper($empty_cm_land_16),
					d_azp_ibn_concept_t_text_17 => strtoupper($empty_cm_text_17),
					d_azp_ibn_concept_t_land_17 => strtoupper($empty_cm_land_17),
					d_azp_ibn_concept_t_text_18 => strtoupper($empty_cm_text_18),
					d_azp_ibn_concept_t_land_18 => strtoupper($empty_cm_land_18),
					d_azp_ibn_concept_t_text_19 => strtoupper($empty_cm_text_19),
					d_azp_ibn_concept_t_land_19 => strtoupper($empty_cm_land_19),
					d_azp_ibn_concept_t_text_20 => strtoupper($empty_cm_text_20),
					d_azp_ibn_concept_t_land_20 => strtoupper($empty_cm_land_20),
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_concept, $var_array, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_cm_id . "'");
				#-------------------------------------------------------------------------#
				$empty_ft_id = $this->db->scape($data['field_m_ft_id']);
				$empty_ft_ibn_module = $this->db->scape($data['field_m_ft_ibn_module']);
				$empty_ft_text_01 = $this->db->scape($data['field_m_ft_text_01']);
				$empty_ft_land_01 = $this->db->scape($data['field_m_ft_land_01']);
				$empty_ft_text_02 = $this->db->scape($data['field_m_ft_text_02']);
				$empty_ft_land_02 = $this->db->scape($data['field_m_ft_land_02']);
				$empty_ft_text_03 = $this->db->scape($data['field_m_ft_text_03']);
				$empty_ft_land_03 = $this->db->scape($data['field_m_ft_land_03']);
				$empty_ft_text_04 = $this->db->scape($data['field_m_ft_text_04']);
				$empty_ft_land_04 = $this->db->scape($data['field_m_ft_land_04']);
				$empty_ft_text_05 = $this->db->scape($data['field_m_ft_text_05']);
				$empty_ft_land_05 = $this->db->scape($data['field_m_ft_land_05']);
				$empty_ft_text_06 = $this->db->scape($data['field_m_ft_text_06']);
				$empty_ft_land_06 = $this->db->scape($data['field_m_ft_land_06']);
				$empty_ft_text_07 = $this->db->scape($data['field_m_ft_text_07']);
				$empty_ft_land_07 = $this->db->scape($data['field_m_ft_land_07']);
				$empty_ft_text_08 = $this->db->scape($data['field_m_ft_text_08']);
				$empty_ft_land_08 = $this->db->scape($data['field_m_ft_land_08']);
				$empty_ft_text_09 = $this->db->scape($data['field_m_ft_text_09']);
				$empty_ft_land_09 = $this->db->scape($data['field_m_ft_land_09']);
				$empty_ft_text_10 = $this->db->scape($data['field_m_ft_text_10']);
				$empty_ft_land_10 = $this->db->scape($data['field_m_ft_land_10']);
				$empty_ft_text_11 = $this->db->scape($data['field_m_ft_text_11']);
				$empty_ft_land_11 = $this->db->scape($data['field_m_ft_land_11']);
				$empty_ft_text_12 = $this->db->scape($data['field_m_ft_text_12']);
				$empty_ft_land_12 = $this->db->scape($data['field_m_ft_land_12']);
				$empty_ft_text_13 = $this->db->scape($data['field_m_ft_text_13']);
				$empty_ft_land_13 = $this->db->scape($data['field_m_ft_land_13']);
				$empty_ft_text_14 = $this->db->scape($data['field_m_ft_text_14']);
				$empty_ft_land_14 = $this->db->scape($data['field_m_ft_land_14']);
				$empty_ft_text_15 = $this->db->scape($data['field_m_ft_text_15']);
				$empty_ft_land_15 = $this->db->scape($data['field_m_ft_land_15']);
				$empty_ft_text_16 = $this->db->scape($data['field_m_ft_text_16']);
				$empty_ft_land_16 = $this->db->scape($data['field_m_ft_land_16']);
				$empty_ft_text_17 = $this->db->scape($data['field_m_ft_text_17']);
				$empty_ft_land_17 = $this->db->scape($data['field_m_ft_land_17']);
				$empty_ft_text_18 = $this->db->scape($data['field_m_ft_text_18']);
				$empty_ft_land_18 = $this->db->scape($data['field_m_ft_land_18']);
				$empty_ft_text_19 = $this->db->scape($data['field_m_ft_text_19']);
				$empty_ft_land_19 = $this->db->scape($data['field_m_ft_land_19']);
				$empty_ft_text_20 = $this->db->scape($data['field_m_ft_text_20']);
				$empty_ft_land_20 = $this->db->scape($data['field_m_ft_land_20']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_concept_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_concept_m_date_modified => DATE_HOUR,
					d_azp_ibn_concept_t_text_01 => strtoupper($empty_ft_text_01),
					d_azp_ibn_concept_t_land_01 => strtoupper($empty_ft_land_01),
					d_azp_ibn_concept_t_text_02 => strtoupper($empty_ft_text_02),
					d_azp_ibn_concept_t_land_02 => strtoupper($empty_ft_land_02),
					d_azp_ibn_concept_t_text_03 => strtoupper($empty_ft_text_03),
					d_azp_ibn_concept_t_land_03 => strtoupper($empty_ft_land_03),
					d_azp_ibn_concept_t_text_04 => strtoupper($empty_ft_text_04),
					d_azp_ibn_concept_t_land_04 => strtoupper($empty_ft_land_04),
					d_azp_ibn_concept_t_text_05 => strtoupper($empty_ft_text_05),
					d_azp_ibn_concept_t_land_05 => strtoupper($empty_ft_land_05),
					d_azp_ibn_concept_t_text_06 => strtoupper($empty_ft_text_06),
					d_azp_ibn_concept_t_land_06 => strtoupper($empty_ft_land_06),
					d_azp_ibn_concept_t_text_07 => strtoupper($empty_ft_text_07),
					d_azp_ibn_concept_t_land_07 => strtoupper($empty_ft_land_07),
					d_azp_ibn_concept_t_text_08 => strtoupper($empty_ft_text_08),
					d_azp_ibn_concept_t_land_08 => strtoupper($empty_ft_land_08),
					d_azp_ibn_concept_t_text_09 => strtoupper($empty_ft_text_09),
					d_azp_ibn_concept_t_land_09 => strtoupper($empty_ft_land_09),
					d_azp_ibn_concept_t_text_10 => strtoupper($empty_ft_text_10),
					d_azp_ibn_concept_t_land_10 => strtoupper($empty_ft_land_10),
					d_azp_ibn_concept_t_text_11 => strtoupper($empty_ft_text_11),
					d_azp_ibn_concept_t_land_11 => strtoupper($empty_ft_land_11),
					d_azp_ibn_concept_t_text_12 => strtoupper($empty_ft_text_12),
					d_azp_ibn_concept_t_land_12 => strtoupper($empty_ft_land_12),
					d_azp_ibn_concept_t_text_13 => strtoupper($empty_ft_text_13),
					d_azp_ibn_concept_t_land_13 => strtoupper($empty_ft_land_13),
					d_azp_ibn_concept_t_text_14 => strtoupper($empty_ft_text_14),
					d_azp_ibn_concept_t_land_14 => strtoupper($empty_ft_land_14),
					d_azp_ibn_concept_t_text_15 => strtoupper($empty_ft_text_15),
					d_azp_ibn_concept_t_land_15 => strtoupper($empty_ft_land_15),
					d_azp_ibn_concept_t_text_16 => strtoupper($empty_ft_text_16),
					d_azp_ibn_concept_t_land_16 => strtoupper($empty_ft_land_16),
					d_azp_ibn_concept_t_text_17 => strtoupper($empty_ft_text_17),
					d_azp_ibn_concept_t_land_17 => strtoupper($empty_ft_land_17),
					d_azp_ibn_concept_t_text_18 => strtoupper($empty_ft_text_18),
					d_azp_ibn_concept_t_land_18 => strtoupper($empty_ft_land_18),
					d_azp_ibn_concept_t_text_19 => strtoupper($empty_ft_text_19),
					d_azp_ibn_concept_t_land_19 => strtoupper($empty_ft_land_19),
					d_azp_ibn_concept_t_text_20 => strtoupper($empty_ft_text_20),
					d_azp_ibn_concept_t_land_20 => strtoupper($empty_ft_land_20),
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_concept, $var_array, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_ft_id . "'");
				#-------------------------------------------------------------------------#
				$empty_pt_id = $this->db->scape($data['field_m_pt_id']);
				$empty_pt_ibn_module = $this->db->scape($data['field_m_pt_ibn_module']);
				$empty_pt_text_01 = $this->db->scape($data['field_m_pt_text_01']);
				$empty_pt_land_01 = $this->db->scape($data['field_m_pt_land_01']);
				$empty_pt_text_02 = $this->db->scape($data['field_m_pt_text_02']);
				$empty_pt_land_02 = $this->db->scape($data['field_m_pt_land_02']);
				$empty_pt_text_03 = $this->db->scape($data['field_m_pt_text_03']);
				$empty_pt_land_03 = $this->db->scape($data['field_m_pt_land_03']);
				$empty_pt_text_04 = $this->db->scape($data['field_m_pt_text_04']);
				$empty_pt_land_04 = $this->db->scape($data['field_m_pt_land_04']);
				$empty_pt_text_05 = $this->db->scape($data['field_m_pt_text_05']);
				$empty_pt_land_05 = $this->db->scape($data['field_m_pt_land_05']);
				$empty_pt_text_06 = $this->db->scape($data['field_m_pt_text_06']);
				$empty_pt_land_06 = $this->db->scape($data['field_m_pt_land_06']);
				$empty_pt_text_07 = $this->db->scape($data['field_m_pt_text_07']);
				$empty_pt_land_07 = $this->db->scape($data['field_m_pt_land_07']);
				$empty_pt_text_08 = $this->db->scape($data['field_m_pt_text_08']);
				$empty_pt_land_08 = $this->db->scape($data['field_m_pt_land_08']);
				$empty_pt_text_09 = $this->db->scape($data['field_m_pt_text_09']);
				$empty_pt_land_09 = $this->db->scape($data['field_m_pt_land_09']);
				$empty_pt_text_10 = $this->db->scape($data['field_m_pt_text_10']);
				$empty_pt_land_10 = $this->db->scape($data['field_m_pt_land_10']);
				$empty_pt_text_11 = $this->db->scape($data['field_m_pt_text_11']);
				$empty_pt_land_11 = $this->db->scape($data['field_m_pt_land_11']);
				$empty_pt_text_12 = $this->db->scape($data['field_m_pt_text_12']);
				$empty_pt_land_12 = $this->db->scape($data['field_m_pt_land_12']);
				$empty_pt_text_13 = $this->db->scape($data['field_m_pt_text_13']);
				$empty_pt_land_13 = $this->db->scape($data['field_m_pt_land_13']);
				$empty_pt_text_14 = $this->db->scape($data['field_m_pt_text_14']);
				$empty_pt_land_14 = $this->db->scape($data['field_m_pt_land_14']);
				$empty_pt_text_15 = $this->db->scape($data['field_m_pt_text_15']);
				$empty_pt_land_15 = $this->db->scape($data['field_m_pt_land_15']);
				$empty_pt_text_16 = $this->db->scape($data['field_m_pt_text_16']);
				$empty_pt_land_16 = $this->db->scape($data['field_m_pt_land_16']);
				$empty_pt_text_17 = $this->db->scape($data['field_m_pt_text_17']);
				$empty_pt_land_17 = $this->db->scape($data['field_m_pt_land_17']);
				$empty_pt_text_18 = $this->db->scape($data['field_m_pt_text_18']);
				$empty_pt_land_18 = $this->db->scape($data['field_m_pt_land_18']);
				$empty_pt_text_19 = $this->db->scape($data['field_m_pt_text_19']);
				$empty_pt_land_19 = $this->db->scape($data['field_m_pt_land_19']);
				$empty_pt_text_20 = $this->db->scape($data['field_m_pt_text_20']);
				$empty_pt_land_20 = $this->db->scape($data['field_m_pt_land_20']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_concept_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_concept_m_date_modified => DATE_HOUR,
					d_azp_ibn_concept_t_text_01 => strtoupper($empty_pt_text_01),
					d_azp_ibn_concept_t_land_01 => strtoupper($empty_pt_land_01),
					d_azp_ibn_concept_t_text_02 => strtoupper($empty_pt_text_02),
					d_azp_ibn_concept_t_land_02 => strtoupper($empty_pt_land_02),
					d_azp_ibn_concept_t_text_03 => strtoupper($empty_pt_text_03),
					d_azp_ibn_concept_t_land_03 => strtoupper($empty_pt_land_03),
					d_azp_ibn_concept_t_text_04 => strtoupper($empty_pt_text_04),
					d_azp_ibn_concept_t_land_04 => strtoupper($empty_pt_land_04),
					d_azp_ibn_concept_t_text_05 => strtoupper($empty_pt_text_05),
					d_azp_ibn_concept_t_land_05 => strtoupper($empty_pt_land_05),
					d_azp_ibn_concept_t_text_06 => strtoupper($empty_pt_text_06),
					d_azp_ibn_concept_t_land_06 => strtoupper($empty_pt_land_06),
					d_azp_ibn_concept_t_text_07 => strtoupper($empty_pt_text_07),
					d_azp_ibn_concept_t_land_07 => strtoupper($empty_pt_land_07),
					d_azp_ibn_concept_t_text_08 => strtoupper($empty_pt_text_08),
					d_azp_ibn_concept_t_land_08 => strtoupper($empty_pt_land_08),
					d_azp_ibn_concept_t_text_09 => strtoupper($empty_pt_text_09),
					d_azp_ibn_concept_t_land_09 => strtoupper($empty_pt_land_09),
					d_azp_ibn_concept_t_text_10 => strtoupper($empty_pt_text_10),
					d_azp_ibn_concept_t_land_10 => strtoupper($empty_pt_land_10),
					d_azp_ibn_concept_t_text_11 => strtoupper($empty_pt_text_11),
					d_azp_ibn_concept_t_land_11 => strtoupper($empty_pt_land_11),
					d_azp_ibn_concept_t_text_12 => strtoupper($empty_pt_text_12),
					d_azp_ibn_concept_t_land_12 => strtoupper($empty_pt_land_12),
					d_azp_ibn_concept_t_text_13 => strtoupper($empty_pt_text_13),
					d_azp_ibn_concept_t_land_13 => strtoupper($empty_pt_land_13),
					d_azp_ibn_concept_t_text_14 => strtoupper($empty_pt_text_14),
					d_azp_ibn_concept_t_land_14 => strtoupper($empty_pt_land_14),
					d_azp_ibn_concept_t_text_15 => strtoupper($empty_pt_text_15),
					d_azp_ibn_concept_t_land_15 => strtoupper($empty_pt_land_15),
					d_azp_ibn_concept_t_text_16 => strtoupper($empty_pt_text_16),
					d_azp_ibn_concept_t_land_16 => strtoupper($empty_pt_land_16),
					d_azp_ibn_concept_t_text_17 => strtoupper($empty_pt_text_17),
					d_azp_ibn_concept_t_land_17 => strtoupper($empty_pt_land_17),
					d_azp_ibn_concept_t_text_18 => strtoupper($empty_pt_text_18),
					d_azp_ibn_concept_t_land_18 => strtoupper($empty_pt_land_18),
					d_azp_ibn_concept_t_text_19 => strtoupper($empty_pt_text_19),
					d_azp_ibn_concept_t_land_19 => strtoupper($empty_pt_land_19),
					d_azp_ibn_concept_t_text_20 => strtoupper($empty_pt_text_20),
					d_azp_ibn_concept_t_land_20 => strtoupper($empty_pt_land_20),
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_concept, $var_array, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_pt_id . "'");
				#-------------------------------------------------------------------------#
				$empty_wt_id = $this->db->scape($data['field_m_wt_id']);
				$empty_wt_ibn_module = $this->db->scape($data['field_m_wt_ibn_module']);
				$empty_wt_text_01 = $this->db->scape($data['field_m_wt_text_01']);
				$empty_wt_land_01 = $this->db->scape($data['field_m_wt_land_01']);
				$empty_wt_text_02 = $this->db->scape($data['field_m_wt_text_02']);
				$empty_wt_land_02 = $this->db->scape($data['field_m_wt_land_02']);
				$empty_wt_text_03 = $this->db->scape($data['field_m_wt_text_03']);
				$empty_wt_land_03 = $this->db->scape($data['field_m_wt_land_03']);
				$empty_wt_text_04 = $this->db->scape($data['field_m_wt_text_04']);
				$empty_wt_land_04 = $this->db->scape($data['field_m_wt_land_04']);
				$empty_wt_text_05 = $this->db->scape($data['field_m_wt_text_05']);
				$empty_wt_land_05 = $this->db->scape($data['field_m_wt_land_05']);
				$empty_wt_text_06 = $this->db->scape($data['field_m_wt_text_06']);
				$empty_wt_land_06 = $this->db->scape($data['field_m_wt_land_06']);
				$empty_wt_text_07 = $this->db->scape($data['field_m_wt_text_07']);
				$empty_wt_land_07 = $this->db->scape($data['field_m_wt_land_07']);
				$empty_wt_text_08 = $this->db->scape($data['field_m_wt_text_08']);
				$empty_wt_land_08 = $this->db->scape($data['field_m_wt_land_08']);
				$empty_wt_text_09 = $this->db->scape($data['field_m_wt_text_09']);
				$empty_wt_land_09 = $this->db->scape($data['field_m_wt_land_09']);
				$empty_wt_text_10 = $this->db->scape($data['field_m_wt_text_10']);
				$empty_wt_land_10 = $this->db->scape($data['field_m_wt_land_10']);
				$empty_wt_text_11 = $this->db->scape($data['field_m_wt_text_11']);
				$empty_wt_land_11 = $this->db->scape($data['field_m_wt_land_11']);
				$empty_wt_text_12 = $this->db->scape($data['field_m_wt_text_12']);
				$empty_wt_land_12 = $this->db->scape($data['field_m_wt_land_12']);
				$empty_wt_text_13 = $this->db->scape($data['field_m_wt_text_13']);
				$empty_wt_land_13 = $this->db->scape($data['field_m_wt_land_13']);
				$empty_wt_text_14 = $this->db->scape($data['field_m_wt_text_14']);
				$empty_wt_land_14 = $this->db->scape($data['field_m_wt_land_14']);
				$empty_wt_text_15 = $this->db->scape($data['field_m_wt_text_15']);
				$empty_wt_land_15 = $this->db->scape($data['field_m_wt_land_15']);
				$empty_wt_text_16 = $this->db->scape($data['field_m_wt_text_16']);
				$empty_wt_land_16 = $this->db->scape($data['field_m_wt_land_16']);
				$empty_wt_text_17 = $this->db->scape($data['field_m_wt_text_17']);
				$empty_wt_land_17 = $this->db->scape($data['field_m_wt_land_17']);
				$empty_wt_text_18 = $this->db->scape($data['field_m_wt_text_18']);
				$empty_wt_land_18 = $this->db->scape($data['field_m_wt_land_18']);
				$empty_wt_text_19 = $this->db->scape($data['field_m_wt_text_19']);
				$empty_wt_land_19 = $this->db->scape($data['field_m_wt_land_19']);
				$empty_wt_text_20 = $this->db->scape($data['field_m_wt_text_20']);
				$empty_wt_land_20 = $this->db->scape($data['field_m_wt_land_20']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_concept_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_concept_m_date_modified => DATE_HOUR,
					d_azp_ibn_concept_t_text_01 => strtoupper($empty_wt_text_01),
					d_azp_ibn_concept_t_land_01 => strtoupper($empty_wt_land_01),
					d_azp_ibn_concept_t_text_02 => strtoupper($empty_wt_text_02),
					d_azp_ibn_concept_t_land_02 => strtoupper($empty_wt_land_02),
					d_azp_ibn_concept_t_text_03 => strtoupper($empty_wt_text_03),
					d_azp_ibn_concept_t_land_03 => strtoupper($empty_wt_land_03),
					d_azp_ibn_concept_t_text_04 => strtoupper($empty_wt_text_04),
					d_azp_ibn_concept_t_land_04 => strtoupper($empty_wt_land_04),
					d_azp_ibn_concept_t_text_05 => strtoupper($empty_wt_text_05),
					d_azp_ibn_concept_t_land_05 => strtoupper($empty_wt_land_05),
					d_azp_ibn_concept_t_text_06 => strtoupper($empty_wt_text_06),
					d_azp_ibn_concept_t_land_06 => strtoupper($empty_wt_land_06),
					d_azp_ibn_concept_t_text_07 => strtoupper($empty_wt_text_07),
					d_azp_ibn_concept_t_land_07 => strtoupper($empty_wt_land_07),
					d_azp_ibn_concept_t_text_08 => strtoupper($empty_wt_text_08),
					d_azp_ibn_concept_t_land_08 => strtoupper($empty_wt_land_08),
					d_azp_ibn_concept_t_text_09 => strtoupper($empty_wt_text_09),
					d_azp_ibn_concept_t_land_09 => strtoupper($empty_wt_land_09),
					d_azp_ibn_concept_t_text_10 => strtoupper($empty_wt_text_10),
					d_azp_ibn_concept_t_land_10 => strtoupper($empty_wt_land_10),
					d_azp_ibn_concept_t_text_11 => strtoupper($empty_wt_text_11),
					d_azp_ibn_concept_t_land_11 => strtoupper($empty_wt_land_11),
					d_azp_ibn_concept_t_text_12 => strtoupper($empty_wt_text_12),
					d_azp_ibn_concept_t_land_12 => strtoupper($empty_wt_land_12),
					d_azp_ibn_concept_t_text_13 => strtoupper($empty_wt_text_13),
					d_azp_ibn_concept_t_land_13 => strtoupper($empty_wt_land_13),
					d_azp_ibn_concept_t_text_14 => strtoupper($empty_wt_text_14),
					d_azp_ibn_concept_t_land_14 => strtoupper($empty_wt_land_14),
					d_azp_ibn_concept_t_text_15 => strtoupper($empty_wt_text_15),
					d_azp_ibn_concept_t_land_15 => strtoupper($empty_wt_land_15),
					d_azp_ibn_concept_t_text_16 => strtoupper($empty_wt_text_16),
					d_azp_ibn_concept_t_land_16 => strtoupper($empty_wt_land_16),
					d_azp_ibn_concept_t_text_17 => strtoupper($empty_wt_text_17),
					d_azp_ibn_concept_t_land_17 => strtoupper($empty_wt_land_17),
					d_azp_ibn_concept_t_text_18 => strtoupper($empty_wt_text_18),
					d_azp_ibn_concept_t_land_18 => strtoupper($empty_wt_land_18),
					d_azp_ibn_concept_t_text_19 => strtoupper($empty_wt_text_19),
					d_azp_ibn_concept_t_land_19 => strtoupper($empty_wt_land_19),
					d_azp_ibn_concept_t_text_20 => strtoupper($empty_wt_text_20),
					d_azp_ibn_concept_t_land_20 => strtoupper($empty_wt_land_20),
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_concept, $var_array, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_wt_id . "'");
				#-------------------------------------------------------------------------#
				$empty_vh_id = $this->db->scape($data['field_m_vh_id']);
				$empty_vh_ibn_module = $this->db->scape($data['field_m_vh_ibn_module']);
				$empty_vh_text_01 = $this->db->scape($data['field_m_vh_text_01']);
				$empty_vh_land_01 = $this->db->scape($data['field_m_vh_land_01']);
				$empty_vh_text_02 = $this->db->scape($data['field_m_vh_text_02']);
				$empty_vh_land_02 = $this->db->scape($data['field_m_vh_land_02']);
				$empty_vh_text_03 = $this->db->scape($data['field_m_vh_text_03']);
				$empty_vh_land_03 = $this->db->scape($data['field_m_vh_land_03']);
				$empty_vh_text_04 = $this->db->scape($data['field_m_vh_text_04']);
				$empty_vh_land_04 = $this->db->scape($data['field_m_vh_land_04']);
				$empty_vh_text_05 = $this->db->scape($data['field_m_vh_text_05']);
				$empty_vh_land_05 = $this->db->scape($data['field_m_vh_land_05']);
				$empty_vh_text_06 = $this->db->scape($data['field_m_vh_text_06']);
				$empty_vh_land_06 = $this->db->scape($data['field_m_vh_land_06']);
				$empty_vh_text_07 = $this->db->scape($data['field_m_vh_text_07']);
				$empty_vh_land_07 = $this->db->scape($data['field_m_vh_land_07']);
				$empty_vh_text_08 = $this->db->scape($data['field_m_vh_text_08']);
				$empty_vh_land_08 = $this->db->scape($data['field_m_vh_land_08']);
				$empty_vh_text_09 = $this->db->scape($data['field_m_vh_text_09']);
				$empty_vh_land_09 = $this->db->scape($data['field_m_vh_land_09']);
				$empty_vh_text_10 = $this->db->scape($data['field_m_vh_text_10']);
				$empty_vh_land_10 = $this->db->scape($data['field_m_vh_land_10']);
				$empty_vh_text_11 = $this->db->scape($data['field_m_vh_text_11']);
				$empty_vh_land_11 = $this->db->scape($data['field_m_vh_land_11']);
				$empty_vh_text_12 = $this->db->scape($data['field_m_vh_text_12']);
				$empty_vh_land_12 = $this->db->scape($data['field_m_vh_land_12']);
				$empty_vh_text_13 = $this->db->scape($data['field_m_vh_text_13']);
				$empty_vh_land_13 = $this->db->scape($data['field_m_vh_land_13']);
				$empty_vh_text_14 = $this->db->scape($data['field_m_vh_text_14']);
				$empty_vh_land_14 = $this->db->scape($data['field_m_vh_land_14']);
				$empty_vh_text_15 = $this->db->scape($data['field_m_vh_text_15']);
				$empty_vh_land_15 = $this->db->scape($data['field_m_vh_land_15']);
				$empty_vh_text_16 = $this->db->scape($data['field_m_vh_text_16']);
				$empty_vh_land_16 = $this->db->scape($data['field_m_vh_land_16']);
				$empty_vh_text_17 = $this->db->scape($data['field_m_vh_text_17']);
				$empty_vh_land_17 = $this->db->scape($data['field_m_vh_land_17']);
				$empty_vh_text_18 = $this->db->scape($data['field_m_vh_text_18']);
				$empty_vh_land_18 = $this->db->scape($data['field_m_vh_land_18']);
				$empty_vh_text_19 = $this->db->scape($data['field_m_vh_text_19']);
				$empty_vh_land_19 = $this->db->scape($data['field_m_vh_land_19']);
				$empty_vh_text_20 = $this->db->scape($data['field_m_vh_text_20']);
				$empty_vh_land_20 = $this->db->scape($data['field_m_vh_land_20']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_concept_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_concept_m_date_modified => DATE_HOUR,
					d_azp_ibn_concept_t_text_01 => strtoupper($empty_vh_text_01),
					d_azp_ibn_concept_t_land_01 => strtoupper($empty_vh_land_01),
					d_azp_ibn_concept_t_text_02 => strtoupper($empty_vh_text_02),
					d_azp_ibn_concept_t_land_02 => strtoupper($empty_vh_land_02),
					d_azp_ibn_concept_t_text_03 => strtoupper($empty_vh_text_03),
					d_azp_ibn_concept_t_land_03 => strtoupper($empty_vh_land_03),
					d_azp_ibn_concept_t_text_04 => strtoupper($empty_vh_text_04),
					d_azp_ibn_concept_t_land_04 => strtoupper($empty_vh_land_04),
					d_azp_ibn_concept_t_text_05 => strtoupper($empty_vh_text_05),
					d_azp_ibn_concept_t_land_05 => strtoupper($empty_vh_land_05),
					d_azp_ibn_concept_t_text_06 => strtoupper($empty_vh_text_06),
					d_azp_ibn_concept_t_land_06 => strtoupper($empty_vh_land_06),
					d_azp_ibn_concept_t_text_07 => strtoupper($empty_vh_text_07),
					d_azp_ibn_concept_t_land_07 => strtoupper($empty_vh_land_07),
					d_azp_ibn_concept_t_text_08 => strtoupper($empty_vh_text_08),
					d_azp_ibn_concept_t_land_08 => strtoupper($empty_vh_land_08),
					d_azp_ibn_concept_t_text_09 => strtoupper($empty_vh_text_09),
					d_azp_ibn_concept_t_land_09 => strtoupper($empty_vh_land_09),
					d_azp_ibn_concept_t_text_10 => strtoupper($empty_vh_text_10),
					d_azp_ibn_concept_t_land_10 => strtoupper($empty_vh_land_10),
					d_azp_ibn_concept_t_text_11 => strtoupper($empty_vh_text_11),
					d_azp_ibn_concept_t_land_11 => strtoupper($empty_vh_land_11),
					d_azp_ibn_concept_t_text_12 => strtoupper($empty_vh_text_12),
					d_azp_ibn_concept_t_land_12 => strtoupper($empty_vh_land_12),
					d_azp_ibn_concept_t_text_13 => strtoupper($empty_vh_text_13),
					d_azp_ibn_concept_t_land_13 => strtoupper($empty_vh_land_13),
					d_azp_ibn_concept_t_text_14 => strtoupper($empty_vh_text_14),
					d_azp_ibn_concept_t_land_14 => strtoupper($empty_vh_land_14),
					d_azp_ibn_concept_t_text_15 => strtoupper($empty_vh_text_15),
					d_azp_ibn_concept_t_land_15 => strtoupper($empty_vh_land_15),
					d_azp_ibn_concept_t_text_16 => strtoupper($empty_vh_text_16),
					d_azp_ibn_concept_t_land_16 => strtoupper($empty_vh_land_16),
					d_azp_ibn_concept_t_text_17 => strtoupper($empty_vh_text_17),
					d_azp_ibn_concept_t_land_17 => strtoupper($empty_vh_land_17),
					d_azp_ibn_concept_t_text_18 => strtoupper($empty_vh_text_18),
					d_azp_ibn_concept_t_land_18 => strtoupper($empty_vh_land_18),
					d_azp_ibn_concept_t_text_19 => strtoupper($empty_vh_text_19),
					d_azp_ibn_concept_t_land_19 => strtoupper($empty_vh_land_19),
					d_azp_ibn_concept_t_text_20 => strtoupper($empty_vh_text_20),
					d_azp_ibn_concept_t_land_20 => strtoupper($empty_vh_land_20),
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_concept, $var_array, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_vh_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_client_concept_cam(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_m_cm_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_ibn_module'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_01'])) { throw new Exception('<b>Error:</b> El campo de texto 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_01'])) { throw new Exception('<b>Error:</b> El campo de campo 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_02'])) { throw new Exception('<b>Error:</b> El campo de texto 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_02'])) { throw new Exception('<b>Error:</b> El campo de campo 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_03'])) { throw new Exception('<b>Error:</b> El campo de texto 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_03'])) { throw new Exception('<b>Error:</b> El campo de campo 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_04'])) { throw new Exception('<b>Error:</b> El campo de texto 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_04'])) { throw new Exception('<b>Error:</b> El campo de campo 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_05'])) { throw new Exception('<b>Error:</b> El campo de texto 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_05'])) { throw new Exception('<b>Error:</b> El campo de campo 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_06'])) { throw new Exception('<b>Error:</b> El campo de texto 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_06'])) { throw new Exception('<b>Error:</b> El campo de campo 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_07'])) { throw new Exception('<b>Error:</b> El campo de texto 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_07'])) { throw new Exception('<b>Error:</b> El campo de campo 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_08'])) { throw new Exception('<b>Error:</b> El campo de texto 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_08'])) { throw new Exception('<b>Error:</b> El campo de campo 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_09'])) { throw new Exception('<b>Error:</b> El campo de texto 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_09'])) { throw new Exception('<b>Error:</b> El campo de campo 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_10'])) { throw new Exception('<b>Error:</b> El campo de texto 10 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_10'])) { throw new Exception('<b>Error:</b> El campo de campo 10 esta prohibido modificar.'); }
				
				if (!isset($data['field_m_cm_text_11'])) { throw new Exception('<b>Error:</b> El campo de texto 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_11'])) { throw new Exception('<b>Error:</b> El campo de campo 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_12'])) { throw new Exception('<b>Error:</b> El campo de texto 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_12'])) { throw new Exception('<b>Error:</b> El campo de campo 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_13'])) { throw new Exception('<b>Error:</b> El campo de texto 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_13'])) { throw new Exception('<b>Error:</b> El campo de campo 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_14'])) { throw new Exception('<b>Error:</b> El campo de texto 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_14'])) { throw new Exception('<b>Error:</b> El campo de campo 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_15'])) { throw new Exception('<b>Error:</b> El campo de texto 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_15'])) { throw new Exception('<b>Error:</b> El campo de campo 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_16'])) { throw new Exception('<b>Error:</b> El campo de texto 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_16'])) { throw new Exception('<b>Error:</b> El campo de campo 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_17'])) { throw new Exception('<b>Error:</b> El campo de texto 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_17'])) { throw new Exception('<b>Error:</b> El campo de campo 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_18'])) { throw new Exception('<b>Error:</b> El campo de texto 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_18'])) { throw new Exception('<b>Error:</b> El campo de campo 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_19'])) { throw new Exception('<b>Error:</b> El campo de texto 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_19'])) { throw new Exception('<b>Error:</b> El campo de campo 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_text_20'])) { throw new Exception('<b>Error:</b> El campo de texto 20 esta prohibido modificar.'); }
				if (!isset($data['field_m_cm_land_20'])) { throw new Exception('<b>Error:</b> El campo de campo 20 esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_cm_id = $this->db->scape($data['field_m_cm_id']);
				$empty_cm_ibn_module = $this->db->scape($data['field_m_cm_ibn_module']);
				$empty_cm_text_01 = $this->db->scape($data['field_m_cm_text_01']);
				$empty_cm_land_01 = $this->db->scape($data['field_m_cm_land_01']);
				$empty_cm_text_02 = $this->db->scape($data['field_m_cm_text_02']);
				$empty_cm_land_02 = $this->db->scape($data['field_m_cm_land_02']);
				$empty_cm_text_03 = $this->db->scape($data['field_m_cm_text_03']);
				$empty_cm_land_03 = $this->db->scape($data['field_m_cm_land_03']);
				$empty_cm_text_04 = $this->db->scape($data['field_m_cm_text_04']);
				$empty_cm_land_04 = $this->db->scape($data['field_m_cm_land_04']);
				$empty_cm_text_05 = $this->db->scape($data['field_m_cm_text_05']);
				$empty_cm_land_05 = $this->db->scape($data['field_m_cm_land_05']);
				$empty_cm_text_06 = $this->db->scape($data['field_m_cm_text_06']);
				$empty_cm_land_06 = $this->db->scape($data['field_m_cm_land_06']);
				$empty_cm_text_07 = $this->db->scape($data['field_m_cm_text_07']);
				$empty_cm_land_07 = $this->db->scape($data['field_m_cm_land_07']);
				$empty_cm_text_08 = $this->db->scape($data['field_m_cm_text_08']);
				$empty_cm_land_08 = $this->db->scape($data['field_m_cm_land_08']);
				$empty_cm_text_09 = $this->db->scape($data['field_m_cm_text_09']);
				$empty_cm_land_09 = $this->db->scape($data['field_m_cm_land_09']);
				$empty_cm_text_10 = $this->db->scape($data['field_m_cm_text_10']);
				$empty_cm_land_10 = $this->db->scape($data['field_m_cm_land_10']);
				
				$empty_cm_text_11 = $this->db->scape($data['field_m_cm_text_11']);
				$empty_cm_land_11 = $this->db->scape($data['field_m_cm_land_11']);
				$empty_cm_text_12 = $this->db->scape($data['field_m_cm_text_12']);
				$empty_cm_land_12 = $this->db->scape($data['field_m_cm_land_12']);
				$empty_cm_text_13 = $this->db->scape($data['field_m_cm_text_13']);
				$empty_cm_land_13 = $this->db->scape($data['field_m_cm_land_13']);
				$empty_cm_text_14 = $this->db->scape($data['field_m_cm_text_14']);
				$empty_cm_land_14 = $this->db->scape($data['field_m_cm_land_14']);
				$empty_cm_text_15 = $this->db->scape($data['field_m_cm_text_15']);
				$empty_cm_land_15 = $this->db->scape($data['field_m_cm_land_15']);
				$empty_cm_text_16 = $this->db->scape($data['field_m_cm_text_16']);
				$empty_cm_land_16 = $this->db->scape($data['field_m_cm_land_16']);
				$empty_cm_text_17 = $this->db->scape($data['field_m_cm_text_17']);
				$empty_cm_land_17 = $this->db->scape($data['field_m_cm_land_17']);
				$empty_cm_text_18 = $this->db->scape($data['field_m_cm_text_18']);
				$empty_cm_land_18 = $this->db->scape($data['field_m_cm_land_18']);
				$empty_cm_text_19 = $this->db->scape($data['field_m_cm_text_19']);
				$empty_cm_land_19 = $this->db->scape($data['field_m_cm_land_19']);
				$empty_cm_text_20 = $this->db->scape($data['field_m_cm_text_20']);
				$empty_cm_land_20 = $this->db->scape($data['field_m_cm_land_20']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_cm_id) || $empty_cm_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id camaras es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_cm_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id camaras solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_client_concept_cam(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_concept_cam($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_cm_id = $this->db->scape($data['field_m_cm_id']);
				$empty_cm_ibn_module = $this->db->scape($data['field_m_cm_ibn_module']);
				$empty_cm_text_01 = $this->db->scape($data['field_m_cm_text_01']);
				$empty_cm_land_01 = $this->db->scape($data['field_m_cm_land_01']);
				$empty_cm_text_02 = $this->db->scape($data['field_m_cm_text_02']);
				$empty_cm_land_02 = $this->db->scape($data['field_m_cm_land_02']);
				$empty_cm_text_03 = $this->db->scape($data['field_m_cm_text_03']);
				$empty_cm_land_03 = $this->db->scape($data['field_m_cm_land_03']);
				$empty_cm_text_04 = $this->db->scape($data['field_m_cm_text_04']);
				$empty_cm_land_04 = $this->db->scape($data['field_m_cm_land_04']);
				$empty_cm_text_05 = $this->db->scape($data['field_m_cm_text_05']);
				$empty_cm_land_05 = $this->db->scape($data['field_m_cm_land_05']);
				$empty_cm_text_06 = $this->db->scape($data['field_m_cm_text_06']);
				$empty_cm_land_06 = $this->db->scape($data['field_m_cm_land_06']);
				$empty_cm_text_07 = $this->db->scape($data['field_m_cm_text_07']);
				$empty_cm_land_07 = $this->db->scape($data['field_m_cm_land_07']);
				$empty_cm_text_08 = $this->db->scape($data['field_m_cm_text_08']);
				$empty_cm_land_08 = $this->db->scape($data['field_m_cm_land_08']);
				$empty_cm_text_09 = $this->db->scape($data['field_m_cm_text_09']);
				$empty_cm_land_09 = $this->db->scape($data['field_m_cm_land_09']);
				$empty_cm_text_10 = $this->db->scape($data['field_m_cm_text_10']);
				$empty_cm_land_10 = $this->db->scape($data['field_m_cm_land_10']);
				$empty_cm_text_11 = $this->db->scape($data['field_m_cm_text_11']);
				$empty_cm_land_11 = $this->db->scape($data['field_m_cm_land_11']);
				$empty_cm_text_12 = $this->db->scape($data['field_m_cm_text_12']);
				$empty_cm_land_12 = $this->db->scape($data['field_m_cm_land_12']);
				$empty_cm_text_13 = $this->db->scape($data['field_m_cm_text_13']);
				$empty_cm_land_13 = $this->db->scape($data['field_m_cm_land_13']);
				$empty_cm_text_14 = $this->db->scape($data['field_m_cm_text_14']);
				$empty_cm_land_14 = $this->db->scape($data['field_m_cm_land_14']);
				$empty_cm_text_15 = $this->db->scape($data['field_m_cm_text_15']);
				$empty_cm_land_15 = $this->db->scape($data['field_m_cm_land_15']);
				$empty_cm_text_16 = $this->db->scape($data['field_m_cm_text_16']);
				$empty_cm_land_16 = $this->db->scape($data['field_m_cm_land_16']);
				$empty_cm_text_17 = $this->db->scape($data['field_m_cm_text_17']);
				$empty_cm_land_17 = $this->db->scape($data['field_m_cm_land_17']);
				$empty_cm_text_18 = $this->db->scape($data['field_m_cm_text_18']);
				$empty_cm_land_18 = $this->db->scape($data['field_m_cm_land_18']);
				$empty_cm_text_19 = $this->db->scape($data['field_m_cm_text_19']);
				$empty_cm_land_19 = $this->db->scape($data['field_m_cm_land_19']);
				$empty_cm_text_20 = $this->db->scape($data['field_m_cm_text_20']);
				$empty_cm_land_20 = $this->db->scape($data['field_m_cm_land_20']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_concept_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_concept_m_date_modified => DATE_HOUR,
					d_azp_ibn_concept_t_text_01 => strtoupper($empty_cm_text_01),
					d_azp_ibn_concept_t_land_01 => strtoupper($empty_cm_land_01),
					d_azp_ibn_concept_t_text_02 => strtoupper($empty_cm_text_02),
					d_azp_ibn_concept_t_land_02 => strtoupper($empty_cm_land_02),
					d_azp_ibn_concept_t_text_03 => strtoupper($empty_cm_text_03),
					d_azp_ibn_concept_t_land_03 => strtoupper($empty_cm_land_03),
					d_azp_ibn_concept_t_text_04 => strtoupper($empty_cm_text_04),
					d_azp_ibn_concept_t_land_04 => strtoupper($empty_cm_land_04),
					d_azp_ibn_concept_t_text_05 => strtoupper($empty_cm_text_05),
					d_azp_ibn_concept_t_land_05 => strtoupper($empty_cm_land_05),
					d_azp_ibn_concept_t_text_06 => strtoupper($empty_cm_text_06),
					d_azp_ibn_concept_t_land_06 => strtoupper($empty_cm_land_06),
					d_azp_ibn_concept_t_text_07 => strtoupper($empty_cm_text_07),
					d_azp_ibn_concept_t_land_07 => strtoupper($empty_cm_land_07),
					d_azp_ibn_concept_t_text_08 => strtoupper($empty_cm_text_08),
					d_azp_ibn_concept_t_land_08 => strtoupper($empty_cm_land_08),
					d_azp_ibn_concept_t_text_09 => strtoupper($empty_cm_text_09),
					d_azp_ibn_concept_t_land_09 => strtoupper($empty_cm_land_09),
					d_azp_ibn_concept_t_text_10 => strtoupper($empty_cm_text_10),
					d_azp_ibn_concept_t_land_10 => strtoupper($empty_cm_land_10),
					d_azp_ibn_concept_t_text_11 => strtoupper($empty_cm_text_11),
					d_azp_ibn_concept_t_land_11 => strtoupper($empty_cm_land_11),
					d_azp_ibn_concept_t_text_12 => strtoupper($empty_cm_text_12),
					d_azp_ibn_concept_t_land_12 => strtoupper($empty_cm_land_12),
					d_azp_ibn_concept_t_text_13 => strtoupper($empty_cm_text_13),
					d_azp_ibn_concept_t_land_13 => strtoupper($empty_cm_land_13),
					d_azp_ibn_concept_t_text_14 => strtoupper($empty_cm_text_14),
					d_azp_ibn_concept_t_land_14 => strtoupper($empty_cm_land_14),
					d_azp_ibn_concept_t_text_15 => strtoupper($empty_cm_text_15),
					d_azp_ibn_concept_t_land_15 => strtoupper($empty_cm_land_15),
					d_azp_ibn_concept_t_text_16 => strtoupper($empty_cm_text_16),
					d_azp_ibn_concept_t_land_16 => strtoupper($empty_cm_land_16),
					d_azp_ibn_concept_t_text_17 => strtoupper($empty_cm_text_17),
					d_azp_ibn_concept_t_land_17 => strtoupper($empty_cm_land_17),
					d_azp_ibn_concept_t_text_18 => strtoupper($empty_cm_text_18),
					d_azp_ibn_concept_t_land_18 => strtoupper($empty_cm_land_18),
					d_azp_ibn_concept_t_text_19 => strtoupper($empty_cm_text_19),
					d_azp_ibn_concept_t_land_19 => strtoupper($empty_cm_land_19),
					d_azp_ibn_concept_t_text_20 => strtoupper($empty_cm_text_20),
					d_azp_ibn_concept_t_land_20 => strtoupper($empty_cm_land_20),
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_concept, $var_array, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_cm_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_client_concept_fur(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_m_ft_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_ibn_module'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_01'])) { throw new Exception('<b>Error:</b> El campo de texto 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_01'])) { throw new Exception('<b>Error:</b> El campo de campo 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_02'])) { throw new Exception('<b>Error:</b> El campo de texto 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_02'])) { throw new Exception('<b>Error:</b> El campo de campo 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_03'])) { throw new Exception('<b>Error:</b> El campo de texto 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_03'])) { throw new Exception('<b>Error:</b> El campo de campo 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_04'])) { throw new Exception('<b>Error:</b> El campo de texto 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_04'])) { throw new Exception('<b>Error:</b> El campo de campo 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_05'])) { throw new Exception('<b>Error:</b> El campo de texto 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_05'])) { throw new Exception('<b>Error:</b> El campo de campo 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_06'])) { throw new Exception('<b>Error:</b> El campo de texto 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_06'])) { throw new Exception('<b>Error:</b> El campo de campo 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_07'])) { throw new Exception('<b>Error:</b> El campo de texto 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_07'])) { throw new Exception('<b>Error:</b> El campo de campo 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_08'])) { throw new Exception('<b>Error:</b> El campo de texto 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_08'])) { throw new Exception('<b>Error:</b> El campo de campo 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_09'])) { throw new Exception('<b>Error:</b> El campo de texto 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_09'])) { throw new Exception('<b>Error:</b> El campo de campo 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_10'])) { throw new Exception('<b>Error:</b> El campo de texto 10 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_10'])) { throw new Exception('<b>Error:</b> El campo de campo 10 esta prohibido modificar.'); }
				
				if (!isset($data['field_m_ft_text_11'])) { throw new Exception('<b>Error:</b> El campo de texto 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_11'])) { throw new Exception('<b>Error:</b> El campo de campo 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_12'])) { throw new Exception('<b>Error:</b> El campo de texto 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_12'])) { throw new Exception('<b>Error:</b> El campo de campo 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_13'])) { throw new Exception('<b>Error:</b> El campo de texto 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_13'])) { throw new Exception('<b>Error:</b> El campo de campo 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_14'])) { throw new Exception('<b>Error:</b> El campo de texto 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_14'])) { throw new Exception('<b>Error:</b> El campo de campo 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_15'])) { throw new Exception('<b>Error:</b> El campo de texto 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_15'])) { throw new Exception('<b>Error:</b> El campo de campo 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_16'])) { throw new Exception('<b>Error:</b> El campo de texto 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_16'])) { throw new Exception('<b>Error:</b> El campo de campo 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_17'])) { throw new Exception('<b>Error:</b> El campo de texto 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_17'])) { throw new Exception('<b>Error:</b> El campo de campo 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_18'])) { throw new Exception('<b>Error:</b> El campo de texto 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_18'])) { throw new Exception('<b>Error:</b> El campo de campo 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_19'])) { throw new Exception('<b>Error:</b> El campo de texto 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_19'])) { throw new Exception('<b>Error:</b> El campo de campo 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_text_20'])) { throw new Exception('<b>Error:</b> El campo de texto 20 esta prohibido modificar.'); }
				if (!isset($data['field_m_ft_land_20'])) { throw new Exception('<b>Error:</b> El campo de campo 20 esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_ft_id = $this->db->scape($data['field_m_ft_id']);
				$empty_ft_ibn_module = $this->db->scape($data['field_m_ft_ibn_module']);
				$empty_ft_text_01 = $this->db->scape($data['field_m_ft_text_01']);
				$empty_ft_land_01 = $this->db->scape($data['field_m_ft_land_01']);
				$empty_ft_text_02 = $this->db->scape($data['field_m_ft_text_02']);
				$empty_ft_land_02 = $this->db->scape($data['field_m_ft_land_02']);
				$empty_ft_text_03 = $this->db->scape($data['field_m_ft_text_03']);
				$empty_ft_land_03 = $this->db->scape($data['field_m_ft_land_03']);
				$empty_ft_text_04 = $this->db->scape($data['field_m_ft_text_04']);
				$empty_ft_land_04 = $this->db->scape($data['field_m_ft_land_04']);
				$empty_ft_text_05 = $this->db->scape($data['field_m_ft_text_05']);
				$empty_ft_land_05 = $this->db->scape($data['field_m_ft_land_05']);
				$empty_ft_text_06 = $this->db->scape($data['field_m_ft_text_06']);
				$empty_ft_land_06 = $this->db->scape($data['field_m_ft_land_06']);
				$empty_ft_text_07 = $this->db->scape($data['field_m_ft_text_07']);
				$empty_ft_land_07 = $this->db->scape($data['field_m_ft_land_07']);
				$empty_ft_text_08 = $this->db->scape($data['field_m_ft_text_08']);
				$empty_ft_land_08 = $this->db->scape($data['field_m_ft_land_08']);
				$empty_ft_text_09 = $this->db->scape($data['field_m_ft_text_09']);
				$empty_ft_land_09 = $this->db->scape($data['field_m_ft_land_09']);
				$empty_ft_text_10 = $this->db->scape($data['field_m_ft_text_10']);
				$empty_ft_land_10 = $this->db->scape($data['field_m_ft_land_10']);
				
				$empty_ft_text_11 = $this->db->scape($data['field_m_ft_text_11']);
				$empty_ft_land_11 = $this->db->scape($data['field_m_ft_land_11']);
				$empty_ft_text_12 = $this->db->scape($data['field_m_ft_text_12']);
				$empty_ft_land_12 = $this->db->scape($data['field_m_ft_land_12']);
				$empty_ft_text_13 = $this->db->scape($data['field_m_ft_text_13']);
				$empty_ft_land_13 = $this->db->scape($data['field_m_ft_land_13']);
				$empty_ft_text_14 = $this->db->scape($data['field_m_ft_text_14']);
				$empty_ft_land_14 = $this->db->scape($data['field_m_ft_land_14']);
				$empty_ft_text_15 = $this->db->scape($data['field_m_ft_text_15']);
				$empty_ft_land_15 = $this->db->scape($data['field_m_ft_land_15']);
				$empty_ft_text_16 = $this->db->scape($data['field_m_ft_text_16']);
				$empty_ft_land_16 = $this->db->scape($data['field_m_ft_land_16']);
				$empty_ft_text_17 = $this->db->scape($data['field_m_ft_text_17']);
				$empty_ft_land_17 = $this->db->scape($data['field_m_ft_land_17']);
				$empty_ft_text_18 = $this->db->scape($data['field_m_ft_text_18']);
				$empty_ft_land_18 = $this->db->scape($data['field_m_ft_land_18']);
				$empty_ft_text_19 = $this->db->scape($data['field_m_ft_text_19']);
				$empty_ft_land_19 = $this->db->scape($data['field_m_ft_land_19']);
				$empty_ft_text_20 = $this->db->scape($data['field_m_ft_text_20']);
				$empty_ft_land_20 = $this->db->scape($data['field_m_ft_land_20']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ft_id) || $empty_ft_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id salarios es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ft_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id salarios solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_client_concept_fur(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_concept_fur($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_ft_id = $this->db->scape($data['field_m_ft_id']);
				$empty_ft_ibn_module = $this->db->scape($data['field_m_ft_ibn_module']);
				$empty_ft_text_01 = $this->db->scape($data['field_m_ft_text_01']);
				$empty_ft_land_01 = $this->db->scape($data['field_m_ft_land_01']);
				$empty_ft_text_02 = $this->db->scape($data['field_m_ft_text_02']);
				$empty_ft_land_02 = $this->db->scape($data['field_m_ft_land_02']);
				$empty_ft_text_03 = $this->db->scape($data['field_m_ft_text_03']);
				$empty_ft_land_03 = $this->db->scape($data['field_m_ft_land_03']);
				$empty_ft_text_04 = $this->db->scape($data['field_m_ft_text_04']);
				$empty_ft_land_04 = $this->db->scape($data['field_m_ft_land_04']);
				$empty_ft_text_05 = $this->db->scape($data['field_m_ft_text_05']);
				$empty_ft_land_05 = $this->db->scape($data['field_m_ft_land_05']);
				$empty_ft_text_06 = $this->db->scape($data['field_m_ft_text_06']);
				$empty_ft_land_06 = $this->db->scape($data['field_m_ft_land_06']);
				$empty_ft_text_07 = $this->db->scape($data['field_m_ft_text_07']);
				$empty_ft_land_07 = $this->db->scape($data['field_m_ft_land_07']);
				$empty_ft_text_08 = $this->db->scape($data['field_m_ft_text_08']);
				$empty_ft_land_08 = $this->db->scape($data['field_m_ft_land_08']);
				$empty_ft_text_09 = $this->db->scape($data['field_m_ft_text_09']);
				$empty_ft_land_09 = $this->db->scape($data['field_m_ft_land_09']);
				$empty_ft_text_10 = $this->db->scape($data['field_m_ft_text_10']);
				$empty_ft_land_10 = $this->db->scape($data['field_m_ft_land_10']);
				$empty_ft_text_11 = $this->db->scape($data['field_m_ft_text_11']);
				$empty_ft_land_11 = $this->db->scape($data['field_m_ft_land_11']);
				$empty_ft_text_12 = $this->db->scape($data['field_m_ft_text_12']);
				$empty_ft_land_12 = $this->db->scape($data['field_m_ft_land_12']);
				$empty_ft_text_13 = $this->db->scape($data['field_m_ft_text_13']);
				$empty_ft_land_13 = $this->db->scape($data['field_m_ft_land_13']);
				$empty_ft_text_14 = $this->db->scape($data['field_m_ft_text_14']);
				$empty_ft_land_14 = $this->db->scape($data['field_m_ft_land_14']);
				$empty_ft_text_15 = $this->db->scape($data['field_m_ft_text_15']);
				$empty_ft_land_15 = $this->db->scape($data['field_m_ft_land_15']);
				$empty_ft_text_16 = $this->db->scape($data['field_m_ft_text_16']);
				$empty_ft_land_16 = $this->db->scape($data['field_m_ft_land_16']);
				$empty_ft_text_17 = $this->db->scape($data['field_m_ft_text_17']);
				$empty_ft_land_17 = $this->db->scape($data['field_m_ft_land_17']);
				$empty_ft_text_18 = $this->db->scape($data['field_m_ft_text_18']);
				$empty_ft_land_18 = $this->db->scape($data['field_m_ft_land_18']);
				$empty_ft_text_19 = $this->db->scape($data['field_m_ft_text_19']);
				$empty_ft_land_19 = $this->db->scape($data['field_m_ft_land_19']);
				$empty_ft_text_20 = $this->db->scape($data['field_m_ft_text_20']);
				$empty_ft_land_20 = $this->db->scape($data['field_m_ft_land_20']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_concept_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_concept_m_date_modified => DATE_HOUR,
					d_azp_ibn_concept_t_text_01 => strtoupper($empty_ft_text_01),
					d_azp_ibn_concept_t_land_01 => strtoupper($empty_ft_land_01),
					d_azp_ibn_concept_t_text_02 => strtoupper($empty_ft_text_02),
					d_azp_ibn_concept_t_land_02 => strtoupper($empty_ft_land_02),
					d_azp_ibn_concept_t_text_03 => strtoupper($empty_ft_text_03),
					d_azp_ibn_concept_t_land_03 => strtoupper($empty_ft_land_03),
					d_azp_ibn_concept_t_text_04 => strtoupper($empty_ft_text_04),
					d_azp_ibn_concept_t_land_04 => strtoupper($empty_ft_land_04),
					d_azp_ibn_concept_t_text_05 => strtoupper($empty_ft_text_05),
					d_azp_ibn_concept_t_land_05 => strtoupper($empty_ft_land_05),
					d_azp_ibn_concept_t_text_06 => strtoupper($empty_ft_text_06),
					d_azp_ibn_concept_t_land_06 => strtoupper($empty_ft_land_06),
					d_azp_ibn_concept_t_text_07 => strtoupper($empty_ft_text_07),
					d_azp_ibn_concept_t_land_07 => strtoupper($empty_ft_land_07),
					d_azp_ibn_concept_t_text_08 => strtoupper($empty_ft_text_08),
					d_azp_ibn_concept_t_land_08 => strtoupper($empty_ft_land_08),
					d_azp_ibn_concept_t_text_09 => strtoupper($empty_ft_text_09),
					d_azp_ibn_concept_t_land_09 => strtoupper($empty_ft_land_09),
					d_azp_ibn_concept_t_text_10 => strtoupper($empty_ft_text_10),
					d_azp_ibn_concept_t_land_10 => strtoupper($empty_ft_land_10),
					d_azp_ibn_concept_t_text_11 => strtoupper($empty_ft_text_11),
					d_azp_ibn_concept_t_land_11 => strtoupper($empty_ft_land_11),
					d_azp_ibn_concept_t_text_12 => strtoupper($empty_ft_text_12),
					d_azp_ibn_concept_t_land_12 => strtoupper($empty_ft_land_12),
					d_azp_ibn_concept_t_text_13 => strtoupper($empty_ft_text_13),
					d_azp_ibn_concept_t_land_13 => strtoupper($empty_ft_land_13),
					d_azp_ibn_concept_t_text_14 => strtoupper($empty_ft_text_14),
					d_azp_ibn_concept_t_land_14 => strtoupper($empty_ft_land_14),
					d_azp_ibn_concept_t_text_15 => strtoupper($empty_ft_text_15),
					d_azp_ibn_concept_t_land_15 => strtoupper($empty_ft_land_15),
					d_azp_ibn_concept_t_text_16 => strtoupper($empty_ft_text_16),
					d_azp_ibn_concept_t_land_16 => strtoupper($empty_ft_land_16),
					d_azp_ibn_concept_t_text_17 => strtoupper($empty_ft_text_17),
					d_azp_ibn_concept_t_land_17 => strtoupper($empty_ft_land_17),
					d_azp_ibn_concept_t_text_18 => strtoupper($empty_ft_text_18),
					d_azp_ibn_concept_t_land_18 => strtoupper($empty_ft_land_18),
					d_azp_ibn_concept_t_text_19 => strtoupper($empty_ft_text_19),
					d_azp_ibn_concept_t_land_19 => strtoupper($empty_ft_land_19),
					d_azp_ibn_concept_t_text_20 => strtoupper($empty_ft_text_20),
					d_azp_ibn_concept_t_land_20 => strtoupper($empty_ft_land_20),
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_concept, $var_array, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_ft_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_client_concept_pro(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_m_pt_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_ibn_module'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_01'])) { throw new Exception('<b>Error:</b> El campo de texto 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_01'])) { throw new Exception('<b>Error:</b> El campo de campo 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_02'])) { throw new Exception('<b>Error:</b> El campo de texto 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_02'])) { throw new Exception('<b>Error:</b> El campo de campo 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_03'])) { throw new Exception('<b>Error:</b> El campo de texto 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_03'])) { throw new Exception('<b>Error:</b> El campo de campo 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_04'])) { throw new Exception('<b>Error:</b> El campo de texto 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_04'])) { throw new Exception('<b>Error:</b> El campo de campo 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_05'])) { throw new Exception('<b>Error:</b> El campo de texto 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_05'])) { throw new Exception('<b>Error:</b> El campo de campo 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_06'])) { throw new Exception('<b>Error:</b> El campo de texto 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_06'])) { throw new Exception('<b>Error:</b> El campo de campo 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_07'])) { throw new Exception('<b>Error:</b> El campo de texto 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_07'])) { throw new Exception('<b>Error:</b> El campo de campo 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_08'])) { throw new Exception('<b>Error:</b> El campo de texto 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_08'])) { throw new Exception('<b>Error:</b> El campo de campo 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_09'])) { throw new Exception('<b>Error:</b> El campo de texto 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_09'])) { throw new Exception('<b>Error:</b> El campo de campo 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_10'])) { throw new Exception('<b>Error:</b> El campo de texto 10 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_10'])) { throw new Exception('<b>Error:</b> El campo de campo 10 esta prohibido modificar.'); }
				
				if (!isset($data['field_m_pt_text_11'])) { throw new Exception('<b>Error:</b> El campo de texto 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_11'])) { throw new Exception('<b>Error:</b> El campo de campo 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_12'])) { throw new Exception('<b>Error:</b> El campo de texto 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_12'])) { throw new Exception('<b>Error:</b> El campo de campo 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_13'])) { throw new Exception('<b>Error:</b> El campo de texto 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_13'])) { throw new Exception('<b>Error:</b> El campo de campo 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_14'])) { throw new Exception('<b>Error:</b> El campo de texto 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_14'])) { throw new Exception('<b>Error:</b> El campo de campo 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_15'])) { throw new Exception('<b>Error:</b> El campo de texto 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_15'])) { throw new Exception('<b>Error:</b> El campo de campo 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_16'])) { throw new Exception('<b>Error:</b> El campo de texto 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_16'])) { throw new Exception('<b>Error:</b> El campo de campo 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_17'])) { throw new Exception('<b>Error:</b> El campo de texto 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_17'])) { throw new Exception('<b>Error:</b> El campo de campo 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_18'])) { throw new Exception('<b>Error:</b> El campo de texto 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_18'])) { throw new Exception('<b>Error:</b> El campo de campo 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_19'])) { throw new Exception('<b>Error:</b> El campo de texto 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_19'])) { throw new Exception('<b>Error:</b> El campo de campo 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_text_20'])) { throw new Exception('<b>Error:</b> El campo de texto 20 esta prohibido modificar.'); }
				if (!isset($data['field_m_pt_land_20'])) { throw new Exception('<b>Error:</b> El campo de campo 20 esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_pt_id = $this->db->scape($data['field_m_pt_id']);
				$empty_pt_ibn_module = $this->db->scape($data['field_m_pt_ibn_module']);
				$empty_pt_text_01 = $this->db->scape($data['field_m_pt_text_01']);
				$empty_pt_land_01 = $this->db->scape($data['field_m_pt_land_01']);
				$empty_pt_text_02 = $this->db->scape($data['field_m_pt_text_02']);
				$empty_pt_land_02 = $this->db->scape($data['field_m_pt_land_02']);
				$empty_pt_text_03 = $this->db->scape($data['field_m_pt_text_03']);
				$empty_pt_land_03 = $this->db->scape($data['field_m_pt_land_03']);
				$empty_pt_text_04 = $this->db->scape($data['field_m_pt_text_04']);
				$empty_pt_land_04 = $this->db->scape($data['field_m_pt_land_04']);
				$empty_pt_text_05 = $this->db->scape($data['field_m_pt_text_05']);
				$empty_pt_land_05 = $this->db->scape($data['field_m_pt_land_05']);
				$empty_pt_text_06 = $this->db->scape($data['field_m_pt_text_06']);
				$empty_pt_land_06 = $this->db->scape($data['field_m_pt_land_06']);
				$empty_pt_text_07 = $this->db->scape($data['field_m_pt_text_07']);
				$empty_pt_land_07 = $this->db->scape($data['field_m_pt_land_07']);
				$empty_pt_text_08 = $this->db->scape($data['field_m_pt_text_08']);
				$empty_pt_land_08 = $this->db->scape($data['field_m_pt_land_08']);
				$empty_pt_text_09 = $this->db->scape($data['field_m_pt_text_09']);
				$empty_pt_land_09 = $this->db->scape($data['field_m_pt_land_09']);
				$empty_pt_text_10 = $this->db->scape($data['field_m_pt_text_10']);
				$empty_pt_land_10 = $this->db->scape($data['field_m_pt_land_10']);
				
				$empty_pt_text_11 = $this->db->scape($data['field_m_pt_text_11']);
				$empty_pt_land_11 = $this->db->scape($data['field_m_pt_land_11']);
				$empty_pt_text_12 = $this->db->scape($data['field_m_pt_text_12']);
				$empty_pt_land_12 = $this->db->scape($data['field_m_pt_land_12']);
				$empty_pt_text_13 = $this->db->scape($data['field_m_pt_text_13']);
				$empty_pt_land_13 = $this->db->scape($data['field_m_pt_land_13']);
				$empty_pt_text_14 = $this->db->scape($data['field_m_pt_text_14']);
				$empty_pt_land_14 = $this->db->scape($data['field_m_pt_land_14']);
				$empty_pt_text_15 = $this->db->scape($data['field_m_pt_text_15']);
				$empty_pt_land_15 = $this->db->scape($data['field_m_pt_land_15']);
				$empty_pt_text_16 = $this->db->scape($data['field_m_pt_text_16']);
				$empty_pt_land_16 = $this->db->scape($data['field_m_pt_land_16']);
				$empty_pt_text_17 = $this->db->scape($data['field_m_pt_text_17']);
				$empty_pt_land_17 = $this->db->scape($data['field_m_pt_land_17']);
				$empty_pt_text_18 = $this->db->scape($data['field_m_pt_text_18']);
				$empty_pt_land_18 = $this->db->scape($data['field_m_pt_land_18']);
				$empty_pt_text_19 = $this->db->scape($data['field_m_pt_text_19']);
				$empty_pt_land_19 = $this->db->scape($data['field_m_pt_land_19']);
				$empty_pt_text_20 = $this->db->scape($data['field_m_pt_text_20']);
				$empty_pt_land_20 = $this->db->scape($data['field_m_pt_land_20']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pt_id) || $empty_pt_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id inmuebles es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pt_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id inmuebles solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_client_concept_pro(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_concept_pro($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_pt_id = $this->db->scape($data['field_m_pt_id']);
				$empty_pt_ibn_module = $this->db->scape($data['field_m_pt_ibn_module']);
				$empty_pt_text_01 = $this->db->scape($data['field_m_pt_text_01']);
				$empty_pt_land_01 = $this->db->scape($data['field_m_pt_land_01']);
				$empty_pt_text_02 = $this->db->scape($data['field_m_pt_text_02']);
				$empty_pt_land_02 = $this->db->scape($data['field_m_pt_land_02']);
				$empty_pt_text_03 = $this->db->scape($data['field_m_pt_text_03']);
				$empty_pt_land_03 = $this->db->scape($data['field_m_pt_land_03']);
				$empty_pt_text_04 = $this->db->scape($data['field_m_pt_text_04']);
				$empty_pt_land_04 = $this->db->scape($data['field_m_pt_land_04']);
				$empty_pt_text_05 = $this->db->scape($data['field_m_pt_text_05']);
				$empty_pt_land_05 = $this->db->scape($data['field_m_pt_land_05']);
				$empty_pt_text_06 = $this->db->scape($data['field_m_pt_text_06']);
				$empty_pt_land_06 = $this->db->scape($data['field_m_pt_land_06']);
				$empty_pt_text_07 = $this->db->scape($data['field_m_pt_text_07']);
				$empty_pt_land_07 = $this->db->scape($data['field_m_pt_land_07']);
				$empty_pt_text_08 = $this->db->scape($data['field_m_pt_text_08']);
				$empty_pt_land_08 = $this->db->scape($data['field_m_pt_land_08']);
				$empty_pt_text_09 = $this->db->scape($data['field_m_pt_text_09']);
				$empty_pt_land_09 = $this->db->scape($data['field_m_pt_land_09']);
				$empty_pt_text_10 = $this->db->scape($data['field_m_pt_text_10']);
				$empty_pt_land_10 = $this->db->scape($data['field_m_pt_land_10']);
				$empty_pt_text_11 = $this->db->scape($data['field_m_pt_text_11']);
				$empty_pt_land_11 = $this->db->scape($data['field_m_pt_land_11']);
				$empty_pt_text_12 = $this->db->scape($data['field_m_pt_text_12']);
				$empty_pt_land_12 = $this->db->scape($data['field_m_pt_land_12']);
				$empty_pt_text_13 = $this->db->scape($data['field_m_pt_text_13']);
				$empty_pt_land_13 = $this->db->scape($data['field_m_pt_land_13']);
				$empty_pt_text_14 = $this->db->scape($data['field_m_pt_text_14']);
				$empty_pt_land_14 = $this->db->scape($data['field_m_pt_land_14']);
				$empty_pt_text_15 = $this->db->scape($data['field_m_pt_text_15']);
				$empty_pt_land_15 = $this->db->scape($data['field_m_pt_land_15']);
				$empty_pt_text_16 = $this->db->scape($data['field_m_pt_text_16']);
				$empty_pt_land_16 = $this->db->scape($data['field_m_pt_land_16']);
				$empty_pt_text_17 = $this->db->scape($data['field_m_pt_text_17']);
				$empty_pt_land_17 = $this->db->scape($data['field_m_pt_land_17']);
				$empty_pt_text_18 = $this->db->scape($data['field_m_pt_text_18']);
				$empty_pt_land_18 = $this->db->scape($data['field_m_pt_land_18']);
				$empty_pt_text_19 = $this->db->scape($data['field_m_pt_text_19']);
				$empty_pt_land_19 = $this->db->scape($data['field_m_pt_land_19']);
				$empty_pt_text_20 = $this->db->scape($data['field_m_pt_text_20']);
				$empty_pt_land_20 = $this->db->scape($data['field_m_pt_land_20']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_concept_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_concept_m_date_modified => DATE_HOUR,
					d_azp_ibn_concept_t_text_01 => strtoupper($empty_pt_text_01),
					d_azp_ibn_concept_t_land_01 => strtoupper($empty_pt_land_01),
					d_azp_ibn_concept_t_text_02 => strtoupper($empty_pt_text_02),
					d_azp_ibn_concept_t_land_02 => strtoupper($empty_pt_land_02),
					d_azp_ibn_concept_t_text_03 => strtoupper($empty_pt_text_03),
					d_azp_ibn_concept_t_land_03 => strtoupper($empty_pt_land_03),
					d_azp_ibn_concept_t_text_04 => strtoupper($empty_pt_text_04),
					d_azp_ibn_concept_t_land_04 => strtoupper($empty_pt_land_04),
					d_azp_ibn_concept_t_text_05 => strtoupper($empty_pt_text_05),
					d_azp_ibn_concept_t_land_05 => strtoupper($empty_pt_land_05),
					d_azp_ibn_concept_t_text_06 => strtoupper($empty_pt_text_06),
					d_azp_ibn_concept_t_land_06 => strtoupper($empty_pt_land_06),
					d_azp_ibn_concept_t_text_07 => strtoupper($empty_pt_text_07),
					d_azp_ibn_concept_t_land_07 => strtoupper($empty_pt_land_07),
					d_azp_ibn_concept_t_text_08 => strtoupper($empty_pt_text_08),
					d_azp_ibn_concept_t_land_08 => strtoupper($empty_pt_land_08),
					d_azp_ibn_concept_t_text_09 => strtoupper($empty_pt_text_09),
					d_azp_ibn_concept_t_land_09 => strtoupper($empty_pt_land_09),
					d_azp_ibn_concept_t_text_10 => strtoupper($empty_pt_text_10),
					d_azp_ibn_concept_t_land_10 => strtoupper($empty_pt_land_10),
					d_azp_ibn_concept_t_text_11 => strtoupper($empty_pt_text_11),
					d_azp_ibn_concept_t_land_11 => strtoupper($empty_pt_land_11),
					d_azp_ibn_concept_t_text_12 => strtoupper($empty_pt_text_12),
					d_azp_ibn_concept_t_land_12 => strtoupper($empty_pt_land_12),
					d_azp_ibn_concept_t_text_13 => strtoupper($empty_pt_text_13),
					d_azp_ibn_concept_t_land_13 => strtoupper($empty_pt_land_13),
					d_azp_ibn_concept_t_text_14 => strtoupper($empty_pt_text_14),
					d_azp_ibn_concept_t_land_14 => strtoupper($empty_pt_land_14),
					d_azp_ibn_concept_t_text_15 => strtoupper($empty_pt_text_15),
					d_azp_ibn_concept_t_land_15 => strtoupper($empty_pt_land_15),
					d_azp_ibn_concept_t_text_16 => strtoupper($empty_pt_text_16),
					d_azp_ibn_concept_t_land_16 => strtoupper($empty_pt_land_16),
					d_azp_ibn_concept_t_text_17 => strtoupper($empty_pt_text_17),
					d_azp_ibn_concept_t_land_17 => strtoupper($empty_pt_land_17),
					d_azp_ibn_concept_t_text_18 => strtoupper($empty_pt_text_18),
					d_azp_ibn_concept_t_land_18 => strtoupper($empty_pt_land_18),
					d_azp_ibn_concept_t_text_19 => strtoupper($empty_pt_text_19),
					d_azp_ibn_concept_t_land_19 => strtoupper($empty_pt_land_19),
					d_azp_ibn_concept_t_text_20 => strtoupper($empty_pt_text_20),
					d_azp_ibn_concept_t_land_20 => strtoupper($empty_pt_land_20),
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_concept, $var_array, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_pt_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_client_concept_veh(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_m_vh_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_ibn_module'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_01'])) { throw new Exception('<b>Error:</b> El campo de texto 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_01'])) { throw new Exception('<b>Error:</b> El campo de campo 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_02'])) { throw new Exception('<b>Error:</b> El campo de texto 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_02'])) { throw new Exception('<b>Error:</b> El campo de campo 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_03'])) { throw new Exception('<b>Error:</b> El campo de texto 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_03'])) { throw new Exception('<b>Error:</b> El campo de campo 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_04'])) { throw new Exception('<b>Error:</b> El campo de texto 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_04'])) { throw new Exception('<b>Error:</b> El campo de campo 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_05'])) { throw new Exception('<b>Error:</b> El campo de texto 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_05'])) { throw new Exception('<b>Error:</b> El campo de campo 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_06'])) { throw new Exception('<b>Error:</b> El campo de texto 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_06'])) { throw new Exception('<b>Error:</b> El campo de campo 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_07'])) { throw new Exception('<b>Error:</b> El campo de texto 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_07'])) { throw new Exception('<b>Error:</b> El campo de campo 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_08'])) { throw new Exception('<b>Error:</b> El campo de texto 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_08'])) { throw new Exception('<b>Error:</b> El campo de campo 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_09'])) { throw new Exception('<b>Error:</b> El campo de texto 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_09'])) { throw new Exception('<b>Error:</b> El campo de campo 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_10'])) { throw new Exception('<b>Error:</b> El campo de texto 10 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_10'])) { throw new Exception('<b>Error:</b> El campo de campo 10 esta prohibido modificar.'); }
				
				if (!isset($data['field_m_vh_text_11'])) { throw new Exception('<b>Error:</b> El campo de texto 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_11'])) { throw new Exception('<b>Error:</b> El campo de campo 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_12'])) { throw new Exception('<b>Error:</b> El campo de texto 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_12'])) { throw new Exception('<b>Error:</b> El campo de campo 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_13'])) { throw new Exception('<b>Error:</b> El campo de texto 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_13'])) { throw new Exception('<b>Error:</b> El campo de campo 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_14'])) { throw new Exception('<b>Error:</b> El campo de texto 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_14'])) { throw new Exception('<b>Error:</b> El campo de campo 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_15'])) { throw new Exception('<b>Error:</b> El campo de texto 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_15'])) { throw new Exception('<b>Error:</b> El campo de campo 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_16'])) { throw new Exception('<b>Error:</b> El campo de texto 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_16'])) { throw new Exception('<b>Error:</b> El campo de campo 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_17'])) { throw new Exception('<b>Error:</b> El campo de texto 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_17'])) { throw new Exception('<b>Error:</b> El campo de campo 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_18'])) { throw new Exception('<b>Error:</b> El campo de texto 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_18'])) { throw new Exception('<b>Error:</b> El campo de campo 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_19'])) { throw new Exception('<b>Error:</b> El campo de texto 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_19'])) { throw new Exception('<b>Error:</b> El campo de campo 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_text_20'])) { throw new Exception('<b>Error:</b> El campo de texto 20 esta prohibido modificar.'); }
				if (!isset($data['field_m_vh_land_20'])) { throw new Exception('<b>Error:</b> El campo de campo 20 esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_vh_id = $this->db->scape($data['field_m_vh_id']);
				$empty_vh_ibn_module = $this->db->scape($data['field_m_vh_ibn_module']);
				$empty_vh_text_01 = $this->db->scape($data['field_m_vh_text_01']);
				$empty_vh_land_01 = $this->db->scape($data['field_m_vh_land_01']);
				$empty_vh_text_02 = $this->db->scape($data['field_m_vh_text_02']);
				$empty_vh_land_02 = $this->db->scape($data['field_m_vh_land_02']);
				$empty_vh_text_03 = $this->db->scape($data['field_m_vh_text_03']);
				$empty_vh_land_03 = $this->db->scape($data['field_m_vh_land_03']);
				$empty_vh_text_04 = $this->db->scape($data['field_m_vh_text_04']);
				$empty_vh_land_04 = $this->db->scape($data['field_m_vh_land_04']);
				$empty_vh_text_05 = $this->db->scape($data['field_m_vh_text_05']);
				$empty_vh_land_05 = $this->db->scape($data['field_m_vh_land_05']);
				$empty_vh_text_06 = $this->db->scape($data['field_m_vh_text_06']);
				$empty_vh_land_06 = $this->db->scape($data['field_m_vh_land_06']);
				$empty_vh_text_07 = $this->db->scape($data['field_m_vh_text_07']);
				$empty_vh_land_07 = $this->db->scape($data['field_m_vh_land_07']);
				$empty_vh_text_08 = $this->db->scape($data['field_m_vh_text_08']);
				$empty_vh_land_08 = $this->db->scape($data['field_m_vh_land_08']);
				$empty_vh_text_09 = $this->db->scape($data['field_m_vh_text_09']);
				$empty_vh_land_09 = $this->db->scape($data['field_m_vh_land_09']);
				$empty_vh_text_10 = $this->db->scape($data['field_m_vh_text_10']);
				$empty_vh_land_10 = $this->db->scape($data['field_m_vh_land_10']);
				
				$empty_vh_text_11 = $this->db->scape($data['field_m_vh_text_11']);
				$empty_vh_land_11 = $this->db->scape($data['field_m_vh_land_11']);
				$empty_vh_text_12 = $this->db->scape($data['field_m_vh_text_12']);
				$empty_vh_land_12 = $this->db->scape($data['field_m_vh_land_12']);
				$empty_vh_text_13 = $this->db->scape($data['field_m_vh_text_13']);
				$empty_vh_land_13 = $this->db->scape($data['field_m_vh_land_13']);
				$empty_vh_text_14 = $this->db->scape($data['field_m_vh_text_14']);
				$empty_vh_land_14 = $this->db->scape($data['field_m_vh_land_14']);
				$empty_vh_text_15 = $this->db->scape($data['field_m_vh_text_15']);
				$empty_vh_land_15 = $this->db->scape($data['field_m_vh_land_15']);
				$empty_vh_text_16 = $this->db->scape($data['field_m_vh_text_16']);
				$empty_vh_land_16 = $this->db->scape($data['field_m_vh_land_16']);
				$empty_vh_text_17 = $this->db->scape($data['field_m_vh_text_17']);
				$empty_vh_land_17 = $this->db->scape($data['field_m_vh_land_17']);
				$empty_vh_text_18 = $this->db->scape($data['field_m_vh_text_18']);
				$empty_vh_land_18 = $this->db->scape($data['field_m_vh_land_18']);
				$empty_vh_text_19 = $this->db->scape($data['field_m_vh_text_19']);
				$empty_vh_land_19 = $this->db->scape($data['field_m_vh_land_19']);
				$empty_vh_text_20 = $this->db->scape($data['field_m_vh_text_20']);
				$empty_vh_land_20 = $this->db->scape($data['field_m_vh_land_20']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_vh_id) || $empty_vh_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id vehiculos es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_vh_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id vehiculos solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_client_concept_veh(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_concept_veh($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_vh_id = $this->db->scape($data['field_m_vh_id']);
				$empty_vh_ibn_module = $this->db->scape($data['field_m_vh_ibn_module']);
				$empty_vh_text_01 = $this->db->scape($data['field_m_vh_text_01']);
				$empty_vh_land_01 = $this->db->scape($data['field_m_vh_land_01']);
				$empty_vh_text_02 = $this->db->scape($data['field_m_vh_text_02']);
				$empty_vh_land_02 = $this->db->scape($data['field_m_vh_land_02']);
				$empty_vh_text_03 = $this->db->scape($data['field_m_vh_text_03']);
				$empty_vh_land_03 = $this->db->scape($data['field_m_vh_land_03']);
				$empty_vh_text_04 = $this->db->scape($data['field_m_vh_text_04']);
				$empty_vh_land_04 = $this->db->scape($data['field_m_vh_land_04']);
				$empty_vh_text_05 = $this->db->scape($data['field_m_vh_text_05']);
				$empty_vh_land_05 = $this->db->scape($data['field_m_vh_land_05']);
				$empty_vh_text_06 = $this->db->scape($data['field_m_vh_text_06']);
				$empty_vh_land_06 = $this->db->scape($data['field_m_vh_land_06']);
				$empty_vh_text_07 = $this->db->scape($data['field_m_vh_text_07']);
				$empty_vh_land_07 = $this->db->scape($data['field_m_vh_land_07']);
				$empty_vh_text_08 = $this->db->scape($data['field_m_vh_text_08']);
				$empty_vh_land_08 = $this->db->scape($data['field_m_vh_land_08']);
				$empty_vh_text_09 = $this->db->scape($data['field_m_vh_text_09']);
				$empty_vh_land_09 = $this->db->scape($data['field_m_vh_land_09']);
				$empty_vh_text_10 = $this->db->scape($data['field_m_vh_text_10']);
				$empty_vh_land_10 = $this->db->scape($data['field_m_vh_land_10']);
				$empty_vh_text_11 = $this->db->scape($data['field_m_vh_text_11']);
				$empty_vh_land_11 = $this->db->scape($data['field_m_vh_land_11']);
				$empty_vh_text_12 = $this->db->scape($data['field_m_vh_text_12']);
				$empty_vh_land_12 = $this->db->scape($data['field_m_vh_land_12']);
				$empty_vh_text_13 = $this->db->scape($data['field_m_vh_text_13']);
				$empty_vh_land_13 = $this->db->scape($data['field_m_vh_land_13']);
				$empty_vh_text_14 = $this->db->scape($data['field_m_vh_text_14']);
				$empty_vh_land_14 = $this->db->scape($data['field_m_vh_land_14']);
				$empty_vh_text_15 = $this->db->scape($data['field_m_vh_text_15']);
				$empty_vh_land_15 = $this->db->scape($data['field_m_vh_land_15']);
				$empty_vh_text_16 = $this->db->scape($data['field_m_vh_text_16']);
				$empty_vh_land_16 = $this->db->scape($data['field_m_vh_land_16']);
				$empty_vh_text_17 = $this->db->scape($data['field_m_vh_text_17']);
				$empty_vh_land_17 = $this->db->scape($data['field_m_vh_land_17']);
				$empty_vh_text_18 = $this->db->scape($data['field_m_vh_text_18']);
				$empty_vh_land_18 = $this->db->scape($data['field_m_vh_land_18']);
				$empty_vh_text_19 = $this->db->scape($data['field_m_vh_text_19']);
				$empty_vh_land_19 = $this->db->scape($data['field_m_vh_land_19']);
				$empty_vh_text_20 = $this->db->scape($data['field_m_vh_text_20']);
				$empty_vh_land_20 = $this->db->scape($data['field_m_vh_land_20']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_concept_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_concept_m_date_modified => DATE_HOUR,
					d_azp_ibn_concept_t_text_01 => strtoupper($empty_vh_text_01),
					d_azp_ibn_concept_t_land_01 => strtoupper($empty_vh_land_01),
					d_azp_ibn_concept_t_text_02 => strtoupper($empty_vh_text_02),
					d_azp_ibn_concept_t_land_02 => strtoupper($empty_vh_land_02),
					d_azp_ibn_concept_t_text_03 => strtoupper($empty_vh_text_03),
					d_azp_ibn_concept_t_land_03 => strtoupper($empty_vh_land_03),
					d_azp_ibn_concept_t_text_04 => strtoupper($empty_vh_text_04),
					d_azp_ibn_concept_t_land_04 => strtoupper($empty_vh_land_04),
					d_azp_ibn_concept_t_text_05 => strtoupper($empty_vh_text_05),
					d_azp_ibn_concept_t_land_05 => strtoupper($empty_vh_land_05),
					d_azp_ibn_concept_t_text_06 => strtoupper($empty_vh_text_06),
					d_azp_ibn_concept_t_land_06 => strtoupper($empty_vh_land_06),
					d_azp_ibn_concept_t_text_07 => strtoupper($empty_vh_text_07),
					d_azp_ibn_concept_t_land_07 => strtoupper($empty_vh_land_07),
					d_azp_ibn_concept_t_text_08 => strtoupper($empty_vh_text_08),
					d_azp_ibn_concept_t_land_08 => strtoupper($empty_vh_land_08),
					d_azp_ibn_concept_t_text_09 => strtoupper($empty_vh_text_09),
					d_azp_ibn_concept_t_land_09 => strtoupper($empty_vh_land_09),
					d_azp_ibn_concept_t_text_10 => strtoupper($empty_vh_text_10),
					d_azp_ibn_concept_t_land_10 => strtoupper($empty_vh_land_10),
					d_azp_ibn_concept_t_text_11 => strtoupper($empty_vh_text_11),
					d_azp_ibn_concept_t_land_11 => strtoupper($empty_vh_land_11),
					d_azp_ibn_concept_t_text_12 => strtoupper($empty_vh_text_12),
					d_azp_ibn_concept_t_land_12 => strtoupper($empty_vh_land_12),
					d_azp_ibn_concept_t_text_13 => strtoupper($empty_vh_text_13),
					d_azp_ibn_concept_t_land_13 => strtoupper($empty_vh_land_13),
					d_azp_ibn_concept_t_text_14 => strtoupper($empty_vh_text_14),
					d_azp_ibn_concept_t_land_14 => strtoupper($empty_vh_land_14),
					d_azp_ibn_concept_t_text_15 => strtoupper($empty_vh_text_15),
					d_azp_ibn_concept_t_land_15 => strtoupper($empty_vh_land_15),
					d_azp_ibn_concept_t_text_16 => strtoupper($empty_vh_text_16),
					d_azp_ibn_concept_t_land_16 => strtoupper($empty_vh_land_16),
					d_azp_ibn_concept_t_text_17 => strtoupper($empty_vh_text_17),
					d_azp_ibn_concept_t_land_17 => strtoupper($empty_vh_land_17),
					d_azp_ibn_concept_t_text_18 => strtoupper($empty_vh_text_18),
					d_azp_ibn_concept_t_land_18 => strtoupper($empty_vh_land_18),
					d_azp_ibn_concept_t_text_19 => strtoupper($empty_vh_text_19),
					d_azp_ibn_concept_t_land_19 => strtoupper($empty_vh_land_19),
					d_azp_ibn_concept_t_text_20 => strtoupper($empty_vh_text_20),
					d_azp_ibn_concept_t_land_20 => strtoupper($empty_vh_land_20),
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_concept, $var_array, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_vh_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_client_concept_war(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_m_wt_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_ibn_module'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_01'])) { throw new Exception('<b>Error:</b> El campo de texto 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_01'])) { throw new Exception('<b>Error:</b> El campo de campo 01 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_02'])) { throw new Exception('<b>Error:</b> El campo de texto 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_02'])) { throw new Exception('<b>Error:</b> El campo de campo 02 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_03'])) { throw new Exception('<b>Error:</b> El campo de texto 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_03'])) { throw new Exception('<b>Error:</b> El campo de campo 03 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_04'])) { throw new Exception('<b>Error:</b> El campo de texto 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_04'])) { throw new Exception('<b>Error:</b> El campo de campo 04 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_05'])) { throw new Exception('<b>Error:</b> El campo de texto 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_05'])) { throw new Exception('<b>Error:</b> El campo de campo 05 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_06'])) { throw new Exception('<b>Error:</b> El campo de texto 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_06'])) { throw new Exception('<b>Error:</b> El campo de campo 06 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_07'])) { throw new Exception('<b>Error:</b> El campo de texto 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_07'])) { throw new Exception('<b>Error:</b> El campo de campo 07 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_08'])) { throw new Exception('<b>Error:</b> El campo de texto 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_08'])) { throw new Exception('<b>Error:</b> El campo de campo 08 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_09'])) { throw new Exception('<b>Error:</b> El campo de texto 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_09'])) { throw new Exception('<b>Error:</b> El campo de campo 09 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_10'])) { throw new Exception('<b>Error:</b> El campo de texto 10 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_10'])) { throw new Exception('<b>Error:</b> El campo de campo 10 esta prohibido modificar.'); }
				
				if (!isset($data['field_m_wt_text_11'])) { throw new Exception('<b>Error:</b> El campo de texto 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_11'])) { throw new Exception('<b>Error:</b> El campo de campo 11 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_12'])) { throw new Exception('<b>Error:</b> El campo de texto 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_12'])) { throw new Exception('<b>Error:</b> El campo de campo 12 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_13'])) { throw new Exception('<b>Error:</b> El campo de texto 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_13'])) { throw new Exception('<b>Error:</b> El campo de campo 13 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_14'])) { throw new Exception('<b>Error:</b> El campo de texto 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_14'])) { throw new Exception('<b>Error:</b> El campo de campo 14 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_15'])) { throw new Exception('<b>Error:</b> El campo de texto 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_15'])) { throw new Exception('<b>Error:</b> El campo de campo 15 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_16'])) { throw new Exception('<b>Error:</b> El campo de texto 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_16'])) { throw new Exception('<b>Error:</b> El campo de campo 16 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_17'])) { throw new Exception('<b>Error:</b> El campo de texto 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_17'])) { throw new Exception('<b>Error:</b> El campo de campo 17 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_18'])) { throw new Exception('<b>Error:</b> El campo de texto 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_18'])) { throw new Exception('<b>Error:</b> El campo de campo 18 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_19'])) { throw new Exception('<b>Error:</b> El campo de texto 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_19'])) { throw new Exception('<b>Error:</b> El campo de campo 19 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_text_20'])) { throw new Exception('<b>Error:</b> El campo de texto 20 esta prohibido modificar.'); }
				if (!isset($data['field_m_wt_land_20'])) { throw new Exception('<b>Error:</b> El campo de campo 20 esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_wt_id = $this->db->scape($data['field_m_wt_id']);
				$empty_wt_ibn_module = $this->db->scape($data['field_m_wt_ibn_module']);
				$empty_wt_text_01 = $this->db->scape($data['field_m_wt_text_01']);
				$empty_wt_land_01 = $this->db->scape($data['field_m_wt_land_01']);
				$empty_wt_text_02 = $this->db->scape($data['field_m_wt_text_02']);
				$empty_wt_land_02 = $this->db->scape($data['field_m_wt_land_02']);
				$empty_wt_text_03 = $this->db->scape($data['field_m_wt_text_03']);
				$empty_wt_land_03 = $this->db->scape($data['field_m_wt_land_03']);
				$empty_wt_text_04 = $this->db->scape($data['field_m_wt_text_04']);
				$empty_wt_land_04 = $this->db->scape($data['field_m_wt_land_04']);
				$empty_wt_text_05 = $this->db->scape($data['field_m_wt_text_05']);
				$empty_wt_land_05 = $this->db->scape($data['field_m_wt_land_05']);
				$empty_wt_text_06 = $this->db->scape($data['field_m_wt_text_06']);
				$empty_wt_land_06 = $this->db->scape($data['field_m_wt_land_06']);
				$empty_wt_text_07 = $this->db->scape($data['field_m_wt_text_07']);
				$empty_wt_land_07 = $this->db->scape($data['field_m_wt_land_07']);
				$empty_wt_text_08 = $this->db->scape($data['field_m_wt_text_08']);
				$empty_wt_land_08 = $this->db->scape($data['field_m_wt_land_08']);
				$empty_wt_text_09 = $this->db->scape($data['field_m_wt_text_09']);
				$empty_wt_land_09 = $this->db->scape($data['field_m_wt_land_09']);
				$empty_wt_text_10 = $this->db->scape($data['field_m_wt_text_10']);
				$empty_wt_land_10 = $this->db->scape($data['field_m_wt_land_10']);
				
				$empty_wt_text_11 = $this->db->scape($data['field_m_wt_text_11']);
				$empty_wt_land_11 = $this->db->scape($data['field_m_wt_land_11']);
				$empty_wt_text_12 = $this->db->scape($data['field_m_wt_text_12']);
				$empty_wt_land_12 = $this->db->scape($data['field_m_wt_land_12']);
				$empty_wt_text_13 = $this->db->scape($data['field_m_wt_text_13']);
				$empty_wt_land_13 = $this->db->scape($data['field_m_wt_land_13']);
				$empty_wt_text_14 = $this->db->scape($data['field_m_wt_text_14']);
				$empty_wt_land_14 = $this->db->scape($data['field_m_wt_land_14']);
				$empty_wt_text_15 = $this->db->scape($data['field_m_wt_text_15']);
				$empty_wt_land_15 = $this->db->scape($data['field_m_wt_land_15']);
				$empty_wt_text_16 = $this->db->scape($data['field_m_wt_text_16']);
				$empty_wt_land_16 = $this->db->scape($data['field_m_wt_land_16']);
				$empty_wt_text_17 = $this->db->scape($data['field_m_wt_text_17']);
				$empty_wt_land_17 = $this->db->scape($data['field_m_wt_land_17']);
				$empty_wt_text_18 = $this->db->scape($data['field_m_wt_text_18']);
				$empty_wt_land_18 = $this->db->scape($data['field_m_wt_land_18']);
				$empty_wt_text_19 = $this->db->scape($data['field_m_wt_text_19']);
				$empty_wt_land_19 = $this->db->scape($data['field_m_wt_land_19']);
				$empty_wt_text_20 = $this->db->scape($data['field_m_wt_text_20']);
				$empty_wt_land_20 = $this->db->scape($data['field_m_wt_land_20']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_wt_id) || $empty_wt_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id garantias es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_wt_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id garantias solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_client_concept_war(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_concept_war($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_wt_id = $this->db->scape($data['field_m_wt_id']);
				$empty_wt_ibn_module = $this->db->scape($data['field_m_wt_ibn_module']);
				$empty_wt_text_01 = $this->db->scape($data['field_m_wt_text_01']);
				$empty_wt_land_01 = $this->db->scape($data['field_m_wt_land_01']);
				$empty_wt_text_02 = $this->db->scape($data['field_m_wt_text_02']);
				$empty_wt_land_02 = $this->db->scape($data['field_m_wt_land_02']);
				$empty_wt_text_03 = $this->db->scape($data['field_m_wt_text_03']);
				$empty_wt_land_03 = $this->db->scape($data['field_m_wt_land_03']);
				$empty_wt_text_04 = $this->db->scape($data['field_m_wt_text_04']);
				$empty_wt_land_04 = $this->db->scape($data['field_m_wt_land_04']);
				$empty_wt_text_05 = $this->db->scape($data['field_m_wt_text_05']);
				$empty_wt_land_05 = $this->db->scape($data['field_m_wt_land_05']);
				$empty_wt_text_06 = $this->db->scape($data['field_m_wt_text_06']);
				$empty_wt_land_06 = $this->db->scape($data['field_m_wt_land_06']);
				$empty_wt_text_07 = $this->db->scape($data['field_m_wt_text_07']);
				$empty_wt_land_07 = $this->db->scape($data['field_m_wt_land_07']);
				$empty_wt_text_08 = $this->db->scape($data['field_m_wt_text_08']);
				$empty_wt_land_08 = $this->db->scape($data['field_m_wt_land_08']);
				$empty_wt_text_09 = $this->db->scape($data['field_m_wt_text_09']);
				$empty_wt_land_09 = $this->db->scape($data['field_m_wt_land_09']);
				$empty_wt_text_10 = $this->db->scape($data['field_m_wt_text_10']);
				$empty_wt_land_10 = $this->db->scape($data['field_m_wt_land_10']);
				$empty_wt_text_11 = $this->db->scape($data['field_m_wt_text_11']);
				$empty_wt_land_11 = $this->db->scape($data['field_m_wt_land_11']);
				$empty_wt_text_12 = $this->db->scape($data['field_m_wt_text_12']);
				$empty_wt_land_12 = $this->db->scape($data['field_m_wt_land_12']);
				$empty_wt_text_13 = $this->db->scape($data['field_m_wt_text_13']);
				$empty_wt_land_13 = $this->db->scape($data['field_m_wt_land_13']);
				$empty_wt_text_14 = $this->db->scape($data['field_m_wt_text_14']);
				$empty_wt_land_14 = $this->db->scape($data['field_m_wt_land_14']);
				$empty_wt_text_15 = $this->db->scape($data['field_m_wt_text_15']);
				$empty_wt_land_15 = $this->db->scape($data['field_m_wt_land_15']);
				$empty_wt_text_16 = $this->db->scape($data['field_m_wt_text_16']);
				$empty_wt_land_16 = $this->db->scape($data['field_m_wt_land_16']);
				$empty_wt_text_17 = $this->db->scape($data['field_m_wt_text_17']);
				$empty_wt_land_17 = $this->db->scape($data['field_m_wt_land_17']);
				$empty_wt_text_18 = $this->db->scape($data['field_m_wt_text_18']);
				$empty_wt_land_18 = $this->db->scape($data['field_m_wt_land_18']);
				$empty_wt_text_19 = $this->db->scape($data['field_m_wt_text_19']);
				$empty_wt_land_19 = $this->db->scape($data['field_m_wt_land_19']);
				$empty_wt_text_20 = $this->db->scape($data['field_m_wt_text_20']);
				$empty_wt_land_20 = $this->db->scape($data['field_m_wt_land_20']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_concept_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_concept_m_date_modified => DATE_HOUR,
					d_azp_ibn_concept_t_text_01 => strtoupper($empty_wt_text_01),
					d_azp_ibn_concept_t_land_01 => strtoupper($empty_wt_land_01),
					d_azp_ibn_concept_t_text_02 => strtoupper($empty_wt_text_02),
					d_azp_ibn_concept_t_land_02 => strtoupper($empty_wt_land_02),
					d_azp_ibn_concept_t_text_03 => strtoupper($empty_wt_text_03),
					d_azp_ibn_concept_t_land_03 => strtoupper($empty_wt_land_03),
					d_azp_ibn_concept_t_text_04 => strtoupper($empty_wt_text_04),
					d_azp_ibn_concept_t_land_04 => strtoupper($empty_wt_land_04),
					d_azp_ibn_concept_t_text_05 => strtoupper($empty_wt_text_05),
					d_azp_ibn_concept_t_land_05 => strtoupper($empty_wt_land_05),
					d_azp_ibn_concept_t_text_06 => strtoupper($empty_wt_text_06),
					d_azp_ibn_concept_t_land_06 => strtoupper($empty_wt_land_06),
					d_azp_ibn_concept_t_text_07 => strtoupper($empty_wt_text_07),
					d_azp_ibn_concept_t_land_07 => strtoupper($empty_wt_land_07),
					d_azp_ibn_concept_t_text_08 => strtoupper($empty_wt_text_08),
					d_azp_ibn_concept_t_land_08 => strtoupper($empty_wt_land_08),
					d_azp_ibn_concept_t_text_09 => strtoupper($empty_wt_text_09),
					d_azp_ibn_concept_t_land_09 => strtoupper($empty_wt_land_09),
					d_azp_ibn_concept_t_text_10 => strtoupper($empty_wt_text_10),
					d_azp_ibn_concept_t_land_10 => strtoupper($empty_wt_land_10),
					d_azp_ibn_concept_t_text_11 => strtoupper($empty_wt_text_11),
					d_azp_ibn_concept_t_land_11 => strtoupper($empty_wt_land_11),
					d_azp_ibn_concept_t_text_12 => strtoupper($empty_wt_text_12),
					d_azp_ibn_concept_t_land_12 => strtoupper($empty_wt_land_12),
					d_azp_ibn_concept_t_text_13 => strtoupper($empty_wt_text_13),
					d_azp_ibn_concept_t_land_13 => strtoupper($empty_wt_land_13),
					d_azp_ibn_concept_t_text_14 => strtoupper($empty_wt_text_14),
					d_azp_ibn_concept_t_land_14 => strtoupper($empty_wt_land_14),
					d_azp_ibn_concept_t_text_15 => strtoupper($empty_wt_text_15),
					d_azp_ibn_concept_t_land_15 => strtoupper($empty_wt_land_15),
					d_azp_ibn_concept_t_text_16 => strtoupper($empty_wt_text_16),
					d_azp_ibn_concept_t_land_16 => strtoupper($empty_wt_land_16),
					d_azp_ibn_concept_t_text_17 => strtoupper($empty_wt_text_17),
					d_azp_ibn_concept_t_land_17 => strtoupper($empty_wt_land_17),
					d_azp_ibn_concept_t_text_18 => strtoupper($empty_wt_text_18),
					d_azp_ibn_concept_t_land_18 => strtoupper($empty_wt_land_18),
					d_azp_ibn_concept_t_text_19 => strtoupper($empty_wt_text_19),
					d_azp_ibn_concept_t_land_19 => strtoupper($empty_wt_land_19),
					d_azp_ibn_concept_t_text_20 => strtoupper($empty_wt_text_20),
					d_azp_ibn_concept_t_land_20 => strtoupper($empty_wt_land_20),
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_concept, $var_array, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_wt_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_ibn_client_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_level . " = '2'");
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
		final public function sql_azp_ibn_client_delete(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_delete($data);
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
				$var_array = array(d_azp_ibn_client_m_deleted => '4',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_client, $var_array, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_client_file(array $data) {
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
				$empty_tamanio = 1000; $empty_bytes = 1024;
				$empty_extension = array('gif','jpg','jpge','png',);
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
					throw new Exception('<b>Error:</b> El archivo seleccionado excede el tamaño de 1 MB.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_level . " = '2'");
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
		final public function sql_azp_ibn_client_file(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_file($data);
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
				$empty_folder = 'azp_ibn_client/' . $empty_id . '/';
				#-------------------------------------------------------------------------#
				$empty_path_info = strtolower(pathinfo($empty_name, PATHINFO_EXTENSION));
				$empty_document = DATE_NUMBER . '_' . HOUR_NUMBER . '.' . $empty_path_info;
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_client_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_client_m_date_modified => DATE_HOUR,
					d_azp_ibn_client_w_document => $empty_document,
					d_azp_ibn_client_w_error => $empty_error,
					d_azp_ibn_client_w_folder => $empty_folder,
					d_azp_ibn_client_w_name => $empty_name,
					d_azp_ibn_client_w_route => $empty_route,
					d_azp_ibn_client_w_size => $empty_size,
					d_azp_ibn_client_w_tmp_name => $empty_tmp_name,
					d_azp_ibn_client_w_type => $empty_type,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_client, $var_array, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Contro de existencia de carpeta
				if (!is_dir($empty_route . $empty_folder)) { Files::create_dir($empty_route . $empty_folder, 0777); }
				chmod($empty_route . $empty_folder, 0777);
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
		final private function error_sql_azp_ibn_client_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_days'])) { throw new Exception('<b>Error:</b> El campo de dias de cumplimiento esta prohibido modificar.'); }
				if (!isset($data['field_cr_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_sector'])) { throw new Exception('<b>Error:</b> El campo de sector esta prohibido modificar.'); }
				if (!isset($data['field_cr_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_cr_sector'])) { throw new Exception('<b>Error:</b> El campo de sector esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_days = $this->db->scape($data['field_cr_days']);
				$empty_name = $this->db->scape($data['field_cr_name']);
				$empty_ibn_sector = $this->db->scape($data['field_cr_ibn_sector']);
				$empty_client = $this->db->scape($data['field_cr_client']);
				$empty_sector = $this->db->scape($data['field_cr_sector']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_days) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dias cumplimiento debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_days) > 8) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dias cumplimiento permite maximo hasta 8 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_days, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dias cumplimiento no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_days)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dias cumplimiento no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es obligatorio.');
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
				/*if (Func::emp($empty_ibn_sector) || strtolower($empty_ibn_sector) == strtolower('seleccionar') || $empty_ibn_sector == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sector es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_sector)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sector solo permite numeros.');
				}*/
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
				/*$sql_name = $this->db->select(d_azp_ibn_client_t_name, t_azp_ibn_client, d_azp_ibn_client_t_name . " = '" . $empty_name . "'");
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
				/*$sql_ibn_sector = $this->db->select('*', t_azp_ibn_sector, d_azp_ibn_sector_id_azp_ibn_sector . " = '" . $empty_ibn_sector . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_sector) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_sector) == '') { $sql_ibn_sector[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_sector[0][0]) != strtolower($empty_ibn_sector)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El sector seleccionado no se encuentra registrado.');
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
				$sql_query = $this->db->select('*', t_azp_ibn_client,
					d_azp_ibn_client_m_deleted . " = '1' AND " .
					d_azp_ibn_client_v_id_azp_fct_client . " = '" . $empty_client . "' AND " .
					d_azp_ibn_client_v_id_azp_fct_sector . " = '" . $empty_sector . "'"
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
		final public function sql_azp_ibn_client_insert(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_days = $this->db->scape($data['field_cr_days']);
				$empty_name = $this->db->scape($data['field_cr_name']);
				$empty_ibn_sector = $this->db->scape($data['field_cr_ibn_sector']);
				$empty_client = $this->db->scape($data['field_cr_client']);
				$empty_sector = $this->db->scape($data['field_cr_sector']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_client_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_ibn_client_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_client_m_date_created => DATE_HOUR,
					d_azp_ibn_client_m_date_modified => DATE_HOUR,
					d_azp_ibn_client_m_deleted => '1',
					d_azp_ibn_client_m_description => $empty_description,
					d_azp_ibn_client_m_level => '2',
					d_azp_ibn_client_m_status => '1',
					d_azp_ibn_client_m_temp => '2',
					d_azp_ibn_client_t_days => strtoupper($empty_days),
					d_azp_ibn_client_t_name => strtoupper($empty_name),
					d_azp_ibn_client_w_document => '',
					d_azp_ibn_client_w_error => '',
					d_azp_ibn_client_w_folder => '',
					d_azp_ibn_client_w_name => '',
					d_azp_ibn_client_w_route => '',
					d_azp_ibn_client_w_size => '',
					d_azp_ibn_client_w_tmp_name => '',
					d_azp_ibn_client_w_type => '',
					d_azp_ibn_client_v_id_azp_ibn_format_file => '1',
					d_azp_ibn_client_v_id_azp_ibn_sector => $empty_sector,
					d_azp_ibn_client_v_id_azp_fct_client => $empty_client,
					d_azp_ibn_client_v_id_azp_fct_sector => $empty_sector,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_ibn_client, $var_array);
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_m_temp . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_client = $value[d_azp_ibn_client_v_id_azp_fct_client]; endforeach; } else { $var_client = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $var_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_ibn_client_t_name => $value[d_azp_fct_client_t_name],);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_ibn_client, $var_array, d_azp_ibn_client_m_temp . " = '2'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Query Sql: Ejecutar codigo sql en la base de datos
				$var_sql_cl = $this->db->select('*', t_azp_ibn_client,
					d_azp_ibn_client_m_temp . " = '2' AND " .
					d_azp_ibn_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_cl) {
					# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
					foreach ($var_sql_cl as $key_cl):
						# Query Sql: Ejecutar codigo sql en la base de datos
						$var_sql_cn = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_m_deleted . " = '1'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql_cn) {
							# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
							foreach ($var_sql_cn as $key_cn):
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(
									d_azp_ibn_policy_m_by_created => $_SESSION[SESS_APP_ID],
									d_azp_ibn_policy_m_by_modified => $_SESSION[SESS_APP_ID],
									d_azp_ibn_policy_m_date_created => DATE_HOUR,
									d_azp_ibn_policy_m_date_modified => DATE_HOUR,
									d_azp_ibn_policy_m_deleted => '1',
									d_azp_ibn_policy_m_description => '',
									d_azp_ibn_policy_m_level => '2',
									d_azp_ibn_policy_m_status => '1',
									d_azp_ibn_policy_m_temp => '1',
									d_azp_ibn_policy_t_conditional => 'O',
									d_azp_ibn_policy_t_selector => 'NO',
									d_azp_ibn_policy_v_id_azp_ibn_client => $key_cl[d_azp_ibn_client_id_azp_ibn_client],
									d_azp_ibn_policy_v_id_azp_ibn_conditional => $key_cn[d_azp_ibn_conditional_id_azp_ibn_conditional],
								);
								# Query Sql Insert: Registrar valores en la tabla segun sus campos
								$this->db->insert(t_azp_ibn_policy, $var_array);
							endforeach;
						}
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Query Sql: Ejecutar codigo sql en la base de datos
				$var_sql_cl = $this->db->select('*', t_azp_ibn_client,
					d_azp_ibn_client_m_temp . " = '2' AND " .
					d_azp_ibn_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_cl) {
					# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
					foreach ($var_sql_cl as $key_cl):
						# Query Sql: Ejecutar codigo sql en la base de datos
						$var_sql_cn = $this->db->select('*', t_azp_ibn_calification, d_azp_ibn_calification_m_deleted . " = '1'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql_cn) {
							# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
							foreach ($var_sql_cn as $key_cn):
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(
									d_azp_ibn_regulation_m_by_created => $_SESSION[SESS_APP_ID],
									d_azp_ibn_regulation_m_by_modified => $_SESSION[SESS_APP_ID],
									d_azp_ibn_regulation_m_date_created => DATE_HOUR,
									d_azp_ibn_regulation_m_date_modified => DATE_HOUR,
									d_azp_ibn_regulation_m_deleted => '1',
									d_azp_ibn_regulation_m_description => '',
									d_azp_ibn_regulation_m_level => '2',
									d_azp_ibn_regulation_m_status => '1',
									d_azp_ibn_regulation_m_temp => '1',
									d_azp_ibn_regulation_t_selector => 'NO',
									d_azp_ibn_regulation_v_id_azp_ibn_calification => $key_cn[d_azp_ibn_calification_id_azp_ibn_calification],
									d_azp_ibn_regulation_v_id_azp_ibn_client => $key_cl[d_azp_ibn_client_id_azp_ibn_client],
								);
								# Query Sql Insert: Registrar valores en la tabla segun sus campos
								$this->db->insert(t_azp_ibn_regulation, $var_array);
							endforeach;
						}
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Query Sql: Ejecutar codigo sql en la base de datos
				$var_sql_cl = $this->db->select('*', t_azp_ibn_client,
					d_azp_ibn_client_m_temp . " = '2' AND " .
					d_azp_ibn_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_cl) {
					# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
					foreach ($var_sql_cl as $key_cl):
						# Query Sql: Ejecutar codigo sql en la base de datos
						$var_sql_cn = $this->db->select('*', t_azp_ibn_module, d_azp_ibn_module_m_deleted . " = '1'");
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql_cn) {
							# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
							foreach ($var_sql_cn as $key_cn):
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(
									d_azp_ibn_concept_m_by_created => $_SESSION[SESS_APP_ID],
									d_azp_ibn_concept_m_by_modified => $_SESSION[SESS_APP_ID],
									d_azp_ibn_concept_m_date_created => DATE_HOUR,
									d_azp_ibn_concept_m_date_modified => DATE_HOUR,
									d_azp_ibn_concept_m_deleted => '1',
									d_azp_ibn_concept_m_description => '',
									d_azp_ibn_concept_m_level => '2',
									d_azp_ibn_concept_m_status => '1',
									d_azp_ibn_concept_m_temp => '1',
									d_azp_ibn_concept_t_land_01 => '',
									d_azp_ibn_concept_t_land_02 => '',
									d_azp_ibn_concept_t_land_03 => '',
									d_azp_ibn_concept_t_land_04 => '',
									d_azp_ibn_concept_t_land_05 => '',
									d_azp_ibn_concept_t_land_06 => '',
									d_azp_ibn_concept_t_land_07 => '',
									d_azp_ibn_concept_t_land_08 => '',
									d_azp_ibn_concept_t_land_09 => '',
									d_azp_ibn_concept_t_land_10 => '',
									d_azp_ibn_concept_t_land_11 => '',
									d_azp_ibn_concept_t_land_12 => '',
									d_azp_ibn_concept_t_land_13 => '',
									d_azp_ibn_concept_t_land_14 => '',
									d_azp_ibn_concept_t_land_15 => '',
									d_azp_ibn_concept_t_land_16 => '',
									d_azp_ibn_concept_t_land_17 => '',
									d_azp_ibn_concept_t_land_18 => '',
									d_azp_ibn_concept_t_land_19 => '',
									d_azp_ibn_concept_t_land_20 => '',
									d_azp_ibn_concept_t_text_01 => '',
									d_azp_ibn_concept_t_text_02 => '',
									d_azp_ibn_concept_t_text_03 => '',
									d_azp_ibn_concept_t_text_04 => '',
									d_azp_ibn_concept_t_text_05 => '',
									d_azp_ibn_concept_t_text_06 => '',
									d_azp_ibn_concept_t_text_07 => '',
									d_azp_ibn_concept_t_text_08 => '',
									d_azp_ibn_concept_t_text_09 => '',
									d_azp_ibn_concept_t_text_10 => '',
									d_azp_ibn_concept_t_text_11 => '',
									d_azp_ibn_concept_t_text_12 => '',
									d_azp_ibn_concept_t_text_13 => '',
									d_azp_ibn_concept_t_text_14 => '',
									d_azp_ibn_concept_t_text_15 => '',
									d_azp_ibn_concept_t_text_16 => '',
									d_azp_ibn_concept_t_text_17 => '',
									d_azp_ibn_concept_t_text_18 => '',
									d_azp_ibn_concept_t_text_19 => '',
									d_azp_ibn_concept_t_text_20 => '',
									d_azp_ibn_concept_v_id_azp_ibn_client => $key_cl[d_azp_ibn_client_id_azp_ibn_client],
									d_azp_ibn_concept_v_id_azp_ibn_module => $key_cn[d_azp_ibn_module_id_azp_ibn_module],
								);
								# Query Sql Insert: Registrar valores en la tabla segun sus campos
								$this->db->insert(t_azp_ibn_concept, $var_array);
							endforeach;
						}
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
				$var_array = array(d_azp_ibn_client_m_temp => '1');
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_client, $var_array, d_azp_ibn_client_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_ibn_client_policy_no(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_client'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_client']);
				$empty_ck = $this->db->scape($data['field_ck']);
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
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está utilizando no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Contar registros y asignarlos a un valor
				/*$var_cam_count = 0; $var_fur_count = 0; $var_pro_count = 0; $var_veh_count = 0; $var_war_count = 0;
				# Separar la cadena usando un delimitador
				$var_array = explode(",", $empty_ck);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_array as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->query("
						SELECT
							COUNT(tc_azp_ibn_policy." . d_azp_ibn_policy_id_azp_ibn_policy . ") AS 'lbl_count',
							tc_azp_ibn_policy." . d_azp_ibn_policy_id_azp_ibn_policy . " AS 'lbl_azp_ibn_policy_id_azp_ibn_policy',
							tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . " AS 'lbl_azp_ibn_module_id_azp_ibn_module',
							tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
						FROM " . t_azp_ibn_policy . " tc_azp_ibn_policy

						INNER JOIN " . t_azp_ibn_conditional . " tc_azp_ibn_conditional
							ON tc_azp_ibn_policy." . d_azp_ibn_policy_v_id_azp_ibn_conditional . "
								= tc_azp_ibn_conditional." . d_azp_ibn_conditional_id_azp_ibn_conditional . "

						INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
							ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_module . "
								= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "

						WHERE tc_azp_ibn_policy." . d_azp_ibn_policy_id_azp_ibn_policy . " = '" . $value . "'
							AND tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_type_condition . " = '2'

					");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignar valores a nuevas variables
							$var_module = $value['lbl_azp_ibn_module_t_name'];
							# Control de validacion de condicion
							if ($var_module == 'CAMARAS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_cam_count += $var_count;
								# Control de validacion de condicion
								if ($var_cam_count == 2) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de camaras, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'SALARIOS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_fur_count += $var_count;
								# Control de validacion de condicion
								if ($var_fur_count == 2) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de salarios, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'INMUEBLES') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_pro_count += $var_count;
								# Control de validacion de condicion
								if ($var_pro_count == 2) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de inmuebles, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'VEHICULOS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_veh_count += $var_count;
								# Control de validacion de condicion
								if ($var_veh_count == 2) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de vehiculos, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'GARANTIAS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_war_count += $var_count;
								# Control de validacion de condicion
								if ($var_war_count == 2) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de garantias, no se puede asociar más de dos veces.'); }
							}
						endforeach;
					}
				}*/
				#-------------------------------------------------------------------------#
				# Contar registros y asignarlos a un valor
				/*$var_cam_policy = 0; $var_fur_policy = 0; $var_pro_policy = 0; $var_veh_policy = 0; $var_war_policy = 0;
				# Separar la cadena usando un delimitador
				$var_array = explode(",", $empty_ck);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_array as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->query("
						SELECT
							COUNT(tc_azp_ibn_policy." . d_azp_ibn_policy_id_azp_ibn_policy . ") AS 'lbl_count',
							tc_azp_ibn_policy." . d_azp_ibn_policy_id_azp_ibn_policy . " AS 'lbl_azp_ibn_policy_id_azp_ibn_policy',
							tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . " AS 'lbl_azp_ibn_module_id_azp_ibn_module',
							tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
						FROM " . t_azp_ibn_policy . " tc_azp_ibn_policy

						INNER JOIN " . t_azp_ibn_conditional . " tc_azp_ibn_conditional
							ON tc_azp_ibn_policy." . d_azp_ibn_policy_v_id_azp_ibn_conditional . "
								= tc_azp_ibn_conditional." . d_azp_ibn_conditional_id_azp_ibn_conditional . "

						INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
							ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_module . "
								= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "

						WHERE tc_azp_ibn_policy." . d_azp_ibn_policy_v_id_azp_ibn_client . " = '" . $empty_id . "'
							AND tc_azp_ibn_policy." . d_azp_ibn_policy_t_selector . " = 'SI'
							AND tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_type_condition . " = '2'

					");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignar valores a nuevas variables
							$var_module = $value['lbl_azp_ibn_module_t_name'];
							# Control de validacion de condicion
							if ($var_module == 'CAMARAS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_cam_policy += $var_count;
								# Control de validacion de condicion
								if ($var_cam_count == 1) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de camaras, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'SALARIOS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_fur_policy += $var_count;
								# Control de validacion de condicion
								if ($var_fur_count == 1) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de salarios, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'INMUEBLES') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_pro_policy += $var_count;
								# Control de validacion de condicion
								if ($var_pro_count == 1) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de inmuebles, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'VEHICULOS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_veh_policy += $var_count;
								# Control de validacion de condicion
								if ($var_veh_count == 1) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de vehiculos, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'GARANTIAS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_war_policy += $var_count;
								# Control de validacion de condicion
								if ($var_war_count == 1) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de garantias, no se puede asociar más de dos veces.'); }
							}
						endforeach;
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_level . " = '2'");
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
		# Query Sql Insert
		final public function sql_azp_ibn_client_policy_no(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_policy_no($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_client']);
				$empty_ck = $this->db->scape($data['field_ck']);
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array = explode(",", $empty_ck);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_array as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select("*", t_azp_ibn_policy, d_azp_ibn_policy_id_azp_ibn_policy . " = '" . $value . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignar valores a nuevas variables
							$var_id = $value[d_azp_ibn_policy_id_azp_ibn_policy];
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_ibn_policy_t_selector => 'SI',);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->update(t_azp_ibn_policy, $var_array,
								d_azp_ibn_policy_id_azp_ibn_policy . " = '" . $var_id . "'");
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				$empty_no_id = $data['field_pc_no_id'];
				$empty_conditional = $data['field_pc_no_conditional'];
				#-------------------------------------------------------------------------#
				# Recorrer los datos uno por uno segun los seleccionados
				for ($i = 0; $i < count($empty_no_id); $i++) {
					$var_id = $this->db->scape($empty_no_id[$i]);
					$var_conditional = $this->db->scape($empty_conditional[$i]);
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_ibn_policy_t_conditional => $var_conditional,);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->update(t_azp_ibn_policy, $var_array,
						d_azp_ibn_policy_id_azp_ibn_policy . " = '" . $var_id . "'");
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_ibn_client_policy_si(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_client'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_client']);
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
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está utilizando no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_level . " = '2'");
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
		# Query Sql Insert
		final public function sql_azp_ibn_client_policy_si(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_policy_si($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_client']);
				$empty_ck = $this->db->scape($data['field_ck']);
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array = explode(",", $empty_ck);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_array as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select("*", t_azp_ibn_policy, d_azp_ibn_policy_id_azp_ibn_policy . " = '" . $value . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignar valores a nuevas variables
							$var_id = $value[d_azp_ibn_policy_id_azp_ibn_policy];
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_ibn_policy_t_selector => 'NO',);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->update(t_azp_ibn_policy, $var_array,
								d_azp_ibn_policy_id_azp_ibn_policy . " = '" . $var_id . "'");
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_client_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_level . " = '2'");
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
		final public function sql_azp_ibn_client_remove(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_remove($data);
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
				$var_array = array(d_azp_ibn_client_m_deleted => '4',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_client, $var_array, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				//$this->db->delete(t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_client_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_level . " = '2'");
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
		final public function sql_azp_ibn_client_restore(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_restore($data);
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
				$var_array = array(d_azp_ibn_client_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_client, $var_array, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_client_update(array $data) {
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
				if (!isset($data['field_up_days'])) { throw new Exception('<b>Error:</b> El campo de dias cumplimiento esta prohibido modificar.'); }
				if (!isset($data['field_up_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_sector'])) { throw new Exception('<b>Error:</b> El campo de sector esta prohibido modificar.'); }
				if (!isset($data['field_up_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_up_sector'])) { throw new Exception('<b>Error:</b> El campo de sector esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_days = $this->db->scape($data['field_up_days']);
				$empty_name = $this->db->scape($data['field_up_name']);
				$empty_ibn_sector = $this->db->scape($data['field_up_ibn_sector']);
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
					throw new Exception('<b>Error:</b> El campo de id es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_days) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dias cumplimiento debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_days) > 8) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dias cumplimiento permite maximo hasta 8 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_days, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dias cumplimiento no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_days)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dias cumplimiento no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es obligatorio.');
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
				/*if (Func::emp($empty_ibn_sector) || strtolower($empty_ibn_sector) == strtolower('seleccionar') || $empty_ibn_sector == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sector es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_ibn_sector)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sector solo permite numeros.');
				}*/
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
					throw new Exception('<b>Error:</b> El campo de estado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_state)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				/*$sql_name = $this->db->select(d_azp_ibn_client_t_name, t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " != '" . $empty_id . "' AND " . d_azp_ibn_client_t_name . " = '" . $empty_name . "'");
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
				/*$sql_ibn_sector = $this->db->select('*', t_azp_ibn_sector, d_azp_ibn_sector_id_azp_ibn_sector . " = '" . $empty_ibn_sector . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_sector) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_sector) == '') { $sql_ibn_sector[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_sector[0][0]) != strtolower($empty_ibn_sector)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El sector seleccionado no se encuentra registrado.');
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
				$sql_query = $this->db->select('*', t_azp_ibn_client,
					d_azp_ibn_client_id_azp_ibn_client . " != '" . $empty_id . "' AND " .
					d_azp_ibn_client_m_deleted . " = '1' AND " .
					d_azp_ibn_client_v_id_azp_fct_client . " = '" . $empty_client . "' AND " .
					d_azp_ibn_client_v_id_azp_fct_sector . " = '" . $empty_sector . "'"
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
		final public function sql_azp_ibn_client_update(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_update($data);
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
				$empty_days = $this->db->scape($data['field_up_days']);
				$empty_name = $this->db->scape($data['field_up_name']);
				$empty_ibn_sector = $this->db->scape($data['field_up_ibn_sector']);
				$empty_client = $this->db->scape($data['field_up_client']);
				$empty_sector = $this->db->scape($data['field_up_sector']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_ibn_client_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_ibn_client_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_ibn_client_m_date_created => DATE_HOUR,
							d_azs_ibn_client_m_date_modified => DATE_HOUR,
							d_azs_ibn_client_m_deleted => $key_sql_select[d_azp_ibn_client_m_deleted],
							d_azs_ibn_client_m_description => $key_sql_select[d_azp_ibn_client_m_description],
							d_azs_ibn_client_m_level => $key_sql_select[d_azp_ibn_client_m_level],
							d_azs_ibn_client_m_status => $key_sql_select[d_azp_ibn_client_m_status],
							d_azs_ibn_client_m_temp => $key_sql_select[d_azp_ibn_client_m_temp],
							d_azs_ibn_client_t_days => strtoupper($key_sql_select[d_azp_ibn_client_t_days]),
							d_azs_ibn_client_t_name => strtoupper($key_sql_select[d_azp_ibn_client_t_name]),
							d_azs_ibn_client_u_ibn_sector => strtoupper($key_sql_select[d_azp_ibn_client_v_id_azp_ibn_sector]),
							d_azs_ibn_client_u_fct_client => $key_sql_select[d_azp_ibn_client_v_id_azp_fct_client],
							d_azs_ibn_client_u_fct_sector => $key_sql_select[d_azp_ibn_client_v_id_azp_fct_sector],
							d_azs_ibn_client_v_id_azp_ibn_client => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_ibn_client, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_client_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_client_m_date_modified => DATE_HOUR,
					d_azp_ibn_client_m_description => $empty_description,
					d_azp_ibn_client_m_status => $empty_state,
					d_azp_ibn_client_t_days => strtoupper($empty_days),
					d_azp_ibn_client_t_name => strtoupper($empty_name),
					d_azp_ibn_client_v_id_azp_ibn_sector => $empty_sector,
					d_azp_ibn_client_v_id_azp_fct_client => $empty_client,
					d_azp_ibn_client_v_id_azp_fct_sector => $empty_sector,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_client, $var_array, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key => $value): $var_client = $value[d_azp_ibn_client_v_id_azp_fct_client]; endforeach; } else { $var_client = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $var_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_ibn_client_t_name => $value[d_azp_fct_client_t_name],);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->update(t_azp_ibn_client, $var_array, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_client_archive(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('<b>Error:</b> El registro que está restaurando no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_deleted . " = '5'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_id) { foreach ($sql_id as $key => $value): throw new Exception('<b>Error:</b> El registro que está procesando ya se encuentra archivado.'); endforeach; }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_client_archive(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_archive($data);
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
				$var_array = array(d_azp_ibn_client_m_deleted => '5',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_client, $var_array, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro archivado correctamente.');
			}
		}










		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_client_unstore(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_unstore'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_unstore']);
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
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('<b>Error:</b> El registro que está restaurando no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_deleted . " = '1'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_id) { foreach ($sql_id as $key => $value): throw new Exception('<b>Error:</b> El registro que está procesando ya se encuentra desarchivado.'); endforeach; }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_client_unstore(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_unstore($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_unstore']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_client_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_client, $var_array, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro desarchivado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_client_format(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_format'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_fl_ibn_format_file'])) { throw new Exception('<b>Error:</b> El campo de seleccion esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_format']);
				$empty_ibn_format_file = $this->db->scape($data['field_fl_ibn_format_file']);
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
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_format_file = $this->db->select('*', t_azp_ibn_format_file, d_azp_ibn_format_file_id_azp_ibn_format_file . " = '" . $empty_ibn_format_file . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_format_file) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_format_file) == '') { $sql_ibn_format_file[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_format_file[0][0]) != strtolower($empty_ibn_format_file)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El formato archivo seleccionado no se encuentra registrado.');
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
		final public function sql_azp_ibn_client_format(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_format($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_format']);
				$empty_ibn_format_file = $this->db->scape($data['field_fl_ibn_format_file']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_ibn_client_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_ibn_client_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_ibn_client_m_date_created => DATE_HOUR,
							d_azs_ibn_client_m_date_modified => DATE_HOUR,
							d_azs_ibn_client_m_deleted => $key_sql_select[d_azp_ibn_client_m_deleted],
							d_azs_ibn_client_m_description => $key_sql_select[d_azp_ibn_client_m_description],
							d_azs_ibn_client_m_level => $key_sql_select[d_azp_ibn_client_m_level],
							d_azs_ibn_client_m_status => $key_sql_select[d_azp_ibn_client_m_status],
							d_azs_ibn_client_m_temp => $key_sql_select[d_azp_ibn_client_m_temp],
							d_azs_ibn_client_t_name => strtoupper($key_sql_select[d_azp_ibn_client_t_name]),
							d_azs_ibn_client_w_document => $key_sql_select[d_azp_ibn_client_w_document],
							d_azs_ibn_client_w_error => $key_sql_select[d_azp_ibn_client_w_error],
							d_azs_ibn_client_w_folder => $key_sql_select[d_azp_ibn_client_w_folder],
							d_azs_ibn_client_w_name => $key_sql_select[d_azp_ibn_client_w_name],
							d_azs_ibn_client_w_route => $key_sql_select[d_azp_ibn_client_w_route],
							d_azs_ibn_client_w_size => $key_sql_select[d_azp_ibn_client_w_size],
							d_azs_ibn_client_w_tmp_name => $key_sql_select[d_azp_ibn_client_w_tmp_name],
							d_azs_ibn_client_w_type => $key_sql_select[d_azp_ibn_client_w_type],
							d_azs_ibn_client_u_ibn_format_file => strtoupper($key_sql_select[d_azp_ibn_client_v_id_azp_ibn_format_file]),
							d_azs_ibn_client_u_ibn_sector => strtoupper($key_sql_select[d_azp_ibn_client_v_id_azp_ibn_sector]),
							d_azs_ibn_client_v_id_azp_ibn_client => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_ibn_client, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_client_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_client_m_date_modified => DATE_HOUR,
					d_azp_ibn_client_v_id_azp_ibn_format_file => $empty_ibn_format_file,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_client, $var_array, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_format_file() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_format_file,
				d_azp_ibn_format_file_m_deleted . " = '1' AND " .
				d_azp_ibn_format_file_m_status . " = '1' AND " .
				d_azp_ibn_format_file_v_id_azp_ibn_format_type . " = '1'"
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_sector() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_sector, d_azp_ibn_sector_m_deleted . " = '1' AND " . d_azp_ibn_sector_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_policy_no() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_policy." . d_azp_ibn_policy_id_azp_ibn_policy . " AS 'lbl_azp_ibn_policy_id_azp_ibn_policy',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_policy." . d_azp_ibn_policy_m_date_created . " AS 'lbl_azp_ibn_policy_m_date_created',
					tc_azp_ibn_policy." . d_azp_ibn_policy_m_date_modified . " AS 'lbl_azp_ibn_policy_m_date_modified',
					tc_azp_ibn_policy." . d_azp_ibn_policy_m_description . " AS 'lbl_azp_ibn_policy_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_policy." . d_azp_ibn_policy_t_conditional . " AS 'lbl_azp_ibn_policy_t_conditional',
					tc_azp_ibn_policy." . d_azp_ibn_policy_t_selector . " AS 'lbl_azp_ibn_policy_t_selector',
					CONCAT(
						tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . ", ' ',
						tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_operator . ", ' ',
						tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_value . ", ' ',
						tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_result . "
					) AS 'lbl_azp_ibn_conditional_t_union',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_land . " AS 'lbl_azp_ibn_conditional_t_land',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_operator . " AS 'lbl_azp_ibn_conditional_t_operator',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_result . " AS 'lbl_azp_ibn_conditional_t_result',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_value . " AS 'lbl_azp_ibn_conditional_t_value',
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name',
					tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name'
				FROM " . t_azp_ibn_policy . " tc_azp_ibn_policy
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_policy." . d_azp_ibn_policy_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_policy." . d_azp_ibn_policy_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_policy." . d_azp_ibn_policy_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_policy." . d_azp_ibn_policy_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
					ON tc_azp_ibn_policy." . d_azp_ibn_policy_v_id_azp_ibn_client . "
						= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_conditional . " tc_azp_ibn_conditional
					ON tc_azp_ibn_policy." . d_azp_ibn_policy_v_id_azp_ibn_conditional . "
						= tc_azp_ibn_conditional." . d_azp_ibn_conditional_id_azp_ibn_conditional . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_type_condition . "
						= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_table_field . " tc_azp_ibn_table_field
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_land . "
						= tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_policy." . d_azp_ibn_policy_m_deleted . " = '1'
					AND tc_azp_ibn_policy." . d_azp_ibn_policy_m_status . " = '1'
					AND tc_azp_ibn_policy." . d_azp_ibn_policy_t_selector . " = 'NO'
					AND tc_azp_ibn_policy." . d_azp_ibn_policy_v_id_azp_ibn_client . " = '" . $this->id . "'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_policy_si() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_policy." . d_azp_ibn_policy_id_azp_ibn_policy . " AS 'lbl_azp_ibn_policy_id_azp_ibn_policy',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_policy." . d_azp_ibn_policy_m_date_created . " AS 'lbl_azp_ibn_policy_m_date_created',
					tc_azp_ibn_policy." . d_azp_ibn_policy_m_date_modified . " AS 'lbl_azp_ibn_policy_m_date_modified',
					tc_azp_ibn_policy." . d_azp_ibn_policy_m_description . " AS 'lbl_azp_ibn_policy_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_policy." . d_azp_ibn_policy_t_conditional . " AS 'lbl_azp_ibn_policy_t_conditional',
					tc_azp_ibn_policy." . d_azp_ibn_policy_t_selector . " AS 'lbl_azp_ibn_policy_t_selector',
					CONCAT(
						tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . ", ' ',
						tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_operator . ", ' ',
						tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_value . ", ' ',
						tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_result . "
					) AS 'lbl_azp_ibn_conditional_t_union',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_land . " AS 'lbl_azp_ibn_conditional_t_land',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_operator . " AS 'lbl_azp_ibn_conditional_t_operator',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_result . " AS 'lbl_azp_ibn_conditional_t_result',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_value . " AS 'lbl_azp_ibn_conditional_t_value',
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name',
					tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name'
				FROM " . t_azp_ibn_policy . " tc_azp_ibn_policy
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_policy." . d_azp_ibn_policy_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_policy." . d_azp_ibn_policy_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_policy." . d_azp_ibn_policy_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_policy." . d_azp_ibn_policy_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
					ON tc_azp_ibn_policy." . d_azp_ibn_policy_v_id_azp_ibn_client . "
						= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_conditional . " tc_azp_ibn_conditional
					ON tc_azp_ibn_policy." . d_azp_ibn_policy_v_id_azp_ibn_conditional . "
						= tc_azp_ibn_conditional." . d_azp_ibn_conditional_id_azp_ibn_conditional . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_type_condition . "
						= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_table_field . " tc_azp_ibn_table_field
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_land . "
						= tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_policy." . d_azp_ibn_policy_m_deleted . " = '1'
					AND tc_azp_ibn_policy." . d_azp_ibn_policy_m_status . " = '1'
					AND tc_azp_ibn_policy." . d_azp_ibn_policy_t_selector . " = 'SI'
					AND tc_azp_ibn_policy." . d_azp_ibn_policy_v_id_azp_ibn_client . " = '" . $this->id . "'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_regulation_no() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_regulation." . d_azp_ibn_regulation_id_azp_ibn_regulation . " AS 'lbl_azp_ibn_regulation_id_azp_ibn_regulation',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_created . " AS 'lbl_azp_ibn_regulation_m_date_created',
					tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_modified . " AS 'lbl_azp_ibn_regulation_m_date_modified',
					tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_description . " AS 'lbl_azp_ibn_regulation_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " AS 'lbl_azp_ibn_regulation_t_selector',
					tc_azp_ibn_calification." . d_azp_ibn_calification_t_concept . " AS 'lbl_azp_ibn_calification_t_concept',
					tc_azp_ibn_calification." . d_azp_ibn_calification_t_determination . " AS 'lbl_azp_ibn_calification_t_determination',
					tc_azp_ibn_calification." . d_azp_ibn_calification_t_principal . " AS 'lbl_azp_ibn_calification_t_principal',
					tc_azp_ibn_calification." . d_azp_ibn_calification_t_secondary . " AS 'lbl_azp_ibn_calification_t_secondary',
					tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name'
				FROM " . t_azp_ibn_regulation . " tc_azp_ibn_regulation
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
					ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
						= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
					ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
						= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
					ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
						= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_deleted . " = '1'
					AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . " = '1'
					AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " = 'NO'
					AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $this->id . "'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_regulation_si() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_regulation." . d_azp_ibn_regulation_id_azp_ibn_regulation . " AS 'lbl_azp_ibn_regulation_id_azp_ibn_regulation',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_created . " AS 'lbl_azp_ibn_regulation_m_date_created',
					tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_modified . " AS 'lbl_azp_ibn_regulation_m_date_modified',
					tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_description . " AS 'lbl_azp_ibn_regulation_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " AS 'lbl_azp_ibn_regulation_t_selector',
					tc_azp_ibn_calification." . d_azp_ibn_calification_t_concept . " AS 'lbl_azp_ibn_calification_t_concept',
					tc_azp_ibn_calification." . d_azp_ibn_calification_t_determination . " AS 'lbl_azp_ibn_calification_t_determination',
					tc_azp_ibn_calification." . d_azp_ibn_calification_t_principal . " AS 'lbl_azp_ibn_calification_t_principal',
					tc_azp_ibn_calification." . d_azp_ibn_calification_t_secondary . " AS 'lbl_azp_ibn_calification_t_secondary',
					tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name'
				FROM " . t_azp_ibn_regulation . " tc_azp_ibn_regulation
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
					ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
						= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
					ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
						= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
					ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
						= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_deleted . " = '1'
					AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . " = '1'
					AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " = 'SI'
					AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $this->id . "'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_conditional() {
			# Seleccionar los registros de la tabla
			//return $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_m_deleted . " = '1' AND " . d_azp_ibn_conditional_m_status . " = '1'");
			return $this->db->query("
				SELECT
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_id_azp_ibn_conditional . " AS 'lbl_azp_ibn_conditional_id_azp_ibn_conditional',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_date_created . " AS 'lbl_azp_ibn_conditional_m_date_created',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_date_modified . " AS 'lbl_azp_ibn_conditional_m_date_modified',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_description . " AS 'lbl_azp_ibn_conditional_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_land . " AS 'lbl_azp_ibn_conditional_t_land',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_operator . " AS 'lbl_azp_ibn_conditional_t_operator',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_result . " AS 'lbl_azp_ibn_conditional_t_result',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_value . " AS 'lbl_azp_ibn_conditional_t_value',
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
				FROM " . t_azp_ibn_conditional . " tc_azp_ibn_conditional
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_table_field . " tc_azp_ibn_table_field
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_land . "
						= tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_deleted . " = '1'
					AND tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_status . " = '1'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_module() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_module, d_azp_ibn_module_m_deleted . " = '1' AND " . d_azp_ibn_module_m_status . " = '1'");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_select_tc_azp_ibn_concept() {
			# Control de validacion de variable a traves de GET
			if (isset($_GET['field_id_module'])) { $var_module = $_GET['field_id_module']; } else { $var_module = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " AS 'lbl_azp_ibn_concept_id_azp_ibn_concept',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_01 . " AS 'lbl_azp_ibn_concept_t_land_01',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_02 . " AS 'lbl_azp_ibn_concept_t_land_02',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_03 . " AS 'lbl_azp_ibn_concept_t_land_03',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_04 . " AS 'lbl_azp_ibn_concept_t_land_04',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_05 . " AS 'lbl_azp_ibn_concept_t_land_05',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_06 . " AS 'lbl_azp_ibn_concept_t_land_06',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_07 . " AS 'lbl_azp_ibn_concept_t_land_07',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_08 . " AS 'lbl_azp_ibn_concept_t_land_08',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_09 . " AS 'lbl_azp_ibn_concept_t_land_09',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_10 . " AS 'lbl_azp_ibn_concept_t_land_10',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_11 . " AS 'lbl_azp_ibn_concept_t_land_11',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_12 . " AS 'lbl_azp_ibn_concept_t_land_12',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_13 . " AS 'lbl_azp_ibn_concept_t_land_13',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_14 . " AS 'lbl_azp_ibn_concept_t_land_14',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_15 . " AS 'lbl_azp_ibn_concept_t_land_15',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_16 . " AS 'lbl_azp_ibn_concept_t_land_16',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_17 . " AS 'lbl_azp_ibn_concept_t_land_17',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_18 . " AS 'lbl_azp_ibn_concept_t_land_18',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_19 . " AS 'lbl_azp_ibn_concept_t_land_19',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_20 . " AS 'lbl_azp_ibn_concept_t_land_20',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_01 . " AS 'lbl_azp_ibn_concept_t_text_01',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_02 . " AS 'lbl_azp_ibn_concept_t_text_02',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_03 . " AS 'lbl_azp_ibn_concept_t_text_03',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_04 . " AS 'lbl_azp_ibn_concept_t_text_04',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_05 . " AS 'lbl_azp_ibn_concept_t_text_05',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_06 . " AS 'lbl_azp_ibn_concept_t_text_06',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_07 . " AS 'lbl_azp_ibn_concept_t_text_07',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_08 . " AS 'lbl_azp_ibn_concept_t_text_08',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_09 . " AS 'lbl_azp_ibn_concept_t_text_09',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_10 . " AS 'lbl_azp_ibn_concept_t_text_10',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_11 . " AS 'lbl_azp_ibn_concept_t_text_11',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_12 . " AS 'lbl_azp_ibn_concept_t_text_12',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_13 . " AS 'lbl_azp_ibn_concept_t_text_13',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_14 . " AS 'lbl_azp_ibn_concept_t_text_14',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_15 . " AS 'lbl_azp_ibn_concept_t_text_15',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_16 . " AS 'lbl_azp_ibn_concept_t_text_16',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_17 . " AS 'lbl_azp_ibn_concept_t_text_17',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_18 . " AS 'lbl_azp_ibn_concept_t_text_18',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_19 . " AS 'lbl_azp_ibn_concept_t_text_19',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_20 . " AS 'lbl_azp_ibn_concept_t_text_20',
					tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_concept_v_id_azp_ibn_client',
					tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " AS 'lbl_azp_ibn_concept_v_id_azp_ibn_module'
				FROM " . t_azp_ibn_concept . " tc_azp_ibn_concept
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_m_deleted . " = '1'
					AND tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $this->id . "'
					AND tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " = '" . $var_module . "'
				LIMIT 1
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function get_sql_azp_ibn_table_field_rd() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . " AS 'lbl_azp_ibn_table_field_id_azp_ibn_table_field',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_define . " AS 'lbl_azp_ibn_table_field_t_define',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . " AS 'lbl_azp_ibn_table_field_t_label',
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
				FROM " . t_azp_ibn_table_field . " tc_azp_ibn_table_field
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_table_field." . d_azp_ibn_table_field_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_deleted . " = '1'
					AND tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_status . " = '1'
					AND tc_azp_ibn_table_field." . d_azp_ibn_table_field_v_id_azp_ibn_module . " = '" . $this->id . "'
				ORDER BY tc_azp_ibn_table_field." . d_azp_ibn_table_field_v_id_azp_ibn_module . " ASC,
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function get_sql_azp_ibn_table_field_up() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . " AS 'lbl_azp_ibn_table_field_id_azp_ibn_table_field',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_define . " AS 'lbl_azp_ibn_table_field_t_define',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . " AS 'lbl_azp_ibn_table_field_t_label',
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
				FROM " . t_azp_ibn_table_field . " tc_azp_ibn_table_field
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_table_field." . d_azp_ibn_table_field_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_deleted . " = '1'
					AND tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_status . " = '1'
					AND tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $this->id . "'
				ORDER BY tc_azp_ibn_table_field." . d_azp_ibn_table_field_v_id_azp_ibn_module . " ASC,
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_ibn_client_regulation_no(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_client'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar. hola'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_client']);
				$empty_ck = $this->db->scape($data['field_ck']);
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
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está utilizando no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Contar registros y asignarlos a un valor
				/*$var_cam_count = 0; $var_fur_count = 0; $var_pro_count = 0; $var_veh_count = 0; $var_war_count = 0;
				# Separar la cadena usando un delimitador
				$var_array = explode(",", $empty_ck);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_array as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->query("
						SELECT
							COUNT(tc_azp_ibn_regulation." . d_azp_ibn_regulation_id_azp_ibn_regulation . ") AS 'lbl_count',
							tc_azp_ibn_regulation." . d_azp_ibn_regulation_id_azp_ibn_regulation . " AS 'lbl_azp_ibn_regulation_id_azp_ibn_regulation',
							tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . " AS 'lbl_azp_ibn_module_id_azp_ibn_module',
							tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
						FROM " . t_azp_ibn_regulation . " tc_azp_ibn_regulation

						INNER JOIN " . t_azp_ibn_conditional . " tc_azp_ibn_conditional
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_conditional . "
								= tc_azp_ibn_conditional." . d_azp_ibn_conditional_id_azp_ibn_conditional . "

						INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
							ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_module . "
								= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "

						WHERE tc_azp_ibn_regulation." . d_azp_ibn_regulation_id_azp_ibn_regulation . " = '" . $value . "'
							AND tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_type_condition . " = '2'

					");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignar valores a nuevas variables
							$var_module = $value['lbl_azp_ibn_module_t_name'];
							# Control de validacion de condicion
							if ($var_module == 'CAMARAS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_cam_count += $var_count;
								# Control de validacion de condicion
								if ($var_cam_count == 2) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de camaras, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'SALARIOS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_fur_count += $var_count;
								# Control de validacion de condicion
								if ($var_fur_count == 2) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de salarios, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'INMUEBLES') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_pro_count += $var_count;
								# Control de validacion de condicion
								if ($var_pro_count == 2) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de inmuebles, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'VEHICULOS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_veh_count += $var_count;
								# Control de validacion de condicion
								if ($var_veh_count == 2) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de vehiculos, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'GARANTIAS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_war_count += $var_count;
								# Control de validacion de condicion
								if ($var_war_count == 2) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de garantias, no se puede asociar más de dos veces.'); }
							}
						endforeach;
					}
				}*/
				#-------------------------------------------------------------------------#
				# Contar registros y asignarlos a un valor
				/*$var_cam_regulation = 0; $var_fur_regulation = 0; $var_pro_regulation = 0; $var_veh_regulation = 0; $var_war_regulation = 0;
				# Separar la cadena usando un delimitador
				$var_array = explode(",", $empty_ck);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_array as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->query("
						SELECT
							COUNT(tc_azp_ibn_regulation." . d_azp_ibn_regulation_id_azp_ibn_regulation . ") AS 'lbl_count',
							tc_azp_ibn_regulation." . d_azp_ibn_regulation_id_azp_ibn_regulation . " AS 'lbl_azp_ibn_regulation_id_azp_ibn_regulation',
							tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . " AS 'lbl_azp_ibn_module_id_azp_ibn_module',
							tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
						FROM " . t_azp_ibn_regulation . " tc_azp_ibn_regulation

						INNER JOIN " . t_azp_ibn_conditional . " tc_azp_ibn_conditional
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_conditional . "
								= tc_azp_ibn_conditional." . d_azp_ibn_conditional_id_azp_ibn_conditional . "

						INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
							ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_module . "
								= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "

						WHERE tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $empty_id . "'
							AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " = 'SI'
							AND tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_type_condition . " = '2'

					");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignar valores a nuevas variables
							$var_module = $value['lbl_azp_ibn_module_t_name'];
							# Control de validacion de condicion
							if ($var_module == 'CAMARAS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_cam_regulation += $var_count;
								# Control de validacion de condicion
								if ($var_cam_count == 1) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de camaras, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'SALARIOS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_fur_regulation += $var_count;
								# Control de validacion de condicion
								if ($var_fur_count == 1) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de salarios, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'INMUEBLES') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_pro_regulation += $var_count;
								# Control de validacion de condicion
								if ($var_pro_count == 1) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de inmuebles, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'VEHICULOS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_veh_regulation += $var_count;
								# Control de validacion de condicion
								if ($var_veh_count == 1) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de vehiculos, no se puede asociar más de dos veces.'); }
							}
							# Control de validacion de condicion
							if ($var_module == 'GARANTIAS') {
								# Asignar valores a nuevas variables
								$var_count = $value['lbl_count'];
								$var_war_regulation += $var_count;
								# Control de validacion de condicion
								if ($var_war_count == 1) { throw new Exception('<b>Error:</b> La politica de efectividad relacionada con el modulo de garantias, no se puede asociar más de dos veces.'); }
							}
						endforeach;
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_level . " = '2'");
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
		# Query Sql Insert
		final public function sql_azp_ibn_client_regulation_no(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_regulation_no($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_client']);
				$empty_ck = $this->db->scape($data['field_ck']);
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array = explode(",", $empty_ck);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_array as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select("*", t_azp_ibn_regulation, d_azp_ibn_regulation_id_azp_ibn_regulation . " = '" . $value . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignar valores a nuevas variables
							$var_id = $value[d_azp_ibn_regulation_id_azp_ibn_regulation];
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_ibn_regulation_t_selector => 'SI',);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->update(t_azp_ibn_regulation, $var_array,
								d_azp_ibn_regulation_id_azp_ibn_regulation . " = '" . $var_id . "'");
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				/*$empty_no_id = $data['field_rg_no_id'];
				#-------------------------------------------------------------------------#
				# Recorrer los datos uno por uno segun los seleccionados
				for ($i = 0; $i < count($empty_no_id); $i++) {
					$var_id = $this->db->scape($empty_no_id[$i]);
					$var_conditional = $this->db->scape($empty_conditional[$i]);
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_ibn_regulation_t_conditional => $var_conditional,);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->update(t_azp_ibn_regulation, $var_array,
						d_azp_ibn_regulation_id_azp_ibn_regulation . " = '" . $var_id . "'");
				}*/
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_ibn_client_regulation_si(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_client'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_client']);
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
				$sql_id = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está utilizando no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_client_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_id . "' AND " . d_azp_ibn_client_m_level . " = '2'");
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
		# Query Sql Insert
		final public function sql_azp_ibn_client_regulation_si(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_client_regulation_si($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_client']);
				$empty_ck = $this->db->scape($data['field_ck']);
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array = explode(",", $empty_ck);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_array as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select("*", t_azp_ibn_regulation, d_azp_ibn_regulation_id_azp_ibn_regulation . " = '" . $value . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignar valores a nuevas variables
							$var_id = $value[d_azp_ibn_regulation_id_azp_ibn_regulation];
							# Array para asignar argumentos o valores a los elementos
							$var_array = array(d_azp_ibn_regulation_t_selector => 'NO',);
							# Query Sql Insert: Registrar valores en la tabla segun sus campos
							$this->db->update(t_azp_ibn_regulation, $var_array,
								d_azp_ibn_regulation_id_azp_ibn_regulation . " = '" . $var_id . "'");
						endforeach;
					}
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
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
					AND tc_azp_fct_client." . d_azp_fct_client_t_investigation . " = 'SI'
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