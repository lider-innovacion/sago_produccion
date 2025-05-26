<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_ibn_conditionalModel extends Models implements OCREND {
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
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name',
					tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . " AS 'lbl_azp_ibn_table_field_t_label'
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
				INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_type_condition . "
						= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_table_field . " tc_azp_ibn_table_field
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_land . "
						= tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_deleted . " = '1'
				ORDER BY tc_azp_ibn_conditional." . d_azp_ibn_conditional_id_azp_ibn_conditional . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_ibn_conditional." . d_azs_ibn_conditional_id_azs_ibn_conditional . " AS 'lbl_azs_ibn_conditional_id_azs_ibn_conditional',
					tc_azs_ibn_conditional." . d_azs_ibn_conditional_m_date_modified . " AS 'lbl_azs_ibn_conditional_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_ibn_conditional." . d_azs_ibn_conditional_m_date_created . " AS 'lbl_azs_ibn_conditional_m_date_created',
					tc_azs_ibn_conditional." . d_azs_ibn_conditional_m_date_modified . " AS 'lbl_azs_ibn_conditional_m_date_modified',
					tc_azs_ibn_conditional." . d_azs_ibn_conditional_m_description . " AS 'lbl_azs_ibn_conditional_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_ibn_conditional." . d_azs_ibn_conditional_t_operator . " AS 'lbl_azs_ibn_conditional_t_operator',
					tc_azs_ibn_conditional." . d_azs_ibn_conditional_t_result . " AS 'lbl_azs_ibn_conditional_t_result',
					tc_azs_ibn_conditional." . d_azs_ibn_conditional_t_value . " AS 'lbl_azs_ibn_conditional_t_value',
					tc_azs_ibn_conditional." . d_azs_ibn_conditional_u_ibn_module . " AS 'lbl_azs_ibn_conditional_u_ibn_module',
					tc_azs_ibn_conditional." . d_azs_ibn_conditional_u_ibn_type_condition . " AS 'lbl_azs_ibn_conditional_u_ibn_type_condition'
				FROM " . t_azs_ibn_conditional . " tc_azs_ibn_conditional
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_ibn_conditional." . d_azs_ibn_conditional_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_ibn_conditional." . d_azs_ibn_conditional_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_ibn_conditional." . d_azs_ibn_conditional_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_ibn_conditional." . d_azs_ibn_conditional_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_ibn_conditional." . d_azs_ibn_conditional_v_id_azp_ibn_conditional . " = '" . $this->id . "'
				ORDER BY tc_azs_ibn_conditional." . d_azs_ibn_conditional_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_ibn_conditional . "
				WHERE " . d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $this->id . "'
					AND " . d_azp_ibn_conditional_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_ibn_conditional);
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
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name',
					tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . " AS 'lbl_azp_ibn_table_field_t_label'
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
				INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_type_condition . "
						= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_table_field . " tc_azp_ibn_table_field
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_land . "
						= tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_conditional." . d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $this->id . "'
					AND tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
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
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name',
					tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . " AS 'lbl_azp_ibn_table_field_t_label'
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
				INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_type_condition . "
						= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_table_field . " tc_azp_ibn_table_field
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_land . "
						= tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_deleted . " = '3'
				ORDER BY tc_azp_ibn_conditional." . d_azp_ibn_conditional_id_azp_ibn_conditional . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
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
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name',
					tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . " AS 'lbl_azp_ibn_table_field_t_label'
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
				INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_type_condition . "
						= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_table_field . " tc_azp_ibn_table_field
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_land . "
						= tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_deleted . " = '1'
				ORDER BY tc_azp_ibn_conditional." . d_azp_ibn_conditional_id_azp_ibn_conditional . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
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
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name',
					tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . " AS 'lbl_azp_ibn_table_field_t_label'
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
				INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_type_condition . "
						= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_table_field . " tc_azp_ibn_table_field
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_land . "
						= tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_deleted . " = '2'
				ORDER BY tc_azp_ibn_conditional." . d_azp_ibn_conditional_id_azp_ibn_conditional . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_id_azp_ibn_conditional . " AS 'lbl_azp_ibn_conditional_id_azp_ibn_conditional',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_by_created . " AS 'lbl_azp_ibn_conditional_m_by_created',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_by_modified . " AS 'lbl_azp_ibn_conditional_m_by_modified',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_date_created . " AS 'lbl_azp_ibn_conditional_m_date_created',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_date_modified . " AS 'lbl_azp_ibn_conditional_m_date_modified',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_description . " AS 'lbl_azp_ibn_conditional_m_description',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_level . " AS 'lbl_azp_ibn_conditional_m_level',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_status . " AS 'lbl_azp_ibn_conditional_m_status',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_land . " AS 'lbl_azp_ibn_conditional_t_land',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_operator . " AS 'lbl_azp_ibn_conditional_t_operator',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_result . " AS 'lbl_azp_ibn_conditional_t_result',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_value . " AS 'lbl_azp_ibn_conditional_t_value',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_module . " AS 'lbl_azp_ibn_conditional_v_id_azp_ibn_module',
					tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_type_condition . " AS 'lbl_azp_ibn_conditional_v_id_azp_ibn_type_condition'
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
				INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_v_id_azp_ibn_type_condition . "
						= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_table_field . " tc_azp_ibn_table_field
					ON tc_azp_ibn_conditional." . d_azp_ibn_conditional_t_land . "
						= tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_conditional." . d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $this->id . "'
					AND tc_azp_ibn_conditional." . d_azp_ibn_conditional_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_ibn_conditional_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "' AND " . d_azp_ibn_conditional_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "' AND " . d_azp_ibn_conditional_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_conditional_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "' AND " . d_azp_ibn_conditional_m_level . " = '2'");
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
		final public function sql_azp_ibn_conditional_delete(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_conditional_delete($data);
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
				$var_array = array(d_azp_ibn_conditional_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_conditional, $var_array, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_ibn_conditional_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_land'])) { throw new Exception('<b>Error:</b> El campo de campo esta prohibido modificar.'); }
				if (!isset($data['field_cr_operator'])) { throw new Exception('<b>Error:</b> El campo de operador esta prohibido modificar.'); }
				if (!isset($data['field_cr_result'])) { throw new Exception('<b>Error:</b> El campo de resultado esta prohibido modificar.'); }
				if (!isset($data['field_cr_value'])) { throw new Exception('<b>Error:</b> El campo de valor esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_module'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_type_condition'])) { throw new Exception('<b>Error:</b> El campo de tipo condicional esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_land = $this->db->scape($data['field_cr_land']);
				$empty_operator = $this->db->scape($data['field_cr_operator']);
				$empty_result = $this->db->scape($data['field_cr_result']);
				$empty_value = $this->db->scape($data['field_cr_value']);
				$empty_ibn_module = $this->db->scape($data['field_cr_ibn_module']);
				$empty_ibn_type_condition = $this->db->scape($data['field_cr_ibn_type_condition']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_operator)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de operador es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_operator)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de operador solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_operator) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de operador permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_operator, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de operador no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_operator)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de operador no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_result)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado es obligatorio.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_result)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_result) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_result, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_result)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_value) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_value, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_land) || strtolower($empty_land) == strtolower('seleccionar') || $empty_land == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de campo es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_land)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de campo solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_module) || strtolower($empty_ibn_module) == strtolower('seleccionar') || $empty_ibn_module == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de modulo es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_module)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de modulo solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_type_condition) || strtolower($empty_ibn_type_condition) == strtolower('seleccionar') || $empty_ibn_type_condition == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo condicional es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_type_condition)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo condicional solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_module = $this->db->select('*', t_azp_ibn_module, d_azp_ibn_module_id_azp_ibn_module . " = '" . $empty_ibn_module . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_module) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_module) == '') { $sql_ibn_module[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_module[0][0]) != strtolower($empty_ibn_module)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El modulo seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_type_condition = $this->db->select('*', t_azp_ibn_type_condition, d_azp_ibn_type_condition_id_azp_ibn_type_condition . " = '" . $empty_ibn_type_condition . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_type_condition) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_type_condition) == '') { $sql_ibn_type_condition[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_type_condition[0][0]) != strtolower($empty_ibn_type_condition)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo condicional seleccionado no se encuentra registrado.');
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
		final public function sql_azp_ibn_conditional_insert(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_conditional_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_land = $this->db->scape($data['field_cr_land']);
				$empty_operator = $this->db->scape($data['field_cr_operator']);
				$empty_result = $this->db->scape($data['field_cr_result']);
				$empty_value = $this->db->scape($data['field_cr_value']);
				$empty_ibn_module = $this->db->scape($data['field_cr_ibn_module']);
				$empty_ibn_type_condition = $this->db->scape($data['field_cr_ibn_type_condition']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_conditional_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_ibn_conditional_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_conditional_m_date_created => DATE_HOUR,
					d_azp_ibn_conditional_m_date_modified => DATE_HOUR,
					d_azp_ibn_conditional_m_deleted => '1',
					d_azp_ibn_conditional_m_description => $empty_description,
					d_azp_ibn_conditional_m_level => '2',
					d_azp_ibn_conditional_m_status => '1',
					d_azp_ibn_conditional_m_temp => '2',
					d_azp_ibn_conditional_t_land => strtoupper($empty_land),
					d_azp_ibn_conditional_t_operator => strtoupper($empty_operator),
					d_azp_ibn_conditional_t_result => strtoupper($empty_result),
					d_azp_ibn_conditional_t_value => strtoupper($empty_value),
					d_azp_ibn_conditional_v_id_azp_ibn_module => $empty_ibn_module,
					d_azp_ibn_conditional_v_id_azp_ibn_type_condition => $empty_ibn_type_condition,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_ibn_conditional, $var_array);
				#-------------------------------------------------------------------------#
				# Query Sql: Ejecutar codigo sql en la base de datos
				$var_sql_cn = $this->db->select('*', t_azp_ibn_conditional,
					d_azp_ibn_conditional_m_temp . " = '2' AND " .
					d_azp_ibn_conditional_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_cn) {
					# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
					foreach ($var_sql_cn as $key_cn):
						# Query Sql: Ejecutar codigo sql en la base de datos
						$var_sql_cl = $this->db->select('*', t_azp_ibn_client);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (false != $var_sql_cl) {
							# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
							foreach ($var_sql_cl as $key_cl):
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
				# Linea de codigo con una variable y array para seleccionar los datos y asignarlo uno a uno
				$var_array = array(d_azp_ibn_conditional_m_temp => '1');
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_conditional, $var_array, d_azp_ibn_conditional_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_conditional_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "' AND " . d_azp_ibn_conditional_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "' AND " . d_azp_ibn_conditional_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_conditional_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "' AND " . d_azp_ibn_conditional_m_level . " = '2'");
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
		final public function sql_azp_ibn_conditional_remove(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_conditional_remove($data);
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
				$var_array = array(d_azp_ibn_conditional_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_conditional, $var_array, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_conditional_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "' AND " . d_azp_ibn_conditional_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "' AND " . d_azp_ibn_conditional_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_conditional_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "' AND " . d_azp_ibn_conditional_m_level . " = '2'");
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
		final public function sql_azp_ibn_conditional_restore(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_conditional_restore($data);
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
				$var_array = array(d_azp_ibn_conditional_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_conditional, $var_array, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_conditional_update(array $data) {
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
				if (!isset($data['field_up_land'])) { throw new Exception('<b>Error:</b> El campo de campo esta prohibido modificar.'); }
				if (!isset($data['field_up_operator'])) { throw new Exception('<b>Error:</b> El campo de operador esta prohibido modificar.'); }
				if (!isset($data['field_up_result'])) { throw new Exception('<b>Error:</b> El campo de operador esta prohibido modificar.'); }
				if (!isset($data['field_up_value'])) { throw new Exception('<b>Error:</b> El campo de resultado esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_module'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_type_condition'])) { throw new Exception('<b>Error:</b> El campo de tipo condicional esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_land = $this->db->scape($data['field_up_land']);
				$empty_operator = $this->db->scape($data['field_up_operator']);
				$empty_result = $this->db->scape($data['field_up_result']);
				$empty_value = $this->db->scape($data['field_up_value']);
				$empty_ibn_module = $this->db->scape($data['field_up_ibn_module']);
				$empty_ibn_type_condition = $this->db->scape($data['field_up_ibn_type_condition']);
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
				if (Func::emp($empty_operator)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de operador es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_operator)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de operador solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_operator) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de operador permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_operator, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de operador no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_operator)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de operador no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_result)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado es obligatorio.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_result)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_result) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_result, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_result)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_value) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_value, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_land) || strtolower($empty_land) == strtolower('seleccionar') || $empty_land == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de campo es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_land)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de campo solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_module) || strtolower($empty_ibn_module) == strtolower('seleccionar') || $empty_ibn_module == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de modulo es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_module)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de modulo solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_type_condition) || strtolower($empty_ibn_type_condition) == strtolower('seleccionar') || $empty_ibn_type_condition == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo condicional es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_type_condition)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo condicional solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "' AND " . d_azp_ibn_conditional_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_conditional_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "' AND " . d_azp_ibn_conditional_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_module = $this->db->select('*', t_azp_ibn_module, d_azp_ibn_module_id_azp_ibn_module . " = '" . $empty_ibn_module . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_module) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_module) == '') { $sql_ibn_module[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_module[0][0]) != strtolower($empty_ibn_module)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El modulo seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_type_condition = $this->db->select('*', t_azp_ibn_type_condition, d_azp_ibn_type_condition_id_azp_ibn_type_condition . " = '" . $empty_ibn_type_condition . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_type_condition) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_type_condition) == '') { $sql_ibn_type_condition[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_type_condition[0][0]) != strtolower($empty_ibn_type_condition)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo condicional seleccionado no se encuentra registrado.');
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
		final public function sql_azp_ibn_conditional_update(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_conditional_update($data);
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
				$empty_land = $this->db->scape($data['field_up_land']);
				$empty_operator = $this->db->scape($data['field_up_operator']);
				$empty_result = $this->db->scape($data['field_up_result']);
				$empty_value = $this->db->scape($data['field_up_value']);
				$empty_ibn_module = $this->db->scape($data['field_up_ibn_module']);
				$empty_ibn_type_condition = $this->db->scape($data['field_up_ibn_type_condition']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_ibn_conditional, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_ibn_conditional_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_ibn_conditional_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_ibn_conditional_m_date_created => DATE_HOUR,
							d_azs_ibn_conditional_m_date_modified => DATE_HOUR,
							d_azs_ibn_conditional_m_deleted => $key_sql_select[d_azp_ibn_conditional_m_deleted],
							d_azs_ibn_conditional_m_description => $key_sql_select[d_azp_ibn_conditional_m_description],
							d_azs_ibn_conditional_m_level => $key_sql_select[d_azp_ibn_conditional_m_level],
							d_azs_ibn_conditional_m_status => $key_sql_select[d_azp_ibn_conditional_m_status],
							d_azs_ibn_conditional_m_temp => $key_sql_select[d_azp_ibn_conditional_m_temp],
							d_azs_ibn_conditional_t_land => strtoupper($key_sql_select[d_azp_ibn_conditional_t_land]),
							d_azs_ibn_conditional_t_operator => strtoupper($key_sql_select[d_azp_ibn_conditional_t_operator]),
							d_azs_ibn_conditional_t_result => strtoupper($key_sql_select[d_azp_ibn_conditional_t_result]),
							d_azs_ibn_conditional_t_value => strtoupper($key_sql_select[d_azp_ibn_conditional_t_value]),
							d_azs_ibn_conditional_u_ibn_module => strtoupper($key_sql_select[d_azp_ibn_conditional_v_id_azp_ibn_module]),
							d_azs_ibn_conditional_u_ibn_type_condition => strtoupper($key_sql_select[d_azp_ibn_conditional_v_id_azp_ibn_type_condition]),
							d_azs_ibn_conditional_v_id_azp_ibn_conditional => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_ibn_conditional, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_conditional_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_conditional_m_date_modified => DATE_HOUR,
					d_azp_ibn_conditional_m_description => $empty_description,
					d_azp_ibn_conditional_m_status => $empty_state,
					d_azp_ibn_conditional_t_land => strtoupper($empty_land),
					d_azp_ibn_conditional_t_operator => strtoupper($empty_operator),
					d_azp_ibn_conditional_t_result => strtoupper($empty_result),
					d_azp_ibn_conditional_t_value => strtoupper($empty_value),
					d_azp_ibn_conditional_v_id_azp_ibn_module => $empty_ibn_module,
					d_azp_ibn_conditional_v_id_azp_ibn_type_condition => $empty_ibn_type_condition,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_conditional, $var_array, d_azp_ibn_conditional_id_azp_ibn_conditional . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_module() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_module, d_azp_ibn_module_m_deleted . " = '1' AND " . d_azp_ibn_module_m_status . " = '1' ORDER BY " . d_azp_ibn_module_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_type_condition() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_condition, d_azp_ibn_type_condition_m_deleted . " = '1' AND " . d_azp_ibn_type_condition_m_status . " = '1' ORDER BY " . d_azp_ibn_type_condition_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function get_sql_azp_ibn_table_field_rd() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . " AS 'lbl_azp_ibn_table_field_id_azp_ibn_table_field',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_date_created . " AS 'lbl_azp_ibn_table_field_m_date_created',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_date_modified . " AS 'lbl_azp_ibn_table_field_m_date_modified',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_description . " AS 'lbl_azp_ibn_table_field_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_define . " AS 'lbl_azp_ibn_table_field_t_define',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . " AS 'lbl_azp_ibn_table_field_t_label',
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
				FROM " . t_azp_ibn_table_field . " tc_azp_ibn_table_field
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_table_field." . d_azp_ibn_table_field_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_deleted . " = '1'
					AND tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_status . " = '1'
					AND tc_azp_ibn_table_field." . d_azp_ibn_table_field_v_id_azp_ibn_module . " = '" . $this->id . "'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function get_sql_azp_ibn_table_field_up() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . " AS 'lbl_azp_ibn_table_field_id_azp_ibn_table_field',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_date_created . " AS 'lbl_azp_ibn_table_field_m_date_created',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_date_modified . " AS 'lbl_azp_ibn_table_field_m_date_modified',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_description . " AS 'lbl_azp_ibn_table_field_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_define . " AS 'lbl_azp_ibn_table_field_t_define',
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . " AS 'lbl_azp_ibn_table_field_t_label',
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
				FROM " . t_azp_ibn_table_field . " tc_azp_ibn_table_field
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_table_field." . d_azp_ibn_table_field_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_deleted . " = '1'
					AND tc_azp_ibn_table_field." . d_azp_ibn_table_field_m_status . " = '1'
					AND tc_azp_ibn_table_field." . d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $this->id . "'
			");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>