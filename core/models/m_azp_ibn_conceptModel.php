<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_ibn_conceptModel extends Models implements OCREND {
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
					tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " AS 'lbl_azp_ibn_concept_id_azp_ibn_concept',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_created . " AS 'lbl_azp_ibn_concept_m_date_created',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_modified . " AS 'lbl_azp_ibn_concept_m_date_modified',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_description . " AS 'lbl_azp_ibn_concept_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_01 . " AS 'lbl_azp_ibn_concept_t_land_01',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_02 . " AS 'lbl_azp_ibn_concept_t_land_02',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_03 . " AS 'lbl_azp_ibn_concept_t_land_03',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_04 . " AS 'lbl_azp_ibn_concept_t_land_04',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_05 . " AS 'lbl_azp_ibn_concept_t_land_05',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_06 . " AS 'lbl_azp_ibn_concept_t_land_06',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_07 . " AS 'lbl_azp_ibn_concept_t_land_07',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_08 . " AS 'lbl_azp_ibn_concept_t_land_08',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_09 . " AS 'lbl_azp_ibn_concept_t_land_09',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_10 . " AS 'lbl_azp_ibn_concept_t_land_10',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_11 . " AS 'lbl_azp_ibn_concept_t_land_11',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_12 . " AS 'lbl_azp_ibn_concept_t_land_12',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_13 . " AS 'lbl_azp_ibn_concept_t_land_13',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_14 . " AS 'lbl_azp_ibn_concept_t_land_14',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_15 . " AS 'lbl_azp_ibn_concept_t_land_15',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_16 . " AS 'lbl_azp_ibn_concept_t_land_16',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_17 . " AS 'lbl_azp_ibn_concept_t_land_17',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_18 . " AS 'lbl_azp_ibn_concept_t_land_18',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_19 . " AS 'lbl_azp_ibn_concept_t_land_19',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_20 . " AS 'lbl_azp_ibn_concept_t_land_20',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_01 . " AS 'lbl_azp_ibn_concept_t_text_01',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_02 . " AS 'lbl_azp_ibn_concept_t_text_02',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_03 . " AS 'lbl_azp_ibn_concept_t_text_03',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_04 . " AS 'lbl_azp_ibn_concept_t_text_04',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_05 . " AS 'lbl_azp_ibn_concept_t_text_05',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_06 . " AS 'lbl_azp_ibn_concept_t_text_06',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_07 . " AS 'lbl_azp_ibn_concept_t_text_07',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_08 . " AS 'lbl_azp_ibn_concept_t_text_08',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_09 . " AS 'lbl_azp_ibn_concept_t_text_09',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_10 . " AS 'lbl_azp_ibn_concept_t_text_10',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_11 . " AS 'lbl_azp_ibn_concept_t_text_11',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_12 . " AS 'lbl_azp_ibn_concept_t_text_12',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_13 . " AS 'lbl_azp_ibn_concept_t_text_13',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_14 . " AS 'lbl_azp_ibn_concept_t_text_14',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_15 . " AS 'lbl_azp_ibn_concept_t_text_15',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_16 . " AS 'lbl_azp_ibn_concept_t_text_16',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_17 . " AS 'lbl_azp_ibn_concept_t_text_17',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_18 . " AS 'lbl_azp_ibn_concept_t_text_18',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_19 . " AS 'lbl_azp_ibn_concept_t_text_19',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_20 . " AS 'lbl_azp_ibn_concept_t_text_20',
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
				FROM " . t_azp_ibn_concept . " tc_azp_ibn_concept
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . "
						= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_ibn_concept." . d_azp_ibn_concept_m_deleted . " = '1'
				ORDER BY tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_ibn_concept." . d_azs_ibn_concept_id_azs_ibn_concept . " AS 'lbl_azs_ibn_concept_id_azs_ibn_concept',
					tc_azs_ibn_concept." . d_azs_ibn_concept_m_date_modified . " AS 'lbl_azs_ibn_concept_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_ibn_concept." . d_azs_ibn_concept_m_date_created . " AS 'lbl_azs_ibn_concept_m_date_created',
					tc_azs_ibn_concept." . d_azs_ibn_concept_m_date_modified . " AS 'lbl_azs_ibn_concept_m_date_modified',
					tc_azs_ibn_concept." . d_azs_ibn_concept_m_description . " AS 'lbl_azs_ibn_concept_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_01 . " AS 'lbl_azs_ibn_concept_t_land_01',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_02 . " AS 'lbl_azs_ibn_concept_t_land_02',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_03 . " AS 'lbl_azs_ibn_concept_t_land_03',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_04 . " AS 'lbl_azs_ibn_concept_t_land_04',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_05 . " AS 'lbl_azs_ibn_concept_t_land_05',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_06 . " AS 'lbl_azs_ibn_concept_t_land_06',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_07 . " AS 'lbl_azs_ibn_concept_t_land_07',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_08 . " AS 'lbl_azs_ibn_concept_t_land_08',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_09 . " AS 'lbl_azs_ibn_concept_t_land_09',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_10 . " AS 'lbl_azs_ibn_concept_t_land_10',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_11 . " AS 'lbl_azs_ibn_concept_t_land_11',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_12 . " AS 'lbl_azs_ibn_concept_t_land_12',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_13 . " AS 'lbl_azs_ibn_concept_t_land_13',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_14 . " AS 'lbl_azs_ibn_concept_t_land_14',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_15 . " AS 'lbl_azs_ibn_concept_t_land_15',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_16 . " AS 'lbl_azs_ibn_concept_t_land_16',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_17 . " AS 'lbl_azs_ibn_concept_t_land_17',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_18 . " AS 'lbl_azs_ibn_concept_t_land_18',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_19 . " AS 'lbl_azs_ibn_concept_t_land_19',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_land_20 . " AS 'lbl_azs_ibn_concept_t_land_20',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_01 . " AS 'lbl_azs_ibn_concept_t_text_01',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_02 . " AS 'lbl_azs_ibn_concept_t_text_02',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_03 . " AS 'lbl_azs_ibn_concept_t_text_03',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_04 . " AS 'lbl_azs_ibn_concept_t_text_04',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_05 . " AS 'lbl_azs_ibn_concept_t_text_05',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_06 . " AS 'lbl_azs_ibn_concept_t_text_06',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_07 . " AS 'lbl_azs_ibn_concept_t_text_07',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_08 . " AS 'lbl_azs_ibn_concept_t_text_08',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_09 . " AS 'lbl_azs_ibn_concept_t_text_09',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_10 . " AS 'lbl_azs_ibn_concept_t_text_10',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_11 . " AS 'lbl_azs_ibn_concept_t_text_11',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_12 . " AS 'lbl_azs_ibn_concept_t_text_12',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_13 . " AS 'lbl_azs_ibn_concept_t_text_13',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_14 . " AS 'lbl_azs_ibn_concept_t_text_14',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_15 . " AS 'lbl_azs_ibn_concept_t_text_15',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_16 . " AS 'lbl_azs_ibn_concept_t_text_16',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_17 . " AS 'lbl_azs_ibn_concept_t_text_17',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_18 . " AS 'lbl_azs_ibn_concept_t_text_18',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_19 . " AS 'lbl_azs_ibn_concept_t_text_19',
					tc_azs_ibn_concept." . d_azs_ibn_concept_t_text_20 . " AS 'lbl_azs_ibn_concept_t_text_20',
					tc_azs_ibn_concept." . d_azs_ibn_concept_u_ibn_client . " AS 'lbl_azs_ibn_concept_u_ibn_client',
					tc_azs_ibn_concept." . d_azs_ibn_concept_u_ibn_module . " AS 'lbl_azs_ibn_concept_u_ibn_module'
				FROM " . t_azs_ibn_concept . " tc_azs_ibn_concept
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_ibn_concept." . d_azs_ibn_concept_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_ibn_concept." . d_azs_ibn_concept_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_ibn_concept." . d_azs_ibn_concept_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_ibn_concept." . d_azs_ibn_concept_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_ibn_concept." . d_azs_ibn_concept_v_id_azp_ibn_concept . " = '" . $this->id . "'
				ORDER BY tc_azs_ibn_concept." . d_azs_ibn_concept_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_ibn_concept . "
				WHERE " . d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $this->id . "'
					AND " . d_azp_ibn_concept_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_ibn_concept);
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
					tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " AS 'lbl_azp_ibn_concept_id_azp_ibn_concept',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_created . " AS 'lbl_azp_ibn_concept_m_date_created',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_modified . " AS 'lbl_azp_ibn_concept_m_date_modified',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_description . " AS 'lbl_azp_ibn_concept_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_01 . " AS 'lbl_azp_ibn_concept_t_land_01',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_02 . " AS 'lbl_azp_ibn_concept_t_land_02',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_03 . " AS 'lbl_azp_ibn_concept_t_land_03',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_04 . " AS 'lbl_azp_ibn_concept_t_land_04',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_05 . " AS 'lbl_azp_ibn_concept_t_land_05',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_06 . " AS 'lbl_azp_ibn_concept_t_land_06',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_07 . " AS 'lbl_azp_ibn_concept_t_land_07',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_08 . " AS 'lbl_azp_ibn_concept_t_land_08',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_09 . " AS 'lbl_azp_ibn_concept_t_land_09',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_10 . " AS 'lbl_azp_ibn_concept_t_land_10',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_11 . " AS 'lbl_azp_ibn_concept_t_land_11',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_12 . " AS 'lbl_azp_ibn_concept_t_land_12',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_13 . " AS 'lbl_azp_ibn_concept_t_land_13',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_14 . " AS 'lbl_azp_ibn_concept_t_land_14',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_15 . " AS 'lbl_azp_ibn_concept_t_land_15',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_16 . " AS 'lbl_azp_ibn_concept_t_land_16',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_17 . " AS 'lbl_azp_ibn_concept_t_land_17',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_18 . " AS 'lbl_azp_ibn_concept_t_land_18',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_19 . " AS 'lbl_azp_ibn_concept_t_land_19',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_20 . " AS 'lbl_azp_ibn_concept_t_land_20',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_01 . " AS 'lbl_azp_ibn_concept_t_text_01',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_02 . " AS 'lbl_azp_ibn_concept_t_text_02',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_03 . " AS 'lbl_azp_ibn_concept_t_text_03',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_04 . " AS 'lbl_azp_ibn_concept_t_text_04',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_05 . " AS 'lbl_azp_ibn_concept_t_text_05',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_06 . " AS 'lbl_azp_ibn_concept_t_text_06',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_07 . " AS 'lbl_azp_ibn_concept_t_text_07',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_08 . " AS 'lbl_azp_ibn_concept_t_text_08',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_09 . " AS 'lbl_azp_ibn_concept_t_text_09',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_10 . " AS 'lbl_azp_ibn_concept_t_text_10',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_11 . " AS 'lbl_azp_ibn_concept_t_text_11',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_12 . " AS 'lbl_azp_ibn_concept_t_text_12',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_13 . " AS 'lbl_azp_ibn_concept_t_text_13',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_14 . " AS 'lbl_azp_ibn_concept_t_text_14',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_15 . " AS 'lbl_azp_ibn_concept_t_text_15',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_16 . " AS 'lbl_azp_ibn_concept_t_text_16',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_17 . " AS 'lbl_azp_ibn_concept_t_text_17',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_18 . " AS 'lbl_azp_ibn_concept_t_text_18',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_19 . " AS 'lbl_azp_ibn_concept_t_text_19',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_20 . " AS 'lbl_azp_ibn_concept_t_text_20',
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
				FROM " . t_azp_ibn_concept . " tc_azp_ibn_concept
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . "
						= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $this->id . "'
					AND tc_azp_ibn_concept." . d_azp_ibn_concept_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " AS 'lbl_azp_ibn_concept_id_azp_ibn_concept',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_created . " AS 'lbl_azp_ibn_concept_m_date_created',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_modified . " AS 'lbl_azp_ibn_concept_m_date_modified',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_description . " AS 'lbl_azp_ibn_concept_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_01 . " AS 'lbl_azp_ibn_concept_t_land_01',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_02 . " AS 'lbl_azp_ibn_concept_t_land_02',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_03 . " AS 'lbl_azp_ibn_concept_t_land_03',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_04 . " AS 'lbl_azp_ibn_concept_t_land_04',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_05 . " AS 'lbl_azp_ibn_concept_t_land_05',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_06 . " AS 'lbl_azp_ibn_concept_t_land_06',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_07 . " AS 'lbl_azp_ibn_concept_t_land_07',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_08 . " AS 'lbl_azp_ibn_concept_t_land_08',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_09 . " AS 'lbl_azp_ibn_concept_t_land_09',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_10 . " AS 'lbl_azp_ibn_concept_t_land_10',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_11 . " AS 'lbl_azp_ibn_concept_t_land_11',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_12 . " AS 'lbl_azp_ibn_concept_t_land_12',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_13 . " AS 'lbl_azp_ibn_concept_t_land_13',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_14 . " AS 'lbl_azp_ibn_concept_t_land_14',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_15 . " AS 'lbl_azp_ibn_concept_t_land_15',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_16 . " AS 'lbl_azp_ibn_concept_t_land_16',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_17 . " AS 'lbl_azp_ibn_concept_t_land_17',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_18 . " AS 'lbl_azp_ibn_concept_t_land_18',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_19 . " AS 'lbl_azp_ibn_concept_t_land_19',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_20 . " AS 'lbl_azp_ibn_concept_t_land_20',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_01 . " AS 'lbl_azp_ibn_concept_t_text_01',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_02 . " AS 'lbl_azp_ibn_concept_t_text_02',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_03 . " AS 'lbl_azp_ibn_concept_t_text_03',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_04 . " AS 'lbl_azp_ibn_concept_t_text_04',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_05 . " AS 'lbl_azp_ibn_concept_t_text_05',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_06 . " AS 'lbl_azp_ibn_concept_t_text_06',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_07 . " AS 'lbl_azp_ibn_concept_t_text_07',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_08 . " AS 'lbl_azp_ibn_concept_t_text_08',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_09 . " AS 'lbl_azp_ibn_concept_t_text_09',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_10 . " AS 'lbl_azp_ibn_concept_t_text_10',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_11 . " AS 'lbl_azp_ibn_concept_t_text_11',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_12 . " AS 'lbl_azp_ibn_concept_t_text_12',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_13 . " AS 'lbl_azp_ibn_concept_t_text_13',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_14 . " AS 'lbl_azp_ibn_concept_t_text_14',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_15 . " AS 'lbl_azp_ibn_concept_t_text_15',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_16 . " AS 'lbl_azp_ibn_concept_t_text_16',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_17 . " AS 'lbl_azp_ibn_concept_t_text_17',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_18 . " AS 'lbl_azp_ibn_concept_t_text_18',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_19 . " AS 'lbl_azp_ibn_concept_t_text_19',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_20 . " AS 'lbl_azp_ibn_concept_t_text_20',
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
				FROM " . t_azp_ibn_concept . " tc_azp_ibn_concept
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . "
						= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_m_deleted . " = '3'
				ORDER BY tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " AS 'lbl_azp_ibn_concept_id_azp_ibn_concept',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_created . " AS 'lbl_azp_ibn_concept_m_date_created',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_modified . " AS 'lbl_azp_ibn_concept_m_date_modified',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_description . " AS 'lbl_azp_ibn_concept_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_01 . " AS 'lbl_azp_ibn_concept_t_land_01',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_02 . " AS 'lbl_azp_ibn_concept_t_land_02',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_03 . " AS 'lbl_azp_ibn_concept_t_land_03',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_04 . " AS 'lbl_azp_ibn_concept_t_land_04',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_05 . " AS 'lbl_azp_ibn_concept_t_land_05',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_06 . " AS 'lbl_azp_ibn_concept_t_land_06',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_07 . " AS 'lbl_azp_ibn_concept_t_land_07',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_08 . " AS 'lbl_azp_ibn_concept_t_land_08',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_09 . " AS 'lbl_azp_ibn_concept_t_land_09',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_10 . " AS 'lbl_azp_ibn_concept_t_land_10',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_11 . " AS 'lbl_azp_ibn_concept_t_land_11',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_12 . " AS 'lbl_azp_ibn_concept_t_land_12',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_13 . " AS 'lbl_azp_ibn_concept_t_land_13',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_14 . " AS 'lbl_azp_ibn_concept_t_land_14',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_15 . " AS 'lbl_azp_ibn_concept_t_land_15',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_16 . " AS 'lbl_azp_ibn_concept_t_land_16',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_17 . " AS 'lbl_azp_ibn_concept_t_land_17',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_18 . " AS 'lbl_azp_ibn_concept_t_land_18',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_19 . " AS 'lbl_azp_ibn_concept_t_land_19',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_20 . " AS 'lbl_azp_ibn_concept_t_land_20',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_01 . " AS 'lbl_azp_ibn_concept_t_text_01',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_02 . " AS 'lbl_azp_ibn_concept_t_text_02',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_03 . " AS 'lbl_azp_ibn_concept_t_text_03',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_04 . " AS 'lbl_azp_ibn_concept_t_text_04',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_05 . " AS 'lbl_azp_ibn_concept_t_text_05',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_06 . " AS 'lbl_azp_ibn_concept_t_text_06',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_07 . " AS 'lbl_azp_ibn_concept_t_text_07',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_08 . " AS 'lbl_azp_ibn_concept_t_text_08',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_09 . " AS 'lbl_azp_ibn_concept_t_text_09',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_10 . " AS 'lbl_azp_ibn_concept_t_text_10',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_11 . " AS 'lbl_azp_ibn_concept_t_text_11',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_12 . " AS 'lbl_azp_ibn_concept_t_text_12',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_13 . " AS 'lbl_azp_ibn_concept_t_text_13',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_14 . " AS 'lbl_azp_ibn_concept_t_text_14',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_15 . " AS 'lbl_azp_ibn_concept_t_text_15',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_16 . " AS 'lbl_azp_ibn_concept_t_text_16',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_17 . " AS 'lbl_azp_ibn_concept_t_text_17',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_18 . " AS 'lbl_azp_ibn_concept_t_text_18',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_19 . " AS 'lbl_azp_ibn_concept_t_text_19',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_20 . " AS 'lbl_azp_ibn_concept_t_text_20',
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
				FROM " . t_azp_ibn_concept . " tc_azp_ibn_concept
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . "
						= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_m_deleted . " = '1'
				ORDER BY tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " AS 'lbl_azp_ibn_concept_id_azp_ibn_concept',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_created . " AS 'lbl_azp_ibn_concept_m_date_created',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_modified . " AS 'lbl_azp_ibn_concept_m_date_modified',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_description . " AS 'lbl_azp_ibn_concept_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_01 . " AS 'lbl_azp_ibn_concept_t_land_01',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_02 . " AS 'lbl_azp_ibn_concept_t_land_02',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_03 . " AS 'lbl_azp_ibn_concept_t_land_03',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_04 . " AS 'lbl_azp_ibn_concept_t_land_04',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_05 . " AS 'lbl_azp_ibn_concept_t_land_05',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_06 . " AS 'lbl_azp_ibn_concept_t_land_06',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_07 . " AS 'lbl_azp_ibn_concept_t_land_07',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_08 . " AS 'lbl_azp_ibn_concept_t_land_08',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_09 . " AS 'lbl_azp_ibn_concept_t_land_09',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_10 . " AS 'lbl_azp_ibn_concept_t_land_10',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_11 . " AS 'lbl_azp_ibn_concept_t_land_11',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_12 . " AS 'lbl_azp_ibn_concept_t_land_12',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_13 . " AS 'lbl_azp_ibn_concept_t_land_13',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_14 . " AS 'lbl_azp_ibn_concept_t_land_14',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_15 . " AS 'lbl_azp_ibn_concept_t_land_15',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_16 . " AS 'lbl_azp_ibn_concept_t_land_16',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_17 . " AS 'lbl_azp_ibn_concept_t_land_17',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_18 . " AS 'lbl_azp_ibn_concept_t_land_18',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_19 . " AS 'lbl_azp_ibn_concept_t_land_19',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_20 . " AS 'lbl_azp_ibn_concept_t_land_20',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_01 . " AS 'lbl_azp_ibn_concept_t_text_01',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_02 . " AS 'lbl_azp_ibn_concept_t_text_02',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_03 . " AS 'lbl_azp_ibn_concept_t_text_03',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_04 . " AS 'lbl_azp_ibn_concept_t_text_04',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_05 . " AS 'lbl_azp_ibn_concept_t_text_05',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_06 . " AS 'lbl_azp_ibn_concept_t_text_06',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_07 . " AS 'lbl_azp_ibn_concept_t_text_07',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_08 . " AS 'lbl_azp_ibn_concept_t_text_08',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_09 . " AS 'lbl_azp_ibn_concept_t_text_09',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_10 . " AS 'lbl_azp_ibn_concept_t_text_10',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_11 . " AS 'lbl_azp_ibn_concept_t_text_11',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_12 . " AS 'lbl_azp_ibn_concept_t_text_12',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_13 . " AS 'lbl_azp_ibn_concept_t_text_13',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_14 . " AS 'lbl_azp_ibn_concept_t_text_14',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_15 . " AS 'lbl_azp_ibn_concept_t_text_15',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_16 . " AS 'lbl_azp_ibn_concept_t_text_16',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_17 . " AS 'lbl_azp_ibn_concept_t_text_17',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_18 . " AS 'lbl_azp_ibn_concept_t_text_18',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_19 . " AS 'lbl_azp_ibn_concept_t_text_19',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_20 . " AS 'lbl_azp_ibn_concept_t_text_20',
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
				FROM " . t_azp_ibn_concept . " tc_azp_ibn_concept
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . "
						= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_m_deleted . " = '2'
				ORDER BY tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " AS 'lbl_azp_ibn_concept_id_azp_ibn_concept',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_created . " AS 'lbl_azp_ibn_concept_m_by_created',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_modified . " AS 'lbl_azp_ibn_concept_m_by_modified',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_created . " AS 'lbl_azp_ibn_concept_m_date_created',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_modified . " AS 'lbl_azp_ibn_concept_m_date_modified',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_description . " AS 'lbl_azp_ibn_concept_m_description',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_level . " AS 'lbl_azp_ibn_concept_m_level',
					tc_azp_ibn_concept." . d_azp_ibn_concept_m_status . " AS 'lbl_azp_ibn_concept_m_status',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_01 . " AS 'lbl_azp_ibn_concept_t_land_01',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_02 . " AS 'lbl_azp_ibn_concept_t_land_02',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_03 . " AS 'lbl_azp_ibn_concept_t_land_03',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_04 . " AS 'lbl_azp_ibn_concept_t_land_04',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_05 . " AS 'lbl_azp_ibn_concept_t_land_05',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_06 . " AS 'lbl_azp_ibn_concept_t_land_06',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_07 . " AS 'lbl_azp_ibn_concept_t_land_07',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_08 . " AS 'lbl_azp_ibn_concept_t_land_08',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_09 . " AS 'lbl_azp_ibn_concept_t_land_09',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_10 . " AS 'lbl_azp_ibn_concept_t_land_10',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_11 . " AS 'lbl_azp_ibn_concept_t_land_11',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_12 . " AS 'lbl_azp_ibn_concept_t_land_12',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_13 . " AS 'lbl_azp_ibn_concept_t_land_13',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_14 . " AS 'lbl_azp_ibn_concept_t_land_14',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_15 . " AS 'lbl_azp_ibn_concept_t_land_15',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_16 . " AS 'lbl_azp_ibn_concept_t_land_16',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_17 . " AS 'lbl_azp_ibn_concept_t_land_17',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_18 . " AS 'lbl_azp_ibn_concept_t_land_18',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_19 . " AS 'lbl_azp_ibn_concept_t_land_19',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_20 . " AS 'lbl_azp_ibn_concept_t_land_20',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_01 . " AS 'lbl_azp_ibn_concept_t_text_01',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_02 . " AS 'lbl_azp_ibn_concept_t_text_02',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_03 . " AS 'lbl_azp_ibn_concept_t_text_03',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_04 . " AS 'lbl_azp_ibn_concept_t_text_04',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_05 . " AS 'lbl_azp_ibn_concept_t_text_05',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_06 . " AS 'lbl_azp_ibn_concept_t_text_06',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_07 . " AS 'lbl_azp_ibn_concept_t_text_07',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_08 . " AS 'lbl_azp_ibn_concept_t_text_08',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_09 . " AS 'lbl_azp_ibn_concept_t_text_09',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_10 . " AS 'lbl_azp_ibn_concept_t_text_10',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_11 . " AS 'lbl_azp_ibn_concept_t_text_11',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_12 . " AS 'lbl_azp_ibn_concept_t_text_12',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_13 . " AS 'lbl_azp_ibn_concept_t_text_13',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_14 . " AS 'lbl_azp_ibn_concept_t_text_14',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_15 . " AS 'lbl_azp_ibn_concept_t_text_15',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_16 . " AS 'lbl_azp_ibn_concept_t_text_16',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_17 . " AS 'lbl_azp_ibn_concept_t_text_17',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_18 . " AS 'lbl_azp_ibn_concept_t_text_18',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_19 . " AS 'lbl_azp_ibn_concept_t_text_19',
					tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_20 . " AS 'lbl_azp_ibn_concept_t_text_20',
					tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_concept_v_id_azp_ibn_client',
					tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " AS 'lbl_azp_ibn_concept_v_id_azp_ibn_module'
				FROM " . t_azp_ibn_concept . " tc_azp_ibn_concept
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $this->id . "'
					AND tc_azp_ibn_concept." . d_azp_ibn_concept_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_ibn_concept_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "' AND " . d_azp_ibn_concept_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "' AND " . d_azp_ibn_concept_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_concept_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "' AND " . d_azp_ibn_concept_m_level . " = '2'");
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
		final public function sql_azp_ibn_concept_delete(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_concept_delete($data);
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
				$var_array = array(d_azp_ibn_concept_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_concept, $var_array, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_ibn_concept_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_01'])) { throw new Exception('<b>Error:</b> El campo de texto 01 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_01'])) { throw new Exception('<b>Error:</b> El campo de campo 01 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_02'])) { throw new Exception('<b>Error:</b> El campo de texto 02 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_02'])) { throw new Exception('<b>Error:</b> El campo de campo 02 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_03'])) { throw new Exception('<b>Error:</b> El campo de texto 03 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_03'])) { throw new Exception('<b>Error:</b> El campo de campo 03 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_04'])) { throw new Exception('<b>Error:</b> El campo de texto 04 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_04'])) { throw new Exception('<b>Error:</b> El campo de campo 04 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_05'])) { throw new Exception('<b>Error:</b> El campo de texto 05 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_05'])) { throw new Exception('<b>Error:</b> El campo de campo 05 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_06'])) { throw new Exception('<b>Error:</b> El campo de texto 06 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_06'])) { throw new Exception('<b>Error:</b> El campo de campo 06 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_07'])) { throw new Exception('<b>Error:</b> El campo de texto 07 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_07'])) { throw new Exception('<b>Error:</b> El campo de campo 07 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_08'])) { throw new Exception('<b>Error:</b> El campo de texto 08 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_08'])) { throw new Exception('<b>Error:</b> El campo de campo 08 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_09'])) { throw new Exception('<b>Error:</b> El campo de texto 09 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_09'])) { throw new Exception('<b>Error:</b> El campo de campo 09 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_10'])) { throw new Exception('<b>Error:</b> El campo de texto 10 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_10'])) { throw new Exception('<b>Error:</b> El campo de campo 10 esta prohibido modificar.'); }
				
				if (!isset($data['field_cr_text_11'])) { throw new Exception('<b>Error:</b> El campo de texto 11 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_11'])) { throw new Exception('<b>Error:</b> El campo de campo 11 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_12'])) { throw new Exception('<b>Error:</b> El campo de texto 12 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_12'])) { throw new Exception('<b>Error:</b> El campo de campo 12 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_13'])) { throw new Exception('<b>Error:</b> El campo de texto 13 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_13'])) { throw new Exception('<b>Error:</b> El campo de campo 13 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_14'])) { throw new Exception('<b>Error:</b> El campo de texto 14 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_14'])) { throw new Exception('<b>Error:</b> El campo de campo 14 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_15'])) { throw new Exception('<b>Error:</b> El campo de texto 15 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_15'])) { throw new Exception('<b>Error:</b> El campo de campo 15 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_16'])) { throw new Exception('<b>Error:</b> El campo de texto 16 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_16'])) { throw new Exception('<b>Error:</b> El campo de campo 16 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_17'])) { throw new Exception('<b>Error:</b> El campo de texto 17 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_17'])) { throw new Exception('<b>Error:</b> El campo de campo 17 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_18'])) { throw new Exception('<b>Error:</b> El campo de texto 18 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_18'])) { throw new Exception('<b>Error:</b> El campo de campo 18 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_19'])) { throw new Exception('<b>Error:</b> El campo de texto 19 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_19'])) { throw new Exception('<b>Error:</b> El campo de campo 19 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_20'])) { throw new Exception('<b>Error:</b> El campo de texto 20 esta prohibido modificar.'); }
				if (!isset($data['field_cr_land_20'])) { throw new Exception('<b>Error:</b> El campo de campo 20 esta prohibido modificar.'); }

				if (!isset($data['field_cr_ibn_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_module'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_text_01 = $this->db->scape($data['field_cr_text_01']);
				$empty_land_01 = $this->db->scape($data['field_cr_land_01']);
				$empty_text_02 = $this->db->scape($data['field_cr_text_02']);
				$empty_land_02 = $this->db->scape($data['field_cr_land_02']);
				$empty_text_03 = $this->db->scape($data['field_cr_text_03']);
				$empty_land_03 = $this->db->scape($data['field_cr_land_03']);
				$empty_text_04 = $this->db->scape($data['field_cr_text_04']);
				$empty_land_04 = $this->db->scape($data['field_cr_land_04']);
				$empty_text_05 = $this->db->scape($data['field_cr_text_05']);
				$empty_land_05 = $this->db->scape($data['field_cr_land_05']);
				$empty_text_06 = $this->db->scape($data['field_cr_text_06']);
				$empty_land_06 = $this->db->scape($data['field_cr_land_06']);
				$empty_text_07 = $this->db->scape($data['field_cr_text_07']);
				$empty_land_07 = $this->db->scape($data['field_cr_land_07']);
				$empty_text_08 = $this->db->scape($data['field_cr_text_08']);
				$empty_land_08 = $this->db->scape($data['field_cr_land_08']);
				$empty_text_09 = $this->db->scape($data['field_cr_text_09']);
				$empty_land_09 = $this->db->scape($data['field_cr_land_09']);
				$empty_text_10 = $this->db->scape($data['field_cr_text_10']);
				$empty_land_10 = $this->db->scape($data['field_cr_land_10']);
				
				$empty_text_11 = $this->db->scape($data['field_cr_text_11']);
				$empty_land_11 = $this->db->scape($data['field_cr_land_11']);
				$empty_text_12 = $this->db->scape($data['field_cr_text_12']);
				$empty_land_12 = $this->db->scape($data['field_cr_land_12']);
				$empty_text_13 = $this->db->scape($data['field_cr_text_13']);
				$empty_land_13 = $this->db->scape($data['field_cr_land_13']);
				$empty_text_14 = $this->db->scape($data['field_cr_text_14']);
				$empty_land_14 = $this->db->scape($data['field_cr_land_14']);
				$empty_text_15 = $this->db->scape($data['field_cr_text_15']);
				$empty_land_15 = $this->db->scape($data['field_cr_land_15']);
				$empty_text_16 = $this->db->scape($data['field_cr_text_16']);
				$empty_land_16 = $this->db->scape($data['field_cr_land_16']);
				$empty_text_17 = $this->db->scape($data['field_cr_text_17']);
				$empty_land_17 = $this->db->scape($data['field_cr_land_17']);
				$empty_text_18 = $this->db->scape($data['field_cr_text_18']);
				$empty_land_18 = $this->db->scape($data['field_cr_land_18']);
				$empty_text_19 = $this->db->scape($data['field_cr_text_19']);
				$empty_land_19 = $this->db->scape($data['field_cr_land_19']);
				$empty_text_20 = $this->db->scape($data['field_cr_text_20']);
				$empty_land_20 = $this->db->scape($data['field_cr_land_20']);

				$empty_ibn_client = $this->db->scape($data['field_cr_ibn_client']);
				$empty_ibn_module = $this->db->scape($data['field_cr_ibn_module']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_client) || strtolower($empty_ibn_client) == strtolower('seleccionar') || $empty_ibn_client == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_client)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_module) || strtolower($empty_ibn_module) == strtolower('seleccionar') || $empty_ibn_module == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de modelo es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_module)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de modelo solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_client = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_ibn_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_client) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_client) == '') { $sql_ibn_client[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_client[0][0]) != strtolower($empty_ibn_client)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El cliente seleccionado no se encuentra registrado.');
					}
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
						throw new Exception('<b>Error:</b> El modelo seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$var_sql = $this->db->select('*', t_azp_ibn_concept,
					d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $empty_ibn_client . "' AND " .
					d_azp_ibn_concept_v_id_azp_ibn_module . " = '" . $empty_ibn_module . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El cliente y modulo seleccionados ya existen registrados.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_ibn_concept_insert(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_concept_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_text_01 = $this->db->scape($data['field_cr_text_01']);
				$empty_land_01 = $this->db->scape($data['field_cr_land_01']);
				$empty_text_02 = $this->db->scape($data['field_cr_text_02']);
				$empty_land_02 = $this->db->scape($data['field_cr_land_02']);
				$empty_text_03 = $this->db->scape($data['field_cr_text_03']);
				$empty_land_03 = $this->db->scape($data['field_cr_land_03']);
				$empty_text_04 = $this->db->scape($data['field_cr_text_04']);
				$empty_land_04 = $this->db->scape($data['field_cr_land_04']);
				$empty_text_05 = $this->db->scape($data['field_cr_text_05']);
				$empty_land_05 = $this->db->scape($data['field_cr_land_05']);
				$empty_text_06 = $this->db->scape($data['field_cr_text_06']);
				$empty_land_06 = $this->db->scape($data['field_cr_land_06']);
				$empty_text_07 = $this->db->scape($data['field_cr_text_07']);
				$empty_land_07 = $this->db->scape($data['field_cr_land_07']);
				$empty_text_08 = $this->db->scape($data['field_cr_text_08']);
				$empty_land_08 = $this->db->scape($data['field_cr_land_08']);
				$empty_text_09 = $this->db->scape($data['field_cr_text_09']);
				$empty_land_09 = $this->db->scape($data['field_cr_land_09']);
				$empty_text_10 = $this->db->scape($data['field_cr_text_10']);
				$empty_land_10 = $this->db->scape($data['field_cr_land_10']);
				
				$empty_text_11 = $this->db->scape($data['field_cr_text_11']);
				$empty_land_11 = $this->db->scape($data['field_cr_land_11']);
				$empty_text_12 = $this->db->scape($data['field_cr_text_12']);
				$empty_land_12 = $this->db->scape($data['field_cr_land_12']);
				$empty_text_13 = $this->db->scape($data['field_cr_text_13']);
				$empty_land_13 = $this->db->scape($data['field_cr_land_13']);
				$empty_text_14 = $this->db->scape($data['field_cr_text_14']);
				$empty_land_14 = $this->db->scape($data['field_cr_land_14']);
				$empty_text_15 = $this->db->scape($data['field_cr_text_15']);
				$empty_land_15 = $this->db->scape($data['field_cr_land_15']);
				$empty_text_16 = $this->db->scape($data['field_cr_text_16']);
				$empty_land_16 = $this->db->scape($data['field_cr_land_16']);
				$empty_text_17 = $this->db->scape($data['field_cr_text_17']);
				$empty_land_17 = $this->db->scape($data['field_cr_land_17']);
				$empty_text_18 = $this->db->scape($data['field_cr_text_18']);
				$empty_land_18 = $this->db->scape($data['field_cr_land_18']);
				$empty_text_19 = $this->db->scape($data['field_cr_text_19']);
				$empty_land_19 = $this->db->scape($data['field_cr_land_19']);
				$empty_text_20 = $this->db->scape($data['field_cr_text_20']);
				$empty_land_20 = $this->db->scape($data['field_cr_land_20']);

				$empty_ibn_client = $this->db->scape($data['field_cr_ibn_client']);
				$empty_ibn_module = $this->db->scape($data['field_cr_ibn_module']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_concept_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_ibn_concept_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_concept_m_date_created => DATE_HOUR,
					d_azp_ibn_concept_m_date_modified => DATE_HOUR,
					d_azp_ibn_concept_m_deleted => '1',
					d_azp_ibn_concept_m_description => $empty_description,
					d_azp_ibn_concept_m_level => '2',
					d_azp_ibn_concept_m_status => '1',
					d_azp_ibn_concept_m_temp => '1',
					d_azp_ibn_concept_t_text_01 => strtoupper($empty_text_01),
					d_azp_ibn_concept_t_land_01 => strtoupper($empty_land_01),
					d_azp_ibn_concept_t_text_02 => strtoupper($empty_text_02),
					d_azp_ibn_concept_t_land_02 => strtoupper($empty_land_02),
					d_azp_ibn_concept_t_text_03 => strtoupper($empty_text_03),
					d_azp_ibn_concept_t_land_03 => strtoupper($empty_land_03),
					d_azp_ibn_concept_t_text_04 => strtoupper($empty_text_04),
					d_azp_ibn_concept_t_land_04 => strtoupper($empty_land_04),
					d_azp_ibn_concept_t_text_05 => strtoupper($empty_text_05),
					d_azp_ibn_concept_t_land_05 => strtoupper($empty_land_05),
					d_azp_ibn_concept_t_text_06 => strtoupper($empty_text_06),
					d_azp_ibn_concept_t_land_06 => strtoupper($empty_land_06),
					d_azp_ibn_concept_t_text_07 => strtoupper($empty_text_07),
					d_azp_ibn_concept_t_land_07 => strtoupper($empty_land_07),
					d_azp_ibn_concept_t_text_08 => strtoupper($empty_text_08),
					d_azp_ibn_concept_t_land_08 => strtoupper($empty_land_08),
					d_azp_ibn_concept_t_text_09 => strtoupper($empty_text_09),
					d_azp_ibn_concept_t_land_09 => strtoupper($empty_land_09),
					d_azp_ibn_concept_t_text_10 => strtoupper($empty_text_10),
					d_azp_ibn_concept_t_land_10 => strtoupper($empty_land_10),
					
					d_azp_ibn_concept_t_text_11 => strtoupper($empty_text_11),
					d_azp_ibn_concept_t_land_11 => strtoupper($empty_land_11),
					d_azp_ibn_concept_t_text_12 => strtoupper($empty_text_12),
					d_azp_ibn_concept_t_land_12 => strtoupper($empty_land_12),
					d_azp_ibn_concept_t_text_13 => strtoupper($empty_text_13),
					d_azp_ibn_concept_t_land_13 => strtoupper($empty_land_13),
					d_azp_ibn_concept_t_text_14 => strtoupper($empty_text_14),
					d_azp_ibn_concept_t_land_14 => strtoupper($empty_land_14),
					d_azp_ibn_concept_t_text_15 => strtoupper($empty_text_15),
					d_azp_ibn_concept_t_land_15 => strtoupper($empty_land_15),
					d_azp_ibn_concept_t_text_16 => strtoupper($empty_text_16),
					d_azp_ibn_concept_t_land_16 => strtoupper($empty_land_16),
					d_azp_ibn_concept_t_text_17 => strtoupper($empty_text_17),
					d_azp_ibn_concept_t_land_17 => strtoupper($empty_land_17),
					d_azp_ibn_concept_t_text_18 => strtoupper($empty_text_18),
					d_azp_ibn_concept_t_land_18 => strtoupper($empty_land_18),
					d_azp_ibn_concept_t_text_19 => strtoupper($empty_text_19),
					d_azp_ibn_concept_t_land_19 => strtoupper($empty_land_19),
					d_azp_ibn_concept_t_text_20 => strtoupper($empty_text_20),
					d_azp_ibn_concept_t_land_20 => strtoupper($empty_land_20),

					d_azp_ibn_concept_v_id_azp_ibn_client => $empty_ibn_client,
					d_azp_ibn_concept_v_id_azp_ibn_module => $empty_ibn_module,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_ibn_concept, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_concept_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "' AND " . d_azp_ibn_concept_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "' AND " . d_azp_ibn_concept_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_concept_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "' AND " . d_azp_ibn_concept_m_level . " = '2'");
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
		final public function sql_azp_ibn_concept_remove(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_concept_remove($data);
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
				$var_array = array(d_azp_ibn_concept_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_concept, $var_array, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_concept_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "' AND " . d_azp_ibn_concept_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "' AND " . d_azp_ibn_concept_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_concept_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "' AND " . d_azp_ibn_concept_m_level . " = '2'");
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
		final public function sql_azp_ibn_concept_restore(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_concept_restore($data);
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
				$var_array = array(d_azp_ibn_concept_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_concept, $var_array, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_concept_update(array $data) {
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
				if (!isset($data['field_up_ibn_client'])) { throw new Exception('<b>Error:</b> El campo de cliente esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_module'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				if (!isset($data['field_up_text_01'])) { throw new Exception('<b>Error:</b> El campo de texto 01 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_01'])) { throw new Exception('<b>Error:</b> El campo de campo 01 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_02'])) { throw new Exception('<b>Error:</b> El campo de texto 02 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_02'])) { throw new Exception('<b>Error:</b> El campo de campo 02 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_03'])) { throw new Exception('<b>Error:</b> El campo de texto 03 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_03'])) { throw new Exception('<b>Error:</b> El campo de campo 03 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_04'])) { throw new Exception('<b>Error:</b> El campo de texto 04 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_04'])) { throw new Exception('<b>Error:</b> El campo de campo 04 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_05'])) { throw new Exception('<b>Error:</b> El campo de texto 05 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_05'])) { throw new Exception('<b>Error:</b> El campo de campo 05 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_06'])) { throw new Exception('<b>Error:</b> El campo de texto 06 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_06'])) { throw new Exception('<b>Error:</b> El campo de campo 06 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_07'])) { throw new Exception('<b>Error:</b> El campo de texto 07 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_07'])) { throw new Exception('<b>Error:</b> El campo de campo 07 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_08'])) { throw new Exception('<b>Error:</b> El campo de texto 08 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_08'])) { throw new Exception('<b>Error:</b> El campo de campo 08 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_09'])) { throw new Exception('<b>Error:</b> El campo de texto 09 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_09'])) { throw new Exception('<b>Error:</b> El campo de campo 09 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_10'])) { throw new Exception('<b>Error:</b> El campo de texto 10 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_10'])) { throw new Exception('<b>Error:</b> El campo de campo 10 esta prohibido modificar.'); }

				if (!isset($data['field_up_text_11'])) { throw new Exception('<b>Error:</b> El campo de texto 11 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_11'])) { throw new Exception('<b>Error:</b> El campo de campo 11 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_12'])) { throw new Exception('<b>Error:</b> El campo de texto 12 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_12'])) { throw new Exception('<b>Error:</b> El campo de campo 12 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_13'])) { throw new Exception('<b>Error:</b> El campo de texto 13 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_13'])) { throw new Exception('<b>Error:</b> El campo de campo 13 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_14'])) { throw new Exception('<b>Error:</b> El campo de texto 14 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_14'])) { throw new Exception('<b>Error:</b> El campo de campo 14 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_15'])) { throw new Exception('<b>Error:</b> El campo de texto 15 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_15'])) { throw new Exception('<b>Error:</b> El campo de campo 15 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_16'])) { throw new Exception('<b>Error:</b> El campo de texto 16 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_16'])) { throw new Exception('<b>Error:</b> El campo de campo 16 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_17'])) { throw new Exception('<b>Error:</b> El campo de texto 17 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_17'])) { throw new Exception('<b>Error:</b> El campo de campo 17 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_18'])) { throw new Exception('<b>Error:</b> El campo de texto 18 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_18'])) { throw new Exception('<b>Error:</b> El campo de campo 18 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_19'])) { throw new Exception('<b>Error:</b> El campo de texto 19 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_19'])) { throw new Exception('<b>Error:</b> El campo de campo 19 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_20'])) { throw new Exception('<b>Error:</b> El campo de texto 20 esta prohibido modificar.'); }
				if (!isset($data['field_up_land_20'])) { throw new Exception('<b>Error:</b> El campo de campo 20 esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_text_01 = $this->db->scape($data['field_up_text_01']);
				$empty_land_01 = $this->db->scape($data['field_up_land_01']);
				$empty_text_02 = $this->db->scape($data['field_up_text_02']);
				$empty_land_02 = $this->db->scape($data['field_up_land_02']);
				$empty_text_03 = $this->db->scape($data['field_up_text_03']);
				$empty_land_03 = $this->db->scape($data['field_up_land_03']);
				$empty_text_04 = $this->db->scape($data['field_up_text_04']);
				$empty_land_04 = $this->db->scape($data['field_up_land_04']);
				$empty_text_05 = $this->db->scape($data['field_up_text_05']);
				$empty_land_05 = $this->db->scape($data['field_up_land_05']);
				$empty_text_06 = $this->db->scape($data['field_up_text_06']);
				$empty_land_06 = $this->db->scape($data['field_up_land_06']);
				$empty_text_07 = $this->db->scape($data['field_up_text_07']);
				$empty_land_07 = $this->db->scape($data['field_up_land_07']);
				$empty_text_08 = $this->db->scape($data['field_up_text_08']);
				$empty_land_08 = $this->db->scape($data['field_up_land_08']);
				$empty_text_09 = $this->db->scape($data['field_up_text_09']);
				$empty_land_09 = $this->db->scape($data['field_up_land_09']);
				$empty_text_10 = $this->db->scape($data['field_up_text_10']);
				$empty_land_10 = $this->db->scape($data['field_up_land_10']);
				
				$empty_text_11 = $this->db->scape($data['field_up_text_11']);
				$empty_land_11 = $this->db->scape($data['field_up_land_11']);
				$empty_text_12 = $this->db->scape($data['field_up_text_12']);
				$empty_land_12 = $this->db->scape($data['field_up_land_12']);
				$empty_text_13 = $this->db->scape($data['field_up_text_13']);
				$empty_land_13 = $this->db->scape($data['field_up_land_13']);
				$empty_text_14 = $this->db->scape($data['field_up_text_14']);
				$empty_land_14 = $this->db->scape($data['field_up_land_14']);
				$empty_text_15 = $this->db->scape($data['field_up_text_15']);
				$empty_land_15 = $this->db->scape($data['field_up_land_15']);
				$empty_text_16 = $this->db->scape($data['field_up_text_16']);
				$empty_land_16 = $this->db->scape($data['field_up_land_16']);
				$empty_text_17 = $this->db->scape($data['field_up_text_17']);
				$empty_land_17 = $this->db->scape($data['field_up_land_17']);
				$empty_text_18 = $this->db->scape($data['field_up_text_18']);
				$empty_land_18 = $this->db->scape($data['field_up_land_18']);
				$empty_text_19 = $this->db->scape($data['field_up_text_19']);
				$empty_land_19 = $this->db->scape($data['field_up_land_19']);
				$empty_text_20 = $this->db->scape($data['field_up_text_20']);
				$empty_land_20 = $this->db->scape($data['field_up_land_20']);

				$empty_ibn_client = $this->db->scape($data['field_up_ibn_client']);
				$empty_ibn_module = $this->db->scape($data['field_up_ibn_module']);
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
				if (Func::emp($empty_ibn_client) || strtolower($empty_ibn_client) == strtolower('seleccionar') || $empty_ibn_client == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_client)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cliente solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_module) || strtolower($empty_ibn_module) == strtolower('seleccionar') || $empty_ibn_module == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de condicional es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_module)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de condicional solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "' AND " . d_azp_ibn_concept_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_concept_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "' AND " . d_azp_ibn_concept_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_client = $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_id_azp_ibn_client . " = '" . $empty_ibn_client . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_client) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_client) == '') { $sql_ibn_client[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_client[0][0]) != strtolower($empty_ibn_client)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El cliente seleccionado no se encuentra registrado.');
					}
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
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$var_sql = $this->db->select('*', t_azp_ibn_concept,
					d_azp_ibn_concept_id_azp_ibn_concept . " != '" . $empty_id . "' AND " .
					d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $empty_ibn_client . "' AND " .
					d_azp_ibn_concept_v_id_azp_ibn_module . " = '" . $empty_ibn_module . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El cliente y modulo seleccionados ya existen registrados.');
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
		final public function sql_azp_ibn_concept_update(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_concept_update($data);
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
				$empty_text_01 = $this->db->scape($data['field_up_text_01']);
				$empty_land_01 = $this->db->scape($data['field_up_land_01']);
				$empty_text_02 = $this->db->scape($data['field_up_text_02']);
				$empty_land_02 = $this->db->scape($data['field_up_land_02']);
				$empty_text_03 = $this->db->scape($data['field_up_text_03']);
				$empty_land_03 = $this->db->scape($data['field_up_land_03']);
				$empty_text_04 = $this->db->scape($data['field_up_text_04']);
				$empty_land_04 = $this->db->scape($data['field_up_land_04']);
				$empty_text_05 = $this->db->scape($data['field_up_text_05']);
				$empty_land_05 = $this->db->scape($data['field_up_land_05']);
				$empty_text_06 = $this->db->scape($data['field_up_text_06']);
				$empty_land_06 = $this->db->scape($data['field_up_land_06']);
				$empty_text_07 = $this->db->scape($data['field_up_text_07']);
				$empty_land_07 = $this->db->scape($data['field_up_land_07']);
				$empty_text_08 = $this->db->scape($data['field_up_text_08']);
				$empty_land_08 = $this->db->scape($data['field_up_land_08']);
				$empty_text_09 = $this->db->scape($data['field_up_text_09']);
				$empty_land_09 = $this->db->scape($data['field_up_land_09']);
				$empty_text_10 = $this->db->scape($data['field_up_text_10']);
				$empty_land_10 = $this->db->scape($data['field_up_land_10']);
				
				$empty_text_11 = $this->db->scape($data['field_up_text_11']);
				$empty_land_11 = $this->db->scape($data['field_up_land_11']);
				$empty_text_12 = $this->db->scape($data['field_up_text_12']);
				$empty_land_12 = $this->db->scape($data['field_up_land_12']);
				$empty_text_13 = $this->db->scape($data['field_up_text_13']);
				$empty_land_13 = $this->db->scape($data['field_up_land_13']);
				$empty_text_14 = $this->db->scape($data['field_up_text_14']);
				$empty_land_14 = $this->db->scape($data['field_up_land_14']);
				$empty_text_15 = $this->db->scape($data['field_up_text_15']);
				$empty_land_15 = $this->db->scape($data['field_up_land_15']);
				$empty_text_16 = $this->db->scape($data['field_up_text_16']);
				$empty_land_16 = $this->db->scape($data['field_up_land_16']);
				$empty_text_17 = $this->db->scape($data['field_up_text_17']);
				$empty_land_17 = $this->db->scape($data['field_up_land_17']);
				$empty_text_18 = $this->db->scape($data['field_up_text_18']);
				$empty_land_18 = $this->db->scape($data['field_up_land_18']);
				$empty_text_19 = $this->db->scape($data['field_up_text_19']);
				$empty_land_19 = $this->db->scape($data['field_up_land_19']);
				$empty_text_20 = $this->db->scape($data['field_up_text_20']);
				$empty_land_20 = $this->db->scape($data['field_up_land_20']);

				$empty_ibn_client = $this->db->scape($data['field_up_ibn_client']);
				$empty_ibn_module = $this->db->scape($data['field_up_ibn_module']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_ibn_concept, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_ibn_concept_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_ibn_concept_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_ibn_concept_m_date_created => DATE_HOUR,
							d_azs_ibn_concept_m_date_modified => DATE_HOUR,
							d_azs_ibn_concept_m_deleted => $key_sql_select[d_azp_ibn_concept_m_deleted],
							d_azs_ibn_concept_m_description => $key_sql_select[d_azp_ibn_concept_m_description],
							d_azs_ibn_concept_m_level => $key_sql_select[d_azp_ibn_concept_m_level],
							d_azs_ibn_concept_m_status => $key_sql_select[d_azp_ibn_concept_m_status],
							d_azs_ibn_concept_m_temp => $key_sql_select[d_azp_ibn_concept_m_temp],
							d_azs_ibn_concept_t_text_01 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_01]),
							d_azs_ibn_concept_t_land_01 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_01]),
							d_azs_ibn_concept_t_text_02 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_02]),
							d_azs_ibn_concept_t_land_02 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_02]),
							d_azs_ibn_concept_t_text_03 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_03]),
							d_azs_ibn_concept_t_land_03 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_03]),
							d_azs_ibn_concept_t_text_04 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_04]),
							d_azs_ibn_concept_t_land_04 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_04]),
							d_azs_ibn_concept_t_text_05 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_05]),
							d_azs_ibn_concept_t_land_05 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_05]),
							d_azs_ibn_concept_t_text_06 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_06]),
							d_azs_ibn_concept_t_land_06 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_06]),
							d_azs_ibn_concept_t_text_07 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_07]),
							d_azs_ibn_concept_t_land_07 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_07]),
							d_azs_ibn_concept_t_text_08 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_08]),
							d_azs_ibn_concept_t_land_08 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_08]),
							d_azs_ibn_concept_t_text_09 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_09]),
							d_azs_ibn_concept_t_land_09 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_09]),
							d_azs_ibn_concept_t_text_10 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_10]),
							d_azs_ibn_concept_t_land_10 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_10]),
							
							d_azs_ibn_concept_t_text_11 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_11]),
							d_azs_ibn_concept_t_land_11 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_11]),
							d_azs_ibn_concept_t_text_12 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_12]),
							d_azs_ibn_concept_t_land_12 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_12]),
							d_azs_ibn_concept_t_text_13 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_13]),
							d_azs_ibn_concept_t_land_13 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_13]),
							d_azs_ibn_concept_t_text_14 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_14]),
							d_azs_ibn_concept_t_land_14 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_14]),
							d_azs_ibn_concept_t_text_15 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_15]),
							d_azs_ibn_concept_t_land_15 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_15]),
							d_azs_ibn_concept_t_text_16 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_16]),
							d_azs_ibn_concept_t_land_16 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_16]),
							d_azs_ibn_concept_t_text_17 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_17]),
							d_azs_ibn_concept_t_land_17 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_17]),
							d_azs_ibn_concept_t_text_18 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_18]),
							d_azs_ibn_concept_t_land_18 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_18]),
							d_azs_ibn_concept_t_text_19 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_19]),
							d_azs_ibn_concept_t_land_19 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_19]),
							d_azs_ibn_concept_t_text_20 => strtoupper($key_sql_select[d_azp_ibn_concept_t_text_20]),
							d_azs_ibn_concept_t_land_20 => strtoupper($key_sql_select[d_azp_ibn_concept_t_land_20]),

							d_azs_ibn_concept_u_ibn_client => strtoupper($key_sql_select[d_azp_ibn_concept_v_id_azp_ibn_client]),
							d_azs_ibn_concept_u_ibn_module => strtoupper($key_sql_select[d_azp_ibn_concept_v_id_azp_ibn_module]),
							d_azs_ibn_concept_v_id_azp_ibn_concept => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_ibn_concept, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_concept_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_concept_m_date_modified => DATE_HOUR,
					d_azp_ibn_concept_m_description => $empty_description,
					d_azp_ibn_concept_m_status => $empty_state,
					d_azp_ibn_concept_t_text_01 => strtoupper($empty_text_01),
					d_azp_ibn_concept_t_land_01 => strtoupper($empty_land_01),
					d_azp_ibn_concept_t_text_02 => strtoupper($empty_text_02),
					d_azp_ibn_concept_t_land_02 => strtoupper($empty_land_02),
					d_azp_ibn_concept_t_text_03 => strtoupper($empty_text_03),
					d_azp_ibn_concept_t_land_03 => strtoupper($empty_land_03),
					d_azp_ibn_concept_t_text_04 => strtoupper($empty_text_04),
					d_azp_ibn_concept_t_land_04 => strtoupper($empty_land_04),
					d_azp_ibn_concept_t_text_05 => strtoupper($empty_text_05),
					d_azp_ibn_concept_t_land_05 => strtoupper($empty_land_05),
					d_azp_ibn_concept_t_text_06 => strtoupper($empty_text_06),
					d_azp_ibn_concept_t_land_06 => strtoupper($empty_land_06),
					d_azp_ibn_concept_t_text_07 => strtoupper($empty_text_07),
					d_azp_ibn_concept_t_land_07 => strtoupper($empty_land_07),
					d_azp_ibn_concept_t_text_08 => strtoupper($empty_text_08),
					d_azp_ibn_concept_t_land_08 => strtoupper($empty_land_08),
					d_azp_ibn_concept_t_text_09 => strtoupper($empty_text_09),
					d_azp_ibn_concept_t_land_09 => strtoupper($empty_land_09),
					d_azp_ibn_concept_t_text_10 => strtoupper($empty_text_10),
					d_azp_ibn_concept_t_land_10 => strtoupper($empty_land_10),
					
					d_azp_ibn_concept_t_text_11 => strtoupper($empty_text_11),
					d_azp_ibn_concept_t_land_11 => strtoupper($empty_land_11),
					d_azp_ibn_concept_t_text_12 => strtoupper($empty_text_12),
					d_azp_ibn_concept_t_land_12 => strtoupper($empty_land_12),
					d_azp_ibn_concept_t_text_13 => strtoupper($empty_text_13),
					d_azp_ibn_concept_t_land_13 => strtoupper($empty_land_13),
					d_azp_ibn_concept_t_text_14 => strtoupper($empty_text_14),
					d_azp_ibn_concept_t_land_14 => strtoupper($empty_land_14),
					d_azp_ibn_concept_t_text_15 => strtoupper($empty_text_15),
					d_azp_ibn_concept_t_land_15 => strtoupper($empty_land_15),
					d_azp_ibn_concept_t_text_16 => strtoupper($empty_text_16),
					d_azp_ibn_concept_t_land_16 => strtoupper($empty_land_16),
					d_azp_ibn_concept_t_text_17 => strtoupper($empty_text_17),
					d_azp_ibn_concept_t_land_17 => strtoupper($empty_land_17),
					d_azp_ibn_concept_t_text_18 => strtoupper($empty_text_18),
					d_azp_ibn_concept_t_land_18 => strtoupper($empty_land_18),
					d_azp_ibn_concept_t_text_19 => strtoupper($empty_text_19),
					d_azp_ibn_concept_t_land_19 => strtoupper($empty_land_19),
					d_azp_ibn_concept_t_text_20 => strtoupper($empty_text_20),
					d_azp_ibn_concept_t_land_20 => strtoupper($empty_land_20),

					d_azp_ibn_concept_v_id_azp_ibn_client => $empty_ibn_client,
					d_azp_ibn_concept_v_id_azp_ibn_module => $empty_ibn_module,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_concept, $var_array, d_azp_ibn_concept_id_azp_ibn_concept . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_client() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_client, d_azp_ibn_client_m_deleted . " = '1' AND " . d_azp_ibn_client_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_module() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_module, d_azp_ibn_module_m_deleted . " = '1' AND " . d_azp_ibn_module_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_table_field() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_m_deleted . " = '1' AND " . d_azp_ibn_table_field_m_status . " = '1'");
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
				ORDER BY tc_azp_ibn_table_field." . d_azp_ibn_table_field_v_id_azp_ibn_module . " ASC,
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . " ASC
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
				ORDER BY tc_azp_ibn_table_field." . d_azp_ibn_table_field_v_id_azp_ibn_module . " ASC,
					tc_azp_ibn_table_field." . d_azp_ibn_table_field_t_label . " ASC
			");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>