<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_ibn_data_mainModel extends Models implements OCREND {
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
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research'
				FROM " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . "
						= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " = '1'
				ORDER BY tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_ibn_data_main." . d_azs_ibn_data_main_id_azs_ibn_data_main . " AS 'lbl_azs_ibn_data_main_id_azs_ibn_data_main',
					tc_azs_ibn_data_main." . d_azs_ibn_data_main_m_date_modified . " AS 'lbl_azs_ibn_data_main_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_ibn_data_main." . d_azs_ibn_data_main_m_date_created . " AS 'lbl_azs_ibn_data_main_m_date_created',
					tc_azs_ibn_data_main." . d_azs_ibn_data_main_m_date_modified . " AS 'lbl_azs_ibn_data_main_m_date_modified',
					tc_azs_ibn_data_main." . d_azs_ibn_data_main_m_description . " AS 'lbl_azs_ibn_data_main_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_ibn_data_main." . d_azs_ibn_data_main_t_city . " AS 'lbl_azs_ibn_data_main_t_city',
					tc_azs_ibn_data_main." . d_azs_ibn_data_main_t_code . " AS 'lbl_azs_ibn_data_main_t_code',
					tc_azs_ibn_data_main." . d_azs_ibn_data_main_t_consecutive . " AS 'lbl_azs_ibn_data_main_t_consecutive',
					tc_azs_ibn_data_main." . d_azs_ibn_data_main_t_department . " AS 'lbl_azs_ibn_data_main_t_department',
					tc_azs_ibn_data_main." . d_azs_ibn_data_main_t_full_name . " AS 'lbl_azs_ibn_data_main_t_full_name',
					tc_azs_ibn_data_main." . d_azs_ibn_data_main_t_identification . " AS 'lbl_azs_ibn_data_main_t_identification',
					tc_azs_ibn_data_main." . d_azs_ibn_data_main_u_ibn_control_panel . " AS 'lbl_azs_ibn_data_main_u_ibn_control_panel'
				FROM " . t_azs_ibn_data_main . " tc_azs_ibn_data_main
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_ibn_data_main." . d_azs_ibn_data_main_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_ibn_data_main." . d_azs_ibn_data_main_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_ibn_data_main." . d_azs_ibn_data_main_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_ibn_data_main." . d_azs_ibn_data_main_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_ibn_data_main." . d_azs_ibn_data_main_v_id_azp_ibn_data_main . " = '" . $this->id . "'
				ORDER BY tc_azs_ibn_data_main." . d_azs_ibn_data_main_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_ibn_data_main . "
				WHERE " . d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $this->id . "'
					AND " . d_azp_ibn_data_main_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_ibn_data_main);
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
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research'
				FROM " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . "
						= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $this->id . "'
					AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research'
				FROM " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . "
						= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " = '3'
				ORDER BY tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research'
				FROM " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . "
						= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " = '1'
				ORDER BY tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
					tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research'
				FROM " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . "
						= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " = '2'
				ORDER BY tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " AS 'lbl_azp_ibn_data_main_id_azp_ibn_data_main',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . " AS 'lbl_azp_ibn_data_main_m_by_created',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . " AS 'lbl_azp_ibn_data_main_m_by_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_created . " AS 'lbl_azp_ibn_data_main_m_date_created',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_date_modified . " AS 'lbl_azp_ibn_data_main_m_date_modified',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_description . " AS 'lbl_azp_ibn_data_main_m_description',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . " AS 'lbl_azp_ibn_data_main_m_level',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . " AS 'lbl_azp_ibn_data_main_m_status',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
					tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel'
				FROM " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_data_main." . d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $this->id . "'
					AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_ibn_data_main_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "' AND " . d_azp_ibn_data_main_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "' AND " . d_azp_ibn_data_main_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_data_main_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "' AND " . d_azp_ibn_data_main_m_level . " = '2'");
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
		final public function sql_azp_ibn_data_main_delete(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_data_main_delete($data);
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
				$var_array = array(d_azp_ibn_data_main_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_data_main, $var_array, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_ibn_data_main_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_city'])) { throw new Exception('<b>Error:</b> El campo de ciudad esta prohibido modificar.'); }
				if (!isset($data['field_cr_code'])) { throw new Exception('<b>Error:</b> El campo de codigo esta prohibido modificar.'); }
				if (!isset($data['field_cr_consecutive'])) { throw new Exception('<b>Error:</b> El campo de consecutivo esta prohibido modificar.'); }
				if (!isset($data['field_cr_department'])) { throw new Exception('<b>Error:</b> El campo de departamento esta prohibido modificar.'); }
				if (!isset($data['field_cr_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_identification'])) { throw new Exception('<b>Error:</b> El campo de cedula esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_control_panel'])) { throw new Exception('<b>Error:</b> El campo de codigo consecutivo esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_city = $this->db->scape($data['field_cr_city']);
				$empty_code = $this->db->scape($data['field_cr_code']);
				$empty_consecutive = $this->db->scape($data['field_cr_consecutive']);
				$empty_department = $this->db->scape($data['field_cr_department']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_ibn_control_panel = $this->db->scape($data['field_cr_ibn_control_panel']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_city)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad es obligatorio.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_city)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_city) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_city, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_city)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_code) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de codigo debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_code, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de codigo no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_code)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de codigo no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_consecutive) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de consecutivo debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_consecutive, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de consecutivo no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_consecutive)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de consecutivo no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_department)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de departamento es obligatorio.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_department)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de departamento solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_department) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de departamento permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_department, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de departamento no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_department)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de departamento no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es obligatorio.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_full_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_full_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_identification) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de identificacion debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_identification, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de identificacion no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de identificacion no permite tener espacios en blanco al principio o al final.');
				}
				#---------------------------------------------#
				if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de identificacion permite maximo hasta 255 caracteres.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_control_panel) || strtolower($empty_ibn_control_panel) == strtolower('seleccionar') || $empty_ibn_control_panel == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de codigo de investigacion es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_control_panel)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de codigo de investigacion solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_control_panel = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_control_panel) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_control_panel) == '') { $sql_ibn_control_panel[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_control_panel[0][0]) != strtolower($empty_ibn_control_panel)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El codigo de investigacion seleccionado no se encuentra registrado.');
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
		final public function sql_azp_ibn_data_main_insert(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_data_main_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_city = $this->db->scape($data['field_cr_city']);
				$empty_code = $this->db->scape($data['field_cr_code']);
				$empty_consecutive = $this->db->scape($data['field_cr_consecutive']);
				$empty_department = $this->db->scape($data['field_cr_department']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_ibn_control_panel = $this->db->scape($data['field_cr_ibn_control_panel']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_data_main_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_ibn_data_main_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_data_main_m_date_created => DATE_HOUR,
					d_azp_ibn_data_main_m_date_modified => DATE_HOUR,
					d_azp_ibn_data_main_m_deleted => '1',
					d_azp_ibn_data_main_m_description => $empty_description,
					d_azp_ibn_data_main_m_level => '2',
					d_azp_ibn_data_main_m_status => '1',
					d_azp_ibn_data_main_m_temp => '1',
					d_azp_ibn_data_main_t_city => strtoupper($empty_city),
					d_azp_ibn_data_main_t_code => strtoupper($empty_code),
					d_azp_ibn_data_main_t_consecutive => strtoupper($empty_consecutive),
					d_azp_ibn_data_main_t_department => strtoupper($empty_department),
					d_azp_ibn_data_main_t_full_name => strtoupper($empty_full_name),
					d_azp_ibn_data_main_t_identification => strtoupper($empty_identification),
					d_azp_ibn_data_main_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_ibn_data_main, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_data_main_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "' AND " . d_azp_ibn_data_main_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "' AND " . d_azp_ibn_data_main_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_data_main_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "' AND " . d_azp_ibn_data_main_m_level . " = '2'");
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
		final public function sql_azp_ibn_data_main_remove(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_data_main_remove($data);
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
				$var_array = array(d_azp_ibn_data_main_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_data_main, $var_array, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_data_main_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "' AND " . d_azp_ibn_data_main_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "' AND " . d_azp_ibn_data_main_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_data_main_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "' AND " . d_azp_ibn_data_main_m_level . " = '2'");
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
		final public function sql_azp_ibn_data_main_restore(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_data_main_restore($data);
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
				$var_array = array(d_azp_ibn_data_main_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_data_main, $var_array, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_data_main_update(array $data) {
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
				if (!isset($data['field_up_city'])) { throw new Exception('<b>Error:</b> El campo de ciudad esta prohibido modificar.'); }
				if (!isset($data['field_up_code'])) { throw new Exception('<b>Error:</b> El campo de codigo esta prohibido modificar.'); }
				if (!isset($data['field_up_consecutive'])) { throw new Exception('<b>Error:</b> El campo de consecutivo esta prohibido modificar.'); }
				if (!isset($data['field_up_department'])) { throw new Exception('<b>Error:</b> El campo de departamento esta prohibido modificar.'); }
				if (!isset($data['field_up_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_identification'])) { throw new Exception('<b>Error:</b> El campo de cedula esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_control_panel'])) { throw new Exception('<b>Error:</b> El campo de codigo consecutivo esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_city = $this->db->scape($data['field_up_city']);
				$empty_code = $this->db->scape($data['field_up_code']);
				$empty_consecutive = $this->db->scape($data['field_up_consecutive']);
				$empty_department = $this->db->scape($data['field_up_department']);
				$empty_full_name = $this->db->scape($data['field_up_full_name']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_ibn_control_panel = $this->db->scape($data['field_up_ibn_control_panel']);
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
				if (Func::emp($empty_city)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad es obligatorio.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_city)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_city) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_city, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_city)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_code) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de codigo debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_code, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de codigo no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_code)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de codigo no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_consecutive) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de consecutivo debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_consecutive, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de consecutivo no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_consecutive)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de consecutivo no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_department)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de departamento es obligatorio.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_department)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de departamento solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_department) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de departamento permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_department, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de departamento no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_department)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de departamento no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es obligatorio.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_full_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_full_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_identification) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de identificacion debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_identification, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de identificacion no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de identificacion no permite tener espacios en blanco al principio o al final.');
				}
				#---------------------------------------------#
				if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de identificacion permite maximo hasta 255 caracteres.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_control_panel) || strtolower($empty_ibn_control_panel) == strtolower('seleccionar') || $empty_ibn_control_panel == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de codigo de investigacion es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_control_panel)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de codigo de investigacion solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "' AND " . d_azp_ibn_data_main_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_data_main_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "' AND " . d_azp_ibn_data_main_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_control_panel = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_control_panel) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_control_panel) == '') { $sql_ibn_control_panel[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_control_panel[0][0]) != strtolower($empty_ibn_control_panel)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El codigo de investigacion seleccionado no se encuentra registrado.');
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
		final public function sql_azp_ibn_data_main_update(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_data_main_update($data);
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
				$empty_city = $this->db->scape($data['field_up_city']);
				$empty_code = $this->db->scape($data['field_up_code']);
				$empty_consecutive = $this->db->scape($data['field_up_consecutive']);
				$empty_department = $this->db->scape($data['field_up_department']);
				$empty_full_name = $this->db->scape($data['field_up_full_name']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_ibn_control_panel = $this->db->scape($data['field_up_ibn_control_panel']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_ibn_data_main, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_ibn_data_main_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_ibn_data_main_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_ibn_data_main_m_date_created => DATE_HOUR,
							d_azs_ibn_data_main_m_date_modified => DATE_HOUR,
							d_azs_ibn_data_main_m_deleted => $key_sql_select[d_azp_ibn_data_main_m_deleted],
							d_azs_ibn_data_main_m_description => $key_sql_select[d_azp_ibn_data_main_m_description],
							d_azs_ibn_data_main_m_level => $key_sql_select[d_azp_ibn_data_main_m_level],
							d_azs_ibn_data_main_m_status => $key_sql_select[d_azp_ibn_data_main_m_status],
							d_azs_ibn_data_main_m_temp => $key_sql_select[d_azp_ibn_data_main_m_temp],
							d_azs_ibn_data_main_t_city => strtoupper($key_sql_select[d_azp_ibn_data_main_t_city]),
							d_azs_ibn_data_main_t_code => strtoupper($key_sql_select[d_azp_ibn_data_main_t_code]),
							d_azs_ibn_data_main_t_consecutive => strtoupper($key_sql_select[d_azp_ibn_data_main_t_consecutive]),
							d_azs_ibn_data_main_t_department => strtoupper($key_sql_select[d_azp_ibn_data_main_t_department]),
							d_azs_ibn_data_main_t_full_name => strtoupper($key_sql_select[d_azp_ibn_data_main_t_full_name]),
							d_azs_ibn_data_main_t_identification => strtoupper($key_sql_select[d_azp_ibn_data_main_t_identification]),
							d_azs_ibn_data_main_u_ibn_control_panel => strtoupper($key_sql_select[d_azp_ibn_data_main_v_id_azp_ibn_control_panel]),
							d_azs_ibn_data_main_v_id_azp_ibn_data_main => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_ibn_data_main, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_data_main_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_data_main_m_date_modified => DATE_HOUR,
					d_azp_ibn_data_main_m_description => $empty_description,
					d_azp_ibn_data_main_m_status => $empty_state,
					d_azp_ibn_data_main_t_city => strtoupper($empty_city),
					d_azp_ibn_data_main_t_code => strtoupper($empty_code),
					d_azp_ibn_data_main_t_consecutive => strtoupper($empty_consecutive),
					d_azp_ibn_data_main_t_department => strtoupper($empty_department),
					d_azp_ibn_data_main_t_full_name => strtoupper($empty_full_name),
					d_azp_ibn_data_main_t_identification => strtoupper($empty_identification),
					d_azp_ibn_data_main_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_data_main, $var_array, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_control_panel() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_m_deleted . " = '1' AND " . d_azp_ibn_control_panel_m_status . " = '1'");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>