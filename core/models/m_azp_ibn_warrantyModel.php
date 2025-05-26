<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_ibn_warrantyModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_by_create() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_creditor'])) { $var_sql_creditor = ""; } else {
				if ($_GET['field_creditor'] == '') { $var_sql_creditor = ""; } else {
					$var_sql_creditor = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_creditor . " IN (" . trim($_GET['field_creditor'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_date'])) { $var_sql_date = ""; } else {
				if ($_GET['field_date'] == '') { $var_sql_date = ""; } else {
					$var_sql_date = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_date . " IN (" . trim($_GET['field_date'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_detail'])) { $var_sql_well_detail = ""; } else {
				if ($_GET['field_well_detail'] == '') { $var_sql_well_detail = ""; } else {
					$var_sql_well_detail = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_well_detail . " IN (" . trim($_GET['field_well_detail'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_name'])) { $var_sql_well_name = ""; } else {
				if ($_GET['field_well_name'] == '') { $var_sql_well_name = ""; } else {
					$var_sql_well_name = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_well_name . " IN (" . trim($_GET['field_well_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_value'])) { $var_sql_value = ""; } else {
				if ($_GET['field_value'] == '') { $var_sql_value = ""; } else {
					$var_sql_value = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_value . " IN (" . trim($_GET['field_value'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}




			
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_id_azp_ibn_warranty . " AS 'lbl_azp_ibn_warranty_id_azp_ibn_warranty',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_date_created . " AS 'lbl_azp_ibn_warranty_m_date_created',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_date_modified . " AS 'lbl_azp_ibn_warranty_m_date_modified',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_description . " AS 'lbl_azp_ibn_warranty_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_comment_legal . " AS 'lbl_azp_ibn_warranty_t_comment_legal',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_concept . " AS 'lbl_azp_ibn_warranty_t_concept',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_consecutive . " AS 'lbl_azp_ibn_warranty_t_consecutive',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_creditor . " AS 'lbl_azp_ibn_warranty_t_creditor',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_date . " AS 'lbl_azp_ibn_warranty_t_date',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_full_name . " AS 'lbl_azp_ibn_warranty_t_full_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_identification . " AS 'lbl_azp_ibn_warranty_t_identification',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_observation . " AS 'lbl_azp_ibn_warranty_t_observation',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_well_detail . " AS 'lbl_azp_ibn_warranty_t_well_detail',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_well_name . " AS 'lbl_azp_ibn_warranty_t_well_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_value . " AS 'lbl_azp_ibn_warranty_t_value',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name'
				FROM " . t_azp_ibn_warranty . " tc_azp_ibn_warranty
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_deleted . " = '1'
					" . $var_sql_ibn_control_panel .  "
					
					" . $var_sql_acount . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_creditor . "
					" . $var_sql_date . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_limitation . "
					" . $var_sql_observation . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_well_detail . "
					" . $var_sql_well_name . "
					" . $var_sql_value . "
					" . $var_sql_ibn_state . "
				ORDER BY tc_azp_ibn_warranty." . d_azp_ibn_warranty_id_azp_ibn_warranty . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_id_azs_ibn_warranty . " AS 'lbl_azs_ibn_warranty_id_azs_ibn_warranty',
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_m_date_modified . " AS 'lbl_azs_ibn_warranty_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_m_date_created . " AS 'lbl_azs_ibn_warranty_m_date_created',
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_m_date_modified . " AS 'lbl_azs_ibn_warranty_m_date_modified',
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_m_description . " AS 'lbl_azs_ibn_warranty_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_t_consecutive . " AS 'lbl_azs_ibn_warranty_t_consecutive',
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_t_creditor . " AS 'lbl_azs_ibn_warranty_t_creditor',
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_t_date . " AS 'lbl_azs_ibn_warranty_t_date',
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_t_full_name . " AS 'lbl_azs_ibn_warranty_t_full_name',
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_t_identification . " AS 'lbl_azs_ibn_warranty_t_identification',
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_t_observation . " AS 'lbl_azs_ibn_warranty_t_observation',
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_t_well_detail . " AS 'lbl_azs_ibn_warranty_t_well_detail',
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_t_well_name . " AS 'lbl_azs_ibn_warranty_t_well_name',
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_t_value . " AS 'lbl_azs_ibn_warranty_t_value',
					tc_azs_ibn_warranty." . d_azs_ibn_warranty_u_ibn_state . " AS 'lbl_azs_ibn_warranty_u_ibn_state'
				FROM " . t_azs_ibn_warranty . " tc_azs_ibn_warranty
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_ibn_warranty." . d_azs_ibn_warranty_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_ibn_warranty." . d_azs_ibn_warranty_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_ibn_warranty." . d_azs_ibn_warranty_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_ibn_warranty." . d_azs_ibn_warranty_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_ibn_warranty." . d_azs_ibn_warranty_v_id_azp_ibn_warranty . " = '" . $this->id . "'
				ORDER BY tc_azs_ibn_warranty." . d_azs_ibn_warranty_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_ibn_warranty . "
				WHERE " . d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $this->id . "'
					AND " . d_azp_ibn_warranty_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_ibn_warranty);
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
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_id_azp_ibn_warranty . " AS 'lbl_azp_ibn_warranty_id_azp_ibn_warranty',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_date_created . " AS 'lbl_azp_ibn_warranty_m_date_created',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_date_modified . " AS 'lbl_azp_ibn_warranty_m_date_modified',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_description . " AS 'lbl_azp_ibn_warranty_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_comment_legal . " AS 'lbl_azp_ibn_warranty_t_comment_legal',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_concept . " AS 'lbl_azp_ibn_warranty_t_concept',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_consecutive . " AS 'lbl_azp_ibn_warranty_t_consecutive',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_creditor . " AS 'lbl_azp_ibn_warranty_t_creditor',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_date . " AS 'lbl_azp_ibn_warranty_t_date',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_full_name . " AS 'lbl_azp_ibn_warranty_t_full_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_identification . " AS 'lbl_azp_ibn_warranty_t_identification',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_observation . " AS 'lbl_azp_ibn_warranty_t_observation',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_well_detail . " AS 'lbl_azp_ibn_warranty_t_well_detail',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_well_name . " AS 'lbl_azp_ibn_warranty_t_well_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_value . " AS 'lbl_azp_ibn_warranty_t_value',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name'
				FROM " . t_azp_ibn_warranty . " tc_azp_ibn_warranty
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_warranty." . d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $this->id . "'
					AND tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			




			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_creditor'])) { $var_sql_creditor = ""; } else {
				if ($_GET['field_creditor'] == '') { $var_sql_creditor = ""; } else {
					$var_sql_creditor = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_creditor . " IN (" . trim($_GET['field_creditor'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_date'])) { $var_sql_date = ""; } else {
				if ($_GET['field_date'] == '') { $var_sql_date = ""; } else {
					$var_sql_date = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_date . " IN (" . trim($_GET['field_date'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_detail'])) { $var_sql_well_detail = ""; } else {
				if ($_GET['field_well_detail'] == '') { $var_sql_well_detail = ""; } else {
					$var_sql_well_detail = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_well_detail . " IN (" . trim($_GET['field_well_detail'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_name'])) { $var_sql_well_name = ""; } else {
				if ($_GET['field_well_name'] == '') { $var_sql_well_name = ""; } else {
					$var_sql_well_name = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_well_name . " IN (" . trim($_GET['field_well_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_value'])) { $var_sql_value = ""; } else {
				if ($_GET['field_value'] == '') { $var_sql_value = ""; } else {
					$var_sql_value = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_value . " IN (" . trim($_GET['field_value'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}




			
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_id_azp_ibn_warranty . " AS 'lbl_azp_ibn_warranty_id_azp_ibn_warranty',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_date_created . " AS 'lbl_azp_ibn_warranty_m_date_created',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_date_modified . " AS 'lbl_azp_ibn_warranty_m_date_modified',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_description . " AS 'lbl_azp_ibn_warranty_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_comment_legal . " AS 'lbl_azp_ibn_warranty_t_comment_legal',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_concept . " AS 'lbl_azp_ibn_warranty_t_concept',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_consecutive . " AS 'lbl_azp_ibn_warranty_t_consecutive',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_creditor . " AS 'lbl_azp_ibn_warranty_t_creditor',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_date . " AS 'lbl_azp_ibn_warranty_t_date',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_full_name . " AS 'lbl_azp_ibn_warranty_t_full_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_identification . " AS 'lbl_azp_ibn_warranty_t_identification',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_observation . " AS 'lbl_azp_ibn_warranty_t_observation',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_well_detail . " AS 'lbl_azp_ibn_warranty_t_well_detail',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_well_name . " AS 'lbl_azp_ibn_warranty_t_well_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_value . " AS 'lbl_azp_ibn_warranty_t_value',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name'
				FROM " . t_azp_ibn_warranty . " tc_azp_ibn_warranty
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_deleted . " = '3'
					" . $var_sql_ibn_control_panel .  "
					
					" . $var_sql_acount . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_creditor . "
					" . $var_sql_date . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_limitation . "
					" . $var_sql_observation . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_well_detail . "
					" . $var_sql_well_name . "
					" . $var_sql_value . "
					" . $var_sql_ibn_state . "
				ORDER BY tc_azp_ibn_warranty." . d_azp_ibn_warranty_id_azp_ibn_warranty . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			




			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_creditor'])) { $var_sql_creditor = ""; } else {
				if ($_GET['field_creditor'] == '') { $var_sql_creditor = ""; } else {
					$var_sql_creditor = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_creditor . " IN (" . trim($_GET['field_creditor'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_date'])) { $var_sql_date = ""; } else {
				if ($_GET['field_date'] == '') { $var_sql_date = ""; } else {
					$var_sql_date = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_date . " IN (" . trim($_GET['field_date'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_detail'])) { $var_sql_well_detail = ""; } else {
				if ($_GET['field_well_detail'] == '') { $var_sql_well_detail = ""; } else {
					$var_sql_well_detail = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_well_detail . " IN (" . trim($_GET['field_well_detail'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_name'])) { $var_sql_well_name = ""; } else {
				if ($_GET['field_well_name'] == '') { $var_sql_well_name = ""; } else {
					$var_sql_well_name = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_well_name . " IN (" . trim($_GET['field_well_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_value'])) { $var_sql_value = ""; } else {
				if ($_GET['field_value'] == '') { $var_sql_value = ""; } else {
					$var_sql_value = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_value . " IN (" . trim($_GET['field_value'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}





			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_id_azp_ibn_warranty . " AS 'lbl_azp_ibn_warranty_id_azp_ibn_warranty',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_date_created . " AS 'lbl_azp_ibn_warranty_m_date_created',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_date_modified . " AS 'lbl_azp_ibn_warranty_m_date_modified',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_description . " AS 'lbl_azp_ibn_warranty_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_comment_legal . " AS 'lbl_azp_ibn_warranty_t_comment_legal',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_concept . " AS 'lbl_azp_ibn_warranty_t_concept',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_consecutive . " AS 'lbl_azp_ibn_warranty_t_consecutive',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_creditor . " AS 'lbl_azp_ibn_warranty_t_creditor',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_date . " AS 'lbl_azp_ibn_warranty_t_date',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_full_name . " AS 'lbl_azp_ibn_warranty_t_full_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_identification . " AS 'lbl_azp_ibn_warranty_t_identification',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_observation . " AS 'lbl_azp_ibn_warranty_t_observation',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_well_detail . " AS 'lbl_azp_ibn_warranty_t_well_detail',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_well_name . " AS 'lbl_azp_ibn_warranty_t_well_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_value . " AS 'lbl_azp_ibn_warranty_t_value',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name'
				FROM " . t_azp_ibn_warranty . " tc_azp_ibn_warranty
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_deleted . " = '1'
					" . $var_sql_ibn_control_panel .  "

					" . $var_sql_acount . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_creditor . "
					" . $var_sql_date . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_limitation . "
					" . $var_sql_observation . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_well_detail . "
					" . $var_sql_well_name . "
					" . $var_sql_value . "
					" . $var_sql_ibn_state . "
				ORDER BY tc_azp_ibn_warranty." . d_azp_ibn_warranty_id_azp_ibn_warranty . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			




			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_creditor'])) { $var_sql_creditor = ""; } else {
				if ($_GET['field_creditor'] == '') { $var_sql_creditor = ""; } else {
					$var_sql_creditor = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_creditor . " IN (" . trim($_GET['field_creditor'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_date'])) { $var_sql_date = ""; } else {
				if ($_GET['field_date'] == '') { $var_sql_date = ""; } else {
					$var_sql_date = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_date . " IN (" . trim($_GET['field_date'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_detail'])) { $var_sql_well_detail = ""; } else {
				if ($_GET['field_well_detail'] == '') { $var_sql_well_detail = ""; } else {
					$var_sql_well_detail = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_well_detail . " IN (" . trim($_GET['field_well_detail'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_name'])) { $var_sql_well_name = ""; } else {
				if ($_GET['field_well_name'] == '') { $var_sql_well_name = ""; } else {
					$var_sql_well_name = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_well_name . " IN (" . trim($_GET['field_well_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_value'])) { $var_sql_value = ""; } else {
				if ($_GET['field_value'] == '') { $var_sql_value = ""; } else {
					$var_sql_value = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_t_value . " IN (" . trim($_GET['field_value'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_warranty." .
						d_azp_ibn_warranty_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}




			
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_id_azp_ibn_warranty . " AS 'lbl_azp_ibn_warranty_id_azp_ibn_warranty',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_date_created . " AS 'lbl_azp_ibn_warranty_m_date_created',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_date_modified . " AS 'lbl_azp_ibn_warranty_m_date_modified',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_description . " AS 'lbl_azp_ibn_warranty_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_comment_legal . " AS 'lbl_azp_ibn_warranty_t_comment_legal',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_concept . " AS 'lbl_azp_ibn_warranty_t_concept',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_consecutive . " AS 'lbl_azp_ibn_warranty_t_consecutive',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_creditor . " AS 'lbl_azp_ibn_warranty_t_creditor',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_date . " AS 'lbl_azp_ibn_warranty_t_date',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_full_name . " AS 'lbl_azp_ibn_warranty_t_full_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_identification . " AS 'lbl_azp_ibn_warranty_t_identification',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_observation . " AS 'lbl_azp_ibn_warranty_t_observation',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_well_detail . " AS 'lbl_azp_ibn_warranty_t_well_detail',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_well_name . " AS 'lbl_azp_ibn_warranty_t_well_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_value . " AS 'lbl_azp_ibn_warranty_t_value',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name'
				FROM " . t_azp_ibn_warranty . " tc_azp_ibn_warranty
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_deleted . " = '2'
					" . $var_sql_ibn_control_panel .  "
					
					" . $var_sql_acount . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_creditor . "
					" . $var_sql_date . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_limitation . "
					" . $var_sql_observation . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_well_detail . "
					" . $var_sql_well_name . "
					" . $var_sql_value . "
					" . $var_sql_ibn_state . "
				ORDER BY tc_azp_ibn_warranty." . d_azp_ibn_warranty_id_azp_ibn_warranty . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_id_azp_ibn_warranty . " AS 'lbl_azp_ibn_warranty_id_azp_ibn_warranty',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_created . " AS 'lbl_azp_ibn_warranty_m_by_created',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_modified . " AS 'lbl_azp_ibn_warranty_m_by_modified',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_date_created . " AS 'lbl_azp_ibn_warranty_m_date_created',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_date_modified . " AS 'lbl_azp_ibn_warranty_m_date_modified',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_description . " AS 'lbl_azp_ibn_warranty_m_description',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_level . " AS 'lbl_azp_ibn_warranty_m_level',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_status . " AS 'lbl_azp_ibn_warranty_m_status',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_comment_legal . " AS 'lbl_azp_ibn_warranty_t_comment_legal',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_concept . " AS 'lbl_azp_ibn_warranty_t_concept',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_consecutive . " AS 'lbl_azp_ibn_warranty_t_consecutive',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_creditor . " AS 'lbl_azp_ibn_warranty_t_creditor',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_date . " AS 'lbl_azp_ibn_warranty_t_date',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_full_name . " AS 'lbl_azp_ibn_warranty_t_full_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_identification . " AS 'lbl_azp_ibn_warranty_t_identification',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_limitation . " AS 'lbl_azp_ibn_warranty_t_limitation',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_observation . " AS 'lbl_azp_ibn_warranty_t_observation',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_well_detail . " AS 'lbl_azp_ibn_warranty_t_well_detail',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_well_name . " AS 'lbl_azp_ibn_warranty_t_well_name',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_value . " AS 'lbl_azp_ibn_warranty_t_value',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_warranty_v_id_azp_ibn_control_panel',
					tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_warranty_v_id_azp_ibn_state'
				FROM " . t_azp_ibn_warranty . " tc_azp_ibn_warranty
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_warranty." . d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $this->id . "'
					AND tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_ibn_warranty_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "' AND " . d_azp_ibn_warranty_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "' AND " . d_azp_ibn_warranty_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_warranty_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "' AND " . d_azp_ibn_warranty_m_level . " = '2'");
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
		# Control Errores Update
		final private function error_sql_azp_ibn_warranty_finish(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_finish'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_finish']);
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
				$sql_id = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_warranty_t_consecutive . " = '' AND " . d_azp_ibn_warranty_v_id_azp_ibn_state . " = '16'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna consecutivo.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_warranty_t_creditor . " = '' AND " . d_azp_ibn_warranty_v_id_azp_ibn_state . " = '16'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna acreedor.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_warranty_t_date . " = '' AND " . d_azp_ibn_warranty_v_id_azp_ibn_state . " = '16'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna fecha.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_warranty_t_full_name . " = '' AND " . d_azp_ibn_warranty_v_id_azp_ibn_state . " = '16'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna nombre.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_warranty_t_identification . " = '' AND " . d_azp_ibn_warranty_v_id_azp_ibn_state . " = '16'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna cedula.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_warranty_t_well_detail . " = '' AND " . d_azp_ibn_warranty_v_id_azp_ibn_state . " = '16'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna detalle bien.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_warranty_t_well_name . " = '' AND " . d_azp_ibn_warranty_v_id_azp_ibn_state . " = '16'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna bien.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_warranty_t_value . " = '' AND " . d_azp_ibn_warranty_v_id_azp_ibn_state . " = '16'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna valor.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_warranty_v_id_azp_ibn_state . " = '' AND " . d_azp_ibn_warranty_v_id_azp_ibn_state . " = '16'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna estado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND (" . d_azp_ibn_warranty_t_comment_legal . " = ''" .
						//"OR" . " " . d_azp_ibn_warranty_t_concept . " = ''" .
						//"OR" . " " . d_azp_ibn_warranty_t_consecutive . " = ''" .
						"OR" . " " . d_azp_ibn_warranty_t_creditor . " = ''" .
						"OR" . " " . d_azp_ibn_warranty_t_date . " = ''" .
						"OR" . " " . d_azp_ibn_warranty_t_full_name . " = ''" .
						"OR" . " " . d_azp_ibn_warranty_t_identification . " = ''" .
						//"OR" . " " . d_azp_ibn_warranty_t_observation . " = ''" .
						"OR" . " " . d_azp_ibn_warranty_t_well_detail . " = ''" .
						"OR" . " " . d_azp_ibn_warranty_t_well_name . " = ''" .
						"OR" . " " . d_azp_ibn_warranty_t_value . " = ''" .
						//"OR" . " " . d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = ''" .
						"OR" . " " . d_azp_ibn_warranty_v_id_azp_ibn_state . " = '4'" . ")"
				);
				#-------------------------------------------------------------------------#
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				/*$sql_id = $this->db->select('*', t_azp_ibn_control_panel,
					d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_control_panel_t_mod_warranty . " = 'SI'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (false != $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id[0][0]) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) == strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando ya se encuentra finalizada.');
					}
				}*/
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_warranty_finish(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_warranty_finish($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_finish']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_control_panel_t_mod_warranty => 'SI',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_control_panel, $var_array, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Base finalizada correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_warranty_delete(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_warranty_delete($data);
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
				$var_array = array(d_azp_ibn_warranty_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_ibn_warranty_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_comment_legal'])) { throw new Exception('<b>Error:</b> El campo de comentario juridico esta prohibido modificar.'); }
				if (!isset($data['field_cr_creditor'])) { throw new Exception('<b>Error:</b> El campo de acredito esta prohibido modificar.'); }
				if (!isset($data['field_cr_date'])) { throw new Exception('<b>Error:</b> El campo de fecha esta prohibido modificar.'); }
				if (!isset($data['field_cr_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_identification'])) { throw new Exception('<b>Error:</b> El campo de cedula esta prohibido modificar.'); }
				if (!isset($data['field_cr_limitation'])) { throw new Exception('<b>Error:</b> El campo de limitacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_observation'])) { throw new Exception('<b>Error:</b> El campo de concatenado esta prohibido modificar.'); }
				if (!isset($data['field_cr_well_detail'])) { throw new Exception('<b>Error:</b> El campo de bien detall esta prohibido modificar.'); }
				if (!isset($data['field_cr_well_name'])) { throw new Exception('<b>Error:</b> El campo de bien esta prohibido modificar.'); }
				if (!isset($data['field_cr_value'])) { throw new Exception('<b>Error:</b> El campo de valor esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_control_panel'])) { throw new Exception('<b>Error:</b> El campo de tablero control esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_comment_legal = $this->db->scape($data['field_cr_comment_legal']);
				$empty_creditor = $this->db->scape($data['field_cr_creditor']);
				$empty_date = $this->db->scape($data['field_cr_date']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_limitation = $this->db->scape($data['field_cr_limitation']);
				$empty_observation = $this->db->scape($data['field_cr_observation']);
				$empty_well_detail = $this->db->scape($data['field_cr_well_detail']);
				$empty_well_name = $this->db->scape($data['field_cr_well_name']);
				$empty_value = $this->db->scape($data['field_cr_value']);
				$empty_ibn_control_panel = $this->db->scape($data['field_cr_ibn_control_panel']);
				$empty_ibn_state = $this->db->scape($data['field_cr_ibn_state']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_creditor)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de acredito es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_creditor)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de acredito solo permite letras.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_creditor) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de acredito permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_creditor, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de acredito no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_creditor)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de acredito no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_date) || $empty_date == 'aaaa-mm-dd') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_date) < 10 || strlen($empty_date) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha está mal diligenciado, debe ser aaaa-mm-dd.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre solo permite letras.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_full_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_full_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula solo permite numeros.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_identification, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite ningun espacio en blanco.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_observation)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de concatenado es obligatorio.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_well_detail)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de bien detalle es obligatorio.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_well_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de bien es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_well_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de bien solo permite letras.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_well_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de bien permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_well_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de bien no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_well_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de bien no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor es obligatorio.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_control_panel) || strtolower($empty_ibn_control_panel) == strtolower('seleccionar') || $empty_ibn_control_panel == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tablero de control es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_control_panel)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tablero de control solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_state) || strtolower($empty_ibn_state) == strtolower('seleccionar') || $empty_ibn_state == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_state)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_control_panel = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_control_panel) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_control_panel) == '') { $sql_ibn_control_panel[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_control_panel[0][0]) != strtolower($empty_ibn_control_panel)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tablero de control seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_state = $this->db->select('*', t_azp_ibn_state, d_azp_ibn_state_id_azp_ibn_state . " = '" . $empty_ibn_state . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_state) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_state) == '') { $sql_ibn_state[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_state[0][0]) != strtolower($empty_ibn_state)) {
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
		# Query Sql Insert
		final public function sql_azp_ibn_warranty_insert(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_warranty_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_comment_legal = $this->db->scape($data['field_cr_comment_legal']);
				$empty_creditor = $this->db->scape($data['field_cr_creditor']);
				$empty_date = $this->db->scape($data['field_cr_date']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_limitation = $this->db->scape($data['field_cr_limitation']);
				$empty_observation = $this->db->scape($data['field_cr_observation']);
				$empty_well_detail = $this->db->scape($data['field_cr_well_detail']);
				$empty_well_name = $this->db->scape($data['field_cr_well_name']);
				$empty_value = $this->db->scape($data['field_cr_value']);
				$empty_ibn_control_panel = $this->db->scape($data['field_cr_ibn_control_panel']);
				$empty_ibn_state = $this->db->scape($data['field_cr_ibn_state']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "' AND " .
					d_azp_ibn_warranty_t_identification . " = '" . $empty_identification . "' " .
					"GROUP BY " . d_azp_ibn_warranty_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value):
						# Asignar valores a una nueva variable
						$empty_consecutive = $value[d_azp_ibn_warranty_t_consecutive];
					endforeach;
				} else {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select("MAX(" . d_azp_ibn_warranty_t_consecutive . ") AS 'lbl_max'", t_azp_ibn_warranty,
						d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							# Asignar valores a una nueva variable
							$empty_consecutive = $value['lbl_max'] + 1;
						endforeach;
					} else { $empty_consecutive = 1; }
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_warranty_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_ibn_warranty_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_warranty_m_date_created => DATE_HOUR,
					d_azp_ibn_warranty_m_date_modified => DATE_HOUR,
					d_azp_ibn_warranty_m_deleted => '1',
					d_azp_ibn_warranty_m_description => $empty_description,
					d_azp_ibn_warranty_m_level => '2',
					d_azp_ibn_warranty_m_status => '1',
					d_azp_ibn_warranty_m_temp => '2',
					d_azp_ibn_warranty_t_validate => '0',
					d_azp_ibn_warranty_t_comment_legal => strtoupper($empty_comment_legal),
					//d_azp_ibn_warranty_t_concept => strtoupper($empty_concept),
					d_azp_ibn_warranty_t_consecutive => strtoupper($empty_consecutive),
					d_azp_ibn_warranty_t_creditor => strtoupper($empty_creditor),
					d_azp_ibn_warranty_t_date => strtoupper($empty_date),
					d_azp_ibn_warranty_t_full_name => strtoupper($empty_full_name),
					d_azp_ibn_warranty_t_identification => strtoupper($empty_identification),
					d_azp_ibn_warranty_t_limitation => strtoupper($empty_limitation),
					d_azp_ibn_warranty_t_observation => strtoupper($empty_observation),
					d_azp_ibn_warranty_t_well_detail => strtoupper($empty_well_detail),
					d_azp_ibn_warranty_t_well_name => strtoupper($empty_well_name),
					d_azp_ibn_warranty_t_value => strtoupper($empty_value),
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
					d_azp_ibn_warranty_v_id_azp_ibn_state => $empty_ibn_state,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_ibn_warranty, $var_array);
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_m_temp . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$empty_id = $value[d_azp_ibn_warranty_id_azp_ibn_warranty];
					endforeach;
				} else { $empty_id = 0; }
				#-------------------------------------------------------------------------#
				$var_rg_cf_2 = 0; $var_rg_cf_3 = 0;
				$var_pc_one = 'NEGATIVO'; $var_pc_two = 'NEGATIVO'; $var_pc_three = 'NEGATIVO'; $var_rg_cf_pos = 'POSITIVO'; $var_rg_cf_neg = 'NEGATIVO';
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cp_id = $value[d_azp_ibn_warranty_v_id_azp_ibn_control_panel];

						$var_rg_sta = $value[d_azp_ibn_warranty_v_id_azp_ibn_state];
						$var_rg_bie = $value[d_azp_ibn_warranty_t_well_name];
					endforeach;
				} else { $var_rg_cp_id = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $var_rg_cp_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cl_id = $value[d_azp_ibn_control_panel_v_id_azp_ibn_client];
					endforeach;
				} else { $var_rg_cl_id = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				//$var_sql = $this->db->select('*', t_azp_ibn_regulation, d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $var_rg_cl_id . "' AND " . d_azp_ibn_regulation_t_selector . " = 'SI'");
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_id_azp_ibn_regulation . " AS 'lbl_azp_ibn_regulation_id_azp_ibn_regulation',
						tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
						tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_created . " AS 'lbl_azp_ibn_regulation_m_date_created',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_modified . " AS 'lbl_azp_ibn_regulation_m_date_modified',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_description . " AS 'lbl_azp_ibn_regulation_m_description',
						tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
						tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " AS 'lbl_azp_ibn_regulation_t_selector',
						tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . " AS 'lbl_azp_ibn_calification_id_azp_ibn_calification',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_concept . " AS 'lbl_azp_ibn_calification_t_concept',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_determination . " AS 'lbl_azp_ibn_calification_t_determination',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_principal . " AS 'lbl_azp_ibn_calification_t_principal',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_secondary . " AS 'lbl_azp_ibn_calification_t_secondary',
						tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name'
					FROM " . t_azp_ibn_regulation . " tc_azp_ibn_regulation
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_user . " tc_azp_user_created
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_created . "
							= tc_azp_user_created." . d_azp_user_id_azp_user . "
					INNER JOIN " . t_azp_user . " tc_azp_user_modified
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_modified . "
							= tc_azp_user_modified." . d_azp_user_id_azp_user . "
					INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_level . "
							= tc_azp_sys_level." . d_azp_sys_level_t_value . "
					INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . "
							= tc_azp_sys_state." . d_azp_sys_state_t_value . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
							= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
						ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
							= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_deleted . " = '1'
						AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . " = '1'
						AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " = 'SI'
						AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $var_rg_cl_id . "'
				");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cf_id = $value['lbl_azp_ibn_calification_id_azp_ibn_calification'];
						$var_rg_cf_pos = $value['lbl_azp_ibn_calification_t_principal'];
						$var_rg_cf_neg = $value['lbl_azp_ibn_calification_t_secondary'];
						$var_pc_one = $var_rg_cf_neg; $var_pc_two = $var_rg_cf_neg; $var_pc_three = $var_rg_cf_neg;
						# Control de validacion de variables y asignacion de valores a nuevas variables
						if ($var_rg_cf_id == 2) { $var_rg_cf_2 = 2; } else if ($var_rg_cf_id == 3) { $var_rg_cf_3 = 3; } else { $var_rg_cf_2 = 0; $var_rg_cf_3 = 0; }
					endforeach;
				}
				#-------------------------------------------------------------------------#
				if ($var_rg_cf_2 == 2) { if ($var_rg_sta == '16') { $var_pc_two = $var_rg_cf_pos; } else { $var_pc_two = $var_rg_cf_neg; } } else { $var_pc_two = $var_rg_cf_neg; }
				if ($var_rg_cf_3 == 3) { if ($var_rg_sta == '16') { $var_pc_three = $var_rg_cf_pos; } else { $var_pc_three = $var_rg_cf_neg; } } else { $var_pc_three = $var_rg_cf_neg; }
				#-------------------------------------------------------------------------#
				if ($var_pc_two == $var_rg_cf_neg) { $var_policy_viability = $var_rg_cf_neg; } else if ($var_pc_two == $var_rg_cf_pos) { $var_policy_viability = $var_rg_cf_pos; }
				#-------------------------------------------------------------------------#
				if ($var_pc_three == $var_rg_cf_neg) { $var_policy_effective = $var_rg_cf_neg; } else if ($var_pc_three == $var_rg_cf_pos) { $var_policy_effective = $var_rg_cf_pos; }
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_warranty_t_policy_effective => $var_policy_effective,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_warranty_t_policy_viability => $var_policy_viability,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_ibn_control_panel = $value[d_azp_ibn_warranty_v_id_azp_ibn_control_panel];
					endforeach;
				} else { $var_ibn_control_panel = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_id_client = $value[d_azp_ibn_control_panel_v_id_azp_ibn_client];
					endforeach;
				} else { $var_id_client = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " AS 'lbl_azp_ibn_concept_id_azp_ibn_concept',
						tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
						tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
						tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_created . " AS 'lbl_azp_ibn_concept_m_date_created',
						tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_modified . " AS 'lbl_azp_ibn_concept_m_date_modified',
						tc_azp_ibn_concept." . d_azp_ibn_concept_m_description . " AS 'lbl_azp_ibn_concept_m_description',
						tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
						tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
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
						tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
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
					WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $var_id_client . "'
						AND tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " = '4'
				");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						$var_land_01 = $value['lbl_azp_ibn_concept_t_land_01'];
						$var_land_02 = $value['lbl_azp_ibn_concept_t_land_02'];
						$var_land_03 = $value['lbl_azp_ibn_concept_t_land_03'];
						$var_land_04 = $value['lbl_azp_ibn_concept_t_land_04'];
						$var_land_05 = $value['lbl_azp_ibn_concept_t_land_05'];
						$var_land_06 = $value['lbl_azp_ibn_concept_t_land_06'];
						$var_land_07 = $value['lbl_azp_ibn_concept_t_land_07'];
						$var_land_08 = $value['lbl_azp_ibn_concept_t_land_08'];
						$var_land_09 = $value['lbl_azp_ibn_concept_t_land_09'];
						$var_land_10 = $value['lbl_azp_ibn_concept_t_land_10'];
						$var_land_11 = $value['lbl_azp_ibn_concept_t_land_11'];
						$var_land_12 = $value['lbl_azp_ibn_concept_t_land_12'];
						$var_land_13 = $value['lbl_azp_ibn_concept_t_land_13'];
						$var_land_14 = $value['lbl_azp_ibn_concept_t_land_14'];
						$var_land_15 = $value['lbl_azp_ibn_concept_t_land_15'];
						$var_land_16 = $value['lbl_azp_ibn_concept_t_land_16'];
						$var_land_17 = $value['lbl_azp_ibn_concept_t_land_17'];
						$var_land_18 = $value['lbl_azp_ibn_concept_t_land_18'];
						$var_land_19 = $value['lbl_azp_ibn_concept_t_land_19'];
						$var_land_20 = $value['lbl_azp_ibn_concept_t_land_20'];
						$var_text_01 = $value['lbl_azp_ibn_concept_t_text_01'];
						$var_text_02 = $value['lbl_azp_ibn_concept_t_text_02'];
						$var_text_03 = $value['lbl_azp_ibn_concept_t_text_03'];
						$var_text_04 = $value['lbl_azp_ibn_concept_t_text_04'];
						$var_text_05 = $value['lbl_azp_ibn_concept_t_text_05'];
						$var_text_06 = $value['lbl_azp_ibn_concept_t_text_06'];
						$var_text_07 = $value['lbl_azp_ibn_concept_t_text_07'];
						$var_text_08 = $value['lbl_azp_ibn_concept_t_text_08'];
						$var_text_09 = $value['lbl_azp_ibn_concept_t_text_09'];
						$var_text_10 = $value['lbl_azp_ibn_concept_t_text_10'];
						$var_text_11 = $value['lbl_azp_ibn_concept_t_text_11'];
						$var_text_12 = $value['lbl_azp_ibn_concept_t_text_12'];
						$var_text_13 = $value['lbl_azp_ibn_concept_t_text_13'];
						$var_text_14 = $value['lbl_azp_ibn_concept_t_text_14'];
						$var_text_15 = $value['lbl_azp_ibn_concept_t_text_15'];
						$var_text_16 = $value['lbl_azp_ibn_concept_t_text_16'];
						$var_text_17 = $value['lbl_azp_ibn_concept_t_text_17'];
						$var_text_18 = $value['lbl_azp_ibn_concept_t_text_18'];
						$var_text_19 = $value['lbl_azp_ibn_concept_t_text_19'];
						$var_text_20 = $value['lbl_azp_ibn_concept_t_text_20'];
					endforeach;
				} else {
					$var_land_01 = '0'; $var_land_02 = '0'; $var_land_03 = '0'; $var_land_04 = '0'; $var_land_05 = '0';
					$var_land_06 = '0'; $var_land_07 = '0'; $var_land_08 = '0'; $var_land_09 = '0'; $var_land_10 = '0';
					$var_land_11 = '0'; $var_land_12 = '0'; $var_land_13 = '0'; $var_land_14 = '0'; $var_land_15 = '0';
					$var_land_16 = '0'; $var_land_17 = '0'; $var_land_18 = '0'; $var_land_19 = '0'; $var_land_20 = '0';
					#-------------------------------------------------------------------------#
					$var_text_01 = ''; $var_text_02 = ''; $var_text_03 = ''; $var_text_04 = ''; $var_text_05 = '';
					$var_text_06 = ''; $var_text_07 = ''; $var_text_08 = ''; $var_text_09 = ''; $var_text_10 = '';
					$var_text_11 = ''; $var_text_12 = ''; $var_text_13 = ''; $var_text_14 = ''; $var_text_15 = '';
					$var_text_16 = ''; $var_text_17 = ''; $var_text_18 = ''; $var_text_19 = ''; $var_text_20 = '';
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_01 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_01 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_01 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_02 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_02 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_02 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_03 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_03 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_03 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_04 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_04 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_04 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_05 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_05 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_05 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_06 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_06 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_06 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_07 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_07 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_07 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_08 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_08 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_08 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_09 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_09 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_09 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_10 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_10 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_10 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_11 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_11 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_11 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_12 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_12 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_12 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_13 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_13 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_13 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_14 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_14 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_14 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_15 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_15 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_15 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_16 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_16 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_16 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_17 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_17 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_17 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_18 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_18 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_18 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_19 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_19 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_19 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_20 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_20 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_20 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Control de validacion de variables y asignacion de valores a nuevas variables
						if ($var_index_01 != '') { $var_value_01 = $value[$var_index_01]; } else { $var_value_01 = ''; }
						if ($var_index_02 != '') { $var_value_02 = $value[$var_index_02]; } else { $var_value_02 = ''; }
						if ($var_index_03 != '') { $var_value_03 = $value[$var_index_03]; } else { $var_value_03 = ''; }
						if ($var_index_04 != '') { $var_value_04 = $value[$var_index_04]; } else { $var_value_04 = ''; }
						if ($var_index_05 != '') { $var_value_05 = $value[$var_index_05]; } else { $var_value_05 = ''; }
						if ($var_index_06 != '') { $var_value_06 = $value[$var_index_06]; } else { $var_value_06 = ''; }
						if ($var_index_07 != '') { $var_value_07 = $value[$var_index_07]; } else { $var_value_07 = ''; }
						if ($var_index_08 != '') { $var_value_08 = $value[$var_index_08]; } else { $var_value_08 = ''; }
						if ($var_index_09 != '') { $var_value_09 = $value[$var_index_09]; } else { $var_value_09 = ''; }
						if ($var_index_10 != '') { $var_value_10 = $value[$var_index_10]; } else { $var_value_10 = ''; }
						if ($var_index_11 != '') { $var_value_11 = $value[$var_index_11]; } else { $var_value_11 = ''; }
						if ($var_index_12 != '') { $var_value_12 = $value[$var_index_12]; } else { $var_value_12 = ''; }
						if ($var_index_13 != '') { $var_value_13 = $value[$var_index_13]; } else { $var_value_13 = ''; }
						if ($var_index_14 != '') { $var_value_14 = $value[$var_index_14]; } else { $var_value_14 = ''; }
						if ($var_index_15 != '') { $var_value_15 = $value[$var_index_15]; } else { $var_value_15 = ''; }
						if ($var_index_16 != '') { $var_value_16 = $value[$var_index_16]; } else { $var_value_16 = ''; }
						if ($var_index_17 != '') { $var_value_17 = $value[$var_index_17]; } else { $var_value_17 = ''; }
						if ($var_index_18 != '') { $var_value_18 = $value[$var_index_18]; } else { $var_value_18 = ''; }
						if ($var_index_19 != '') { $var_value_19 = $value[$var_index_19]; } else { $var_value_19 = ''; }
						if ($var_index_20 != '') { $var_value_20 = $value[$var_index_20]; } else { $var_value_20 = ''; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else { $var_idx_01 = $var_value_01; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else { $var_idx_02 = $var_value_02; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else { $var_idx_03 = $var_value_03; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else { $var_idx_04 = $var_value_04; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else { $var_idx_05 = $var_value_05; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else { $var_idx_06 = $var_value_06; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else { $var_idx_07 = $var_value_07; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else { $var_idx_08 = $var_value_08; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else { $var_idx_09 = $var_value_09; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else { $var_idx_10 = $var_value_10; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else { $var_idx_11 = $var_value_11; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else { $var_idx_12 = $var_value_12; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else { $var_idx_13 = $var_value_13; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else { $var_idx_14 = $var_value_14; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else { $var_idx_15 = $var_value_15; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else { $var_idx_16 = $var_value_16; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else { $var_idx_17 = $var_value_17; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else { $var_idx_18 = $var_value_18; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else { $var_idx_19 = $var_value_19; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else { $var_idx_20 = $var_value_20; }
						#-------------------------------------------------------------------------#
					endforeach;
				} else {
					$var_idx_01 = ''; $var_idx_02 = ''; $var_idx_03 = ''; $var_idx_04 = ''; $var_idx_05 = '';
					$var_idx_06 = ''; $var_idx_07 = ''; $var_idx_08 = ''; $var_idx_09 = ''; $var_idx_10 = '';
					$var_idx_11 = ''; $var_idx_12 = ''; $var_idx_13 = ''; $var_idx_14 = ''; $var_idx_15 = '';
					$var_idx_16 = ''; $var_idx_17 = ''; $var_idx_18 = ''; $var_idx_19 = ''; $var_idx_20 = '';
				}
				#-------------------------------------------------------------------------#
				$var_concept = '' .
					$var_text_01 . ' ' . $var_idx_01 . ' ' . $var_text_02 . ' ' . $var_idx_02 . ' ' .
					$var_text_03 . ' ' . $var_idx_03 . ' ' . $var_text_04 . ' ' . $var_idx_04 . ' ' .
					$var_text_05 . ' ' . $var_idx_05 . ' ' . $var_text_06 . ' ' . $var_idx_06 . ' ' .
					$var_text_07 . ' ' . $var_idx_07 . ' ' . $var_text_08 . ' ' . $var_idx_08 . ' ' .
					$var_text_09 . ' ' . $var_idx_09 . ' ' . $var_text_10 . ' ' . $var_idx_10 . ' ' .
					$var_text_11 . ' ' . $var_idx_11 . ' ' . $var_text_12 . ' ' . $var_idx_12 . ' ' .
					$var_text_13 . ' ' . $var_idx_13 . ' ' . $var_text_14 . ' ' . $var_idx_14 . ' ' .
					$var_text_15 . ' ' . $var_idx_15 . ' ' . $var_text_16 . ' ' . $var_idx_16 . ' ' .
					$var_text_17 . ' ' . $var_idx_17 . ' ' . $var_text_18 . ' ' . $var_idx_18 . ' ' .
					$var_text_19 . ' ' . $var_idx_19 . ' ' . $var_text_20 . ' ' . $var_idx_20;
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_warranty_t_concept => trim(preg_replace('/\s+/',' ', strtoupper($var_concept))),);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
					d_azp_ibn_warranty_m_deleted . " = '1' GROUP BY " . d_azp_ibn_warranty_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_warranty_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_warranty,
							d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
							d_azp_ibn_warranty_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_warranty_id_azp_ibn_warranty];
								$var_cedula2 = $value2[d_azp_ibn_warranty_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_warranty_t_acount => $var_union, d_azp_ibn_warranty_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $var_id2 . "'");
							endforeach;
						}
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT * FROM " . t_azp_ibn_warranty . " tc_azp_ibn_warranty
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_acount . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
					WHERE tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_temp . " = '2'
						AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
						AND tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_ibn_warranty_t_validate => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $value[d_azp_ibn_warranty_id_azp_ibn_warranty] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_warranty_t_validate => '0',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_m_temp . " = '2' AND " . d_azp_ibn_warranty_t_validate . " = ''");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_warranty_t_validate => '0',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_m_temp . " = '2' AND " . d_azp_ibn_warranty_t_validate . " IS NULL");
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_acount . " AS 'lbl_azp_ibn_warranty_t_acount',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel'
					FROM " . t_azp_ibn_warranty . " tc_azp_ibn_warranty
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_identification . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . "
					WHERE tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_temp . " = '2'
						AND tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_validate . " = '0'
						AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
						AND tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
					GROUP BY tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_acount . "
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_ibn_data_main_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_ibn_data_main_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_ibn_data_main_m_date_created => DATE_HOUR,
							d_azp_ibn_data_main_m_date_modified => DATE_HOUR,
							d_azp_ibn_data_main_m_deleted => '1',
							d_azp_ibn_data_main_m_description => '',
							d_azp_ibn_data_main_m_level => '2',
							d_azp_ibn_data_main_m_status => '1',
							d_azp_ibn_data_main_m_temp => '1',
							d_azp_ibn_data_main_t_acount => $value['lbl_azp_ibn_warranty_t_acount'],
							d_azp_ibn_data_main_t_city => $value['lbl_azp_ibn_data_main_t_city'],
							d_azp_ibn_data_main_t_code => $value['lbl_azp_ibn_data_main_t_code'],
							d_azp_ibn_data_main_t_consecutive => $value['lbl_azp_ibn_data_main_t_consecutive'],
							d_azp_ibn_data_main_t_data => $value['lbl_azp_ibn_data_main_t_data'],
							d_azp_ibn_data_main_t_department => $value['lbl_azp_ibn_data_main_t_department'],
							d_azp_ibn_data_main_t_full_name => $value['lbl_azp_ibn_data_main_t_full_name'],
							d_azp_ibn_data_main_t_identification => $value['lbl_azp_ibn_data_main_t_identification'],
							d_azp_ibn_data_main_t_image_camera => $value['lbl_azp_ibn_data_main_t_image_camera'],
							d_azp_ibn_data_main_t_image_furniture => $value['lbl_azp_ibn_data_main_t_image_furniture'],
							d_azp_ibn_data_main_t_image_property => $value['lbl_azp_ibn_data_main_t_image_property'],
							d_azp_ibn_data_main_t_image_vehicle => $value['lbl_azp_ibn_data_main_t_image_vehicle'],
							d_azp_ibn_data_main_t_image_warranty => $value['lbl_azp_ibn_data_main_t_image_warranty'],
							d_azp_ibn_data_main_t_nro_obligation => $value['lbl_azp_ibn_data_main_t_nro_obligation'],
							d_azp_ibn_data_main_t_policy_final => $value['lbl_azp_ibn_data_main_t_policy_final'],
							d_azp_ibn_data_main_t_policy_effective => $value['lbl_azp_ibn_data_main_t_policy_effective'],
							d_azp_ibn_data_main_t_policy_viability => $value['lbl_azp_ibn_data_main_t_policy_viability'],
							d_azp_ibn_data_main_t_policy_e_camera => $value['lbl_azp_ibn_data_main_t_policy_e_camera'],
							d_azp_ibn_data_main_t_policy_e_furniture => $value['lbl_azp_ibn_data_main_t_policy_e_furniture'],
							d_azp_ibn_data_main_t_policy_e_property => $value['lbl_azp_ibn_data_main_t_policy_e_property'],
							d_azp_ibn_data_main_t_policy_e_vehicle => $value['lbl_azp_ibn_data_main_t_policy_e_vehicle'],
							d_azp_ibn_data_main_t_policy_e_warranty => $value['lbl_azp_ibn_data_main_t_policy_e_warranty'],
							d_azp_ibn_data_main_t_policy_v_camera => $value['lbl_azp_ibn_data_main_t_policy_v_camera'],
							d_azp_ibn_data_main_t_policy_v_furniture => $value['lbl_azp_ibn_data_main_t_policy_v_furniture'],
							d_azp_ibn_data_main_t_policy_v_property => $value['lbl_azp_ibn_data_main_t_policy_v_property'],
							d_azp_ibn_data_main_t_policy_v_vehicle => $value['lbl_azp_ibn_data_main_t_policy_v_vehicle'],
							d_azp_ibn_data_main_t_policy_v_warranty => $value['lbl_azp_ibn_data_main_t_policy_v_warranty'],
							d_azp_ibn_data_main_w_document => $value['lbl_azp_ibn_data_main_w_document'],
							d_azp_ibn_data_main_w_error => $value['lbl_azp_ibn_data_main_w_error'],
							d_azp_ibn_data_main_w_folder => $value['lbl_azp_ibn_data_main_w_folder'],
							d_azp_ibn_data_main_w_name => $value['lbl_azp_ibn_data_main_w_name'],
							d_azp_ibn_data_main_w_route => $value['lbl_azp_ibn_data_main_w_route'],
							d_azp_ibn_data_main_w_size => $value['lbl_azp_ibn_data_main_w_size'],
							d_azp_ibn_data_main_w_tmp_name => $value['lbl_azp_ibn_data_main_w_tmp_name'],
							d_azp_ibn_data_main_w_type => $value['lbl_azp_ibn_data_main_w_type'],
							d_azp_ibn_data_main_v_id_azp_ibn_client => $value['lbl_azp_ibn_data_main_v_id_azp_ibn_client'],
							d_azp_ibn_data_main_v_id_azp_ibn_control_panel => $value['lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel'],
						);
						# Insertar valores en la tabla segun estructura de la tabla
						$this->db->insert(t_azp_ibn_data_main, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_data_main,
					d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "' AND " .
					d_azp_ibn_data_main_m_deleted . " = '1' GROUP BY " . d_azp_ibn_data_main_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_data_main_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_data_main,
							d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "' AND " .
							d_azp_ibn_data_main_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_data_main_id_azp_ibn_data_main];
								$var_cedula2 = $value2[d_azp_ibn_data_main_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_data_main_t_acount => $var_union, d_azp_ibn_data_main_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_data_main, $var_array, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $var_id2 . "'");
							endforeach;
						}

					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_warranty_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_m_temp . " = '2' ");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.', 'register' => $empty_id);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_warranty_multiple(array $data) {
			try {
				#-------------------------------------------------------------------------#
				/*if (!isset($data['field_up_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
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
				}*/
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_warranty_multiple(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_warranty_multiple($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_ck = $this->db->scape($data['field_tb_ck']);
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array = explode(",", $empty_ck);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_array as $key => $value) { $value; }
				#-------------------------------------------------------------------------#
				$var_id = $data['field_tb_id'];
				$var_ibn_state = $data['field_tb_ibn_state'];
				$var_creditor = $data['field_tb_creditor'];
				$var_well_name = $data['field_tb_well_name'];
				$var_well_detail = $data['field_tb_well_detail'];
				$var_value = $data['field_tb_value'];
				$var_date = $data['field_tb_date'];
				#-------------------------------------------------------------------------#
				# Recorrer los datos uno por uno segun los seleccionados
				for ($i = 0; $i < count($var_id); $i++) {
					$empty_id = $this->db->scape($var_id[$i]);
					$empty_ibn_state = $this->db->scape($var_ibn_state[$i]);
					$empty_creditor = $this->db->scape($var_creditor[$i]);
					$empty_well_name = $this->db->scape($var_well_name[$i]);
					$empty_well_detail = $this->db->scape($var_well_detail[$i]);
					$empty_value = $this->db->scape($var_value[$i]);
					$empty_date = $this->db->scape($var_date[$i]);
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_state, d_azp_ibn_state_t_name . " = '" . $empty_ibn_state . "' AND " .
						d_azp_ibn_state_v_id_azp_ibn_module . " = '4'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_state = $value[d_azp_ibn_state_id_azp_ibn_state];
						endforeach;
					} else { $empty_ibn_state = 4; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_select = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_select) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_select as $key_sql_select):
							$var_array = array(
								d_azs_ibn_warranty_m_by_created => $_SESSION[SESS_APP_ID],
								d_azs_ibn_warranty_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azs_ibn_warranty_m_date_created => DATE_HOUR,
								d_azs_ibn_warranty_m_date_modified => DATE_HOUR,
								d_azs_ibn_warranty_m_deleted => $key_sql_select[d_azp_ibn_warranty_m_deleted],
								d_azs_ibn_warranty_m_description => $key_sql_select[d_azp_ibn_warranty_m_description],
								d_azs_ibn_warranty_m_level => $key_sql_select[d_azp_ibn_warranty_m_level],
								d_azs_ibn_warranty_m_status => $key_sql_select[d_azp_ibn_warranty_m_status],
								d_azs_ibn_warranty_m_temp => $key_sql_select[d_azp_ibn_warranty_m_temp],
								d_azs_ibn_warranty_t_comment_legal => strtoupper($key_sql_select[d_azp_ibn_warranty_t_comment_legal]),
								d_azs_ibn_warranty_t_concept => strtoupper($key_sql_select[d_azp_ibn_warranty_t_concept]),
								d_azs_ibn_warranty_t_consecutive => strtoupper($key_sql_select[d_azp_ibn_warranty_t_consecutive]),
								d_azs_ibn_warranty_t_creditor => strtoupper($key_sql_select[d_azp_ibn_warranty_t_creditor]),
								d_azs_ibn_warranty_t_date => strtoupper($key_sql_select[d_azp_ibn_warranty_t_date]),
								d_azs_ibn_warranty_t_full_name => strtoupper($key_sql_select[d_azp_ibn_warranty_t_full_name]),
								d_azs_ibn_warranty_t_identification => strtoupper($key_sql_select[d_azp_ibn_warranty_t_identification]),
								d_azs_ibn_warranty_t_limitation => strtoupper($key_sql_select[d_azp_ibn_warranty_t_limitation]),
								d_azs_ibn_warranty_t_observation => strtoupper($key_sql_select[d_azp_ibn_warranty_t_observation]),
								d_azs_ibn_warranty_t_well_detail => strtoupper($key_sql_select[d_azp_ibn_warranty_t_well_detail]),
								d_azs_ibn_warranty_t_well_name => strtoupper($key_sql_select[d_azp_ibn_warranty_t_well_name]),
								d_azs_ibn_warranty_t_value => strtoupper($key_sql_select[d_azp_ibn_warranty_t_value]),
								d_azs_ibn_warranty_u_ibn_control_panel => strtoupper($key_sql_select[d_azp_ibn_warranty_v_id_azp_ibn_control_panel]),
								d_azs_ibn_warranty_u_ibn_state => strtoupper($key_sql_select[d_azp_ibn_warranty_v_id_azp_ibn_state]),
								d_azs_ibn_warranty_v_id_azp_ibn_warranty => $empty_id,
							);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->insert(t_azs_ibn_warranty, $var_array);
						endforeach;
					}
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_ibn_warranty_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_ibn_warranty_m_date_modified => DATE_HOUR,
						//d_azp_ibn_warranty_m_description => $empty_description,
						//d_azp_ibn_warranty_m_status => $empty_state,
						//d_azp_ibn_warranty_t_comment_legal => strtoupper($empty_comment_legal),
						//d_azp_ibn_warranty_t_concept => strtoupper($empty_concept),
						//d_azp_ibn_warranty_t_consecutive => strtoupper($empty_consecutive),
						d_azp_ibn_warranty_t_creditor => strtoupper($empty_creditor),
						d_azp_ibn_warranty_t_date => strtoupper($empty_date),
						//d_azp_ibn_warranty_t_full_name => strtoupper($empty_full_name),
						//d_azp_ibn_warranty_t_identification => strtoupper($empty_identification),
						//d_azp_ibn_warranty_t_limitation => strtoupper($empty_limitation),
						//d_azp_ibn_warranty_t_observation => strtoupper($empty_observation),
						d_azp_ibn_warranty_t_well_detail => strtoupper($empty_well_detail),
						d_azp_ibn_warranty_t_well_name => strtoupper($empty_well_name),
						d_azp_ibn_warranty_t_value => strtoupper($empty_value),
						//d_azp_ibn_warranty_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
						d_azp_ibn_warranty_v_id_azp_ibn_state => $empty_ibn_state,
					);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
					#-------------------------------------------------------------------------#
					$var_rg_cf_2 = 0; $var_rg_cf_3 = 0;
					$var_pc_one = 'NEGATIVO'; $var_pc_two = 'NEGATIVO'; $var_pc_three = 'NEGATIVO'; $var_rg_cf_pos = 'POSITIVO'; $var_rg_cf_neg = 'NEGATIVO';
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_rg_cp_id = $value[d_azp_ibn_warranty_v_id_azp_ibn_control_panel];

							$var_rg_sta = $value[d_azp_ibn_warranty_v_id_azp_ibn_state];
						endforeach;
					} else { $var_rg_cp_id = 0; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $var_rg_cp_id . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_rg_cl_id = $value[d_azp_ibn_control_panel_v_id_azp_ibn_client];
						endforeach;
					} else { $var_rg_cl_id = 0; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					//$var_sql = $this->db->select('*', t_azp_ibn_regulation, d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $var_rg_cl_id . "' AND " . d_azp_ibn_regulation_t_selector . " = 'SI'");
					$var_sql = $this->db->query("
						SELECT
							tc_azp_ibn_regulation." . d_azp_ibn_regulation_id_azp_ibn_regulation . " AS 'lbl_azp_ibn_regulation_id_azp_ibn_regulation',
							tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
							tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
							tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_created . " AS 'lbl_azp_ibn_regulation_m_date_created',
							tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_modified . " AS 'lbl_azp_ibn_regulation_m_date_modified',
							tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_description . " AS 'lbl_azp_ibn_regulation_m_description',
							tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
							tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
							tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " AS 'lbl_azp_ibn_regulation_t_selector',
							tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . " AS 'lbl_azp_ibn_calification_id_azp_ibn_calification',
							tc_azp_ibn_calification." . d_azp_ibn_calification_t_concept . " AS 'lbl_azp_ibn_calification_t_concept',
							tc_azp_ibn_calification." . d_azp_ibn_calification_t_determination . " AS 'lbl_azp_ibn_calification_t_determination',
							tc_azp_ibn_calification." . d_azp_ibn_calification_t_principal . " AS 'lbl_azp_ibn_calification_t_principal',
							tc_azp_ibn_calification." . d_azp_ibn_calification_t_secondary . " AS 'lbl_azp_ibn_calification_t_secondary',
							tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name'
						FROM " . t_azp_ibn_regulation . " tc_azp_ibn_regulation
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_user . " tc_azp_user_created
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_created . "
								= tc_azp_user_created." . d_azp_user_id_azp_user . "
						INNER JOIN " . t_azp_user . " tc_azp_user_modified
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_modified . "
								= tc_azp_user_modified." . d_azp_user_id_azp_user . "
						INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_level . "
								= tc_azp_sys_level." . d_azp_sys_level_t_value . "
						INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . "
								= tc_azp_sys_state." . d_azp_sys_state_t_value . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
								= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
							ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
								= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
						-- ---------------------------------------------------------------
						WHERE tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_deleted . " = '1'
							AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . " = '1'
							AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " = 'SI'
							AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $var_rg_cl_id . "'
					");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_rg_cf_id = $value['lbl_azp_ibn_calification_id_azp_ibn_calification'];
							$var_rg_cf_pos = $value['lbl_azp_ibn_calification_t_principal'];
							$var_rg_cf_neg = $value['lbl_azp_ibn_calification_t_secondary'];
							$var_pc_one = $var_rg_cf_neg; $var_pc_two = $var_rg_cf_neg; $var_pc_three = $var_rg_cf_neg;
							# Control de validacion de variables y asignacion de valores a nuevas variables
							if ($var_rg_cf_id == 2) { $var_rg_cf_2 = 2; } else if ($var_rg_cf_id == 3) { $var_rg_cf_3 = 3; } else { $var_rg_cf_2 = 0; $var_rg_cf_3 = 0; }
						endforeach;
					}
					#-------------------------------------------------------------------------#
					if ($var_rg_cf_2 == 2) { if ($var_rg_sta == '16') { $var_pc_two = $var_rg_cf_pos; } else { $var_pc_two = $var_rg_cf_neg; } } else { $var_pc_two = $var_rg_cf_neg; }
					if ($var_rg_cf_3 == 3) { if ($var_rg_sta == '16') { $var_pc_three = $var_rg_cf_pos; } else { $var_pc_three = $var_rg_cf_neg; } } else { $var_pc_three = $var_rg_cf_neg; }
					#-------------------------------------------------------------------------#
					if ($var_pc_two == $var_rg_cf_neg) { $var_policy_viability = $var_rg_cf_neg; } else if ($var_pc_two == $var_rg_cf_pos) { $var_policy_viability = $var_rg_cf_pos; }
					#-------------------------------------------------------------------------#
					if ($var_pc_three == $var_rg_cf_neg) { $var_policy_effective = $var_rg_cf_neg; } else if ($var_pc_three == $var_rg_cf_pos) { $var_policy_effective = $var_rg_cf_pos; }
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_ibn_warranty_t_policy_effective => $var_policy_effective,);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_ibn_warranty_t_policy_viability => $var_policy_viability,);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_ibn_control_panel = $value[d_azp_ibn_warranty_v_id_azp_ibn_control_panel];
						endforeach;
					} else { $var_ibn_control_panel = 0; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_id_client = $value[d_azp_ibn_control_panel_v_id_azp_ibn_client];
						endforeach;
					} else { $var_id_client = 0; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->query("
						SELECT
							tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " AS 'lbl_azp_ibn_concept_id_azp_ibn_concept',
							tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
							tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
							tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_created . " AS 'lbl_azp_ibn_concept_m_date_created',
							tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_modified . " AS 'lbl_azp_ibn_concept_m_date_modified',
							tc_azp_ibn_concept." . d_azp_ibn_concept_m_description . " AS 'lbl_azp_ibn_concept_m_description',
							tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
							tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
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
							tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
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
						WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $var_id_client . "'
							AND tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " = '4'
					");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							$var_land_01 = $value['lbl_azp_ibn_concept_t_land_01'];
							$var_land_02 = $value['lbl_azp_ibn_concept_t_land_02'];
							$var_land_03 = $value['lbl_azp_ibn_concept_t_land_03'];
							$var_land_04 = $value['lbl_azp_ibn_concept_t_land_04'];
							$var_land_05 = $value['lbl_azp_ibn_concept_t_land_05'];
							$var_land_06 = $value['lbl_azp_ibn_concept_t_land_06'];
							$var_land_07 = $value['lbl_azp_ibn_concept_t_land_07'];
							$var_land_08 = $value['lbl_azp_ibn_concept_t_land_08'];
							$var_land_09 = $value['lbl_azp_ibn_concept_t_land_09'];
							$var_land_10 = $value['lbl_azp_ibn_concept_t_land_10'];
							$var_land_11 = $value['lbl_azp_ibn_concept_t_land_11'];
							$var_land_12 = $value['lbl_azp_ibn_concept_t_land_12'];
							$var_land_13 = $value['lbl_azp_ibn_concept_t_land_13'];
							$var_land_14 = $value['lbl_azp_ibn_concept_t_land_14'];
							$var_land_15 = $value['lbl_azp_ibn_concept_t_land_15'];
							$var_land_16 = $value['lbl_azp_ibn_concept_t_land_16'];
							$var_land_17 = $value['lbl_azp_ibn_concept_t_land_17'];
							$var_land_18 = $value['lbl_azp_ibn_concept_t_land_18'];
							$var_land_19 = $value['lbl_azp_ibn_concept_t_land_19'];
							$var_land_20 = $value['lbl_azp_ibn_concept_t_land_20'];
							$var_text_01 = $value['lbl_azp_ibn_concept_t_text_01'];
							$var_text_02 = $value['lbl_azp_ibn_concept_t_text_02'];
							$var_text_03 = $value['lbl_azp_ibn_concept_t_text_03'];
							$var_text_04 = $value['lbl_azp_ibn_concept_t_text_04'];
							$var_text_05 = $value['lbl_azp_ibn_concept_t_text_05'];
							$var_text_06 = $value['lbl_azp_ibn_concept_t_text_06'];
							$var_text_07 = $value['lbl_azp_ibn_concept_t_text_07'];
							$var_text_08 = $value['lbl_azp_ibn_concept_t_text_08'];
							$var_text_09 = $value['lbl_azp_ibn_concept_t_text_09'];
							$var_text_10 = $value['lbl_azp_ibn_concept_t_text_10'];
							$var_text_11 = $value['lbl_azp_ibn_concept_t_text_11'];
							$var_text_12 = $value['lbl_azp_ibn_concept_t_text_12'];
							$var_text_13 = $value['lbl_azp_ibn_concept_t_text_13'];
							$var_text_14 = $value['lbl_azp_ibn_concept_t_text_14'];
							$var_text_15 = $value['lbl_azp_ibn_concept_t_text_15'];
							$var_text_16 = $value['lbl_azp_ibn_concept_t_text_16'];
							$var_text_17 = $value['lbl_azp_ibn_concept_t_text_17'];
							$var_text_18 = $value['lbl_azp_ibn_concept_t_text_18'];
							$var_text_19 = $value['lbl_azp_ibn_concept_t_text_19'];
							$var_text_20 = $value['lbl_azp_ibn_concept_t_text_20'];
						endforeach;
					} else {
						$var_land_01 = '0'; $var_land_02 = '0'; $var_land_03 = '0'; $var_land_04 = '0'; $var_land_05 = '0';
						$var_land_06 = '0'; $var_land_07 = '0'; $var_land_08 = '0'; $var_land_09 = '0'; $var_land_10 = '0';
						$var_land_11 = '0'; $var_land_12 = '0'; $var_land_13 = '0'; $var_land_14 = '0'; $var_land_15 = '0';
						$var_land_16 = '0'; $var_land_17 = '0'; $var_land_18 = '0'; $var_land_19 = '0'; $var_land_20 = '0';
						#-------------------------------------------------------------------------#
						$var_text_01 = ''; $var_text_02 = ''; $var_text_03 = ''; $var_text_04 = ''; $var_text_05 = '';
						$var_text_06 = ''; $var_text_07 = ''; $var_text_08 = ''; $var_text_09 = ''; $var_text_10 = '';
						$var_text_11 = ''; $var_text_12 = ''; $var_text_13 = ''; $var_text_14 = ''; $var_text_15 = '';
						$var_text_16 = ''; $var_text_17 = ''; $var_text_18 = ''; $var_text_19 = ''; $var_text_20 = '';
					}
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_01 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_01 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_01 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_02 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_02 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_02 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_03 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_03 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_03 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_04 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_04 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_04 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_05 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_05 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_05 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_06 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_06 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_06 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_07 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_07 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_07 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_08 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_08 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_08 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_09 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_09 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_09 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_10 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_10 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_10 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_11 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_11 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_11 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_12 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_12 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_12 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_13 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_13 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_13 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_14 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_14 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_14 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_15 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_15 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_15 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_16 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_16 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_16 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_17 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_17 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_17 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_18 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_18 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_18 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_19 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_19 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_19 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_20 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_20 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_20 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Control de validacion de variables y asignacion de valores a nuevas variables
							if ($var_index_01 != '') { $var_value_01 = $value[$var_index_01]; } else { $var_value_01 = ''; }
							if ($var_index_02 != '') { $var_value_02 = $value[$var_index_02]; } else { $var_value_02 = ''; }
							if ($var_index_03 != '') { $var_value_03 = $value[$var_index_03]; } else { $var_value_03 = ''; }
							if ($var_index_04 != '') { $var_value_04 = $value[$var_index_04]; } else { $var_value_04 = ''; }
							if ($var_index_05 != '') { $var_value_05 = $value[$var_index_05]; } else { $var_value_05 = ''; }
							if ($var_index_06 != '') { $var_value_06 = $value[$var_index_06]; } else { $var_value_06 = ''; }
							if ($var_index_07 != '') { $var_value_07 = $value[$var_index_07]; } else { $var_value_07 = ''; }
							if ($var_index_08 != '') { $var_value_08 = $value[$var_index_08]; } else { $var_value_08 = ''; }
							if ($var_index_09 != '') { $var_value_09 = $value[$var_index_09]; } else { $var_value_09 = ''; }
							if ($var_index_10 != '') { $var_value_10 = $value[$var_index_10]; } else { $var_value_10 = ''; }
							if ($var_index_11 != '') { $var_value_11 = $value[$var_index_11]; } else { $var_value_11 = ''; }
							if ($var_index_12 != '') { $var_value_12 = $value[$var_index_12]; } else { $var_value_12 = ''; }
							if ($var_index_13 != '') { $var_value_13 = $value[$var_index_13]; } else { $var_value_13 = ''; }
							if ($var_index_14 != '') { $var_value_14 = $value[$var_index_14]; } else { $var_value_14 = ''; }
							if ($var_index_15 != '') { $var_value_15 = $value[$var_index_15]; } else { $var_value_15 = ''; }
							if ($var_index_16 != '') { $var_value_16 = $value[$var_index_16]; } else { $var_value_16 = ''; }
							if ($var_index_17 != '') { $var_value_17 = $value[$var_index_17]; } else { $var_value_17 = ''; }
							if ($var_index_18 != '') { $var_value_18 = $value[$var_index_18]; } else { $var_value_18 = ''; }
							if ($var_index_19 != '') { $var_value_19 = $value[$var_index_19]; } else { $var_value_19 = ''; }
							if ($var_index_20 != '') { $var_value_20 = $value[$var_index_20]; } else { $var_value_20 = ''; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_01 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_01 = ''; }
							} else { $var_idx_01 = $var_value_01; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_02 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_02 = ''; }
							} else { $var_idx_02 = $var_value_02; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_03 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_03 = ''; }
							} else { $var_idx_03 = $var_value_03; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_04 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_04 = ''; }
							} else { $var_idx_04 = $var_value_04; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_05 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_05 = ''; }
							} else { $var_idx_05 = $var_value_05; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_06 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_06 = ''; }
							} else { $var_idx_06 = $var_value_06; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_07 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_07 = ''; }
							} else { $var_idx_07 = $var_value_07; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_08 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_08 = ''; }
							} else { $var_idx_08 = $var_value_08; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_09 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_09 = ''; }
							} else { $var_idx_09 = $var_value_09; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_10 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_10 = ''; }
							} else { $var_idx_10 = $var_value_10; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_11 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_11 = ''; }
							} else { $var_idx_11 = $var_value_11; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_12 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_12 = ''; }
							} else { $var_idx_12 = $var_value_12; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_13 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_13 = ''; }
							} else { $var_idx_13 = $var_value_13; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_14 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_14 = ''; }
							} else { $var_idx_14 = $var_value_14; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_15 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_15 = ''; }
							} else { $var_idx_15 = $var_value_15; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_16 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_16 = ''; }
							} else { $var_idx_16 = $var_value_16; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_17 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_17 = ''; }
							} else { $var_idx_17 = $var_value_17; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_18 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_18 = ''; }
							} else { $var_idx_18 = $var_value_18; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_19 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_19 = ''; }
							} else { $var_idx_19 = $var_value_19; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_20 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_20 = ''; }
							} else { $var_idx_20 = $var_value_20; }
							#-------------------------------------------------------------------------#
						endforeach;
					} else {
						$var_idx_01 = ''; $var_idx_02 = ''; $var_idx_03 = ''; $var_idx_04 = ''; $var_idx_05 = '';
						$var_idx_06 = ''; $var_idx_07 = ''; $var_idx_08 = ''; $var_idx_09 = ''; $var_idx_10 = '';
						$var_idx_11 = ''; $var_idx_12 = ''; $var_idx_13 = ''; $var_idx_14 = ''; $var_idx_15 = '';
						$var_idx_16 = ''; $var_idx_17 = ''; $var_idx_18 = ''; $var_idx_19 = ''; $var_idx_20 = '';
					}
					#-------------------------------------------------------------------------#
					$var_concept = '' .
						$var_text_01 . ' ' . $var_idx_01 . ' ' . $var_text_02 . ' ' . $var_idx_02 . ' ' .
						$var_text_03 . ' ' . $var_idx_03 . ' ' . $var_text_04 . ' ' . $var_idx_04 . ' ' .
						$var_text_05 . ' ' . $var_idx_05 . ' ' . $var_text_06 . ' ' . $var_idx_06 . ' ' .
						$var_text_07 . ' ' . $var_idx_07 . ' ' . $var_text_08 . ' ' . $var_idx_08 . ' ' .
						$var_text_09 . ' ' . $var_idx_09 . ' ' . $var_text_10 . ' ' . $var_idx_10 . ' ' .
						$var_text_11 . ' ' . $var_idx_11 . ' ' . $var_text_12 . ' ' . $var_idx_12 . ' ' .
						$var_text_13 . ' ' . $var_idx_13 . ' ' . $var_text_14 . ' ' . $var_idx_14 . ' ' .
						$var_text_15 . ' ' . $var_idx_15 . ' ' . $var_text_16 . ' ' . $var_idx_16 . ' ' .
						$var_text_17 . ' ' . $var_idx_17 . ' ' . $var_text_18 . ' ' . $var_idx_18 . ' ' .
						$var_text_19 . ' ' . $var_idx_19 . ' ' . $var_text_20 . ' ' . $var_idx_20;
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_ibn_warranty_t_concept => trim(preg_replace('/\s+/',' ', strtoupper($var_concept))),);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				}
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
					d_azp_ibn_warranty_m_deleted . " = '1' GROUP BY " . d_azp_ibn_warranty_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_warranty_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_warranty,
							d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
							d_azp_ibn_warranty_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_warranty_id_azp_ibn_warranty];
								$var_cedula2 = $value2[d_azp_ibn_warranty_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_warranty_t_acount => $var_union, d_azp_ibn_warranty_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $var_id2 . "'");
							endforeach;
						}

					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_warranty_plus(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_plus'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_plus']);
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
				$sql_id = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está duplicando no se encuentra registrado.');
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
		final public function sql_azp_ibn_warranty_plus(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_warranty_plus($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_plus']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql):
						$var_control = $key_sql[d_azp_ibn_warranty_v_id_azp_ibn_control_panel];
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_ibn_warranty_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_ibn_warranty_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_ibn_warranty_m_date_created => DATE_HOUR,
							d_azp_ibn_warranty_m_date_modified => DATE_HOUR,
							d_azp_ibn_warranty_m_deleted => $key_sql[d_azp_ibn_warranty_m_deleted],
							d_azp_ibn_warranty_m_description => $key_sql[d_azp_ibn_warranty_m_description],
							d_azp_ibn_warranty_m_level => $key_sql[d_azp_ibn_warranty_m_level],
							d_azp_ibn_warranty_m_status => $key_sql[d_azp_ibn_warranty_m_status],
							d_azp_ibn_warranty_m_temp => '2',
							d_azp_ibn_warranty_t_validate => '0',
							d_azp_ibn_warranty_t_comment_legal => '',
							d_azp_ibn_warranty_t_concept => '',
							d_azp_ibn_warranty_t_consecutive => $key_sql[d_azp_ibn_warranty_t_consecutive],
							d_azp_ibn_warranty_t_creditor => '',
							d_azp_ibn_warranty_t_date => '',
							d_azp_ibn_warranty_t_full_name => $key_sql[d_azp_ibn_warranty_t_full_name],
							d_azp_ibn_warranty_t_identification => $key_sql[d_azp_ibn_warranty_t_identification],
							d_azp_ibn_warranty_t_observation => '',
							d_azp_ibn_warranty_t_well_detail => '',
							d_azp_ibn_warranty_t_well_name => '',
							d_azp_ibn_warranty_t_value => '',
							d_azp_ibn_warranty_v_id_azp_ibn_control_panel => $key_sql[d_azp_ibn_warranty_v_id_azp_ibn_control_panel],
							d_azp_ibn_warranty_v_id_azp_ibn_state => $key_sql[d_azp_ibn_warranty_v_id_azp_ibn_state],
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azp_ibn_warranty, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
					d_azp_ibn_warranty_m_deleted . " = '1' GROUP BY " . d_azp_ibn_warranty_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_warranty_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_warranty,
							d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
							d_azp_ibn_warranty_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_warranty_id_azp_ibn_warranty];
								$var_cedula2 = $value2[d_azp_ibn_warranty_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_warranty_t_acount => $var_union, d_azp_ibn_warranty_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $var_id2 . "'");
							endforeach;
						}
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT * FROM " . t_azp_ibn_warranty . " tc_azp_ibn_warranty
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_acount . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
					WHERE tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_temp . " = '2'
						AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $var_control . "'
						AND tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "'
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_ibn_warranty_t_validate => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $value[d_azp_ibn_warranty_id_azp_ibn_warranty] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_warranty_t_validate => '0',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_m_temp . " = '2' AND " . d_azp_ibn_warranty_t_validate . " = ''");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_warranty_t_validate => '0',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_m_temp . " = '2' AND " . d_azp_ibn_warranty_t_validate . " IS NULL");
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_acount . " AS 'lbl_azp_ibn_warranty_t_acount',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel'
					FROM " . t_azp_ibn_warranty . " tc_azp_ibn_warranty
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						ON tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_identification . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . "
					WHERE tc_azp_ibn_warranty." . d_azp_ibn_warranty_m_temp . " = '2'
						AND tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_validate . " = '0'
						AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $var_control . "'
						AND tc_azp_ibn_warranty." . d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "'
					GROUP BY tc_azp_ibn_warranty." . d_azp_ibn_warranty_t_acount . "
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_ibn_data_main_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_ibn_data_main_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_ibn_data_main_m_date_created => DATE_HOUR,
							d_azp_ibn_data_main_m_date_modified => DATE_HOUR,
							d_azp_ibn_data_main_m_deleted => '1',
							d_azp_ibn_data_main_m_description => '',
							d_azp_ibn_data_main_m_level => '2',
							d_azp_ibn_data_main_m_status => '1',
							d_azp_ibn_data_main_m_temp => '1',
							d_azp_ibn_data_main_t_acount => $value['lbl_azp_ibn_warranty_t_acount'],
							d_azp_ibn_data_main_t_city => $value['lbl_azp_ibn_data_main_t_city'],
							d_azp_ibn_data_main_t_code => $value['lbl_azp_ibn_data_main_t_code'],
							d_azp_ibn_data_main_t_consecutive => $value['lbl_azp_ibn_data_main_t_consecutive'],
							d_azp_ibn_data_main_t_data => $value['lbl_azp_ibn_data_main_t_data'],
							d_azp_ibn_data_main_t_department => $value['lbl_azp_ibn_data_main_t_department'],
							d_azp_ibn_data_main_t_full_name => $value['lbl_azp_ibn_data_main_t_full_name'],
							d_azp_ibn_data_main_t_identification => $value['lbl_azp_ibn_data_main_t_identification'],
							d_azp_ibn_data_main_t_image_camera => $value['lbl_azp_ibn_data_main_t_image_camera'],
							d_azp_ibn_data_main_t_image_furniture => $value['lbl_azp_ibn_data_main_t_image_furniture'],
							d_azp_ibn_data_main_t_image_property => $value['lbl_azp_ibn_data_main_t_image_property'],
							d_azp_ibn_data_main_t_image_vehicle => $value['lbl_azp_ibn_data_main_t_image_vehicle'],
							d_azp_ibn_data_main_t_image_warranty => $value['lbl_azp_ibn_data_main_t_image_warranty'],
							d_azp_ibn_data_main_t_nro_obligation => $value['lbl_azp_ibn_data_main_t_nro_obligation'],
							d_azp_ibn_data_main_t_policy_final => $value['lbl_azp_ibn_data_main_t_policy_final'],
							d_azp_ibn_data_main_t_policy_effective => $value['lbl_azp_ibn_data_main_t_policy_effective'],
							d_azp_ibn_data_main_t_policy_viability => $value['lbl_azp_ibn_data_main_t_policy_viability'],
							d_azp_ibn_data_main_t_policy_e_camera => $value['lbl_azp_ibn_data_main_t_policy_e_camera'],
							d_azp_ibn_data_main_t_policy_e_furniture => $value['lbl_azp_ibn_data_main_t_policy_e_furniture'],
							d_azp_ibn_data_main_t_policy_e_property => $value['lbl_azp_ibn_data_main_t_policy_e_property'],
							d_azp_ibn_data_main_t_policy_e_vehicle => $value['lbl_azp_ibn_data_main_t_policy_e_vehicle'],
							d_azp_ibn_data_main_t_policy_e_warranty => $value['lbl_azp_ibn_data_main_t_policy_e_warranty'],
							d_azp_ibn_data_main_t_policy_v_camera => $value['lbl_azp_ibn_data_main_t_policy_v_camera'],
							d_azp_ibn_data_main_t_policy_v_furniture => $value['lbl_azp_ibn_data_main_t_policy_v_furniture'],
							d_azp_ibn_data_main_t_policy_v_property => $value['lbl_azp_ibn_data_main_t_policy_v_property'],
							d_azp_ibn_data_main_t_policy_v_vehicle => $value['lbl_azp_ibn_data_main_t_policy_v_vehicle'],
							d_azp_ibn_data_main_t_policy_v_warranty => $value['lbl_azp_ibn_data_main_t_policy_v_warranty'],
							d_azp_ibn_data_main_w_document => $value['lbl_azp_ibn_data_main_w_document'],
							d_azp_ibn_data_main_w_error => $value['lbl_azp_ibn_data_main_w_error'],
							d_azp_ibn_data_main_w_folder => $value['lbl_azp_ibn_data_main_w_folder'],
							d_azp_ibn_data_main_w_name => $value['lbl_azp_ibn_data_main_w_name'],
							d_azp_ibn_data_main_w_route => $value['lbl_azp_ibn_data_main_w_route'],
							d_azp_ibn_data_main_w_size => $value['lbl_azp_ibn_data_main_w_size'],
							d_azp_ibn_data_main_w_tmp_name => $value['lbl_azp_ibn_data_main_w_tmp_name'],
							d_azp_ibn_data_main_w_type => $value['lbl_azp_ibn_data_main_w_type'],
							d_azp_ibn_data_main_v_id_azp_ibn_client => $value['lbl_azp_ibn_data_main_v_id_azp_ibn_client'],
							d_azp_ibn_data_main_v_id_azp_ibn_control_panel => $value['lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel'],
						);
						# Insertar valores en la tabla segun estructura de la tabla
						$this->db->insert(t_azp_ibn_data_main, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_data_main,
					d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
					d_azp_ibn_data_main_m_deleted . " = '1' GROUP BY " . d_azp_ibn_data_main_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_data_main_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_data_main,
							d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
							d_azp_ibn_data_main_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_data_main_id_azp_ibn_data_main];
								$var_cedula2 = $value2[d_azp_ibn_data_main_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_data_main_t_acount => $var_union, d_azp_ibn_data_main_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_data_main, $var_array, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $var_id2 . "'");
							endforeach;
						}

					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_warranty_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_m_temp . " = '2' ");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro duplicado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_warranty_fl_remove(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_fl_remove'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_fl_remove']);
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
				$sql_id = $this->db->select('*', t_azp_ibn_capture, d_azp_ibn_capture_id_azp_ibn_capture . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('<b>Error:</b> El registro que está removiendo no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_ibn_capture, d_azp_ibn_capture_id_azp_ibn_capture . " = '" . $empty_id . "' AND " . d_azp_ibn_capture_m_deleted . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_id) { foreach ($sql_id as $key => $value): throw new Exception('<b>Error:</b> El registro que está procesando ya se encuentra removido.'); endforeach; }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_ibn_capture, d_azp_ibn_capture_id_azp_ibn_capture . " = '" . $empty_id . "' AND " . d_azp_ibn_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_capture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_capture, d_azp_ibn_capture_id_azp_ibn_capture . " = '" . $empty_id . "' AND " . d_azp_ibn_capture_m_level . " = '2'");
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
		final public function sql_azp_ibn_warranty_fl_remove(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_warranty_fl_remove($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_fl_remove']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_capture_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_capture, $var_array, d_azp_ibn_capture_id_azp_ibn_capture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_warranty_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "' AND " . d_azp_ibn_warranty_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "' AND " . d_azp_ibn_warranty_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_warranty_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "' AND " . d_azp_ibn_warranty_m_level . " = '2'");
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
		final public function sql_azp_ibn_warranty_remove(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_warranty_remove($data);
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
				$var_array = array(d_azp_ibn_warranty_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_warranty_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "' AND " . d_azp_ibn_warranty_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "' AND " . d_azp_ibn_warranty_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_warranty_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "' AND " . d_azp_ibn_warranty_m_level . " = '2'");
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
		final public function sql_azp_ibn_warranty_restore(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_warranty_restore($data);
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
				$var_array = array(d_azp_ibn_warranty_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_warranty_save(array $data) {
			try {
				#-------------------------------------------------------------------------#
				/*if (!isset($data['field_up_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
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
				}*/
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_warranty_save(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_warranty_save($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_sv_id']);
				#-------------------------------------------------------------------------#
				$empty_ibn_state = $this->db->scape($data['field_sv_ibn_state']);
				$empty_creditor = $this->db->scape($data['field_sv_creditor']);
				$empty_well_name = $this->db->scape($data['field_sv_well_name']);
				$empty_well_detail = $this->db->scape($data['field_sv_well_detail']);
				$empty_value = $this->db->scape($data['field_sv_value']);
				$empty_date = $this->db->scape($data['field_sv_date']);
				//$empty_observation = $this->db->scape($data['field_sv_observation']);
				#-------------------------------------------------------------------------#
				$empty_observation = '' .
					'ACREEDOR GARANTIZADO:' . ' ' .
						$empty_creditor . ' ' .
					'VALOR GARANTIA $' . ' ' .
						$empty_value . ' ' .
					'DETALLE GARANTIA:' . ' ' .
						$empty_well_detail;
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_ibn_state, d_azp_ibn_state_t_name . " = '" . $empty_ibn_state . "' AND " .
					d_azp_ibn_state_v_id_azp_ibn_module . " = '4'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value):
						$empty_ibn_state = $value[d_azp_ibn_state_id_azp_ibn_state];
					endforeach;
				} else { $empty_ibn_state = 4; }
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_ibn_warranty_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_ibn_warranty_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_ibn_warranty_m_date_created => DATE_HOUR,
							d_azs_ibn_warranty_m_date_modified => DATE_HOUR,
							d_azs_ibn_warranty_m_deleted => $key_sql_select[d_azp_ibn_warranty_m_deleted],
							d_azs_ibn_warranty_m_description => $key_sql_select[d_azp_ibn_warranty_m_description],
							d_azs_ibn_warranty_m_level => $key_sql_select[d_azp_ibn_warranty_m_level],
							d_azs_ibn_warranty_m_status => $key_sql_select[d_azp_ibn_warranty_m_status],
							d_azs_ibn_warranty_m_temp => $key_sql_select[d_azp_ibn_warranty_m_temp],
							d_azs_ibn_warranty_t_comment_legal => strtoupper($key_sql_select[d_azp_ibn_warranty_t_comment_legal]),
							d_azs_ibn_warranty_t_concept => strtoupper($key_sql_select[d_azp_ibn_warranty_t_concept]),
							d_azs_ibn_warranty_t_consecutive => strtoupper($key_sql_select[d_azp_ibn_warranty_t_consecutive]),
							d_azs_ibn_warranty_t_creditor => strtoupper($key_sql_select[d_azp_ibn_warranty_t_creditor]),
							d_azs_ibn_warranty_t_date => strtoupper($key_sql_select[d_azp_ibn_warranty_t_date]),
							d_azs_ibn_warranty_t_full_name => strtoupper($key_sql_select[d_azp_ibn_warranty_t_full_name]),
							d_azs_ibn_warranty_t_identification => strtoupper($key_sql_select[d_azp_ibn_warranty_t_identification]),
							d_azs_ibn_warranty_t_observation => strtoupper($key_sql_select[d_azp_ibn_warranty_t_observation]),
							d_azs_ibn_warranty_t_well_detail => strtoupper($key_sql_select[d_azp_ibn_warranty_t_well_detail]),
							d_azs_ibn_warranty_t_well_name => strtoupper($key_sql_select[d_azp_ibn_warranty_t_well_name]),
							d_azs_ibn_warranty_t_value => strtoupper($key_sql_select[d_azp_ibn_warranty_t_value]),
							d_azs_ibn_warranty_u_ibn_control_panel => strtoupper($key_sql_select[d_azp_ibn_warranty_v_id_azp_ibn_control_panel]),
							d_azs_ibn_warranty_u_ibn_state => strtoupper($key_sql_select[d_azp_ibn_warranty_v_id_azp_ibn_state]),
							d_azs_ibn_warranty_v_id_azp_ibn_warranty => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_ibn_warranty, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_warranty_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_warranty_m_date_modified => DATE_HOUR,
					//d_azp_ibn_warranty_m_description => $empty_description,
					//d_azp_ibn_warranty_m_status => $empty_state,
					//d_azp_ibn_warranty_t_comment_legal => strtoupper($empty_comment_legal),
					//d_azp_ibn_warranty_t_concept => strtoupper($empty_concept),
					//d_azp_ibn_warranty_t_consecutive => strtoupper($empty_consecutive),
					d_azp_ibn_warranty_t_creditor => strtoupper($empty_creditor),
					d_azp_ibn_warranty_t_date => strtoupper($empty_date),
					//d_azp_ibn_warranty_t_full_name => strtoupper($empty_full_name),
					//d_azp_ibn_warranty_t_identification => strtoupper($empty_identification),
					d_azp_ibn_warranty_t_observation => strtoupper($empty_observation),
					d_azp_ibn_warranty_t_well_detail => strtoupper($empty_well_detail),
					d_azp_ibn_warranty_t_well_name => strtoupper($empty_well_name),
					d_azp_ibn_warranty_t_value => strtoupper($empty_value),
					//d_azp_ibn_warranty_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
					d_azp_ibn_warranty_v_id_azp_ibn_state => $empty_ibn_state,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_warranty_trash(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_trash'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_trash']);
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
				$sql_id = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está borrando no se encuentra registrado.');
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
		final public function sql_azp_ibn_warranty_trash(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_warranty_trash($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_trash']);
				#-------------------------------------------------------------------------#
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->delete(t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro borrado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_warranty_update(array $data) {
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
				if (!isset($data['field_up_comment_legal'])) { throw new Exception('<b>Error:</b> El campo de comentario juridico esta prohibido modificar.'); }
				if (!isset($data['field_up_creditor'])) { throw new Exception('<b>Error:</b> El campo de acredito esta prohibido modificar.'); }
				if (!isset($data['field_up_date'])) { throw new Exception('<b>Error:</b> El campo de fecha esta prohibido modificar.'); }
				if (!isset($data['field_up_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_identification'])) { throw new Exception('<b>Error:</b> El campo de cedula esta prohibido modificar.'); }
				if (!isset($data['field_up_limitation'])) { throw new Exception('<b>Error:</b> El campo de limitacion esta prohibido modificar.'); }
				if (!isset($data['field_up_observation'])) { throw new Exception('<b>Error:</b> El campo de concatenado esta prohibido modificar.'); }
				if (!isset($data['field_up_well_detail'])) { throw new Exception('<b>Error:</b> El campo de bien detall esta prohibido modificar.'); }
				if (!isset($data['field_up_well_name'])) { throw new Exception('<b>Error:</b> El campo de bien esta prohibido modificar.'); }
				if (!isset($data['field_up_value'])) { throw new Exception('<b>Error:</b> El campo de valor esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_comment_legal = $this->db->scape($data['field_up_comment_legal']);
				$empty_creditor = $this->db->scape($data['field_up_creditor']);
				$empty_date = $this->db->scape($data['field_up_date']);
				$empty_full_name = $this->db->scape($data['field_up_full_name']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_limitation = $this->db->scape($data['field_up_limitation']);
				$empty_observation = $this->db->scape($data['field_up_observation']);
				$empty_well_detail = $this->db->scape($data['field_up_well_detail']);
				$empty_well_name = $this->db->scape($data['field_up_well_name']);
				$empty_value = $this->db->scape($data['field_up_value']);
				$empty_ibn_state = $this->db->scape($data['field_up_ibn_state']);
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
				/*if (Func::emp($empty_creditor)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de acredito es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_creditor)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de acredito solo permite letras.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_creditor) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de acredito permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_creditor, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de acredito no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_creditor)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de acredito no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_date) || $empty_date == 'aaaa-mm-dd') {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_date) < 10 || strlen($empty_date) > 10) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fecha está mal diligenciado, debe ser aaaa-mm-dd.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre solo permite letras.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_full_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_full_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula solo permite numeros.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_identification, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite ningun espacio en blanco.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_observation)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de concatenado es obligatorio.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_well_detail)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de bien detalle es obligatorio.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_well_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de bien es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!Strings::only_letters($empty_well_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de bien solo permite letras.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_well_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de bien permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_well_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de bien no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_well_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de bien no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de valor es obligatorio.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_state) || strtolower($empty_ibn_state) == strtolower('seleccionar') || $empty_ibn_state == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_state)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "' AND " . d_azp_ibn_warranty_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_warranty_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "' AND " . d_azp_ibn_warranty_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_state = $this->db->select('*', t_azp_ibn_state, d_azp_ibn_state_id_azp_ibn_state . " = '" . $empty_ibn_state . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_state) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_state) == '') { $sql_ibn_state[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_state[0][0]) != strtolower($empty_ibn_state)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El estado seleccionado no se encuentra registrado.');
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
		final public function sql_azp_ibn_warranty_update(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_warranty_update($data);
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
				$empty_comment_legal = $this->db->scape($data['field_up_comment_legal']);
				$empty_creditor = $this->db->scape($data['field_up_creditor']);
				$empty_date = $this->db->scape($data['field_up_date']);
				$empty_full_name = $this->db->scape($data['field_up_full_name']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_limitation = $this->db->scape($data['field_up_limitation']);
				$empty_observation = $this->db->scape($data['field_up_observation']);
				$empty_well_detail = $this->db->scape($data['field_up_well_detail']);
				$empty_well_name = $this->db->scape($data['field_up_well_name']);
				$empty_value = $this->db->scape($data['field_up_value']);
				$empty_ibn_state = $this->db->scape($data['field_up_ibn_state']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_ibn_warranty_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_ibn_warranty_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_ibn_warranty_m_date_created => DATE_HOUR,
							d_azs_ibn_warranty_m_date_modified => DATE_HOUR,
							d_azs_ibn_warranty_m_deleted => $key_sql_select[d_azp_ibn_warranty_m_deleted],
							d_azs_ibn_warranty_m_description => $key_sql_select[d_azp_ibn_warranty_m_description],
							d_azs_ibn_warranty_m_level => $key_sql_select[d_azp_ibn_warranty_m_level],
							d_azs_ibn_warranty_m_status => $key_sql_select[d_azp_ibn_warranty_m_status],
							d_azs_ibn_warranty_m_temp => $key_sql_select[d_azp_ibn_warranty_m_temp],
							d_azs_ibn_warranty_t_comment_legal => strtoupper($key_sql_select[d_azp_ibn_warranty_t_comment_legal]),
							d_azs_ibn_warranty_t_concept => strtoupper($key_sql_select[d_azp_ibn_warranty_t_concept]),
							d_azs_ibn_warranty_t_consecutive => strtoupper($key_sql_select[d_azp_ibn_warranty_t_consecutive]),
							d_azs_ibn_warranty_t_creditor => strtoupper($key_sql_select[d_azp_ibn_warranty_t_creditor]),
							d_azs_ibn_warranty_t_date => strtoupper($key_sql_select[d_azp_ibn_warranty_t_date]),
							d_azs_ibn_warranty_t_full_name => strtoupper($key_sql_select[d_azp_ibn_warranty_t_full_name]),
							d_azs_ibn_warranty_t_identification => strtoupper($key_sql_select[d_azp_ibn_warranty_t_identification]),
							d_azs_ibn_warranty_t_limitation => strtoupper($key_sql_select[d_azp_ibn_warranty_t_limitation]),
							d_azs_ibn_warranty_t_observation => strtoupper($key_sql_select[d_azp_ibn_warranty_t_observation]),
							d_azs_ibn_warranty_t_well_detail => strtoupper($key_sql_select[d_azp_ibn_warranty_t_well_detail]),
							d_azs_ibn_warranty_t_well_name => strtoupper($key_sql_select[d_azp_ibn_warranty_t_well_name]),
							d_azs_ibn_warranty_t_value => strtoupper($key_sql_select[d_azp_ibn_warranty_t_value]),
							d_azs_ibn_warranty_u_ibn_control_panel => strtoupper($key_sql_select[d_azp_ibn_warranty_v_id_azp_ibn_control_panel]),
							d_azs_ibn_warranty_u_ibn_state => strtoupper($key_sql_select[d_azp_ibn_warranty_v_id_azp_ibn_state]),
							d_azs_ibn_warranty_v_id_azp_ibn_warranty => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_ibn_warranty, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_warranty_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_warranty_m_date_modified => DATE_HOUR,
					d_azp_ibn_warranty_m_description => $empty_description,
					d_azp_ibn_warranty_m_status => $empty_state,
					d_azp_ibn_warranty_t_comment_legal => strtoupper($empty_comment_legal),
					//d_azp_ibn_warranty_t_concept => strtoupper($empty_concept),
					//d_azp_ibn_warranty_t_consecutive => strtoupper($empty_consecutive),
					d_azp_ibn_warranty_t_creditor => strtoupper($empty_creditor),
					d_azp_ibn_warranty_t_date => strtoupper($empty_date),
					d_azp_ibn_warranty_t_full_name => strtoupper($empty_full_name),
					d_azp_ibn_warranty_t_identification => strtoupper($empty_identification),
					d_azp_ibn_warranty_t_limitation => strtoupper($empty_limitation),
					d_azp_ibn_warranty_t_observation => strtoupper($empty_observation),
					d_azp_ibn_warranty_t_well_detail => strtoupper($empty_well_detail),
					d_azp_ibn_warranty_t_well_name => strtoupper($empty_well_name),
					d_azp_ibn_warranty_t_value => strtoupper($empty_value),
					//d_azp_ibn_warranty_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
					d_azp_ibn_warranty_v_id_azp_ibn_state => $empty_ibn_state,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				$var_rg_cf_2 = 0; $var_rg_cf_3 = 0;
				$var_pc_one = 'NEGATIVO'; $var_pc_two = 'NEGATIVO'; $var_pc_three = 'NEGATIVO'; $var_rg_cf_pos = 'POSITIVO'; $var_rg_cf_neg = 'NEGATIVO';
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cp_id = $value[d_azp_ibn_warranty_v_id_azp_ibn_control_panel];

						$var_rg_sta = $value[d_azp_ibn_warranty_v_id_azp_ibn_state];
					endforeach;
				} else { $var_rg_cp_id = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $var_rg_cp_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cl_id = $value[d_azp_ibn_control_panel_v_id_azp_ibn_client];
					endforeach;
				} else { $var_rg_cl_id = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				//$var_sql = $this->db->select('*', t_azp_ibn_regulation, d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $var_rg_cl_id . "' AND " . d_azp_ibn_regulation_t_selector . " = 'SI'");
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_id_azp_ibn_regulation . " AS 'lbl_azp_ibn_regulation_id_azp_ibn_regulation',
						tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
						tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_created . " AS 'lbl_azp_ibn_regulation_m_date_created',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_modified . " AS 'lbl_azp_ibn_regulation_m_date_modified',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_description . " AS 'lbl_azp_ibn_regulation_m_description',
						tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
						tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " AS 'lbl_azp_ibn_regulation_t_selector',
						tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . " AS 'lbl_azp_ibn_calification_id_azp_ibn_calification',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_concept . " AS 'lbl_azp_ibn_calification_t_concept',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_determination . " AS 'lbl_azp_ibn_calification_t_determination',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_principal . " AS 'lbl_azp_ibn_calification_t_principal',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_secondary . " AS 'lbl_azp_ibn_calification_t_secondary',
						tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name'
					FROM " . t_azp_ibn_regulation . " tc_azp_ibn_regulation
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_user . " tc_azp_user_created
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_created . "
							= tc_azp_user_created." . d_azp_user_id_azp_user . "
					INNER JOIN " . t_azp_user . " tc_azp_user_modified
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_modified . "
							= tc_azp_user_modified." . d_azp_user_id_azp_user . "
					INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_level . "
							= tc_azp_sys_level." . d_azp_sys_level_t_value . "
					INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . "
							= tc_azp_sys_state." . d_azp_sys_state_t_value . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
							= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
						ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
							= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_deleted . " = '1'
						AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . " = '1'
						AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " = 'SI'
						AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $var_rg_cl_id . "'
				");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cf_id = $value['lbl_azp_ibn_calification_id_azp_ibn_calification'];
						$var_rg_cf_pos = $value['lbl_azp_ibn_calification_t_principal'];
						$var_rg_cf_neg = $value['lbl_azp_ibn_calification_t_secondary'];
						$var_pc_one = $var_rg_cf_neg; $var_pc_two = $var_rg_cf_neg; $var_pc_three = $var_rg_cf_neg;
						# Control de validacion de variables y asignacion de valores a nuevas variables
						if ($var_rg_cf_id == 2) { $var_rg_cf_2 = 2; } else if ($var_rg_cf_id == 3) { $var_rg_cf_3 = 3; } else { $var_rg_cf_2 = 0; $var_rg_cf_3 = 0; }
					endforeach;
				}
				#-------------------------------------------------------------------------#
				if ($var_rg_cf_2 == 2) { if ($var_rg_sta == '16') { $var_pc_two = $var_rg_cf_pos; } else { $var_pc_two = $var_rg_cf_neg; } } else { $var_pc_two = $var_rg_cf_neg; }
				if ($var_rg_cf_3 == 3) { if ($var_rg_sta == '16') { $var_pc_three = $var_rg_cf_pos; } else { $var_pc_three = $var_rg_cf_neg; } } else { $var_pc_three = $var_rg_cf_neg; }
				#-------------------------------------------------------------------------#
				if ($var_pc_two == $var_rg_cf_neg) { $var_policy_viability = $var_rg_cf_neg; } else if ($var_pc_two == $var_rg_cf_pos) { $var_policy_viability = $var_rg_cf_pos; }
				#-------------------------------------------------------------------------#
				if ($var_pc_three == $var_rg_cf_neg) { $var_policy_effective = $var_rg_cf_neg; } else if ($var_pc_three == $var_rg_cf_pos) { $var_policy_effective = $var_rg_cf_pos; }
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_warranty_t_policy_effective => $var_policy_effective,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_warranty_t_policy_viability => $var_policy_viability,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_ibn_control_panel = $value[d_azp_ibn_warranty_v_id_azp_ibn_control_panel];
					endforeach;
				} else { $var_ibn_control_panel = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_id_client = $value[d_azp_ibn_control_panel_v_id_azp_ibn_client];
					endforeach;
				} else { $var_id_client = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " AS 'lbl_azp_ibn_concept_id_azp_ibn_concept',
						tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
						tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
						tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_created . " AS 'lbl_azp_ibn_concept_m_date_created',
						tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_modified . " AS 'lbl_azp_ibn_concept_m_date_modified',
						tc_azp_ibn_concept." . d_azp_ibn_concept_m_description . " AS 'lbl_azp_ibn_concept_m_description',
						tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
						tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
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
						tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
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
					WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $var_id_client . "'
						AND tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " = '4'
				");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						$var_land_01 = $value['lbl_azp_ibn_concept_t_land_01'];
						$var_land_02 = $value['lbl_azp_ibn_concept_t_land_02'];
						$var_land_03 = $value['lbl_azp_ibn_concept_t_land_03'];
						$var_land_04 = $value['lbl_azp_ibn_concept_t_land_04'];
						$var_land_05 = $value['lbl_azp_ibn_concept_t_land_05'];
						$var_land_06 = $value['lbl_azp_ibn_concept_t_land_06'];
						$var_land_07 = $value['lbl_azp_ibn_concept_t_land_07'];
						$var_land_08 = $value['lbl_azp_ibn_concept_t_land_08'];
						$var_land_09 = $value['lbl_azp_ibn_concept_t_land_09'];
						$var_land_10 = $value['lbl_azp_ibn_concept_t_land_10'];
						$var_land_11 = $value['lbl_azp_ibn_concept_t_land_11'];
						$var_land_12 = $value['lbl_azp_ibn_concept_t_land_12'];
						$var_land_13 = $value['lbl_azp_ibn_concept_t_land_13'];
						$var_land_14 = $value['lbl_azp_ibn_concept_t_land_14'];
						$var_land_15 = $value['lbl_azp_ibn_concept_t_land_15'];
						$var_land_16 = $value['lbl_azp_ibn_concept_t_land_16'];
						$var_land_17 = $value['lbl_azp_ibn_concept_t_land_17'];
						$var_land_18 = $value['lbl_azp_ibn_concept_t_land_18'];
						$var_land_19 = $value['lbl_azp_ibn_concept_t_land_19'];
						$var_land_20 = $value['lbl_azp_ibn_concept_t_land_20'];
						$var_text_01 = $value['lbl_azp_ibn_concept_t_text_01'];
						$var_text_02 = $value['lbl_azp_ibn_concept_t_text_02'];
						$var_text_03 = $value['lbl_azp_ibn_concept_t_text_03'];
						$var_text_04 = $value['lbl_azp_ibn_concept_t_text_04'];
						$var_text_05 = $value['lbl_azp_ibn_concept_t_text_05'];
						$var_text_06 = $value['lbl_azp_ibn_concept_t_text_06'];
						$var_text_07 = $value['lbl_azp_ibn_concept_t_text_07'];
						$var_text_08 = $value['lbl_azp_ibn_concept_t_text_08'];
						$var_text_09 = $value['lbl_azp_ibn_concept_t_text_09'];
						$var_text_10 = $value['lbl_azp_ibn_concept_t_text_10'];
						$var_text_11 = $value['lbl_azp_ibn_concept_t_text_11'];
						$var_text_12 = $value['lbl_azp_ibn_concept_t_text_12'];
						$var_text_13 = $value['lbl_azp_ibn_concept_t_text_13'];
						$var_text_14 = $value['lbl_azp_ibn_concept_t_text_14'];
						$var_text_15 = $value['lbl_azp_ibn_concept_t_text_15'];
						$var_text_16 = $value['lbl_azp_ibn_concept_t_text_16'];
						$var_text_17 = $value['lbl_azp_ibn_concept_t_text_17'];
						$var_text_18 = $value['lbl_azp_ibn_concept_t_text_18'];
						$var_text_19 = $value['lbl_azp_ibn_concept_t_text_19'];
						$var_text_20 = $value['lbl_azp_ibn_concept_t_text_20'];
					endforeach;
				} else {
					$var_land_01 = '0'; $var_land_02 = '0'; $var_land_03 = '0'; $var_land_04 = '0'; $var_land_05 = '0';
					$var_land_06 = '0'; $var_land_07 = '0'; $var_land_08 = '0'; $var_land_09 = '0'; $var_land_10 = '0';
					$var_land_11 = '0'; $var_land_12 = '0'; $var_land_13 = '0'; $var_land_14 = '0'; $var_land_15 = '0';
					$var_land_16 = '0'; $var_land_17 = '0'; $var_land_18 = '0'; $var_land_19 = '0'; $var_land_20 = '0';
					#-------------------------------------------------------------------------#
					$var_text_01 = ''; $var_text_02 = ''; $var_text_03 = ''; $var_text_04 = ''; $var_text_05 = '';
					$var_text_06 = ''; $var_text_07 = ''; $var_text_08 = ''; $var_text_09 = ''; $var_text_10 = '';
					$var_text_11 = ''; $var_text_12 = ''; $var_text_13 = ''; $var_text_14 = ''; $var_text_15 = '';
					$var_text_16 = ''; $var_text_17 = ''; $var_text_18 = ''; $var_text_19 = ''; $var_text_20 = '';
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_01 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_01 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_01 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_02 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_02 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_02 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_03 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_03 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_03 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_04 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_04 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_04 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_05 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_05 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_05 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_06 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_06 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_06 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_07 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_07 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_07 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_08 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_08 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_08 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_09 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_09 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_09 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_10 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_10 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_10 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_11 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_11 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_11 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_12 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_12 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_12 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_13 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_13 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_13 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_14 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_14 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_14 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_15 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_15 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_15 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_16 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_16 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_16 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_17 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_17 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_17 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_18 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_18 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_18 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_19 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_19 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_19 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_20 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_20 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_20 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_warranty, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Control de validacion de variables y asignacion de valores a nuevas variables
						if ($var_index_01 != '') { $var_value_01 = $value[$var_index_01]; } else { $var_value_01 = ''; }
						if ($var_index_02 != '') { $var_value_02 = $value[$var_index_02]; } else { $var_value_02 = ''; }
						if ($var_index_03 != '') { $var_value_03 = $value[$var_index_03]; } else { $var_value_03 = ''; }
						if ($var_index_04 != '') { $var_value_04 = $value[$var_index_04]; } else { $var_value_04 = ''; }
						if ($var_index_05 != '') { $var_value_05 = $value[$var_index_05]; } else { $var_value_05 = ''; }
						if ($var_index_06 != '') { $var_value_06 = $value[$var_index_06]; } else { $var_value_06 = ''; }
						if ($var_index_07 != '') { $var_value_07 = $value[$var_index_07]; } else { $var_value_07 = ''; }
						if ($var_index_08 != '') { $var_value_08 = $value[$var_index_08]; } else { $var_value_08 = ''; }
						if ($var_index_09 != '') { $var_value_09 = $value[$var_index_09]; } else { $var_value_09 = ''; }
						if ($var_index_10 != '') { $var_value_10 = $value[$var_index_10]; } else { $var_value_10 = ''; }
						if ($var_index_11 != '') { $var_value_11 = $value[$var_index_11]; } else { $var_value_11 = ''; }
						if ($var_index_12 != '') { $var_value_12 = $value[$var_index_12]; } else { $var_value_12 = ''; }
						if ($var_index_13 != '') { $var_value_13 = $value[$var_index_13]; } else { $var_value_13 = ''; }
						if ($var_index_14 != '') { $var_value_14 = $value[$var_index_14]; } else { $var_value_14 = ''; }
						if ($var_index_15 != '') { $var_value_15 = $value[$var_index_15]; } else { $var_value_15 = ''; }
						if ($var_index_16 != '') { $var_value_16 = $value[$var_index_16]; } else { $var_value_16 = ''; }
						if ($var_index_17 != '') { $var_value_17 = $value[$var_index_17]; } else { $var_value_17 = ''; }
						if ($var_index_18 != '') { $var_value_18 = $value[$var_index_18]; } else { $var_value_18 = ''; }
						if ($var_index_19 != '') { $var_value_19 = $value[$var_index_19]; } else { $var_value_19 = ''; }
						if ($var_index_20 != '') { $var_value_20 = $value[$var_index_20]; } else { $var_value_20 = ''; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else { $var_idx_01 = $var_value_01; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else { $var_idx_02 = $var_value_02; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else { $var_idx_03 = $var_value_03; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else { $var_idx_04 = $var_value_04; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else { $var_idx_05 = $var_value_05; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else { $var_idx_06 = $var_value_06; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else { $var_idx_07 = $var_value_07; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else { $var_idx_08 = $var_value_08; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else { $var_idx_09 = $var_value_09; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else { $var_idx_10 = $var_value_10; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else { $var_idx_11 = $var_value_11; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else { $var_idx_12 = $var_value_12; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else { $var_idx_13 = $var_value_13; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else { $var_idx_14 = $var_value_14; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else { $var_idx_15 = $var_value_15; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else { $var_idx_16 = $var_value_16; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else { $var_idx_17 = $var_value_17; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else { $var_idx_18 = $var_value_18; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else { $var_idx_19 = $var_value_19; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else { $var_idx_20 = $var_value_20; }
						#-------------------------------------------------------------------------#
					endforeach;
				} else {
					$var_idx_01 = ''; $var_idx_02 = ''; $var_idx_03 = ''; $var_idx_04 = ''; $var_idx_05 = '';
					$var_idx_06 = ''; $var_idx_07 = ''; $var_idx_08 = ''; $var_idx_09 = ''; $var_idx_10 = '';
					$var_idx_11 = ''; $var_idx_12 = ''; $var_idx_13 = ''; $var_idx_14 = ''; $var_idx_15 = '';
					$var_idx_16 = ''; $var_idx_17 = ''; $var_idx_18 = ''; $var_idx_19 = ''; $var_idx_20 = '';
				}
				#-------------------------------------------------------------------------#
				$var_concept = '' .
					$var_text_01 . ' ' . $var_idx_01 . ' ' . $var_text_02 . ' ' . $var_idx_02 . ' ' .
					$var_text_03 . ' ' . $var_idx_03 . ' ' . $var_text_04 . ' ' . $var_idx_04 . ' ' .
					$var_text_05 . ' ' . $var_idx_05 . ' ' . $var_text_06 . ' ' . $var_idx_06 . ' ' .
					$var_text_07 . ' ' . $var_idx_07 . ' ' . $var_text_08 . ' ' . $var_idx_08 . ' ' .
					$var_text_09 . ' ' . $var_idx_09 . ' ' . $var_text_10 . ' ' . $var_idx_10 . ' ' .
					$var_text_11 . ' ' . $var_idx_11 . ' ' . $var_text_12 . ' ' . $var_idx_12 . ' ' .
					$var_text_13 . ' ' . $var_idx_13 . ' ' . $var_text_14 . ' ' . $var_idx_14 . ' ' .
					$var_text_15 . ' ' . $var_idx_15 . ' ' . $var_text_16 . ' ' . $var_idx_16 . ' ' .
					$var_text_17 . ' ' . $var_idx_17 . ' ' . $var_text_18 . ' ' . $var_idx_18 . ' ' .
					$var_text_19 . ' ' . $var_idx_19 . ' ' . $var_text_20 . ' ' . $var_idx_20;
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_warranty_t_concept => trim(preg_replace('/\s+/',' ', strtoupper($var_concept))),);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_warranty,
					d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
					d_azp_ibn_warranty_m_deleted . " = '1' GROUP BY " . d_azp_ibn_warranty_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_warranty_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_warranty,
							d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
							d_azp_ibn_warranty_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_warranty_id_azp_ibn_warranty];
								$var_cedula2 = $value2[d_azp_ibn_warranty_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_warranty_t_acount => $var_union, d_azp_ibn_warranty_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_warranty, $var_array, d_azp_ibn_warranty_id_azp_ibn_warranty . " = '" . $var_id2 . "'");
							endforeach;
						}

					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.', 'register' => $empty_id);
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_control_panel() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_m_deleted . " = '1' AND " . d_azp_ibn_control_panel_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_state() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_state,
				d_azp_ibn_state_m_deleted . " = '1' AND " .
				d_azp_ibn_state_m_status . " = '1' AND " .
				d_azp_ibn_state_v_id_azp_ibn_module . " = '4' "
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_research() {
			# Seleccionar los registros de la tabla
			return $this->db->select(d_azp_ibn_control_panel_t_code_research . " AS 'lbl_name'",
				t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $this->id . "'");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_ibn_capture_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_capture." . d_azp_ibn_capture_id_azp_ibn_capture . " AS 'lbl_azp_ibn_capture_id_azp_ibn_capture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_capture." . d_azp_ibn_capture_m_date_created . " AS 'lbl_azp_ibn_capture_m_date_created',
					tc_azp_ibn_capture." . d_azp_ibn_capture_m_date_modified . " AS 'lbl_azp_ibn_capture_m_date_modified',
					tc_azp_ibn_capture." . d_azp_ibn_capture_m_description . " AS 'lbl_azp_ibn_capture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_document . " AS 'lbl_azp_ibn_capture_w_document',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_error . " AS 'lbl_azp_ibn_capture_w_error',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_folder . " AS 'lbl_azp_ibn_capture_w_folder',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_name . " AS 'lbl_azp_ibn_capture_w_name',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_route . " AS 'lbl_azp_ibn_capture_w_route',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_size . " AS 'lbl_azp_ibn_capture_w_size',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_tmp_name . " AS 'lbl_azp_ibn_capture_w_tmp_name',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_type . " AS 'lbl_azp_ibn_capture_w_type',
					tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . " AS 'lbl_azp_ibn_capture_v_id_azp_ibn_module',
					tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . " AS 'lbl_azp_ibn_capture_v_id_azp_ibn_cfpvw'
				FROM " . t_azp_ibn_capture . " tc_azp_ibn_capture
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_warranty . " tc_azp_ibn_warranty
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . "
						= tc_azp_ibn_warranty." . d_azp_ibn_warranty_id_azp_ibn_warranty . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_capture." . d_azp_ibn_capture_m_deleted . " = '1'
					AND tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . " = '4'
					AND tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . " = '" . $this->id . "'
				ORDER BY tc_azp_ibn_capture." . d_azp_ibn_capture_id_azp_ibn_capture . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_ibn_capture_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_capture." . d_azp_ibn_capture_id_azp_ibn_capture . " AS 'lbl_azp_ibn_capture_id_azp_ibn_capture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_capture." . d_azp_ibn_capture_m_date_created . " AS 'lbl_azp_ibn_capture_m_date_created',
					tc_azp_ibn_capture." . d_azp_ibn_capture_m_date_modified . " AS 'lbl_azp_ibn_capture_m_date_modified',
					tc_azp_ibn_capture." . d_azp_ibn_capture_m_description . " AS 'lbl_azp_ibn_capture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_document . " AS 'lbl_azp_ibn_capture_w_document',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_error . " AS 'lbl_azp_ibn_capture_w_error',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_folder . " AS 'lbl_azp_ibn_capture_w_folder',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_name . " AS 'lbl_azp_ibn_capture_w_name',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_route . " AS 'lbl_azp_ibn_capture_w_route',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_size . " AS 'lbl_azp_ibn_capture_w_size',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_tmp_name . " AS 'lbl_azp_ibn_capture_w_tmp_name',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_type . " AS 'lbl_azp_ibn_capture_w_type',
					tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . " AS 'lbl_azp_ibn_capture_v_id_azp_ibn_module',
					tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . " AS 'lbl_azp_ibn_capture_v_id_azp_ibn_cfpvw'
				FROM " . t_azp_ibn_capture . " tc_azp_ibn_capture
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_warranty . " tc_azp_ibn_warranty
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . "
						= tc_azp_ibn_warranty." . d_azp_ibn_warranty_id_azp_ibn_warranty . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_capture." . d_azp_ibn_capture_id_azp_ibn_capture . " = '" . $this->id . "'
					AND tc_azp_ibn_capture." . d_azp_ibn_capture_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_warranty_file(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_fl_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_fl_id']);
				$empty_control = $this->db->scape($data['field_fl_control']);
				$empty_detection = $this->db->scape($data['field_fl_detection']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_fl_file']['name'];
				$empty_type = $_FILES['field_fl_file']['type'];
				$empty_tmp_name = $_FILES['field_fl_file']['tmp_name'];
				$empty_error = $_FILES['field_fl_file']['error'];
				$empty_size = $_FILES['field_fl_file']['size'];
				#-------------------------------------------------------------------------#
				$empty_tamanio = 1000; $empty_bytes = 1024;
				$empty_extension = array('pdf',);
				$empty_path_info = strtolower(pathinfo($empty_name, PATHINFO_EXTENSION));
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
				#---------------------------------------------#
				if (Func::emp($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de archivo es obligatorio.');
				}
				#---------------------------------------------#
				if (!in_array($empty_path_info, $empty_extension)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de archivo solo acepta formatos ' . implode(',', $empty_extension) . '.');
				}
				#---------------------------------------------#
				if ($empty_size > ($empty_tamanio * $empty_bytes)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El archivo seleccionado excede el tamaño de 1 MB.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_warranty_file(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_warranty_file($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('files');
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_fl_id']);
				$empty_control = $this->db->scape($data['field_fl_control']);
				$empty_detection = $this->db->scape($data['field_fl_detection']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_fl_file']['name'];
				$empty_error = $_FILES['field_fl_file']['error'];
				$empty_size = $_FILES['field_fl_file']['size'];
				$empty_tmp_name = $_FILES['field_fl_file']['tmp_name'];
				$empty_type = $_FILES['field_fl_file']['type'];
				#-------------------------------------------------------------------------#
				$empty_route = '../systemfiles/filesproject/';
				$empty_folder = 'azp_ibn_control_panel/' . $empty_control . '/' . $empty_detection . '/';
				$empty_document = 'GARANTIAS' . '_' . $empty_detection . '_' . DATE_NUMBER . '_' . HOUR_NUMBER . '.pdf';
				//$empty_namdoc = 'GARANTIAS' . '_' . $empty_detection . '_' . $empty_name;
				$empty_namdoc = 'GARANTIAS' . '_' . $empty_name;
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_capture_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_ibn_capture_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_capture_m_date_created => DATE_HOUR,
					d_azp_ibn_capture_m_date_modified => DATE_HOUR,
					d_azp_ibn_capture_m_deleted => '1',
					d_azp_ibn_capture_m_description => '',
					d_azp_ibn_capture_m_level => '2',
					d_azp_ibn_capture_m_status => '1',
					d_azp_ibn_capture_m_temp => '1',
					d_azp_ibn_capture_t_identification => $empty_detection,
					d_azp_ibn_capture_w_document => $empty_namdoc,
					d_azp_ibn_capture_w_error => $empty_error,
					d_azp_ibn_capture_w_folder => $empty_folder,
					d_azp_ibn_capture_w_name => $empty_namdoc,
					d_azp_ibn_capture_w_route => $empty_route,
					d_azp_ibn_capture_w_size => $empty_size,
					d_azp_ibn_capture_w_tmp_name => $empty_tmp_name,
					d_azp_ibn_capture_w_type => $empty_type,
					d_azp_ibn_capture_v_id_azp_ibn_control => $empty_control,
					d_azp_ibn_capture_v_id_azp_ibn_module => '4',
					d_azp_ibn_capture_v_id_azp_ibn_cfpvw => $empty_id,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->insert(t_azp_ibn_capture, $var_array);
				#-------------------------------------------------------------------------#
				# Contro de existencia de carpeta
				if (!is_dir($empty_route . $empty_folder)) { Files::create_dir($empty_route . $empty_folder, 0777); }
				#-------------------------------------------------------------------------#
				# Subida de archivos en el desarrollo
				Files::upload_file(trim(preg_replace('/\s+/',' ', $empty_namdoc)), $empty_tmp_name, $empty_route . $empty_folder, true);
				#-------------------------------------------------------------------------#
				# Dar permisos a la ruta y archivo
				chmod($empty_route . $empty_folder . $empty_namdoc, 0777);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo almacenado correctamente.');
			}
		}















		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_acount(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_acount
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_comment_legal(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_comment_legal
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_concept(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_concept
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_consecutive(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_consecutive
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_creditor(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_creditor
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_date(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_date
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_full_name(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_full_name
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_identification(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_identification
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_limitation(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_limitation
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_observation(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_observation
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_policy_effective(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_policy_effective
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_policy_final(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_policy_final
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_policy_viability(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_policy_viability
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_well_detail(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_well_detail
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_well_name(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_well_name
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_value(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_warranty,
				d_azp_ibn_warranty_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_warranty_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_warranty_t_value
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_control_panel(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_control_panel,
				d_azp_ibn_control_panel_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_control_panel_t_code_research
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_state(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_state,
				d_azp_ibn_state_v_id_azp_ibn_module . " = '4' AND " .
				d_azp_ibn_state_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_state_t_name
			);
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>