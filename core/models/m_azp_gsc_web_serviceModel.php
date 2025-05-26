<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_gsc_web_serviceModel extends Models implements OCREND {
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
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_id_azp_gsc_web_service . " AS 'lbl_azp_gsc_web_service_id_azp_gsc_web_service',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_date_created . " AS 'lbl_azp_gsc_web_service_m_date_created',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_date_modified . " AS 'lbl_azp_gsc_web_service_m_date_modified',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_description . " AS 'lbl_azp_gsc_web_service_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_city_department . " AS 'lbl_azp_gsc_web_service_t_city_department',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_city_municipality . " AS 'lbl_azp_gsc_web_service_t_city_municipality',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_death_date . " AS 'lbl_azp_gsc_web_service_t_death_date',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_department . " AS 'lbl_azp_gsc_web_service_t_department',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_full_name . " AS 'lbl_azp_gsc_web_service_t_full_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_identification . " AS 'lbl_azp_gsc_web_service_t_identification',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_address . " AS 'lbl_azp_gsc_web_service_t_notary_address',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_name . " AS 'lbl_azp_gsc_web_service_t_notary_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_number . " AS 'lbl_azp_gsc_web_service_t_notary_number',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_number_serial . " AS 'lbl_azp_gsc_web_service_t_number_serial',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_observation . " AS 'lbl_azp_gsc_web_service_t_observation',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_reason . " AS 'lbl_azp_gsc_web_service_t_reason',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_reported_bank . " AS 'lbl_azp_gsc_web_service_t_reported_bank',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_shipping_number . " AS 'lbl_azp_gsc_web_service_t_shipping_number',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_state . " AS 'lbl_azp_gsc_web_service_t_state'
				FROM " . t_azp_gsc_web_service . " tc_azp_gsc_web_service
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_deleted . " = '1'
				ORDER BY tc_azp_gsc_web_service." . d_azp_gsc_web_service_id_azp_gsc_web_service . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_id_azs_gsc_web_service . " AS 'lbl_azs_gsc_web_service_id_azs_gsc_web_service',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_m_date_modified . " AS 'lbl_azs_gsc_web_service_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_m_date_created . " AS 'lbl_azs_gsc_web_service_m_date_created',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_m_date_modified . " AS 'lbl_azs_gsc_web_service_m_date_modified',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_m_description . " AS 'lbl_azs_gsc_web_service_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_city_department . " AS 'lbl_azs_gsc_web_service_t_city_department',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_city_municipality . " AS 'lbl_azs_gsc_web_service_t_city_municipality',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_death_date . " AS 'lbl_azs_gsc_web_service_t_death_date',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_department . " AS 'lbl_azs_gsc_web_service_t_department',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_full_name . " AS 'lbl_azs_gsc_web_service_t_full_name',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_identification . " AS 'lbl_azs_gsc_web_service_t_identification',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_notary_address . " AS 'lbl_azs_gsc_web_service_t_notary_address',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_notary_name . " AS 'lbl_azs_gsc_web_service_t_notary_name',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_notary_number . " AS 'lbl_azs_gsc_web_service_t_notary_number',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_number_serial . " AS 'lbl_azs_gsc_web_service_t_number_serial',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_observation . " AS 'lbl_azs_gsc_web_service_t_observation',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_reason . " AS 'lbl_azs_gsc_web_service_t_reason',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_reported_bank . " AS 'lbl_azs_gsc_web_service_t_reported_bank',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_shipping_number . " AS 'lbl_azs_gsc_web_service_t_shipping_number',
					tc_azs_gsc_web_service." . d_azs_gsc_web_service_t_state . " AS 'lbl_azs_gsc_web_service_t_state'
				FROM " . t_azs_gsc_web_service . " tc_azs_gsc_web_service
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_gsc_web_service." . d_azs_gsc_web_service_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_gsc_web_service." . d_azs_gsc_web_service_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_gsc_web_service." . d_azs_gsc_web_service_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_gsc_web_service." . d_azs_gsc_web_service_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_gsc_web_service." . d_azs_gsc_web_service_v_id_azp_gsc_web_service . " = '" . $this->id . "'
				ORDER BY tc_azs_gsc_web_service." . d_azs_gsc_web_service_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_gsc_web_service . "
				WHERE " . d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $this->id . "'
					AND " . d_azp_gsc_web_service_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_gsc_web_service);
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
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_id_azp_gsc_web_service . " AS 'lbl_azp_gsc_web_service_id_azp_gsc_web_service',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_date_created . " AS 'lbl_azp_gsc_web_service_m_date_created',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_date_modified . " AS 'lbl_azp_gsc_web_service_m_date_modified',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_description . " AS 'lbl_azp_gsc_web_service_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_city_department . " AS 'lbl_azp_gsc_web_service_t_city_department',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_city_municipality . " AS 'lbl_azp_gsc_web_service_t_city_municipality',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_death_date . " AS 'lbl_azp_gsc_web_service_t_death_date',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_department . " AS 'lbl_azp_gsc_web_service_t_department',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_full_name . " AS 'lbl_azp_gsc_web_service_t_full_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_identification . " AS 'lbl_azp_gsc_web_service_t_identification',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_address . " AS 'lbl_azp_gsc_web_service_t_notary_address',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_name . " AS 'lbl_azp_gsc_web_service_t_notary_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_number . " AS 'lbl_azp_gsc_web_service_t_notary_number',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_number_serial . " AS 'lbl_azp_gsc_web_service_t_number_serial',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_observation . " AS 'lbl_azp_gsc_web_service_t_observation',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_reason . " AS 'lbl_azp_gsc_web_service_t_reason',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_reported_bank . " AS 'lbl_azp_gsc_web_service_t_reported_bank',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_shipping_number . " AS 'lbl_azp_gsc_web_service_t_shipping_number',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_state . " AS 'lbl_azp_gsc_web_service_t_state'
				FROM " . t_azp_gsc_web_service . " tc_azp_gsc_web_service
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_web_service." . d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $this->id . "'
					AND tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_id_azp_gsc_web_service . " AS 'lbl_azp_gsc_web_service_id_azp_gsc_web_service',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_date_created . " AS 'lbl_azp_gsc_web_service_m_date_created',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_date_modified . " AS 'lbl_azp_gsc_web_service_m_date_modified',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_description . " AS 'lbl_azp_gsc_web_service_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_city_department . " AS 'lbl_azp_gsc_web_service_t_city_department',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_city_municipality . " AS 'lbl_azp_gsc_web_service_t_city_municipality',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_death_date . " AS 'lbl_azp_gsc_web_service_t_death_date',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_department . " AS 'lbl_azp_gsc_web_service_t_department',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_full_name . " AS 'lbl_azp_gsc_web_service_t_full_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_identification . " AS 'lbl_azp_gsc_web_service_t_identification',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_address . " AS 'lbl_azp_gsc_web_service_t_notary_address',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_name . " AS 'lbl_azp_gsc_web_service_t_notary_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_number . " AS 'lbl_azp_gsc_web_service_t_notary_number',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_number_serial . " AS 'lbl_azp_gsc_web_service_t_number_serial',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_observation . " AS 'lbl_azp_gsc_web_service_t_observation',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_reason . " AS 'lbl_azp_gsc_web_service_t_reason',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_reported_bank . " AS 'lbl_azp_gsc_web_service_t_reported_bank',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_shipping_number . " AS 'lbl_azp_gsc_web_service_t_shipping_number',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_state . " AS 'lbl_azp_gsc_web_service_t_state'
				FROM " . t_azp_gsc_web_service . " tc_azp_gsc_web_service
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_deleted . " = '3'
				ORDER BY tc_azp_gsc_web_service." . d_azp_gsc_web_service_id_azp_gsc_web_service . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_id_azp_gsc_web_service . " AS 'lbl_azp_gsc_web_service_id_azp_gsc_web_service',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_date_created . " AS 'lbl_azp_gsc_web_service_m_date_created',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_date_modified . " AS 'lbl_azp_gsc_web_service_m_date_modified',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_description . " AS 'lbl_azp_gsc_web_service_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_city_department . " AS 'lbl_azp_gsc_web_service_t_city_department',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_city_municipality . " AS 'lbl_azp_gsc_web_service_t_city_municipality',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_death_date . " AS 'lbl_azp_gsc_web_service_t_death_date',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_department . " AS 'lbl_azp_gsc_web_service_t_department',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_full_name . " AS 'lbl_azp_gsc_web_service_t_full_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_identification . " AS 'lbl_azp_gsc_web_service_t_identification',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_address . " AS 'lbl_azp_gsc_web_service_t_notary_address',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_name . " AS 'lbl_azp_gsc_web_service_t_notary_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_number . " AS 'lbl_azp_gsc_web_service_t_notary_number',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_number_serial . " AS 'lbl_azp_gsc_web_service_t_number_serial',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_observation . " AS 'lbl_azp_gsc_web_service_t_observation',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_reason . " AS 'lbl_azp_gsc_web_service_t_reason',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_reported_bank . " AS 'lbl_azp_gsc_web_service_t_reported_bank',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_shipping_number . " AS 'lbl_azp_gsc_web_service_t_shipping_number',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_state . " AS 'lbl_azp_gsc_web_service_t_state'
				FROM " . t_azp_gsc_web_service . " tc_azp_gsc_web_service
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_deleted . " = '1'
				ORDER BY tc_azp_gsc_web_service." . d_azp_gsc_web_service_id_azp_gsc_web_service . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_id_azp_gsc_web_service . " AS 'lbl_azp_gsc_web_service_id_azp_gsc_web_service',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_date_created . " AS 'lbl_azp_gsc_web_service_m_date_created',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_date_modified . " AS 'lbl_azp_gsc_web_service_m_date_modified',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_description . " AS 'lbl_azp_gsc_web_service_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_city_department . " AS 'lbl_azp_gsc_web_service_t_city_department',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_city_municipality . " AS 'lbl_azp_gsc_web_service_t_city_municipality',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_death_date . " AS 'lbl_azp_gsc_web_service_t_death_date',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_department . " AS 'lbl_azp_gsc_web_service_t_department',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_full_name . " AS 'lbl_azp_gsc_web_service_t_full_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_identification . " AS 'lbl_azp_gsc_web_service_t_identification',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_address . " AS 'lbl_azp_gsc_web_service_t_notary_address',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_name . " AS 'lbl_azp_gsc_web_service_t_notary_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_number . " AS 'lbl_azp_gsc_web_service_t_notary_number',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_number_serial . " AS 'lbl_azp_gsc_web_service_t_number_serial',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_observation . " AS 'lbl_azp_gsc_web_service_t_observation',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_reason . " AS 'lbl_azp_gsc_web_service_t_reason',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_reported_bank . " AS 'lbl_azp_gsc_web_service_t_reported_bank',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_shipping_number . " AS 'lbl_azp_gsc_web_service_t_shipping_number',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_state . " AS 'lbl_azp_gsc_web_service_t_state'
				FROM " . t_azp_gsc_web_service . " tc_azp_gsc_web_service
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_deleted . " = '2'
				ORDER BY tc_azp_gsc_web_service." . d_azp_gsc_web_service_id_azp_gsc_web_service . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_id_azp_gsc_web_service . " AS 'lbl_azp_gsc_web_service_id_azp_gsc_web_service',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_created . " AS 'lbl_azp_gsc_web_service_m_by_created',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_modified . " AS 'lbl_azp_gsc_web_service_m_by_modified',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_date_created . " AS 'lbl_azp_gsc_web_service_m_date_created',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_date_modified . " AS 'lbl_azp_gsc_web_service_m_date_modified',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_description . " AS 'lbl_azp_gsc_web_service_m_description',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_level . " AS 'lbl_azp_gsc_web_service_m_level',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_status . " AS 'lbl_azp_gsc_web_service_m_status',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_city_department . " AS 'lbl_azp_gsc_web_service_t_city_department',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_city_municipality . " AS 'lbl_azp_gsc_web_service_t_city_municipality',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_death_date . " AS 'lbl_azp_gsc_web_service_t_death_date',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_department . " AS 'lbl_azp_gsc_web_service_t_department',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_full_name . " AS 'lbl_azp_gsc_web_service_t_full_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_identification . " AS 'lbl_azp_gsc_web_service_t_identification',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_address . " AS 'lbl_azp_gsc_web_service_t_notary_address',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_name . " AS 'lbl_azp_gsc_web_service_t_notary_name',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_notary_number . " AS 'lbl_azp_gsc_web_service_t_notary_number',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_number_serial . " AS 'lbl_azp_gsc_web_service_t_number_serial',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_observation . " AS 'lbl_azp_gsc_web_service_t_observation',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_reason . " AS 'lbl_azp_gsc_web_service_t_reason',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_reported_bank . " AS 'lbl_azp_gsc_web_service_t_reported_bank',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_shipping_number . " AS 'lbl_azp_gsc_web_service_t_shipping_number',
					tc_azp_gsc_web_service." . d_azp_gsc_web_service_t_state . " AS 'lbl_azp_gsc_web_service_t_state'
				FROM " . t_azp_gsc_web_service . " tc_azp_gsc_web_service
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_gsc_web_service." . d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $this->id . "'
					AND tc_azp_gsc_web_service." . d_azp_gsc_web_service_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_gsc_web_service_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "' AND " . d_azp_gsc_web_service_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "' AND " . d_azp_gsc_web_service_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_web_service_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "' AND " . d_azp_gsc_web_service_m_level . " = '2'");
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
		final public function sql_azp_gsc_web_service_delete(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_web_service_delete($data);
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
				$var_array = array(d_azp_gsc_web_service_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_web_service, $var_array, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_gsc_web_service_insert(array $data) {
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
		final public function sql_azp_gsc_web_service_insert(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_web_service_insert($data);
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
					d_azp_gsc_web_service_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_gsc_web_service_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_web_service_m_date_created => DATE_HOUR,
					d_azp_gsc_web_service_m_date_modified => DATE_HOUR,
					d_azp_gsc_web_service_m_deleted => '1',
					d_azp_gsc_web_service_m_description => '',
					d_azp_gsc_web_service_m_level => '2',
					d_azp_gsc_web_service_m_status => '1',
					d_azp_gsc_web_service_m_temp => '1',
					d_azp_gsc_web_service_t_city_department => $empty_city_department,
					d_azp_gsc_web_service_t_city_municipality => $empty_city_municipality,
					d_azp_gsc_web_service_t_death_date => $empty_death_date,
					d_azp_gsc_web_service_t_department => $empty_department,
					d_azp_gsc_web_service_t_full_name => $empty_full_name,
					d_azp_gsc_web_service_t_identification => $empty_identification,
					d_azp_gsc_web_service_t_notary_address => $empty_notary_address,
					d_azp_gsc_web_service_t_notary_name => $empty_notary_name,
					d_azp_gsc_web_service_t_notary_number => $empty_notary_number,
					d_azp_gsc_web_service_t_number_serial => $empty_number_serial,
					d_azp_gsc_web_service_t_observation => $empty_observation,
					d_azp_gsc_web_service_t_reason => $empty_reason,
					d_azp_gsc_web_service_t_reported_bank => $empty_reported_bank,
					d_azp_gsc_web_service_t_shipping_number => $empty_shipping_number,
					d_azp_gsc_web_service_t_state => $empty_state,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_gsc_web_service, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_web_service_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "' AND " . d_azp_gsc_web_service_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "' AND " . d_azp_gsc_web_service_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_web_service_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "' AND " . d_azp_gsc_web_service_m_level . " = '2'");
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
		final public function sql_azp_gsc_web_service_remove(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_web_service_remove($data);
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
				$var_array = array(d_azp_gsc_web_service_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_web_service, $var_array, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_web_service_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "' AND " . d_azp_gsc_web_service_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "' AND " . d_azp_gsc_web_service_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_web_service_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "' AND " . d_azp_gsc_web_service_m_level . " = '2'");
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
		final public function sql_azp_gsc_web_service_restore(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_web_service_restore($data);
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
				$var_array = array(d_azp_gsc_web_service_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_web_service, $var_array, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_gsc_web_service_update(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "' AND " . d_azp_gsc_web_service_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_gsc_web_service_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "' AND " . d_azp_gsc_web_service_m_level . " = '2'");
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
		final public function sql_azp_gsc_web_service_update(array $data) : array {
			$var_error = $this->error_sql_azp_gsc_web_service_update($data);
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
				$var_sql = $this->db->select('*', t_azp_gsc_web_service, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_array = array(
							d_azs_gsc_web_service_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_gsc_web_service_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_gsc_web_service_m_date_created => DATE_HOUR,
							d_azs_gsc_web_service_m_date_modified => DATE_HOUR,
							d_azs_gsc_web_service_m_deleted => $key_sql[d_azp_gsc_web_service_m_deleted],
							d_azs_gsc_web_service_m_description => $key_sql[d_azp_gsc_web_service_m_description],
							d_azs_gsc_web_service_m_level => $key_sql[d_azp_gsc_web_service_m_level],
							d_azs_gsc_web_service_m_status => $key_sql[d_azp_gsc_web_service_m_status],
							d_azs_gsc_web_service_m_temp => $key_sql[d_azp_gsc_web_service_m_temp],
							d_azs_gsc_web_service_t_city_department => $key_sql[d_azp_gsc_web_service_t_city_department],
							d_azs_gsc_web_service_t_city_municipality => $key_sql[d_azp_gsc_web_service_t_city_municipality],
							d_azs_gsc_web_service_t_death_date => $key_sql[d_azp_gsc_web_service_t_death_date],
							d_azs_gsc_web_service_t_department => $key_sql[d_azp_gsc_web_service_t_department],
							d_azs_gsc_web_service_t_full_name => $key_sql[d_azp_gsc_web_service_t_full_name],
							d_azs_gsc_web_service_t_identification => $key_sql[d_azp_gsc_web_service_t_identification],
							d_azs_gsc_web_service_t_notary_address => $key_sql[d_azp_gsc_web_service_t_notary_address],
							d_azs_gsc_web_service_t_notary_name => $key_sql[d_azp_gsc_web_service_t_notary_name],
							d_azs_gsc_web_service_t_notary_number => $key_sql[d_azp_gsc_web_service_t_notary_number],
							d_azs_gsc_web_service_t_number_serial => $key_sql[d_azp_gsc_web_service_t_number_serial],
							d_azs_gsc_web_service_t_observation => $key_sql[d_azp_gsc_web_service_t_observation],
							d_azs_gsc_web_service_t_reason => $key_sql[d_azp_gsc_web_service_t_reason],
							d_azs_gsc_web_service_t_reported_bank => $key_sql[d_azp_gsc_web_service_t_reported_bank],
							d_azs_gsc_web_service_t_shipping_number => $key_sql[d_azp_gsc_web_service_t_shipping_number],
							d_azs_gsc_web_service_t_state => $key_sql[d_azp_gsc_web_service_t_state],
							d_azs_gsc_web_service_v_id_azp_gsc_web_service => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_gsc_web_service, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_gsc_web_service_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_gsc_web_service_m_date_modified => DATE_HOUR,
					d_azp_gsc_web_service_t_city_department => $empty_city_department,
					d_azp_gsc_web_service_t_city_municipality => $empty_city_municipality,
					d_azp_gsc_web_service_t_death_date => $empty_death_date,
					d_azp_gsc_web_service_t_department => $empty_department,
					d_azp_gsc_web_service_t_full_name => $empty_full_name,
					d_azp_gsc_web_service_t_identification => $empty_identification,
					d_azp_gsc_web_service_t_notary_address => $empty_notary_address,
					d_azp_gsc_web_service_t_notary_name => $empty_notary_name,
					d_azp_gsc_web_service_t_notary_number => $empty_notary_number,
					d_azp_gsc_web_service_t_number_serial => $empty_number_serial,
					d_azp_gsc_web_service_t_observation => $empty_observation,
					d_azp_gsc_web_service_t_reason => $empty_reason,
					d_azp_gsc_web_service_t_reported_bank => $empty_reported_bank,
					d_azp_gsc_web_service_t_shipping_number => $empty_shipping_number,
					d_azp_gsc_web_service_t_state => $empty_state,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_gsc_web_service, $var_array, d_azp_gsc_web_service_id_azp_gsc_web_service . " = '" . $empty_id . "'");
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