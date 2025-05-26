<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_gsc_registrationModel extends Models implements OCREND {
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
					tc_azp_gsc_registration." . d_azp_gsc_registration_id_azp_gsc_registration . " AS 'lbl_azp_gsc_registration_id_azp_gsc_registration',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_date_created . " AS 'lbl_azp_gsc_registration_m_date_created',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_date_modified . " AS 'lbl_azp_gsc_registration_m_date_modified',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_description . " AS 'lbl_azp_gsc_registration_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_city_department . " AS 'lbl_azp_gsc_registration_t_city_department',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_city_municipality . " AS 'lbl_azp_gsc_registration_t_city_municipality',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_death_date . " AS 'lbl_azp_gsc_registration_t_death_date',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_department . " AS 'lbl_azp_gsc_registration_t_department',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_full_name . " AS 'lbl_azp_gsc_registration_t_full_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_identification . " AS 'lbl_azp_gsc_registration_t_identification',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_address . " AS 'lbl_azp_gsc_registration_t_notary_address',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_name . " AS 'lbl_azp_gsc_registration_t_notary_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_number . " AS 'lbl_azp_gsc_registration_t_notary_number',
					REPLACE(tc_azp_gsc_registration." . d_azp_gsc_registration_t_number_serial . ", '_', '') AS 'lbl_azp_gsc_registration_t_number_serial',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_observation . " AS 'lbl_azp_gsc_registration_t_observation',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_reason . " AS 'lbl_azp_gsc_registration_t_reason',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_reported_bank . " AS 'lbl_azp_gsc_registration_t_reported_bank',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_shipping_number . " AS 'lbl_azp_gsc_registration_t_shipping_number',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_state . " AS 'lbl_azp_gsc_registration_t_state'
				FROM " . t_azp_gsc_registration . " tc_azp_gsc_registration
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_gsc_registration." . d_azp_gsc_registration_m_deleted . " = '1'
				ORDER BY tc_azp_gsc_registration." . d_azp_gsc_registration_id_azp_gsc_registration . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_gsc_registration." . d_azs_gsc_registration_id_azs_gsc_registration . " AS 'lbl_azs_gsc_registration_id_azs_gsc_registration',
					tc_azs_gsc_registration." . d_azs_gsc_registration_m_date_modified . " AS 'lbl_azs_gsc_registration_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_gsc_registration." . d_azs_gsc_registration_m_date_created . " AS 'lbl_azs_gsc_registration_m_date_created',
					tc_azs_gsc_registration." . d_azs_gsc_registration_m_date_modified . " AS 'lbl_azs_gsc_registration_m_date_modified',
					tc_azs_gsc_registration." . d_azs_gsc_registration_m_description . " AS 'lbl_azs_gsc_registration_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_city_department . " AS 'lbl_azs_gsc_registration_t_city_department',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_city_municipality . " AS 'lbl_azs_gsc_registration_t_city_municipality',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_death_date . " AS 'lbl_azs_gsc_registration_t_death_date',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_department . " AS 'lbl_azs_gsc_registration_t_department',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_full_name . " AS 'lbl_azs_gsc_registration_t_full_name',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_identification . " AS 'lbl_azs_gsc_registration_t_identification',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_notary_address . " AS 'lbl_azs_gsc_registration_t_notary_address',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_notary_name . " AS 'lbl_azs_gsc_registration_t_notary_name',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_notary_number . " AS 'lbl_azs_gsc_registration_t_notary_number',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_number_serial . " AS 'lbl_azs_gsc_registration_t_number_serial',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_observation . " AS 'lbl_azs_gsc_registration_t_observation',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_reason . " AS 'lbl_azs_gsc_registration_t_reason',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_reported_bank . " AS 'lbl_azs_gsc_registration_t_reported_bank',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_shipping_number . " AS 'lbl_azs_gsc_registration_t_shipping_number',
					tc_azs_gsc_registration." . d_azs_gsc_registration_t_state . " AS 'lbl_azs_gsc_registration_t_state'
				FROM " . t_azs_gsc_registration . " tc_azs_gsc_registration
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_gsc_registration." . d_azs_gsc_registration_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_gsc_registration." . d_azs_gsc_registration_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_gsc_registration." . d_azs_gsc_registration_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_gsc_registration." . d_azs_gsc_registration_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_gsc_registration." . d_azs_gsc_registration_v_id_azp_gsc_registration . " = '" . $this->id . "'
				ORDER BY tc_azs_gsc_registration." . d_azs_gsc_registration_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_gsc_registration . "
				WHERE " . d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $this->id . "'
					AND " . d_azp_gsc_registration_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_gsc_registration);
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
					tc_azp_gsc_registration." . d_azp_gsc_registration_id_azp_gsc_registration . " AS 'lbl_azp_gsc_registration_id_azp_gsc_registration',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_date_created . " AS 'lbl_azp_gsc_registration_m_date_created',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_date_modified . " AS 'lbl_azp_gsc_registration_m_date_modified',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_description . " AS 'lbl_azp_gsc_registration_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_city_department . " AS 'lbl_azp_gsc_registration_t_city_department',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_city_municipality . " AS 'lbl_azp_gsc_registration_t_city_municipality',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_death_date . " AS 'lbl_azp_gsc_registration_t_death_date',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_department . " AS 'lbl_azp_gsc_registration_t_department',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_full_name . " AS 'lbl_azp_gsc_registration_t_full_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_identification . " AS 'lbl_azp_gsc_registration_t_identification',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_address . " AS 'lbl_azp_gsc_registration_t_notary_address',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_name . " AS 'lbl_azp_gsc_registration_t_notary_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_number . " AS 'lbl_azp_gsc_registration_t_notary_number',
					REPLACE(tc_azp_gsc_registration." . d_azp_gsc_registration_t_number_serial . ", '_', '') AS 'lbl_azp_gsc_registration_t_number_serial',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_observation . " AS 'lbl_azp_gsc_registration_t_observation',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_reason . " AS 'lbl_azp_gsc_registration_t_reason',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_reported_bank . " AS 'lbl_azp_gsc_registration_t_reported_bank',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_shipping_number . " AS 'lbl_azp_gsc_registration_t_shipping_number',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_state . " AS 'lbl_azp_gsc_registration_t_state'
				FROM " . t_azp_gsc_registration . " tc_azp_gsc_registration
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_registration." . d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $this->id . "'
					AND tc_azp_gsc_registration." . d_azp_gsc_registration_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_registration." . d_azp_gsc_registration_id_azp_gsc_registration . " AS 'lbl_azp_gsc_registration_id_azp_gsc_registration',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_date_created . " AS 'lbl_azp_gsc_registration_m_date_created',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_date_modified . " AS 'lbl_azp_gsc_registration_m_date_modified',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_description . " AS 'lbl_azp_gsc_registration_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_city_department . " AS 'lbl_azp_gsc_registration_t_city_department',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_city_municipality . " AS 'lbl_azp_gsc_registration_t_city_municipality',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_death_date . " AS 'lbl_azp_gsc_registration_t_death_date',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_department . " AS 'lbl_azp_gsc_registration_t_department',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_full_name . " AS 'lbl_azp_gsc_registration_t_full_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_identification . " AS 'lbl_azp_gsc_registration_t_identification',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_address . " AS 'lbl_azp_gsc_registration_t_notary_address',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_name . " AS 'lbl_azp_gsc_registration_t_notary_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_number . " AS 'lbl_azp_gsc_registration_t_notary_number',
					REPLACE(tc_azp_gsc_registration." . d_azp_gsc_registration_t_number_serial . ", '_', '') AS 'lbl_azp_gsc_registration_t_number_serial',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_observation . " AS 'lbl_azp_gsc_registration_t_observation',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_reason . " AS 'lbl_azp_gsc_registration_t_reason',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_reported_bank . " AS 'lbl_azp_gsc_registration_t_reported_bank',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_shipping_number . " AS 'lbl_azp_gsc_registration_t_shipping_number',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_state . " AS 'lbl_azp_gsc_registration_t_state'
				FROM " . t_azp_gsc_registration . " tc_azp_gsc_registration
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_registration." . d_azp_gsc_registration_m_deleted . " = '3'
				ORDER BY tc_azp_gsc_registration." . d_azp_gsc_registration_id_azp_gsc_registration . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_registration." . d_azp_gsc_registration_id_azp_gsc_registration . " AS 'lbl_azp_gsc_registration_id_azp_gsc_registration',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_date_created . " AS 'lbl_azp_gsc_registration_m_date_created',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_date_modified . " AS 'lbl_azp_gsc_registration_m_date_modified',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_description . " AS 'lbl_azp_gsc_registration_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_city_department . " AS 'lbl_azp_gsc_registration_t_city_department',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_city_municipality . " AS 'lbl_azp_gsc_registration_t_city_municipality',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_death_date . " AS 'lbl_azp_gsc_registration_t_death_date',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_department . " AS 'lbl_azp_gsc_registration_t_department',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_full_name . " AS 'lbl_azp_gsc_registration_t_full_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_identification . " AS 'lbl_azp_gsc_registration_t_identification',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_address . " AS 'lbl_azp_gsc_registration_t_notary_address',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_name . " AS 'lbl_azp_gsc_registration_t_notary_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_number . " AS 'lbl_azp_gsc_registration_t_notary_number',
					REPLACE(tc_azp_gsc_registration." . d_azp_gsc_registration_t_number_serial . ", '_', '') AS 'lbl_azp_gsc_registration_t_number_serial',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_observation . " AS 'lbl_azp_gsc_registration_t_observation',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_reason . " AS 'lbl_azp_gsc_registration_t_reason',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_reported_bank . " AS 'lbl_azp_gsc_registration_t_reported_bank',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_shipping_number . " AS 'lbl_azp_gsc_registration_t_shipping_number',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_state . " AS 'lbl_azp_gsc_registration_t_state'
				FROM " . t_azp_gsc_registration . " tc_azp_gsc_registration
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_registration." . d_azp_gsc_registration_m_deleted . " = '1'
				ORDER BY tc_azp_gsc_registration." . d_azp_gsc_registration_id_azp_gsc_registration . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_registration." . d_azp_gsc_registration_id_azp_gsc_registration . " AS 'lbl_azp_gsc_registration_id_azp_gsc_registration',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_date_created . " AS 'lbl_azp_gsc_registration_m_date_created',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_date_modified . " AS 'lbl_azp_gsc_registration_m_date_modified',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_description . " AS 'lbl_azp_gsc_registration_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_city_department . " AS 'lbl_azp_gsc_registration_t_city_department',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_city_municipality . " AS 'lbl_azp_gsc_registration_t_city_municipality',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_death_date . " AS 'lbl_azp_gsc_registration_t_death_date',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_department . " AS 'lbl_azp_gsc_registration_t_department',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_full_name . " AS 'lbl_azp_gsc_registration_t_full_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_identification . " AS 'lbl_azp_gsc_registration_t_identification',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_address . " AS 'lbl_azp_gsc_registration_t_notary_address',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_name . " AS 'lbl_azp_gsc_registration_t_notary_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_number . " AS 'lbl_azp_gsc_registration_t_notary_number',
					REPLACE(tc_azp_gsc_registration." . d_azp_gsc_registration_t_number_serial . ", '_', '') AS 'lbl_azp_gsc_registration_t_number_serial',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_observation . " AS 'lbl_azp_gsc_registration_t_observation',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_reason . " AS 'lbl_azp_gsc_registration_t_reason',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_reported_bank . " AS 'lbl_azp_gsc_registration_t_reported_bank',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_shipping_number . " AS 'lbl_azp_gsc_registration_t_shipping_number',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_state . " AS 'lbl_azp_gsc_registration_t_state'
				FROM " . t_azp_gsc_registration . " tc_azp_gsc_registration
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_registration." . d_azp_gsc_registration_m_deleted . " = '2'
				ORDER BY tc_azp_gsc_registration." . d_azp_gsc_registration_id_azp_gsc_registration . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_registration." . d_azp_gsc_registration_id_azp_gsc_registration . " AS 'lbl_azp_gsc_registration_id_azp_gsc_registration',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_created . " AS 'lbl_azp_gsc_registration_m_by_created',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_modified . " AS 'lbl_azp_gsc_registration_m_by_modified',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_date_created . " AS 'lbl_azp_gsc_registration_m_date_created',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_date_modified . " AS 'lbl_azp_gsc_registration_m_date_modified',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_description . " AS 'lbl_azp_gsc_registration_m_description',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_level . " AS 'lbl_azp_gsc_registration_m_level',
					tc_azp_gsc_registration." . d_azp_gsc_registration_m_status . " AS 'lbl_azp_gsc_registration_m_status',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_city_department . " AS 'lbl_azp_gsc_registration_t_city_department',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_city_municipality . " AS 'lbl_azp_gsc_registration_t_city_municipality',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_death_date . " AS 'lbl_azp_gsc_registration_t_death_date',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_department . " AS 'lbl_azp_gsc_registration_t_department',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_full_name . " AS 'lbl_azp_gsc_registration_t_full_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_identification . " AS 'lbl_azp_gsc_registration_t_identification',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_address . " AS 'lbl_azp_gsc_registration_t_notary_address',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_name . " AS 'lbl_azp_gsc_registration_t_notary_name',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_notary_number . " AS 'lbl_azp_gsc_registration_t_notary_number',
					REPLACE(tc_azp_gsc_registration." . d_azp_gsc_registration_t_number_serial . ", '_', '') AS 'lbl_azp_gsc_registration_t_number_serial',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_observation . " AS 'lbl_azp_gsc_registration_t_observation',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_reason . " AS 'lbl_azp_gsc_registration_t_reason',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_reported_bank . " AS 'lbl_azp_gsc_registration_t_reported_bank',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_shipping_number . " AS 'lbl_azp_gsc_registration_t_shipping_number',
					tc_azp_gsc_registration." . d_azp_gsc_registration_t_state . " AS 'lbl_azp_gsc_registration_t_state'
				FROM " . t_azp_gsc_registration . " tc_azp_gsc_registration
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_registration." . d_azp_gsc_registration_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_registration." . d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $this->id . "'
					AND tc_azp_gsc_registration." . d_azp_gsc_registration_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_gsc_registration_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "' AND " . d_azp_gsc_registration_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "' AND " . d_azp_gsc_registration_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_registration_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "' AND " . d_azp_gsc_registration_m_level . " = '2'");
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
		final public function sql_azp_gsc_registration_delete(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_registration_delete($data);
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
				$var_array = array(d_azp_gsc_registration_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_registration, $var_array, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_gsc_registration_document(string $var_name, string $var_type, string $var_tmp_name, string $var_error, string $var_size) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				$var_search = array(
					'	', "'", '"', ';', ',', '', '`', '─', '~', '´', '	', '{', '}', '[', ']', '–',
					'ç', 'Ç', 'æ', 'Æ', 'ã', 'Ã', '°', '\n', '\r', '\t');
				$var_replace = array(
					'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
					'c', 'C', '', '', '', '', '', '', '', '');
				# --------------------------------------------------------------------------------------------------
				$var_array = array(d_azp_gsc_registration_m_deleted => '2',);
				# Insertar valores en la nueva tabla que no existen
				$this->db->update(t_azp_gsc_registration, $var_array, d_azp_gsc_registration_m_deleted . " = '1'");
				# --------------------------------------------------------------------------------------------------
				# Eliminar registros de la tabla de importacion
				$this->db->query("DELETE FROM " . t_azp_gsc_registration_import);
				# Restaurar valor de la tabla desde el inicio para el nuevo cargue
				$this->db->query("ALTER TABLE " . t_azp_gsc_registration_import . " AUTO_INCREMENT = 1");
				# --------------------------------------------------------------------------------------------------
				# Obtener datos del archivo recibido y saltar lineas
				$var_file = file_get_contents($var_tmp_name);
				$var_file = explode("\n", $var_file);
				$var_file = array_filter($var_file);
				# Recorrer los datos del archivo y separarlos por coma o punto y coma
				foreach ($var_file as $key => $value) { $var_list[] = explode(";", $value); }
				# Recorrer los datos divididos por filas y almacenarlos en la base
				foreach ($var_list as $key => $value) {
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[0])) { $import_identification = ''; } else {
						if ($value[0] != '' || $value[0] != NULL) {
							$import_identification = $this->db->scape($value[0]);
						} else { $import_identification = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[1])) { $import_state = ''; } else {
						if ($value[1] != '' || $value[1] != NULL) {
							$import_state = $this->db->scape($value[1]);
						} else { $import_state = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[2])) { $import_report_bank = ''; } else {
						if ($value[2] != '' || $value[2] != NULL) {
							$import_report_bank = $this->db->scape($value[2]);
						} else { $import_report_bank = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[3])) { $import_reason = ''; } else {
						if ($value[3] != '' || $value[3] != NULL) {
							$import_reason = $this->db->scape($value[3]);
						} else { $import_reason = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[4])) { $import_city_department = ''; } else {
						if ($value[4] != '' || $value[4] != NULL) {
							$import_city_department = $this->db->scape($value[4]);
						} else { $import_city_department = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[5])) { $import_full_name = ''; } else {
						if ($value[5] != '' || $value[5] != NULL) {
							$import_full_name = $this->db->scape($value[5]);
						} else { $import_full_name = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[6])) { $import_department = ''; } else {
						if ($value[6] != '' || $value[6] != NULL) {
							$import_department = $this->db->scape($value[6]);
						} else { $import_department = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[7])) { $import_city_municipality = ''; } else {
						if ($value[7] != '' || $value[7] != NULL) {
							$import_city_municipality = $this->db->scape($value[7]);
						} else { $import_city_municipality = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[8])) { $import_nro_send = ''; } else {
						if ($value[8] != '' || $value[8] != NULL) {
							$import_nro_send = $this->db->scape($value[8]);
						} else { $import_nro_send = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[9])) { $import_nro_serial = ''; } else {
						if ($value[9] != '' || $value[9] != NULL) {
							$import_nro_serial = $value[9];
						} else { $import_nro_serial = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[10])) { $import_nro_notary = ''; } else {
						if ($value[10] != '' || $value[10] != NULL) {
							$import_nro_notary = $this->db->scape($value[10]);
						} else { $import_nro_notary = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[11])) { $import_notary_name = ''; } else {
						if ($value[11] != '' || $value[11] != NULL) {
							$import_notary_name = $this->db->scape($value[11]);
						} else { $import_notary_name = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[12])) { $import_notary_address = ''; } else {
						if ($value[12] != '' || $value[12] != NULL) {
							$import_notary_address = $this->db->scape($value[12]);
						} else { $import_notary_address = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[13])) { $import_observation = ''; } else {
						if ($value[13] != '' || $value[13] != NULL) {
							$import_observation = $this->db->scape($value[13]);
						} else { $import_observation = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[14])) { $import_death_date = ''; } else {
						if ($value[14] != '' || $value[14] != NULL) {
							$import_death_date = $this->db->scape($value[14]);
						} else { $import_death_date = ''; }
					}
					# Reemplazar ciertos caracteres especificados de los valores recibidos
					$repl_identification = str_replace($var_search, $var_replace, $import_identification);
					$repl_state = str_replace($var_search, $var_replace, $import_state);
					$repl_report_bank = str_replace($var_search, $var_replace, $import_report_bank);
					$repl_reason = str_replace($var_search, $var_replace, $import_reason);
					$repl_city_department = str_replace($var_search, $var_replace, $import_city_department);
					$repl_full_name = str_replace($var_search, $var_replace, $import_full_name);
					$repl_department = str_replace($var_search, $var_replace, $import_department);
					$repl_city_municipality = str_replace($var_search, $var_replace, $import_city_municipality);
					$repl_nro_send = str_replace($var_search, $var_replace, $import_nro_send);
					$repl_nro_serial = str_replace($var_search, $var_replace, $import_nro_serial);
					$repl_nro_notary = str_replace($var_search, $var_replace, $import_nro_notary);
					$repl_notary_name = str_replace($var_search, $var_replace, $import_notary_name);
					$repl_notary_address = str_replace($var_search, $var_replace, $import_notary_address);
					$repl_observation = str_replace($var_search, $var_replace, $import_observation);
					$repl_death_date = str_replace($var_search, $var_replace, $import_death_date);
					# Eliminar dobles vacios en los valores recibidos
					$preg_identification = trim(preg_replace('/\s+/','', $repl_identification));
					$preg_state = trim(preg_replace('/\s+/',' ', $repl_state));
					$preg_report_bank = trim(preg_replace('/\s+/','', $repl_report_bank));
					$preg_reason = trim(preg_replace('/\s+/',' ', $repl_reason));
					$preg_city_department = trim(preg_replace('/\s+/',' ', $repl_city_department));
					$preg_full_name = trim(preg_replace('/\s+/',' ', $repl_full_name));
					$preg_department = trim(preg_replace('/\s+/',' ', $repl_department));
					$preg_city_municipality = trim(preg_replace('/\s+/',' ', $repl_city_municipality));
					$preg_nro_send = trim(preg_replace('/\s+/','', $repl_nro_send));
					$preg_nro_serial = trim(preg_replace('/\s+/','', $repl_nro_serial));
					$preg_nro_notary = trim(preg_replace('/\s+/',' ', $repl_nro_notary));
					$preg_notary_name = trim(preg_replace('/\s+/',' ', $repl_notary_name));
					$preg_notary_address = trim(preg_replace('/\s+/',' ', $repl_notary_address));
					$preg_observation = trim(preg_replace('/\s+/',' ', $repl_observation));
					$preg_death_date = trim(preg_replace('/\s+/','', $repl_death_date));
					# Asignacion de valores finales para almacenar en la base
					$frmt_identification = strtoupper($preg_identification);
					$frmt_state = strtoupper($preg_state);
					$frmt_report_bank = strtoupper($preg_report_bank);
					$frmt_reason = strtoupper($preg_reason);
					$frmt_city_department = strtoupper($preg_city_department);
					$frmt_full_name = strtoupper($preg_full_name);
					$frmt_department = strtoupper($preg_department);
					$frmt_city_municipality = strtoupper($preg_city_municipality);
					$frmt_nro_send = strtoupper($preg_nro_send);
					$frmt_nro_serial = strtoupper($preg_nro_serial);
					$frmt_nro_notary = strtoupper($preg_nro_notary);
					$frmt_notary_name = strtoupper($preg_notary_name);
					$frmt_notary_address = strtoupper($preg_notary_address);
					$frmt_observation = strtoupper($preg_observation);
					$frmt_death_date = strtoupper($preg_death_date);
					# Validacion de valores recibidos para codificacion.
					$empty_identification = html_entity_decode(utf8_encode($frmt_identification));
					$empty_state = html_entity_decode(utf8_encode($frmt_state));
					$empty_report_bank = html_entity_decode(utf8_encode($frmt_report_bank));
					$empty_reason = html_entity_decode(utf8_encode($frmt_reason));
					$empty_city_department = html_entity_decode(utf8_encode($frmt_city_department));
					$empty_full_name = html_entity_decode(utf8_encode($frmt_full_name));
					$empty_department = html_entity_decode(utf8_encode($frmt_department));
					$empty_city_municipality = html_entity_decode(utf8_encode($frmt_city_municipality));
					$empty_nro_send = html_entity_decode(utf8_encode($frmt_nro_send));
					$empty_nro_serial = html_entity_decode(utf8_encode($frmt_nro_serial));
					$empty_nro_notary = html_entity_decode(utf8_encode($frmt_nro_notary));
					$empty_notary_name = html_entity_decode(utf8_encode($frmt_notary_name));
					$empty_notary_address = html_entity_decode(utf8_encode($frmt_notary_address));
					$empty_observation = html_entity_decode(utf8_encode($frmt_observation));
					$empty_death_date = html_entity_decode(utf8_encode($frmt_death_date));
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(
						d_azp_gsc_registration_import_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_gsc_registration_import_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_gsc_registration_import_m_date_created => DATE_HOUR,
						d_azp_gsc_registration_import_m_date_modified => DATE_HOUR,
						d_azp_gsc_registration_import_m_deleted => '2',
						d_azp_gsc_registration_import_m_description => '',
						d_azp_gsc_registration_import_m_level => '2',
						d_azp_gsc_registration_import_m_status => '1',
						d_azp_gsc_registration_import_m_temp => '2',
						d_azp_gsc_registration_import_t_city_department => $empty_city_department,
						d_azp_gsc_registration_import_t_city_municipality => $empty_city_municipality,
						d_azp_gsc_registration_import_t_death_date => $empty_death_date,
						d_azp_gsc_registration_import_t_department => $empty_department,
						d_azp_gsc_registration_import_t_full_name => $empty_full_name,
						d_azp_gsc_registration_import_t_identification => $empty_identification,
						d_azp_gsc_registration_import_t_notary_address => $empty_notary_address,
						d_azp_gsc_registration_import_t_notary_name => $empty_notary_name,
						d_azp_gsc_registration_import_t_notary_number => str_replace('_', ' ', $empty_nro_notary),
						d_azp_gsc_registration_import_t_number_serial => $empty_nro_serial . '_',
						d_azp_gsc_registration_import_t_observation => $empty_observation,
						d_azp_gsc_registration_import_t_reason => $empty_reason,
						d_azp_gsc_registration_import_t_reported_bank => $empty_report_bank,
						d_azp_gsc_registration_import_t_shipping_number => $empty_nro_send,
						d_azp_gsc_registration_import_t_state => $empty_state,
					);
					# Insertar valores en la tabla segun estructura de la tabla
					$this->db->insert(t_azp_gsc_registration_import, $var_array);
				}
				/*$this->db->query("
					UPDATE " . t_azp_gsc_registration_import . "
					SET " . d_azp_gsc_registration_import_t_number_serial . " =
					REPLACE(" . d_azp_gsc_registration_import_t_number_serial . ", '_', '')
				");*/
				# --------------------------------------------------------------------------------------------------
				# Organizacion de los valores capturados y asignados a los campos a insertar
				$var_array = array(d_azp_gsc_registration_import_t_death_date => '',);
				# Insertar valores en la nueva tabla que no existen
				$this->db->update(t_azp_gsc_registration_import, $var_array, d_azp_gsc_registration_import_t_death_date . " = '0000-00-00'");
				# --------------------------------------------------------------------------------------------------
				# Organizacion de los valores capturados y asignados a los campos a insertar
				$var_array = array(d_azp_gsc_registration_import_t_reported_bank => '',);
				# Insertar valores en la nueva tabla que no existen
				$this->db->update(t_azp_gsc_registration_import, $var_array, d_azp_gsc_registration_import_t_reported_bank . " = '0000-00-00'");
				# --------------------------------------------------------------------------------------------------
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_registration_import, d_azp_gsc_registration_import_t_death_date . " = ''");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_gsc_registration_import_s_date => 1,);
						# Insertar valores en la nueva tabla que no existen
						$this->db->update(t_azp_gsc_registration_import, $var_array, d_azp_gsc_registration_import_id_azp_gsc_registration_import . " = '" . $key_sql[d_azp_gsc_registration_import_id_azp_gsc_registration_import] . "'");
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Instanciando el modelo en una variable
				$var_model = new m_azp_gsc_registrationModel;
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_registration_import, d_azp_gsc_registration_import_t_death_date . " != ''");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						$var_model->validate_date($key_sql[d_azp_gsc_registration_import_t_death_date]);
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_gsc_registration_import_s_date => $var_model->validate_date($key_sql[d_azp_gsc_registration_import_t_death_date]),);
						# Insertar valores en la nueva tabla que no existen
						$this->db->update(t_azp_gsc_registration_import, $var_array, d_azp_gsc_registration_import_id_azp_gsc_registration_import . " = '" . $key_sql[d_azp_gsc_registration_import_id_azp_gsc_registration_import] . "'");
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Organizacion de los valores capturados y asignados a los campos a insertar
				$var_array = array(d_azp_gsc_registration_import_s_date => 0,);
				# Insertar valores en la nueva tabla que no existen
				$this->db->update(t_azp_gsc_registration_import, $var_array, d_azp_gsc_registration_import_s_date . " = ''");
				# --------------------------------------------------------------------------------------------------
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_registration_import, d_azp_gsc_registration_import_t_identification . " = ''");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->delete(t_azp_gsc_registration_import, d_azp_gsc_registration_import_id_azp_gsc_registration_import . " = '" . $key_sql[d_azp_gsc_registration_import_id_azp_gsc_registration_import] . "'");
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select('*', t_azp_gsc_registration_import, d_azp_gsc_registration_import_t_identification . " IS NULL");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->delete(t_azp_gsc_registration_import, d_azp_gsc_registration_import_id_azp_gsc_registration_import . " = '" . $key_sql[d_azp_gsc_registration_import_id_azp_gsc_registration_import] . "'");
					endforeach;
				}
				# --------------------------------------------------------------------------------------------------
				# Eliminar registros de la tabla de importacion
				$this->db->query("DELETE FROM " . t_azp_gsc_registration_import . " WHERE " . d_azp_gsc_registration_import_id_azp_gsc_registration_import . " = '1'");
				# --------------------------------------------------------------------------------------------------
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_gsc_registration_import, d_azp_gsc_registration_import_s_date . " = '0'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql): $var_date_count = $key_sql['lbl_count']; endforeach;
				}
				# Validar si la consulta es verdadera
				if ($var_date_count == 0) {
					# --------------------------------------------------------------------------------------------------
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select('*', t_azp_gsc_registration_import, d_azp_gsc_registration_import_s_date . " = '1'");
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Organizacion de los valores capturados y asignados a los campos a insertar
							$var_array = array(
								d_azp_gsc_registration_m_by_created => $_SESSION[SESS_APP_ID],
								d_azp_gsc_registration_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azp_gsc_registration_m_date_created => DATE_HOUR,
								d_azp_gsc_registration_m_date_modified => DATE_HOUR,
								d_azp_gsc_registration_m_deleted => '1',
								d_azp_gsc_registration_m_description => '',
								d_azp_gsc_registration_m_level => '2',
								d_azp_gsc_registration_m_status => '1',
								d_azp_gsc_registration_m_temp => '1',
								d_azp_gsc_registration_t_city_department => $key_sql[d_azp_gsc_registration_import_t_city_department],
								d_azp_gsc_registration_t_city_municipality => $key_sql[d_azp_gsc_registration_import_t_city_municipality],
								d_azp_gsc_registration_t_death_date => $key_sql[d_azp_gsc_registration_import_t_death_date],
								d_azp_gsc_registration_t_department => $key_sql[d_azp_gsc_registration_import_t_department],
								d_azp_gsc_registration_t_full_name => $key_sql[d_azp_gsc_registration_import_t_full_name],
								d_azp_gsc_registration_t_identification => $key_sql[d_azp_gsc_registration_import_t_identification],
								d_azp_gsc_registration_t_notary_address => $key_sql[d_azp_gsc_registration_import_t_notary_address],
								d_azp_gsc_registration_t_notary_name => $key_sql[d_azp_gsc_registration_import_t_notary_name],
								d_azp_gsc_registration_t_notary_number => $key_sql[d_azp_gsc_registration_import_t_notary_number],
								d_azp_gsc_registration_t_number_serial => $key_sql[d_azp_gsc_registration_import_t_number_serial],
								d_azp_gsc_registration_t_observation => $key_sql[d_azp_gsc_registration_import_t_observation],
								d_azp_gsc_registration_t_reason => $key_sql[d_azp_gsc_registration_import_t_reason],
								d_azp_gsc_registration_t_reported_bank => $key_sql[d_azp_gsc_registration_import_t_reported_bank],
								d_azp_gsc_registration_t_shipping_number => $key_sql[d_azp_gsc_registration_import_t_shipping_number],
								d_azp_gsc_registration_t_state => $key_sql[d_azp_gsc_registration_import_t_state],
							);
							# Insertar valores en la nueva tabla que no existen
							$this->db->insert(t_azp_gsc_registration, $var_array);
						endforeach;
					}
					# --------------------------------------------------------------------------------------------------
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_gsc_registration_import_m_deleted => '1',);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_gsc_registration_import, $var_array, d_azp_gsc_registration_import_m_deleted . " = '2'");
					# --------------------------------------------------------------------------------------------------
					return array('success' => 1, 'message' => '<b>Exito:</b> Haz importado exitosamente el archivo.');
				} else {
					# --------------------------------------------------------------------------------------------------
					return array('success' => 1, 'message' => '<b>Error:</b> Fechas incorrectas en el archivo.');
				}
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_registration_import(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_im_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_im_id']);
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
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_registration_import(array $data) {
			$var_error = $this->error_sql_azp_gsc_registration_import($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_im_id']);
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_gsc_registration_import, d_azp_gsc_registration_import_s_date . " = '0'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql): $var_date_count = $key_sql['lbl_count']; endforeach;
				}
				# Validar si la consulta es verdadera
				if ($var_date_count == 0) {
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_registration_import . " WHERE " . d_azp_gsc_registration_import_m_deleted . " = '2'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_total_two = $key_sql['lbl_count']; endforeach; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->query("SELECT COUNT(*) AS 'lbl_count' FROM " . t_azp_gsc_registration_import . " WHERE " . d_azp_gsc_registration_import_m_deleted . " = '1'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_total_one = $key_sql['lbl_count']; endforeach; }
					#-------------------------------------------------------------------------#
					if ($var_total_one > 0) {
						# Retornar el mensaje una vez ejecutada la rutina del proceso
						return array('success' => 1, 'message' =>
							'<b>Exito:</b> Haz importado exitosamente el archivo.' . '</br></br>' .
							'<b>Exito:</b> Registros Cargados: ' . $var_total_one . '.'
						);
					} else {
						$var_error = $var_total_one + 1;
						# Retornar el mensaje una vez ejecutada la rutina del proceso
						return array('error' => 0, 'message' =>
							'<b>Error:</b> Archivo procesado incorrectamente.' . '</br></br>' .
							'<b>Error:</b> Registros Cargados: ' . $var_total_one . '.' . '</br>' .
							'<b>Error:</b> Registro Erroneo: ' . $var_error . '.'
						);
					}
				} else {
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->query("SELECT MIN(" . d_azp_gsc_registration_import_id_azp_gsc_registration_import . ") AS 'lbl_min' FROM " . t_azp_gsc_registration_import . " WHERE " . d_azp_gsc_registration_import_s_date . " = '0'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_min = $key_sql['lbl_min'] - 1; endforeach; }
					#-------------------------------------------------------------------------#
					# Retornar el mensaje una vez ejecutada la rutina del proceso
					return array('error' => 0, 'message' =>
						'<b>Error:</b> Archivo procesado incorrectamente.' . '</br></br>' .
						'<b>Error:</b> Fechas incorrectas en el archivo.' . '</br>' .
						'<b>Error:</b> Formato Correcto: Año-Mes-Dia (yyyy-mm-dd).' . '</br>' .
						'<b>Error:</b> Campo: Fecha Defuncion: Registro Erroneo: ' . $var_min . '.'
					);
				}
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_gsc_registration_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_city_department'])) { throw new Exception('<b>Error:</b> El campo de ciudad - departamento esta prohibido modificar.'); }
				if (!isset($data['field_cr_city_municipality'])) { throw new Exception('<b>Error:</b> El campo de ciudad - municipio esta prohibido modificar.'); }
				if (!isset($data['field_cr_death_date'])) { throw new Exception('<b>Error:</b> El campo de fecha de defuncion esta prohibido modificar.'); }
				if (!isset($data['field_cr_department'])) { throw new Exception('<b>Error:</b> El campo de departamento esta prohibido modificar.'); }
				if (!isset($data['field_cr_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre completo esta prohibido modificar.'); }
				if (!isset($data['field_cr_identification'])) { throw new Exception('<b>Error:</b> El campo de cedula esta prohibido modificar.'); }
				if (!isset($data['field_cr_notary_address'])) { throw new Exception('<b>Error:</b> El campo de direccion notaria esta prohibido modificar.'); }
				if (!isset($data['field_cr_notary_name'])) { throw new Exception('<b>Error:</b> El campo de nombre de notarias esta prohibido modificar.'); }
				if (!isset($data['field_cr_notary_number'])) { throw new Exception('<b>Error:</b> El campo de nro notaria esta prohibido modificar.'); }
				if (!isset($data['field_cr_number_serial'])) { throw new Exception('<b>Error:</b> El campo de numero serial esta prohibido modificar.'); }
				if (!isset($data['field_cr_observation'])) { throw new Exception('<b>Error:</b> El campo de observaciones esta prohibido modificar.'); }
				if (!isset($data['field_cr_reason'])) { throw new Exception('<b>Error:</b> El campo de motivo esta prohibido modificar.'); }
				if (!isset($data['field_cr_reported_bank'])) { throw new Exception('<b>Error:</b> El campo de reportado a banco esta prohibido modificar.'); }
				if (!isset($data['field_cr_shipping_number'])) { throw new Exception('<b>Error:</b> El campo de nro envio esta prohibido modificar.'); }
				if (!isset($data['field_cr_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_city_department = $this->db->scape($data['field_cr_city_department']);
				$empty_city_municipality = $this->db->scape($data['field_cr_city_municipality']);
				$empty_death_date = $this->db->scape($data['field_cr_death_date']);
				$empty_department = $this->db->scape($data['field_cr_department']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_notary_address = $this->db->scape($data['field_cr_notary_address']);
				$empty_notary_name = $this->db->scape($data['field_cr_notary_name']);
				$empty_notary_number = $this->db->scape($data['field_cr_notary_number']);
				$empty_number_serial = $this->db->scape($data['field_cr_number_serial']);
				$empty_observation = $this->db->scape($data['field_cr_observation']);
				$empty_reason = $this->db->scape($data['field_cr_reason']);
				$empty_reported_bank = $this->db->scape($data['field_cr_reported_bank']);
				$empty_shipping_number = $this->db->scape($data['field_cr_shipping_number']);
				$empty_state = $this->db->scape($data['field_cr_state']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula solo permite numeros.');
				}
				#---------------------------------------------#
				if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_identification, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos es oblgitario.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_full_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_full_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_gsc_registration_insert(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_registration_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_city_department = $this->db->scape($data['field_cr_city_department']);
				$empty_city_municipality = $this->db->scape($data['field_cr_city_municipality']);
				$empty_death_date = $this->db->scape($data['field_cr_death_date']);
				$empty_department = $this->db->scape($data['field_cr_department']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_notary_address = $this->db->scape($data['field_cr_notary_address']);
				$empty_notary_name = $this->db->scape($data['field_cr_notary_name']);
				$empty_notary_number = $this->db->scape($data['field_cr_notary_number']);
				$empty_number_serial = $this->db->scape($data['field_cr_number_serial']);
				$empty_observation = $this->db->scape($data['field_cr_observation']);
				$empty_reason = $this->db->scape($data['field_cr_reason']);
				$empty_reported_bank = $this->db->scape($data['field_cr_reported_bank']);
				$empty_shipping_number = $this->db->scape($data['field_cr_shipping_number']);
				$empty_state = $this->db->scape($data['field_cr_state']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_registration_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_registration_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_registration_m_date_created => DATE_HOUR,
					d_azp_gsc_registration_m_date_modified => DATE_HOUR,
					d_azp_gsc_registration_m_deleted => '1',
					d_azp_gsc_registration_m_description => '',
					d_azp_gsc_registration_m_level => '2',
					d_azp_gsc_registration_m_status => '1',
					d_azp_gsc_registration_m_temp => '1',
					d_azp_gsc_registration_t_city_department => $empty_city_department,
					d_azp_gsc_registration_t_city_municipality => $empty_city_municipality,
					d_azp_gsc_registration_t_death_date => $empty_death_date,
					d_azp_gsc_registration_t_department => $empty_department,
					d_azp_gsc_registration_t_full_name => $empty_full_name,
					d_azp_gsc_registration_t_identification => $empty_identification,
					d_azp_gsc_registration_t_notary_address => $empty_notary_address,
					d_azp_gsc_registration_t_notary_name => $empty_notary_name,
					d_azp_gsc_registration_t_notary_number => $empty_notary_number,
					d_azp_gsc_registration_t_number_serial => $empty_number_serial,
					d_azp_gsc_registration_t_observation => $empty_observation,
					d_azp_gsc_registration_t_reason => $empty_reason,
					d_azp_gsc_registration_t_reported_bank => $empty_reported_bank,
					d_azp_gsc_registration_t_shipping_number => $empty_shipping_number,
					d_azp_gsc_registration_t_state => $empty_state,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_registration, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_registration_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "' AND " . d_azp_gsc_registration_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "' AND " . d_azp_gsc_registration_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_registration_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "' AND " . d_azp_gsc_registration_m_level . " = '2'");
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
		final public function sql_azp_gsc_registration_remove(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_registration_remove($data);
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
				$var_array = array(d_azp_gsc_registration_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_registration, $var_array, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_registration_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "' AND " . d_azp_gsc_registration_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "' AND " . d_azp_gsc_registration_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_registration_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "' AND " . d_azp_gsc_registration_m_level . " = '2'");
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
		final public function sql_azp_gsc_registration_restore(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_registration_restore($data);
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
				$var_array = array(d_azp_gsc_registration_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_registration, $var_array, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_registration_update(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_city_department'])) { throw new Exception('<b>Error:</b> El campo de ciudad - departamento esta prohibido modificar.'); }
				if (!isset($data['field_up_city_municipality'])) { throw new Exception('<b>Error:</b> El campo de ciudad - municipio esta prohibido modificar.'); }
				if (!isset($data['field_up_death_date'])) { throw new Exception('<b>Error:</b> El campo de fecha de defuncion esta prohibido modificar.'); }
				if (!isset($data['field_up_department'])) { throw new Exception('<b>Error:</b> El campo de departamento esta prohibido modificar.'); }
				if (!isset($data['field_up_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre completo esta prohibido modificar.'); }
				if (!isset($data['field_up_identification'])) { throw new Exception('<b>Error:</b> El campo de cedula esta prohibido modificar.'); }
				if (!isset($data['field_up_notary_address'])) { throw new Exception('<b>Error:</b> El campo de direccion notaria esta prohibido modificar.'); }
				if (!isset($data['field_up_notary_name'])) { throw new Exception('<b>Error:</b> El campo de nombre de notarias esta prohibido modificar.'); }
				if (!isset($data['field_up_notary_number'])) { throw new Exception('<b>Error:</b> El campo de nro notaria esta prohibido modificar.'); }
				if (!isset($data['field_up_number_serial'])) { throw new Exception('<b>Error:</b> El campo de numero serial esta prohibido modificar.'); }
				if (!isset($data['field_up_observation'])) { throw new Exception('<b>Error:</b> El campo de observaciones esta prohibido modificar.'); }
				if (!isset($data['field_up_reason'])) { throw new Exception('<b>Error:</b> El campo de motivo esta prohibido modificar.'); }
				if (!isset($data['field_up_reported_bank'])) { throw new Exception('<b>Error:</b> El campo de reportado a banco esta prohibido modificar.'); }
				if (!isset($data['field_up_shipping_number'])) { throw new Exception('<b>Error:</b> El campo de nro envio esta prohibido modificar.'); }
				if (!isset($data['field_up_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_city_department = $this->db->scape($data['field_up_city_department']);
				$empty_city_municipality = $this->db->scape($data['field_up_city_municipality']);
				$empty_death_date = $this->db->scape($data['field_up_death_date']);
				$empty_department = $this->db->scape($data['field_up_department']);
				$empty_full_name = $this->db->scape($data['field_up_full_name']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_notary_address = $this->db->scape($data['field_up_notary_address']);
				$empty_notary_name = $this->db->scape($data['field_up_notary_name']);
				$empty_notary_number = $this->db->scape($data['field_up_notary_number']);
				$empty_number_serial = $this->db->scape($data['field_up_number_serial']);
				$empty_observation = $this->db->scape($data['field_up_observation']);
				$empty_reason = $this->db->scape($data['field_up_reason']);
				$empty_reported_bank = $this->db->scape($data['field_up_reported_bank']);
				$empty_shipping_number = $this->db->scape($data['field_up_shipping_number']);
				$empty_state = $this->db->scape($data['field_up_state']);
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
				if (Func::emp($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula solo permite numeros.');
				}
				#---------------------------------------------#
				if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_identification, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos es oblgitario.');
				}
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos solo permite letras.');
				}*/
				#---------------------------------------------#
				if (strlen($empty_full_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_full_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombres completos no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "' AND " . d_azp_gsc_registration_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_registration_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "' AND " . d_azp_gsc_registration_m_level . " = '2'");
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
		final public function sql_azp_gsc_registration_update(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_registration_update($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				#-------------------------------------------------------------------------#
				$empty_city_department = $this->db->scape($data['field_up_city_department']);
				$empty_city_municipality = $this->db->scape($data['field_up_city_municipality']);
				$empty_death_date = $this->db->scape($data['field_up_death_date']);
				$empty_department = $this->db->scape($data['field_up_department']);
				$empty_full_name = $this->db->scape($data['field_up_full_name']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_notary_address = $this->db->scape($data['field_up_notary_address']);
				$empty_notary_name = $this->db->scape($data['field_up_notary_name']);
				$empty_notary_number = $this->db->scape($data['field_up_notary_number']);
				$empty_number_serial = $this->db->scape($data['field_up_number_serial']);
				$empty_observation = $this->db->scape($data['field_up_observation']);
				$empty_reason = $this->db->scape($data['field_up_reason']);
				$empty_reported_bank = $this->db->scape($data['field_up_reported_bank']);
				$empty_shipping_number = $this->db->scape($data['field_up_shipping_number']);
				$empty_state = $this->db->scape($data['field_up_state']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_gsc_registration, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_array = array(
							d_azs_gsc_registration_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_gsc_registration_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_gsc_registration_m_date_created => DATE_HOUR,
							d_azs_gsc_registration_m_date_modified => DATE_HOUR,
							d_azs_gsc_registration_m_deleted => $key_sql[d_azp_gsc_registration_m_deleted],
							d_azs_gsc_registration_m_description => $key_sql[d_azp_gsc_registration_m_description],
							d_azs_gsc_registration_m_level => $key_sql[d_azp_gsc_registration_m_level],
							d_azs_gsc_registration_m_status => $key_sql[d_azp_gsc_registration_m_status],
							d_azs_gsc_registration_m_temp => $key_sql[d_azp_gsc_registration_m_temp],
							d_azs_gsc_registration_t_city_department => $key_sql[d_azp_gsc_registration_t_city_department],
							d_azs_gsc_registration_t_city_municipality => $key_sql[d_azp_gsc_registration_t_city_municipality],
							d_azs_gsc_registration_t_death_date => $key_sql[d_azp_gsc_registration_t_death_date],
							d_azs_gsc_registration_t_department => $key_sql[d_azp_gsc_registration_t_department],
							d_azs_gsc_registration_t_full_name => $key_sql[d_azp_gsc_registration_t_full_name],
							d_azs_gsc_registration_t_identification => $key_sql[d_azp_gsc_registration_t_identification],
							d_azs_gsc_registration_t_notary_address => $key_sql[d_azp_gsc_registration_t_notary_address],
							d_azs_gsc_registration_t_notary_name => $key_sql[d_azp_gsc_registration_t_notary_name],
							d_azs_gsc_registration_t_notary_number => $key_sql[d_azp_gsc_registration_t_notary_number],
							d_azs_gsc_registration_t_number_serial => $key_sql[d_azp_gsc_registration_t_number_serial],
							d_azs_gsc_registration_t_observation => $key_sql[d_azp_gsc_registration_t_observation],
							d_azs_gsc_registration_t_reason => $key_sql[d_azp_gsc_registration_t_reason],
							d_azs_gsc_registration_t_reported_bank => $key_sql[d_azp_gsc_registration_t_reported_bank],
							d_azs_gsc_registration_t_shipping_number => $key_sql[d_azp_gsc_registration_t_shipping_number],
							d_azs_gsc_registration_t_state => $key_sql[d_azp_gsc_registration_t_state],
							d_azs_gsc_registration_v_id_azp_gsc_registration => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_gsc_registration, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_registration_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_registration_m_date_modified => DATE_HOUR,
					d_azp_gsc_registration_t_city_department => $empty_city_department,
					d_azp_gsc_registration_t_city_municipality => $empty_city_municipality,
					d_azp_gsc_registration_t_death_date => $empty_death_date,
					d_azp_gsc_registration_t_department => $empty_department,
					d_azp_gsc_registration_t_full_name => $empty_full_name,
					d_azp_gsc_registration_t_identification => $empty_identification,
					d_azp_gsc_registration_t_notary_address => $empty_notary_address,
					d_azp_gsc_registration_t_notary_name => $empty_notary_name,
					d_azp_gsc_registration_t_notary_number => $empty_notary_number,
					d_azp_gsc_registration_t_number_serial => $empty_number_serial,
					d_azp_gsc_registration_t_observation => $empty_observation,
					d_azp_gsc_registration_t_reason => $empty_reason,
					d_azp_gsc_registration_t_reported_bank => $empty_reported_bank,
					d_azp_gsc_registration_t_shipping_number => $empty_shipping_number,
					d_azp_gsc_registration_t_state => $empty_state,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_registration, $var_array, d_azp_gsc_registration_id_azp_gsc_registration . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function validate_date($date, $format = 'Y-m-d') {
			$d = DateTime::createFromFormat($format, $date);
			return $d && $d->format($format) == $date;
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>