<?php
	# Seguridad
	defined('INDEX_DIR') || exit('Developer Software');
	
	final class m_azp_ibn_furnitureModel extends Models implements OCREND {
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}
		
		# Query Sql Select
		final public function sql_controller_alert_client() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name'
				FROM " . t_azp_ibn_furniture . " tc_azp_ibn_furniture
				
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " =
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				
				INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
					ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . " =
						tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
				
				WHERE tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $this->id . "'
				GROUP BY tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_control_panel . "
			");
		}

		# Query Sql Select
		final public function sql_controller_by_create() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			#-------------------------------------------------------------------------#
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_table'])) { $var_sql_regime = ""; $var_sql_state = ""; $var_sql_affiliate = ""; } else {
				if ($_GET['field_table'] == '') { $var_sql_regime = ""; $var_sql_state = ""; $var_sql_affiliate = ""; } else {
					if ($_GET['field_table'] == 1) { $var_sql_regime = ""; $var_sql_state = ""; $var_sql_affiliate = ""; } else {
						$var_sql_regime = "AND (tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' OR tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '5')";
						$var_sql_state = "AND (tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' OR tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_state . " = '22')";
						$var_sql_affiliate = "AND (tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2' OR tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '5')";
					}
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_address'])) { $var_sql_address = ""; } else {
				if ($_GET['field_address'] == '') { $var_sql_address = ""; } else {
					$var_sql_address = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_address . " IN (" . trim($_GET['field_address'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_business_name'])) { $var_sql_business_name = ""; } else {
				if ($_GET['field_business_name'] == '') { $var_sql_business_name = ""; } else {
					$var_sql_business_name = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_business_name . " IN (" . trim($_GET['field_business_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_city'])) { $var_sql_city = ""; } else {
				if ($_GET['field_city'] == '') { $var_sql_city = ""; } else {
					$var_sql_city = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_city . " IN (" . trim($_GET['field_city'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_department'])) { $var_sql_department = ""; } else {
				if ($_GET['field_department'] == '') { $var_sql_department = ""; } else {
					$var_sql_department = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_department . " IN (" . trim($_GET['field_department'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_entity'])) { $var_sql_entity = ""; } else {
				if ($_GET['field_entity'] == '') { $var_sql_entity = ""; } else {
					$var_sql_entity = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_entity . " IN (" . trim($_GET['field_entity'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_municipality'])) { $var_sql_municipality = ""; } else {
				if ($_GET['field_municipality'] == '') { $var_sql_municipality = ""; } else {
					$var_sql_municipality = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_municipality . " IN (" . trim($_GET['field_municipality'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nit'])) { $var_sql_nit = ""; } else {
				if ($_GET['field_nit'] == '') { $var_sql_nit = ""; } else {
					$var_sql_nit = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_nit . " IN (" . trim($_GET['field_nit'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_phone'])) { $var_sql_phone = ""; } else {
				if ($_GET['field_phone'] == '') { $var_sql_phone = ""; } else {
					$var_sql_phone = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_phone . " IN (" . trim($_GET['field_phone'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_salary'])) { $var_sql_salary = ""; } else {
				if ($_GET['field_salary'] == '') { $var_sql_salary = ""; } else {
					$var_sql_salary = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_salary . " IN (" . trim($_GET['field_salary'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_viable_causal'])) { $var_sql_viable_causal = ""; } else {
				if ($_GET['field_viable_causal'] == '') { $var_sql_viable_causal = ""; } else {
					$var_sql_viable_causal = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_viable_causal . " IN (" . trim($_GET['field_viable_causal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_option'])) { $var_sql_well_option = ""; } else {
				if ($_GET['field_well_option'] == '') { $var_sql_well_option = ""; } else {
					$var_sql_well_option = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_well_option . " IN (" . trim($_GET['field_well_option'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_viable'])) { $var_sql_well_viable = ""; } else {
				if ($_GET['field_well_viable'] == '') { $var_sql_well_viable = ""; } else {
					$var_sql_well_viable = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_well_viable . " IN (" . trim($_GET['field_well_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_outcome'])) { $var_sql_ibn_outcome = ""; } else {
				if ($_GET['field_ibn_outcome'] == '') { $var_sql_ibn_outcome = ""; } else {
					$var_sql_ibn_outcome = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_outcome . " IN (" . trim($_GET['field_ibn_outcome'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_rank'])) { $var_sql_ibn_rank = ""; } else {
				if ($_GET['field_ibn_rank'] == '') { $var_sql_ibn_rank = ""; } else {
					$var_sql_ibn_rank = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_rank . " IN (" . trim($_GET['field_ibn_rank'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_regime'])) { $var_sql_ibn_regime = ""; } else {
				if ($_GET['field_ibn_regime'] == '') { $var_sql_ibn_regime = ""; } else {
					$var_sql_ibn_regime = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_regime . " IN (" . trim($_GET['field_ibn_regime'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_affiliate'])) { $var_sql_ibn_type_affiliate = ""; } else {
				if ($_GET['field_ibn_type_affiliate'] == '') { $var_sql_ibn_type_affiliate = ""; } else {
					$var_sql_ibn_type_affiliate = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " IN (" . trim($_GET['field_ibn_type_affiliate'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_concept'])) { $var_sql_ibn_type_concept = ""; } else {
				if ($_GET['field_ibn_type_concept'] == '') { $var_sql_ibn_type_concept = ""; } else {
					$var_sql_ibn_type_concept = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_type_concept . " IN (" . trim($_GET['field_ibn_type_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_contributor'])) { $var_sql_ibn_type_contributor = ""; } else {
				if ($_GET['field_ibn_type_contributor'] == '') { $var_sql_ibn_type_contributor = ""; } else {
					$var_sql_ibn_type_contributor = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_type_contributor . " IN (" . trim($_GET['field_ibn_type_contributor'], ',') . ")";
				}
			}




			
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . " AS 'lbl_azp_ibn_furniture_id_azp_ibn_furniture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_date_created . " AS 'lbl_azp_ibn_furniture_m_date_created',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_date_modified . " AS 'lbl_azp_ibn_furniture_m_date_modified',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_description . " AS 'lbl_azp_ibn_furniture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_address . " AS 'lbl_azp_ibn_furniture_t_address',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_business_name . " AS 'lbl_azp_ibn_furniture_t_business_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_city . " AS 'lbl_azp_ibn_furniture_t_city',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_comment_legal . " AS 'lbl_azp_ibn_furniture_t_comment_legal',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_concept . " AS 'lbl_azp_ibn_furniture_t_concept',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_consecutive . " AS 'lbl_azp_ibn_furniture_t_consecutive',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_department . " AS 'lbl_azp_ibn_furniture_t_department',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_entity . " AS 'lbl_azp_ibn_furniture_t_entity',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_full_name . " AS 'lbl_azp_ibn_furniture_t_full_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_identification . " AS 'lbl_azp_ibn_furniture_t_identification',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_municipality . " AS 'lbl_azp_ibn_furniture_t_municipality',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_nit . " AS 'lbl_azp_ibn_furniture_t_nit',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_observation . " AS 'lbl_azp_ibn_furniture_t_observation',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_phone . " AS 'lbl_azp_ibn_furniture_t_phone',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_salary . " AS 'lbl_azp_ibn_furniture_t_salary',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_viable_causal . " AS 'lbl_azp_ibn_furniture_t_viable_causal',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_well_option . " AS 'lbl_azp_ibn_furniture_t_well_option',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_well_viable . " AS 'lbl_azp_ibn_furniture_t_well_viable',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_text_one . " AS 'lbl_azp_ibn_furniture_t_text_one',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_text_two . " AS 'lbl_azp_ibn_furniture_t_text_two',
					tc_azp_ibn_outcome." . d_azp_ibn_outcome_t_name . " AS 'lbl_azp_ibn_outcome_t_name',
					tc_azp_ibn_rank." . d_azp_ibn_rank_t_name . " AS 'lbl_azp_ibn_rank_t_name',
					tc_azp_ibn_regime." . d_azp_ibn_regime_t_name . " AS 'lbl_azp_ibn_regime_t_name',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_affiliate." . d_azp_ibn_type_affiliate_t_name . " AS 'lbl_azp_ibn_type_affiliate_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					tc_azp_ibn_type_contributor." . d_azp_ibn_type_contributor_t_name . " AS 'lbl_azp_ibn_type_contributor_t_name'
				FROM " . t_azp_ibn_furniture . " tc_azp_ibn_furniture
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " =
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				
				INNER JOIN " . t_azp_ibn_outcome . " tc_azp_ibn_outcome
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_outcome . " =
						tc_azp_ibn_outcome." . d_azp_ibn_outcome_id_azp_ibn_outcome . "
				
				INNER JOIN " . t_azp_ibn_rank . " tc_azp_ibn_rank
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_rank . " =
						tc_azp_ibn_rank." . d_azp_ibn_rank_id_azp_ibn_rank . "
				
				INNER JOIN " . t_azp_ibn_regime . " tc_azp_ibn_regime
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_regime . " =
						tc_azp_ibn_regime." . d_azp_ibn_regime_id_azp_ibn_regime . "
				
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_state . " =
						tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				
				INNER JOIN " . t_azp_ibn_type_affiliate . " tc_azp_ibn_type_affiliate
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " =
						tc_azp_ibn_type_affiliate." . d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . "
				
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_concept . " =
						tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				
				INNER JOIN " . t_azp_ibn_type_contributor . " tc_azp_ibn_type_contributor
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_contributor . " =
						tc_azp_ibn_type_contributor." . d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . "
				
				WHERE tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_deleted . " = '1'
					" . $var_sql_ibn_control_panel .  "
					" . $var_sql_regime . "
					" . $var_sql_state . "
					" . $var_sql_affiliate . "

					" . $var_sql_acount . "
					" . $var_sql_address . "
					" . $var_sql_business_name . "
					" . $var_sql_city . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_department . "
					" . $var_sql_entity . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_limitation . "
					" . $var_sql_municipality . "
					" . $var_sql_nit . "
					" . $var_sql_observation . "
					" . $var_sql_phone . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_salary . "
					" . $var_sql_viable_causal . "
					" . $var_sql_well_option . "
					" . $var_sql_well_viable . "
					" . $var_sql_ibn_outcome . "
					" . $var_sql_ibn_rank . "
					" . $var_sql_ibn_regime . "
					" . $var_sql_ibn_state . "
					" . $var_sql_ibn_type_affiliate . "
					" . $var_sql_ibn_type_concept . "
					" . $var_sql_ibn_type_contributor . "
				ORDER BY tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . " ASC
			");
		}

		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_id_azs_ibn_furniture . " AS 'lbl_azs_ibn_furniture_id_azs_ibn_furniture',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_m_date_modified . " AS 'lbl_azs_ibn_furniture_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_m_date_created . " AS 'lbl_azs_ibn_furniture_m_date_created',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_m_date_modified . " AS 'lbl_azs_ibn_furniture_m_date_modified',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_m_description . " AS 'lbl_azs_ibn_furniture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_address . " AS 'lbl_azs_ibn_furniture_t_address',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_business_name . " AS 'lbl_azs_ibn_furniture_t_business_name',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_city . " AS 'lbl_azs_ibn_furniture_t_city',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_consecutive . " AS 'lbl_azs_ibn_furniture_t_consecutive',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_department . " AS 'lbl_azs_ibn_furniture_t_department',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_entity . " AS 'lbl_azs_ibn_furniture_t_entity',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_full_name . " AS 'lbl_azs_ibn_furniture_t_full_name',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_identification . " AS 'lbl_azs_ibn_furniture_t_identification',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_municipality . " AS 'lbl_azs_ibn_furniture_t_municipality',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_nit . " AS 'lbl_azs_ibn_furniture_t_nit',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_observation . " AS 'lbl_azs_ibn_furniture_t_observation',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_phone . " AS 'lbl_azs_ibn_furniture_t_phone',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_salary . " AS 'lbl_azs_ibn_furniture_t_salary',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_viable_causal . " AS 'lbl_azs_ibn_furniture_t_viable_causal',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_well_option . " AS 'lbl_azs_ibn_furniture_t_well_option',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_well_viable . " AS 'lbl_azs_ibn_furniture_t_well_viable',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_text_one . " AS 'lbl_azs_ibn_furniture_t_text_one',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_t_text_two . " AS 'lbl_azs_ibn_furniture_t_text_two',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_u_ibn_control_panel . " AS 'lbl_azs_ibn_furniture_u_ibn_control_panel',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_u_ibn_outcome . " AS 'lbl_azs_ibn_furniture_u_ibn_outcome',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_u_ibn_rank . " AS 'lbl_azs_ibn_furniture_u_ibn_rank',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_u_ibn_regime . " AS 'lbl_azs_ibn_furniture_u_ibn_regime',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_u_ibn_state . " AS 'lbl_azs_ibn_furniture_u_ibn_state',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_u_ibn_type_affiliate . " AS 'lbl_azs_ibn_furniture_u_ibn_type_affiliate',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_u_ibn_type_concept . " AS 'lbl_azs_ibn_furniture_u_ibn_type_concept',
					tc_azs_ibn_furniture." . d_azs_ibn_furniture_u_ibn_type_contributor . " AS 'lbl_azs_ibn_furniture_u_ibn_type_contributor'
				FROM " . t_azs_ibn_furniture . " tc_azs_ibn_furniture
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_ibn_furniture." . d_azs_ibn_furniture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_ibn_furniture." . d_azs_ibn_furniture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_ibn_furniture." . d_azs_ibn_furniture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_ibn_furniture." . d_azs_ibn_furniture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				WHERE tc_azs_ibn_furniture." . d_azs_ibn_furniture_v_id_azp_ibn_furniture . " = '" . $this->id . "'
				ORDER BY tc_azs_ibn_furniture." . d_azs_ibn_furniture_m_date_modified . " DESC
			");
		}

		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_ibn_furniture . "
				WHERE " . d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $this->id . "'
					AND " . d_azp_ibn_furniture_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_ibn_furniture);
				# Detener la ejecucion
				exit();
			}
		}

		# Query Sql Select Get Id
		final public function sql_controller_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . " AS 'lbl_azp_ibn_furniture_id_azp_ibn_furniture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_date_created . " AS 'lbl_azp_ibn_furniture_m_date_created',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_date_modified . " AS 'lbl_azp_ibn_furniture_m_date_modified',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_description . " AS 'lbl_azp_ibn_furniture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_address . " AS 'lbl_azp_ibn_furniture_t_address',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_business_name . " AS 'lbl_azp_ibn_furniture_t_business_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_city . " AS 'lbl_azp_ibn_furniture_t_city',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_comment_legal . " AS 'lbl_azp_ibn_furniture_t_comment_legal',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_concept . " AS 'lbl_azp_ibn_furniture_t_concept',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_consecutive . " AS 'lbl_azp_ibn_furniture_t_consecutive',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_department . " AS 'lbl_azp_ibn_furniture_t_department',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_entity . " AS 'lbl_azp_ibn_furniture_t_entity',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_full_name . " AS 'lbl_azp_ibn_furniture_t_full_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_identification . " AS 'lbl_azp_ibn_furniture_t_identification',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_municipality . " AS 'lbl_azp_ibn_furniture_t_municipality',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_nit . " AS 'lbl_azp_ibn_furniture_t_nit',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_observation . " AS 'lbl_azp_ibn_furniture_t_observation',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_phone . " AS 'lbl_azp_ibn_furniture_t_phone',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_salary . " AS 'lbl_azp_ibn_furniture_t_salary',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_viable_causal . " AS 'lbl_azp_ibn_furniture_t_viable_causal',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_well_option . " AS 'lbl_azp_ibn_furniture_t_well_option',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_well_viable . " AS 'lbl_azp_ibn_furniture_t_well_viable',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_text_one . " AS 'lbl_azp_ibn_furniture_t_text_one',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_text_two . " AS 'lbl_azp_ibn_furniture_t_text_two',
					tc_azp_ibn_outcome." . d_azp_ibn_outcome_t_name . " AS 'lbl_azp_ibn_outcome_t_name',
					tc_azp_ibn_rank." . d_azp_ibn_rank_t_name . " AS 'lbl_azp_ibn_rank_t_name',
					tc_azp_ibn_regime." . d_azp_ibn_regime_t_name . " AS 'lbl_azp_ibn_regime_t_name',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_affiliate." . d_azp_ibn_type_affiliate_t_name . " AS 'lbl_azp_ibn_type_affiliate_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					tc_azp_ibn_type_contributor." . d_azp_ibn_type_contributor_t_name . " AS 'lbl_azp_ibn_type_contributor_t_name'
				FROM " . t_azp_ibn_furniture . " tc_azp_ibn_furniture
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " =
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				
				INNER JOIN " . t_azp_ibn_outcome . " tc_azp_ibn_outcome
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_outcome . " =
						tc_azp_ibn_outcome." . d_azp_ibn_outcome_id_azp_ibn_outcome . "
				
				INNER JOIN " . t_azp_ibn_rank . " tc_azp_ibn_rank
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_rank . " =
						tc_azp_ibn_rank." . d_azp_ibn_rank_id_azp_ibn_rank . "
				
				INNER JOIN " . t_azp_ibn_regime . " tc_azp_ibn_regime
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_regime . " =
						tc_azp_ibn_regime." . d_azp_ibn_regime_id_azp_ibn_regime . "
				
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_state . " =
						tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				
				INNER JOIN " . t_azp_ibn_type_affiliate . " tc_azp_ibn_type_affiliate
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " =
						tc_azp_ibn_type_affiliate." . d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . "
				
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_concept . " =
						tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				
				INNER JOIN " . t_azp_ibn_type_contributor . " tc_azp_ibn_type_contributor
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_contributor . " =
						tc_azp_ibn_type_contributor." . d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . "
				
				WHERE tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $this->id . "'
					AND tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_deleted . " = '1'
				LIMIT 1
			");
		}

		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			#-------------------------------------------------------------------------#
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_table'])) { $var_sql_regime = ""; $var_sql_state = ""; $var_sql_affiliate = ""; } else {
				if ($_GET['field_table'] == '') { $var_sql_regime = ""; $var_sql_state = ""; $var_sql_affiliate = ""; } else {
					if ($_GET['field_table'] == 1) { $var_sql_regime = ""; $var_sql_state = ""; $var_sql_affiliate = ""; } else {
						$var_sql_regime = "AND (tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' OR tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '5')";
						$var_sql_state = "AND (tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' OR tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_state . " = '22')";
						$var_sql_affiliate = "AND (tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2' OR tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '5')";
					}
				}
			}
			




			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_address'])) { $var_sql_address = ""; } else {
				if ($_GET['field_address'] == '') { $var_sql_address = ""; } else {
					$var_sql_address = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_address . " IN (" . trim($_GET['field_address'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_business_name'])) { $var_sql_business_name = ""; } else {
				if ($_GET['field_business_name'] == '') { $var_sql_business_name = ""; } else {
					$var_sql_business_name = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_business_name . " IN (" . trim($_GET['field_business_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_city'])) { $var_sql_city = ""; } else {
				if ($_GET['field_city'] == '') { $var_sql_city = ""; } else {
					$var_sql_city = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_city . " IN (" . trim($_GET['field_city'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_department'])) { $var_sql_department = ""; } else {
				if ($_GET['field_department'] == '') { $var_sql_department = ""; } else {
					$var_sql_department = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_department . " IN (" . trim($_GET['field_department'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_entity'])) { $var_sql_entity = ""; } else {
				if ($_GET['field_entity'] == '') { $var_sql_entity = ""; } else {
					$var_sql_entity = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_entity . " IN (" . trim($_GET['field_entity'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_municipality'])) { $var_sql_municipality = ""; } else {
				if ($_GET['field_municipality'] == '') { $var_sql_municipality = ""; } else {
					$var_sql_municipality = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_municipality . " IN (" . trim($_GET['field_municipality'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nit'])) { $var_sql_nit = ""; } else {
				if ($_GET['field_nit'] == '') { $var_sql_nit = ""; } else {
					$var_sql_nit = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_nit . " IN (" . trim($_GET['field_nit'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_phone'])) { $var_sql_phone = ""; } else {
				if ($_GET['field_phone'] == '') { $var_sql_phone = ""; } else {
					$var_sql_phone = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_phone . " IN (" . trim($_GET['field_phone'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_salary'])) { $var_sql_salary = ""; } else {
				if ($_GET['field_salary'] == '') { $var_sql_salary = ""; } else {
					$var_sql_salary = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_salary . " IN (" . trim($_GET['field_salary'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_viable_causal'])) { $var_sql_viable_causal = ""; } else {
				if ($_GET['field_viable_causal'] == '') { $var_sql_viable_causal = ""; } else {
					$var_sql_viable_causal = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_viable_causal . " IN (" . trim($_GET['field_viable_causal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_option'])) { $var_sql_well_option = ""; } else {
				if ($_GET['field_well_option'] == '') { $var_sql_well_option = ""; } else {
					$var_sql_well_option = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_well_option . " IN (" . trim($_GET['field_well_option'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_viable'])) { $var_sql_well_viable = ""; } else {
				if ($_GET['field_well_viable'] == '') { $var_sql_well_viable = ""; } else {
					$var_sql_well_viable = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_well_viable . " IN (" . trim($_GET['field_well_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_outcome'])) { $var_sql_ibn_outcome = ""; } else {
				if ($_GET['field_ibn_outcome'] == '') { $var_sql_ibn_outcome = ""; } else {
					$var_sql_ibn_outcome = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_outcome . " IN (" . trim($_GET['field_ibn_outcome'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_rank'])) { $var_sql_ibn_rank = ""; } else {
				if ($_GET['field_ibn_rank'] == '') { $var_sql_ibn_rank = ""; } else {
					$var_sql_ibn_rank = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_rank . " IN (" . trim($_GET['field_ibn_rank'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_regime'])) { $var_sql_ibn_regime = ""; } else {
				if ($_GET['field_ibn_regime'] == '') { $var_sql_ibn_regime = ""; } else {
					$var_sql_ibn_regime = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_regime . " IN (" . trim($_GET['field_ibn_regime'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_affiliate'])) { $var_sql_ibn_type_affiliate = ""; } else {
				if ($_GET['field_ibn_type_affiliate'] == '') { $var_sql_ibn_type_affiliate = ""; } else {
					$var_sql_ibn_type_affiliate = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " IN (" . trim($_GET['field_ibn_type_affiliate'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_concept'])) { $var_sql_ibn_type_concept = ""; } else {
				if ($_GET['field_ibn_type_concept'] == '') { $var_sql_ibn_type_concept = ""; } else {
					$var_sql_ibn_type_concept = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_type_concept . " IN (" . trim($_GET['field_ibn_type_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_contributor'])) { $var_sql_ibn_type_contributor = ""; } else {
				if ($_GET['field_ibn_type_contributor'] == '') { $var_sql_ibn_type_contributor = ""; } else {
					$var_sql_ibn_type_contributor = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_type_contributor . " IN (" . trim($_GET['field_ibn_type_contributor'], ',') . ")";
				}
			}




			
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . " AS 'lbl_azp_ibn_furniture_id_azp_ibn_furniture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_date_created . " AS 'lbl_azp_ibn_furniture_m_date_created',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_date_modified . " AS 'lbl_azp_ibn_furniture_m_date_modified',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_description . " AS 'lbl_azp_ibn_furniture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_address . " AS 'lbl_azp_ibn_furniture_t_address',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_business_name . " AS 'lbl_azp_ibn_furniture_t_business_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_city . " AS 'lbl_azp_ibn_furniture_t_city',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_comment_legal . " AS 'lbl_azp_ibn_furniture_t_comment_legal',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_concept . " AS 'lbl_azp_ibn_furniture_t_concept',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_consecutive . " AS 'lbl_azp_ibn_furniture_t_consecutive',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_department . " AS 'lbl_azp_ibn_furniture_t_department',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_entity . " AS 'lbl_azp_ibn_furniture_t_entity',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_full_name . " AS 'lbl_azp_ibn_furniture_t_full_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_identification . " AS 'lbl_azp_ibn_furniture_t_identification',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_municipality . " AS 'lbl_azp_ibn_furniture_t_municipality',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_nit . " AS 'lbl_azp_ibn_furniture_t_nit',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_observation . " AS 'lbl_azp_ibn_furniture_t_observation',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_phone . " AS 'lbl_azp_ibn_furniture_t_phone',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_salary . " AS 'lbl_azp_ibn_furniture_t_salary',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_viable_causal . " AS 'lbl_azp_ibn_furniture_t_viable_causal',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_well_option . " AS 'lbl_azp_ibn_furniture_t_well_option',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_well_viable . " AS 'lbl_azp_ibn_furniture_t_well_viable',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_text_one . " AS 'lbl_azp_ibn_furniture_t_text_one',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_text_two . " AS 'lbl_azp_ibn_furniture_t_text_two',
					tc_azp_ibn_outcome." . d_azp_ibn_outcome_t_name . " AS 'lbl_azp_ibn_outcome_t_name',
					tc_azp_ibn_rank." . d_azp_ibn_rank_t_name . " AS 'lbl_azp_ibn_rank_t_name',
					tc_azp_ibn_regime." . d_azp_ibn_regime_t_name . " AS 'lbl_azp_ibn_regime_t_name',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_affiliate." . d_azp_ibn_type_affiliate_t_name . " AS 'lbl_azp_ibn_type_affiliate_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					tc_azp_ibn_type_contributor." . d_azp_ibn_type_contributor_t_name . " AS 'lbl_azp_ibn_type_contributor_t_name'
				FROM " . t_azp_ibn_furniture . " tc_azp_ibn_furniture
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " =
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				
				INNER JOIN " . t_azp_ibn_outcome . " tc_azp_ibn_outcome
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_outcome . " =
						tc_azp_ibn_outcome." . d_azp_ibn_outcome_id_azp_ibn_outcome . "
				
				INNER JOIN " . t_azp_ibn_rank . " tc_azp_ibn_rank
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_rank . " =
						tc_azp_ibn_rank." . d_azp_ibn_rank_id_azp_ibn_rank . "
				
				INNER JOIN " . t_azp_ibn_regime . " tc_azp_ibn_regime
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_regime . " =
						tc_azp_ibn_regime." . d_azp_ibn_regime_id_azp_ibn_regime . "
				
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_state . " =
						tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				
				INNER JOIN " . t_azp_ibn_type_affiliate . " tc_azp_ibn_type_affiliate
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " =
						tc_azp_ibn_type_affiliate." . d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . "
				
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_concept . " =
						tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				
				INNER JOIN " . t_azp_ibn_type_contributor . " tc_azp_ibn_type_contributor
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_contributor . " =
						tc_azp_ibn_type_contributor." . d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . "
				
				WHERE tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_deleted . " = '3'
					" . $var_sql_ibn_control_panel .  "
					" . $var_sql_regime . "
					" . $var_sql_state . "
					" . $var_sql_affiliate . "

					" . $var_sql_acount . "
					" . $var_sql_address . "
					" . $var_sql_business_name . "
					" . $var_sql_city . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_department . "
					" . $var_sql_entity . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_limitation . "
					" . $var_sql_municipality . "
					" . $var_sql_nit . "
					" . $var_sql_observation . "
					" . $var_sql_phone . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_salary . "
					" . $var_sql_viable_causal . "
					" . $var_sql_well_option . "
					" . $var_sql_well_viable . "
					" . $var_sql_ibn_outcome . "
					" . $var_sql_ibn_rank . "
					" . $var_sql_ibn_regime . "
					" . $var_sql_ibn_state . "
					" . $var_sql_ibn_type_affiliate . "
					" . $var_sql_ibn_type_concept . "
					" . $var_sql_ibn_type_contributor . "
				ORDER BY tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . " ASC
			");
		}

		# Query Sql Select
		final public function sql_controller_read() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			#-------------------------------------------------------------------------#
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_table'])) { $var_sql_regime = ""; $var_sql_state = ""; $var_sql_affiliate = ""; } else {
				if ($_GET['field_table'] == '') { $var_sql_regime = ""; $var_sql_state = ""; $var_sql_affiliate = ""; } else {
					if ($_GET['field_table'] == 1) { $var_sql_regime = ""; $var_sql_state = ""; $var_sql_affiliate = ""; } else {
						$var_sql_regime = "AND (tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' OR tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '5')";
						$var_sql_state = "AND (tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' OR tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_state . " = '22')";
						$var_sql_affiliate = "AND (tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2' OR tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '5')";
					}
				}
			}
			




			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_address'])) { $var_sql_address = ""; } else {
				if ($_GET['field_address'] == '') { $var_sql_address = ""; } else {
					$var_sql_address = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_address . " IN (" . trim($_GET['field_address'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_business_name'])) { $var_sql_business_name = ""; } else {
				if ($_GET['field_business_name'] == '') { $var_sql_business_name = ""; } else {
					$var_sql_business_name = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_business_name . " IN (" . trim($_GET['field_business_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_city'])) { $var_sql_city = ""; } else {
				if ($_GET['field_city'] == '') { $var_sql_city = ""; } else {
					$var_sql_city = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_city . " IN (" . trim($_GET['field_city'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_department'])) { $var_sql_department = ""; } else {
				if ($_GET['field_department'] == '') { $var_sql_department = ""; } else {
					$var_sql_department = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_department . " IN (" . trim($_GET['field_department'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_entity'])) { $var_sql_entity = ""; } else {
				if ($_GET['field_entity'] == '') { $var_sql_entity = ""; } else {
					$var_sql_entity = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_entity . " IN (" . trim($_GET['field_entity'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_municipality'])) { $var_sql_municipality = ""; } else {
				if ($_GET['field_municipality'] == '') { $var_sql_municipality = ""; } else {
					$var_sql_municipality = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_municipality . " IN (" . trim($_GET['field_municipality'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nit'])) { $var_sql_nit = ""; } else {
				if ($_GET['field_nit'] == '') { $var_sql_nit = ""; } else {
					$var_sql_nit = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_nit . " IN (" . trim($_GET['field_nit'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_phone'])) { $var_sql_phone = ""; } else {
				if ($_GET['field_phone'] == '') { $var_sql_phone = ""; } else {
					$var_sql_phone = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_phone . " IN (" . trim($_GET['field_phone'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_salary'])) { $var_sql_salary = ""; } else {
				if ($_GET['field_salary'] == '') { $var_sql_salary = ""; } else {
					$var_sql_salary = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_salary . " IN (" . trim($_GET['field_salary'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_viable_causal'])) { $var_sql_viable_causal = ""; } else {
				if ($_GET['field_viable_causal'] == '') { $var_sql_viable_causal = ""; } else {
					$var_sql_viable_causal = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_viable_causal . " IN (" . trim($_GET['field_viable_causal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_option'])) { $var_sql_well_option = ""; } else {
				if ($_GET['field_well_option'] == '') { $var_sql_well_option = ""; } else {
					$var_sql_well_option = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_well_option . " IN (" . trim($_GET['field_well_option'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_viable'])) { $var_sql_well_viable = ""; } else {
				if ($_GET['field_well_viable'] == '') { $var_sql_well_viable = ""; } else {
					$var_sql_well_viable = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_well_viable . " IN (" . trim($_GET['field_well_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_outcome'])) { $var_sql_ibn_outcome = ""; } else {
				if ($_GET['field_ibn_outcome'] == '') { $var_sql_ibn_outcome = ""; } else {
					$var_sql_ibn_outcome = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_outcome . " IN (" . trim($_GET['field_ibn_outcome'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_rank'])) { $var_sql_ibn_rank = ""; } else {
				if ($_GET['field_ibn_rank'] == '') { $var_sql_ibn_rank = ""; } else {
					$var_sql_ibn_rank = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_rank . " IN (" . trim($_GET['field_ibn_rank'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_regime'])) { $var_sql_ibn_regime = ""; } else {
				if ($_GET['field_ibn_regime'] == '') { $var_sql_ibn_regime = ""; } else {
					$var_sql_ibn_regime = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_regime . " IN (" . trim($_GET['field_ibn_regime'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_affiliate'])) { $var_sql_ibn_type_affiliate = ""; } else {
				if ($_GET['field_ibn_type_affiliate'] == '') { $var_sql_ibn_type_affiliate = ""; } else {
					$var_sql_ibn_type_affiliate = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " IN (" . trim($_GET['field_ibn_type_affiliate'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_concept'])) { $var_sql_ibn_type_concept = ""; } else {
				if ($_GET['field_ibn_type_concept'] == '') { $var_sql_ibn_type_concept = ""; } else {
					$var_sql_ibn_type_concept = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_type_concept . " IN (" . trim($_GET['field_ibn_type_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_contributor'])) { $var_sql_ibn_type_contributor = ""; } else {
				if ($_GET['field_ibn_type_contributor'] == '') { $var_sql_ibn_type_contributor = ""; } else {
					$var_sql_ibn_type_contributor = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_type_contributor . " IN (" . trim($_GET['field_ibn_type_contributor'], ',') . ")";
				}
			}





			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . " AS 'lbl_azp_ibn_furniture_id_azp_ibn_furniture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_date_created . " AS 'lbl_azp_ibn_furniture_m_date_created',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_date_modified . " AS 'lbl_azp_ibn_furniture_m_date_modified',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_description . " AS 'lbl_azp_ibn_furniture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_address . " AS 'lbl_azp_ibn_furniture_t_address',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_business_name . " AS 'lbl_azp_ibn_furniture_t_business_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_city . " AS 'lbl_azp_ibn_furniture_t_city',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_comment_legal . " AS 'lbl_azp_ibn_furniture_t_comment_legal',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_concept . " AS 'lbl_azp_ibn_furniture_t_concept',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_consecutive . " AS 'lbl_azp_ibn_furniture_t_consecutive',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_department . " AS 'lbl_azp_ibn_furniture_t_department',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_entity . " AS 'lbl_azp_ibn_furniture_t_entity',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_full_name . " AS 'lbl_azp_ibn_furniture_t_full_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_identification . " AS 'lbl_azp_ibn_furniture_t_identification',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_municipality . " AS 'lbl_azp_ibn_furniture_t_municipality',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_nit . " AS 'lbl_azp_ibn_furniture_t_nit',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_observation . " AS 'lbl_azp_ibn_furniture_t_observation',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_phone . " AS 'lbl_azp_ibn_furniture_t_phone',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_salary . " AS 'lbl_azp_ibn_furniture_t_salary',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_viable_causal . " AS 'lbl_azp_ibn_furniture_t_viable_causal',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_well_option . " AS 'lbl_azp_ibn_furniture_t_well_option',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_well_viable . " AS 'lbl_azp_ibn_furniture_t_well_viable',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_text_one . " AS 'lbl_azp_ibn_furniture_t_text_one',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_text_two . " AS 'lbl_azp_ibn_furniture_t_text_two',
					tc_azp_ibn_outcome." . d_azp_ibn_outcome_t_name . " AS 'lbl_azp_ibn_outcome_t_name',
					tc_azp_ibn_rank." . d_azp_ibn_rank_t_name . " AS 'lbl_azp_ibn_rank_t_name',
					tc_azp_ibn_regime." . d_azp_ibn_regime_t_name . " AS 'lbl_azp_ibn_regime_t_name',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_affiliate." . d_azp_ibn_type_affiliate_t_name . " AS 'lbl_azp_ibn_type_affiliate_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					tc_azp_ibn_type_contributor." . d_azp_ibn_type_contributor_t_name . " AS 'lbl_azp_ibn_type_contributor_t_name'
				FROM " . t_azp_ibn_furniture . " tc_azp_ibn_furniture
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " =
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				
				INNER JOIN " . t_azp_ibn_outcome . " tc_azp_ibn_outcome
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_outcome . " =
						tc_azp_ibn_outcome." . d_azp_ibn_outcome_id_azp_ibn_outcome . "
				
				INNER JOIN " . t_azp_ibn_rank . " tc_azp_ibn_rank
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_rank . " =
						tc_azp_ibn_rank." . d_azp_ibn_rank_id_azp_ibn_rank . "
				
				INNER JOIN " . t_azp_ibn_regime . " tc_azp_ibn_regime
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_regime . " =
						tc_azp_ibn_regime." . d_azp_ibn_regime_id_azp_ibn_regime . "
				
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_state . " =
						tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				
				INNER JOIN " . t_azp_ibn_type_affiliate . " tc_azp_ibn_type_affiliate
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " =
						tc_azp_ibn_type_affiliate." . d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . "
				
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_concept . " =
						tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				
				INNER JOIN " . t_azp_ibn_type_contributor . " tc_azp_ibn_type_contributor
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_contributor . " =
						tc_azp_ibn_type_contributor." . d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . "
				
				WHERE tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_deleted . " = '1'
					" . $var_sql_ibn_control_panel .  "
					" . $var_sql_regime . "
					" . $var_sql_state . "
					" . $var_sql_affiliate . "

					" . $var_sql_acount . "
					" . $var_sql_address . "
					" . $var_sql_business_name . "
					" . $var_sql_city . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_department . "
					" . $var_sql_entity . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_limitation . "
					" . $var_sql_municipality . "
					" . $var_sql_nit . "
					" . $var_sql_observation . "
					" . $var_sql_phone . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_salary . "
					" . $var_sql_viable_causal . "
					" . $var_sql_well_option . "
					" . $var_sql_well_viable . "
					" . $var_sql_ibn_outcome . "
					" . $var_sql_ibn_rank . "
					" . $var_sql_ibn_regime . "
					" . $var_sql_ibn_state . "
					" . $var_sql_ibn_type_affiliate . "
					" . $var_sql_ibn_type_concept . "
					" . $var_sql_ibn_type_contributor . "
				ORDER BY tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . " ASC
			");
		}

		# Query Sql Select
		final public function sql_controller_remove() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			#-------------------------------------------------------------------------#
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_table'])) { $var_sql_regime = ""; $var_sql_state = ""; $var_sql_affiliate = ""; } else {
				if ($_GET['field_table'] == '') { $var_sql_regime = ""; $var_sql_state = ""; $var_sql_affiliate = ""; } else {
					if ($_GET['field_table'] == 1) { $var_sql_regime = ""; $var_sql_state = ""; $var_sql_affiliate = ""; } else {
						$var_sql_regime = "AND (tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' OR tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '5')";
						$var_sql_state = "AND (tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' OR tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_state . " = '22')";
						$var_sql_affiliate = "AND (tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2' OR tc_azp_ibn_furniture." .
							d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '5')";
					}
				}
			}
			




			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_address'])) { $var_sql_address = ""; } else {
				if ($_GET['field_address'] == '') { $var_sql_address = ""; } else {
					$var_sql_address = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_address . " IN (" . trim($_GET['field_address'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_business_name'])) { $var_sql_business_name = ""; } else {
				if ($_GET['field_business_name'] == '') { $var_sql_business_name = ""; } else {
					$var_sql_business_name = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_business_name . " IN (" . trim($_GET['field_business_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_city'])) { $var_sql_city = ""; } else {
				if ($_GET['field_city'] == '') { $var_sql_city = ""; } else {
					$var_sql_city = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_city . " IN (" . trim($_GET['field_city'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_department'])) { $var_sql_department = ""; } else {
				if ($_GET['field_department'] == '') { $var_sql_department = ""; } else {
					$var_sql_department = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_department . " IN (" . trim($_GET['field_department'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_entity'])) { $var_sql_entity = ""; } else {
				if ($_GET['field_entity'] == '') { $var_sql_entity = ""; } else {
					$var_sql_entity = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_entity . " IN (" . trim($_GET['field_entity'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_municipality'])) { $var_sql_municipality = ""; } else {
				if ($_GET['field_municipality'] == '') { $var_sql_municipality = ""; } else {
					$var_sql_municipality = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_municipality . " IN (" . trim($_GET['field_municipality'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nit'])) { $var_sql_nit = ""; } else {
				if ($_GET['field_nit'] == '') { $var_sql_nit = ""; } else {
					$var_sql_nit = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_nit . " IN (" . trim($_GET['field_nit'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_phone'])) { $var_sql_phone = ""; } else {
				if ($_GET['field_phone'] == '') { $var_sql_phone = ""; } else {
					$var_sql_phone = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_phone . " IN (" . trim($_GET['field_phone'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_salary'])) { $var_sql_salary = ""; } else {
				if ($_GET['field_salary'] == '') { $var_sql_salary = ""; } else {
					$var_sql_salary = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_salary . " IN (" . trim($_GET['field_salary'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_viable_causal'])) { $var_sql_viable_causal = ""; } else {
				if ($_GET['field_viable_causal'] == '') { $var_sql_viable_causal = ""; } else {
					$var_sql_viable_causal = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_viable_causal . " IN (" . trim($_GET['field_viable_causal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_option'])) { $var_sql_well_option = ""; } else {
				if ($_GET['field_well_option'] == '') { $var_sql_well_option = ""; } else {
					$var_sql_well_option = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_well_option . " IN (" . trim($_GET['field_well_option'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_viable'])) { $var_sql_well_viable = ""; } else {
				if ($_GET['field_well_viable'] == '') { $var_sql_well_viable = ""; } else {
					$var_sql_well_viable = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_t_well_viable . " IN (" . trim($_GET['field_well_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_outcome'])) { $var_sql_ibn_outcome = ""; } else {
				if ($_GET['field_ibn_outcome'] == '') { $var_sql_ibn_outcome = ""; } else {
					$var_sql_ibn_outcome = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_outcome . " IN (" . trim($_GET['field_ibn_outcome'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_rank'])) { $var_sql_ibn_rank = ""; } else {
				if ($_GET['field_ibn_rank'] == '') { $var_sql_ibn_rank = ""; } else {
					$var_sql_ibn_rank = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_rank . " IN (" . trim($_GET['field_ibn_rank'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_regime'])) { $var_sql_ibn_regime = ""; } else {
				if ($_GET['field_ibn_regime'] == '') { $var_sql_ibn_regime = ""; } else {
					$var_sql_ibn_regime = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_regime . " IN (" . trim($_GET['field_ibn_regime'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_affiliate'])) { $var_sql_ibn_type_affiliate = ""; } else {
				if ($_GET['field_ibn_type_affiliate'] == '') { $var_sql_ibn_type_affiliate = ""; } else {
					$var_sql_ibn_type_affiliate = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " IN (" . trim($_GET['field_ibn_type_affiliate'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_concept'])) { $var_sql_ibn_type_concept = ""; } else {
				if ($_GET['field_ibn_type_concept'] == '') { $var_sql_ibn_type_concept = ""; } else {
					$var_sql_ibn_type_concept = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_type_concept . " IN (" . trim($_GET['field_ibn_type_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_contributor'])) { $var_sql_ibn_type_contributor = ""; } else {
				if ($_GET['field_ibn_type_contributor'] == '') { $var_sql_ibn_type_contributor = ""; } else {
					$var_sql_ibn_type_contributor = "AND tc_azp_ibn_furniture." .
						d_azp_ibn_furniture_v_id_azp_ibn_type_contributor . " IN (" . trim($_GET['field_ibn_type_contributor'], ',') . ")";
				}
			}




			
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . " AS 'lbl_azp_ibn_furniture_id_azp_ibn_furniture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_date_created . " AS 'lbl_azp_ibn_furniture_m_date_created',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_date_modified . " AS 'lbl_azp_ibn_furniture_m_date_modified',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_description . " AS 'lbl_azp_ibn_furniture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_address . " AS 'lbl_azp_ibn_furniture_t_address',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_business_name . " AS 'lbl_azp_ibn_furniture_t_business_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_city . " AS 'lbl_azp_ibn_furniture_t_city',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_comment_legal . " AS 'lbl_azp_ibn_furniture_t_comment_legal',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_concept . " AS 'lbl_azp_ibn_furniture_t_concept',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_consecutive . " AS 'lbl_azp_ibn_furniture_t_consecutive',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_department . " AS 'lbl_azp_ibn_furniture_t_department',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_entity . " AS 'lbl_azp_ibn_furniture_t_entity',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_full_name . " AS 'lbl_azp_ibn_furniture_t_full_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_identification . " AS 'lbl_azp_ibn_furniture_t_identification',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_municipality . " AS 'lbl_azp_ibn_furniture_t_municipality',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_nit . " AS 'lbl_azp_ibn_furniture_t_nit',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_observation . " AS 'lbl_azp_ibn_furniture_t_observation',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_phone . " AS 'lbl_azp_ibn_furniture_t_phone',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_salary . " AS 'lbl_azp_ibn_furniture_t_salary',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_viable_causal . " AS 'lbl_azp_ibn_furniture_t_viable_causal',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_well_option . " AS 'lbl_azp_ibn_furniture_t_well_option',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_well_viable . " AS 'lbl_azp_ibn_furniture_t_well_viable',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_text_one . " AS 'lbl_azp_ibn_furniture_t_text_one',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_text_two . " AS 'lbl_azp_ibn_furniture_t_text_two',
					tc_azp_ibn_outcome." . d_azp_ibn_outcome_t_name . " AS 'lbl_azp_ibn_outcome_t_name',
					tc_azp_ibn_rank." . d_azp_ibn_rank_t_name . " AS 'lbl_azp_ibn_rank_t_name',
					tc_azp_ibn_regime." . d_azp_ibn_regime_t_name . " AS 'lbl_azp_ibn_regime_t_name',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_affiliate." . d_azp_ibn_type_affiliate_t_name . " AS 'lbl_azp_ibn_type_affiliate_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					tc_azp_ibn_type_contributor." . d_azp_ibn_type_contributor_t_name . " AS 'lbl_azp_ibn_type_contributor_t_name'
				FROM " . t_azp_ibn_furniture . " tc_azp_ibn_furniture
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " =
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				
				INNER JOIN " . t_azp_ibn_outcome . " tc_azp_ibn_outcome
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_outcome . " =
						tc_azp_ibn_outcome." . d_azp_ibn_outcome_id_azp_ibn_outcome . "
				
				INNER JOIN " . t_azp_ibn_rank . " tc_azp_ibn_rank
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_rank . " =
						tc_azp_ibn_rank." . d_azp_ibn_rank_id_azp_ibn_rank . "
				
				INNER JOIN " . t_azp_ibn_regime . " tc_azp_ibn_regime
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_regime . " =
						tc_azp_ibn_regime." . d_azp_ibn_regime_id_azp_ibn_regime . "
				
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_state . " =
						tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				
				INNER JOIN " . t_azp_ibn_type_affiliate . " tc_azp_ibn_type_affiliate
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " =
						tc_azp_ibn_type_affiliate." . d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . "
				
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_concept . " =
						tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				
				INNER JOIN " . t_azp_ibn_type_contributor . " tc_azp_ibn_type_contributor
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_contributor . " =
						tc_azp_ibn_type_contributor." . d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . "
				
				WHERE tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_deleted . " = '2'
					" . $var_sql_ibn_control_panel .  "
					" . $var_sql_regime . "
					" . $var_sql_state . "
					" . $var_sql_affiliate . "

					" . $var_sql_acount . "
					" . $var_sql_address . "
					" . $var_sql_business_name . "
					" . $var_sql_city . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_department . "
					" . $var_sql_entity . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_limitation . "
					" . $var_sql_municipality . "
					" . $var_sql_nit . "
					" . $var_sql_observation . "
					" . $var_sql_phone . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_salary . "
					" . $var_sql_viable_causal . "
					" . $var_sql_well_option . "
					" . $var_sql_well_viable . "
					" . $var_sql_ibn_outcome . "
					" . $var_sql_ibn_rank . "
					" . $var_sql_ibn_regime . "
					" . $var_sql_ibn_state . "
					" . $var_sql_ibn_type_affiliate . "
					" . $var_sql_ibn_type_concept . "
					" . $var_sql_ibn_type_contributor . "
				ORDER BY tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . " ASC
			");
		}

		# Query Sql Select
		final public function sql_controller_table(string $var_id) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . " AS 'lbl_azp_ibn_furniture_id_azp_ibn_furniture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_date_created . " AS 'lbl_azp_ibn_furniture_m_date_created',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_date_modified . " AS 'lbl_azp_ibn_furniture_m_date_modified',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_description . " AS 'lbl_azp_ibn_furniture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_address . " AS 'lbl_azp_ibn_furniture_t_address',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_business_name . " AS 'lbl_azp_ibn_furniture_t_business_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_city . " AS 'lbl_azp_ibn_furniture_t_city',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_comment_legal . " AS 'lbl_azp_ibn_furniture_t_comment_legal',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_concept . " AS 'lbl_azp_ibn_furniture_t_concept',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_consecutive . " AS 'lbl_azp_ibn_furniture_t_consecutive',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_department . " AS 'lbl_azp_ibn_furniture_t_department',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_entity . " AS 'lbl_azp_ibn_furniture_t_entity',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_full_name . " AS 'lbl_azp_ibn_furniture_t_full_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_identification . " AS 'lbl_azp_ibn_furniture_t_identification',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_municipality . " AS 'lbl_azp_ibn_furniture_t_municipality',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_nit . " AS 'lbl_azp_ibn_furniture_t_nit',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_observation . " AS 'lbl_azp_ibn_furniture_t_observation',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_phone . " AS 'lbl_azp_ibn_furniture_t_phone',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_salary . " AS 'lbl_azp_ibn_furniture_t_salary',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_viable_causal . " AS 'lbl_azp_ibn_furniture_t_viable_causal',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_well_option . " AS 'lbl_azp_ibn_furniture_t_well_option',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_well_viable . " AS 'lbl_azp_ibn_furniture_t_well_viable',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_text_one . " AS 'lbl_azp_ibn_furniture_t_text_one',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_text_two . " AS 'lbl_azp_ibn_furniture_t_text_two',
					tc_azp_ibn_outcome." . d_azp_ibn_outcome_t_name . " AS 'lbl_azp_ibn_outcome_t_name',
					tc_azp_ibn_rank." . d_azp_ibn_rank_t_name . " AS 'lbl_azp_ibn_rank_t_name',
					tc_azp_ibn_regime." . d_azp_ibn_regime_t_name . " AS 'lbl_azp_ibn_regime_t_name',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_affiliate." . d_azp_ibn_type_affiliate_t_name . " AS 'lbl_azp_ibn_type_affiliate_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					tc_azp_ibn_type_contributor." . d_azp_ibn_type_contributor_t_name . " AS 'lbl_azp_ibn_type_contributor_t_name'
				FROM " . t_azp_ibn_furniture . " tc_azp_ibn_furniture
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " =
						tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "
				
				INNER JOIN " . t_azp_ibn_outcome . " tc_azp_ibn_outcome
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_outcome . " =
						tc_azp_ibn_outcome." . d_azp_ibn_outcome_id_azp_ibn_outcome . "
				
				INNER JOIN " . t_azp_ibn_rank . " tc_azp_ibn_rank
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_rank . " =
						tc_azp_ibn_rank." . d_azp_ibn_rank_id_azp_ibn_rank . "
				
				INNER JOIN " . t_azp_ibn_regime . " tc_azp_ibn_regime
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_regime . " =
						tc_azp_ibn_regime." . d_azp_ibn_regime_id_azp_ibn_regime . "
				
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_state . " =
						tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				
				INNER JOIN " . t_azp_ibn_type_affiliate . " tc_azp_ibn_type_affiliate
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " =
						tc_azp_ibn_type_affiliate." . d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . "
				
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_concept . " =
						tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				
				INNER JOIN " . t_azp_ibn_type_contributor . " tc_azp_ibn_type_contributor
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_contributor . " =
						tc_azp_ibn_type_contributor." . d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . "
				
				WHERE tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_deleted . " = '1'
					AND tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2'
					AND tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18'
					AND tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'
					AND tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_id . "'
				ORDER BY tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . " ASC
			");
		}

		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . " AS 'lbl_azp_ibn_furniture_id_azp_ibn_furniture',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_created . " AS 'lbl_azp_ibn_furniture_m_by_created',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_modified . " AS 'lbl_azp_ibn_furniture_m_by_modified',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_date_created . " AS 'lbl_azp_ibn_furniture_m_date_created',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_date_modified . " AS 'lbl_azp_ibn_furniture_m_date_modified',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_description . " AS 'lbl_azp_ibn_furniture_m_description',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_level . " AS 'lbl_azp_ibn_furniture_m_level',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_status . " AS 'lbl_azp_ibn_furniture_m_status',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_address . " AS 'lbl_azp_ibn_furniture_t_address',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_business_name . " AS 'lbl_azp_ibn_furniture_t_business_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_city . " AS 'lbl_azp_ibn_furniture_t_city',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_comment_legal . " AS 'lbl_azp_ibn_furniture_t_comment_legal',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_concept . " AS 'lbl_azp_ibn_furniture_t_concept',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_consecutive . " AS 'lbl_azp_ibn_furniture_t_consecutive',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_department . " AS 'lbl_azp_ibn_furniture_t_department',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_entity . " AS 'lbl_azp_ibn_furniture_t_entity',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_full_name . " AS 'lbl_azp_ibn_furniture_t_full_name',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_identification . " AS 'lbl_azp_ibn_furniture_t_identification',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_limitation . " AS 'lbl_azp_ibn_furniture_t_limitation',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_municipality . " AS 'lbl_azp_ibn_furniture_t_municipality',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_nit . " AS 'lbl_azp_ibn_furniture_t_nit',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_observation . " AS 'lbl_azp_ibn_furniture_t_observation',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_phone . " AS 'lbl_azp_ibn_furniture_t_phone',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_salary . " AS 'lbl_azp_ibn_furniture_t_salary',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_viable_causal . " AS 'lbl_azp_ibn_furniture_t_viable_causal',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_well_option . " AS 'lbl_azp_ibn_furniture_t_well_option',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_well_viable . " AS 'lbl_azp_ibn_furniture_t_well_viable',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_text_one . " AS 'lbl_azp_ibn_furniture_t_text_one',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_text_two . " AS 'lbl_azp_ibn_furniture_t_text_two',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_furniture_v_id_azp_ibn_control_panel',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_outcome . " AS 'lbl_azp_ibn_furniture_v_id_azp_ibn_outcome',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_rank . " AS 'lbl_azp_ibn_furniture_v_id_azp_ibn_rank',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_regime . " AS 'lbl_azp_ibn_furniture_v_id_azp_ibn_regime',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_furniture_v_id_azp_ibn_state',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " AS 'lbl_azp_ibn_furniture_v_id_azp_ibn_type_affiliate',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_furniture_v_id_azp_ibn_type_concept',
					tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_type_contributor . " AS 'lbl_azp_ibn_furniture_v_id_azp_ibn_type_contributor'
				FROM " . t_azp_ibn_furniture . " tc_azp_ibn_furniture
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				WHERE tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $this->id . "'
					AND tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_deleted . " = '1'
				LIMIT 1
			");
		}

		# Control Errores Update
		final private function error_sql_ibn_furniture_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "' AND " . d_azp_ibn_furniture_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "' AND " . d_azp_ibn_furniture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_furniture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "' AND " . d_azp_ibn_furniture_m_level . " = '2'");
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

		# Query Sql Update
		final public function sql_azp_ibn_furniture_delete(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_furniture_delete($data);
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
				$var_array = array(d_azp_ibn_furniture_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_furniture_email(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_email'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_email']);
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
						throw new Exception('<b>Error:</b> La base que estás enviando no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($var_sql[0][0]) == 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás enviando no se puede enviar hasta completar los siguientes campos en alguno de los registros: Regimen: Contributivo. Estado: Activo. Tipo Afiliacion: Cotizante.');
					}
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		# Query Sql Update
		final public function sql_azp_ibn_furniture_email(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_furniture_email($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('emails');
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_email']);
				$empty_affair = $this->db->scape($data['field_em_affair']);
				$empty_summernote = $this->db->scape($data['field_em_summernote']);
				#-------------------------------------------------------------------------#
				$var_label_search = array(
					'<br>', '</br>', '<p>', '</p>', '<i>', '</i>', '<b>', '</b>',
					'<u>', '</u>', '<s>', '</s>', '<img ', '</img ', '<center>', '</center>',
					'<h1>', '</h1>', '<h2>', '</h2>', '<h3>', '</h3>',
					'<h4>', '</h4>', '<h5>', '</h5>', '<h6>', '</h6>',
					'<span style=\"letter-spacing: 0.1px;\">', '</span>', '<span>',
				);
				$var_label_replace = array(
					'', '', '', '', '', '', '', '', '', '',
					'', '', '', '', '', '', '', '', '', '',
					'', '', '', '', '', '', '', '', '', '',
					'', '', '',
				);
				$var_affair = str_replace($var_label_search, $var_label_replace, $empty_affair);
				#-------------------------------------------------------------------------#
				# Asignacion de valores a variables
				$var_from_email = ''; $var_from_name = '';
				# Array para guardar valores
				$var_adds = array();
				# Array para guardar valores
				$var_copy = array();
				# Array para guardar valores
				$var_files = array();
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->query("
					SELECT *, tc_azp_configuration_email." . d_azp_configuration_email_id_azp_configuration_email . "
					FROM " . t_azp_user . " tc_azp_user
					
					INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
						ON tc_azp_user." . d_azp_user_id_azp_user . "
							= tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
					
					INNER JOIN " . t_azp_configuration_email . " tc_azp_configuration_email
						ON tc_azp_user." . d_azp_user_id_azp_user . "
							= tc_azp_configuration_email." . d_azp_configuration_email_v_id_azp_user . "
					
					WHERE tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
						AND tc_azp_configuration_email." . d_azp_configuration_email_t_email . " != ''
				");
				#-------------------------------------------------------------------------#
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$empty_ihost = $value[d_azp_configuration_email_t_host];
						$empty_iuser = $value[d_azp_configuration_email_t_email];
						$empty_ipass = $value[d_azp_configuration_email_t_pass];
						$empty_iport = $value[d_azp_configuration_email_t_port];
						$empty_ismtp = $value[d_azp_configuration_email_t_secure];
						$empty_iemail = $value[d_azp_user_t_email];
						$empty_inames = $value[d_azp_data_personal_t_names];
						$empty_isurns = $value[d_azp_data_personal_t_surnames];
						$empty_idata = $empty_inames . ' ' . $empty_isurns;
						# Asignacion de valores a nuevas variables
						$var_user_firm = $value[d_azp_data_personal_t_firm];
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Valores del array vacios
				$var_email_address = array();
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select("*", t_azp_ibn_email, d_azp_ibn_email_m_status . " = '1'");
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) {
					foreach ($var_sql as $key => $value) {
						$var_email = $value[d_azp_ibn_email_t_email];
						$var_names = $value[d_azp_ibn_email_t_names];
						$var_surnames = $value[d_azp_ibn_email_t_surnames];
						$var_email_address[$var_email] = $var_names . ' ' . $var_surnames;
						# Asignacion de valores a nuevas variables
						$empty_aemail = $value[d_azp_ibn_email_t_email];
						$empty_anames = $value[d_azp_ibn_email_t_names];
						$empty_asurns = $value[d_azp_ibn_email_t_names];
						$var_adds[$empty_aemail] = $empty_anames . ' ' . $empty_asurns;
					}
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla
				$var_sql = $this->db->select("*", t_azp_ibn_files,
					d_azp_ibn_files_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
					d_azp_ibn_files_m_deleted . " = '1' AND " .
					d_azp_ibn_files_m_level . " = '2' AND " .
					d_azp_ibn_files_m_temp . " = '2' AND " .
					d_azp_ibn_files_t_extension . " = 'xlsx' AND " .
					d_azp_ibn_files_t_file . " = 'Excel' AND " .
					d_azp_ibn_files_t_module . " = 'Salarios' AND " .
					d_azp_ibn_files_t_template . " = 'Email'"
				);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				if (false != $var_sql) {
					foreach ($var_sql as $key => $value) {
						$var_docum = $value[d_azp_ibn_files_t_name];
						$var_route = $value[d_azp_ibn_files_t_route];
						$var_compl = '../' . $var_route . $var_docum;
						$var_files[$var_compl] = $var_docum;
					}
				}
				#-------------------------------------------------------------------------#
				# Codigo html para la estructura del correo electronico
				$var_html = '
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
									<img src="' . URL . 'views/backend/images/email.png">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
									<p class="text-dark">
										<div class="m-0 d-flex">
											<div class="flex-1 text-contrast">
												' . html_entity_decode($empty_summernote) . '
											</div>
										</div>
									</p>
									<p class="text-dark">
										<div class="m-0 d-flex">
											<div class="flex-1 text-contrast">
												<img src="' . URL . $var_user_firm . '">
											</div>
										</div>
									</p>
								</div>
							</div>
						</div>
					</div>
				';
				#-------------------------------------------------------------------------#
				# Codigo de parametros de email
				$var_init = array($empty_ihost, $empty_iuser, $empty_ipass, $empty_iport, $empty_ismtp,);
				$var_html = Emails::main_template($var_html);
				$var_from = array($empty_iemail => $empty_idata,);
				//$var_adds = array($empty_aemail => $empty_adata,);
				//$var_copy = array($empty_email => $var_data,);
				$var_topic = html_entity_decode($var_affair);
				$var_email = Emails::main_send($var_init, $var_from, $var_adds, $var_copy, $var_html, $var_topic, $var_files,);
				#-------------------------------------------------------------------------#
				# Validacion del correo electronico a enviar
				$var_ms_success = '<b>Exito:</b> Correo electronico enviado.';
				$var_ms_error = '<b>Error:</b> Correo electronico no enviado.';
				#-------------------------------------------------------------------------#
				# Validacion del correo electronico a enviar
				if (true === $var_email) { $var_return = 'success'; $var_ms_name = 'message'; $var_ms_text = $var_ms_success; } else { $var_return = 'error'; $var_ms_name = 'message'; $var_ms_text = $var_ms_error; }
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_files_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_files, $var_array, d_azp_ibn_files_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array($var_return => 1, $var_ms_name => $var_ms_text,);
			}
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_furniture_finish(array $data) {
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_address . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna direccion.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_business_name . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna razon social.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_city . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna ciudad.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_consecutive . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_department . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna departamento.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_entity . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna entidad.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_full_name . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_identification . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_municipality . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna municipio.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_nit . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna nit.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_observation . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna observacion.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_phone . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna telefono.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_salary . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna salario.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_viable_causal . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna causal viable.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_t_well_viable . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna bien viable.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_outcome . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna resultado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_rank . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna rango.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna regimen.');
					}
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_state . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna tipo afiliado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_type_concept . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna tipo concepto.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_type_contributor . " = '' AND " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '18' AND " .
					d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '2' AND " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '2'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna tipo cotizante.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND (" . d_azp_ibn_furniture_t_address . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_t_business_name . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_t_city . " = ''" .
						//"OR" . " " . d_azp_ibn_furniture_t_comment_legal . " = ''" .
						//"OR" . " " . d_azp_ibn_furniture_t_concept . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_t_consecutive . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_t_department . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_t_entity . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_t_full_name . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_t_identification . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_t_municipality . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_t_nit . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_t_observation . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_t_phone . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_t_salary . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_t_viable_causal . " = ''" .
						//"OR" . " " . d_azp_ibn_furniture_t_well_option . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_t_well_viable . " = ''" .
						//"OR" . " " . d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = ''" .
						"OR" . " " . d_azp_ibn_furniture_v_id_azp_ibn_outcome . " = '1'" .
						"OR" . " " . d_azp_ibn_furniture_v_id_azp_ibn_rank . " = '1'" .
						"OR" . " " . d_azp_ibn_furniture_v_id_azp_ibn_regime . " = '1'" .
						"OR" . " " . d_azp_ibn_furniture_v_id_azp_ibn_state . " = '5'" .
						"OR" . " " . d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate . " = '1'" .
						"OR" . " " . d_azp_ibn_furniture_v_id_azp_ibn_type_concept . " = '5'" .
						"OR" . " " . d_azp_ibn_furniture_v_id_azp_ibn_type_contributor . " = '1'" . ")"
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
					d_azp_ibn_control_panel_t_mod_furniture . " = 'SI'"
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

		# Query Sql Update
		final public function sql_azp_ibn_furniture_finish(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_furniture_finish($data);
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
				$var_array = array(d_azp_ibn_control_panel_t_mod_furniture => 'SI',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_control_panel, $var_array, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Base finalizada correctamente.');
			}
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_furniture_import(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_im_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_im_id']);
				$empty_control = $this->db->scape($data['field_im_control']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_im_file']['name'];
				$empty_type = $_FILES['field_im_file']['type'];
				$empty_tmp_name = $_FILES['field_im_file']['tmp_name'];
				$empty_error = $_FILES['field_im_file']['error'];
				$empty_size = $_FILES['field_im_file']['size'];
				#-------------------------------------------------------------------------#
				$empty_tamanio = 1000; $empty_bytes = 1024;
				$empty_extension = array('csv',);
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

		# Query Sql Update
		final public function sql_azp_ibn_furniture_import(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_furniture_import($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('files');
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_im_id']);
				$empty_control = $this->db->scape($data['field_im_control']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_im_file']['name'];
				$empty_error = $_FILES['field_im_file']['error'];
				$empty_size = $_FILES['field_im_file']['size'];
				$empty_tmp_name = $_FILES['field_im_file']['tmp_name'];
				$empty_type = $_FILES['field_im_file']['type'];
				#-------------------------------------------------------------------------#
				$empty_route = '../systemfiles/filesproject/';
				$empty_folder = 'azp_ibn_furniture_import/';
				$empty_document = DATE_NUMBER . '_' . HOUR_NUMBER . '.csv';
				#-------------------------------------------------------------------------#
				# Contro de existencia de carpeta
				if (!is_dir($empty_route . $empty_folder)) {
					# Creacion de carpetas en el desarrollo
					Files::create_dir($empty_route . $empty_folder, 0777);
				}
				#-------------------------------------------------------------------------#
				# Subida de archivos en el desarrollo
				Files::upload_file(trim(preg_replace('/\s+/',' ', $empty_document)), $empty_tmp_name, $empty_route . $empty_folder, true);
				#-------------------------------------------------------------------------#
				# Dar permisos a la ruta y archivo
				chmod($empty_route . $empty_folder . $empty_document, 0777);
				#-------------------------------------------------------------------------#
				$var_search = array(
					'	', "'", '"', ';', '', '`', '─', '~', '´', '	', '{', '}', '[', ']', '–',
					'ç', 'Ç', 'æ', 'Æ', 'ã', 'Ã', '°', '\n', '\r', '\t');
				$var_replace = array(
					'', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
					'c', 'C', '', '', '', '', '', '', '', '');
				#-------------------------------------------------------------------------#
				# Eliminar registros de la tabla de importacion
				//$this->db->query("DELETE FROM " . t_azp_ibn_furniture_import);
				# Eliminar registros de la tabla de importacion
				//$this->db->query("ALTER TABLE " . t_azp_ibn_furniture_import . " AUTO_INCREMENT = 1");
				# Eliminar registros de la tabla de importacion
				$this->db->query(
					"DELETE FROM " . t_azp_ibn_furniture_import . " " .
					"WHERE " . d_azp_ibn_furniture_import_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
				);
				#-------------------------------------------------------------------------#
				# Obtener datos del archivo recibido y saltar lineas
				$var_file = file_get_contents($empty_route . $empty_folder . $empty_document);
				$var_file = explode("\n", $var_file);
				$var_file = array_filter($var_file);
				# Recorrer los datos del archivo y separarlos por coma o punto y coma
				foreach ($var_file as $key => $value) { 
					# Saltar la primera fila (índice 0) que contiene los títulos
					if ($key === 0) {
						continue;  # Saltar la primera fila
					}
					# Procesar el resto de las filas
					$var_list[] = explode(";", $value);
				}
				#-------------------------------------------------------------------------#
				# Recorrer los datos divididos por filas y almacenarlos en la base
				foreach ($var_list as $key => $value) {
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[0])) { $import_00 = ''; } else {
						if ($value[0] != '' || $value[0] != NULL) {
							$import_00 = $this->db->scape($value[0]);
						} else { $import_00 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[1])) { $import_01 = ''; } else {
						if ($value[1] != '' || $value[1] != NULL) {
							$import_01 = $this->db->scape($value[1]);
						} else { $import_01 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[2])) { $import_02 = ''; } else {
						if ($value[2] != '' || $value[2] != NULL) {
							$import_02 = $this->db->scape($value[2]);
						} else { $import_02 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[3])) { $import_03 = ''; } else {
						if ($value[3] != '' || $value[3] != NULL) {
							$import_03 = $this->db->scape($value[3]);
						} else { $import_03 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[4])) { $import_04 = ''; } else {
						if ($value[4] != '' || $value[4] != NULL) {
							$import_04 = $this->db->scape($value[4]);
						} else { $import_04 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[5])) { $import_05 = ''; } else {
						if ($value[5] != '' || $value[5] != NULL) {
							$import_05 = $this->db->scape($value[5]);
						} else { $import_05 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[6])) { $import_06 = ''; } else {
						if ($value[6] != '' || $value[6] != NULL) {
							$import_06 = $this->db->scape($value[6]);
						} else { $import_06 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[7])) { $import_07 = ''; } else {
						if ($value[7] != '' || $value[7] != NULL) {
							$import_07 = $this->db->scape($value[7]);
						} else { $import_07 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[8])) { $import_08 = ''; } else {
						if ($value[8] != '' || $value[8] != NULL) {
							$import_08 = $this->db->scape($value[8]);
						} else { $import_08 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[9])) { $import_09 = ''; } else {
						if ($value[9] != '' || $value[9] != NULL) {
							$import_09 = $this->db->scape($value[9]);
						} else { $import_09 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[10])) { $import_10 = ''; } else {
						if ($value[10] != '' || $value[10] != NULL) {
							$import_10 = $this->db->scape($value[10]);
						} else { $import_10 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[11])) { $import_11 = ''; } else {
						if ($value[11] != '' || $value[11] != NULL) {
							$import_11 = $this->db->scape($value[11]);
						} else { $import_11 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[12])) { $import_12 = ''; } else {
						if ($value[12] != '' || $value[12] != NULL) {
							$import_12 = $this->db->scape($value[12]);
						} else { $import_12 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[13])) { $import_13 = ''; } else {
						if ($value[13] != '' || $value[13] != NULL) {
							$import_13 = $this->db->scape($value[13]);
						} else { $import_13 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[14])) { $import_14 = ''; } else {
						if ($value[14] != '' || $value[14] != NULL) {
							$import_14 = $this->db->scape($value[14]);
						} else { $import_14 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[15])) { $import_15 = ''; } else {
						if ($value[15] != '' || $value[15] != NULL) {
							$import_15 = $this->db->scape($value[15]);
						} else { $import_15 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[16])) { $import_16 = ''; } else {
						if ($value[16] != '' || $value[16] != NULL) {
							$import_16 = $this->db->scape($value[16]);
						} else { $import_16 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[17])) { $import_17 = ''; } else {
						if ($value[17] != '' || $value[17] != NULL) {
							$import_17 = $this->db->scape($value[17]);
						} else { $import_17 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[18])) { $import_18 = ''; } else {
						if ($value[18] != '' || $value[18] != NULL) {
							$import_18 = $this->db->scape($value[18]);
						} else { $import_18 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[19])) { $import_19 = ''; } else {
						if ($value[19] != '' || $value[19] != NULL) {
							$import_19 = $this->db->scape($value[19]);
						} else { $import_19 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[20])) { $import_20 = ''; } else {
						if ($value[20] != '' || $value[20] != NULL) {
							$import_20 = $this->db->scape($value[20]);
						} else { $import_20 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[21])) { $import_21 = ''; } else {
						if ($value[21] != '' || $value[21] != NULL) {
							$import_21 = $this->db->scape($value[21]);
						} else { $import_21 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[22])) { $import_22 = ''; } else {
						if ($value[22] != '' || $value[22] != NULL) {
							$import_22 = $this->db->scape($value[22]);
						} else { $import_22 = ''; }
					}
					#-------------------------------------------------------------------------#
					# Reemplazar ciertos caracteres especificados de los valores recibidos
					$repl_00 = str_replace($var_search, $var_replace, $import_00);
					$repl_01 = str_replace($var_search, $var_replace, $import_01);
					$repl_02 = str_replace($var_search, $var_replace, $import_02);
					$repl_03 = str_replace($var_search, $var_replace, $import_03);
					$repl_04 = str_replace($var_search, $var_replace, $import_04);
					$repl_05 = str_replace($var_search, $var_replace, $import_05);
					$repl_06 = str_replace($var_search, $var_replace, $import_06);
					$repl_07 = str_replace($var_search, $var_replace, $import_07);
					$repl_08 = str_replace($var_search, $var_replace, $import_08);
					$repl_09 = str_replace($var_search, $var_replace, $import_09);
					$repl_10 = str_replace($var_search, $var_replace, $import_10);
					$repl_11 = str_replace($var_search, $var_replace, $import_11);
					$repl_12 = str_replace($var_search, $var_replace, $import_12);
					$repl_13 = str_replace($var_search, $var_replace, $import_13);
					$repl_14 = str_replace($var_search, $var_replace, $import_14);
					$repl_15 = str_replace($var_search, $var_replace, $import_15);
					$repl_16 = str_replace($var_search, $var_replace, $import_16);
					$repl_17 = str_replace($var_search, $var_replace, $import_17);
					$repl_18 = str_replace($var_search, $var_replace, $import_18);
					$repl_19 = str_replace($var_search, $var_replace, $import_19);
					$repl_20 = str_replace($var_search, $var_replace, $import_20);
					$repl_21 = str_replace($var_search, $var_replace, $import_21);
					$repl_22 = str_replace($var_search, $var_replace, $import_22);
					#-------------------------------------------------------------------------#
					# Eliminar dobles vacios en los valores recibidos
					$preg_00 = trim(preg_replace('/\s+/',' ', $repl_00));
					$preg_01 = trim(preg_replace('/\s+/',' ', $repl_01));
					$preg_02 = trim(preg_replace('/\s+/',' ', $repl_02));
					$preg_03 = trim(preg_replace('/\s+/',' ', $repl_03));
					$preg_04 = trim(preg_replace('/\s+/',' ', $repl_04));
					$preg_05 = trim(preg_replace('/\s+/',' ', $repl_05));
					$preg_06 = trim(preg_replace('/\s+/',' ', $repl_06));
					$preg_07 = trim(preg_replace('/\s+/',' ', $repl_07));
					$preg_08 = trim(preg_replace('/\s+/',' ', $repl_08));
					$preg_09 = trim(preg_replace('/\s+/',' ', $repl_09));
					$preg_10 = trim(preg_replace('/\s+/',' ', $repl_10));
					$preg_11 = trim(preg_replace('/\s+/',' ', $repl_11));
					$preg_12 = trim(preg_replace('/\s+/',' ', $repl_12));
					$preg_13 = trim(preg_replace('/\s+/',' ', $repl_13));
					$preg_14 = trim(preg_replace('/\s+/',' ', $repl_14));
					$preg_15 = trim(preg_replace('/\s+/',' ', $repl_15));
					$preg_16 = trim(preg_replace('/\s+/',' ', $repl_16));
					$preg_17 = trim(preg_replace('/\s+/',' ', $repl_17));
					$preg_18 = trim(preg_replace('/\s+/',' ', $repl_18));
					$preg_19 = trim(preg_replace('/\s+/',' ', $repl_19));
					$preg_20 = trim(preg_replace('/\s+/',' ', $repl_20));
					$preg_21 = trim(preg_replace('/\s+/',' ', $repl_21));
					$preg_22 = trim(preg_replace('/\s+/',' ', $repl_22));
					#-------------------------------------------------------------------------#
					# Validacion de valores recibidos para codificacion.
					$empty_00 = html_entity_decode(utf8_encode($preg_00));
					$empty_01 = html_entity_decode(utf8_encode($preg_01));
					$empty_02 = html_entity_decode(utf8_encode($preg_02));
					$empty_03 = html_entity_decode(utf8_encode($preg_03));
					$empty_04 = html_entity_decode(utf8_encode($preg_04));
					$empty_05 = html_entity_decode(utf8_encode($preg_05));
					$empty_06 = html_entity_decode(utf8_encode($preg_06));
					$empty_07 = html_entity_decode(utf8_encode($preg_07));
					$empty_08 = html_entity_decode(utf8_encode($preg_08));
					$empty_09 = html_entity_decode(utf8_encode($preg_09));
					$empty_10 = html_entity_decode(utf8_encode($preg_10));
					$empty_11 = html_entity_decode(utf8_encode($preg_11));
					$empty_12 = html_entity_decode(utf8_encode($preg_12));
					$empty_13 = html_entity_decode(utf8_encode($preg_13));
					$empty_14 = html_entity_decode(utf8_encode($preg_14));
					$empty_15 = html_entity_decode(utf8_encode($preg_15));
					$empty_16 = html_entity_decode(utf8_encode($preg_16));
					$empty_17 = html_entity_decode(utf8_encode($preg_17));
					$empty_18 = html_entity_decode(utf8_encode($preg_18));
					$empty_19 = html_entity_decode(utf8_encode($preg_19));
					$empty_20 = html_entity_decode(utf8_encode($preg_20));
					$empty_21 = html_entity_decode(utf8_encode($preg_21));
					$empty_22 = html_entity_decode(utf8_encode($preg_22));
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					/*if (strlen($empty_01) == 1 && strcasecmp($empty_01, "C") === 0) {
						$empty_01 = "ACTIVO";
					}*/
					$var_sql = $this->db->select(
						'*',
						t_azp_ibn_state,
						"UPPER(" . d_azp_ibn_state_t_name . ") = '" . strtoupper($empty_01) . "' AND " .
						d_azp_ibn_state_v_id_azp_ibn_module . " = '5'"
					);
					# Validar si la consulta es verdadera
					if ($var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Asignar valores a una vairable
							$empty_ibn_state = $key_sql[d_azp_ibn_state_id_azp_ibn_state];
						endforeach;
					} else { $empty_ibn_state = 5; }
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					/*if (strlen($empty_03) == 1 && strcasecmp($empty_03, "C") === 0) {
						$empty_03 = "CONTRIBUTIVO";
					}*/
					$var_sql = $this->db->select(
						'*',
						t_azp_ibn_regime,
						"UPPER(" . d_azp_ibn_regime_t_name . ") = '" . strtoupper($empty_03) . "'"
					);
					# Validar si la consulta es verdadera
					if ($var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Asignar valores a una vairable
							$empty_ibn_regime = $key_sql[d_azp_ibn_regime_id_azp_ibn_regime];
						endforeach;
					} else { $empty_ibn_regime = 1; }
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					/*if (strlen($empty_05) == 1 && strcasecmp($empty_05, "C") === 0) {
						$empty_05 = "COTIZANTE";
					}*/
					$var_sql = $this->db->select(
						'*',
						t_azp_ibn_type_affiliate,
						"UPPER(" . d_azp_ibn_type_affiliate_t_name . ") = '" . strtoupper($empty_05) . "'"
					);
					# Validar si la consulta es verdadera
					if ($var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Asignar valores a una vairable
							$empty_type_affiliate = $key_sql[d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate];
						endforeach;
					} else { $empty_type_affiliate = 1; }
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select(
						'*',
						t_azp_ibn_rank,
						"UPPER(" . d_azp_ibn_rank_t_name . ") = '" . strtoupper($empty_13) . "'"
					);
					# Validar si la consulta es verdadera
					if ($var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Asignar valores a una vairable
							$empty_ibn_rank = $key_sql[d_azp_ibn_rank_id_azp_ibn_rank];
						endforeach;
					} else { $empty_ibn_rank = 1; }
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					if (strtoupper($empty_15) == strtoupper('NO')) {
						$empty_well_option = '';
					} else if (strtoupper($empty_15) == strtoupper('SI')) {
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select(
							'*',
							t_azp_ibn_type_affiliate,
							d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $empty_type_affiliate . "'"
						);
						# Validar si la consulta es verdadera
						if ($var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Asignar valores a una vairable
								$empty_value_affiliate = $key_sql[d_azp_ibn_type_affiliate_t_name];
							endforeach;
						} else { $empty_value_affiliate = ''; }
						# Consulta para identificar los nuevos registros en la tabla
						$var_sql = $this->db->select(
							'*',
							t_azp_ibn_rank,
							d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $empty_ibn_rank . "'"
						);
						# Validar si la consulta es verdadera
						if ($var_sql) {
							# Recorrer las filas de la consulta generada
							foreach ($var_sql as $key_sql):
								# Asignar valores a una vairable
								$empty_value_rank = $key_sql[d_azp_ibn_rank_t_name];
							endforeach;
						} else { $empty_value_rank = ''; }
						$empty_well_option = $empty_value_affiliate . ' ' . $empty_value_rank;
					} else { $empty_well_option = 'NO'; }
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select(
						'*',
						t_azp_ibn_type_concept,
						"UPPER(" . d_azp_ibn_type_concept_t_name . ") = '" . strtoupper($empty_17) . "' AND " .
						d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '5'"
					);
					# Validar si la consulta es verdadera
					if ($var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Asignar valores a una vairable
							$empty_type_concept = $key_sql[d_azp_ibn_type_concept_id_azp_ibn_type_concept];
						endforeach;
					} else { $empty_type_concept = 1; }
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select(
						'*',
						t_azp_ibn_type_concept,
						d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $empty_type_concept . "' AND " .
						d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '5'"
					);
					# Validar si la consulta es verdadera
					if ($var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Asignar valores a una vairable
							$empty_viable_causal = $key_sql[d_azp_ibn_type_concept_t_text];
						endforeach;
					} else { $empty_viable_causal = ''; }
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select(
						'*',
						t_azp_ibn_outcome,
						"UPPER(" . d_azp_ibn_outcome_t_name . ") = '" . strtoupper($empty_19) . "'"
					);
					# Validar si la consulta es verdadera
					if ($var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Asignar valores a una vairable
							$empty_ibn_outcome = $key_sql[d_azp_ibn_outcome_id_azp_ibn_outcome];
						endforeach;
					} else { $empty_ibn_outcome = 1; }
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select(
						'*',
						t_azp_ibn_type_contributor,
						"UPPER(" . d_azp_ibn_type_contributor_t_name . ") = '" . strtoupper($empty_20) . "'"
					);
					# Validar si la consulta es verdadera
					if ($var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							# Asignar valores a una vairable
							$empty_ibn_contributor = $key_sql[d_azp_ibn_type_contributor_id_azp_ibn_type_contributor];
						endforeach;
					} else { $empty_ibn_contributor = 1; }
					#-------------------------------------------------------------------------#
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(
						d_azp_ibn_furniture_import_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_ibn_furniture_import_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_ibn_furniture_import_m_date_created => DATE_HOUR,
						d_azp_ibn_furniture_import_m_date_modified => DATE_HOUR,
						d_azp_ibn_furniture_import_m_deleted => '1',
						d_azp_ibn_furniture_import_m_description => '',
						d_azp_ibn_furniture_import_m_level => '2',
						d_azp_ibn_furniture_import_m_status => '1',
						d_azp_ibn_furniture_import_m_temp => '1',
						d_azp_ibn_furniture_import_t_identification => strtoupper($empty_00),
						d_azp_ibn_furniture_import_v_id_azp_ibn_state => strtoupper($empty_ibn_state),
						d_azp_ibn_furniture_import_t_city => strtoupper($empty_02),
						d_azp_ibn_furniture_import_v_id_azp_ibn_regime => strtoupper($empty_ibn_regime),
						d_azp_ibn_furniture_import_t_entity => strtoupper($empty_04),
						d_azp_ibn_furniture_import_v_id_azp_ibn_type_affiliate => $empty_type_affiliate,
						d_azp_ibn_furniture_import_t_nit => strtoupper($empty_06),
						d_azp_ibn_furniture_import_t_business_name => strtoupper($empty_07),
						d_azp_ibn_furniture_import_t_salary => strtoupper($empty_08),
						d_azp_ibn_furniture_import_t_phone => strtoupper($empty_09),
						d_azp_ibn_furniture_import_t_address => strtoupper($empty_10),
						d_azp_ibn_furniture_import_t_municipality => strtoupper($empty_11),
						d_azp_ibn_furniture_import_t_department => strtoupper($empty_12),
						d_azp_ibn_furniture_import_v_id_azp_ibn_rank => $empty_ibn_rank,
						d_azp_ibn_furniture_import_t_observation => strtoupper($empty_14),
						d_azp_ibn_furniture_import_t_well_option => strtoupper($empty_15),
						d_azp_ibn_furniture_import_t_well_viable => strtoupper($empty_well_option),
						d_azp_ibn_furniture_import_v_id_azp_ibn_type_concept => $empty_type_concept,
						d_azp_ibn_furniture_import_t_viable_causal => strtoupper($empty_viable_causal),
						d_azp_ibn_furniture_import_v_id_azp_ibn_outcome => $empty_ibn_outcome,
						d_azp_ibn_furniture_import_v_id_azp_ibn_type_contributor => $empty_ibn_contributor,
						d_azp_ibn_furniture_import_t_text_one => strtoupper($empty_21),
						d_azp_ibn_furniture_import_t_text_two => strtoupper($empty_22),
						d_azp_ibn_furniture_import_t_consecutive => strtoupper(''),
						d_azp_ibn_furniture_import_t_full_name => strtoupper(''),
						d_azp_ibn_furniture_import_v_id_azp_ibn_control_panel => $empty_control,
					);
					# Insertar valores en la tabla segun estructura de la tabla
					$this->db->insert(t_azp_ibn_furniture_import, $var_array);
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("*", t_azp_ibn_data_main, d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_control . "'");
				# Validar si la consulta es verdadera
				if ($var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_ibn_furniture_import_t_consecutive => $key_sql[d_azp_ibn_data_main_t_consecutive],
							d_azp_ibn_furniture_import_t_full_name => $key_sql[d_azp_ibn_data_main_t_full_name],
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(
							t_azp_ibn_furniture_import, $var_array,
							d_azp_ibn_furniture_import_t_identification . " = '" . $key_sql[d_azp_ibn_data_main_t_identification] . "' AND " .
							d_azp_ibn_furniture_import_v_id_azp_ibn_control_panel . " = '" . $key_sql[d_azp_ibn_data_main_v_id_azp_ibn_control_panel] . "'"
						);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				/*$var_sql = $this->db->select("*", t_azp_ibn_furniture_import);
				# Validar si la consulta es verdadera
				if ($var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Asignacion de valores a variables
						$var_value = $key_sql[d_azp_ibn_furniture_import_id_azp_ibn_furniture_import] - 1;
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_ibn_furniture_import_t_consecutive => $var_value,);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_ibn_furniture_import, $var_array,
							d_azp_ibn_furniture_import_id_azp_ibn_furniture_import . " = '" . $key_sql[d_azp_ibn_furniture_import_id_azp_ibn_furniture_import] . "'");
					endforeach;
				}*/
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture_import, d_azp_ibn_furniture_import_v_id_azp_ibn_regime . " = '0'");
				# Validar si la consulta es verdadera
				if (true == $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql): $var_count_regime = $key_sql['lbl_count']; endforeach;
				} else { $var_count_regime = 0; }
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture_import, d_azp_ibn_furniture_import_v_id_azp_ibn_state . " = '0'");
				# Validar si la consulta es verdadera
				if (true == $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql): $var_count_state = $key_sql['lbl_count']; endforeach;
				} else { $var_count_state = 0; }
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_furniture_import, d_azp_ibn_furniture_import_v_id_azp_ibn_type_affiliate . " = '0'");
				# Validar si la consulta es verdadera
				if (true == $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql): $var_count_type_affiliate = $key_sql['lbl_count']; endforeach;
				} else { $var_count_type_affiliate = 0; }*/
				#-------------------------------------------------------------------------#
				/*if ($var_count_regime > 0) {
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("MIN(" . d_azp_ibn_furniture_import_id_azp_ibn_furniture_import . ") AS 'lbl_min_id'",
						t_azp_ibn_furniture_import, d_azp_ibn_furniture_import_v_id_azp_ibn_regime . " = '0'");
					# Validar si la consulta es verdadera
					if (true == $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql): $var_min_id = $key_sql['lbl_min_id'] - 1; endforeach;
						# Retornar el mensaje una vez ejecutada la rutina del proceso
						return array('danger' => 1, 'message' => '<b>Error:</b> El regimen ingresado en la fila ' .
							$var_min_id . ' de excel, no coincide con la base.');
					}
				}*/
				#-------------------------------------------------------------------------#
				/*if ($var_count_state > 0) {
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("MIN(" . d_azp_ibn_furniture_import_id_azp_ibn_furniture_import . ") AS 'lbl_min_id'",
						t_azp_ibn_furniture_import, d_azp_ibn_furniture_import_v_id_azp_ibn_state . " = '0'");
					# Validar si la consulta es verdadera
					if (true == $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql): $var_min_id = $key_sql['lbl_min_id'] - 1; endforeach;
						# Retornar el mensaje una vez ejecutada la rutina del proceso
						return array('danger' => 1, 'message' => '<b>Error:</b> El estado ingresado en la fila ' .
							$var_min_id . ' de excel, no coincide con la base.');
					}
				}*/
				#-------------------------------------------------------------------------#
				/*if ($var_count_type_affiliate > 0) {
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("MIN(" . d_azp_ibn_furniture_import_id_azp_ibn_furniture_import . ") AS 'lbl_min_id'",
						t_azp_ibn_furniture_import, d_azp_ibn_furniture_import_v_id_azp_ibn_type_affiliate . " = '0'");
					# Validar si la consulta es verdadera
					if (true == $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql): $var_min_id = $key_sql['lbl_min_id'] - 1; endforeach;
						# Retornar el mensaje una vez ejecutada la rutina del proceso
						return array('danger' => 1, 'message' => '<b>Error:</b> El tipo de afiliacion ingresado en la fila ' .
							$var_min_id . ' de excel, no coincide con la base.');
					}
				}*/
				#-------------------------------------------------------------------------#
				/*if ($var_count_type_contributor > 0) {
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("MIN(" . d_azp_ibn_furniture_import_id_azp_ibn_furniture_import . ") AS 'lbl_min_id'",
						t_azp_ibn_furniture_import, d_azp_ibn_furniture_import_v_id_azp_ibn_type_contributor . " = '0'");
					# Validar si la consulta es verdadera
					if (true == $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql): $var_min_id = $key_sql['lbl_min_id'] - 1; endforeach;
						# Retornar el mensaje una vez ejecutada la rutina del proceso
						return array('danger' => 1, 'message' => '<b>Error:</b> El tipo de cotizante ingresado en la fila ' .
							$var_min_id . ' de excel, no coincide con la base.');
					}
				}*/
				#-------------------------------------------------------------------------#
				//if ($var_count_regime == 0 && $var_count_state == 0 && $var_count_type_affiliate == 0) {
				//if ($var_count_type_contributor == 0) {
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select(
						"*", t_azp_ibn_furniture_import,
						d_azp_ibn_furniture_import_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'"
					);
					# Validar si la consulta es verdadera
					if ($var_sql) {
						foreach ($var_sql as $key_sql):
							# Organizacion de los valores capturados y asignados a los campos a insertar
							$var_array = array(
								//d_azp_ibn_furniture_m_by_created => $key_sql[d_azp_ibn_furniture_import_m_by_created],
								d_azp_ibn_furniture_m_by_modified => $key_sql[d_azp_ibn_furniture_import_m_by_modified],
								//d_azp_ibn_furniture_m_date_created => $key_sql[d_azp_ibn_furniture_import_m_date_created],
								d_azp_ibn_furniture_m_date_modified => $key_sql[d_azp_ibn_furniture_import_m_date_modified],
								//d_azp_ibn_furniture_m_deleted => $key_sql[d_azp_ibn_furniture_import_m_deleted],
								//d_azp_ibn_furniture_m_description => $key_sql[d_azp_ibn_furniture_import_m_description],
								//d_azp_ibn_furniture_m_level => $key_sql[d_azp_ibn_furniture_import_m_level],
								//d_azp_ibn_furniture_m_status => $key_sql[d_azp_ibn_furniture_import_m_status],
								//d_azp_ibn_furniture_m_temp => $key_sql[d_azp_ibn_furniture_import_m_temp],
								d_azp_ibn_furniture_t_address => strtoupper($key_sql[d_azp_ibn_furniture_import_t_address]),
								d_azp_ibn_furniture_t_business_name => strtoupper($key_sql[d_azp_ibn_furniture_import_t_business_name]),
								d_azp_ibn_furniture_t_city => strtoupper($key_sql[d_azp_ibn_furniture_import_t_city]),
								//d_azp_ibn_furniture_t_consecutive => strtoupper($key_sql[d_azp_ibn_furniture_import_t_consecutive]),
								d_azp_ibn_furniture_t_department => strtoupper($key_sql[d_azp_ibn_furniture_import_t_department]),
								d_azp_ibn_furniture_t_entity => strtoupper($key_sql[d_azp_ibn_furniture_import_t_entity]),
								//d_azp_ibn_furniture_t_full_name => strtoupper($key_sql[d_azp_ibn_furniture_import_t_full_name]),
								//d_azp_ibn_furniture_t_identification => strtoupper($key_sql[d_azp_ibn_furniture_import_t_identification]),
								d_azp_ibn_furniture_t_municipality => strtoupper($key_sql[d_azp_ibn_furniture_import_t_municipality]),
								d_azp_ibn_furniture_t_nit => strtoupper($key_sql[d_azp_ibn_furniture_import_t_nit]),
								d_azp_ibn_furniture_t_observation => strtoupper($key_sql[d_azp_ibn_furniture_import_t_observation]),
								d_azp_ibn_furniture_t_phone => strtoupper($key_sql[d_azp_ibn_furniture_import_t_phone]),
								d_azp_ibn_furniture_t_salary => strtoupper($key_sql[d_azp_ibn_furniture_import_t_salary]),
								d_azp_ibn_furniture_t_viable_causal => strtoupper($key_sql[d_azp_ibn_furniture_import_t_viable_causal]),
								d_azp_ibn_furniture_t_well_option => strtoupper($key_sql[d_azp_ibn_furniture_import_t_well_option]),
								d_azp_ibn_furniture_t_well_viable => strtoupper($key_sql[d_azp_ibn_furniture_import_t_well_viable]),
								d_azp_ibn_furniture_t_text_one => strtoupper($key_sql[d_azp_ibn_furniture_import_t_text_one]),
								d_azp_ibn_furniture_t_text_two => strtoupper($key_sql[d_azp_ibn_furniture_import_t_text_two]),
								//d_azp_ibn_furniture_v_id_azp_ibn_control_panel => $key_sql[d_azp_ibn_furniture_import_v_id_azp_ibn_control_panel],
								d_azp_ibn_furniture_v_id_azp_ibn_outcome => $key_sql[d_azp_ibn_furniture_import_v_id_azp_ibn_outcome],
								d_azp_ibn_furniture_v_id_azp_ibn_rank => $key_sql[d_azp_ibn_furniture_import_v_id_azp_ibn_rank],
								d_azp_ibn_furniture_v_id_azp_ibn_regime => $key_sql[d_azp_ibn_furniture_import_v_id_azp_ibn_regime],
								d_azp_ibn_furniture_v_id_azp_ibn_state => $key_sql[d_azp_ibn_furniture_import_v_id_azp_ibn_state],
								d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate => $key_sql[d_azp_ibn_furniture_import_v_id_azp_ibn_type_affiliate],
								d_azp_ibn_furniture_v_id_azp_ibn_type_concept => $key_sql[d_azp_ibn_furniture_import_v_id_azp_ibn_type_concept],
								d_azp_ibn_furniture_v_id_azp_ibn_type_contributor => $key_sql[d_azp_ibn_furniture_import_v_id_azp_ibn_type_contributor],
							);
							$identification = $key_sql[d_azp_ibn_furniture_import_t_identification];
							$controlPanel = $key_sql[d_azp_ibn_furniture_import_v_id_azp_ibn_control_panel];
							# Insertar valores en la tabla segun estructura de la tabla
							$this->db->update(
								t_azp_ibn_furniture, $var_array,
								d_azp_ibn_furniture_t_identification . " = '" . $identification . "' AND " .
								d_azp_ibn_furniture_import_v_id_azp_ibn_control_panel . " = '" . $controlPanel . "'"
							);
						endforeach;
					}
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("COUNT(*) AS 'lbl_count_total'", t_azp_ibn_furniture_import);
					# Validar si la consulta es verdadera
					if ($var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							$var_total_id = $key_sql['lbl_count_total'];
						endforeach;
					} else { $var_total_id = 0; }
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select(
						"COUNT(" . d_azp_ibn_furniture_import_t_consecutive . ") AS 'lbl_count_total'",
						t_azp_ibn_furniture_import,
						d_azp_ibn_furniture_import_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " .
						d_azp_ibn_furniture_import_t_consecutive . " > '0'"
					);
					# Validar si la consulta es verdadera
					if ($var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql):
							$var_total_up = $key_sql['lbl_count_total'];
						endforeach;
					} else { $var_total_up = 0; }
					#-------------------------------------------------------------------------#
					# Retornar el mensaje una vez ejecutada la rutina del proceso
					return array(
						'success' => 1,
						'message' =>
							'<b>Exito:</b>' .' ' . 'Archivo almacenado correctamente.' . '<br><br>' .
							'<b>Procesado:</b>' .' ' . 'Registros importados en total' . ' '. $var_total_id . '<br><br>' .
							'<b>Procesado:</b>' .' ' . 'Registros actualizados correctamente' . ' '. $var_total_up
							,
					);
				/*} else {
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->select("COUNT(*) AS 'lbl_count_total'", t_azp_ibn_furniture_import);
					# Validar si la consulta es verdadera
					if ($var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key_sql): $var_total_id = $key_sql['lbl_count_total']; endforeach;
						# Retornar el mensaje una vez ejecutada la rutina del proceso
						return array('error' => 1,
							'message' => '<b>Error:</b>' .' ' . 'Archivo procesado incorrectamente.',
						);
					}
				}*/
				#-------------------------------------------------------------------------#
			}
		}

		# Control Errores Insert
		final private function error_sql_azp_ibn_furniture_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_address'])) { throw new Exception('<b>Error:</b> El campo de direccion esta prohibido modificar.'); }
				if (!isset($data['field_cr_business_name'])) { throw new Exception('<b>Error:</b> El campo de razon social esta prohibido modificar.'); }
				if (!isset($data['field_cr_city'])) { throw new Exception('<b>Error:</b> El campo de ciudad esta prohibido modificar.'); }
				if (!isset($data['field_cr_comment_legal'])) { throw new Exception('<b>Error:</b> El campo de comentario juridico esta prohibido modificar.'); }
				if (!isset($data['field_cr_department'])) { throw new Exception('<b>Error:</b> El campo de departamento esta prohibido modificar.'); }
				if (!isset($data['field_cr_entity'])) { throw new Exception('<b>Error:</b> El campo de entidad esta prohibido modificar.'); }
				if (!isset($data['field_cr_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_identification'])) { throw new Exception('<b>Error:</b> El campo de cedula esta prohibido modificar.'); }
				if (!isset($data['field_cr_limitation'])) { throw new Exception('<b>Error:</b> El campo de limitacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_municipality'])) { throw new Exception('<b>Error:</b> El campo de municipio esta prohibido modificar.'); }
				if (!isset($data['field_cr_nit'])) { throw new Exception('<b>Error:</b> El campo de nit esta prohibido modificar.'); }
				if (!isset($data['field_cr_observation'])) { throw new Exception('<b>Error:</b> El campo de observacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_phone'])) { throw new Exception('<b>Error:</b> El campo de telefono esta prohibido modificar.'); }
				if (!isset($data['field_cr_salary'])) { throw new Exception('<b>Error:</b> El campo de sueldo esta prohibido modificar.'); }
				if (!isset($data['field_cr_viable_causal'])) { throw new Exception('<b>Error:</b> El campo de causal viable esta prohibido modificar.'); }
				if (!isset($data['field_cr_well_option'])) { throw new Exception('<b>Error:</b> El campo de viable esta prohibido modificar.'); }
				if (!isset($data['field_cr_well_viable'])) { throw new Exception('<b>Error:</b> El campo de bien viable esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_one'])) { throw new Exception('<b>Error:</b> El campo 1 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_two'])) { throw new Exception('<b>Error:</b> El campo 2 esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_control_panel'])) { throw new Exception('<b>Error:</b> El campo de tablero control esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_outcome'])) { throw new Exception('<b>Error:</b> El campo de resultado esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_rank'])) { throw new Exception('<b>Error:</b> El campo de rango esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_regime'])) { throw new Exception('<b>Error:</b> El campo de regimen esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_type_affiliate'])) { throw new Exception('<b>Error:</b> El campo de tipo afiliado esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_type_concept'])) { throw new Exception('<b>Error:</b> El campo de tipo concepto esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_type_contributor'])) { throw new Exception('<b>Error:</b> El campo de tipo cotizante esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_address = $this->db->scape($data['field_cr_address']);
				$empty_business_name = $this->db->scape($data['field_cr_business_name']);
				$empty_city = $this->db->scape($data['field_cr_city']);
				$empty_comment_legal = $this->db->scape($data['field_cr_comment_legal']);
				$empty_department = $this->db->scape($data['field_cr_department']);
				$empty_entity = $this->db->scape($data['field_cr_entity']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_limitation = $this->db->scape($data['field_cr_limitation']);
				$empty_municipality = $this->db->scape($data['field_cr_municipality']);
				$empty_nit = $this->db->scape($data['field_cr_nit']);
				$empty_observation = $this->db->scape($data['field_cr_observation']);
				$empty_phone = $this->db->scape($data['field_cr_phone']);
				$empty_salary = $this->db->scape($data['field_cr_salary']);
				$empty_viable_causal = $this->db->scape($data['field_cr_viable_causal']);
				$empty_well_option = $this->db->scape($data['field_cr_well_option']);
				$empty_well_viable = $this->db->scape($data['field_cr_well_viable']);
				$empty_text_one = $this->db->scape($data['field_cr_text_one']);
				$empty_text_two = $this->db->scape($data['field_cr_text_two']);
				$empty_ibn_control_panel = $this->db->scape($data['field_cr_ibn_control_panel']);
				$empty_ibn_outcome = $this->db->scape($data['field_cr_ibn_outcome']);
				$empty_ibn_rank = $this->db->scape($data['field_cr_ibn_rank']);
				$empty_ibn_regime = $this->db->scape($data['field_cr_ibn_regime']);
				$empty_ibn_state = $this->db->scape($data['field_cr_ibn_state']);
				$empty_ibn_type_affiliate = $this->db->scape($data['field_cr_ibn_type_affiliate']);
				$empty_ibn_type_concept = $this->db->scape($data['field_cr_ibn_type_concept']);
				$empty_ibn_type_contributor = $this->db->scape($data['field_cr_ibn_type_contributor']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
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
				if (Func::emp($empty_well_option) || strtolower($empty_well_option) == strtolower('seleccionar')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de viable es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!is_numeric($empty_well_option)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de viable solo permite numeros.');
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
				if (Func::emp($empty_ibn_outcome) || strtolower($empty_ibn_outcome) == strtolower('seleccionar') || $empty_ibn_outcome == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_outcome)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_rank) || strtolower($empty_ibn_rank) == strtolower('seleccionar') || $empty_ibn_rank == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de rango es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_rank)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de rango solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_regime) || strtolower($empty_ibn_regime) == strtolower('seleccionar') || $empty_ibn_regime == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de regimen es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_regime)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de regimen solo permite numeros.');
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
				if (Func::emp($empty_ibn_type_affiliate) || strtolower($empty_ibn_type_affiliate) == strtolower('seleccionar') || $empty_ibn_type_affiliate == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de afiliado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_type_affiliate)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de afiliado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_type_concept) || strtolower($empty_ibn_type_concept) == strtolower('seleccionar') || $empty_ibn_type_concept == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de concepto es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_type_concept)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de concepto solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_type_contributor) || strtolower($empty_ibn_type_contributor) == strtolower('seleccionar') || $empty_ibn_type_contributor == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de cotizante es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_type_contributor)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de cotizante solo permite numeros.');
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
				$sql_ibn_outcome = $this->db->select('*', t_azp_ibn_outcome, d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $empty_ibn_outcome . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_outcome) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_outcome) == '') { $sql_ibn_outcome[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_outcome[0][0]) != strtolower($empty_ibn_outcome)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El resultado seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_rank = $this->db->select('*', t_azp_ibn_rank, d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $empty_ibn_rank . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_rank) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_rank) == '') { $sql_ibn_rank[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_rank[0][0]) != strtolower($empty_ibn_rank)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El rango seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_regime = $this->db->select('*', t_azp_ibn_regime, d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $empty_ibn_regime . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_regime) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_regime) == '') { $sql_ibn_regime[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_regime[0][0]) != strtolower($empty_ibn_regime)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El regimen seleccionado no se encuentra registrado.');
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
				# Verificar en la base de datos si existen el registro
				$sql_ibn_type_affiliate = $this->db->select('*', t_azp_ibn_type_affiliate, d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $empty_ibn_type_affiliate . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_type_affiliate) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_type_affiliate) == '') { $sql_ibn_type_affiliate[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_type_affiliate[0][0]) != strtolower($empty_ibn_type_affiliate)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo de afiliado seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_type_concept = $this->db->select('*', t_azp_ibn_type_concept, d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $empty_ibn_type_concept . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_type_concept) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_type_concept) == '') { $sql_ibn_type_concept[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_type_concept[0][0]) != strtolower($empty_ibn_type_concept)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo de concepto seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		# Query Sql Insert
		final public function sql_azp_ibn_furniture_insert(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_furniture_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_address = $this->db->scape($data['field_cr_address']);
				$empty_business_name = $this->db->scape($data['field_cr_business_name']);
				$empty_city = $this->db->scape($data['field_cr_city']);
				$empty_comment_legal = $this->db->scape($data['field_cr_comment_legal']);
				$empty_department = $this->db->scape($data['field_cr_department']);
				$empty_entity = $this->db->scape($data['field_cr_entity']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_limitation = $this->db->scape($data['field_cr_limitation']);
				$empty_municipality = $this->db->scape($data['field_cr_municipality']);
				$empty_nit = $this->db->scape($data['field_cr_nit']);
				$empty_observation = $this->db->scape($data['field_cr_observation']);
				$empty_phone = $this->db->scape($data['field_cr_phone']);
				$empty_salary = $this->db->scape($data['field_cr_salary']);
				$empty_viable_causal = $this->db->scape($data['field_cr_viable_causal']);
				$empty_well_option = $this->db->scape($data['field_cr_well_option']);
				//$empty_well_viable = $this->db->scape($data['field_cr_well_viable']);
				$empty_text_one = $this->db->scape($data['field_cr_text_one']);
				$empty_text_two = $this->db->scape($data['field_cr_text_two']);
				$empty_ibn_control_panel = $this->db->scape($data['field_cr_ibn_control_panel']);
				$empty_ibn_outcome = $this->db->scape($data['field_cr_ibn_outcome']);
				$empty_ibn_rank = $this->db->scape($data['field_cr_ibn_rank']);
				$empty_ibn_regime = $this->db->scape($data['field_cr_ibn_regime']);
				$empty_ibn_state = $this->db->scape($data['field_cr_ibn_state']);
				$empty_ibn_type_affiliate = $this->db->scape($data['field_cr_ibn_type_affiliate']);
				$empty_ibn_type_concept = $this->db->scape($data['field_cr_ibn_type_concept']);
				$empty_ibn_type_contributor = $this->db->scape($data['field_cr_ibn_type_contributor']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_ibn_rank, d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $empty_ibn_rank . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value): $empty_rank_name = $value[d_azp_ibn_rank_t_name]; endforeach;
				} else { $empty_rank_name = ''; }
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_ibn_type_affiliate,
					d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $empty_ibn_type_affiliate . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value): $empty_type_affiliate_name = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
				} else { $empty_type_affiliate_name = ''; }
				#-------------------------------------------------------------------------#
				if ($empty_well_option != 'SI' || $empty_well_option != 'NO') { $empty_well_viable = ''; }
				if ($empty_well_option == 'SI') { $empty_well_viable = $empty_type_affiliate_name . ' ' . $empty_rank_name; }
				if ($empty_well_option == 'NO') { $empty_well_viable = ''; }
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "' AND " .
					d_azp_ibn_furniture_t_identification . " = '" . $empty_identification . "' " .
					"GROUP BY " . d_azp_ibn_furniture_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value):
						# Asignar valores a una nueva variable
						$empty_consecutive = $value[d_azp_ibn_furniture_t_consecutive];
					endforeach;
				} else {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select("MAX(" . d_azp_ibn_furniture_t_consecutive . ") AS 'lbl_max'", t_azp_ibn_furniture,
						d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'");
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
					d_azp_ibn_furniture_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_ibn_furniture_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_furniture_m_date_created => DATE_HOUR,
					d_azp_ibn_furniture_m_date_modified => DATE_HOUR,
					d_azp_ibn_furniture_m_deleted => '1',
					d_azp_ibn_furniture_m_description => $empty_description,
					d_azp_ibn_furniture_m_level => '2',
					d_azp_ibn_furniture_m_status => '1',
					d_azp_ibn_furniture_m_temp => '2',
					d_azp_ibn_furniture_t_validate => '0',
					d_azp_ibn_furniture_t_address => strtoupper($empty_address),
					d_azp_ibn_furniture_t_business_name => strtoupper($empty_business_name),
					d_azp_ibn_furniture_t_city => strtoupper($empty_city),
					d_azp_ibn_furniture_t_comment_legal => strtoupper($empty_comment_legal),
					//d_azp_ibn_furniture_t_concept => strtoupper($empty_concept),
					d_azp_ibn_furniture_t_consecutive => strtoupper($empty_consecutive),
					d_azp_ibn_furniture_t_department => strtoupper($empty_department),
					d_azp_ibn_furniture_t_entity => strtoupper($empty_entity),
					d_azp_ibn_furniture_t_full_name => strtoupper($empty_full_name),
					d_azp_ibn_furniture_t_identification => strtoupper($empty_identification),
					d_azp_ibn_furniture_t_limitation => strtoupper($empty_limitation),
					d_azp_ibn_furniture_t_municipality => strtoupper($empty_municipality),
					d_azp_ibn_furniture_t_nit => strtoupper($empty_nit),
					d_azp_ibn_furniture_t_observation => strtoupper($empty_observation),
					d_azp_ibn_furniture_t_phone => strtoupper($empty_phone),
					d_azp_ibn_furniture_t_salary => strtoupper($empty_salary),
					d_azp_ibn_furniture_t_viable_causal => strtoupper($empty_viable_causal),
					d_azp_ibn_furniture_t_well_option => strtoupper($empty_well_option),
					d_azp_ibn_furniture_t_well_viable => strtoupper($empty_well_viable),
					d_azp_ibn_furniture_t_text_one => strtoupper($empty_text_one),
					d_azp_ibn_furniture_t_text_two => strtoupper($empty_text_two),
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
					d_azp_ibn_furniture_v_id_azp_ibn_outcome => $empty_ibn_outcome,
					d_azp_ibn_furniture_v_id_azp_ibn_rank => $empty_ibn_rank,
					d_azp_ibn_furniture_v_id_azp_ibn_regime => $empty_ibn_regime,
					d_azp_ibn_furniture_v_id_azp_ibn_state => $empty_ibn_state,
					d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate => $empty_ibn_type_affiliate,
					d_azp_ibn_furniture_v_id_azp_ibn_type_concept => $empty_ibn_type_concept,
					d_azp_ibn_furniture_v_id_azp_ibn_type_contributor => $empty_ibn_type_contributor,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_ibn_furniture, $var_array);
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_m_temp . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$empty_id = $value[d_azp_ibn_furniture_id_azp_ibn_furniture];
					endforeach;
				} else { $empty_id = 0; }
				#-------------------------------------------------------------------------#
				$var_rg_cf_2 = 0; $var_rg_cf_3 = 0;
				$var_pc_one = 'NEGATIVO'; $var_pc_two = 'NEGATIVO'; $var_pc_three = 'NEGATIVO'; $var_rg_cf_pos = 'POSITIVO'; $var_rg_cf_neg = 'NEGATIVO';
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cp_id = $value[d_azp_ibn_furniture_v_id_azp_ibn_control_panel];

						$var_rg_sta = $value[d_azp_ibn_furniture_v_id_azp_ibn_state];
						$var_rg_reg = $value[d_azp_ibn_furniture_v_id_azp_ibn_regime];
						$var_rg_afi = $value[d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate];
						$var_rg_via = $value[d_azp_ibn_furniture_t_viable_causal];
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
					
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					
					INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
							= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
					
					INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
						ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
							= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
					
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
				if ($var_rg_cf_2 == 2) { if ($var_rg_via == 'SI') { $var_pc_two = $var_rg_cf_pos; } else { $var_pc_two = $var_rg_cf_neg; } } else { $var_pc_two = $var_rg_cf_neg; }
				if ($var_rg_cf_3 == 3) { if ($var_rg_sta == '18' && $var_rg_reg == '2' && $var_rg_afi == '2') { $var_pc_three = $var_rg_cf_pos; } else { $var_pc_three = $var_rg_cf_neg; } } else { $var_pc_three = $var_rg_cf_neg; }
				#-------------------------------------------------------------------------#
				if ($var_pc_two == $var_rg_cf_neg) { $var_policy_viability = $var_rg_cf_neg; } else if ($var_pc_two == $var_rg_cf_pos) { $var_policy_viability = $var_rg_cf_pos; }
				#-------------------------------------------------------------------------#
				if ($var_pc_three == $var_rg_cf_neg) { $var_policy_effective = $var_rg_cf_neg; } else if ($var_pc_three == $var_rg_cf_pos) { $var_policy_effective = $var_rg_cf_pos; }
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_furniture_t_policy_effective => $var_policy_effective,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_furniture_t_policy_viability => $var_policy_viability,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_ibn_control_panel = $value[d_azp_ibn_furniture_v_id_azp_ibn_control_panel];
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
					
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					
					INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . "
							= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
					
					WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $var_id_client . "'
						AND tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " = '5'
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
				$var_sql = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
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
						if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else { $var_idx_01 = $var_value_01; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else { $var_idx_02 = $var_value_02; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else { $var_idx_03 = $var_value_03; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else { $var_idx_04 = $var_value_04; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else { $var_idx_05 = $var_value_05; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else { $var_idx_06 = $var_value_06; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else { $var_idx_07 = $var_value_07; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else { $var_idx_08 = $var_value_08; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else { $var_idx_09 = $var_value_09; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else { $var_idx_10 = $var_value_10; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else { $var_idx_11 = $var_value_11; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else { $var_idx_12 = $var_value_12; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else { $var_idx_13 = $var_value_13; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else { $var_idx_14 = $var_value_14; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else { $var_idx_15 = $var_value_15; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else { $var_idx_16 = $var_value_16; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else { $var_idx_17 = $var_value_17; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else { $var_idx_18 = $var_value_18; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else { $var_idx_19 = $var_value_19; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
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
				$var_array = array(d_azp_ibn_furniture_t_concept => trim(preg_replace('/\s+/',' ', strtoupper($var_concept))),);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
					d_azp_ibn_furniture_m_deleted . " = '1' GROUP BY " . d_azp_ibn_furniture_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_furniture_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_furniture,
							d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
							d_azp_ibn_furniture_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_furniture_id_azp_ibn_furniture];
								$var_cedula2 = $value2[d_azp_ibn_furniture_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_furniture_t_acount => $var_union, d_azp_ibn_furniture_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $var_id2 . "'");
							endforeach;
						}
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT * FROM " . t_azp_ibn_furniture . " tc_azp_ibn_furniture
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_acount . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
					WHERE tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_temp . " = '2'
						AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
						AND tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_ibn_furniture_t_validate => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $value[d_azp_ibn_furniture_id_azp_ibn_furniture] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_furniture_t_validate => '0',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_m_temp . " = '2' AND " . d_azp_ibn_furniture_t_validate . " = ''");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_furniture_t_validate => '0',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_m_temp . " = '2' AND " . d_azp_ibn_furniture_t_validate . " IS NULL");
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_acount . " AS 'lbl_azp_ibn_furniture_t_acount',
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
					FROM " . t_azp_ibn_furniture . " tc_azp_ibn_furniture
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						ON tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_identification . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . "
					WHERE tc_azp_ibn_furniture." . d_azp_ibn_furniture_m_temp . " = '2'
						AND tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_validate . " = '0'
						AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
						AND tc_azp_ibn_furniture." . d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
					GROUP BY tc_azp_ibn_furniture." . d_azp_ibn_furniture_t_acount . "
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
							d_azp_ibn_data_main_t_acount => $value['lbl_azp_ibn_furniture_t_acount'],
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
				$var_array = array(d_azp_ibn_furniture_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_m_temp . " = '2' ");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.', 'register' => $empty_id);
			}
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_furniture_multiple_cp(array $data) {
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

		# Query Sql Update
		final public function sql_azp_ibn_furniture_multiple_cp(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_furniture_multiple_cp($data);
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
				$var_city = $data['field_tb_city'];
				$var_ibn_regime = $data['field_tb_ibn_regime'];
				$var_entity = $data['field_tb_entity'];
				$var_ibn_type_affiliate = $data['field_tb_ibn_type_affiliate'];
				#-------------------------------------------------------------------------#
				# Recorrer los datos uno por uno segun los seleccionados
				for ($i = 0; $i < count($var_id); $i++) {
					$empty_id = $this->db->scape($var_id[$i]);
					$empty_ibn_state = $this->db->scape($var_ibn_state[$i]);
					$empty_city = $this->db->scape($var_city[$i]);
					$empty_ibn_regime = $this->db->scape($var_ibn_regime[$i]);
					$empty_entity = $this->db->scape($var_entity[$i]);
					$empty_ibn_type_affiliate = $this->db->scape($var_ibn_type_affiliate[$i]);
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_regime, d_azp_ibn_regime_t_name . " = '" . $empty_ibn_regime . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_regime = $value[d_azp_ibn_regime_id_azp_ibn_regime];
						endforeach;
					} else { $empty_ibn_regime = 1; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_state, d_azp_ibn_state_t_name . " = '" . $empty_ibn_state . "' AND " .
						d_azp_ibn_state_v_id_azp_ibn_module . " = '5'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_state = $value[d_azp_ibn_state_id_azp_ibn_state];
						endforeach;
					} else { $empty_ibn_state = 5; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate, d_azp_ibn_type_affiliate_t_name . " = '" . $empty_ibn_type_affiliate . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_type_affiliate = $value[d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate];
						endforeach;
					} else { $empty_ibn_type_affiliate = 1; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_select = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_select) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_select as $key_sql_select):
							$var_array = array(
								d_azs_ibn_furniture_m_by_created => $_SESSION[SESS_APP_ID],
								d_azs_ibn_furniture_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azs_ibn_furniture_m_date_created => DATE_HOUR,
								d_azs_ibn_furniture_m_date_modified => DATE_HOUR,
								d_azs_ibn_furniture_m_deleted => $key_sql_select[d_azp_ibn_furniture_m_deleted],
								d_azs_ibn_furniture_m_description => $key_sql_select[d_azp_ibn_furniture_m_description],
								d_azs_ibn_furniture_m_level => $key_sql_select[d_azp_ibn_furniture_m_level],
								d_azs_ibn_furniture_m_status => $key_sql_select[d_azp_ibn_furniture_m_status],
								d_azs_ibn_furniture_m_temp => $key_sql_select[d_azp_ibn_furniture_m_temp],
								d_azs_ibn_furniture_t_address => strtoupper($key_sql_select[d_azp_ibn_furniture_t_address]),
								d_azs_ibn_furniture_t_business_name => strtoupper($key_sql_select[d_azp_ibn_furniture_t_business_name]),
								d_azs_ibn_furniture_t_city => strtoupper($key_sql_select[d_azp_ibn_furniture_t_city]),
								d_azs_ibn_furniture_t_comment_legal => strtoupper($key_sql_select[d_azp_ibn_furniture_t_comment_legal]),
								d_azs_ibn_furniture_t_concept => strtoupper($key_sql_select[d_azp_ibn_furniture_t_concept]),
								d_azs_ibn_furniture_t_consecutive => strtoupper($key_sql_select[d_azp_ibn_furniture_t_consecutive]),
								d_azs_ibn_furniture_t_department => strtoupper($key_sql_select[d_azp_ibn_furniture_t_department]),
								d_azs_ibn_furniture_t_entity => strtoupper($key_sql_select[d_azp_ibn_furniture_t_entity]),
								d_azs_ibn_furniture_t_full_name => strtoupper($key_sql_select[d_azp_ibn_furniture_t_full_name]),
								d_azs_ibn_furniture_t_identification => strtoupper($key_sql_select[d_azp_ibn_furniture_t_identification]),
								d_azs_ibn_furniture_t_limitation => strtoupper($key_sql_select[d_azp_ibn_furniture_t_limitation]),
								d_azs_ibn_furniture_t_municipality => strtoupper($key_sql_select[d_azp_ibn_furniture_t_municipality]),
								d_azs_ibn_furniture_t_nit => strtoupper($key_sql_select[d_azp_ibn_furniture_t_nit]),
								d_azs_ibn_furniture_t_observation => strtoupper($key_sql_select[d_azp_ibn_furniture_t_observation]),
								d_azs_ibn_furniture_t_phone => strtoupper($key_sql_select[d_azp_ibn_furniture_t_phone]),
								d_azs_ibn_furniture_t_salary => strtoupper($key_sql_select[d_azp_ibn_furniture_t_salary]),
								d_azs_ibn_furniture_t_viable_causal => strtoupper($key_sql_select[d_azp_ibn_furniture_t_viable_causal]),
								d_azs_ibn_furniture_t_well_option => strtoupper($key_sql_select[d_azp_ibn_furniture_t_well_option]),
								d_azs_ibn_furniture_t_well_viable => strtoupper($key_sql_select[d_azp_ibn_furniture_t_well_viable]),
								d_azs_ibn_furniture_t_text_one => strtoupper($key_sql_select[d_azp_ibn_furniture_t_text_one]),
								d_azs_ibn_furniture_t_text_two => strtoupper($key_sql_select[d_azp_ibn_furniture_t_text_two]),
								d_azs_ibn_furniture_u_ibn_control_panel => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_control_panel]),
								d_azs_ibn_furniture_u_ibn_outcome => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_outcome]),
								d_azs_ibn_furniture_u_ibn_rank => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_rank]),
								d_azs_ibn_furniture_u_ibn_regime => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_regime]),
								d_azs_ibn_furniture_u_ibn_state => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_state]),
								d_azs_ibn_furniture_u_ibn_type_affiliate => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate]),
								d_azs_ibn_furniture_u_ibn_type_concept => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_type_concept]),
								d_azs_ibn_furniture_u_ibn_type_contributor => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_type_contributor]),
								d_azs_ibn_furniture_v_id_azp_ibn_furniture => $empty_id,
							);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->insert(t_azs_ibn_furniture, $var_array);
						endforeach;
					}
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_ibn_furniture_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_ibn_furniture_m_date_modified => DATE_HOUR,
						//d_azp_ibn_furniture_m_description => $empty_description,
						//d_azp_ibn_furniture_m_status => $empty_state,
						//d_azp_ibn_furniture_t_address => strtoupper($empty_address),
						//d_azp_ibn_furniture_t_business_name => strtoupper($empty_business_name),
						d_azp_ibn_furniture_t_city => str_replace('\\', '', stripslashes(strtoupper($empty_city))),
						//d_azp_ibn_furniture_t_comment_legal => strtoupper($empty_comment_legal),
						//d_azp_ibn_furniture_t_concept => strtoupper($empty_concept),
						//d_azp_ibn_furniture_t_consecutive => strtoupper($empty_consecutive),
						//d_azp_ibn_furniture_t_department => strtoupper($empty_department),
						d_azp_ibn_furniture_t_entity => str_replace('\\', '', stripslashes(strtoupper($empty_entity))),
						//d_azp_ibn_furniture_t_full_name => strtoupper($empty_full_name),
						//d_azp_ibn_furniture_t_identification => strtoupper($empty_identification),
						//d_azp_ibn_furniture_t_limitation => strtoupper($empty_limitation),
						//d_azp_ibn_furniture_t_municipality => strtoupper($empty_municipality),
						//d_azp_ibn_furniture_t_nit => strtoupper($empty_nit),
						//d_azp_ibn_furniture_t_observation => strtoupper($empty_observation),
						//d_azp_ibn_furniture_t_phone => strtoupper($empty_phone),
						//d_azp_ibn_furniture_t_salary => strtoupper($empty_salary),
						//d_azp_ibn_furniture_t_viable_causal => strtoupper($empty_viable_causal),
						//d_azp_ibn_furniture_t_well_option => strtoupper($empty_well_option),
						//d_azp_ibn_furniture_t_well_viable => strtoupper($empty_well_viable),
						//d_azp_ibn_furniture_t_text_one => strtoupper($empty_text_one),
						//d_azp_ibn_furniture_t_text_two => strtoupper($empty_text_two),
						//d_azp_ibn_furniture_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
						//d_azp_ibn_furniture_v_id_azp_ibn_outcome => $empty_ibn_outcome,
						//d_azp_ibn_furniture_v_id_azp_ibn_rank => $empty_ibn_rank,
						d_azp_ibn_furniture_v_id_azp_ibn_regime => $empty_ibn_regime,
						d_azp_ibn_furniture_v_id_azp_ibn_state => $empty_ibn_state,
						d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate => $empty_ibn_type_affiliate,
						//d_azp_ibn_furniture_v_id_azp_ibn_type_concept => $empty_ibn_type_concept,
						//d_azp_ibn_furniture_v_id_azp_ibn_type_contributor => $empty_ibn_type_contributor,
					);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
					#-------------------------------------------------------------------------#
					$var_rg_cf_2 = 0; $var_rg_cf_3 = 0;
					$var_pc_one = 'NEGATIVO'; $var_pc_two = 'NEGATIVO'; $var_pc_three = 'NEGATIVO'; $var_rg_cf_pos = 'POSITIVO'; $var_rg_cf_neg = 'NEGATIVO';
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_rg_cp_id = $value[d_azp_ibn_furniture_v_id_azp_ibn_control_panel];

							$var_rg_sta = $value[d_azp_ibn_furniture_v_id_azp_ibn_state];
							$var_rg_reg = $value[d_azp_ibn_furniture_v_id_azp_ibn_regime];
							$var_rg_afi = $value[d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate];
							$var_rg_via = $value[d_azp_ibn_furniture_t_viable_causal];
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
						
						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
						
						INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
								= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
						
						INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
							ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
								= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
						
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
					if ($var_rg_cf_2 == 2) { if ($var_rg_via == 'SI') { $var_pc_two = $var_rg_cf_pos; } else { $var_pc_two = $var_rg_cf_neg; } } else { $var_pc_two = $var_rg_cf_neg; }
					if ($var_rg_cf_3 == 3) { if ($var_rg_sta == '18' && $var_rg_reg == '2' && $var_rg_afi == '2') { $var_pc_three = $var_rg_cf_pos; } else { $var_pc_three = $var_rg_cf_neg; } } else { $var_pc_three = $var_rg_cf_neg; }
					#-------------------------------------------------------------------------#
					if ($var_pc_two == $var_rg_cf_neg) { $var_policy_viability = $var_rg_cf_neg; } else if ($var_pc_two == $var_rg_cf_pos) { $var_policy_viability = $var_rg_cf_pos; }
					#-------------------------------------------------------------------------#
					if ($var_pc_three == $var_rg_cf_neg) { $var_policy_effective = $var_rg_cf_neg; } else if ($var_pc_three == $var_rg_cf_pos) { $var_policy_effective = $var_rg_cf_pos; }
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_ibn_furniture_t_policy_effective => $var_policy_effective,);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_ibn_furniture_t_policy_viability => $var_policy_viability,);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_furniture_multiple_cn(array $data) {
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

		# Query Sql Update
		final public function sql_azp_ibn_furniture_multiple_cn(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_furniture_multiple_cn($data);
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
				//$var_full_name = $data['field_tb_full_name'];
				//$var_identification = $data['field_tb_identification'];
				$var_city = $data['field_tb_city'];
				$var_ibn_type_affiliate = $data['field_tb_ibn_type_affiliate'];
				$var_nit = $data['field_tb_nit'];
				$var_business_name = $data['field_tb_business_name'];
				$var_salary = $data['field_tb_salary'];
				$var_phone = $data['field_tb_phone'];
				$var_address = $data['field_tb_address'];
				$var_municipality = $data['field_tb_municipality'];
				$var_department = $data['field_tb_department'];
				$var_ibn_rank = $data['field_tb_ibn_rank'];
				$var_observation = $data['field_tb_observation'];
				$var_well_option = $data['field_tb_well_option'];
				$var_well_viable = $data['field_tb_well_viable'];
				$var_text_one = $data['field_tb_text_one'];
				$var_text_two = $data['field_tb_text_two'];
				$var_ibn_type_concept = $data['field_tb_ibn_type_concept'];
				$var_viable_causal = $data['field_tb_viable_causal'];
				$var_ibn_outcome = $data['field_tb_ibn_outcome'];
				$var_ibn_type_contributor = $data['field_tb_ibn_type_contributor'];
				#-------------------------------------------------------------------------#
				# Recorrer los datos uno por uno segun los seleccionados
				for ($i = 0; $i < count($var_id); $i++) {
					$empty_id = $this->db->scape($var_id[$i]);
					//$empty_full_name = $this->db->scape($var_full_name[$i]);
					//$empty_identification = $this->db->scape($var_identification[$i]);
					$empty_city = $this->db->scape($var_city[$i]);
					$empty_ibn_type_affiliate = $this->db->scape($var_ibn_type_affiliate[$i]);
					$empty_nit = $this->db->scape($var_nit[$i]);
					$empty_business_name = $this->db->scape($var_business_name[$i]);
					$empty_salary = $this->db->scape($var_salary[$i]);
					$empty_phone = $this->db->scape($var_phone[$i]);
					$empty_address = $this->db->scape($var_address[$i]);
					$empty_municipality = $this->db->scape($var_municipality[$i]);
					$empty_department = $this->db->scape($var_department[$i]);
					$empty_ibn_rank = $this->db->scape($var_ibn_rank[$i]);
					$empty_observation = $this->db->scape($var_observation[$i]);
					$empty_well_option = $this->db->scape($var_well_option[$i]);
					//$empty_well_viable = $this->db->scape($var_well_viable[$i]);
					$empty_text_one = $this->db->scape($var_text_one[$i]);
					$empty_text_two = $this->db->scape($var_text_two[$i]);
					$empty_ibn_type_concept = $this->db->scape($var_ibn_type_concept[$i]);
					$empty_viable_causal = $this->db->scape($var_viable_causal[$i]);
					$empty_ibn_outcome = $this->db->scape($var_ibn_outcome[$i]);
					$empty_ibn_type_contributor = $this->db->scape($var_ibn_type_contributor[$i]);
					#-------------------------------------------------------------------------#
					if ($empty_well_option != 'SI' || $empty_well_option != 'NO') { $empty_well_viable = ''; }
					if ($empty_well_option == 'SI') { $empty_well_viable = $empty_ibn_type_affiliate . ' ' . $empty_ibn_rank; }
					if ($empty_well_option == 'NO') { $empty_well_viable = ''; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_outcome, d_azp_ibn_outcome_t_name . " = '" . $empty_ibn_outcome . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_outcome = $value[d_azp_ibn_outcome_id_azp_ibn_outcome];
						endforeach;
					} else { $empty_ibn_outcome = 1; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_rank, d_azp_ibn_rank_t_name . " = '" . $empty_ibn_rank . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_rank = $value[d_azp_ibn_rank_id_azp_ibn_rank];
						endforeach;
					} else { $empty_ibn_rank = 1; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate, d_azp_ibn_type_affiliate_t_name . " = '" . $empty_ibn_type_affiliate . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_type_affiliate = $value[d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate];
						endforeach;
					} else { $empty_ibn_type_affiliate = 1; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_type_concept, d_azp_ibn_type_concept_t_name . " = '" . $empty_ibn_type_concept . "' AND " .
						d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '5'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_type_concept = $value[d_azp_ibn_type_concept_id_azp_ibn_type_concept];
						endforeach;
					} else { $empty_ibn_type_concept = 5; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_type_contributor, d_azp_ibn_type_contributor_t_name . " = '" . $empty_ibn_type_contributor . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_type_contributor = $value[d_azp_ibn_type_contributor_id_azp_ibn_type_contributor];
						endforeach;
					} else { $empty_ibn_type_contributor = 1; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_select = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_select) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_select as $key_sql_select):
							$var_array = array(
								d_azs_ibn_furniture_m_by_created => $_SESSION[SESS_APP_ID],
								d_azs_ibn_furniture_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azs_ibn_furniture_m_date_created => DATE_HOUR,
								d_azs_ibn_furniture_m_date_modified => DATE_HOUR,
								d_azs_ibn_furniture_m_deleted => $key_sql_select[d_azp_ibn_furniture_m_deleted],
								d_azs_ibn_furniture_m_description => $key_sql_select[d_azp_ibn_furniture_m_description],
								d_azs_ibn_furniture_m_level => $key_sql_select[d_azp_ibn_furniture_m_level],
								d_azs_ibn_furniture_m_status => $key_sql_select[d_azp_ibn_furniture_m_status],
								d_azs_ibn_furniture_m_temp => $key_sql_select[d_azp_ibn_furniture_m_temp],
								d_azs_ibn_furniture_t_address => strtoupper($key_sql_select[d_azp_ibn_furniture_t_address]),
								d_azs_ibn_furniture_t_business_name => strtoupper($key_sql_select[d_azp_ibn_furniture_t_business_name]),
								d_azs_ibn_furniture_t_city => strtoupper($key_sql_select[d_azp_ibn_furniture_t_city]),
								d_azs_ibn_furniture_t_comment_legal => strtoupper($key_sql_select[d_azp_ibn_furniture_t_comment_legal]),
								d_azs_ibn_furniture_t_concept => strtoupper($key_sql_select[d_azp_ibn_furniture_t_concept]),
								d_azs_ibn_furniture_t_consecutive => strtoupper($key_sql_select[d_azp_ibn_furniture_t_consecutive]),
								d_azs_ibn_furniture_t_department => strtoupper($key_sql_select[d_azp_ibn_furniture_t_department]),
								d_azs_ibn_furniture_t_entity => strtoupper($key_sql_select[d_azp_ibn_furniture_t_entity]),
								d_azs_ibn_furniture_t_full_name => strtoupper($key_sql_select[d_azp_ibn_furniture_t_full_name]),
								d_azs_ibn_furniture_t_identification => strtoupper($key_sql_select[d_azp_ibn_furniture_t_identification]),
								d_azs_ibn_furniture_t_limitation => strtoupper($key_sql_select[d_azp_ibn_furniture_t_limitation]),
								d_azs_ibn_furniture_t_municipality => strtoupper($key_sql_select[d_azp_ibn_furniture_t_municipality]),
								d_azs_ibn_furniture_t_nit => strtoupper($key_sql_select[d_azp_ibn_furniture_t_nit]),
								d_azs_ibn_furniture_t_observation => strtoupper($key_sql_select[d_azp_ibn_furniture_t_observation]),
								d_azs_ibn_furniture_t_phone => strtoupper($key_sql_select[d_azp_ibn_furniture_t_phone]),
								d_azs_ibn_furniture_t_salary => strtoupper($key_sql_select[d_azp_ibn_furniture_t_salary]),
								d_azs_ibn_furniture_t_viable_causal => strtoupper($key_sql_select[d_azp_ibn_furniture_t_viable_causal]),
								d_azs_ibn_furniture_t_well_option => strtoupper($key_sql_select[d_azp_ibn_furniture_t_well_option]),
								d_azs_ibn_furniture_t_well_viable => strtoupper($key_sql_select[d_azp_ibn_furniture_t_well_viable]),
								d_azs_ibn_furniture_t_text_one => strtoupper($key_sql_select[d_azp_ibn_furniture_t_text_one]),
								d_azs_ibn_furniture_t_text_two => strtoupper($key_sql_select[d_azp_ibn_furniture_t_text_two]),
								d_azs_ibn_furniture_u_ibn_control_panel => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_control_panel]),
								d_azs_ibn_furniture_u_ibn_outcome => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_outcome]),
								d_azs_ibn_furniture_u_ibn_rank => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_rank]),
								d_azs_ibn_furniture_u_ibn_regime => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_regime]),
								d_azs_ibn_furniture_u_ibn_state => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_state]),
								d_azs_ibn_furniture_u_ibn_type_affiliate => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate]),
								d_azs_ibn_furniture_u_ibn_type_contributor => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_type_contributor]),
								d_azs_ibn_furniture_u_ibn_type_concept => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_type_concept]),
								d_azs_ibn_furniture_v_id_azp_ibn_furniture => $empty_id,
							);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->insert(t_azs_ibn_furniture, $var_array);
						endforeach;
					}
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_ibn_furniture_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_ibn_furniture_m_date_modified => DATE_HOUR,
						//d_azp_ibn_furniture_m_description => $empty_description,
						//d_azp_ibn_furniture_m_status => $empty_state,
						d_azp_ibn_furniture_t_address => strtoupper($empty_address),
						d_azp_ibn_furniture_t_business_name => strtoupper($empty_business_name),
						d_azp_ibn_furniture_t_city => strtoupper($empty_city),
						//d_azp_ibn_furniture_t_comment_legal => strtoupper($empty_comment_legal),
						//d_azp_ibn_furniture_t_concept => strtoupper($empty_concept),
						//d_azp_ibn_furniture_t_consecutive => strtoupper($empty_consecutive),
						d_azp_ibn_furniture_t_department => strtoupper($empty_department),
						//d_azp_ibn_furniture_t_entity => strtoupper($empty_entity),
						//d_azp_ibn_furniture_t_full_name => strtoupper($empty_full_name),
						//d_azp_ibn_furniture_t_identification => strtoupper($empty_identification),
						//d_azp_ibn_furniture_t_limitation => strtoupper($empty_limitation),
						d_azp_ibn_furniture_t_municipality => strtoupper($empty_municipality),
						d_azp_ibn_furniture_t_nit => strtoupper($empty_nit),
						d_azp_ibn_furniture_t_observation => strtoupper($empty_observation),
						d_azp_ibn_furniture_t_phone => strtoupper($empty_phone),
						d_azp_ibn_furniture_t_salary => strtoupper($empty_salary),
						d_azp_ibn_furniture_t_viable_causal => strtoupper($empty_viable_causal),
						d_azp_ibn_furniture_t_well_option => strtoupper($empty_well_option),
						d_azp_ibn_furniture_t_well_viable => strtoupper($empty_well_viable),
						d_azp_ibn_furniture_t_text_one => strtoupper($empty_text_one),
						d_azp_ibn_furniture_t_text_two => strtoupper($empty_text_two),
						//d_azp_ibn_furniture_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
						d_azp_ibn_furniture_v_id_azp_ibn_outcome => $empty_ibn_outcome,
						d_azp_ibn_furniture_v_id_azp_ibn_rank => $empty_ibn_rank,
						//d_azp_ibn_furniture_v_id_azp_ibn_regime => $empty_ibn_regime,
						//d_azp_ibn_furniture_v_id_azp_ibn_state => $empty_ibn_state,
						d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate => $empty_ibn_type_affiliate,
						d_azp_ibn_furniture_v_id_azp_ibn_type_contributor => $empty_ibn_type_contributor,
						d_azp_ibn_furniture_v_id_azp_ibn_type_concept => $empty_ibn_type_concept,
					);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
					#-------------------------------------------------------------------------#
					$var_rg_cf_2 = 0; $var_rg_cf_3 = 0;
					$var_pc_one = 'NEGATIVO'; $var_pc_two = 'NEGATIVO'; $var_pc_three = 'NEGATIVO'; $var_rg_cf_pos = 'POSITIVO'; $var_rg_cf_neg = 'NEGATIVO';
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_rg_cp_id = $value[d_azp_ibn_furniture_v_id_azp_ibn_control_panel];

							$var_rg_sta = $value[d_azp_ibn_furniture_v_id_azp_ibn_state];
							$var_rg_reg = $value[d_azp_ibn_furniture_v_id_azp_ibn_regime];
							$var_rg_afi = $value[d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate];
							$var_rg_via = $value[d_azs_ibn_furniture_t_well_option];
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
						
						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
						
						INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
								= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
						
						INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
							ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
								= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
						
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
					if ($var_rg_cf_2 == 2) { if ($var_rg_via == 'SI') { $var_pc_two = $var_rg_cf_pos; } else { $var_pc_two = $var_rg_cf_neg; } } else { $var_pc_two = $var_rg_cf_neg; }
					if ($var_rg_cf_3 == 3) { if ($var_rg_sta == '18' && $var_rg_reg == '2' && $var_rg_afi == '2') { $var_pc_three = $var_rg_cf_pos; } else { $var_pc_three = $var_rg_cf_neg; } } else { $var_pc_three = $var_rg_cf_neg; }
					#-------------------------------------------------------------------------#
					if ($var_pc_two == $var_rg_cf_neg) { $var_policy_viability = $var_rg_cf_neg; } else if ($var_pc_two == $var_rg_cf_pos) { $var_policy_viability = $var_rg_cf_pos; }
					#-------------------------------------------------------------------------#
					if ($var_pc_three == $var_rg_cf_neg) { $var_policy_effective = $var_rg_cf_neg; } else if ($var_pc_three == $var_rg_cf_pos) { $var_policy_effective = $var_rg_cf_pos; }
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_ibn_furniture_t_policy_effective => $var_policy_effective,);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_ibn_furniture_t_policy_viability => $var_policy_viability,);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_ibn_control_panel = $value[d_azp_ibn_furniture_v_id_azp_ibn_control_panel];
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
						
						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
							ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
						
						INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
							ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . "
								= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
						
						WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $var_id_client . "'
							AND tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " = '5'
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
					$var_sql = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
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
							if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_01 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_01 = ''; }
							} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_01 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_01 = ''; }
							} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_01 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_01 = ''; }
							} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_01 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_01 = ''; }
							} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_01 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_01 = ''; }
							} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_01 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_01 = ''; }
							} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_01 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_01 = ''; }
							} else { $var_idx_01 = $var_value_01; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_02 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_02 = ''; }
							} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_02 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_02 = ''; }
							} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_02 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_02 = ''; }
							} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_02 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_02 = ''; }
							} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_02 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_02 = ''; }
							} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_02 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_02 = ''; }
							} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_02 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_02 = ''; }
							} else { $var_idx_02 = $var_value_02; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_03 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_03 = ''; }
							} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_03 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_03 = ''; }
							} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_03 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_03 = ''; }
							} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_03 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_03 = ''; }
							} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_03 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_03 = ''; }
							} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_03 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_03 = ''; }
							} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_03 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_03 = ''; }
							} else { $var_idx_03 = $var_value_03; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_04 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_04 = ''; }
							} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_04 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_04 = ''; }
							} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_04 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_04 = ''; }
							} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_04 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_04 = ''; }
							} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_04 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_04 = ''; }
							} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_04 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_04 = ''; }
							} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_04 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_04 = ''; }
							} else { $var_idx_04 = $var_value_04; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_05 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_05 = ''; }
							} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_05 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_05 = ''; }
							} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_05 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_05 = ''; }
							} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_05 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_05 = ''; }
							} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_05 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_05 = ''; }
							} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_05 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_05 = ''; }
							} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_05 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_05 = ''; }
							} else { $var_idx_05 = $var_value_05; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_06 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_06 = ''; }
							} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_06 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_06 = ''; }
							} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_06 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_06 = ''; }
							} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_06 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_06 = ''; }
							} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_06 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_06 = ''; }
							} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_06 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_06 = ''; }
							} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_06 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_06 = ''; }
							} else { $var_idx_06 = $var_value_06; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_07 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_07 = ''; }
							} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_07 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_07 = ''; }
							} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_07 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_07 = ''; }
							} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_07 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_07 = ''; }
							} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_07 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_07 = ''; }
							} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_07 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_07 = ''; }
							} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_07 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_07 = ''; }
							} else { $var_idx_07 = $var_value_07; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_08 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_08 = ''; }
							} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_08 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_08 = ''; }
							} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_08 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_08 = ''; }
							} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_08 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_08 = ''; }
							} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_08 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_08 = ''; }
							} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_08 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_08 = ''; }
							} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_08 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_08 = ''; }
							} else { $var_idx_08 = $var_value_08; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_09 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_09 = ''; }
							} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_09 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_09 = ''; }
							} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_09 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_09 = ''; }
							} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_09 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_09 = ''; }
							} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_09 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_09 = ''; }
							} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_09 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_09 = ''; }
							} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_09 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_09 = ''; }
							} else { $var_idx_09 = $var_value_09; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_10 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_10 = ''; }
							} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_10 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_10 = ''; }
							} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_10 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_10 = ''; }
							} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_10 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_10 = ''; }
							} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_10 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_10 = ''; }
							} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_10 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_10 = ''; }
							} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_10 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_10 = ''; }
							} else { $var_idx_10 = $var_value_10; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_11 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_11 = ''; }
							} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_11 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_11 = ''; }
							} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_11 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_11 = ''; }
							} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_11 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_11 = ''; }
							} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_11 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_11 = ''; }
							} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_11 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_11 = ''; }
							} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_11 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_11 = ''; }
							} else { $var_idx_11 = $var_value_11; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_12 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_12 = ''; }
							} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_12 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_12 = ''; }
							} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_12 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_12 = ''; }
							} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_12 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_12 = ''; }
							} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_12 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_12 = ''; }
							} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_12 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_12 = ''; }
							} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_12 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_12 = ''; }
							} else { $var_idx_12 = $var_value_12; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_13 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_13 = ''; }
							} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_13 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_13 = ''; }
							} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_13 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_13 = ''; }
							} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_13 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_13 = ''; }
							} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_13 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_13 = ''; }
							} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_13 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_13 = ''; }
							} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_13 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_13 = ''; }
							} else { $var_idx_13 = $var_value_13; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_14 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_14 = ''; }
							} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_14 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_14 = ''; }
							} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_14 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_14 = ''; }
							} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_14 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_14 = ''; }
							} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_14 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_14 = ''; }
							} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_14 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_14 = ''; }
							} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_14 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_14 = ''; }
							} else { $var_idx_14 = $var_value_14; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_15 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_15 = ''; }
							} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_15 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_15 = ''; }
							} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_15 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_15 = ''; }
							} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_15 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_15 = ''; }
							} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_15 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_15 = ''; }
							} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_15 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_15 = ''; }
							} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_15 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_15 = ''; }
							} else { $var_idx_15 = $var_value_15; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_16 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_16 = ''; }
							} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_16 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_16 = ''; }
							} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_16 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_16 = ''; }
							} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_16 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_16 = ''; }
							} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_16 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_16 = ''; }
							} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_16 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_16 = ''; }
							} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_16 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_16 = ''; }
							} else { $var_idx_16 = $var_value_16; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_17 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_17 = ''; }
							} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_17 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_17 = ''; }
							} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_17 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_17 = ''; }
							} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_17 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_17 = ''; }
							} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_17 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_17 = ''; }
							} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_17 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_17 = ''; }
							} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_17 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_17 = ''; }
							} else { $var_idx_17 = $var_value_17; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_18 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_18 = ''; }
							} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_18 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_18 = ''; }
							} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_18 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_18 = ''; }
							} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_18 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_18 = ''; }
							} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_18 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_18 = ''; }
							} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_18 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_18 = ''; }
							} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_18 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_18 = ''; }
							} else { $var_idx_18 = $var_value_18; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_19 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_19 = ''; }
							} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_19 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_19 = ''; }
							} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_19 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_19 = ''; }
							} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_19 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_19 = ''; }
							} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_19 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_19 = ''; }
							} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_19 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_19 = ''; }
							} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_19 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
								} else { $var_idx_19 = ''; }
							} else { $var_idx_19 = $var_value_19; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_outcome') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_outcome,
									d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_20 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_outcome_t_name]; endforeach;
								} else { $var_idx_20 = ''; }
							} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_rank') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_rank,
									d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_20 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_rank_t_name]; endforeach;
								} else { $var_idx_20 = ''; }
							} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_regime') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_regime,
									d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_20 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_regime_t_name]; endforeach;
								} else { $var_idx_20 = ''; }
							} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_20 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_20 = ''; }
							} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_affiliate') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
									d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_20 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
								} else { $var_idx_20 = ''; }
							} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_20 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_20 = ''; }
							} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_contributor') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
									d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_20 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
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
					$var_array = array(d_azp_ibn_furniture_t_concept => trim(preg_replace('/\s+/',' ', strtoupper($var_concept))),);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				}
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
					d_azp_ibn_furniture_m_deleted . " = '1' GROUP BY " . d_azp_ibn_furniture_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_furniture_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_furniture,
							d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
							d_azp_ibn_furniture_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_furniture_id_azp_ibn_furniture];
								$var_cedula2 = $value2[d_azp_ibn_furniture_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_furniture_t_acount => $var_union, d_azp_ibn_furniture_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $var_id2 . "'");
							endforeach;
						}

					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_furniture_fl_remove(array $data) {
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

		# Query Sql Update
		final public function sql_azp_ibn_furniture_fl_remove(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_furniture_fl_remove($data);
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

		# Control Errores Update
		final private function error_sql_azp_ibn_furniture_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "' AND " . d_azp_ibn_furniture_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "' AND " . d_azp_ibn_furniture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_furniture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "' AND " . d_azp_ibn_furniture_m_level . " = '2'");
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

		# Query Sql Update
		final public function sql_azp_ibn_furniture_remove(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_furniture_remove($data);
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
				$var_array = array(d_azp_ibn_furniture_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_furniture_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "' AND " . d_azp_ibn_furniture_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "' AND " . d_azp_ibn_furniture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_furniture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "' AND " . d_azp_ibn_furniture_m_level . " = '2'");
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

		# Query Sql Update
		final public function sql_azp_ibn_furniture_restore(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_furniture_restore($data);
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
				$var_array = array(d_azp_ibn_furniture_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_furniture_update(array $data) {
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
				if (!isset($data['field_up_business_name'])) { throw new Exception('<b>Error:</b> El campo de razon social esta prohibido modificar.'); }
				if (!isset($data['field_up_city'])) { throw new Exception('<b>Error:</b> El campo de ciudad esta prohibido modificar.'); }
				if (!isset($data['field_up_comment_legal'])) { throw new Exception('<b>Error:</b> El campo de comentario juridico esta prohibido modificar.'); }
				if (!isset($data['field_up_department'])) { throw new Exception('<b>Error:</b> El campo de departamento esta prohibido modificar.'); }
				if (!isset($data['field_up_entity'])) { throw new Exception('<b>Error:</b> El campo de entidad esta prohibido modificar.'); }
				if (!isset($data['field_up_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_identification'])) { throw new Exception('<b>Error:</b> El campo de cedula esta prohibido modificar.'); }
				if (!isset($data['field_up_limitation'])) { throw new Exception('<b>Error:</b> El campo de limitacion esta prohibido modificar.'); }
				if (!isset($data['field_up_municipality'])) { throw new Exception('<b>Error:</b> El campo de municipio esta prohibido modificar.'); }
				if (!isset($data['field_up_nit'])) { throw new Exception('<b>Error:</b> El campo de nit esta prohibido modificar.'); }
				if (!isset($data['field_up_observation'])) { throw new Exception('<b>Error:</b> El campo de observacion esta prohibido modificar.'); }
				if (!isset($data['field_up_phone'])) { throw new Exception('<b>Error:</b> El campo de telefono esta prohibido modificar.'); }
				if (!isset($data['field_up_salary'])) { throw new Exception('<b>Error:</b> El campo de sueldo esta prohibido modificar.'); }
				if (!isset($data['field_up_viable_causal'])) { throw new Exception('<b>Error:</b> El campo de causal viable esta prohibido modificar.'); }
				if (!isset($data['field_up_well_option'])) { throw new Exception('<b>Error:</b> El campo de viable esta prohibido modificar.'); }
				if (!isset($data['field_up_well_viable'])) { throw new Exception('<b>Error:</b> El campo de bien viable esta prohibido modificar.'); }
				if (!isset($data['field_up_text_one'])) { throw new Exception('<b>Error:</b> El campo 1 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_two'])) { throw new Exception('<b>Error:</b> El campo 2 esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_outcome'])) { throw new Exception('<b>Error:</b> El campo de resultado esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_rank'])) { throw new Exception('<b>Error:</b> El campo de rango esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_regime'])) { throw new Exception('<b>Error:</b> El campo de regimen esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_type_affiliate'])) { throw new Exception('<b>Error:</b> El campo de tipo afiliado esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_type_contributor'])) { throw new Exception('<b>Error:</b> El campo de tipo cotizante esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_type_concept'])) { throw new Exception('<b>Error:</b> El campo de tipo concepto esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_address = $this->db->scape($data['field_up_address']);
				$empty_business_name = $this->db->scape($data['field_up_business_name']);
				$empty_city = $this->db->scape($data['field_up_city']);
				$empty_comment_legal = $this->db->scape($data['field_up_comment_legal']);
				$empty_department = $this->db->scape($data['field_up_department']);
				$empty_entity = $this->db->scape($data['field_up_entity']);
				$empty_full_name = $this->db->scape($data['field_up_full_name']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_limitation = $this->db->scape($data['field_up_limitation']);
				$empty_municipality = $this->db->scape($data['field_up_municipality']);
				$empty_nit = $this->db->scape($data['field_up_nit']);
				$empty_observation = $this->db->scape($data['field_up_observation']);
				$empty_phone = $this->db->scape($data['field_up_phone']);
				$empty_salary = $this->db->scape($data['field_up_salary']);
				$empty_viable_causal = $this->db->scape($data['field_up_viable_causal']);
				$empty_well_option = $this->db->scape($data['field_up_well_option']);
				$empty_well_viable = $this->db->scape($data['field_up_well_viable']);
				$empty_text_one = $this->db->scape($data['field_up_text_one']);
				$empty_text_two = $this->db->scape($data['field_up_text_two']);
				$empty_ibn_outcome = $this->db->scape($data['field_up_ibn_outcome']);
				$empty_ibn_rank = $this->db->scape($data['field_up_ibn_rank']);
				$empty_ibn_regime = $this->db->scape($data['field_up_ibn_regime']);
				$empty_ibn_state = $this->db->scape($data['field_up_ibn_state']);
				$empty_ibn_type_affiliate = $this->db->scape($data['field_up_ibn_type_affiliate']);
				$empty_ibn_type_contributor = $this->db->scape($data['field_up_ibn_type_contributor']);
				$empty_ibn_type_concept = $this->db->scape($data['field_up_ibn_type_concept']);
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
				if (Func::emp($empty_well_option) || strtolower($empty_well_option) == strtolower('seleccionar')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de viable es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!is_numeric($empty_well_option)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de viable solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_outcome) || strtolower($empty_ibn_outcome) == strtolower('seleccionar') || $empty_ibn_outcome == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_outcome)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de resultado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_rank) || strtolower($empty_ibn_rank) == strtolower('seleccionar') || $empty_ibn_rank == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de rango es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_rank)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de rango solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_regime) || strtolower($empty_ibn_regime) == strtolower('seleccionar') || $empty_ibn_regime == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de regimen es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_regime)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de regimen solo permite numeros.');
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
				if (Func::emp($empty_ibn_type_affiliate) || strtolower($empty_ibn_type_affiliate) == strtolower('seleccionar') || $empty_ibn_type_affiliate == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de afiliado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_type_affiliate)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de afiliado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_type_concept) || strtolower($empty_ibn_type_concept) == strtolower('seleccionar') || $empty_ibn_type_concept == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de concepto es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_type_concept)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de concepto solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_type_contributor) || strtolower($empty_ibn_type_contributor) == strtolower('seleccionar') || $empty_ibn_type_contributor == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de cotizante es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_type_contributor)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de cotizante solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "' AND " . d_azp_ibn_furniture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_furniture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "' AND " . d_azp_ibn_furniture_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_outcome = $this->db->select('*', t_azp_ibn_outcome, d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $empty_ibn_outcome . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_outcome) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_outcome) == '') { $sql_ibn_outcome[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_outcome[0][0]) != strtolower($empty_ibn_outcome)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El resultado seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_rank = $this->db->select('*', t_azp_ibn_rank, d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $empty_ibn_rank . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_rank) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_rank) == '') { $sql_ibn_rank[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_rank[0][0]) != strtolower($empty_ibn_rank)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El rango seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_regime = $this->db->select('*', t_azp_ibn_regime, d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $empty_ibn_regime . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_regime) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_regime) == '') { $sql_ibn_regime[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_regime[0][0]) != strtolower($empty_ibn_regime)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El regimen seleccionado no se encuentra registrado.');
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
				# Verificar en la base de datos si existen el registro
				$sql_ibn_type_affiliate = $this->db->select('*', t_azp_ibn_type_affiliate, d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $empty_ibn_type_affiliate . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_type_affiliate) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_type_affiliate) == '') { $sql_ibn_type_affiliate[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_type_affiliate[0][0]) != strtolower($empty_ibn_type_affiliate)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo de afiliado seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_type_concept = $this->db->select('*', t_azp_ibn_type_concept, d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $empty_ibn_type_concept . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_type_concept) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_type_concept) == '') { $sql_ibn_type_concept[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_type_concept[0][0]) != strtolower($empty_ibn_type_concept)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo de concepto seleccionado no se encuentra registrado.');
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

		# Query Sql Update
		final public function sql_azp_ibn_furniture_update(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_furniture_update($data);
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
				$empty_business_name = $this->db->scape($data['field_up_business_name']);
				$empty_city = $this->db->scape($data['field_up_city']);
				$empty_comment_legal = $this->db->scape($data['field_up_comment_legal']);
				$empty_department = $this->db->scape($data['field_up_department']);
				$empty_entity = $this->db->scape($data['field_up_entity']);
				$empty_full_name = $this->db->scape($data['field_up_full_name']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_limitation = $this->db->scape($data['field_up_limitation']);
				$empty_municipality = $this->db->scape($data['field_up_municipality']);
				$empty_nit = $this->db->scape($data['field_up_nit']);
				$empty_observation = $this->db->scape($data['field_up_observation']);
				$empty_phone = $this->db->scape($data['field_up_phone']);
				$empty_salary = $this->db->scape($data['field_up_salary']);
				$empty_viable_causal = $this->db->scape($data['field_up_viable_causal']);
				$empty_well_option = $this->db->scape($data['field_up_well_option']);
				//$empty_well_viable = $this->db->scape($data['field_up_well_viable']);
				$empty_text_one = $this->db->scape($data['field_up_text_one']);
				$empty_text_two = $this->db->scape($data['field_up_text_two']);
				$empty_ibn_outcome = $this->db->scape($data['field_up_ibn_outcome']);
				$empty_ibn_rank = $this->db->scape($data['field_up_ibn_rank']);
				$empty_ibn_regime = $this->db->scape($data['field_up_ibn_regime']);
				$empty_ibn_state = $this->db->scape($data['field_up_ibn_state']);
				$empty_ibn_type_affiliate = $this->db->scape($data['field_up_ibn_type_affiliate']);
				$empty_ibn_type_contributor = $this->db->scape($data['field_up_ibn_type_contributor']);
				$empty_ibn_type_concept = $this->db->scape($data['field_up_ibn_type_concept']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_ibn_type_affiliate,
					d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $empty_ibn_type_affiliate . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value): $empty_type_affiliate_name = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
				} else { $empty_type_affiliate_name = ''; }
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_ibn_rank, d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $empty_ibn_rank . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value): $empty_rank_name = $value[d_azp_ibn_rank_t_name]; endforeach;
				} else { $empty_rank_name = ''; }
				#-------------------------------------------------------------------------#
				if ($empty_well_option != 'SI' || $empty_well_option != 'NO') { $empty_well_viable = ''; }
				if ($empty_well_option == 'SI') { $empty_well_viable = $empty_type_affiliate_name . ' ' . $empty_rank_name; }
				if ($empty_well_option == 'NO') { $empty_well_viable = ''; }
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_ibn_furniture_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_ibn_furniture_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_ibn_furniture_m_date_created => DATE_HOUR,
							d_azs_ibn_furniture_m_date_modified => DATE_HOUR,
							d_azs_ibn_furniture_m_deleted => $key_sql_select[d_azp_ibn_furniture_m_deleted],
							d_azs_ibn_furniture_m_description => $key_sql_select[d_azp_ibn_furniture_m_description],
							d_azs_ibn_furniture_m_level => $key_sql_select[d_azp_ibn_furniture_m_level],
							d_azs_ibn_furniture_m_status => $key_sql_select[d_azp_ibn_furniture_m_status],
							d_azs_ibn_furniture_m_temp => $key_sql_select[d_azp_ibn_furniture_m_temp],
							d_azs_ibn_furniture_t_address => strtoupper($key_sql_select[d_azp_ibn_furniture_t_address]),
							d_azs_ibn_furniture_t_business_name => strtoupper($key_sql_select[d_azp_ibn_furniture_t_business_name]),
							d_azs_ibn_furniture_t_city => strtoupper($key_sql_select[d_azp_ibn_furniture_t_city]),
							d_azs_ibn_furniture_t_comment_legal => strtoupper($key_sql_select[d_azp_ibn_furniture_t_comment_legal]),
							d_azs_ibn_furniture_t_concept => strtoupper($key_sql_select[d_azp_ibn_furniture_t_concept]),
							d_azs_ibn_furniture_t_consecutive => strtoupper($key_sql_select[d_azp_ibn_furniture_t_consecutive]),
							d_azs_ibn_furniture_t_concept => strtoupper($key_sql_select[d_azp_ibn_furniture_t_concept]),
							d_azs_ibn_furniture_t_department => strtoupper($key_sql_select[d_azp_ibn_furniture_t_department]),
							d_azs_ibn_furniture_t_entity => strtoupper($key_sql_select[d_azp_ibn_furniture_t_entity]),
							d_azs_ibn_furniture_t_full_name => strtoupper($key_sql_select[d_azp_ibn_furniture_t_full_name]),
							d_azs_ibn_furniture_t_identification => strtoupper($key_sql_select[d_azp_ibn_furniture_t_identification]),
							d_azs_ibn_furniture_t_limitation => strtoupper($key_sql_select[d_azp_ibn_furniture_t_limitation]),
							d_azs_ibn_furniture_t_municipality => strtoupper($key_sql_select[d_azp_ibn_furniture_t_municipality]),
							d_azs_ibn_furniture_t_nit => strtoupper($key_sql_select[d_azp_ibn_furniture_t_nit]),
							d_azs_ibn_furniture_t_observation => strtoupper($key_sql_select[d_azp_ibn_furniture_t_observation]),
							d_azs_ibn_furniture_t_phone => strtoupper($key_sql_select[d_azp_ibn_furniture_t_phone]),
							d_azs_ibn_furniture_t_salary => strtoupper($key_sql_select[d_azp_ibn_furniture_t_salary]),
							d_azs_ibn_furniture_t_viable_causal => strtoupper($key_sql_select[d_azp_ibn_furniture_t_viable_causal]),
							d_azs_ibn_furniture_t_well_option => strtoupper($key_sql_select[d_azp_ibn_furniture_t_well_option]),
							d_azs_ibn_furniture_t_well_viable => strtoupper($key_sql_select[d_azp_ibn_furniture_t_well_viable]),
							d_azs_ibn_furniture_t_text_one => strtoupper($key_sql_select[d_azp_ibn_furniture_t_text_one]),
							d_azs_ibn_furniture_t_text_two => strtoupper($key_sql_select[d_azp_ibn_furniture_t_text_two]),
							d_azs_ibn_furniture_u_ibn_control_panel => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_control_panel]),
							d_azs_ibn_furniture_u_ibn_outcome => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_outcome]),
							d_azs_ibn_furniture_u_ibn_rank => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_rank]),
							d_azs_ibn_furniture_u_ibn_regime => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_regime]),
							d_azs_ibn_furniture_u_ibn_state => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_state]),
							d_azs_ibn_furniture_u_ibn_type_affiliate => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate]),
							d_azs_ibn_furniture_u_ibn_type_contributor => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_type_contributor]),
							d_azs_ibn_furniture_u_ibn_type_concept => strtoupper($key_sql_select[d_azp_ibn_furniture_v_id_azp_ibn_type_concept]),
							d_azs_ibn_furniture_v_id_azp_ibn_furniture => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_ibn_furniture, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_furniture_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_furniture_m_date_modified => DATE_HOUR,
					d_azp_ibn_furniture_m_description => $empty_description,
					d_azp_ibn_furniture_m_status => $empty_state,
					d_azp_ibn_furniture_t_address => strtoupper($empty_address),
					d_azp_ibn_furniture_t_business_name => strtoupper($empty_business_name),
					d_azp_ibn_furniture_t_city => strtoupper($empty_city),
					d_azp_ibn_furniture_t_comment_legal => strtoupper($empty_comment_legal),
					//d_azp_ibn_furniture_t_concept => strtoupper($empty_concept),
					//d_azp_ibn_furniture_t_consecutive => strtoupper($empty_consecutive),
					d_azp_ibn_furniture_t_department => strtoupper($empty_department),
					d_azp_ibn_furniture_t_entity => strtoupper($empty_entity),
					d_azp_ibn_furniture_t_full_name => strtoupper($empty_full_name),
					d_azp_ibn_furniture_t_identification => strtoupper($empty_identification),
					d_azp_ibn_furniture_t_limitation => strtoupper($empty_limitation),
					d_azp_ibn_furniture_t_municipality => strtoupper($empty_municipality),
					d_azp_ibn_furniture_t_nit => strtoupper($empty_nit),
					d_azp_ibn_furniture_t_observation => strtoupper($empty_observation),
					d_azp_ibn_furniture_t_phone => strtoupper($empty_phone),
					d_azp_ibn_furniture_t_salary => strtoupper($empty_salary),
					d_azp_ibn_furniture_t_viable_causal => strtoupper($empty_viable_causal),
					d_azp_ibn_furniture_t_well_option => strtoupper($empty_well_option),
					d_azp_ibn_furniture_t_well_viable => strtoupper($empty_well_viable),
					d_azp_ibn_furniture_t_text_one => strtoupper($empty_text_one),
					d_azp_ibn_furniture_t_text_two => strtoupper($empty_text_two),
					//d_azp_ibn_furniture_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
					d_azp_ibn_furniture_v_id_azp_ibn_outcome => $empty_ibn_outcome,
					d_azp_ibn_furniture_v_id_azp_ibn_rank => $empty_ibn_rank,
					d_azp_ibn_furniture_v_id_azp_ibn_regime => $empty_ibn_regime,
					d_azp_ibn_furniture_v_id_azp_ibn_state => $empty_ibn_state,
					d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate => $empty_ibn_type_affiliate,
					d_azp_ibn_furniture_v_id_azp_ibn_type_contributor => $empty_ibn_type_contributor,
					d_azp_ibn_furniture_v_id_azp_ibn_type_concept => $empty_ibn_type_concept,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				$var_rg_cf_2 = 0; $var_rg_cf_3 = 0;
				$var_pc_one = 'NEGATIVO'; $var_pc_two = 'NEGATIVO'; $var_pc_three = 'NEGATIVO'; $var_rg_cf_pos = 'POSITIVO'; $var_rg_cf_neg = 'NEGATIVO';
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cp_id = $value[d_azp_ibn_furniture_v_id_azp_ibn_control_panel];

						$var_rg_sta = $value[d_azp_ibn_furniture_v_id_azp_ibn_state];
						$var_rg_reg = $value[d_azp_ibn_furniture_v_id_azp_ibn_regime];
						$var_rg_afi = $value[d_azp_ibn_furniture_v_id_azp_ibn_type_affiliate];
						$var_rg_via = $value[d_azp_ibn_furniture_t_viable_causal];
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
					
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					
					INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
							= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
					
					INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
						ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
							= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
					
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
				if ($var_rg_cf_2 == 2) { if ($var_rg_via == 'SI') { $var_pc_two = $var_rg_cf_pos; } else { $var_pc_two = $var_rg_cf_neg; } } else { $var_pc_two = $var_rg_cf_neg; }
				if ($var_rg_cf_3 == 3) { if ($var_rg_sta == '18' && $var_rg_reg == '2' && $var_rg_afi == '2') { $var_pc_three = $var_rg_cf_pos; } else { $var_pc_three = $var_rg_cf_neg; } } else { $var_pc_three = $var_rg_cf_neg; }
				#-------------------------------------------------------------------------#
				if ($var_pc_two == $var_rg_cf_neg) { $var_policy_viability = $var_rg_cf_neg; } else if ($var_pc_two == $var_rg_cf_pos) { $var_policy_viability = $var_rg_cf_pos; }
				#-------------------------------------------------------------------------#
				if ($var_pc_three == $var_rg_cf_neg) { $var_policy_effective = $var_rg_cf_neg; } else if ($var_pc_three == $var_rg_cf_pos) { $var_policy_effective = $var_rg_cf_pos; }
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_furniture_t_policy_effective => $var_policy_effective,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_furniture_t_policy_viability => $var_policy_viability,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_ibn_control_panel = $value[d_azp_ibn_furniture_v_id_azp_ibn_control_panel];
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
					
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					
					INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . "
							= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
					
					WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $var_id_client . "'
						AND tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " = '5'
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
				$var_sql = $this->db->select('*', t_azp_ibn_furniture, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
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
						if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else { $var_idx_01 = $var_value_01; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else { $var_idx_02 = $var_value_02; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else { $var_idx_03 = $var_value_03; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else { $var_idx_04 = $var_value_04; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else { $var_idx_05 = $var_value_05; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else { $var_idx_06 = $var_value_06; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else { $var_idx_07 = $var_value_07; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else { $var_idx_08 = $var_value_08; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else { $var_idx_09 = $var_value_09; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else { $var_idx_10 = $var_value_10; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else { $var_idx_11 = $var_value_11; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else { $var_idx_12 = $var_value_12; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else { $var_idx_13 = $var_value_13; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else { $var_idx_14 = $var_value_14; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else { $var_idx_15 = $var_value_15; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else { $var_idx_16 = $var_value_16; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else { $var_idx_17 = $var_value_17; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else { $var_idx_18 = $var_value_18; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else { $var_idx_19 = $var_value_19; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_outcome') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_outcome,
								d_azp_ibn_outcome_id_azp_ibn_outcome . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_outcome_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_rank') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_rank,
								d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_rank_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_regime') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_regime,
								d_azp_ibn_regime_id_azp_ibn_regime . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_regime_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_affiliate') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_affiliate,
								d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_affiliate_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_contributor') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_contributor,
								d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_contributor_t_name]; endforeach;
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
				$var_array = array(d_azp_ibn_furniture_t_concept => trim(preg_replace('/\s+/',' ', strtoupper($var_concept))),);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_furniture,
					d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
					d_azp_ibn_furniture_m_deleted . " = '1' GROUP BY " . d_azp_ibn_furniture_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_furniture_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_furniture,
							d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
							d_azp_ibn_furniture_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_furniture_id_azp_ibn_furniture];
								$var_cedula2 = $value2[d_azp_ibn_furniture_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_furniture_t_acount => $var_union, d_azp_ibn_furniture_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_furniture, $var_array, d_azp_ibn_furniture_id_azp_ibn_furniture . " = '" . $var_id2 . "'");
							endforeach;
						}

					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.', 'register' => $empty_id);
			}
		}
		
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_control_panel() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_control_panel,
				d_azp_ibn_control_panel_m_deleted . " = '1' AND " .
				d_azp_ibn_control_panel_m_status . " = '1'"
			);
		}
		
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_outcome() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_outcome,
				d_azp_ibn_outcome_m_deleted . " = '1' AND " .
				d_azp_ibn_outcome_m_status . " = '1'"
			);
		}
		
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_rank() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_rank,
				d_azp_ibn_rank_m_deleted . " = '1' AND " .
				d_azp_ibn_rank_m_status . " = '1'"
			);
		}
		
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_regime() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_regime,
				d_azp_ibn_regime_m_deleted . " = '1' AND " .
				d_azp_ibn_regime_m_status . " = '1'"
			);
		}
		
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_state() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_state,
				d_azp_ibn_state_m_deleted . " = '1' AND " .
				d_azp_ibn_state_m_status . " = '1' AND " .
				d_azp_ibn_state_v_id_azp_ibn_module . " = '5'"
			);
		}
		
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_type_affiliate() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_affiliate,
				d_azp_ibn_type_affiliate_m_deleted . " = '1' AND " .
				d_azp_ibn_type_affiliate_m_status . " = '1'"
			);
		}
		
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_type_concept() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_concept,
				d_azp_ibn_type_concept_m_deleted . " = '1' AND " .
				d_azp_ibn_type_concept_m_status . " = '1' AND " .
				d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '5'"
			);
		}
		
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_type_contributor() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_contributor,
				d_azp_ibn_type_contributor_m_deleted . " = '1' AND " .
				d_azp_ibn_type_contributor_m_status . " = '1'"
			);
		}

		# Query Sql Select
		final public function sql_controller_research() {
			# Seleccionar los registros de la tabla
			return $this->db->select(
				d_azp_ibn_control_panel_t_code_research . " AS 'lbl_name'",
				t_azp_ibn_control_panel,
				d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $this->id . "'"
			);
		}

		# Query Sql Select
		final public function sql_controller_rank() {
			# Seleccionar los registros de la tabla
			return $this->db->select(
				d_azp_ibn_rank_t_name . " AS 'lbl_name'",
				t_azp_ibn_rank,
				d_azp_ibn_rank_id_azp_ibn_rank . " = '" . $this->id . "'"
			);
		}

		# Query Sql Select
		final public function sql_controller_type_affiliate() {
			# Seleccionar los registros de la tabla
			return $this->db->select(
				d_azp_ibn_type_affiliate_t_name . " AS 'lbl_name'",
				t_azp_ibn_type_affiliate,
				d_azp_ibn_type_affiliate_id_azp_ibn_type_affiliate . " = '" . $this->id . "'"
			);
		}

		# Query Sql Select
		final public function sql_controller_type_contributor() {
			# Seleccionar los registros de la tabla
			return $this->db->select(
				d_azp_ibn_type_contributor_t_name . " AS 'lbl_name'",
				t_azp_ibn_type_contributor,
				d_azp_ibn_type_contributor_id_azp_ibn_type_contributor . " = '" . $this->id . "'"
			);
		}

		# Query Sql Select
		final public function sql_controller_type_concept_id() {
			# Seleccionar los registros de la tabla
			return $this->db->select(
				d_azp_ibn_type_concept_t_text . " AS 'lbl_azp_ibn_type_concept_t_text'", t_azp_ibn_type_concept,
				d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $this->id . "' AND " .
				d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '5'"
			);
		}

		# Query Sql Select
		final public function sql_controller_type_concept_name() {
			# Seleccionar los registros de la tabla
			return $this->db->select(
				d_azp_ibn_type_concept_t_text . " AS 'lbl_azp_ibn_type_concept_t_text'", t_azp_ibn_type_concept,
				d_azp_ibn_type_concept_t_name . " = '" . $_GET['field_text'] . "' AND " .
				d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '5'"
			);
		}
		
		# Query Sql Select
		final public function sql_azp_ibn_files_insert(string $v_extension, string $v_file, string $v_module, string $v_name, string $v_route, string $v_template) {
			# Array para asignar argumentos o valores a los elementos
			$var_array = array(d_azp_ibn_files_m_temp => '1',);
			# Query Sql Update: Actualizar valores de la tabla segun sus campos
			$this->db->update(t_azp_ibn_files, $var_array, d_azp_ibn_files_m_temp . " = '2'");
			# Array para asignar argumentos o valores a los elementos
			$var_array = array(
				d_azp_ibn_files_m_by_created => $_SESSION[SESS_APP_ID],
				d_azp_ibn_files_m_by_modified => $_SESSION[SESS_APP_ID],
				d_azp_ibn_files_m_date_created => DATE_HOUR,
				d_azp_ibn_files_m_date_modified => DATE_HOUR,
				d_azp_ibn_files_m_deleted => '1',
				d_azp_ibn_files_m_description => '',
				d_azp_ibn_files_m_level => '2',
				d_azp_ibn_files_m_status => '1',
				d_azp_ibn_files_m_temp => '2',
				d_azp_ibn_files_t_extension => $v_extension,
				d_azp_ibn_files_t_file => $v_file,
				d_azp_ibn_files_t_module => $v_module,
				d_azp_ibn_files_t_name => $v_name,
				d_azp_ibn_files_t_route => $v_route,
				d_azp_ibn_files_t_template => $v_template,
			);
			# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
			$this->db->insert(t_azp_ibn_files, $var_array);
		}

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
				
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				
				INNER JOIN " . t_azp_ibn_furniture . " tc_azp_ibn_furniture
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . "
						= tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . "
				
				WHERE tc_azp_ibn_capture." . d_azp_ibn_capture_m_deleted . " = '1'
					AND tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . " = '5'
					AND tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . " = '" . $this->id . "'
				ORDER BY tc_azp_ibn_capture." . d_azp_ibn_capture_id_azp_ibn_capture . " ASC
			");
		}

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
				
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				
				INNER JOIN " . t_azp_ibn_furniture . " tc_azp_ibn_furniture
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . "
						= tc_azp_ibn_furniture." . d_azp_ibn_furniture_id_azp_ibn_furniture . "
				
				WHERE tc_azp_ibn_capture." . d_azp_ibn_capture_id_azp_ibn_capture . " = '" . $this->id . "'
					AND tc_azp_ibn_capture." . d_azp_ibn_capture_m_deleted . " = '1'
				LIMIT 1
			");
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_furniture_file(array $data) {
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

		# Query Sql Update
		final public function sql_azp_ibn_furniture_file(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_furniture_file($data);
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
				$empty_document = 'SALARIOS' . '_' . $empty_detection . '_' . DATE_NUMBER . '_' . HOUR_NUMBER . '.pdf';
				//$empty_namdoc = 'SALARIOS' . '_' . $empty_detection . '_' . $empty_name;
				$empty_namdoc = 'SALARIOS' . '_' . $empty_name;
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
					d_azp_ibn_capture_v_id_azp_ibn_module => '5',
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















		# Query Sql Select
		final public function sql_field_t_acount(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_acount
			);
		}

		# Query Sql Select
		final public function sql_field_t_address(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_address
			);
		}

		# Query Sql Select
		final public function sql_field_t_business_name(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_business_name
			);
		}

		# Query Sql Select
		final public function sql_field_t_city(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_city
			);
		}

		# Query Sql Select
		final public function sql_field_t_comment_legal(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_comment_legal
			);
		}

		# Query Sql Select
		final public function sql_field_t_concept(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_concept
			);
		}

		# Query Sql Select
		final public function sql_field_t_consecutive(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_consecutive
			);
		}

		# Query Sql Select
		final public function sql_field_t_department(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_department
			);
		}

		# Query Sql Select
		final public function sql_field_t_entity(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_entity
			);
		}

		# Query Sql Select
		final public function sql_field_t_full_name(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_full_name
			);
		}

		# Query Sql Select
		final public function sql_field_t_identification(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_identification
			);
		}

		# Query Sql Select
		final public function sql_field_t_limitation(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_limitation
			);
		}

		# Query Sql Select
		final public function sql_field_t_municipality(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_municipality
			);
		}

		# Query Sql Select
		final public function sql_field_t_nit(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_nit
			);
		}

		# Query Sql Select
		final public function sql_field_t_observation(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_observation
			);
		}

		# Query Sql Select
		final public function sql_field_t_phone(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_phone
			);
		}

		# Query Sql Select
		final public function sql_field_t_policy_effective(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_policy_effective
			);
		}

		# Query Sql Select
		final public function sql_field_t_policy_final(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_policy_final
			);
		}

		# Query Sql Select
		final public function sql_field_t_policy_viability(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_policy_viability
			);
		}

		# Query Sql Select
		final public function sql_field_t_salary(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_salary
			);
		}

		# Query Sql Select
		final public function sql_field_t_viable_causal(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_viable_causal
			);
		}

		# Query Sql Select
		final public function sql_field_t_well_option(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_well_option
			);
		}

		# Query Sql Select
		final public function sql_field_t_well_viable(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_furniture,
				d_azp_ibn_furniture_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_furniture_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_furniture_t_well_viable
			);
		}

		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_control_panel(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_control_panel,
				d_azp_ibn_control_panel_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_control_panel_t_code_research
			);
		}

		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_outcome(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_outcome,
				d_azp_ibn_outcome_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_outcome_t_name
			);
		}

		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_rank(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_rank,
				d_azp_ibn_rank_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_rank_t_name
			);
		}

		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_regime(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_regime,
				d_azp_ibn_regime_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_regime_t_name
			);
		}

		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_state(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_state,
				d_azp_ibn_state_v_id_azp_ibn_module . " = '5' AND " .
				d_azp_ibn_state_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_state_t_name
			);
		}

		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_type_affiliate(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_affiliate,
				d_azp_ibn_type_affiliate_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_type_affiliate_t_name
			);
		}

		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_type_concept(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_concept,
				d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '5' AND " .
				d_azp_ibn_type_concept_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_type_concept_t_name
			);
		}

		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_type_contributor(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_contributor,
				d_azp_ibn_type_contributor_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_type_contributor_t_name
			);
		}

		public function __destruct() {
			parent::__destruct();
		}
	}
?>