<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_crt_third_partiesModel extends Models implements OCREND {
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
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " AS 'lbl_azp_crt_third_parties_id_azp_crt_third_parties',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_created . " AS 'lbl_azp_crt_third_parties_m_date_created',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_modified . " AS 'lbl_azp_crt_third_parties_m_date_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_description . " AS 'lbl_azp_crt_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_address . " AS 'lbl_azp_crt_third_parties_t_address',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_consecutive . " AS 'lbl_azp_crt_third_parties_t_consecutive',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_contact . " AS 'lbl_azp_crt_third_parties_t_contact',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_email . " AS 'lbl_azp_crt_third_parties_t_email',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_password . " AS 'lbl_azp_crt_third_parties_t_password',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_fixed . " AS 'lbl_azp_crt_third_parties_t_phone_fixed',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_movil . " AS 'lbl_azp_crt_third_parties_t_phone_movil',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_second . " AS 'lbl_azp_crt_third_parties_t_phone_second',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_third_type." . d_azp_crt_third_type_t_name . " AS 'lbl_azp_crt_third_type_t_name'
				FROM " . t_azp_crt_third_parties . " tc_azp_crt_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_third_type ." tc_azp_crt_third_type
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . "
						= tc_azp_crt_third_type." . d_azp_crt_third_type_id_azp_crt_third_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_deleted . " = '1'
				ORDER BY tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_id_azs_crt_third_parties . " AS 'lbl_azs_crt_third_parties_id_azs_crt_third_parties',
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_m_date_modified . " AS 'lbl_azs_crt_third_parties_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_m_date_created . " AS 'lbl_azs_crt_third_parties_m_date_created',
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_m_date_modified . " AS 'lbl_azs_crt_third_parties_m_date_modified',
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_m_description . " AS 'lbl_azs_crt_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_t_address . " AS 'lbl_azs_crt_third_parties_t_address',
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_t_consecutive . " AS 'lbl_azs_crt_third_parties_t_consecutive',
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_t_contact . " AS 'lbl_azs_crt_third_parties_t_contact',
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_t_email . " AS 'lbl_azs_crt_third_parties_t_email',
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_t_password . " AS 'lbl_azs_crt_third_parties_t_password',
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_t_phone_fixed . " AS 'lbl_azs_crt_third_parties_t_phone_fixed',
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_t_phone_movil . " AS 'lbl_azs_crt_third_parties_t_phone_movil',
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_t_phone_second . " AS 'lbl_azs_crt_third_parties_t_phone_second',
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_u_crt_city . " AS 'lbl_azs_crt_third_parties_u_crt_city',
					tc_azs_crt_third_parties." . d_azs_crt_third_parties_u_crt_third_type . " AS 'lbl_azs_crt_third_parties_u_crt_third_type'
				FROM " . t_azs_crt_third_parties . " tc_azs_crt_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_crt_third_parties." . d_azs_crt_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_crt_third_parties." . d_azs_crt_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_crt_third_parties." . d_azs_crt_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_crt_third_parties." . d_azs_crt_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_crt_third_parties." . d_azs_crt_third_parties_v_id_azp_crt_third_parties . " = '" . $this->id . "'
				ORDER BY tc_azs_crt_third_parties." . d_azs_crt_third_parties_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_crt_third_parties . "
				WHERE " . d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $this->id . "'
					AND " . d_azp_crt_third_parties_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_crt_third_parties);
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
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " AS 'lbl_azp_crt_third_parties_id_azp_crt_third_parties',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_created . " AS 'lbl_azp_crt_third_parties_m_date_created',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_modified . " AS 'lbl_azp_crt_third_parties_m_date_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_description . " AS 'lbl_azp_crt_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_address . " AS 'lbl_azp_crt_third_parties_t_address',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_consecutive . " AS 'lbl_azp_crt_third_parties_t_consecutive',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_contact . " AS 'lbl_azp_crt_third_parties_t_contact',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_email . " AS 'lbl_azp_crt_third_parties_t_email',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_password . " AS 'lbl_azp_crt_third_parties_t_password',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_fixed . " AS 'lbl_azp_crt_third_parties_t_phone_fixed',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_movil . " AS 'lbl_azp_crt_third_parties_t_phone_movil',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_second . " AS 'lbl_azp_crt_third_parties_t_phone_second',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_third_type." . d_azp_crt_third_type_t_name . " AS 'lbl_azp_crt_third_type_t_name'
				FROM " . t_azp_crt_third_parties . " tc_azp_crt_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_third_type ." tc_azp_crt_third_type
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . "
						= tc_azp_crt_third_type." . d_azp_crt_third_type_id_azp_crt_third_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $this->id . "'
					AND tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " AS 'lbl_azp_crt_third_parties_id_azp_crt_third_parties',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_created . " AS 'lbl_azp_crt_third_parties_m_date_created',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_modified . " AS 'lbl_azp_crt_third_parties_m_date_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_description . " AS 'lbl_azp_crt_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_address . " AS 'lbl_azp_crt_third_parties_t_address',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_consecutive . " AS 'lbl_azp_crt_third_parties_t_consecutive',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_contact . " AS 'lbl_azp_crt_third_parties_t_contact',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_email . " AS 'lbl_azp_crt_third_parties_t_email',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_password . " AS 'lbl_azp_crt_third_parties_t_password',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_fixed . " AS 'lbl_azp_crt_third_parties_t_phone_fixed',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_movil . " AS 'lbl_azp_crt_third_parties_t_phone_movil',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_second . " AS 'lbl_azp_crt_third_parties_t_phone_second',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_third_type." . d_azp_crt_third_type_t_name . " AS 'lbl_azp_crt_third_type_t_name'
				FROM " . t_azp_crt_third_parties . " tc_azp_crt_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_third_type ." tc_azp_crt_third_type
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . "
						= tc_azp_crt_third_type." . d_azp_crt_third_type_id_azp_crt_third_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_deleted . " = '3'
				ORDER BY tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " AS 'lbl_azp_crt_third_parties_id_azp_crt_third_parties',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_created . " AS 'lbl_azp_crt_third_parties_m_date_created',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_modified . " AS 'lbl_azp_crt_third_parties_m_date_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_description . " AS 'lbl_azp_crt_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_address . " AS 'lbl_azp_crt_third_parties_t_address',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_consecutive . " AS 'lbl_azp_crt_third_parties_t_consecutive',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_contact . " AS 'lbl_azp_crt_third_parties_t_contact',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_email . " AS 'lbl_azp_crt_third_parties_t_email',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_password . " AS 'lbl_azp_crt_third_parties_t_password',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_fixed . " AS 'lbl_azp_crt_third_parties_t_phone_fixed',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_movil . " AS 'lbl_azp_crt_third_parties_t_phone_movil',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_second . " AS 'lbl_azp_crt_third_parties_t_phone_second',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_third_type." . d_azp_crt_third_type_t_name . " AS 'lbl_azp_crt_third_type_t_name'
				FROM " . t_azp_crt_third_parties . " tc_azp_crt_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_third_type ." tc_azp_crt_third_type
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . "
						= tc_azp_crt_third_type." . d_azp_crt_third_type_id_azp_crt_third_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_deleted . " = '1'
				ORDER BY tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " AS 'lbl_azp_crt_third_parties_id_azp_crt_third_parties',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_created . " AS 'lbl_azp_crt_third_parties_m_date_created',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_modified . " AS 'lbl_azp_crt_third_parties_m_date_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_description . " AS 'lbl_azp_crt_third_parties_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_address . " AS 'lbl_azp_crt_third_parties_t_address',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_consecutive . " AS 'lbl_azp_crt_third_parties_t_consecutive',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_contact . " AS 'lbl_azp_crt_third_parties_t_contact',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_email . " AS 'lbl_azp_crt_third_parties_t_email',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_password . " AS 'lbl_azp_crt_third_parties_t_password',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_fixed . " AS 'lbl_azp_crt_third_parties_t_phone_fixed',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_movil . " AS 'lbl_azp_crt_third_parties_t_phone_movil',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_second . " AS 'lbl_azp_crt_third_parties_t_phone_second',
					tc_azp_crt_city." . d_azp_crt_city_t_name . " AS 'lbl_azp_crt_city_t_name',
					tc_azp_crt_third_type." . d_azp_crt_third_type_t_name . " AS 'lbl_azp_crt_third_type_t_name'
				FROM " . t_azp_crt_third_parties . " tc_azp_crt_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_city ." tc_azp_crt_city
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_city . "
						= tc_azp_crt_city." . d_azp_crt_city_id_azp_crt_city . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_crt_third_type ." tc_azp_crt_third_type
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . "
						= tc_azp_crt_third_type." . d_azp_crt_third_type_id_azp_crt_third_type . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_deleted . " = '2'
				ORDER BY tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " AS 'lbl_azp_crt_third_parties_id_azp_crt_third_parties',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_created . " AS 'lbl_azp_crt_third_parties_m_by_created',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_modified . " AS 'lbl_azp_crt_third_parties_m_by_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_created . " AS 'lbl_azp_crt_third_parties_m_date_created',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_date_modified . " AS 'lbl_azp_crt_third_parties_m_date_modified',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_description . " AS 'lbl_azp_crt_third_parties_m_description',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_level . " AS 'lbl_azp_crt_third_parties_m_level',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_status . " AS 'lbl_azp_crt_third_parties_m_status',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_address . " AS 'lbl_azp_crt_third_parties_t_address',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_consecutive . " AS 'lbl_azp_crt_third_parties_t_consecutive',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_contact . " AS 'lbl_azp_crt_third_parties_t_contact',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_email . " AS 'lbl_azp_crt_third_parties_t_email',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_password . " AS 'lbl_azp_crt_third_parties_t_password',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_fixed . " AS 'lbl_azp_crt_third_parties_t_phone_fixed',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_movil . " AS 'lbl_azp_crt_third_parties_t_phone_movil',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_t_phone_second . " AS 'lbl_azp_crt_third_parties_t_phone_second',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_city . " AS 'lbl_azp_crt_third_parties_v_id_azp_crt_city',
					tc_azp_crt_third_parties." . d_azp_crt_third_parties_v_id_azp_crt_third_type . " AS 'lbl_azp_crt_third_parties_v_id_azp_crt_third_type'
				FROM " . t_azp_crt_third_parties . " tc_azp_crt_third_parties
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_crt_third_parties." . d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $this->id . "'
					AND tc_azp_crt_third_parties." . d_azp_crt_third_parties_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_crt_third_parties_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "' AND " . d_azp_crt_third_parties_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "' AND " . d_azp_crt_third_parties_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_third_parties_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "' AND " . d_azp_crt_third_parties_m_level . " = '2'");
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
		final public function sql_azp_crt_third_parties_delete(array $data) : array {
			$var_error = $this->error_sql_azp_crt_third_parties_delete($data);
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
				$var_array = array(d_azp_crt_third_parties_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_third_parties, $var_array, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_crt_third_parties_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_address'])) { throw new Exception('<b>Error:</b> El campo de direccion esta prohibido modificar.'); }
				if (!isset($data['field_cr_consecutive'])) { throw new Exception('<b>Error:</b> El campo de consecutivo esta prohibido modificar.'); }
				if (!isset($data['field_cr_contact'])) { throw new Exception('<b>Error:</b> El campo de contacto esta prohibido modificar.'); }
				if (!isset($data['field_cr_email'])) { throw new Exception('<b>Error:</b> El campo de correo electronico esta prohibido modificar.'); }
				if (!isset($data['field_cr_email_confirm'])) { throw new Exception('<b>Error:</b> El campo de confirmar correo electronico esta prohibido modificar.'); }
				if (!isset($data['field_cr_password'])) { throw new Exception('<b>Error:</b> El campo de contraseña esta prohibido modificar.'); }
				if (!isset($data['field_cr_phone_fixed'])) { throw new Exception('<b>Error:</b> El campo de telefono fijo esta prohibido modificar.'); }
				if (!isset($data['field_cr_phone_movil'])) { throw new Exception('<b>Error:</b> El campo de telefono movil esta prohibido modificar.'); }
				if (!isset($data['field_cr_phone_second'])) { throw new Exception('<b>Error:</b> El campo de telefono secundario esta prohibido modificar.'); }
				if (!isset($data['field_cr_crt_city'])) { throw new Exception('<b>Error:</b> El campo de ciudad esta prohibido modificar.'); }
				if (!isset($data['field_cr_crt_third_type'])) { throw new Exception('<b>Error:</b> El campo de tipo proveedor esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_address = $this->db->scape($data['field_cr_address']);
				$empty_consecutive = $this->db->scape($data['field_cr_consecutive']);
				$empty_contact = $this->db->scape($data['field_cr_contact']);
				$empty_email = $this->db->scape($data['field_cr_email']);
				$empty_email_confirm = $this->db->scape($data['field_cr_email_confirm']);
				$empty_password = $this->db->scape($data['field_cr_password']);
				$empty_phone_fixed = $this->db->scape($data['field_cr_phone_fixed']);
				$empty_phone_movil = $this->db->scape($data['field_cr_phone_movil']);
				$empty_phone_second = $this->db->scape($data['field_cr_phone_second']);
				$empty_crt_city = $this->db->scape($data['field_cr_crt_city']);
				$empty_crt_third_type = $this->db->scape($data['field_cr_crt_third_type']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_address)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_address) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_address, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_address)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_consecutive)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de consecutivo es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_consecutive)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de consecutivo solo permite numeros.');
				}
				#---------------------------------------------#
				if (strpos($empty_consecutive, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de consecutivo no permite ningun espacio en blanco.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_contact)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contacto es oblgitario.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_contact)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contacto solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_contact) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contacto permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_contact, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contacto no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_contact)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contacto no permite tener espacios en blanco al principio o al final.');
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
				if (Func::emp($empty_password)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_password) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_password, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_password)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_phone_fixed) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_phone_fixed) > 8) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo permite maximo hasta 8 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_phone_fixed, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_phone_fixed)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_phone_movil)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil es oblgitario.');
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
				if (strlen($empty_phone_second) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono secundario debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_phone_second) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono secundario permite maximo hasta 10 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_phone_second, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono secundario no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_phone_second)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono secundario no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_crt_city) || strtolower($empty_crt_city) == strtolower('seleccionar') || $empty_crt_city == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_crt_city)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_crt_third_type) || strtolower($empty_crt_third_type) == strtolower('seleccionar') || $empty_crt_third_type == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo proveedor es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_crt_third_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo proveedor solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_crt_city = $this->db->select('*', t_azp_crt_city, d_azp_crt_city_id_azp_crt_city . " = '" . $empty_crt_city . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_crt_city) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_crt_city) == '') { $sql_crt_city[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_crt_city[0][0]) != strtolower($empty_crt_city)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La ciudad seleccionada no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_crt_third_type = $this->db->select('*', t_azp_crt_third_type, d_azp_crt_third_type_id_azp_crt_third_type . " = '" . $empty_crt_third_type . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_crt_third_type) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_crt_third_type) == '') { $sql_crt_third_type[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_crt_third_type[0][0]) != strtolower($empty_crt_third_type)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo proveedor seleccionado no se encuentra registrado.');
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
		final public function sql_azp_crt_third_parties_insert(array $data) : array {
			$var_error = $this->error_sql_azp_crt_third_parties_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_address = $this->db->scape($data['field_cr_address']);
				$empty_consecutive = $this->db->scape($data['field_cr_consecutive']);
				$empty_contact = $this->db->scape($data['field_cr_contact']);
				$empty_email = $this->db->scape($data['field_cr_email']);
				$empty_email_confirm = $this->db->scape($data['field_cr_email_confirm']);
				$empty_password = $this->db->scape($data['field_cr_password']);
				$empty_phone_fixed = $this->db->scape($data['field_cr_phone_fixed']);
				$empty_phone_movil = $this->db->scape($data['field_cr_phone_movil']);
				$empty_phone_second = $this->db->scape($data['field_cr_phone_second']);
				$empty_crt_city = $this->db->scape($data['field_cr_crt_city']);
				$empty_crt_third_type = $this->db->scape($data['field_cr_crt_third_type']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_third_parties_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_crt_third_parties_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_third_parties_m_date_created => DATE_HOUR,
					d_azp_crt_third_parties_m_date_modified => DATE_HOUR,
					d_azp_crt_third_parties_m_deleted => '1',
					d_azp_crt_third_parties_m_description => $empty_description,
					d_azp_crt_third_parties_m_level => '2',
					d_azp_crt_third_parties_m_status => '1',
					d_azp_crt_third_parties_m_temp => '1',
					d_azp_crt_third_parties_t_address => ucwords(strtolower($empty_address)),
					d_azp_crt_third_parties_t_consecutive => $empty_consecutive,
					d_azp_crt_third_parties_t_contact => ucwords(strtolower($empty_contact)),
					d_azp_crt_third_parties_t_email => strtolower($empty_email),
					d_azp_crt_third_parties_t_password => $empty_password,
					d_azp_crt_third_parties_t_phone_fixed => $empty_phone_fixed,
					d_azp_crt_third_parties_t_phone_movil => $empty_phone_movil,
					d_azp_crt_third_parties_t_phone_second => $empty_phone_second,
					d_azp_crt_third_parties_v_id_azp_crt_city => $empty_crt_city,
					d_azp_crt_third_parties_v_id_azp_crt_third_type => $empty_crt_third_type,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_crt_third_parties, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_third_parties_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "' AND " . d_azp_crt_third_parties_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "' AND " . d_azp_crt_third_parties_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_third_parties_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "' AND " . d_azp_crt_third_parties_m_level . " = '2'");
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
		final public function sql_azp_crt_third_parties_remove(array $data) : array {
			$var_error = $this->error_sql_azp_crt_third_parties_remove($data);
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
				$var_array = array(d_azp_crt_third_parties_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_third_parties, $var_array, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_third_parties_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "' AND " . d_azp_crt_third_parties_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "' AND " . d_azp_crt_third_parties_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_third_parties_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "' AND " . d_azp_crt_third_parties_m_level . " = '2'");
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
		final public function sql_azp_crt_third_parties_restore(array $data) : array {
			$var_error = $this->error_sql_azp_crt_third_parties_restore($data);
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
				$var_array = array(d_azp_crt_third_parties_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_third_parties, $var_array, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_crt_third_parties_update(array $data) {
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
				if (!isset($data['field_up_address'])) { throw new Exception('<b>Error:</b> El campo de direccion esta prohibido modificar.'); }
				if (!isset($data['field_up_consecutive'])) { throw new Exception('<b>Error:</b> El campo de consecutivo esta prohibido modificar.'); }
				if (!isset($data['field_up_contact'])) { throw new Exception('<b>Error:</b> El campo de contacto esta prohibido modificar.'); }
				if (!isset($data['field_up_email'])) { throw new Exception('<b>Error:</b> El campo de correo electronico esta prohibido modificar.'); }
				if (!isset($data['field_up_email_confirm'])) { throw new Exception('<b>Error:</b> El campo de confirmar correo electronico esta prohibido modificar.'); }
				if (!isset($data['field_up_password'])) { throw new Exception('<b>Error:</b> El campo de contraseña esta prohibido modificar.'); }
				if (!isset($data['field_up_phone_fixed'])) { throw new Exception('<b>Error:</b> El campo de telefono fijo esta prohibido modificar.'); }
				if (!isset($data['field_up_phone_movil'])) { throw new Exception('<b>Error:</b> El campo de telefono movil esta prohibido modificar.'); }
				if (!isset($data['field_up_phone_second'])) { throw new Exception('<b>Error:</b> El campo de telefono secundario esta prohibido modificar.'); }
				if (!isset($data['field_up_crt_city'])) { throw new Exception('<b>Error:</b> El campo de ciudad esta prohibido modificar.'); }
				if (!isset($data['field_up_crt_third_type'])) { throw new Exception('<b>Error:</b> El campo de tipo proveedor esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_address = $this->db->scape($data['field_up_address']);
				$empty_consecutive = $this->db->scape($data['field_up_consecutive']);
				$empty_contact = $this->db->scape($data['field_up_contact']);
				$empty_email = $this->db->scape($data['field_up_email']);
				$empty_email_confirm = $this->db->scape($data['field_up_email_confirm']);
				$empty_password = $this->db->scape($data['field_up_password']);
				$empty_phone_fixed = $this->db->scape($data['field_up_phone_fixed']);
				$empty_phone_movil = $this->db->scape($data['field_up_phone_movil']);
				$empty_phone_second = $this->db->scape($data['field_up_phone_second']);
				$empty_crt_city = $this->db->scape($data['field_up_crt_city']);
				$empty_crt_third_type = $this->db->scape($data['field_up_crt_third_type']);
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
				if (Func::emp($empty_address)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_address) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_address, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_address)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de direccion no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_consecutive)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de consecutivo es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_consecutive)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de consecutivo solo permite numeros.');
				}
				#---------------------------------------------#
				if (strpos($empty_consecutive, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de consecutivo no permite ningun espacio en blanco.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_contact)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contacto es oblgitario.');
				}
				#---------------------------------------------#
				if (!Strings::only_letters($empty_contact)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contacto solo permite letras.');
				}
				#---------------------------------------------#
				if (strlen($empty_contact) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contacto permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_contact, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contacto no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_contact)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contacto no permite tener espacios en blanco al principio o al final.');
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
				if (Func::emp($empty_password)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña es oblgitario.');
				}
				#---------------------------------------------#
				if (strlen($empty_password) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_password, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_password)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_phone_fixed) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_phone_fixed) > 8) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo permite maximo hasta 8 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_phone_fixed, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_phone_fixed)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono fijo no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_phone_movil)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono movil es oblgitario.');
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
				if (strlen($empty_phone_second) < 1) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono secundario debe tener minimo 1 caracteres.');
				}
				#---------------------------------------------#
				if (strlen($empty_phone_second) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono secundario permite maximo hasta 10 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_phone_second, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono secundario no permite ningun espacio en blanco.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_phone_second)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de telefono secundario no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_crt_city) || strtolower($empty_crt_city) == strtolower('seleccionar') || $empty_crt_city == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_crt_city)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de ciudad solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_crt_third_type) || strtolower($empty_crt_third_type) == strtolower('seleccionar') || $empty_crt_third_type == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo proveedor es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_crt_third_type)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo proveedor solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "' AND " . d_azp_crt_third_parties_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_crt_third_parties_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "' AND " . d_azp_crt_third_parties_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_crt_city = $this->db->select('*', t_azp_crt_city, d_azp_crt_city_id_azp_crt_city . " = '" . $empty_crt_city . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_crt_city) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_crt_city) == '') { $sql_crt_city[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_crt_city[0][0]) != strtolower($empty_crt_city)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La ciudad seleccionada no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_crt_third_type = $this->db->select('*', t_azp_crt_third_type, d_azp_crt_third_type_id_azp_crt_third_type . " = '" . $empty_crt_third_type . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_crt_third_type) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_crt_third_type) == '') { $sql_crt_third_type[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_crt_third_type[0][0]) != strtolower($empty_crt_third_type)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo proveedor seleccionado no se encuentra registrado.');
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
		final public function sql_azp_crt_third_parties_update(array $data) : array {
			$var_error = $this->error_sql_azp_crt_third_parties_update($data);
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
				$empty_address = $this->db->scape($data['field_up_address']);
				$empty_consecutive = $this->db->scape($data['field_up_consecutive']);
				$empty_contact = $this->db->scape($data['field_up_contact']);
				$empty_email = $this->db->scape($data['field_up_email']);
				$empty_email_confirm = $this->db->scape($data['field_up_email_confirm']);
				$empty_password = $this->db->scape($data['field_up_password']);
				$empty_phone_fixed = $this->db->scape($data['field_up_phone_fixed']);
				$empty_phone_movil = $this->db->scape($data['field_up_phone_movil']);
				$empty_phone_second = $this->db->scape($data['field_up_phone_second']);
				$empty_crt_city = $this->db->scape($data['field_up_crt_city']);
				$empty_crt_third_type = $this->db->scape($data['field_up_crt_third_type']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_crt_third_parties, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_crt_third_parties_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_crt_third_parties_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_crt_third_parties_m_date_created => DATE_HOUR,
							d_azs_crt_third_parties_m_date_modified => DATE_HOUR,
							d_azs_crt_third_parties_m_deleted => $key_sql_select[d_azp_crt_third_parties_m_deleted],
							d_azs_crt_third_parties_m_description => $key_sql_select[d_azp_crt_third_parties_m_description],
							d_azs_crt_third_parties_m_level => $key_sql_select[d_azp_crt_third_parties_m_level],
							d_azs_crt_third_parties_m_status => $key_sql_select[d_azp_crt_third_parties_m_status],
							d_azs_crt_third_parties_m_temp => $key_sql_select[d_azp_crt_third_parties_m_temp],
							d_azs_crt_third_parties_t_address => ucwords(strtolower($key_sql_select[d_azp_crt_third_parties_t_address])),
							d_azs_crt_third_parties_t_consecutive => $key_sql_select[d_azp_crt_third_parties_t_consecutive],
							d_azs_crt_third_parties_t_contact => ucwords(strtolower($key_sql_select[d_azp_crt_third_parties_t_contact])),
							d_azs_crt_third_parties_t_email => strtolower($key_sql_select[d_azp_crt_third_parties_t_email]),
							d_azs_crt_third_parties_t_password => $key_sql_select[d_azp_crt_third_parties_t_password],
							d_azs_crt_third_parties_t_phone_fixed => $key_sql_select[d_azp_crt_third_parties_t_phone_fixed],
							d_azs_crt_third_parties_t_phone_movil => $key_sql_select[d_azp_crt_third_parties_t_phone_movil],
							d_azs_crt_third_parties_t_phone_second => $key_sql_select[d_azp_crt_third_parties_t_phone_second],
							d_azs_crt_third_parties_u_crt_city => $key_sql_select[d_azp_crt_third_parties_v_id_azp_crt_city],
							d_azs_crt_third_parties_u_crt_third_type => $key_sql_select[d_azp_crt_third_parties_v_id_azp_crt_third_type],
							d_azs_crt_third_parties_v_id_azp_crt_third_parties => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_crt_third_parties, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_crt_third_parties_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_crt_third_parties_m_date_modified => DATE_HOUR,
					d_azp_crt_third_parties_m_description => $empty_description,
					d_azp_crt_third_parties_m_status => $empty_state,
					d_azp_crt_third_parties_t_address => ucwords(strtolower($empty_address)),
					d_azp_crt_third_parties_t_consecutive => $empty_consecutive,
					d_azp_crt_third_parties_t_contact => ucwords(strtolower($empty_contact)),
					d_azp_crt_third_parties_t_email => strtolower($empty_email),
					d_azp_crt_third_parties_t_password => $empty_password,
					d_azp_crt_third_parties_t_phone_fixed => $empty_phone_fixed,
					d_azp_crt_third_parties_t_phone_movil => $empty_phone_movil,
					d_azp_crt_third_parties_t_phone_second => $empty_phone_second,
					d_azp_crt_third_parties_v_id_azp_crt_city => $empty_crt_city,
					d_azp_crt_third_parties_v_id_azp_crt_third_type => $empty_crt_third_type,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_third_parties, $var_array, d_azp_crt_third_parties_id_azp_crt_third_parties . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_crt_third_parties_t_password => $empty_password,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_crt_third_parties, $var_array, d_azp_crt_third_parties_v_id_azp_crt_third_type . " = '" . $empty_crt_third_type . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_crt_city() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_crt_city, d_azp_crt_city_m_deleted . " = '1' AND " . d_azp_crt_city_m_status . " = '1'", "ORDER BY " . d_azp_crt_city_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_crt_third_type() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_crt_third_type, d_azp_crt_third_type_m_deleted . " = '1' AND " . d_azp_crt_third_type_m_status . " = '1'", "ORDER BY " . d_azp_crt_third_type_t_name . " ASC");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>