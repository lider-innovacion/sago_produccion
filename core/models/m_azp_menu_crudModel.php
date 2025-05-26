<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_menu_crudModel extends Models implements OCREND {
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
					tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " AS 'lbl_azp_menu_crud_id_azp_menu_crud',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_menu_crud." . d_azp_menu_crud_m_date_created . " AS 'lbl_azp_menu_crud_m_date_created',
					tc_azp_menu_crud." . d_azp_menu_crud_m_date_modified . " AS 'lbl_azp_menu_crud_m_date_modified',
					tc_azp_menu_crud." . d_azp_menu_crud_m_description . " AS 'lbl_azp_menu_crud_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_api . " AS 'lbl_azp_menu_crud_t_api',
					tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_script . " AS 'lbl_azp_menu_crud_t_script',
					tc_azp_menu_crud." . d_azp_menu_crud_t_table_change . " AS 'lbl_azp_menu_crud_t_table_change',
					tc_azp_menu_crud." . d_azp_menu_crud_t_table_main . " AS 'lbl_azp_menu_crud_t_table_main',
					tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url',
					tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
					tc_azp_icon_code." . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name',
					tc_azp_table_prefix." . d_azp_table_prefix_t_name . " AS 'lbl_azp_table_prefix_t_name'
				FROM " . t_azp_menu_crud . " tc_azp_menu_crud
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_application . " tc_azp_application
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_application . "
						= tc_azp_application." . d_azp_application_id_azp_application . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . "
						= tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_table_prefix . " tc_azp_table_prefix
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_table_prefix . "
						= tc_azp_table_prefix." . d_azp_table_prefix_id_azp_table_prefix . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_menu_crud." . d_azp_menu_crud_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
				ORDER BY tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_menu_crud." . d_azs_menu_crud_id_azs_menu_crud . " AS 'lbl_azs_menu_crud_id_azs_menu_crud',
					tc_azs_menu_crud." . d_azs_menu_crud_m_date_modified . " AS 'lbl_azs_menu_crud_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_menu_crud." . d_azs_menu_crud_m_date_created . " AS 'lbl_azs_menu_crud_m_date_created',
					tc_azs_menu_crud." . d_azs_menu_crud_m_date_modified . " AS 'lbl_azs_menu_crud_m_date_modified',
					tc_azs_menu_crud." . d_azs_menu_crud_m_description . " AS 'lbl_azs_menu_crud_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_menu_crud." . d_azs_menu_crud_t_api . " AS 'lbl_azs_menu_crud_t_api',
					tc_azs_menu_crud." . d_azs_menu_crud_t_name . " AS 'lbl_azs_menu_crud_t_name',
					tc_azs_menu_crud." . d_azs_menu_crud_t_script . " AS 'lbl_azs_menu_crud_t_script',
					tc_azs_menu_crud." . d_azs_menu_crud_t_table_change . " AS 'lbl_azs_menu_crud_t_table_change',
					tc_azs_menu_crud." . d_azs_menu_crud_t_table_main . " AS 'lbl_azs_menu_crud_t_table_main',
					tc_azs_menu_crud." . d_azs_menu_crud_t_url . " AS 'lbl_azs_menu_crud_t_url',
					tc_azs_menu_crud." . d_azs_menu_crud_u_application . " AS 'lbl_azs_menu_crud_u_application',
					tc_azs_menu_crud." . d_azs_menu_crud_u_icon_code . " AS 'lbl_azs_menu_crud_u_icon_code',
					tc_azs_menu_crud." . d_azs_menu_crud_u_table_prefix . " AS 'lbl_azs_menu_crud_u_table_prefix'
				FROM " . t_azs_menu_crud . " tc_azs_menu_crud
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_menu_crud." . d_azs_menu_crud_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_menu_crud." . d_azs_menu_crud_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_menu_crud." . d_azs_menu_crud_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_menu_crud." . d_azs_menu_crud_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_menu_crud." . d_azs_menu_crud_v_id_azp_menu_crud . " = '" . $this->id . "'
				ORDER BY tc_azs_menu_crud." . d_azs_menu_crud_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " AS 'lbl_azp_menu_crud_id_azp_menu_crud',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_menu_crud." . d_azp_menu_crud_m_date_created . " AS 'lbl_azp_menu_crud_m_date_created',
					tc_azp_menu_crud." . d_azp_menu_crud_m_date_modified . " AS 'lbl_azp_menu_crud_m_date_modified',
					tc_azp_menu_crud." . d_azp_menu_crud_m_description . " AS 'lbl_azp_menu_crud_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_api . " AS 'lbl_azp_menu_crud_t_api',
					tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_script . " AS 'lbl_azp_menu_crud_t_script',
					tc_azp_menu_crud." . d_azp_menu_crud_t_table_change . " AS 'lbl_azp_menu_crud_t_table_change',
					tc_azp_menu_crud." . d_azp_menu_crud_t_table_main . " AS 'lbl_azp_menu_crud_t_table_main',
					tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url',
					tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
					tc_azp_icon_code." . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name',
					tc_azp_table_prefix." . d_azp_table_prefix_t_name . " AS 'lbl_azp_table_prefix_t_name'
				FROM " . t_azp_menu_crud . " tc_azp_menu_crud
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_application . " tc_azp_application
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_application . "
						= tc_azp_application." . d_azp_application_id_azp_application . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . "
						= tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_table_prefix . " tc_azp_table_prefix
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_table_prefix . "
						= tc_azp_table_prefix." . d_azp_table_prefix_id_azp_table_prefix . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " = '" . $this->id . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_menu_crud . "
				WHERE " . d_azp_menu_crud_id_azp_menu_crud . " = '" . $this->id . "'
					AND " . d_azp_menu_crud_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_menu_crud);
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " AS 'lbl_azp_menu_crud_id_azp_menu_crud',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_menu_crud." . d_azp_menu_crud_m_date_created . " AS 'lbl_azp_menu_crud_m_date_created',
					tc_azp_menu_crud." . d_azp_menu_crud_m_date_modified . " AS 'lbl_azp_menu_crud_m_date_modified',
					tc_azp_menu_crud." . d_azp_menu_crud_m_description . " AS 'lbl_azp_menu_crud_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_api . " AS 'lbl_azp_menu_crud_t_api',
					tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_script . " AS 'lbl_azp_menu_crud_t_script',
					tc_azp_menu_crud." . d_azp_menu_crud_t_table_change . " AS 'lbl_azp_menu_crud_t_table_change',
					tc_azp_menu_crud." . d_azp_menu_crud_t_table_main . " AS 'lbl_azp_menu_crud_t_table_main',
					tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url',
					tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
					tc_azp_icon_code." . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name',
					tc_azp_table_prefix." . d_azp_table_prefix_t_name . " AS 'lbl_azp_table_prefix_t_name'
				FROM " . t_azp_menu_crud . " tc_azp_menu_crud
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_application . " tc_azp_application
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_application . "
						= tc_azp_application." . d_azp_application_id_azp_application . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . "
						= tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_table_prefix . " tc_azp_table_prefix
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_table_prefix . "
						= tc_azp_table_prefix." . d_azp_table_prefix_id_azp_table_prefix . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '3'
				ORDER BY tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " AS 'lbl_azp_menu_crud_id_azp_menu_crud',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_menu_crud." . d_azp_menu_crud_m_date_created . " AS 'lbl_azp_menu_crud_m_date_created',
					tc_azp_menu_crud." . d_azp_menu_crud_m_date_modified . " AS 'lbl_azp_menu_crud_m_date_modified',
					tc_azp_menu_crud." . d_azp_menu_crud_m_description . " AS 'lbl_azp_menu_crud_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_api . " AS 'lbl_azp_menu_crud_t_api',
					tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_script . " AS 'lbl_azp_menu_crud_t_script',
					tc_azp_menu_crud." . d_azp_menu_crud_t_table_change . " AS 'lbl_azp_menu_crud_t_table_change',
					tc_azp_menu_crud." . d_azp_menu_crud_t_table_main . " AS 'lbl_azp_menu_crud_t_table_main',
					tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url',
					tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
					tc_azp_icon_code." . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name',
					tc_azp_table_prefix." . d_azp_table_prefix_t_name . " AS 'lbl_azp_table_prefix_t_name'
				FROM " . t_azp_menu_crud . " tc_azp_menu_crud
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_application . " tc_azp_application
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_application . "
						= tc_azp_application." . d_azp_application_id_azp_application . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . "
						= tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_table_prefix . " tc_azp_table_prefix
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_table_prefix . "
						= tc_azp_table_prefix." . d_azp_table_prefix_id_azp_table_prefix . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '1'
				ORDER BY tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " AS 'lbl_azp_menu_crud_id_azp_menu_crud',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_menu_crud." . d_azp_menu_crud_m_date_created . " AS 'lbl_azp_menu_crud_m_date_created',
					tc_azp_menu_crud." . d_azp_menu_crud_m_date_modified . " AS 'lbl_azp_menu_crud_m_date_modified',
					tc_azp_menu_crud." . d_azp_menu_crud_m_description . " AS 'lbl_azp_menu_crud_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_api . " AS 'lbl_azp_menu_crud_t_api',
					tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_script . " AS 'lbl_azp_menu_crud_t_script',
					tc_azp_menu_crud." . d_azp_menu_crud_t_table_change . " AS 'lbl_azp_menu_crud_t_table_change',
					tc_azp_menu_crud." . d_azp_menu_crud_t_table_main . " AS 'lbl_azp_menu_crud_t_table_main',
					tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url',
					tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
					tc_azp_icon_code." . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name',
					tc_azp_table_prefix." . d_azp_table_prefix_t_name . " AS 'lbl_azp_table_prefix_t_name'
				FROM " . t_azp_menu_crud . " tc_azp_menu_crud
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_application . " tc_azp_application
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_application . "
						= tc_azp_application." . d_azp_application_id_azp_application . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . "
						= tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_table_prefix . " tc_azp_table_prefix
					ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_table_prefix . "
						= tc_azp_table_prefix." . d_azp_table_prefix_id_azp_table_prefix . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " = '2'
				ORDER BY tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " AS 'lbl_azp_menu_crud_id_azp_menu_crud',
					tc_azp_menu_crud." . d_azp_menu_crud_m_by_created . " AS 'lbl_azp_menu_crud_m_by_created',
					tc_azp_menu_crud." . d_azp_menu_crud_m_by_modified . " AS 'lbl_azp_menu_crud_m_by_modified',
					tc_azp_menu_crud." . d_azp_menu_crud_m_date_created . " AS 'lbl_azp_menu_crud_m_date_created',
					tc_azp_menu_crud." . d_azp_menu_crud_m_date_modified . " AS 'lbl_azp_menu_crud_m_date_modified',
					tc_azp_menu_crud." . d_azp_menu_crud_m_description . " AS 'lbl_azp_menu_crud_m_description',
					tc_azp_menu_crud." . d_azp_menu_crud_m_level . " AS 'lbl_azp_menu_crud_m_level',
					tc_azp_menu_crud." . d_azp_menu_crud_m_status . " AS 'lbl_azp_menu_crud_m_status',
					tc_azp_menu_crud." . d_azp_menu_crud_t_api . " AS 'lbl_azp_menu_crud_t_api',
					tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
					tc_azp_menu_crud." . d_azp_menu_crud_t_script . " AS 'lbl_azp_menu_crud_t_script',
					tc_azp_menu_crud." . d_azp_menu_crud_t_table_change . " AS 'lbl_azp_menu_crud_t_table_change',
					tc_azp_menu_crud." . d_azp_menu_crud_t_table_main . " AS 'lbl_azp_menu_crud_t_table_main',
					tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url',
					tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_application . " AS 'lbl_azp_menu_crud_v_id_azp_application',
					tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . " AS 'lbl_azp_menu_crud_v_id_azp_icon_code',
					tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_table_prefix . " AS 'lbl_azp_menu_crud_v_id_azp_table_prefix'
				FROM " . t_azp_menu_crud . " tc_azp_menu_crud
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_menu_crud." . d_azp_menu_crud_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " = '" . $this->id . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_menu_crud_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "' AND " . d_azp_menu_crud_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "' AND " . d_azp_menu_crud_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_menu_crud_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "' AND " . d_azp_menu_crud_m_level . " = '2'");
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
		final public function sql_azp_menu_crud_delete(array $data) : array {
			$var_error = $this->error_sql_azp_menu_crud_delete($data);
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
				$var_array = array(d_azp_menu_crud_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_menu_crud, $var_array, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_menu_crud_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				//if (!isset($data['field_cr_script'])) { throw new Exception('<b>Error:</b> El campo de script esta prohibido modificar.'); }
				//if (!isset($data['field_cr_table_change'])) { throw new Exception('<b>Error:</b> El campo de tabla de cambio esta prohibido modificar.'); }
				if (!isset($data['field_cr_table_main'])) { throw new Exception('<b>Error:</b> El campo de tabla principal esta prohibido modificar.'); }
				//if (!isset($data['field_cr_url'])) { throw new Exception('<b>Error:</b> El campo de url esta prohibido modificar.'); }
				if (!isset($data['field_cr_application'])) { throw new Exception('<b>Error:</b> El campo de aplicacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_icon_code'])) { throw new Exception('<b>Error:</b> El campo de icono esta prohibido modificar.'); }
				if (!isset($data['field_cr_table_prefix'])) { throw new Exception('<b>Error:</b> El campo de prefijo tablas esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_name = $this->db->scape($data['field_cr_name']);
				//$empty_script = $this->db->scape($data['field_cr_script']);
				$empty_script = $this->db->scape($data['field_cr_table_main']);
				//$empty_table_change = $this->db->scape($data['field_cr_table_change']);
				$empty_table_change = $this->db->scape($data['field_cr_table_main']);
				$empty_table_main = $this->db->scape($data['field_cr_table_main']);
				//$empty_url = $this->db->scape($data['field_cr_url']);
				$empty_url = $this->db->scape($data['field_cr_table_main']);
				$empty_application = $this->db->scape($data['field_cr_application']);
				$empty_icon_code = $this->db->scape($data['field_cr_icon_code']);
				$empty_table_prefix = $this->db->scape($data['field_cr_table_prefix']);
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
				/*if (Func::emp($empty_script)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de script es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_script) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de script permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_script, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de script no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_script)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de script no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_table_change)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla de cambio es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_table_change) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla de cambio permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_table_change, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla de cambio no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_table_change)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla de cambio no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_main)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla principal es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_table_main) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla principal permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_table_main, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla principal no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_table_main)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla principal no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_url)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de url es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_url)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de url solo permite letras.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_url) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de url permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_url, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de url no permite tener ningun espacio en blanco.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_url)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de url no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_application) || strtolower($empty_application) == strtolower('seleccionar') || $empty_application == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de aplicacion es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_application)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de aplicacion solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_icon_code) || strtolower($empty_icon_code) == strtolower('seleccionar') || $empty_icon_code == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de icono es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_icon_code)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de icono solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_prefix) || strtolower($empty_table_prefix) == strtolower('seleccionar') || $empty_table_prefix == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de prefijo tablas es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_prefix)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de prefijo tablas solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				/*$sql_name = $this->db->select(d_azp_menu_crud_t_name, t_azp_menu_crud, d_azp_menu_crud_t_name . " = '" . $empty_name . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_name) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_name[0][0]) == strtolower($empty_name)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El nombre digitado <b>' . strtolower($empty_name) . '</b> ya existe registrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_table_main = $this->db->select(d_azp_menu_crud_t_table_main, t_azp_menu_crud, d_azp_menu_crud_t_table_main . " = '" . $empty_table_main . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_table_main) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_table_main[0][0]) == strtolower($empty_table_main)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La tabla principal digitada <b>' . strtolower($empty_table_main) . '</b> ya existe registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				/*$sql_url = $this->db->select(d_azp_menu_crud_t_url, t_azp_menu_crud, d_azp_menu_crud_t_url . " = '" . $empty_url . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_url) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_url[0][0]) == strtolower($empty_url)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La url digitada <b>' . strtolower($empty_url) . '</b> ya existe registrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_application = $this->db->select('*', t_azp_application, d_azp_application_id_azp_application . " = '" . $empty_application . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_application) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_application) == '') { $sql_application[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_application[0][0]) != strtolower($empty_application)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La aplicacion seleccionada no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_icon = $this->db->select('*', t_azp_icon_code, d_azp_icon_code_id_azp_icon_code . " = '" . $empty_icon_code . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_icon) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_icon) == '') { $sql_icon[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_icon[0][0]) != strtolower($empty_icon_code)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El icono seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_table_prefix = $this->db->select('*', t_azp_table_prefix, d_azp_table_prefix_id_azp_table_prefix . " = '" . $empty_table_prefix . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_table_prefix) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_table_prefix) == '') { $sql_table_prefix[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_table_prefix[0][0]) != strtolower($empty_table_prefix)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El prefijo de tabla seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_table_change = $this->db->query("SHOW TABLES LIKE '" . $empty_table_change . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_table_change) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					foreach ($sql_table_change as $key => $value) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La tabla cambio <b>' . strtolower($empty_table_change) . '</b> ya se encuentra registrada.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_table_main = $this->db->query("SHOW TABLES LIKE '" . $empty_table_main . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_table_main) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					foreach ($sql_table_main as $key => $value) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La tabla principal <b>' . strtolower($empty_table_main) . '</b> ya se encuentra registrada.');
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
		final public function sql_azp_menu_crud_insert(array $data) : array {
			$var_error = $this->error_sql_azp_menu_crud_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_name = $this->db->scape($data['field_cr_name']);
				//$empty_script = $this->db->scape($data['field_cr_script']);
				$empty_script = $this->db->scape($data['field_cr_table_main']);
				//$empty_table_change = $this->db->scape($data['field_cr_table_change']);
				$empty_table_change = $this->db->scape($data['field_cr_table_main']);
				$empty_table_main = $this->db->scape($data['field_cr_table_main']);
				//$empty_url = $this->db->scape($data['field_cr_url']);
				$empty_url = $this->db->scape($data['field_cr_table_main']);
				$empty_application = $this->db->scape($data['field_cr_application']);
				$empty_icon_code = $this->db->scape($data['field_cr_icon_code']);
				$empty_table_prefix = $this->db->scape($data['field_cr_table_prefix']);
				#-------------------------------------------------------------------------#
				# Query Sql: Ejecutar codigo sql en la base de datos
				$var_sql_table_prefix = $this->db->query("
					SELECT " . d_azp_table_prefix_t_name . " AS 'lbl_prefix' FROM " . t_azp_table_prefix . "
					WHERE " . d_azp_table_prefix_id_azp_table_prefix . " = '" . $empty_table_prefix . "'
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_table_prefix) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_table_prefix as $prefix): $prefix['lbl_prefix']; endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_menu_crud_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_menu_crud_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_menu_crud_m_date_created => DATE_HOUR,
					d_azp_menu_crud_m_date_modified => DATE_HOUR,
					d_azp_menu_crud_m_deleted => '1',
					d_azp_menu_crud_m_description => $empty_description,
					d_azp_menu_crud_m_level => '2',
					d_azp_menu_crud_m_status => '1',
					d_azp_menu_crud_m_temp => '2',
					d_azp_menu_crud_t_api => strtolower('api' . 'azp' . Strings::url_amigable_guion($empty_url) . '/'),
					d_azp_menu_crud_t_name => ucwords(strtolower($empty_name)),
					d_azp_menu_crud_t_script => strtolower($empty_script),
					d_azp_menu_crud_t_table_change => strtolower($empty_table_change),
					d_azp_menu_crud_t_table_main => strtolower($empty_table_main),
					d_azp_menu_crud_t_url => strtolower('azp' . Strings::url_amigable_guion($empty_url) . '/'),
					d_azp_menu_crud_v_id_azp_application => $empty_application,
					d_azp_menu_crud_v_id_azp_icon_code => $empty_icon_code,
					d_azp_menu_crud_v_id_azp_table_prefix => $empty_table_prefix,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_menu_crud, $var_array);
				# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
				$var_sql_azp_menu_crud = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_m_temp . " = '2' AND " . d_azp_menu_crud_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_azp_menu_crud) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_azp_menu_crud as $key_azp_menu_crud):
						$key_azp_menu_crud[d_azp_menu_crud_id_azp_menu_crud];
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_authorized_permits_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_authorized_permits_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_authorized_permits_m_date_created => DATE_HOUR,
					d_azp_authorized_permits_m_date_modified => DATE_HOUR,
					d_azp_authorized_permits_m_deleted => '1',
					d_azp_authorized_permits_m_description => '',
					d_azp_authorized_permits_m_level => '1',
					d_azp_authorized_permits_m_status => '1',
					d_azp_authorized_permits_m_temp => '1',
					d_azp_authorized_permits_t_btn_action => '1',
					d_azp_authorized_permits_t_btn_export => '1',
					d_azp_authorized_permits_t_btn_search => '1',
					d_azp_authorized_permits_t_btn_visible => '1',
					d_azp_authorized_permits_t_data_by_create => '1',
					d_azp_authorized_permits_t_data_change => '1',
					d_azp_authorized_permits_t_data_eliminate => '1',
					d_azp_authorized_permits_t_data_read => '1',
					d_azp_authorized_permits_t_data_remove => '1',
					d_azp_authorized_permits_t_menu_value => '1',
					d_azp_authorized_permits_t_module_value => '1',
					d_azp_authorized_permits_t_value_associate => '1',
					d_azp_authorized_permits_t_value_change => '1',
					d_azp_authorized_permits_t_value_close => '1',
					d_azp_authorized_permits_t_value_column_toggle => '1',
					d_azp_authorized_permits_t_value_colvis_column => '1',
					d_azp_authorized_permits_t_value_colvis_restore => '1',
					d_azp_authorized_permits_t_value_copy => '1',
					d_azp_authorized_permits_t_value_create => '1',
					d_azp_authorized_permits_t_value_csv => '1',
					d_azp_authorized_permits_t_value_delete => '1',
					d_azp_authorized_permits_t_value_detail => '1',
					d_azp_authorized_permits_t_value_email => '1',
					d_azp_authorized_permits_t_value_error => '1',
					d_azp_authorized_permits_t_value_excel => '1',
					d_azp_authorized_permits_t_value_file => '2',
					d_azp_authorized_permits_t_value_import => '1',
					d_azp_authorized_permits_t_value_page_length => '1',
					d_azp_authorized_permits_t_value_pdf => '1',
					d_azp_authorized_permits_t_value_print => '1',
					d_azp_authorized_permits_t_value_remove => '1',
					d_azp_authorized_permits_t_value_report => '1',
					d_azp_authorized_permits_t_value_restore => '1',
					d_azp_authorized_permits_t_value_sub_menu => '1',
					d_azp_authorized_permits_t_value_sync => '1',
					d_azp_authorized_permits_t_value_template => '1',
					d_azp_authorized_permits_t_value_update => '1',
					d_azp_authorized_permits_v_id_azp_menu_crud => $key_azp_menu_crud[d_azp_menu_crud_id_azp_menu_crud],
					d_azp_authorized_permits_v_id_azp_role => '1',
				);
				# Query Sql: Ejecutar codigo sql en la base de datos
				$this->db->insert(t_azp_authorized_permits, $var_array);
				# Query Sql: Ejecutar codigo sql en la base de datos
				$var_sql_azp_role = $this->db->select('*', t_azp_role, d_azp_role_id_azp_role . " >= '2'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_azp_role) {
					# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
					foreach ($var_sql_azp_role as $key_azp_role):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_authorized_permits_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_authorized_permits_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_authorized_permits_m_date_created => DATE_HOUR,
							d_azp_authorized_permits_m_date_modified => DATE_HOUR,
							d_azp_authorized_permits_m_deleted => '1',
							d_azp_authorized_permits_m_description => '',
							d_azp_authorized_permits_m_level => '2',
							d_azp_authorized_permits_m_status => '1',
							d_azp_authorized_permits_m_temp => '1',
							d_azp_authorized_permits_t_btn_action => '2',
							d_azp_authorized_permits_t_btn_export => '2',
							d_azp_authorized_permits_t_btn_search => '2',
							d_azp_authorized_permits_t_btn_visible => '2',
							d_azp_authorized_permits_t_data_by_create => '2',
							d_azp_authorized_permits_t_data_change => '2',
							d_azp_authorized_permits_t_data_eliminate => '2',
							d_azp_authorized_permits_t_data_read => '2',
							d_azp_authorized_permits_t_data_remove => '2',
							d_azp_authorized_permits_t_menu_value => '2',
							d_azp_authorized_permits_t_module_value => '2',
							d_azp_authorized_permits_t_value_associate => '2',
							d_azp_authorized_permits_t_value_change => '2',
							d_azp_authorized_permits_t_value_close => '2',
							d_azp_authorized_permits_t_value_column_toggle => '2',
							d_azp_authorized_permits_t_value_colvis_column => '2',
							d_azp_authorized_permits_t_value_colvis_restore => '2',
							d_azp_authorized_permits_t_value_copy => '2',
							d_azp_authorized_permits_t_value_create => '2',
							d_azp_authorized_permits_t_value_csv => '2',
							d_azp_authorized_permits_t_value_delete => '2',
							d_azp_authorized_permits_t_value_detail => '2',
							d_azp_authorized_permits_t_value_email => '2',
							d_azp_authorized_permits_t_value_error => '2',
							d_azp_authorized_permits_t_value_excel => '2',
							d_azp_authorized_permits_t_value_file => '2',
							d_azp_authorized_permits_t_value_import => '2',
							d_azp_authorized_permits_t_value_page_length => '2',
							d_azp_authorized_permits_t_value_pdf => '2',
							d_azp_authorized_permits_t_value_print => '2',
							d_azp_authorized_permits_t_value_remove => '2',
							d_azp_authorized_permits_t_value_report => '2',
							d_azp_authorized_permits_t_value_restore => '2',
							d_azp_authorized_permits_t_value_sub_menu => '2',
							d_azp_authorized_permits_t_value_sync => '2',
							d_azp_authorized_permits_t_value_template => '2',
							d_azp_authorized_permits_t_value_update => '2',
							d_azp_authorized_permits_v_id_azp_menu_crud => $key_azp_menu_crud[d_azp_menu_crud_id_azp_menu_crud],
							d_azp_authorized_permits_v_id_azp_role => $key_azp_role[d_azp_role_id_azp_role],
						);
						# Query Sql Insert: Registrar valores en la tabla segun sus campos
						$this->db->insert(t_azp_authorized_permits, $var_array);
					endforeach;
				}
				# Query Sql: Ejecutar codigo sql en la base de datos
				$this->db->query("
					CREATE TABLE " . DATABASE['name'] . ".`" . $prefix['lbl_prefix'] . 'p_' . strtolower($empty_table_main) . "` (
						`id_" . $prefix['lbl_prefix'] . 'p_' . strtolower($empty_table_main) . "` bigint(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id',
						`m_by_created` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Creado Por',
						`m_by_modified` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Modificado Por',
						`m_date_created` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Creado',
						`m_date_modified` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Modificado',
						`m_deleted` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Eliminado',
						`m_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Descripcion',
						`m_level` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nivel',
						`m_status` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Estado',
						`m_temp` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Temporal'
					) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
				");
				# Query Sql: Ejecutar codigo sql en la base de datos
				$this->db->query("
					ALTER TABLE " . DATABASE['name'] . ".`" . $prefix['lbl_prefix'] . 'p_' . strtolower($empty_table_main) . "`
						ADD PRIMARY KEY (`id_" . $prefix['lbl_prefix'] . 'p_' . strtolower($empty_table_main) . "`),
						ADD KEY `IDX_id_" . $prefix['lbl_prefix'] . 'p_' . strtolower($empty_table_main) .
							"` (`id_" . $prefix['lbl_prefix'] . 'p_' . strtolower($empty_table_main) . "`),
						ADD KEY `IDX_m_by_created` (`m_by_created`),
						ADD KEY `IDX_m_by_modified` (`m_by_modified`),
						ADD KEY `IDX_m_date_created` (`m_date_created`),
						ADD KEY `IDX_m_date_modified` (`m_date_modified`),
						ADD KEY `IDX_m_deleted` (`m_deleted`),
						ADD KEY `IDX_m_level` (`m_level`),
						ADD KEY `IDX_m_status` (`m_status`),
						ADD KEY `IDX_m_temp` (`m_temp`);
				");
				# Query Sql: Ejecutar codigo sql en la base de datos
				$this->db->query("
					ALTER TABLE " . DATABASE['name'] . "." . $prefix['lbl_prefix'] . 'p_' . strtolower($empty_table_main) . "
						MODIFY `id_" . $prefix['lbl_prefix'] . 'p_' . strtolower($empty_table_main) . "` bigint(255) NOT NULL AUTO_INCREMENT;
				");
				# Query Sql: Ejecutar codigo sql en la base de datos
				$this->db->query("
					CREATE TABLE " . DATABASE['name'] . ".`" . $prefix['lbl_prefix'] . 's_' . strtolower($empty_table_change) . "` (
						`id_" . $prefix['lbl_prefix'] . 's_' . strtolower($empty_table_change) . "` bigint(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id',
						`m_by_created` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Creado Por',
						`m_by_modified` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Modificado Por',
						`m_date_created` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Creado',
						`m_date_modified` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Modificado',
						`m_deleted` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Eliminado',
						`m_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Descripcion',
						`m_level` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nivel',
						`m_status` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Estado',
						`m_temp` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Temporal',
						`v_id_" . $prefix['lbl_prefix'] . 'p_' . strtolower($empty_table_main) . "` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Id'
					) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
				");
				# Query Sql: Ejecutar codigo sql en la base de datos
				$this->db->query("
					ALTER TABLE " . DATABASE['name'] . ".`" . $prefix['lbl_prefix'] . 's_' . strtolower($empty_table_change) . "`
						ADD PRIMARY KEY (`id_" . $prefix['lbl_prefix'] . 's_' . strtolower($empty_table_change) . "`),
						ADD KEY `IDX_id_" . $prefix['lbl_prefix'] . 's_' . strtolower($empty_table_change) .
							"` (`id_" . $prefix['lbl_prefix'] . 's_' . strtolower($empty_table_change) . "`),
						ADD KEY `IDX_m_by_created` (`m_by_created`),
						ADD KEY `IDX_m_by_modified` (`m_by_modified`),
						ADD KEY `IDX_m_date_created` (`m_date_created`),
						ADD KEY `IDX_m_date_modified` (`m_date_modified`),
						ADD KEY `IDX_m_deleted` (`m_deleted`),
						ADD KEY `IDX_m_level` (`m_level`),
						ADD KEY `IDX_m_status` (`m_status`),
						ADD KEY `IDX_m_temp` (`m_temp`),
						ADD KEY `IDX_v_id_" . $prefix['lbl_prefix'] . 'p_' . strtolower($empty_table_main) . "`
							(`v_id_" . $prefix['lbl_prefix'] . 'p_' . strtolower($empty_table_main) . "`);
				");
				# Query Sql: Ejecutar codigo sql en la base de datos
				$this->db->query("
					ALTER TABLE " . DATABASE['name'] . ".`" . $prefix['lbl_prefix'] . 's_' . strtolower($empty_table_change) . "`
						MODIFY `id_" . $prefix['lbl_prefix'] . 's_' . strtolower($empty_table_change) . "` bigint(255) NOT NULL AUTO_INCREMENT;
				");
				# Query Sql: Ejecutar codigo sql en la base de datos
				$this->db->query("
					ALTER TABLE " . DATABASE['name'] . ".`" . $prefix['lbl_prefix'] . 's_' . strtolower($empty_table_change) . "`
					ADD CONSTRAINT `" . $prefix['lbl_prefix'] . 's_' . strtolower($empty_table_change) . "_ibfk_1`
					FOREIGN KEY (`v_id_" . $prefix['lbl_prefix'] . 'p_' . strtolower($empty_table_main) . "`)
					REFERENCES " . DATABASE['name'] . ".`" . $prefix['lbl_prefix'] . 'p_' . strtolower($empty_table_main) . "`
						(`id_" . $prefix['lbl_prefix'] . 'p_' . strtolower($empty_table_main) . "`)
					ON UPDATE CASCADE ON DELETE CASCADE;
				");
				# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
				$var_array = array(d_azp_menu_crud_m_temp => '1');
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_menu_crud, $var_array, d_azp_menu_crud_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_menu_crud_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "' AND " . d_azp_menu_crud_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "' AND " . d_azp_menu_crud_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_menu_crud_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "' AND " . d_azp_menu_crud_m_level . " = '2'");
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
		final public function sql_azp_menu_crud_remove(array $data) : array {
			$var_error = $this->error_sql_azp_menu_crud_remove($data);
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
				$var_array = array(d_azp_menu_crud_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_menu_crud, $var_array, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_menu_crud_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "' AND " . d_azp_menu_crud_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "' AND " . d_azp_menu_crud_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_menu_crud_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "' AND " . d_azp_menu_crud_m_level . " = '2'");
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
		final public function sql_azp_menu_crud_restore(array $data) : array {
			$var_error = $this->error_sql_azp_menu_crud_restore($data);
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
				$var_array = array(d_azp_menu_crud_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_menu_crud, $var_array, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_menu_crud_update(array $data) {
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
				//if (!isset($data['field_up_script'])) { throw new Exception('<b>Error:</b> El campo de script esta prohibido modificar.'); }
				//if (!isset($data['field_up_table_change'])) { throw new Exception('<b>Error:</b> El campo de tabla de cambio esta prohibido modificar.'); }
				if (!isset($data['field_up_table_main'])) { throw new Exception('<b>Error:</b> El campo de tabla principal esta prohibido modificar.'); }
				//if (!isset($data['field_up_url'])) { throw new Exception('<b>Error:</b> El campo de url esta prohibido modificar.'); }
				if (!isset($data['field_up_application'])) { throw new Exception('<b>Error:</b> El campo de aplicacion esta prohibido modificar.'); }
				if (!isset($data['field_up_icon_code'])) { throw new Exception('<b>Error:</b> El campo de icono esta prohibido modificar.'); }
				if (!isset($data['field_up_table_prefix'])) { throw new Exception('<b>Error:</b> El campo de prefijo tablas esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_name = $this->db->scape($data['field_up_name']);
				//$empty_script = $this->db->scape($data['field_up_script']);
				$empty_script = $this->db->scape($data['field_up_table_main']);
				//$empty_table_change = $this->db->scape($data['field_up_table_change']);
				$empty_table_change = $this->db->scape($data['field_up_table_main']);
				$empty_table_main = $this->db->scape($data['field_up_table_main']);
				//$empty_url = $this->db->scape($data['field_up_url']);
				$empty_url = $this->db->scape($data['field_up_table_main']);
				$empty_application = $this->db->scape($data['field_up_application']);
				$empty_icon_code = $this->db->scape($data['field_up_icon_code']);
				$empty_table_prefix = $this->db->scape($data['field_up_table_prefix']);
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
				/*if (Func::emp($empty_script)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de script es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_script) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de script permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_script, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de script no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_script)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de script no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_table_change)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla de cambio es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_table_change) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla de cambio permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_table_change, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla de cambio no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_table_change)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla de cambio no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_main)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla principal es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_table_main) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla principal permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_table_main, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla principal no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_table_main)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tabla principal no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_url)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de url es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_url)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de url solo permite letras.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_url) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de url permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_url, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de url no permite tener ningun espacio en blanco.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_url)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de url no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_application) || strtolower($empty_application) == strtolower('seleccionar') || $empty_application == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de aplicacion es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_application)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de aplicacion solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_icon_code) || strtolower($empty_icon_code) == strtolower('seleccionar') || $empty_icon_code == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de icono es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_icon_code)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de icono solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_prefix) || strtolower($empty_table_prefix) == strtolower('seleccionar') || $empty_table_prefix == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de prefijo tablas es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_prefix)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de prefijo tablas solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "' AND " . d_azp_menu_crud_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_menu_crud_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "' AND " . d_azp_menu_crud_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				/*$sql_name = $this->db->select(d_azp_menu_crud_t_name, t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " != '" . $empty_id . "' AND " . d_azp_menu_crud_t_name . " = '" . $empty_name . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_name) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_name[0][0]) == strtolower($empty_name)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El nombre digitado <b>' . strtolower($empty_name) . '</b> ya existe registrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_table_main = $this->db->select(d_azp_menu_crud_t_table_main, t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " != '" . $empty_id . "' AND " . d_azp_menu_crud_t_table_main . " = '" . $empty_table_main . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_table_main) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_table_main[0][0]) == strtolower($empty_table_main)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La tabla principal digitada <b>' . strtolower($empty_table_main) . '</b> ya existe registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				/*$sql_url = $this->db->select(d_azp_menu_crud_t_url, t_azp_menu_crud, d_azp_menu_crud_id_azp_menu_crud . " != '" . $empty_id . "' AND " . d_azp_menu_crud_t_url . " = '" . $empty_url . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_url) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_url[0][0]) == strtolower($empty_url)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La url digitada <b>' . strtolower($empty_url) . '</b> ya existe registrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_application = $this->db->select('*', t_azp_application, d_azp_application_id_azp_application . " = '" . $empty_application . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_application) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_application) == '') { $sql_application[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_application[0][0]) != strtolower($empty_application)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La aplicacion seleccionada no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_icon = $this->db->select('*', t_azp_icon_code, d_azp_icon_code_id_azp_icon_code . " = '" . $empty_icon_code . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_icon) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_icon) == '') { $sql_icon[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_icon[0][0]) != strtolower($empty_icon_code)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El icono seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_table_prefix = $this->db->select('*', t_azp_table_prefix, d_azp_table_prefix_id_azp_table_prefix . " = '" . $empty_table_prefix . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_table_prefix) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_table_prefix) == '') { $sql_table_prefix[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_table_prefix[0][0]) != strtolower($empty_table_prefix)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El prefijo de tabla seleccionado no se encuentra registrado.');
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
		final public function sql_azp_menu_crud_update(array $data) : array {
			$var_error = $this->error_sql_azp_menu_crud_update($data);
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
				//$empty_script = $this->db->scape($data['field_up_script']);
				$empty_script = $this->db->scape($data['field_up_table_main']);
				//$empty_table_change = $this->db->scape($data['field_up_table_change']);
				$empty_table_change = $this->db->scape($data['field_up_table_main']);
				$empty_table_main = $this->db->scape($data['field_up_table_main']);
				//$empty_url = $this->db->scape($data['field_up_url']);
				$empty_url = $this->db->scape($data['field_up_table_main']);
				$empty_application = $this->db->scape($data['field_up_application']);
				$empty_icon_code = $this->db->scape($data['field_up_icon_code']);
				$empty_table_prefix = $this->db->scape($data['field_up_table_prefix']);
				#-------------------------------------------------------------------------#
				# Query Sql: Ejecutar codigo sql en la base de datos
				$var_sql_table_prefix = $this->db->query("
					SELECT " . d_azp_table_prefix_t_name . " AS 'lbl_prefix' FROM " . t_azp_table_prefix . "
					WHERE " . d_azp_table_prefix_id_azp_table_prefix . " = '" . $empty_table_prefix . "'
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_table_prefix) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_table_prefix as $prefix): $prefix['lbl_prefix']; endforeach;
				}
				# Query Sql: Ejecutar codigo sql en la base de datos
				$var_sql_select = $this->db->query("
					-- ---------------------------------------------------------------
					SELECT
						tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " AS 'lbl_azp_menu_crud_id_azp_menu_crud',
						tc_azp_menu_crud." . d_azp_menu_crud_m_deleted . " AS 'lbl_azp_menu_crud_m_deleted',
						tc_azp_menu_crud." . d_azp_menu_crud_m_description . " AS 'lbl_azp_menu_crud_m_description',
						tc_azp_menu_crud." . d_azp_menu_crud_m_level . " AS 'lbl_azp_menu_crud_m_level',
						tc_azp_menu_crud." . d_azp_menu_crud_m_status . " AS 'lbl_azp_menu_crud_m_status',
						tc_azp_menu_crud." . d_azp_menu_crud_m_temp . " AS 'lbl_azp_menu_crud_m_temp',
						tc_azp_menu_crud." . d_azp_menu_crud_t_api . " AS 'lbl_azp_menu_crud_t_api',
						tc_azp_menu_crud." . d_azp_menu_crud_t_name . " AS 'lbl_azp_menu_crud_t_name',
						tc_azp_menu_crud." . d_azp_menu_crud_t_script . " AS 'lbl_azp_menu_crud_t_script',
						tc_azp_menu_crud." . d_azp_menu_crud_t_table_change . " AS 'lbl_azp_menu_crud_t_table_change',
						tc_azp_menu_crud." . d_azp_menu_crud_t_table_main . " AS 'lbl_azp_menu_crud_t_table_main',
						tc_azp_menu_crud." . d_azp_menu_crud_t_url . " AS 'lbl_azp_menu_crud_t_url',
						tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
						tc_azp_icon_code." . d_azp_icon_code_t_name . " AS 'lbl_azp_icon_code_t_name',
						tc_azp_table_prefix." . d_azp_table_prefix_t_name . " AS 'lbl_azp_table_prefix_t_name'
					FROM " . t_azp_menu_crud . " tc_azp_menu_crud
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_application . " tc_azp_application
						ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_application . "
							= tc_azp_application." . d_azp_application_id_azp_application . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_icon_code . " tc_azp_icon_code
						ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_icon_code . "
							= tc_azp_icon_code." . d_azp_icon_code_id_azp_icon_code . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_table_prefix . " tc_azp_table_prefix
						ON tc_azp_menu_crud." . d_azp_menu_crud_v_id_azp_table_prefix . "
							= tc_azp_table_prefix." . d_azp_table_prefix_id_azp_table_prefix . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_menu_crud." . d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "'
					LIMIT 1
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
						$var_array = array(
							d_azs_menu_crud_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_menu_crud_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_menu_crud_m_date_created => DATE_HOUR,
							d_azs_menu_crud_m_date_modified => DATE_HOUR,
							d_azs_menu_crud_m_deleted => $key_sql_select['lbl_azp_menu_crud_m_deleted'],
							d_azs_menu_crud_m_description => $key_sql_select['lbl_azp_menu_crud_m_description'],
							d_azs_menu_crud_m_level => $key_sql_select['lbl_azp_menu_crud_m_level'],
							d_azs_menu_crud_m_status => $key_sql_select['lbl_azp_menu_crud_m_status'],
							d_azs_menu_crud_m_temp => $key_sql_select['lbl_azp_menu_crud_m_temp'],
							d_azs_menu_crud_t_api => strtolower($key_sql_select['lbl_azp_menu_crud_t_api']),
							d_azs_menu_crud_t_name => ucwords(strtolower($key_sql_select['lbl_azp_menu_crud_t_name'])),
							d_azs_menu_crud_t_script => strtolower($key_sql_select['lbl_azp_menu_crud_t_script']),
							d_azs_menu_crud_t_table_change => strtolower($key_sql_select['lbl_azp_menu_crud_t_table_change']),
							d_azs_menu_crud_t_table_main => strtolower($key_sql_select['lbl_azp_menu_crud_t_table_main']),
							d_azs_menu_crud_t_url => strtolower($key_sql_select['lbl_azp_menu_crud_t_url']),
							d_azs_menu_crud_u_application => $key_sql_select['lbl_azp_application_t_name'],
							d_azs_menu_crud_u_icon_code => $key_sql_select['lbl_azp_icon_code_t_name'],
							d_azs_menu_crud_u_table_prefix => $key_sql_select['lbl_azp_table_prefix_t_name'],
							d_azs_menu_crud_v_id_azp_menu_crud => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_menu_crud, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_menu_crud_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_menu_crud_m_date_modified => DATE_HOUR,
					d_azp_menu_crud_m_description => $empty_description,
					d_azp_menu_crud_m_status => $empty_state,
					d_azp_menu_crud_t_api => strtolower('api' . 'azp' . Strings::url_amigable_guion($empty_url) . '/'),
					d_azp_menu_crud_t_name => ucwords(strtolower($empty_name)),
					d_azp_menu_crud_t_script => strtolower($empty_script),
					d_azp_menu_crud_t_table_change => strtolower($empty_table_change),
					d_azp_menu_crud_t_table_main => strtolower($empty_table_main),
					d_azp_menu_crud_t_url => strtolower('azp' . Strings::url_amigable_guion($empty_url) . '/'),
					d_azp_menu_crud_v_id_azp_application => $empty_application,
					d_azp_menu_crud_v_id_azp_icon_code => $empty_icon_code,
					d_azp_menu_crud_v_id_azp_table_prefix => $empty_table_prefix,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_menu_crud, $var_array, d_azp_menu_crud_id_azp_menu_crud . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_application() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_application, d_azp_application_m_deleted . " = '1' AND " . d_azp_application_m_status . " = '1' ORDER BY " . d_azp_application_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_icon_code() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_icon_code, d_azp_icon_code_m_deleted . " = '1' AND " . d_azp_icon_code_m_status . " = '1' AND " . d_azp_icon_code_v_id_azp_icon_category . " = '2' ORDER BY " . d_azp_icon_code_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_table_prefix() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_table_prefix, d_azp_table_prefix_m_deleted . " = '1' AND " . d_azp_table_prefix_m_status . " = '1' ORDER BY " . d_azp_table_prefix_t_name . " ASC");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>