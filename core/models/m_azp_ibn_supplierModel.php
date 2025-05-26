<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_ibn_supplierModel extends Models implements OCREND {
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
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_id_azp_ibn_supplier . " AS 'lbl_azp_ibn_supplier_id_azp_ibn_supplier',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_date_created . " AS 'lbl_azp_ibn_supplier_m_date_created',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_date_modified . " AS 'lbl_azp_ibn_supplier_m_date_modified',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_description . " AS 'lbl_azp_ibn_supplier_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_email . " AS 'lbl_azp_ibn_supplier_t_email',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_names . " AS 'lbl_azp_ibn_supplier_t_names',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_surnames . " AS 'lbl_azp_ibn_supplier_t_surnames',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_phone_movil . " AS 'lbl_azp_ibn_supplier_t_phone_movil'
				FROM " . t_azp_ibn_supplier . " tc_azp_ibn_supplier
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_deleted . " = '1'
				ORDER BY tc_azp_ibn_supplier." . d_azp_ibn_supplier_id_azp_ibn_supplier . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_ibn_supplier." . d_azs_ibn_supplier_id_azs_ibn_supplier . " AS 'lbl_azs_ibn_supplier_id_azs_ibn_supplier',
					tc_azs_ibn_supplier." . d_azs_ibn_supplier_m_date_modified . " AS 'lbl_azs_ibn_supplier_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_ibn_supplier." . d_azs_ibn_supplier_m_date_created . " AS 'lbl_azs_ibn_supplier_m_date_created',
					tc_azs_ibn_supplier." . d_azs_ibn_supplier_m_date_modified . " AS 'lbl_azs_ibn_supplier_m_date_modified',
					tc_azs_ibn_supplier." . d_azs_ibn_supplier_m_description . " AS 'lbl_azs_ibn_supplier_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_ibn_supplier." . d_azs_ibn_supplier_t_email . " AS 'lbl_azs_ibn_supplier_t_email',
					tc_azs_ibn_supplier." . d_azs_ibn_supplier_t_names . " AS 'lbl_azs_ibn_supplier_t_names',
					tc_azs_ibn_supplier." . d_azs_ibn_supplier_t_surnames . " AS 'lbl_azs_ibn_supplier_t_surnames',
					tc_azs_ibn_supplier." . d_azs_ibn_supplier_t_phone_movil . " AS 'lbl_azs_ibn_supplier_t_phone_movil'
				FROM " . t_azs_ibn_supplier . " tc_azs_ibn_supplier
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_ibn_supplier." . d_azs_ibn_supplier_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_ibn_supplier." . d_azs_ibn_supplier_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_ibn_supplier." . d_azs_ibn_supplier_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_ibn_supplier." . d_azs_ibn_supplier_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_ibn_supplier." . d_azs_ibn_supplier_v_id_azp_ibn_supplier . " = '" . $this->id . "'
				ORDER BY tc_azs_ibn_supplier." . d_azs_ibn_supplier_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_ibn_supplier . "
				WHERE " . d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $this->id . "'
					AND " . d_azp_ibn_supplier_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_ibn_supplier);
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
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_id_azp_ibn_supplier . " AS 'lbl_azp_ibn_supplier_id_azp_ibn_supplier',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_date_created . " AS 'lbl_azp_ibn_supplier_m_date_created',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_date_modified . " AS 'lbl_azp_ibn_supplier_m_date_modified',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_description . " AS 'lbl_azp_ibn_supplier_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_email . " AS 'lbl_azp_ibn_supplier_t_email',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_names . " AS 'lbl_azp_ibn_supplier_t_names',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_surnames . " AS 'lbl_azp_ibn_supplier_t_surnames',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_phone_movil . " AS 'lbl_azp_ibn_supplier_t_phone_movil'
				FROM " . t_azp_ibn_supplier . " tc_azp_ibn_supplier
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_supplier." . d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $this->id . "'
					AND tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_id_azp_ibn_supplier . " AS 'lbl_azp_ibn_supplier_id_azp_ibn_supplier',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_date_created . " AS 'lbl_azp_ibn_supplier_m_date_created',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_date_modified . " AS 'lbl_azp_ibn_supplier_m_date_modified',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_description . " AS 'lbl_azp_ibn_supplier_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_email . " AS 'lbl_azp_ibn_supplier_t_email',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_names . " AS 'lbl_azp_ibn_supplier_t_names',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_surnames . " AS 'lbl_azp_ibn_supplier_t_surnames',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_phone_movil . " AS 'lbl_azp_ibn_supplier_t_phone_movil'
				FROM " . t_azp_ibn_supplier . " tc_azp_ibn_supplier
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_deleted . " = '3'
				ORDER BY tc_azp_ibn_supplier." . d_azp_ibn_supplier_id_azp_ibn_supplier . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_id_azp_ibn_supplier . " AS 'lbl_azp_ibn_supplier_id_azp_ibn_supplier',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_date_created . " AS 'lbl_azp_ibn_supplier_m_date_created',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_date_modified . " AS 'lbl_azp_ibn_supplier_m_date_modified',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_description . " AS 'lbl_azp_ibn_supplier_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_email . " AS 'lbl_azp_ibn_supplier_t_email',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_names . " AS 'lbl_azp_ibn_supplier_t_names',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_surnames . " AS 'lbl_azp_ibn_supplier_t_surnames',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_phone_movil . " AS 'lbl_azp_ibn_supplier_t_phone_movil'
				FROM " . t_azp_ibn_supplier . " tc_azp_ibn_supplier
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_deleted . " = '1'
				ORDER BY tc_azp_ibn_supplier." . d_azp_ibn_supplier_id_azp_ibn_supplier . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_id_azp_ibn_supplier . " AS 'lbl_azp_ibn_supplier_id_azp_ibn_supplier',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_date_created . " AS 'lbl_azp_ibn_supplier_m_date_created',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_date_modified . " AS 'lbl_azp_ibn_supplier_m_date_modified',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_description . " AS 'lbl_azp_ibn_supplier_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_email . " AS 'lbl_azp_ibn_supplier_t_email',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_names . " AS 'lbl_azp_ibn_supplier_t_names',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_surnames . " AS 'lbl_azp_ibn_supplier_t_surnames',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_phone_movil . " AS 'lbl_azp_ibn_supplier_t_phone_movil'
				FROM " . t_azp_ibn_supplier . " tc_azp_ibn_supplier
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_deleted . " = '2'
				ORDER BY tc_azp_ibn_supplier." . d_azp_ibn_supplier_id_azp_ibn_supplier . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_id_azp_ibn_supplier . " AS 'lbl_azp_ibn_supplier_id_azp_ibn_supplier',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_created . " AS 'lbl_azp_ibn_supplier_m_by_created',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_modified . " AS 'lbl_azp_ibn_supplier_m_by_modified',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_date_created . " AS 'lbl_azp_ibn_supplier_m_date_created',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_date_modified . " AS 'lbl_azp_ibn_supplier_m_date_modified',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_description . " AS 'lbl_azp_ibn_supplier_m_description',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_level . " AS 'lbl_azp_ibn_supplier_m_level',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_status . " AS 'lbl_azp_ibn_supplier_m_status',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_email . " AS 'lbl_azp_ibn_supplier_t_email',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_names . " AS 'lbl_azp_ibn_supplier_t_names',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_surnames . " AS 'lbl_azp_ibn_supplier_t_surnames',
					tc_azp_ibn_supplier." . d_azp_ibn_supplier_t_phone_movil . " AS 'lbl_azp_ibn_supplier_t_phone_movil'
				FROM " . t_azp_ibn_supplier . " tc_azp_ibn_supplier
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_supplier." . d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $this->id . "'
					AND tc_azp_ibn_supplier." . d_azp_ibn_supplier_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_ibn_supplier_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "' AND " . d_azp_ibn_supplier_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "' AND " . d_azp_ibn_supplier_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_supplier_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "' AND " . d_azp_ibn_supplier_m_level . " = '2'");
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
		final public function sql_azp_ibn_supplier_delete(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_supplier_delete($data);
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
				$var_array = array(d_azp_ibn_supplier_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_supplier, $var_array, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_ibn_supplier_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_email'])) { throw new Exception('<b>Error:</b> El campo de correo electronico esta prohibido modificar.'); }
				if (!isset($data['field_cr_email_confirm'])) { throw new Exception('<b>Error:</b> El campo de confirmar correo electronico esta prohibido modificar.'); }
				if (!isset($data['field_cr_names'])) { throw new Exception('<b>Error:</b> El campo de nombres esta prohibido modificar.'); }
				if (!isset($data['field_cr_surnames'])) { throw new Exception('<b>Error:</b> El campo de apellidos esta prohibido modificar.'); }
				if (!isset($data['field_cr_phone_movil'])) { throw new Exception('<b>Error:</b> El campo de telefono movil esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_email = $this->db->scape($data['field_cr_email']);
				$empty_email_confirm = $this->db->scape($data['field_cr_email_confirm']);
				$empty_names = $this->db->scape($data['field_cr_names']);
				$empty_surnames = $this->db->scape($data['field_cr_surnames']);
				$empty_phone_movil = $this->db->scape($data['field_cr_phone_movil']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico es obligatorio.');
				}
				#---------------------------------------------#
				if (!Strings::is_email($empty_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico tiene un formato invalido.');
				}
				#---------------------------------------------#
				if (strlen($empty_email) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico permite maximo hasta 255 caracteres.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_email_confirm)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de confirmar correo electronico es obligatorio.');
				}
				#---------------------------------------------#
				if (!Strings::is_email($empty_email_confirm)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de confirmar correo electronico tiene un formato invalido.');
				}
				#---------------------------------------------#
				if (strlen($empty_email_confirm) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de confirmar correo electronico permite maximo hasta 255 caracteres.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_email != $empty_email_confirm) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> Los correos electronicos digitados no son iguales.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_names)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_names)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_names) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_names, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_names)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_surnames)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de apellidos es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_surnames)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de apellidos solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_surnames) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de apellidos permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_surnames, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de apellidos no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_surnames)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de apellidos no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_phone_movil)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_phone_movil)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil solo permite numeros.');
				}
				#---------------------------------------------#
				if (strlen($empty_phone_movil) != 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil permite solamente 10 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_phone_movil, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil no permite ningun espacio en blanco.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_ibn_supplier_insert(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_supplier_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_email = $this->db->scape($data['field_cr_email']);
				$empty_email_confirm = $this->db->scape($data['field_cr_email_confirm']);
				$empty_names = $this->db->scape($data['field_cr_names']);
				$empty_surnames = $this->db->scape($data['field_cr_surnames']);
				$empty_phone_movil = $this->db->scape($data['field_cr_phone_movil']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_supplier_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_ibn_supplier_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_supplier_m_date_created => DATE_HOUR,
					d_azp_ibn_supplier_m_date_modified => DATE_HOUR,
					d_azp_ibn_supplier_m_deleted => '1',
					d_azp_ibn_supplier_m_description => $empty_description,
					d_azp_ibn_supplier_m_level => '2',
					d_azp_ibn_supplier_m_status => '1',
					d_azp_ibn_supplier_m_temp => '1',
					d_azp_ibn_supplier_t_email => strtolower($empty_email),
					d_azp_ibn_supplier_t_names => ucwords(strtolower($empty_names)),
					d_azp_ibn_supplier_t_surnames => ucwords(strtolower($empty_surnames)),
					d_azp_ibn_supplier_t_phone_movil => $empty_phone_movil,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_ibn_supplier, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_supplier_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "' AND " . d_azp_ibn_supplier_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "' AND " . d_azp_ibn_supplier_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_supplier_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "' AND " . d_azp_ibn_supplier_m_level . " = '2'");
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
		final public function sql_azp_ibn_supplier_remove(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_supplier_remove($data);
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
				$var_array = array(d_azp_ibn_supplier_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_supplier, $var_array, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_supplier_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "' AND " . d_azp_ibn_supplier_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "' AND " . d_azp_ibn_supplier_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_supplier_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "' AND " . d_azp_ibn_supplier_m_level . " = '2'");
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
		final public function sql_azp_ibn_supplier_restore(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_supplier_restore($data);
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
				$var_array = array(d_azp_ibn_supplier_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_supplier, $var_array, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_supplier_update(array $data) {
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
				if (!isset($data['field_up_email'])) { throw new Exception('<b>Error:</b> El campo de correo electronico esta prohibido modificar.'); }
				if (!isset($data['field_up_email_confirm'])) { throw new Exception('<b>Error:</b> El campo de confirmar correo electronico esta prohibido modificar.'); }
				if (!isset($data['field_up_names'])) { throw new Exception('<b>Error:</b> El campo de nombres esta prohibido modificar.'); }
				if (!isset($data['field_up_surnames'])) { throw new Exception('<b>Error:</b> El campo de apellidos esta prohibido modificar.'); }
				if (!isset($data['field_up_phone_movil'])) { throw new Exception('<b>Error:</b> El campo de telefono movil esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_email = $this->db->scape($data['field_up_email']);
				$empty_email_confirm = $this->db->scape($data['field_up_email_confirm']);
				$empty_names = $this->db->scape($data['field_up_names']);
				$empty_surnames = $this->db->scape($data['field_up_surnames']);
				$empty_phone_movil = $this->db->scape($data['field_up_phone_movil']);
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
				if (Func::emp($empty_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico es obligatorio.');
				}
				#---------------------------------------------#
				if (!Strings::is_email($empty_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico tiene un formato invalido.');
				}
				#---------------------------------------------#
				if (strlen($empty_email) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico permite maximo hasta 255 caracteres.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_email_confirm)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de confirmar correo electronico es obligatorio.');
				}
				#---------------------------------------------#
				if (!Strings::is_email($empty_email_confirm)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de confirmar correo electronico tiene un formato invalido.');
				}
				#---------------------------------------------#
				if (strlen($empty_email_confirm) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de confirmar correo electronico permite maximo hasta 255 caracteres.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_email != $empty_email_confirm) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> Los correos electronicos digitados no son iguales.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_names)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_names)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_names) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_names, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_names)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_surnames)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de apellidos es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_surnames)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de apellidos solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_surnames) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de apellidos permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_surnames, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de apellidos no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_surnames)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de apellidos no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_phone_movil)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_phone_movil)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil solo permite numeros.');
				}
				#---------------------------------------------#
				if (strlen($empty_phone_movil) != 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil permite solamente 10 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_phone_movil, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil no permite ningun espacio en blanco.');
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
				$sql_id = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "' AND " . d_azp_ibn_supplier_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_supplier_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "' AND " . d_azp_ibn_supplier_m_level . " = '2'");
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
		final public function sql_azp_ibn_supplier_update(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_supplier_update($data);
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
				$empty_email = $this->db->scape($data['field_up_email']);
				$empty_email_confirm = $this->db->scape($data['field_up_email_confirm']);
				$empty_names = $this->db->scape($data['field_up_names']);
				$empty_surnames = $this->db->scape($data['field_up_surnames']);
				$empty_phone_movil = $this->db->scape($data['field_up_phone_movil']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_ibn_supplier, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_ibn_supplier_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_ibn_supplier_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_ibn_supplier_m_date_created => DATE_HOUR,
							d_azs_ibn_supplier_m_date_modified => DATE_HOUR,
							d_azs_ibn_supplier_m_deleted => $key_sql_select[d_azp_ibn_supplier_m_deleted],
							d_azs_ibn_supplier_m_description => $key_sql_select[d_azp_ibn_supplier_m_description],
							d_azs_ibn_supplier_m_level => $key_sql_select[d_azp_ibn_supplier_m_level],
							d_azs_ibn_supplier_m_status => $key_sql_select[d_azp_ibn_supplier_m_status],
							d_azs_ibn_supplier_m_temp => $key_sql_select[d_azp_ibn_supplier_m_temp],
							d_azs_ibn_supplier_t_email => strtolower($key_sql_select[d_azp_ibn_supplier_t_email]),
							d_azs_ibn_supplier_t_names => ucwords(strtolower($key_sql_select[d_azp_ibn_supplier_t_names])),
							d_azs_ibn_supplier_t_surnames => ucwords(strtolower($key_sql_select[d_azp_ibn_supplier_t_surnames])),
							d_azs_ibn_supplier_t_phone_movil => $key_sql_select[d_azp_ibn_supplier_t_phone_movil],
							d_azs_ibn_supplier_v_id_azp_ibn_supplier => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_ibn_supplier, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_supplier_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_supplier_m_date_modified => DATE_HOUR,
					d_azp_ibn_supplier_m_description => $empty_description,
					d_azp_ibn_supplier_m_status => $empty_state,
					d_azp_ibn_supplier_t_email => strtolower($empty_email),
					d_azp_ibn_supplier_t_names => ucwords(strtolower($empty_names)),
					d_azp_ibn_supplier_t_surnames => ucwords(strtolower($empty_surnames)),
					d_azp_ibn_supplier_t_phone_movil => $empty_phone_movil,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_supplier, $var_array, d_azp_ibn_supplier_id_azp_ibn_supplier . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>