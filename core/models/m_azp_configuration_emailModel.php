<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_configuration_emailModel extends Models implements OCREND {
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
					tc_azp_configuration_email." . d_azp_configuration_email_id_azp_configuration_email . " AS 'lbl_azp_configuration_email_id_azp_configuration_email',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_email." . d_azp_configuration_email_m_date_created . " AS 'lbl_azp_configuration_email_m_date_created',
					tc_azp_configuration_email." . d_azp_configuration_email_m_date_modified . " AS 'lbl_azp_configuration_email_m_date_modified',
					tc_azp_configuration_email." . d_azp_configuration_email_m_description . " AS 'lbl_azp_configuration_email_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_configuration_email." . d_azp_configuration_email_t_connect . " AS 'lbl_azp_configuration_email_t_connect',
					tc_azp_configuration_email." . d_azp_configuration_email_t_email . " AS 'lbl_azp_configuration_email_t_email',
					tc_azp_configuration_email." . d_azp_configuration_email_t_host . " AS 'lbl_azp_configuration_email_t_host',
					tc_azp_configuration_email." . d_azp_configuration_email_t_pass . " AS 'lbl_azp_configuration_email_t_pass',
					tc_azp_configuration_email." . d_azp_configuration_email_t_port . " AS 'lbl_azp_configuration_email_t_port',
					tc_azp_configuration_email." . d_azp_configuration_email_t_secure . " AS 'lbl_azp_configuration_email_t_secure',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_email . " tc_azp_configuration_email
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_email." . d_azp_configuration_email_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_email." . d_azp_configuration_email_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_configuration_email." . d_azp_configuration_email_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_configuration_email." . d_azs_configuration_email_id_azs_configuration_email . " AS 'lbl_azs_configuration_email_id_azs_configuration_email',
					tc_azs_configuration_email." . d_azs_configuration_email_m_date_modified . " AS 'lbl_azs_configuration_email_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_configuration_email." . d_azs_configuration_email_m_date_created . " AS 'lbl_azs_configuration_email_m_date_created',
					tc_azs_configuration_email." . d_azs_configuration_email_m_date_modified . " AS 'lbl_azs_configuration_email_m_date_modified',
					tc_azs_configuration_email." . d_azs_configuration_email_m_description . " AS 'lbl_azs_configuration_email_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_configuration_email." . d_azs_configuration_email_t_connect . " AS 'lbl_azs_configuration_email_t_connect',
					tc_azs_configuration_email." . d_azs_configuration_email_t_email . " AS 'lbl_azs_configuration_email_t_email',
					tc_azs_configuration_email." . d_azs_configuration_email_t_host . " AS 'lbl_azs_configuration_email_t_host',
					tc_azs_configuration_email." . d_azs_configuration_email_t_pass . " AS 'lbl_azs_configuration_email_t_pass',
					tc_azs_configuration_email." . d_azs_configuration_email_t_port . " AS 'lbl_azs_configuration_email_t_port',
					tc_azs_configuration_email." . d_azs_configuration_email_t_secure . " AS 'lbl_azs_configuration_email_t_secure',
					tc_azs_configuration_email." . d_azs_configuration_email_u_user . " AS 'lbl_azs_configuration_email_u_user'
				FROM " . t_azs_configuration_email . " tc_azs_configuration_email
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_configuration_email." . d_azs_configuration_email_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_configuration_email." . d_azs_configuration_email_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_configuration_email." . d_azs_configuration_email_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_configuration_email." . d_azs_configuration_email_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_configuration_email." . d_azs_configuration_email_v_id_azp_configuration_email . " = '" . $this->id . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_email." . d_azp_configuration_email_id_azp_configuration_email . " AS 'lbl_azp_configuration_email_id_azp_configuration_email',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_email." . d_azp_configuration_email_m_date_created . " AS 'lbl_azp_configuration_email_m_date_created',
					tc_azp_configuration_email." . d_azp_configuration_email_m_date_modified . " AS 'lbl_azp_configuration_email_m_date_modified',
					tc_azp_configuration_email." . d_azp_configuration_email_m_description . " AS 'lbl_azp_configuration_email_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_configuration_email." . d_azp_configuration_email_t_connect . " AS 'lbl_azp_configuration_email_t_connect',
					tc_azp_configuration_email." . d_azp_configuration_email_t_email . " AS 'lbl_azp_configuration_email_t_email',
					tc_azp_configuration_email." . d_azp_configuration_email_t_host . " AS 'lbl_azp_configuration_email_t_host',
					tc_azp_configuration_email." . d_azp_configuration_email_t_pass . " AS 'lbl_azp_configuration_email_t_pass',
					tc_azp_configuration_email." . d_azp_configuration_email_t_port . " AS 'lbl_azp_configuration_email_t_port',
					tc_azp_configuration_email." . d_azp_configuration_email_t_secure . " AS 'lbl_azp_configuration_email_t_secure',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_email . " tc_azp_configuration_email
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_email." . d_azp_configuration_email_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_email." . d_azp_configuration_email_id_azp_configuration_email . " = '" . $this->id . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_email." . d_azp_configuration_email_id_azp_configuration_email . " AS 'lbl_azp_configuration_email_id_azp_configuration_email',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_email." . d_azp_configuration_email_m_date_created . " AS 'lbl_azp_configuration_email_m_date_created',
					tc_azp_configuration_email." . d_azp_configuration_email_m_date_modified . " AS 'lbl_azp_configuration_email_m_date_modified',
					tc_azp_configuration_email." . d_azp_configuration_email_m_description . " AS 'lbl_azp_configuration_email_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_configuration_email." . d_azp_configuration_email_t_connect . " AS 'lbl_azp_configuration_email_t_connect',
					tc_azp_configuration_email." . d_azp_configuration_email_t_email . " AS 'lbl_azp_configuration_email_t_email',
					tc_azp_configuration_email." . d_azp_configuration_email_t_host . " AS 'lbl_azp_configuration_email_t_host',
					tc_azp_configuration_email." . d_azp_configuration_email_t_pass . " AS 'lbl_azp_configuration_email_t_pass',
					tc_azp_configuration_email." . d_azp_configuration_email_t_port . " AS 'lbl_azp_configuration_email_t_port',
					tc_azp_configuration_email." . d_azp_configuration_email_t_secure . " AS 'lbl_azp_configuration_email_t_secure',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_email . " tc_azp_configuration_email
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_email." . d_azp_configuration_email_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_email." . d_azp_configuration_email_m_deleted . " = '3'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_email." . d_azp_configuration_email_id_azp_configuration_email . " AS 'lbl_azp_configuration_email_id_azp_configuration_email',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_email." . d_azp_configuration_email_m_date_created . " AS 'lbl_azp_configuration_email_m_date_created',
					tc_azp_configuration_email." . d_azp_configuration_email_m_date_modified . " AS 'lbl_azp_configuration_email_m_date_modified',
					tc_azp_configuration_email." . d_azp_configuration_email_m_description . " AS 'lbl_azp_configuration_email_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_configuration_email." . d_azp_configuration_email_t_connect . " AS 'lbl_azp_configuration_email_t_connect',
					tc_azp_configuration_email." . d_azp_configuration_email_t_email . " AS 'lbl_azp_configuration_email_t_email',
					tc_azp_configuration_email." . d_azp_configuration_email_t_host . " AS 'lbl_azp_configuration_email_t_host',
					tc_azp_configuration_email." . d_azp_configuration_email_t_pass . " AS 'lbl_azp_configuration_email_t_pass',
					tc_azp_configuration_email." . d_azp_configuration_email_t_port . " AS 'lbl_azp_configuration_email_t_port',
					tc_azp_configuration_email." . d_azp_configuration_email_t_secure . " AS 'lbl_azp_configuration_email_t_secure',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_email . " tc_azp_configuration_email
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_email." . d_azp_configuration_email_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_email." . d_azp_configuration_email_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_deleted . " = '1'
					AND tc_azp_user." . d_azp_user_m_status . " = '1'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_email." . d_azp_configuration_email_id_azp_configuration_email . " AS 'lbl_azp_configuration_email_id_azp_configuration_email',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_email." . d_azp_configuration_email_m_date_created . " AS 'lbl_azp_configuration_email_m_date_created',
					tc_azp_configuration_email." . d_azp_configuration_email_m_date_modified . " AS 'lbl_azp_configuration_email_m_date_modified',
					tc_azp_configuration_email." . d_azp_configuration_email_m_description . " AS 'lbl_azp_configuration_email_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_configuration_email." . d_azp_configuration_email_t_connect . " AS 'lbl_azp_configuration_email_t_connect',
					tc_azp_configuration_email." . d_azp_configuration_email_t_email . " AS 'lbl_azp_configuration_email_t_email',
					tc_azp_configuration_email." . d_azp_configuration_email_t_host . " AS 'lbl_azp_configuration_email_t_host',
					tc_azp_configuration_email." . d_azp_configuration_email_t_pass . " AS 'lbl_azp_configuration_email_t_pass',
					tc_azp_configuration_email." . d_azp_configuration_email_t_port . " AS 'lbl_azp_configuration_email_t_port',
					tc_azp_configuration_email." . d_azp_configuration_email_t_secure . " AS 'lbl_azp_configuration_email_t_secure',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_email . " tc_azp_configuration_email
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_email." . d_azp_configuration_email_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_email." . d_azp_configuration_email_m_deleted . " = '2'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_email." . d_azp_configuration_email_id_azp_configuration_email . " AS 'lbl_azp_configuration_email_id_azp_configuration_email',
					tc_azp_configuration_email." . d_azp_configuration_email_m_by_created . " AS 'lbl_azp_configuration_email_m_by_created',
					tc_azp_configuration_email." . d_azp_configuration_email_m_by_modified . " AS 'lbl_azp_configuration_email_m_by_modified',
					tc_azp_configuration_email." . d_azp_configuration_email_m_date_created . " AS 'lbl_azp_configuration_email_m_date_created',
					tc_azp_configuration_email." . d_azp_configuration_email_m_date_modified . " AS 'lbl_azp_configuration_email_m_date_modified',
					tc_azp_configuration_email." . d_azp_configuration_email_m_description . " AS 'lbl_azp_configuration_email_m_description',
					tc_azp_configuration_email." . d_azp_configuration_email_m_level . " AS 'lbl_azp_configuration_email_m_level',
					tc_azp_configuration_email." . d_azp_configuration_email_m_status . " AS 'lbl_azp_configuration_email_m_status',
					tc_azp_configuration_email." . d_azp_configuration_email_t_connect . " AS 'lbl_azp_configuration_email_t_connect',
					tc_azp_configuration_email." . d_azp_configuration_email_t_email . " AS 'lbl_azp_configuration_email_t_email',
					tc_azp_configuration_email." . d_azp_configuration_email_t_host . " AS 'lbl_azp_configuration_email_t_host',
					tc_azp_configuration_email." . d_azp_configuration_email_t_pass . " AS 'lbl_azp_configuration_email_t_pass',
					tc_azp_configuration_email." . d_azp_configuration_email_t_port . " AS 'lbl_azp_configuration_email_t_port',
					tc_azp_configuration_email." . d_azp_configuration_email_t_secure . " AS 'lbl_azp_configuration_email_t_secure',
					tc_azp_configuration_email." . d_azp_configuration_email_v_id_azp_user . " AS 'lbl_azp_configuration_email_v_id_azp_user'
				FROM " . t_azp_configuration_email . " tc_azp_configuration_email
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_email." . d_azp_configuration_email_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_email." . d_azp_configuration_email_id_azp_configuration_email . " = '" . $this->id . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_configuration_email_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_configuration_email, d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('<b>Error:</b> El registro que está eliminando no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_configuration_email, d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "' AND " . d_azp_configuration_email_m_deleted . " = '3'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_id) { foreach ($sql_id as $key => $value): throw new Exception('<b>Error:</b> El registro que está procesando ya se encuentra eliminado.'); endforeach; }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_configuration_email,
					d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "' AND " .
					d_azp_configuration_email_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_configuration_email_m_level . " = '1'"
				);
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_configuration_email,
					d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "' AND " .
					d_azp_configuration_email_m_level . " = '2'"
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
		final public function sql_azp_configuration_email_delete(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_email_delete($data);
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
				$var_array = array(d_azp_configuration_email_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_configuration_email, $var_array, d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_configuration_email_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_email'])) { throw new Exception('<b>Error:</b> El campo de correo electronico esta prohibido modificar.'); }
				if (!isset($data['field_cr_host'])) { throw new Exception('<b>Error:</b> El campo de host esta prohibido modificar.'); }
				if (!isset($data['field_cr_pass'])) { throw new Exception('<b>Error:</b> El campo de contraseña esta prohibido modificar.'); }
				if (!isset($data['field_cr_port'])) { throw new Exception('<b>Error:</b> El campo de puerto esta prohibido modificar.'); }
				if (!isset($data['field_cr_secure'])) { throw new Exception('<b>Error:</b> El campo de seguridad esta prohibido modificar.'); }
				if (!isset($data['field_cr_user'])) { throw new Exception('<b>Error:</b> El campo de usuario esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_email = $this->db->scape($data['field_cr_email']);
				$empty_host = $this->db->scape($data['field_cr_host']);
				$empty_pass = $this->db->scape($data['field_cr_pass']);
				$empty_port = $this->db->scape($data['field_cr_port']);
				$empty_secure = $this->db->scape($data['field_cr_secure']);
				$empty_user = $this->db->scape($data['field_cr_user']);
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
				#---------------------------------------------#
				if (strpos($empty_email, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico no permite tener ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_host)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de host es obligatorio.');
				}
				#---------------------------------------------#
				if (strlen($empty_host) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de host permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_host, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de host no permite tener ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_host)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de host no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pass)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña es obligatorio.');
				}
				#---------------------------------------------#
				if (strlen($empty_pass) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_pass, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_pass)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_port)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de puerto es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_port)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de puerto solo permite numeros.');
				}
				#---------------------------------------------#
				if (strlen($empty_port) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de puerto permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_port, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de puerto no permite tener ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_port)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de puerto no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_secure)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de seguridad es obligatorio.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_secure)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de seguridad solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_secure) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de seguridad permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_secure, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de seguridad no permite tener ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_secure)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de seguridad no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_user) || strtolower($empty_user) == strtolower('seleccionar') || $empty_user == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_user)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_found = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_user . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El usuario seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_query = $this->db->select('*', t_azp_configuration_email, d_azp_configuration_email_v_id_azp_user . " = '" . $empty_user . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_query) { throw new Exception('<b>Error:</b> El usuario seleccionado ya existe registrado.'); }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_configuration_email_insert(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_email_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_email = $this->db->scape($data['field_cr_email']);
				$empty_host = $this->db->scape($data['field_cr_host']);
				$empty_pass = $this->db->scape($data['field_cr_pass']);
				$empty_port = $this->db->scape($data['field_cr_port']);
				$empty_secure = $this->db->scape($data['field_cr_secure']);
				$empty_user = $this->db->scape($data['field_cr_user']);
				#-------------------------------------------------------------------------#
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
					d_azp_configuration_email_t_email => $empty_email,
					d_azp_configuration_email_t_host => $empty_host,
					d_azp_configuration_email_t_pass => $empty_pass,
					d_azp_configuration_email_t_port => $empty_port,
					d_azp_configuration_email_t_secure => $empty_secure,
					d_azp_configuration_email_v_id_azp_user => $empty_user,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_configuration_email, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_configuration_email_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_configuration_email, d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('<b>Error:</b> El registro que está removiendo no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_configuration_email, d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "' AND " . d_azp_configuration_email_m_deleted . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_id) { foreach ($sql_id as $key => $value): throw new Exception('<b>Error:</b> El registro que está procesando ya se encuentra removido.'); endforeach; }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_configuration_email,
					d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "' AND " .
					d_azp_configuration_email_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_configuration_email_m_level . " = '1'"
				);
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_configuration_email,
					d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "' AND " .
					d_azp_configuration_email_m_level . " = '2'"
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
		final public function sql_azp_configuration_email_remove(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_email_remove($data);
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
				$var_array = array(d_azp_configuration_email_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_configuration_email, $var_array, d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_configuration_email_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_configuration_email, d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('<b>Error:</b> El registro que está restaurando no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_configuration_email, d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "' AND " . d_azp_configuration_email_m_deleted . " = '1'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_id) { foreach ($sql_id as $key => $value): throw new Exception('<b>Error:</b> El registro que está procesando ya se encuentra restaurado.'); endforeach; }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_configuration_email,
					d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "' AND " .
					d_azp_configuration_email_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_configuration_email_m_level . " = '1'"
				);
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_configuration_email,
					d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "' AND " .
					d_azp_configuration_email_m_level . " = '2'"
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
		final public function sql_azp_configuration_email_restore(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_email_restore($data);
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
				$var_array = array(d_azp_configuration_email_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_configuration_email, $var_array, d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_configuration_email_update(array $data) {
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
				if (!isset($data['field_up_host'])) { throw new Exception('<b>Error:</b> El campo de host esta prohibido modificar.'); }
				if (!isset($data['field_up_pass'])) { throw new Exception('<b>Error:</b> El campo de contraseña esta prohibido modificar.'); }
				if (!isset($data['field_up_port'])) { throw new Exception('<b>Error:</b> El campo de puerto esta prohibido modificar.'); }
				if (!isset($data['field_up_secure'])) { throw new Exception('<b>Error:</b> El campo de seguridad esta prohibido modificar.'); }
				if (!isset($data['field_up_user'])) { throw new Exception('<b>Error:</b> El campo de usuario esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_email = $this->db->scape($data['field_up_email']);
				$empty_host = $this->db->scape($data['field_up_host']);
				$empty_pass = $this->db->scape($data['field_up_pass']);
				$empty_port = $this->db->scape($data['field_up_port']);
				$empty_secure = $this->db->scape($data['field_up_secure']);
				$empty_user = $this->db->scape($data['field_up_user']);
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
				if (Func::emp($empty_host)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de host es obligatorio.');
				}
				#---------------------------------------------#
				if (strlen($empty_host) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de host permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_host, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de host no permite tener ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_host)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de host no permite tener espacios en blanco al principio o al final.');
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
				#---------------------------------------------#
				if (strpos($empty_email, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico no permite tener ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correo electronico no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pass)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña es obligatorio.');
				}
				#---------------------------------------------#
				if (strlen($empty_pass) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_pass, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_pass)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_port)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de puerto es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_port)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de puerto solo permite numeros.');
				}
				#---------------------------------------------#
				if (strlen($empty_port) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de puerto permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_port, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de puerto no permite tener ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_port)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de puerto no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_secure)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de seguridad es obligatorio.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_secure)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de seguridad solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_secure) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de seguridad permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_secure, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de seguridad no permite tener ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_secure)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de seguridad no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_user) || strtolower($empty_user) == strtolower('seleccionar') || $empty_user == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_user)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_configuration_email, d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('<b>Error:</b> El registro que está actualizando no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_state = $this->db->select('*', t_azp_sys_state, d_azp_sys_state_id_azp_sys_state . " = '" . $empty_state . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_state) { throw new Exception('<b>Error:</b> El estado seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_configuration_email,
					d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "' AND " .
					d_azp_configuration_email_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_configuration_email_m_level . " = '1'"
				);
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_configuration_email,
					d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "' AND " .
					d_azp_configuration_email_m_level . " = '2'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) { throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_found = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_user . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_found) { throw new Exception('<b>Error:</b> El usuario seleccionado no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				/*$sql_query = $this->db->select('*', t_azp_configuration_email,
					d_azp_configuration_email_id_azp_configuration_email . " != '" . $empty_id . "' AND " .
					d_azp_configuration_email_v_id_azp_user . " = '" . $empty_user . "'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_query) { throw new Exception('<b>Error:</b> El usuario seleccionado ya existe registrado.'); }*/
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_configuration_email_update(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_email_update($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Cargar helper de cadenas de texto
				Helper::load('emails');
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				$empty_description = $this->db->scape($data['field_up_description']);
				$empty_state = $this->db->scape($data['field_up_state']);
				#-------------------------------------------------------------------------#
				$empty_email = $this->db->scape($data['field_up_email']);
				$empty_host = $this->db->scape($data['field_up_host']);
				$empty_pass = $this->db->scape($data['field_up_pass']);
				$empty_port = $this->db->scape($data['field_up_port']);
				$empty_secure = $this->db->scape($data['field_up_secure']);
				$empty_user = $this->db->scape($data['field_up_user']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_data_personal, d_azp_data_personal_v_id_azp_user . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a neuvas variables
						$var_names = $value[d_azp_data_personal_t_names];
						$var_surnames = $value[d_azp_data_personal_t_surnames];
						$var_data = $var_names . ' ' . $var_surnames;
					endforeach;
				}
				#-------------------------------------------------------------------------#
				$var_init = array($empty_host, $empty_email, $empty_pass, $empty_port, $empty_secure,);
				$var_html = Emails::test_template('Sincronizacion del correo electronico con la aplicacion web.');
				$var_from = array($empty_email => $var_data,);
				$var_adds = array($empty_email => $var_data,);
				$var_copy = array($empty_email => $var_data,);
				$var_affair = APP . ': Conexion Correo';
				$var_email = Emails::test_send($var_init, $var_from, $var_adds, $var_copy, $var_html, $var_affair,);
				#-------------------------------------------------------------------------#
				if (true === $var_email) { $empty_connect = 'Exitoso'; } else { $empty_connect = 'Fallido'; }
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->query("
					SELECT
						tc_azp_configuration_email." . d_azp_configuration_email_id_azp_configuration_email . " AS 'lbl_azp_configuration_email_id_azp_configuration_email',
						tc_azp_configuration_email." . d_azp_configuration_email_m_date_created . " AS 'lbl_azp_configuration_email_m_date_created',
						tc_azp_configuration_email." . d_azp_configuration_email_m_date_modified . " AS 'lbl_azp_configuration_email_m_date_modified',
						tc_azp_configuration_email." . d_azp_configuration_email_m_deleted . " AS 'lbl_azp_configuration_email_m_deleted',
						tc_azp_configuration_email." . d_azp_configuration_email_m_description . " AS 'lbl_azp_configuration_email_m_description',
						tc_azp_configuration_email." . d_azp_configuration_email_m_level . " AS 'lbl_azp_configuration_email_m_level',
						tc_azp_configuration_email." . d_azp_configuration_email_m_status . " AS 'lbl_azp_configuration_email_m_status',
						tc_azp_configuration_email." . d_azp_configuration_email_m_temp . " AS 'lbl_azp_configuration_email_m_temp',
						tc_azp_configuration_email." . d_azp_configuration_email_t_connect . " AS 'lbl_azp_configuration_email_t_connect',
						tc_azp_configuration_email." . d_azp_configuration_email_t_email . " AS 'lbl_azp_configuration_email_t_email',
						tc_azp_configuration_email." . d_azp_configuration_email_t_host . " AS 'lbl_azp_configuration_email_t_host',
						tc_azp_configuration_email." . d_azp_configuration_email_t_pass . " AS 'lbl_azp_configuration_email_t_pass',
						tc_azp_configuration_email." . d_azp_configuration_email_t_port . " AS 'lbl_azp_configuration_email_t_port',
						tc_azp_configuration_email." . d_azp_configuration_email_t_secure . " AS 'lbl_azp_configuration_email_t_secure',
						tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
					FROM " . t_azp_configuration_email . " tc_azp_configuration_email
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_user . " tc_azp_user
						ON tc_azp_configuration_email." . d_azp_configuration_email_v_id_azp_user . "
							= tc_azp_user." . d_azp_user_id_azp_user . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_configuration_email." . d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "'
					LIMIT 1
				");
				#-------------------------------------------------------------------------#
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azs_configuration_email_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_configuration_email_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_configuration_email_m_date_created => DATE_HOUR,
							d_azs_configuration_email_m_date_modified => DATE_HOUR,
							d_azs_configuration_email_m_deleted => $value['lbl_azp_configuration_email_m_deleted'],
							d_azs_configuration_email_m_description => $value['lbl_azp_configuration_email_m_description'],
							d_azs_configuration_email_m_level => $value['lbl_azp_configuration_email_m_level'],
							d_azs_configuration_email_m_status => $value['lbl_azp_configuration_email_m_status'],
							d_azs_configuration_email_m_temp => $value['lbl_azp_configuration_email_m_temp'],
							d_azs_configuration_email_t_connect => $value['lbl_azp_configuration_email_t_connect'],
							d_azs_configuration_email_t_email => $value['lbl_azp_configuration_email_t_email'],
							d_azs_configuration_email_t_host => $value['lbl_azp_configuration_email_t_host'],
							d_azs_configuration_email_t_pass => $value['lbl_azp_configuration_email_t_pass'],
							d_azs_configuration_email_t_port => $value['lbl_azp_configuration_email_t_port'],
							d_azs_configuration_email_t_secure => $value['lbl_azp_configuration_email_t_secure'],
							d_azs_configuration_email_u_user => $value['lbl_azp_user_t_login'],
							d_azs_configuration_email_v_id_azp_configuration_email => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_configuration_email, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_configuration_email_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_configuration_email_m_date_modified => DATE_HOUR,
					d_azp_configuration_email_m_description => $empty_description,
					d_azp_configuration_email_m_status => $empty_state,
					d_azp_configuration_email_t_connect => $empty_connect,
					d_azp_configuration_email_t_email => $empty_email,
					d_azp_configuration_email_t_host => $empty_host,
					d_azp_configuration_email_t_pass => $empty_pass,
					d_azp_configuration_email_t_port => $empty_port,
					d_azp_configuration_email_t_secure => $empty_secure,
					d_azp_configuration_email_v_id_azp_user => $empty_user,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_configuration_email, $var_array, d_azp_configuration_email_id_azp_configuration_email . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_user() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_user,
				d_azp_user_m_deleted . " = '1' AND " .
				d_azp_user_m_status . " = '1'"
			);
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>