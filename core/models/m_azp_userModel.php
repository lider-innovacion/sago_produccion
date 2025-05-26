<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_userModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_by_create() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql_select = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql_select) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql_select as $key_sql_select):
					$var_level = $key_sql_select[d_azp_user_m_level];
				endforeach;
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_user." . d_azp_user_id_azp_user . " AS 'lbl_azp_user_id_azp_user',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_user." . d_azp_user_m_date_created . " AS 'lbl_azp_user_m_date_created',
					tc_azp_user." . d_azp_user_m_date_modified . " AS 'lbl_azp_user_m_date_modified',
					tc_azp_user." . d_azp_user_m_description . " AS 'lbl_azp_user_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_user." . d_azp_user_t_email . " AS 'lbl_azp_user_t_email',
					tc_azp_user." . d_azp_user_t_key_active . " AS 'lbl_azp_user_t_key_active',
					tc_azp_user." . d_azp_user_t_key_password . " AS 'lbl_azp_user_t_key_password',
					tc_azp_user." . d_azp_user_t_key_password_temp . " AS 'lbl_azp_user_t_key_password_temp',
					tc_azp_user." . d_azp_user_t_key_status . " AS 'lbl_azp_user_t_key_status',
					tc_azp_user." . d_azp_user_t_last_connection . " AS 'lbl_azp_user_t_last_connection',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login',
					tc_azp_user." . d_azp_user_t_password . " AS 'lbl_azp_user_t_password',
					tc_azp_user." . d_azp_user_t_session . " AS 'lbl_azp_user_t_session',
					tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name',
					tc_azp_data_personal." . d_azp_data_personal_t_address . " AS 'lbl_azp_data_personal_t_address',
					tc_azp_data_personal." . d_azp_data_personal_t_birth_date . " AS 'lbl_azp_data_personal_t_birth_date',
					tc_azp_data_personal." . d_azp_data_personal_t_identification . " AS 'lbl_azp_data_personal_t_identification',
					tc_azp_data_personal." . d_azp_data_personal_t_names . " AS 'lbl_azp_data_personal_t_names',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_fixed . " AS 'lbl_azp_data_personal_t_phone_fixed',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_movil . " AS 'lbl_azp_data_personal_t_phone_movil',
					tc_azp_data_personal." . d_azp_data_personal_t_surnames . " AS 'lbl_azp_data_personal_t_surnames',
					tc_azp_country." . d_azp_country_t_name . " AS 'lbl_azp_country_t_name',
					tc_azp_document_type." . d_azp_document_type_t_name . " AS 'lbl_azp_document_type_t_name'
				FROM " . t_azp_user . " tc_azp_user
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_user." . d_azp_user_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_user." . d_azp_user_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_user." . d_azp_user_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_user." . d_azp_user_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_application ." tc_azp_application
					ON tc_azp_user." . d_azp_user_v_id_azp_application . "
						= tc_azp_application." . d_azp_application_id_azp_application . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client ." tc_azp_fct_client
					ON tc_azp_user." . d_azp_user_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_role ." tc_azp_role
					ON tc_azp_user." . d_azp_user_v_id_azp_role . "
						= tc_azp_role." . d_azp_role_id_azp_role . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
					ON tc_azp_user." . d_azp_user_id_azp_user . "
						= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_country . " tc_azp_country
					ON tc_azp_data_personal." . d_azp_data_personal_v_id_azp_country . "
						= tc_azp_country." . d_azp_country_id_azp_country . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_document_type . " tc_azp_document_type
					ON tc_azp_data_personal." . d_azp_data_personal_v_id_azp_document_type . "
						= tc_azp_document_type." . d_azp_document_type_id_azp_document_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_user." . d_azp_user_id_azp_user . " > '1'
					AND tc_azp_user." . d_azp_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_level . " >= '" . $var_level . "'
				ORDER BY tc_azp_user." . d_azp_user_id_azp_user . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_user." . d_azs_user_id_azs_user . " AS 'lbl_azs_user_id_azs_user',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_user." . d_azs_user_m_date_created . " AS 'lbl_azs_user_m_date_created',
					tc_azs_user." . d_azs_user_m_date_modified . " AS 'lbl_azs_user_m_date_modified',
					tc_azs_user." . d_azs_user_m_description . " AS 'lbl_azs_user_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_user." . d_azs_user_t_email . " AS 'lbl_azs_user_t_email',
					tc_azs_user." . d_azs_user_t_key_active . " AS 'lbl_azs_user_t_key_active',
					tc_azs_user." . d_azs_user_t_key_password . " AS 'lbl_azs_user_t_key_password',
					tc_azs_user." . d_azs_user_t_key_password_temp . " AS 'lbl_azs_user_t_key_password_temp',
					tc_azs_user." . d_azs_user_t_key_status . " AS 'lbl_azs_user_t_key_status',
					tc_azs_user." . d_azs_user_t_last_connection . " AS 'lbl_azs_user_t_last_connection',
					tc_azs_user." . d_azs_user_t_login . " AS 'lbl_azs_user_t_login',
					tc_azs_user." . d_azs_user_t_password . " AS 'lbl_azs_user_t_password',
					tc_azs_user." . d_azs_user_t_session . " AS 'lbl_azs_user_t_session',
					tc_azs_user." . d_azs_user_u_application . " AS 'lbl_azs_user_u_application',
					tc_azs_user." . d_azs_user_u_fct_client . " AS 'lbl_azs_user_u_fct_client',
					tc_azs_user." . d_azs_user_u_role . " AS 'lbl_azs_user_u_role',
					tc_azs_data_personal. " . d_azs_data_personal_t_address . " AS 'lbl_azs_data_personal_t_address',
					tc_azs_data_personal. " . d_azs_data_personal_t_birth_date . " AS 'lbl_azs_data_personal_t_birth_date',
					tc_azs_data_personal. " . d_azs_data_personal_t_identification . " AS 'lbl_azs_data_personal_t_identification',
					tc_azs_data_personal. " . d_azs_data_personal_t_names . " AS 'lbl_azs_data_personal_t_names',
					tc_azs_data_personal. " . d_azs_data_personal_t_phone_fixed . " AS 'lbl_azs_data_personal_t_phone_fixed',
					tc_azs_data_personal. " . d_azs_data_personal_t_phone_movil . " AS 'lbl_azs_data_personal_t_phone_movil',
					tc_azs_data_personal. " . d_azs_data_personal_t_surnames . " AS 'lbl_azs_data_personal_t_surnames',
					tc_azs_data_personal. " . d_azs_data_personal_u_country . " AS 'lbl_azs_data_personal_u_country',
					tc_azs_data_personal. " . d_azs_data_personal_u_document_type . " AS 'lbl_azs_data_personal_u_document_type'
				FROM " . t_azs_user . " tc_azs_user
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_user." . d_azs_user_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_user." . d_azs_user_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_user." . d_azs_user_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_user." . d_azs_user_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azs_data_personal . " tc_azs_data_personal
					ON tc_azs_user." . d_azs_user_v_id_azp_user . "
						= tc_azs_data_personal." . d_azs_data_personal_v_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_user." . d_azs_user_v_id_azp_user . " = '" . $this->id . "'
				ORDER BY tc_azs_user." . d_azs_user_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_user . "
				WHERE " . d_azp_user_id_azp_user . " = '" . $this->id . "'
					AND " . d_azp_user_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_user);
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_m_deleted() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT * FROM " . t_azp_user . "
				WHERE " . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND " . d_azp_user_m_level . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_user." . d_azp_user_id_azp_user . " AS 'lbl_azp_user_id_azp_user',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_user." . d_azp_user_m_date_created . " AS 'lbl_azp_user_m_date_created',
					tc_azp_user." . d_azp_user_m_date_modified . " AS 'lbl_azp_user_m_date_modified',
					tc_azp_user." . d_azp_user_m_description . " AS 'lbl_azp_user_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_user." . d_azp_user_t_email . " AS 'lbl_azp_user_t_email',
					tc_azp_user." . d_azp_user_t_key_active . " AS 'lbl_azp_user_t_key_active',
					tc_azp_user." . d_azp_user_t_key_password . " AS 'lbl_azp_user_t_key_password',
					tc_azp_user." . d_azp_user_t_key_password_temp . " AS 'lbl_azp_user_t_key_password_temp',
					tc_azp_user." . d_azp_user_t_key_status . " AS 'lbl_azp_user_t_key_status',
					tc_azp_user." . d_azp_user_t_last_connection . " AS 'lbl_azp_user_t_last_connection',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login',
					tc_azp_user." . d_azp_user_t_password . " AS 'lbl_azp_user_t_password',
					tc_azp_user." . d_azp_user_t_session . " AS 'lbl_azp_user_t_session',
					tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name',
					tc_azp_data_personal." . d_azp_data_personal_t_address . " AS 'lbl_azp_data_personal_t_address',
					tc_azp_data_personal." . d_azp_data_personal_t_birth_date . " AS 'lbl_azp_data_personal_t_birth_date',
					tc_azp_data_personal." . d_azp_data_personal_t_identification . " AS 'lbl_azp_data_personal_t_identification',
					tc_azp_data_personal." . d_azp_data_personal_t_names . " AS 'lbl_azp_data_personal_t_names',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_fixed . " AS 'lbl_azp_data_personal_t_phone_fixed',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_movil . " AS 'lbl_azp_data_personal_t_phone_movil',
					tc_azp_data_personal." . d_azp_data_personal_t_surnames . " AS 'lbl_azp_data_personal_t_surnames',
					tc_azp_country." . d_azp_country_t_name . " AS 'lbl_azp_country_t_name',
					tc_azp_document_type." . d_azp_document_type_t_name . " AS 'lbl_azp_document_type_t_name'
				FROM " . t_azp_user . " tc_azp_user
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_user." . d_azp_user_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_user." . d_azp_user_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_user." . d_azp_user_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_user." . d_azp_user_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_application ." tc_azp_application
					ON tc_azp_user." . d_azp_user_v_id_azp_application . "
						= tc_azp_application." . d_azp_application_id_azp_application . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client ." tc_azp_fct_client
					ON tc_azp_user." . d_azp_user_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_role ." tc_azp_role
					ON tc_azp_user." . d_azp_user_v_id_azp_role . "
						= tc_azp_role." . d_azp_role_id_azp_role . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
					ON tc_azp_user." . d_azp_user_id_azp_user . "
						= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_country . " tc_azp_country
					ON tc_azp_data_personal." . d_azp_data_personal_v_id_azp_country . "
						= tc_azp_country." . d_azp_country_id_azp_country . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_document_type . " tc_azp_document_type
					ON tc_azp_data_personal." . d_azp_data_personal_v_id_azp_document_type . "
						= tc_azp_document_type." . d_azp_document_type_id_azp_document_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_user." . d_azp_user_id_azp_user . " = '" . $this->id . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql_select = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql_select) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql_select as $key_sql_select):
					$var_level = $key_sql_select[d_azp_user_m_level];
				endforeach;
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_user." . d_azp_user_id_azp_user . " AS 'lbl_azp_user_id_azp_user',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_user." . d_azp_user_m_date_created . " AS 'lbl_azp_user_m_date_created',
					tc_azp_user." . d_azp_user_m_date_modified . " AS 'lbl_azp_user_m_date_modified',
					tc_azp_user." . d_azp_user_m_description . " AS 'lbl_azp_user_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_user." . d_azp_user_t_email . " AS 'lbl_azp_user_t_email',
					tc_azp_user." . d_azp_user_t_key_active . " AS 'lbl_azp_user_t_key_active',
					tc_azp_user." . d_azp_user_t_key_password . " AS 'lbl_azp_user_t_key_password',
					tc_azp_user." . d_azp_user_t_key_password_temp . " AS 'lbl_azp_user_t_key_password_temp',
					tc_azp_user." . d_azp_user_t_key_status . " AS 'lbl_azp_user_t_key_status',
					tc_azp_user." . d_azp_user_t_last_connection . " AS 'lbl_azp_user_t_last_connection',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login',
					tc_azp_user." . d_azp_user_t_password . " AS 'lbl_azp_user_t_password',
					tc_azp_user." . d_azp_user_t_session . " AS 'lbl_azp_user_t_session',
					tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name',
					tc_azp_data_personal." . d_azp_data_personal_t_address . " AS 'lbl_azp_data_personal_t_address',
					tc_azp_data_personal." . d_azp_data_personal_t_birth_date . " AS 'lbl_azp_data_personal_t_birth_date',
					tc_azp_data_personal." . d_azp_data_personal_t_identification . " AS 'lbl_azp_data_personal_t_identification',
					tc_azp_data_personal." . d_azp_data_personal_t_names . " AS 'lbl_azp_data_personal_t_names',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_fixed . " AS 'lbl_azp_data_personal_t_phone_fixed',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_movil . " AS 'lbl_azp_data_personal_t_phone_movil',
					tc_azp_data_personal." . d_azp_data_personal_t_surnames . " AS 'lbl_azp_data_personal_t_surnames',
					tc_azp_country." . d_azp_country_t_name . " AS 'lbl_azp_country_t_name',
					tc_azp_document_type." . d_azp_document_type_t_name . " AS 'lbl_azp_document_type_t_name'
				FROM " . t_azp_user . " tc_azp_user
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_user." . d_azp_user_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_user." . d_azp_user_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_user." . d_azp_user_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_user." . d_azp_user_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_application ." tc_azp_application
					ON tc_azp_user." . d_azp_user_v_id_azp_application . "
						= tc_azp_application." . d_azp_application_id_azp_application . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client ." tc_azp_fct_client
					ON tc_azp_user." . d_azp_user_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_role ." tc_azp_role
					ON tc_azp_user." . d_azp_user_v_id_azp_role . "
						= tc_azp_role." . d_azp_role_id_azp_role . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
					ON tc_azp_user." . d_azp_user_id_azp_user . "
						= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_country . " tc_azp_country
					ON tc_azp_data_personal." . d_azp_data_personal_v_id_azp_country . "
						= tc_azp_country." . d_azp_country_id_azp_country . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_document_type . " tc_azp_document_type
					ON tc_azp_data_personal." . d_azp_data_personal_v_id_azp_document_type . "
						= tc_azp_document_type." . d_azp_document_type_id_azp_document_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_user." . d_azp_user_m_deleted . " = '3'
					AND tc_azp_user." . d_azp_user_m_level . " >= '" . $var_level . "'
				ORDER BY tc_azp_user." . d_azp_user_id_azp_user . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_inner_join() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_data_personal . "
				WHERE " . d_azp_data_personal_v_id_azp_user . " = '" . $this->id . "'
					AND " . d_azp_data_personal_m_deleted . " = '1'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_user);
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql_select = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql_select) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql_select as $key_sql_select):
					$var_level = $key_sql_select[d_azp_user_m_level];
				endforeach;
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_user." . d_azp_user_id_azp_user . " AS 'lbl_azp_user_id_azp_user',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_user." . d_azp_user_m_date_created . " AS 'lbl_azp_user_m_date_created',
					tc_azp_user." . d_azp_user_m_date_modified . " AS 'lbl_azp_user_m_date_modified',
					tc_azp_user." . d_azp_user_m_description . " AS 'lbl_azp_user_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_user." . d_azp_user_t_email . " AS 'lbl_azp_user_t_email',
					tc_azp_user." . d_azp_user_t_key_active . " AS 'lbl_azp_user_t_key_active',
					tc_azp_user." . d_azp_user_t_key_password . " AS 'lbl_azp_user_t_key_password',
					tc_azp_user." . d_azp_user_t_key_password_temp . " AS 'lbl_azp_user_t_key_password_temp',
					tc_azp_user." . d_azp_user_t_key_status . " AS 'lbl_azp_user_t_key_status',
					tc_azp_user." . d_azp_user_t_last_connection . " AS 'lbl_azp_user_t_last_connection',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login',
					tc_azp_user." . d_azp_user_t_password . " AS 'lbl_azp_user_t_password',
					tc_azp_user." . d_azp_user_t_session . " AS 'lbl_azp_user_t_session',
					tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name',
					tc_azp_data_personal." . d_azp_data_personal_t_address . " AS 'lbl_azp_data_personal_t_address',
					tc_azp_data_personal." . d_azp_data_personal_t_birth_date . " AS 'lbl_azp_data_personal_t_birth_date',
					tc_azp_data_personal." . d_azp_data_personal_t_identification . " AS 'lbl_azp_data_personal_t_identification',
					tc_azp_data_personal." . d_azp_data_personal_t_names . " AS 'lbl_azp_data_personal_t_names',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_fixed . " AS 'lbl_azp_data_personal_t_phone_fixed',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_movil . " AS 'lbl_azp_data_personal_t_phone_movil',
					tc_azp_data_personal." . d_azp_data_personal_t_surnames . " AS 'lbl_azp_data_personal_t_surnames',
					tc_azp_country." . d_azp_country_t_name . " AS 'lbl_azp_country_t_name',
					tc_azp_document_type." . d_azp_document_type_t_name . " AS 'lbl_azp_document_type_t_name'
				FROM " . t_azp_user . " tc_azp_user
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_user." . d_azp_user_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_user." . d_azp_user_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_user." . d_azp_user_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_user." . d_azp_user_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_application ." tc_azp_application
					ON tc_azp_user." . d_azp_user_v_id_azp_application . "
						= tc_azp_application." . d_azp_application_id_azp_application . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client ." tc_azp_fct_client
					ON tc_azp_user." . d_azp_user_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_role ." tc_azp_role
					ON tc_azp_user." . d_azp_user_v_id_azp_role . "
						= tc_azp_role." . d_azp_role_id_azp_role . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
					ON tc_azp_user." . d_azp_user_id_azp_user . "
						= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_country . " tc_azp_country
					ON tc_azp_data_personal." . d_azp_data_personal_v_id_azp_country . "
						= tc_azp_country." . d_azp_country_id_azp_country . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_document_type . " tc_azp_document_type
					ON tc_azp_data_personal." . d_azp_data_personal_v_id_azp_document_type . "
						= tc_azp_document_type." . d_azp_document_type_id_azp_document_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_level . " >= '" . $var_level . "'
				ORDER BY tc_azp_user." . d_azp_user_id_azp_user . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql_select = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql_select) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql_select as $key_sql_select):
					$var_level = $key_sql_select[d_azp_user_m_level];
				endforeach;
			}
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_user." . d_azp_user_id_azp_user . " AS 'lbl_azp_user_id_azp_user',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_user." . d_azp_user_m_date_created . " AS 'lbl_azp_user_m_date_created',
					tc_azp_user." . d_azp_user_m_date_modified . " AS 'lbl_azp_user_m_date_modified',
					tc_azp_user." . d_azp_user_m_description . " AS 'lbl_azp_user_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_user." . d_azp_user_t_email . " AS 'lbl_azp_user_t_email',
					tc_azp_user." . d_azp_user_t_key_active . " AS 'lbl_azp_user_t_key_active',
					tc_azp_user." . d_azp_user_t_key_password . " AS 'lbl_azp_user_t_key_password',
					tc_azp_user." . d_azp_user_t_key_password_temp . " AS 'lbl_azp_user_t_key_password_temp',
					tc_azp_user." . d_azp_user_t_key_status . " AS 'lbl_azp_user_t_key_status',
					tc_azp_user." . d_azp_user_t_last_connection . " AS 'lbl_azp_user_t_last_connection',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login',
					tc_azp_user." . d_azp_user_t_password . " AS 'lbl_azp_user_t_password',
					tc_azp_user." . d_azp_user_t_session . " AS 'lbl_azp_user_t_session',
					tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
					tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name',
					tc_azp_data_personal." . d_azp_data_personal_t_address . " AS 'lbl_azp_data_personal_t_address',
					tc_azp_data_personal." . d_azp_data_personal_t_birth_date . " AS 'lbl_azp_data_personal_t_birth_date',
					tc_azp_data_personal." . d_azp_data_personal_t_identification . " AS 'lbl_azp_data_personal_t_identification',
					tc_azp_data_personal." . d_azp_data_personal_t_names . " AS 'lbl_azp_data_personal_t_names',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_fixed . " AS 'lbl_azp_data_personal_t_phone_fixed',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_movil . " AS 'lbl_azp_data_personal_t_phone_movil',
					tc_azp_data_personal." . d_azp_data_personal_t_surnames . " AS 'lbl_azp_data_personal_t_surnames',
					tc_azp_country." . d_azp_country_t_name . " AS 'lbl_azp_country_t_name',
					tc_azp_document_type." . d_azp_document_type_t_name . " AS 'lbl_azp_document_type_t_name'
				FROM " . t_azp_user . " tc_azp_user
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_user." . d_azp_user_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_user." . d_azp_user_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_user." . d_azp_user_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_user." . d_azp_user_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_application ." tc_azp_application
					ON tc_azp_user." . d_azp_user_v_id_azp_application . "
						= tc_azp_application." . d_azp_application_id_azp_application . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_fct_client ." tc_azp_fct_client
					ON tc_azp_user." . d_azp_user_v_id_azp_fct_client . "
						= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_role ." tc_azp_role
					ON tc_azp_user." . d_azp_user_v_id_azp_role . "
						= tc_azp_role." . d_azp_role_id_azp_role . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
					ON tc_azp_user." . d_azp_user_id_azp_user . "
						= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_country . " tc_azp_country
					ON tc_azp_data_personal." . d_azp_data_personal_v_id_azp_country . "
						= tc_azp_country." . d_azp_country_id_azp_country . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_document_type . " tc_azp_document_type
					ON tc_azp_data_personal." . d_azp_data_personal_v_id_azp_document_type . "
						= tc_azp_document_type." . d_azp_document_type_id_azp_document_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_user." . d_azp_user_m_deleted . " = '2'
					AND tc_azp_user." . d_azp_user_m_level . " >= '" . $var_level . "'
				ORDER BY tc_azp_user." . d_azp_user_id_azp_user . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_session_id() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_user . "
				-- ---------------------------------------------------------------
				WHERE " . d_azp_user_id_azp_user . " = '" . $this->id . "'
					AND " . d_azp_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . 'azuser/read/session/');
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_user." . d_azp_user_id_azp_user . " AS 'lbl_azp_user_id_azp_user',
					tc_azp_user." . d_azp_user_m_by_created . " AS 'lbl_azp_user_m_by_created',
					tc_azp_user." . d_azp_user_m_by_modified . " AS 'lbl_azp_user_m_by_modified',
					tc_azp_user." . d_azp_user_m_date_created . " AS 'lbl_azp_user_m_date_created',
					tc_azp_user." . d_azp_user_m_date_modified . " AS 'lbl_azp_user_m_date_modified',
					tc_azp_user." . d_azp_user_m_description . " AS 'lbl_azp_user_m_description',
					tc_azp_user." . d_azp_user_m_level . " AS 'lbl_azp_user_m_level',
					tc_azp_user." . d_azp_user_m_status . " AS 'lbl_azp_user_m_status',
					tc_azp_user." . d_azp_user_t_email . " AS 'lbl_azp_user_t_email',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login',
					tc_azp_user." . d_azp_user_v_id_azp_application . " AS 'lbl_azp_user_v_id_azp_application',
					tc_azp_user." . d_azp_user_v_id_azp_fct_client . " AS 'lbl_azp_user_v_id_azp_fct_client',
					tc_azp_user." . d_azp_user_v_id_azp_role . " AS 'lbl_azp_user_v_id_azp_role',
					tc_azp_data_personal." . d_azp_data_personal_t_address . " AS 'lbl_azp_data_personal_t_address',
					tc_azp_data_personal." . d_azp_data_personal_t_birth_date . " AS 'lbl_azp_data_personal_t_birth_date',
					tc_azp_data_personal." . d_azp_data_personal_t_identification . " AS 'lbl_azp_data_personal_t_identification',
					tc_azp_data_personal." . d_azp_data_personal_t_names . " AS 'lbl_azp_data_personal_t_names',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_fixed . " AS 'lbl_azp_data_personal_t_phone_fixed',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_movil . " AS 'lbl_azp_data_personal_t_phone_movil',
					tc_azp_data_personal." . d_azp_data_personal_t_surnames . " AS 'lbl_azp_data_personal_t_surnames',
					tc_azp_data_personal." . d_azp_data_personal_v_id_azp_country . " AS 'lbl_azp_data_personal_v_id_azp_country',
					tc_azp_data_personal." . d_azp_data_personal_v_id_azp_document_type . " AS 'lbl_azp_data_personal_v_id_azp_document_type'
				FROM " . t_azp_user . " tc_azp_user
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_user." . d_azp_user_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_user." . d_azp_user_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_user." . d_azp_user_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_user." . d_azp_user_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
					ON tc_azp_user." . d_azp_user_id_azp_user . "
						= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_user." . d_azp_user_id_azp_user . " = '" . $this->id . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_role() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_role." . d_azp_role_id_azp_role . " AS 'lbl_azp_role_id_azp_role',
					tc_azp_role." . d_azp_role_m_by_created . " AS 'lbl_azp_role_m_by_created',
					tc_azp_role." . d_azp_role_m_by_modified . " AS 'lbl_azp_role_m_by_modified',
					tc_azp_role." . d_azp_role_m_date_created . " AS 'lbl_azp_role_m_date_created',
					tc_azp_role." . d_azp_role_m_date_modified . " AS 'lbl_azp_role_m_date_modified',
					tc_azp_role." . d_azp_role_m_description . " AS 'lbl_azp_role_m_description',
					tc_azp_role." . d_azp_role_m_level . " AS 'lbl_azp_role_m_level',
					tc_azp_role." . d_azp_role_m_status . " AS 'lbl_azp_role_m_status',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name'
				FROM " . t_azp_role . " tc_azp_role
				-- ---------------------------------------------------------------
				WHERE tc_azp_role." . d_azp_role_id_azp_role . " = '" . $this->id . "'
					AND tc_azp_role." . d_azp_role_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_user_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "' AND " . d_azp_user_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "' AND " . d_azp_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "' AND " . d_azp_user_m_level . " = '2'");
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
		final public function sql_azp_user_delete(array $data) : array {
			$var_error = $this->error_sql_azp_user_delete($data);
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
				$var_array = array(d_azp_update_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_update, $var_array, d_azp_update_id_azp_update . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_user_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_email'])) { throw new Exception('<b>Error:</b> El campo de correo electronico esta prohibido modificar.'); }
				if (!isset($data['field_cr_email_confirm'])) { throw new Exception('<b>Error:</b> El campo de confirmar correo electronico esta prohibido modificar.'); }
				if (!isset($data['field_cr_login'])) { throw new Exception('<b>Error:</b> El campo de usuario esta prohibido modificar.'); }
				if (!isset($data['field_cr_password'])) { throw new Exception('<b>Error:</b> El campo de contraseña esta prohibido modificar.'); }
				if (!isset($data['field_cr_password_confirm'])) { throw new Exception('<b>Error:</b> El campo de confirmar contraseña esta prohibido modificar.'); }
				if (!isset($data['field_cr_application'])) { throw new Exception('<b>Error:</b> El campo de aplicacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_fct_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_cr_role'])) { throw new Exception('<b>Error:</b> El campo de rol esta prohibido modificar.'); }
				//if (!isset($data['field_cr_address'])) { throw new Exception('<b>Error:</b> El campo de direccion esta prohibido modificar.'); }
				//if (!isset($data['field_cr_birth_date'])) { throw new Exception('<b>Error:</b> El campo de fecha de nacimiento esta prohibido modificar.'); }
				if (!isset($data['field_cr_identification'])) { throw new Exception('<b>Error:</b> El campo de identificacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_names'])) { throw new Exception('<b>Error:</b> El campo de nombres esta prohibido modificar.'); }
				//if (!isset($data['field_cr_phone_fixed'])) { throw new Exception('<b>Error:</b> El campo de telefono fijo esta prohibido modificar.'); }
				//if (!isset($data['field_cr_phone_movil'])) { throw new Exception('<b>Error:</b> El campo de telefono movil esta prohibido modificar.'); }
				if (!isset($data['field_cr_surnames'])) { throw new Exception('<b>Error:</b> El campo de apellidos esta prohibido modificar.'); }
				//if (!isset($data['field_cr_country'])) { throw new Exception('<b>Error:</b> El campo de pais esta prohibido modificar.'); }
				if (!isset($data['field_cr_document_type'])) { throw new Exception('<b>Error:</b> El campo de tipo de documento esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_email = $this->db->scape($data['field_cr_email']);
				$empty_email_confirm = $this->db->scape($data['field_cr_email_confirm']);
				$empty_login = $this->db->scape($data['field_cr_login']);
				$empty_password = $this->db->scape($data['field_cr_password']);
				$empty_password_confirm = $this->db->scape($data['field_cr_password_confirm']);
				$empty_application = $this->db->scape($data['field_cr_application']);
				$empty_fct_client = $this->db->scape($data['field_cr_fct_client']);
				$empty_role = $this->db->scape($data['field_cr_role']);
				//$empty_address = $this->db->scape($data['field_cr_address']);
				//$empty_birth_date = $this->db->scape($data['field_cr_birth_date']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_names = $this->db->scape($data['field_cr_names']);
				//$empty_phone_fixed = $this->db->scape($data['field_cr_phone_fixed']);
				//$empty_phone_movil = $this->db->scape($data['field_cr_phone_movil']);
				$empty_surnames = $this->db->scape($data['field_cr_surnames']);
				//$empty_country = $this->db->scape($data['field_cr_country']);
				$empty_document_type = $this->db->scape($data['field_cr_document_type']);
				#-------------------------------------------------------------------------#
				Helper::load('strings');
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico es oblgitario.');
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
					throw new Exception('<b>Error:</b> El campo de confirmar correo electronico es oblgitario.');
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
				if (Func::emp($empty_login)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario es oblgitario.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_login)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_login) > 15) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario permite maximo hasta 15 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_login, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_login)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario no permite tener ningun espacio en blanco.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_password)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_password) < 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener minimo 10 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_password) > 20) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña permite maximo hasta 20 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_password, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener espacios en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_password)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener espacios en blanco.');
				}
				#---------------------------------------------#
				if (!preg_match('`[a-z]`', $empty_password)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener al menos una letra minúscula.');
				}
				#---------------------------------------------#
				if (!preg_match('`[A-Z]`', $empty_password)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener al menos una letra mayúscula.');
				}
				#---------------------------------------------#
				if (!preg_match('`[0-9]`', $empty_password)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener al menos caracter numérico.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_password_confirm)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_password_confirm) < 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener minimo 10 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_password_confirm) > 20) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña permite maximo hasta 20 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_password_confirm, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña no permite tener espacios en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_password_confirm)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña no permite tener espacios en blanco.');
				}
				#---------------------------------------------#
				if (!preg_match('`[a-z]`', $empty_password_confirm)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener al menos una letra minúscula.');
				}
				#---------------------------------------------#
				if (!preg_match('`[A-Z]`', $empty_password_confirm)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener al menos una letra mayúscula.');
				}
				#---------------------------------------------#
				if (!preg_match('`[0-9]`', $empty_password_confirm)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener al menos caracter numérico.');
				}
				#-------------------------------------------------------------------------#
				if ($empty_password != $empty_password_confirm) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> Las contraseñas digitidas no son iguales.');
				}
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
				if (Func::emp($empty_fct_client) || strtolower($empty_fct_client) == strtolower('seleccionar') || $empty_fct_client == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_fct_client)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_role) || strtolower($empty_role) == strtolower('seleccionar') || $empty_role == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de rol es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_role)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de rol solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_names)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres es oblgitario.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_names)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres solo permite letras.');
				}
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
					throw new Exception('<b>Error:</b> El campo de apellidos es oblgitario.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_surnames)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de apellidos solo permite letras.');
				}
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
				if (Func::emp($empty_document_type) || strtolower($empty_document_type) == strtolower('seleccionar') || $empty_document_type == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo documento es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_document_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo documento solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de identificacion es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de identificacion solo permite numeros.');
				}
				#---------------------------------------------#
				if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de identificacion permite maximo hasta 255 caracteres.');
				}
				#-------------------------------------------------------------------------#
				/*if (strlen($empty_phone_fixed) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo debe tener minimo 1 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_phone_fixed) > 8) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo permite maximo hasta 8 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_phone_fixed, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo no permite ningun espacio en blanco.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_phone_fixed)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_phone_movil)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_phone_movil)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil solo permite numeros.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_phone_movil) != 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil permite solamente 10 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_phone_movil, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil no permite ningun espacio en blanco.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_address)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_address) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_address, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_address)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_birth_date) || $empty_birth_date == 'aaaa-mm-dd') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha nacimiento es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_birth_date) < 10 || strlen($empty_birth_date) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha nacimiento está mal diligenciado, debe ser aaaa-mm-dd.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_country) || strtolower($empty_country) == strtolower('seleccionar') || $empty_country == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de pais es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_country)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de pais solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_email = $this->db->select('*', t_azp_user, d_azp_user_t_email . " = '" . $empty_email . "'");
				if (true == $sql_email) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_email[0][0]) == strtolower($empty_email)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El correo electronico digitado ya existe registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_login = $this->db->select('*', t_azp_user, d_azp_user_t_login . " = '" . $empty_login . "'");
				if (true == $sql_login) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_login[0][0]) == strtolower($empty_login)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El usuario digitado ya existe registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_identification = $this->db->select('*', t_azp_data_personal, d_azp_data_personal_t_identification . " = '" . $empty_identification . "'");
				if (true == $sql_identification) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_identification[0][0]) == strtolower($empty_identification)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La identificacion digitada ya existe registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
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
				# Verificar si el registro existe en la tabla
				$sql_fct_client = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_fct_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_fct_client) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_fct_client) == '') { $sql_fct_client[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_fct_client[0][0]) != strtolower($empty_fct_client)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El cliente seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_role = $this->db->select('*', t_azp_role, d_azp_role_id_azp_role . " = '" . $empty_role . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_role) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_role) == '') { $sql_role[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_role[0][0]) != strtolower($empty_role)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El rol seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				/*$sql_country = $this->db->select('*', t_azp_country, d_azp_country_id_azp_country . " = '" . $empty_country . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_country) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_country) == '') { $sql_country[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_country[0][0]) != strtolower($empty_country)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El pais seleccionado no se encuentra registrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_document_type = $this->db->select('*', t_azp_document_type, d_azp_document_type_id_azp_document_type . " = '" . $empty_document_type . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_document_type) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_document_type) == '') { $sql_document_type[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_document_type[0][0]) != strtolower($empty_document_type)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tramite seleccionado no se encuentra registrado.');
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
		final public function sql_azp_user_insert(array $data) : array {
			$var_error = $this->error_sql_azp_user_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_email = $this->db->scape($data['field_cr_email']);
				$empty_email_confirm = $this->db->scape($data['field_cr_email_confirm']);
				$empty_login = $this->db->scape($data['field_cr_login']);
				$empty_password = $this->db->scape($data['field_cr_password']);
				$empty_password_confirm = $this->db->scape($data['field_cr_password_confirm']);
				$empty_application = $this->db->scape($data['field_cr_application']);
				$empty_fct_client = $this->db->scape($data['field_cr_fct_client']);
				$empty_role = $this->db->scape($data['field_cr_role']);
				//$empty_address = $this->db->scape($data['field_cr_address']);
				//$empty_birth_date = $this->db->scape($data['field_cr_birth_date']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_names = $this->db->scape($data['field_cr_names']);
				//$empty_phone_fixed = $this->db->scape($data['field_cr_phone_fixed']);
				//$empty_phone_movil = $this->db->scape($data['field_cr_phone_movil']);
				$empty_surnames = $this->db->scape($data['field_cr_surnames']);
				//$empty_country = $this->db->scape($data['field_cr_country']);
				$empty_document_type = $this->db->scape($data['field_cr_document_type']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_user_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_user_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_user_m_date_created => DATE_HOUR,
					d_azp_user_m_date_modified => DATE_HOUR,
					d_azp_user_m_deleted => '1',
					d_azp_user_m_description => $empty_description,
					d_azp_user_m_level => '2',
					d_azp_user_m_status => '1',
					d_azp_user_m_temp => '2',
					d_azp_user_t_email => strtolower($empty_email),
					d_azp_user_t_key_active => '1',
					d_azp_user_t_key_password => '1',
					d_azp_user_t_key_password_temp => '1',
					d_azp_user_t_key_status => '1',
					d_azp_user_t_login => strtolower($empty_login),
					d_azp_user_t_password => Strings::hash($empty_password),
					d_azp_user_t_session => '0',
					d_azp_user_v_id_azp_application => $empty_application,
					d_azp_user_v_id_azp_fct_client => $empty_fct_client,
					d_azp_user_v_id_azp_role => $empty_role,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_user, $var_array);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_user, d_azp_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_m_temp . " = '2'", "LIMIT 1");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_configuration_design_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_configuration_design_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_configuration_design_m_date_created => DATE_HOUR,
							d_azp_configuration_design_m_date_modified => DATE_HOUR,
							d_azp_configuration_design_m_deleted => '1',
							d_azp_configuration_design_m_description => $empty_description,
							d_azp_configuration_design_m_level => '2',
							d_azp_configuration_design_m_status => '1',
							d_azp_configuration_design_m_temp => '1',
							d_azp_configuration_design_t_btn_action => '17',
							d_azp_configuration_design_t_btn_cancel => '11',
							d_azp_configuration_design_t_btn_change => '17',
							d_azp_configuration_design_t_btn_close => '11',
							d_azp_configuration_design_t_btn_column_toggle => '11',
							d_azp_configuration_design_t_btn_colvis_column => '17',
							d_azp_configuration_design_t_btn_colvis_restore => '13',
							d_azp_configuration_design_t_btn_copy => '11',
							d_azp_configuration_design_t_btn_create => '13',
							d_azp_configuration_design_t_btn_csv => '11',
							d_azp_configuration_design_t_btn_delete => '16',
							d_azp_configuration_design_t_btn_detail => '17',
							d_azp_configuration_design_t_btn_email => '13',
							d_azp_configuration_design_t_btn_excel => '13',
							d_azp_configuration_design_t_btn_export => '17',
							d_azp_configuration_design_t_btn_import => '13',
							d_azp_configuration_design_t_btn_menu => '17',
							d_azp_configuration_design_t_btn_page_length => '14',
							d_azp_configuration_design_t_btn_pdf => '11',
							d_azp_configuration_design_t_btn_print => '11',
							d_azp_configuration_design_t_btn_remove => '15',
							d_azp_configuration_design_t_btn_report => '17',
							d_azp_configuration_design_t_btn_restore => '13',
							d_azp_configuration_design_t_btn_search => '17',
							d_azp_configuration_design_t_btn_sub_menu => '17',
							d_azp_configuration_design_t_btn_sync => '11',
							d_azp_configuration_design_t_btn_template => '17',
							d_azp_configuration_design_t_btn_update => '13',
							d_azp_configuration_design_t_btn_visible => '11',
							d_azp_configuration_design_t_color => '1',
							d_azp_configuration_design_t_dimension => '1',
							d_azp_configuration_design_t_theme => '1',
							d_azp_configuration_design_t_table_by_create => '13',
							d_azp_configuration_design_t_table_change => '14',
							d_azp_configuration_design_t_table_detail => '13',
							d_azp_configuration_design_t_table_eliminate => '16',
							d_azp_configuration_design_t_table_read => '13',
							d_azp_configuration_design_t_table_remove => '15',
							d_azp_configuration_design_t_table_report => '13',
							d_azp_configuration_design_v_id_azp_user => $key_sql[d_azp_user_id_azp_user],
						);
						# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_configuration_design, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_user, d_azp_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_m_temp . " = '2'", "LIMIT 1");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_configuration_email_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_configuration_email_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_configuration_email_m_date_created => DATE_HOUR,
							d_azp_configuration_email_m_date_modified => DATE_HOUR,
							d_azp_configuration_email_m_deleted => '1',
							d_azp_configuration_email_m_description => $empty_description,
							d_azp_configuration_email_m_level => '2',
							d_azp_configuration_email_m_status => '1',
							d_azp_configuration_email_m_temp => '1',
							d_azp_configuration_email_t_host => '',
							d_azp_configuration_email_t_email => '',
							d_azp_configuration_email_t_pass => '',
							d_azp_configuration_email_t_port => '',
							d_azp_configuration_email_v_id_azp_user => $key_sql[d_azp_user_id_azp_user],
						);
						# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_configuration_email, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_user, d_azp_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_m_temp . " = '2'", "LIMIT 1");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_configuration_modal_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_configuration_modal_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_configuration_modal_m_date_created => DATE_HOUR,
							d_azp_configuration_modal_m_date_modified => DATE_HOUR,
							d_azp_configuration_modal_m_deleted => '1',
							d_azp_configuration_modal_m_description => $empty_description,
							d_azp_configuration_modal_m_level => '2',
							d_azp_configuration_modal_m_status => '1',
							d_azp_configuration_modal_m_temp => '1',
							d_azp_configuration_modal_t_md_change => '33',
							d_azp_configuration_modal_t_md_create => '6',
							d_azp_configuration_modal_t_md_delete => '5',
							d_azp_configuration_modal_t_md_detail => '6',
							d_azp_configuration_modal_t_md_email => '6',
							d_azp_configuration_modal_t_md_import => '4',
							d_azp_configuration_modal_t_md_remove => '5',
							d_azp_configuration_modal_t_md_report => '5',
							d_azp_configuration_modal_t_md_restore => '5',
							d_azp_configuration_modal_t_md_sub_menu => '5',
							d_azp_configuration_modal_t_md_update => '6',
							d_azp_configuration_modal_v_id_azp_user => $key_sql[d_azp_user_id_azp_user],
						);
						# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_configuration_modal, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_user, d_azp_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_m_temp . " = '2'", "LIMIT 1");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_configuration_panel_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_configuration_panel_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_configuration_panel_m_date_created => DATE_HOUR,
							d_azp_configuration_panel_m_date_modified => DATE_HOUR,
							d_azp_configuration_panel_m_deleted => '1',
							d_azp_configuration_panel_m_description => $empty_description,
							d_azp_configuration_panel_m_level => '2',
							d_azp_configuration_panel_m_status => '1',
							d_azp_configuration_panel_m_temp => '1',
							d_azp_configuration_panel_t_pnl_change => '1',
							d_azp_configuration_panel_t_pnl_create => '1',
							d_azp_configuration_panel_t_pnl_delete => '1',
							d_azp_configuration_panel_t_pnl_detail => '1',
							d_azp_configuration_panel_t_pnl_email => '1',
							d_azp_configuration_panel_t_pnl_import => '1',
							d_azp_configuration_panel_t_pnl_remove => '1',
							d_azp_configuration_panel_t_pnl_report => '1',
							d_azp_configuration_panel_t_pnl_restore => '1',
							d_azp_configuration_panel_t_pnl_sub_menu => '1',
							d_azp_configuration_panel_t_pnl_update => '1',
							d_azp_configuration_panel_v_id_azp_user => $key_sql[d_azp_user_id_azp_user],
						);
						# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_configuration_panel, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_user, d_azp_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_m_temp . " = '2'", "LIMIT 1");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_data_personal_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_data_personal_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_data_personal_m_date_created => DATE_HOUR,
							d_azp_data_personal_m_date_modified => DATE_HOUR,
							d_azp_data_personal_m_deleted => '1',
							d_azp_data_personal_m_description => $empty_description,
							d_azp_data_personal_m_level => '2',
							d_azp_data_personal_m_status => '1',
							d_azp_data_personal_m_temp => '1',
							d_azp_data_personal_t_address => 'No Aplica',
							d_azp_data_personal_t_birth_date => '2000-01-01',
							d_azp_data_personal_t_identification => $empty_identification,
							d_azp_data_personal_t_names => ucwords(strtolower($empty_names)),
							d_azp_data_personal_t_phone_fixed => '0',
							d_azp_data_personal_t_phone_movil => '3003003000',
							d_azp_data_personal_t_surnames => ucwords(strtolower($empty_surnames)),
							d_azp_data_personal_v_id_azp_country => '1', #$empty_country,
							d_azp_data_personal_v_id_azp_document_type => $empty_document_type,
							d_azp_data_personal_v_id_azp_user => $key_sql[d_azp_user_id_azp_user],
						);
						# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_data_personal, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_user, d_azp_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_m_temp . " = '2'", "LIMIT 1");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_social_media_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_social_media_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_social_media_m_date_created => DATE_HOUR,
							d_azp_social_media_m_date_modified => DATE_HOUR,
							d_azp_social_media_m_deleted => '1',
							d_azp_social_media_m_description => $empty_description,
							d_azp_social_media_m_level => '2',
							d_azp_social_media_m_status => '1',
							d_azp_social_media_m_temp => '1',
							d_azp_social_media_t_facebook => '',
							d_azp_social_media_t_google_plus => '',
							d_azp_social_media_t_linked_in => '',
							d_azp_social_media_t_twitter => '',
							d_azp_social_media_v_id_azp_user => $key_sql[d_azp_user_id_azp_user],
						);
						# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_social_media, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select('*', t_azp_user, d_azp_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_m_temp . " = '2'", "LIMIT 1");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$empty_user = $key_sql[d_azp_user_id_azp_user];
						# Crear archivo dat_az.php en la ruta de core
						$var_file = fopen('../core/emails/' . $empty_user . '.php', 'w') or die ('Error: No se creo ningun archivo');
						# Escritura de un archivo en modo binario seguro
						fwrite($var_file, '<?php' . "\n");
						# Consultando tablas de la base de datos
						$var_sql = $this->db->select('*', t_azp_configuration_email, d_azp_configuration_email_v_id_azp_user . " = '" . $empty_user . "'");
						# Recorriendo las tablas consultadas
						foreach ($var_sql as $key_sql => $value_sql):
							# Escritura de un archivo en modo binario seguro
							fwrite($var_file, "	//------------------------------------------------" . "\n");
							fwrite($var_file, "	# Constantes de PHPMailer" . "\n");
							fwrite($var_file, "	define('PHPMAILER_HOST', '" . $value_sql[d_azp_configuration_email_t_host] . "');" . "\n");
							fwrite($var_file, "	define('PHPMAILER_USER', '" . $value_sql[d_azp_configuration_email_t_email] . "');" . "\n");
							fwrite($var_file, "	define('PHPMAILER_PASS', '" . $value_sql[d_azp_configuration_email_t_pass] . "');" . "\n");
							fwrite($var_file, "	define('PHPMAILER_PORT', 465" . $value_sql[d_azp_configuration_email_t_port] . ");" . "\n");
							fwrite($var_file, "	define('PHPMAILER_SECURE', '" . $value_sql[d_azp_configuration_email_t_secure] . "');" . "\n");
						endforeach;
						# Escritura de un archivo en modo binario seguro
						fwrite($var_file, '?>');
						fclose($var_file);
						# Dar permisos a la ruta y archivo
						chmod('../core/emails/' . $empty_user . '.php', 0777);
					endforeach;
				}*/
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_user_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_user, $var_array, d_azp_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_user_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "' AND " . d_azp_user_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "' AND " . d_azp_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "' AND " . d_azp_user_m_level . " = '2'");
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
		final public function sql_azp_user_remove(array $data) : array {
			$var_error = $this->error_sql_azp_user_remove($data);
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
				$var_array = array(d_azp_user_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_user, $var_array, d_azp_user_id_azp_user . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_user_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "' AND " . d_azp_user_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "' AND " . d_azp_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "' AND " . d_azp_user_m_level . " = '2'");
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
		final public function sql_azp_user_restore(array $data) : array {
			$var_error = $this->error_sql_azp_user_restore($data);
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
				$var_array = array(d_azp_user_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_user, $var_array, d_azp_user_id_azp_user . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_user_update(array $data) {
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
				if (!isset($data['field_up_login'])) { throw new Exception('<b>Error:</b> El campo de usuario esta prohibido modificar.'); }
				if (!isset($data['field_up_fct_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_up_role'])) { throw new Exception('<b>Error:</b> El campo de rol esta prohibido modificar.'); }
				//if (!isset($data['field_up_address'])) { throw new Exception('<b>Error:</b> El campo de direccion esta prohibido modificar.'); }
				//if (!isset($data['field_up_birth_date'])) { throw new Exception('<b>Error:</b> El campo de fecha de nacimiento esta prohibido modificar.'); }
				if (!isset($data['field_up_identification'])) { throw new Exception('<b>Error:</b> El campo de identificacion esta prohibido modificar.'); }
				if (!isset($data['field_up_names'])) { throw new Exception('<b>Error:</b> El campo de nombres esta prohibido modificar.'); }
				//if (!isset($data['field_up_phone_fixed'])) { throw new Exception('<b>Error:</b> El campo de telefono fijo esta prohibido modificar.'); }
				//if (!isset($data['field_up_phone_movil'])) { throw new Exception('<b>Error:</b> El campo de telefono movil esta prohibido modificar.'); }
				if (!isset($data['field_up_surnames'])) { throw new Exception('<b>Error:</b> El campo de apellidos esta prohibido modificar.'); }
				//if (!isset($data['field_up_country'])) { throw new Exception('<b>Error:</b> El campo de pais esta prohibido modificar.'); }
				if (!isset($data['field_up_document_type'])) { throw new Exception('<b>Error:</b> El campo de tipo de documento esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_email = $this->db->scape($data['field_up_email']);
				$empty_email_confirm = $this->db->scape($data['field_up_email_confirm']);
				$empty_login = $this->db->scape($data['field_up_login']);
				$empty_fct_client = $this->db->scape($data['field_up_fct_client']);
				$empty_role = $this->db->scape($data['field_up_role']);
				//$empty_address = $this->db->scape($data['field_up_address']);
				//$empty_birth_date = $this->db->scape($data['field_up_birth_date']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_names = $this->db->scape($data['field_up_names']);
				//$empty_phone_fixed = $this->db->scape($data['field_up_phone_fixed']);
				//$empty_phone_movil = $this->db->scape($data['field_up_phone_movil']);
				$empty_surnames = $this->db->scape($data['field_up_surnames']);
				//$empty_country = $this->db->scape($data['field_up_country']);
				$empty_document_type = $this->db->scape($data['field_up_document_type']);
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
				if (Func::emp($empty_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico es oblgitario.');
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
				if (Func::emp($empty_login)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario es oblgitario.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_login)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_login) > 15) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario permite maximo hasta 15 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_login, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_login)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario no permite tener ningun espacio en blanco.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_fct_client) || strtolower($empty_fct_client) == strtolower('seleccionar') || $empty_fct_client == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_fct_client)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_role) || strtolower($empty_role) == strtolower('seleccionar') || $empty_role == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de rol es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_role)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de rol solo permite numeros.');
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
				if (Func::emp($empty_names)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres es oblgitario.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_names)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres solo permite letras.');
				}
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
					throw new Exception('<b>Error:</b> El campo de apellidos es oblgitario.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_surnames)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de apellidos solo permite letras.');
				}
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
				if (Func::emp($empty_document_type) || strtolower($empty_document_type) == strtolower('seleccionar') || $empty_document_type == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo documento es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_document_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo documento solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de identificacion es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de identificacion solo permite numeros.');
				}
				#---------------------------------------------#
				if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de identificacion permite maximo hasta 255 caracteres.');
				}
				#-------------------------------------------------------------------------#
				/*if (strlen($empty_phone_fixed) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo debe tener minimo 1 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_phone_fixed) > 8) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo permite maximo hasta 8 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_phone_fixed, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo no permite ningun espacio en blanco.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_phone_fixed)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_phone_movil)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_phone_movil)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil solo permite numeros.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_phone_movil) != 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil permite solamente 10 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_phone_movil, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil no permite ningun espacio en blanco.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_address)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_address) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_address, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_address)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_birth_date) || $empty_birth_date == 'aaaa-mm-dd') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha nacimiento es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_birth_date) < 10 || strlen($empty_birth_date) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha nacimiento está mal diligenciado, debe ser aaaa-mm-dd.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_country) || strtolower($empty_country) == strtolower('seleccionar') || $empty_country == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de pais es oblgitario.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_country)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de pais solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "' AND " . d_azp_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_id . "' AND " . d_azp_user_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				/*$sql_email = $this->db->select('*', t_azp_user, d_azp_user_t_email . " = '" . $empty_email . "'");
				if (true == $sql_email) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_email[0][0]) != strtolower($empty_email)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El correo electronico digitado ya existe registrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				/*$sql_login = $this->db->select('*', t_azp_user, d_azp_user_t_login . " = '" . $empty_login . "'");
				if (true == $sql_login) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_login[0][0]) != strtolower($empty_login)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El usuario digitado ya existe registrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				/*$sql_identification = $this->db->select('*', t_azp_data_personal, d_azp_data_personal_t_identification . " = '" . $empty_identification . "'");
				if (true == $sql_identification) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_identification[0][0]) != strtolower($empty_identification)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La identificacion digitada ya existe registrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_fct_client = $this->db->select('*', t_azp_fct_client, d_azp_fct_client_id_azp_fct_client . " = '" . $empty_fct_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_fct_client) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_fct_client) == '') { $sql_fct_client[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_fct_client[0][0]) != strtolower($empty_fct_client)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El cliente seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_role = $this->db->select('*', t_azp_role, d_azp_role_id_azp_role . " = '" . $empty_role . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_role) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_role) == '') { $sql_role[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_role[0][0]) != strtolower($empty_role)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El rol seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				/*$sql_country = $this->db->select('*', t_azp_country, d_azp_country_id_azp_country . " = '" . $empty_country . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_country) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_country) == '') { $sql_country[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_country[0][0]) != strtolower($empty_country)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El pais seleccionado no se encuentra registrado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_document_type = $this->db->select('*', t_azp_document_type, d_azp_document_type_id_azp_document_type . " = '" . $empty_document_type . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_document_type) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_document_type) == '') { $sql_document_type[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_document_type[0][0]) != strtolower($empty_document_type)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tramite seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_state = $this->db->select('*', t_azp_sys_state, d_azp_sys_state_id_azp_sys_state . " = '" . $empty_state . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_state) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> El estado seleccionado no se encuentra registrado.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_user_update(array $data) : array {
			$var_error = $this->error_sql_azp_user_update($data);
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
				$empty_login = $this->db->scape($data['field_up_login']);
				$empty_fct_client = $this->db->scape($data['field_up_fct_client']);
				$empty_role = $this->db->scape($data['field_up_role']);
				//$empty_address = $this->db->scape($data['field_up_address']);
				//$empty_birth_date = $this->db->scape($data['field_up_birth_date']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_names = $this->db->scape($data['field_up_names']);
				//$empty_phone_fixed = $this->db->scape($data['field_up_phone_fixed']);
				//$empty_phone_movil = $this->db->scape($data['field_up_phone_movil']);
				$empty_surnames = $this->db->scape($data['field_up_surnames']);
				//$empty_country = $this->db->scape($data['field_up_country']);
				$empty_document_type = $this->db->scape($data['field_up_document_type']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->query("
					-- ---------------------------------------------------------------
					SELECT
						tc_azp_user." . d_azp_user_id_azp_user . " AS 'lbl_azp_user_id_azp_user',
						tc_azp_user." . d_azp_user_m_date_created . " AS 'lbl_azp_user_m_date_created',
						tc_azp_user." . d_azp_user_m_date_modified . " AS 'lbl_azp_user_m_date_modified',
						tc_azp_user." . d_azp_user_m_deleted . " AS 'lbl_azp_user_m_deleted',
						tc_azp_user." . d_azp_user_m_description . " AS 'lbl_azp_user_m_description',
						tc_azp_user." . d_azp_user_m_level . " AS 'lbl_azp_user_m_level',
						tc_azp_user." . d_azp_user_m_status . " AS 'lbl_azp_user_m_status',
						tc_azp_user." . d_azp_user_m_temp . " AS 'lbl_azp_user_m_temp',
						tc_azp_user." . d_azp_user_t_email . " AS 'lbl_azp_user_t_email',
						tc_azp_user." . d_azp_user_t_key_active . " AS 'lbl_azp_user_t_key_active',
						tc_azp_user." . d_azp_user_t_key_password . " AS 'lbl_azp_user_t_key_password',
						tc_azp_user." . d_azp_user_t_key_password_temp . " AS 'lbl_azp_user_t_key_password_temp',
						tc_azp_user." . d_azp_user_t_key_status . " AS 'lbl_azp_user_t_key_status',
						tc_azp_user." . d_azp_user_t_last_connection . " AS 'lbl_azp_user_t_last_connection',
						tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login',
						tc_azp_user." . d_azp_user_t_password . " AS 'lbl_azp_user_t_password',
						tc_azp_user." . d_azp_user_t_session . " AS 'lbl_azp_user_t_session',
						tc_azp_application." . d_azp_application_t_name . " AS 'lbl_azp_application_t_name',
						tc_azp_fct_client." . d_azp_fct_client_t_name . " AS 'lbl_azp_fct_client_t_name',
						tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name'
					FROM " . t_azp_user . " tc_azp_user
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_application . " tc_azp_application
						ON tc_azp_user." . d_azp_user_v_id_azp_application . "
							= tc_azp_application." . d_azp_application_id_azp_application . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_fct_client ." tc_azp_fct_client
						ON tc_azp_user." . d_azp_user_v_id_azp_fct_client . "
							= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_role . " tc_azp_role
						ON tc_azp_user." . d_azp_user_v_id_azp_role . "
							= tc_azp_role." . d_azp_role_id_azp_role . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_user." . d_azp_user_id_azp_user . " = '" . $empty_id . "'
					LIMIT 1
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						if ($key_sql['lbl_azp_user_t_last_connection'] == NULL || $key_sql['lbl_azp_user_t_last_connection'] == '0000-00-00 00:00:00') {
							$var_array = array(
								d_azs_user_m_by_created => $_SESSION[SESS_APP_ID],
								d_azs_user_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azs_user_m_date_created => DATE_HOUR,
								d_azs_user_m_date_modified => DATE_HOUR,
								d_azs_user_m_deleted => $key_sql['lbl_azp_user_m_deleted'],
								d_azs_user_m_description => $key_sql['lbl_azp_user_m_description'],
								d_azs_user_m_level => $key_sql['lbl_azp_user_m_level'],
								d_azs_user_m_status => $key_sql['lbl_azp_user_m_status'],
								d_azs_user_m_temp => $key_sql['lbl_azp_user_m_temp'],
								d_azs_user_t_email => strtolower($key_sql['lbl_azp_user_t_email']),
								d_azs_user_t_key_active => $key_sql['lbl_azp_user_t_key_active'],
								d_azs_user_t_key_password => $key_sql['lbl_azp_user_t_key_password'],
								d_azs_user_t_key_password_temp => $key_sql['lbl_azp_user_t_key_password_temp'],
								d_azs_user_t_key_status => $key_sql['lbl_azp_user_t_key_status'],
								d_azs_user_t_login => strtolower($key_sql['lbl_azp_user_t_login']),
								d_azs_user_t_password => $key_sql['lbl_azp_user_t_password'],
								d_azs_user_t_session => $key_sql['lbl_azp_user_t_session'],
								d_azs_user_u_application => $key_sql['lbl_azp_application_t_name'],
								d_azs_user_u_fct_client => $key_sql['lbl_azp_fct_client_t_name'],
								d_azs_user_u_role => $key_sql['lbl_azp_role_t_name'],
								d_azs_user_v_id_azp_user => $empty_id,
							);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->insert(t_azs_user, $var_array);
						} else {
							$var_array = array(
								d_azs_user_m_by_created => $_SESSION[SESS_APP_ID],
								d_azs_user_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azs_user_m_date_created => DATE_HOUR,
								d_azs_user_m_date_modified => DATE_HOUR,
								d_azs_user_m_deleted => $key_sql['lbl_azp_user_m_deleted'],
								d_azs_user_m_description => $key_sql['lbl_azp_user_m_description'],
								d_azs_user_m_level => $key_sql['lbl_azp_user_m_level'],
								d_azs_user_m_status => $key_sql['lbl_azp_user_m_status'],
								d_azs_user_m_temp => $key_sql['lbl_azp_user_m_temp'],
								d_azs_user_t_email => strtolower($key_sql['lbl_azp_user_t_email']),
								d_azs_user_t_key_active => $key_sql['lbl_azp_user_t_key_active'],
								d_azs_user_t_key_password => $key_sql['lbl_azp_user_t_key_password'],
								d_azs_user_t_key_password_temp => $key_sql['lbl_azp_user_t_key_password_temp'],
								d_azs_user_t_key_status => $key_sql['lbl_azp_user_t_key_status'],
								d_azs_user_t_last_connection => $key_sql['lbl_azp_user_t_last_connection'],
								d_azs_user_t_login => strtolower($key_sql['lbl_azp_user_t_login']),
								d_azs_user_t_password => $key_sql['lbl_azp_user_t_password'],
								d_azs_user_t_session => $key_sql['lbl_azp_user_t_session'],
								d_azs_user_u_application => $key_sql['lbl_azp_application_t_name'],
								d_azs_user_u_role => $key_sql['lbl_azp_role_t_name'],
								d_azs_user_v_id_azp_user => $empty_id,
							);
							# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
							$this->db->insert(t_azs_user, $var_array);
						}
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_user_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_user_m_date_modified => DATE_HOUR,
					d_azp_user_m_description => $empty_description,
					d_azp_user_m_status => $empty_state,
					d_azp_user_t_email => strtolower($empty_email),
					d_azp_user_t_login => strtolower($empty_login),
					d_azp_user_v_id_azp_fct_client => $empty_fct_client,
					d_azp_user_v_id_azp_role => $empty_role,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_user, $var_array, d_azp_user_id_azp_user . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->query("
					-- ---------------------------------------------------------------
					SELECT
						tc_azp_data_personal." . d_azp_data_personal_id_azp_data_personal . " AS 'lbl_azp_data_personal_id_azp_data_personal',
						tc_azp_data_personal." . d_azp_data_personal_m_date_created . " AS 'lbl_azp_data_personal_m_date_created',
						tc_azp_data_personal." . d_azp_data_personal_m_date_modified . " AS 'lbl_azp_data_personal_m_date_modified',
						tc_azp_data_personal." . d_azp_data_personal_m_deleted . " AS 'lbl_azp_data_personal_m_deleted',
						tc_azp_data_personal." . d_azp_data_personal_m_description . " AS 'lbl_azp_data_personal_m_description',
						tc_azp_data_personal." . d_azp_data_personal_m_level . " AS 'lbl_azp_data_personal_m_level',
						tc_azp_data_personal." . d_azp_data_personal_m_status . " AS 'lbl_azp_data_personal_m_status',
						tc_azp_data_personal." . d_azp_data_personal_m_temp . " AS 'lbl_azp_data_personal_m_temp',
						tc_azp_data_personal." . d_azp_data_personal_t_address . " AS 'lbl_azp_data_personal_t_address',
						tc_azp_data_personal." . d_azp_data_personal_t_birth_date . " AS 'lbl_azp_data_personal_t_birth_date',
						tc_azp_data_personal." . d_azp_data_personal_t_identification . " AS 'lbl_azp_data_personal_t_identification',
						tc_azp_data_personal." . d_azp_data_personal_t_names . " AS 'lbl_azp_data_personal_t_names',
						tc_azp_data_personal." . d_azp_data_personal_t_phone_fixed . " AS 'lbl_azp_data_personal_t_phone_fixed',
						tc_azp_data_personal." . d_azp_data_personal_t_phone_movil . " AS 'lbl_azp_data_personal_t_phone_movil',
						tc_azp_data_personal." . d_azp_data_personal_t_surnames . " AS 'lbl_azp_data_personal_t_surnames',
						tc_azp_country." . d_azp_country_t_name . " AS 'lbl_azp_country_t_name',
						tc_azp_document_type." . d_azp_document_type_t_name . " AS 'lbl_azp_document_type_t_name',
						tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
					FROM " . t_azp_data_personal . " tc_azp_data_personal
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_country . " tc_azp_country
						ON tc_azp_data_personal." . d_azp_data_personal_v_id_azp_country . "
							= tc_azp_country." . d_azp_country_id_azp_country . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_document_type . " tc_azp_document_type
						ON tc_azp_data_personal." . d_azp_data_personal_v_id_azp_document_type . "
							= tc_azp_document_type." . d_azp_document_type_id_azp_document_type . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_user . " tc_azp_user
						ON tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
							= tc_azp_user." . d_azp_user_id_azp_user . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . " = '" . $empty_id . "'
					LIMIT 1
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_array = array(
							d_azs_data_personal_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_data_personal_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_data_personal_m_date_created => DATE_HOUR,
							d_azs_data_personal_m_date_modified => DATE_HOUR,
							d_azs_data_personal_m_deleted => $key_sql['lbl_azp_data_personal_m_deleted'],
							d_azs_data_personal_m_description => $key_sql['lbl_azp_data_personal_m_description'],
							d_azs_data_personal_m_level => $key_sql['lbl_azp_data_personal_m_level'],
							d_azs_data_personal_m_status => $key_sql['lbl_azp_data_personal_m_status'],
							d_azs_data_personal_m_temp => $key_sql['lbl_azp_data_personal_m_temp'],
							d_azs_data_personal_t_address => $key_sql['lbl_azp_data_personal_t_address'],
							d_azs_data_personal_t_birth_date => $key_sql['lbl_azp_data_personal_t_birth_date'],
							d_azs_data_personal_t_identification => $key_sql['lbl_azp_data_personal_t_identification'],
							d_azs_data_personal_t_names => $key_sql['lbl_azp_data_personal_t_names'],
							d_azs_data_personal_t_phone_fixed => $key_sql['lbl_azp_data_personal_t_phone_fixed'],
							d_azs_data_personal_t_phone_movil => $key_sql['lbl_azp_data_personal_t_phone_movil'],
							d_azs_data_personal_t_surnames => $key_sql['lbl_azp_data_personal_t_surnames'],
							d_azs_data_personal_u_country => $key_sql['lbl_azp_country_t_name'],
							d_azs_data_personal_u_document_type => $key_sql['lbl_azp_document_type_t_name'],
							d_azs_data_personal_u_user => $key_sql['lbl_azp_user_t_login'],
							d_azs_data_personal_v_id_azp_user => $empty_id,
						);
						# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_data_personal, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_data_personal_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_data_personal_m_date_modified => DATE_HOUR,
					d_azp_data_personal_m_description => $empty_description,
					d_azp_data_personal_m_status => $empty_state,
					//d_azp_data_personal_t_address => $empty_address,
					//d_azp_data_personal_t_birth_date => $empty_birth_date,
					d_azp_data_personal_t_identification => $empty_identification,
					d_azp_data_personal_t_names => $empty_names,
					//d_azp_data_personal_t_phone_fixed => $empty_phone_fixed,
					//d_azp_data_personal_t_phone_movil => $empty_phone_movil,
					d_azp_data_personal_t_surnames => $empty_surnames,
					//d_azp_data_personal_v_id_azp_country => $empty_country,
					d_azp_data_personal_v_id_azp_document_type => $empty_document_type,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_data_personal, $var_array, d_azp_data_personal_v_id_azp_user . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_session() {
			# Seleccionar los registros de la tabla
			return $this->db->select(d_azp_user_t_login, t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] .  "'", 'LIMIT 1');
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_application() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_application, d_azp_application_m_deleted . " = '1' AND " . d_azp_application_m_status . " = '1'", "ORDER BY " . d_azp_application_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_country() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_country, d_azp_country_m_deleted . " = '1' AND " . d_azp_country_m_status . " = '1'", "ORDER BY " . d_azp_country_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_document_type() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_document_type, d_azp_document_type_m_deleted . " = '1' ORDER BY " . d_azp_document_type_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_fct_client() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_fct_client, d_azp_fct_client_m_deleted . " = '1' AND " . d_azp_fct_client_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_sys_level() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_sys_level, d_azp_sys_level_m_deleted . " = '1' AND " . d_azp_sys_level_m_status . " = '1'", "ORDER BY " . d_azp_sys_level_t_value . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_role_main() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_role, d_azp_role_id_azp_role . " >= '1' AND " . d_azp_role_m_deleted . " = '1' AND " . d_azp_role_m_status . " = '1'", "ORDER BY " . d_azp_role_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_role_minor() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_role, d_azp_role_id_azp_role . " >= '2' AND " . d_azp_role_m_deleted . " = '1' AND " . d_azp_role_m_status . " = '1'", "ORDER BY " . d_azp_role_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_user_role() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_user_m_deleted . " = '1' AND " . d_azp_user_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_user_rols() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_rols." . d_azp_rols_id_azp_rols . " AS 'lbl_azp_rols_id_azp_rols'
				FROM " . t_azp_user . " tc_azp_user

				INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
					ON tc_azp_user." . d_azp_user_id_azp_user . "
						= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "

				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_user." . d_azp_user_v_id_azp_role . "
						= tc_azp_role." . d_azp_role_id_azp_role . "

				INNER JOIN " . t_azp_platform . " tc_azp_platform
					ON tc_azp_role." . d_azp_role_v_id_azp_platform . "
						= tc_azp_platform." . d_azp_platform_id_azp_platform . "

				INNER JOIN " . t_azp_rols . " tc_azp_rols
					ON tc_azp_role." . d_azp_role_v_id_azp_rols . "
						= tc_azp_rols." . d_azp_rols_id_azp_rols . "

				WHERE tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_user_data() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT * FROM " . t_azp_user . " tc_azp_user
				INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
					ON tc_azp_user." . d_azp_user_id_azp_user . "
						= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
				WHERE tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
			");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>