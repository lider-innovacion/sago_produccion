<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_modal_codeModel extends Models implements OCREND {
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
					tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . " AS 'lbl_azp_modal_code_id_azp_modal_code',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_modal_code." . d_azp_modal_code_m_date_created . " AS 'lbl_azp_modal_code_m_date_created',
					tc_azp_modal_code." . d_azp_modal_code_m_date_modified . " AS 'lbl_azp_modal_code_m_date_modified',
					tc_azp_modal_code." . d_azp_modal_code_m_description . " AS 'lbl_azp_modal_code_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_modal_code." . d_azp_modal_code_t_name . " AS 'lbl_azp_modal_code_t_name',
					tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_azp_modal_code_t_text',
					tc_azp_modal_category." . d_azp_modal_category_t_name . " AS 'lbl_azp_modal_category_t_name'
				FROM " . t_azp_modal_code . " tc_azp_modal_code
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_modal_code." . d_azp_modal_code_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_modal_code." . d_azp_modal_code_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_modal_code." . d_azp_modal_code_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_modal_code." . d_azp_modal_code_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_modal_category . " tc_azp_modal_category
					ON tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . "
						= tc_azp_modal_category." . d_azp_modal_category_id_azp_modal_category . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_modal_code." . d_azp_modal_code_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_modal_code." . d_azp_modal_code_m_deleted . " = '1'
				ORDER BY tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_modal_code." . d_azs_modal_code_id_azs_modal_code . " AS 'lbl_azs_modal_code_id_azs_modal_code',
					tc_azs_modal_code." . d_azs_modal_code_m_date_modified . " AS 'lbl_azs_modal_code_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_modal_code." . d_azs_modal_code_m_date_created . " AS 'lbl_azs_modal_code_m_date_created',
					tc_azs_modal_code." . d_azs_modal_code_m_date_modified . " AS 'lbl_azs_modal_code_m_date_modified',
					tc_azs_modal_code." . d_azs_modal_code_m_description . " AS 'lbl_azs_modal_code_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_modal_code." . d_azs_modal_code_t_name . " AS 'lbl_azs_modal_code_t_name',
					tc_azs_modal_code." . d_azs_modal_code_t_text . " AS 'lbl_azs_modal_code_t_text',
					tc_azs_modal_code." . d_azs_modal_code_u_modal_category . " AS 'lbl_azs_modal_code_u_modal_category'
				FROM " . t_azs_modal_code . " tc_azs_modal_code
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_modal_code." . d_azs_modal_code_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_modal_code." . d_azs_modal_code_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_modal_code." . d_azs_modal_code_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_modal_code." . d_azs_modal_code_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_modal_code." . d_azs_modal_code_v_id_azp_modal_code . " = '" . $this->id . "'
				ORDER BY tc_azs_modal_code." . d_azs_modal_code_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_modal_code . "
				WHERE " . d_azp_modal_code_id_azp_modal_code . " = '" . $this->id . "'
					AND " . d_azp_modal_code_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_modal_code);
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
					tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . " AS 'lbl_azp_modal_code_id_azp_modal_code',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_modal_code." . d_azp_modal_code_m_date_created . " AS 'lbl_azp_modal_code_m_date_created',
					tc_azp_modal_code." . d_azp_modal_code_m_date_modified . " AS 'lbl_azp_modal_code_m_date_modified',
					tc_azp_modal_code." . d_azp_modal_code_m_description . " AS 'lbl_azp_modal_code_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_modal_code." . d_azp_modal_code_t_name . " AS 'lbl_azp_modal_code_t_name',
					tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_azp_modal_code_t_text',
					tc_azp_modal_category." . d_azp_modal_category_t_name . " AS 'lbl_azp_modal_category_t_name'
				FROM " . t_azp_modal_code . " tc_azp_modal_code
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_modal_code." . d_azp_modal_code_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_modal_code." . d_azp_modal_code_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_modal_code." . d_azp_modal_code_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_modal_code." . d_azp_modal_code_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_modal_category . " tc_azp_modal_category
					ON tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . "
						= tc_azp_modal_category." . d_azp_modal_category_id_azp_modal_category . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . " = '" . $this->id . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . " AS 'lbl_azp_modal_code_id_azp_modal_code',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_modal_code." . d_azp_modal_code_m_date_created . " AS 'lbl_azp_modal_code_m_date_created',
					tc_azp_modal_code." . d_azp_modal_code_m_date_modified . " AS 'lbl_azp_modal_code_m_date_modified',
					tc_azp_modal_code." . d_azp_modal_code_m_description . " AS 'lbl_azp_modal_code_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_modal_code." . d_azp_modal_code_t_name . " AS 'lbl_azp_modal_code_t_name',
					tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_azp_modal_code_t_text',
					tc_azp_modal_category." . d_azp_modal_category_t_name . " AS 'lbl_azp_modal_category_t_name'
				FROM " . t_azp_modal_code . " tc_azp_modal_code
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_modal_code." . d_azp_modal_code_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_modal_code." . d_azp_modal_code_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_modal_code." . d_azp_modal_code_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_modal_code." . d_azp_modal_code_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_modal_category . " tc_azp_modal_category
					ON tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . "
						= tc_azp_modal_category." . d_azp_modal_category_id_azp_modal_category . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_modal_code." . d_azp_modal_code_m_deleted . " = '3'
				ORDER BY tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . " AS 'lbl_azp_modal_code_id_azp_modal_code',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_modal_code." . d_azp_modal_code_m_date_created . " AS 'lbl_azp_modal_code_m_date_created',
					tc_azp_modal_code." . d_azp_modal_code_m_date_modified . " AS 'lbl_azp_modal_code_m_date_modified',
					tc_azp_modal_code." . d_azp_modal_code_m_description . " AS 'lbl_azp_modal_code_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_modal_code." . d_azp_modal_code_t_name . " AS 'lbl_azp_modal_code_t_name',
					tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_azp_modal_code_t_text',
					tc_azp_modal_category." . d_azp_modal_category_t_name . " AS 'lbl_azp_modal_category_t_name'
				FROM " . t_azp_modal_code . " tc_azp_modal_code
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_modal_code." . d_azp_modal_code_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_modal_code." . d_azp_modal_code_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_modal_code." . d_azp_modal_code_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_modal_code." . d_azp_modal_code_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_modal_category . " tc_azp_modal_category
					ON tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . "
						= tc_azp_modal_category." . d_azp_modal_category_id_azp_modal_category . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_modal_code." . d_azp_modal_code_m_deleted . " = '1'
				ORDER BY tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . " AS 'lbl_azp_modal_code_id_azp_modal_code',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_modal_code." . d_azp_modal_code_m_date_created . " AS 'lbl_azp_modal_code_m_date_created',
					tc_azp_modal_code." . d_azp_modal_code_m_date_modified . " AS 'lbl_azp_modal_code_m_date_modified',
					tc_azp_modal_code." . d_azp_modal_code_m_description . " AS 'lbl_azp_modal_code_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_modal_code." . d_azp_modal_code_t_name . " AS 'lbl_azp_modal_code_t_name',
					tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_azp_modal_code_t_text',
					tc_azp_modal_category." . d_azp_modal_category_t_name . " AS 'lbl_azp_modal_category_t_name'
				FROM " . t_azp_modal_code . " tc_azp_modal_code
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_modal_code." . d_azp_modal_code_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_modal_code." . d_azp_modal_code_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_modal_code." . d_azp_modal_code_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_modal_code." . d_azp_modal_code_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_modal_category . " tc_azp_modal_category
					ON tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . "
						= tc_azp_modal_category." . d_azp_modal_category_id_azp_modal_category . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_modal_code." . d_azp_modal_code_m_deleted . " = '2'
				ORDER BY tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . " AS 'lbl_azp_modal_code_id_azp_modal_code',
					tc_azp_modal_code." . d_azp_modal_code_m_by_created . " AS 'lbl_azp_modal_code_m_by_created',
					tc_azp_modal_code." . d_azp_modal_code_m_by_modified . " AS 'lbl_azp_modal_code_m_by_modified',
					tc_azp_modal_code." . d_azp_modal_code_m_date_created . " AS 'lbl_azp_modal_code_m_date_created',
					tc_azp_modal_code." . d_azp_modal_code_m_date_modified . " AS 'lbl_azp_modal_code_m_date_modified',
					tc_azp_modal_code." . d_azp_modal_code_m_description . " AS 'lbl_azp_modal_code_m_description',
					tc_azp_modal_code." . d_azp_modal_code_m_level . " AS 'lbl_azp_modal_code_m_level',
					tc_azp_modal_code." . d_azp_modal_code_m_status . " AS 'lbl_azp_modal_code_m_status',
					tc_azp_modal_code." . d_azp_modal_code_t_name . " AS 'lbl_azp_modal_code_t_name',
					tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_azp_modal_code_t_text',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_azp_modal_code_v_id_azp_modal_category'
				FROM " . t_azp_modal_code . " tc_azp_modal_code
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_modal_code." . d_azp_modal_code_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_modal_code." . d_azp_modal_code_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_modal_code." . d_azp_modal_code_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_modal_code." . d_azp_modal_code_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . " = '" . $this->id . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_modal_code_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "' AND " . d_azp_modal_code_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "' AND " . d_azp_modal_code_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_modal_code_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "' AND " . d_azp_modal_code_m_level . " = '2'");
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
		final public function sql_azp_modal_code_delete(array $data) : array {
			$var_error = $this->error_sql_azp_modal_code_delete($data);
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
				$var_array = array(d_azp_modal_code_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_modal_code, $var_array, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_modal_code_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_text'])) { throw new Exception('<b>Error:</b> El campo de texto esta prohibido modificar.'); }
				if (!isset($data['field_cr_modal_category'])) { throw new Exception('<b>Error:</b> El campo de categoria esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_name = $this->db->scape($data['field_cr_name']);
				$empty_text = $this->db->scape($data['field_cr_text']);
				$empty_modal_category = $this->db->scape($data['field_cr_modal_category']);
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
				if (Func::emp($empty_text)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de texto es oblgitario.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_text)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de texto solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_text) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de texto permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_text, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de texto no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_text)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de texto no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_modal_category) || strtolower($empty_modal_category) == strtolower('seleccionar') || $empty_modal_category == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de categoria es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_modal_category)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de categoria solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_name = $this->db->select(d_azp_modal_code_t_name, t_azp_modal_code, d_azp_modal_code_t_name . " = '" . $empty_name . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_name) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_name[0][0]) == strtolower($empty_name)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El nombre digitado <b>' . strtolower($empty_name) . '</b> ya existe registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_text = $this->db->select(d_azp_modal_code_t_text, t_azp_modal_code, d_azp_modal_code_t_text . " = '" . $empty_text . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_text) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_text[0][0]) == strtolower($empty_text)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El texto digitado <b>' . strtolower($empty_text) . '</b> ya existe registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_modal_category = $this->db->select('*', t_azp_modal_category, d_azp_modal_category_id_azp_modal_category . " = '" . $empty_modal_category . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_modal_category) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_modal_category) == '') { $sql_modal_category[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_modal_category[0][0]) != strtolower($empty_modal_category)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La categoria seleccionada no se encuentra registrada.');
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
		final public function sql_azp_modal_code_insert(array $data) : array {
			$var_error = $this->error_sql_azp_modal_code_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_name = $this->db->scape($data['field_cr_name']);
				$empty_text = $this->db->scape($data['field_cr_text']);
				$empty_modal_category = $this->db->scape($data['field_cr_modal_category']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_modal_code_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_modal_code_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_modal_code_m_date_created => DATE_HOUR,
					d_azp_modal_code_m_date_modified => DATE_HOUR,
					d_azp_modal_code_m_deleted => '1',
					d_azp_modal_code_m_description => $empty_description,
					d_azp_modal_code_m_level => '1',
					d_azp_modal_code_m_status => '1',
					d_azp_modal_code_m_temp => '1',
					d_azp_modal_code_t_name => $empty_name,
					d_azp_modal_code_t_text => strtolower($empty_text),
					d_azp_modal_code_v_id_azp_modal_category => $empty_modal_category,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_modal_code, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_modal_code_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "' AND " . d_azp_modal_code_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "' AND " . d_azp_modal_code_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_modal_code_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "' AND " . d_azp_modal_code_m_level . " = '2'");
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
		final public function sql_azp_modal_code_remove(array $data) : array {
			$var_error = $this->error_sql_azp_modal_code_remove($data);
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
				$var_array = array(d_azp_modal_code_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_modal_code, $var_array, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_modal_code_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "' AND " . d_azp_modal_code_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "' AND " . d_azp_modal_code_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_modal_code_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "' AND " . d_azp_modal_code_m_level . " = '2'");
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
		final public function sql_azp_modal_code_restore(array $data) : array {
			$var_error = $this->error_sql_azp_modal_code_restore($data);
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
				$var_array = array(d_azp_modal_code_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_modal_code, $var_array, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_modal_code_update(array $data) {
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
				if (!isset($data['field_up_text'])) { throw new Exception('<b>Error:</b> El campo de texto esta prohibido modificar.'); }
				if (!isset($data['field_up_modal_category'])) { throw new Exception('<b>Error:</b> El campo de categoria esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_name = $this->db->scape($data['field_up_name']);
				$empty_text = $this->db->scape($data['field_up_text']);
				$empty_modal_category = $this->db->scape($data['field_up_modal_category']);
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
				if (Func::emp($empty_text)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de texto es oblgitario.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_text)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de texto solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_text) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de texto permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_text, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de texto no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_text)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de texto no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_modal_category) || strtolower($empty_modal_category) == strtolower('seleccionar') || $empty_modal_category == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de categoria es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_modal_category)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de categoria solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "' AND " . d_azp_modal_code_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_modal_code_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "' AND " . d_azp_modal_code_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_name = $this->db->select(d_azp_modal_code_t_name, t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " != '" . $empty_id . "' AND " . d_azp_modal_code_t_name . " = '" . $empty_name . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_name) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_name[0][0]) == strtolower($empty_name)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El nombre digitado <b>' . strtolower($empty_name) . '</b> ya existe registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_text = $this->db->select(d_azp_modal_code_t_text, t_azp_modal_code, d_azp_modal_code_id_azp_modal_code . " != '" . $empty_id . "' AND " . d_azp_modal_code_t_text . " = '" . $empty_text . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_text) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_text[0][0]) == strtolower($empty_text)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El texto digitado <b>' . strtolower($empty_text) . '</b> ya existe registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_modal_category = $this->db->select('*', t_azp_modal_category, d_azp_modal_category_id_azp_modal_category . " = '" . $empty_modal_category . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_modal_category) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_modal_category) == '') { $sql_modal_category[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_modal_category[0][0]) != strtolower($empty_modal_category)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El icono seleccionado no se encuentra registrado.');
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
		final public function sql_azp_modal_code_update(array $data) : array {
			$var_error = $this->error_sql_azp_modal_code_update($data);
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
				$empty_text = $this->db->scape($data['field_up_text']);
				$empty_modal_category = $this->db->scape($data['field_up_modal_category']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->query("
					-- ---------------------------------------------------------------
					SELECT
						tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . " AS 'lbl_azp_modal_code_id_azp_modal_code',
						tc_azp_modal_code." . d_azp_modal_code_m_deleted . " AS 'lbl_azp_modal_code_m_deleted',
						tc_azp_modal_code." . d_azp_modal_code_m_description . " AS 'lbl_azp_modal_code_m_description',
						tc_azp_modal_code." . d_azp_modal_code_m_level . " AS 'lbl_azp_modal_code_m_level',
						tc_azp_modal_code." . d_azp_modal_code_m_status . " AS 'lbl_azp_modal_code_m_status',
						tc_azp_modal_code." . d_azp_modal_code_m_temp . " AS 'lbl_azp_modal_code_m_temp',
						tc_azp_modal_code." . d_azp_modal_code_t_name . " AS 'lbl_azp_modal_code_t_name',
						tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_azp_modal_code_t_text',
						tc_azp_modal_category." . d_azp_modal_category_t_name . " AS 'lbl_azp_modal_category_t_name'
					FROM " . t_azp_modal_code . " tc_azp_modal_code
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_modal_category . " tc_azp_modal_category
						ON tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . "
							= tc_azp_modal_category." . d_azp_modal_category_id_azp_modal_category . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "'
					LIMIT 1
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_modal_code_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_modal_code_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_modal_code_m_date_created => DATE_HOUR,
							d_azs_modal_code_m_date_modified => DATE_HOUR,
							d_azs_modal_code_m_deleted => $key_sql_select['lbl_azp_modal_code_m_deleted'],
							d_azs_modal_code_m_description => $key_sql_select['lbl_azp_modal_code_m_description'],
							d_azs_modal_code_m_level => $key_sql_select['lbl_azp_modal_code_m_level'],
							d_azs_modal_code_m_status => $key_sql_select['lbl_azp_modal_code_m_status'],
							d_azs_modal_code_m_temp => $key_sql_select['lbl_azp_modal_code_m_temp'],
							d_azs_modal_code_t_name => $key_sql_select['lbl_azp_modal_code_t_name'],
							d_azs_modal_code_t_text => strtolower($key_sql_select['lbl_azp_modal_code_t_text']),
							d_azs_modal_code_u_modal_category => ucwords(strtolower($key_sql_select['lbl_azp_modal_category_t_name'])),
							d_azs_modal_code_v_id_azp_modal_code => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_modal_code, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_modal_code_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_modal_code_m_date_modified => DATE_HOUR,
					d_azp_modal_code_m_description => $empty_description,
					d_azp_modal_code_m_status => $empty_state,
					d_azp_modal_code_t_name => $empty_name,
					d_azp_modal_code_t_text => strtolower($empty_text),
					d_azp_modal_code_v_id_azp_modal_category => $empty_modal_category,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_modal_code, $var_array, d_azp_modal_code_id_azp_modal_code . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_modal_category() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_modal_category, d_azp_modal_category_m_deleted . " = '1' AND " . d_azp_modal_category_m_status . " = '1' ORDER BY " . d_azp_modal_category_t_name . " ASC");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>